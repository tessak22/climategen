<?php
/**
 * Copyright 2006 - 2015 TubePress LLC (http://tubepress.com/)
 *
 * This file is part of TubePress Pro.
 *
 * License summary
 *   - Can be used on 1 site, 1 server
 *   - Cannot be resold or distributed
 *   - Commercial use allowed
 *   - Can modify source-code but cannot distribute modifications (derivative works)
 *
 * Please see http://tubepress.com/license for details.
 */

class tubepress_procore_impl_listeners_options_set_ProOptionValidity
{
    /**
     * @var bool
     */
    private $_hasInitialized = false;

    /**
     * @var string[]
     */
    private $_allKnownGallerySourceNames = array();

    /**
     * @var string[]
     */
    private $_allOptionNamesThatWeHandle = array();

    /**
     * @var string
     */
    private $_allKnownGallerySourceNamesAsPipeSeparatedString;

    /**
     * @var tubepress_platform_api_log_LoggerInterface
     */
    private $_logger;

    /**
     * @var tubepress_app_api_options_ReferenceInterface
     */
    private $_optionsReference;

    /**
     * @var tubepress_lib_api_translation_TranslatorInterface
     */
    private $_translator;

    /**
     * @var tubepress_app_impl_listeners_options_set_BasicOptionValidity
     */
    private $_delegate;

    /**
     * @var tubepress_lib_api_event_EventDispatcherInterface
     */
    private $_eventDispatcher;

    /**
     * @var tubepress_app_api_media_MediaProviderInterface[]
     */
    private $_mediaProviders;

    public function __construct(tubepress_platform_api_log_LoggerInterface                   $logger,
                                tubepress_app_api_options_ReferenceInterface                 $reference,
                                tubepress_lib_api_event_EventDispatcherInterface             $eventDispatcher,
                                tubepress_lib_api_translation_TranslatorInterface            $translator,
                                tubepress_app_impl_listeners_options_set_BasicOptionValidity $delegate)
    {
        $this->_logger           = $logger;
        $this->_optionsReference = $reference;
        $this->_eventDispatcher  = $eventDispatcher;
        $this->_translator       = $translator;
        $this->_delegate         = $delegate;
    }

    public function onOption(tubepress_lib_api_event_EventInterface $event)
    {
        $this->_initialize();

        $optionName  = $event->getArgument('optionName');
        $optionValue = $event->getArgument('optionValue');
        $errors      = $event->getSubject();
        $newError    = null;

        $originalProblemMessage = $this->_getProblemMessageFromDelegate($optionName, $optionValue);

        if ($originalProblemMessage === null || !$this->_isOptionThatWeHandle($optionName)) {

            $newError = $originalProblemMessage;

        } else {

            $newError = $this->_getProProblemMessage($optionName, $optionValue);
        }

        if ($newError) {

            $errors[] = $newError;

            $event->setSubject($errors);
        }
    }

    public function setMediaProviders(array $providers)
    {
        $this->_mediaProviders = $providers;
    }

    private function _isOptionThatWeHandle($optionName)
    {
        return in_array($optionName, $this->_allOptionNamesThatWeHandle);
    }

    private function _getProProblemMessage($optionName, $candidate)
    {
        if ($optionName === tubepress_app_api_options_Names::GALLERY_SOURCE) {

            return $this->_getProblemMessageForMode($candidate);
        }

        return $this->_getProblemMessageForSourceValue($optionName, $candidate);
    }

    private function _getProblemMessageForSourceValue($optionName, $candidate)
    {
        $exploded = preg_split('/\s*\+\s*/', $candidate);

        foreach ($exploded as $sourceValue) {

            $message = $this->_getProblemMessageFromDelegate($optionName, $sourceValue);

            if ($message !== null) {

                return $this->_getInvalidValueMessage($optionName);
            }
        }

        //all the checks passed
        return null;
    }

    private function _getProblemMessageForMode($candidate)
    {
        $acceptableValuesString = $this->_allKnownGallerySourceNamesAsPipeSeparatedString;

        return $this->_matchesRegex(

            tubepress_app_api_options_Names::GALLERY_SOURCE,
            "/^(?:$acceptableValuesString)(?:\s*\+\s*(?:$acceptableValuesString))*$/",
            $candidate
        );
    }

    private function _initialize()
    {
        if ($this->_hasInitialized) {

            return;
        }

        foreach ($this->_mediaProviders as $videoProvider) {

            $this->_allKnownGallerySourceNames = array_merge($this->_allKnownGallerySourceNames, $videoProvider->getGallerySourceNames());
        }

        $this->_allKnownGallerySourceNamesAsPipeSeparatedString = implode('|', $this->_allKnownGallerySourceNames);

        $gallerySourcesWithValues = array();

        foreach ($this->_allKnownGallerySourceNames as $gallerySourceName) {

            if ($this->_optionsReference->optionExists($gallerySourceName . 'Value')) {

                array_push($gallerySourcesWithValues, $gallerySourceName . 'Value');
            }
        }

        $this->_allOptionNamesThatWeHandle = array_merge(array(tubepress_app_api_options_Names::GALLERY_SOURCE), $gallerySourcesWithValues);
        $this->_hasInitialized             = true;
    }

    private function _matchesRegex($optionName, $regex, $candidate)
    {
        if (preg_match_all($regex, $candidate, $matches) === 1) {

            return null;
        }

        return $this->_getInvalidValueMessage($optionName);
    }

    private function _getInvalidValueMessage($optionName)
    {
        $untranslatedLabel = $this->_optionsReference->getUntranslatedLabel($optionName);
        $translatedLabel   = $this->_translator->trans($untranslatedLabel);
        $translatedError   = $this->_translator->trans('Invalid value supplied for "%s".');

        return sprintf($translatedError, $translatedLabel);
    }

    private function _getProblemMessageFromDelegate($optionName, $optionValue)
    {
        $event = $this->_eventDispatcher->newEventInstance(array(), array(
            'optionName'  => $optionName,
            'optionValue' => $optionValue,
        ));

        $this->_delegate->onOption($event);

        $subject = $event->getSubject();

        if (count($subject) > 0) {

            return $subject[0];
        }

        return null;
    }
}
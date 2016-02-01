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

/**
 * HTML generation strategy that generates HTML for a single video + meta info.
 */
class tubepress_procore_impl_listeners_search_AjaxSearchListener
{
    /**
     * @var tubepress_platform_api_log_LoggerInterface
     */
    private $_logger;

    /**
     * @var tubepress_app_api_options_ContextInterface
     */
    private $_context;

    /**
     * @var tubepress_lib_api_template_TemplatingInterface
     */
    private $_templating;

    /**
     * @var tubepress_lib_api_event_EventDispatcherInterface
     */
    private $_eventDispatcher;

    /**
     * @var tubepress_app_api_options_ReferenceInterface
     */
    private $_optionsReference;

    public function __construct(tubepress_platform_api_log_LoggerInterface       $logger,
                                tubepress_app_api_options_ContextInterface       $context,
                                tubepress_lib_api_template_TemplatingInterface   $templating,
                                tubepress_lib_api_event_EventDispatcherInterface $eventDispatcher,
                                tubepress_app_api_options_ReferenceInterface     $optionsReferece)
    {
        $this->_logger           = $logger;
        $this->_context          = $context;
        $this->_templating       = $templating;
        $this->_eventDispatcher  = $eventDispatcher;
        $this->_optionsReference = $optionsReferece;
    }

    public function onHtmlGeneration(tubepress_lib_api_event_EventInterface $event)
    {
        $requestedOutput = $this->_context->get(tubepress_app_api_options_Names::HTML_OUTPUT);

        if ($requestedOutput !== tubepress_app_api_options_AcceptableValues::OUTPUT_AJAX_SEARCH_INPUT) {

            return;
        }

        if ($this->_logger->isEnabled()) {

            $this->_logger->debug('Ajax search input requested');
        }

        $widgetId = $this->_context->get(tubepress_app_api_options_Names::HTML_GALLERY_ID);

        if ($widgetId == '') {

            $widgetId = mt_rand();
            $this->_context->setEphemeralOption(tubepress_app_api_options_Names::HTML_GALLERY_ID, $widgetId);
        }

        $html = $this->_templating->renderTemplate('search/ajax-input', array(
            tubepress_app_api_template_VariableNames::HTML_WIDGET_ID => $widgetId,
            'galleryOptionsAsJson'                                   => $this->_getGalleryInitParams(),
        ));

        $event->setSubject($html);
        $event->stopPropagation();
    }

    private function _getGalleryInitParams()
    {
        $this->_context->setEphemeralOption(tubepress_app_api_options_Names::HTML_OUTPUT, tubepress_app_api_options_AcceptableValues::OUTPUT_SEARCH_RESULTS);
        $this->_context->setEphemeralOption(tubepress_app_api_options_Names::GALLERY_AJAX_PAGINATION, true);

        $jsEvent = $this->_eventDispatcher->newEventInstance(array());
        $this->_eventDispatcher->dispatch(tubepress_app_api_event_Events::GALLERY_INIT_JS, $jsEvent);

        $args = $jsEvent->getSubject();

        $this->_deepConvertBooleans($args);

        return json_encode($args);
    }

    private function _deepConvertBooleans(array &$candidate)
    {
        foreach ($candidate as $key => $value) {

            if (is_array($value)) {

                $this->_deepConvertBooleans($value);
                $candidate[$key] = $value;
            }

            if (!$this->_optionsReference->optionExists($key)) {

                continue;
            }

            if (!$this->_optionsReference->isBoolean($key)) {

                continue;
            }

            $candidate[$key] = (bool) $value;
        }
    }
}

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
 * Gettext functionality for TubePress
 */
class tubepress_procore_impl_translator_GettextTranslator extends tubepress_lib_impl_translation_AbstractTranslator
{
    private $_isInitialized = false;

    /**
     * @var tubepress_platform_api_log_LoggerInterface
     */
    private $_logger;

    /**
     * @var tubepress_app_api_options_ContextInterface
     */
    private $_context;

    public function __construct(tubepress_platform_api_log_LoggerInterface $logger,
                                tubepress_app_api_options_ContextInterface $context)
    {
        $this->_logger  = $logger;
        $this->_context = $context;
    }

    /**
     * Translates the given message.
     *
     * @param string      $id     The message id (may also be an object that can be cast to string)
     * @param string|null $domain The domain for the message or null to use the default
     * @param string|null $locale The locale or null to use the default
     *
     * @throws InvalidArgumentException If the locale contains invalid characters
     *
     * @return string The translated string
     *
     * @api
     */
    protected function translate($id, $domain = null, $locale = null)
    {
        if (!$this->_isInitialized) {

            $this->_initialize();
        }

        return $id == '' ? '' : _gettext($id);
    }

    private function _initialize()
    {
        $isDebugEnabled = $this->_logger->isEnabled();

        require dirname(__FILE__) . '/phpgettext/gettext.inc';

        $lang = $this->_context->get(tubepress_procore_api_const_ProOptionNames::LANG);

        if (!$lang || $lang === 'en_US') {

            if (defined('LANG')) {

                if ($isDebugEnabled) {

                    $this->_logger->debug(sprintf('LANG defined as %s.', LANG));
                }

                $lang = LANG === '' ? 'en' : LANG;

            } else {

                if ($isDebugEnabled) {

                    $this->_logger->debug('LANG undefined. Reverting to \'en\'');
                }

                $lang = 'en';
            }

        } else {

            if ($isDebugEnabled) {

                $this->_logger->debug('Lang requested to be ' . $lang);
            }

            @putenv("LANG=$lang");
        }

        if ($isDebugEnabled) {

            $this->_logger->debug(sprintf('Locales supported for language "%s": %s', $lang, implode(', ', get_list_of_locales($lang))));
        }

        $textDir = realpath(TUBEPRESS_ROOT . '/src/translations');

        if ($isDebugEnabled) {

            $this->_logger->debug(sprintf('Binding text domain to %s', $textDir));
        }

        @putenv("LC_ALL=" . $lang);
        _setlocale(LC_ALL, $lang);
        _bindtextdomain('tubepress', $textDir);
        _textdomain('tubepress');
        _bind_textdomain_codeset('tubepress', 'UTF-8');

        $this->_isInitialized = true;
    }

    /**
     * Sets the current locale.
     *
     * @param string $locale The locale
     *
     * @throws InvalidArgumentException If the locale contains invalid characters
     *
     * @api
     */
    public function setLocale($locale)
    {
        _setlocale(LC_ALL, $locale);
    }

    /**
     * Returns the current locale.
     *
     * @return string The locale
     *
     * @api
     */
    public function getLocale()
    {
        return _get_default_locale('');
    }
}

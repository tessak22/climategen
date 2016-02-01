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
 * Generates TubePress's output via Ajax.
 */
class tubepress_procore_impl_listeners_http_ajax_ShortcodeAjaxCommand
{
    /**
     * @var tubepress_app_api_options_ContextInterface
     */
    private $_context;

    /**
     * @var tubepress_lib_api_http_RequestParametersInterface
     */
    private $_requestParams;

    /**
     * @var tubepress_app_api_html_HtmlGeneratorInterface
     */
    private $_htmlGenerator;

    /**
     * @var tubepress_lib_api_http_ResponseCodeInterface
     */
    private $_responseCode;

    public function __construct(tubepress_app_api_options_ContextInterface        $context,
                                tubepress_lib_api_http_RequestParametersInterface $requestParams,
                                tubepress_app_api_html_HtmlGeneratorInterface     $htmlGenerator,
                                tubepress_lib_api_http_ResponseCodeInterface      $responseCode)
    {
        $this->_context       = $context;
        $this->_requestParams = $requestParams;
        $this->_htmlGenerator = $htmlGenerator;
        $this->_responseCode  = $responseCode;
    }

    public function onAjax(tubepress_lib_api_event_EventInterface $ajaxEvent)
    {
        if ($this->_requestParams->hasParam('tubepress_options')) {

            $nvpMap = $this->_requestParams->getParamValue('tubepress_options');
            $this->_context->setEphemeralOptions($nvpMap);
        }

        $html = $this->_htmlGenerator->getHtml();

        $this->_responseCode->setResponseCode(200);

        print $html;

        $ajaxEvent->setArgument('handled', true);
    }
}
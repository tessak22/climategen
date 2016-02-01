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
 * Registers all the Pro Core services.
 */
class tubepress_procore_ioc_ProCoreExtension implements tubepress_platform_api_ioc_ContainerExtensionInterface
{

    /**
     * Allows extensions to load services into the TubePress IOC container.
     *
     * @param tubepress_platform_api_ioc_ContainerBuilderInterface $containerBuilder A tubepress_platform_api_ioc_ContainerInterface instance.
     *
     * @return void
     *
     * @api
     * @since 3.1.0
     */
    public function load(tubepress_platform_api_ioc_ContainerBuilderInterface $containerBuilder)
    {
        $this->_registerProService($containerBuilder);
        $this->_registerListeners($containerBuilder);
        $this->_registerOptions($containerBuilder);
        $this->_registerPlayerLocations($containerBuilder);
    }

    private function _registerProService(tubepress_platform_api_ioc_ContainerBuilderInterface $containerBuilder)
    {
        $containerBuilder->register(
            tubepress_procore_api_TubePressProInterface::_,
            'tubepress_procore_impl_TubePressProBackend'
        )->addArgument(new tubepress_platform_api_ioc_Reference(tubepress_app_api_environment_EnvironmentInterface::_))
         ->addArgument(new tubepress_platform_api_ioc_Reference(tubepress_app_api_html_HtmlGeneratorInterface::_))
         ->addArgument(new tubepress_platform_api_ioc_Reference(tubepress_app_api_options_ContextInterface::_))
         ->addArgument(new tubepress_platform_api_ioc_Reference(tubepress_app_api_options_PersistenceInterface::_))
         ->addArgument(new tubepress_platform_api_ioc_Reference(tubepress_app_api_shortcode_ParserInterface::_));
    }

    private function _registerOptions(tubepress_platform_api_ioc_ContainerBuilderInterface $containerBuilder)
    {
        $containerBuilder->register(
            'tubepress_app_api_options_Reference__procore',
            'tubepress_app_api_options_Reference'
        )->addTag(tubepress_app_api_options_ReferenceInterface::_)
         ->addArgument(array(

            tubepress_app_api_options_Reference::PROPERTY_DEFAULT_VALUE => array(
                tubepress_procore_api_const_ProOptionNames::LANG                  => 'en_US',
                tubepress_procore_api_const_ProOptionNames::SEARCH_RESULTS_DOM_ID => null,
            ),

            tubepress_app_api_options_Reference::PROPERTY_UNTRANSLATED_LABEL => array(
                tubepress_procore_api_const_ProOptionNames::LANG => 'Preferred language',
            ),

        ))->addArgument(array(

            tubepress_app_api_options_Reference::PROPERTY_PRO_ONLY => array(
                tubepress_procore_api_const_ProOptionNames::LANG,
                tubepress_procore_api_const_ProOptionNames::SEARCH_RESULTS_DOM_ID,
            ),
        ));
    }

    private function _registerPlayerLocations(tubepress_platform_api_ioc_ContainerBuilderInterface $containerBuilder)
    {
        $containerBuilder->register(
            'tubepress_app_impl_player_JsPlayerLocation__fancybox',
            'tubepress_app_impl_player_JsPlayerLocation'
        )->addArgument(tubepress_app_api_options_AcceptableValues::PLAYER_LOC_FANCYBOX)
         ->addArgument('with Fancybox')                    //>(translatable)<
         ->addArgument('gallery/players/fancybox/static')
         ->addArgument('gallery/players/fancybox/ajax')
         ->addTag('tubepress_app_api_player_PlayerLocationInterface');

        $containerBuilder->register(
            'tubepress_app_impl_player_JsPlayerLocation__tinybox',
            'tubepress_app_impl_player_JsPlayerLocation'
        )->addArgument(tubepress_app_api_options_AcceptableValues::PLAYER_LOC_TINYBOX)
         ->addArgument('with TinyBox')                    //>(translatable)<
         ->addArgument('gallery/players/tinybox/static')
         ->addArgument('gallery/players/tinybox/ajax')
         ->addTag('tubepress_app_api_player_PlayerLocationInterface');
    }

    private function _registerListeners(tubepress_platform_api_ioc_ContainerBuilderInterface $containerBuilder)
    {
        $containerBuilder->register(
            'tubepress_procore_impl_listeners_gallery_ProGalleryListener',
            'tubepress_procore_impl_listeners_gallery_ProGalleryListener'
        )->addArgument(new tubepress_platform_api_ioc_Reference(tubepress_app_api_options_ContextInterface::_))
         ->addTag(tubepress_lib_api_ioc_ServiceTags::EVENT_LISTENER, array(
            'event'    => tubepress_app_api_event_Events::TEMPLATE_POST_RENDER . '.gallery/main',
            'method'   => 'onPostGalleryTemplateRender',
            'priority' => 99000,
        ))->addTag(tubepress_lib_api_ioc_ServiceTags::EVENT_LISTENER, array(
            'event'    => tubepress_app_api_event_Events::GALLERY_INIT_JS,
            'method'   => 'onGalleryInitJs',
            'priority' => 92000,
        ));

        $containerBuilder->register(
            'tubepress_procore_impl_listeners_html_generation_DetachedPlayerListener',
            'tubepress_procore_impl_listeners_html_generation_DetachedPlayerListener'
        )->addArgument(new tubepress_platform_api_ioc_Reference(tubepress_app_api_options_ContextInterface::_))
         ->addArgument(new tubepress_platform_api_ioc_Reference(tubepress_lib_api_template_TemplatingInterface::_))
         ->addArgument(new tubepress_platform_api_ioc_Reference(tubepress_app_api_media_CollectorInterface::_))
         ->addArgument(new tubepress_platform_api_ioc_Reference(tubepress_lib_api_http_RequestParametersInterface::_))
         ->addTag('tubepress_app_api_player_PlayerLocationInterface')
         ->addTag(tubepress_lib_api_ioc_ServiceTags::EVENT_LISTENER, array(
             'event'    => tubepress_app_api_event_Events::HTML_GENERATION,
             'method'   => 'onHtmlGeneration',
             'priority' => 94000,
         ))->addTag(tubepress_lib_api_ioc_ServiceTags::EVENT_LISTENER, array(
             'event'    => tubepress_app_api_event_Events::TEMPLATE_PRE_RENDER . '.gallery/main',
             'method'   => 'onGalleryTemplatePreRender',
             'priority' => 93000,
        ));

        $containerBuilder->register(
            'tubepress_procore_impl_listeners_http_ajax_ShortcodeAjaxCommand',
            'tubepress_procore_impl_listeners_http_ajax_ShortcodeAjaxCommand'
        )->addArgument(new tubepress_platform_api_ioc_Reference(tubepress_app_api_options_ContextInterface::_))
         ->addArgument(new tubepress_platform_api_ioc_Reference(tubepress_lib_api_http_RequestParametersInterface::_))
         ->addArgument(new tubepress_platform_api_ioc_Reference(tubepress_app_api_html_HtmlGeneratorInterface::_))
         ->addArgument(new tubepress_platform_api_ioc_Reference(tubepress_lib_api_http_ResponseCodeInterface::_))
         ->addTag(tubepress_lib_api_ioc_ServiceTags::EVENT_LISTENER, array(
            'event'    => tubepress_app_api_event_Events::HTTP_AJAX . '.shortcode',
            'method'   => 'onAjax',
            'priority' => 100000,
        ));

        $containerBuilder->register(
            'tubepress_procore_impl_listeners_search_AjaxSearchListener',
            'tubepress_procore_impl_listeners_search_AjaxSearchListener'
        )->addArgument(new tubepress_platform_api_ioc_Reference(tubepress_platform_api_log_LoggerInterface::_))
         ->addArgument(new tubepress_platform_api_ioc_Reference(tubepress_app_api_options_ContextInterface::_))
         ->addArgument(new tubepress_platform_api_ioc_Reference(tubepress_lib_api_template_TemplatingInterface::_))
         ->addArgument(new tubepress_platform_api_ioc_Reference(tubepress_lib_api_event_EventDispatcherInterface::_))
         ->addArgument(new tubepress_platform_api_ioc_Reference(tubepress_app_api_options_ReferenceInterface::_))
         ->addTag(tubepress_lib_api_ioc_ServiceTags::EVENT_LISTENER, array(
            'event'     => tubepress_app_api_event_Events::HTML_GENERATION,
            'method'   => 'onHtmlGeneration',
            'priority' => 100000,
        ));

        $containerBuilder->register(
            'tubepress_procore_impl_listeners_media_MultipleSourcesCollectionListener',
            'tubepress_procore_impl_listeners_media_MultipleSourcesCollectionListener'
        )->addArgument(new tubepress_platform_api_ioc_Reference('tubepress_procore_impl_listeners_media_MultipleSourcesCollectionListener.inner'))
         ->addArgument(new tubepress_platform_api_ioc_Reference(tubepress_platform_api_log_LoggerInterface::_))
         ->addArgument(new tubepress_platform_api_ioc_Reference(tubepress_app_api_options_ContextInterface::_))
         ->addArgument(new tubepress_platform_api_ioc_Reference(tubepress_app_api_options_ReferenceInterface::_))
         ->addArgument(new tubepress_platform_api_ioc_Reference(tubepress_lib_api_event_EventDispatcherInterface::_))
         ->addTag(tubepress_lib_api_ioc_ServiceTags::TAGGED_SERVICES_CONSUMER, array(
             'tag' => tubepress_app_api_media_MediaProviderInterface::__,
             'method' => 'setMediaProviders',
         ))->setDecoratedService('tubepress_app_impl_listeners_media_CollectionListener');

        $containerBuilder->register(
            'tubepress_procore_impl_listeners_options_set_ProOptionValidity',
            'tubepress_procore_impl_listeners_options_set_ProOptionValidity'
        )->addArgument(new tubepress_platform_api_ioc_Reference(tubepress_platform_api_log_LoggerInterface::_))
         ->addArgument(new tubepress_platform_api_ioc_Reference(tubepress_app_api_options_ReferenceInterface::_))
         ->addArgument(new tubepress_platform_api_ioc_Reference(tubepress_lib_api_event_EventDispatcherInterface::_))
         ->addArgument(new tubepress_platform_api_ioc_Reference(tubepress_lib_api_translation_TranslatorInterface::_))
         ->addArgument(new tubepress_platform_api_ioc_Reference('tubepress_procore_impl_listeners_options_set_ProOptionValidity.inner'))
         ->addTag(tubepress_lib_api_ioc_ServiceTags::TAGGED_SERVICES_CONSUMER, array(
            'tag' => tubepress_app_api_media_MediaProviderInterface::__,
            'method' => 'setMediaProviders',
         ))->setDecoratedService('tubepress_app_impl_listeners_options_set_BasicOptionValidity');

        $fixedValuesMap = array(
            tubepress_procore_api_const_ProOptionNames::LANG => array(
                'en_US'    => 'English (US)',
                'ar'       => 'Arabic',
                'zh_CN'    => 'Chinese (Simplified)',
                'zh_TW'    => 'Chinese (Traditional)',
                'fi'       => 'Finnish',
                'fr_FR'    => 'French',
                'de_DE'    => 'German',
                'el'       => 'Greek',
                'he_IL'    => 'Hebrew',
                'hi_IN'    => 'Hindi',
                'it_IT'    => 'Italian',
                'ja'       => 'Japanese',
                'ko_KR'    => 'Korean',
                'nb_NO'    => 'Norwegian Bokmål',
                'fa_IR'    => 'Persian',
                'pl_PL'    => 'Polish',
                'pt_BR'    => 'Portuguese (Brazil)',
                'ru_RU'    => 'Russian',
                'es_MX'    => 'Spanish (Mexico)',
                'es_ES'    => 'Spanish (Spain)',
                'sv_SE'    => 'Swedish',
            ),
        );

        foreach ($fixedValuesMap as $optionName => $valuesMap) {
            $containerBuilder->register(
                'fixed_values.' . $optionName,
                'tubepress_app_api_listeners_options_FixedValuesListener'
            )->addArgument($valuesMap)
             ->addTag(tubepress_lib_api_ioc_ServiceTags::EVENT_LISTENER, array(
                'priority' => 100000,
                'event'    => tubepress_app_api_event_Events::OPTION_ACCEPTABLE_VALUES . ".$optionName",
                'method'   => 'onAcceptableValues'
            ));
        }
    }
}
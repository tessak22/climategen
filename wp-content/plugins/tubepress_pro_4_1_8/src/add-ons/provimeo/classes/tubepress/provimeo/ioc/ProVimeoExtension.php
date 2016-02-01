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

class tubepress_provimeo_ioc_ProVimeoExtension implements tubepress_platform_api_ioc_ContainerExtensionInterface
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
        $containerBuilder->register(

            'tubepress_procore_impl_listeners_embedded_PlayerApiJsListener__vimeo',
            'tubepress_procore_impl_listeners_embedded_PlayerApiJsListener'
        )->addArgument('tubePressVimeoPlayerApi')
         ->addArgument('web/js/vimeo-player-api.js')
         ->addTag(tubepress_lib_api_ioc_ServiceTags::EVENT_LISTENER, array(
            'event'    => tubepress_app_api_event_Events::TEMPLATE_POST_RENDER . '.single/embedded/vimeo_v2',
            'method'   => 'onEmbeddedHtml',
            'priority' => 100000
        ));

        $containerBuilder->register(

            'tubepress_provimeo_impl_listeners_embedded_VimeoEmbeddedPlayerApiListener',
            'tubepress_provimeo_impl_listeners_embedded_VimeoEmbeddedPlayerApiListener'
        )->addArgument(new tubepress_platform_api_ioc_Reference(tubepress_platform_api_url_UrlFactoryInterface::_))
         ->addTag(tubepress_lib_api_ioc_ServiceTags::EVENT_LISTENER, array(
            'event'    => tubepress_app_api_event_Events::TEMPLATE_POST_RENDER . '.single/embedded/vimeo_v2',
            'method'   => 'onEmbeddedHtml',
            'priority' => 98000
        ));

        $containerBuilder->register(
            'tubepress_provimeo_impl_listeners_media_ProHttpItemListener',
            'tubepress_provimeo_impl_listeners_media_ProHttpItemListener'
        )->addArgument(new tubepress_platform_api_ioc_Reference(tubepress_app_api_options_ContextInterface::_))
         ->addArgument(new tubepress_platform_api_ioc_Reference(tubepress_platform_api_util_StringUtilsInterface::_))
         ->addArgument(new tubepress_platform_api_ioc_Reference(tubepress_lib_api_array_ArrayReaderInterface::_))
         ->addTag(tubepress_lib_api_ioc_ServiceTags::EVENT_LISTENER, array(
             'event'    => tubepress_app_api_event_Events::MEDIA_ITEM_HTTP_NEW . '.vimeo_v2',
             'method'   => 'onVideoConstruction',
             'priority' => 98000
        ));
    }
}
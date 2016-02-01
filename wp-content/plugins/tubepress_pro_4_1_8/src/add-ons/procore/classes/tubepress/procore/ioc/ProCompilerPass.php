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
class tubepress_procore_ioc_ProCompilerPass implements tubepress_platform_api_ioc_CompilerPassInterface
{
    /**
     * Provides add-ons with the ability to modify the TubePress IOC container
     * before it is put into production.
     *
     * @param tubepress_platform_api_ioc_ContainerBuilderInterface $containerBuilder The core IOC container.
     *
     * @api
     * @since 3.1.0
     */
    public function process(tubepress_platform_api_ioc_ContainerBuilderInterface $containerBuilder)
    {
        $this->_registerPersistenceBackend($containerBuilder);
        $this->_registerTranslator($containerBuilder);
        $this->_invoke($containerBuilder);
        $this->_markAsPro($containerBuilder);
    }

    private function _registerPersistenceBackend(tubepress_platform_api_ioc_ContainerBuilderInterface $containerBuilder)
    {
        if (!$containerBuilder->has(tubepress_app_api_options_PersistenceBackendInterface::_)) {

            $containerBuilder->register(
                tubepress_app_api_options_PersistenceBackendInterface::_,
                'tubepress_procore_impl_options_MemoryPersistenceBackend'
            )->addArgument(new tubepress_platform_api_ioc_Reference(tubepress_platform_api_boot_BootSettingsInterface::_));
        }
    }

    private function _registerTranslator(tubepress_platform_api_ioc_ContainerBuilderInterface $containerBuilder)
    {
        if (!$containerBuilder->has(tubepress_lib_api_translation_TranslatorInterface::_)) {

            $containerBuilder->register(
                tubepress_lib_api_translation_TranslatorInterface::_,
                'tubepress_procore_impl_translator_GettextTranslator'
            )->addArgument(new tubepress_platform_api_ioc_Reference(tubepress_platform_api_log_LoggerInterface::_))
             ->addArgument(new tubepress_platform_api_ioc_Reference(tubepress_app_api_options_ContextInterface::_));
        }
    }

    private function _invoke(tubepress_platform_api_ioc_ContainerBuilderInterface $containerBuilder)
    {
        $services = array(
            'tubepress_youtube3_impl_media_FeedHandler',
            'tubepress_vimeo2_impl_media_FeedHandler',
            'tubepress_app_impl_listeners_media_PageListener',
        );

        foreach ($services as $serviceId) {

            if ($containerBuilder->hasDefinition($serviceId)) {

                $def = $containerBuilder->getDefinition($serviceId);
                $def->addMethodCall('__invoke');
            }
        }
    }

    private function _markAsPro(tubepress_platform_api_ioc_ContainerBuilderInterface $containerBuilder)
    {
        if ($containerBuilder->hasDefinition(tubepress_app_api_environment_EnvironmentInterface::_)) {

            $def = $containerBuilder->getDefinition(tubepress_app_api_environment_EnvironmentInterface::_);
            $def->addMethodCall('markAsPro');
        }
    }
}
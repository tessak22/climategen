<?php 
/**
 * For performance purposes, this is a concatenation of the following 115 classes:
 *
 *		ehough_iconic_ContainerInterface
 *		ehough_iconic_IntrospectableContainerInterface
 *		ehough_iconic_Container
 *		tubepress_platform_impl_boot_helper_ContainerSupplier
 *		tubepress_platform_api_boot_BootSettingsInterface
 *		tubepress_platform_impl_boot_BootSettings
 *		tubepress_platform_api_ioc_ContainerInterface
 *		tubepress_platform_impl_ioc_Container
 *		tubepress_platform_api_log_LoggerInterface
 *		tubepress_platform_impl_log_BootLogger
 *		ehough_filesystem_FilesystemInterface
 *		ehough_filesystem_Filesystem
 *		ehough_templating_EngineInterface
 *		ehough_templating_StreamingEngineInterface
 *		ehough_templating_DelegatingEngine
 *		ehough_templating_loader_LoaderInterface
 *		ehough_templating_PhpEngine
 *		ehough_templating_TemplateNameParserInterface
 *		ehough_templating_TemplateNameParser
 *		ehough_templating_TemplateReferenceInterface
 *		ehough_templating_TemplateReference
 *		ehough_tickertape_EventDispatcherInterface
 *		ehough_tickertape_EventDispatcher
 *		ehough_tickertape_ContainerAwareEventDispatcher
 *		ehough_tickertape_Event
 *		ehough_tickertape_GenericEvent
 *		puzzle_AbstractHasData
 *		puzzle_ToArrayInterface
 *		puzzle_Collection
 *		puzzle_Query
 *		puzzle_Url
 *		tubepress_app_api_environment_EnvironmentInterface
 *		tubepress_app_api_event_Events
 *		tubepress_app_api_html_HtmlGeneratorInterface
 *		tubepress_app_api_options_ContextInterface
 *		tubepress_app_api_options_Names
 *		tubepress_app_api_options_PersistenceBackendInterface
 *		tubepress_app_api_options_PersistenceInterface
 *		tubepress_app_api_options_ReferenceInterface
 *		tubepress_app_api_options_Reference
 *		tubepress_app_api_shortcode_ParserInterface
 *		tubepress_platform_api_contrib_ContributableInterface
 *		tubepress_app_api_theme_ThemeInterface
 *		tubepress_app_impl_environment_Environment
 *		tubepress_app_impl_html_CssAndJsGenerationHelper
 *		tubepress_app_impl_html_HtmlGenerator
 *		tubepress_lib_api_http_AjaxInterface
 *		tubepress_app_impl_http_PrimaryAjaxHandler
 *		tubepress_lib_api_http_RequestParametersInterface
 *		tubepress_app_impl_http_RequestParameters
 *		tubepress_app_impl_listeners_html_jsconfig_BaseUrlSetter
 *		tubepress_app_impl_listeners_template_post_CssJsPostListener
 *		tubepress_app_impl_log_HtmlLogger
 *		tubepress_app_impl_options_Context
 *		tubepress_app_impl_options_DispatchingReference
 *		tubepress_app_impl_options_Persistence
 *		tubepress_app_impl_shortcode_Parser
 *		tubepress_app_impl_template_DelegatingEngine
 *		tubepress_app_impl_template_php_Support
 *		tubepress_lib_api_template_TemplatingInterface
 *		tubepress_app_impl_template_TemplatingService
 *		tubepress_app_impl_template_ThemeTemplateLocator
 *		tubepress_app_impl_template_twig_Engine
 *		tubepress_app_impl_template_twig_EnvironmentBuilder
 *		Twig_ExistsLoaderInterface
 *		Twig_LoaderInterface
 *		Twig_Loader_Filesystem
 *		tubepress_app_impl_template_twig_FsLoader
 *		tubepress_app_impl_template_twig_ThemeLoader
 *		tubepress_platform_impl_contrib_AbstractContributable
 *		tubepress_app_impl_theme_AbstractTheme
 *		tubepress_app_impl_theme_CurrentThemeService
 *		tubepress_app_impl_theme_FilesystemTheme
 *		tubepress_lib_api_event_EventDispatcherInterface
 *		tubepress_lib_api_event_EventInterface
 *		tubepress_lib_api_http_ResponseCodeInterface
 *		tubepress_lib_api_translation_TranslatorInterface
 *		tubepress_lib_impl_event_tickertape_EventBase
 *		tubepress_lib_impl_event_tickertape_EventDispatcher
 *		tubepress_lib_impl_http_ResponseCode
 *		tubepress_platform_api_contrib_RegistryInterface
 *		tubepress_platform_api_collection_MapInterface
 *		tubepress_platform_api_url_QueryInterface
 *		tubepress_platform_api_url_UrlFactoryInterface
 *		tubepress_platform_api_url_UrlInterface
 *		tubepress_platform_api_util_StringUtilsInterface
 *		tubepress_platform_api_version_Version
 *		tubepress_platform_impl_boot_helper_uncached_contrib_SerializedRegistry
 *		tubepress_platform_impl_boot_helper_uncached_Serializer
 *		tubepress_platform_impl_collection_Map
 *		tubepress_platform_impl_url_puzzle_PuzzleBasedQuery
 *		tubepress_platform_impl_url_puzzle_PuzzleBasedUrl
 *		tubepress_platform_impl_url_puzzle_UrlFactory
 *		tubepress_platform_impl_util_StringUtils
 *		tubepress_wordpress_impl_Callback
 *		tubepress_wordpress_impl_listeners_html_WpHtmlListener
 *		tubepress_wordpress_impl_listeners_wp_PublicActionsAndFilters
 *		tubepress_wordpress_impl_options_WpPersistence
 *		tubepress_lib_impl_translation_AbstractTranslator
 *		tubepress_wordpress_impl_translation_WpTranslator
 *		tubepress_wordpress_impl_wp_ActivationHook
 *		tubepress_wordpress_impl_wp_WpFunctions
 *		Twig_Environment
 *		Twig_Error
 *		Twig_Error_Loader
 *		Twig_ExtensionInterface
 *		Twig_Extension
 *		Twig_Extension_Core
 *		Twig_Extension_Escaper
 *		Twig_Extension_Optimizer
 *		Twig_Extension_Staging
 *		Twig_Loader_Chain
 *		Twig_SimpleFilter
 *		Twig_TemplateInterface
 *		Twig_Template
 */

interface ehough_iconic_ContainerInterface
{
const EXCEPTION_ON_INVALID_REFERENCE = 1;
const NULL_ON_INVALID_REFERENCE = 2;
const IGNORE_ON_INVALID_REFERENCE = 3;
const SCOPE_CONTAINER ='container';
const SCOPE_PROTOTYPE ='prototype';
public function set($id, $service, $scope = self::SCOPE_CONTAINER);
public function get($id, $invalidBehavior = self::EXCEPTION_ON_INVALID_REFERENCE);
public function has($id);
public function getParameter($name);
public function hasParameter($name);
public function setParameter($name, $value);
public function enterScope($name);
public function leaveScope($name);
public function addScope(ehough_iconic_ScopeInterface $scope);
public function hasScope($name);
public function isScopeActive($name);
}
interface ehough_iconic_IntrospectableContainerInterface extends ehough_iconic_ContainerInterface
{
public function initialized($id);
}
class ehough_iconic_Container implements ehough_iconic_IntrospectableContainerInterface
{
protected $parameterBag;
protected $services = array();
protected $methodMap = array();
protected $aliases = array();
protected $scopes = array();
protected $scopeChildren = array();
protected $scopedServices = array();
protected $scopeStacks = array();
protected $loading = array();
public function __construct(ehough_iconic_parameterbag_ParameterBagInterface $parameterBag = null)
{
$this->parameterBag = null === $parameterBag ? new ehough_iconic_parameterbag_ParameterBag() : $parameterBag;
$this->set('service_container', $this);
}
public function compile()
{
$this->parameterBag->resolve();
$this->parameterBag = new ehough_iconic_parameterbag_FrozenParameterBag($this->parameterBag->all());
}
public function isFrozen()
{
return $this->parameterBag instanceof ehough_iconic_parameterbag_FrozenParameterBag;
}
public function getParameterBag()
{
return $this->parameterBag;
}
public function getParameter($name)
{
return $this->parameterBag->get($name);
}
public function hasParameter($name)
{
return $this->parameterBag->has($name);
}
public function setParameter($name, $value)
{
$this->parameterBag->set($name, $value);
}
public function set($id, $service, $scope = self::SCOPE_CONTAINER)
{
if (self::SCOPE_PROTOTYPE === $scope) {
throw new ehough_iconic_exception_InvalidArgumentException(sprintf('You cannot set service "%s" of scope "prototype".', $id));
}
$id = strtolower($id);
if ('service_container'=== $id) {
return;
}
if (self::SCOPE_CONTAINER !== $scope) {
if (!isset($this->scopedServices[$scope])) {
throw new ehough_iconic_exception_RuntimeException(sprintf('You cannot set service "%s" of inactive scope.', $id));
}
$this->scopedServices[$scope][$id] = $service;
}
$this->services[$id] = $service;
if (method_exists($this, $method ='synchronize'.strtr($id, array('_'=>'','.'=>'_','\\'=>'_')).'Service')) {
$this->$method();
}
if (self::SCOPE_CONTAINER !== $scope && null === $service) {
unset($this->scopedServices[$scope][$id]);
}
if (null === $service) {
unset($this->services[$id]);
}
}
public function has($id)
{
$id = strtolower($id);
if ('service_container'=== $id) {
return true;
}
return isset($this->services[$id])
|| array_key_exists($id, $this->services)
|| isset($this->aliases[$id])
|| method_exists($this,'get'.strtr($id, array('_'=>'','.'=>'_','\\'=>'_')).'Service')
;
}
public function get($id, $invalidBehavior = self::EXCEPTION_ON_INVALID_REFERENCE)
{
foreach (array(false, true) as $strtolower) {
if ($strtolower) {
$id = strtolower($id);
}
if ('service_container'=== $id) {
return $this;
}
if (isset($this->aliases[$id])) {
$id = $this->aliases[$id];
}
if (isset($this->services[$id]) || array_key_exists($id, $this->services)) {
return $this->services[$id];
}
}
if (isset($this->loading[$id])) {
throw new ehough_iconic_exception_ServiceCircularReferenceException($id, array_keys($this->loading));
}
if (isset($this->methodMap[$id])) {
$method = $this->methodMap[$id];
} elseif (method_exists($this, $method ='get'.strtr($id, array('_'=>'','.'=>'_','\\'=>'_')).'Service')) {
} else {
if (self::EXCEPTION_ON_INVALID_REFERENCE === $invalidBehavior) {
if (!$id) {
throw new ehough_iconic_exception_ServiceNotFoundException($id);
}
$alternatives = array();
foreach (array_keys($this->services) as $key) {
$lev = levenshtein($id, $key);
if ($lev <= strlen($id) / 3 || false !== strpos($key, $id)) {
$alternatives[] = $key;
}
}
throw new ehough_iconic_exception_ServiceNotFoundException($id, null, null, $alternatives);
}
return null;
}
$this->loading[$id] = true;
try {
$service = $this->$method();
} catch (Exception $e) {
unset($this->loading[$id]);
if (array_key_exists($id, $this->services)) {
unset($this->services[$id]);
}
if ($e instanceof ehough_iconic_exception_InactiveScopeException && self::EXCEPTION_ON_INVALID_REFERENCE !== $invalidBehavior) {
return null;
}
throw $e;
}
unset($this->loading[$id]);
return $service;
}
public function initialized($id)
{
$id = strtolower($id);
if ('service_container'=== $id) {
return true;
}
return isset($this->services[$id]) || array_key_exists($id, $this->services);
}
public function getServiceIds()
{
$ids = array();
$r = new ReflectionClass($this);
foreach ($r->getMethods() as $method) {
if (preg_match('/^get(.+)Service$/', $method->name, $match)) {
$ids[] = self::underscore($match[1]);
}
}
$ids[] ='service_container';
return array_unique(array_merge($ids, array_keys($this->services)));
}
public function enterScope($name)
{
if (!isset($this->scopes[$name])) {
throw new ehough_iconic_exception_InvalidArgumentException(sprintf('The scope "%s" does not exist.', $name));
}
if (self::SCOPE_CONTAINER !== $this->scopes[$name] && !isset($this->scopedServices[$this->scopes[$name]])) {
throw new ehough_iconic_exception_RuntimeException(sprintf('The parent scope "%s" must be active when entering this scope.', $this->scopes[$name]));
}
if (isset($this->scopedServices[$name])) {
$services = array($this->services, $name => $this->scopedServices[$name]);
unset($this->scopedServices[$name]);
foreach ($this->scopeChildren[$name] as $child) {
if (isset($this->scopedServices[$child])) {
$services[$child] = $this->scopedServices[$child];
unset($this->scopedServices[$child]);
}
}
$this->services = call_user_func_array('array_diff_key', $services);
array_shift($services);
if (!isset($this->scopeStacks[$name])) {
$this->scopeStacks[$name] = array();
}
array_push($this->scopeStacks[$name], $services);
}
$this->scopedServices[$name] = array();
}
public function leaveScope($name)
{
if (!isset($this->scopedServices[$name])) {
throw new ehough_iconic_exception_InvalidArgumentException(sprintf('The scope "%s" is not active.', $name));
}
$services = array($this->services, $this->scopedServices[$name]);
unset($this->scopedServices[$name]);
foreach ($this->scopeChildren[$name] as $child) {
if (!isset($this->scopedServices[$child])) {
continue;
}
$services[] = $this->scopedServices[$child];
unset($this->scopedServices[$child]);
}
$this->services = call_user_func_array('array_diff_key', $services);
if (isset($this->scopeStacks[$name]) && count($this->scopeStacks[$name]) > 0) {
$services = array_pop($this->scopeStacks[$name]);
$this->scopedServices += $services;
foreach ($services as $array) {
foreach ($array as $id => $service) {
$this->set($id, $service, $name);
}
}
}
}
public function addScope(ehough_iconic_ScopeInterface $scope)
{
$name = $scope->getName();
$parentScope = $scope->getParentName();
if (self::SCOPE_CONTAINER === $name || self::SCOPE_PROTOTYPE === $name) {
throw new ehough_iconic_exception_InvalidArgumentException(sprintf('The scope "%s" is reserved.', $name));
}
if (isset($this->scopes[$name])) {
throw new ehough_iconic_exception_InvalidArgumentException(sprintf('A scope with name "%s" already exists.', $name));
}
if (self::SCOPE_CONTAINER !== $parentScope && !isset($this->scopes[$parentScope])) {
throw new ehough_iconic_exception_InvalidArgumentException(sprintf('The parent scope "%s" does not exist, or is invalid.', $parentScope));
}
$this->scopes[$name] = $parentScope;
$this->scopeChildren[$name] = array();
while ($parentScope !== self::SCOPE_CONTAINER) {
$this->scopeChildren[$parentScope][] = $name;
$parentScope = $this->scopes[$parentScope];
}
}
public function hasScope($name)
{
return isset($this->scopes[$name]);
}
public function isScopeActive($name)
{
return isset($this->scopedServices[$name]);
}
public static function camelize($id)
{
return strtr(ucwords(strtr($id, array('_'=>' ','.'=>'_ ','\\'=>'_ '))), array(' '=>''));
}
public static function underscore($id)
{
return strtolower(preg_replace(array('/([A-Z]+)([A-Z][a-z])/','/([a-z\d])([A-Z])/'), array('\\1_\\2','\\1_\\2'), strtr($id,'_','.')));
}
}
class tubepress_platform_impl_boot_helper_ContainerSupplier
{
private $_logger;
private $_bootSettings;
private $_logEnabled = false;
private $_uncachedContainerSupplier;
private $_temporaryClassLoader;
public function __construct(tubepress_platform_api_log_LoggerInterface $logger,
tubepress_platform_api_boot_BootSettingsInterface $bootSettings)
{
$this->_logger = $logger;
$this->_bootSettings = $bootSettings;
$this->_logEnabled = $logger->isEnabled();
}
public function getServiceContainer()
{
if ($this->_canBootFromCache()) {
if ($this->_logEnabled) {
$this->_logger->debug('System cache is available. Excellent!');
}
try {
return $this->_getTubePressContainerFromCache();
} catch (RuntimeException $e) {
}
}
return $this->_getNewTubePressContainer();
}
private function _canBootFromCache()
{
if ($this->_logEnabled) {
$this->_logger->debug('Determining if system cache is available.');
}
if (!$this->_bootSettings->isSystemCacheEnabled()) {
if ($this->_logEnabled) {
$this->_logger->debug('System cache is disabled by user settings.php');
}
return false;
}
if ($this->_tubePressContainerClassExists()) {
return true;
}
$file = $this->_getPathToContainerCacheFile();
if (!is_readable($file)) {
if ($this->_logEnabled) {
$this->_logger->debug(sprintf('%s is not a readable file.', $file));
}
return false;
}
if ($this->_logEnabled) {
$this->_logger->debug(sprintf('%s is a readable file. Now including it.', $file));
}
require $file;
$iocContainerHit = $this->_tubePressContainerClassExists();
if ($this->_logEnabled) {
if ($iocContainerHit) {
$this->_logger->debug(sprintf('Service container found in cache? %s', $iocContainerHit ?'yes':'no'));
}
}
return $iocContainerHit;
}
private function _getTubePressContainerFromCache()
{
if ($this->_logEnabled) {
$this->_logger->debug('Rehydrating cached service container.');
}
$iconicContainer = new TubePressServiceContainer();
if ($this->_logEnabled) {
$this->_logger->debug('Done rehydrating cached service container.');
}
$tubePressContainer = new tubepress_platform_impl_ioc_Container($iconicContainer);
$this->_setEphemeralServicesToContainer($tubePressContainer, $iconicContainer);
return $tubePressContainer;
}
private function _tubePressContainerClassExists()
{
return class_exists('TubePressServiceContainer', false);
}
private function _getNewTubePressContainer()
{
if ($this->_logEnabled) {
$this->_logger->debug('We cannot boot from cache. Will perform a full boot instead.');
}
$this->_buildTemporaryClassLoader();
$this->_buildUncachedContainerSupplier();
$result = $this->_uncachedContainerSupplier->getNewIconicContainer($this->_bootSettings);
$tubePressContainer = new tubepress_platform_impl_ioc_Container($result);
spl_autoload_unregister(array($this->_temporaryClassLoader,'loadClass'));
$this->_setEphemeralServicesToContainer($tubePressContainer, $result);
return $tubePressContainer;
}
private function _setEphemeralServicesToContainer(tubepress_platform_api_ioc_ContainerInterface $tubePressContainer,
ehough_iconic_ContainerInterface $iconicContainer)
{
$tubePressContainer->set('tubepress_platform_api_ioc_ContainerInterface', $tubePressContainer);
$tubePressContainer->set('ehough_iconic_ContainerInterface', $iconicContainer);
$tubePressContainer->set('tubepress_platform_impl_log_BootLogger', $this->_logger);
$tubePressContainer->set(tubepress_platform_api_boot_BootSettingsInterface::_, $this->_bootSettings);
}
private function _getPathToContainerCacheFile()
{
$cachePath = $this->_bootSettings->getPathToSystemCacheDirectory();
return sprintf('%s%sTubePress-%s-ServiceContainer.php', $cachePath, DIRECTORY_SEPARATOR, TUBEPRESS_VERSION);
}
private function _buildTemporaryClassLoader()
{
if (!class_exists('ehough_pulsar_MapClassLoader', false)) {
require TUBEPRESS_ROOT .'/vendor/ehough/pulsar/src/main/php/ehough/pulsar/MapClassLoader.php';
}
$fullClassMap = require TUBEPRESS_ROOT .'/src/platform/scripts/classloading/classmap.php';
$this->_temporaryClassLoader = new ehough_pulsar_MapClassLoader($fullClassMap);
$this->_temporaryClassLoader->register();
}
private function _buildUncachedContainerSupplier()
{
if (isset($this->_uncachedContainerSupplier)) {
return;
}
$finderFactory = new ehough_finder_FinderFactory();
$urlFactory = new tubepress_platform_impl_url_puzzle_UrlFactory();
$langUtils = new tubepress_platform_impl_util_LangUtils();
$stringUtils = new tubepress_platform_impl_util_StringUtils();
$addonFactory = new tubepress_platform_impl_boot_helper_uncached_contrib_AddonFactory(
$this->_logger, $urlFactory, $langUtils, $stringUtils, $this->_bootSettings
);
$manifestFinder = new tubepress_platform_impl_boot_helper_uncached_contrib_ManifestFinder(
TUBEPRESS_ROOT . DIRECTORY_SEPARATOR .'src'. DIRECTORY_SEPARATOR .'add-ons', DIRECTORY_SEPARATOR .'add-ons','manifest.json',
$this->_logger, $this->_bootSettings, $finderFactory
);
$uncached = new tubepress_platform_impl_boot_helper_uncached_UncachedContainerSupplier(
$this->_logger, $manifestFinder, $addonFactory,
new tubepress_platform_impl_boot_helper_uncached_Compiler($this->_logger),
$this->_bootSettings
);
$this->_uncachedContainerSupplier = $uncached;
}
public function ___setUncachedContainerSupplier(tubepress_platform_impl_boot_helper_uncached_UncachedContainerSupplier $supplier)
{
$this->_uncachedContainerSupplier = $supplier;
}
}
interface tubepress_platform_api_boot_BootSettingsInterface
{
const _ ='tubepress_platform_api_boot_BootSettingsInterface';
function shouldClearCache();
function getAddonBlacklistArray();
function isClassLoaderEnabled();
function isSystemCacheEnabled();
function getPathToSystemCacheDirectory();
function getUserContentDirectory();
function getSerializationEncoding();
function getUrlBase();
function getUrlUserContent();
function getUrlAjaxEndpoint();
}
class tubepress_platform_impl_boot_BootSettings implements tubepress_platform_api_boot_BootSettingsInterface
{
private static $_TOP_LEVEL_KEY_SYSTEM ='system';
private static $_TOP_LEVEL_KEY_USER ='user';
private static $_2ND_LEVEL_KEY_CLASSLOADER ='classloader';
private static $_2ND_LEVEL_KEY_CACHE ='cache';
private static $_2ND_LEVEL_KEY_ADDONS ='add-ons';
private static $_2ND_LEVEL_KEY_URLS ='urls';
private static $_3RD_LEVEL_KEY_CLASSLOADER_ENABLED ='enabled';
private static $_3RD_LEVEL_KEY_CACHE_KILLERKEY ='killerKey';
private static $_3RD_LEVEL_KEY_CACHE_ENABLED ='enabled';
private static $_3RD_LEVEL_KEY_CACHE_DIR ='directory';
private static $_3RD_LEVEL_KEY_ADDONS_BLACKLIST ='blacklist';
private static $_3RD_LEVEL_KEY_SERIALIZATION_ENC ='serializationEncoding';
private static $_3RD_LEVEL_KEY_URL_BASE ='base';
private static $_3RD_LEVEL_KEY_URL_AJAX ='ajax';
private static $_3RD_LEVEL_KEY_URL_USERCONTENT ='userContent';
private $_logger;
private $_hasInitialized = false;
private $_shouldLog = false;
private $_addonBlacklistArray = array();
private $_isClassLoaderEnabled;
private $_isCacheEnabled;
private $_systemCacheKillerKey;
private $_cacheDirectory;
private $_cachedUserContentDir;
private $_serializationEncoding;
private $_urlBase;
private $_urlAjax;
private $_urlUserContent;
private $_urlFactory;
public function __construct(tubepress_platform_api_log_LoggerInterface $logger,
tubepress_platform_api_url_UrlFactoryInterface $urlFactory)
{
$this->_logger = $logger;
$this->_shouldLog = $logger->isEnabled();
$this->_urlFactory = $urlFactory;
}
public function getSerializationEncoding()
{
return $this->_serializationEncoding;
}
public function shouldClearCache()
{
$this->_init();
return isset($_GET[$this->_systemCacheKillerKey]) && $_GET[$this->_systemCacheKillerKey] ==='true';
}
public function getAddonBlacklistArray()
{
$this->_init();
return $this->_addonBlacklistArray;
}
public function isClassLoaderEnabled()
{
$this->_init();
return $this->_isClassLoaderEnabled;
}
public function isSystemCacheEnabled()
{
$this->_init();
return $this->_isCacheEnabled;
}
public function getPathToSystemCacheDirectory()
{
$this->_init();
return $this->_cacheDirectory;
}
public function getUserContentDirectory()
{
if (!isset($this->_cachedUserContentDir)) {
if (defined('TUBEPRESS_CONTENT_DIRECTORY')) {
$this->_cachedUserContentDir = rtrim(TUBEPRESS_CONTENT_DIRECTORY, DIRECTORY_SEPARATOR);
} else {
if ($this->_isWordPress()) {
if (! defined('WP_CONTENT_DIR')) {
define('WP_CONTENT_DIR', ABSPATH .'wp-content');
}
$this->_cachedUserContentDir = WP_CONTENT_DIR . DIRECTORY_SEPARATOR .'tubepress-content';
} else {
$this->_cachedUserContentDir = TUBEPRESS_ROOT . DIRECTORY_SEPARATOR .'tubepress-content';
}
}
}
return $this->_cachedUserContentDir;
}
public function getUrlBase()
{
$this->_init();
return $this->_urlBase;
}
public function getUrlUserContent()
{
$this->_init();
return $this->_urlUserContent;
}
public function getUrlAjaxEndpoint()
{
$this->_init();
return $this->_urlAjax;
}
private function _init()
{
if ($this->_hasInitialized) {
return;
}
$this->_readConfig();
$this->_hasInitialized = true;
}
private function _readConfig()
{
$userContentDirectory = $this->getUserContentDirectory();
$userSettingsFilePath = $userContentDirectory .'/config/settings.php';
$configArray = array();
if (is_readable($userSettingsFilePath)) {
$configArray = $this->_readUserConfig($userSettingsFilePath);
}
$this->_mergeConfig($configArray);
}
private function _readUserConfig($settingsFilePath)
{
if ($this->_shouldLog) {
$this->_logger->debug(sprintf('Candidate settings.php at %s', $settingsFilePath));
}
try {
ob_start();
$configArray = include $settingsFilePath;
ob_end_clean();
if (!is_array($configArray)) {
throw new RuntimeException('settings.php did not return an array of config values.');
}
return $configArray;
} catch (Exception $e) {
if ($this->_shouldLog) {
$this->_logger->debug(sprintf('Could not read settings.php from %s: %s',
$settingsFilePath, $e->getMessage()));
}
}
return array();
}
private function _mergeConfig(array $config)
{
$this->_addonBlacklistArray = $this->_getAddonBlacklistArray($config);
$this->_isClassLoaderEnabled = $this->_getClassLoaderEnablement($config);
$this->_systemCacheKillerKey = $this->_getCacheKillerKey($config);
$this->_cacheDirectory = rtrim($this->_getSystemCacheDirectory($config), DIRECTORY_SEPARATOR);
$this->_isCacheEnabled = $this->_getCacheEnablement($config);
$this->_serializationEncoding = $this->_getSerializationEncoding($config);
$this->_urlAjax = $this->_getUrl($config, self::$_3RD_LEVEL_KEY_URL_AJAX);
$this->_urlBase = $this->_getUrl($config, self::$_3RD_LEVEL_KEY_URL_BASE);
$this->_urlUserContent = $this->_getUrl($config, self::$_3RD_LEVEL_KEY_URL_USERCONTENT);
}
private function _getUrl(array $config, $key)
{
if (!$this->_isAllSet($config, self::$_TOP_LEVEL_KEY_USER, self::$_2ND_LEVEL_KEY_URLS, $key)) {
return null;
}
$candidate = $config[self::$_TOP_LEVEL_KEY_USER][self::$_2ND_LEVEL_KEY_URLS][$key];
try {
$toReturn = $this->_urlFactory->fromString($candidate);
$toReturn->freeze();
return $toReturn;
} catch (InvalidArgumentException $e) {
if ($this->_shouldLog) {
$this->_logger->error("Unable to parse $key URL from settings.php");
}
return null;
}
}
private function _getSystemCacheDirectory(array $config)
{
if (!$this->_isAllSet($config, self::$_TOP_LEVEL_KEY_SYSTEM, self::$_2ND_LEVEL_KEY_CACHE,
self::$_3RD_LEVEL_KEY_CACHE_DIR)) {
return $this->_getFilesystemCacheDirectory();
}
$path = $config[self::$_TOP_LEVEL_KEY_SYSTEM][self::$_2ND_LEVEL_KEY_CACHE][self::$_3RD_LEVEL_KEY_CACHE_DIR];
if (is_dir($path) && is_writable($path)) {
return $path;
}
$createdDirectory = @mkdir($path, 0755, true);
if ($createdDirectory && is_dir($path) && is_writable($path)) {
return $path;
}
return $this->_getFilesystemCacheDirectory();
}
private function _getAddonBlacklistArray(array $config)
{
$default = array();
if (!$this->_isAllSet($config, self::$_TOP_LEVEL_KEY_SYSTEM, self::$_2ND_LEVEL_KEY_ADDONS,
self::$_3RD_LEVEL_KEY_ADDONS_BLACKLIST)) {
return $default;
}
$blackList = $config[self::$_TOP_LEVEL_KEY_SYSTEM][self::$_2ND_LEVEL_KEY_ADDONS]
[self::$_3RD_LEVEL_KEY_ADDONS_BLACKLIST];
if (!is_array($blackList)) {
return $default;
}
return array_values($blackList);
}
private function _getClassLoaderEnablement(array $config)
{
$default = true;
if (!$this->_isAllSet($config, self::$_TOP_LEVEL_KEY_SYSTEM, self::$_2ND_LEVEL_KEY_CLASSLOADER,
self::$_3RD_LEVEL_KEY_CLASSLOADER_ENABLED)) {
return $default;
}
$enabled = $config[self::$_TOP_LEVEL_KEY_SYSTEM][self::$_2ND_LEVEL_KEY_CLASSLOADER]
[self::$_3RD_LEVEL_KEY_CLASSLOADER_ENABLED];
if (!is_bool($enabled)) {
return $default;
}
return (boolean) $enabled;
}
private function _getCacheEnablement(array $config)
{
$default = true;
if (!$this->_isAllSet($config, self::$_TOP_LEVEL_KEY_SYSTEM, self::$_2ND_LEVEL_KEY_CACHE,
self::$_3RD_LEVEL_KEY_CACHE_ENABLED)) {
return $default;
}
$enabled = $config[self::$_TOP_LEVEL_KEY_SYSTEM][self::$_2ND_LEVEL_KEY_CACHE]
[self::$_3RD_LEVEL_KEY_CACHE_ENABLED];
if (!is_bool($enabled)) {
return $default;
}
return (boolean) $enabled;
}
private function _getCacheKillerKey(array $config)
{
$default ='tubepress_clear_system_cache';
if (!$this->_isAllSet($config, self::$_TOP_LEVEL_KEY_SYSTEM, self::$_2ND_LEVEL_KEY_CACHE,
self::$_3RD_LEVEL_KEY_CACHE_KILLERKEY)) {
return $default;
}
$key = $config[self::$_TOP_LEVEL_KEY_SYSTEM][self::$_2ND_LEVEL_KEY_CACHE]
[self::$_3RD_LEVEL_KEY_CACHE_KILLERKEY];
if (!is_string($key) || $key =='') {
return $default;
}
return $key;
}
private function _getSerializationEncoding(array $config)
{
$default ='base64';
if (!$this->_isAllSet($config, self::$_TOP_LEVEL_KEY_SYSTEM, self::$_2ND_LEVEL_KEY_ADDONS,
self::$_3RD_LEVEL_KEY_SERIALIZATION_ENC)) {
return $default;
}
$encoding = $config[self::$_TOP_LEVEL_KEY_SYSTEM][self::$_2ND_LEVEL_KEY_ADDONS]
[self::$_3RD_LEVEL_KEY_SERIALIZATION_ENC];
if (!in_array($encoding, array('base64','none','urlencode'))) {
return $default;
}
return $encoding;
}
private function _isAllSet(array $arr, $topLevel, $secondLevel, $thirdLevel)
{
if (!isset($arr[$topLevel])) {
return false;
}
if (!isset($arr[$topLevel][$secondLevel])) {
return false;
}
if (!isset($arr[$topLevel][$secondLevel][$thirdLevel])) {
return false;
}
return true;
}
private function _getFilesystemCacheDirectory()
{
if (function_exists('sys_get_temp_dir')) {
$tmp = rtrim(sys_get_temp_dir(),'/\\') .'/';
} else {
$tmp ='/tmp/';
}
$baseDir = $tmp .'tubepress-system-cache-'. md5(dirname(__FILE__)) .'/';
if (!is_dir($baseDir)) {
@mkdir($baseDir, 0770, true);
}
if (!is_writable($baseDir)) {
if (!$this->_isWordPress()) {
return null;
}
$userContentDirectory = $this->getUserContentDirectory();
$cacheDirectory = $userContentDirectory . DIRECTORY_SEPARATOR .'system-cache';
if (!is_dir($cacheDirectory)) {
@mkdir($cacheDirectory, 0755, true);
}
if (!is_dir($cacheDirectory) || !is_writable($cacheDirectory)) {
return null;
}
return $cacheDirectory;
}
return $baseDir;
}
private function _isWordPress()
{
return defined('DB_NAME') && defined('ABSPATH');
}
}
interface tubepress_platform_api_ioc_ContainerInterface
{
function get($id);
function getParameter($name);
function has($id);
function hasParameter($name);
function set($id, $service);
function setParameter($name, $value);
}
class tubepress_platform_impl_ioc_Container implements tubepress_platform_api_ioc_ContainerInterface
{
private $_underlyingIconicContainer;
public function __construct(ehough_iconic_ContainerInterface $delegate)
{
$this->_underlyingIconicContainer = $delegate;
}
public function get($id)
{
return $this->_underlyingIconicContainer->get($id, ehough_iconic_ContainerInterface::NULL_ON_INVALID_REFERENCE);
}
public function getParameter($name)
{
return $this->_underlyingIconicContainer->getParameter($name);
}
public function has($id)
{
return $this->_underlyingIconicContainer->has($id);
}
public function hasParameter($name)
{
return $this->_underlyingIconicContainer->hasParameter($name);
}
public function set($id, $service)
{
$this->_underlyingIconicContainer->set($id, $service);
}
public function setParameter($name, $value)
{
$this->_underlyingIconicContainer->setParameter($name, $value);
}
}
interface tubepress_platform_api_log_LoggerInterface
{
const _ ='tubepress_platform_api_log_LoggerInterface';
function isEnabled();
function onBootComplete();
function debug($message, array $context = array());
function error($message, array $context = array());
}
class tubepress_platform_impl_log_BootLogger implements tubepress_platform_api_log_LoggerInterface
{
private $_isEnabled = false;
private $_buffer = array();
public function __construct($enabled)
{
$this->_isEnabled = (bool) $enabled;
}
public function isEnabled()
{
return $this->_isEnabled;
}
public function handleBootException(Exception $e)
{
$this->error('Caught exception while booting: '. $e->getMessage());
$traceData = $e->getTraceAsString();
$traceData = explode("\n", $traceData);
foreach ($traceData as $line) {
$this->error("<tt>$line</tt>");
}
foreach ($this->_buffer as $message => $context) {
$message = sprintf('%s [%s]', $message, print_r($context, true));
echo "$message<br />\n";
}
}
public function debug($message, array $context = array())
{
$this->_store($message, $context,'normal');
}
public function error($message, array $context = array())
{
$this->_store($message, $context,'error');
}
public function flushTo(tubepress_platform_api_log_LoggerInterface $logger)
{
foreach ($this->_buffer as $message => $context) {
$error = false;
if (isset($context['__level'])) {
$error = $context['__level'] ==='error';
unset($context['__level']);
}
if ($error) {
$logger->error($message, $context);
} else {
$logger->debug($message, $context);
}
}
}
private function _store($message, $context, $level)
{
if (!$this->_isEnabled) {
return;
}
$message = sprintf('%s %s', $this->_udate(), $message);
$context['__level'] = $level;
$this->_buffer[$message] = $context;
}
private function _udate()
{
$utimestamp = microtime(true);
$timestamp = floor($utimestamp);
$milliseconds = round(($utimestamp - $timestamp) * 1000000);
return date(preg_replace('`(?<!\\\\)u`', $milliseconds,'i:s.u'), $timestamp);
}
public function onBootComplete()
{
$this->_isEnabled = false;
unset($this->_buffer);
}
}
interface ehough_filesystem_FilesystemInterface
{
function getSystemTempDirectory();
function copy($originFile, $targetFile, $override = false);
function mkdir($dirs, $mode = 0777);
function exists($files);
function touch($files, $time = null, $atime = null);
function remove($files);
function chmod($files, $mode, $umask = 0000, $recursive = false);
function chown($files, $user, $recursive = false);
function chgrp($files, $group, $recursive = false);
function rename($origin, $target);
function symlink($originDir, $targetDir, $copyOnWindows = false);
function makePathRelative($endPath, $startPath);
function mirror($originDir, $targetDir, Traversable $iterator = null, $options = array());
function isAbsolutePath($file);
}
class ehough_filesystem_Filesystem implements ehough_filesystem_FilesystemInterface
{
public final function getSystemTempDirectory()
{
if (function_exists('sys_get_temp_dir')) {
return realpath(sys_get_temp_dir());
}
return $this->getSimulatedSystemTempDirectory();
}
public function copy($originFile, $targetFile, $override = false)
{
if (stream_is_local($originFile) && !is_file($originFile)) {
throw new ehough_filesystem_exception_FileNotFoundException(sprintf('Failed to copy "%s" because file does not exist.', $originFile), 0, null, $originFile);
}
$this->mkdir(dirname($targetFile));
if (!$override && is_file($targetFile) && null === parse_url($originFile, PHP_URL_HOST)) {
$doCopy = filemtime($originFile) > filemtime($targetFile);
} else {
$doCopy = true;
}
if ($doCopy) {
$source = fopen($originFile,'r');
$target = fopen($targetFile,'w', null, stream_context_create(array('ftp'=> array('overwrite'=> true))));
stream_copy_to_stream($source, $target);
fclose($source);
fclose($target);
unset($source, $target);
if (!is_file($targetFile)) {
throw new ehough_filesystem_exception_IOException(sprintf('Failed to copy "%s" to "%s".', $originFile, $targetFile), 0, null, $originFile);
}
}
}
public function mkdir($dirs, $mode = 0777)
{
foreach ($this->toIterator($dirs) as $dir) {
if (is_dir($dir)) {
continue;
}
if (true !== @mkdir($dir, $mode, true)) {
$error = error_get_last();
if (!is_dir($dir)) {
if ($error) {
throw new ehough_filesystem_exception_IOException(sprintf('Failed to create "%s": %s.', $dir, $error['message']), 0, null, $dir);
}
throw new ehough_filesystem_exception_IOException(sprintf('Failed to create "%s"', $dir), 0, null, $dir);
}
}
}
}
public function exists($files)
{
foreach ($this->toIterator($files) as $file) {
if (!file_exists($file)) {
return false;
}
}
return true;
}
public function touch($files, $time = null, $atime = null)
{
foreach ($this->toIterator($files) as $file) {
$touch = $time ? @touch($file, $time, $atime) : @touch($file);
if (true !== $touch) {
throw new ehough_filesystem_exception_IOException(sprintf('Failed to touch "%s".', $file), 0, null, $file);
}
}
}
public function remove($files)
{
$files = iterator_to_array($this->toIterator($files));
$files = array_reverse($files);
foreach ($files as $file) {
if (!file_exists($file) && !is_link($file)) {
continue;
}
if (is_dir($file) && !is_link($file)) {
if (version_compare(PHP_VERSION,'5.3.0') < 0) {
$this->remove(new ehough_filesystem_iterator_SkipDotsRecursiveDirectoryIterator($file));
} else {
$this->remove(new FilesystemIterator($file));
}
if (true !== @rmdir($file)) {
throw new ehough_filesystem_exception_IOException(sprintf('Failed to remove directory "%s".', $file), 0, null, $file);
}
} else {
if (defined('PHP_WINDOWS_VERSION_MAJOR') && is_dir($file)) {
if (true !== @rmdir($file)) {
throw new ehough_filesystem_exception_IOException(sprintf('Failed to remove file "%s".', $file), 0, null, $file);
}
} else {
if (true !== @unlink($file)) {
throw new ehough_filesystem_exception_IOException(sprintf('Failed to remove file "%s".', $file), 0, null, $file);
}
}
}
}
}
public function chmod($files, $mode, $umask = 0000, $recursive = false)
{
foreach ($this->toIterator($files) as $file) {
if ($recursive && is_dir($file) && !is_link($file)) {
if (version_compare(PHP_VERSION,'5.3.0') < 0) {
$this->chmod(new ehough_filesystem_iterator_SkipDotsRecursiveDirectoryIterator($file), $mode, $umask, true);
} else {
$this->chmod(new FilesystemIterator($file), $mode, $umask, true);
}
}
if (true !== @chmod($file, $mode & ~$umask)) {
throw new ehough_filesystem_exception_IOException(sprintf('Failed to chmod file "%s".', $file), 0, null, $file);
}
}
}
public function chown($files, $user, $recursive = false)
{
foreach ($this->toIterator($files) as $file) {
if ($recursive && is_dir($file) && !is_link($file)) {
if (version_compare(PHP_VERSION,'5.3.0') < 0) {
$this->chown(new ehough_filesystem_iterator_SkipDotsRecursiveDirectoryIterator($file), $user, true);
} else {
$this->chown(new FilesystemIterator($file), $user, true);
}
}
if (is_link($file) && function_exists('lchown')) {
if (true !== @lchown($file, $user)) {
throw new ehough_filesystem_exception_IOException(sprintf('Failed to chown file "%s".', $file), 0, null, $file);
}
} else {
if (true !== @chown($file, $user)) {
throw new ehough_filesystem_exception_IOException(sprintf('Failed to chown file "%s".', $file), 0, null, $file);
}
}
}
}
public function chgrp($files, $group, $recursive = false)
{
foreach ($this->toIterator($files) as $file) {
if ($recursive && is_dir($file) && !is_link($file)) {
if (version_compare(PHP_VERSION,'5.3.0') < 0) {
$this->chgrp(new ehough_filesystem_iterator_SkipDotsRecursiveDirectoryIterator($file), $group, true);
} else {
$this->chgrp(new FilesystemIterator($file), $group, true);
}
}
if (is_link($file) && function_exists('lchgrp')) {
if (true !== @lchgrp($file, $group)) {
throw new ehough_filesystem_exception_IOException(sprintf('Failed to chgrp file "%s".', $file), 0, null, $file);
}
} else {
if (true !== @chgrp($file, $group)) {
throw new ehough_filesystem_exception_IOException(sprintf('Failed to chgrp file "%s".', $file), 0, null, $file);
}
}
}
}
public function rename($origin, $target, $overwrite = false)
{
if (!$overwrite && is_readable($target)) {
throw new ehough_filesystem_exception_IOException(sprintf('Cannot rename because the target "%s" already exists.', $target), 0, null, $target);
}
if (true !== @rename($origin, $target)) {
throw new ehough_filesystem_exception_IOException(sprintf('Cannot rename "%s" to "%s".', $origin, $target), 0, null, $target);
}
}
public function symlink($originDir, $targetDir, $copyOnWindows = false)
{
if (!function_exists('symlink') && $copyOnWindows) {
$this->mirror($originDir, $targetDir);
return;
}
$this->mkdir(dirname($targetDir));
$ok = false;
if (is_link($targetDir)) {
if (readlink($targetDir) != $originDir) {
$this->remove($targetDir);
} else {
$ok = true;
}
}
if (!$ok) {
if (true !== @symlink($originDir, $targetDir)) {
$report = error_get_last();
if (is_array($report)) {
if (defined('PHP_WINDOWS_VERSION_MAJOR') && false !== strpos($report['message'],'error code(1314)')) {
throw new ehough_filesystem_exception_IOException('Unable to create symlink due to error code 1314: \'A required privilege is not held by the client\'. Do you have the required Administrator-rights?');
}
}
throw new ehough_filesystem_exception_IOException(sprintf('Failed to create symbolic link from "%s" to "%s".', $originDir, $targetDir), 0, null, $targetDir);
}
}
}
public function makePathRelative($endPath, $startPath)
{
if (defined('PHP_WINDOWS_VERSION_MAJOR')) {
$endPath = strtr($endPath,'\\','/');
$startPath = strtr($startPath,'\\','/');
}
$startPathArr = explode('/', trim($startPath,'/'));
$endPathArr = explode('/', trim($endPath,'/'));
$index = 0;
while (isset($startPathArr[$index]) && isset($endPathArr[$index]) && $startPathArr[$index] === $endPathArr[$index]) {
$index++;
}
$depth = count($startPathArr) - $index;
$traverser = str_repeat('../', $depth);
$endPathRemainder = implode('/', array_slice($endPathArr, $index));
$relativePath = $traverser.(strlen($endPathRemainder) > 0 ? $endPathRemainder.'/':'');
return (strlen($relativePath) === 0) ?'./': $relativePath;
}
public function mirror($originDir, $targetDir, Traversable $iterator = null, $options = array())
{
$targetDir = rtrim($targetDir,'/\\');
$originDir = rtrim($originDir,'/\\');
if ($this->exists($targetDir) && isset($options['delete']) && $options['delete']) {
$deleteIterator = $iterator;
if (null === $deleteIterator) {
if (version_compare(PHP_VERSION,'5.3.0') < 0) {
$deleteIterator = new RecursiveIteratorIterator(new ehough_filesystem_iterator_SkipDotsRecursiveDirectoryIterator($targetDir), RecursiveIteratorIterator::CHILD_FIRST);
} else {
$flags = FilesystemIterator::SKIP_DOTS;
$deleteIterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($targetDir, $flags), RecursiveIteratorIterator::CHILD_FIRST);
}
}
foreach ($deleteIterator as $file) {
$origin = str_replace($targetDir, $originDir, $file->getPathname());
if (!$this->exists($origin)) {
$this->remove($file);
}
}
}
$copyOnWindows = false;
if (isset($options['copy_on_windows']) && !function_exists('symlink')) {
$copyOnWindows = $options['copy_on_windows'];
}
if (null === $iterator) {
if (version_compare(PHP_VERSION,'5.3.0') < 0) {
$iterator = new RecursiveIteratorIterator(new ehough_filesystem_iterator_SkipDotsRecursiveDirectoryIterator($originDir), RecursiveIteratorIterator::SELF_FIRST);
} else {
$flags = $copyOnWindows ? FilesystemIterator::SKIP_DOTS | FilesystemIterator::FOLLOW_SYMLINKS : FilesystemIterator::SKIP_DOTS;
$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($originDir, $flags), RecursiveIteratorIterator::SELF_FIRST);
}
}
foreach ($iterator as $file) {
$target = str_replace($originDir, $targetDir, $file->getPathname());
if ($copyOnWindows) {
if (is_link($file) || is_file($file)) {
$this->copy($file, $target, isset($options['override']) ? $options['override'] : false);
} elseif (is_dir($file)) {
$this->mkdir($target);
} else {
throw new ehough_filesystem_exception_IOException(sprintf('Unable to guess "%s" file type.', $file), 0, null, $file);
}
} else {
if (is_link($file)) {
$this->symlink($file->getLinkTarget(), $target);
} elseif (is_dir($file)) {
$this->mkdir($target);
} elseif (is_file($file)) {
$this->copy($file, $target, isset($options['override']) ? $options['override'] : false);
} else {
throw new ehough_filesystem_exception_IOException(sprintf('Unable to guess "%s" file type.', $file), 0, null, $file);
}
}
}
}
public function isAbsolutePath($file)
{
if (strspn($file,'/\\', 0, 1)
|| (strlen($file) > 3 && ctype_alpha($file[0])
&& substr($file, 1, 1) ===':'&& (strspn($file,'/\\', 2, 1))
)
|| null !== parse_url($file, PHP_URL_SCHEME)
) {
return true;
}
return false;
}
public final function getSimulatedSystemTempDirectory()
{
$fromEnv = $this->_getFromEnvPaths(
array('TMP','TEMP','TMPDIR',
)
);
if ($fromEnv !== null) {
return $fromEnv;
}
$tempfile = tempnam(
md5(
uniqid(
rand(),
true
)
),'');
if (is_file($tempfile)) {
$tempdir = realpath(dirname($tempfile));
unlink($tempfile);
return realpath($tempdir);
}
return false;
}
private function _getFromEnvPaths(array $envKeys)
{
foreach ($envKeys as $key) {
$value = getenv($key);
if (! empty($value)) {
return realpath($value);
}
}
return null;
}
public function dumpFile($filename, $content, $mode = 0666)
{
$dir = dirname($filename);
if (!is_dir($dir)) {
$this->mkdir($dir);
} elseif (!is_writable($dir)) {
throw new ehough_filesystem_exception_IOException(sprintf('Unable to write to the "%s" directory.', $dir), 0, null, $dir);
}
$tmpFile = tempnam($dir, basename($filename));
if (false === @file_put_contents($tmpFile, $content)) {
throw new ehough_filesystem_exception_IOException(sprintf('Failed to write file "%s".', $filename), 0, null, $filename);
}
$this->rename($tmpFile, $filename, true);
if (null !== $mode) {
$this->chmod($filename, $mode);
}
}
private function toIterator($files)
{
if (!$files instanceof Traversable) {
$files = new ArrayObject(is_array($files) ? $files : array($files));
}
return $files;
}
}
interface ehough_templating_EngineInterface
{
function render($name, array $parameters = array());
function exists($name);
function supports($name);
}
interface ehough_templating_StreamingEngineInterface
{
function stream($name, array $parameters = array());
}
class ehough_templating_DelegatingEngine implements ehough_templating_EngineInterface, ehough_templating_StreamingEngineInterface
{
protected $engines = array();
public function __construct(array $engines = array())
{
foreach ($engines as $engine) {
$this->addEngine($engine);
}
}
public function render($name, array $parameters = array())
{
return $this->getEngine($name)->render($name, $parameters);
}
public function stream($name, array $parameters = array())
{
$engine = $this->getEngine($name);
if (!$engine instanceof ehough_templating_StreamingEngineInterface) {
throw new LogicException(sprintf('Template "%s" cannot be streamed as the engine supporting it does not implement ehough_templating_StreamingEngineInterface.', $name));
}
$engine->stream($name, $parameters);
}
public function exists($name)
{
return $this->getEngine($name)->exists($name);
}
public function addEngine(ehough_templating_EngineInterface $engine)
{
$this->engines[] = $engine;
}
public function supports($name)
{
try {
$this->getEngine($name);
} catch (RuntimeException $e) {
return false;
}
return true;
}
public function getEngine($name)
{
foreach ($this->engines as $engine) {
if ($engine->supports($name)) {
return $engine;
}
}
throw new RuntimeException(sprintf('No engine is able to work with the template "%s".', $name));
}
}
interface ehough_templating_loader_LoaderInterface
{
function load(ehough_templating_TemplateReferenceInterface $template);
function isFresh(ehough_templating_TemplateReferenceInterface $template, $time);
}
if (!defined('ENT_SUBSTITUTE')) {
define('ENT_SUBSTITUTE', 8);
}
if(!function_exists('array_replace')) {
function array_replace()
{
$args = func_get_args();
$num_args = func_num_args();
$res = array();
for($i = 0; $i < $num_args; $i++) {
if(is_array($args[$i])) {
foreach($args[$i] as $key => $val) {
$res[$key] = $val;
}
} else {
trigger_error(__FUNCTION__ .'(): Argument #'.($i+1).' is not an array', E_USER_WARNING);
return NULL;
}
}
return $res;
}
}
class ehough_templating_PhpEngine implements ehough_templating_EngineInterface, ArrayAccess
{
protected $loader;
protected $current;
protected $helpers = array();
protected $parents = array();
protected $stack = array();
protected $charset ='UTF-8';
protected $cache = array();
protected $escapers = array();
protected static $escaperCache = array();
protected $globals = array();
protected $parser;
private $evalTemplate;
private $evalParameters;
public function __construct(ehough_templating_TemplateNameParserInterface $parser, ehough_templating_loader_LoaderInterface $loader, array $helpers = array())
{
$this->parser = $parser;
$this->loader = $loader;
$this->addHelpers($helpers);
$this->initializeEscapers();
foreach ($this->escapers as $context => $escaper) {
$this->setEscaper($context, $escaper);
}
}
public function render($name, array $parameters = array())
{
$storage = $this->load($name);
$key = hash('sha256', serialize($storage));
$this->current = $key;
$this->parents[$key] = null;
$parameters = array_replace($this->getGlobals(), $parameters);
if (false === $content = $this->evaluate($storage, $parameters)) {
throw new RuntimeException(sprintf('The template "%s" cannot be rendered.', $this->parser->parse($name)));
}
if ($this->parents[$key]) {
$slots = $this->get('slots');
$this->stack[] = $slots->get('_content');
$slots->set('_content', $content);
$content = $this->render($this->parents[$key], $parameters);
$slots->set('_content', array_pop($this->stack));
}
return $content;
}
public function exists($name)
{
try {
$this->load($name);
} catch (InvalidArgumentException $e) {
return false;
}
return true;
}
public function supports($name)
{
$template = $this->parser->parse($name);
return'php'=== $template->get('engine');
}
protected function evaluate(ehough_templating_storage_Storage $template, array $parameters = array())
{
$this->evalTemplate = $template;
$this->evalParameters = $parameters;
unset($template, $parameters);
if (isset($this->evalParameters['this'])) {
throw new InvalidArgumentException('Invalid parameter (this)');
}
if (isset($this->evalParameters['view'])) {
throw new InvalidArgumentException('Invalid parameter (view)');
}
$view = $this;
if ($this->evalTemplate instanceof ehough_templating_storage_FileStorage) {
extract($this->evalParameters, EXTR_SKIP);
$this->evalParameters = null;
ob_start();
require $this->evalTemplate;
$this->evalTemplate = null;
return ob_get_clean();
} elseif ($this->evalTemplate instanceof ehough_templating_storage_StringStorage) {
extract($this->evalParameters, EXTR_SKIP);
$this->evalParameters = null;
ob_start();
eval('; ?>'.$this->evalTemplate.'<?php ;');
$this->evalTemplate = null;
return ob_get_clean();
}
return false;
}
public function offsetGet($name)
{
return $this->get($name);
}
public function offsetExists($name)
{
return isset($this->helpers[$name]);
}
public function offsetSet($name, $value)
{
$this->set($name, $value);
}
public function offsetUnset($name)
{
throw new LogicException(sprintf('You can\'t unset a helper (%s).', $name));
}
public function addHelpers(array $helpers)
{
foreach ($helpers as $alias => $helper) {
$this->set($helper, is_int($alias) ? null : $alias);
}
}
public function setHelpers(array $helpers)
{
$this->helpers = array();
$this->addHelpers($helpers);
}
public function set(ehough_templating_helper_HelperInterface $helper, $alias = null)
{
$this->helpers[$helper->getName()] = $helper;
if (null !== $alias) {
$this->helpers[$alias] = $helper;
}
$helper->setCharset($this->charset);
}
public function has($name)
{
return isset($this->helpers[$name]);
}
public function get($name)
{
if (!isset($this->helpers[$name])) {
throw new InvalidArgumentException(sprintf('The helper "%s" is not defined.', $name));
}
return $this->helpers[$name];
}
public function extend($template)
{
$this->parents[$this->current] = $template;
}
public function escape($value, $context ='html')
{
if (is_numeric($value)) {
return $value;
}
if (is_scalar($value)) {
if (!isset(self::$escaperCache[$context][$value])) {
self::$escaperCache[$context][$value] = call_user_func($this->getEscaper($context), $value);
}
return self::$escaperCache[$context][$value];
}
return call_user_func($this->getEscaper($context), $value);
}
public function setCharset($charset)
{
$this->charset = $charset;
foreach ($this->helpers as $helper) {
$helper->setCharset($this->charset);
}
}
public function getCharset()
{
return $this->charset;
}
public function setEscaper($context, $escaper)
{
$this->escapers[$context] = $escaper;
self::$escaperCache[$context] = array();
}
public function getEscaper($context)
{
if (!isset($this->escapers[$context])) {
throw new InvalidArgumentException(sprintf('No registered escaper for context "%s".', $context));
}
return $this->escapers[$context];
}
public function addGlobal($name, $value)
{
$this->globals[$name] = $value;
}
public function getGlobals()
{
return $this->globals;
}
protected function initializeEscapers()
{
$this->escapers = array('html'=> array($this,'__callbackInitializeEscapersHtml'),'js'=> array($this,'__callbackInitializeEscapersJs1')
);
self::$escaperCache = array();
}
public function __callbackInitializeEscapersHtml($value)
{
return is_string($value) ? htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, $this->getCharset(), false) : $value;
}
public function __callbackInitializeEscapersJs1($value)
{
if ('UTF-8'!= $this->getCharset()) {
$value = $this->convertEncoding($value,'UTF-8', $this->getCharset());
}
$callback = array($this,'__callbackInitializeEscapersJs2');
if (null === $value = preg_replace_callback('#[^\p{L}\p{N} ]#u', $callback, $value)) {
throw new InvalidArgumentException('The string to escape is not a valid UTF-8 string.');
}
if ('UTF-8'!= $this->getCharset()) {
$value = $this->convertEncoding($value, $this->getCharset(),'UTF-8');
}
return $value;
}
public function __callbackInitializeEscapersJs2($matches)
{
$char = $matches[0];
if (!isset($char[1])) {
return'\\x'.substr('00'.bin2hex($char), -2);
}
$char = $this->convertEncoding($char,'UTF-16BE','UTF-8');
return'\\u'.substr('0000'.bin2hex($char), -4);
}
public function convertEncoding($string, $to, $from)
{
if (function_exists('mb_convert_encoding')) {
return mb_convert_encoding($string, $to, $from);
} elseif (function_exists('iconv')) {
return iconv($from, $to, $string);
}
throw new RuntimeException('No suitable convert encoding function (use UTF-8 as your encoding or install the iconv or mbstring extension).');
}
public function getLoader()
{
return $this->loader;
}
protected function load($name)
{
$template = $this->parser->parse($name);
$key = $template->getLogicalName();
if (isset($this->cache[$key])) {
return $this->cache[$key];
}
$storage = $this->loader->load($template);
if (false === $storage) {
throw new InvalidArgumentException(sprintf('The template "%s" does not exist.', $template));
}
return $this->cache[$key] = $storage;
}
}
interface ehough_templating_TemplateNameParserInterface
{
function parse($name);
}
class ehough_templating_TemplateNameParser implements ehough_templating_TemplateNameParserInterface
{
public function parse($name)
{
if ($name instanceof ehough_templating_TemplateReferenceInterface) {
return $name;
}
$engine = null;
if (false !== $pos = strrpos($name,'.')) {
$engine = substr($name, $pos + 1);
}
return new ehough_templating_TemplateReference($name, $engine);
}
}
interface ehough_templating_TemplateReferenceInterface
{
function all();
function set($name, $value);
function get($name);
function getPath();
function getLogicalName();
function __toString();
}
class ehough_templating_TemplateReference implements ehough_templating_TemplateReferenceInterface
{
protected $parameters;
public function __construct($name = null, $engine = null)
{
$this->parameters = array('name'=> $name,'engine'=> $engine,
);
}
public function __toString()
{
return $this->getLogicalName();
}
public function set($name, $value)
{
if (array_key_exists($name, $this->parameters)) {
$this->parameters[$name] = $value;
} else {
throw new InvalidArgumentException(sprintf('The template does not support the "%s" parameter.', $name));
}
return $this;
}
public function get($name)
{
if (array_key_exists($name, $this->parameters)) {
return $this->parameters[$name];
}
throw new InvalidArgumentException(sprintf('The template does not support the "%s" parameter.', $name));
}
public function all()
{
return $this->parameters;
}
public function getPath()
{
return $this->parameters['name'];
}
public function getLogicalName()
{
return $this->parameters['name'];
}
}
interface ehough_tickertape_EventDispatcherInterface
{
public function dispatch($eventName, ehough_tickertape_Event $event = null);
public function addListener($eventName, $listener, $priority = 0);
public function addSubscriber(ehough_tickertape_EventSubscriberInterface $subscriber);
public function removeListener($eventName, $listener);
public function removeSubscriber(ehough_tickertape_EventSubscriberInterface $subscriber);
public function getListeners($eventName = null);
public function hasListeners($eventName = null);
}
class ehough_tickertape_EventDispatcher implements ehough_tickertape_EventDispatcherInterface
{
private $listeners = array();
private $sorted = array();
public function dispatch($eventName, ehough_tickertape_Event $event = null)
{
if (null === $event) {
$event = new ehough_tickertape_Event();
}
$event->setDispatcher($this);
$event->setName($eventName);
if (!isset($this->listeners[$eventName])) {
return $event;
}
$this->doDispatch($this->getListeners($eventName), $eventName, $event);
return $event;
}
public function getListeners($eventName = null)
{
if (null !== $eventName) {
if (!isset($this->sorted[$eventName])) {
$this->sortListeners($eventName);
}
return $this->sorted[$eventName];
}
foreach (array_keys($this->listeners) as $eventName) {
if (!isset($this->sorted[$eventName])) {
$this->sortListeners($eventName);
}
}
return array_filter($this->sorted);
}
public function hasListeners($eventName = null)
{
return (bool) count($this->getListeners($eventName));
}
public function addListener($eventName, $listener, $priority = 0)
{
$this->listeners[$eventName][$priority][] = $listener;
unset($this->sorted[$eventName]);
}
public function removeListener($eventName, $listener)
{
if (!isset($this->listeners[$eventName])) {
return;
}
foreach ($this->listeners[$eventName] as $priority => $listeners) {
if (false !== ($key = array_search($listener, $listeners, true))) {
unset($this->listeners[$eventName][$priority][$key], $this->sorted[$eventName]);
}
}
}
public function addSubscriber(ehough_tickertape_EventSubscriberInterface $subscriber)
{
foreach ($subscriber->getSubscribedEvents() as $eventName => $params) {
if (is_string($params)) {
$this->addListener($eventName, array($subscriber, $params));
} elseif (is_string($params[0])) {
$this->addListener($eventName, array($subscriber, $params[0]), isset($params[1]) ? $params[1] : 0);
} else {
foreach ($params as $listener) {
$this->addListener($eventName, array($subscriber, $listener[0]), isset($listener[1]) ? $listener[1] : 0);
}
}
}
}
public function removeSubscriber(ehough_tickertape_EventSubscriberInterface $subscriber)
{
foreach ($subscriber->getSubscribedEvents() as $eventName => $params) {
if (is_array($params) && is_array($params[0])) {
foreach ($params as $listener) {
$this->removeListener($eventName, array($subscriber, $listener[0]));
}
} else {
$this->removeListener($eventName, array($subscriber, is_string($params) ? $params : $params[0]));
}
}
}
protected function doDispatch($listeners, $eventName, ehough_tickertape_Event $event)
{
foreach ($listeners as $listener) {
call_user_func($listener, $event, $eventName, $this);
if ($event->isPropagationStopped()) {
break;
}
}
}
private function sortListeners($eventName)
{
$this->sorted[$eventName] = array();
if (isset($this->listeners[$eventName])) {
krsort($this->listeners[$eventName]);
$this->sorted[$eventName] = call_user_func_array('array_merge', $this->listeners[$eventName]);
}
}
}
class ehough_tickertape_ContainerAwareEventDispatcher extends ehough_tickertape_EventDispatcher
{
private $container;
private $listenerIds = array();
private $listeners = array();
public function __construct(ehough_iconic_ContainerInterface $container)
{
$this->container = $container;
}
public function addListenerService($eventName, $callback, $priority = 0)
{
if (!is_array($callback) || 2 !== count($callback)) {
throw new InvalidArgumentException('Expected an array("service", "method") argument');
}
$this->listenerIds[$eventName][] = array($callback[0], $callback[1], $priority);
}
public function removeListener($eventName, $listener)
{
$this->lazyLoad($eventName);
if (isset($this->listeners[$eventName])) {
foreach ($this->listeners[$eventName] as $key => $l) {
foreach ($this->listenerIds[$eventName] as $i => $args) {
list($serviceId, $method, $priority) = $args;
if ($key === $serviceId.'.'.$method) {
if ($listener === array($l, $method)) {
unset($this->listeners[$eventName][$key]);
if (empty($this->listeners[$eventName])) {
unset($this->listeners[$eventName]);
}
unset($this->listenerIds[$eventName][$i]);
if (empty($this->listenerIds[$eventName])) {
unset($this->listenerIds[$eventName]);
}
}
}
}
}
}
parent::removeListener($eventName, $listener);
}
public function hasListeners($eventName = null)
{
if (null === $eventName) {
return (bool) count($this->listenerIds) || (bool) count($this->listeners);
}
if (isset($this->listenerIds[$eventName])) {
return true;
}
return parent::hasListeners($eventName);
}
public function getListeners($eventName = null)
{
if (null === $eventName) {
foreach (array_keys($this->listenerIds) as $serviceEventName) {
$this->lazyLoad($serviceEventName);
}
} else {
$this->lazyLoad($eventName);
}
return parent::getListeners($eventName);
}
public function addSubscriberService($serviceId, $class)
{
$ref = new ReflectionClass($class);
$instance = $ref->newInstance();
foreach ($instance->getSubscribedEvents() as $eventName => $params) {
if (is_string($params)) {
$this->listenerIds[$eventName][] = array($serviceId, $params, 0);
} elseif (is_string($params[0])) {
$this->listenerIds[$eventName][] = array($serviceId, $params[0], isset($params[1]) ? $params[1] : 0);
} else {
foreach ($params as $listener) {
$this->listenerIds[$eventName][] = array($serviceId, $listener[0], isset($listener[1]) ? $listener[1] : 0);
}
}
}
}
public function dispatch($eventName, ehough_tickertape_Event $event = null)
{
$this->lazyLoad($eventName);
return parent::dispatch($eventName, $event);
}
public function getContainer()
{
return $this->container;
}
protected function lazyLoad($eventName)
{
if (isset($this->listenerIds[$eventName])) {
foreach ($this->listenerIds[$eventName] as $args) {
list($serviceId, $method, $priority) = $args;
$listener = $this->container->get($serviceId);
$key = $serviceId.'.'.$method;
if (!isset($this->listeners[$eventName][$key])) {
$this->addListener($eventName, array($listener, $method), $priority);
} elseif ($listener !== $this->listeners[$eventName][$key]) {
parent::removeListener($eventName, array($this->listeners[$eventName][$key], $method));
$this->addListener($eventName, array($listener, $method), $priority);
}
$this->listeners[$eventName][$key] = $listener;
}
}
}
}
class ehough_tickertape_Event
{
private $propagationStopped = false;
private $dispatcher;
private $name;
public function isPropagationStopped()
{
return $this->propagationStopped;
}
public function stopPropagation()
{
$this->propagationStopped = true;
}
public function setDispatcher(ehough_tickertape_EventDispatcherInterface $dispatcher)
{
$this->dispatcher = $dispatcher;
}
public function getDispatcher()
{
return $this->dispatcher;
}
public function getName()
{
return $this->name;
}
public function setName($name)
{
$this->name = $name;
}
}
class ehough_tickertape_GenericEvent extends ehough_tickertape_Event implements ArrayAccess, IteratorAggregate
{
protected $subject;
protected $arguments;
public function __construct($subject = null, array $arguments = array())
{
$this->subject = $subject;
$this->arguments = $arguments;
}
public function getSubject()
{
return $this->subject;
}
public function getArgument($key)
{
if ($this->hasArgument($key)) {
return $this->arguments[$key];
}
throw new InvalidArgumentException(sprintf('%s not found in %s', $key, $this->getName()));
}
public function setArgument($key, $value)
{
$this->arguments[$key] = $value;
return $this;
}
public function getArguments()
{
return $this->arguments;
}
public function setArguments(array $args = array())
{
$this->arguments = $args;
return $this;
}
public function hasArgument($key)
{
return array_key_exists($key, $this->arguments);
}
public function offsetGet($key)
{
return $this->getArgument($key);
}
public function offsetSet($key, $value)
{
$this->setArgument($key, $value);
}
public function offsetUnset($key)
{
if ($this->hasArgument($key)) {
unset($this->arguments[$key]);
}
}
public function offsetExists($key)
{
return $this->hasArgument($key);
}
public function getIterator()
{
return new ArrayIterator($this->arguments);
}
}
abstract class puzzle_AbstractHasData
{
protected $data = array();
public function getIterator()
{
return new ArrayIterator($this->data);
}
public function offsetGet($offset)
{
return isset($this->data[$offset]) ? $this->data[$offset] : null;
}
public function offsetSet($offset, $value)
{
$this->data[$offset] = $value;
}
public function offsetExists($offset)
{
return isset($this->data[$offset]);
}
public function offsetUnset($offset)
{
unset($this->data[$offset]);
}
public function toArray()
{
return $this->data;
}
public function count()
{
return count($this->data);
}
public function getPath($path)
{
return puzzle_get_path($this->data, $path);
}
public function setPath($path, $value)
{
puzzle_set_path($this->data, $path, $value);
}
}
interface puzzle_ToArrayInterface
{
function toArray();
}
class puzzle_Collection extends puzzle_AbstractHasData implements
ArrayAccess,
IteratorAggregate,
Countable,
puzzle_ToArrayInterface
{
public function __construct(array $data = array())
{
$this->data = $data;
}
public static function fromConfig(
array $config = array(),
array $defaults = array(),
array $required = array()
) {
$data = $config + $defaults;
if ($missing = array_diff($required, array_keys($data))) {
throw new InvalidArgumentException('Config is missing the following keys: '.
implode(', ', $missing));
}
return new self($data);
}
public function clear()
{
$this->data = array();
return $this;
}
public function get($key)
{
return isset($this->data[$key]) ? $this->data[$key] : null;
}
public function set($key, $value)
{
$this->data[$key] = $value;
return $this;
}
public function add($key, $value)
{
if (!array_key_exists($key, $this->data)) {
$this->data[$key] = $value;
} elseif (is_array($this->data[$key])) {
$this->data[$key][] = $value;
} else {
$this->data[$key] = array($this->data[$key], $value);
}
return $this;
}
public function remove($key)
{
unset($this->data[$key]);
return $this;
}
public function getKeys()
{
return array_keys($this->data);
}
public function hasKey($key)
{
return array_key_exists($key, $this->data);
}
public function hasValue($value)
{
return array_search($value, $this->data, true);
}
public function replace(array $data)
{
$this->data = $data;
return $this;
}
public function merge($data)
{
foreach ($data as $key => $value) {
$this->add($key, $value);
}
return $this;
}
public function overwriteWith($data)
{
if (is_array($data)) {
$this->data = $data + $this->data;
} elseif ($data instanceof puzzle_Collection) {
$this->data = $data->toArray() + $this->data;
} else {
foreach ($data as $key => $value) {
$this->data[$key] = $value;
}
}
return $this;
}
public function map($closure, array $context = array())
{
$collection = new self();
foreach ($this as $key => $value) {
$collection[$key] = call_user_func_array($closure, array($key, $value, $context));
}
return $collection;
}
public function filter($closure)
{
$collection = new self();
foreach ($this->data as $key => $value) {
if (call_user_func_array($closure, array($key, $value))) {
$collection[$key] = $value;
}
}
return $collection;
}
}
class puzzle_Query extends puzzle_Collection
{
const RFC3986 ='RFC3986';
const RFC1738 ='RFC1738';
private $encoding = self::RFC3986;
private $aggregator;
public static function fromString($query, $urlEncoding = true)
{
static $qp;
if (!$qp) {
$qp = new puzzle_QueryParser();
}
$q = new self();
if ($urlEncoding !== true) {
$q->setEncodingType($urlEncoding);
}
$qp->parseInto($q, $query, $urlEncoding);
return $q;
}
public function __toString()
{
if (!$this->data) {
return'';
}
static $defaultAggregator;
if (!$this->aggregator) {
if (!$defaultAggregator) {
$defaultAggregator = self::phpAggregator();
}
$this->aggregator = $defaultAggregator;
}
$result ='';
$aggregator = $this->aggregator;
foreach (call_user_func($aggregator, $this->data) as $key => $values) {
foreach ($values as $value) {
if ($result) {
$result .='&';
}
if ($this->encoding == self::RFC1738) {
$result .= urlencode($key);
if ($value !== null) {
$result .='='. urlencode($value);
}
} elseif ($this->encoding == self::RFC3986) {
$result .= rawurlencode($key);
if ($value !== null) {
$result .='='. rawurlencode($value);
}
} else {
$result .= $key;
if ($value !== null) {
$result .='='. $value;
}
}
}
}
return $result;
}
public function setAggregator($aggregator)
{
$this->aggregator = $aggregator;
return $this;
}
public function setEncodingType($type)
{
if ($type === false || $type === self::RFC1738 || $type === self::RFC3986) {
$this->encoding = $type;
} else {
throw new InvalidArgumentException('Invalid URL encoding type');
}
return $this;
}
public static function duplicateAggregator()
{
return array('puzzle_Query','__callback_duplicateAggregator');
}
public static function __callback_duplicateAggregator(array $data)
{
return self::walkQuery($data,'', array('puzzle_Query','__callback_duplicateAggregator_1'));
}
public static function __callback_duplicateAggregator_1($key, $prefix)
{
return is_int($key) ? $prefix : "{$prefix}[{$key}]";
}
public static function phpAggregator($numericIndices = true)
{
$aggregator = new __puzzle_phpAggregator($numericIndices);
return array($aggregator,'aggregate');
}
public static function walkQuery(array $query, $keyPrefix, $prefixer)
{
$result = array();
foreach ($query as $key => $value) {
if ($keyPrefix) {
$key = call_user_func_array($prefixer, array($key, $keyPrefix));
}
if (is_array($value)) {
$result += self::walkQuery($value, $key, $prefixer);
} elseif (isset($result[$key])) {
$result[$key][] = $value;
} else {
$result[$key] = array($value);
}
}
return $result;
}
}
class __puzzle_phpAggregator
{
private $_useNumericIndices;
public function __construct($useNumericIndices)
{
$this->_useNumericIndices = $useNumericIndices;
}
public function aggregate(array $data)
{
return puzzle_Query::walkQuery($data,'', array($this,'_walker'));
}
public function _walker($key, $prefix)
{
return !$this->_useNumericIndices && is_int($key)
? "{$prefix}[]"
: "{$prefix}[{$key}]";
}
}
class puzzle_Url
{
private $scheme;
private $host;
private $port;
private $username;
private $password;
private $path ='';
private $fragment;
private static $defaultPorts = array('http'=> 80,'https'=> 443,'ftp'=> 21);
private $query;
public static function fromString($url)
{
static $defaults = array('scheme'=> null,'host'=> null,'path'=> null,'port'=> null,'query'=> null,'user'=> null,'pass'=> null,'fragment'=> null);
$phpLessThan547 = version_compare(PHP_VERSION,'5.4.7') < 0;
$phpLessThan547Hack = false;
if ($phpLessThan547 && substr($url, 0, 2) ==='//') {
$phpLessThan547Hack = true;
$url ='http:'. $url;
}
if (false === ($parts = @parse_url($url))) {
throw new InvalidArgumentException('Unable to parse malformed '.'url: '. $url);
}
if ($phpLessThan547Hack) {
$parts['scheme'] = null;
}
$parts += $defaults;
if ($parts['query'] || 0 !== strlen($parts['query'])) {
$parts['query'] = puzzle_Query::fromString($parts['query']);
}
return new self($parts['scheme'], $parts['host'], $parts['user'],
$parts['pass'], $parts['port'], $parts['path'], $parts['query'],
$parts['fragment']);
}
public static function buildUrl(array $parts)
{
$url = $scheme ='';
if (!empty($parts['scheme'])) {
$scheme = $parts['scheme'];
$url .= $scheme .':';
}
if (!empty($parts['host'])) {
$url .='//';
if (isset($parts['user'])) {
$url .= $parts['user'];
if (isset($parts['pass'])) {
$url .=':'. $parts['pass'];
}
$url .='@';
}
$url .= $parts['host'];
if (isset($parts['port']) &&
(!isset(self::$defaultPorts[$scheme]) ||
$parts['port'] != self::$defaultPorts[$scheme])
) {
$url .=':'. $parts['port'];
}
}
if (isset($parts['path']) && strlen($parts['path'])) {
if (!empty($parts['host']) && $parts['path'][0] !='/') {
$url .='/';
}
$url .= $parts['path'];
}
if (isset($parts['query'])) {
$queryStr = (string) $parts['query'];
if ($queryStr || $queryStr ==='0') {
$url .='?'. $queryStr;
}
}
if (isset($parts['fragment'])) {
$url .='#'. $parts['fragment'];
}
return $url;
}
public function __construct(
$scheme,
$host,
$username = null,
$password = null,
$port = null,
$path = null,
puzzle_Query $query = null,
$fragment = null
) {
$this->scheme = $scheme;
$this->host = $host;
$this->port = $port;
$this->username = $username;
$this->password = $password;
$this->fragment = $fragment;
if (!$query) {
$this->query = new puzzle_Query();
} else {
$this->setQuery($query);
}
$this->setPath($path);
}
public function __clone()
{
$this->query = clone $this->query;
}
public function __toString()
{
return self::buildUrl($this->getParts());
}
public function getParts()
{
return array('scheme'=> $this->scheme,'user'=> $this->username,'pass'=> $this->password,'host'=> $this->host,'port'=> $this->port,'path'=> $this->path,'query'=> $this->query,'fragment'=> $this->fragment,
);
}
public function setHost($host)
{
if (strpos($host,':') === false) {
$this->host = $host;
} else {
list($host, $port) = explode(':', $host);
$this->host = $host;
$this->setPort($port);
}
return $this;
}
public function getHost()
{
return $this->host;
}
public function setScheme($scheme)
{
if ($this->port && isset(self::$defaultPorts[$this->scheme]) &&
self::$defaultPorts[$this->scheme] == $this->port
) {
$this->port = null;
}
$this->scheme = $scheme;
return $this;
}
public function getScheme()
{
return $this->scheme;
}
public function setPort($port)
{
$this->port = $port;
return $this;
}
public function getPort()
{
if ($this->port) {
return $this->port;
} elseif (isset(self::$defaultPorts[$this->scheme])) {
return self::$defaultPorts[$this->scheme];
}
return null;
}
public function setPath($path)
{
static $search = array(' ','?');
static $replace = array('%20','%3F');
$this->path = str_replace($search, $replace, $path);
return $this;
}
public function removeDotSegments()
{
static $noopPaths = array(''=> true,'/'=> true,'*'=> true);
static $ignoreSegments = array('.'=> true,'..'=> true);
if (isset($noopPaths[$this->path])) {
return $this;
}
$results = array();
$segments = $this->getPathSegments();
foreach ($segments as $segment) {
if ($segment =='..') {
array_pop($results);
} elseif (!isset($ignoreSegments[$segment])) {
$results[] = $segment;
}
}
$newPath = implode('/', $results);
if (substr($this->path, 0, 1) ==='/'&&
substr($newPath, 0, 1) !=='/') {
$newPath ='/'. $newPath;
}
if ($newPath !='/'&& isset($ignoreSegments[end($segments)])) {
$newPath .='/';
}
$this->path = $newPath;
return $this;
}
public function addPath($relativePath)
{
if ($relativePath !='/'&&
is_string($relativePath) &&
strlen($relativePath) > 0
) {
if ($relativePath[0] !=='/'&&
substr($this->path, -1, 1) !=='/') {
$relativePath ='/'. $relativePath;
}
$this->setPath($this->path . $relativePath);
}
return $this;
}
public function getPath()
{
return $this->path;
}
public function getPathSegments()
{
return explode('/', $this->path);
}
public function setPassword($password)
{
$this->password = $password;
return $this;
}
public function getPassword()
{
return $this->password;
}
public function setUsername($username)
{
$this->username = $username;
return $this;
}
public function getUsername()
{
return $this->username;
}
public function getQuery()
{
return $this->query;
}
public function setQuery($query)
{
if ($query instanceof puzzle_Query) {
$this->query = $query;
} elseif (is_string($query)) {
$this->query = puzzle_Query::fromString($query);
} elseif (is_array($query)) {
$this->query = new puzzle_Query($query);
} else {
throw new InvalidArgumentException('Query must be a '.'QueryInterface, array, or string');
}
return $this;
}
public function getFragment()
{
return $this->fragment;
}
public function setFragment($fragment)
{
$this->fragment = $fragment;
return $this;
}
public function isAbsolute()
{
return $this->scheme && $this->host;
}
public function combine($url)
{
$url = self::fromString($url);
if (!$this->isAbsolute() && $url->isAbsolute()) {
$url = $url->combine($this);
}
$parts = $url->getParts();
if ($parts['scheme']) {
return new self(
$parts['scheme'],
$parts['host'],
$parts['user'],
$parts['pass'],
$parts['port'],
$parts['path'],
clone $parts['query'],
$parts['fragment']
);
}
if ($parts['host']) {
return new self(
$this->scheme,
$parts['host'],
$parts['user'],
$parts['pass'],
$parts['port'],
$parts['path'],
clone $parts['query'],
$parts['fragment']
);
}
if (!$parts['path'] && $parts['path'] !=='0') {
$path = $this->path ? $this->path :'';
$query = count($parts['query']) ? $parts['query'] : $this->query;
} else {
$query = $parts['query'];
if ($parts['path'][0] =='/'|| !$this->path) {
$path = $parts['path'];
} else {
$path = substr($this->path, 0, strrpos($this->path,'/') + 1) . $parts['path'];
}
}
$result = new self(
$this->scheme,
$this->host,
$this->username,
$this->password,
$this->port,
$path,
clone $query,
$parts['fragment']
);
if ($path) {
$result->removeDotSegments();
}
return $result;
}
}
interface tubepress_app_api_environment_EnvironmentInterface
{
const _ ='tubepress_app_api_environment_EnvironmentInterface';
function isPro();
function getVersion();
function getBaseUrl();
function getUserContentUrl();
function getAjaxEndpointUrl();
function getProperties();
function setUserContentUrl($url);
function setBaseUrl($url);
}
interface tubepress_app_api_event_Events
{
const GALLERY_INIT_JS ='tubepress.app.gallery.initJs';
const HTML_EXCEPTION_CAUGHT ='tubepress.app.html.exception.caught';
const HTML_GLOBAL_JS_CONFIG ='tubepress.app.html.globalJsConfig';
const HTML_GENERATION ='tubepress.app.html.generation';
const HTML_SCRIPTS ='tubepress.app.html.scripts';
const HTML_STYLESHEETS ='tubepress.app.html.stylesheets';
const HTML_SCRIPTS_ADMIN ='tubepress.app.html.scripts.admin';
const HTML_STYLESHEETS_ADMIN ='tubepress.app.html.stylesheets.admin';
const HTTP_AJAX ='tubepress.app.http.ajax';
const MEDIA_ITEM_HTTP_NEW ='tubepress.app.media.item.http.new';
const MEDIA_ITEM_HTTP_URL ='tubepress.app.media.item.http.url';
const MEDIA_ITEM_NEW ='tubepress.app.media.item.new';
const MEDIA_ITEM_REQUEST ='tubepress.app.media.item.request';
const MEDIA_PAGE_HTTP_NEW ='tubepress.app.media.page.http.new';
const MEDIA_PAGE_HTTP_URL ='tubepress.app.media.page.http.url';
const MEDIA_PAGE_NEW ='tubepress.app.media.page.new';
const MEDIA_PAGE_REQUEST ='tubepress.app.media.page.request';
const NVP_FROM_EXTERNAL_INPUT ='tubepress.app.nvp.fromExternalInput';
const OPTION_ACCEPTABLE_VALUES ='tubepress.app.option.acceptableValues';
const OPTION_DEFAULT_VALUE ='tubepress.app.option.defaultValue';
const OPTION_DESCRIPTION ='tubepress.app.option.description';
const OPTION_LABEL ='tubepress.app.option.label';
const OPTION_SET ='tubepress.app.option.set';
const TEMPLATE_SELECT ='tubepress.app.template.select';
const TEMPLATE_PRE_RENDER ='tubepress.app.template.pre';
const TEMPLATE_POST_RENDER ='tubepress.app.template.post';
}
interface tubepress_app_api_html_HtmlGeneratorInterface
{
const _ ='tubepress_app_api_html_HtmlGeneratorInterface';
function getHtml();
function getUrlsCSS();
function getUrlsJS();
function getCSS();
function getJS();
}
interface tubepress_app_api_options_ContextInterface
{
const _ ='tubepress_app_api_options_ContextInterface';
function get($optionName);
function getEphemeralOptions();
function setEphemeralOption($optionName, $optionValue);
function setEphemeralOptions(array $customOpts);
}
interface tubepress_app_api_options_Names
{
const CACHE_CLEANING_FACTOR ='cacheCleaningFactor';
const CACHE_DIRECTORY ='cacheDirectory';
const CACHE_ENABLED ='cacheEnabled';
const CACHE_LIFETIME_SECONDS ='cacheLifetimeSeconds';
const DEBUG_ON ='debugging_enabled';
const EMBEDDED_AUTOPLAY ='autoplay';
const EMBEDDED_HEIGHT ='embeddedHeight';
const EMBEDDED_WIDTH ='embeddedWidth';
const EMBEDDED_LAZYPLAY ='lazyPlay';
const EMBEDDED_LOOP ='loop';
const EMBEDDED_PLAYER_IMPL ='playerImplementation';
const EMBEDDED_SCROLL_DURATION ='embeddedScrollDuration';
const EMBEDDED_SCROLL_OFFSET ='embeddedScrollOffset';
const EMBEDDED_SCROLL_ON ='embeddedScrollOn';
const EMBEDDED_SHOW_INFO ='showInfo';
const FEED_ORDER_BY ='orderBy';
const FEED_PER_PAGE_SORT ='perPageSort';
const FEED_RESULT_COUNT_CAP ='resultCountCap';
const FEED_RESULTS_PER_PAGE ='resultsPerPage';
const FEED_ITEM_ID_BLACKLIST ='videoBlacklist';
const GALLERY_AUTONEXT ='autoNext';
const GALLERY_SOURCE ='mode';
const GALLERY_AJAX_PAGINATION ='ajaxPagination';
const GALLERY_FLUID_THUMBS ='fluidThumbs';
const GALLERY_HQ_THUMBS ='hqThumbs';
const GALLERY_PAGINATE_ABOVE ='paginationAbove';
const GALLERY_PAGINATE_BELOW ='paginationBelow';
const GALLERY_RANDOM_THUMBS ='randomize_thumbnails';
const GALLERY_THUMB_HEIGHT ='thumbHeight';
const GALLERY_THUMB_WIDTH ='thumbWidth';
const HTML_OUTPUT ='output';
const HTTP_METHOD ='httpMethod';
const HTML_HTTPS ='https';
const HTML_GALLERY_ID ='galleryId';
const META_DISPLAY_AUTHOR ='author';
const META_DISPLAY_CATEGORY ='category';
const META_DISPLAY_DESCRIPTION ='description';
const META_DISPLAY_ID ='id';
const META_DISPLAY_KEYWORDS ='tags';
const META_DISPLAY_LENGTH ='length';
const META_DISPLAY_TITLE ='title';
const META_DISPLAY_UPLOADED ='uploaded';
const META_DISPLAY_URL ='url';
const META_DISPLAY_VIEWS ='views';
const META_DATEFORMAT ='dateFormat';
const META_DESC_LIMIT ='descriptionLimit';
const META_RELATIVE_DATES ='relativeDates';
const OPTIONS_UI_DISABLED_FIELD_PROVIDERS ='disabledFieldProviderNames';
const PLAYER_LOCATION ='playerLocation';
const RESPONSIVE_EMBEDS ='responsiveEmbeds';
const SEARCH_ONLY_USER ='searchResultsRestrictedToUser';
const SEARCH_PROVIDER ='searchProvider';
const SEARCH_RESULTS_ONLY ='searchResultsOnly';
const SEARCH_RESULTS_URL ='searchResultsUrl';
const SHORTCODE_KEYWORD ='keyword';
const SINGLE_MEDIA_ITEM_ID ='video';
const TEMPLATE_CACHE_AUTORELOAD ='templateCacheAutoreload';
const TEMPLATE_CACHE_ENABLED ='templateCacheEnabled';
const TEMPLATE_CACHE_DIR ='templateCacheDirectory';
const THEME ='theme';
const THEME_ADMIN ='adminTheme';
}
interface tubepress_app_api_options_PersistenceBackendInterface
{
const _ ='tubepress_app_api_options_PersistenceBackendInterface';
function createEach(array $optionNamesToValuesMap);
function saveAll(array $optionNamesToValues);
function fetchAllCurrentlyKnownOptionNamesToValues();
}
interface tubepress_app_api_options_PersistenceInterface
{
const _ ='tubepress_app_api_options_PersistenceInterface';
function fetch($optionName);
function fetchAll();
function queueForSave($optionName, $optionValue);
function flushSaveQueue();
}
interface tubepress_app_api_options_ReferenceInterface
{
const _ ='tubepress_app_api_options_ReferenceInterface';
function getAllOptionNames();
function getDefaultValue($optionName);
function getUntranslatedDescription($optionName);
function getUntranslatedLabel($optionName);
function optionExists($optionName);
function isAbleToBeSetViaShortcode($optionName);
function isBoolean($optionName);
function isMeantToBePersisted($optionName);
function isProOnly($optionName);
function getProperty($optionName, $propertyName);
function hasProperty($optionName, $propertyName);
function getPropertyAsBoolean($optionName, $propertyName);
}
final class tubepress_app_api_options_Reference implements tubepress_app_api_options_ReferenceInterface
{
private $_valueMap;
private $_boolMap;
const PROPERTY_DEFAULT_VALUE ='defaultValue';
const PROPERTY_IS_BOOLEAN ='isBoolean';
const PROPERTY_NO_PERSIST ='isMeantToBePersisted';
const PROPERTY_NO_SHORTCODE ='isShortcodeSettable';
const PROPERTY_UNTRANSLATED_DESCRIPTION ='untranslatedDescription';
const PROPERTY_UNTRANSLATED_LABEL ='untranslatedLabel';
const PROPERTY_PRO_ONLY ='proOnly';
public function __construct(array $valueMap, array $booleanMap = array())
{
$this->_valueMap = $valueMap;
$this->_boolMap = $booleanMap;
}
public function getAllOptionNames()
{
return array_keys($this->_valueMap[self::PROPERTY_DEFAULT_VALUE]);
}
public function optionExists($optionName)
{
return array_key_exists($optionName, $this->_valueMap[self::PROPERTY_DEFAULT_VALUE]);
}
public function getProperty($optionName, $propertyName)
{
if (!$this->hasProperty($optionName, $propertyName)) {
throw new InvalidArgumentException("$propertyName is not defined for $optionName");
}
if (isset($this->_boolMap[$propertyName])) {
return in_array($optionName, $this->_boolMap[$propertyName]);
}
return $this->_valueMap[$propertyName][$optionName];
}
public function getPropertyAsBoolean($optionName, $propertyName)
{
return (bool) $this->getProperty($optionName, $propertyName);
}
public function hasProperty($optionName, $propertyName)
{
$this->_assertOptionExists($optionName);
if (isset($this->_valueMap[$propertyName]) && array_key_exists($optionName, $this->_valueMap[$propertyName])) {
return true;
}
return isset($this->_boolMap[$propertyName]);
}
public function getDefaultValue($optionName)
{
$this->_assertOptionExists($optionName);
return $this->_valueMap[self::PROPERTY_DEFAULT_VALUE][$optionName];
}
public function getUntranslatedDescription($optionName)
{
$this->_assertOptionExists($optionName);
return $this->_getOptionalProperty($optionName, self::PROPERTY_UNTRANSLATED_DESCRIPTION, null);
}
public function getUntranslatedLabel($optionName)
{
$this->_assertOptionExists($optionName);
return $this->_getOptionalProperty($optionName, self::PROPERTY_UNTRANSLATED_LABEL, null);
}
public function isAbleToBeSetViaShortcode($optionName)
{
$this->_assertOptionExists($optionName);
return !$this->_getOptionalProperty($optionName, self::PROPERTY_NO_SHORTCODE, false);
}
public function isBoolean($optionName)
{
$this->_assertOptionExists($optionName);
return is_bool($this->getProperty($optionName, self::PROPERTY_DEFAULT_VALUE));
}
public function isMeantToBePersisted($optionName)
{
$this->_assertOptionExists($optionName);
return !$this->_getOptionalProperty($optionName, self::PROPERTY_NO_PERSIST, false);
}
public function isProOnly($optionName)
{
$this->_assertOptionExists($optionName);
return $this->_getOptionalProperty($optionName, self::PROPERTY_PRO_ONLY, false);
}
private function _assertOptionExists($optionName)
{
if (!$this->optionExists($optionName)) {
throw new InvalidArgumentException("$optionName is not a know option");
}
}
private function _getOptionalProperty($optionName, $propertyName, $default)
{
if (!$this->hasProperty($optionName, $propertyName)) {
return $default;
}
return $this->getProperty($optionName, $propertyName);
}
}
interface tubepress_app_api_shortcode_ParserInterface
{
const _ ='tubepress_app_api_shortcode_ParserInterface';
function parse($content);
function getLastShortcodeUsed();
function somethingToParse($content, $trigger ="tubepress");
}
interface tubepress_platform_api_contrib_ContributableInterface
{
function getName();
function getVersion();
function getTitle();
function getAuthors();
function getLicense();
function getDescription();
function getKeywords();
function getHomepageUrl();
function getDocumentationUrl();
function getDemoUrl();
function getDownloadUrl();
function getBugTrackerUrl();
function getSourceCodeUrl();
function getForumUrl();
function getScreenshots();
function getProperties();
}
interface tubepress_app_api_theme_ThemeInterface extends tubepress_platform_api_contrib_ContributableInterface
{
const _ ='tubepress_app_api_theme_ThemeInterface';
function getUrlsJS(tubepress_platform_api_url_UrlInterface $baseUrl,
tubepress_platform_api_url_UrlInterface $userContentUrl);
function getUrlsCSS(tubepress_platform_api_url_UrlInterface $baseUrl,
tubepress_platform_api_url_UrlInterface $userContentUrl);
function getInlineCSS();
function getParentThemeName();
function hasTemplateSource($name);
function getTemplateSource($name);
function isTemplateSourceFresh($name, $time);
function getTemplateCacheKey($name);
}
class tubepress_app_impl_environment_Environment implements tubepress_app_api_environment_EnvironmentInterface
{
private static $_PROPERTY_URL_BASE ='urlBase';
private static $_PROPERTY_URL_USERCONTENT ='urlUserContent';
private static $_PROPERTY_URL_AJAX ='urlAjax';
private static $_PROPERTY_VERSION ='version';
private static $_PROPERTY_IS_PRO ='isPro';
private $_urlFactory;
private $_wpFunctionsInterface;
private $_bootSettings;
private $_properties;
public function __construct(tubepress_platform_api_url_UrlFactoryInterface $urlFactory,
tubepress_platform_api_boot_BootSettingsInterface $bootSettings)
{
$this->_urlFactory = $urlFactory;
$this->_bootSettings = $bootSettings;
$this->_properties = new tubepress_platform_impl_collection_Map();
$this->_properties->put(self::$_PROPERTY_VERSION, tubepress_platform_api_version_Version::parse('4.1.8'));
$this->_properties->put(self::$_PROPERTY_IS_PRO, false);
}
public function getBaseUrl()
{
if (!$this->_properties->containsKey(self::$_PROPERTY_URL_BASE)) {
$fromBootSettings = $this->_bootSettings->getUrlBase();
if ($fromBootSettings) {
$this->_properties->put(self::$_PROPERTY_URL_BASE, $fromBootSettings);
return $fromBootSettings;
}
if (!$this->_isWordPress()) {
throw new RuntimeException('Please specify TubePress base URL in tubepress-content/config/settings.php');
}
$baseName = basename(TUBEPRESS_ROOT);
$prefix = $this->_getWpContentUrl();
$url = rtrim($prefix,'/') . "/plugins/$baseName";
$url = $this->_toUrl($url);
$this->_properties->put(self::$_PROPERTY_URL_BASE, $url);
}
return $this->_properties->get(self::$_PROPERTY_URL_BASE);
}
public function setBaseUrl($url)
{
$asUrl = $this->_toUrl($url);
$this->_properties->put(self::$_PROPERTY_URL_BASE, $asUrl);
}
public function getUserContentUrl()
{
if (!$this->_properties->containsKey(self::$_PROPERTY_URL_USERCONTENT)) {
$fromBootSettings = $this->_bootSettings->getUrlUserContent();
if ($fromBootSettings) {
$this->_properties->put(self::$_PROPERTY_URL_USERCONTENT, $fromBootSettings);
return $fromBootSettings;
}
if ($this->_isWordPress()) {
$url = $this->_getWpContentUrl();
} else {
$url = $this->getBaseUrl()->toString();
}
$url = rtrim($url,'/') .'/tubepress-content';
$url = $this->_toUrl($url);
$this->_properties->put(self::$_PROPERTY_URL_USERCONTENT, $url);
}
return $this->_properties->get(self::$_PROPERTY_URL_USERCONTENT);
}
public function setUserContentUrl($url)
{
$asUrl = $this->_toUrl($url);
$this->_properties->put(self::$_PROPERTY_URL_USERCONTENT, $asUrl);
}
public function getAjaxEndpointUrl()
{
if (!$this->_properties->containsKey(self::$_PROPERTY_URL_AJAX)) {
$fromBootSettings = $this->_bootSettings->getUrlAjaxEndpoint();
if ($fromBootSettings) {
$this->_properties->put(self::$_PROPERTY_URL_AJAX, $fromBootSettings);
return $fromBootSettings;
}
if ($this->_isWordPress()) {
$url = $this->_wpFunctionsInterface->admin_url('admin-ajax.php');
} else {
$url = $this->getBaseUrl()->getClone()->setPath('/web/php/ajaxEndpoint.php');
}
$url = $this->_toUrl($url);
$this->_properties->put(self::$_PROPERTY_URL_AJAX, $url);
}
return $this->_properties->get(self::$_PROPERTY_URL_AJAX);
}
public function isPro()
{
return $this->_properties->getAsBoolean(self::$_PROPERTY_IS_PRO);
}
public function getVersion()
{
return $this->_properties->get(self::$_PROPERTY_VERSION);
}
public function getProperties()
{
return $this->_properties;
}
public function setWpFunctionsInterface($wpFunctionsInterface)
{
if (!is_a($wpFunctionsInterface,'tubepress_wordpress_impl_wp_WpFunctions')) {
throw new InvalidArgumentException('Invalid argument to tubepress_app_impl_environment_Environment::setWpFunctionsInterface');
}
$this->_wpFunctionsInterface = $wpFunctionsInterface;
}
public function markAsPro()
{
$this->_properties->put(self::$_PROPERTY_IS_PRO, true);
}
private function _toUrl($url)
{
if (!($url instanceof tubepress_platform_api_url_UrlInterface)) {
$url = $this->_urlFactory->fromString($url);
}
$url->freeze();
return $url;
}
private function _isWordPress()
{
return defined('DB_USER') && defined('ABSPATH');
}
private function _getWpContentUrl()
{
$isWpMuDomainMapped = defined('DOMAIN_MAPPING') && constant('DOMAIN_MAPPING') && defined('COOKIE_DOMAIN');
if ($isWpMuDomainMapped) {
$scheme = $this->_wpFunctionsInterface->is_ssl() ?'https://':'http://';
return $scheme . constant('COOKIE_DOMAIN') .'/wp-content';
}
return $this->_wpFunctionsInterface->content_url();
}
}
class tubepress_app_impl_html_CssAndJsGenerationHelper
{
private $_eventDispatcher;
private $_themeRegistry;
private $_templating;
private $_currentThemeService;
private $_environment;
private $_cache;
private $_eventNameUrlsCss;
private $_eventNameUrlsJs;
private $_templateNameCss;
private $_templateNameJs;
public function __construct(tubepress_lib_api_event_EventDispatcherInterface $eventDispatcher,
tubepress_platform_api_contrib_RegistryInterface $themeRegistry,
tubepress_lib_api_template_TemplatingInterface $templating,
tubepress_app_impl_theme_CurrentThemeService $currentThemeService,
tubepress_app_api_environment_EnvironmentInterface $environment,
$eventNameUrlsCss,
$eventNameUrlsJs,
$templateNameCss,
$templateNameJs)
{
$this->_eventDispatcher = $eventDispatcher;
$this->_themeRegistry = $themeRegistry;
$this->_templating = $templating;
$this->_currentThemeService = $currentThemeService;
$this->_environment = $environment;
$this->_eventNameUrlsCss = $eventNameUrlsCss;
$this->_eventNameUrlsJs = $eventNameUrlsJs;
$this->_templateNameCss = $templateNameCss;
$this->_templateNameJs = $templateNameJs;
$this->_cache = new tubepress_platform_impl_collection_Map();
}
public function getUrlsCSS()
{
return $this->_getUrls('cached-urls-css','getUrlsCSS', $this->_eventNameUrlsCss);
}
public function getUrlsJS()
{
return $this->_getUrls('cached-urls-js','getUrlsJS', $this->_eventNameUrlsJs);
}
private function _getUrls($cacheKey, $themeGetter, $eventName)
{
if (!$this->_cache->containsKey($cacheKey)) {
$currentTheme = $this->_currentThemeService->getCurrentTheme();
$themeScripts = $this->_recursivelyGetFromTheme($currentTheme, $themeGetter);
$urls = $this->_fireEventAndReturnSubject($eventName, $themeScripts);
$this->_cache->put($cacheKey, $urls);
}
return $this->_cache->get($cacheKey);
}
public function getCSS()
{
$cssUrls = $this->getUrlsCSS();
$currentTheme = $this->_currentThemeService->getCurrentTheme();
$css = $this->_recursivelyGetFromTheme($currentTheme,'getInlineCSS');
return $this->_templating->renderTemplate($this->_templateNameCss, array('inlineCSS'=> $css,'urls'=> $cssUrls
));
}
public function getJS()
{
$jsUrls = $this->getUrlsJS();
return $this->_templating->renderTemplate($this->_templateNameJs, array('urls'=> $jsUrls));
}
private function _fireEventAndReturnSubject($eventName, $raw)
{
if ($raw instanceof tubepress_lib_api_event_EventInterface) {
$event = $raw;
} else {
$event = $this->_eventDispatcher->newEventInstance($raw);
}
$this->_eventDispatcher->dispatch($eventName, $event);
return $event->getSubject();
}
private function _recursivelyGetFromTheme(tubepress_app_api_theme_ThemeInterface $theme, $getter)
{
$toReturn = $theme->$getter(
$this->_environment->getBaseUrl(),
$this->_environment->getUserContentUrl()
);
$parentThemeName = $theme->getParentThemeName();
if (!$parentThemeName) {
return $toReturn;
}
$theme = $this->_themeRegistry->getInstanceByName($parentThemeName);
if (!$theme) {
return $toReturn;
}
$fromParent = $this->_recursivelyGetFromTheme($theme, $getter);
if (is_array($fromParent)) {
$toReturn = array_merge($fromParent, $toReturn);
} else {
$toReturn = $fromParent . $toReturn;
}
return $toReturn;
}
}
class tubepress_app_impl_html_HtmlGenerator implements tubepress_app_api_html_HtmlGeneratorInterface
{
private $_eventDispatcher;
private $_cssJsGenerationHelper;
private $_templating;
private $_cache;
private $_environment;
public function __construct(tubepress_lib_api_event_EventDispatcherInterface $eventDispatcher,
tubepress_lib_api_template_TemplatingInterface $templating,
tubepress_app_impl_html_CssAndJsGenerationHelper $cssAndJsGenerationHelper,
tubepress_app_api_environment_EnvironmentInterface $environment)
{
$this->_eventDispatcher = $eventDispatcher;
$this->_cssJsGenerationHelper = $cssAndJsGenerationHelper;
$this->_templating = $templating;
$this->_environment = $environment;
$this->_cache = new tubepress_platform_impl_collection_Map();
}
public function getHtml()
{
try {
$htmlProviderSelectionEvent = $this->_eventDispatcher->newEventInstance('');
$this->_eventDispatcher->dispatch(tubepress_app_api_event_Events::HTML_GENERATION, $htmlProviderSelectionEvent);
$html = $htmlProviderSelectionEvent->getSubject();
if ($html === null) {
throw new RuntimeException('Unable to generate HTML.');
}
return $html;
} catch (Exception $e) {
$event = $this->_eventDispatcher->newEventInstance($e);
$this->_eventDispatcher->dispatch(tubepress_app_api_event_Events::HTML_EXCEPTION_CAUGHT, $event);
$args = array('exception'=> $e);
$html = $this->_templating->renderTemplate('exception/static', $args);
return $html;
}
}
public function getUrlsCSS()
{
return $this->_cssJsGenerationHelper->getUrlsCSS();
}
public function getUrlsJS()
{
return $this->_cssJsGenerationHelper->getUrlsJs();
}
public function getCSS()
{
return $this->_cssJsGenerationHelper->getCSS();
}
public function getJS()
{
return $this->_cssJsGenerationHelper->getJS();
}
public function onScripts(tubepress_lib_api_event_EventInterface $event)
{
$existingUrls = $event->getSubject();
$tubepressJsUrl = $this->_environment->getBaseUrl()->getClone();
$tubepressJsUrl->addPath('/web/js/tubepress.js');
array_unshift($existingUrls, $tubepressJsUrl);
$event->setSubject($existingUrls);
}
}
interface tubepress_lib_api_http_AjaxInterface
{
const _ ='tubepress_lib_api_http_AjaxInterface';
function handle();
}
class tubepress_app_impl_http_PrimaryAjaxHandler implements tubepress_lib_api_http_AjaxInterface
{
private $_logger;
private $_isDebugEnabled;
private $_requestParameters;
private $_responseCode;
private $_eventDispatcher;
private $_templating;
public function __construct(tubepress_platform_api_log_LoggerInterface $logger,
tubepress_lib_api_http_RequestParametersInterface $requestParams,
tubepress_lib_api_http_ResponseCodeInterface $responseCode,
tubepress_lib_api_event_EventDispatcherInterface $eventDispatcher,
tubepress_lib_api_template_TemplatingInterface $templating)
{
$this->_logger = $logger;
$this->_isDebugEnabled = $logger->isEnabled();
$this->_requestParameters = $requestParams;
$this->_responseCode = $responseCode;
$this->_eventDispatcher = $eventDispatcher;
$this->_templating = $templating;
}
public function handle()
{
if ($this->_isDebugEnabled) {
$this->_logger->debug('Handling incoming request');
}
if (!$this->_requestParameters->hasParam('tubepress_action')) {
$this->_errorOut(new RuntimeException('Missing "tubepress_action" parameter'), 400);
return;
}
$actionName = $this->_requestParameters->getParamValue('tubepress_action');
$ajaxEvent = $this->_eventDispatcher->newEventInstance();
try {
$this->_eventDispatcher->dispatch(tubepress_app_api_event_Events::HTTP_AJAX . ".$actionName", $ajaxEvent);
} catch (Exception $e) {
$this->_errorOut($e, 500);
return;
}
$resultingArgs = $ajaxEvent->getArguments();
if (!array_key_exists('handled', $resultingArgs) || !$resultingArgs['handled']) {
$this->_errorOut(new RuntimeException('Action not handled'), 400);
}
}
private function _errorOut(Exception $e, $code)
{
$this->_responseCode->setResponseCode($code);
$event = $this->_eventDispatcher->newEventInstance($e);
$this->_eventDispatcher->dispatch(tubepress_app_api_event_Events::HTML_EXCEPTION_CAUGHT, $event);
$args = array('exception'=> $e
);
$response = $this->_templating->renderTemplate('exception/ajax', $args);
echo $response;
}
}
interface tubepress_lib_api_http_RequestParametersInterface
{
const _ ='tubepress_lib_api_http_RequestParametersInterface';
function getParamValue($name);
function getParamValueAsInt($name, $default);
function hasParam($name);
function getAllParams();
}
class tubepress_app_impl_http_RequestParameters implements tubepress_lib_api_http_RequestParametersInterface
{
private $_cachedMergedGetAndPostArray;
private $_eventDispatcher;
public function __construct(tubepress_lib_api_event_EventDispatcherInterface $eventDispatcher)
{
$this->_eventDispatcher = $eventDispatcher;
}
public function getParamValue($name)
{
if (!($this->hasParam($name))) {
return null;
}
$request = $this->_getGETandPOSTarray();
$rawValue = $request[$name];
$event = $this->_eventDispatcher->newEventInstance(
$rawValue,
array('optionName'=> $name)
);
$this->_eventDispatcher->dispatch(
tubepress_app_api_event_Events::NVP_FROM_EXTERNAL_INPUT,
$event
);
$event = $this->_eventDispatcher->newEventInstance($event->getSubject(), array('optionName'=> $name
));
$this->_eventDispatcher->dispatch(
tubepress_app_api_event_Events::NVP_FROM_EXTERNAL_INPUT . ".$name",
$event
);
return $event->getSubject();
}
public function getParamValueAsInt($name, $default)
{
$raw = $this->getParamValue($name);
if (! is_numeric($raw) || ($raw < 1)) {
return $default;
}
return (int) $raw;
}
public function hasParam($name)
{
$request = $this->_getGETandPOSTarray();
return array_key_exists($name, $request);
}
public function getAllParams()
{
$toReturn = array();
$request = $this->_getGETandPOSTarray();
foreach ($request as $key => $value) {
$toReturn[$key] = $this->getParamValue($key);
}
return $toReturn;
}
private function _getGETandPOSTarray()
{
if (! isset($this->_cachedMergedGetAndPostArray)) {
$this->_cachedMergedGetAndPostArray = array_merge($_GET, $_POST);
}
return $this->_cachedMergedGetAndPostArray;
}
}
class tubepress_app_impl_listeners_html_jsconfig_BaseUrlSetter
{
private $_environment;
public function __construct(tubepress_app_api_environment_EnvironmentInterface $environment)
{
$this->_environment = $environment;
}
public function onGlobalJsConfig(tubepress_lib_api_event_EventInterface $event)
{
$config = $event->getSubject();
if (!isset($config['urls'])) {
$config['urls'] = array();
}
$baseUrl = $this->_environment->getBaseUrl();
$userContentUrl = $this->_environment->getUserContentUrl();
$ajaxEndpointUrl = $this->_environment->getAjaxEndpointUrl();
$config['urls']['base'] = "$baseUrl";
$config['urls']['usr'] = "$userContentUrl";
$config['urls']['ajax'] = "$ajaxEndpointUrl";
$event->setSubject($config);
}
}
class tubepress_app_impl_listeners_template_post_CssJsPostListener
{
private $_eventDispatcher;
private $_requestParameters;
public function __construct(tubepress_lib_api_event_EventDispatcherInterface $eventDispatcher,
tubepress_lib_api_http_RequestParametersInterface $requestParams)
{
$this->_eventDispatcher = $eventDispatcher;
$this->_requestParameters = $requestParams;
}
public function onPostScriptsTemplateRender(tubepress_lib_api_event_EventInterface $event)
{
$jsEvent = $this->_eventDispatcher->newEventInstance(array());
$this->_eventDispatcher->dispatch(tubepress_app_api_event_Events::HTML_GLOBAL_JS_CONFIG, $jsEvent);
$args = $jsEvent->getSubject();
$asJson = json_encode($args);
$html = $event->getSubject();
$toPrepend =<<<EOT
<script type="text/javascript">var TubePressJsConfig = $asJson;</script>
EOT
;
$event->setSubject($toPrepend . $html);
}
public function onPostStylesTemplateRender(tubepress_lib_api_event_EventInterface $event)
{
$html = $event->getSubject();
$page = $this->_requestParameters->getParamValueAsInt('tubepress_page', 1);
if ($page > 1) {
$html .="\n".'<meta name="robots" content="noindex, nofollow" />';
}
$event->setSubject($html);
}
}
class tubepress_app_impl_log_HtmlLogger implements tubepress_platform_api_log_LoggerInterface
{
private $_enabled;
private $_bootMessageBuffer;
private $_shouldBuffer;
private $_timezone;
public function __construct(tubepress_app_api_options_ContextInterface $context,
tubepress_lib_api_http_RequestParametersInterface $requestParams)
{
$loggingRequested = $requestParams->hasParam('tubepress_debug') && $requestParams->getParamValue('tubepress_debug') === true;
$loggingEnabled = $context->get(tubepress_app_api_options_Names::DEBUG_ON);
$this->_enabled = $loggingRequested && $loggingEnabled;
$this->_bootMessageBuffer = array();
$this->_shouldBuffer = true;
$this->_timezone = new DateTimeZone(@date_default_timezone_get() ? @date_default_timezone_get() :'UTC');
}
public function onBootComplete()
{
if (!$this->_enabled) {
unset($this->_bootMessageBuffer);
return;
}
$this->_shouldBuffer = false;
foreach ($this->_bootMessageBuffer as $message) {
echo $message;
}
}
public function isEnabled()
{
return $this->_enabled;
}
public function debug($message, array $context = array())
{
$this->_write($message, $context, false);
}
public function error($message, array $context = array())
{
$this->_write($message, $context, true);
}
private function _write($message, array $context, $error)
{
if (!$this->_enabled) {
return;
}
$finalMessage = $this->_getFormattedMessage($message, $context, $error);
if ($this->_shouldBuffer) {
$this->_bootMessageBuffer[] = $finalMessage;
} else {
echo $finalMessage;
}
}
private function _getFormattedMessage($message, array $context, $error)
{
$dateTime = $this->_createDateTimeFromFormat();
$formattedTime = $dateTime->format('i:s.u');
$level = $error ?'ERROR':'INFO';
$color = $error ?'red':'inherit';
if (!empty($context)) {
$message .=' '. json_encode($context);
}
return "<span style=\"color: $color\">[$formattedTime - $level] $message</span><br />\n";
}
public function ___write($message, array $context, $error)
{
$this->_write($message, $context, $error);
}
private function _createDateTimeFromFormat()
{
if (version_compare(PHP_VERSION,'5.3') >= 0) {
return DateTime::createFromFormat('U.u', sprintf('%.6F', microtime(true)), $this->_timezone)->setTimezone($this->_timezone);
}
$time = new DateTime('@'. time());
$time->setTimezone($this->_timezone);
return $time;
}
}
class tubepress_app_impl_options_Context implements tubepress_app_api_options_ContextInterface
{
private $_ephemeralOptions = array();
private $_persistence;
private $_optionReference;
private $_eventDispatcher;
public function __construct(tubepress_app_api_options_PersistenceInterface $persistence,
tubepress_lib_api_event_EventDispatcherInterface $eventDispatcher,
tubepress_app_api_options_ReferenceInterface $reference)
{
$this->_eventDispatcher = $eventDispatcher;
$this->_persistence = $persistence;
$this->_optionReference = $reference;
}
public function get($optionName)
{
if (array_key_exists($optionName, $this->_ephemeralOptions)) {
return $this->_ephemeralOptions[$optionName];
}
try {
return $this->_persistence->fetch($optionName);
} catch (InvalidArgumentException $e) {
if ($this->_optionReference->optionExists($optionName) &&
!$this->_optionReference->isMeantToBePersisted($optionName)) {
return null;
}
throw $e;
}
}
public function getEphemeralOptions()
{
return $this->_ephemeralOptions;
}
public function setEphemeralOption($optionName, $optionValue)
{
$errors = $this->getErrors($optionName, $optionValue);
if (count($errors) === 0) {
$this->_ephemeralOptions[$optionName] = $optionValue;
return null;
}
return $errors[0];
}
public function setEphemeralOptions(array $customOpts)
{
$toReturn = array();
$this->_ephemeralOptions = array();
foreach ($customOpts as $name => $value) {
$error = $this->setEphemeralOption($name, $value);
if ($error !== null) {
$toReturn[] = $error;
}
}
return $toReturn;
}
protected function getErrors($optionName, &$optionValue)
{
$externallyCleanedValue = $this->_dispatchForExternalInput($optionName, $optionValue);
$event = $this->_dispatchForOptionSet(
$optionName,
$externallyCleanedValue,
array(),
tubepress_app_api_event_Events::OPTION_SET .'.'. $optionName
);
$event = $this->_dispatchForOptionSet(
$optionName,
$event->getArgument('optionValue'),
$event->getSubject(),
tubepress_app_api_event_Events::OPTION_SET
);
$optionValue = $event->getArgument('optionValue');
return $event->getSubject();
}
private function _dispatchForExternalInput($optionName, $optionValue)
{
$event = $this->_eventDispatcher->newEventInstance($optionValue, array('optionName'=> $optionName
));
$this->_eventDispatcher->dispatch(tubepress_app_api_event_Events::NVP_FROM_EXTERNAL_INPUT, $event);
return $event->getSubject();
}
private function _dispatchForOptionSet($optionName, $optionValue, array $errors, $eventName)
{
$event = $this->_eventDispatcher->newEventInstance($errors, array('optionName'=> $optionName,'optionValue'=> $optionValue
));
$this->_eventDispatcher->dispatch($eventName, $event);
return $event;
}
}
class tubepress_app_impl_options_DispatchingReference implements tubepress_app_api_options_ReferenceInterface
{
private $_eventDispatcher;
private $_delegateReferences = array();
private $_nameToReferenceMap;
public function __construct(tubepress_lib_api_event_EventDispatcherInterface $eventDispatcher)
{
$this->_eventDispatcher = $eventDispatcher;
}
public function getAllOptionNames()
{
$this->_initCache();
return array_keys($this->_nameToReferenceMap);
}
public function optionExists($optionName)
{
$this->_initCache();
return array_key_exists($optionName, $this->_nameToReferenceMap);
}
public function getProperty($optionName, $propertyName)
{
$this->_assertExists($optionName);
return $this->_nameToReferenceMap[$optionName]->getProperty($optionName, $propertyName);
}
public function hasProperty($optionName, $propertyName)
{
$this->_assertExists($optionName);
return $this->_nameToReferenceMap[$optionName]->hasProperty($optionName, $propertyName);
}
public function getPropertyAsBoolean($optionName, $propertyName)
{
return (bool) $this->getProperty($optionName, $propertyName);
}
public function getDefaultValue($optionName)
{
$this->_assertExists($optionName);
$raw = $this->_nameToReferenceMap[$optionName]->getDefaultValue($optionName);
return $this->_dispatchEventAndReturnSubject($optionName, $raw,
tubepress_app_api_event_Events::OPTION_DEFAULT_VALUE);
}
public function getUntranslatedDescription($optionName)
{
$this->_assertExists($optionName);
$raw = $this->_nameToReferenceMap[$optionName]->getUntranslatedDescription($optionName);
return $this->_dispatchEventAndReturnSubject($optionName, $raw,
tubepress_app_api_event_Events::OPTION_DESCRIPTION);
}
public function getUntranslatedLabel($optionName)
{
$this->_assertExists($optionName);
$raw = $this->_nameToReferenceMap[$optionName]->getUntranslatedLabel($optionName);
return $this->_dispatchEventAndReturnSubject($optionName, $raw,
tubepress_app_api_event_Events::OPTION_LABEL);
}
public function isAbleToBeSetViaShortcode($optionName)
{
$this->_assertExists($optionName);
return $this->_nameToReferenceMap[$optionName]->isAbleToBeSetViaShortcode($optionName);
}
public function isBoolean($optionName)
{
$this->_assertExists($optionName);
return $this->_nameToReferenceMap[$optionName]->isBoolean($optionName);
}
public function isMeantToBePersisted($optionName)
{
$this->_assertExists($optionName);
return $this->_nameToReferenceMap[$optionName]->isMeantToBePersisted($optionName);
}
public function isProOnly($optionName)
{
$this->_assertExists($optionName);
return $this->_nameToReferenceMap[$optionName]->isProOnly($optionName);
}
public function setReferences(array $references)
{
$this->_delegateReferences = $references;
}
private function _initCache()
{
if (isset($this->_nameToReferenceMap)) {
return;
}
$this->_nameToReferenceMap = array();
foreach ($this->_delegateReferences as $delegateReference) {
$allOptions = $delegateReference->getAllOptionNames();
foreach ($allOptions as $optionName) {
$this->_nameToReferenceMap[$optionName] = $delegateReference;
}
}
}
private function _assertExists($optionName)
{
if (!$this->optionExists($optionName)) {
throw new InvalidArgumentException("$optionName is not a known option");
}
}
private function _dispatchEventAndReturnSubject($optionName, $value, $eventName)
{
$event = $this->_eventDispatcher->newEventInstance($value, array('optionName'=> $optionName
));
$this->_eventDispatcher->dispatch("$eventName.$optionName", $event);
return $event->getSubject();
}
}
class tubepress_app_impl_options_Persistence implements tubepress_app_api_options_PersistenceInterface
{
private $_saveQueue;
private $_cachedOptions;
private $_flagCheckedForMissingOptions = false;
private $_optionsReference;
private $_eventDispatcher;
private $_backend;
public function __construct(tubepress_app_api_options_ReferenceInterface $reference,
tubepress_lib_api_event_EventDispatcherInterface $eventDispatcher,
tubepress_app_api_options_PersistenceBackendInterface $backend)
{
$this->_eventDispatcher = $eventDispatcher;
$this->_optionsReference = $reference;
$this->_backend = $backend;
}
public function fetch($optionName)
{
$allOptions = $this->fetchAll();
if (array_key_exists($optionName, $allOptions)) {
return $allOptions[$optionName];
}
throw new InvalidArgumentException('No such option: '. $optionName);
}
public function fetchAll()
{
if (!isset($this->_cachedOptions)) {
$this->_cachedOptions = $this->_backend->fetchAllCurrentlyKnownOptionNamesToValues();
$this->_addAnyMissingOptions($this->_cachedOptions);
}
return $this->_cachedOptions;
}
public function queueForSave($optionName, $optionValue)
{
if (!isset($this->_saveQueue)) {
$this->_saveQueue = array();
}
if (!$this->_optionsReference->isMeantToBePersisted($optionName)) {
return null;
}
$errors = $this->_getErrors($optionName, $optionValue);
if (count($errors) > 0) {
return $errors[0];
}
if ($this->_noChangeBetweenIncomingAndCurrent($optionName, $optionValue)) {
return null;
}
$this->_saveQueue[$optionName] = $optionValue;
return null;
}
public function flushSaveQueue()
{
if (!isset($this->_saveQueue) || count($this->_saveQueue) === 0) {
return null;
}
$result = $this->_backend->saveAll($this->_saveQueue);
unset($this->_saveQueue);
$this->_forceReloadOfOptionsCache();
return $result;
}
private function _forceReloadOfOptionsCache()
{
unset($this->_cachedOptions);
$this->fetchAll();
}
private function _addAnyMissingOptions(array $optionsInThisStorageManager)
{
if ($this->_flagCheckedForMissingOptions) {
return;
}
$optionNamesFromProvider = $this->_optionsReference->getAllOptionNames();
$toPersist = array();
$missingOptions = array_diff($optionNamesFromProvider, array_keys($optionsInThisStorageManager));
foreach ($missingOptions as $optionName) {
if ($this->_optionsReference->isMeantToBePersisted($optionName)) {
$toPersist[$optionName] = $this->_optionsReference->getDefaultValue($optionName);
}
}
if (!empty($toPersist)) {
$this->_backend->createEach($toPersist);
$this->_forceReloadOfOptionsCache();
}
$this->_flagCheckedForMissingOptions = true;
}
private function _noChangeBetweenIncomingAndCurrent($optionName, $filteredValue)
{
$boolean = $this->_optionsReference->isBoolean($optionName);
$currentValue = $this->fetch($optionName);
if ($boolean) {
return ((boolean) $filteredValue) === ((boolean) $currentValue);
}
return $currentValue == $filteredValue;
}
private function _getErrors($optionName, &$optionValue)
{
$externallyCleanedValue = $this->_dispatchForExternalInput($optionName, $optionValue);
$event = $this->_dispatch(
$optionName,
$externallyCleanedValue,
array(),
tubepress_app_api_event_Events::OPTION_SET .'.'. $optionName
);
$event = $this->_dispatch($optionName,
$event->getArgument('optionValue'),
$event->getSubject(), tubepress_app_api_event_Events::OPTION_SET
);
$optionValue = $event->getArgument('optionValue');
return $event->getSubject();
}
private function _dispatch($optionName, $optionValue, array $errors, $eventName)
{
$event = $this->_eventDispatcher->newEventInstance($errors, array('optionName'=> $optionName,'optionValue'=> $optionValue
));
$this->_eventDispatcher->dispatch($eventName, $event);
return $event;
}
private function _dispatchForExternalInput($optionName, $optionValue)
{
$event = $this->_eventDispatcher->newEventInstance($optionValue, array('optionName'=> $optionName
));
$this->_eventDispatcher->dispatch(tubepress_app_api_event_Events::NVP_FROM_EXTERNAL_INPUT, $event);
return $event->getSubject();
}
}
class tubepress_app_impl_shortcode_Parser implements tubepress_app_api_shortcode_ParserInterface
{
private $_logger;
private $_shouldLog;
private $_context;
private $_eventDispatcher;
private $_stringUtils;
private $_lastShortcodeUsed = null;
public function __construct(tubepress_platform_api_log_LoggerInterface $logger,
tubepress_app_api_options_ContextInterface $context,
tubepress_lib_api_event_EventDispatcherInterface $eventDispatcher,
tubepress_platform_api_util_StringUtilsInterface $stringUtils)
{
$this->_logger = $logger;
$this->_shouldLog = $logger->isEnabled();
$this->_context = $context;
$this->_eventDispatcher = $eventDispatcher;
$this->_stringUtils = $stringUtils;
}
public function parse($content)
{
try {
$this->_wrappedParse($content);
} catch (Exception $e) {
if ($this->_shouldLog) {
$this->_logger->error('Caught exception when parsing shortcode: '. $e->getMessage());
}
}
}
private function _wrappedParse($content)
{
$keyword = $this->_context->get(tubepress_app_api_options_Names::SHORTCODE_KEYWORD);
if (!$this->somethingToParse($content, $keyword)) {
return;
}
preg_match("/\[$keyword\b(.*)\]/", $content, $matches);
if ($this->_shouldLog) {
$this->_logger->debug(sprintf('Found a shortcode: %s', $this->_stringUtils->redactSecrets($matches[0])));
}
$this->_lastShortcodeUsed = $matches[0];
if (isset($matches[1]) && $matches[1] !='') {
$text = preg_replace('/[\x{00a0}\x{200b}]+/u',' ', $matches[1]);
$text = self::_convertQuotes($text);
$pattern ='/(\w+)\s*=\s*"([^"]*)"(?:\s*,)?(?:\s|$)|(\w+)\s*=\s*\'([^\']*)\'(?:\s*,)?(?:\s|$)|(\w+)\s*=\s*([^\s\'"]+)(?:\s*,)?(?:\s|$)/';
if ( preg_match_all($pattern, $text, $match, PREG_SET_ORDER) ) {
if ($this->_shouldLog) {
$this->_logger->debug(sprintf('Candidate options detected in shortcode: %s', $this->_stringUtils->redactSecrets($matches[0])));
}
$toReturn = $this->_buildNameValuePairArray($match);
$this->_context->setEphemeralOptions($toReturn);
}
} else {
if ($this->_shouldLog) {
$this->_logger->debug(sprintf('No custom options detected in shortcode: %s', $this->_stringUtils->redactSecrets($matches[0])));
}
}
}
public function somethingToParse($content, $trigger ="tubepress")
{
return preg_match("/\[$trigger\b(.*)\]/", $content) === 1;
}
public function getLastShortcodeUsed()
{
return $this->_lastShortcodeUsed;
}
private function _buildNameValuePairArray($match)
{
$toReturn = array();
$value = null;
foreach ($match as $m) {
if (! empty($m[1])) {
$name = $m[1];
$value = $m[2];
} elseif (! empty($m[3])) {
$name = $m[3];
$value = $m[4];
} elseif (! empty($m[5])) {
$name = $m[5];
$value = $m[6];
}
if (! isset($name) || ! isset($value)) {
continue;
}
if ($this->_shouldLog) {
$this->_logger->debug(sprintf('Name-value pair detected: %s = "%s" (unfiltered)', $name, $this->_stringUtils->redactSecrets($value)));
}
$event = $this->_eventDispatcher->newEventInstance(
$value,
array('optionName'=> $name)
);
$this->_eventDispatcher->dispatch(
tubepress_app_api_event_Events::NVP_FROM_EXTERNAL_INPUT,
$event
);
$filtered = $event->getSubject();
$event = $this->_eventDispatcher->newEventInstance($filtered, array('optionName'=> $name
));
$this->_eventDispatcher->dispatch(
tubepress_app_api_event_Events::NVP_FROM_EXTERNAL_INPUT . ".$name",
$event
);
$filtered = $event->getSubject();
if ($this->_shouldLog) {
$this->_logger->debug(sprintf('Name-value pair detected: %s = "%s" (filtered)', $name, $this->_stringUtils->redactSecrets($filtered)));
}
$toReturn[$name] = $filtered;
}
return $toReturn;
}
private static function _convertQuotes($text)
{
$converted = str_replace(array('&#8216;','&#8217;','&#8242;'),'\'', $text);
return str_replace(array('&#34;','&#8220;','&#8221;','&#8243;'),'"', $converted);
}
}
class tubepress_app_impl_template_DelegatingEngine extends ehough_templating_DelegatingEngine
{
private $_logger;
private $_shouldLog;
public function __construct(array $engines = array(), tubepress_platform_api_log_LoggerInterface $logger)
{
parent::__construct($engines);
$this->_logger = $logger;
$this->_shouldLog = $this->_logger->isEnabled();
}
public function getEngine($name)
{
foreach ($this->engines as $engine) {
if (!$engine->supports($name)) {
if ($this->_shouldLog) {
$this->_logger->debug(sprintf('Template engine <code>%s</code> does not support template <code>%s</code>',
get_class($engine),
$name
));
}
continue;
}
if (!$engine->exists($name)) {
if ($this->_shouldLog) {
$this->_logger->debug(sprintf('Template engine <code>%s</code> cannot find template <code>%s</code>',
get_class($engine),
$name
));
}
continue;
}
if ($this->_shouldLog) {
$this->_logger->debug(sprintf('Template engine <code>%s</code> will handle template <code>%s</code>',
get_class($engine),
$name
));
}
return $engine;
}
throw new RuntimeException(sprintf('Template <code>%s</code> not found.', $name));
}
}
class tubepress_app_impl_template_php_Support implements ehough_templating_loader_LoaderInterface, ehough_templating_TemplateNameParserInterface
{
private $_themeTemplateLocator;
public function __construct(tubepress_app_impl_template_ThemeTemplateLocator $locator)
{
$this->_themeTemplateLocator = $locator;
}
public function load(ehough_templating_TemplateReferenceInterface $template)
{
if (!$this->_themeTemplateLocator->exists($template->getLogicalName())) {
return false;
}
$path = $this->_themeTemplateLocator->getAbsolutePath($template->getLogicalName());
return new ehough_templating_storage_FileStorage($path);
}
public function isFresh(ehough_templating_TemplateReferenceInterface $template, $time)
{
return $this->_themeTemplateLocator->isFresh($template->getLogicalName(), $time);
}
public function parse($name)
{
return new ehough_templating_TemplateReference("$name.tpl.php",'php');
}
}
interface tubepress_lib_api_template_TemplatingInterface
{
const _ ='tubepress_lib_api_template_TemplatingInterface';
function renderTemplate($name, array $templateVars = array());
}
class tubepress_app_impl_template_TemplatingService implements tubepress_lib_api_template_TemplatingInterface
{
private $_delegate;
private $_eventDispatcher;
public function __construct(ehough_templating_EngineInterface $delegate,
tubepress_lib_api_event_EventDispatcherInterface $eventDispatcher)
{
$this->_delegate = $delegate;
$this->_eventDispatcher = $eventDispatcher;
}
public function renderTemplate($originalTemplateName, array $templateVars = array())
{
$nameSelectionEvent = $this->_eventDispatcher->newEventInstance($originalTemplateName, $templateVars);
$this->_eventDispatcher->dispatch(tubepress_app_api_event_Events::TEMPLATE_SELECT . ".$originalTemplateName", $nameSelectionEvent);
$newTemplateName = $nameSelectionEvent->getSubject();
$preRenderEvent = $this->_eventDispatcher->newEventInstance($nameSelectionEvent->getArguments());
$this->_eventDispatcher->dispatch(tubepress_app_api_event_Events::TEMPLATE_PRE_RENDER . ".$originalTemplateName", $preRenderEvent);
if ($originalTemplateName !== $newTemplateName) {
$preRenderEvent = $this->_eventDispatcher->newEventInstance($preRenderEvent->getSubject());
$this->_eventDispatcher->dispatch(tubepress_app_api_event_Events::TEMPLATE_PRE_RENDER . ".$newTemplateName", $preRenderEvent);
}
$result = $this->_delegate->render($newTemplateName, $preRenderEvent->getSubject());
if ($originalTemplateName !== $newTemplateName) {
$newPostRenderEvent = $this->_eventDispatcher->newEventInstance($result, $preRenderEvent->getSubject());
$this->_eventDispatcher->dispatch(tubepress_app_api_event_Events::TEMPLATE_POST_RENDER . ".$newTemplateName", $newPostRenderEvent);
$result = $newPostRenderEvent->getSubject();
}
$originalPostRenderEvent = $this->_eventDispatcher->newEventInstance($result, $preRenderEvent->getSubject());
$this->_eventDispatcher->dispatch(tubepress_app_api_event_Events::TEMPLATE_POST_RENDER . ".$originalTemplateName", $originalPostRenderEvent);
return $originalPostRenderEvent->getSubject();
}
}
class tubepress_app_impl_template_ThemeTemplateLocator
{
private $_themeRegistry;
private $_context;
private $_currentThemeService;
private $_logger;
private $_shouldLog;
private $_templateNameToThemeInstanceCache = array();
public function __construct(tubepress_platform_api_log_LoggerInterface $logger,
tubepress_app_api_options_ContextInterface $context,
tubepress_platform_api_contrib_RegistryInterface $themeRegistry,
tubepress_app_impl_theme_CurrentThemeService $currentThemeService)
{
$this->_themeRegistry = $themeRegistry;
$this->_context = $context;
$this->_currentThemeService = $currentThemeService;
$this->_logger = $logger;
$this->_shouldLog = $logger->isEnabled();
}
public function exists($name)
{
return $this->_findThemeForTemplate($name) !== null;
}
public function getSource($name)
{
$theme = $this->_findThemeForTemplate($name);
if ($theme === null) {
return null;
}
return $theme->getTemplateSource($name);
}
public function getAbsolutePath($name)
{
$theme = $this->_findThemeForTemplate($name);
if ($theme === null || !($theme instanceof tubepress_app_impl_theme_FilesystemTheme)) {
return null;
}
return $theme->getTemplatePath($name);
}
public function isFresh($name, $time)
{
$theme = $this->_findThemeForTemplate($name);
if (!$theme) {
throw new InvalidArgumentException();
}
return $theme->isTemplateSourceFresh($name, $time);
}
public function getCacheKey($name)
{
$theme = $this->_findThemeForTemplate($name);
if (!$theme) {
throw new InvalidArgumentException();
}
return $theme->getTemplateCacheKey($name);
}
private function _findThemeForTemplate($templateName)
{
if (isset($this->_templateNameToThemeInstanceCache[$templateName])) {
$cachedValue = $this->_templateNameToThemeInstanceCache[$templateName];
if ($this->_shouldLog) {
if ($cachedValue) {
$this->_logger->debug(sprintf('Theme for template <code>%s</code> was found in the cache', $templateName));
}
}
return $cachedValue ? $cachedValue : null;
}
if ($this->_shouldLog) {
$this->_logger->debug(sprintf('Seeing if able to find source of template <code>%s</code> from theme hierarchy', $templateName));
}
$currentTheme = null;
if (strpos($templateName,'::') !== false) {
$exploded = explode('::', $templateName);
if (count($exploded) === 2 && $this->_themeRegistry->getInstanceByName($exploded[0]) !== null) {
$currentTheme = $this->_themeRegistry->getInstanceByName($exploded[0]);
$templateName = $exploded[1];
}
}
if (!$currentTheme) {
$currentTheme = $this->_currentThemeService->getCurrentTheme();
}
if ($this->_shouldLog) {
$this->_logger->debug(sprintf('Current theme is <code>%s</code> version <code>%s</code>', $currentTheme->getName(), $currentTheme->getVersion()));
}
do {
if ($currentTheme->hasTemplateSource($templateName)) {
$this->_templateNameToThemeInstanceCache[$templateName] = $currentTheme;
if ($this->_shouldLog) {
$this->_logger->debug(sprintf('Template source for <code>%s</code> was found in theme <code>%s</code>',
$templateName, $currentTheme->getName()));
}
return $currentTheme;
}
$nextThemeNameToCheck = $currentTheme->getParentThemeName();
if ($nextThemeNameToCheck === null) {
break;
}
if ($this->_shouldLog) {
$this->_logger->debug(sprintf('Template source for <code>%s</code> was not found in theme <code>%s</code>. Now trying its parent theme: <code>%s</code>.',
$templateName, $currentTheme->getName(), $nextThemeNameToCheck));
}
try {
$currentTheme = $this->_themeRegistry->getInstanceByName($nextThemeNameToCheck);
} catch (InvalidArgumentException $e) {
if ($this->_shouldLog) {
$this->_logger->error(sprintf('Unable to get the theme instance for <code>%s</code>. This should never happen!', $nextThemeNameToCheck));
}
break;
}
} while ($currentTheme !== null);
$this->_templateNameToThemeInstanceCache[$templateName] = false;
if ($this->_shouldLog) {
$this->_logger->debug(sprintf('Unable to find source of template <code>%s</code> from theme hierarchy. Falling back to registered path providers.', $templateName));
}
return null;
}
}
class tubepress_app_impl_template_twig_Engine implements ehough_templating_EngineInterface
{
protected $environment;
protected $parser;
public function __construct(Twig_Environment $environment)
{
$this->environment = $environment;
$this->parser = new ehough_templating_TemplateNameParser();
}
public function render($name, array $parameters = array())
{
$name = $this->_toTwigName($name);
return $this->load($name)->render($parameters);
}
public function exists($name)
{
if ($name instanceof Twig_Template) {
return true;
}
$name = $this->_toTwigName($name);
$loader = $this->environment->getLoader();
if ($loader instanceof Twig_ExistsLoaderInterface) {
return $loader->exists((string) $name);
}
try {
$loader->getSource((string) $name);
} catch (Twig_Error_Loader $e) {
return false;
}
return true;
}
public function supports($name)
{
return $this->exists($name);
}
protected function load($name)
{
if ($name instanceof Twig_Template) {
return $name;
}
try {
return $this->environment->loadTemplate((string) $name);
} catch (Twig_Error_Loader $e) {
throw new InvalidArgumentException($e->getMessage(), $e->getCode(), $e);
}
}
private function _toTwigName($logicalName)
{
return "$logicalName.html.twig";
}
}
class tubepress_app_impl_template_twig_EnvironmentBuilder
{
private $_loader;
private $_bootSettingsInterface;
private $_context;
private $_translator;
public function __construct(Twig_LoaderInterface $loader,
tubepress_platform_api_boot_BootSettingsInterface $bootSettings,
tubepress_app_api_options_ContextInterface $context,
tubepress_lib_api_translation_TranslatorInterface $translator)
{
$this->_loader = $loader;
$this->_bootSettingsInterface = $bootSettings;
$this->_context = $context;
$this->_translator = $translator;
}
public function buildTwigEnvironment()
{
$environment = new Twig_Environment($this->_loader, array('cache'=> $this->_getCache(),'auto_reload'=> $this->_getAutoReload()
));
$this->_addFilters($environment);
return $environment;
}
private function _getAutoReload()
{
return (bool) $this->_context->get(tubepress_app_api_options_Names::TEMPLATE_CACHE_AUTORELOAD);
}
private function _getCache()
{
$enabled = $this->_context->get(tubepress_app_api_options_Names::TEMPLATE_CACHE_ENABLED);
if (!$enabled) {
return false;
}
$dir = $this->_context->get(tubepress_app_api_options_Names::TEMPLATE_CACHE_DIR);
if ($this->_writableDirectory($dir)) {
return $dir;
}
$dir = $this->_bootSettingsInterface->getPathToSystemCacheDirectory() . DIRECTORY_SEPARATOR .'/twig';
if ($this->_writableDirectory($dir)) {
return $dir;
}
@mkdir($dir);
if ($this->_writableDirectory($dir)) {
return $dir;
}
return false;
}
private function _writableDirectory($candidate)
{
return is_dir($candidate) && is_writable($candidate);
}
private function _addFilters(Twig_Environment $environment)
{
$transFilter = new Twig_SimpleFilter('trans', array($this,'__callback_trans'));
$transChoiceFilter = new Twig_SimpleFilter('transChoice', array($this,'__callback_transchoice'));
$environment->addFilter('trans', $transFilter);
$environment->addFilter('transChoice', $transChoiceFilter);
}
public function __callback_trans($message, array $arguments = array(), $domain = null, $locale = null)
{
return $this->_translator->trans($message, $arguments, $domain, $locale);
}
public function __callback_transchoice($message, $count, array $arguments = array(), $domain = null, $locale = null)
{
return $this->_translator->transChoice($message, $count, array_merge(array('%count%'=> $count), $arguments), $domain, $locale);
}
}
if ((!class_exists('Twig_ExistsLoaderInterface', false)) && (!interface_exists('Twig_ExistsLoaderInterface', false))) { 
interface Twig_ExistsLoaderInterface
{
public function exists($name);
} }

if ((!class_exists('Twig_LoaderInterface', false)) && (!interface_exists('Twig_LoaderInterface', false))) { 
interface Twig_LoaderInterface
{
public function getSource($name);
public function getCacheKey($name);
public function isFresh($name, $time);
} }

if ((!class_exists('Twig_Loader_Filesystem', false)) && (!interface_exists('Twig_Loader_Filesystem', false))) { 
class Twig_Loader_Filesystem implements Twig_LoaderInterface, Twig_ExistsLoaderInterface
{
const MAIN_NAMESPACE ='__main__';
protected $paths = array();
protected $cache = array();
public function __construct($paths = array())
{
if ($paths) {
$this->setPaths($paths);
}
}
public function getPaths($namespace = self::MAIN_NAMESPACE)
{
return isset($this->paths[$namespace]) ? $this->paths[$namespace] : array();
}
public function getNamespaces()
{
return array_keys($this->paths);
}
public function setPaths($paths, $namespace = self::MAIN_NAMESPACE)
{
if (!is_array($paths)) {
$paths = array($paths);
}
$this->paths[$namespace] = array();
foreach ($paths as $path) {
$this->addPath($path, $namespace);
}
}
public function addPath($path, $namespace = self::MAIN_NAMESPACE)
{
$this->cache = array();
if (!is_dir($path)) {
throw new Twig_Error_Loader(sprintf('The "%s" directory does not exist.', $path));
}
$this->paths[$namespace][] = rtrim($path,'/\\');
}
public function prependPath($path, $namespace = self::MAIN_NAMESPACE)
{
$this->cache = array();
if (!is_dir($path)) {
throw new Twig_Error_Loader(sprintf('The "%s" directory does not exist.', $path));
}
$path = rtrim($path,'/\\');
if (!isset($this->paths[$namespace])) {
$this->paths[$namespace][] = $path;
} else {
array_unshift($this->paths[$namespace], $path);
}
}
public function getSource($name)
{
return file_get_contents($this->findTemplate($name));
}
public function getCacheKey($name)
{
return $this->findTemplate($name);
}
public function exists($name)
{
$name = $this->normalizeName($name);
if (isset($this->cache[$name])) {
return true;
}
try {
$this->findTemplate($name);
return true;
} catch (Twig_Error_Loader $exception) {
return false;
}
}
public function isFresh($name, $time)
{
return filemtime($this->findTemplate($name)) <= $time;
}
protected function findTemplate($name)
{
$name = $this->normalizeName($name);
if (isset($this->cache[$name])) {
return $this->cache[$name];
}
$this->validateName($name);
list($namespace, $shortname) = $this->parseName($name);
if (!isset($this->paths[$namespace])) {
throw new Twig_Error_Loader(sprintf('There are no registered paths for namespace "%s".', $namespace));
}
foreach ($this->paths[$namespace] as $path) {
if (is_file($path.'/'.$shortname)) {
if (false !== $realpath = realpath($path.'/'.$shortname)) {
return $this->cache[$name] = $realpath;
}
return $this->cache[$name] = $path.'/'.$shortname;
}
}
throw new Twig_Error_Loader(sprintf('Unable to find template "%s" (looked into: %s).', $name, implode(', ', $this->paths[$namespace])));
}
protected function parseName($name, $default = self::MAIN_NAMESPACE)
{
if (isset($name[0]) &&'@'== $name[0]) {
if (false === $pos = strpos($name,'/')) {
throw new Twig_Error_Loader(sprintf('Malformed namespaced template name "%s" (expecting "@namespace/template_name").', $name));
}
$namespace = substr($name, 1, $pos - 1);
$shortname = substr($name, $pos + 1);
return array($namespace, $shortname);
}
return array($default, $name);
}
protected function normalizeName($name)
{
return preg_replace('#/{2,}#','/', strtr((string) $name,'\\','/'));
}
protected function validateName($name)
{
if (false !== strpos($name,"\0")) {
throw new Twig_Error_Loader('A template name cannot contain NUL bytes.');
}
$name = ltrim($name,'/');
$parts = explode('/', $name);
$level = 0;
foreach ($parts as $part) {
if ('..'=== $part) {
--$level;
} elseif ('.'!== $part) {
++$level;
}
if ($level < 0) {
throw new Twig_Error_Loader(sprintf('Looks like you try to load a template outside configured directories (%s).', $name));
}
}
}
} }

class tubepress_app_impl_template_twig_FsLoader extends Twig_Loader_Filesystem
{
private $_logger;
private $_shouldLog;
public function __construct(tubepress_platform_api_log_LoggerInterface $logger, array $paths)
{
parent::__construct($paths);
$this->_logger = $logger;
$this->_shouldLog = $logger->isEnabled();
}
protected function normalizeName($name)
{
if (strpos($name,'::') !== false) {
$exploded = explode('::', $name);
if (count($exploded) === 2) {
$name = $exploded[1];
}
}
return parent::normalizeName($name);
}
public function getSource($name)
{
$source = file_get_contents($this->findTemplate($name));
if ($this->_shouldLog) {
$this->_logger->debug(sprintf('Template source for <code>%s</code> was found on the filesystem at <code>%s</code>',
$name,
$this->findTemplate($name)
));
}
return $source;
}
}
class tubepress_app_impl_template_twig_ThemeLoader implements Twig_LoaderInterface
{
private $_themeTemplateLocator;
public function __construct(tubepress_app_impl_template_ThemeTemplateLocator $locator)
{
$this->_themeTemplateLocator = $locator;
}
public function getSource($name)
{
if (!$this->_themeTemplateLocator->exists($name)) {
throw $this->_loaderError($name);
}
return $this->_themeTemplateLocator->getSource($name);
}
public function getCacheKey($name)
{
if (!$this->_themeTemplateLocator->exists($name)) {
throw $this->_loaderError($name);
}
return $this->_themeTemplateLocator->getCacheKey($name);
}
public function isFresh($name, $time)
{
if (!$this->_themeTemplateLocator->exists($name)) {
throw $this->_loaderError($name);
}
return $this->_themeTemplateLocator->isFresh($name, $time);
}
private function _loaderError($name)
{
return new Twig_Error_Loader("Twig template $name not found");
}
}
abstract class tubepress_platform_impl_contrib_AbstractContributable implements tubepress_platform_api_contrib_ContributableInterface
{
private static $_PROPERTY_NAME ='name';
private static $_PROPERTY_VERSION ='version';
private static $_PROPERTY_TITLE ='title';
private static $_PROPERTY_AUTHORS ='authors';
private static $_PROPERTY_LICENSE ='license';
private static $_PROPERTY_DESCRIPTION ='description';
private static $_PROPERTY_KEYWORDS ='keywords';
private static $_PROPERTY_SCREENSHOTS ='screenshots';
private static $_PROPERTY_URL_HOMEPAGE ='urlHomepage';
private static $_PROPERTY_URL_DOCUMENTATION ='urlDocs';
private static $_PROPERTY_URL_DEMO ='urlDemo';
private static $_PROPERTY_URL_DOWNLOAD ='urlDownload';
private static $_PROPERTY_URL_BUGS ='urlBugs';
private static $_PROPERTY_URL_FORUM ='urlForum';
private static $_PROPERTY_URL_SOURCE ='urlSource';
private $_properties;
public function __construct($name, $version, $title, array $authors, array $license)
{
$this->_properties = new tubepress_platform_impl_collection_Map();
$this->_setAuthors($authors);
$license = $this->_buildLicense($license);
$this->_properties->put(self::$_PROPERTY_NAME, $name);
$this->_properties->put(self::$_PROPERTY_VERSION, $version);
$this->_properties->put(self::$_PROPERTY_TITLE, $title);
$this->_properties->put(self::$_PROPERTY_AUTHORS, $authors);
$this->_properties->put(self::$_PROPERTY_LICENSE, $license);
$this->_properties->put(self::$_PROPERTY_KEYWORDS, array());
$this->_properties->put(self::$_PROPERTY_SCREENSHOTS, array());
}
public function getName()
{
return $this->_properties->get(self::$_PROPERTY_NAME);
}
public function getVersion()
{
return $this->_properties->get(self::$_PROPERTY_VERSION);
}
public function getTitle()
{
return $this->_properties->get(self::$_PROPERTY_TITLE);
}
public function getAuthors()
{
return $this->_properties->get(self::$_PROPERTY_AUTHORS);
}
public function getLicense()
{
return $this->_properties->get(self::$_PROPERTY_LICENSE);
}
public function getDescription()
{
return $this->getOptionalProperty(self::$_PROPERTY_DESCRIPTION, null);
}
public function getKeywords()
{
return $this->getOptionalProperty(self::$_PROPERTY_KEYWORDS, array());
}
public function getHomepageUrl()
{
return $this->getOptionalProperty(self::$_PROPERTY_URL_HOMEPAGE, null);
}
public function getDocumentationUrl()
{
return $this->getOptionalProperty(self::$_PROPERTY_URL_DOCUMENTATION, null);
}
public function getDemoUrl()
{
return $this->getOptionalProperty(self::$_PROPERTY_URL_DEMO, null);
}
public function getDownloadUrl()
{
return $this->getOptionalProperty(self::$_PROPERTY_URL_DOWNLOAD, null);
}
public function getBugTrackerUrl()
{
return $this->getOptionalProperty(self::$_PROPERTY_URL_BUGS, null);
}
public function getSourceCodeUrl()
{
return $this->getOptionalProperty(self::$_PROPERTY_URL_SOURCE, null);
}
public function getForumUrl()
{
return $this->getOptionalProperty(self::$_PROPERTY_URL_FORUM, null);
}
public function getScreenshots()
{
return $this->getOptionalProperty(self::$_PROPERTY_SCREENSHOTS, null);
}
public function getProperties()
{
return $this->_properties;
}
public function setDescription($description)
{
$this->_properties->put(self::$_PROPERTY_DESCRIPTION, $description);
}
public function setKeywords(array $keywords)
{
$this->_properties->put(self::$_PROPERTY_KEYWORDS, $keywords);
}
public function setScreenshots(array $screenshots)
{
$this->_properties->put(self::$_PROPERTY_SCREENSHOTS, $screenshots);
}
public function setBugTrackerUrl(tubepress_platform_api_url_UrlInterface $url)
{
$this->_properties->put(self::$_PROPERTY_URL_BUGS, $url);
}
public function setDemoUrl(tubepress_platform_api_url_UrlInterface $url)
{
$this->_properties->put(self::$_PROPERTY_URL_DEMO, $url);
}
public function setDownloadUrl(tubepress_platform_api_url_UrlInterface $url)
{
$this->_properties->put(self::$_PROPERTY_URL_DOWNLOAD, $url);
}
public function setHomepageUrl(tubepress_platform_api_url_UrlInterface $url)
{
$this->_properties->put(self::$_PROPERTY_URL_HOMEPAGE, $url);
}
public function setDocumentationUrl(tubepress_platform_api_url_UrlInterface $url)
{
$this->_properties->put(self::$_PROPERTY_URL_DOCUMENTATION, $url);
}
public function setSourceUrl(tubepress_platform_api_url_UrlInterface $url)
{
$this->_properties->put(self::$_PROPERTY_URL_SOURCE, $url);
}
public function setForumUrl(tubepress_platform_api_url_UrlInterface $url)
{
$this->_properties->put(self::$_PROPERTY_URL_FORUM, $url);
}
protected function getOptionalProperty($key, $default)
{
if (!$this->_properties->containsKey($key)) {
return $default;
}
return $this->_properties->get($key);
}
private function _setAuthors(array &$incoming)
{
for ($x = 0; $x < count($incoming); $x++) {
$map = new tubepress_platform_impl_collection_Map();
foreach ($incoming[$x] as $key => $value) {
$map->put($key, $value);
}
$incoming[$x] = $map;
}
}
private function _buildLicense(array $incoming)
{
$map = new tubepress_platform_impl_collection_Map();
foreach ($incoming as $key => $value) {
$map->put($key, $value);
}
return $map;
}
}
abstract class tubepress_app_impl_theme_AbstractTheme extends tubepress_platform_impl_contrib_AbstractContributable implements tubepress_app_api_theme_ThemeInterface
{
private static $_PROPERTY_SCRIPTS ='scripts';
private static $_PROPERTY_STYLES ='styles';
private static $_PROPERTY_PARENT ='parent';
public function getUrlsJS(tubepress_platform_api_url_UrlInterface $baseUrl,
tubepress_platform_api_url_UrlInterface $userContentUrl)
{
return $this->getOptionalProperty(self::$_PROPERTY_SCRIPTS, array());
}
public function getUrlsCSS(tubepress_platform_api_url_UrlInterface $baseUrl,
tubepress_platform_api_url_UrlInterface $userContentUrl)
{
return $this->getOptionalProperty(self::$_PROPERTY_STYLES, array());
}
public function getParentThemeName()
{
return $this->getOptionalProperty(self::$_PROPERTY_PARENT, null);
}
public function setScripts(array $scripts)
{
$this->getProperties()->put(self::$_PROPERTY_SCRIPTS, $scripts);
}
public function setStyles(array $styles)
{
$this->getProperties()->put(self::$_PROPERTY_STYLES, $styles);
}
public function setParentThemeName($name)
{
$this->getProperties()->put(self::$_PROPERTY_PARENT, $name);
}
}
class tubepress_app_impl_theme_CurrentThemeService
{
private $_themeRegistry;
private $_context;
private $_themeMap;
private $_defaultThemeName;
private $_optionName;
public function __construct(tubepress_app_api_options_ContextInterface $context,
tubepress_platform_api_contrib_RegistryInterface $themeRegistry,
$defaultThemeName,
$optionName)
{
$this->_themeRegistry = $themeRegistry;
$this->_context = $context;
$this->_defaultThemeName = $defaultThemeName;
$this->_optionName = $optionName;
}
public function getCurrentTheme()
{
$currentTheme = $this->_context->get($this->_optionName);
$this->_initCache();
if ($currentTheme =='') {
$currentTheme = $this->_defaultThemeName;
}
if (array_key_exists($currentTheme, $this->_themeMap)) {
return $this->_themeMap[$currentTheme];
}
if (array_key_exists("tubepress/legacy-$currentTheme", $this->_themeMap)) {
return $this->_themeMap["tubepress/legacy-$currentTheme"];
}
if (array_key_exists("unknown/legacy-$currentTheme", $this->_themeMap)) {
return $this->_themeMap["unknown/legacy-$currentTheme"];
}
return $this->_themeMap[$this->_defaultThemeName];
}
private function _initCache()
{
if (isset($this->_themeMap)) {
return;
}
$this->_themeMap = array();
foreach ($this->_themeRegistry->getAll() as $theme) {
$this->_themeMap[$theme->getName()] = $theme;
}
}
}
class tubepress_app_impl_theme_FilesystemTheme extends tubepress_app_impl_theme_AbstractTheme
{
private static $_PROPERTY_TEMPLATE_NAMES_TO_PATHS ='templateNamesToAbsPaths';
private static $_PROPERTY_INLINE_CSS ='inlineCSS';
private static $_PROPERTY_MANIFEST_PATH ='manifestPath';
private static $_PROPERTY_IS_SYSTEM ='isSystem';
private static $_PROPERTY_IS_ADMIN ='isAdmin';
public function getInlineCSS()
{
return $this->getOptionalProperty(self::$_PROPERTY_INLINE_CSS, null);
}
public function getTemplateSource($name)
{
$map = $this->getProperties()->get(self::$_PROPERTY_TEMPLATE_NAMES_TO_PATHS);
return file_get_contents($map[$name]);
}
public function isTemplateSourceFresh($name, $time)
{
$path = $this->getTemplateCacheKey($name);
return filemtime($path) < $time;
}
public function getTemplateCacheKey($name)
{
$map = $this->getProperties()->get(self::$_PROPERTY_TEMPLATE_NAMES_TO_PATHS);
return $map[$name];
}
public function hasTemplateSource($name)
{
$map = $this->getProperties()->get(self::$_PROPERTY_TEMPLATE_NAMES_TO_PATHS);
return isset($map[$name]);
}
public function setInlineCss($css)
{
$this->getProperties()->put(self::$_PROPERTY_INLINE_CSS, $css);
}
public function setTemplateNamesToAbsPathsMap(array $map)
{
$this->getProperties()->put(self::$_PROPERTY_TEMPLATE_NAMES_TO_PATHS, $map);
}
public function setManifestPath($path)
{
$this->getProperties()->put(self::$_PROPERTY_MANIFEST_PATH, $path);
$themeAbsPath = dirname($path);
$publicPathElements = array(TUBEPRESS_ROOT,'web','themes');
$publicNeedle = implode(DIRECTORY_SEPARATOR, $publicPathElements);
$adminPathElements = array(TUBEPRESS_ROOT,'web','admin-themes');
$adminNeedle = implode(DIRECTORY_SEPARATOR, $adminPathElements);
$isSystem = strpos($themeAbsPath, $publicNeedle) !== false
|| strpos($themeAbsPath, $adminNeedle) !== false;
$this->getProperties()->put(self::$_PROPERTY_IS_SYSTEM, $isSystem);
$isAdmin = strpos($themeAbsPath, DIRECTORY_SEPARATOR .'admin-themes'. DIRECTORY_SEPARATOR) !== false;
$this->getProperties()->put(self::$_PROPERTY_IS_ADMIN, $isAdmin);
}
public function getUrlsJS(tubepress_platform_api_url_UrlInterface $baseUrl,
tubepress_platform_api_url_UrlInterface $userContentUrl)
{
return $this->_getStylesOrScripts($baseUrl, $userContentUrl,'getUrlsJS');
}
public function getUrlsCSS(tubepress_platform_api_url_UrlInterface $baseUrl,
tubepress_platform_api_url_UrlInterface $userContentUrl)
{
return $this->_getStylesOrScripts($baseUrl, $userContentUrl,'getUrlsCSS');
}
public function getThemePath()
{
return dirname($this->getProperties()->get(self::$_PROPERTY_MANIFEST_PATH));
}
public function getTemplatePath($name)
{
$map = $this->getProperties()->get(self::$_PROPERTY_TEMPLATE_NAMES_TO_PATHS);
return $map[$name];
}
private function _getStylesOrScripts(tubepress_platform_api_url_UrlInterface $baseUrl,
tubepress_platform_api_url_UrlInterface $userContentUrl,
$getter)
{
$toReturn = parent::$getter($baseUrl, $userContentUrl);
for ($x = 0; $x < count($toReturn); $x++) {
$url = $toReturn[$x];
if ($url->isAbsolute()) {
continue;
}
if (strpos("$url",'/') === 0) {
continue;
}
$toReturn[$x] = $this->_convertRelativeUrlToAbsolute($baseUrl, $userContentUrl, $url);
}
return $toReturn;
}
private function _convertRelativeUrlToAbsolute(tubepress_platform_api_url_UrlInterface $baseUrl,
tubepress_platform_api_url_UrlInterface $userContentUrl,
tubepress_platform_api_url_UrlInterface $candidate)
{
$toReturn = null;
$properties = $this->getProperties();
$manifestPath = $properties->get(self::$_PROPERTY_MANIFEST_PATH);
$themeBase = basename(dirname($manifestPath));
if ($properties->getAsBoolean(self::$_PROPERTY_IS_SYSTEM)) {
$toReturn = $baseUrl->getClone();
if ($properties->getAsBoolean(self::$_PROPERTY_IS_ADMIN)) {
$toReturn->addPath("/web/admin-themes/$themeBase/$candidate");
} else {
$toReturn->addPath("/web/themes/$themeBase/$candidate");
}
} else {
$toReturn = $userContentUrl->getClone();
if ($properties->getAsBoolean(self::$_PROPERTY_IS_ADMIN)) {
$toReturn->addPath("/admin-themes/$themeBase/$candidate");
} else {
$toReturn->addPath("/themes/$themeBase/$candidate");
}
}
return $toReturn;
}
}
interface tubepress_lib_api_event_EventDispatcherInterface
{
const _ ='tubepress_lib_api_event_EventDispatcherInterface';
function addListener($eventName, $listener, $priority = 0);
function addListenerService($eventName, $callback, $priority = 0);
function dispatch($eventName, tubepress_lib_api_event_EventInterface $event = null);
function getListeners($eventName = null);
function hasListeners($eventName = null);
function newEventInstance($subject = null, array $arguments = array());
function removeListener($eventName, $listener);
}
interface tubepress_lib_api_event_EventInterface
{
function getArgument($key);
function getArguments();
function getDispatcher();
function getName();
function getSubject();
function hasArgument($key);
function isPropagationStopped();
function setArgument($key, $value);
function setArguments(array $args = array());
function setSubject($subject);
function stopPropagation();
}
interface tubepress_lib_api_http_ResponseCodeInterface
{
const _ ='tubepress_lib_api_http_ResponseCodeInterface';
function setResponseCode($code);
function getCurrentResponseCode();
}
interface tubepress_lib_api_translation_TranslatorInterface
{
const _ ='tubepress_lib_api_translation_TranslatorInterface';
function trans($id, array $parameters = array(), $domain = null, $locale = null);
function transChoice($id, $number, array $parameters = array(), $domain = null, $locale = null);
function setLocale($locale);
function getLocale();
}
class tubepress_lib_impl_event_tickertape_EventBase extends ehough_tickertape_GenericEvent implements tubepress_lib_api_event_EventInterface
{
private $_subject;
public function __construct($subject = null, array $arguments = array())
{
$this->_subject = $subject;
$this->setArguments($arguments);
}
public function getSubject()
{
return $this->_subject;
}
public function setSubject($newSubject)
{
$this->_subject = $newSubject;
}
}
class tubepress_lib_impl_event_tickertape_EventDispatcher implements tubepress_lib_api_event_EventDispatcherInterface
{
private $_wrappedDispatcher;
public function __construct(ehough_tickertape_ContainerAwareEventDispatcher $dispatcher)
{
$this->_wrappedDispatcher = $dispatcher;
}
public function addListener($eventName, $listener, $priority = 0)
{
$this->_wrappedDispatcher->addListener($eventName, $listener, $priority);
}
public function addListenerService($eventName, $callback, $priority = 0)
{
$this->_wrappedDispatcher->addListenerService($eventName, $callback, $priority);
}
public function dispatch($eventName, tubepress_lib_api_event_EventInterface $event = null)
{
if (!$event || (!($event instanceof ehough_tickertape_Event))) {
$event = new tubepress_lib_impl_event_tickertape_TickertapeEventWrapper($event);
}
return $this->_wrappedDispatcher->dispatch($eventName, $event);
}
public function getListeners($eventName = null)
{
return $this->_wrappedDispatcher->getListeners($eventName);
}
public function hasListeners($eventName = null)
{
return $this->_wrappedDispatcher->hasListeners($eventName);
}
public function removeListener($eventName, $listener)
{
$this->_wrappedDispatcher->removeListener($eventName, $listener);
}
public function newEventInstance($subject = null, array $arguments = array())
{
return new tubepress_lib_impl_event_tickertape_EventBase($subject, $arguments);
}
}
class tubepress_lib_impl_http_ResponseCode implements tubepress_lib_api_http_ResponseCodeInterface
{
public function setResponseCode($code)
{
if (function_exists('http_response_code')) {
return http_response_code($code);
} else {
return $this->__simulatedHttpResponseCode($code);
}
}
public function getCurrentResponseCode()
{
if (function_exists('http_response_code')) {
return http_response_code();
} else {
return $this->__simulatedHttpResponseCode();
}
}
public function __simulatedHttpResponseCode($code = null)
{
if ($code !== NULL) {
switch ($code) {
case 100: $text ='Continue'; break;
case 101: $text ='Switching Protocols'; break;
case 200: $text ='OK'; break;
case 201: $text ='Created'; break;
case 202: $text ='Accepted'; break;
case 203: $text ='Non-Authoritative Information'; break;
case 204: $text ='No Content'; break;
case 205: $text ='Reset Content'; break;
case 206: $text ='Partial Content'; break;
case 300: $text ='Multiple Choices'; break;
case 301: $text ='Moved Permanently'; break;
case 302: $text ='Moved Temporarily'; break;
case 303: $text ='See Other'; break;
case 304: $text ='Not Modified'; break;
case 305: $text ='Use Proxy'; break;
case 400: $text ='Bad Request'; break;
case 401: $text ='Unauthorized'; break;
case 402: $text ='Payment Required'; break;
case 403: $text ='Forbidden'; break;
case 404: $text ='Not Found'; break;
case 405: $text ='Method Not Allowed'; break;
case 406: $text ='Not Acceptable'; break;
case 407: $text ='Proxy Authentication Required'; break;
case 408: $text ='Request Time-out'; break;
case 409: $text ='Conflict'; break;
case 410: $text ='Gone'; break;
case 411: $text ='Length Required'; break;
case 412: $text ='Precondition Failed'; break;
case 413: $text ='Request Entity Too Large'; break;
case 414: $text ='Request-URI Too Large'; break;
case 415: $text ='Unsupported Media Type'; break;
case 500: $text ='Internal Server Error'; break;
case 501: $text ='Not Implemented'; break;
case 502: $text ='Bad Gateway'; break;
case 503: $text ='Service Unavailable'; break;
case 504: $text ='Gateway Time-out'; break;
case 505: $text ='HTTP Version not supported'; break;
default:
exit('Unknown http status code "'. htmlentities($code) .'"');
break;
}
$protocol = (isset($_SERVER['SERVER_PROTOCOL']) ? $_SERVER['SERVER_PROTOCOL'] :'HTTP/1.0');
if (!headers_sent()) {
header($protocol .' '. $code .' '. $text);
}
$GLOBALS['http_response_code'] = $code;
} else {
$code = (isset($GLOBALS['http_response_code']) ? $GLOBALS['http_response_code'] : 200);
}
return $code;
}
}
interface tubepress_platform_api_contrib_RegistryInterface
{
const _ ='tubepress_platform_api_contrib_RegistryInterface';
function getAll();
function getInstanceByName($name);
}
interface tubepress_platform_api_collection_MapInterface
{
function clear();
function containsKey($key);
function containsValue($value);
function count();
function get($key);
function getAsBoolean($key);
function isEmpty();
function keySet();
function put($name, $value);
function remove($key);
function values();
}
interface tubepress_platform_api_url_QueryInterface
{
const RFC3986_ENCODING ='RFC3986';
const RFC1738_ENCODING ='RFC1738';
function add($key, $value);
function clear();
function filter($closure);
function freeze();
function get($key);
function getKeys();
function hasKey($key);
function hasValue($value);
function isFrozen();
function map($closure, array $context = array());
function merge($data);
function overwriteWith($data);
function remove($key);
function replace(array $data);
function set($key, $value);
function setEncodingType($type);
function toArray();
function toString();
function __toString();
}
interface tubepress_platform_api_url_UrlFactoryInterface
{
const _ ='tubepress_platform_api_url_UrlFactoryInterface';
function fromString($url);
function fromCurrent();
}
interface tubepress_platform_api_url_UrlInterface
{
const _ ='tubepress_platform_api_url_UrlInterface';
function addPath($relativePath);
function freeze();
function getClone();
function getAuthority();
function getFragment();
function getHost();
function getParts();
function getPassword();
function getPath();
function getPathSegments();
function getPort();
function getQuery();
function getScheme();
function getUsername();
function isAbsolute();
function isFrozen();
function removeDotSegments();
function removeSchemeAndAuthority();
function setFragment($fragment);
function setHost($host);
function setPassword($password);
function setPath($path);
function setPort($port);
function setQuery($query);
function setScheme($scheme);
function setUsername($username);
function toString();
function __toString();
}
interface tubepress_platform_api_util_StringUtilsInterface
{
const _ ='tubepress_platform_api_util_StringUtilsInterface';
function replaceFirst($search, $replace, $str);
function removeNewLines($string);
function removeEmptyLines($string);
function startsWith($haystack, $needle);
function endsWith($haystack, $needle);
function stripslashes_deep($text, $times = 2);
function redactSecrets($string);
}
class tubepress_platform_api_version_Version
{
private static $_SEPARATOR ='.';
private $_major = 0;
private $_minor = 0;
private $_micro = 0;
private $_qualifier = null;
private $_asString = null;
public function __construct($major, $minor = 0, $micro = 0, $qualifier ='')
{
$this->_major = intval($major);
$this->_minor = intval($minor);
$this->_micro = intval($micro);
if ($qualifier =='') {
$this->_qualifier = null;
} else {
$this->_qualifier = $qualifier;
}
$this->_validate();
$this->_asString = $this->_generateAsString();
}
public function compareTo($otherVersion)
{
if (!($otherVersion instanceof tubepress_platform_api_version_Version)) {
return $this->compareTo(self::parse($otherVersion));
}
$result = $this->getMajor() - $otherVersion->getMajor();
if ($result !== 0) {
return $result;
}
$result = $this->getMinor() - $otherVersion->getMinor();
if ($result !== 0) {
return $result;
}
$result = $this->getMicro() - $otherVersion->getMicro();
if ($result !== 0) {
return $result;
}
return strcmp($this->getQualifier(), $otherVersion->getQualifier());
}
public static function parse($version)
{
if (! is_string($version)) {
throw new InvalidArgumentException('Can only parse strings to generate version');
}
$empty = new tubepress_platform_api_version_Version(0, 0, 0);
if ($version ==''|| trim($version) =='') {
return $empty;
}
$pieces = explode(self::$_SEPARATOR, $version);
$pieceCount = count($pieces);
switch ($pieceCount) {
case 1:
return new tubepress_platform_api_version_Version(self::_validateNumbersOnly($version));
case 2:
return new tubepress_platform_api_version_Version(self::_validateNumbersOnly($pieces[0]), self::_validateNumbersOnly($pieces[1]));
case 3:
return new tubepress_platform_api_version_Version(self::_validateNumbersOnly($pieces[0]), self::_validateNumbersOnly($pieces[1]), self::_validateNumbersOnly($pieces[2]));
case 4:
return new tubepress_platform_api_version_Version(self::_validateNumbersOnly($pieces[0]), self::_validateNumbersOnly($pieces[1]), self::_validateNumbersOnly($pieces[2]), $pieces[3]);
default:
throw new InvalidArgumentException("Invalid version: $version");
}
}
public function __toString()
{
return $this->_asString;
}
public function getMajor()
{
return $this->_major;
}
public function getMinor()
{
return $this->_minor;
}
public function getMicro()
{
return $this->_micro;
}
public function getQualifier()
{
return $this->_qualifier;
}
private function _generateAsString()
{
$toReturn = $this->_major . self::$_SEPARATOR . $this->_minor . self::$_SEPARATOR . $this->_micro;
if ($this->_qualifier !== null) {
$toReturn = $toReturn . self::$_SEPARATOR . $this->_qualifier;
}
return $toReturn;
}
private function _validate()
{
self::_checkNonNegativeInteger($this->_major,'Major');
self::_checkNonNegativeInteger($this->_minor,'Minor');
self::_checkNonNegativeInteger($this->_micro,'Micro');
if ($this->_qualifier !== null && preg_match_all('/^(?:[0-9a-zA-Z_\-]+)$/', $this->_qualifier, $matches) !== 1) {
throw new InvalidArgumentException("Version qualifier must only consist of alphanumerics plus hyphen and underscore (". $this->_qualifier .")");
}
}
private static function _checkNonNegativeInteger($candidate, $name)
{
if ($candidate < 0) {
throw new InvalidArgumentException("$name version must be non-negative ($candidate)");
}
}
private static function _validateNumbersOnly($candidate)
{
if (preg_match_all('/^[0-9]+$/', $candidate, $matches) !== 1) {
throw new InvalidArgumentException("$candidate is not a number");
}
return $candidate;
}
}
class tubepress_platform_impl_boot_helper_uncached_contrib_SerializedRegistry implements tubepress_platform_api_contrib_RegistryInterface
{
private $_nameToInstanceMap;
private $_logger;
public function __construct(array $bootArtifacts, $key,
tubepress_platform_api_log_LoggerInterface $logger,
tubepress_platform_impl_boot_helper_uncached_Serializer $serializer)
{
$this->_logger = $logger;
$this->_nameToInstanceMap = array();
if (!isset($bootArtifacts[$key])) {
throw new InvalidArgumentException("$key not found in boot artifacts");
}
$contributables = $serializer->unserialize($bootArtifacts[$key]);
if (!is_array($contributables)) {
throw new InvalidArgumentException('Expected to deserialize an array');
}
foreach ($contributables as $contributable) {
if (!($contributable instanceof tubepress_platform_api_contrib_ContributableInterface)) {
throw new InvalidArgumentException('Unserialized data contained a non contributable');
}
$name = $contributable->getName();
$this->_nameToInstanceMap[$name] = $contributable;
}
}
public function getAll()
{
return array_values($this->_nameToInstanceMap);
}
public function getInstanceByName($name)
{
if (!isset($this->_nameToInstanceMap[$name])) {
throw new InvalidArgumentException();
}
return $this->_nameToInstanceMap[$name];
}
}
class tubepress_platform_impl_boot_helper_uncached_Serializer
{
private $_bootSettings;
public function __construct(tubepress_platform_api_boot_BootSettingsInterface $bootSettings)
{
$this->_bootSettings = $bootSettings;
}
public function serialize($incomingData)
{
$serialized = @serialize($incomingData);
if ($serialized === false) {
throw new InvalidArgumentException('Failed to serialize data');
}
switch ($this->_bootSettings->getSerializationEncoding()) {
case'gzip-then-base64':
if (extension_loaded('zlib')) {
$toCompress = $serialized;
$compressed = gzcompress($toCompress);
if ($compressed !== false) {
$serialized = $compressed;
}
}
case'base64':
$encoded = @base64_encode($serialized);
if ($encoded === false) {
throw new InvalidArgumentException('Failed to base64_encode() serialized data');
}
return $encoded;
case'urlencode':
return urlencode($serialized);
default:
return $serialized;
}
}
public function unserialize($serializedString)
{
$decoded = $serializedString;
$encoding = $this->_bootSettings->getSerializationEncoding();
switch ($encoding) {
case'gzip-then-base64':
case'base64':
$decoded = @base64_decode($serializedString);
if ($decoded === false) {
throw new InvalidArgumentException('Failed to base64_decode() serialized data');
}
if ($encoding ==='gzip-then-base64') {
$decoded = gzuncompress($decoded);
if ($decoded === false) {
throw new InvalidArgumentException('Failed to gzuncompress() serialized data');
}
}
break;
case'urlencode':
$decoded = urldecode($serializedString);
break;
default:
break;
}
$unserialized = @unserialize($decoded);
if ($unserialized === false) {
throw new InvalidArgumentException('Failed to unserialize incoming data');
}
return $unserialized;
}
}
class tubepress_platform_impl_collection_Map implements tubepress_platform_api_collection_MapInterface
{
private $_props = array();
public function clear()
{
$this->_props = array();
}
public function containsKey($key)
{
return array_key_exists($key, $this->_props);
}
public function containsValue($value)
{
return in_array($value, array_values($this->_props));
}
public function count()
{
return count($this->_props);
}
public function get($key)
{
if (!$this->containsKey($key)) {
throw new InvalidArgumentException('No such key: '. $key);
}
return $this->_props[$key];
}
public function getAsBoolean($key)
{
return (bool) $this->get($key);
}
public function isEmpty()
{
return count($this->_props) === 0;
}
public function keySet()
{
return array_keys($this->_props);
}
public function put($name, $value)
{
$this->_props[$name] = $value;
}
public function remove($key)
{
if (!$this->containsKey($key)) {
throw new InvalidArgumentException('No such key: '. $key);
}
unset($this->_props[$key]);
}
public function values()
{
return array_values($this->_props);
}
}
class tubepress_platform_impl_url_puzzle_PuzzleBasedQuery implements tubepress_platform_api_url_QueryInterface
{
private $_delegate;
private $_isFrozen = false;
public function __construct(puzzle_Query $delegate)
{
$this->_delegate = $delegate;
}
public function add($key, $value)
{
$this->_assertNotFrozen();
$this->_delegate->add($key, $value);
return $this;
}
public function clear()
{
$this->_assertNotFrozen();
$this->_delegate->clear();
return $this;
}
public function filter($closure)
{
return $this->_delegate->filter($closure);
}
public function get($key)
{
return $this->_delegate->get($key);
}
public function getKeys()
{
return $this->_delegate->getKeys();
}
public function hasKey($key)
{
return $this->_delegate->hasKey($key);
}
public function hasValue($value)
{
return $this->_delegate->hasValue($value);
}
public function map($closure, array $context = array())
{
return $this->_delegate->map($closure, $context);
}
public function merge($data)
{
$this->_assertNotFrozen();
if ($data instanceof tubepress_platform_api_url_QueryInterface) {
$data = $data->toArray();
}
$this->_delegate->merge($data);
return $this;
}
public function overwriteWith($data)
{
$this->_assertNotFrozen();
$this->_delegate->overwriteWith($data);
return $this;
}
public function remove($key)
{
$this->_assertNotFrozen();
$this->_delegate->remove($key);
return $this;
}
public function replace(array $data)
{
$this->_assertNotFrozen();
$this->_delegate->replace($data);
return $this;
}
public function set($key, $value)
{
$this->_assertNotFrozen();
$this->_delegate->set($key, $value);
return $this;
}
public function setEncodingType($type)
{
$this->_assertNotFrozen();
$this->_delegate->setEncodingType($type);
return $this;
}
public function toArray()
{
return $this->_delegate->toArray();
}
public function toString()
{
return $this->__toString();
}
public function __toString()
{
return $this->_delegate->__toString();
}
public function freeze()
{
$this->_isFrozen = true;
}
public function isFrozen()
{
return $this->_isFrozen;
}
private function _assertNotFrozen()
{
if ($this->_isFrozen) {
throw new BadMethodCallException('Query is frozen');
}
}
}
class tubepress_platform_impl_url_puzzle_PuzzleBasedUrl implements tubepress_platform_api_url_UrlInterface
{
private $_query = null;
private $_delegateUrl;
private $_isFrozen = false;
private static $_DEFAULT_PORTS = array('http'=> 80,'https'=> 443,'ftp'=> 21
);
public function __construct(puzzle_Url $delegate)
{
$this->_delegateUrl = $delegate;
if ($this->_delegateUrl->getQuery()) {
$this->_query = new tubepress_platform_impl_url_puzzle_PuzzleBasedQuery($this->_delegateUrl->getQuery());
}
}
public function addPath($relativePath)
{
$this->_assertNotFrozen();
if ($this->getPath() ==='/') {
$this->_delegateUrl->setPath('');
}
$this->_delegateUrl->addPath($relativePath);
return $this;
}
public function getAuthority()
{
$userName = $this->getUsername();
$password = $this->getPassword();
$host = $this->getHost();
$port = $this->getPort();
$scheme = $this->getScheme();
if ($port && isset(self::$_DEFAULT_PORTS[$scheme]) && intval($port) === self::$_DEFAULT_PORTS[$scheme]) {
$port ='';
}
$authority ='';
if ($userName) {
$authority .= $userName;
}
if ($password) {
$authority .= ":$password";
}
if ($userName || $password) {
$authority .='@';
}
$authority .= "$host";
if ($port) {
$authority .= ":$port";
}
return $authority;
}
public function getFragment()
{
return $this->_delegateUrl->getFragment();
}
public function getHost()
{
return $this->_delegateUrl->getHost();
}
public function getParts()
{
return $this->_delegateUrl->getParts();
}
public function getPassword()
{
return $this->_delegateUrl->getPassword();
}
public function getPath()
{
return $this->_delegateUrl->getPath();
}
public function getPathSegments()
{
return $this->_delegateUrl->getPathSegments();
}
public function getPort()
{
return $this->_delegateUrl->getPort();
}
public function getQuery()
{
return $this->_query;
}
public function getScheme()
{
return $this->_delegateUrl->getScheme();
}
public function getUsername()
{
return $this->_delegateUrl->getUsername();
}
public function isAbsolute()
{
return $this->_delegateUrl->isAbsolute();
}
public function removeDotSegments()
{
$this->_assertNotFrozen();
$this->_delegateUrl->removeDotSegments();
return $this;
}
public function setFragment($fragment)
{
$this->_assertNotFrozen();
$this->_delegateUrl->setFragment($fragment);
return $this;
}
public function setHost($host)
{
$this->_assertNotFrozen();
$this->_delegateUrl->setHost($host);
return $this;
}
public function setPassword($password)
{
$this->_assertNotFrozen();
$this->_delegateUrl->setPassword($password);
return $this;
}
public function setPath($path)
{
$this->_assertNotFrozen();
$this->_delegateUrl->setPath($path);
return $this;
}
public function setPort($port)
{
$this->_assertNotFrozen();
$this->_delegateUrl->setPort($port);
return $this;
}
public function setQuery($query)
{
$this->_assertNotFrozen();
if ($query === null) {
$this->_query = null;
return $this;
}
if ($query instanceof tubepress_platform_api_url_QueryInterface) {
$this->_query = $query;
return $this;
}
if (is_string($query)) {
$puzzleQuery = puzzle_Query::fromString($query);
} else {
$puzzleQuery = new puzzle_Query($query);
}
$this->_query = new tubepress_platform_impl_url_puzzle_PuzzleBasedQuery($puzzleQuery);
return $this;
}
public function setScheme($scheme)
{
$this->_assertNotFrozen();
$this->_delegateUrl->setScheme($scheme);
return $this;
}
public function setUsername($username)
{
$this->_assertNotFrozen();
$this->_delegateUrl->setUsername($username);
return $this;
}
public function __toString()
{
$parts = $this->_delegateUrl->getParts();
if ($this->_query) {
$parts['query'] = $this->_query;
} else {
unset($parts['query']);
}
return puzzle_Url::buildUrl($parts);
}
public function toString()
{
return $this->__toString();
}
public function getClone()
{
return new self(puzzle_Url::fromString($this->toString()));
}
public function removeSchemeAndAuthority()
{
$this->_assertNotFrozen();
$this->setScheme(null);
$this->setHost(null);
$this->setUsername(null);
$this->setPort(null);
$this->setPassword(null);
}
public function freeze()
{
$this->_query->freeze();
$this->_isFrozen = true;
}
public function isFrozen()
{
return $this->_isFrozen;
}
private function _assertNotFrozen()
{
if ($this->_isFrozen) {
throw new BadMethodCallException('URL is frozen');
}
}
}
class tubepress_platform_impl_url_puzzle_UrlFactory implements tubepress_platform_api_url_UrlFactoryInterface
{
private static $_KEY_HTTPS ='HTTPS';
private static $_KEY_NAME ='SERVER_NAME';
private static $_KEY_PORT ='SERVER_PORT';
private static $_KEY_URI ='REQUEST_URI';
private $_cachedCurrentUrl;
private $_serverVars;
public function __construct(array $serverVars = array())
{
if (count($serverVars) === 0) {
$serverVars = $_SERVER;
}
$this->_serverVars = $serverVars;
}
public function fromString($url)
{
if (!is_string($url)) {
throw new InvalidArgumentException('tubepress_platform_impl_url_puzzle_UrlFactory::fromString() can only accept strings.');
}
return new tubepress_platform_impl_url_puzzle_PuzzleBasedUrl(puzzle_Url::fromString($url));
}
public function fromCurrent()
{
if (!isset($this->_cachedCurrentUrl)) {
$this->_cacheUrl();
}
return $this->_cachedCurrentUrl->getClone();
}
private function _cacheUrl()
{
$toReturn ='http';
$requiredServerVars = array(
self::$_KEY_PORT,
self::$_KEY_NAME,
self::$_KEY_URI
);
foreach ($requiredServerVars as $requiredServerVar) {
if (!isset($this->_serverVars[$requiredServerVar])) {
throw new RuntimeException(sprintf('Missing $_SERVER variable: %s', $requiredServerVar));
}
}
if (isset($this->_serverVars[self::$_KEY_HTTPS]) && $this->_serverVars[self::$_KEY_HTTPS] =='on') {
$toReturn .='s';
}
$toReturn .='://';
if ($this->_serverVars[self::$_KEY_PORT] !='80') {
$toReturn .= sprintf('%s:%s%s',
$this->_serverVars[self::$_KEY_NAME],
$this->_serverVars[self::$_KEY_PORT],
$this->_serverVars[self::$_KEY_URI]
);
} else {
$toReturn .= $this->_serverVars[self::$_KEY_NAME].$this->_serverVars[self::$_KEY_URI];
}
try {
$this->_cachedCurrentUrl = $this->fromString($toReturn);
} catch (InvalidArgumentException $e) {
throw new RuntimeException($e->getMessage());
}
}
}
class tubepress_platform_impl_util_StringUtils implements tubepress_platform_api_util_StringUtilsInterface
{
public function replaceFirst($search, $replace, $str)
{
$l = strlen($str);
$a = strpos($str, $search);
$b = $a + strlen($search);
$temp = substr($str, 0, $a) . $replace . substr($str, $b, ($l-$b));
return $temp;
}
public function removeNewLines($string)
{
return str_replace(array("\r\n","\r","\n"),'', $string);
}
public function removeEmptyLines($string)
{
return preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/","\n", $string);
}
public function startsWith($haystack, $needle)
{
if (! is_string($haystack) || ! is_string($needle)) {
return false;
}
$length = strlen($needle);
return (substr($haystack, 0, $length) === $needle);
}
public function endsWith($haystack, $needle)
{
if (! is_string($haystack) || ! is_string($needle)) {
return false;
}
$length = strlen($needle);
$start = $length * -1;
return (substr($haystack, $start) === $needle);
}
public function stripslashes_deep($text, $times = 2) {
$i = 0;
while (strstr($text,'\\') && $i != $times) {
$text = stripslashes($text);
$i++;
}
return $text;
}
public function redactSecrets($string)
{
if (is_scalar($string)) {
$string = "$string";
} else {
if (is_array($string)) {
$string = var_export($string, true);
} else {
$string ='resource/object';
}
}
return preg_replace('/[0-9a-fA-F]{12,}/','XXXXXX', $string);
}
}
class tubepress_wordpress_impl_Callback
{
private $_eventDispatcher;
private $_activationHook;
private $_htmlGenerator;
private $_context;
private $_optionsReference;
private $_optionMapCache;
public function __construct(tubepress_lib_api_event_EventDispatcherInterface $eventDispatcher,
tubepress_app_api_options_ContextInterface $context,
tubepress_app_api_html_HtmlGeneratorInterface $htmlGenerator,
tubepress_app_api_options_ReferenceInterface $optionsReference,
tubepress_wordpress_impl_wp_ActivationHook $activationHook)
{
$this->_eventDispatcher = $eventDispatcher;
$this->_activationHook = $activationHook;
$this->_context = $context;
$this->_htmlGenerator = $htmlGenerator;
$this->_optionsReference = $optionsReference;
}
public function onFilter($filterName, array $args)
{
$subject = $args[0];
$args = count($args) > 1 ? array_slice($args, 1) : array();
$event = $this->_eventDispatcher->newEventInstance(
$subject,
array('args'=> $args)
);
$this->_eventDispatcher->dispatch("tubepress.wordpress.filter.$filterName", $event);
return $event->getSubject();
}
public function onAction($actionName, array $args)
{
$event = $this->_eventDispatcher->newEventInstance($args);
$this->_eventDispatcher->dispatch("tubepress.wordpress.action.$actionName", $event);
}
public function onPluginActivation()
{
$this->_activationHook->execute();
}
public function onShortcode($optionMap)
{
if (!is_array($optionMap)) {
$optionMap = array();
}
$normalizedOptions = $this->_normalizeIncomingShortcodeOptionMap($optionMap);
$this->_context->setEphemeralOptions($normalizedOptions);
$toReturn = $this->_htmlGenerator->getHtml();
$this->_context->setEphemeralOptions(array());
return $toReturn;
}
private function _normalizeIncomingShortcodeOptionMap(array $optionMap)
{
if (!isset($this->_optionMapCache)) {
$this->_optionMapCache = array();
$allKnownOptionNames = $this->_optionsReference->getAllOptionNames();
foreach ($allKnownOptionNames as $camelCaseOptionName) {
$asLowerCase = strtolower($camelCaseOptionName);
$this->_optionMapCache[$asLowerCase] = $camelCaseOptionName;
}
}
$toReturn = array();
foreach ($optionMap as $lowerCaseCandidate => $value) {
if (isset($this->_optionMapCache[$lowerCaseCandidate])) {
$camelCaseOptionName = $this->_optionMapCache[$lowerCaseCandidate];
$toReturn[$camelCaseOptionName] = $value;
}
}
return $toReturn;
}
}
class tubepress_wordpress_impl_listeners_html_WpHtmlListener
{
public function onScriptsStylesTemplatePreRender(tubepress_lib_api_event_EventInterface $event)
{
$templateVars = $event->getSubject();
if (is_array($templateVars)) {
$templateVars['urls'] = array();
$event->setSubject($templateVars);
}
}
}
class tubepress_wordpress_impl_listeners_wp_PublicActionsAndFilters
{
private $_wpFunctions;
private $_stringUtils;
private $_htmlGenerator;
private $_ajaxHandler;
private $_requestParameters;
private $_translator;
private $_eventDispatcher;
private $_environment;
private $_urlCache;
public function __construct(tubepress_wordpress_impl_wp_WpFunctions $wpFunctions,
tubepress_platform_api_util_StringUtilsInterface $stringUtils,
tubepress_app_api_html_HtmlGeneratorInterface $htmlGenerator,
tubepress_lib_api_http_AjaxInterface $ajaxHandler,
tubepress_lib_api_http_RequestParametersInterface $requestParams,
tubepress_lib_api_translation_TranslatorInterface $translator,
tubepress_lib_api_event_EventDispatcherInterface $eventDispatcher,
tubepress_app_api_environment_EnvironmentInterface $environment)
{
$this->_wpFunctions = $wpFunctions;
$this->_stringUtils = $stringUtils;
$this->_htmlGenerator = $htmlGenerator;
$this->_ajaxHandler = $ajaxHandler;
$this->_requestParameters = $requestParams;
$this->_translator = $translator;
$this->_eventDispatcher = $eventDispatcher;
$this->_environment = $environment;
}
public function onAction_widgets_init(tubepress_lib_api_event_EventInterface $event)
{
if (!$event->hasArgument('unit-testing') && !class_exists('tubepress_wordpress_impl_wp_WpWidget')) {
require TUBEPRESS_ROOT .'/src/add-ons/wordpress/classes/tubepress/wordpress/impl/wp/WpWidget.php';
}
$this->_wpFunctions->register_widget('tubepress_wordpress_impl_wp_WpWidget');
$widgetOps = array('classname'=>'widget_tubepress','description'=>
$this->_translator->trans('Displays YouTube or Vimeo videos with TubePress. Limited to a single instance per site. Use the other TubePress widget instead!')); $this->_wpFunctions->wp_register_sidebar_widget('tubepress','TubePress (legacy)', array($this,'__fireWidgetHtmlEvent'), $widgetOps);
$this->_wpFunctions->wp_register_widget_control('tubepress','TubePress (legacy)', array($this,'__fireWidgetControlEvent'));
}
public function __fireWidgetHtmlEvent($widgetOpts)
{
$event = $this->_eventDispatcher->newEventInstance($widgetOpts);
$this->_eventDispatcher->dispatch(tubepress_wordpress_api_Constants::EVENT_WIDGET_PUBLIC_HTML, $event);
}
public function __fireWidgetControlEvent()
{
$this->_eventDispatcher->dispatch(tubepress_wordpress_api_Constants::EVENT_WIDGET_PRINT_CONTROLS);
}
public function onAction_init(tubepress_lib_api_event_EventInterface $event)
{
if ($this->_wpFunctions->is_admin() || __FILE__ ==='wp-login.php') {
return;
}
$baseName = basename(TUBEPRESS_ROOT);
$ajaxUrl = $this->_wpFunctions->plugins_url("web/js/wordpress-ajax.js", "$baseName/tubepress.php");
$version = $this->_environment->getVersion();
$this->_wpFunctions->wp_register_script('tubepress_ajax', $ajaxUrl, array('tubepress'), "$version");
$this->_wpFunctions->wp_enqueue_script('jquery', false, array(), false, false);
$this->_wpFunctions->wp_enqueue_script('tubepress_ajax', false, array(), false, false);
$this->_enqueueThemeResources($this->_wpFunctions, $version);
}
public function onAction_wp_head(tubepress_lib_api_event_EventInterface $event)
{
if ($this->_wpFunctions->is_admin()) {
return;
}
print $this->_htmlGenerator->getCSS();
print $this->_htmlGenerator->getJS();
}
public function onAction_ajax(tubepress_lib_api_event_EventInterface $event)
{
$this->_ajaxHandler->handle();
exit;
}
private function _enqueueThemeResources(tubepress_wordpress_impl_wp_WpFunctions $wpFunctions,
tubepress_platform_api_version_Version $version)
{
$callback = array($this,'__callbackConvertToWpUrlString');
$stylesUrls = $this->_htmlGenerator->getUrlsCSS();
$scriptsUrls = $this->_htmlGenerator->getUrlsJS();
$stylesStrings = array_map($callback, $stylesUrls);
$scriptsStrings = array_map($callback, $scriptsUrls);
$styleCount = count($stylesStrings);
$scriptCount = count($scriptsStrings);
for ($x = 0; $x < $styleCount; $x++) {
$handle ='tubepress-theme-'. $x;
$wpFunctions->wp_register_style($handle, $stylesStrings[$x], array(), "$version");
$wpFunctions->wp_enqueue_style($handle);
}
for ($x = 0; $x < $scriptCount; $x++) {
if ($this->_stringUtils->endsWith($scriptsStrings[$x],'/web/js/tubepress.js')) {
$handle ='tubepress';
$deps = array();
} else {
$handle ='tubepress-theme-'. $x;
$deps = array('tubepress');
}
$wpFunctions->wp_register_script($handle, $scriptsStrings[$x], $deps, "$version");
$wpFunctions->wp_enqueue_script($handle, false, array(), false, false);
}
}
public function __callbackConvertToWpUrlString(tubepress_platform_api_url_UrlInterface $url)
{
if ($url->isAbsolute()) {
return $url->toString();
}
if (!isset($this->_urlCache)) {
$this->_urlCache = new tubepress_platform_impl_collection_Map();
$this->_urlCache->put('url.base', rtrim($this->_environment->getBaseUrl()->toString(),'/'));
$this->_urlCache->put('url.user', rtrim($this->_environment->getUserContentUrl()->toString(),'/'));
$this->_urlCache->put('basename', basename(TUBEPRESS_ROOT));
}
$urlAsString = $url->toString();
$tubePressBaseUrl = $this->_urlCache->get('url.base');
$userContentUrl = $this->_urlCache->get('url.user');
$baseName = $this->_urlCache->get('basename');
$isSystem = false;
if ($this->_stringUtils->startsWith($urlAsString, "$tubePressBaseUrl/web/")) {
$isSystem = true;
} else if (!$this->_stringUtils->startsWith($urlAsString, "$userContentUrl/")) {
return $urlAsString;
}
if ($isSystem) {
$path = str_replace($tubePressBaseUrl,'', $urlAsString);
return $this->_wpFunctions->plugins_url($path, "$baseName/tubepress.php");
}
$path = str_replace($userContentUrl,'', $urlAsString);
return $this->_wpFunctions->content_url('tubepress-content'. $path);
}
}
class tubepress_wordpress_impl_options_WpPersistence implements tubepress_app_api_options_PersistenceBackendInterface
{
private static $_optionPrefix ="tubepress-";
private $_wpFunctions;
public function __construct(tubepress_wordpress_impl_wp_WpFunctions $wpFunctions)
{
$this->_wpFunctions = $wpFunctions;
}
public function createEach(array $optionNamesToValuesMap)
{
$existingOptions = array_keys($this->fetchAllCurrentlyKnownOptionNamesToValues());
$incomingOptions = array_keys($optionNamesToValuesMap);
$newOptionNames = array_diff($incomingOptions, $existingOptions);
$toCreate = array();
foreach ($newOptionNames as $newOptionName) {
$toCreate[$newOptionName] = $optionNamesToValuesMap[$newOptionName];
}
foreach ($toCreate as $missingOptionName => $defaultValue) {
$this->_wpFunctions->add_option(self::$_optionPrefix . $missingOptionName, $defaultValue);
}
}
public function fetchAllCurrentlyKnownOptionNamesToValues()
{
$allOptions = $this->_wpFunctions->wp_load_alloptions();
$allOptionNames = array_keys($allOptions);
$tubePressOptionNames = array_filter($allOptionNames, array($this,'__onlyPrefixedWithTubePress'));
$toReturn = array_intersect_key($allOptions, array_flip($tubePressOptionNames));
foreach ($toReturn as $prefixedName => $value) {
$unprefixedName = str_replace(self::$_optionPrefix,'', $prefixedName);
$toReturn[$unprefixedName] = $toReturn[$prefixedName];
unset($toReturn[$prefixedName]);
}
return $toReturn;
}
public function __onlyPrefixedWithTubePress($key)
{
return strpos("$key", self::$_optionPrefix) === 0;
}
public function saveAll(array $optionNamesToValues)
{
foreach ($optionNamesToValues as $optionName => $optionValue) {
$this->_wpFunctions->update_option(self::$_optionPrefix . $optionName, $optionValue);
}
return null;
}
}
abstract class tubepress_lib_impl_translation_AbstractTranslator implements tubepress_lib_api_translation_TranslatorInterface
{
private $_pluralRules;
public function trans($id, array $parameters = array(), $domain = null, $locale = null)
{
$translated = $this->_translateSimple($id, $domain, $locale);
return strtr($translated, $parameters);
}
public function transChoice($id, $number, array $parameters = array(), $domain = null, $locale = null)
{
$translated = $this->_translateSimple($id, $domain, $locale);
$locale = $locale ? $locale : $this->getLocale();
$translated = $this->_choose($translated, $number, $locale);
return strtr($translated, $parameters);
}
protected abstract function translate($id, $domain = null, $locale = null);
private function _translateSimple($id, $domain, $locale)
{
$domain = $domain ? $domain :'tubepress';
return $this->translate($id, $domain, $locale);
}
private function _choose($message, $number, $locale)
{
$parts = explode('|', $message);
$explicitRules = array();
$standardRules = array();
foreach ($parts as $part) {
$part = trim($part);
if (preg_match('/^(?P<interval>'.$this->_getIntervalRegexp().')\s*(?P<message>.*?)$/x', $part, $matches)) {
$explicitRules[$matches['interval']] = $matches['message'];
} elseif (preg_match('/^\w+\:\s*(.*?)$/', $part, $matches)) {
$standardRules[] = $matches[1];
} else {
$standardRules[] = $part;
}
}
foreach ($explicitRules as $interval => $m) {
if ($this->_test($number, $interval)) {
return $m;
}
}
$position = $this->_getPluralPosition($number, $locale);
if (!isset($standardRules[$position])) {
if (1 === count($parts) && isset($standardRules[0])) {
return $standardRules[0];
}
throw new InvalidArgumentException(sprintf('Unable to choose a translation for "%s" with locale "%s". Double check that this translation has the correct plural options (e.g. "There is one apple|There are %%count%% apples").', $message, $locale));
}
return $standardRules[$position];
}
private function _getIntervalRegexp()
{
return<<<EOF
        ({\s*
            (\-?\d+(\.\d+)?[\s*,\s*\-?\d+(\.\d+)?]*)
        \s*})

            |

        (?P<left_delimiter>[\[\]])
            \s*
            (?P<left>-Inf|\-?\d+(\.\d+)?)
            \s*,\s*
            (?P<right>\+?Inf|\-?\d+(\.\d+)?)
            \s*
        (?P<right_delimiter>[\[\]])
EOF
;
}
private function _test($number, $interval)
{
$interval = trim($interval);
if (!preg_match('/^'.$this->_getIntervalRegexp().'$/x', $interval, $matches)) {
throw new InvalidArgumentException(sprintf('"%s" is not a valid interval.', $interval));
}
if ($matches[1]) {
foreach (explode(',', $matches[2]) as $n) {
if ($number == $n) {
return true;
}
}
} else {
$leftNumber = $this->_convertNumber($matches['left']);
$rightNumber = $this->_convertNumber($matches['right']);
return
('['=== $matches['left_delimiter'] ? $number >= $leftNumber : $number > $leftNumber)
&& (']'=== $matches['right_delimiter'] ? $number <= $rightNumber : $number < $rightNumber)
;
}
return false;
}
private function _convertNumber($number)
{
if ('-Inf'=== $number) {
return log(0);
} elseif ('+Inf'=== $number ||'Inf'=== $number) {
return -log(0);
}
return (float) $number;
}
private function _getPluralPosition($number, $locale)
{
if ('pt_BR'=== $locale) {
$locale ='xbr';
}
if (strlen($locale) > 3) {
$locale = substr($locale, 0, -strlen(strrchr($locale,'_')));
}
if (isset($this->_pluralRules[$locale])) {
$return = call_user_func($this->_pluralRules[$locale], $number);
if (!is_int($return) || $return < 0) {
return 0;
}
return $return;
}
switch ($locale) {
case'bo':
case'dz':
case'id':
case'ja':
case'jv':
case'ka':
case'km':
case'kn':
case'ko':
case'ms':
case'th':
case'tr':
case'vi':
case'zh':
return 0;
break;
case'af':
case'az':
case'bn':
case'bg':
case'ca':
case'da':
case'de':
case'el':
case'en':
case'eo':
case'es':
case'et':
case'eu':
case'fa':
case'fi':
case'fo':
case'fur':
case'fy':
case'gl':
case'gu':
case'ha':
case'he':
case'hu':
case'is':
case'it':
case'ku':
case'lb':
case'ml':
case'mn':
case'mr':
case'nah':
case'nb':
case'ne':
case'nl':
case'nn':
case'no':
case'om':
case'or':
case'pa':
case'pap':
case'ps':
case'pt':
case'so':
case'sq':
case'sv':
case'sw':
case'ta':
case'te':
case'tk':
case'ur':
case'zu':
return ($number == 1) ? 0 : 1;
case'am':
case'bh':
case'fil':
case'fr':
case'gun':
case'hi':
case'ln':
case'mg':
case'nso':
case'xbr':
case'ti':
case'wa':
return (($number == 0) || ($number == 1)) ? 0 : 1;
case'be':
case'bs':
case'hr':
case'ru':
case'sr':
case'uk':
return (($number % 10 == 1) && ($number % 100 != 11)) ? 0 : ((($number % 10 >= 2) && ($number % 10 <= 4) && (($number % 100 < 10) || ($number % 100 >= 20))) ? 1 : 2);
case'cs':
case'sk':
return ($number == 1) ? 0 : ((($number >= 2) && ($number <= 4)) ? 1 : 2);
case'ga':
return ($number == 1) ? 0 : (($number == 2) ? 1 : 2);
case'lt':
return (($number % 10 == 1) && ($number % 100 != 11)) ? 0 : ((($number % 10 >= 2) && (($number % 100 < 10) || ($number % 100 >= 20))) ? 1 : 2);
case'sl':
return ($number % 100 == 1) ? 0 : (($number % 100 == 2) ? 1 : ((($number % 100 == 3) || ($number % 100 == 4)) ? 2 : 3));
case'mk':
return ($number % 10 == 1) ? 0 : 1;
case'mt':
return ($number == 1) ? 0 : ((($number == 0) || (($number % 100 > 1) && ($number % 100 < 11))) ? 1 : ((($number % 100 > 10) && ($number % 100 < 20)) ? 2 : 3));
case'lv':
return ($number == 0) ? 0 : ((($number % 10 == 1) && ($number % 100 != 11)) ? 1 : 2);
case'pl':
return ($number == 1) ? 0 : ((($number % 10 >= 2) && ($number % 10 <= 4) && (($number % 100 < 12) || ($number % 100 > 14))) ? 1 : 2);
case'cy':
return ($number == 1) ? 0 : (($number == 2) ? 1 : ((($number == 8) || ($number == 11)) ? 2 : 3));
case'ro':
return ($number == 1) ? 0 : ((($number == 0) || (($number % 100 > 0) && ($number % 100 < 20))) ? 1 : 2);
case'ar':
return ($number == 0) ? 0 : (($number == 1) ? 1 : (($number == 2) ? 2 : ((($number >= 3) && ($number <= 10)) ? 3 : ((($number >= 11) && ($number <= 99)) ? 4 : 5))));
default:
return 0;
}
}
}
class tubepress_wordpress_impl_translation_WpTranslator extends tubepress_lib_impl_translation_AbstractTranslator
{
private $_wpFunctions;
public function __construct(tubepress_wordpress_impl_wp_WpFunctions $wpFunctions)
{
$this->_wpFunctions = $wpFunctions;
}
protected function translate($id, $domain = null, $locale = null)
{
$domain = $domain ? $domain :'tubepress';
return $id ==''?'': $this->_wpFunctions->__($id, $domain);
}
public function setLocale($locale)
{
throw new LogicException('Use WPLANG to set WordPress locale');
}
public function getLocale()
{
return $this->_wpFunctions->get_locale();
}
}
class tubepress_wordpress_impl_wp_ActivationHook
{
private $_bootSettings;
private $_fs;
public function __construct(tubepress_platform_api_boot_BootSettingsInterface $bootSettings,
ehough_filesystem_FilesystemInterface $fileSystem)
{
$this->_bootSettings = $bootSettings;
$this->_fs = $fileSystem;
}
public function execute()
{
if (!is_dir(WP_CONTENT_DIR .'/tubepress-content')) {
$this->_tryToMirror(
TUBEPRESS_ROOT .'/src/add-ons/wordpress/resources/user-content-skeleton',
WP_CONTENT_DIR .'/tubepress-content');
}
if (!is_dir(WP_CONTENT_DIR .'/tubepress-content/themes/starter')) {
$this->_tryToMirror(
TUBEPRESS_ROOT .'/src/add-ons/wordpress/resources/user-content-skeleton/themes/starter',
WP_CONTENT_DIR .'/tubepress-content/themes/starter');
}
if (!is_dir(WP_CONTENT_DIR .'/tubepress-content/themes/starter/templates')) {
$this->_tryToMirror(
TUBEPRESS_ROOT .'/src/add-ons/core/templates/public',
WP_CONTENT_DIR .'/tubepress-content/themes/starter/templates');
}
}
private function _tryToMirror($source, $dest)
{
try {
$this->_fs->mirror($source, $dest);
} catch (Exception $e) {
}
}
}
class tubepress_wordpress_impl_wp_WpFunctions
{
const _ ='tubepress_wordpress_impl_wp_WpFunctions';
public function __($message, $domain)
{
return $message ==''?'': __($message, $domain);
}
public function update_option($name, $value)
{
return update_option($name, $value);
}
public function get_locale()
{
return get_locale();
}
public function get_option($name)
{
return get_option($name);
}
public function get_pages($args)
{
return get_pages($args);
}
public function get_page_templates()
{
return get_page_templates();
}
public function get_posts($args)
{
return get_posts($args);
}
public function get_the_ID()
{
return get_the_ID();
}
public function wp_dequeue_script($handle)
{
wp_dequeue_script($handle);
}
public function wp_dequeue_style($handle)
{
wp_dequeue_style($handle);
}
public function wp_deregister_script($handle)
{
wp_deregister_script($handle);
}
public function add_option($name, $value)
{
add_option($name, $value);
}
public function delete_option($name)
{
delete_option($name);
}
public function add_options_page($pageTitle, $menuTitle, $capability, $menu_slug, $callback)
{
return add_options_page($pageTitle, $menuTitle, $capability, $menu_slug, $callback);
}
public function check_admin_referer($action, $queryArg)
{
return check_admin_referer($action, $queryArg);
}
public function is_admin()
{
return is_admin();
}
public function plugins_url($path, $plugin)
{
return plugins_url($path, $plugin);
}
public function plugin_basename($file)
{
return plugin_basename($file);
}
public function wp_enqueue_script($handle, $src, $deps, $ver, $in_footer)
{
wp_enqueue_script($handle, $src, $deps, $ver, $in_footer);
}
public function wp_enqueue_style($handle)
{
wp_enqueue_style($handle);
}
public function wp_register_script($handle, $src, $deps = array(), $version = null, $inFooter = false)
{
wp_register_script($handle, $src, $deps, $version, $inFooter);
}
public function wp_register_sidebar_widget($id, $name, $callback, $options)
{
wp_register_sidebar_widget($id, $name, $callback, $options);
}
public function wp_register_style($handle, $src, $deps = array(), $version = null)
{
wp_register_style($handle, $src, $deps, $version);
}
public function wp_register_widget_control($id, $name, $callback)
{
wp_register_widget_control($id, $name, $callback);
}
public function add_action($tag, $function, $priority, $acceptedArgs)
{
add_action($tag, $function, $priority, $acceptedArgs);
}
public function add_filter($tag, $function, $priority, $acceptedArgs)
{
add_filter($tag, $function, $priority, $acceptedArgs);
}
public function is_ssl()
{
return is_ssl();
}
public function load_plugin_textdomain($domain, $absPath, $relPath)
{
load_plugin_textdomain($domain, $absPath, $relPath);
}
public function site_url()
{
return site_url();
}
public function content_url($path ='')
{
return content_url($path);
}
public function wp_version()
{
global $wp_version;
return $wp_version;
}
public function register_activation_hook($file, $function)
{
return register_activation_hook($file, $function);
}
public function wp_nonce_field($action, $name, $referrer, $echo)
{
return wp_nonce_field($action, $name, $referrer, $echo);
}
public function wp_verify_nonce($nonce, $action)
{
return wp_verify_nonce($nonce, $action);
}
public function wp_localize_script($handle, $objectName, array $l10n)
{
wp_localize_script($handle, $objectName, $l10n);
}
public function admin_url($path = null, $scheme ='admin')
{
return admin_url($path, $scheme);
}
public function current_user_can($capability, $args = null)
{
return current_user_can($capability, $args);
}
public function wp_create_nonce($action = null)
{
return wp_create_nonce($action);
}
public function wp_load_alloptions()
{
return wp_load_alloptions();
}
public function get_transient($transient)
{
return get_transient($transient);
}
public function set_transient($transient, $value, $expiration = 0)
{
set_transient($transient, $value, $expiration);
}
public function wp_get_current_user()
{
return wp_get_current_user();
}
public function register_widget($class)
{
register_widget($class);
}
}
if ((!class_exists('Twig_Environment', false)) && (!interface_exists('Twig_Environment', false))) { 
class Twig_Environment
{
const VERSION ='1.18.2-DEV';
protected $charset;
protected $loader;
protected $debug;
protected $autoReload;
protected $cache;
protected $lexer;
protected $parser;
protected $compiler;
protected $baseTemplateClass;
protected $extensions;
protected $parsers;
protected $visitors;
protected $filters;
protected $tests;
protected $functions;
protected $globals;
protected $runtimeInitialized;
protected $extensionInitialized;
protected $loadedTemplates;
protected $strictVariables;
protected $unaryOperators;
protected $binaryOperators;
protected $templateClassPrefix ='__TwigTemplate_';
protected $functionCallbacks;
protected $filterCallbacks;
protected $staging;
public function __construct(Twig_LoaderInterface $loader = null, $options = array())
{
if (null !== $loader) {
$this->setLoader($loader);
}
$options = array_merge(array('debug'=> false,'charset'=>'UTF-8','base_template_class'=>'Twig_Template','strict_variables'=> false,'autoescape'=>'html','cache'=> false,'auto_reload'=> null,'optimizations'=> -1,
), $options);
$this->debug = (bool) $options['debug'];
$this->charset = strtoupper($options['charset']);
$this->baseTemplateClass = $options['base_template_class'];
$this->autoReload = null === $options['auto_reload'] ? $this->debug : (bool) $options['auto_reload'];
$this->strictVariables = (bool) $options['strict_variables'];
$this->runtimeInitialized = false;
$this->setCache($options['cache']);
$this->functionCallbacks = array();
$this->filterCallbacks = array();
$this->addExtension(new Twig_Extension_Core());
$this->addExtension(new Twig_Extension_Escaper($options['autoescape']));
$this->addExtension(new Twig_Extension_Optimizer($options['optimizations']));
$this->extensionInitialized = false;
$this->staging = new Twig_Extension_Staging();
}
public function getBaseTemplateClass()
{
return $this->baseTemplateClass;
}
public function setBaseTemplateClass($class)
{
$this->baseTemplateClass = $class;
}
public function enableDebug()
{
$this->debug = true;
}
public function disableDebug()
{
$this->debug = false;
}
public function isDebug()
{
return $this->debug;
}
public function enableAutoReload()
{
$this->autoReload = true;
}
public function disableAutoReload()
{
$this->autoReload = false;
}
public function isAutoReload()
{
return $this->autoReload;
}
public function enableStrictVariables()
{
$this->strictVariables = true;
}
public function disableStrictVariables()
{
$this->strictVariables = false;
}
public function isStrictVariables()
{
return $this->strictVariables;
}
public function getCache()
{
return $this->cache;
}
public function setCache($cache)
{
$this->cache = $cache ? $cache : false;
}
public function getCacheFilename($name)
{
if (false === $this->cache) {
return false;
}
$class = substr($this->getTemplateClass($name), strlen($this->templateClassPrefix));
return $this->getCache().'/'.$class[0].'/'.$class[1].'/'.$class.'.php';
}
public function getTemplateClass($name, $index = null)
{
return $this->templateClassPrefix.hash('sha256', $this->getLoader()->getCacheKey($name)).(null === $index ?'':'_'.$index);
}
public function getTemplateClassPrefix()
{
return $this->templateClassPrefix;
}
public function render($name, array $context = array())
{
return $this->loadTemplate($name)->render($context);
}
public function display($name, array $context = array())
{
$this->loadTemplate($name)->display($context);
}
public function loadTemplate($name, $index = null)
{
$cls = $this->getTemplateClass($name, $index);
if (isset($this->loadedTemplates[$cls])) {
return $this->loadedTemplates[$cls];
}
if (!class_exists($cls, false)) {
if (false === $cache = $this->getCacheFilename($name)) {
eval('?>'.$this->compileSource($this->getLoader()->getSource($name), $name));
} else {
if (!is_file($cache) || ($this->isAutoReload() && !$this->isTemplateFresh($name, filemtime($cache)))) {
$this->writeCacheFile($cache, $this->compileSource($this->getLoader()->getSource($name), $name));
}
require_once $cache;
}
}
if (!$this->runtimeInitialized) {
$this->initRuntime();
}
return $this->loadedTemplates[$cls] = new $cls($this);
}
public function createTemplate($template)
{
$name = sprintf('__string_template__%s', hash('sha256', uniqid(mt_rand(), true), false));
$loader = new Twig_Loader_Chain(array(
new Twig_Loader_Array(array($name => $template)),
$current = $this->getLoader(),
));
$this->setLoader($loader);
try {
$template = $this->loadTemplate($name);
} catch (Exception $e) {
$this->setLoader($current);
throw $e;
}
$this->setLoader($current);
return $template;
}
public function isTemplateFresh($name, $time)
{
foreach ($this->extensions as $extension) {
$r = new ReflectionObject($extension);
if (filemtime($r->getFileName()) > $time) {
return false;
}
}
return $this->getLoader()->isFresh($name, $time);
}
public function resolveTemplate($names)
{
if (!is_array($names)) {
$names = array($names);
}
foreach ($names as $name) {
if ($name instanceof Twig_Template) {
return $name;
}
try {
return $this->loadTemplate($name);
} catch (Twig_Error_Loader $e) {
}
}
if (1 === count($names)) {
throw $e;
}
throw new Twig_Error_Loader(sprintf('Unable to find one of the following templates: "%s".', implode('", "', $names)));
}
public function clearTemplateCache()
{
$this->loadedTemplates = array();
}
public function clearCacheFiles()
{
if (false === $this->cache) {
return;
}
foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($this->cache), RecursiveIteratorIterator::LEAVES_ONLY) as $file) {
if ($file->isFile()) {
@unlink($file->getPathname());
}
}
}
public function getLexer()
{
if (null === $this->lexer) {
$this->lexer = new Twig_Lexer($this);
}
return $this->lexer;
}
public function setLexer(Twig_LexerInterface $lexer)
{
$this->lexer = $lexer;
}
public function tokenize($source, $name = null)
{
return $this->getLexer()->tokenize($source, $name);
}
public function getParser()
{
if (null === $this->parser) {
$this->parser = new Twig_Parser($this);
}
return $this->parser;
}
public function setParser(Twig_ParserInterface $parser)
{
$this->parser = $parser;
}
public function parse(Twig_TokenStream $stream)
{
return $this->getParser()->parse($stream);
}
public function getCompiler()
{
if (null === $this->compiler) {
$this->compiler = new Twig_Compiler($this);
}
return $this->compiler;
}
public function setCompiler(Twig_CompilerInterface $compiler)
{
$this->compiler = $compiler;
}
public function compile(Twig_NodeInterface $node)
{
return $this->getCompiler()->compile($node)->getSource();
}
public function compileSource($source, $name = null)
{
try {
return $this->compile($this->parse($this->tokenize($source, $name)));
} catch (Twig_Error $e) {
$e->setTemplateFile($name);
throw $e;
} catch (Exception $e) {
throw new Twig_Error_Syntax(sprintf('An exception has been thrown during the compilation of a template ("%s").', $e->getMessage()), -1, $name, $e);
}
}
public function setLoader(Twig_LoaderInterface $loader)
{
$this->loader = $loader;
}
public function getLoader()
{
if (null === $this->loader) {
throw new LogicException('You must set a loader first.');
}
return $this->loader;
}
public function setCharset($charset)
{
$this->charset = strtoupper($charset);
}
public function getCharset()
{
return $this->charset;
}
public function initRuntime()
{
$this->runtimeInitialized = true;
foreach ($this->getExtensions() as $extension) {
$extension->initRuntime($this);
}
}
public function hasExtension($name)
{
return isset($this->extensions[$name]);
}
public function getExtension($name)
{
if (!isset($this->extensions[$name])) {
throw new Twig_Error_Runtime(sprintf('The "%s" extension is not enabled.', $name));
}
return $this->extensions[$name];
}
public function addExtension(Twig_ExtensionInterface $extension)
{
if ($this->extensionInitialized) {
throw new LogicException(sprintf('Unable to register extension "%s" as extensions have already been initialized.', $extension->getName()));
}
$this->extensions[$extension->getName()] = $extension;
}
public function removeExtension($name)
{
if ($this->extensionInitialized) {
throw new LogicException(sprintf('Unable to remove extension "%s" as extensions have already been initialized.', $name));
}
unset($this->extensions[$name]);
}
public function setExtensions(array $extensions)
{
foreach ($extensions as $extension) {
$this->addExtension($extension);
}
}
public function getExtensions()
{
return $this->extensions;
}
public function addTokenParser(Twig_TokenParserInterface $parser)
{
if ($this->extensionInitialized) {
throw new LogicException('Unable to add a token parser as extensions have already been initialized.');
}
$this->staging->addTokenParser($parser);
}
public function getTokenParsers()
{
if (!$this->extensionInitialized) {
$this->initExtensions();
}
return $this->parsers;
}
public function getTags()
{
$tags = array();
foreach ($this->getTokenParsers()->getParsers() as $parser) {
if ($parser instanceof Twig_TokenParserInterface) {
$tags[$parser->getTag()] = $parser;
}
}
return $tags;
}
public function addNodeVisitor(Twig_NodeVisitorInterface $visitor)
{
if ($this->extensionInitialized) {
throw new LogicException('Unable to add a node visitor as extensions have already been initialized.');
}
$this->staging->addNodeVisitor($visitor);
}
public function getNodeVisitors()
{
if (!$this->extensionInitialized) {
$this->initExtensions();
}
return $this->visitors;
}
public function addFilter($name, $filter = null)
{
if (!$name instanceof Twig_SimpleFilter && !($filter instanceof Twig_SimpleFilter || $filter instanceof Twig_FilterInterface)) {
throw new LogicException('A filter must be an instance of Twig_FilterInterface or Twig_SimpleFilter');
}
if ($name instanceof Twig_SimpleFilter) {
$filter = $name;
$name = $filter->getName();
}
if ($this->extensionInitialized) {
throw new LogicException(sprintf('Unable to add filter "%s" as extensions have already been initialized.', $name));
}
$this->staging->addFilter($name, $filter);
}
public function getFilter($name)
{
if (!$this->extensionInitialized) {
$this->initExtensions();
}
if (isset($this->filters[$name])) {
return $this->filters[$name];
}
foreach ($this->filters as $pattern => $filter) {
$pattern = str_replace('\\*','(.*?)', preg_quote($pattern,'#'), $count);
if ($count) {
if (preg_match('#^'.$pattern.'$#', $name, $matches)) {
array_shift($matches);
$filter->setArguments($matches);
return $filter;
}
}
}
foreach ($this->filterCallbacks as $callback) {
if (false !== $filter = call_user_func($callback, $name)) {
return $filter;
}
}
return false;
}
public function registerUndefinedFilterCallback($callable)
{
$this->filterCallbacks[] = $callable;
}
public function getFilters()
{
if (!$this->extensionInitialized) {
$this->initExtensions();
}
return $this->filters;
}
public function addTest($name, $test = null)
{
if (!$name instanceof Twig_SimpleTest && !($test instanceof Twig_SimpleTest || $test instanceof Twig_TestInterface)) {
throw new LogicException('A test must be an instance of Twig_TestInterface or Twig_SimpleTest');
}
if ($name instanceof Twig_SimpleTest) {
$test = $name;
$name = $test->getName();
}
if ($this->extensionInitialized) {
throw new LogicException(sprintf('Unable to add test "%s" as extensions have already been initialized.', $name));
}
$this->staging->addTest($name, $test);
}
public function getTests()
{
if (!$this->extensionInitialized) {
$this->initExtensions();
}
return $this->tests;
}
public function getTest($name)
{
if (!$this->extensionInitialized) {
$this->initExtensions();
}
if (isset($this->tests[$name])) {
return $this->tests[$name];
}
return false;
}
public function addFunction($name, $function = null)
{
if (!$name instanceof Twig_SimpleFunction && !($function instanceof Twig_SimpleFunction || $function instanceof Twig_FunctionInterface)) {
throw new LogicException('A function must be an instance of Twig_FunctionInterface or Twig_SimpleFunction');
}
if ($name instanceof Twig_SimpleFunction) {
$function = $name;
$name = $function->getName();
}
if ($this->extensionInitialized) {
throw new LogicException(sprintf('Unable to add function "%s" as extensions have already been initialized.', $name));
}
$this->staging->addFunction($name, $function);
}
public function getFunction($name)
{
if (!$this->extensionInitialized) {
$this->initExtensions();
}
if (isset($this->functions[$name])) {
return $this->functions[$name];
}
foreach ($this->functions as $pattern => $function) {
$pattern = str_replace('\\*','(.*?)', preg_quote($pattern,'#'), $count);
if ($count) {
if (preg_match('#^'.$pattern.'$#', $name, $matches)) {
array_shift($matches);
$function->setArguments($matches);
return $function;
}
}
}
foreach ($this->functionCallbacks as $callback) {
if (false !== $function = call_user_func($callback, $name)) {
return $function;
}
}
return false;
}
public function registerUndefinedFunctionCallback($callable)
{
$this->functionCallbacks[] = $callable;
}
public function getFunctions()
{
if (!$this->extensionInitialized) {
$this->initExtensions();
}
return $this->functions;
}
public function addGlobal($name, $value)
{
if ($this->extensionInitialized || $this->runtimeInitialized) {
if (null === $this->globals) {
$this->globals = $this->initGlobals();
}
}
if ($this->extensionInitialized || $this->runtimeInitialized) {
$this->globals[$name] = $value;
} else {
$this->staging->addGlobal($name, $value);
}
}
public function getGlobals()
{
if (!$this->runtimeInitialized && !$this->extensionInitialized) {
return $this->initGlobals();
}
if (null === $this->globals) {
$this->globals = $this->initGlobals();
}
return $this->globals;
}
public function mergeGlobals(array $context)
{
foreach ($this->getGlobals() as $key => $value) {
if (!array_key_exists($key, $context)) {
$context[$key] = $value;
}
}
return $context;
}
public function getUnaryOperators()
{
if (!$this->extensionInitialized) {
$this->initExtensions();
}
return $this->unaryOperators;
}
public function getBinaryOperators()
{
if (!$this->extensionInitialized) {
$this->initExtensions();
}
return $this->binaryOperators;
}
public function computeAlternatives($name, $items)
{
$alternatives = array();
foreach ($items as $item) {
$lev = levenshtein($name, $item);
if ($lev <= strlen($name) / 3 || false !== strpos($item, $name)) {
$alternatives[$item] = $lev;
}
}
asort($alternatives);
return array_keys($alternatives);
}
protected function initGlobals()
{
$globals = array();
foreach ($this->extensions as $extension) {
$extGlob = $extension->getGlobals();
if (!is_array($extGlob)) {
throw new UnexpectedValueException(sprintf('"%s::getGlobals()" must return an array of globals.', get_class($extension)));
}
$globals[] = $extGlob;
}
$globals[] = $this->staging->getGlobals();
return call_user_func_array('array_merge', $globals);
}
protected function initExtensions()
{
if ($this->extensionInitialized) {
return;
}
$this->extensionInitialized = true;
$this->parsers = new Twig_TokenParserBroker();
$this->filters = array();
$this->functions = array();
$this->tests = array();
$this->visitors = array();
$this->unaryOperators = array();
$this->binaryOperators = array();
foreach ($this->extensions as $extension) {
$this->initExtension($extension);
}
$this->initExtension($this->staging);
}
protected function initExtension(Twig_ExtensionInterface $extension)
{
foreach ($extension->getFilters() as $name => $filter) {
if ($name instanceof Twig_SimpleFilter) {
$filter = $name;
$name = $filter->getName();
} elseif ($filter instanceof Twig_SimpleFilter) {
$name = $filter->getName();
}
$this->filters[$name] = $filter;
}
foreach ($extension->getFunctions() as $name => $function) {
if ($name instanceof Twig_SimpleFunction) {
$function = $name;
$name = $function->getName();
} elseif ($function instanceof Twig_SimpleFunction) {
$name = $function->getName();
}
$this->functions[$name] = $function;
}
foreach ($extension->getTests() as $name => $test) {
if ($name instanceof Twig_SimpleTest) {
$test = $name;
$name = $test->getName();
} elseif ($test instanceof Twig_SimpleTest) {
$name = $test->getName();
}
$this->tests[$name] = $test;
}
foreach ($extension->getTokenParsers() as $parser) {
if ($parser instanceof Twig_TokenParserInterface) {
$this->parsers->addTokenParser($parser);
} elseif ($parser instanceof Twig_TokenParserBrokerInterface) {
$this->parsers->addTokenParserBroker($parser);
} else {
throw new LogicException('getTokenParsers() must return an array of Twig_TokenParserInterface or Twig_TokenParserBrokerInterface instances');
}
}
foreach ($extension->getNodeVisitors() as $visitor) {
$this->visitors[] = $visitor;
}
if ($operators = $extension->getOperators()) {
if (2 !== count($operators)) {
throw new InvalidArgumentException(sprintf('"%s::getOperators()" does not return a valid operators array.', get_class($extension)));
}
$this->unaryOperators = array_merge($this->unaryOperators, $operators[0]);
$this->binaryOperators = array_merge($this->binaryOperators, $operators[1]);
}
}
protected function writeCacheFile($file, $content)
{
$dir = dirname($file);
if (!is_dir($dir)) {
if (false === @mkdir($dir, 0777, true)) {
clearstatcache(false, $dir);
if (!is_dir($dir)) {
throw new RuntimeException(sprintf('Unable to create the cache directory (%s).', $dir));
}
}
} elseif (!is_writable($dir)) {
throw new RuntimeException(sprintf('Unable to write in the cache directory (%s).', $dir));
}
$tmpFile = tempnam($dir, basename($file));
if (false !== @file_put_contents($tmpFile, $content)) {
if (@rename($tmpFile, $file) || (@copy($tmpFile, $file) && unlink($tmpFile))) {
@chmod($file, 0666 & ~umask());
return;
}
}
throw new RuntimeException(sprintf('Failed to write cache file "%s".', $file));
}
} }

if ((!class_exists('Twig_Error', false)) && (!interface_exists('Twig_Error', false))) { 
class Twig_Error extends Exception
{
protected $lineno;
protected $filename;
protected $rawMessage;
protected $previous;
public function __construct($message, $lineno = -1, $filename = null, Exception $previous = null)
{
if (PHP_VERSION_ID < 50300) {
$this->previous = $previous;
parent::__construct('');
} else {
parent::__construct('', 0, $previous);
}
$this->lineno = $lineno;
$this->filename = $filename;
if (-1 === $this->lineno || null === $this->filename) {
$this->guessTemplateInfo();
}
$this->rawMessage = $message;
$this->updateRepr();
}
public function getRawMessage()
{
return $this->rawMessage;
}
public function getTemplateFile()
{
return $this->filename;
}
public function setTemplateFile($filename)
{
$this->filename = $filename;
$this->updateRepr();
}
public function getTemplateLine()
{
return $this->lineno;
}
public function setTemplateLine($lineno)
{
$this->lineno = $lineno;
$this->updateRepr();
}
public function guess()
{
$this->guessTemplateInfo();
$this->updateRepr();
}
public function __call($method, $arguments)
{
if ('getprevious'== strtolower($method)) {
return $this->previous;
}
throw new BadMethodCallException(sprintf('Method "Twig_Error::%s()" does not exist.', $method));
}
protected function updateRepr()
{
$this->message = $this->rawMessage;
$dot = false;
if ('.'=== substr($this->message, -1)) {
$this->message = substr($this->message, 0, -1);
$dot = true;
}
if ($this->filename) {
if (is_string($this->filename) || (is_object($this->filename) && method_exists($this->filename,'__toString'))) {
$filename = sprintf('"%s"', $this->filename);
} else {
$filename = json_encode($this->filename);
}
$this->message .= sprintf(' in %s', $filename);
}
if ($this->lineno && $this->lineno >= 0) {
$this->message .= sprintf(' at line %d', $this->lineno);
}
if ($dot) {
$this->message .='.';
}
}
protected function guessTemplateInfo()
{
$template = null;
$templateClass = null;
if (PHP_VERSION_ID >= 50306) {
$backtrace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS | DEBUG_BACKTRACE_PROVIDE_OBJECT);
} else {
$backtrace = debug_backtrace();
}
foreach ($backtrace as $trace) {
if (isset($trace['object']) && $trace['object'] instanceof Twig_Template &&'Twig_Template'!== get_class($trace['object'])) {
$currentClass = get_class($trace['object']);
$isEmbedContainer = 0 === strpos($templateClass, $currentClass);
if (null === $this->filename || ($this->filename == $trace['object']->getTemplateName() && !$isEmbedContainer)) {
$template = $trace['object'];
$templateClass = get_class($trace['object']);
}
}
}
if (null !== $template && null === $this->filename) {
$this->filename = $template->getTemplateName();
}
if (null === $template || $this->lineno > -1) {
return;
}
$r = new ReflectionObject($template);
$file = $r->getFileName();
if (is_dir($file)) {
$file ='';
}
$exceptions = array($e = $this);
while (($e instanceof self || method_exists($e,'getPrevious')) && $e = $e->getPrevious()) {
$exceptions[] = $e;
}
while ($e = array_pop($exceptions)) {
$traces = $e->getTrace();
array_unshift($traces, array('file'=> $e->getFile(),'line'=> $e->getLine()));
while ($trace = array_shift($traces)) {
if (!isset($trace['file']) || !isset($trace['line']) || $file != $trace['file']) {
continue;
}
foreach ($template->getDebugInfo() as $codeLine => $templateLine) {
if ($codeLine <= $trace['line']) {
$this->lineno = $templateLine;
return;
}
}
}
}
}
} }

if ((!class_exists('Twig_Error_Loader', false)) && (!interface_exists('Twig_Error_Loader', false))) { 
class Twig_Error_Loader extends Twig_Error
{
public function __construct($message, $lineno = -1, $filename = null, Exception $previous = null)
{
parent::__construct($message, false, false, $previous);
}
} }

if ((!class_exists('Twig_ExtensionInterface', false)) && (!interface_exists('Twig_ExtensionInterface', false))) { 
interface Twig_ExtensionInterface
{
public function initRuntime(Twig_Environment $environment);
public function getTokenParsers();
public function getNodeVisitors();
public function getFilters();
public function getTests();
public function getFunctions();
public function getOperators();
public function getGlobals();
public function getName();
} }

if ((!class_exists('Twig_Extension', false)) && (!interface_exists('Twig_Extension', false))) { 
abstract class Twig_Extension implements Twig_ExtensionInterface
{
public function initRuntime(Twig_Environment $environment)
{
}
public function getTokenParsers()
{
return array();
}
public function getNodeVisitors()
{
return array();
}
public function getFilters()
{
return array();
}
public function getTests()
{
return array();
}
public function getFunctions()
{
return array();
}
public function getOperators()
{
return array();
}
public function getGlobals()
{
return array();
}
} }

if ((!class_exists('Twig_Extension_Core', false)) && (!interface_exists('Twig_Extension_Core', false))) { 
if (!defined('ENT_SUBSTITUTE')) {
define('ENT_SUBSTITUTE', 0);
}
class Twig_Extension_Core extends Twig_Extension
{
protected $dateFormats = array('F j, Y H:i','%d days');
protected $numberFormat = array(0,'.',',');
protected $timezone = null;
protected $escapers = array();
public function setEscaper($strategy, $callable)
{
$this->escapers[$strategy] = $callable;
}
public function getEscapers()
{
return $this->escapers;
}
public function setDateFormat($format = null, $dateIntervalFormat = null)
{
if (null !== $format) {
$this->dateFormats[0] = $format;
}
if (null !== $dateIntervalFormat) {
$this->dateFormats[1] = $dateIntervalFormat;
}
}
public function getDateFormat()
{
return $this->dateFormats;
}
public function setTimezone($timezone)
{
$this->timezone = $timezone instanceof DateTimeZone ? $timezone : new DateTimeZone($timezone);
}
public function getTimezone()
{
if (null === $this->timezone) {
$this->timezone = new DateTimeZone(date_default_timezone_get());
}
return $this->timezone;
}
public function setNumberFormat($decimal, $decimalPoint, $thousandSep)
{
$this->numberFormat = array($decimal, $decimalPoint, $thousandSep);
}
public function getNumberFormat()
{
return $this->numberFormat;
}
public function getTokenParsers()
{
return array(
new Twig_TokenParser_For(),
new Twig_TokenParser_If(),
new Twig_TokenParser_Extends(),
new Twig_TokenParser_Include(),
new Twig_TokenParser_Block(),
new Twig_TokenParser_Use(),
new Twig_TokenParser_Filter(),
new Twig_TokenParser_Macro(),
new Twig_TokenParser_Import(),
new Twig_TokenParser_From(),
new Twig_TokenParser_Set(),
new Twig_TokenParser_Spaceless(),
new Twig_TokenParser_Flush(),
new Twig_TokenParser_Do(),
new Twig_TokenParser_Embed(),
);
}
public function getFilters()
{
$filters = array(
new Twig_SimpleFilter('date','twig_date_format_filter', array('needs_environment'=> true)),
new Twig_SimpleFilter('date_modify','twig_date_modify_filter', array('needs_environment'=> true)),
new Twig_SimpleFilter('format','sprintf'),
new Twig_SimpleFilter('replace','strtr'),
new Twig_SimpleFilter('number_format','twig_number_format_filter', array('needs_environment'=> true)),
new Twig_SimpleFilter('abs','abs'),
new Twig_SimpleFilter('round','twig_round'),
new Twig_SimpleFilter('url_encode','twig_urlencode_filter'),
new Twig_SimpleFilter('json_encode','twig_jsonencode_filter'),
new Twig_SimpleFilter('convert_encoding','twig_convert_encoding'),
new Twig_SimpleFilter('title','twig_title_string_filter', array('needs_environment'=> true)),
new Twig_SimpleFilter('capitalize','twig_capitalize_string_filter', array('needs_environment'=> true)),
new Twig_SimpleFilter('upper','strtoupper'),
new Twig_SimpleFilter('lower','strtolower'),
new Twig_SimpleFilter('striptags','strip_tags'),
new Twig_SimpleFilter('trim','trim'),
new Twig_SimpleFilter('nl2br','nl2br', array('pre_escape'=>'html','is_safe'=> array('html'))),
new Twig_SimpleFilter('join','twig_join_filter'),
new Twig_SimpleFilter('split','twig_split_filter', array('needs_environment'=> true)),
new Twig_SimpleFilter('sort','twig_sort_filter'),
new Twig_SimpleFilter('merge','twig_array_merge'),
new Twig_SimpleFilter('batch','twig_array_batch'),
new Twig_SimpleFilter('reverse','twig_reverse_filter', array('needs_environment'=> true)),
new Twig_SimpleFilter('length','twig_length_filter', array('needs_environment'=> true)),
new Twig_SimpleFilter('slice','twig_slice', array('needs_environment'=> true)),
new Twig_SimpleFilter('first','twig_first', array('needs_environment'=> true)),
new Twig_SimpleFilter('last','twig_last', array('needs_environment'=> true)),
new Twig_SimpleFilter('default','_twig_default_filter', array('node_class'=>'Twig_Node_Expression_Filter_Default')),
new Twig_SimpleFilter('keys','twig_get_array_keys_filter'),
new Twig_SimpleFilter('escape','twig_escape_filter', array('needs_environment'=> true,'is_safe_callback'=>'twig_escape_filter_is_safe')),
new Twig_SimpleFilter('e','twig_escape_filter', array('needs_environment'=> true,'is_safe_callback'=>'twig_escape_filter_is_safe')),
);
if (function_exists('mb_get_info')) {
$filters[] = new Twig_SimpleFilter('upper','twig_upper_filter', array('needs_environment'=> true));
$filters[] = new Twig_SimpleFilter('lower','twig_lower_filter', array('needs_environment'=> true));
}
return $filters;
}
public function getFunctions()
{
return array(
new Twig_SimpleFunction('max','max'),
new Twig_SimpleFunction('min','min'),
new Twig_SimpleFunction('range','range'),
new Twig_SimpleFunction('constant','twig_constant'),
new Twig_SimpleFunction('cycle','twig_cycle'),
new Twig_SimpleFunction('random','twig_random', array('needs_environment'=> true)),
new Twig_SimpleFunction('date','twig_date_converter', array('needs_environment'=> true)),
new Twig_SimpleFunction('include','twig_include', array('needs_environment'=> true,'needs_context'=> true,'is_safe'=> array('all'))),
new Twig_SimpleFunction('source','twig_source', array('needs_environment'=> true,'is_safe'=> array('all'))),
);
}
public function getTests()
{
return array(
new Twig_SimpleTest('even', null, array('node_class'=>'Twig_Node_Expression_Test_Even')),
new Twig_SimpleTest('odd', null, array('node_class'=>'Twig_Node_Expression_Test_Odd')),
new Twig_SimpleTest('defined', null, array('node_class'=>'Twig_Node_Expression_Test_Defined')),
new Twig_SimpleTest('sameas', null, array('node_class'=>'Twig_Node_Expression_Test_Sameas')),
new Twig_SimpleTest('same as', null, array('node_class'=>'Twig_Node_Expression_Test_Sameas')),
new Twig_SimpleTest('none', null, array('node_class'=>'Twig_Node_Expression_Test_Null')),
new Twig_SimpleTest('null', null, array('node_class'=>'Twig_Node_Expression_Test_Null')),
new Twig_SimpleTest('divisibleby', null, array('node_class'=>'Twig_Node_Expression_Test_Divisibleby')),
new Twig_SimpleTest('divisible by', null, array('node_class'=>'Twig_Node_Expression_Test_Divisibleby')),
new Twig_SimpleTest('constant', null, array('node_class'=>'Twig_Node_Expression_Test_Constant')),
new Twig_SimpleTest('empty','twig_test_empty'),
new Twig_SimpleTest('iterable','twig_test_iterable'),
);
}
public function getOperators()
{
return array(
array('not'=> array('precedence'=> 50,'class'=>'Twig_Node_Expression_Unary_Not'),'-'=> array('precedence'=> 500,'class'=>'Twig_Node_Expression_Unary_Neg'),'+'=> array('precedence'=> 500,'class'=>'Twig_Node_Expression_Unary_Pos'),
),
array('or'=> array('precedence'=> 10,'class'=>'Twig_Node_Expression_Binary_Or','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'and'=> array('precedence'=> 15,'class'=>'Twig_Node_Expression_Binary_And','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'b-or'=> array('precedence'=> 16,'class'=>'Twig_Node_Expression_Binary_BitwiseOr','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'b-xor'=> array('precedence'=> 17,'class'=>'Twig_Node_Expression_Binary_BitwiseXor','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'b-and'=> array('precedence'=> 18,'class'=>'Twig_Node_Expression_Binary_BitwiseAnd','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'=='=> array('precedence'=> 20,'class'=>'Twig_Node_Expression_Binary_Equal','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'!='=> array('precedence'=> 20,'class'=>'Twig_Node_Expression_Binary_NotEqual','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'<'=> array('precedence'=> 20,'class'=>'Twig_Node_Expression_Binary_Less','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'>'=> array('precedence'=> 20,'class'=>'Twig_Node_Expression_Binary_Greater','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'>='=> array('precedence'=> 20,'class'=>'Twig_Node_Expression_Binary_GreaterEqual','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'<='=> array('precedence'=> 20,'class'=>'Twig_Node_Expression_Binary_LessEqual','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'not in'=> array('precedence'=> 20,'class'=>'Twig_Node_Expression_Binary_NotIn','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'in'=> array('precedence'=> 20,'class'=>'Twig_Node_Expression_Binary_In','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'matches'=> array('precedence'=> 20,'class'=>'Twig_Node_Expression_Binary_Matches','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'starts with'=> array('precedence'=> 20,'class'=>'Twig_Node_Expression_Binary_StartsWith','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'ends with'=> array('precedence'=> 20,'class'=>'Twig_Node_Expression_Binary_EndsWith','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'..'=> array('precedence'=> 25,'class'=>'Twig_Node_Expression_Binary_Range','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'+'=> array('precedence'=> 30,'class'=>'Twig_Node_Expression_Binary_Add','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'-'=> array('precedence'=> 30,'class'=>'Twig_Node_Expression_Binary_Sub','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'~'=> array('precedence'=> 40,'class'=>'Twig_Node_Expression_Binary_Concat','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'*'=> array('precedence'=> 60,'class'=>'Twig_Node_Expression_Binary_Mul','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'/'=> array('precedence'=> 60,'class'=>'Twig_Node_Expression_Binary_Div','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'//'=> array('precedence'=> 60,'class'=>'Twig_Node_Expression_Binary_FloorDiv','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'%'=> array('precedence'=> 60,'class'=>'Twig_Node_Expression_Binary_Mod','associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'is'=> array('precedence'=> 100,'callable'=> array($this,'parseTestExpression'),'associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'is not'=> array('precedence'=> 100,'callable'=> array($this,'parseNotTestExpression'),'associativity'=> Twig_ExpressionParser::OPERATOR_LEFT),'**'=> array('precedence'=> 200,'class'=>'Twig_Node_Expression_Binary_Power','associativity'=> Twig_ExpressionParser::OPERATOR_RIGHT),
),
);
}
public function parseNotTestExpression(Twig_Parser $parser, Twig_NodeInterface $node)
{
return new Twig_Node_Expression_Unary_Not($this->parseTestExpression($parser, $node), $parser->getCurrentToken()->getLine());
}
public function parseTestExpression(Twig_Parser $parser, Twig_NodeInterface $node)
{
$stream = $parser->getStream();
$name = $this->getTestName($parser, $node->getLine());
$class = $this->getTestNodeClass($parser, $name);
$arguments = null;
if ($stream->test(Twig_Token::PUNCTUATION_TYPE,'(')) {
$arguments = $parser->getExpressionParser()->parseArguments(true);
}
return new $class($node, $name, $arguments, $parser->getCurrentToken()->getLine());
}
protected function getTestName(Twig_Parser $parser, $line)
{
$stream = $parser->getStream();
$name = $stream->expect(Twig_Token::NAME_TYPE)->getValue();
$env = $parser->getEnvironment();
$testMap = $env->getTests();
if (isset($testMap[$name])) {
return $name;
}
if ($stream->test(Twig_Token::NAME_TYPE)) {
$name = $name.' '.$parser->getCurrentToken()->getValue();
if (isset($testMap[$name])) {
$parser->getStream()->next();
return $name;
}
}
$message = sprintf('The test "%s" does not exist', $name);
if ($alternatives = $env->computeAlternatives($name, array_keys($testMap))) {
$message = sprintf('%s. Did you mean "%s"', $message, implode('", "', $alternatives));
}
throw new Twig_Error_Syntax($message, $line, $parser->getFilename());
}
protected function getTestNodeClass(Twig_Parser $parser, $name)
{
$env = $parser->getEnvironment();
$testMap = $env->getTests();
if ($testMap[$name] instanceof Twig_SimpleTest) {
return $testMap[$name]->getNodeClass();
}
return $testMap[$name] instanceof Twig_Test_Node ? $testMap[$name]->getClass() :'Twig_Node_Expression_Test';
}
public function getName()
{
return'core';
}
}
function twig_cycle($values, $position)
{
if (!is_array($values) && !$values instanceof ArrayAccess) {
return $values;
}
return $values[$position % count($values)];
}
function twig_random(Twig_Environment $env, $values = null)
{
if (null === $values) {
return mt_rand();
}
if (is_int($values) || is_float($values)) {
return $values < 0 ? mt_rand($values, 0) : mt_rand(0, $values);
}
if ($values instanceof Traversable) {
$values = iterator_to_array($values);
} elseif (is_string($values)) {
if (''=== $values) {
return'';
}
if (null !== $charset = $env->getCharset()) {
if ('UTF-8'!= $charset) {
$values = twig_convert_encoding($values,'UTF-8', $charset);
}
$values = preg_split('/(?<!^)(?!$)/u', $values);
if ('UTF-8'!= $charset) {
foreach ($values as $i => $value) {
$values[$i] = twig_convert_encoding($value, $charset,'UTF-8');
}
}
} else {
return $values[mt_rand(0, strlen($values) - 1)];
}
}
if (!is_array($values)) {
return $values;
}
if (0 === count($values)) {
throw new Twig_Error_Runtime('The random function cannot pick from an empty array.');
}
return $values[array_rand($values, 1)];
}
function twig_date_format_filter(Twig_Environment $env, $date, $format = null, $timezone = null)
{
if (null === $format) {
$formats = $env->getExtension('core')->getDateFormat();
$format = $date instanceof DateInterval ? $formats[1] : $formats[0];
}
if ($date instanceof DateInterval) {
return $date->format($format);
}
return twig_date_converter($env, $date, $timezone)->format($format);
}
function twig_date_modify_filter(Twig_Environment $env, $date, $modifier)
{
$date = twig_date_converter($env, $date, false);
$resultDate = $date->modify($modifier);
return null === $resultDate ? $date : $resultDate;
}
function twig_date_converter(Twig_Environment $env, $date = null, $timezone = null)
{
if (false !== $timezone) {
if (null === $timezone) {
$timezone = $env->getExtension('core')->getTimezone();
} elseif (!$timezone instanceof DateTimeZone) {
$timezone = new DateTimeZone($timezone);
}
}
if ($date instanceof DateTimeImmutable) {
return false !== $timezone ? $date->setTimezone($timezone) : $date;
}
if ($date instanceof DateTime || $date instanceof DateTimeInterface) {
$date = clone $date;
if (false !== $timezone) {
$date->setTimezone($timezone);
}
return $date;
}
$asString = (string) $date;
if (ctype_digit($asString) || (!empty($asString) &&'-'=== $asString[0] && ctype_digit(substr($asString, 1)))) {
$date ='@'.$date;
}
$date = new DateTime($date, $env->getExtension('core')->getTimezone());
if (false !== $timezone) {
$date->setTimezone($timezone);
}
return $date;
}
function twig_round($value, $precision = 0, $method ='common')
{
if ('common'== $method) {
return round($value, $precision);
}
if ('ceil'!= $method &&'floor'!= $method) {
throw new Twig_Error_Runtime('The round filter only supports the "common", "ceil", and "floor" methods.');
}
return $method($value * pow(10, $precision)) / pow(10, $precision);
}
function twig_number_format_filter(Twig_Environment $env, $number, $decimal = null, $decimalPoint = null, $thousandSep = null)
{
$defaults = $env->getExtension('core')->getNumberFormat();
if (null === $decimal) {
$decimal = $defaults[0];
}
if (null === $decimalPoint) {
$decimalPoint = $defaults[1];
}
if (null === $thousandSep) {
$thousandSep = $defaults[2];
}
return number_format((float) $number, $decimal, $decimalPoint, $thousandSep);
}
function twig_urlencode_filter($url)
{
if (is_array($url)) {
if (defined('PHP_QUERY_RFC3986')) {
return http_build_query($url,'','&', PHP_QUERY_RFC3986);
}
return http_build_query($url,'','&');
}
return rawurlencode($url);
}
if (PHP_VERSION_ID < 50300) {
function twig_jsonencode_filter($value, $options = 0)
{
if ($value instanceof Twig_Markup) {
$value = (string) $value;
} elseif (is_array($value)) {
array_walk_recursive($value,'_twig_markup2string');
}
return json_encode($value);
}
} else {
function twig_jsonencode_filter($value, $options = 0)
{
if ($value instanceof Twig_Markup) {
$value = (string) $value;
} elseif (is_array($value)) {
array_walk_recursive($value,'_twig_markup2string');
}
return json_encode($value, $options);
}
}
function _twig_markup2string(&$value)
{
if ($value instanceof Twig_Markup) {
$value = (string) $value;
}
}
function twig_array_merge($arr1, $arr2)
{
if (!is_array($arr1) || !is_array($arr2)) {
throw new Twig_Error_Runtime(sprintf('The merge filter only works with arrays or hashes; %s and %s given.', gettype($arr1), gettype($arr2)));
}
return array_merge($arr1, $arr2);
}
function twig_slice(Twig_Environment $env, $item, $start, $length = null, $preserveKeys = false)
{
if ($item instanceof Traversable) {
if ($item instanceof IteratorAggregate) {
$item = $item->getIterator();
}
if ($start >= 0 && $length >= 0 && $item instanceof Iterator) {
try {
return iterator_to_array(new LimitIterator($item, $start, $length === null ? -1 : $length), $preserveKeys);
} catch (OutOfBoundsException $exception) {
return array();
}
}
$item = iterator_to_array($item, $preserveKeys);
}
if (is_array($item)) {
return array_slice($item, $start, $length, $preserveKeys);
}
$item = (string) $item;
if (function_exists('mb_get_info') && null !== $charset = $env->getCharset()) {
return (string) mb_substr($item, $start, null === $length ? mb_strlen($item, $charset) - $start : $length, $charset);
}
return (string) (null === $length ? substr($item, $start) : substr($item, $start, $length));
}
function twig_first(Twig_Environment $env, $item)
{
$elements = twig_slice($env, $item, 0, 1, false);
return is_string($elements) ? $elements : current($elements);
}
function twig_last(Twig_Environment $env, $item)
{
$elements = twig_slice($env, $item, -1, 1, false);
return is_string($elements) ? $elements : current($elements);
}
function twig_join_filter($value, $glue ='')
{
if ($value instanceof Traversable) {
$value = iterator_to_array($value, false);
}
return implode($glue, (array) $value);
}
function twig_split_filter(Twig_Environment $env, $value, $delimiter, $limit = null)
{
if (!empty($delimiter)) {
return null === $limit ? explode($delimiter, $value) : explode($delimiter, $value, $limit);
}
if (!function_exists('mb_get_info') || null === $charset = $env->getCharset()) {
return str_split($value, null === $limit ? 1 : $limit);
}
if ($limit <= 1) {
return preg_split('/(?<!^)(?!$)/u', $value);
}
$length = mb_strlen($value, $charset);
if ($length < $limit) {
return array($value);
}
$r = array();
for ($i = 0; $i < $length; $i += $limit) {
$r[] = mb_substr($value, $i, $limit, $charset);
}
return $r;
}
function _twig_default_filter($value, $default ='')
{
if (twig_test_empty($value)) {
return $default;
}
return $value;
}
function twig_get_array_keys_filter($array)
{
if (is_object($array) && $array instanceof Traversable) {
return array_keys(iterator_to_array($array));
}
if (!is_array($array)) {
return array();
}
return array_keys($array);
}
function twig_reverse_filter(Twig_Environment $env, $item, $preserveKeys = false)
{
if (is_object($item) && $item instanceof Traversable) {
return array_reverse(iterator_to_array($item), $preserveKeys);
}
if (is_array($item)) {
return array_reverse($item, $preserveKeys);
}
if (null !== $charset = $env->getCharset()) {
$string = (string) $item;
if ('UTF-8'!= $charset) {
$item = twig_convert_encoding($string,'UTF-8', $charset);
}
preg_match_all('/./us', $item, $matches);
$string = implode('', array_reverse($matches[0]));
if ('UTF-8'!= $charset) {
$string = twig_convert_encoding($string, $charset,'UTF-8');
}
return $string;
}
return strrev((string) $item);
}
function twig_sort_filter($array)
{
asort($array);
return $array;
}
function twig_in_filter($value, $compare)
{
if (is_array($compare)) {
return in_array($value, $compare, is_object($value) || is_resource($value));
} elseif (is_string($compare) && (is_string($value) || is_int($value) || is_float($value))) {
return''=== $value || false !== strpos($compare, (string) $value);
} elseif ($compare instanceof Traversable) {
return in_array($value, iterator_to_array($compare, false), is_object($value) || is_resource($value));
}
return false;
}
function twig_escape_filter(Twig_Environment $env, $string, $strategy ='html', $charset = null, $autoescape = false)
{
if ($autoescape && $string instanceof Twig_Markup) {
return $string;
}
if (!is_string($string)) {
if (is_object($string) && method_exists($string,'__toString')) {
$string = (string) $string;
} else {
return $string;
}
}
if (null === $charset) {
$charset = $env->getCharset();
}
switch ($strategy) {
case'html':
static $htmlspecialcharsCharsets;
if (null === $htmlspecialcharsCharsets) {
if (defined('HHVM_VERSION')) {
$htmlspecialcharsCharsets = array('utf-8'=> true,'UTF-8'=> true);
} else {
$htmlspecialcharsCharsets = array('ISO-8859-1'=> true,'ISO8859-1'=> true,'ISO-8859-15'=> true,'ISO8859-15'=> true,'utf-8'=> true,'UTF-8'=> true,'CP866'=> true,'IBM866'=> true,'866'=> true,'CP1251'=> true,'WINDOWS-1251'=> true,'WIN-1251'=> true,'1251'=> true,'CP1252'=> true,'WINDOWS-1252'=> true,'1252'=> true,'KOI8-R'=> true,'KOI8-RU'=> true,'KOI8R'=> true,'BIG5'=> true,'950'=> true,'GB2312'=> true,'936'=> true,'BIG5-HKSCS'=> true,'SHIFT_JIS'=> true,'SJIS'=> true,'932'=> true,'EUC-JP'=> true,'EUCJP'=> true,'ISO8859-5'=> true,'ISO-8859-5'=> true,'MACROMAN'=> true,
);
}
}
if (isset($htmlspecialcharsCharsets[$charset])) {
return htmlspecialchars($string, ENT_QUOTES | ENT_SUBSTITUTE, $charset);
}
if (isset($htmlspecialcharsCharsets[strtoupper($charset)])) {
$htmlspecialcharsCharsets[$charset] = true;
return htmlspecialchars($string, ENT_QUOTES | ENT_SUBSTITUTE, $charset);
}
$string = twig_convert_encoding($string,'UTF-8', $charset);
$string = htmlspecialchars($string, ENT_QUOTES | ENT_SUBSTITUTE,'UTF-8');
return twig_convert_encoding($string, $charset,'UTF-8');
case'js':
if ('UTF-8'!= $charset) {
$string = twig_convert_encoding($string,'UTF-8', $charset);
}
if (0 == strlen($string) ? false : (1 == preg_match('/^./su', $string) ? false : true)) {
throw new Twig_Error_Runtime('The string to escape is not a valid UTF-8 string.');
}
$string = preg_replace_callback('#[^a-zA-Z0-9,\._]#Su','_twig_escape_js_callback', $string);
if ('UTF-8'!= $charset) {
$string = twig_convert_encoding($string, $charset,'UTF-8');
}
return $string;
case'css':
if ('UTF-8'!= $charset) {
$string = twig_convert_encoding($string,'UTF-8', $charset);
}
if (0 == strlen($string) ? false : (1 == preg_match('/^./su', $string) ? false : true)) {
throw new Twig_Error_Runtime('The string to escape is not a valid UTF-8 string.');
}
$string = preg_replace_callback('#[^a-zA-Z0-9]#Su','_twig_escape_css_callback', $string);
if ('UTF-8'!= $charset) {
$string = twig_convert_encoding($string, $charset,'UTF-8');
}
return $string;
case'html_attr':
if ('UTF-8'!= $charset) {
$string = twig_convert_encoding($string,'UTF-8', $charset);
}
if (0 == strlen($string) ? false : (1 == preg_match('/^./su', $string) ? false : true)) {
throw new Twig_Error_Runtime('The string to escape is not a valid UTF-8 string.');
}
$string = preg_replace_callback('#[^a-zA-Z0-9,\.\-_]#Su','_twig_escape_html_attr_callback', $string);
if ('UTF-8'!= $charset) {
$string = twig_convert_encoding($string, $charset,'UTF-8');
}
return $string;
case'url':
if (PHP_VERSION_ID < 50300) {
return str_replace('%7E','~', rawurlencode($string));
}
return rawurlencode($string);
default:
static $escapers;
if (null === $escapers) {
$escapers = $env->getExtension('core')->getEscapers();
}
if (isset($escapers[$strategy])) {
return call_user_func($escapers[$strategy], $env, $string, $charset);
}
$validStrategies = implode(', ', array_merge(array('html','js','url','css','html_attr'), array_keys($escapers)));
throw new Twig_Error_Runtime(sprintf('Invalid escaping strategy "%s" (valid ones: %s).', $strategy, $validStrategies));
}
}
function twig_escape_filter_is_safe(Twig_Node $filterArgs)
{
foreach ($filterArgs as $arg) {
if ($arg instanceof Twig_Node_Expression_Constant) {
return array($arg->getAttribute('value'));
}
return array();
}
return array('html');
}
if (function_exists('mb_convert_encoding')) {
function twig_convert_encoding($string, $to, $from)
{
return mb_convert_encoding($string, $to, $from);
}
} elseif (function_exists('iconv')) {
function twig_convert_encoding($string, $to, $from)
{
return iconv($from, $to, $string);
}
} else {
function twig_convert_encoding($string, $to, $from)
{
throw new Twig_Error_Runtime('No suitable convert encoding function (use UTF-8 as your encoding or install the iconv or mbstring extension).');
}
}
function _twig_escape_js_callback($matches)
{
$char = $matches[0];
if (!isset($char[1])) {
return'\\x'.strtoupper(substr('00'.bin2hex($char), -2));
}
$char = twig_convert_encoding($char,'UTF-16BE','UTF-8');
return'\\u'.strtoupper(substr('0000'.bin2hex($char), -4));
}
function _twig_escape_css_callback($matches)
{
$char = $matches[0];
if (!isset($char[1])) {
$hex = ltrim(strtoupper(bin2hex($char)),'0');
if (0 === strlen($hex)) {
$hex ='0';
}
return'\\'.$hex.' ';
}
$char = twig_convert_encoding($char,'UTF-16BE','UTF-8');
return'\\'.ltrim(strtoupper(bin2hex($char)),'0').' ';
}
function _twig_escape_html_attr_callback($matches)
{
static $entityMap = array(
34 =>'quot',
38 =>'amp',
60 =>'lt',
62 =>'gt',
);
$chr = $matches[0];
$ord = ord($chr);
if (($ord <= 0x1f && $chr !="\t"&& $chr !="\n"&& $chr !="\r") || ($ord >= 0x7f && $ord <= 0x9f)) {
return'&#xFFFD;';
}
if (strlen($chr) == 1) {
$hex = strtoupper(substr('00'.bin2hex($chr), -2));
} else {
$chr = twig_convert_encoding($chr,'UTF-16BE','UTF-8');
$hex = strtoupper(substr('0000'.bin2hex($chr), -4));
}
$int = hexdec($hex);
if (array_key_exists($int, $entityMap)) {
return sprintf('&%s;', $entityMap[$int]);
}
return sprintf('&#x%s;', $hex);
}
if (function_exists('mb_get_info')) {
function twig_length_filter(Twig_Environment $env, $thing)
{
return is_scalar($thing) ? mb_strlen($thing, $env->getCharset()) : count($thing);
}
function twig_upper_filter(Twig_Environment $env, $string)
{
if (null !== ($charset = $env->getCharset())) {
return mb_strtoupper($string, $charset);
}
return strtoupper($string);
}
function twig_lower_filter(Twig_Environment $env, $string)
{
if (null !== ($charset = $env->getCharset())) {
return mb_strtolower($string, $charset);
}
return strtolower($string);
}
function twig_title_string_filter(Twig_Environment $env, $string)
{
if (null !== ($charset = $env->getCharset())) {
return mb_convert_case($string, MB_CASE_TITLE, $charset);
}
return ucwords(strtolower($string));
}
function twig_capitalize_string_filter(Twig_Environment $env, $string)
{
if (null !== ($charset = $env->getCharset())) {
return mb_strtoupper(mb_substr($string, 0, 1, $charset), $charset).
mb_strtolower(mb_substr($string, 1, mb_strlen($string, $charset), $charset), $charset);
}
return ucfirst(strtolower($string));
}
}
else {
function twig_length_filter(Twig_Environment $env, $thing)
{
return is_scalar($thing) ? strlen($thing) : count($thing);
}
function twig_title_string_filter(Twig_Environment $env, $string)
{
return ucwords(strtolower($string));
}
function twig_capitalize_string_filter(Twig_Environment $env, $string)
{
return ucfirst(strtolower($string));
}
}
function twig_ensure_traversable($seq)
{
if ($seq instanceof Traversable || is_array($seq)) {
return $seq;
}
return array();
}
function twig_test_empty($value)
{
if ($value instanceof Countable) {
return 0 == count($value);
}
return''=== $value || false === $value || null === $value || array() === $value;
}
function twig_test_iterable($value)
{
return $value instanceof Traversable || is_array($value);
}
function twig_include(Twig_Environment $env, $context, $template, $variables = array(), $withContext = true, $ignoreMissing = false, $sandboxed = false)
{
$alreadySandboxed = false;
$sandbox = null;
if ($withContext) {
$variables = array_merge($context, $variables);
}
if ($isSandboxed = $sandboxed && $env->hasExtension('sandbox')) {
$sandbox = $env->getExtension('sandbox');
if (!$alreadySandboxed = $sandbox->isSandboxed()) {
$sandbox->enableSandbox();
}
}
try {
return $env->resolveTemplate($template)->render($variables);
} catch (Twig_Error_Loader $e) {
if (!$ignoreMissing) {
throw $e;
}
}
if ($isSandboxed && !$alreadySandboxed) {
$sandbox->disableSandbox();
}
}
function twig_source(Twig_Environment $env, $name)
{
return $env->getLoader()->getSource($name);
}
function twig_constant($constant, $object = null)
{
if (null !== $object) {
$constant = get_class($object).'::'.$constant;
}
return constant($constant);
}
function twig_array_batch($items, $size, $fill = null)
{
if ($items instanceof Traversable) {
$items = iterator_to_array($items, false);
}
$size = ceil($size);
$result = array_chunk($items, $size, true);
if (null !== $fill) {
$last = count($result) - 1;
if ($fillCount = $size - count($result[$last])) {
$result[$last] = array_merge(
$result[$last],
array_fill(0, $fillCount, $fill)
);
}
}
return $result;
} }

if ((!class_exists('Twig_Extension_Escaper', false)) && (!interface_exists('Twig_Extension_Escaper', false))) { 
class Twig_Extension_Escaper extends Twig_Extension
{
protected $defaultStrategy;
public function __construct($defaultStrategy ='html')
{
$this->setDefaultStrategy($defaultStrategy);
}
public function getTokenParsers()
{
return array(new Twig_TokenParser_AutoEscape());
}
public function getNodeVisitors()
{
return array(new Twig_NodeVisitor_Escaper());
}
public function getFilters()
{
return array(
new Twig_SimpleFilter('raw','twig_raw_filter', array('is_safe'=> array('all'))),
);
}
public function setDefaultStrategy($defaultStrategy)
{
if (true === $defaultStrategy) {
$defaultStrategy ='html';
}
if ('filename'=== $defaultStrategy) {
$defaultStrategy = array('Twig_FileExtensionEscapingStrategy','guess');
}
$this->defaultStrategy = $defaultStrategy;
}
public function getDefaultStrategy($filename)
{
if (!is_string($this->defaultStrategy) && is_callable($this->defaultStrategy)) {
return call_user_func($this->defaultStrategy, $filename);
}
return $this->defaultStrategy;
}
public function getName()
{
return'escaper';
}
}
function twig_raw_filter($string)
{
return $string;
} }

if ((!class_exists('Twig_Extension_Optimizer', false)) && (!interface_exists('Twig_Extension_Optimizer', false))) { 
class Twig_Extension_Optimizer extends Twig_Extension
{
protected $optimizers;
public function __construct($optimizers = -1)
{
$this->optimizers = $optimizers;
}
public function getNodeVisitors()
{
return array(new Twig_NodeVisitor_Optimizer($this->optimizers));
}
public function getName()
{
return'optimizer';
}
} }

if ((!class_exists('Twig_Extension_Staging', false)) && (!interface_exists('Twig_Extension_Staging', false))) { 
class Twig_Extension_Staging extends Twig_Extension
{
protected $functions = array();
protected $filters = array();
protected $visitors = array();
protected $tokenParsers = array();
protected $globals = array();
protected $tests = array();
public function addFunction($name, $function)
{
$this->functions[$name] = $function;
}
public function getFunctions()
{
return $this->functions;
}
public function addFilter($name, $filter)
{
$this->filters[$name] = $filter;
}
public function getFilters()
{
return $this->filters;
}
public function addNodeVisitor(Twig_NodeVisitorInterface $visitor)
{
$this->visitors[] = $visitor;
}
public function getNodeVisitors()
{
return $this->visitors;
}
public function addTokenParser(Twig_TokenParserInterface $parser)
{
$this->tokenParsers[] = $parser;
}
public function getTokenParsers()
{
return $this->tokenParsers;
}
public function addGlobal($name, $value)
{
$this->globals[$name] = $value;
}
public function getGlobals()
{
return $this->globals;
}
public function addTest($name, $test)
{
$this->tests[$name] = $test;
}
public function getTests()
{
return $this->tests;
}
public function getName()
{
return'staging';
}
} }

if ((!class_exists('Twig_Loader_Chain', false)) && (!interface_exists('Twig_Loader_Chain', false))) { 
class Twig_Loader_Chain implements Twig_LoaderInterface, Twig_ExistsLoaderInterface
{
private $hasSourceCache = array();
protected $loaders = array();
public function __construct(array $loaders = array())
{
foreach ($loaders as $loader) {
$this->addLoader($loader);
}
}
public function addLoader(Twig_LoaderInterface $loader)
{
$this->loaders[] = $loader;
$this->hasSourceCache = array();
}
public function getSource($name)
{
$exceptions = array();
foreach ($this->loaders as $loader) {
if ($loader instanceof Twig_ExistsLoaderInterface && !$loader->exists($name)) {
continue;
}
try {
return $loader->getSource($name);
} catch (Twig_Error_Loader $e) {
$exceptions[] = $e->getMessage();
}
}
throw new Twig_Error_Loader(sprintf('Template "%s" is not defined (%s).', $name, implode(', ', $exceptions)));
}
public function exists($name)
{
$name = (string) $name;
if (isset($this->hasSourceCache[$name])) {
return $this->hasSourceCache[$name];
}
foreach ($this->loaders as $loader) {
if ($loader instanceof Twig_ExistsLoaderInterface) {
if ($loader->exists($name)) {
return $this->hasSourceCache[$name] = true;
}
continue;
}
try {
$loader->getSource($name);
return $this->hasSourceCache[$name] = true;
} catch (Twig_Error_Loader $e) {
}
}
return $this->hasSourceCache[$name] = false;
}
public function getCacheKey($name)
{
$exceptions = array();
foreach ($this->loaders as $loader) {
if ($loader instanceof Twig_ExistsLoaderInterface && !$loader->exists($name)) {
continue;
}
try {
return $loader->getCacheKey($name);
} catch (Twig_Error_Loader $e) {
$exceptions[] = get_class($loader).': '.$e->getMessage();
}
}
throw new Twig_Error_Loader(sprintf('Template "%s" is not defined (%s).', $name, implode(' ', $exceptions)));
}
public function isFresh($name, $time)
{
$exceptions = array();
foreach ($this->loaders as $loader) {
if ($loader instanceof Twig_ExistsLoaderInterface && !$loader->exists($name)) {
continue;
}
try {
return $loader->isFresh($name, $time);
} catch (Twig_Error_Loader $e) {
$exceptions[] = get_class($loader).': '.$e->getMessage();
}
}
throw new Twig_Error_Loader(sprintf('Template "%s" is not defined (%s).', $name, implode(' ', $exceptions)));
}
} }

if ((!class_exists('Twig_SimpleFilter', false)) && (!interface_exists('Twig_SimpleFilter', false))) { 
class Twig_SimpleFilter
{
protected $name;
protected $callable;
protected $options;
protected $arguments = array();
public function __construct($name, $callable, array $options = array())
{
$this->name = $name;
$this->callable = $callable;
$this->options = array_merge(array('needs_environment'=> false,'needs_context'=> false,'is_safe'=> null,'is_safe_callback'=> null,'pre_escape'=> null,'preserves_safety'=> null,'node_class'=>'Twig_Node_Expression_Filter',
), $options);
}
public function getName()
{
return $this->name;
}
public function getCallable()
{
return $this->callable;
}
public function getNodeClass()
{
return $this->options['node_class'];
}
public function setArguments($arguments)
{
$this->arguments = $arguments;
}
public function getArguments()
{
return $this->arguments;
}
public function needsEnvironment()
{
return $this->options['needs_environment'];
}
public function needsContext()
{
return $this->options['needs_context'];
}
public function getSafe(Twig_Node $filterArgs)
{
if (null !== $this->options['is_safe']) {
return $this->options['is_safe'];
}
if (null !== $this->options['is_safe_callback']) {
return call_user_func($this->options['is_safe_callback'], $filterArgs);
}
}
public function getPreservesSafety()
{
return $this->options['preserves_safety'];
}
public function getPreEscape()
{
return $this->options['pre_escape'];
}
} }

if ((!class_exists('Twig_TemplateInterface', false)) && (!interface_exists('Twig_TemplateInterface', false))) { 
interface Twig_TemplateInterface
{
const ANY_CALL ='any';
const ARRAY_CALL ='array';
const METHOD_CALL ='method';
public function render(array $context);
public function display(array $context, array $blocks = array());
public function getEnvironment();
} }

if ((!class_exists('Twig_Template', false)) && (!interface_exists('Twig_Template', false))) { 
abstract class Twig_Template implements Twig_TemplateInterface
{
protected static $cache = array();
protected $parent;
protected $parents = array();
protected $env;
protected $blocks;
protected $traits;
public function __construct(Twig_Environment $env)
{
$this->env = $env;
$this->blocks = array();
$this->traits = array();
}
abstract public function getTemplateName();
public function getEnvironment()
{
return $this->env;
}
public function getParent(array $context)
{
if (null !== $this->parent) {
return $this->parent;
}
try {
$parent = $this->doGetParent($context);
if (false === $parent) {
return false;
}
if ($parent instanceof Twig_Template) {
return $this->parents[$parent->getTemplateName()] = $parent;
}
if (!isset($this->parents[$parent])) {
$this->parents[$parent] = $this->loadTemplate($parent);
}
} catch (Twig_Error_Loader $e) {
$e->setTemplateFile(null);
$e->guess();
throw $e;
}
return $this->parents[$parent];
}
protected function doGetParent(array $context)
{
return false;
}
public function isTraitable()
{
return true;
}
public function displayParentBlock($name, array $context, array $blocks = array())
{
$name = (string) $name;
if (isset($this->traits[$name])) {
$this->traits[$name][0]->displayBlock($name, $context, $blocks, false);
} elseif (false !== $parent = $this->getParent($context)) {
$parent->displayBlock($name, $context, $blocks, false);
} else {
throw new Twig_Error_Runtime(sprintf('The template has no parent and no traits defining the "%s" block', $name), -1, $this->getTemplateName());
}
}
public function displayBlock($name, array $context, array $blocks = array(), $useBlocks = true)
{
$name = (string) $name;
if ($useBlocks && isset($blocks[$name])) {
$template = $blocks[$name][0];
$block = $blocks[$name][1];
} elseif (isset($this->blocks[$name])) {
$template = $this->blocks[$name][0];
$block = $this->blocks[$name][1];
} else {
$template = null;
$block = null;
}
if (null !== $template) {
try {
$template->$block($context, $blocks);
} catch (Twig_Error $e) {
throw $e;
} catch (Exception $e) {
throw new Twig_Error_Runtime(sprintf('An exception has been thrown during the rendering of a template ("%s").', $e->getMessage()), -1, $template->getTemplateName(), $e);
}
} elseif (false !== $parent = $this->getParent($context)) {
$parent->displayBlock($name, $context, array_merge($this->blocks, $blocks), false);
}
}
public function renderParentBlock($name, array $context, array $blocks = array())
{
ob_start();
$this->displayParentBlock($name, $context, $blocks);
return ob_get_clean();
}
public function renderBlock($name, array $context, array $blocks = array(), $useBlocks = true)
{
ob_start();
$this->displayBlock($name, $context, $blocks, $useBlocks);
return ob_get_clean();
}
public function hasBlock($name)
{
return isset($this->blocks[(string) $name]);
}
public function getBlockNames()
{
return array_keys($this->blocks);
}
protected function loadTemplate($template, $templateName = null, $line = null, $index = null)
{
try {
if (is_array($template)) {
return $this->env->resolveTemplate($template);
}
if ($template instanceof Twig_Template) {
return $template;
}
return $this->env->loadTemplate($template, $index);
} catch (Twig_Error $e) {
$e->setTemplateFile($templateName ? $templateName : $this->getTemplateName());
if (!$line) {
$e->guess();
} else {
$e->setTemplateLine($line);
}
throw $e;
}
}
public function getBlocks()
{
return $this->blocks;
}
public function display(array $context, array $blocks = array())
{
$this->displayWithErrorHandling($this->env->mergeGlobals($context), array_merge($this->blocks, $blocks));
}
public function render(array $context)
{
$level = ob_get_level();
ob_start();
try {
$this->display($context);
} catch (Exception $e) {
while (ob_get_level() > $level) {
ob_end_clean();
}
throw $e;
}
return ob_get_clean();
}
protected function displayWithErrorHandling(array $context, array $blocks = array())
{
try {
$this->doDisplay($context, $blocks);
} catch (Twig_Error $e) {
if (!$e->getTemplateFile()) {
$e->setTemplateFile($this->getTemplateName());
}
if (false === $e->getTemplateLine()) {
$e->setTemplateLine(-1);
$e->guess();
}
throw $e;
} catch (Exception $e) {
throw new Twig_Error_Runtime(sprintf('An exception has been thrown during the rendering of a template ("%s").', $e->getMessage()), -1, $this->getTemplateName(), $e);
}
}
abstract protected function doDisplay(array $context, array $blocks = array());
final protected function getContext($context, $item, $ignoreStrictCheck = false)
{
if (!array_key_exists($item, $context)) {
if ($ignoreStrictCheck || !$this->env->isStrictVariables()) {
return;
}
throw new Twig_Error_Runtime(sprintf('Variable "%s" does not exist', $item), -1, $this->getTemplateName());
}
return $context[$item];
}
protected function getAttribute($object, $item, array $arguments = array(), $type = Twig_Template::ANY_CALL, $isDefinedTest = false, $ignoreStrictCheck = false)
{
if (Twig_Template::METHOD_CALL !== $type) {
$arrayItem = is_bool($item) || is_float($item) ? (int) $item : $item;
if ((is_array($object) && array_key_exists($arrayItem, $object))
|| ($object instanceof ArrayAccess && isset($object[$arrayItem]))
) {
if ($isDefinedTest) {
return true;
}
return $object[$arrayItem];
}
if (Twig_Template::ARRAY_CALL === $type || !is_object($object)) {
if ($isDefinedTest) {
return false;
}
if ($ignoreStrictCheck || !$this->env->isStrictVariables()) {
return;
}
if ($object instanceof ArrayAccess) {
$message = sprintf('Key "%s" in object with ArrayAccess of class "%s" does not exist', $arrayItem, get_class($object));
} elseif (is_object($object)) {
$message = sprintf('Impossible to access a key "%s" on an object of class "%s" that does not implement ArrayAccess interface', $item, get_class($object));
} elseif (is_array($object)) {
if (empty($object)) {
$message = sprintf('Key "%s" does not exist as the array is empty', $arrayItem);
} else {
$message = sprintf('Key "%s" for array with keys "%s" does not exist', $arrayItem, implode(', ', array_keys($object)));
}
} elseif (Twig_Template::ARRAY_CALL === $type) {
$message = sprintf('Impossible to access a key ("%s") on a %s variable ("%s")', $item, gettype($object), $object);
} else {
$message = sprintf('Impossible to access an attribute ("%s") on a %s variable ("%s")', $item, gettype($object), $object);
}
throw new Twig_Error_Runtime($message, -1, $this->getTemplateName());
}
}
if (!is_object($object)) {
if ($isDefinedTest) {
return false;
}
if ($ignoreStrictCheck || !$this->env->isStrictVariables()) {
return;
}
throw new Twig_Error_Runtime(sprintf('Impossible to invoke a method ("%s") on a %s variable ("%s")', $item, gettype($object), $object), -1, $this->getTemplateName());
}
if (Twig_Template::METHOD_CALL !== $type) {
if (isset($object->$item) || array_key_exists((string) $item, $object)) {
if ($isDefinedTest) {
return true;
}
if ($this->env->hasExtension('sandbox')) {
$this->env->getExtension('sandbox')->checkPropertyAllowed($object, $item);
}
return $object->$item;
}
}
$class = get_class($object);
if (!isset(self::$cache[$class]['methods'])) {
self::$cache[$class]['methods'] = array_change_key_case(array_flip(get_class_methods($object)));
}
$call = false;
$lcItem = strtolower($item);
if (isset(self::$cache[$class]['methods'][$lcItem])) {
$method = (string) $item;
} elseif (isset(self::$cache[$class]['methods']['get'.$lcItem])) {
$method ='get'.$item;
} elseif (isset(self::$cache[$class]['methods']['is'.$lcItem])) {
$method ='is'.$item;
} elseif (isset(self::$cache[$class]['methods']['__call'])) {
$method = (string) $item;
$call = true;
} else {
if ($isDefinedTest) {
return false;
}
if ($ignoreStrictCheck || !$this->env->isStrictVariables()) {
return;
}
throw new Twig_Error_Runtime(sprintf('Method "%s" for object "%s" does not exist', $item, get_class($object)), -1, $this->getTemplateName());
}
if ($isDefinedTest) {
return true;
}
if ($this->env->hasExtension('sandbox')) {
$this->env->getExtension('sandbox')->checkMethodAllowed($object, $method);
}
try {
$ret = call_user_func_array(array($object, $method), $arguments);
} catch (BadMethodCallException $e) {
if ($call && ($ignoreStrictCheck || !$this->env->isStrictVariables())) {
return;
}
throw $e;
}
if ($object instanceof Twig_TemplateInterface) {
return $ret ===''?'': new Twig_Markup($ret, $this->env->getCharset());
}
return $ret;
}
} }

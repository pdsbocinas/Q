<?php

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * appDevDebugProjectContainer.
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class appDevDebugProjectContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    /**
     * Constructor.
     */
    public function __construct()
    {
        $dir = __DIR__;
        for ($i = 1; $i <= 5; ++$i) {
            $this->targetDirs[$i] = $dir = dirname($dir);
        }
        $this->parameters = $this->getDefaultParameters();

        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();
        $this->scopes = array('request' => 'container');
        $this->scopeChildren = array('request' => array());
        $this->methodMap = array(
            'alterphp_doctrine_extensions.event_listener.ip_trace' => 'getAlterphpDoctrineExtensions_EventListener_IpTraceService',
            'annotation_reader' => 'getAnnotationReaderService',
            'assets._version__default' => 'getAssets_VersionDefaultService',
            'assets.context' => 'getAssets_ContextService',
            'assets.packages' => 'getAssets_PackagesService',
            'beelab_recaptcha2.google_recaptcha' => 'getBeelabRecaptcha2_GoogleRecaptchaService',
            'beelab_recaptcha2.type' => 'getBeelabRecaptcha2_TypeService',
            'beelab_recaptcha2.validator' => 'getBeelabRecaptcha2_ValidatorService',
            'beelab_recaptcha2.verifier' => 'getBeelabRecaptcha2_VerifierService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'ci.curl' => 'getCi_CurlService',
            'ci.curl.options.handler' => 'getCi_Curl_Options_HandlerService',
            'ci.restclient' => 'getCi_RestclientService',
            'clarin.webservice.client' => 'getClarin_Webservice_ClientService',
            'config_cache_factory' => 'getConfigCacheFactoryService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'data_collector.dump' => 'getDataCollector_DumpService',
            'data_collector.form' => 'getDataCollector_FormService',
            'data_collector.form.extractor' => 'getDataCollector_Form_ExtractorService',
            'data_collector.request' => 'getDataCollector_RequestService',
            'data_collector.router' => 'getDataCollector_RouterService',
            'data_collector.translation' => 'getDataCollector_TranslationService',
            'debug.controller_resolver' => 'getDebug_ControllerResolverService',
            'debug.debug_handlers_listener' => 'getDebug_DebugHandlersListenerService',
            'debug.dump_listener' => 'getDebug_DumpListenerService',
            'debug.event_dispatcher' => 'getDebug_EventDispatcherService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.dbal.logger.profiling.default' => 'getDoctrine_Dbal_Logger_Profiling_DefaultService',
            'doctrine.orm.default_entity_listener_resolver' => 'getDoctrine_Orm_DefaultEntityListenerResolverService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'doctrine.orm.default_entity_manager.property_info_extractor' => 'getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService',
            'doctrine.orm.default_listeners.attach_entity_listeners' => 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService',
            'doctrine.orm.default_manager_configurator' => 'getDoctrine_Orm_DefaultManagerConfiguratorService',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'doctrine_cache.providers.doctrine.orm.default_metadata_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService',
            'doctrine_cache.providers.doctrine.orm.default_query_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService',
            'doctrine_cache.providers.doctrine.orm.default_result_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService',
            'file_locator' => 'getFileLocatorService',
            'filesystem' => 'getFilesystemService',
            'form.csrf_provider' => 'getForm_CsrfProviderService',
            'form.factory' => 'getForm_FactoryService',
            'form.registry' => 'getForm_RegistryService',
            'form.resolved_type_factory' => 'getForm_ResolvedTypeFactoryService',
            'form.server_params' => 'getForm_ServerParamsService',
            'form.type.birthday' => 'getForm_Type_BirthdayService',
            'form.type.button' => 'getForm_Type_ButtonService',
            'form.type.checkbox' => 'getForm_Type_CheckboxService',
            'form.type.choice' => 'getForm_Type_ChoiceService',
            'form.type.collection' => 'getForm_Type_CollectionService',
            'form.type.country' => 'getForm_Type_CountryService',
            'form.type.currency' => 'getForm_Type_CurrencyService',
            'form.type.date' => 'getForm_Type_DateService',
            'form.type.datetime' => 'getForm_Type_DatetimeService',
            'form.type.email' => 'getForm_Type_EmailService',
            'form.type.entity' => 'getForm_Type_EntityService',
            'form.type.file' => 'getForm_Type_FileService',
            'form.type.form' => 'getForm_Type_FormService',
            'form.type.hidden' => 'getForm_Type_HiddenService',
            'form.type.integer' => 'getForm_Type_IntegerService',
            'form.type.language' => 'getForm_Type_LanguageService',
            'form.type.locale' => 'getForm_Type_LocaleService',
            'form.type.money' => 'getForm_Type_MoneyService',
            'form.type.number' => 'getForm_Type_NumberService',
            'form.type.password' => 'getForm_Type_PasswordService',
            'form.type.percent' => 'getForm_Type_PercentService',
            'form.type.radio' => 'getForm_Type_RadioService',
            'form.type.range' => 'getForm_Type_RangeService',
            'form.type.repeated' => 'getForm_Type_RepeatedService',
            'form.type.reset' => 'getForm_Type_ResetService',
            'form.type.search' => 'getForm_Type_SearchService',
            'form.type.submit' => 'getForm_Type_SubmitService',
            'form.type.text' => 'getForm_Type_TextService',
            'form.type.textarea' => 'getForm_Type_TextareaService',
            'form.type.time' => 'getForm_Type_TimeService',
            'form.type.timezone' => 'getForm_Type_TimezoneService',
            'form.type.url' => 'getForm_Type_UrlService',
            'form.type_extension.csrf' => 'getForm_TypeExtension_CsrfService',
            'form.type_extension.form.data_collector' => 'getForm_TypeExtension_Form_DataCollectorService',
            'form.type_extension.form.http_foundation' => 'getForm_TypeExtension_Form_HttpFoundationService',
            'form.type_extension.form.validator' => 'getForm_TypeExtension_Form_ValidatorService',
            'form.type_extension.repeated.validator' => 'getForm_TypeExtension_Repeated_ValidatorService',
            'form.type_extension.submit.validator' => 'getForm_TypeExtension_Submit_ValidatorService',
            'form.type_extension.upload.validator' => 'getForm_TypeExtension_Upload_ValidatorService',
            'form.type_guesser.doctrine' => 'getForm_TypeGuesser_DoctrineService',
            'form.type_guesser.validator' => 'getForm_TypeGuesser_ValidatorService',
            'fos_js_routing.controller' => 'getFosJsRouting_ControllerService',
            'fos_js_routing.extractor' => 'getFosJsRouting_ExtractorService',
            'fos_js_routing.serializer' => 'getFosJsRouting_SerializerService',
            'fragment.handler' => 'getFragment_HandlerService',
            'fragment.listener' => 'getFragment_ListenerService',
            'fragment.renderer.esi' => 'getFragment_Renderer_EsiService',
            'fragment.renderer.hinclude' => 'getFragment_Renderer_HincludeService',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService',
            'fragment.renderer.ssi' => 'getFragment_Renderer_SsiService',
            'gedmo_doctrine_extensions.listener.ip_traceable' => 'getGedmoDoctrineExtensions_Listener_IpTraceableService',
            'history_routes' => 'getHistoryRoutesService',
            'http_kernel' => 'getHttpKernelService',
            'kernel' => 'getKernelService',
            'kernel.class_cache.cache_warmer' => 'getKernel_ClassCache_CacheWarmerService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'memcache.data_collector' => 'getMemcache_DataCollectorService',
            'memcache.default' => 'getMemcache_DefaultService',
            'memcache.potential' => 'getMemcache_PotentialService',
            'memcache.session' => 'getMemcache_SessionService',
            'memcache.session_handler' => 'getMemcache_SessionHandlerService',
            'mobile_detect.device_view' => 'getMobileDetect_DeviceViewService',
            'mobile_detect.mobile_detector.default' => 'getMobileDetect_MobileDetector_DefaultService',
            'mobile_detect.request_listener' => 'getMobileDetect_RequestListenerService',
            'mobile_detect.twig.extension' => 'getMobileDetect_Twig_ExtensionService',
            'mobile_detect_bundle.device.collector' => 'getMobileDetectBundle_Device_CollectorService',
            'monolog.handler.activity_handler' => 'getMonolog_Handler_ActivityHandlerService',
            'monolog.handler.api_handler' => 'getMonolog_Handler_ApiHandlerService',
            'monolog.handler.content_play_handler' => 'getMonolog_Handler_ContentPlayHandlerService',
            'monolog.handler.debug' => 'getMonolog_Handler_DebugService',
            'monolog.handler.grouped' => 'getMonolog_Handler_GroupedService',
            'monolog.handler.infotainment_handler' => 'getMonolog_Handler_InfotainmentHandlerService',
            'monolog.handler.loggly' => 'getMonolog_Handler_LogglyService',
            'monolog.handler.login_handler' => 'getMonolog_Handler_LoginHandlerService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.handler.null_internal' => 'getMonolog_Handler_NullInternalService',
            'monolog.handler.streamed' => 'getMonolog_Handler_StreamedService',
            'monolog.logger.activity' => 'getMonolog_Logger_ActivityService',
            'monolog.logger.api' => 'getMonolog_Logger_ApiService',
            'monolog.logger.content_play' => 'getMonolog_Logger_ContentPlayService',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService',
            'monolog.logger.event' => 'getMonolog_Logger_EventService',
            'monolog.logger.infotainment' => 'getMonolog_Logger_InfotainmentService',
            'monolog.logger.login' => 'getMonolog_Logger_LoginService',
            'monolog.logger.php' => 'getMonolog_Logger_PhpService',
            'monolog.logger.profiler' => 'getMonolog_Logger_ProfilerService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.router' => 'getMonolog_Logger_RouterService',
            'monolog.logger.security' => 'getMonolog_Logger_SecurityService',
            'monolog.logger.templating' => 'getMonolog_Logger_TemplatingService',
            'monolog.logger.translation' => 'getMonolog_Logger_TranslationService',
            'monolog.processor.psr_log_message' => 'getMonolog_Processor_PsrLogMessageService',
            'movistar.provision.client' => 'getMovistar_Provision_ClientService',
            'profiler' => 'getProfilerService',
            'profiler_listener' => 'getProfilerListenerService',
            'property_accessor' => 'getPropertyAccessorService',
            'request' => 'getRequestService',
            'request_stack' => 'getRequestStackService',
            'response_listener' => 'getResponseListenerService',
            'router' => 'getRouterService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'routing.loader' => 'getRouting_LoaderService',
            'security.access.decision_manager' => 'getSecurity_Access_DecisionManagerService',
            'security.access_map' => 'getSecurity_AccessMapService',
            'security.authentication.guard_handler' => 'getSecurity_Authentication_GuardHandlerService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.context' => 'getSecurity_ContextService',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map.context.dev' => 'getSecurity_Firewall_Map_Context_DevService',
            'security.firewall.map.context.main' => 'getSecurity_Firewall_Map_Context_MainService',
            'security.http_utils' => 'getSecurity_HttpUtilsService',
            'security.logout_url_generator' => 'getSecurity_LogoutUrlGeneratorService',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.role_hierarchy' => 'getSecurity_RoleHierarchyService',
            'security.secure_random' => 'getSecurity_SecureRandomService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'security.user_checker.main' => 'getSecurity_UserChecker_MainService',
            'security.validator.user_password' => 'getSecurity_Validator_UserPasswordService',
            'sensio_distribution.security_checker' => 'getSensioDistribution_SecurityCheckerService',
            'sensio_distribution.security_checker.command' => 'getSensioDistribution_SecurityChecker_CommandService',
            'sensio_framework_extra.cache.listener' => 'getSensioFrameworkExtra_Cache_ListenerService',
            'sensio_framework_extra.controller.listener' => 'getSensioFrameworkExtra_Controller_ListenerService',
            'sensio_framework_extra.converter.datetime' => 'getSensioFrameworkExtra_Converter_DatetimeService',
            'sensio_framework_extra.converter.doctrine.orm' => 'getSensioFrameworkExtra_Converter_Doctrine_OrmService',
            'sensio_framework_extra.converter.listener' => 'getSensioFrameworkExtra_Converter_ListenerService',
            'sensio_framework_extra.converter.manager' => 'getSensioFrameworkExtra_Converter_ManagerService',
            'sensio_framework_extra.security.listener' => 'getSensioFrameworkExtra_Security_ListenerService',
            'sensio_framework_extra.view.guesser' => 'getSensioFrameworkExtra_View_GuesserService',
            'sensio_framework_extra.view.listener' => 'getSensioFrameworkExtra_View_ListenerService',
            'service_container' => 'getServiceContainerService',
            'session' => 'getSessionService',
            'session.save_listener' => 'getSession_SaveListenerService',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService',
            'session.storage.metadata_bag' => 'getSession_Storage_MetadataBagService',
            'session.storage.native' => 'getSession_Storage_NativeService',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService',
            'session_listener' => 'getSessionListenerService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'templating' => 'getTemplatingService',
            'templating.filename_parser' => 'getTemplating_FilenameParserService',
            'templating.helper.assets' => 'getTemplating_Helper_AssetsService',
            'templating.helper.logout_url' => 'getTemplating_Helper_LogoutUrlService',
            'templating.helper.router' => 'getTemplating_Helper_RouterService',
            'templating.helper.security' => 'getTemplating_Helper_SecurityService',
            'templating.loader' => 'getTemplating_LoaderService',
            'templating.locator' => 'getTemplating_LocatorService',
            'templating.name_parser' => 'getTemplating_NameParserService',
            'translation.dumper.csv' => 'getTranslation_Dumper_CsvService',
            'translation.dumper.ini' => 'getTranslation_Dumper_IniService',
            'translation.dumper.json' => 'getTranslation_Dumper_JsonService',
            'translation.dumper.mo' => 'getTranslation_Dumper_MoService',
            'translation.dumper.php' => 'getTranslation_Dumper_PhpService',
            'translation.dumper.po' => 'getTranslation_Dumper_PoService',
            'translation.dumper.qt' => 'getTranslation_Dumper_QtService',
            'translation.dumper.res' => 'getTranslation_Dumper_ResService',
            'translation.dumper.xliff' => 'getTranslation_Dumper_XliffService',
            'translation.dumper.yml' => 'getTranslation_Dumper_YmlService',
            'translation.extractor' => 'getTranslation_ExtractorService',
            'translation.extractor.php' => 'getTranslation_Extractor_PhpService',
            'translation.loader' => 'getTranslation_LoaderService',
            'translation.loader.csv' => 'getTranslation_Loader_CsvService',
            'translation.loader.dat' => 'getTranslation_Loader_DatService',
            'translation.loader.ini' => 'getTranslation_Loader_IniService',
            'translation.loader.json' => 'getTranslation_Loader_JsonService',
            'translation.loader.mo' => 'getTranslation_Loader_MoService',
            'translation.loader.php' => 'getTranslation_Loader_PhpService',
            'translation.loader.po' => 'getTranslation_Loader_PoService',
            'translation.loader.qt' => 'getTranslation_Loader_QtService',
            'translation.loader.res' => 'getTranslation_Loader_ResService',
            'translation.loader.xliff' => 'getTranslation_Loader_XliffService',
            'translation.loader.yml' => 'getTranslation_Loader_YmlService',
            'translation.writer' => 'getTranslation_WriterService',
            'translator' => 'getTranslatorService',
            'translator.default' => 'getTranslator_DefaultService',
            'translator_listener' => 'getTranslatorListenerService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.profile' => 'getTwig_ProfileService',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService',
            'uri_signer' => 'getUriSignerService',
            'validate_request_listener' => 'getValidateRequestListenerService',
            'validator' => 'getValidatorService',
            'validator.builder' => 'getValidator_BuilderService',
            'validator.email' => 'getValidator_EmailService',
            'validator.expression' => 'getValidator_ExpressionService',
            'var_dumper.cli_dumper' => 'getVarDumper_CliDumperService',
            'var_dumper.cloner' => 'getVarDumper_ClonerService',
            'vod_base.ajax_client' => 'getVodBase_AjaxClientService',
            'vod_base.application.router.last_route_event_listener' => 'getVodBase_Application_Router_LastRouteEventListenerService',
            'vod_base.application.router.route_event_listener' => 'getVodBase_Application_Router_RouteEventListenerService',
            'vod_base.application.router.switch_login_register_listener' => 'getVodBase_Application_Router_SwitchLoginRegisterListenerService',
            'vod_base.application.user.active_profile_listener' => 'getVodBase_Application_User_ActiveProfileListenerService',
            'vod_base.can_play' => 'getVodBase_CanPlayService',
            'vod_base.commercial_client' => 'getVodBase_CommercialClientService',
            'vod_base.content_client' => 'getVodBase_ContentClientService',
            'vod_base.content_service' => 'getVodBase_ContentServiceService',
            'vod_base.coupon.listener' => 'getVodBase_Coupon_ListenerService',
            'vod_base.directors_client' => 'getVodBase_DirectorsClientService',
            'vod_base.event_subscriber.active_profile' => 'getVodBase_EventSubscriber_ActiveProfileService',
            'vod_base.form.payment' => 'getVodBase_Form_PaymentService',
            'vod_base.form.payment_global_collect' => 'getVodBase_Form_PaymentGlobalCollectService',
            'vod_base.form.payment_movistar' => 'getVodBase_Form_PaymentMovistarService',
            'vod_base.form.payment_stripe' => 'getVodBase_Form_PaymentStripeService',
            'vod_base.form.type.add_coupon' => 'getVodBase_Form_Type_AddCouponService',
            'vod_base.form.type.change_name' => 'getVodBase_Form_Type_ChangeNameService',
            'vod_base.form.type.change_password' => 'getVodBase_Form_Type_ChangePasswordService',
            'vod_base.form.type.change_product' => 'getVodBase_Form_Type_ChangeProductService',
            'vod_base.form.type.contact' => 'getVodBase_Form_Type_ContactService',
            'vod_base.form.type.edit_profile' => 'getVodBase_Form_Type_EditProfileService',
            'vod_base.form.type.generate_new_password' => 'getVodBase_Form_Type_GenerateNewPasswordService',
            'vod_base.form.type.parental_control' => 'getVodBase_Form_Type_ParentalControlService',
            'vod_base.form.type.pin' => 'getVodBase_Form_Type_PinService',
            'vod_base.form.type.promotion' => 'getVodBase_Form_Type_PromotionService',
            'vod_base.form.type.registration' => 'getVodBase_Form_Type_RegistrationService',
            'vod_base.form.type.subscription.movistar' => 'getVodBase_Form_Type_Subscription_MovistarService',
            'vod_base.form.type.username' => 'getVodBase_Form_Type_UsernameService',
            'vod_base.geoip_listener' => 'getVodBase_GeoipListenerService',
            'vod_base.log.tracking_code' => 'getVodBase_Log_TrackingCodeService',
            'vod_base.mobile_detect.mobile_detector' => 'getVodBase_MobileDetect_MobileDetectorService',
            'vod_base.monolog.database_handler' => 'getVodBase_Monolog_DatabaseHandlerService',
            'vod_base.monolog.infotainment_handler' => 'getVodBase_Monolog_InfotainmentHandlerService',
            'vod_base.payment' => 'getVodBase_PaymentService',
            'vod_base.payment.gateway.global_collect' => 'getVodBase_Payment_Gateway_GlobalCollectService',
            'vod_base.payment.gateway.movistar' => 'getVodBase_Payment_Gateway_MovistarService',
            'vod_base.payment.gateway.stripe' => 'getVodBase_Payment_Gateway_StripeService',
            'vod_base.payment.listener' => 'getVodBase_Payment_ListenerService',
            'vod_base.payment_client' => 'getVodBase_PaymentClientService',
            'vod_base.promotion_handler' => 'getVodBase_PromotionHandlerService',
            'vod_base.recommender_play.listener' => 'getVodBase_RecommenderPlay_ListenerService',
            'vod_base.recommender_visit.listener' => 'getVodBase_RecommenderVisit_ListenerService',
            'vod_base.satisfaction' => 'getVodBase_SatisfactionService',
            'vod_base.satisfaction_listener' => 'getVodBase_SatisfactionListenerService',
            'vod_base.search_client' => 'getVodBase_SearchClientService',
            'vod_base.security.authenticatewithmsisdn' => 'getVodBase_Security_AuthenticatewithmsisdnService',
            'vod_base.security.authenticator.api' => 'getVodBase_Security_Authenticator_ApiService',
            'vod_base.security.authenticator.failure_handler' => 'getVodBase_Security_Authenticator_FailureHandlerService',
            'vod_base.security.authenticator.success_handler' => 'getVodBase_Security_Authenticator_SuccessHandlerService',
            'vod_base.security.authenticator.success_logout_listener' => 'getVodBase_Security_Authenticator_SuccessLogoutListenerService',
            'vod_base.security.authenticator.vod' => 'getVodBase_Security_Authenticator_VodService',
            'vod_base.security.user.provider.vod' => 'getVodBase_Security_User_Provider_VodService',
            'vod_base.subscriber.tracking_code_subscriber' => 'getVodBase_Subscriber_TrackingCodeSubscriberService',
            'vod_base.twig_extension.text' => 'getVodBase_TwigExtension_TextService',
            'vod_base.user.listener' => 'getVodBase_User_ListenerService',
            'vod_base.user_client' => 'getVodBase_UserClientService',
            'vod_base.utilities.browser_detector' => 'getVodBase_Utilities_BrowserDetectorService',
            'vod_base.utilities.cache' => 'getVodBase_Utilities_CacheService',
            'vod_base.utilities.catfish_banner' => 'getVodBase_Utilities_CatfishBannerService',
            'vod_base.utilities.mobile' => 'getVodBase_Utilities_MobileService',
            'vod_base.utilities.user' => 'getVodBase_Utilities_UserService',
            'vod_base.utilities.utils' => 'getVodBase_Utilities_UtilsService',
            'vod_base.utils_client' => 'getVodBase_UtilsClientService',
            'vod_base.validator.change_username_validator' => 'getVodBase_Validator_ChangeUsernameValidatorService',
            'vod_base.validator.coupon_validator' => 'getVodBase_Validator_CouponValidatorService',
            'vod_base.validator.parental_password_validator' => 'getVodBase_Validator_ParentalPasswordValidatorService',
            'vod_base.validator.password_validator' => 'getVodBase_Validator_PasswordValidatorService',
            'vod_base.validator.profile_name_validator' => 'getVodBase_Validator_ProfileNameValidatorService',
            'vod_base.validator.username_validator' => 'getVodBase_Validator_UsernameValidatorService',
            'vod_itv_base.security.authenticator.success_logout_listener' => 'getVodItvBase_Security_Authenticator_SuccessLogoutListenerService',
            'web_profiler.controller.exception' => 'getWebProfiler_Controller_ExceptionService',
            'web_profiler.controller.profiler' => 'getWebProfiler_Controller_ProfilerService',
            'web_profiler.controller.router' => 'getWebProfiler_Controller_RouterService',
            'web_profiler.debug_toolbar' => 'getWebProfiler_DebugToolbarService',
        );
        $this->aliases = array(
            'console.command.sensiolabs_security_command_securitycheckercommand' => 'sensio_distribution.security_checker.command',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.default_metadata_cache' => 'doctrine_cache.providers.doctrine.orm.default_metadata_cache',
            'doctrine.orm.default_query_cache' => 'doctrine_cache.providers.doctrine.orm.default_query_cache',
            'doctrine.orm.default_result_cache' => 'doctrine_cache.providers.doctrine.orm.default_result_cache',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'event_dispatcher' => 'debug.event_dispatcher',
            'mobile_detect.mobile_detector' => 'mobile_detect.mobile_detector.default',
            'monolog.handler.activity_database_handler' => 'vod_base.monolog.database_handler',
            'monolog.handler.infotainment_database_handler' => 'vod_base.monolog.database_handler',
            'session.handler' => 'memcache.session_handler',
            'session.storage' => 'session.storage.native',
        );
    }

    /**
     * {@inheritdoc}
     */
    public function compile()
    {
        throw new LogicException('You cannot compile a dumped frozen container.');
    }

    /**
     * {@inheritdoc}
     */
    public function isFrozen()
    {
        return true;
    }

    /**
     * Gets the 'alterphp_doctrine_extensions.event_listener.ip_trace' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\EventListener\IpTraceListener A VOD\BaseBundle\EventListener\IpTraceListener instance
     *
     * @throws InactiveScopeException when the 'alterphp_doctrine_extensions.event_listener.ip_trace' service is requested while the 'request' scope is not active
     */
    protected function getAlterphpDoctrineExtensions_EventListener_IpTraceService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('alterphp_doctrine_extensions.event_listener.ip_trace', 'request');
        }

        return $this->services['alterphp_doctrine_extensions.event_listener.ip_trace'] = $this->scopedServices['request']['alterphp_doctrine_extensions.event_listener.ip_trace'] = new \VOD\BaseBundle\EventListener\IpTraceListener($this->get('gedmo_doctrine_extensions.listener.ip_traceable'), $this->get('vod_base.utilities.utils'), $this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'annotation_reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader A Doctrine\Common\Annotations\CachedReader instance
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\CachedReader(new \Doctrine\Common\Annotations\AnnotationReader(), new \Doctrine\Common\Cache\FilesystemCache((__DIR__.'/annotations')), true);
    }

    /**
     * Gets the 'assets._version__default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Asset\VersionStrategy\StaticVersionStrategy A Symfony\Component\Asset\VersionStrategy\StaticVersionStrategy instance
     */
    protected function getAssets_VersionDefaultService()
    {
        return $this->services['assets._version__default'] = new \Symfony\Component\Asset\VersionStrategy\StaticVersionStrategy('1.17.7', '%s?%s');
    }

    /**
     * Gets the 'assets.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Asset\Context\RequestStackContext A Symfony\Component\Asset\Context\RequestStackContext instance
     */
    protected function getAssets_ContextService()
    {
        return $this->services['assets.context'] = new \Symfony\Component\Asset\Context\RequestStackContext($this->get('request_stack'));
    }

    /**
     * Gets the 'assets.packages' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Asset\Packages A Symfony\Component\Asset\Packages instance
     */
    protected function getAssets_PackagesService()
    {
        return $this->services['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', $this->get('assets._version__default'), $this->get('assets.context')), array());
    }

    /**
     * Gets the 'beelab_recaptcha2.google_recaptcha' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \ReCaptcha\ReCaptcha A ReCaptcha\ReCaptcha instance
     */
    protected function getBeelabRecaptcha2_GoogleRecaptchaService()
    {
        return $this->services['beelab_recaptcha2.google_recaptcha'] = new \ReCaptcha\ReCaptcha('6LeRcBITAAAAALz1I3BuVftDZufgnkFifQV7K0Gz');
    }

    /**
     * Gets the 'beelab_recaptcha2.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Beelab\Recaptcha2Bundle\Form\Type\RecaptchaType A Beelab\Recaptcha2Bundle\Form\Type\RecaptchaType instance
     */
    protected function getBeelabRecaptcha2_TypeService()
    {
        return $this->services['beelab_recaptcha2.type'] = new \Beelab\Recaptcha2Bundle\Form\Type\RecaptchaType('6LeRcBITAAAAAKLk2Gkzq-AmCV_xuvriffck1f3m');
    }

    /**
     * Gets the 'beelab_recaptcha2.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Beelab\Recaptcha2Bundle\Validator\Constraints\Recaptcha2Validator A Beelab\Recaptcha2Bundle\Validator\Constraints\Recaptcha2Validator instance
     */
    protected function getBeelabRecaptcha2_ValidatorService()
    {
        return $this->services['beelab_recaptcha2.validator'] = new \Beelab\Recaptcha2Bundle\Validator\Constraints\Recaptcha2Validator($this->get('beelab_recaptcha2.verifier'));
    }

    /**
     * Gets the 'beelab_recaptcha2.verifier' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Beelab\Recaptcha2Bundle\Recaptcha\RecaptchaVerifier A Beelab\Recaptcha2Bundle\Recaptcha\RecaptchaVerifier instance
     */
    protected function getBeelabRecaptcha2_VerifierService()
    {
        return $this->services['beelab_recaptcha2.verifier'] = new \Beelab\Recaptcha2Bundle\Recaptcha\RecaptchaVerifier($this->get('beelab_recaptcha2.google_recaptcha'), $this->get('request_stack'), true);
    }

    /**
     * Gets the 'cache_clearer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer A Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer instance
     */
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(array());
    }

    /**
     * Gets the 'cache_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate A Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate instance
     */
    protected function getCacheWarmerService()
    {
        $a = $this->get('kernel');
        $b = $this->get('templating.filename_parser');

        $c = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($a, $b, ($this->targetDirs[2].'/Resources'));

        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer($c, $this->get('templating.locator')), 1 => $this->get('kernel.class_cache.cache_warmer'), 2 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer($this->get('translator.default')), 3 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer($this->get('router')), 4 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer($this, $c, array()), 5 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer($this->get('twig'), new \Symfony\Bundle\TwigBundle\TemplateIterator($a, $this->targetDirs[2], array())), 6 => new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer($this->get('doctrine'))));
    }

    /**
     * Gets the 'ci.curl' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ci\RestClientBundle\Services\Curl A Ci\RestClientBundle\Services\Curl instance
     */
    protected function getCi_CurlService()
    {
        return $this->services['ci.curl'] = new \Ci\RestClientBundle\Services\Curl($this->get('ci.curl.options.handler'));
    }

    /**
     * Gets the 'ci.curl.options.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ci\RestClientBundle\Services\CurlOptionsHandler A Ci\RestClientBundle\Services\CurlOptionsHandler instance
     */
    protected function getCi_Curl_Options_HandlerService()
    {
        return $this->services['ci.curl.options.handler'] = new \Ci\RestClientBundle\Services\CurlOptionsHandler(array(10023 => array(0 => 'Content-Type: text/plain'), 68 => 25, 13 => 25, 78 => 25, 27 => true, 32 => 3, 52 => true, 64 => true));
    }

    /**
     * Gets the 'ci.restclient' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Ci\RestClientBundle\Services\RestClient A Ci\RestClientBundle\Services\RestClient instance
     */
    protected function getCi_RestclientService()
    {
        return $this->services['ci.restclient'] = new \Ci\RestClientBundle\Services\RestClient($this->get('ci.curl'));
    }

    /**
     * Gets the 'clarin.webservice.client' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\QubitArgentinaBundle\Services\Clarin\ClarinClient A VOD\QubitArgentinaBundle\Services\Clarin\ClarinClient instance
     */
    protected function getClarin_Webservice_ClientService()
    {
        return $this->services['clarin.webservice.client'] = new \VOD\QubitArgentinaBundle\Services\Clarin\ClarinClient('http://webcallws.agea.com.ar/service/gestionarTrackeosService/validarCredencial/');
    }

    /**
     * Gets the 'config_cache_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory A Symfony\Component\Config\ResourceCheckerConfigCacheFactory instance
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->services['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(array(0 => new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker(), 1 => new \Symfony\Component\Config\Resource\BCResourceInterfaceChecker()));
    }

    /**
     * Gets the 'data_collector.dump' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector A Symfony\Component\HttpKernel\DataCollector\DumpDataCollector instance
     */
    protected function getDataCollector_DumpService()
    {
        return $this->services['data_collector.dump'] = new \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector($this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE), NULL, 'UTF-8', $this->get('request_stack'), NULL);
    }

    /**
     * Gets the 'data_collector.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataCollector A Symfony\Component\Form\Extension\DataCollector\FormDataCollector instance
     */
    protected function getDataCollector_FormService()
    {
        return $this->services['data_collector.form'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataCollector($this->get('data_collector.form.extractor'));
    }

    /**
     * Gets the 'data_collector.form.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor A Symfony\Component\Form\Extension\DataCollector\FormDataExtractor instance
     */
    protected function getDataCollector_Form_ExtractorService()
    {
        return $this->services['data_collector.form.extractor'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor();
    }

    /**
     * Gets the 'data_collector.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector A Symfony\Component\HttpKernel\DataCollector\RequestDataCollector instance
     */
    protected function getDataCollector_RequestService()
    {
        return $this->services['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector();
    }

    /**
     * Gets the 'data_collector.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector A Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector instance
     */
    protected function getDataCollector_RouterService()
    {
        return $this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector();
    }

    /**
     * Gets the 'data_collector.translation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\DataCollector\TranslationDataCollector A Symfony\Component\Translation\DataCollector\TranslationDataCollector instance
     */
    protected function getDataCollector_TranslationService()
    {
        return $this->services['data_collector.translation'] = new \Symfony\Component\Translation\DataCollector\TranslationDataCollector($this->get('translator'));
    }

    /**
     * Gets the 'debug.controller_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver A Symfony\Component\HttpKernel\Controller\TraceableControllerResolver instance
     */
    protected function getDebug_ControllerResolverService()
    {
        return $this->services['debug.controller_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, $this->get('controller_name_converter'), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)), $this->get('debug.stopwatch'));
    }

    /**
     * Gets the 'debug.debug_handlers_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener A Symfony\Component\HttpKernel\EventListener\DebugHandlersListener instance
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->services['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, $this->get('monolog.logger.php', ContainerInterface::NULL_ON_INVALID_REFERENCE), -4182, NULL, true, NULL);
    }

    /**
     * Gets the 'debug.dump_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DumpListener A Symfony\Component\HttpKernel\EventListener\DumpListener instance
     */
    protected function getDebug_DumpListenerService()
    {
        return $this->services['debug.dump_listener'] = new \Symfony\Component\HttpKernel\EventListener\DumpListener($this->get('var_dumper.cloner'), $this->get('var_dumper.cli_dumper'));
    }

    /**
     * Gets the 'debug.event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher A Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher instance
     */
    protected function getDebug_EventDispatcherService()
    {
        $this->services['debug.event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this), $this->get('debug.stopwatch'), $this->get('monolog.logger.event', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->addListenerService('kernel.controller', array(0 => 'data_collector.router', 1 => 'onKernelController'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'mobile_detect.request_listener', 1 => 'handleRequest'), 1);
        $instance->addListenerService('kernel.response', array(0 => 'mobile_detect.request_listener', 1 => 'handleResponse'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'vod_base.application.router.last_route_event_listener', 1 => 'onKernelRequest'), 30);
        $instance->addListenerService('kernel.response', array(0 => 'vod_base.application.user.active_profile_listener', 1 => 'onKernelResponse'), 30);
        $instance->addListenerService('kernel.response', array(0 => 'vod_base.satisfaction_listener', 1 => 'onKernelRequest'), 30);
        $instance->addListenerService('kernel.response', array(0 => 'vod_base.geoip_listener', 1 => 'onKernelRequest'), 30);
        $instance->addListenerService('kernel.response', array(0 => 'vod_base.can_play', 1 => 'onKernelRequest'), 30);
        $instance->addListenerService('kernel.request', array(0 => 'vod_base.application.router.route_event_listener', 1 => 'onKernelRequest'), 30);
        $instance->addListenerService('kernel.request', array(0 => 'vod_base.application.router.switch_login_register_listener', 1 => 'onKernelRequest'), 30);
        $instance->addListenerService('payment.updated', array(0 => 'vod_base.payment.listener', 1 => 'onPaymentUpdated'), 0);
        $instance->addListenerService('user.updated', array(0 => 'vod_base.user.listener', 1 => 'onUserUpdated'), 0);
        $instance->addListenerService('coupon.updated', array(0 => 'vod_base.coupon.listener', 1 => 'onCouponUpdated'), 0);
        $instance->addListenerService('play', array(0 => 'vod_base.recommender_play.listener', 1 => 'onPlay'), 0);
        $instance->addListenerService('visit', array(0 => 'vod_base.recommender_visit.listener', 1 => 'onVisit'), 0);
        $instance->addSubscriberService('response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener');
        $instance->addSubscriberService('streamed_response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener');
        $instance->addSubscriberService('locale_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener');
        $instance->addSubscriberService('translator_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\TranslatorListener');
        $instance->addSubscriberService('validate_request_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ValidateRequestListener');
        $instance->addSubscriberService('session_listener', 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener');
        $instance->addSubscriberService('session.save_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\SaveSessionListener');
        $instance->addSubscriberService('fragment.listener', 'Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener');
        $instance->addSubscriberService('profiler_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ProfilerListener');
        $instance->addSubscriberService('data_collector.request', 'Symfony\\Component\\HttpKernel\\DataCollector\\RequestDataCollector');
        $instance->addSubscriberService('router_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener');
        $instance->addSubscriberService('debug.debug_handlers_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener');
        $instance->addSubscriberService('security.firewall', 'Symfony\\Component\\Security\\Http\\Firewall');
        $instance->addSubscriberService('security.rememberme.response_listener', 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener');
        $instance->addSubscriberService('twig.exception_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener');
        $instance->addSubscriberService('sensio_framework_extra.controller.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener');
        $instance->addSubscriberService('sensio_framework_extra.converter.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener');
        $instance->addSubscriberService('sensio_framework_extra.view.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener');
        $instance->addSubscriberService('sensio_framework_extra.cache.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\HttpCacheListener');
        $instance->addSubscriberService('sensio_framework_extra.security.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\SecurityListener');
        $instance->addSubscriberService('alterphp_doctrine_extensions.event_listener.ip_trace', 'VOD\\BaseBundle\\EventListener\\IpTraceListener');
        $instance->addSubscriberService('vod_base.subscriber.tracking_code_subscriber', 'VOD\\BaseBundle\\EventSubscriber\\TrackingCodeSubscriber');
        $instance->addSubscriberService('vod_base.event_subscriber.active_profile', 'VOD\\BaseBundle\\EventSubscriber\\ActiveProfileSubscriber');
        $instance->addSubscriberService('debug.dump_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\DumpListener');
        $instance->addSubscriberService('web_profiler.debug_toolbar', 'Symfony\\Bundle\\WebProfilerBundle\\EventListener\\WebDebugToolbarListener');

        return $instance;
    }

    /**
     * Gets the 'debug.stopwatch' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Stopwatch\Stopwatch A Symfony\Component\Stopwatch\Stopwatch instance
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch();
    }

    /**
     * Gets the 'doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry A Doctrine\Bundle\DoctrineBundle\Registry instance
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, array('default' => 'doctrine.dbal.default_connection'), array('default' => 'doctrine.orm.default_entity_manager'), 'default', 'default');
    }

    /**
     * Gets the 'doctrine.dbal.connection_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ConnectionFactory A Doctrine\Bundle\DoctrineBundle\ConnectionFactory instance
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array());
    }

    /**
     * Gets the 'doctrine.dbal.default_connection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\DBAL\Connection A Doctrine\DBAL\Connection instance
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Doctrine\DBAL\Logging\LoggerChain();
        $a->addLogger(new \Symfony\Bridge\Doctrine\Logger\DbalLogger($this->get('monolog.logger.doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $a->addLogger($this->get('doctrine.dbal.logger.profiling.default'));

        $b = new \Doctrine\DBAL\Configuration();
        $b->setSQLLogger($a);

        $c = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $c->addEventSubscriber($this->get('gedmo_doctrine_extensions.listener.ip_traceable'));
        $c->addEventListener(array(0 => 'loadClassMetadata'), $this->get('doctrine.orm.default_listeners.attach_entity_listeners'));

        return $this->services['doctrine.dbal.default_connection'] = $this->get('doctrine.dbal.connection_factory')->createConnection(array('driver' => 'pdo_mysql', 'host' => '192.168.10.32', 'port' => 3306, 'dbname' => 'qubit-web-ar', 'user' => 'qubit', 'password' => 'qubit', 'charset' => 'UTF8', 'driverOptions' => array(), 'defaultTableOptions' => array()), $b, $c, array());
    }

    /**
     * Gets the 'doctrine.orm.default_entity_listener_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\ORM\Mapping\DefaultEntityListenerResolver A Doctrine\ORM\Mapping\DefaultEntityListenerResolver instance
     */
    protected function getDoctrine_Orm_DefaultEntityListenerResolverService()
    {
        return $this->services['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\ORM\Mapping\DefaultEntityListenerResolver();
    }

    /**
     * Gets the 'doctrine.orm.default_entity_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Doctrine\ORM\EntityManager A Doctrine\ORM\EntityManager instance
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        $a = $this->get('annotation_reader');

        $b = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($a, array(0 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Entity'), 1 => ($this->targetDirs[3].'/src/VOD/QubitArgentinaBundle/Entity')));

        $c = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
        $c->addDriver($b, 'VOD\\BaseBundle\\Entity');
        $c->addDriver($b, 'VOD\\QubitArgentinaBundle\\Entity');

        $d = new \Doctrine\ORM\Configuration();
        $d->setEntityNamespaces(array('VODBaseBundle' => 'VOD\\BaseBundle\\Entity', 'VODQubitArgentinaBundle' => 'VOD\\QubitArgentinaBundle\\Entity'));
        $d->setMetadataCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_metadata_cache'));
        $d->setQueryCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_query_cache'));
        $d->setResultCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_result_cache'));
        $d->setMetadataDriverImpl($c);
        $d->setProxyDir((__DIR__.'/doctrine/orm/Proxies'));
        $d->setProxyNamespace('Proxies');
        $d->setAutoGenerateProxyClasses(true);
        $d->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $d->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $d->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy());
        $d->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $d->setEntityListenerResolver($this->get('doctrine.orm.default_entity_listener_resolver'));

        $this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create($this->get('doctrine.dbal.default_connection'), $d);

        $this->get('doctrine.orm.default_manager_configurator')->configure($instance);

        return $instance;
    }

    /**
     * Gets the 'doctrine.orm.default_entity_manager.property_info_extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor A Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor instance
     */
    protected function getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService()
    {
        return $this->services['doctrine.orm.default_entity_manager.property_info_extractor'] = new \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor($this->get('doctrine.orm.default_entity_manager')->getMetadataFactory());
    }

    /**
     * Gets the 'doctrine.orm.default_listeners.attach_entity_listeners' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\ORM\Tools\AttachEntityListenersListener A Doctrine\ORM\Tools\AttachEntityListenersListener instance
     */
    protected function getDoctrine_Orm_DefaultListeners_AttachEntityListenersService()
    {
        return $this->services['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener();
    }

    /**
     * Gets the 'doctrine.orm.default_manager_configurator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator A Doctrine\Bundle\DoctrineBundle\ManagerConfigurator instance
     */
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array());
    }

    /**
     * Gets the 'doctrine.orm.validator.unique' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator A Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator instance
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator($this->get('doctrine'));
    }

    /**
     * Gets the 'doctrine.orm.validator_initializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer A Symfony\Bridge\Doctrine\Validator\DoctrineInitializer instance
     */
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer($this->get('doctrine'));
    }

    /**
     * Gets the 'doctrine_cache.providers.doctrine.orm.default_metadata_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_d2f2d74f981e65cdbc3301f60231e7e1330421d0209218ebcabce8a73e5bbf0f');

        return $instance;
    }

    /**
     * Gets the 'doctrine_cache.providers.doctrine.orm.default_query_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_d2f2d74f981e65cdbc3301f60231e7e1330421d0209218ebcabce8a73e5bbf0f');

        return $instance;
    }

    /**
     * Gets the 'doctrine_cache.providers.doctrine.orm.default_result_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf2orm_default_d2f2d74f981e65cdbc3301f60231e7e1330421d0209218ebcabce8a73e5bbf0f');

        return $instance;
    }

    /**
     * Gets the 'file_locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator A Symfony\Component\HttpKernel\Config\FileLocator instance
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator($this->get('kernel'), ($this->targetDirs[2].'/Resources'));
    }

    /**
     * Gets the 'filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem A Symfony\Component\Filesystem\Filesystem instance
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /**
     * Gets the 'form.csrf_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter A Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter instance
     *
     * @deprecated The "form.csrf_provider" service is deprecated since Symfony 2.4 and will be removed in 3.0. Use the "security.csrf.token_manager" service instead.
     */
    protected function getForm_CsrfProviderService()
    {
        @trigger_error('The "form.csrf_provider" service is deprecated since Symfony 2.4 and will be removed in 3.0. Use the "security.csrf.token_manager" service instead.', E_USER_DEPRECATED);

        return $this->services['form.csrf_provider'] = new \Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter($this->get('security.csrf.token_manager'));
    }

    /**
     * Gets the 'form.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\FormFactory A Symfony\Component\Form\FormFactory instance
     */
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory($this->get('form.registry'), $this->get('form.resolved_type_factory'));
    }

    /**
     * Gets the 'form.registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\FormRegistry A Symfony\Component\Form\FormRegistry instance
     */
    protected function getForm_RegistryService()
    {
        return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension($this, array('vod_base_payment_form' => 'vod_base.form.payment', 'VOD\\QubitArgentinaBundle\\Form\\Type\\PaymentType' => 'vod_base.form.payment', 'form' => 'form.type.form', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => 'form.type.form', 'birthday' => 'form.type.birthday', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\BirthdayType' => 'form.type.birthday', 'checkbox' => 'form.type.checkbox', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CheckboxType' => 'form.type.checkbox', 'choice' => 'form.type.choice', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => 'form.type.choice', 'collection' => 'form.type.collection', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CollectionType' => 'form.type.collection', 'country' => 'form.type.country', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CountryType' => 'form.type.country', 'date' => 'form.type.date', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateType' => 'form.type.date', 'datetime' => 'form.type.datetime', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateTimeType' => 'form.type.datetime', 'email' => 'form.type.email', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\EmailType' => 'form.type.email', 'file' => 'form.type.file', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => 'form.type.file', 'hidden' => 'form.type.hidden', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType' => 'form.type.hidden', 'integer' => 'form.type.integer', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\IntegerType' => 'form.type.integer', 'language' => 'form.type.language', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\LanguageType' => 'form.type.language', 'locale' => 'form.type.locale', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\LocaleType' => 'form.type.locale', 'money' => 'form.type.money', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\MoneyType' => 'form.type.money', 'number' => 'form.type.number', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType' => 'form.type.number', 'password' => 'form.type.password', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\PasswordType' => 'form.type.password', 'percent' => 'form.type.percent', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\PercentType' => 'form.type.percent', 'radio' => 'form.type.radio', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RadioType' => 'form.type.radio', 'range' => 'form.type.range', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RangeType' => 'form.type.range', 'repeated' => 'form.type.repeated', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => 'form.type.repeated', 'search' => 'form.type.search', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SearchType' => 'form.type.search', 'textarea' => 'form.type.textarea', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType' => 'form.type.textarea', 'text' => 'form.type.text', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType' => 'form.type.text', 'time' => 'form.type.time', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TimeType' => 'form.type.time', 'timezone' => 'form.type.timezone', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TimezoneType' => 'form.type.timezone', 'url' => 'form.type.url', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\UrlType' => 'form.type.url', 'button' => 'form.type.button', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ButtonType' => 'form.type.button', 'submit' => 'form.type.submit', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => 'form.type.submit', 'reset' => 'form.type.reset', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ResetType' => 'form.type.reset', 'currency' => 'form.type.currency', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CurrencyType' => 'form.type.currency', 'entity' => 'form.type.entity', 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => 'form.type.entity', 'beelab_recaptcha2' => 'beelab_recaptcha2.type', 'Beelab\\Recaptcha2Bundle\\Form\\Type\\RecaptchaType' => 'beelab_recaptcha2.type', 'vod_base_registration' => 'vod_base.form.type.subscription.movistar', 'VOD\\BaseBundle\\Form\\Type\\RegistrationType' => 'vod_base.form.type.registration', 'VOD\\BaseBundle\\Form\\Type\\SubscriptionMovistarType' => 'vod_base.form.type.subscription.movistar', 'vod_base_generate_new_password' => 'vod_base.form.type.generate_new_password', 'VOD\\BaseBundle\\Form\\Type\\GenerateNewPasswordType' => 'vod_base.form.type.generate_new_password', 'vod_base_add_coupon' => 'vod_base.form.type.add_coupon', 'VOD\\BaseBundle\\Form\\Type\\AddCouponType' => 'vod_base.form.type.add_coupon', 'vod_base_change_password' => 'vod_base.form.type.change_password', 'VOD\\BaseBundle\\Form\\Type\\ChangePasswordType' => 'vod_base.form.type.change_password', 'vod_base_crud_profile' => 'vod_base.form.type.edit_profile', 'VOD\\BaseBundle\\Form\\Type\\ProfileCrudType' => 'vod_base.form.type.edit_profile', 'vod_base_change_parental_control' => 'vod_base.form.type.parental_control', 'VOD\\BaseBundle\\Form\\Type\\ParentalControlType' => 'vod_base.form.type.parental_control', 'vod_base_change_pin' => 'vod_base.form.type.pin', 'VOD\\BaseBundle\\Form\\Type\\PinType' => 'vod_base.form.type.pin', 'vod_promotion' => 'vod_base.form.type.promotion', 'VOD\\BaseBundle\\Form\\Type\\PromotionType' => 'vod_base.form.type.promotion', 'vod_change_product' => 'vod_base.form.type.change_product', 'VOD\\BaseBundle\\Form\\Type\\ChangeProductType' => 'vod_base.form.type.change_product', 'vod_change_name' => 'vod_base.form.type.change_name', 'VOD\\BaseBundle\\Form\\Type\\ChangeNameType' => 'vod_base.form.type.change_name', 'vod_contact' => 'vod_base.form.type.contact', 'VOD\\BaseBundle\\Form\\Type\\ContactType' => 'vod_base.form.type.contact', 'vod_base_change_username' => 'vod_base.form.type.username', 'VOD\\BaseBundle\\Form\\Type\\ChangeUsernameType' => 'vod_base.form.type.username', 'vod_payment_global_collect' => 'vod_base.form.payment_global_collect', 'VOD\\BaseBundle\\Services\\Payment\\Gateway\\GlobalCollect\\Form\\Type\\GlobalCollectType' => 'vod_base.form.payment_global_collect', 'vod_payment_stripe' => 'vod_base.form.payment_stripe', 'VOD\\BaseBundle\\Services\\Payment\\Gateway\\Stripe\\Form\\Type\\StripeType' => 'vod_base.form.payment_stripe', 'vod_payment_movistar' => 'vod_base.form.payment_movistar', 'VOD\\BaseBundle\\Services\\Payment\\Gateway\\Movistar\\Form\\Type\\MovistarType' => 'vod_base.form.payment_movistar'), array('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => array(0 => 'form.type_extension.form.http_foundation', 1 => 'form.type_extension.form.validator', 2 => 'form.type_extension.upload.validator', 3 => 'form.type_extension.csrf', 4 => 'form.type_extension.form.data_collector'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => array(0 => 'form.type_extension.repeated.validator'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => array(0 => 'form.type_extension.submit.validator')), array(0 => 'form.type_guesser.validator', 1 => 'form.type_guesser.doctrine'))), $this->get('form.resolved_type_factory'));
    }

    /**
     * Gets the 'form.resolved_type_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy A Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy instance
     */
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy(new \Symfony\Component\Form\ResolvedFormTypeFactory(), $this->get('data_collector.form'));
    }

    /**
     * Gets the 'form.type.birthday' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\BirthdayType A Symfony\Component\Form\Extension\Core\Type\BirthdayType instance
     */
    protected function getForm_Type_BirthdayService()
    {
        return $this->services['form.type.birthday'] = new \Symfony\Component\Form\Extension\Core\Type\BirthdayType();
    }

    /**
     * Gets the 'form.type.button' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ButtonType A Symfony\Component\Form\Extension\Core\Type\ButtonType instance
     */
    protected function getForm_Type_ButtonService()
    {
        return $this->services['form.type.button'] = new \Symfony\Component\Form\Extension\Core\Type\ButtonType();
    }

    /**
     * Gets the 'form.type.checkbox' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CheckboxType A Symfony\Component\Form\Extension\Core\Type\CheckboxType instance
     */
    protected function getForm_Type_CheckboxService()
    {
        return $this->services['form.type.checkbox'] = new \Symfony\Component\Form\Extension\Core\Type\CheckboxType();
    }

    /**
     * Gets the 'form.type.choice' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ChoiceType A Symfony\Component\Form\Extension\Core\Type\ChoiceType instance
     */
    protected function getForm_Type_ChoiceService()
    {
        return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType(new \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator(new \Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator(new \Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory(), $this->get('property_accessor'))));
    }

    /**
     * Gets the 'form.type.collection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CollectionType A Symfony\Component\Form\Extension\Core\Type\CollectionType instance
     */
    protected function getForm_Type_CollectionService()
    {
        return $this->services['form.type.collection'] = new \Symfony\Component\Form\Extension\Core\Type\CollectionType();
    }

    /**
     * Gets the 'form.type.country' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CountryType A Symfony\Component\Form\Extension\Core\Type\CountryType instance
     */
    protected function getForm_Type_CountryService()
    {
        return $this->services['form.type.country'] = new \Symfony\Component\Form\Extension\Core\Type\CountryType();
    }

    /**
     * Gets the 'form.type.currency' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CurrencyType A Symfony\Component\Form\Extension\Core\Type\CurrencyType instance
     */
    protected function getForm_Type_CurrencyService()
    {
        return $this->services['form.type.currency'] = new \Symfony\Component\Form\Extension\Core\Type\CurrencyType();
    }

    /**
     * Gets the 'form.type.date' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateType A Symfony\Component\Form\Extension\Core\Type\DateType instance
     */
    protected function getForm_Type_DateService()
    {
        return $this->services['form.type.date'] = new \Symfony\Component\Form\Extension\Core\Type\DateType();
    }

    /**
     * Gets the 'form.type.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateTimeType A Symfony\Component\Form\Extension\Core\Type\DateTimeType instance
     */
    protected function getForm_Type_DatetimeService()
    {
        return $this->services['form.type.datetime'] = new \Symfony\Component\Form\Extension\Core\Type\DateTimeType();
    }

    /**
     * Gets the 'form.type.email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\EmailType A Symfony\Component\Form\Extension\Core\Type\EmailType instance
     */
    protected function getForm_Type_EmailService()
    {
        return $this->services['form.type.email'] = new \Symfony\Component\Form\Extension\Core\Type\EmailType();
    }

    /**
     * Gets the 'form.type.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\Type\EntityType A Symfony\Bridge\Doctrine\Form\Type\EntityType instance
     */
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType($this->get('doctrine'));
    }

    /**
     * Gets the 'form.type.file' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FileType A Symfony\Component\Form\Extension\Core\Type\FileType instance
     */
    protected function getForm_Type_FileService()
    {
        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType();
    }

    /**
     * Gets the 'form.type.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FormType A Symfony\Component\Form\Extension\Core\Type\FormType instance
     */
    protected function getForm_Type_FormService()
    {
        return $this->services['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType($this->get('property_accessor'));
    }

    /**
     * Gets the 'form.type.hidden' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\HiddenType A Symfony\Component\Form\Extension\Core\Type\HiddenType instance
     */
    protected function getForm_Type_HiddenService()
    {
        return $this->services['form.type.hidden'] = new \Symfony\Component\Form\Extension\Core\Type\HiddenType();
    }

    /**
     * Gets the 'form.type.integer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\IntegerType A Symfony\Component\Form\Extension\Core\Type\IntegerType instance
     */
    protected function getForm_Type_IntegerService()
    {
        return $this->services['form.type.integer'] = new \Symfony\Component\Form\Extension\Core\Type\IntegerType();
    }

    /**
     * Gets the 'form.type.language' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LanguageType A Symfony\Component\Form\Extension\Core\Type\LanguageType instance
     */
    protected function getForm_Type_LanguageService()
    {
        return $this->services['form.type.language'] = new \Symfony\Component\Form\Extension\Core\Type\LanguageType();
    }

    /**
     * Gets the 'form.type.locale' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LocaleType A Symfony\Component\Form\Extension\Core\Type\LocaleType instance
     */
    protected function getForm_Type_LocaleService()
    {
        return $this->services['form.type.locale'] = new \Symfony\Component\Form\Extension\Core\Type\LocaleType();
    }

    /**
     * Gets the 'form.type.money' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\MoneyType A Symfony\Component\Form\Extension\Core\Type\MoneyType instance
     */
    protected function getForm_Type_MoneyService()
    {
        return $this->services['form.type.money'] = new \Symfony\Component\Form\Extension\Core\Type\MoneyType();
    }

    /**
     * Gets the 'form.type.number' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\NumberType A Symfony\Component\Form\Extension\Core\Type\NumberType instance
     */
    protected function getForm_Type_NumberService()
    {
        return $this->services['form.type.number'] = new \Symfony\Component\Form\Extension\Core\Type\NumberType();
    }

    /**
     * Gets the 'form.type.password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PasswordType A Symfony\Component\Form\Extension\Core\Type\PasswordType instance
     */
    protected function getForm_Type_PasswordService()
    {
        return $this->services['form.type.password'] = new \Symfony\Component\Form\Extension\Core\Type\PasswordType();
    }

    /**
     * Gets the 'form.type.percent' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PercentType A Symfony\Component\Form\Extension\Core\Type\PercentType instance
     */
    protected function getForm_Type_PercentService()
    {
        return $this->services['form.type.percent'] = new \Symfony\Component\Form\Extension\Core\Type\PercentType();
    }

    /**
     * Gets the 'form.type.radio' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RadioType A Symfony\Component\Form\Extension\Core\Type\RadioType instance
     */
    protected function getForm_Type_RadioService()
    {
        return $this->services['form.type.radio'] = new \Symfony\Component\Form\Extension\Core\Type\RadioType();
    }

    /**
     * Gets the 'form.type.range' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RangeType A Symfony\Component\Form\Extension\Core\Type\RangeType instance
     */
    protected function getForm_Type_RangeService()
    {
        return $this->services['form.type.range'] = new \Symfony\Component\Form\Extension\Core\Type\RangeType();
    }

    /**
     * Gets the 'form.type.repeated' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RepeatedType A Symfony\Component\Form\Extension\Core\Type\RepeatedType instance
     */
    protected function getForm_Type_RepeatedService()
    {
        return $this->services['form.type.repeated'] = new \Symfony\Component\Form\Extension\Core\Type\RepeatedType();
    }

    /**
     * Gets the 'form.type.reset' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ResetType A Symfony\Component\Form\Extension\Core\Type\ResetType instance
     */
    protected function getForm_Type_ResetService()
    {
        return $this->services['form.type.reset'] = new \Symfony\Component\Form\Extension\Core\Type\ResetType();
    }

    /**
     * Gets the 'form.type.search' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SearchType A Symfony\Component\Form\Extension\Core\Type\SearchType instance
     */
    protected function getForm_Type_SearchService()
    {
        return $this->services['form.type.search'] = new \Symfony\Component\Form\Extension\Core\Type\SearchType();
    }

    /**
     * Gets the 'form.type.submit' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SubmitType A Symfony\Component\Form\Extension\Core\Type\SubmitType instance
     */
    protected function getForm_Type_SubmitService()
    {
        return $this->services['form.type.submit'] = new \Symfony\Component\Form\Extension\Core\Type\SubmitType();
    }

    /**
     * Gets the 'form.type.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextType A Symfony\Component\Form\Extension\Core\Type\TextType instance
     */
    protected function getForm_Type_TextService()
    {
        return $this->services['form.type.text'] = new \Symfony\Component\Form\Extension\Core\Type\TextType();
    }

    /**
     * Gets the 'form.type.textarea' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextareaType A Symfony\Component\Form\Extension\Core\Type\TextareaType instance
     */
    protected function getForm_Type_TextareaService()
    {
        return $this->services['form.type.textarea'] = new \Symfony\Component\Form\Extension\Core\Type\TextareaType();
    }

    /**
     * Gets the 'form.type.time' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimeType A Symfony\Component\Form\Extension\Core\Type\TimeType instance
     */
    protected function getForm_Type_TimeService()
    {
        return $this->services['form.type.time'] = new \Symfony\Component\Form\Extension\Core\Type\TimeType();
    }

    /**
     * Gets the 'form.type.timezone' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimezoneType A Symfony\Component\Form\Extension\Core\Type\TimezoneType instance
     */
    protected function getForm_Type_TimezoneService()
    {
        return $this->services['form.type.timezone'] = new \Symfony\Component\Form\Extension\Core\Type\TimezoneType();
    }

    /**
     * Gets the 'form.type.url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\UrlType A Symfony\Component\Form\Extension\Core\Type\UrlType instance
     */
    protected function getForm_Type_UrlService()
    {
        return $this->services['form.type.url'] = new \Symfony\Component\Form\Extension\Core\Type\UrlType();
    }

    /**
     * Gets the 'form.type_extension.csrf' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension A Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension instance
     */
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->services['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension($this->get('security.csrf.token_manager'), true, '_token', $this->get('translator.default'), 'validators', $this->get('form.server_params'));
    }

    /**
     * Gets the 'form.type_extension.form.data_collector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension A Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension instance
     */
    protected function getForm_TypeExtension_Form_DataCollectorService()
    {
        return $this->services['form.type_extension.form.data_collector'] = new \Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension($this->get('data_collector.form'));
    }

    /**
     * Gets the 'form.type_extension.form.http_foundation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension A Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension instance
     */
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->services['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension(new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler($this->get('form.server_params')));
    }

    /**
     * Gets the 'form.type_extension.form.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension instance
     */
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->services['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension($this->get('validator'));
    }

    /**
     * Gets the 'form.type_extension.repeated.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension instance
     */
    protected function getForm_TypeExtension_Repeated_ValidatorService()
    {
        return $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension();
    }

    /**
     * Gets the 'form.type_extension.submit.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension instance
     */
    protected function getForm_TypeExtension_Submit_ValidatorService()
    {
        return $this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension();
    }

    /**
     * Gets the 'form.type_extension.upload.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension A Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension instance
     */
    protected function getForm_TypeExtension_Upload_ValidatorService()
    {
        return $this->services['form.type_extension.upload.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension($this->get('translator'), 'validators');
    }

    /**
     * Gets the 'form.type_guesser.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser A Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser instance
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser($this->get('doctrine'));
    }

    /**
     * Gets the 'form.type_guesser.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser A Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser instance
     */
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->services['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser($this->get('validator'));
    }

    /**
     * Gets the 'fos_js_routing.controller' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\JsRoutingBundle\Controller\Controller A FOS\JsRoutingBundle\Controller\Controller instance
     */
    protected function getFosJsRouting_ControllerService()
    {
        return $this->services['fos_js_routing.controller'] = new \FOS\JsRoutingBundle\Controller\Controller($this->get('fos_js_routing.serializer'), $this->get('fos_js_routing.extractor'), array('enabled' => false), true);
    }

    /**
     * Gets the 'fos_js_routing.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FOS\JsRoutingBundle\Extractor\ExposedRoutesExtractor A FOS\JsRoutingBundle\Extractor\ExposedRoutesExtractor instance
     */
    protected function getFosJsRouting_ExtractorService()
    {
        return $this->services['fos_js_routing.extractor'] = new \FOS\JsRoutingBundle\Extractor\ExposedRoutesExtractor($this->get('router'), array(), __DIR__, array('FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle', 'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle', 'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle', 'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle', 'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle', 'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle', 'LswMemcacheBundle' => 'Lsw\\MemcacheBundle\\LswMemcacheBundle', 'BeelabRecaptcha2Bundle' => 'Beelab\\Recaptcha2Bundle\\BeelabRecaptcha2Bundle', 'CiRestClientBundle' => 'Ci\\RestClientBundle\\CiRestClientBundle', 'MobileDetectBundle' => 'SunCat\\MobileDetectBundle\\MobileDetectBundle', 'FOSJsRoutingBundle' => 'FOS\\JsRoutingBundle\\FOSJsRoutingBundle', 'VODBaseBundle' => 'VOD\\BaseBundle\\VODBaseBundle', 'VODItvBaseBundle' => 'VOD\\ItvBaseBundle\\VODItvBaseBundle', 'VODQubitArgentinaBundle' => 'VOD\\QubitArgentinaBundle\\VODQubitArgentinaBundle', 'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle', 'DebugBundle' => 'Symfony\\Bundle\\DebugBundle\\DebugBundle', 'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle', 'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle', 'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle'));
    }

    /**
     * Gets the 'fos_js_routing.serializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Serializer\Serializer A Symfony\Component\Serializer\Serializer instance
     */
    protected function getFosJsRouting_SerializerService()
    {
        return $this->services['fos_js_routing.serializer'] = new \Symfony\Component\Serializer\Serializer(array(0 => new \Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer()), array('json' => new \Symfony\Component\Serializer\Encoder\JsonEncoder()));
    }

    /**
     * Gets the 'fragment.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler A Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler instance
     */
    protected function getFragment_HandlerService()
    {
        $this->services['fragment.handler'] = $instance = new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler($this, $this->get('request_stack'), true);

        $instance->addRendererService('inline', 'fragment.renderer.inline');
        $instance->addRendererService('hinclude', 'fragment.renderer.hinclude');
        $instance->addRendererService('hinclude', 'fragment.renderer.hinclude');
        $instance->addRendererService('esi', 'fragment.renderer.esi');
        $instance->addRendererService('ssi', 'fragment.renderer.ssi');

        return $instance;
    }

    /**
     * Gets the 'fragment.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\FragmentListener A Symfony\Component\HttpKernel\EventListener\FragmentListener instance
     */
    protected function getFragment_ListenerService()
    {
        return $this->services['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener($this->get('uri_signer'), '/_fragment');
    }

    /**
     * Gets the 'fragment.renderer.esi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer A Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer instance
     */
    protected function getFragment_Renderer_EsiService()
    {
        $this->services['fragment.renderer.esi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\EsiFragmentRenderer(NULL, $this->get('fragment.renderer.inline'), $this->get('uri_signer'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.hinclude' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer A Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer instance
     */
    protected function getFragment_Renderer_HincludeService()
    {
        $this->services['fragment.renderer.hinclude'] = $instance = new \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer($this->get('twig'), $this->get('uri_signer'), NULL);

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.inline' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer A Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer instance
     */
    protected function getFragment_Renderer_InlineService()
    {
        $this->services['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer($this->get('http_kernel'), $this->get('debug.event_dispatcher'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'fragment.renderer.ssi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer A Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer instance
     */
    protected function getFragment_Renderer_SsiService()
    {
        $this->services['fragment.renderer.ssi'] = $instance = new \Symfony\Component\HttpKernel\Fragment\SsiFragmentRenderer(NULL, $this->get('fragment.renderer.inline'), $this->get('uri_signer'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the 'history_routes' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Services\Utils\HistoryRoutes A VOD\BaseBundle\Services\Utils\HistoryRoutes instance
     */
    protected function getHistoryRoutesService()
    {
        return $this->services['history_routes'] = new \VOD\BaseBundle\Services\Utils\HistoryRoutes($this->get('router'), $this->get('security.access_map'), $this->get('request'));
    }

    /**
     * Gets the 'http_kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel A Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel instance
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel($this->get('debug.event_dispatcher'), $this, $this->get('debug.controller_resolver'), $this->get('request_stack'), false);
    }

    /**
     * Gets the 'kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getKernelService()
    {
        throw new RuntimeException('You have requested a synthetic service ("kernel"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'kernel.class_cache.cache_warmer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer A Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer instance
     */
    protected function getKernel_ClassCache_CacheWarmerService()
    {
        return $this->services['kernel.class_cache.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer();
    }

    /**
     * Gets the 'locale_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener A Symfony\Component\HttpKernel\EventListener\LocaleListener instance
     */
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener($this->get('request_stack'), 'es_AR', $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'logger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'memcache.data_collector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Lsw\MemcacheBundle\DataCollector\MemcacheDataCollector A Lsw\MemcacheBundle\DataCollector\MemcacheDataCollector instance
     */
    protected function getMemcache_DataCollectorService()
    {
        $this->services['memcache.data_collector'] = $instance = new \Lsw\MemcacheBundle\DataCollector\MemcacheDataCollector();

        $instance->addClient('session', array('allow_failover' => 'true', 'max_failover_attempts' => '20', 'default_port' => '11211', 'chunk_size' => '32768', 'protocol' => '\'ascii\'', 'hash_strategy' => '\'consistent\'', 'hash_function' => '\'crc32\'', 'redundancy' => 'true', 'session_redundancy' => '2', 'compress_threshold' => '20000', 'lock_timeout' => '15'), $this->get('memcache.session'));
        $instance->addClient('default', array('allow_failover' => 'true', 'max_failover_attempts' => '20', 'default_port' => '11211', 'chunk_size' => '32768', 'protocol' => '\'ascii\'', 'hash_strategy' => '\'consistent\'', 'hash_function' => '\'crc32\'', 'redundancy' => 'true', 'session_redundancy' => '2', 'compress_threshold' => '20000', 'lock_timeout' => '15'), $this->get('memcache.default'));
        $instance->addClient('potential', array('allow_failover' => 'true', 'max_failover_attempts' => '20', 'default_port' => '11211', 'chunk_size' => '32768', 'protocol' => '\'ascii\'', 'hash_strategy' => '\'consistent\'', 'hash_function' => '\'crc32\'', 'redundancy' => 'true', 'session_redundancy' => '2', 'compress_threshold' => '20000', 'lock_timeout' => '15'), $this->get('memcache.potential'));

        return $instance;
    }

    /**
     * Gets the 'memcache.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Lsw\MemcacheBundle\Cache\AntiDogPileMemcache A Lsw\MemcacheBundle\Cache\AntiDogPileMemcache instance
     */
    protected function getMemcache_DefaultService()
    {
        $this->services['memcache.default'] = $instance = new \Lsw\MemcacheBundle\Cache\AntiDogPileMemcache(true, array('allow_failover' => true, 'max_failover_attempts' => 20, 'default_port' => 11211, 'chunk_size' => 32768, 'protocol' => 'ascii', 'hash_strategy' => 'consistent', 'hash_function' => 'crc32', 'redundancy' => true, 'session_redundancy' => 2, 'compress_threshold' => 20000, 'lock_timeout' => 15));

        $instance->addServer('localhost', 11211, 0, true, 1, 1, 15);

        return $instance;
    }

    /**
     * Gets the 'memcache.potential' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Lsw\MemcacheBundle\Cache\AntiDogPileMemcache A Lsw\MemcacheBundle\Cache\AntiDogPileMemcache instance
     */
    protected function getMemcache_PotentialService()
    {
        $this->services['memcache.potential'] = $instance = new \Lsw\MemcacheBundle\Cache\AntiDogPileMemcache(true, array('allow_failover' => true, 'max_failover_attempts' => 20, 'default_port' => 11211, 'chunk_size' => 32768, 'protocol' => 'ascii', 'hash_strategy' => 'consistent', 'hash_function' => 'crc32', 'redundancy' => true, 'session_redundancy' => 2, 'compress_threshold' => 20000, 'lock_timeout' => 15));

        $instance->addServer('localhost', 11211, 0, true, 1, 1, 15);

        return $instance;
    }

    /**
     * Gets the 'memcache.session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Lsw\MemcacheBundle\Cache\AntiDogPileMemcache A Lsw\MemcacheBundle\Cache\AntiDogPileMemcache instance
     */
    protected function getMemcache_SessionService()
    {
        $this->services['memcache.session'] = $instance = new \Lsw\MemcacheBundle\Cache\AntiDogPileMemcache(true, array('allow_failover' => true, 'max_failover_attempts' => 20, 'default_port' => 11211, 'chunk_size' => 32768, 'protocol' => 'ascii', 'hash_strategy' => 'consistent', 'hash_function' => 'crc32', 'redundancy' => true, 'session_redundancy' => 2, 'compress_threshold' => 20000, 'lock_timeout' => 15));

        $instance->addServer('localhost', 11211, 0, true, 1, 1, 15);

        return $instance;
    }

    /**
     * Gets the 'memcache.session_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Lsw\MemcacheBundle\Session\Storage\LockingSessionHandler A Lsw\MemcacheBundle\Session\Storage\LockingSessionHandler instance
     */
    protected function getMemcache_SessionHandlerService()
    {
        return $this->services['memcache.session_handler'] = new \Lsw\MemcacheBundle\Session\Storage\LockingSessionHandler($this->get('memcache.session'), array('prefix' => 'session_', 'locking' => true, 'spin_lock_wait' => 150000, 'lock_max_wait' => NULL));
    }

    /**
     * Gets the 'mobile_detect.device_view' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SunCat\MobileDetectBundle\Helper\DeviceView A SunCat\MobileDetectBundle\Helper\DeviceView instance
     */
    protected function getMobileDetect_DeviceViewService()
    {
        return $this->services['mobile_detect.device_view'] = new \SunCat\MobileDetectBundle\Helper\DeviceView($this);
    }

    /**
     * Gets the 'mobile_detect.mobile_detector.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SunCat\MobileDetectBundle\DeviceDetector\MobileDetector A SunCat\MobileDetectBundle\DeviceDetector\MobileDetector instance
     */
    protected function getMobileDetect_MobileDetector_DefaultService()
    {
        return $this->services['mobile_detect.mobile_detector.default'] = new \SunCat\MobileDetectBundle\DeviceDetector\MobileDetector();
    }

    /**
     * Gets the 'mobile_detect.request_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SunCat\MobileDetectBundle\EventListener\RequestListener A SunCat\MobileDetectBundle\EventListener\RequestListener instance
     */
    protected function getMobileDetect_RequestListenerService()
    {
        return $this->services['mobile_detect.request_listener'] = new \SunCat\MobileDetectBundle\EventListener\RequestListener($this, array('mobile' => array('is_enabled' => false, 'host' => NULL, 'status_code' => 302, 'action' => 'redirect'), 'tablet' => array('is_enabled' => false, 'host' => NULL, 'status_code' => 302, 'action' => 'redirect'), 'detect_tablet_as_mobile' => false), true);
    }

    /**
     * Gets the 'mobile_detect.twig.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SunCat\MobileDetectBundle\Twig\Extension\MobileDetectExtension A SunCat\MobileDetectBundle\Twig\Extension\MobileDetectExtension instance
     */
    protected function getMobileDetect_Twig_ExtensionService()
    {
        $this->services['mobile_detect.twig.extension'] = $instance = new \SunCat\MobileDetectBundle\Twig\Extension\MobileDetectExtension($this->get('mobile_detect.mobile_detector.default'), $this->get('mobile_detect.device_view'), array('mobile' => array('is_enabled' => false, 'host' => NULL, 'status_code' => 302, 'action' => 'redirect'), 'tablet' => array('is_enabled' => false, 'host' => NULL, 'status_code' => 302, 'action' => 'redirect'), 'detect_tablet_as_mobile' => false));

        $instance->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        return $instance;
    }

    /**
     * Gets the 'mobile_detect_bundle.device.collector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SunCat\MobileDetectBundle\DataCollector\DeviceDataCollector A SunCat\MobileDetectBundle\DataCollector\DeviceDataCollector instance
     */
    protected function getMobileDetectBundle_Device_CollectorService()
    {
        return $this->services['mobile_detect_bundle.device.collector'] = new \SunCat\MobileDetectBundle\DataCollector\DeviceDataCollector($this->get('mobile_detect.device_view'));
    }

    /**
     * Gets the 'monolog.handler.activity_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\RotatingFileHandler A Monolog\Handler\RotatingFileHandler instance
     */
    protected function getMonolog_Handler_ActivityHandlerService()
    {
        $this->services['monolog.handler.activity_handler'] = $instance = new \Monolog\Handler\RotatingFileHandler(($this->targetDirs[2].'/logs/activity_dev.log'), 20, 200, true, NULL);

        $instance->pushProcessor($this->get('monolog.processor.psr_log_message'));
        $instance->setFilenameFormat('{filename}-{date}', 'Y-m-d');

        return $instance;
    }

    /**
     * Gets the 'monolog.handler.api_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\RotatingFileHandler A Monolog\Handler\RotatingFileHandler instance
     */
    protected function getMonolog_Handler_ApiHandlerService()
    {
        $this->services['monolog.handler.api_handler'] = $instance = new \Monolog\Handler\RotatingFileHandler(($this->targetDirs[2].'/logs/api_dev.log'), 20, 200, true, NULL);

        $instance->pushProcessor($this->get('monolog.processor.psr_log_message'));
        $instance->setFilenameFormat('{filename}-{date}', 'Y-m-d');

        return $instance;
    }

    /**
     * Gets the 'monolog.handler.content_play_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\RotatingFileHandler A Monolog\Handler\RotatingFileHandler instance
     */
    protected function getMonolog_Handler_ContentPlayHandlerService()
    {
        $this->services['monolog.handler.content_play_handler'] = $instance = new \Monolog\Handler\RotatingFileHandler(($this->targetDirs[2].'/logs/content_play_dev.log'), 10, 100, true, NULL);

        $instance->pushProcessor($this->get('monolog.processor.psr_log_message'));
        $instance->setFilenameFormat('{filename}-{date}', 'Y-m-d');

        return $instance;
    }

    /**
     * Gets the 'monolog.handler.debug' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\DebugHandler A Symfony\Bridge\Monolog\Handler\DebugHandler instance
     */
    protected function getMonolog_Handler_DebugService()
    {
        return $this->services['monolog.handler.debug'] = new \Symfony\Bridge\Monolog\Handler\DebugHandler(100, true);
    }

    /**
     * Gets the 'monolog.handler.grouped' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\GroupHandler A Monolog\Handler\GroupHandler instance
     */
    protected function getMonolog_Handler_GroupedService()
    {
        $this->services['monolog.handler.grouped'] = $instance = new \Monolog\Handler\GroupHandler(array(0 => $this->get('monolog.handler.streamed'), 1 => $this->get('monolog.handler.loggly')), true);

        $instance->pushProcessor($this->get('monolog.processor.psr_log_message'));

        return $instance;
    }

    /**
     * Gets the 'monolog.handler.infotainment_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\RotatingFileHandler A Monolog\Handler\RotatingFileHandler instance
     */
    protected function getMonolog_Handler_InfotainmentHandlerService()
    {
        $this->services['monolog.handler.infotainment_handler'] = $instance = new \Monolog\Handler\RotatingFileHandler(($this->targetDirs[2].'/logs/infotainment_dev.log'), 0, 200, true, NULL);

        $instance->pushProcessor($this->get('monolog.processor.psr_log_message'));
        $instance->setFilenameFormat('{filename}-{date}', 'Y-m-d');

        return $instance;
    }

    /**
     * Gets the 'monolog.handler.loggly' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\LogglyHandler A Monolog\Handler\LogglyHandler instance
     */
    protected function getMonolog_Handler_LogglyService()
    {
        $this->services['monolog.handler.loggly'] = $instance = new \Monolog\Handler\LogglyHandler('63756d0d-1ca9-4738-8d5e-791891e087c0', 100, true);

        $instance->pushProcessor($this->get('monolog.processor.psr_log_message'));
        $instance->setTag('qubit-web-ar');

        return $instance;
    }

    /**
     * Gets the 'monolog.handler.login_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\RotatingFileHandler A Monolog\Handler\RotatingFileHandler instance
     */
    protected function getMonolog_Handler_LoginHandlerService()
    {
        $this->services['monolog.handler.login_handler'] = $instance = new \Monolog\Handler\RotatingFileHandler(($this->targetDirs[2].'/logs/login_dev.log'), 2, 200, true, NULL);

        $instance->pushProcessor($this->get('monolog.processor.psr_log_message'));
        $instance->setFilenameFormat('{filename}-{date}', 'Y-m-d');

        return $instance;
    }

    /**
     * Gets the 'monolog.handler.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\FingersCrossedHandler A Monolog\Handler\FingersCrossedHandler instance
     */
    protected function getMonolog_Handler_MainService()
    {
        $this->services['monolog.handler.main'] = $instance = new \Monolog\Handler\FingersCrossedHandler($this->get('monolog.handler.streamed'), 500, 0, true, true, NULL);

        $instance->pushProcessor($this->get('monolog.processor.psr_log_message'));

        return $instance;
    }

    /**
     * Gets the 'monolog.handler.null_internal' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\NullHandler A Monolog\Handler\NullHandler instance
     */
    protected function getMonolog_Handler_NullInternalService()
    {
        return $this->services['monolog.handler.null_internal'] = new \Monolog\Handler\NullHandler();
    }

    /**
     * Gets the 'monolog.handler.streamed' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Monolog\Handler\StreamHandler A Monolog\Handler\StreamHandler instance
     */
    protected function getMonolog_Handler_StreamedService()
    {
        $this->services['monolog.handler.streamed'] = $instance = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'/logs/dev.log'), 100, true, NULL);

        $instance->pushProcessor($this->get('monolog.processor.psr_log_message'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.activity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_ActivityService()
    {
        $this->services['monolog.logger.activity'] = $instance = new \Symfony\Bridge\Monolog\Logger('activity');

        $instance->pushHandler($this->get('vod_base.monolog.database_handler'));
        $instance->pushHandler($this->get('monolog.handler.activity_handler'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.api' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_ApiService()
    {
        $this->services['monolog.logger.api'] = $instance = new \Symfony\Bridge\Monolog\Logger('api');

        $instance->pushHandler($this->get('vod_base.monolog.database_handler'));
        $instance->pushHandler($this->get('monolog.handler.api_handler'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.content_play' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_ContentPlayService()
    {
        $this->services['monolog.logger.content_play'] = $instance = new \Symfony\Bridge\Monolog\Logger('content_play');

        $instance->pushHandler($this->get('monolog.handler.content_play_handler'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.doctrine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');

        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.event' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_EventService()
    {
        $this->services['monolog.logger.event'] = $instance = new \Symfony\Bridge\Monolog\Logger('event');

        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.infotainment' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_InfotainmentService()
    {
        $this->services['monolog.logger.infotainment'] = $instance = new \Symfony\Bridge\Monolog\Logger('infotainment');

        $instance->pushHandler($this->get('vod_base.monolog.database_handler'));
        $instance->pushHandler($this->get('monolog.handler.infotainment_handler'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.login' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_LoginService()
    {
        $this->services['monolog.logger.login'] = $instance = new \Symfony\Bridge\Monolog\Logger('login');

        $instance->pushHandler($this->get('monolog.handler.login_handler'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_PhpService()
    {
        $this->services['monolog.logger.php'] = $instance = new \Symfony\Bridge\Monolog\Logger('php');

        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_ProfilerService()
    {
        $this->services['monolog.logger.profiler'] = $instance = new \Symfony\Bridge\Monolog\Logger('profiler');

        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_RouterService()
    {
        $this->services['monolog.logger.router'] = $instance = new \Symfony\Bridge\Monolog\Logger('router');

        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_SecurityService()
    {
        $this->services['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');

        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.templating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_TemplatingService()
    {
        $this->services['monolog.logger.templating'] = $instance = new \Symfony\Bridge\Monolog\Logger('templating');

        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'monolog.logger.translation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Monolog\Logger A Symfony\Bridge\Monolog\Logger instance
     */
    protected function getMonolog_Logger_TranslationService()
    {
        $this->services['monolog.logger.translation'] = $instance = new \Symfony\Bridge\Monolog\Logger('translation');

        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));

        return $instance;
    }

    /**
     * Gets the 'movistar.provision.client' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\QubitArgentinaBundle\Services\Client\Movistar\MovistarClient A VOD\QubitArgentinaBundle\Services\Client\Movistar\MovistarClient instance
     */
    protected function getMovistar_Provision_ClientService()
    {
        $this->services['movistar.provision.client'] = $instance = new \VOD\QubitArgentinaBundle\Services\Client\Movistar\MovistarClient($this->get('ci.restclient'), $this->get('vod_base.utilities.cache'), $this->get('monolog.logger.api'));

        $instance->setOption('api_url', 'http://services.qubit.tv/index.php/v2/json');
        $instance->setOption('api_apk', '9088-697E');
        $instance->setOption('api_secret', '5fd2a7181825445eabd5edfdee1345baab942b2902c42');

        return $instance;
    }

    /**
     * Gets the 'profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\Profiler A Symfony\Component\HttpKernel\Profiler\Profiler instance
     */
    protected function getProfilerService()
    {
        $a = $this->get('monolog.logger.profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('kernel', ContainerInterface::NULL_ON_INVALID_REFERENCE);

        $c = new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector($this->get('doctrine'));
        $c->addLogger('default', $this->get('doctrine.dbal.logger.profiling.default'));

        $d = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        if ($this->has('kernel')) {
            $d->setKernel($b);
        }

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.__DIR__.'/profiler'), '', '', 86400), $a);

        $instance->add($this->get('data_collector.request'));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b, $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector());
        $instance->add($this->get('data_collector.form'));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector($this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->add($this->get('data_collector.router'));
        $instance->add($this->get('data_collector.translation'));
        $instance->add(new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector($this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.role_hierarchy'), $this->get('security.logout_url_generator')));
        $instance->add(new \Symfony\Bridge\Twig\DataCollector\TwigDataCollector($this->get('twig.profile')));
        $instance->add($c);
        $instance->add($this->get('data_collector.dump'));
        $instance->add($this->get('memcache.data_collector'));
        $instance->add($this->get('mobile_detect_bundle.device.collector'));
        $instance->add($d);

        return $instance;
    }

    /**
     * Gets the 'profiler_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ProfilerListener A Symfony\Component\HttpKernel\EventListener\ProfilerListener instance
     */
    protected function getProfilerListenerService()
    {
        return $this->services['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener($this->get('profiler'), $this->get('request_stack'), NULL, false, false);
    }

    /**
     * Gets the 'property_accessor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor A Symfony\Component\PropertyAccess\PropertyAccessor instance
     */
    protected function getPropertyAccessorService()
    {
        return $this->services['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false);
    }

    /**
     * Gets the 'request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     * @throws InactiveScopeException when the 'request' service is requested while the 'request' scope is not active
     * @deprecated The "request" service is deprecated since Symfony 2.7 and will be removed in 3.0. Use the "request_stack" service instead.
     */
    protected function getRequestService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('request', 'request');
        }

        throw new RuntimeException('You have requested a synthetic service ("request"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'request_stack' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack A Symfony\Component\HttpFoundation\RequestStack instance
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the 'response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener A Symfony\Component\HttpKernel\EventListener\ResponseListener instance
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /**
     * Gets the 'router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router A Symfony\Bundle\FrameworkBundle\Routing\Router instance
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, ($this->targetDirs[2].'/config/routing_dev.yml'), array('cache_dir' => __DIR__, 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appDevDebugProjectContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appDevDebugProjectContainerUrlMatcher', 'strict_requirements' => true), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->setConfigCacheFactory($this->get('config_cache_factory'));

        return $instance;
    }

    /**
     * Gets the 'router_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener A Symfony\Component\HttpKernel\EventListener\RouterListener instance
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener($this->get('router'), $this->get('request_stack'), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'routing.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader A Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader instance
     */
    protected function getRouting_LoaderService()
    {
        $a = $this->get('file_locator');
        $b = $this->get('annotation_reader');

        $c = new \Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader($b);

        $d = new \Symfony\Component\Config\Loader\LoaderResolver();
        $d->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\DependencyInjection\ServiceRouterLoader($this));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($a, $c));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($a, $c));
        $d->addLoader($c);

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($this->get('controller_name_converter'), $d);
    }

    /**
     * Gets the 'security.authentication.guard_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Guard\GuardAuthenticatorHandler A Symfony\Component\Security\Guard\GuardAuthenticatorHandler instance
     */
    protected function getSecurity_Authentication_GuardHandlerService()
    {
        return $this->services['security.authentication.guard_handler'] = new \Symfony\Component\Security\Guard\GuardAuthenticatorHandler($this->get('security.token_storage'), $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'security.authentication_utils' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticationUtils A Symfony\Component\Security\Http\Authentication\AuthenticationUtils instance
     */
    protected function getSecurity_AuthenticationUtilsService()
    {
        return $this->services['security.authentication_utils'] = new \Symfony\Component\Security\Http\Authentication\AuthenticationUtils($this->get('request_stack'));
    }

    /**
     * Gets the 'security.authorization_checker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker A Symfony\Component\Security\Core\Authorization\AuthorizationChecker instance
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker($this->get('security.token_storage'), $this->get('security.authentication.manager'), $this->get('security.access.decision_manager'), false);
    }

    /**
     * Gets the 'security.context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\SecurityContext A Symfony\Component\Security\Core\SecurityContext instance
     *
     * @deprecated The "security.context" service is deprecated since Symfony 2.6 and will be removed in 3.0.
     */
    protected function getSecurity_ContextService()
    {
        @trigger_error('The "security.context" service is deprecated since Symfony 2.6 and will be removed in 3.0.', E_USER_DEPRECATED);

        return $this->services['security.context'] = new \Symfony\Component\Security\Core\SecurityContext($this->get('security.token_storage'), $this->get('security.authorization_checker'));
    }

    /**
     * Gets the 'security.csrf.token_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager A Symfony\Component\Security\Csrf\CsrfTokenManager instance
     */
    protected function getSecurity_Csrf_TokenManagerService()
    {
        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator(), new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage($this->get('session')));
    }

    /**
     * Gets the 'security.encoder_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\EncoderFactory A Symfony\Component\Security\Core\Encoder\EncoderFactory instance
     */
    protected function getSecurity_EncoderFactoryService()
    {
        return $this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array('VOD\\BaseBundle\\Entity\\VodUser' => array('class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder', 'arguments' => array(0 => 'sha512', 1 => true, 2 => 5000))));
    }

    /**
     * Gets the 'security.firewall' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\Firewall A Symfony\Component\Security\Http\Firewall instance
     */
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Component\Security\Http\Firewall(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap($this, array('security.firewall.map.context.dev' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/'), 'security.firewall.map.context.main' => NULL)), $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the 'security.firewall.map.context.dev' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance
     */
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        return $this->services['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL);
    }

    /**
     * Gets the 'security.firewall.map.context.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext A Symfony\Bundle\SecurityBundle\Security\FirewallContext instance
     */
    protected function getSecurity_Firewall_Map_Context_MainService()
    {
        $a = $this->get('security.access_map');
        $b = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $c = $this->get('security.token_storage');
        $d = $this->get('vod_base.security.user.provider.vod');
        $e = $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $f = $this->get('vod_base.user_client');
        $g = $this->get('security.http_utils');
        $h = $this->get('vod_base.security.authenticator.success_handler');
        $i = $this->get('vod_base.security.authenticator.failure_handler');
        $j = $this->get('vod_base.security.authenticator.vod');
        $k = $this->get('security.authentication.manager');

        $l = new \VOD\BaseBundle\Services\Security\Http\RememberMe\VodTokenBasedRememberMeServices(array(0 => $d), 'b54784587ec311fcb85175a252321e3e8fe1991c', 'main', array('lifetime' => 604800, 'path' => '/', 'name' => 'REMEMBERME', 'domain' => NULL, 'secure' => false, 'httponly' => true, 'always_remember_me' => false, 'remember_me_parameter' => '_remember_me'), $b);
        $l->setUserClient($f);
        $l->setCookieLifeTime('2678400');

        $m = new \Symfony\Component\Security\Http\Firewall\LogoutListener($c, $g, $this->get('vod_base.security.authenticator.success_logout_listener'), array('csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => 'logout'));
        $m->addHandler(new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler());
        $m->addHandler($l);

        $n = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate');

        $o = new \Symfony\Component\Security\Http\Authentication\CustomAuthenticationSuccessHandler($h, array('login_path' => 'login', 'always_use_default_target_path' => false, 'default_target_path' => '/', 'target_path_parameter' => '_target_path', 'use_referer' => false), 'main');

        $p = new \Symfony\Component\Security\Http\Authentication\CustomAuthenticationFailureHandler($i, array('login_path' => 'login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'));

        $q = new \Symfony\Component\Security\Http\Authentication\SimpleAuthenticationHandler($j, $o, $p, $b);

        $r = new \Symfony\Component\Security\Http\Firewall\SimpleFormAuthenticationListener($c, $k, $n, $g, 'main', $q, $q, array('authenticator' => 'vod_base.security.authenticator.vod', 'check_path' => 'login_check', 'use_forward' => false, 'require_previous_session' => true, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'post_only' => true), $b, $e, NULL, $j);
        $r->setRememberMeServices($l);

        return $this->services['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => new \Symfony\Component\Security\Http\Firewall\ChannelListener($a, new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), $b), 1 => new \Symfony\Component\Security\Http\Firewall\ContextListener($c, array(0 => $d), 'main', $b, $e), 2 => $m, 3 => $r, 4 => new \Symfony\Component\Security\Http\Firewall\RememberMeListener($c, $l, $k, $b, $e, true, $n), 5 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($c, '5931b7d25c22c1.05655796', $b, $k), 6 => new \Symfony\Component\Security\Http\Firewall\AccessListener($c, $this->get('security.access.decision_manager'), $a, $k)), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($c, $this->get('security.authentication.trust_resolver'), $g, 'main', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($this->get('http_kernel'), $g, 'login', false), NULL, NULL, $b, false));
    }

    /**
     * Gets the 'security.password_encoder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder A Symfony\Component\Security\Core\Encoder\UserPasswordEncoder instance
     */
    protected function getSecurity_PasswordEncoderService()
    {
        return $this->services['security.password_encoder'] = new \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder($this->get('security.encoder_factory'));
    }

    /**
     * Gets the 'security.rememberme.response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\ResponseListener A Symfony\Component\Security\Http\RememberMe\ResponseListener instance
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }

    /**
     * Gets the 'security.secure_random' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Util\SecureRandom A Symfony\Component\Security\Core\Util\SecureRandom instance
     *
     * @deprecated The "security.secure_random" service is deprecated since Symfony 2.8 and will be removed in 3.0. Use the random_bytes() function instead.
     */
    protected function getSecurity_SecureRandomService()
    {
        @trigger_error('The "security.secure_random" service is deprecated since Symfony 2.8 and will be removed in 3.0. Use the random_bytes() function instead.', E_USER_DEPRECATED);

        return $this->services['security.secure_random'] = new \Symfony\Component\Security\Core\Util\SecureRandom();
    }

    /**
     * Gets the 'security.token_storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage A Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage instance
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /**
     * Gets the 'security.user_checker.main' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\User\UserChecker A Symfony\Component\Security\Core\User\UserChecker instance
     */
    protected function getSecurity_UserChecker_MainService()
    {
        return $this->services['security.user_checker.main'] = new \Symfony\Component\Security\Core\User\UserChecker();
    }

    /**
     * Gets the 'security.validator.user_password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator A Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator instance
     */
    protected function getSecurity_Validator_UserPasswordService()
    {
        return $this->services['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator($this->get('security.token_storage'), $this->get('security.encoder_factory'));
    }

    /**
     * Gets the 'sensio_distribution.security_checker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SensioLabs\Security\SecurityChecker A SensioLabs\Security\SecurityChecker instance
     */
    protected function getSensioDistribution_SecurityCheckerService()
    {
        return $this->services['sensio_distribution.security_checker'] = new \SensioLabs\Security\SecurityChecker();
    }

    /**
     * Gets the 'sensio_distribution.security_checker.command' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SensioLabs\Security\Command\SecurityCheckerCommand A SensioLabs\Security\Command\SecurityCheckerCommand instance
     */
    protected function getSensioDistribution_SecurityChecker_CommandService()
    {
        return $this->services['sensio_distribution.security_checker.command'] = new \SensioLabs\Security\Command\SecurityCheckerCommand($this->get('sensio_distribution.security_checker'));
    }

    /**
     * Gets the 'sensio_framework_extra.cache.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener instance
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }

    /**
     * Gets the 'sensio_framework_extra.controller.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener instance
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener($this->get('annotation_reader'));
    }

    /**
     * Gets the 'sensio_framework_extra.converter.datetime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter instance
     */
    protected function getSensioFrameworkExtra_Converter_DatetimeService()
    {
        return $this->services['sensio_framework_extra.converter.datetime'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter();
    }

    /**
     * Gets the 'sensio_framework_extra.converter.doctrine.orm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter instance
     */
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->services['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter($this->get('doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sensio_framework_extra.converter.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener instance
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($this->get('sensio_framework_extra.converter.manager'), true);
    }

    /**
     * Gets the 'sensio_framework_extra.converter.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager A Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager instance
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add($this->get('sensio_framework_extra.converter.doctrine.orm'), 0, 'doctrine.orm');
        $instance->add($this->get('sensio_framework_extra.converter.datetime'), 0, 'datetime');

        return $instance;
    }

    /**
     * Gets the 'sensio_framework_extra.security.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener instance
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->services['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(NULL, new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), $this->get('security.authentication.trust_resolver', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.role_hierarchy', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'sensio_framework_extra.view.guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser A Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser instance
     */
    protected function getSensioFrameworkExtra_View_GuesserService()
    {
        return $this->services['sensio_framework_extra.view.guesser'] = new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser($this->get('kernel'));
    }

    /**
     * Gets the 'sensio_framework_extra.view.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener A Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener instance
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this);
    }

    /**
     * Gets the 'service_container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getServiceContainerService()
    {
        throw new RuntimeException('You have requested a synthetic service ("service_container"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session A Symfony\Component\HttpFoundation\Session\Session instance
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session($this->get('session.storage.native'), new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }

    /**
     * Gets the 'session.save_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SaveSessionListener A Symfony\Component\HttpKernel\EventListener\SaveSessionListener instance
     */
    protected function getSession_SaveListenerService()
    {
        return $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener();
    }

    /**
     * Gets the 'session.storage.filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage instance
     */
    protected function getSession_Storage_FilesystemService()
    {
        return $this->services['session.storage.filesystem'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage((__DIR__.'/sessions'), 'MOCKSESSID', $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the 'session.storage.native' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage instance
     */
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage(array('cookie_httponly' => true, 'gc_probability' => 1), $this->get('memcache.session_handler'), $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the 'session.storage.php_bridge' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage A Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage instance
     */
    protected function getSession_Storage_PhpBridgeService()
    {
        return $this->services['session.storage.php_bridge'] = new \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage($this->get('memcache.session_handler'), $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the 'session_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener A Symfony\Bundle\FrameworkBundle\EventListener\SessionListener instance
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener($this);
    }

    /**
     * Gets the 'streamed_response_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener A Symfony\Component\HttpKernel\EventListener\StreamedResponseListener instance
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /**
     * Gets the 'templating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\TwigEngine A Symfony\Bundle\TwigBundle\TwigEngine instance
     */
    protected function getTemplatingService()
    {
        return $this->services['templating'] = new \Symfony\Bundle\TwigBundle\TwigEngine($this->get('twig'), $this->get('templating.name_parser'), $this->get('templating.locator'));
    }

    /**
     * Gets the 'templating.filename_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser instance
     */
    protected function getTemplating_FilenameParserService()
    {
        return $this->services['templating.filename_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser();
    }

    /**
     * Gets the 'templating.helper.assets' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper instance
     */
    protected function getTemplating_Helper_AssetsService()
    {
        return $this->services['templating.helper.assets'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper($this->get('assets.packages'), array());
    }

    /**
     * Gets the 'templating.helper.logout_url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper A Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper instance
     */
    protected function getTemplating_Helper_LogoutUrlService()
    {
        return $this->services['templating.helper.logout_url'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper($this->get('security.logout_url_generator'));
    }

    /**
     * Gets the 'templating.helper.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper A Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper instance
     */
    protected function getTemplating_Helper_RouterService()
    {
        return $this->services['templating.helper.router'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper($this->get('router'));
    }

    /**
     * Gets the 'templating.helper.security' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper A Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper instance
     */
    protected function getTemplating_Helper_SecurityService()
    {
        return $this->services['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper($this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'templating.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader A Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader instance
     */
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader($this->get('templating.locator'));
    }

    /**
     * Gets the 'templating.name_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser A Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser instance
     */
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser($this->get('kernel'));
    }

    /**
     * Gets the 'translation.dumper.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\CsvFileDumper A Symfony\Component\Translation\Dumper\CsvFileDumper instance
     */
    protected function getTranslation_Dumper_CsvService()
    {
        return $this->services['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper();
    }

    /**
     * Gets the 'translation.dumper.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\IniFileDumper A Symfony\Component\Translation\Dumper\IniFileDumper instance
     */
    protected function getTranslation_Dumper_IniService()
    {
        return $this->services['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper();
    }

    /**
     * Gets the 'translation.dumper.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\JsonFileDumper A Symfony\Component\Translation\Dumper\JsonFileDumper instance
     */
    protected function getTranslation_Dumper_JsonService()
    {
        return $this->services['translation.dumper.json'] = new \Symfony\Component\Translation\Dumper\JsonFileDumper();
    }

    /**
     * Gets the 'translation.dumper.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\MoFileDumper A Symfony\Component\Translation\Dumper\MoFileDumper instance
     */
    protected function getTranslation_Dumper_MoService()
    {
        return $this->services['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper();
    }

    /**
     * Gets the 'translation.dumper.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\PhpFileDumper A Symfony\Component\Translation\Dumper\PhpFileDumper instance
     */
    protected function getTranslation_Dumper_PhpService()
    {
        return $this->services['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper();
    }

    /**
     * Gets the 'translation.dumper.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\PoFileDumper A Symfony\Component\Translation\Dumper\PoFileDumper instance
     */
    protected function getTranslation_Dumper_PoService()
    {
        return $this->services['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper();
    }

    /**
     * Gets the 'translation.dumper.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\QtFileDumper A Symfony\Component\Translation\Dumper\QtFileDumper instance
     */
    protected function getTranslation_Dumper_QtService()
    {
        return $this->services['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper();
    }

    /**
     * Gets the 'translation.dumper.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\IcuResFileDumper A Symfony\Component\Translation\Dumper\IcuResFileDumper instance
     */
    protected function getTranslation_Dumper_ResService()
    {
        return $this->services['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper();
    }

    /**
     * Gets the 'translation.dumper.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\XliffFileDumper A Symfony\Component\Translation\Dumper\XliffFileDumper instance
     */
    protected function getTranslation_Dumper_XliffService()
    {
        return $this->services['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper();
    }

    /**
     * Gets the 'translation.dumper.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Dumper\YamlFileDumper A Symfony\Component\Translation\Dumper\YamlFileDumper instance
     */
    protected function getTranslation_Dumper_YmlService()
    {
        return $this->services['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper();
    }

    /**
     * Gets the 'translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Extractor\ChainExtractor A Symfony\Component\Translation\Extractor\ChainExtractor instance
     */
    protected function getTranslation_ExtractorService()
    {
        $this->services['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', $this->get('translation.extractor.php'));
        $instance->addExtractor('twig', $this->get('twig.translation.extractor'));

        return $instance;
    }

    /**
     * Gets the 'translation.extractor.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor A Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor instance
     */
    protected function getTranslation_Extractor_PhpService()
    {
        return $this->services['translation.extractor.php'] = new \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor();
    }

    /**
     * Gets the 'translation.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader A Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader instance
     */
    protected function getTranslation_LoaderService()
    {
        $a = $this->get('translation.loader.xliff');

        $this->services['translation.loader'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader();

        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));
        $instance->addLoader('json', $this->get('translation.loader.json'));

        return $instance;
    }

    /**
     * Gets the 'translation.loader.csv' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\CsvFileLoader A Symfony\Component\Translation\Loader\CsvFileLoader instance
     */
    protected function getTranslation_Loader_CsvService()
    {
        return $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }

    /**
     * Gets the 'translation.loader.dat' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuDatFileLoader A Symfony\Component\Translation\Loader\IcuDatFileLoader instance
     */
    protected function getTranslation_Loader_DatService()
    {
        return $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }

    /**
     * Gets the 'translation.loader.ini' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IniFileLoader A Symfony\Component\Translation\Loader\IniFileLoader instance
     */
    protected function getTranslation_Loader_IniService()
    {
        return $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }

    /**
     * Gets the 'translation.loader.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\JsonFileLoader A Symfony\Component\Translation\Loader\JsonFileLoader instance
     */
    protected function getTranslation_Loader_JsonService()
    {
        return $this->services['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
    }

    /**
     * Gets the 'translation.loader.mo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\MoFileLoader A Symfony\Component\Translation\Loader\MoFileLoader instance
     */
    protected function getTranslation_Loader_MoService()
    {
        return $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }

    /**
     * Gets the 'translation.loader.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\PhpFileLoader A Symfony\Component\Translation\Loader\PhpFileLoader instance
     */
    protected function getTranslation_Loader_PhpService()
    {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /**
     * Gets the 'translation.loader.po' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\PoFileLoader A Symfony\Component\Translation\Loader\PoFileLoader instance
     */
    protected function getTranslation_Loader_PoService()
    {
        return $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }

    /**
     * Gets the 'translation.loader.qt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\QtFileLoader A Symfony\Component\Translation\Loader\QtFileLoader instance
     */
    protected function getTranslation_Loader_QtService()
    {
        return $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }

    /**
     * Gets the 'translation.loader.res' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuResFileLoader A Symfony\Component\Translation\Loader\IcuResFileLoader instance
     */
    protected function getTranslation_Loader_ResService()
    {
        return $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /**
     * Gets the 'translation.loader.xliff' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\XliffFileLoader A Symfony\Component\Translation\Loader\XliffFileLoader instance
     */
    protected function getTranslation_Loader_XliffService()
    {
        return $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }

    /**
     * Gets the 'translation.loader.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Loader\YamlFileLoader A Symfony\Component\Translation\Loader\YamlFileLoader instance
     */
    protected function getTranslation_Loader_YmlService()
    {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /**
     * Gets the 'translation.writer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\Writer\TranslationWriter A Symfony\Component\Translation\Writer\TranslationWriter instance
     */
    protected function getTranslation_WriterService()
    {
        $this->services['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();

        $instance->addDumper('php', $this->get('translation.dumper.php'));
        $instance->addDumper('xlf', $this->get('translation.dumper.xliff'));
        $instance->addDumper('po', $this->get('translation.dumper.po'));
        $instance->addDumper('mo', $this->get('translation.dumper.mo'));
        $instance->addDumper('yml', $this->get('translation.dumper.yml'));
        $instance->addDumper('ts', $this->get('translation.dumper.qt'));
        $instance->addDumper('csv', $this->get('translation.dumper.csv'));
        $instance->addDumper('ini', $this->get('translation.dumper.ini'));
        $instance->addDumper('json', $this->get('translation.dumper.json'));
        $instance->addDumper('res', $this->get('translation.dumper.res'));

        return $instance;
    }

    /**
     * Gets the 'translator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Translation\DataCollectorTranslator A Symfony\Component\Translation\DataCollectorTranslator instance
     */
    protected function getTranslatorService()
    {
        return $this->services['translator'] = new \Symfony\Component\Translation\DataCollectorTranslator(new \Symfony\Component\Translation\LoggingTranslator($this->get('translator.default'), $this->get('monolog.logger.translation')));
    }

    /**
     * Gets the 'translator.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator A Symfony\Bundle\FrameworkBundle\Translation\Translator instance
     */
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator($this, new \Symfony\Component\Translation\MessageSelector(), array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini'), 'translation.loader.json' => array(0 => 'json')), array('cache_dir' => (__DIR__.'/translations'), 'debug' => true, 'resource_files' => array('af' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.af.xlf')), 'ar' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ar.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ar.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ar.xlf')), 'az' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.az.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.az.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.az.xlf')), 'bg' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.bg.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.bg.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.bg.xlf')), 'ca' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ca.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ca.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ca.xlf')), 'cs' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cs.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.cs.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.cs.xlf')), 'cy' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cy.xlf')), 'da' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.da.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.da.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.da.xlf')), 'de' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.de.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.de.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.de.xlf')), 'el' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.el.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.el.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.el.xlf')), 'en' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.en.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.en.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.en.xlf')), 'es' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.es.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.es.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.es.xlf')), 'et' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.et.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.et.xlf')), 'eu' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.eu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.eu.xlf')), 'fa' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fa.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fa.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.fa.xlf')), 'fi' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fi.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fi.xlf')), 'fr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.fr.xlf')), 'gl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.gl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.gl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.gl.xlf')), 'he' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.he.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.he.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.he.xlf')), 'hr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hr.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.hr.xlf')), 'hu' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hu.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hu.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.hu.xlf')), 'hy' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hy.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hy.xlf')), 'id' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.id.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.id.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.id.xlf')), 'it' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.it.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.it.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.it.xlf')), 'ja' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ja.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ja.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ja.xlf')), 'lb' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lb.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lb.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lb.xlf')), 'lt' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lt.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lt.xlf')), 'lv' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lv.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lv.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lv.xlf')), 'mn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.mn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.mn.xlf')), 'nl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.nl.xlf')), 'nn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nn.xlf')), 'no' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.no.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.no.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.no.xlf')), 'pl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pl.xlf')), 'pt' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt.xlf')), 'pt_BR' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt_BR.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt_BR.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pt_BR.xlf')), 'ro' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ro.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ro.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ro.xlf')), 'ru' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ru.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ru.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ru.xlf')), 'sk' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sk.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sk.xlf')), 'sl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sl.xlf')), 'sq' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sq.xlf')), 'sr_Cyrl' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Cyrl.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Cyrl.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sr_Cyrl.xlf')), 'sr_Latn' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Latn.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Latn.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sr_Latn.xlf')), 'sv' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sv.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sv.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sv.xlf')), 'th' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.th.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.th.xlf')), 'tr' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.tr.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.tr.xlf')), 'uk' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.uk.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.uk.xlf')), 'vi' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.vi.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.vi.xlf')), 'zh_CN' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_CN.xlf'), 1 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.zh_CN.xlf'), 2 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.zh_CN.xlf')), 'zh_TW' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_TW.xlf')), 'pt_PT' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pt_PT.xlf')), 'ua' => array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ua.xlf')), 'es_AR' => array(0 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_AR/base.es_AR.yml'), 1 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_AR/catfish.es_AR.yml'), 2 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_AR/common.es_AR.yml'), 3 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_AR/content.es_AR.yml'), 4 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_AR/forms.es_AR.yml'), 5 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_AR/helps.es_AR.yml'), 6 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_AR/landing.es_AR.yml'), 7 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_AR/modal.es_AR.yml'), 8 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_AR/payment.es_AR.yml'), 9 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_AR/registration.es_AR.yml'), 10 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_AR/security.es_AR.yml'), 11 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_AR/share.es_AR.yml'), 12 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_AR/success_subscription.es_AR.yml'), 13 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_AR/tyc.es_AR.yml'), 14 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_AR/user.es_AR.yml'), 15 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_AR/validators.es_AR.yml'), 16 => ($this->targetDirs[3].'/vendor/vod/itv-base-bundle/Resources/translations/es_AR/tyc-itv.es_AR.yml'), 17 => ($this->targetDirs[3].'/src/VOD/QubitArgentinaBundle/Resources/translations/base.es_AR.yml'), 18 => ($this->targetDirs[3].'/src/VOD/QubitArgentinaBundle/Resources/translations/common.es_AR.yml'), 19 => ($this->targetDirs[3].'/src/VOD/QubitArgentinaBundle/Resources/translations/landing.es_AR.yml'), 20 => ($this->targetDirs[3].'/src/VOD/QubitArgentinaBundle/Resources/translations/movistar.es_AR.yml'), 21 => ($this->targetDirs[3].'/src/VOD/QubitArgentinaBundle/Resources/translations/promotions.es_AR.yml')), 'es_CL' => array(0 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_CL/base.es_CL.yml'), 1 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_CL/catfish.es_CL.yml'), 2 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_CL/common.es_CL.yml'), 3 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_CL/content.es_CL.yml'), 4 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_CL/forms.es_CL.yml'), 5 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_CL/helps.es_CL.yml'), 6 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_CL/landing.es_CL.yml'), 7 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_CL/modal.es_CL.yml'), 8 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_CL/payment.es_CL.yml'), 9 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_CL/registration.es_CL.yml'), 10 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_CL/security.es_CL.yml'), 11 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_CL/share.es_CL.yml'), 12 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_CL/success_subscription.es_CL.yml'), 13 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_CL/tyc.es_CL.yml'), 14 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_CL/user.es_CL.yml'), 15 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_CL/validators.es_CL.yml')), 'es_CO' => array(0 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_CO/base.es_CO.yml'), 1 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_CO/catfish.es_CO.yml'), 2 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_CO/common.es_CO.yml'), 3 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_CO/content.es_CO.yml'), 4 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_CO/forms.es_CO.yml'), 5 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_CO/helps.es_CO.yml'), 6 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_CO/landing.es_CO.yml'), 7 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_CO/modal.es_CO.yml'), 8 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_CO/payment.es_CO.yml'), 9 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_CO/registration.es_CO.yml'), 10 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_CO/security.es_CO.yml'), 11 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_CO/share.es_CO.yml'), 12 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_CO/success_subscription.es_CO.yml'), 13 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_CO/tyc.es_CO.yml'), 14 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_CO/user.es_CO.yml'), 15 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_CO/validators.es_CO.yml')), 'es_EC' => array(0 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_EC/base.es_EC.yml'), 1 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_EC/catfish.es_EC.yml'), 2 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_EC/common.es_EC.yml'), 3 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_EC/content.es_EC.yml'), 4 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_EC/forms.es_EC.yml'), 5 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_EC/helps.es_EC.yml'), 6 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_EC/landing.es_EC.yml'), 7 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_EC/modal.es_EC.yml'), 8 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_EC/payment.es_EC.yml'), 9 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_EC/registration.es_EC.yml'), 10 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_EC/security.es_EC.yml'), 11 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_EC/share.es_EC.yml'), 12 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_EC/success_subscription.es_EC.yml'), 13 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_EC/tyc.es_EC.yml'), 14 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_EC/user.es_EC.yml'), 15 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_EC/validators.es_EC.yml')), 'es_GT' => array(0 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_GT/base.es_GT.yml'), 1 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_GT/catfish.es_GT.yml'), 2 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_GT/common.es_GT.yml'), 3 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_GT/content.es_GT.yml'), 4 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_GT/forms.es_GT.yml'), 5 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_GT/helps.es_GT.yml'), 6 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_GT/landing.es_GT.yml'), 7 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_GT/modal.es_GT.yml'), 8 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_GT/payment.es_GT.yml'), 9 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_GT/registration.es_GT.yml'), 10 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_GT/security.es_GT.yml'), 11 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_GT/share.es_GT.yml'), 12 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_GT/success_subscription.es_GT.yml'), 13 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_GT/tyc.es_GT.yml'), 14 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_GT/user.es_GT.yml'), 15 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_GT/validators.es_GT.yml')), 'es_PE' => array(0 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_PE/base.es_PE.yml'), 1 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_PE/catfish.es_PE.yml'), 2 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_PE/common.es_PE.yml'), 3 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_PE/content.es_PE.yml'), 4 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_PE/forms.es_PE.yml'), 5 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_PE/helps.es_PE.yml'), 6 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_PE/landing.es_PE.yml'), 7 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_PE/modal.es_PE.yml'), 8 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_PE/payment.es_PE.yml'), 9 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_PE/registration.es_PE.yml'), 10 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_PE/security.es_PE.yml'), 11 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_PE/share.es_PE.yml'), 12 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_PE/success_subscription.es_PE.yml'), 13 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_PE/tyc.es_PE.yml'), 14 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_PE/user.es_PE.yml'), 15 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_PE/validators.es_PE.yml')), 'es_PY' => array(0 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_PY/base.es_PY.yml'), 1 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_PY/catfish.es_PY.yml'), 2 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_PY/common.es_PY.yml'), 3 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_PY/content.es_PY.yml'), 4 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_PY/forms.es_PY.yml'), 5 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_PY/helps.es_PY.yml'), 6 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_PY/landing.es_PY.yml'), 7 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_PY/modal.es_PY.yml'), 8 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_PY/payment.es_PY.yml'), 9 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_PY/registration.es_PY.yml'), 10 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_PY/security.es_PY.yml'), 11 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_PY/share.es_PY.yml'), 12 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_PY/success_subscription.es_PY.yml'), 13 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_PY/tyc.es_PY.yml'), 14 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_PY/user.es_PY.yml'), 15 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_PY/validators.es_PY.yml')), 'es_UY' => array(0 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_UY/base.es_UY.yml'), 1 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_UY/catfish.es_UY.yml'), 2 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_UY/common.es_UY.yml'), 3 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_UY/content.es_UY.yml'), 4 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_UY/forms.es_UY.yml'), 5 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_UY/helps.es_UY.yml'), 6 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_UY/landing.es_UY.yml'), 7 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_UY/modal.es_UY.yml'), 8 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_UY/payment.es_UY.yml'), 9 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_UY/registration.es_UY.yml'), 10 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_UY/security.es_UY.yml'), 11 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_UY/share.es_UY.yml'), 12 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_UY/success_subscription.es_UY.yml'), 13 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_UY/tyc.es_UY.yml'), 14 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_UY/user.es_UY.yml'), 15 => ($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/translations/es_UY/validators.es_UY.yml')))), array());

        $instance->setConfigCacheFactory($this->get('config_cache_factory'));
        $instance->setFallbackLocales(array(0 => 'es_AR'));

        return $instance;
    }

    /**
     * Gets the 'translator_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener A Symfony\Component\HttpKernel\EventListener\TranslatorListener instance
     */
    protected function getTranslatorListenerService()
    {
        return $this->services['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener($this->get('translator'), $this->get('request_stack'));
    }

    /**
     * Gets the 'twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Environment A Twig_Environment instance
     */
    protected function getTwigService()
    {
        $a = $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('request_stack');
        $c = $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $d = $this->get('fragment.handler');

        $e = new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($b, $c);

        $f = new \Symfony\Bridge\Twig\AppVariable();
        $f->setEnvironment('dev');
        $f->setDebug(true);
        if ($this->has('security.token_storage')) {
            $f->setTokenStorage($this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->has('request_stack')) {
            $f->setRequestStack($b);
        }
        $f->setContainer($this);

        $this->services['twig'] = $instance = new \Twig_Environment($this->get('twig.loader'), array('debug' => true, 'strict_variables' => true, 'exception_controller' => 'twig.controller.exception:showAction', 'form_themes' => array(0 => 'form_div_layout.html.twig'), 'autoescape' => 'name', 'cache' => (__DIR__.'/twig'), 'charset' => 'UTF-8', 'paths' => array(), 'date' => array('format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL), 'number_format' => array('decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',')));

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension($this->get('security.logout_url_generator')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension($this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension($this->get('twig.profile'), $a));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($this->get('translator')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension($this->get('assets.packages'), $e));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\ActionsExtension($d));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(NULL, $this->targetDirs[2], 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($this->get('router')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($a, true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension($d));
        $instance->addExtension($e);
        $instance->addExtension(new \Twig_Extension_Debug());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(new \Symfony\Bridge\Twig\Form\TwigRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine(array(0 => 'BeelabRecaptcha2Bundle:form:fields.html.twig', 1 => 'form_div_layout.html.twig')), $this->get('security.csrf.token_manager', ContainerInterface::NULL_ON_INVALID_REFERENCE))));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension($this->get('mobile_detect.twig.extension'));
        $instance->addExtension(new \VOD\BaseBundle\Services\Twig\AppExtension($this->get('vod_base.utils_client')));
        $instance->addExtension($this->get('vod_base.twig_extension.text'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\DumpExtension($this->get('var_dumper.cloner')));
        $instance->addExtension(new \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension());
        $instance->addGlobal('app', $f);
        $instance->addGlobal('itv_cdn_url', '///stcloudfront.qubit.tv/assets/public/qubit/itv-version/staging');
        $instance->addGlobal('itv_version', '0.0.15');
        $instance->addGlobal('itv_debug', true);
        $instance->addGlobal('itv_country', 'AR');
        $instance->addGlobal('itv_product', 'Default-AR');
        $instance->addGlobal('gtm_currency_code', 'ARS');
        $instance->addGlobal('operator_code', 'AR');
        $instance->addGlobal('itv', false);
        $instance->addGlobal('locale', 'es_AR');
        $instance->addGlobal('bg_images', 21);
        $instance->addGlobal('facebook_application_id', 884611908321389);
        $instance->addGlobal('twitter_user', 'qubittv');
        $instance->addGlobal('google_url_shortener_api_key', 'AIzaSyC9UKPNyaL8oMyO5-o9gqgsZSwDVStSzo0');
        $instance->addGlobal('gtm_auth', 'RZoih2JXYnQ9X3WLjjB1dw');
        $instance->addGlobal('gtm_preview', 'env-121');
        $instance->addGlobal('gtm_code', 'GTM-KD28T9');
        $instance->addGlobal('google_analytics_event_parameters', array('channel' => 'canal', 'consumptions' => 'mis-alquileres', 'detail' => 'ficha-pelicula', 'featured_criteria_grid' => 'grilla', 'genre' => 'genero', 'home' => 'home', 'popover_detail' => 'mini-ficha-pelicula', 'related' => 'relacionadas', 'rental' => 'mis-alquileres', 'search' => 'busqueda', 'series' => 'series'));
        $instance->addGlobal('catfish_banner_disabled_routes', array(0 => 'promotion_and_subscription', 1 => 'landing', 2 => 'login', 3 => 'registration', 4 => 'payment_method', 5 => 'select_profile', 6 => 'user_subscription', 7 => 'content_detail', 8 => 'movie_content_detail', 9 => 'movie_content_detail_old', 10 => 'series_content_detail', 11 => 'channel_content_detail', 12 => 'episode_content_detail', 13 => 'channel', 14 => 'series_detail'));
        $instance->addGlobal('cdn_url', 'https://stcloudfront.qubit.tv/assets/public/staging/qubit/images');
        $instance->addGlobal('currency_decimals', 0);
        call_user_func(array(new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','), 'configure'), $instance);

        return $instance;
    }

    /**
     * Gets the 'twig.controller.exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\ExceptionController A Symfony\Bundle\TwigBundle\Controller\ExceptionController instance
     */
    protected function getTwig_Controller_ExceptionService()
    {
        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController($this->get('twig'), true);
    }

    /**
     * Gets the 'twig.controller.preview_error' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController A Symfony\Bundle\TwigBundle\Controller\PreviewErrorController instance
     */
    protected function getTwig_Controller_PreviewErrorService()
    {
        return $this->services['twig.controller.preview_error'] = new \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController($this->get('http_kernel'), 'twig.controller.exception:showAction');
    }

    /**
     * Gets the 'twig.exception_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ExceptionListener A Symfony\Component\HttpKernel\EventListener\ExceptionListener instance
     */
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener('twig.controller.exception:showAction', $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'twig.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader A Symfony\Bundle\TwigBundle\Loader\FilesystemLoader instance
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader($this->get('templating.locator'), $this->get('templating.name_parser'));

        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), 'Framework');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), 'Security');
        $instance->addPath(($this->targetDirs[2].'/Resources/TwigBundle/views'), 'Twig');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), 'Twig');
        $instance->addPath(($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
        $instance->addPath(($this->targetDirs[3].'/vendor/leaseweb/memcache-bundle/Lsw/MemcacheBundle/Resources/views'), 'LswMemcache');
        $instance->addPath(($this->targetDirs[2].'/Resources/BeelabRecaptcha2Bundle/views'), 'BeelabRecaptcha2');
        $instance->addPath(($this->targetDirs[3].'/vendor/beelab/recaptcha2-bundle/Resources/views'), 'BeelabRecaptcha2');
        $instance->addPath(($this->targetDirs[3].'/vendor/suncat/mobile-detect-bundle/SunCat/MobileDetectBundle/Resources/views'), 'MobileDetect');
        $instance->addPath(($this->targetDirs[3].'/src/VOD/QubitArgentinaBundle/Resources/views'), 'VODBase');
        $instance->addPath(($this->targetDirs[3].'/vendor/vod/base-bundle/Resources/views'), 'VODBase');
        $instance->addPath(($this->targetDirs[3].'/vendor/vod/itv-base-bundle/Resources/views'), 'VODItvBase');
        $instance->addPath(($this->targetDirs[3].'/src/VOD/QubitArgentinaBundle/Resources/views'), 'VODQubitArgentina');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle/Resources/views'), 'Debug');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views'), 'WebProfiler');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form'));

        return $instance;
    }

    /**
     * Gets the 'twig.profile' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Profiler_Profile A Twig_Profiler_Profile instance
     */
    protected function getTwig_ProfileService()
    {
        return $this->services['twig.profile'] = new \Twig_Profiler_Profile();
    }

    /**
     * Gets the 'twig.translation.extractor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bridge\Twig\Translation\TwigExtractor A Symfony\Bridge\Twig\Translation\TwigExtractor instance
     */
    protected function getTwig_Translation_ExtractorService()
    {
        return $this->services['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor($this->get('twig'));
    }

    /**
     * Gets the 'uri_signer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\UriSigner A Symfony\Component\HttpKernel\UriSigner instance
     */
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('b54784587ec311fcb85175a252321e3e8fe1991c');
    }

    /**
     * Gets the 'validate_request_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener A Symfony\Component\HttpKernel\EventListener\ValidateRequestListener instance
     */
    protected function getValidateRequestListenerService()
    {
        return $this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener();
    }

    /**
     * Gets the 'validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Validator\ValidatorInterface A Symfony\Component\Validator\Validator\ValidatorInterface instance
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = $this->get('validator.builder')->getValidator();
    }

    /**
     * Gets the 'validator.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilderInterface A Symfony\Component\Validator\ValidatorBuilderInterface instance
     */
    protected function getValidator_BuilderService()
    {
        $this->services['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(new \Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory($this, array('validator.expression' => 'validator.expression', 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => 'validator.expression', 'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => 'validator.email', 'security.validator.user_password' => 'security.validator.user_password', 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => 'security.validator.user_password', 'doctrine.orm.validator.unique' => 'doctrine.orm.validator.unique', 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => 'doctrine.orm.validator.unique', 'recaptcha2' => 'beelab_recaptcha2.validator', 'Beelab\\Recaptcha2Bundle\\Validator\\Constraints\\Recaptcha2Validator' => 'beelab_recaptcha2.validator', 'coupon_validator' => 'vod_base.validator.coupon_validator', 'VOD\\BaseBundle\\Services\\Validator\\Constraints\\ConstraintsCouponValidator' => 'vod_base.validator.coupon_validator', 'password_validator' => 'vod_base.validator.password_validator', 'VOD\\BaseBundle\\Services\\Validator\\Constraints\\ConstraintsPasswordValidator' => 'vod_base.validator.password_validator', 'username_validator' => 'vod_base.validator.username_validator', 'VOD\\BaseBundle\\Services\\Validator\\Constraints\\ConstraintsUsernameValidator' => 'vod_base.validator.username_validator', 'change_username_validator' => 'vod_base.validator.change_username_validator', 'VOD\\BaseBundle\\Services\\Validator\\Constraints\\ConstraintsChangeUsernameValidator' => 'vod_base.validator.change_username_validator', 'parental_password_validator' => 'vod_base.validator.parental_password_validator', 'VOD\\BaseBundle\\Services\\Validator\\Constraints\\ConstraintsParentalPasswordValidator' => 'vod_base.validator.parental_password_validator', 'profile_name_validator' => 'vod_base.validator.profile_name_validator', 'VOD\\BaseBundle\\Services\\Validator\\Constraints\\ConstraintsProfileNameValidator' => 'vod_base.validator.profile_name_validator')));
        $instance->setTranslator($this->get('translator'));
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings(array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml')));
        $instance->enableAnnotationMapping($this->get('annotation_reader'));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers(array(0 => $this->get('doctrine.orm.validator_initializer')));

        return $instance;
    }

    /**
     * Gets the 'validator.email' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Constraints\EmailValidator A Symfony\Component\Validator\Constraints\EmailValidator instance
     */
    protected function getValidator_EmailService()
    {
        return $this->services['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator(false);
    }

    /**
     * Gets the 'validator.expression' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Validator\Constraints\ExpressionValidator A Symfony\Component\Validator\Constraints\ExpressionValidator instance
     */
    protected function getValidator_ExpressionService()
    {
        return $this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator($this->get('property_accessor'));
    }

    /**
     * Gets the 'var_dumper.cli_dumper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\VarDumper\Dumper\CliDumper A Symfony\Component\VarDumper\Dumper\CliDumper instance
     */
    protected function getVarDumper_CliDumperService()
    {
        return $this->services['var_dumper.cli_dumper'] = new \Symfony\Component\VarDumper\Dumper\CliDumper(NULL, 'UTF-8');
    }

    /**
     * Gets the 'var_dumper.cloner' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\VarDumper\Cloner\VarCloner A Symfony\Component\VarDumper\Cloner\VarCloner instance
     */
    protected function getVarDumper_ClonerService()
    {
        $this->services['var_dumper.cloner'] = $instance = new \Symfony\Component\VarDumper\Cloner\VarCloner();

        $instance->setMaxItems(2500);
        $instance->setMaxString(-1);

        return $instance;
    }

    /**
     * Gets the 'vod_base.ajax_client' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Services\Client\Utils\AjaxClient A VOD\BaseBundle\Services\Client\Utils\AjaxClient instance
     */
    protected function getVodBase_AjaxClientService()
    {
        $this->services['vod_base.ajax_client'] = $instance = new \VOD\BaseBundle\Services\Client\Utils\AjaxClient($this->get('ci.restclient'), $this->get('vod_base.utilities.cache'), $this->get('monolog.logger.api'));

        $instance->setOption('api_url', 'http://services.qubit.tv/index.php/v2/json');
        $instance->setOption('api_apk', '9088-697E');
        $instance->setOption('api_secret', '5fd2a7181825445eabd5edfdee1345baab942b2902c42');
        $instance->setTrackingCode($this->get('vod_base.log.tracking_code'));

        return $instance;
    }

    /**
     * Gets the 'vod_base.application.router.last_route_event_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\EventListener\LastRouteListener A VOD\BaseBundle\EventListener\LastRouteListener instance
     */
    protected function getVodBase_Application_Router_LastRouteEventListenerService()
    {
        return $this->services['vod_base.application.router.last_route_event_listener'] = new \VOD\BaseBundle\EventListener\LastRouteListener();
    }

    /**
     * Gets the 'vod_base.application.router.route_event_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\EventListener\RouteListener A VOD\BaseBundle\EventListener\RouteListener instance
     */
    protected function getVodBase_Application_Router_RouteEventListenerService()
    {
        return $this->services['vod_base.application.router.route_event_listener'] = new \VOD\BaseBundle\EventListener\RouteListener($this->get('history_routes'), $this->get('kernel'));
    }

    /**
     * Gets the 'vod_base.application.router.switch_login_register_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\EventListener\SwitchLoginRegistrationListener A VOD\BaseBundle\EventListener\SwitchLoginRegistrationListener instance
     */
    protected function getVodBase_Application_Router_SwitchLoginRegisterListenerService()
    {
        return $this->services['vod_base.application.router.switch_login_register_listener'] = new \VOD\BaseBundle\EventListener\SwitchLoginRegistrationListener($this->get('session'), $this->get('kernel'), $this->get('router'));
    }

    /**
     * Gets the 'vod_base.application.user.active_profile_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\EventListener\ActiveProfileListener A VOD\BaseBundle\EventListener\ActiveProfileListener instance
     */
    protected function getVodBase_Application_User_ActiveProfileListenerService()
    {
        $this->services['vod_base.application.user.active_profile_listener'] = $instance = new \VOD\BaseBundle\EventListener\ActiveProfileListener($this->get('router'), $this->get('history_routes'), '86400', array(0 => 'select_profile', 1 => 'switch_profile', 2 => 'logout', 3 => 'user_profile_edit', 4 => 'user_profile_new', 5 => 'operation_result', 6 => 'payment_method', 7 => 'user_activate_subscription', 8 => 'user_activate_payment_method', 9 => 'operation_status', 10 => 'infotainment_callback', 11 => 'registration', 12 => 'landing', 13 => 'login_check', 14 => 'promotion_and_subscription'));

        $instance->setUser($this->get('security.token_storage'));

        return $instance;
    }

    /**
     * Gets the 'vod_base.can_play' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\EventListener\CanPlayModalListener A VOD\BaseBundle\EventListener\CanPlayModalListener instance
     *
     * @throws InactiveScopeException when the 'vod_base.can_play' service is requested while the 'request' scope is not active
     */
    protected function getVodBase_CanPlayService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('vod_base.can_play', 'request');
        }

        return $this->services['vod_base.can_play'] = $this->scopedServices['request']['vod_base.can_play'] = new \VOD\BaseBundle\EventListener\CanPlayModalListener($this->get('twig'), $this->get('security.token_storage'), $this->get('session'));
    }

    /**
     * Gets the 'vod_base.commercial_client' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Services\Client\Commercial\CommercialClient A VOD\BaseBundle\Services\Client\Commercial\CommercialClient instance
     */
    protected function getVodBase_CommercialClientService()
    {
        $this->services['vod_base.commercial_client'] = $instance = new \VOD\BaseBundle\Services\Client\Commercial\CommercialClient($this->get('ci.restclient'), $this->get('vod_base.utilities.cache'), $this->get('monolog.logger.api'));

        $instance->setOption('api_url', 'http://services.qubit.tv/index.php/v2/json');
        $instance->setOption('api_apk', '9088-697E');
        $instance->setOption('api_secret', '5fd2a7181825445eabd5edfdee1345baab942b2902c42');
        $instance->setTrackingCode($this->get('vod_base.log.tracking_code'));

        return $instance;
    }

    /**
     * Gets the 'vod_base.content_client' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Services\Client\Content\ContentClient A VOD\BaseBundle\Services\Client\Content\ContentClient instance
     */
    protected function getVodBase_ContentClientService()
    {
        $this->services['vod_base.content_client'] = $instance = new \VOD\BaseBundle\Services\Client\Content\ContentClient($this->get('ci.restclient'), $this->get('vod_base.utilities.cache'), $this->get('monolog.logger.api'));

        $instance->setOption('api_url', 'http://services.qubit.tv/index.php/v2/json');
        $instance->setOption('api_apk', '9088-697E');
        $instance->setOption('api_secret', '5fd2a7181825445eabd5edfdee1345baab942b2902c42');
        $instance->setTrackingCode($this->get('vod_base.log.tracking_code'));
        $instance->setUserClient($this->get('vod_base.user_client'));
        $instance->set7puentes(true);

        return $instance;
    }

    /**
     * Gets the 'vod_base.content_service' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Services\Content\ContentService A VOD\BaseBundle\Services\Content\ContentService instance
     */
    protected function getVodBase_ContentServiceService()
    {
        return $this->services['vod_base.content_service'] = new \VOD\BaseBundle\Services\Content\ContentService($this->get('vod_base.content_client'), $this->get('security.token_storage'), $this->get('vod_base.utilities.user'));
    }

    /**
     * Gets the 'vod_base.coupon.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\EventSubscriber\CouponSubscriber A VOD\BaseBundle\EventSubscriber\CouponSubscriber instance
     */
    protected function getVodBase_Coupon_ListenerService()
    {
        return $this->services['vod_base.coupon.listener'] = new \VOD\BaseBundle\EventSubscriber\CouponSubscriber($this->get('vod_base.user_client'), $this->get('security.token_storage'));
    }

    /**
     * Gets the 'vod_base.directors_client' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Services\Client\Content\DirectorsClient A VOD\BaseBundle\Services\Client\Content\DirectorsClient instance
     */
    protected function getVodBase_DirectorsClientService()
    {
        $this->services['vod_base.directors_client'] = $instance = new \VOD\BaseBundle\Services\Client\Content\DirectorsClient($this->get('ci.restclient'), $this->get('vod_base.utilities.cache'), $this->get('monolog.logger.api'));

        $instance->setOption('api_url', 'http://services.qubit.tv/index.php/v2/json');
        $instance->setOption('api_apk', '9088-697E');
        $instance->setOption('api_secret', '5fd2a7181825445eabd5edfdee1345baab942b2902c42');
        $instance->setTrackingCode($this->get('vod_base.log.tracking_code'));

        return $instance;
    }

    /**
     * Gets the 'vod_base.event_subscriber.active_profile' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\EventSubscriber\ActiveProfileSubscriber A VOD\BaseBundle\EventSubscriber\ActiveProfileSubscriber instance
     */
    protected function getVodBase_EventSubscriber_ActiveProfileService()
    {
        return $this->services['vod_base.event_subscriber.active_profile'] = new \VOD\BaseBundle\EventSubscriber\ActiveProfileSubscriber($this->get('security.token_storage'), $this->get('router'));
    }

    /**
     * Gets the 'vod_base.form.payment' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\QubitArgentinaBundle\Form\Type\PaymentType A VOD\QubitArgentinaBundle\Form\Type\PaymentType instance
     */
    protected function getVodBase_Form_PaymentService()
    {
        return $this->services['vod_base.form.payment'] = new \VOD\QubitArgentinaBundle\Form\Type\PaymentType($this->get('translator'), $this->get('vod_base.utils_client'), $this->get('security.token_storage'), $this->get('vod_base.user_client'));
    }

    /**
     * Gets the 'vod_base.form.payment_global_collect' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Services\Payment\Gateway\GlobalCollect\Form\Type\GlobalCollectType A VOD\BaseBundle\Services\Payment\Gateway\GlobalCollect\Form\Type\GlobalCollectType instance
     */
    protected function getVodBase_Form_PaymentGlobalCollectService()
    {
        return $this->services['vod_base.form.payment_global_collect'] = new \VOD\BaseBundle\Services\Payment\Gateway\GlobalCollect\Form\Type\GlobalCollectType($this->get('translator'), $this->get('vod_base.utils_client'));
    }

    /**
     * Gets the 'vod_base.form.payment_movistar' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Services\Payment\Gateway\Movistar\Form\Type\MovistarType A VOD\BaseBundle\Services\Payment\Gateway\Movistar\Form\Type\MovistarType instance
     */
    protected function getVodBase_Form_PaymentMovistarService()
    {
        return $this->services['vod_base.form.payment_movistar'] = new \VOD\BaseBundle\Services\Payment\Gateway\Movistar\Form\Type\MovistarType($this->get('translator'), $this->get('vod_base.utils_client'));
    }

    /**
     * Gets the 'vod_base.form.payment_stripe' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Services\Payment\Gateway\Stripe\Form\Type\StripeType A VOD\BaseBundle\Services\Payment\Gateway\Stripe\Form\Type\StripeType instance
     */
    protected function getVodBase_Form_PaymentStripeService()
    {
        return $this->services['vod_base.form.payment_stripe'] = new \VOD\BaseBundle\Services\Payment\Gateway\Stripe\Form\Type\StripeType($this->get('translator'));
    }

    /**
     * Gets the 'vod_base.form.type.add_coupon' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Form\Type\AddCouponType A VOD\BaseBundle\Form\Type\AddCouponType instance
     */
    protected function getVodBase_Form_Type_AddCouponService()
    {
        return $this->services['vod_base.form.type.add_coupon'] = new \VOD\BaseBundle\Form\Type\AddCouponType($this->get('translator'), $this->get('router'), array('min' => 6, 'max' => 50));
    }

    /**
     * Gets the 'vod_base.form.type.change_name' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Form\Type\ChangeNameType A VOD\BaseBundle\Form\Type\ChangeNameType instance
     */
    protected function getVodBase_Form_Type_ChangeNameService()
    {
        return $this->services['vod_base.form.type.change_name'] = new \VOD\BaseBundle\Form\Type\ChangeNameType($this->get('translator'));
    }

    /**
     * Gets the 'vod_base.form.type.change_password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Form\Type\ChangePasswordType A VOD\BaseBundle\Form\Type\ChangePasswordType instance
     */
    protected function getVodBase_Form_Type_ChangePasswordService()
    {
        return $this->services['vod_base.form.type.change_password'] = new \VOD\BaseBundle\Form\Type\ChangePasswordType($this->get('translator'), $this->get('router'), array('min' => 6, 'max' => 20));
    }

    /**
     * Gets the 'vod_base.form.type.change_product' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Form\Type\ChangeProductType A VOD\BaseBundle\Form\Type\ChangeProductType instance
     */
    protected function getVodBase_Form_Type_ChangeProductService()
    {
        return $this->services['vod_base.form.type.change_product'] = new \VOD\BaseBundle\Form\Type\ChangeProductType($this->get('vod_base.utils_client'), $this->get('security.token_storage'));
    }

    /**
     * Gets the 'vod_base.form.type.contact' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Form\Type\ContactType A VOD\BaseBundle\Form\Type\ContactType instance
     */
    protected function getVodBase_Form_Type_ContactService()
    {
        return $this->services['vod_base.form.type.contact'] = new \VOD\BaseBundle\Form\Type\ContactType($this->get('translator'), $this->get('security.token_storage'));
    }

    /**
     * Gets the 'vod_base.form.type.edit_profile' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Form\Type\ProfileCrudType A VOD\BaseBundle\Form\Type\ProfileCrudType instance
     */
    protected function getVodBase_Form_Type_EditProfileService()
    {
        return $this->services['vod_base.form.type.edit_profile'] = new \VOD\BaseBundle\Form\Type\ProfileCrudType($this->get('vod_base.utils_client'), $this->get('translator'), array('min' => 4, 'max' => 30));
    }

    /**
     * Gets the 'vod_base.form.type.generate_new_password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Form\Type\GenerateNewPasswordType A VOD\BaseBundle\Form\Type\GenerateNewPasswordType instance
     */
    protected function getVodBase_Form_Type_GenerateNewPasswordService()
    {
        return $this->services['vod_base.form.type.generate_new_password'] = new \VOD\BaseBundle\Form\Type\GenerateNewPasswordType($this->get('translator'), array('min' => 6, 'max' => 20));
    }

    /**
     * Gets the 'vod_base.form.type.parental_control' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Form\Type\ParentalControlType A VOD\BaseBundle\Form\Type\ParentalControlType instance
     */
    protected function getVodBase_Form_Type_ParentalControlService()
    {
        return $this->services['vod_base.form.type.parental_control'] = new \VOD\BaseBundle\Form\Type\ParentalControlType($this->get('vod_base.utils_client'), $this->get('translator'), $this->get('router'), array('min' => 4, 'max' => 10));
    }

    /**
     * Gets the 'vod_base.form.type.pin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Form\Type\PinType A VOD\BaseBundle\Form\Type\PinType instance
     */
    protected function getVodBase_Form_Type_PinService()
    {
        return $this->services['vod_base.form.type.pin'] = new \VOD\BaseBundle\Form\Type\PinType($this->get('translator'), $this->get('templating'), $this->get('router'), array('min' => 4, 'max' => 10));
    }

    /**
     * Gets the 'vod_base.form.type.promotion' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Form\Type\PromotionType A VOD\BaseBundle\Form\Type\PromotionType instance
     */
    protected function getVodBase_Form_Type_PromotionService()
    {
        return $this->services['vod_base.form.type.promotion'] = new \VOD\BaseBundle\Form\Type\PromotionType($this->get('translator'), array('min' => 6, 'max' => 20));
    }

    /**
     * Gets the 'vod_base.form.type.registration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Form\Type\RegistrationType A VOD\BaseBundle\Form\Type\RegistrationType instance
     */
    protected function getVodBase_Form_Type_RegistrationService()
    {
        return $this->services['vod_base.form.type.registration'] = new \VOD\BaseBundle\Form\Type\RegistrationType($this->get('translator'), $this->get('templating'), $this->get('router'), array('min' => 6, 'max' => 20), array('min' => 6, 'max' => 50));
    }

    /**
     * Gets the 'vod_base.form.type.subscription.movistar' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Form\Type\SubscriptionMovistarType A VOD\BaseBundle\Form\Type\SubscriptionMovistarType instance
     */
    protected function getVodBase_Form_Type_Subscription_MovistarService()
    {
        return $this->services['vod_base.form.type.subscription.movistar'] = new \VOD\BaseBundle\Form\Type\SubscriptionMovistarType($this->get('translator'), $this->get('templating'), $this->get('router'), array('min' => 6, 'max' => 20), array('min' => 6, 'max' => 50));
    }

    /**
     * Gets the 'vod_base.form.type.username' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Form\Type\ChangeUsernameType A VOD\BaseBundle\Form\Type\ChangeUsernameType instance
     */
    protected function getVodBase_Form_Type_UsernameService()
    {
        return $this->services['vod_base.form.type.username'] = new \VOD\BaseBundle\Form\Type\ChangeUsernameType($this->get('translator'), $this->get('router'), $this->get('templating'));
    }

    /**
     * Gets the 'vod_base.geoip_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\EventListener\GeoIpListener A VOD\BaseBundle\EventListener\GeoIpListener instance
     *
     * @throws InactiveScopeException when the 'vod_base.geoip_listener' service is requested while the 'request' scope is not active
     */
    protected function getVodBase_GeoipListenerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('vod_base.geoip_listener', 'request');
        }

        return $this->services['vod_base.geoip_listener'] = $this->scopedServices['request']['vod_base.geoip_listener'] = new \VOD\BaseBundle\EventListener\GeoIpListener($this->get('twig'), $this->get('security.token_storage'));
    }

    /**
     * Gets the 'vod_base.mobile_detect.mobile_detector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Services\Utils\MobileDetector A VOD\BaseBundle\Services\Utils\MobileDetector instance
     */
    protected function getVodBase_MobileDetect_MobileDetectorService()
    {
        return $this->services['vod_base.mobile_detect.mobile_detector'] = new \VOD\BaseBundle\Services\Utils\MobileDetector();
    }

    /**
     * Gets the 'vod_base.monolog.database_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Services\Monolog\DataBaseHandler A VOD\BaseBundle\Services\Monolog\DataBaseHandler instance
     */
    protected function getVodBase_Monolog_DatabaseHandlerService()
    {
        return $this->services['vod_base.monolog.database_handler'] = new \VOD\BaseBundle\Services\Monolog\DataBaseHandler($this->get('doctrine'), 200);
    }

    /**
     * Gets the 'vod_base.monolog.infotainment_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Services\Monolog\DataBaseHandler A VOD\BaseBundle\Services\Monolog\DataBaseHandler instance
     */
    protected function getVodBase_Monolog_InfotainmentHandlerService()
    {
        return $this->services['vod_base.monolog.infotainment_handler'] = new \VOD\BaseBundle\Services\Monolog\DataBaseHandler($this->get('doctrine'), 200);
    }

    /**
     * Gets the 'vod_base.payment' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\QubitArgentinaBundle\Services\Payment\PaymentService A VOD\QubitArgentinaBundle\Services\Payment\PaymentService instance
     *
     * @throws InactiveScopeException when the 'vod_base.payment' service is requested while the 'request' scope is not active
     */
    protected function getVodBase_PaymentService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('vod_base.payment', 'request');
        }

        $this->services['vod_base.payment'] = $this->scopedServices['request']['vod_base.payment'] = $instance = new \VOD\QubitArgentinaBundle\Services\Payment\PaymentService($this->get('form.factory'), $this->get('security.token_storage'), $this->get('session'));

        $instance->addGateway($this->get('vod_base.payment.gateway.global_collect'), array('merchant_id' => 552, 'api_key_id' => 'c41676f48d535981', 'secret_api_key' => 'vltapAi22TsacRI3Eo3+RBaOEmfmIILRtWw9C459A78=', 'base_url' => 'https://api.globalcollect.com/', 'countryCode' => 'AR', 'currencyCode' => 'ARS', 'environment' => 'PROD', 'invalid_bin_cards' => '', 'country_code_enabled' => 'AR,CO,EC,GT,UY,PY,CL,US,99'));
        $instance->addGateway($this->get('vod_base.payment.gateway.movistar'), array('id_service' => 116242, 'id_service_try' => 116243, 'user' => 'qubitapi', 'pass' => 'q41ACz_'));

        return $instance;
    }

    /**
     * Gets the 'vod_base.payment.gateway.global_collect' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Services\Payment\Gateway\GlobalCollect\GlobalCollect A VOD\BaseBundle\Services\Payment\Gateway\GlobalCollect\GlobalCollect instance
     *
     * @throws InactiveScopeException when the 'vod_base.payment.gateway.global_collect' service is requested while the 'request' scope is not active
     */
    protected function getVodBase_Payment_Gateway_GlobalCollectService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('vod_base.payment.gateway.global_collect', 'request');
        }

        return $this->services['vod_base.payment.gateway.global_collect'] = $this->scopedServices['request']['vod_base.payment.gateway.global_collect'] = new \VOD\BaseBundle\Services\Payment\Gateway\GlobalCollect\GlobalCollect($this->get('security.token_storage'), $this->get('session'), $this->get('vod_base.payment_client'), $this->get('vod_base.utils_client'), $this->get('vod_base.user_client'), $this->get('request'));
    }

    /**
     * Gets the 'vod_base.payment.gateway.movistar' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Services\Payment\Gateway\Movistar\Movistar A VOD\BaseBundle\Services\Payment\Gateway\Movistar\Movistar instance
     *
     * @throws InactiveScopeException when the 'vod_base.payment.gateway.movistar' service is requested while the 'request' scope is not active
     */
    protected function getVodBase_Payment_Gateway_MovistarService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('vod_base.payment.gateway.movistar', 'request');
        }

        return $this->services['vod_base.payment.gateway.movistar'] = $this->scopedServices['request']['vod_base.payment.gateway.movistar'] = new \VOD\BaseBundle\Services\Payment\Gateway\Movistar\Movistar($this->get('security.token_storage'), $this->get('session'), $this->get('vod_base.payment_client'), $this->get('vod_base.utils_client'), $this->get('vod_base.user_client'), $this->get('request'));
    }

    /**
     * Gets the 'vod_base.payment.gateway.stripe' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Services\Payment\Gateway\Stripe\Stripe A VOD\BaseBundle\Services\Payment\Gateway\Stripe\Stripe instance
     */
    protected function getVodBase_Payment_Gateway_StripeService()
    {
        return $this->services['vod_base.payment.gateway.stripe'] = new \VOD\BaseBundle\Services\Payment\Gateway\Stripe\Stripe($this->get('vod_base.payment_client'), $this->get('security.token_storage'));
    }

    /**
     * Gets the 'vod_base.payment.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\EventSubscriber\PaymentSubscriber A VOD\BaseBundle\EventSubscriber\PaymentSubscriber instance
     */
    protected function getVodBase_Payment_ListenerService()
    {
        return $this->services['vod_base.payment.listener'] = new \VOD\BaseBundle\EventSubscriber\PaymentSubscriber($this->get('vod_base.user_client'), $this->get('security.token_storage'));
    }

    /**
     * Gets the 'vod_base.payment_client' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Services\Client\Payment\PaymentClient A VOD\BaseBundle\Services\Client\Payment\PaymentClient instance
     */
    protected function getVodBase_PaymentClientService()
    {
        $this->services['vod_base.payment_client'] = $instance = new \VOD\BaseBundle\Services\Client\Payment\PaymentClient($this->get('ci.restclient'), $this->get('vod_base.utilities.cache'), $this->get('monolog.logger.api'));

        $instance->setOption('api_url', 'http://services.qubit.tv/index.php/v2/json');
        $instance->setOption('api_apk', '9088-697E');
        $instance->setOption('api_secret', '5fd2a7181825445eabd5edfdee1345baab942b2902c42');
        $instance->setTrackingCode($this->get('vod_base.log.tracking_code'));
        $instance->setDispatcher($this->get('debug.event_dispatcher'));

        return $instance;
    }

    /**
     * Gets the 'vod_base.promotion_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Services\Promotion\PromotionHandler A VOD\BaseBundle\Services\Promotion\PromotionHandler instance
     */
    protected function getVodBase_PromotionHandlerService()
    {
        return $this->services['vod_base.promotion_handler'] = new \VOD\BaseBundle\Services\Promotion\PromotionHandler($this->get('vod_base.user_client'));
    }

    /**
     * Gets the 'vod_base.recommender_play.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\EventSubscriber\RecommenderSubscriber A VOD\BaseBundle\EventSubscriber\RecommenderSubscriber instance
     */
    protected function getVodBase_RecommenderPlay_ListenerService()
    {
        return $this->services['vod_base.recommender_play.listener'] = new \VOD\BaseBundle\EventSubscriber\RecommenderSubscriber($this->get('security.token_storage'), $this->get('vod_base.utils_client'), $this->get('vod_base.utilities.cache'));
    }

    /**
     * Gets the 'vod_base.recommender_visit.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\EventSubscriber\RecommenderSubscriber A VOD\BaseBundle\EventSubscriber\RecommenderSubscriber instance
     */
    protected function getVodBase_RecommenderVisit_ListenerService()
    {
        return $this->services['vod_base.recommender_visit.listener'] = new \VOD\BaseBundle\EventSubscriber\RecommenderSubscriber($this->get('security.token_storage'), $this->get('vod_base.utils_client'), $this->get('vod_base.utilities.cache'));
    }

    /**
     * Gets the 'vod_base.satisfaction' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Services\Satisfaction\Satisfaction A VOD\BaseBundle\Services\Satisfaction\Satisfaction instance
     */
    protected function getVodBase_SatisfactionService()
    {
        return $this->services['vod_base.satisfaction'] = new \VOD\BaseBundle\Services\Satisfaction\Satisfaction($this->get('vod_base.content_client'), $this->get('monolog.logger.activity'));
    }

    /**
     * Gets the 'vod_base.satisfaction_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\EventListener\SatisfactionListener A VOD\BaseBundle\EventListener\SatisfactionListener instance
     *
     * @throws InactiveScopeException when the 'vod_base.satisfaction_listener' service is requested while the 'request' scope is not active
     */
    protected function getVodBase_SatisfactionListenerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('vod_base.satisfaction_listener', 'request');
        }

        return $this->services['vod_base.satisfaction_listener'] = $this->scopedServices['request']['vod_base.satisfaction_listener'] = new \VOD\BaseBundle\EventListener\SatisfactionListener($this->get('twig'), $this->get('vod_base.satisfaction'), $this->get('vod_base.utilities.cache'), $this->get('security.token_storage'));
    }

    /**
     * Gets the 'vod_base.search_client' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Services\Client\Search\SearchClient A VOD\BaseBundle\Services\Client\Search\SearchClient instance
     */
    protected function getVodBase_SearchClientService()
    {
        $this->services['vod_base.search_client'] = $instance = new \VOD\BaseBundle\Services\Client\Search\SearchClient($this->get('ci.restclient'), $this->get('vod_base.utilities.cache'), $this->get('monolog.logger.api'));

        $instance->setOption('api_url', 'http://services.qubit.tv/index.php/v2/json');
        $instance->setOption('api_apk', '9088-697E');
        $instance->setOption('api_secret', '5fd2a7181825445eabd5edfdee1345baab942b2902c42');
        $instance->setTrackingCode($this->get('vod_base.log.tracking_code'));

        return $instance;
    }

    /**
     * Gets the 'vod_base.security.authenticatewithmsisdn' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Services\Security\AuthenticateWithMsisdn A VOD\BaseBundle\Services\Security\AuthenticateWithMsisdn instance
     */
    protected function getVodBase_Security_AuthenticatewithmsisdnService()
    {
        return $this->services['vod_base.security.authenticatewithmsisdn'] = new \VOD\BaseBundle\Services\Security\AuthenticateWithMsisdn();
    }

    /**
     * Gets the 'vod_base.security.authenticator.api' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Security\ApiAuthenticator A VOD\BaseBundle\Security\ApiAuthenticator instance
     */
    protected function getVodBase_Security_Authenticator_ApiService()
    {
        return $this->services['vod_base.security.authenticator.api'] = new \VOD\BaseBundle\Security\ApiAuthenticator($this->get('vod_base.user_client'), $this->get('router'), $this->get('monolog.logger.login'));
    }

    /**
     * Gets the 'vod_base.security.authenticator.failure_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Services\Security\Http\Authentication\VodAuthenticationFailureHandler A VOD\BaseBundle\Services\Security\Http\Authentication\VodAuthenticationFailureHandler instance
     */
    protected function getVodBase_Security_Authenticator_FailureHandlerService()
    {
        return $this->services['vod_base.security.authenticator.failure_handler'] = new \VOD\BaseBundle\Services\Security\Http\Authentication\VodAuthenticationFailureHandler($this->get('http_kernel'), $this->get('security.http_utils'), $this->get('memcache.default'), $this->get('monolog.logger.security'), array('attempts' => 15, 'ttl' => 300));
    }

    /**
     * Gets the 'vod_base.security.authenticator.success_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Services\Security\Http\Authentication\VodAuthenticationSuccessHandler A VOD\BaseBundle\Services\Security\Http\Authentication\VodAuthenticationSuccessHandler instance
     */
    protected function getVodBase_Security_Authenticator_SuccessHandlerService()
    {
        return $this->services['vod_base.security.authenticator.success_handler'] = new \VOD\BaseBundle\Services\Security\Http\Authentication\VodAuthenticationSuccessHandler($this->get('security.http_utils'), $this->get('vod_base.utilities.utils'), $this->get('memcache.default'), $this->get('security.token_storage'), $this->get('monolog.logger.security'), array('attempts' => 15, 'ttl' => 300));
    }

    /**
     * Gets the 'vod_base.security.authenticator.success_logout_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\EventListener\SuccessLogoutListener A VOD\BaseBundle\EventListener\SuccessLogoutListener instance
     */
    protected function getVodBase_Security_Authenticator_SuccessLogoutListenerService()
    {
        return $this->services['vod_base.security.authenticator.success_logout_listener'] = new \VOD\BaseBundle\EventListener\SuccessLogoutListener($this->get('router'), 'homepage');
    }

    /**
     * Gets the 'vod_base.security.authenticator.vod' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Services\Security\VodApiAuthenticator A VOD\BaseBundle\Services\Security\VodApiAuthenticator instance
     */
    protected function getVodBase_Security_Authenticator_VodService()
    {
        return $this->services['vod_base.security.authenticator.vod'] = new \VOD\BaseBundle\Services\Security\VodApiAuthenticator($this->get('vod_base.user_client'), $this->get('memcache.default'), array('attempts' => 15, 'ttl' => 300));
    }

    /**
     * Gets the 'vod_base.subscriber.tracking_code_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\EventSubscriber\TrackingCodeSubscriber A VOD\BaseBundle\EventSubscriber\TrackingCodeSubscriber instance
     */
    protected function getVodBase_Subscriber_TrackingCodeSubscriberService()
    {
        return $this->services['vod_base.subscriber.tracking_code_subscriber'] = new \VOD\BaseBundle\EventSubscriber\TrackingCodeSubscriber($this->get('vod_base.log.tracking_code'));
    }

    /**
     * Gets the 'vod_base.twig_extension.text' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Extensions_Extension_Text A Twig_Extensions_Extension_Text instance
     */
    protected function getVodBase_TwigExtension_TextService()
    {
        return $this->services['vod_base.twig_extension.text'] = new \Twig_Extensions_Extension_Text();
    }

    /**
     * Gets the 'vod_base.user.listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\EventSubscriber\UserSubscriber A VOD\BaseBundle\EventSubscriber\UserSubscriber instance
     */
    protected function getVodBase_User_ListenerService()
    {
        return $this->services['vod_base.user.listener'] = new \VOD\BaseBundle\EventSubscriber\UserSubscriber($this->get('vod_base.user_client'), $this->get('security.token_storage'));
    }

    /**
     * Gets the 'vod_base.user_client' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Services\Client\User\UserClient A VOD\BaseBundle\Services\Client\User\UserClient instance
     */
    protected function getVodBase_UserClientService()
    {
        $this->services['vod_base.user_client'] = $instance = new \VOD\BaseBundle\Services\Client\User\UserClient($this->get('ci.restclient'), $this->get('vod_base.utilities.cache'), $this->get('monolog.logger.api'));

        $instance->setOption('api_url', 'http://services.qubit.tv/index.php/v2/json');
        $instance->setOption('api_apk', '9088-697E');
        $instance->setOption('api_secret', '5fd2a7181825445eabd5edfdee1345baab942b2902c42');
        $instance->setTrackingCode($this->get('vod_base.log.tracking_code'));
        $instance->setDispatcher($this->get('debug.event_dispatcher'));

        return $instance;
    }

    /**
     * Gets the 'vod_base.utilities.browser_detector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Services\Utils\BrowserDetector A VOD\BaseBundle\Services\Utils\BrowserDetector instance
     */
    protected function getVodBase_Utilities_BrowserDetectorService()
    {
        return $this->services['vod_base.utilities.browser_detector'] = new \VOD\BaseBundle\Services\Utils\BrowserDetector();
    }

    /**
     * Gets the 'vod_base.utilities.cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Services\Utils\CacheUtilities A VOD\BaseBundle\Services\Utils\CacheUtilities instance
     */
    protected function getVodBase_Utilities_CacheService()
    {
        return $this->services['vod_base.utilities.cache'] = new \VOD\BaseBundle\Services\Utils\CacheUtilities($this->get('memcache.default'), $this->get('vod_base.utilities.utils'), '9088-697E', 180);
    }

    /**
     * Gets the 'vod_base.utilities.catfish_banner' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Services\Utils\CatfishBannerUtilities A VOD\BaseBundle\Services\Utils\CatfishBannerUtilities instance
     *
     * @throws InactiveScopeException when the 'vod_base.utilities.catfish_banner' service is requested while the 'request' scope is not active
     */
    protected function getVodBase_Utilities_CatfishBannerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('vod_base.utilities.catfish_banner', 'request');
        }

        return $this->services['vod_base.utilities.catfish_banner'] = $this->scopedServices['request']['vod_base.utilities.catfish_banner'] = new \VOD\BaseBundle\Services\Utils\CatfishBannerUtilities($this->get('vod_base.mobile_detect.mobile_detector'), $this->get('security.token_storage'));
    }

    /**
     * Gets the 'vod_base.utilities.mobile' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Services\Utils\MobileDetectorUtilities A VOD\BaseBundle\Services\Utils\MobileDetectorUtilities instance
     */
    protected function getVodBase_Utilities_MobileService()
    {
        return $this->services['vod_base.utilities.mobile'] = new \VOD\BaseBundle\Services\Utils\MobileDetectorUtilities($this->get('vod_base.mobile_detect.mobile_detector'));
    }

    /**
     * Gets the 'vod_base.utilities.user' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Services\Utils\UserUtilities A VOD\BaseBundle\Services\Utils\UserUtilities instance
     */
    protected function getVodBase_Utilities_UserService()
    {
        return $this->services['vod_base.utilities.user'] = new \VOD\BaseBundle\Services\Utils\UserUtilities();
    }

    /**
     * Gets the 'vod_base.utilities.utils' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Services\Utils\Util A VOD\BaseBundle\Services\Utils\Util instance
     */
    protected function getVodBase_Utilities_UtilsService()
    {
        return $this->services['vod_base.utilities.utils'] = new \VOD\BaseBundle\Services\Utils\Util();
    }

    /**
     * Gets the 'vod_base.utils_client' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Services\Client\Utils\UtilsClient A VOD\BaseBundle\Services\Client\Utils\UtilsClient instance
     */
    protected function getVodBase_UtilsClientService()
    {
        $this->services['vod_base.utils_client'] = $instance = new \VOD\BaseBundle\Services\Client\Utils\UtilsClient($this->get('ci.restclient'), $this->get('vod_base.utilities.cache'), $this->get('monolog.logger.api'));

        $instance->setOption('api_url', 'http://services.qubit.tv/index.php/v2/json');
        $instance->setOption('api_apk', '9088-697E');
        $instance->setOption('api_secret', '5fd2a7181825445eabd5edfdee1345baab942b2902c42');
        $instance->setTrackingCode($this->get('vod_base.log.tracking_code'));
        $instance->setSessionToken($this->get('security.token_storage'));
        $instance->setUserUtilities($this->get('vod_base.utilities.user'));

        return $instance;
    }

    /**
     * Gets the 'vod_base.validator.change_username_validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Services\Validator\Constraints\ConstraintsChangeUsernameValidator A VOD\BaseBundle\Services\Validator\Constraints\ConstraintsChangeUsernameValidator instance
     */
    protected function getVodBase_Validator_ChangeUsernameValidatorService()
    {
        return $this->services['vod_base.validator.change_username_validator'] = new \VOD\BaseBundle\Services\Validator\Constraints\ConstraintsChangeUsernameValidator($this->get('vod_base.user_client'), $this->get('security.token_storage'));
    }

    /**
     * Gets the 'vod_base.validator.coupon_validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Services\Validator\Constraints\ConstraintsCouponValidator A VOD\BaseBundle\Services\Validator\Constraints\ConstraintsCouponValidator instance
     */
    protected function getVodBase_Validator_CouponValidatorService()
    {
        return $this->services['vod_base.validator.coupon_validator'] = new \VOD\BaseBundle\Services\Validator\Constraints\ConstraintsCouponValidator($this->get('vod_base.utils_client'));
    }

    /**
     * Gets the 'vod_base.validator.parental_password_validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Services\Validator\Constraints\ConstraintsParentalPasswordValidator A VOD\BaseBundle\Services\Validator\Constraints\ConstraintsParentalPasswordValidator instance
     */
    protected function getVodBase_Validator_ParentalPasswordValidatorService()
    {
        return $this->services['vod_base.validator.parental_password_validator'] = new \VOD\BaseBundle\Services\Validator\Constraints\ConstraintsParentalPasswordValidator($this->get('vod_base.user_client'), $this->get('security.token_storage'));
    }

    /**
     * Gets the 'vod_base.validator.password_validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Services\Validator\Constraints\ConstraintsPasswordValidator A VOD\BaseBundle\Services\Validator\Constraints\ConstraintsPasswordValidator instance
     */
    protected function getVodBase_Validator_PasswordValidatorService()
    {
        return $this->services['vod_base.validator.password_validator'] = new \VOD\BaseBundle\Services\Validator\Constraints\ConstraintsPasswordValidator($this->get('vod_base.user_client'), $this->get('security.token_storage'));
    }

    /**
     * Gets the 'vod_base.validator.profile_name_validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Services\Validator\Constraints\ConstraintsProfileNameValidator A VOD\BaseBundle\Services\Validator\Constraints\ConstraintsProfileNameValidator instance
     */
    protected function getVodBase_Validator_ProfileNameValidatorService()
    {
        return $this->services['vod_base.validator.profile_name_validator'] = new \VOD\BaseBundle\Services\Validator\Constraints\ConstraintsProfileNameValidator($this->get('security.token_storage'));
    }

    /**
     * Gets the 'vod_base.validator.username_validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\BaseBundle\Services\Validator\Constraints\ConstraintsUsernameValidator A VOD\BaseBundle\Services\Validator\Constraints\ConstraintsUsernameValidator instance
     */
    protected function getVodBase_Validator_UsernameValidatorService()
    {
        return $this->services['vod_base.validator.username_validator'] = new \VOD\BaseBundle\Services\Validator\Constraints\ConstraintsUsernameValidator($this->get('vod_base.user_client'), $this->get('router'));
    }

    /**
     * Gets the 'vod_itv_base.security.authenticator.success_logout_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VOD\ItvBaseBundle\EventListener\SuccessLogoutListener A VOD\ItvBaseBundle\EventListener\SuccessLogoutListener instance
     */
    protected function getVodItvBase_Security_Authenticator_SuccessLogoutListenerService()
    {
        $a = $this->get('router');

        return $this->services['vod_itv_base.security.authenticator.success_logout_listener'] = new \VOD\ItvBaseBundle\EventListener\SuccessLogoutListener($a, 'homepage', $a, 'logout');
    }

    /**
     * Gets the 'web_profiler.controller.exception' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController A Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController instance
     */
    protected function getWebProfiler_Controller_ExceptionService()
    {
        return $this->services['web_profiler.controller.exception'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController($this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), true);
    }

    /**
     * Gets the 'web_profiler.controller.profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController A Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController instance
     */
    protected function getWebProfiler_Controller_ProfilerService()
    {
        return $this->services['web_profiler.controller.profiler'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController($this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), array('data_collector.request' => array(0 => 'request', 1 => '@WebProfiler/Collector/request.html.twig'), 'data_collector.time' => array(0 => 'time', 1 => '@WebProfiler/Collector/time.html.twig'), 'data_collector.memory' => array(0 => 'memory', 1 => '@WebProfiler/Collector/memory.html.twig'), 'data_collector.ajax' => array(0 => 'ajax', 1 => '@WebProfiler/Collector/ajax.html.twig'), 'data_collector.form' => array(0 => 'form', 1 => '@WebProfiler/Collector/form.html.twig'), 'data_collector.exception' => array(0 => 'exception', 1 => '@WebProfiler/Collector/exception.html.twig'), 'data_collector.logger' => array(0 => 'logger', 1 => '@WebProfiler/Collector/logger.html.twig'), 'data_collector.events' => array(0 => 'events', 1 => '@WebProfiler/Collector/events.html.twig'), 'data_collector.router' => array(0 => 'router', 1 => '@WebProfiler/Collector/router.html.twig'), 'data_collector.translation' => array(0 => 'translation', 1 => '@WebProfiler/Collector/translation.html.twig'), 'data_collector.security' => array(0 => 'security', 1 => '@Security/Collector/security.html.twig'), 'data_collector.twig' => array(0 => 'twig', 1 => '@WebProfiler/Collector/twig.html.twig'), 'data_collector.doctrine' => array(0 => 'db', 1 => '@Doctrine/Collector/db.html.twig'), 'data_collector.dump' => array(0 => 'dump', 1 => '@Debug/Profiler/dump.html.twig'), 'memcache.data_collector' => array(0 => 'memcache', 1 => 'LswMemcacheBundle:Collector:memcache'), 'mobile_detect_bundle.device.collector' => array(0 => 'device.collector', 1 => 'MobileDetectBundle:Collector:device'), 'data_collector.config' => array(0 => 'config', 1 => '@WebProfiler/Collector/config.html.twig')), 'bottom');
    }

    /**
     * Gets the 'web_profiler.controller.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\RouterController A Symfony\Bundle\WebProfilerBundle\Controller\RouterController instance
     */
    protected function getWebProfiler_Controller_RouterService()
    {
        return $this->services['web_profiler.controller.router'] = new \Symfony\Bundle\WebProfilerBundle\Controller\RouterController($this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the 'web_profiler.debug_toolbar' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener A Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener instance
     */
    protected function getWebProfiler_DebugToolbarService()
    {
        return $this->services['web_profiler.debug_toolbar'] = new \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener($this->get('twig'), false, 2, 'bottom', $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE), '^/(app(_[\\w]+)?\\.php/)?_wdt');
    }

    /**
     * Updates the 'request' service.
     */
    protected function synchronizeRequestService()
    {
        if ($this->initialized('mobile_detect.twig.extension')) {
            $this->get('mobile_detect.twig.extension')->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
    }

    /**
     * Gets the 'controller_name_converter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser A Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser instance
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($this->get('kernel'));
    }

    /**
     * Gets the 'doctrine.dbal.logger.profiling.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Doctrine\DBAL\Logging\DebugStack A Doctrine\DBAL\Logging\DebugStack instance
     */
    protected function getDoctrine_Dbal_Logger_Profiling_DefaultService()
    {
        return $this->services['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack();
    }

    /**
     * Gets the 'form.server_params' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Form\Util\ServerParams A Symfony\Component\Form\Util\ServerParams instance
     */
    protected function getForm_ServerParamsService()
    {
        return $this->services['form.server_params'] = new \Symfony\Component\Form\Util\ServerParams($this->get('request_stack'));
    }

    /**
     * Gets the 'gedmo_doctrine_extensions.listener.ip_traceable' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Gedmo\IpTraceable\IpTraceableListener A Gedmo\IpTraceable\IpTraceableListener instance
     */
    protected function getGedmoDoctrineExtensions_Listener_IpTraceableService()
    {
        $this->services['gedmo_doctrine_extensions.listener.ip_traceable'] = $instance = new \Gedmo\IpTraceable\IpTraceableListener();

        $instance->setAnnotationReader($this->get('annotation_reader'));

        return $instance;
    }

    /**
     * Gets the 'monolog.processor.psr_log_message' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Monolog\Processor\PsrLogMessageProcessor A Monolog\Processor\PsrLogMessageProcessor instance
     */
    protected function getMonolog_Processor_PsrLogMessageService()
    {
        return $this->services['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor();
    }

    /**
     * Gets the 'router.request_context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Routing\RequestContext A Symfony\Component\Routing\RequestContext instance
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the 'security.access.decision_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AccessDecisionManager A Symfony\Component\Security\Core\Authorization\AccessDecisionManager instance
     */
    protected function getSecurity_Access_DecisionManagerService()
    {
        $a = $this->get('security.authentication.trust_resolver');

        $this->services['security.access.decision_manager'] = $instance = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(array(), 'affirmative', false, true);

        $instance->setVoters(array(0 => new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter($a), 1 => new \Symfony\Component\Security\Core\Authorization\Voter\RoleVoter(), 2 => new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(), $a, $this->get('security.role_hierarchy', ContainerInterface::NULL_ON_INVALID_REFERENCE))));

        return $instance;
    }

    /**
     * Gets the 'security.access_map' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Http\AccessMap A Symfony\Component\Security\Http\AccessMap instance
     */
    protected function getSecurity_AccessMapService()
    {
        $this->services['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/contenido/reproductor/'), array(0 => 'ROLE_USER'), 'http');
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/pelicula/reproductor/'), array(0 => 'ROLE_USER'), 'http');
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/itv'), array(0 => 'ROLE_USER'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/usuario/recuperar/'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/usuario/generar/'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), 'http');
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/ingreso'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), 'http');
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/login-check'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), 'http');
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/registro/'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), 'http');
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/confirmacion/'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), 'http');
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/service/'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/usuario/metodo-pago'), array(0 => 'ROLE_USER'), 'http');
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/usuario/suscripcion-exitosa'), array(0 => 'ROLE_USER'), 'http');
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/usuario/'), array(0 => 'ROLE_USER'), 'http');
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/operacion/'), array(0 => 'ROLE_USER'), 'http');
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/?$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), 'http');
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/*'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), 'http');

        return $instance;
    }

    /**
     * Gets the 'security.authentication.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager A Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager instance
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(array(0 => new \Symfony\Component\Security\Core\Authentication\Provider\SimpleAuthenticationProvider($this->get('vod_base.security.authenticator.vod'), $this->get('vod_base.security.user.provider.vod'), 'main'), 1 => new \Symfony\Component\Security\Core\Authentication\Provider\RememberMeAuthenticationProvider($this->get('security.user_checker.main'), 'b54784587ec311fcb85175a252321e3e8fe1991c', 'main'), 2 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('5931b7d25c22c1.05655796')), true);

        $instance->setEventDispatcher($this->get('debug.event_dispatcher'));

        return $instance;
    }

    /**
     * Gets the 'security.authentication.trust_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver A Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver instance
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }

    /**
     * Gets the 'security.http_utils' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Http\HttpUtils A Symfony\Component\Security\Http\HttpUtils instance
     */
    protected function getSecurity_HttpUtilsService()
    {
        $a = $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE);

        return $this->services['security.http_utils'] = new \Symfony\Component\Security\Http\HttpUtils($a, $a);
    }

    /**
     * Gets the 'security.logout_url_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator A Symfony\Component\Security\Http\Logout\LogoutUrlGenerator instance
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->services['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator($this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->registerListener('main', 'logout', 'logout', '_csrf_token', NULL);

        return $instance;
    }

    /**
     * Gets the 'security.role_hierarchy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy A Symfony\Component\Security\Core\Role\RoleHierarchy instance
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array());
    }

    /**
     * Gets the 'session.storage.metadata_bag' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag A Symfony\Component\HttpFoundation\Session\Storage\MetadataBag instance
     */
    protected function getSession_Storage_MetadataBagService()
    {
        return $this->services['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0');
    }

    /**
     * Gets the 'templating.locator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator A Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator instance
     */
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator($this->get('file_locator'), __DIR__);
    }

    /**
     * Gets the 'vod_base.log.tracking_code' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \VOD\BaseBundle\Services\Log\TrackingCode A VOD\BaseBundle\Services\Log\TrackingCode instance
     */
    protected function getVodBase_Log_TrackingCodeService()
    {
        return $this->services['vod_base.log.tracking_code'] = new \VOD\BaseBundle\Services\Log\TrackingCode();
    }

    /**
     * Gets the 'vod_base.security.user.provider.vod' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \VOD\BaseBundle\Services\Security\Core\User\VodUserProvider A VOD\BaseBundle\Services\Security\Core\User\VodUserProvider instance
     */
    protected function getVodBase_Security_User_Provider_VodService()
    {
        return $this->services['vod_base.security.user.provider.vod'] = new \VOD\BaseBundle\Services\Security\Core\User\VodUserProvider($this->get('vod_base.user_client'));
    }

    /**
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }

        return $this->parameters[$name];
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        $name = strtolower($name);

        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    /**
     * {@inheritdoc}
     */
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }

        return $this->parameterBag;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.root_dir' => $this->targetDirs[2],
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'app',
            'kernel.cache_dir' => __DIR__,
            'kernel.logs_dir' => ($this->targetDirs[2].'/logs'),
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'LswMemcacheBundle' => 'Lsw\\MemcacheBundle\\LswMemcacheBundle',
                'BeelabRecaptcha2Bundle' => 'Beelab\\Recaptcha2Bundle\\BeelabRecaptcha2Bundle',
                'CiRestClientBundle' => 'Ci\\RestClientBundle\\CiRestClientBundle',
                'MobileDetectBundle' => 'SunCat\\MobileDetectBundle\\MobileDetectBundle',
                'FOSJsRoutingBundle' => 'FOS\\JsRoutingBundle\\FOSJsRoutingBundle',
                'VODBaseBundle' => 'VOD\\BaseBundle\\VODBaseBundle',
                'VODItvBaseBundle' => 'VOD\\ItvBaseBundle\\VODItvBaseBundle',
                'VODQubitArgentinaBundle' => 'VOD\\QubitArgentinaBundle\\VODQubitArgentinaBundle',
                'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle',
                'DebugBundle' => 'Symfony\\Bundle\\DebugBundle\\DebugBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle',
                'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle',
            ),
            'kernel.bundles_metadata' => array(
                'FrameworkBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ),
                'SecurityBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ),
                'TwigBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ),
                'MonologBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ),
                'DoctrineBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ),
                'SensioFrameworkExtraBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sensio/framework-extra-bundle'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ),
                'LswMemcacheBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/leaseweb/memcache-bundle/Lsw/MemcacheBundle'),
                    'namespace' => 'Lsw\\MemcacheBundle',
                ),
                'BeelabRecaptcha2Bundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/beelab/recaptcha2-bundle'),
                    'namespace' => 'Beelab\\Recaptcha2Bundle',
                ),
                'CiRestClientBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/ci/restclientbundle/Ci/RestClientBundle'),
                    'namespace' => 'Ci\\RestClientBundle',
                ),
                'MobileDetectBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/suncat/mobile-detect-bundle/SunCat/MobileDetectBundle'),
                    'namespace' => 'SunCat\\MobileDetectBundle',
                ),
                'FOSJsRoutingBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/friendsofsymfony/jsrouting-bundle'),
                    'namespace' => 'FOS\\JsRoutingBundle',
                ),
                'VODBaseBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/vod/base-bundle'),
                    'namespace' => 'VOD\\BaseBundle',
                ),
                'VODItvBaseBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/vod/itv-base-bundle'),
                    'namespace' => 'VOD\\ItvBaseBundle',
                ),
                'VODQubitArgentinaBundle' => array(
                    'parent' => 'VODBaseBundle',
                    'path' => ($this->targetDirs[3].'/src/VOD/QubitArgentinaBundle'),
                    'namespace' => 'VOD\\QubitArgentinaBundle',
                ),
                'DoctrineMigrationsBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-migrations-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\MigrationsBundle',
                ),
                'DebugBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle'),
                    'namespace' => 'Symfony\\Bundle\\DebugBundle',
                ),
                'WebProfilerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle'),
                    'namespace' => 'Symfony\\Bundle\\WebProfilerBundle',
                ),
                'SensioDistributionBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sensio/distribution-bundle'),
                    'namespace' => 'Sensio\\Bundle\\DistributionBundle',
                ),
                'SensioGeneratorBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sensio/generator-bundle'),
                    'namespace' => 'Sensio\\Bundle\\GeneratorBundle',
                ),
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appDevDebugProjectContainer',
            'carrusel7puentes' => true,
            'database_driver' => 'pdo_mysql',
            'database_host' => '192.168.10.32',
            'database_name' => 'qubit-web-ar',
            'database_user' => 'qubit',
            'database_password' => 'qubit',
            'database_port' => 3306,
            'http_site_protocol' => 'http',
            'remember_me_cookie_lifetime' => 2876400,
            'logout_target' => 'homepage',
            'assets_version' => '1.17.7',
            'currency_decimals' => 0,
            'cdn_url' => 'https://stcloudfront.qubit.tv/assets/public/staging/qubit/images',
            'api_url' => 'http://services.qubit.tv/index.php/v2/json',
            'facebook_app_id' => 884611908321389,
            'memcache.default_pool.host' => 'localhost',
            'memcache.default_pool.port' => 11211,
            'memcache.session_pool.host' => 'localhost',
            'memcache.session_pool.port' => 11211,
            'catfish_banner_disabled_routes' => array(
                0 => 'landing',
                1 => 'login',
                2 => 'registration',
                3 => 'user_subscription',
                4 => 'payment_method',
                5 => 'user_activate_subscription',
            ),
            'loggly_token' => '63756d0d-1ca9-4738-8d5e-791891e087c0',
            'shaka_js_url' => '//players.qubit.tv/all/1.8.0/dist/shaka.vod.bundle.js',
            'hls_js_url' => '//players.qubit.tv/all/1.8.0/dist/hls.vod.bundle.js',
            'player_css_url' => '//players.qubit.tv/all/1.8.0/styles/video-js.css',
            'qubit_css_url' => '//players.qubit.tv/all/1.8.0/styles/videojs-qubit.css',
            'thumbnails_css_url' => '//players.qubit.tv/all/1.8.0/styles/videojs-thumbnails.css',
            'hls_js_ie' => '//players.qubit.tv/all/1.6.2-ie/dist/hls.vod.bundle.js',
            'gulp' => array(
                'cdn_url' => '///stcloudfront.qubit.tv/assets/public/staging/qubit',
                'env' => 'staging',
                'type' => 'operator',
                'operator' => 'argentina',
                'itv' => true,
                'owner' => 'qubit',
            ),
            'vod_base.clarin_webservice_url' => 'http://webcallws.agea.com.ar/service/gestionarTrackeosService/validarCredencial/',
            'youbora_account_id' => 'qubit',
            'global_collect.api_key' => 'c41676f48d535981',
            'global_collect.secret_api_key' => 'vltapAi22TsacRI3Eo3+RBaOEmfmIILRtWw9C459A78=',
            'global_collect.base_url' => 'https://api.globalcollect.com/',
            'global_collect.environment' => 'PROD',
            'movistar.id_service_try' => 116243,
            'movistar.id_service' => 116242,
            'movistar.user' => 'qubitapi',
            'movistar.pass' => 'q41ACz_',
            'itv_version' => '0.0.15',
            'itv_player_version' => '1.9.1',
            'secret' => 'b54784587ec311fcb85175a252321e3e8fe1991c',
            'google_gtm_auth' => 'RZoih2JXYnQ9X3WLjjB1dw',
            'google_gtm_preview' => 'env-121',
            'google_gtm_code' => 'GTM-KD28T9',
            'itv_country' => 'AR',
            'itv_product' => 'Default-AR',
            'itv_cdn_url' => '///stcloudfront.qubit.tv/assets/public/qubit/itv-version/staging',
            'locale' => 'es_AR',
            'operator_code' => 'AR',
            'vod_base.logs.loggly.token' => '63756d0d-1ca9-4738-8d5e-791891e087c0',
            'vod_base.logs.loggly.tag' => 'qubit-web-ar',
            'vod_base.logs.api_handler.level' => 'info',
            'vod_base.logs.activity_handler.level' => 'info',
            'vod_base.logs.login_handler.level' => 'info',
            'vod_base.logs.infotainment_handler.level' => 'info',
            'controller_resolver.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver',
            'controller_name_converter.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser',
            'response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener',
            'streamed_response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener',
            'locale_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener',
            'event_dispatcher.class' => 'Symfony\\Component\\EventDispatcher\\ContainerAwareEventDispatcher',
            'http_kernel.class' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\ContainerAwareHttpKernel',
            'filesystem.class' => 'Symfony\\Component\\Filesystem\\Filesystem',
            'cache_warmer.class' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerAggregate',
            'cache_clearer.class' => 'Symfony\\Component\\HttpKernel\\CacheClearer\\ChainCacheClearer',
            'file_locator.class' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
            'uri_signer.class' => 'Symfony\\Component\\HttpKernel\\UriSigner',
            'request_stack.class' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
            'fragment.handler.class' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\LazyLoadingFragmentHandler',
            'fragment.renderer.inline.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\InlineFragmentRenderer',
            'fragment.renderer.hinclude.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\HIncludeFragmentRenderer',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.renderer.esi.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\EsiFragmentRenderer',
            'fragment.path' => '/_fragment',
            'translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator',
            'translator.identity.class' => 'Symfony\\Component\\Translation\\IdentityTranslator',
            'translator.selector.class' => 'Symfony\\Component\\Translation\\MessageSelector',
            'translation.loader.php.class' => 'Symfony\\Component\\Translation\\Loader\\PhpFileLoader',
            'translation.loader.yml.class' => 'Symfony\\Component\\Translation\\Loader\\YamlFileLoader',
            'translation.loader.xliff.class' => 'Symfony\\Component\\Translation\\Loader\\XliffFileLoader',
            'translation.loader.po.class' => 'Symfony\\Component\\Translation\\Loader\\PoFileLoader',
            'translation.loader.mo.class' => 'Symfony\\Component\\Translation\\Loader\\MoFileLoader',
            'translation.loader.qt.class' => 'Symfony\\Component\\Translation\\Loader\\QtFileLoader',
            'translation.loader.csv.class' => 'Symfony\\Component\\Translation\\Loader\\CsvFileLoader',
            'translation.loader.res.class' => 'Symfony\\Component\\Translation\\Loader\\IcuResFileLoader',
            'translation.loader.dat.class' => 'Symfony\\Component\\Translation\\Loader\\IcuDatFileLoader',
            'translation.loader.ini.class' => 'Symfony\\Component\\Translation\\Loader\\IniFileLoader',
            'translation.loader.json.class' => 'Symfony\\Component\\Translation\\Loader\\JsonFileLoader',
            'translation.dumper.php.class' => 'Symfony\\Component\\Translation\\Dumper\\PhpFileDumper',
            'translation.dumper.xliff.class' => 'Symfony\\Component\\Translation\\Dumper\\XliffFileDumper',
            'translation.dumper.po.class' => 'Symfony\\Component\\Translation\\Dumper\\PoFileDumper',
            'translation.dumper.mo.class' => 'Symfony\\Component\\Translation\\Dumper\\MoFileDumper',
            'translation.dumper.yml.class' => 'Symfony\\Component\\Translation\\Dumper\\YamlFileDumper',
            'translation.dumper.qt.class' => 'Symfony\\Component\\Translation\\Dumper\\QtFileDumper',
            'translation.dumper.csv.class' => 'Symfony\\Component\\Translation\\Dumper\\CsvFileDumper',
            'translation.dumper.ini.class' => 'Symfony\\Component\\Translation\\Dumper\\IniFileDumper',
            'translation.dumper.json.class' => 'Symfony\\Component\\Translation\\Dumper\\JsonFileDumper',
            'translation.dumper.res.class' => 'Symfony\\Component\\Translation\\Dumper\\IcuResFileDumper',
            'translation.extractor.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\PhpExtractor',
            'translation.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\TranslationLoader',
            'translation.extractor.class' => 'Symfony\\Component\\Translation\\Extractor\\ChainExtractor',
            'translation.writer.class' => 'Symfony\\Component\\Translation\\Writer\\TranslationWriter',
            'property_accessor.class' => 'Symfony\\Component\\PropertyAccess\\PropertyAccessor',
            'kernel.secret' => 'b54784587ec311fcb85175a252321e3e8fe1991c',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.trusted_proxies' => array(

            ),
            'kernel.default_locale' => 'es_AR',
            'session.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Session',
            'session.flashbag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag',
            'session.attribute_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag',
            'session.storage.metadata_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MetadataBag',
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.native.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage',
            'session.storage.php_bridge.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\PhpBridgeSessionStorage',
            'session.storage.mock_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorage',
            'session.handler.native_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NativeFileSessionHandler',
            'session.handler.write_check.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\WriteCheckSessionHandler',
            'session_listener.class' => 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener',
            'session.storage.options' => array(
                'cookie_httponly' => true,
                'gc_probability' => 1,
            ),
            'session.save_path' => (__DIR__.'/sessions'),
            'session.metadata.update_threshold' => '0',
            'security.secure_random.class' => 'Symfony\\Component\\Security\\Core\\Util\\SecureRandom',
            'form.resolved_type_factory.class' => 'Symfony\\Component\\Form\\ResolvedFormTypeFactory',
            'form.registry.class' => 'Symfony\\Component\\Form\\FormRegistry',
            'form.factory.class' => 'Symfony\\Component\\Form\\FormFactory',
            'form.extension.class' => 'Symfony\\Component\\Form\\Extension\\DependencyInjection\\DependencyInjectionExtension',
            'form.type_guesser.validator.class' => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser',
            'form.type_extension.form.request_handler.class' => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\HttpFoundationRequestHandler',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'security.csrf.token_generator.class' => 'Symfony\\Component\\Security\\Csrf\\TokenGenerator\\UriSafeTokenGenerator',
            'security.csrf.token_storage.class' => 'Symfony\\Component\\Security\\Csrf\\TokenStorage\\SessionTokenStorage',
            'security.csrf.token_manager.class' => 'Symfony\\Component\\Security\\Csrf\\CsrfTokenManager',
            'templating.engine.delegating.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\DelegatingEngine',
            'templating.name_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateNameParser',
            'templating.filename_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateFilenameParser',
            'templating.cache_warmer.template_paths.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplatePathsCacheWarmer',
            'templating.locator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\TemplateLocator',
            'templating.loader.filesystem.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\FilesystemLoader',
            'templating.loader.cache.class' => 'Symfony\\Component\\Templating\\Loader\\CacheLoader',
            'templating.loader.chain.class' => 'Symfony\\Component\\Templating\\Loader\\ChainLoader',
            'templating.finder.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplateFinder',
            'templating.helper.assets.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\AssetsHelper',
            'templating.helper.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RouterHelper',
            'templating.helper.code.file_link_format' => NULL,
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'validator.class' => 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface',
            'validator.builder.class' => 'Symfony\\Component\\Validator\\ValidatorBuilderInterface',
            'validator.builder.factory.class' => 'Symfony\\Component\\Validator\\Validation',
            'validator.mapping.cache.apc.class' => 'Symfony\\Component\\Validator\\Mapping\\Cache\\ApcCache',
            'validator.mapping.cache.prefix' => '',
            'validator.validator_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Validator\\ConstraintValidatorFactory',
            'validator.expression.class' => 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator',
            'validator.email.class' => 'Symfony\\Component\\Validator\\Constraints\\EmailValidator',
            'validator.translation_domain' => 'validators',
            'validator.api' => '2.5-bc',
            'fragment.listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener',
            'translator.logging' => true,
            'profiler.class' => 'Symfony\\Component\\HttpKernel\\Profiler\\Profiler',
            'profiler_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ProfilerListener',
            'data_collector.config.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\ConfigDataCollector',
            'data_collector.request.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\RequestDataCollector',
            'data_collector.exception.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\ExceptionDataCollector',
            'data_collector.events.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\EventDataCollector',
            'data_collector.logger.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\LoggerDataCollector',
            'data_collector.time.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\TimeDataCollector',
            'data_collector.memory.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\MemoryDataCollector',
            'data_collector.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\DataCollector\\RouterDataCollector',
            'form.resolved_type_factory.data_collector_proxy.class' => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Proxy\\ResolvedTypeFactoryDataCollectorProxy',
            'form.type_extension.form.data_collector.class' => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension',
            'data_collector.form.class' => 'Symfony\\Component\\Form\\Extension\\DataCollector\\FormDataCollector',
            'data_collector.form.extractor.class' => 'Symfony\\Component\\Form\\Extension\\DataCollector\\FormDataExtractor',
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'profiler.storage.dsn' => ('file:'.__DIR__.'/profiler'),
            'profiler.storage.username' => '',
            'profiler.storage.password' => '',
            'profiler.storage.lifetime' => 86400,
            'router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\Router',
            'router.request_context.class' => 'Symfony\\Component\\Routing\\RequestContext',
            'routing.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\DelegatingLoader',
            'routing.resolver.class' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
            'routing.loader.xml.class' => 'Symfony\\Component\\Routing\\Loader\\XmlFileLoader',
            'routing.loader.yml.class' => 'Symfony\\Component\\Routing\\Loader\\YamlFileLoader',
            'routing.loader.php.class' => 'Symfony\\Component\\Routing\\Loader\\PhpFileLoader',
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.cache_warmer.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\RouterCacheWarmer',
            'router.options.matcher.cache_class' => 'appDevDebugProjectContainerUrlMatcher',
            'router.options.generator.cache_class' => 'appDevDebugProjectContainerUrlGenerator',
            'router_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => ($this->targetDirs[2].'/config/routing_dev.yml'),
            'router.cache_class_prefix' => 'appDevDebugProjectContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'annotations.reader.class' => 'Doctrine\\Common\\Annotations\\AnnotationReader',
            'annotations.cached_reader.class' => 'Doctrine\\Common\\Annotations\\CachedReader',
            'annotations.file_cache_reader.class' => 'Doctrine\\Common\\Annotations\\FileCacheReader',
            'debug.debug_handlers_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener',
            'debug.stopwatch.class' => 'Symfony\\Component\\Stopwatch\\Stopwatch',
            'debug.error_handler.throw_at' => -1,
            'debug.event_dispatcher.class' => 'Symfony\\Component\\HttpKernel\\Debug\\TraceableEventDispatcher',
            'debug.container.dump' => (__DIR__.'/appDevDebugProjectContainer.xml'),
            'debug.controller_resolver.class' => 'Symfony\\Component\\HttpKernel\\Controller\\TraceableControllerResolver',
            'security.context.class' => 'Symfony\\Component\\Security\\Core\\SecurityContext',
            'security.user_checker.class' => 'Symfony\\Component\\Security\\Core\\User\\UserChecker',
            'security.encoder_factory.generic.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactory',
            'security.encoder.digest.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder',
            'security.encoder.plain.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\PlaintextPasswordEncoder',
            'security.encoder.pbkdf2.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\Pbkdf2PasswordEncoder',
            'security.encoder.bcrypt.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\BCryptPasswordEncoder',
            'security.user.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\User\\InMemoryUserProvider',
            'security.user.provider.in_memory.user.class' => 'Symfony\\Component\\Security\\Core\\User\\User',
            'security.user.provider.chain.class' => 'Symfony\\Component\\Security\\Core\\User\\ChainUserProvider',
            'security.authentication.trust_resolver.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolver',
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.authentication.manager.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationProviderManager',
            'security.authentication.session_strategy.class' => 'Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategy',
            'security.access.decision_manager.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManager',
            'security.access.simple_role_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleVoter',
            'security.access.authenticated_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter',
            'security.access.role_hierarchy_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleHierarchyVoter',
            'security.access.expression_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\ExpressionVoter',
            'security.firewall.class' => 'Symfony\\Component\\Security\\Http\\Firewall',
            'security.firewall.map.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallMap',
            'security.firewall.context.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallContext',
            'security.matcher.class' => 'Symfony\\Component\\HttpFoundation\\RequestMatcher',
            'security.expression_matcher.class' => 'Symfony\\Component\\HttpFoundation\\ExpressionRequestMatcher',
            'security.role_hierarchy.class' => 'Symfony\\Component\\Security\\Core\\Role\\RoleHierarchy',
            'security.http_utils.class' => 'Symfony\\Component\\Security\\Http\\HttpUtils',
            'security.validator.user_password.class' => 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator',
            'security.expression_language.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\ExpressionLanguage',
            'security.role_hierarchy.roles' => array(

            ),
            'security.authentication.retry_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\RetryAuthenticationEntryPoint',
            'security.channel_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ChannelListener',
            'security.authentication.form_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\FormAuthenticationEntryPoint',
            'security.authentication.listener.form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\UsernamePasswordFormAuthenticationListener',
            'security.authentication.listener.simple_form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SimpleFormAuthenticationListener',
            'security.authentication.listener.simple_preauth.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SimplePreAuthenticationListener',
            'security.authentication.listener.basic.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\BasicAuthenticationListener',
            'security.authentication.basic_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\BasicAuthenticationEntryPoint',
            'security.authentication.listener.digest.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\DigestAuthenticationListener',
            'security.authentication.digest_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\DigestAuthenticationEntryPoint',
            'security.authentication.listener.x509.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\X509AuthenticationListener',
            'security.authentication.listener.anonymous.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AnonymousAuthenticationListener',
            'security.authentication.switchuser_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SwitchUserListener',
            'security.logout_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener',
            'security.logout.handler.session.class' => 'Symfony\\Component\\Security\\Http\\Logout\\SessionLogoutHandler',
            'security.logout.handler.cookie_clearing.class' => 'Symfony\\Component\\Security\\Http\\Logout\\CookieClearingLogoutHandler',
            'security.logout.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Logout\\DefaultLogoutSuccessHandler',
            'security.access_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AccessListener',
            'security.access_map.class' => 'Symfony\\Component\\Security\\Http\\AccessMap',
            'security.exception_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener',
            'security.context_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ContextListener',
            'security.authentication.provider.dao.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\DaoAuthenticationProvider',
            'security.authentication.provider.simple.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\SimpleAuthenticationProvider',
            'security.authentication.provider.pre_authenticated.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\PreAuthenticatedAuthenticationProvider',
            'security.authentication.provider.anonymous.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AnonymousAuthenticationProvider',
            'security.authentication.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationSuccessHandler',
            'security.authentication.failure_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationFailureHandler',
            'security.authentication.simple_success_failure_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\SimpleAuthenticationHandler',
            'security.authentication.provider.rememberme.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\RememberMeAuthenticationProvider',
            'security.authentication.listener.rememberme.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\RememberMeListener',
            'security.rememberme.token.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\InMemoryTokenProvider',
            'security.authentication.rememberme.services.persistent.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\PersistentTokenBasedRememberMeServices',
            'security.authentication.rememberme.services.simplehash.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\TokenBasedRememberMeServices',
            'security.rememberme.response_listener.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener',
            'templating.helper.logout_url.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\LogoutUrlHelper',
            'templating.helper.security.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\SecurityHelper',
            'twig.extension.logout_url.class' => 'Symfony\\Bridge\\Twig\\Extension\\LogoutUrlExtension',
            'twig.extension.security.class' => 'Symfony\\Bridge\\Twig\\Extension\\SecurityExtension',
            'data_collector.security.class' => 'Symfony\\Bundle\\SecurityBundle\\DataCollector\\SecurityDataCollector',
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'twig.class' => 'Twig_Environment',
            'twig.loader.filesystem.class' => 'Symfony\\Bundle\\TwigBundle\\Loader\\FilesystemLoader',
            'twig.loader.chain.class' => 'Twig_Loader_Chain',
            'templating.engine.twig.class' => 'Symfony\\Bundle\\TwigBundle\\TwigEngine',
            'twig.cache_warmer.class' => 'Symfony\\Bundle\\TwigBundle\\CacheWarmer\\TemplateCacheCacheWarmer',
            'twig.extension.trans.class' => 'Symfony\\Bridge\\Twig\\Extension\\TranslationExtension',
            'twig.extension.actions.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\ActionsExtension',
            'twig.extension.code.class' => 'Symfony\\Bridge\\Twig\\Extension\\CodeExtension',
            'twig.extension.routing.class' => 'Symfony\\Bridge\\Twig\\Extension\\RoutingExtension',
            'twig.extension.yaml.class' => 'Symfony\\Bridge\\Twig\\Extension\\YamlExtension',
            'twig.extension.form.class' => 'Symfony\\Bridge\\Twig\\Extension\\FormExtension',
            'twig.extension.httpkernel.class' => 'Symfony\\Bridge\\Twig\\Extension\\HttpKernelExtension',
            'twig.extension.debug.stopwatch.class' => 'Symfony\\Bridge\\Twig\\Extension\\StopwatchExtension',
            'twig.extension.expression.class' => 'Symfony\\Bridge\\Twig\\Extension\\ExpressionExtension',
            'twig.form.engine.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRendererEngine',
            'twig.form.renderer.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRenderer',
            'twig.translation.extractor.class' => 'Symfony\\Bridge\\Twig\\Translation\\TwigExtractor',
            'twig.exception_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener',
            'twig.controller.exception.class' => 'Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController',
            'twig.controller.preview_error.class' => 'Symfony\\Bundle\\TwigBundle\\Controller\\PreviewErrorController',
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => 'BeelabRecaptcha2Bundle:form:fields.html.twig',
                1 => 'form_div_layout.html.twig',
            ),
            'monolog.logger.class' => 'Symfony\\Bridge\\Monolog\\Logger',
            'monolog.gelf.publisher.class' => 'Gelf\\MessagePublisher',
            'monolog.gelfphp.publisher.class' => 'Gelf\\Publisher',
            'monolog.handler.stream.class' => 'Monolog\\Handler\\StreamHandler',
            'monolog.handler.console.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler',
            'monolog.handler.group.class' => 'Monolog\\Handler\\GroupHandler',
            'monolog.handler.buffer.class' => 'Monolog\\Handler\\BufferHandler',
            'monolog.handler.deduplication.class' => 'Monolog\\Handler\\DeduplicationHandler',
            'monolog.handler.rotating_file.class' => 'Monolog\\Handler\\RotatingFileHandler',
            'monolog.handler.syslog.class' => 'Monolog\\Handler\\SyslogHandler',
            'monolog.handler.syslogudp.class' => 'Monolog\\Handler\\SyslogUdpHandler',
            'monolog.handler.null.class' => 'Monolog\\Handler\\NullHandler',
            'monolog.handler.test.class' => 'Monolog\\Handler\\TestHandler',
            'monolog.handler.gelf.class' => 'Monolog\\Handler\\GelfHandler',
            'monolog.handler.rollbar.class' => 'Monolog\\Handler\\RollbarHandler',
            'monolog.handler.flowdock.class' => 'Monolog\\Handler\\FlowdockHandler',
            'monolog.handler.browser_console.class' => 'Monolog\\Handler\\BrowserConsoleHandler',
            'monolog.handler.firephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\FirePHPHandler',
            'monolog.handler.chromephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ChromePhpHandler',
            'monolog.handler.debug.class' => 'Symfony\\Bridge\\Monolog\\Handler\\DebugHandler',
            'monolog.handler.swift_mailer.class' => 'Symfony\\Bridge\\Monolog\\Handler\\SwiftMailerHandler',
            'monolog.handler.native_mailer.class' => 'Monolog\\Handler\\NativeMailerHandler',
            'monolog.handler.socket.class' => 'Monolog\\Handler\\SocketHandler',
            'monolog.handler.pushover.class' => 'Monolog\\Handler\\PushoverHandler',
            'monolog.handler.raven.class' => 'Monolog\\Handler\\RavenHandler',
            'monolog.handler.newrelic.class' => 'Monolog\\Handler\\NewRelicHandler',
            'monolog.handler.hipchat.class' => 'Monolog\\Handler\\HipChatHandler',
            'monolog.handler.slack.class' => 'Monolog\\Handler\\SlackHandler',
            'monolog.handler.cube.class' => 'Monolog\\Handler\\CubeHandler',
            'monolog.handler.amqp.class' => 'Monolog\\Handler\\AmqpHandler',
            'monolog.handler.error_log.class' => 'Monolog\\Handler\\ErrorLogHandler',
            'monolog.handler.loggly.class' => 'Monolog\\Handler\\LogglyHandler',
            'monolog.handler.logentries.class' => 'Monolog\\Handler\\LogEntriesHandler',
            'monolog.handler.whatfailuregroup.class' => 'Monolog\\Handler\\WhatFailureGroupHandler',
            'monolog.activation_strategy.not_found.class' => 'Symfony\\Bundle\\MonologBundle\\NotFoundActivationStrategy',
            'monolog.handler.fingers_crossed.class' => 'Monolog\\Handler\\FingersCrossedHandler',
            'monolog.handler.fingers_crossed.error_level_activation_strategy.class' => 'Monolog\\Handler\\FingersCrossed\\ErrorLevelActivationStrategy',
            'monolog.handler.filter.class' => 'Monolog\\Handler\\FilterHandler',
            'monolog.handler.mongo.class' => 'Monolog\\Handler\\MongoDBHandler',
            'monolog.mongo.client.class' => 'MongoClient',
            'monolog.handler.elasticsearch.class' => 'Monolog\\Handler\\ElasticSearchHandler',
            'monolog.elastica.client.class' => 'Elastica\\Client',
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => array(

            ),
            'monolog.handlers_to_channels' => array(
                'monolog.handler.infotainment_database_handler' => array(
                    'type' => 'inclusive',
                    'elements' => array(
                        0 => 'infotainment',
                    ),
                ),
                'monolog.handler.activity_database_handler' => array(
                    'type' => 'inclusive',
                    'elements' => array(
                        0 => 'api',
                        1 => 'activity',
                    ),
                ),
                'monolog.handler.infotainment_handler' => array(
                    'type' => 'inclusive',
                    'elements' => array(
                        0 => 'infotainment',
                    ),
                ),
                'monolog.handler.login_handler' => array(
                    'type' => 'inclusive',
                    'elements' => array(
                        0 => 'login',
                    ),
                ),
                'monolog.handler.activity_handler' => array(
                    'type' => 'inclusive',
                    'elements' => array(
                        0 => 'activity',
                    ),
                ),
                'monolog.handler.api_handler' => array(
                    'type' => 'inclusive',
                    'elements' => array(
                        0 => 'api',
                    ),
                ),
                'monolog.handler.content_play_handler' => array(
                    'type' => 'inclusive',
                    'elements' => array(
                        0 => 'content_play',
                    ),
                ),
                'monolog.handler.main' => NULL,
            ),
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(

            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\ORM\\Mapping\\DefaultEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_dir' => (__DIR__.'/doctrine/orm/Proxies'),
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'sensio_framework_extra.view.guesser.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Templating\\TemplateGuesser',
            'sensio_framework_extra.controller.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener',
            'sensio_framework_extra.routing.loader.annot_dir.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader',
            'sensio_framework_extra.routing.loader.annot_file.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader',
            'sensio_framework_extra.routing.loader.annot_class.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Routing\\AnnotatedRouteControllerLoader',
            'sensio_framework_extra.converter.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener',
            'sensio_framework_extra.converter.manager.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager',
            'sensio_framework_extra.converter.doctrine.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter',
            'sensio_framework_extra.converter.datetime.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DateTimeParamConverter',
            'sensio_framework_extra.view.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener',
            'memcache.doctrine_cache.class' => 'Lsw\\MemcacheBundle\\Doctrine\\Cache\\MemcacheCache',
            'memcache.session_handler.class' => 'Lsw\\MemcacheBundle\\Session\\Storage\\LockingSessionHandler',
            'memcache.firewall_handler.class' => 'Lsw\\MemcacheBundle\\Firewall\\FirewallHandler',
            'memcache.data_collector.class' => 'Lsw\\MemcacheBundle\\DataCollector\\MemcacheDataCollector',
            'memcache.data_collector.template' => 'LswMemcacheBundle:Collector:memcache',
            'memcache.session_handler.auto_load' => true,
            'beelab_recaptcha2.site_key' => '6LeRcBITAAAAAKLk2Gkzq-AmCV_xuvriffck1f3m',
            'beelab_recaptcha2.secret' => '6LeRcBITAAAAALz1I3BuVftDZufgnkFifQV7K0Gz',
            'beelab_recaptcha2.enabled' => true,
            'ci.restclient.curl.defaults' => array(
                10023 => array(
                    0 => 'Content-Type: text/plain',
                ),
                68 => 25,
                13 => 25,
                78 => 25,
                27 => true,
                32 => 3,
                52 => true,
                64 => true,
            ),
            'ci.restclient.class' => 'Ci\\RestClientBundle\\Services\\RestClient',
            'mobile_detect.mobile_detector.class' => 'SunCat\\MobileDetectBundle\\DeviceDetector\\MobileDetector',
            'mobile_detect.device_view.class' => 'SunCat\\MobileDetectBundle\\Helper\\DeviceView',
            'mobile_detect.cookie_key' => 'device_view',
            'mobile_detect.switch_param' => 'device_view',
            'mobile_detect.request_listener.class' => 'SunCat\\MobileDetectBundle\\EventListener\\RequestListener',
            'mobile_detect.redirect' => array(
                'mobile' => array(
                    'is_enabled' => false,
                    'host' => NULL,
                    'status_code' => 302,
                    'action' => 'redirect',
                ),
                'tablet' => array(
                    'is_enabled' => false,
                    'host' => NULL,
                    'status_code' => 302,
                    'action' => 'redirect',
                ),
                'detect_tablet_as_mobile' => false,
            ),
            'mobile_detect.switch_device_view.save_referer_path' => true,
            'mobile_detect.twig.extension.class' => 'SunCat\\MobileDetectBundle\\Twig\\Extension\\MobileDetectExtension',
            'fos_js_routing.extractor.class' => 'FOS\\JsRoutingBundle\\Extractor\\ExposedRoutesExtractor',
            'fos_js_routing.controller.class' => 'FOS\\JsRoutingBundle\\Controller\\Controller',
            'fos_js_routing.cache_control' => array(
                'enabled' => false,
            ),
            'vod_base.operator_code' => 'AR',
            'vod_base.youbora.account_id' => 'qubit',
            'vod_base.video_js_url.shaka_url' => '//players.qubit.tv/all/1.8.0/dist/shaka.vod.bundle.js',
            'vod_base.video_js_url.hls_url' => '//players.qubit.tv/all/1.8.0/dist/hls.vod.bundle.js',
            'vod_base.video_js_url.hls_ie' => '//players.qubit.tv/all/1.6.2-ie/dist/hls.vod.bundle.js',
            'vod_base.video_js_url.hls_mobile' => '//players.qubit.tv/all/1.9.6/dist/native.vod.bundle.js',
            'vod_base.video_css_url.player' => '//players.qubit.tv/all/1.8.0/styles/video-js.css',
            'vod_base.video_css_url.qubit' => '//players.qubit.tv/all/1.8.0/styles/videojs-qubit.css',
            'vod_base.video_css_url.thumbnails' => '//players.qubit.tv/all/1.8.0/styles/videojs-thumbnails.css',
            'vod_base.coupon_code_parameters' => array(
                'min' => 6,
                'max' => 50,
            ),
            'vod_base.active_profile_cookie_lifetime' => '86400',
            'vod_base.remember_me_cookie_lifetime' => '2678400',
            'vod_base.disabled_routes' => array(
                0 => 'select_profile',
                1 => 'switch_profile',
                2 => 'logout',
                3 => 'user_profile_edit',
                4 => 'user_profile_new',
                5 => 'operation_result',
                6 => 'payment_method',
                7 => 'user_activate_subscription',
                8 => 'user_activate_payment_method',
                9 => 'operation_status',
                10 => 'infotainment_callback',
                11 => 'registration',
                12 => 'landing',
                13 => 'login_check',
                14 => 'promotion_and_subscription',
            ),
            'vod_base.logout_target' => 'homepage',
            'vod_base.recommender_source' => 'WEBV5',
            'vod_base.enabled_countries' => array(
                0 => 'AR',
            ),
            'vod_base.api_url' => 'http://services.qubit.tv/index.php/v2/json',
            'vod_base.api_apk' => '9088-697E',
            'vod_base.api_secret' => '5fd2a7181825445eabd5edfdee1345baab942b2902c42',
            'vod_base.currency_decimals' => 0,
            'vod_base.google_analitycs_events.related' => 'relacionadas',
            'vod_base.google_analitycs_events.search' => 'busqueda',
            'vod_base.payment_methods.global_collect.configuration.invalid_bin_cards' => '',
            'vod_base.payment_methods.global_collect.configuration.country_code_enabled' => 'AR,CO,EC,GT,UY,PY,CL,US,99',
            'vod_base.payment_methods' => array(
                'global_collect' => array(
                    'configuration' => array(
                        'merchant_id' => 552,
                        'api_key_id' => 'c41676f48d535981',
                        'secret_api_key' => 'vltapAi22TsacRI3Eo3+RBaOEmfmIILRtWw9C459A78=',
                        'base_url' => 'https://api.globalcollect.com/',
                        'countryCode' => 'AR',
                        'currencyCode' => 'ARS',
                        'environment' => 'PROD',
                        'invalid_bin_cards' => '',
                        'country_code_enabled' => 'AR,CO,EC,GT,UY,PY,CL,US,99',
                    ),
                ),
                'movistar' => array(
                    'configuration' => array(
                        'id_service' => 116242,
                        'id_service_try' => 116243,
                        'user' => 'qubitapi',
                        'pass' => 'q41ACz_',
                    ),
                ),
            ),
            'vod_base.payment.gateway.global_collect.class' => 'VOD\\BaseBundle\\Services\\Payment\\Gateway\\GlobalCollect\\GlobalCollect',
            'vod_base.payment.gateway.movistar.class' => 'VOD\\BaseBundle\\Services\\Payment\\Gateway\\Movistar\\Movistar',
            'vod_base.payment.gateway.stripe.class' => 'VOD\\BaseBundle\\Services\\Payment\\Gateway\\Stripe\\Stripe',
            'vod_base.payment.form.class' => 'VOD\\BaseBundle\\Form\\Type\\PaymentType',
            'vod_itv_base.debug' => true,
            'doctrine_migrations.dir_name' => ($this->targetDirs[2].'/../vendor/vod/base-bundle/Migrations'),
            'doctrine_migrations.namespace' => 'VODBaseBundle\\Migrations',
            'doctrine_migrations.table_name' => 'migrations',
            'doctrine_migrations.name' => 'VODBaseBundle Migrations',
            'doctrine_migrations.organize_migrations' => false,
            'web_profiler.controller.profiler.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController',
            'web_profiler.controller.router.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\RouterController',
            'web_profiler.controller.exception.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ExceptionController',
            'twig.extension.webprofiler.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension',
            'web_profiler.debug_toolbar.position' => 'bottom',
            'web_profiler.debug_toolbar.class' => 'Symfony\\Bundle\\WebProfilerBundle\\EventListener\\WebDebugToolbarListener',
            'web_profiler.debug_toolbar.intercept_redirects' => false,
            'web_profiler.debug_toolbar.mode' => 2,
            'data_collector.templates' => array(
                'data_collector.request' => array(
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ),
                'data_collector.time' => array(
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ),
                'data_collector.memory' => array(
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ),
                'data_collector.ajax' => array(
                    0 => 'ajax',
                    1 => '@WebProfiler/Collector/ajax.html.twig',
                ),
                'data_collector.form' => array(
                    0 => 'form',
                    1 => '@WebProfiler/Collector/form.html.twig',
                ),
                'data_collector.exception' => array(
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ),
                'data_collector.logger' => array(
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ),
                'data_collector.events' => array(
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ),
                'data_collector.router' => array(
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ),
                'data_collector.translation' => array(
                    0 => 'translation',
                    1 => '@WebProfiler/Collector/translation.html.twig',
                ),
                'data_collector.security' => array(
                    0 => 'security',
                    1 => '@Security/Collector/security.html.twig',
                ),
                'data_collector.twig' => array(
                    0 => 'twig',
                    1 => '@WebProfiler/Collector/twig.html.twig',
                ),
                'data_collector.doctrine' => array(
                    0 => 'db',
                    1 => '@Doctrine/Collector/db.html.twig',
                ),
                'data_collector.dump' => array(
                    0 => 'dump',
                    1 => '@Debug/Profiler/dump.html.twig',
                ),
                'memcache.data_collector' => array(
                    0 => 'memcache',
                    1 => 'LswMemcacheBundle:Collector:memcache',
                ),
                'mobile_detect_bundle.device.collector' => array(
                    0 => 'device.collector',
                    1 => 'MobileDetectBundle:Collector:device',
                ),
                'data_collector.config' => array(
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ),
            ),
            'console.command.ids' => array(
                0 => 'sensio_distribution.security_checker.command',
            ),
        );
    }
}

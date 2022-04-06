<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagement extends Entity 
{
    /** @var DateTime|null $accountMoveCompletionDateTime The date & time when tenant data moved between scaleunits. */
    private ?DateTime $accountMoveCompletionDateTime = null;
    
    /** @var AdminConsent|null $adminConsent Admin consent information. */
    private ?AdminConsent $adminConsent = null;
    
    /** @var AdvancedThreatProtectionOnboardingStateSummary|null $advancedThreatProtectionOnboardingStateSummary The summary state of ATP onboarding state for this account. */
    private ?AdvancedThreatProtectionOnboardingStateSummary $advancedThreatProtectionOnboardingStateSummary = null;
    
    /** @var array<AndroidDeviceOwnerEnrollmentProfile>|null $androidDeviceOwnerEnrollmentProfiles Android device owner enrollment profile entities. */
    private ?array $androidDeviceOwnerEnrollmentProfiles = null;
    
    /** @var array<AndroidForWorkAppConfigurationSchema>|null $androidForWorkAppConfigurationSchemas Android for Work app configuration schema entities. */
    private ?array $androidForWorkAppConfigurationSchemas = null;
    
    /** @var array<AndroidForWorkEnrollmentProfile>|null $androidForWorkEnrollmentProfiles Android for Work enrollment profile entities. */
    private ?array $androidForWorkEnrollmentProfiles = null;
    
    /** @var AndroidForWorkSettings|null $androidForWorkSettings The singleton Android for Work settings entity. */
    private ?AndroidForWorkSettings $androidForWorkSettings = null;
    
    /** @var AndroidManagedStoreAccountEnterpriseSettings|null $androidManagedStoreAccountEnterpriseSettings The singleton Android managed store account enterprise settings entity. */
    private ?AndroidManagedStoreAccountEnterpriseSettings $androidManagedStoreAccountEnterpriseSettings = null;
    
    /** @var array<AndroidManagedStoreAppConfigurationSchema>|null $androidManagedStoreAppConfigurationSchemas Android Enterprise app configuration schema entities. */
    private ?array $androidManagedStoreAppConfigurationSchemas = null;
    
    /** @var ApplePushNotificationCertificate|null $applePushNotificationCertificate Apple push notification certificate. */
    private ?ApplePushNotificationCertificate $applePushNotificationCertificate = null;
    
    /** @var array<AppleUserInitiatedEnrollmentProfile>|null $appleUserInitiatedEnrollmentProfiles Apple user initiated enrollment profiles */
    private ?array $appleUserInitiatedEnrollmentProfiles = null;
    
    /** @var array<DeviceAndAppManagementAssignmentFilter>|null $assignmentFilters The list of assignment filters */
    private ?array $assignmentFilters = null;
    
    /** @var array<AuditEvent>|null $auditEvents The Audit Events */
    private ?array $auditEvents = null;
    
    /** @var array<DeviceManagementAutopilotEvent>|null $autopilotEvents The list of autopilot events for the tenant. */
    private ?array $autopilotEvents = null;
    
    /** @var array<CartToClassAssociation>|null $cartToClassAssociations The Cart To Class Associations. */
    private ?array $cartToClassAssociations = null;
    
    /** @var array<DeviceManagementSettingCategory>|null $categories The available categories */
    private ?array $categories = null;
    
    /** @var array<CertificateConnectorDetails>|null $certificateConnectorDetails Collection of certificate connector details, each associated with a corresponding Intune Certificate Connector. */
    private ?array $certificateConnectorDetails = null;
    
    /** @var array<ChromeOSOnboardingSettings>|null $chromeOSOnboardingSettings Collection of ChromeOSOnboardingSettings settings associated with account. */
    private ?array $chromeOSOnboardingSettings = null;
    
    /** @var array<CloudPCConnectivityIssue>|null $cloudPCConnectivityIssues The list of CloudPC Connectivity Issue. */
    private ?array $cloudPCConnectivityIssues = null;
    
    /** @var array<ManagedDevice>|null $comanagedDevices The list of co-managed devices report */
    private ?array $comanagedDevices = null;
    
    /** @var array<ComanagementEligibleDevice>|null $comanagementEligibleDevices The list of co-management eligible devices report */
    private ?array $comanagementEligibleDevices = null;
    
    /** @var array<DeviceManagementConfigurationCategory>|null $complianceCategories List of all compliance categories */
    private ?array $complianceCategories = null;
    
    /** @var array<ComplianceManagementPartner>|null $complianceManagementPartners The list of Compliance Management Partners configured by the tenant. */
    private ?array $complianceManagementPartners = null;
    
    /** @var array<DeviceManagementCompliancePolicy>|null $compliancePolicies List of all compliance policies */
    private ?array $compliancePolicies = null;
    
    /** @var array<DeviceManagementConfigurationSettingDefinition>|null $complianceSettings List of all ComplianceSettings */
    private ?array $complianceSettings = null;
    
    /** @var OnPremisesConditionalAccessSettings|null $conditionalAccessSettings The Exchange on premises conditional access settings. On premises conditional access will require devices to be both enrolled and compliant for mail access */
    private ?OnPremisesConditionalAccessSettings $conditionalAccessSettings = null;
    
    /** @var array<ConfigManagerCollection>|null $configManagerCollections A list of ConfigManagerCollection */
    private ?array $configManagerCollections = null;
    
    /** @var array<DeviceManagementConfigurationCategory>|null $configurationCategories List of all Configuration Categories */
    private ?array $configurationCategories = null;
    
    /** @var array<DeviceManagementConfigurationPolicy>|null $configurationPolicies List of all Configuration policies */
    private ?array $configurationPolicies = null;
    
    /** @var array<DeviceManagementConfigurationPolicyTemplate>|null $configurationPolicyTemplates List of all templates */
    private ?array $configurationPolicyTemplates = null;
    
    /** @var array<DeviceManagementConfigurationSettingDefinition>|null $configurationSettings List of all ConfigurationSettings */
    private ?array $configurationSettings = null;
    
    /** @var array<DataSharingConsent>|null $dataSharingConsents Data sharing consents. */
    private ?array $dataSharingConsents = null;
    
    /** @var array<DepOnboardingSetting>|null $depOnboardingSettings This collections of multiple DEP tokens per-tenant. */
    private ?array $depOnboardingSettings = null;
    
    /** @var array<DeviceManagementDerivedCredentialSettings>|null $derivedCredentials Collection of Derived credential settings associated with account. */
    private ?array $derivedCredentials = null;
    
    /** @var array<DetectedApp>|null $detectedApps The list of detected apps associated with a device. */
    private ?array $detectedApps = null;
    
    /** @var array<DeviceCategory>|null $deviceCategories The list of device categories with the tenant. */
    private ?array $deviceCategories = null;
    
    /** @var array<DeviceCompliancePolicy>|null $deviceCompliancePolicies The device compliance policies. */
    private ?array $deviceCompliancePolicies = null;
    
    /** @var DeviceCompliancePolicyDeviceStateSummary|null $deviceCompliancePolicyDeviceStateSummary The device compliance state summary for this account. */
    private ?DeviceCompliancePolicyDeviceStateSummary $deviceCompliancePolicyDeviceStateSummary = null;
    
    /** @var array<DeviceCompliancePolicySettingStateSummary>|null $deviceCompliancePolicySettingStateSummaries The summary states of compliance policy settings for this account. */
    private ?array $deviceCompliancePolicySettingStateSummaries = null;
    
    /** @var DateTime|null $deviceComplianceReportSummarizationDateTime The last requested time of device compliance reporting for this account. This property is read-only. */
    private ?DateTime $deviceComplianceReportSummarizationDateTime = null;
    
    /** @var array<DeviceComplianceScript>|null $deviceComplianceScripts The list of device compliance scripts associated with the tenant. */
    private ?array $deviceComplianceScripts = null;
    
    /** @var array<DeviceConfigurationConflictSummary>|null $deviceConfigurationConflictSummary Summary of policies in conflict state for this account. */
    private ?array $deviceConfigurationConflictSummary = null;
    
    /** @var DeviceConfigurationDeviceStateSummary|null $deviceConfigurationDeviceStateSummaries The device configuration device state summary for this account. */
    private ?DeviceConfigurationDeviceStateSummary $deviceConfigurationDeviceStateSummaries = null;
    
    /** @var array<RestrictedAppsViolation>|null $deviceConfigurationRestrictedAppsViolations Restricted apps violations for this account. */
    private ?array $deviceConfigurationRestrictedAppsViolations = null;
    
    /** @var array<DeviceConfiguration>|null $deviceConfigurations The device configurations. */
    private ?array $deviceConfigurations = null;
    
    /** @var array<ManagedAllDeviceCertificateState>|null $deviceConfigurationsAllManagedDeviceCertificateStates Summary of all certificates for all devices. */
    private ?array $deviceConfigurationsAllManagedDeviceCertificateStates = null;
    
    /** @var DeviceConfigurationUserStateSummary|null $deviceConfigurationUserStateSummaries The device configuration user state summary for this account. */
    private ?DeviceConfigurationUserStateSummary $deviceConfigurationUserStateSummaries = null;
    
    /** @var array<DeviceCustomAttributeShellScript>|null $deviceCustomAttributeShellScripts The list of device custom attribute shell scripts associated with the tenant. */
    private ?array $deviceCustomAttributeShellScripts = null;
    
    /** @var array<DeviceEnrollmentConfiguration>|null $deviceEnrollmentConfigurations The list of device enrollment configurations */
    private ?array $deviceEnrollmentConfigurations = null;
    
    /** @var array<DeviceHealthScript>|null $deviceHealthScripts The list of device health scripts associated with the tenant. */
    private ?array $deviceHealthScripts = null;
    
    /** @var array<DeviceManagementPartner>|null $deviceManagementPartners The list of Device Management Partners configured by the tenant. */
    private ?array $deviceManagementPartners = null;
    
    /** @var array<DeviceManagementScript>|null $deviceManagementScripts The list of device management scripts associated with the tenant. */
    private ?array $deviceManagementScripts = null;
    
    /** @var DeviceProtectionOverview|null $deviceProtectionOverview Device protection overview. */
    private ?DeviceProtectionOverview $deviceProtectionOverview = null;
    
    /** @var array<DeviceShellScript>|null $deviceShellScripts The list of device shell scripts associated with the tenant. */
    private ?array $deviceShellScripts = null;
    
    /** @var array<DeviceManagementDomainJoinConnector>|null $domainJoinConnectors A list of connector objects. */
    private ?array $domainJoinConnectors = null;
    
    /** @var array<EmbeddedSIMActivationCodePool>|null $embeddedSIMActivationCodePools The embedded SIM activation code pools created by this account. */
    private ?array $embeddedSIMActivationCodePools = null;
    
    /** @var array<DeviceManagementExchangeConnector>|null $exchangeConnectors The list of Exchange Connectors configured by the tenant. */
    private ?array $exchangeConnectors = null;
    
    /** @var array<DeviceManagementExchangeOnPremisesPolicy>|null $exchangeOnPremisesPolicies The list of Exchange On Premisis policies configured by the tenant. */
    private ?array $exchangeOnPremisesPolicies = null;
    
    /** @var DeviceManagementExchangeOnPremisesPolicy|null $exchangeOnPremisesPolicy The policy which controls mobile device access to Exchange On Premises */
    private ?DeviceManagementExchangeOnPremisesPolicy $exchangeOnPremisesPolicy = null;
    
    /** @var array<GroupPolicyCategory>|null $groupPolicyCategories The available group policy categories for this account. */
    private ?array $groupPolicyCategories = null;
    
    /** @var array<GroupPolicyConfiguration>|null $groupPolicyConfigurations The group policy configurations created by this account. */
    private ?array $groupPolicyConfigurations = null;
    
    /** @var array<GroupPolicyDefinitionFile>|null $groupPolicyDefinitionFiles The available group policy definition files for this account. */
    private ?array $groupPolicyDefinitionFiles = null;
    
    /** @var array<GroupPolicyDefinition>|null $groupPolicyDefinitions The available group policy definitions for this account. */
    private ?array $groupPolicyDefinitions = null;
    
    /** @var array<GroupPolicyMigrationReport>|null $groupPolicyMigrationReports A list of Group Policy migration reports. */
    private ?array $groupPolicyMigrationReports = null;
    
    /** @var array<GroupPolicyObjectFile>|null $groupPolicyObjectFiles A list of Group Policy Object files uploaded. */
    private ?array $groupPolicyObjectFiles = null;
    
    /** @var array<GroupPolicyUploadedDefinitionFile>|null $groupPolicyUploadedDefinitionFiles The available group policy uploaded definition files for this account. */
    private ?array $groupPolicyUploadedDefinitionFiles = null;
    
    /** @var array<ImportedDeviceIdentity>|null $importedDeviceIdentities The imported device identities. */
    private ?array $importedDeviceIdentities = null;
    
    /** @var array<ImportedWindowsAutopilotDeviceIdentity>|null $importedWindowsAutopilotDeviceIdentities Collection of imported Windows autopilot devices. */
    private ?array $importedWindowsAutopilotDeviceIdentities = null;
    
    /** @var array<DeviceManagementIntent>|null $intents The device management intents */
    private ?array $intents = null;
    
    /** @var string|null $intuneAccountId Intune Account Id for given tenant */
    private ?string $intuneAccountId = null;
    
    /** @var IntuneBrand|null $intuneBrand intuneBrand contains data which is used in customizing the appearance of the Company Portal applications as well as the end user web portal. */
    private ?IntuneBrand $intuneBrand = null;
    
    /** @var array<IntuneBrandingProfile>|null $intuneBrandingProfiles Intune branding profiles targeted to AAD groups */
    private ?array $intuneBrandingProfiles = null;
    
    /** @var array<IosUpdateDeviceStatus>|null $iosUpdateStatuses The IOS software update installation statuses for this account. */
    private ?array $iosUpdateStatuses = null;
    
    /** @var DateTime|null $lastReportAggregationDateTime The last modified time of reporting for this account. This property is read-only. */
    private ?DateTime $lastReportAggregationDateTime = null;
    
    /** @var bool|null $legacyPcManangementEnabled The property to enable Non-MDM managed legacy PC management for this account. This property is read-only. */
    private ?bool $legacyPcManangementEnabled = null;
    
    /** @var array<MacOSSoftwareUpdateAccountSummary>|null $macOSSoftwareUpdateAccountSummaries The MacOS software update account summaries for this account. */
    private ?array $macOSSoftwareUpdateAccountSummaries = null;
    
    /** @var ManagedDeviceCleanupSettings|null $managedDeviceCleanupSettings Device cleanup rule */
    private ?ManagedDeviceCleanupSettings $managedDeviceCleanupSettings = null;
    
    /** @var array<ManagedDeviceEncryptionState>|null $managedDeviceEncryptionStates Encryption report for devices in this account */
    private ?array $managedDeviceEncryptionStates = null;
    
    /** @var ManagedDeviceOverview|null $managedDeviceOverview Device overview */
    private ?ManagedDeviceOverview $managedDeviceOverview = null;
    
    /** @var array<ManagedDevice>|null $managedDevices The list of managed devices. */
    private ?array $managedDevices = null;
    
    /** @var array<ManagementCondition>|null $managementConditions The management conditions associated with device management of the company. */
    private ?array $managementConditions = null;
    
    /** @var array<ManagementConditionStatement>|null $managementConditionStatements The management condition statements associated with device management of the company. */
    private ?array $managementConditionStatements = null;
    
    /** @var int|null $maximumDepTokens Maximum number of DEP tokens allowed per-tenant. */
    private ?int $maximumDepTokens = null;
    
    /** @var array<MicrosoftTunnelConfiguration>|null $microsoftTunnelConfigurations Collection of MicrosoftTunnelConfiguration settings associated with account. */
    private ?array $microsoftTunnelConfigurations = null;
    
    /** @var array<MicrosoftTunnelHealthThreshold>|null $microsoftTunnelHealthThresholds Collection of MicrosoftTunnelHealthThreshold settings associated with account. */
    private ?array $microsoftTunnelHealthThresholds = null;
    
    /** @var array<MicrosoftTunnelServerLogCollectionResponse>|null $microsoftTunnelServerLogCollectionResponses Collection of MicrosoftTunnelServerLogCollectionResponse settings associated with account. */
    private ?array $microsoftTunnelServerLogCollectionResponses = null;
    
    /** @var array<MicrosoftTunnelSite>|null $microsoftTunnelSites Collection of MicrosoftTunnelSite settings associated with account. */
    private ?array $microsoftTunnelSites = null;
    
    /** @var array<MobileAppTroubleshootingEvent>|null $mobileAppTroubleshootingEvents The collection property of MobileAppTroubleshootingEvent. */
    private ?array $mobileAppTroubleshootingEvents = null;
    
    /** @var array<MobileThreatDefenseConnector>|null $mobileThreatDefenseConnectors The list of Mobile threat Defense connectors configured by the tenant. */
    private ?array $mobileThreatDefenseConnectors = null;
    
    /** @var array<NdesConnector>|null $ndesConnectors The collection of Ndes connectors for this account. */
    private ?array $ndesConnectors = null;
    
    /** @var array<NotificationMessageTemplate>|null $notificationMessageTemplates The Notification Message Templates. */
    private ?array $notificationMessageTemplates = null;
    
    /** @var array<OemWarrantyInformationOnboarding>|null $oemWarrantyInformationOnboarding List of OEM Warranty Statuses */
    private ?array $oemWarrantyInformationOnboarding = null;
    
    /** @var array<RemoteActionAudit>|null $remoteActionAudits The list of device remote action audits with the tenant. */
    private ?array $remoteActionAudits = null;
    
    /** @var array<RemoteAssistancePartner>|null $remoteAssistancePartners The remote assist partners. */
    private ?array $remoteAssistancePartners = null;
    
    /** @var RemoteAssistanceSettings|null $remoteAssistanceSettings The remote assistance settings singleton */
    private ?RemoteAssistanceSettings $remoteAssistanceSettings = null;
    
    /** @var DeviceManagementReports|null $reports Reports singleton */
    private ?DeviceManagementReports $reports = null;
    
    /** @var array<DeviceManagementResourceAccessProfileBase>|null $resourceAccessProfiles Collection of resource access settings associated with account. */
    private ?array $resourceAccessProfiles = null;
    
    /** @var array<ResourceOperation>|null $resourceOperations The Resource Operations. */
    private ?array $resourceOperations = null;
    
    /** @var array<DeviceManagementReusablePolicySetting>|null $reusablePolicySettings List of all reusable settings that can be referred in a policy */
    private ?array $reusablePolicySettings = null;
    
    /** @var array<DeviceManagementConfigurationSettingDefinition>|null $reusableSettings List of all reusable settings */
    private ?array $reusableSettings = null;
    
    /** @var array<DeviceAndAppManagementRoleAssignment>|null $roleAssignments The Role Assignments. */
    private ?array $roleAssignments = null;
    
    /** @var array<RoleDefinition>|null $roleDefinitions The Role Definitions. */
    private ?array $roleDefinitions = null;
    
    /** @var array<RoleScopeTag>|null $roleScopeTags The Role Scope Tags. */
    private ?array $roleScopeTags = null;
    
    /** @var array<DeviceManagementSettingDefinition>|null $settingDefinitions The device management intent setting definitions */
    private ?array $settingDefinitions = null;
    
    /** @var DeviceManagementSettings|null $settings Account level settings. */
    private ?DeviceManagementSettings $settings = null;
    
    /** @var SoftwareUpdateStatusSummary|null $softwareUpdateStatusSummary The software update status summary. */
    private ?SoftwareUpdateStatusSummary $softwareUpdateStatusSummary = null;
    
    /** @var DeviceManagementSubscriptions|null $subscriptions Tenant's Subscription. Possible values are: none, intune, office365, intunePremium, intune_EDU, intune_SMB. */
    private ?DeviceManagementSubscriptions $subscriptions = null;
    
    /** @var DeviceManagementSubscriptionState|null $subscriptionState Tenant mobile device management subscription state. Possible values are: pending, active, warning, disabled, deleted, blocked, lockedOut. */
    private ?DeviceManagementSubscriptionState $subscriptionState = null;
    
    /** @var array<TelecomExpenseManagementPartner>|null $telecomExpenseManagementPartners The telecom expense management partners. */
    private ?array $telecomExpenseManagementPartners = null;
    
    /** @var array<DeviceManagementTemplate>|null $templates The available templates */
    private ?array $templates = null;
    
    /** @var array<DeviceManagementConfigurationSettingTemplate>|null $templateSettings List of all TemplateSettings */
    private ?array $templateSettings = null;
    
    /** @var TenantAttachRBAC|null $tenantAttachRBAC TenantAttach RBAC Enablement */
    private ?TenantAttachRBAC $tenantAttachRBAC = null;
    
    /** @var array<TermsAndConditions>|null $termsAndConditions The terms and conditions associated with device management of the company. */
    private ?array $termsAndConditions = null;
    
    /** @var array<DeviceManagementTroubleshootingEvent>|null $troubleshootingEvents The list of troubleshooting events for the tenant. */
    private ?array $troubleshootingEvents = null;
    
    /** @var bool|null $unlicensedAdminstratorsEnabled When enabled, users assigned as administrators via Role Assignment Memberships do not require an assigned Intune license. Prior to this, only Intune licensed users were granted permissions with an Intune role unless they were assigned a role via Azure Active Directory. You are limited to 350 unlicensed direct members for each AAD security group in a role assignment, but you can assign multiple AAD security groups to a role if you need to support more than 350 unlicensed administrators. Licensed administrators are unaffected, do not have to be direct members, nor does the 350 member limit apply. This property is read-only. */
    private ?bool $unlicensedAdminstratorsEnabled = null;
    
    /** @var array<UserExperienceAnalyticsAppHealthApplicationPerformance>|null $userExperienceAnalyticsAppHealthApplicationPerformance User experience analytics appHealth Application Performance */
    private ?array $userExperienceAnalyticsAppHealthApplicationPerformance = null;
    
    /** @var array<UserExperienceAnalyticsAppHealthAppPerformanceByAppVersion>|null $userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion User experience analytics appHealth Application Performance by App Version */
    private ?array $userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion = null;
    
    /** @var array<UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails>|null $userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails User experience analytics appHealth Application Performance by App Version details */
    private ?array $userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails = null;
    
    /** @var array<UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId>|null $userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId User experience analytics appHealth Application Performance by App Version Device Id */
    private ?array $userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId = null;
    
    /** @var array<UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion>|null $userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion User experience analytics appHealth Application Performance by OS Version */
    private ?array $userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion = null;
    
    /** @var array<UserExperienceAnalyticsAppHealthDeviceModelPerformance>|null $userExperienceAnalyticsAppHealthDeviceModelPerformance User experience analytics appHealth Model Performance */
    private ?array $userExperienceAnalyticsAppHealthDeviceModelPerformance = null;
    
    /** @var array<UserExperienceAnalyticsAppHealthDevicePerformance>|null $userExperienceAnalyticsAppHealthDevicePerformance User experience analytics appHealth Device Performance */
    private ?array $userExperienceAnalyticsAppHealthDevicePerformance = null;
    
    /** @var array<UserExperienceAnalyticsAppHealthDevicePerformanceDetails>|null $userExperienceAnalyticsAppHealthDevicePerformanceDetails User experience analytics device performance details */
    private ?array $userExperienceAnalyticsAppHealthDevicePerformanceDetails = null;
    
    /** @var array<UserExperienceAnalyticsAppHealthOSVersionPerformance>|null $userExperienceAnalyticsAppHealthOSVersionPerformance User experience analytics appHealth OS version Performance */
    private ?array $userExperienceAnalyticsAppHealthOSVersionPerformance = null;
    
    /** @var UserExperienceAnalyticsCategory|null $userExperienceAnalyticsAppHealthOverview User experience analytics appHealth overview */
    private ?UserExperienceAnalyticsCategory $userExperienceAnalyticsAppHealthOverview = null;
    
    /** @var array<UserExperienceAnalyticsBaseline>|null $userExperienceAnalyticsBaselines User experience analytics baselines */
    private ?array $userExperienceAnalyticsBaselines = null;
    
    /** @var array<UserExperienceAnalyticsBatteryHealthAppImpact>|null $userExperienceAnalyticsBatteryHealthAppImpact User Experience Analytics Battery Health App Impact */
    private ?array $userExperienceAnalyticsBatteryHealthAppImpact = null;
    
    /** @var UserExperienceAnalyticsBatteryHealthCapacityDetails|null $userExperienceAnalyticsBatteryHealthCapacityDetails User Experience Analytics Battery Health Capacity Details */
    private ?UserExperienceAnalyticsBatteryHealthCapacityDetails $userExperienceAnalyticsBatteryHealthCapacityDetails = null;
    
    /** @var array<UserExperienceAnalyticsBatteryHealthDeviceAppImpact>|null $userExperienceAnalyticsBatteryHealthDeviceAppImpact User Experience Analytics Battery Health Device App Impact */
    private ?array $userExperienceAnalyticsBatteryHealthDeviceAppImpact = null;
    
    /** @var array<UserExperienceAnalyticsBatteryHealthDevicePerformance>|null $userExperienceAnalyticsBatteryHealthDevicePerformance User Experience Analytics Battery Health Device Performance */
    private ?array $userExperienceAnalyticsBatteryHealthDevicePerformance = null;
    
    /** @var array<UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory>|null $userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory User Experience Analytics Battery Health Device Runtime History */
    private ?array $userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory = null;
    
    /** @var array<UserExperienceAnalyticsBatteryHealthModelPerformance>|null $userExperienceAnalyticsBatteryHealthModelPerformance User Experience Analytics Battery Health Model Performance */
    private ?array $userExperienceAnalyticsBatteryHealthModelPerformance = null;
    
    /** @var array<UserExperienceAnalyticsBatteryHealthOsPerformance>|null $userExperienceAnalyticsBatteryHealthOsPerformance User Experience Analytics Battery Health Os Performance */
    private ?array $userExperienceAnalyticsBatteryHealthOsPerformance = null;
    
    /** @var UserExperienceAnalyticsBatteryHealthRuntimeDetails|null $userExperienceAnalyticsBatteryHealthRuntimeDetails User Experience Analytics Battery Health Runtime Details */
    private ?UserExperienceAnalyticsBatteryHealthRuntimeDetails $userExperienceAnalyticsBatteryHealthRuntimeDetails = null;
    
    /** @var array<UserExperienceAnalyticsCategory>|null $userExperienceAnalyticsCategories User experience analytics categories */
    private ?array $userExperienceAnalyticsCategories = null;
    
    /** @var array<UserExperienceAnalyticsMetricHistory>|null $userExperienceAnalyticsDeviceMetricHistory User experience analytics device metric history */
    private ?array $userExperienceAnalyticsDeviceMetricHistory = null;
    
    /** @var array<UserExperienceAnalyticsDevicePerformance>|null $userExperienceAnalyticsDevicePerformance User experience analytics device performance */
    private ?array $userExperienceAnalyticsDevicePerformance = null;
    
    /** @var array<UserExperienceAnalyticsDeviceScores>|null $userExperienceAnalyticsDeviceScores User experience analytics device scores */
    private ?array $userExperienceAnalyticsDeviceScores = null;
    
    /** @var array<UserExperienceAnalyticsDeviceStartupHistory>|null $userExperienceAnalyticsDeviceStartupHistory User experience analytics device Startup History */
    private ?array $userExperienceAnalyticsDeviceStartupHistory = null;
    
    /** @var array<UserExperienceAnalyticsDeviceStartupProcess>|null $userExperienceAnalyticsDeviceStartupProcesses User experience analytics device Startup Processes */
    private ?array $userExperienceAnalyticsDeviceStartupProcesses = null;
    
    /** @var array<UserExperienceAnalyticsDeviceStartupProcessPerformance>|null $userExperienceAnalyticsDeviceStartupProcessPerformance User experience analytics device Startup Process Performance */
    private ?array $userExperienceAnalyticsDeviceStartupProcessPerformance = null;
    
    /** @var array<UserExperienceAnalyticsDeviceWithoutCloudIdentity>|null $userExperienceAnalyticsDevicesWithoutCloudIdentity User experience analytics devices without cloud identity. */
    private ?array $userExperienceAnalyticsDevicesWithoutCloudIdentity = null;
    
    /** @var array<UserExperienceAnalyticsImpactingProcess>|null $userExperienceAnalyticsImpactingProcess User experience analytics impacting process */
    private ?array $userExperienceAnalyticsImpactingProcess = null;
    
    /** @var array<UserExperienceAnalyticsMetricHistory>|null $userExperienceAnalyticsMetricHistory User experience analytics metric history */
    private ?array $userExperienceAnalyticsMetricHistory = null;
    
    /** @var array<UserExperienceAnalyticsModelScores>|null $userExperienceAnalyticsModelScores User experience analytics model scores */
    private ?array $userExperienceAnalyticsModelScores = null;
    
    /** @var array<UserExperienceAnalyticsNotAutopilotReadyDevice>|null $userExperienceAnalyticsNotAutopilotReadyDevice User experience analytics devices not Windows Autopilot ready. */
    private ?array $userExperienceAnalyticsNotAutopilotReadyDevice = null;
    
    /** @var UserExperienceAnalyticsOverview|null $userExperienceAnalyticsOverview User experience analytics overview */
    private ?UserExperienceAnalyticsOverview $userExperienceAnalyticsOverview = null;
    
    /** @var UserExperienceAnalyticsRegressionSummary|null $userExperienceAnalyticsRegressionSummary User experience analytics regression summary */
    private ?UserExperienceAnalyticsRegressionSummary $userExperienceAnalyticsRegressionSummary = null;
    
    /** @var array<UserExperienceAnalyticsRemoteConnection>|null $userExperienceAnalyticsRemoteConnection User experience analytics remote connection */
    private ?array $userExperienceAnalyticsRemoteConnection = null;
    
    /** @var array<UserExperienceAnalyticsResourcePerformance>|null $userExperienceAnalyticsResourcePerformance User experience analytics resource performance */
    private ?array $userExperienceAnalyticsResourcePerformance = null;
    
    /** @var array<UserExperienceAnalyticsScoreHistory>|null $userExperienceAnalyticsScoreHistory User experience analytics device Startup Score History */
    private ?array $userExperienceAnalyticsScoreHistory = null;
    
    /** @var UserExperienceAnalyticsSettings|null $userExperienceAnalyticsSettings User experience analytics device settings */
    private ?UserExperienceAnalyticsSettings $userExperienceAnalyticsSettings = null;
    
    /** @var UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric|null $userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric User experience analytics work from anywhere hardware readiness metrics. */
    private ?UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric $userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric = null;
    
    /** @var array<UserExperienceAnalyticsWorkFromAnywhereMetric>|null $userExperienceAnalyticsWorkFromAnywhereMetrics User experience analytics work from anywhere metrics. */
    private ?array $userExperienceAnalyticsWorkFromAnywhereMetrics = null;
    
    /** @var array<UserExperienceAnalyticsWorkFromAnywhereModelPerformance>|null $userExperienceAnalyticsWorkFromAnywhereModelPerformance The user experience analytics work from anywhere model performance */
    private ?array $userExperienceAnalyticsWorkFromAnywhereModelPerformance = null;
    
    /** @var array<UserPFXCertificate>|null $userPfxCertificates Collection of PFX certificates associated with a user. */
    private ?array $userPfxCertificates = null;
    
    /** @var VirtualEndpoint|null $virtualEndpoint The virtualEndpoint property */
    private ?VirtualEndpoint $virtualEndpoint = null;
    
    /** @var array<WindowsAutopilotDeploymentProfile>|null $windowsAutopilotDeploymentProfiles Windows auto pilot deployment profiles */
    private ?array $windowsAutopilotDeploymentProfiles = null;
    
    /** @var array<WindowsAutopilotDeviceIdentity>|null $windowsAutopilotDeviceIdentities The Windows autopilot device identities contained collection. */
    private ?array $windowsAutopilotDeviceIdentities = null;
    
    /** @var WindowsAutopilotSettings|null $windowsAutopilotSettings The Windows autopilot account settings. */
    private ?WindowsAutopilotSettings $windowsAutopilotSettings = null;
    
    /** @var array<WindowsDriverUpdateProfile>|null $windowsDriverUpdateProfiles A collection of windows driver update profiles */
    private ?array $windowsDriverUpdateProfiles = null;
    
    /** @var array<WindowsFeatureUpdateProfile>|null $windowsFeatureUpdateProfiles A collection of windows feature update profiles */
    private ?array $windowsFeatureUpdateProfiles = null;
    
    /** @var array<WindowsInformationProtectionAppLearningSummary>|null $windowsInformationProtectionAppLearningSummaries The windows information protection app learning summaries. */
    private ?array $windowsInformationProtectionAppLearningSummaries = null;
    
    /** @var array<WindowsInformationProtectionNetworkLearningSummary>|null $windowsInformationProtectionNetworkLearningSummaries The windows information protection network learning summaries. */
    private ?array $windowsInformationProtectionNetworkLearningSummaries = null;
    
    /** @var array<WindowsMalwareInformation>|null $windowsMalwareInformation The list of affected malware in the tenant. */
    private ?array $windowsMalwareInformation = null;
    
    /** @var WindowsMalwareOverview|null $windowsMalwareOverview Malware overview for windows devices. */
    private ?WindowsMalwareOverview $windowsMalwareOverview = null;
    
    /** @var array<WindowsQualityUpdateProfile>|null $windowsQualityUpdateProfiles A collection of windows quality update profiles */
    private ?array $windowsQualityUpdateProfiles = null;
    
    /** @var array<WindowsUpdateCatalogItem>|null $windowsUpdateCatalogItems A collection of windows update catalog items (fetaure updates item , quality updates item) */
    private ?array $windowsUpdateCatalogItems = null;
    
    /**
     * Instantiates a new deviceManagement and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagement
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagement {
        return new DeviceManagement();
    }

    /**
     * Gets the accountMoveCompletionDateTime property value. The date & time when tenant data moved between scaleunits.
     * @return DateTime|null
    */
    public function getAccountMoveCompletionDateTime(): ?DateTime {
        return $this->accountMoveCompletionDateTime;
    }

    /**
     * Gets the adminConsent property value. Admin consent information.
     * @return AdminConsent|null
    */
    public function getAdminConsent(): ?AdminConsent {
        return $this->adminConsent;
    }

    /**
     * Gets the advancedThreatProtectionOnboardingStateSummary property value. The summary state of ATP onboarding state for this account.
     * @return AdvancedThreatProtectionOnboardingStateSummary|null
    */
    public function getAdvancedThreatProtectionOnboardingStateSummary(): ?AdvancedThreatProtectionOnboardingStateSummary {
        return $this->advancedThreatProtectionOnboardingStateSummary;
    }

    /**
     * Gets the androidDeviceOwnerEnrollmentProfiles property value. Android device owner enrollment profile entities.
     * @return array<AndroidDeviceOwnerEnrollmentProfile>|null
    */
    public function getAndroidDeviceOwnerEnrollmentProfiles(): ?array {
        return $this->androidDeviceOwnerEnrollmentProfiles;
    }

    /**
     * Gets the androidForWorkAppConfigurationSchemas property value. Android for Work app configuration schema entities.
     * @return array<AndroidForWorkAppConfigurationSchema>|null
    */
    public function getAndroidForWorkAppConfigurationSchemas(): ?array {
        return $this->androidForWorkAppConfigurationSchemas;
    }

    /**
     * Gets the androidForWorkEnrollmentProfiles property value. Android for Work enrollment profile entities.
     * @return array<AndroidForWorkEnrollmentProfile>|null
    */
    public function getAndroidForWorkEnrollmentProfiles(): ?array {
        return $this->androidForWorkEnrollmentProfiles;
    }

    /**
     * Gets the androidForWorkSettings property value. The singleton Android for Work settings entity.
     * @return AndroidForWorkSettings|null
    */
    public function getAndroidForWorkSettings(): ?AndroidForWorkSettings {
        return $this->androidForWorkSettings;
    }

    /**
     * Gets the androidManagedStoreAccountEnterpriseSettings property value. The singleton Android managed store account enterprise settings entity.
     * @return AndroidManagedStoreAccountEnterpriseSettings|null
    */
    public function getAndroidManagedStoreAccountEnterpriseSettings(): ?AndroidManagedStoreAccountEnterpriseSettings {
        return $this->androidManagedStoreAccountEnterpriseSettings;
    }

    /**
     * Gets the androidManagedStoreAppConfigurationSchemas property value. Android Enterprise app configuration schema entities.
     * @return array<AndroidManagedStoreAppConfigurationSchema>|null
    */
    public function getAndroidManagedStoreAppConfigurationSchemas(): ?array {
        return $this->androidManagedStoreAppConfigurationSchemas;
    }

    /**
     * Gets the applePushNotificationCertificate property value. Apple push notification certificate.
     * @return ApplePushNotificationCertificate|null
    */
    public function getApplePushNotificationCertificate(): ?ApplePushNotificationCertificate {
        return $this->applePushNotificationCertificate;
    }

    /**
     * Gets the appleUserInitiatedEnrollmentProfiles property value. Apple user initiated enrollment profiles
     * @return array<AppleUserInitiatedEnrollmentProfile>|null
    */
    public function getAppleUserInitiatedEnrollmentProfiles(): ?array {
        return $this->appleUserInitiatedEnrollmentProfiles;
    }

    /**
     * Gets the assignmentFilters property value. The list of assignment filters
     * @return array<DeviceAndAppManagementAssignmentFilter>|null
    */
    public function getAssignmentFilters(): ?array {
        return $this->assignmentFilters;
    }

    /**
     * Gets the auditEvents property value. The Audit Events
     * @return array<AuditEvent>|null
    */
    public function getAuditEvents(): ?array {
        return $this->auditEvents;
    }

    /**
     * Gets the autopilotEvents property value. The list of autopilot events for the tenant.
     * @return array<DeviceManagementAutopilotEvent>|null
    */
    public function getAutopilotEvents(): ?array {
        return $this->autopilotEvents;
    }

    /**
     * Gets the cartToClassAssociations property value. The Cart To Class Associations.
     * @return array<CartToClassAssociation>|null
    */
    public function getCartToClassAssociations(): ?array {
        return $this->cartToClassAssociations;
    }

    /**
     * Gets the categories property value. The available categories
     * @return array<DeviceManagementSettingCategory>|null
    */
    public function getCategories(): ?array {
        return $this->categories;
    }

    /**
     * Gets the certificateConnectorDetails property value. Collection of certificate connector details, each associated with a corresponding Intune Certificate Connector.
     * @return array<CertificateConnectorDetails>|null
    */
    public function getCertificateConnectorDetails(): ?array {
        return $this->certificateConnectorDetails;
    }

    /**
     * Gets the chromeOSOnboardingSettings property value. Collection of ChromeOSOnboardingSettings settings associated with account.
     * @return array<ChromeOSOnboardingSettings>|null
    */
    public function getChromeOSOnboardingSettings(): ?array {
        return $this->chromeOSOnboardingSettings;
    }

    /**
     * Gets the cloudPCConnectivityIssues property value. The list of CloudPC Connectivity Issue.
     * @return array<CloudPCConnectivityIssue>|null
    */
    public function getCloudPCConnectivityIssues(): ?array {
        return $this->cloudPCConnectivityIssues;
    }

    /**
     * Gets the comanagedDevices property value. The list of co-managed devices report
     * @return array<ManagedDevice>|null
    */
    public function getComanagedDevices(): ?array {
        return $this->comanagedDevices;
    }

    /**
     * Gets the comanagementEligibleDevices property value. The list of co-management eligible devices report
     * @return array<ComanagementEligibleDevice>|null
    */
    public function getComanagementEligibleDevices(): ?array {
        return $this->comanagementEligibleDevices;
    }

    /**
     * Gets the complianceCategories property value. List of all compliance categories
     * @return array<DeviceManagementConfigurationCategory>|null
    */
    public function getComplianceCategories(): ?array {
        return $this->complianceCategories;
    }

    /**
     * Gets the complianceManagementPartners property value. The list of Compliance Management Partners configured by the tenant.
     * @return array<ComplianceManagementPartner>|null
    */
    public function getComplianceManagementPartners(): ?array {
        return $this->complianceManagementPartners;
    }

    /**
     * Gets the compliancePolicies property value. List of all compliance policies
     * @return array<DeviceManagementCompliancePolicy>|null
    */
    public function getCompliancePolicies(): ?array {
        return $this->compliancePolicies;
    }

    /**
     * Gets the complianceSettings property value. List of all ComplianceSettings
     * @return array<DeviceManagementConfigurationSettingDefinition>|null
    */
    public function getComplianceSettings(): ?array {
        return $this->complianceSettings;
    }

    /**
     * Gets the conditionalAccessSettings property value. The Exchange on premises conditional access settings. On premises conditional access will require devices to be both enrolled and compliant for mail access
     * @return OnPremisesConditionalAccessSettings|null
    */
    public function getConditionalAccessSettings(): ?OnPremisesConditionalAccessSettings {
        return $this->conditionalAccessSettings;
    }

    /**
     * Gets the configManagerCollections property value. A list of ConfigManagerCollection
     * @return array<ConfigManagerCollection>|null
    */
    public function getConfigManagerCollections(): ?array {
        return $this->configManagerCollections;
    }

    /**
     * Gets the configurationCategories property value. List of all Configuration Categories
     * @return array<DeviceManagementConfigurationCategory>|null
    */
    public function getConfigurationCategories(): ?array {
        return $this->configurationCategories;
    }

    /**
     * Gets the configurationPolicies property value. List of all Configuration policies
     * @return array<DeviceManagementConfigurationPolicy>|null
    */
    public function getConfigurationPolicies(): ?array {
        return $this->configurationPolicies;
    }

    /**
     * Gets the configurationPolicyTemplates property value. List of all templates
     * @return array<DeviceManagementConfigurationPolicyTemplate>|null
    */
    public function getConfigurationPolicyTemplates(): ?array {
        return $this->configurationPolicyTemplates;
    }

    /**
     * Gets the configurationSettings property value. List of all ConfigurationSettings
     * @return array<DeviceManagementConfigurationSettingDefinition>|null
    */
    public function getConfigurationSettings(): ?array {
        return $this->configurationSettings;
    }

    /**
     * Gets the dataSharingConsents property value. Data sharing consents.
     * @return array<DataSharingConsent>|null
    */
    public function getDataSharingConsents(): ?array {
        return $this->dataSharingConsents;
    }

    /**
     * Gets the depOnboardingSettings property value. This collections of multiple DEP tokens per-tenant.
     * @return array<DepOnboardingSetting>|null
    */
    public function getDepOnboardingSettings(): ?array {
        return $this->depOnboardingSettings;
    }

    /**
     * Gets the derivedCredentials property value. Collection of Derived credential settings associated with account.
     * @return array<DeviceManagementDerivedCredentialSettings>|null
    */
    public function getDerivedCredentials(): ?array {
        return $this->derivedCredentials;
    }

    /**
     * Gets the detectedApps property value. The list of detected apps associated with a device.
     * @return array<DetectedApp>|null
    */
    public function getDetectedApps(): ?array {
        return $this->detectedApps;
    }

    /**
     * Gets the deviceCategories property value. The list of device categories with the tenant.
     * @return array<DeviceCategory>|null
    */
    public function getDeviceCategories(): ?array {
        return $this->deviceCategories;
    }

    /**
     * Gets the deviceCompliancePolicies property value. The device compliance policies.
     * @return array<DeviceCompliancePolicy>|null
    */
    public function getDeviceCompliancePolicies(): ?array {
        return $this->deviceCompliancePolicies;
    }

    /**
     * Gets the deviceCompliancePolicyDeviceStateSummary property value. The device compliance state summary for this account.
     * @return DeviceCompliancePolicyDeviceStateSummary|null
    */
    public function getDeviceCompliancePolicyDeviceStateSummary(): ?DeviceCompliancePolicyDeviceStateSummary {
        return $this->deviceCompliancePolicyDeviceStateSummary;
    }

    /**
     * Gets the deviceCompliancePolicySettingStateSummaries property value. The summary states of compliance policy settings for this account.
     * @return array<DeviceCompliancePolicySettingStateSummary>|null
    */
    public function getDeviceCompliancePolicySettingStateSummaries(): ?array {
        return $this->deviceCompliancePolicySettingStateSummaries;
    }

    /**
     * Gets the deviceComplianceReportSummarizationDateTime property value. The last requested time of device compliance reporting for this account. This property is read-only.
     * @return DateTime|null
    */
    public function getDeviceComplianceReportSummarizationDateTime(): ?DateTime {
        return $this->deviceComplianceReportSummarizationDateTime;
    }

    /**
     * Gets the deviceComplianceScripts property value. The list of device compliance scripts associated with the tenant.
     * @return array<DeviceComplianceScript>|null
    */
    public function getDeviceComplianceScripts(): ?array {
        return $this->deviceComplianceScripts;
    }

    /**
     * Gets the deviceConfigurationConflictSummary property value. Summary of policies in conflict state for this account.
     * @return array<DeviceConfigurationConflictSummary>|null
    */
    public function getDeviceConfigurationConflictSummary(): ?array {
        return $this->deviceConfigurationConflictSummary;
    }

    /**
     * Gets the deviceConfigurationDeviceStateSummaries property value. The device configuration device state summary for this account.
     * @return DeviceConfigurationDeviceStateSummary|null
    */
    public function getDeviceConfigurationDeviceStateSummaries(): ?DeviceConfigurationDeviceStateSummary {
        return $this->deviceConfigurationDeviceStateSummaries;
    }

    /**
     * Gets the deviceConfigurationRestrictedAppsViolations property value. Restricted apps violations for this account.
     * @return array<RestrictedAppsViolation>|null
    */
    public function getDeviceConfigurationRestrictedAppsViolations(): ?array {
        return $this->deviceConfigurationRestrictedAppsViolations;
    }

    /**
     * Gets the deviceConfigurations property value. The device configurations.
     * @return array<DeviceConfiguration>|null
    */
    public function getDeviceConfigurations(): ?array {
        return $this->deviceConfigurations;
    }

    /**
     * Gets the deviceConfigurationsAllManagedDeviceCertificateStates property value. Summary of all certificates for all devices.
     * @return array<ManagedAllDeviceCertificateState>|null
    */
    public function getDeviceConfigurationsAllManagedDeviceCertificateStates(): ?array {
        return $this->deviceConfigurationsAllManagedDeviceCertificateStates;
    }

    /**
     * Gets the deviceConfigurationUserStateSummaries property value. The device configuration user state summary for this account.
     * @return DeviceConfigurationUserStateSummary|null
    */
    public function getDeviceConfigurationUserStateSummaries(): ?DeviceConfigurationUserStateSummary {
        return $this->deviceConfigurationUserStateSummaries;
    }

    /**
     * Gets the deviceCustomAttributeShellScripts property value. The list of device custom attribute shell scripts associated with the tenant.
     * @return array<DeviceCustomAttributeShellScript>|null
    */
    public function getDeviceCustomAttributeShellScripts(): ?array {
        return $this->deviceCustomAttributeShellScripts;
    }

    /**
     * Gets the deviceEnrollmentConfigurations property value. The list of device enrollment configurations
     * @return array<DeviceEnrollmentConfiguration>|null
    */
    public function getDeviceEnrollmentConfigurations(): ?array {
        return $this->deviceEnrollmentConfigurations;
    }

    /**
     * Gets the deviceHealthScripts property value. The list of device health scripts associated with the tenant.
     * @return array<DeviceHealthScript>|null
    */
    public function getDeviceHealthScripts(): ?array {
        return $this->deviceHealthScripts;
    }

    /**
     * Gets the deviceManagementPartners property value. The list of Device Management Partners configured by the tenant.
     * @return array<DeviceManagementPartner>|null
    */
    public function getDeviceManagementPartners(): ?array {
        return $this->deviceManagementPartners;
    }

    /**
     * Gets the deviceManagementScripts property value. The list of device management scripts associated with the tenant.
     * @return array<DeviceManagementScript>|null
    */
    public function getDeviceManagementScripts(): ?array {
        return $this->deviceManagementScripts;
    }

    /**
     * Gets the deviceProtectionOverview property value. Device protection overview.
     * @return DeviceProtectionOverview|null
    */
    public function getDeviceProtectionOverview(): ?DeviceProtectionOverview {
        return $this->deviceProtectionOverview;
    }

    /**
     * Gets the deviceShellScripts property value. The list of device shell scripts associated with the tenant.
     * @return array<DeviceShellScript>|null
    */
    public function getDeviceShellScripts(): ?array {
        return $this->deviceShellScripts;
    }

    /**
     * Gets the domainJoinConnectors property value. A list of connector objects.
     * @return array<DeviceManagementDomainJoinConnector>|null
    */
    public function getDomainJoinConnectors(): ?array {
        return $this->domainJoinConnectors;
    }

    /**
     * Gets the embeddedSIMActivationCodePools property value. The embedded SIM activation code pools created by this account.
     * @return array<EmbeddedSIMActivationCodePool>|null
    */
    public function getEmbeddedSIMActivationCodePools(): ?array {
        return $this->embeddedSIMActivationCodePools;
    }

    /**
     * Gets the exchangeConnectors property value. The list of Exchange Connectors configured by the tenant.
     * @return array<DeviceManagementExchangeConnector>|null
    */
    public function getExchangeConnectors(): ?array {
        return $this->exchangeConnectors;
    }

    /**
     * Gets the exchangeOnPremisesPolicies property value. The list of Exchange On Premisis policies configured by the tenant.
     * @return array<DeviceManagementExchangeOnPremisesPolicy>|null
    */
    public function getExchangeOnPremisesPolicies(): ?array {
        return $this->exchangeOnPremisesPolicies;
    }

    /**
     * Gets the exchangeOnPremisesPolicy property value. The policy which controls mobile device access to Exchange On Premises
     * @return DeviceManagementExchangeOnPremisesPolicy|null
    */
    public function getExchangeOnPremisesPolicy(): ?DeviceManagementExchangeOnPremisesPolicy {
        return $this->exchangeOnPremisesPolicy;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'accountMoveCompletionDateTime' => function (self $o, ParseNode $n) { $o->setAccountMoveCompletionDateTime($n->getDateTimeValue()); },
            'adminConsent' => function (self $o, ParseNode $n) { $o->setAdminConsent($n->getObjectValue(AdminConsent::class)); },
            'advancedThreatProtectionOnboardingStateSummary' => function (self $o, ParseNode $n) { $o->setAdvancedThreatProtectionOnboardingStateSummary($n->getObjectValue(AdvancedThreatProtectionOnboardingStateSummary::class)); },
            'androidDeviceOwnerEnrollmentProfiles' => function (self $o, ParseNode $n) { $o->setAndroidDeviceOwnerEnrollmentProfiles($n->getCollectionOfObjectValues(AndroidDeviceOwnerEnrollmentProfile::class)); },
            'androidForWorkAppConfigurationSchemas' => function (self $o, ParseNode $n) { $o->setAndroidForWorkAppConfigurationSchemas($n->getCollectionOfObjectValues(AndroidForWorkAppConfigurationSchema::class)); },
            'androidForWorkEnrollmentProfiles' => function (self $o, ParseNode $n) { $o->setAndroidForWorkEnrollmentProfiles($n->getCollectionOfObjectValues(AndroidForWorkEnrollmentProfile::class)); },
            'androidForWorkSettings' => function (self $o, ParseNode $n) { $o->setAndroidForWorkSettings($n->getObjectValue(AndroidForWorkSettings::class)); },
            'androidManagedStoreAccountEnterpriseSettings' => function (self $o, ParseNode $n) { $o->setAndroidManagedStoreAccountEnterpriseSettings($n->getObjectValue(AndroidManagedStoreAccountEnterpriseSettings::class)); },
            'androidManagedStoreAppConfigurationSchemas' => function (self $o, ParseNode $n) { $o->setAndroidManagedStoreAppConfigurationSchemas($n->getCollectionOfObjectValues(AndroidManagedStoreAppConfigurationSchema::class)); },
            'applePushNotificationCertificate' => function (self $o, ParseNode $n) { $o->setApplePushNotificationCertificate($n->getObjectValue(ApplePushNotificationCertificate::class)); },
            'appleUserInitiatedEnrollmentProfiles' => function (self $o, ParseNode $n) { $o->setAppleUserInitiatedEnrollmentProfiles($n->getCollectionOfObjectValues(AppleUserInitiatedEnrollmentProfile::class)); },
            'assignmentFilters' => function (self $o, ParseNode $n) { $o->setAssignmentFilters($n->getCollectionOfObjectValues(DeviceAndAppManagementAssignmentFilter::class)); },
            'auditEvents' => function (self $o, ParseNode $n) { $o->setAuditEvents($n->getCollectionOfObjectValues(AuditEvent::class)); },
            'autopilotEvents' => function (self $o, ParseNode $n) { $o->setAutopilotEvents($n->getCollectionOfObjectValues(DeviceManagementAutopilotEvent::class)); },
            'cartToClassAssociations' => function (self $o, ParseNode $n) { $o->setCartToClassAssociations($n->getCollectionOfObjectValues(CartToClassAssociation::class)); },
            'categories' => function (self $o, ParseNode $n) { $o->setCategories($n->getCollectionOfObjectValues(DeviceManagementSettingCategory::class)); },
            'certificateConnectorDetails' => function (self $o, ParseNode $n) { $o->setCertificateConnectorDetails($n->getCollectionOfObjectValues(CertificateConnectorDetails::class)); },
            'chromeOSOnboardingSettings' => function (self $o, ParseNode $n) { $o->setChromeOSOnboardingSettings($n->getCollectionOfObjectValues(ChromeOSOnboardingSettings::class)); },
            'cloudPCConnectivityIssues' => function (self $o, ParseNode $n) { $o->setCloudPCConnectivityIssues($n->getCollectionOfObjectValues(CloudPCConnectivityIssue::class)); },
            'comanagedDevices' => function (self $o, ParseNode $n) { $o->setComanagedDevices($n->getCollectionOfObjectValues(ManagedDevice::class)); },
            'comanagementEligibleDevices' => function (self $o, ParseNode $n) { $o->setComanagementEligibleDevices($n->getCollectionOfObjectValues(ComanagementEligibleDevice::class)); },
            'complianceCategories' => function (self $o, ParseNode $n) { $o->setComplianceCategories($n->getCollectionOfObjectValues(DeviceManagementConfigurationCategory::class)); },
            'complianceManagementPartners' => function (self $o, ParseNode $n) { $o->setComplianceManagementPartners($n->getCollectionOfObjectValues(ComplianceManagementPartner::class)); },
            'compliancePolicies' => function (self $o, ParseNode $n) { $o->setCompliancePolicies($n->getCollectionOfObjectValues(DeviceManagementCompliancePolicy::class)); },
            'complianceSettings' => function (self $o, ParseNode $n) { $o->setComplianceSettings($n->getCollectionOfObjectValues(DeviceManagementConfigurationSettingDefinition::class)); },
            'conditionalAccessSettings' => function (self $o, ParseNode $n) { $o->setConditionalAccessSettings($n->getObjectValue(OnPremisesConditionalAccessSettings::class)); },
            'configManagerCollections' => function (self $o, ParseNode $n) { $o->setConfigManagerCollections($n->getCollectionOfObjectValues(ConfigManagerCollection::class)); },
            'configurationCategories' => function (self $o, ParseNode $n) { $o->setConfigurationCategories($n->getCollectionOfObjectValues(DeviceManagementConfigurationCategory::class)); },
            'configurationPolicies' => function (self $o, ParseNode $n) { $o->setConfigurationPolicies($n->getCollectionOfObjectValues(DeviceManagementConfigurationPolicy::class)); },
            'configurationPolicyTemplates' => function (self $o, ParseNode $n) { $o->setConfigurationPolicyTemplates($n->getCollectionOfObjectValues(DeviceManagementConfigurationPolicyTemplate::class)); },
            'configurationSettings' => function (self $o, ParseNode $n) { $o->setConfigurationSettings($n->getCollectionOfObjectValues(DeviceManagementConfigurationSettingDefinition::class)); },
            'dataSharingConsents' => function (self $o, ParseNode $n) { $o->setDataSharingConsents($n->getCollectionOfObjectValues(DataSharingConsent::class)); },
            'depOnboardingSettings' => function (self $o, ParseNode $n) { $o->setDepOnboardingSettings($n->getCollectionOfObjectValues(DepOnboardingSetting::class)); },
            'derivedCredentials' => function (self $o, ParseNode $n) { $o->setDerivedCredentials($n->getCollectionOfObjectValues(DeviceManagementDerivedCredentialSettings::class)); },
            'detectedApps' => function (self $o, ParseNode $n) { $o->setDetectedApps($n->getCollectionOfObjectValues(DetectedApp::class)); },
            'deviceCategories' => function (self $o, ParseNode $n) { $o->setDeviceCategories($n->getCollectionOfObjectValues(DeviceCategory::class)); },
            'deviceCompliancePolicies' => function (self $o, ParseNode $n) { $o->setDeviceCompliancePolicies($n->getCollectionOfObjectValues(DeviceCompliancePolicy::class)); },
            'deviceCompliancePolicyDeviceStateSummary' => function (self $o, ParseNode $n) { $o->setDeviceCompliancePolicyDeviceStateSummary($n->getObjectValue(DeviceCompliancePolicyDeviceStateSummary::class)); },
            'deviceCompliancePolicySettingStateSummaries' => function (self $o, ParseNode $n) { $o->setDeviceCompliancePolicySettingStateSummaries($n->getCollectionOfObjectValues(DeviceCompliancePolicySettingStateSummary::class)); },
            'deviceComplianceReportSummarizationDateTime' => function (self $o, ParseNode $n) { $o->setDeviceComplianceReportSummarizationDateTime($n->getDateTimeValue()); },
            'deviceComplianceScripts' => function (self $o, ParseNode $n) { $o->setDeviceComplianceScripts($n->getCollectionOfObjectValues(DeviceComplianceScript::class)); },
            'deviceConfigurationConflictSummary' => function (self $o, ParseNode $n) { $o->setDeviceConfigurationConflictSummary($n->getCollectionOfObjectValues(DeviceConfigurationConflictSummary::class)); },
            'deviceConfigurationDeviceStateSummaries' => function (self $o, ParseNode $n) { $o->setDeviceConfigurationDeviceStateSummaries($n->getObjectValue(DeviceConfigurationDeviceStateSummary::class)); },
            'deviceConfigurationRestrictedAppsViolations' => function (self $o, ParseNode $n) { $o->setDeviceConfigurationRestrictedAppsViolations($n->getCollectionOfObjectValues(RestrictedAppsViolation::class)); },
            'deviceConfigurations' => function (self $o, ParseNode $n) { $o->setDeviceConfigurations($n->getCollectionOfObjectValues(DeviceConfiguration::class)); },
            'deviceConfigurationsAllManagedDeviceCertificateStates' => function (self $o, ParseNode $n) { $o->setDeviceConfigurationsAllManagedDeviceCertificateStates($n->getCollectionOfObjectValues(ManagedAllDeviceCertificateState::class)); },
            'deviceConfigurationUserStateSummaries' => function (self $o, ParseNode $n) { $o->setDeviceConfigurationUserStateSummaries($n->getObjectValue(DeviceConfigurationUserStateSummary::class)); },
            'deviceCustomAttributeShellScripts' => function (self $o, ParseNode $n) { $o->setDeviceCustomAttributeShellScripts($n->getCollectionOfObjectValues(DeviceCustomAttributeShellScript::class)); },
            'deviceEnrollmentConfigurations' => function (self $o, ParseNode $n) { $o->setDeviceEnrollmentConfigurations($n->getCollectionOfObjectValues(DeviceEnrollmentConfiguration::class)); },
            'deviceHealthScripts' => function (self $o, ParseNode $n) { $o->setDeviceHealthScripts($n->getCollectionOfObjectValues(DeviceHealthScript::class)); },
            'deviceManagementPartners' => function (self $o, ParseNode $n) { $o->setDeviceManagementPartners($n->getCollectionOfObjectValues(DeviceManagementPartner::class)); },
            'deviceManagementScripts' => function (self $o, ParseNode $n) { $o->setDeviceManagementScripts($n->getCollectionOfObjectValues(DeviceManagementScript::class)); },
            'deviceProtectionOverview' => function (self $o, ParseNode $n) { $o->setDeviceProtectionOverview($n->getObjectValue(DeviceProtectionOverview::class)); },
            'deviceShellScripts' => function (self $o, ParseNode $n) { $o->setDeviceShellScripts($n->getCollectionOfObjectValues(DeviceShellScript::class)); },
            'domainJoinConnectors' => function (self $o, ParseNode $n) { $o->setDomainJoinConnectors($n->getCollectionOfObjectValues(DeviceManagementDomainJoinConnector::class)); },
            'embeddedSIMActivationCodePools' => function (self $o, ParseNode $n) { $o->setEmbeddedSIMActivationCodePools($n->getCollectionOfObjectValues(EmbeddedSIMActivationCodePool::class)); },
            'exchangeConnectors' => function (self $o, ParseNode $n) { $o->setExchangeConnectors($n->getCollectionOfObjectValues(DeviceManagementExchangeConnector::class)); },
            'exchangeOnPremisesPolicies' => function (self $o, ParseNode $n) { $o->setExchangeOnPremisesPolicies($n->getCollectionOfObjectValues(DeviceManagementExchangeOnPremisesPolicy::class)); },
            'exchangeOnPremisesPolicy' => function (self $o, ParseNode $n) { $o->setExchangeOnPremisesPolicy($n->getObjectValue(DeviceManagementExchangeOnPremisesPolicy::class)); },
            'groupPolicyCategories' => function (self $o, ParseNode $n) { $o->setGroupPolicyCategories($n->getCollectionOfObjectValues(GroupPolicyCategory::class)); },
            'groupPolicyConfigurations' => function (self $o, ParseNode $n) { $o->setGroupPolicyConfigurations($n->getCollectionOfObjectValues(GroupPolicyConfiguration::class)); },
            'groupPolicyDefinitionFiles' => function (self $o, ParseNode $n) { $o->setGroupPolicyDefinitionFiles($n->getCollectionOfObjectValues(GroupPolicyDefinitionFile::class)); },
            'groupPolicyDefinitions' => function (self $o, ParseNode $n) { $o->setGroupPolicyDefinitions($n->getCollectionOfObjectValues(GroupPolicyDefinition::class)); },
            'groupPolicyMigrationReports' => function (self $o, ParseNode $n) { $o->setGroupPolicyMigrationReports($n->getCollectionOfObjectValues(GroupPolicyMigrationReport::class)); },
            'groupPolicyObjectFiles' => function (self $o, ParseNode $n) { $o->setGroupPolicyObjectFiles($n->getCollectionOfObjectValues(GroupPolicyObjectFile::class)); },
            'groupPolicyUploadedDefinitionFiles' => function (self $o, ParseNode $n) { $o->setGroupPolicyUploadedDefinitionFiles($n->getCollectionOfObjectValues(GroupPolicyUploadedDefinitionFile::class)); },
            'importedDeviceIdentities' => function (self $o, ParseNode $n) { $o->setImportedDeviceIdentities($n->getCollectionOfObjectValues(ImportedDeviceIdentity::class)); },
            'importedWindowsAutopilotDeviceIdentities' => function (self $o, ParseNode $n) { $o->setImportedWindowsAutopilotDeviceIdentities($n->getCollectionOfObjectValues(ImportedWindowsAutopilotDeviceIdentity::class)); },
            'intents' => function (self $o, ParseNode $n) { $o->setIntents($n->getCollectionOfObjectValues(DeviceManagementIntent::class)); },
            'intuneAccountId' => function (self $o, ParseNode $n) { $o->setIntuneAccountId($n->getStringValue()); },
            'intuneBrand' => function (self $o, ParseNode $n) { $o->setIntuneBrand($n->getObjectValue(IntuneBrand::class)); },
            'intuneBrandingProfiles' => function (self $o, ParseNode $n) { $o->setIntuneBrandingProfiles($n->getCollectionOfObjectValues(IntuneBrandingProfile::class)); },
            'iosUpdateStatuses' => function (self $o, ParseNode $n) { $o->setIosUpdateStatuses($n->getCollectionOfObjectValues(IosUpdateDeviceStatus::class)); },
            'lastReportAggregationDateTime' => function (self $o, ParseNode $n) { $o->setLastReportAggregationDateTime($n->getDateTimeValue()); },
            'legacyPcManangementEnabled' => function (self $o, ParseNode $n) { $o->setLegacyPcManangementEnabled($n->getBooleanValue()); },
            'macOSSoftwareUpdateAccountSummaries' => function (self $o, ParseNode $n) { $o->setMacOSSoftwareUpdateAccountSummaries($n->getCollectionOfObjectValues(MacOSSoftwareUpdateAccountSummary::class)); },
            'managedDeviceCleanupSettings' => function (self $o, ParseNode $n) { $o->setManagedDeviceCleanupSettings($n->getObjectValue(ManagedDeviceCleanupSettings::class)); },
            'managedDeviceEncryptionStates' => function (self $o, ParseNode $n) { $o->setManagedDeviceEncryptionStates($n->getCollectionOfObjectValues(ManagedDeviceEncryptionState::class)); },
            'managedDeviceOverview' => function (self $o, ParseNode $n) { $o->setManagedDeviceOverview($n->getObjectValue(ManagedDeviceOverview::class)); },
            'managedDevices' => function (self $o, ParseNode $n) { $o->setManagedDevices($n->getCollectionOfObjectValues(ManagedDevice::class)); },
            'managementConditions' => function (self $o, ParseNode $n) { $o->setManagementConditions($n->getCollectionOfObjectValues(ManagementCondition::class)); },
            'managementConditionStatements' => function (self $o, ParseNode $n) { $o->setManagementConditionStatements($n->getCollectionOfObjectValues(ManagementConditionStatement::class)); },
            'maximumDepTokens' => function (self $o, ParseNode $n) { $o->setMaximumDepTokens($n->getIntegerValue()); },
            'microsoftTunnelConfigurations' => function (self $o, ParseNode $n) { $o->setMicrosoftTunnelConfigurations($n->getCollectionOfObjectValues(MicrosoftTunnelConfiguration::class)); },
            'microsoftTunnelHealthThresholds' => function (self $o, ParseNode $n) { $o->setMicrosoftTunnelHealthThresholds($n->getCollectionOfObjectValues(MicrosoftTunnelHealthThreshold::class)); },
            'microsoftTunnelServerLogCollectionResponses' => function (self $o, ParseNode $n) { $o->setMicrosoftTunnelServerLogCollectionResponses($n->getCollectionOfObjectValues(MicrosoftTunnelServerLogCollectionResponse::class)); },
            'microsoftTunnelSites' => function (self $o, ParseNode $n) { $o->setMicrosoftTunnelSites($n->getCollectionOfObjectValues(MicrosoftTunnelSite::class)); },
            'mobileAppTroubleshootingEvents' => function (self $o, ParseNode $n) { $o->setMobileAppTroubleshootingEvents($n->getCollectionOfObjectValues(MobileAppTroubleshootingEvent::class)); },
            'mobileThreatDefenseConnectors' => function (self $o, ParseNode $n) { $o->setMobileThreatDefenseConnectors($n->getCollectionOfObjectValues(MobileThreatDefenseConnector::class)); },
            'ndesConnectors' => function (self $o, ParseNode $n) { $o->setNdesConnectors($n->getCollectionOfObjectValues(NdesConnector::class)); },
            'notificationMessageTemplates' => function (self $o, ParseNode $n) { $o->setNotificationMessageTemplates($n->getCollectionOfObjectValues(NotificationMessageTemplate::class)); },
            'oemWarrantyInformationOnboarding' => function (self $o, ParseNode $n) { $o->setOemWarrantyInformationOnboarding($n->getCollectionOfObjectValues(OemWarrantyInformationOnboarding::class)); },
            'remoteActionAudits' => function (self $o, ParseNode $n) { $o->setRemoteActionAudits($n->getCollectionOfObjectValues(RemoteActionAudit::class)); },
            'remoteAssistancePartners' => function (self $o, ParseNode $n) { $o->setRemoteAssistancePartners($n->getCollectionOfObjectValues(RemoteAssistancePartner::class)); },
            'remoteAssistanceSettings' => function (self $o, ParseNode $n) { $o->setRemoteAssistanceSettings($n->getObjectValue(RemoteAssistanceSettings::class)); },
            'reports' => function (self $o, ParseNode $n) { $o->setReports($n->getObjectValue(DeviceManagementReports::class)); },
            'resourceAccessProfiles' => function (self $o, ParseNode $n) { $o->setResourceAccessProfiles($n->getCollectionOfObjectValues(DeviceManagementResourceAccessProfileBase::class)); },
            'resourceOperations' => function (self $o, ParseNode $n) { $o->setResourceOperations($n->getCollectionOfObjectValues(ResourceOperation::class)); },
            'reusablePolicySettings' => function (self $o, ParseNode $n) { $o->setReusablePolicySettings($n->getCollectionOfObjectValues(DeviceManagementReusablePolicySetting::class)); },
            'reusableSettings' => function (self $o, ParseNode $n) { $o->setReusableSettings($n->getCollectionOfObjectValues(DeviceManagementConfigurationSettingDefinition::class)); },
            'roleAssignments' => function (self $o, ParseNode $n) { $o->setRoleAssignments($n->getCollectionOfObjectValues(DeviceAndAppManagementRoleAssignment::class)); },
            'roleDefinitions' => function (self $o, ParseNode $n) { $o->setRoleDefinitions($n->getCollectionOfObjectValues(RoleDefinition::class)); },
            'roleScopeTags' => function (self $o, ParseNode $n) { $o->setRoleScopeTags($n->getCollectionOfObjectValues(RoleScopeTag::class)); },
            'settingDefinitions' => function (self $o, ParseNode $n) { $o->setSettingDefinitions($n->getCollectionOfObjectValues(DeviceManagementSettingDefinition::class)); },
            'settings' => function (self $o, ParseNode $n) { $o->setSettings($n->getObjectValue(DeviceManagementSettings::class)); },
            'softwareUpdateStatusSummary' => function (self $o, ParseNode $n) { $o->setSoftwareUpdateStatusSummary($n->getObjectValue(SoftwareUpdateStatusSummary::class)); },
            'subscriptions' => function (self $o, ParseNode $n) { $o->setSubscriptions($n->getEnumValue(DeviceManagementSubscriptions::class)); },
            'subscriptionState' => function (self $o, ParseNode $n) { $o->setSubscriptionState($n->getEnumValue(DeviceManagementSubscriptionState::class)); },
            'telecomExpenseManagementPartners' => function (self $o, ParseNode $n) { $o->setTelecomExpenseManagementPartners($n->getCollectionOfObjectValues(TelecomExpenseManagementPartner::class)); },
            'templates' => function (self $o, ParseNode $n) { $o->setTemplates($n->getCollectionOfObjectValues(DeviceManagementTemplate::class)); },
            'templateSettings' => function (self $o, ParseNode $n) { $o->setTemplateSettings($n->getCollectionOfObjectValues(DeviceManagementConfigurationSettingTemplate::class)); },
            'tenantAttachRBAC' => function (self $o, ParseNode $n) { $o->setTenantAttachRBAC($n->getObjectValue(TenantAttachRBAC::class)); },
            'termsAndConditions' => function (self $o, ParseNode $n) { $o->setTermsAndConditions($n->getCollectionOfObjectValues(TermsAndConditions::class)); },
            'troubleshootingEvents' => function (self $o, ParseNode $n) { $o->setTroubleshootingEvents($n->getCollectionOfObjectValues(DeviceManagementTroubleshootingEvent::class)); },
            'unlicensedAdminstratorsEnabled' => function (self $o, ParseNode $n) { $o->setUnlicensedAdminstratorsEnabled($n->getBooleanValue()); },
            'userExperienceAnalyticsAppHealthApplicationPerformance' => function (self $o, ParseNode $n) { $o->setUserExperienceAnalyticsAppHealthApplicationPerformance($n->getCollectionOfObjectValues(UserExperienceAnalyticsAppHealthApplicationPerformance::class)); },
            'userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion' => function (self $o, ParseNode $n) { $o->setUserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion($n->getCollectionOfObjectValues(UserExperienceAnalyticsAppHealthAppPerformanceByAppVersion::class)); },
            'userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails' => function (self $o, ParseNode $n) { $o->setUserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails($n->getCollectionOfObjectValues(UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails::class)); },
            'userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId' => function (self $o, ParseNode $n) { $o->setUserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId($n->getCollectionOfObjectValues(UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId::class)); },
            'userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion' => function (self $o, ParseNode $n) { $o->setUserExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion($n->getCollectionOfObjectValues(UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion::class)); },
            'userExperienceAnalyticsAppHealthDeviceModelPerformance' => function (self $o, ParseNode $n) { $o->setUserExperienceAnalyticsAppHealthDeviceModelPerformance($n->getCollectionOfObjectValues(UserExperienceAnalyticsAppHealthDeviceModelPerformance::class)); },
            'userExperienceAnalyticsAppHealthDevicePerformance' => function (self $o, ParseNode $n) { $o->setUserExperienceAnalyticsAppHealthDevicePerformance($n->getCollectionOfObjectValues(UserExperienceAnalyticsAppHealthDevicePerformance::class)); },
            'userExperienceAnalyticsAppHealthDevicePerformanceDetails' => function (self $o, ParseNode $n) { $o->setUserExperienceAnalyticsAppHealthDevicePerformanceDetails($n->getCollectionOfObjectValues(UserExperienceAnalyticsAppHealthDevicePerformanceDetails::class)); },
            'userExperienceAnalyticsAppHealthOSVersionPerformance' => function (self $o, ParseNode $n) { $o->setUserExperienceAnalyticsAppHealthOSVersionPerformance($n->getCollectionOfObjectValues(UserExperienceAnalyticsAppHealthOSVersionPerformance::class)); },
            'userExperienceAnalyticsAppHealthOverview' => function (self $o, ParseNode $n) { $o->setUserExperienceAnalyticsAppHealthOverview($n->getObjectValue(UserExperienceAnalyticsCategory::class)); },
            'userExperienceAnalyticsBaselines' => function (self $o, ParseNode $n) { $o->setUserExperienceAnalyticsBaselines($n->getCollectionOfObjectValues(UserExperienceAnalyticsBaseline::class)); },
            'userExperienceAnalyticsBatteryHealthAppImpact' => function (self $o, ParseNode $n) { $o->setUserExperienceAnalyticsBatteryHealthAppImpact($n->getCollectionOfObjectValues(UserExperienceAnalyticsBatteryHealthAppImpact::class)); },
            'userExperienceAnalyticsBatteryHealthCapacityDetails' => function (self $o, ParseNode $n) { $o->setUserExperienceAnalyticsBatteryHealthCapacityDetails($n->getObjectValue(UserExperienceAnalyticsBatteryHealthCapacityDetails::class)); },
            'userExperienceAnalyticsBatteryHealthDeviceAppImpact' => function (self $o, ParseNode $n) { $o->setUserExperienceAnalyticsBatteryHealthDeviceAppImpact($n->getCollectionOfObjectValues(UserExperienceAnalyticsBatteryHealthDeviceAppImpact::class)); },
            'userExperienceAnalyticsBatteryHealthDevicePerformance' => function (self $o, ParseNode $n) { $o->setUserExperienceAnalyticsBatteryHealthDevicePerformance($n->getCollectionOfObjectValues(UserExperienceAnalyticsBatteryHealthDevicePerformance::class)); },
            'userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory' => function (self $o, ParseNode $n) { $o->setUserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory($n->getCollectionOfObjectValues(UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory::class)); },
            'userExperienceAnalyticsBatteryHealthModelPerformance' => function (self $o, ParseNode $n) { $o->setUserExperienceAnalyticsBatteryHealthModelPerformance($n->getCollectionOfObjectValues(UserExperienceAnalyticsBatteryHealthModelPerformance::class)); },
            'userExperienceAnalyticsBatteryHealthOsPerformance' => function (self $o, ParseNode $n) { $o->setUserExperienceAnalyticsBatteryHealthOsPerformance($n->getCollectionOfObjectValues(UserExperienceAnalyticsBatteryHealthOsPerformance::class)); },
            'userExperienceAnalyticsBatteryHealthRuntimeDetails' => function (self $o, ParseNode $n) { $o->setUserExperienceAnalyticsBatteryHealthRuntimeDetails($n->getObjectValue(UserExperienceAnalyticsBatteryHealthRuntimeDetails::class)); },
            'userExperienceAnalyticsCategories' => function (self $o, ParseNode $n) { $o->setUserExperienceAnalyticsCategories($n->getCollectionOfObjectValues(UserExperienceAnalyticsCategory::class)); },
            'userExperienceAnalyticsDeviceMetricHistory' => function (self $o, ParseNode $n) { $o->setUserExperienceAnalyticsDeviceMetricHistory($n->getCollectionOfObjectValues(UserExperienceAnalyticsMetricHistory::class)); },
            'userExperienceAnalyticsDevicePerformance' => function (self $o, ParseNode $n) { $o->setUserExperienceAnalyticsDevicePerformance($n->getCollectionOfObjectValues(UserExperienceAnalyticsDevicePerformance::class)); },
            'userExperienceAnalyticsDeviceScores' => function (self $o, ParseNode $n) { $o->setUserExperienceAnalyticsDeviceScores($n->getCollectionOfObjectValues(UserExperienceAnalyticsDeviceScores::class)); },
            'userExperienceAnalyticsDeviceStartupHistory' => function (self $o, ParseNode $n) { $o->setUserExperienceAnalyticsDeviceStartupHistory($n->getCollectionOfObjectValues(UserExperienceAnalyticsDeviceStartupHistory::class)); },
            'userExperienceAnalyticsDeviceStartupProcesses' => function (self $o, ParseNode $n) { $o->setUserExperienceAnalyticsDeviceStartupProcesses($n->getCollectionOfObjectValues(UserExperienceAnalyticsDeviceStartupProcess::class)); },
            'userExperienceAnalyticsDeviceStartupProcessPerformance' => function (self $o, ParseNode $n) { $o->setUserExperienceAnalyticsDeviceStartupProcessPerformance($n->getCollectionOfObjectValues(UserExperienceAnalyticsDeviceStartupProcessPerformance::class)); },
            'userExperienceAnalyticsDevicesWithoutCloudIdentity' => function (self $o, ParseNode $n) { $o->setUserExperienceAnalyticsDevicesWithoutCloudIdentity($n->getCollectionOfObjectValues(UserExperienceAnalyticsDeviceWithoutCloudIdentity::class)); },
            'userExperienceAnalyticsImpactingProcess' => function (self $o, ParseNode $n) { $o->setUserExperienceAnalyticsImpactingProcess($n->getCollectionOfObjectValues(UserExperienceAnalyticsImpactingProcess::class)); },
            'userExperienceAnalyticsMetricHistory' => function (self $o, ParseNode $n) { $o->setUserExperienceAnalyticsMetricHistory($n->getCollectionOfObjectValues(UserExperienceAnalyticsMetricHistory::class)); },
            'userExperienceAnalyticsModelScores' => function (self $o, ParseNode $n) { $o->setUserExperienceAnalyticsModelScores($n->getCollectionOfObjectValues(UserExperienceAnalyticsModelScores::class)); },
            'userExperienceAnalyticsNotAutopilotReadyDevice' => function (self $o, ParseNode $n) { $o->setUserExperienceAnalyticsNotAutopilotReadyDevice($n->getCollectionOfObjectValues(UserExperienceAnalyticsNotAutopilotReadyDevice::class)); },
            'userExperienceAnalyticsOverview' => function (self $o, ParseNode $n) { $o->setUserExperienceAnalyticsOverview($n->getObjectValue(UserExperienceAnalyticsOverview::class)); },
            'userExperienceAnalyticsRegressionSummary' => function (self $o, ParseNode $n) { $o->setUserExperienceAnalyticsRegressionSummary($n->getObjectValue(UserExperienceAnalyticsRegressionSummary::class)); },
            'userExperienceAnalyticsRemoteConnection' => function (self $o, ParseNode $n) { $o->setUserExperienceAnalyticsRemoteConnection($n->getCollectionOfObjectValues(UserExperienceAnalyticsRemoteConnection::class)); },
            'userExperienceAnalyticsResourcePerformance' => function (self $o, ParseNode $n) { $o->setUserExperienceAnalyticsResourcePerformance($n->getCollectionOfObjectValues(UserExperienceAnalyticsResourcePerformance::class)); },
            'userExperienceAnalyticsScoreHistory' => function (self $o, ParseNode $n) { $o->setUserExperienceAnalyticsScoreHistory($n->getCollectionOfObjectValues(UserExperienceAnalyticsScoreHistory::class)); },
            'userExperienceAnalyticsSettings' => function (self $o, ParseNode $n) { $o->setUserExperienceAnalyticsSettings($n->getObjectValue(UserExperienceAnalyticsSettings::class)); },
            'userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric' => function (self $o, ParseNode $n) { $o->setUserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric($n->getObjectValue(UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric::class)); },
            'userExperienceAnalyticsWorkFromAnywhereMetrics' => function (self $o, ParseNode $n) { $o->setUserExperienceAnalyticsWorkFromAnywhereMetrics($n->getCollectionOfObjectValues(UserExperienceAnalyticsWorkFromAnywhereMetric::class)); },
            'userExperienceAnalyticsWorkFromAnywhereModelPerformance' => function (self $o, ParseNode $n) { $o->setUserExperienceAnalyticsWorkFromAnywhereModelPerformance($n->getCollectionOfObjectValues(UserExperienceAnalyticsWorkFromAnywhereModelPerformance::class)); },
            'userPfxCertificates' => function (self $o, ParseNode $n) { $o->setUserPfxCertificates($n->getCollectionOfObjectValues(UserPFXCertificate::class)); },
            'virtualEndpoint' => function (self $o, ParseNode $n) { $o->setVirtualEndpoint($n->getObjectValue(VirtualEndpoint::class)); },
            'windowsAutopilotDeploymentProfiles' => function (self $o, ParseNode $n) { $o->setWindowsAutopilotDeploymentProfiles($n->getCollectionOfObjectValues(WindowsAutopilotDeploymentProfile::class)); },
            'windowsAutopilotDeviceIdentities' => function (self $o, ParseNode $n) { $o->setWindowsAutopilotDeviceIdentities($n->getCollectionOfObjectValues(WindowsAutopilotDeviceIdentity::class)); },
            'windowsAutopilotSettings' => function (self $o, ParseNode $n) { $o->setWindowsAutopilotSettings($n->getObjectValue(WindowsAutopilotSettings::class)); },
            'windowsDriverUpdateProfiles' => function (self $o, ParseNode $n) { $o->setWindowsDriverUpdateProfiles($n->getCollectionOfObjectValues(WindowsDriverUpdateProfile::class)); },
            'windowsFeatureUpdateProfiles' => function (self $o, ParseNode $n) { $o->setWindowsFeatureUpdateProfiles($n->getCollectionOfObjectValues(WindowsFeatureUpdateProfile::class)); },
            'windowsInformationProtectionAppLearningSummaries' => function (self $o, ParseNode $n) { $o->setWindowsInformationProtectionAppLearningSummaries($n->getCollectionOfObjectValues(WindowsInformationProtectionAppLearningSummary::class)); },
            'windowsInformationProtectionNetworkLearningSummaries' => function (self $o, ParseNode $n) { $o->setWindowsInformationProtectionNetworkLearningSummaries($n->getCollectionOfObjectValues(WindowsInformationProtectionNetworkLearningSummary::class)); },
            'windowsMalwareInformation' => function (self $o, ParseNode $n) { $o->setWindowsMalwareInformation($n->getCollectionOfObjectValues(WindowsMalwareInformation::class)); },
            'windowsMalwareOverview' => function (self $o, ParseNode $n) { $o->setWindowsMalwareOverview($n->getObjectValue(WindowsMalwareOverview::class)); },
            'windowsQualityUpdateProfiles' => function (self $o, ParseNode $n) { $o->setWindowsQualityUpdateProfiles($n->getCollectionOfObjectValues(WindowsQualityUpdateProfile::class)); },
            'windowsUpdateCatalogItems' => function (self $o, ParseNode $n) { $o->setWindowsUpdateCatalogItems($n->getCollectionOfObjectValues(WindowsUpdateCatalogItem::class)); },
        ]);
    }

    /**
     * Gets the groupPolicyCategories property value. The available group policy categories for this account.
     * @return array<GroupPolicyCategory>|null
    */
    public function getGroupPolicyCategories(): ?array {
        return $this->groupPolicyCategories;
    }

    /**
     * Gets the groupPolicyConfigurations property value. The group policy configurations created by this account.
     * @return array<GroupPolicyConfiguration>|null
    */
    public function getGroupPolicyConfigurations(): ?array {
        return $this->groupPolicyConfigurations;
    }

    /**
     * Gets the groupPolicyDefinitionFiles property value. The available group policy definition files for this account.
     * @return array<GroupPolicyDefinitionFile>|null
    */
    public function getGroupPolicyDefinitionFiles(): ?array {
        return $this->groupPolicyDefinitionFiles;
    }

    /**
     * Gets the groupPolicyDefinitions property value. The available group policy definitions for this account.
     * @return array<GroupPolicyDefinition>|null
    */
    public function getGroupPolicyDefinitions(): ?array {
        return $this->groupPolicyDefinitions;
    }

    /**
     * Gets the groupPolicyMigrationReports property value. A list of Group Policy migration reports.
     * @return array<GroupPolicyMigrationReport>|null
    */
    public function getGroupPolicyMigrationReports(): ?array {
        return $this->groupPolicyMigrationReports;
    }

    /**
     * Gets the groupPolicyObjectFiles property value. A list of Group Policy Object files uploaded.
     * @return array<GroupPolicyObjectFile>|null
    */
    public function getGroupPolicyObjectFiles(): ?array {
        return $this->groupPolicyObjectFiles;
    }

    /**
     * Gets the groupPolicyUploadedDefinitionFiles property value. The available group policy uploaded definition files for this account.
     * @return array<GroupPolicyUploadedDefinitionFile>|null
    */
    public function getGroupPolicyUploadedDefinitionFiles(): ?array {
        return $this->groupPolicyUploadedDefinitionFiles;
    }

    /**
     * Gets the importedDeviceIdentities property value. The imported device identities.
     * @return array<ImportedDeviceIdentity>|null
    */
    public function getImportedDeviceIdentities(): ?array {
        return $this->importedDeviceIdentities;
    }

    /**
     * Gets the importedWindowsAutopilotDeviceIdentities property value. Collection of imported Windows autopilot devices.
     * @return array<ImportedWindowsAutopilotDeviceIdentity>|null
    */
    public function getImportedWindowsAutopilotDeviceIdentities(): ?array {
        return $this->importedWindowsAutopilotDeviceIdentities;
    }

    /**
     * Gets the intents property value. The device management intents
     * @return array<DeviceManagementIntent>|null
    */
    public function getIntents(): ?array {
        return $this->intents;
    }

    /**
     * Gets the intuneAccountId property value. Intune Account Id for given tenant
     * @return string|null
    */
    public function getIntuneAccountId(): ?string {
        return $this->intuneAccountId;
    }

    /**
     * Gets the intuneBrand property value. intuneBrand contains data which is used in customizing the appearance of the Company Portal applications as well as the end user web portal.
     * @return IntuneBrand|null
    */
    public function getIntuneBrand(): ?IntuneBrand {
        return $this->intuneBrand;
    }

    /**
     * Gets the intuneBrandingProfiles property value. Intune branding profiles targeted to AAD groups
     * @return array<IntuneBrandingProfile>|null
    */
    public function getIntuneBrandingProfiles(): ?array {
        return $this->intuneBrandingProfiles;
    }

    /**
     * Gets the iosUpdateStatuses property value. The IOS software update installation statuses for this account.
     * @return array<IosUpdateDeviceStatus>|null
    */
    public function getIosUpdateStatuses(): ?array {
        return $this->iosUpdateStatuses;
    }

    /**
     * Gets the lastReportAggregationDateTime property value. The last modified time of reporting for this account. This property is read-only.
     * @return DateTime|null
    */
    public function getLastReportAggregationDateTime(): ?DateTime {
        return $this->lastReportAggregationDateTime;
    }

    /**
     * Gets the legacyPcManangementEnabled property value. The property to enable Non-MDM managed legacy PC management for this account. This property is read-only.
     * @return bool|null
    */
    public function getLegacyPcManangementEnabled(): ?bool {
        return $this->legacyPcManangementEnabled;
    }

    /**
     * Gets the macOSSoftwareUpdateAccountSummaries property value. The MacOS software update account summaries for this account.
     * @return array<MacOSSoftwareUpdateAccountSummary>|null
    */
    public function getMacOSSoftwareUpdateAccountSummaries(): ?array {
        return $this->macOSSoftwareUpdateAccountSummaries;
    }

    /**
     * Gets the managedDeviceCleanupSettings property value. Device cleanup rule
     * @return ManagedDeviceCleanupSettings|null
    */
    public function getManagedDeviceCleanupSettings(): ?ManagedDeviceCleanupSettings {
        return $this->managedDeviceCleanupSettings;
    }

    /**
     * Gets the managedDeviceEncryptionStates property value. Encryption report for devices in this account
     * @return array<ManagedDeviceEncryptionState>|null
    */
    public function getManagedDeviceEncryptionStates(): ?array {
        return $this->managedDeviceEncryptionStates;
    }

    /**
     * Gets the managedDeviceOverview property value. Device overview
     * @return ManagedDeviceOverview|null
    */
    public function getManagedDeviceOverview(): ?ManagedDeviceOverview {
        return $this->managedDeviceOverview;
    }

    /**
     * Gets the managedDevices property value. The list of managed devices.
     * @return array<ManagedDevice>|null
    */
    public function getManagedDevices(): ?array {
        return $this->managedDevices;
    }

    /**
     * Gets the managementConditions property value. The management conditions associated with device management of the company.
     * @return array<ManagementCondition>|null
    */
    public function getManagementConditions(): ?array {
        return $this->managementConditions;
    }

    /**
     * Gets the managementConditionStatements property value. The management condition statements associated with device management of the company.
     * @return array<ManagementConditionStatement>|null
    */
    public function getManagementConditionStatements(): ?array {
        return $this->managementConditionStatements;
    }

    /**
     * Gets the maximumDepTokens property value. Maximum number of DEP tokens allowed per-tenant.
     * @return int|null
    */
    public function getMaximumDepTokens(): ?int {
        return $this->maximumDepTokens;
    }

    /**
     * Gets the microsoftTunnelConfigurations property value. Collection of MicrosoftTunnelConfiguration settings associated with account.
     * @return array<MicrosoftTunnelConfiguration>|null
    */
    public function getMicrosoftTunnelConfigurations(): ?array {
        return $this->microsoftTunnelConfigurations;
    }

    /**
     * Gets the microsoftTunnelHealthThresholds property value. Collection of MicrosoftTunnelHealthThreshold settings associated with account.
     * @return array<MicrosoftTunnelHealthThreshold>|null
    */
    public function getMicrosoftTunnelHealthThresholds(): ?array {
        return $this->microsoftTunnelHealthThresholds;
    }

    /**
     * Gets the microsoftTunnelServerLogCollectionResponses property value. Collection of MicrosoftTunnelServerLogCollectionResponse settings associated with account.
     * @return array<MicrosoftTunnelServerLogCollectionResponse>|null
    */
    public function getMicrosoftTunnelServerLogCollectionResponses(): ?array {
        return $this->microsoftTunnelServerLogCollectionResponses;
    }

    /**
     * Gets the microsoftTunnelSites property value. Collection of MicrosoftTunnelSite settings associated with account.
     * @return array<MicrosoftTunnelSite>|null
    */
    public function getMicrosoftTunnelSites(): ?array {
        return $this->microsoftTunnelSites;
    }

    /**
     * Gets the mobileAppTroubleshootingEvents property value. The collection property of MobileAppTroubleshootingEvent.
     * @return array<MobileAppTroubleshootingEvent>|null
    */
    public function getMobileAppTroubleshootingEvents(): ?array {
        return $this->mobileAppTroubleshootingEvents;
    }

    /**
     * Gets the mobileThreatDefenseConnectors property value. The list of Mobile threat Defense connectors configured by the tenant.
     * @return array<MobileThreatDefenseConnector>|null
    */
    public function getMobileThreatDefenseConnectors(): ?array {
        return $this->mobileThreatDefenseConnectors;
    }

    /**
     * Gets the ndesConnectors property value. The collection of Ndes connectors for this account.
     * @return array<NdesConnector>|null
    */
    public function getNdesConnectors(): ?array {
        return $this->ndesConnectors;
    }

    /**
     * Gets the notificationMessageTemplates property value. The Notification Message Templates.
     * @return array<NotificationMessageTemplate>|null
    */
    public function getNotificationMessageTemplates(): ?array {
        return $this->notificationMessageTemplates;
    }

    /**
     * Gets the oemWarrantyInformationOnboarding property value. List of OEM Warranty Statuses
     * @return array<OemWarrantyInformationOnboarding>|null
    */
    public function getOemWarrantyInformationOnboarding(): ?array {
        return $this->oemWarrantyInformationOnboarding;
    }

    /**
     * Gets the remoteActionAudits property value. The list of device remote action audits with the tenant.
     * @return array<RemoteActionAudit>|null
    */
    public function getRemoteActionAudits(): ?array {
        return $this->remoteActionAudits;
    }

    /**
     * Gets the remoteAssistancePartners property value. The remote assist partners.
     * @return array<RemoteAssistancePartner>|null
    */
    public function getRemoteAssistancePartners(): ?array {
        return $this->remoteAssistancePartners;
    }

    /**
     * Gets the remoteAssistanceSettings property value. The remote assistance settings singleton
     * @return RemoteAssistanceSettings|null
    */
    public function getRemoteAssistanceSettings(): ?RemoteAssistanceSettings {
        return $this->remoteAssistanceSettings;
    }

    /**
     * Gets the reports property value. Reports singleton
     * @return DeviceManagementReports|null
    */
    public function getReports(): ?DeviceManagementReports {
        return $this->reports;
    }

    /**
     * Gets the resourceAccessProfiles property value. Collection of resource access settings associated with account.
     * @return array<DeviceManagementResourceAccessProfileBase>|null
    */
    public function getResourceAccessProfiles(): ?array {
        return $this->resourceAccessProfiles;
    }

    /**
     * Gets the resourceOperations property value. The Resource Operations.
     * @return array<ResourceOperation>|null
    */
    public function getResourceOperations(): ?array {
        return $this->resourceOperations;
    }

    /**
     * Gets the reusablePolicySettings property value. List of all reusable settings that can be referred in a policy
     * @return array<DeviceManagementReusablePolicySetting>|null
    */
    public function getReusablePolicySettings(): ?array {
        return $this->reusablePolicySettings;
    }

    /**
     * Gets the reusableSettings property value. List of all reusable settings
     * @return array<DeviceManagementConfigurationSettingDefinition>|null
    */
    public function getReusableSettings(): ?array {
        return $this->reusableSettings;
    }

    /**
     * Gets the roleAssignments property value. The Role Assignments.
     * @return array<DeviceAndAppManagementRoleAssignment>|null
    */
    public function getRoleAssignments(): ?array {
        return $this->roleAssignments;
    }

    /**
     * Gets the roleDefinitions property value. The Role Definitions.
     * @return array<RoleDefinition>|null
    */
    public function getRoleDefinitions(): ?array {
        return $this->roleDefinitions;
    }

    /**
     * Gets the roleScopeTags property value. The Role Scope Tags.
     * @return array<RoleScopeTag>|null
    */
    public function getRoleScopeTags(): ?array {
        return $this->roleScopeTags;
    }

    /**
     * Gets the settingDefinitions property value. The device management intent setting definitions
     * @return array<DeviceManagementSettingDefinition>|null
    */
    public function getSettingDefinitions(): ?array {
        return $this->settingDefinitions;
    }

    /**
     * Gets the settings property value. Account level settings.
     * @return DeviceManagementSettings|null
    */
    public function getSettings(): ?DeviceManagementSettings {
        return $this->settings;
    }

    /**
     * Gets the softwareUpdateStatusSummary property value. The software update status summary.
     * @return SoftwareUpdateStatusSummary|null
    */
    public function getSoftwareUpdateStatusSummary(): ?SoftwareUpdateStatusSummary {
        return $this->softwareUpdateStatusSummary;
    }

    /**
     * Gets the subscriptions property value. Tenant's Subscription. Possible values are: none, intune, office365, intunePremium, intune_EDU, intune_SMB.
     * @return DeviceManagementSubscriptions|null
    */
    public function getSubscriptions(): ?DeviceManagementSubscriptions {
        return $this->subscriptions;
    }

    /**
     * Gets the subscriptionState property value. Tenant mobile device management subscription state. Possible values are: pending, active, warning, disabled, deleted, blocked, lockedOut.
     * @return DeviceManagementSubscriptionState|null
    */
    public function getSubscriptionState(): ?DeviceManagementSubscriptionState {
        return $this->subscriptionState;
    }

    /**
     * Gets the telecomExpenseManagementPartners property value. The telecom expense management partners.
     * @return array<TelecomExpenseManagementPartner>|null
    */
    public function getTelecomExpenseManagementPartners(): ?array {
        return $this->telecomExpenseManagementPartners;
    }

    /**
     * Gets the templates property value. The available templates
     * @return array<DeviceManagementTemplate>|null
    */
    public function getTemplates(): ?array {
        return $this->templates;
    }

    /**
     * Gets the templateSettings property value. List of all TemplateSettings
     * @return array<DeviceManagementConfigurationSettingTemplate>|null
    */
    public function getTemplateSettings(): ?array {
        return $this->templateSettings;
    }

    /**
     * Gets the tenantAttachRBAC property value. TenantAttach RBAC Enablement
     * @return TenantAttachRBAC|null
    */
    public function getTenantAttachRBAC(): ?TenantAttachRBAC {
        return $this->tenantAttachRBAC;
    }

    /**
     * Gets the termsAndConditions property value. The terms and conditions associated with device management of the company.
     * @return array<TermsAndConditions>|null
    */
    public function getTermsAndConditions(): ?array {
        return $this->termsAndConditions;
    }

    /**
     * Gets the troubleshootingEvents property value. The list of troubleshooting events for the tenant.
     * @return array<DeviceManagementTroubleshootingEvent>|null
    */
    public function getTroubleshootingEvents(): ?array {
        return $this->troubleshootingEvents;
    }

    /**
     * Gets the unlicensedAdminstratorsEnabled property value. When enabled, users assigned as administrators via Role Assignment Memberships do not require an assigned Intune license. Prior to this, only Intune licensed users were granted permissions with an Intune role unless they were assigned a role via Azure Active Directory. You are limited to 350 unlicensed direct members for each AAD security group in a role assignment, but you can assign multiple AAD security groups to a role if you need to support more than 350 unlicensed administrators. Licensed administrators are unaffected, do not have to be direct members, nor does the 350 member limit apply. This property is read-only.
     * @return bool|null
    */
    public function getUnlicensedAdminstratorsEnabled(): ?bool {
        return $this->unlicensedAdminstratorsEnabled;
    }

    /**
     * Gets the userExperienceAnalyticsAppHealthApplicationPerformance property value. User experience analytics appHealth Application Performance
     * @return array<UserExperienceAnalyticsAppHealthApplicationPerformance>|null
    */
    public function getUserExperienceAnalyticsAppHealthApplicationPerformance(): ?array {
        return $this->userExperienceAnalyticsAppHealthApplicationPerformance;
    }

    /**
     * Gets the userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion property value. User experience analytics appHealth Application Performance by App Version
     * @return array<UserExperienceAnalyticsAppHealthAppPerformanceByAppVersion>|null
    */
    public function getUserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion(): ?array {
        return $this->userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion;
    }

    /**
     * Gets the userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails property value. User experience analytics appHealth Application Performance by App Version details
     * @return array<UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails>|null
    */
    public function getUserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails(): ?array {
        return $this->userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails;
    }

    /**
     * Gets the userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId property value. User experience analytics appHealth Application Performance by App Version Device Id
     * @return array<UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId>|null
    */
    public function getUserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId(): ?array {
        return $this->userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId;
    }

    /**
     * Gets the userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion property value. User experience analytics appHealth Application Performance by OS Version
     * @return array<UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion>|null
    */
    public function getUserExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion(): ?array {
        return $this->userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion;
    }

    /**
     * Gets the userExperienceAnalyticsAppHealthDeviceModelPerformance property value. User experience analytics appHealth Model Performance
     * @return array<UserExperienceAnalyticsAppHealthDeviceModelPerformance>|null
    */
    public function getUserExperienceAnalyticsAppHealthDeviceModelPerformance(): ?array {
        return $this->userExperienceAnalyticsAppHealthDeviceModelPerformance;
    }

    /**
     * Gets the userExperienceAnalyticsAppHealthDevicePerformance property value. User experience analytics appHealth Device Performance
     * @return array<UserExperienceAnalyticsAppHealthDevicePerformance>|null
    */
    public function getUserExperienceAnalyticsAppHealthDevicePerformance(): ?array {
        return $this->userExperienceAnalyticsAppHealthDevicePerformance;
    }

    /**
     * Gets the userExperienceAnalyticsAppHealthDevicePerformanceDetails property value. User experience analytics device performance details
     * @return array<UserExperienceAnalyticsAppHealthDevicePerformanceDetails>|null
    */
    public function getUserExperienceAnalyticsAppHealthDevicePerformanceDetails(): ?array {
        return $this->userExperienceAnalyticsAppHealthDevicePerformanceDetails;
    }

    /**
     * Gets the userExperienceAnalyticsAppHealthOSVersionPerformance property value. User experience analytics appHealth OS version Performance
     * @return array<UserExperienceAnalyticsAppHealthOSVersionPerformance>|null
    */
    public function getUserExperienceAnalyticsAppHealthOSVersionPerformance(): ?array {
        return $this->userExperienceAnalyticsAppHealthOSVersionPerformance;
    }

    /**
     * Gets the userExperienceAnalyticsAppHealthOverview property value. User experience analytics appHealth overview
     * @return UserExperienceAnalyticsCategory|null
    */
    public function getUserExperienceAnalyticsAppHealthOverview(): ?UserExperienceAnalyticsCategory {
        return $this->userExperienceAnalyticsAppHealthOverview;
    }

    /**
     * Gets the userExperienceAnalyticsBaselines property value. User experience analytics baselines
     * @return array<UserExperienceAnalyticsBaseline>|null
    */
    public function getUserExperienceAnalyticsBaselines(): ?array {
        return $this->userExperienceAnalyticsBaselines;
    }

    /**
     * Gets the userExperienceAnalyticsBatteryHealthAppImpact property value. User Experience Analytics Battery Health App Impact
     * @return array<UserExperienceAnalyticsBatteryHealthAppImpact>|null
    */
    public function getUserExperienceAnalyticsBatteryHealthAppImpact(): ?array {
        return $this->userExperienceAnalyticsBatteryHealthAppImpact;
    }

    /**
     * Gets the userExperienceAnalyticsBatteryHealthCapacityDetails property value. User Experience Analytics Battery Health Capacity Details
     * @return UserExperienceAnalyticsBatteryHealthCapacityDetails|null
    */
    public function getUserExperienceAnalyticsBatteryHealthCapacityDetails(): ?UserExperienceAnalyticsBatteryHealthCapacityDetails {
        return $this->userExperienceAnalyticsBatteryHealthCapacityDetails;
    }

    /**
     * Gets the userExperienceAnalyticsBatteryHealthDeviceAppImpact property value. User Experience Analytics Battery Health Device App Impact
     * @return array<UserExperienceAnalyticsBatteryHealthDeviceAppImpact>|null
    */
    public function getUserExperienceAnalyticsBatteryHealthDeviceAppImpact(): ?array {
        return $this->userExperienceAnalyticsBatteryHealthDeviceAppImpact;
    }

    /**
     * Gets the userExperienceAnalyticsBatteryHealthDevicePerformance property value. User Experience Analytics Battery Health Device Performance
     * @return array<UserExperienceAnalyticsBatteryHealthDevicePerformance>|null
    */
    public function getUserExperienceAnalyticsBatteryHealthDevicePerformance(): ?array {
        return $this->userExperienceAnalyticsBatteryHealthDevicePerformance;
    }

    /**
     * Gets the userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory property value. User Experience Analytics Battery Health Device Runtime History
     * @return array<UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory>|null
    */
    public function getUserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory(): ?array {
        return $this->userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory;
    }

    /**
     * Gets the userExperienceAnalyticsBatteryHealthModelPerformance property value. User Experience Analytics Battery Health Model Performance
     * @return array<UserExperienceAnalyticsBatteryHealthModelPerformance>|null
    */
    public function getUserExperienceAnalyticsBatteryHealthModelPerformance(): ?array {
        return $this->userExperienceAnalyticsBatteryHealthModelPerformance;
    }

    /**
     * Gets the userExperienceAnalyticsBatteryHealthOsPerformance property value. User Experience Analytics Battery Health Os Performance
     * @return array<UserExperienceAnalyticsBatteryHealthOsPerformance>|null
    */
    public function getUserExperienceAnalyticsBatteryHealthOsPerformance(): ?array {
        return $this->userExperienceAnalyticsBatteryHealthOsPerformance;
    }

    /**
     * Gets the userExperienceAnalyticsBatteryHealthRuntimeDetails property value. User Experience Analytics Battery Health Runtime Details
     * @return UserExperienceAnalyticsBatteryHealthRuntimeDetails|null
    */
    public function getUserExperienceAnalyticsBatteryHealthRuntimeDetails(): ?UserExperienceAnalyticsBatteryHealthRuntimeDetails {
        return $this->userExperienceAnalyticsBatteryHealthRuntimeDetails;
    }

    /**
     * Gets the userExperienceAnalyticsCategories property value. User experience analytics categories
     * @return array<UserExperienceAnalyticsCategory>|null
    */
    public function getUserExperienceAnalyticsCategories(): ?array {
        return $this->userExperienceAnalyticsCategories;
    }

    /**
     * Gets the userExperienceAnalyticsDeviceMetricHistory property value. User experience analytics device metric history
     * @return array<UserExperienceAnalyticsMetricHistory>|null
    */
    public function getUserExperienceAnalyticsDeviceMetricHistory(): ?array {
        return $this->userExperienceAnalyticsDeviceMetricHistory;
    }

    /**
     * Gets the userExperienceAnalyticsDevicePerformance property value. User experience analytics device performance
     * @return array<UserExperienceAnalyticsDevicePerformance>|null
    */
    public function getUserExperienceAnalyticsDevicePerformance(): ?array {
        return $this->userExperienceAnalyticsDevicePerformance;
    }

    /**
     * Gets the userExperienceAnalyticsDeviceScores property value. User experience analytics device scores
     * @return array<UserExperienceAnalyticsDeviceScores>|null
    */
    public function getUserExperienceAnalyticsDeviceScores(): ?array {
        return $this->userExperienceAnalyticsDeviceScores;
    }

    /**
     * Gets the userExperienceAnalyticsDeviceStartupHistory property value. User experience analytics device Startup History
     * @return array<UserExperienceAnalyticsDeviceStartupHistory>|null
    */
    public function getUserExperienceAnalyticsDeviceStartupHistory(): ?array {
        return $this->userExperienceAnalyticsDeviceStartupHistory;
    }

    /**
     * Gets the userExperienceAnalyticsDeviceStartupProcesses property value. User experience analytics device Startup Processes
     * @return array<UserExperienceAnalyticsDeviceStartupProcess>|null
    */
    public function getUserExperienceAnalyticsDeviceStartupProcesses(): ?array {
        return $this->userExperienceAnalyticsDeviceStartupProcesses;
    }

    /**
     * Gets the userExperienceAnalyticsDeviceStartupProcessPerformance property value. User experience analytics device Startup Process Performance
     * @return array<UserExperienceAnalyticsDeviceStartupProcessPerformance>|null
    */
    public function getUserExperienceAnalyticsDeviceStartupProcessPerformance(): ?array {
        return $this->userExperienceAnalyticsDeviceStartupProcessPerformance;
    }

    /**
     * Gets the userExperienceAnalyticsDevicesWithoutCloudIdentity property value. User experience analytics devices without cloud identity.
     * @return array<UserExperienceAnalyticsDeviceWithoutCloudIdentity>|null
    */
    public function getUserExperienceAnalyticsDevicesWithoutCloudIdentity(): ?array {
        return $this->userExperienceAnalyticsDevicesWithoutCloudIdentity;
    }

    /**
     * Gets the userExperienceAnalyticsImpactingProcess property value. User experience analytics impacting process
     * @return array<UserExperienceAnalyticsImpactingProcess>|null
    */
    public function getUserExperienceAnalyticsImpactingProcess(): ?array {
        return $this->userExperienceAnalyticsImpactingProcess;
    }

    /**
     * Gets the userExperienceAnalyticsMetricHistory property value. User experience analytics metric history
     * @return array<UserExperienceAnalyticsMetricHistory>|null
    */
    public function getUserExperienceAnalyticsMetricHistory(): ?array {
        return $this->userExperienceAnalyticsMetricHistory;
    }

    /**
     * Gets the userExperienceAnalyticsModelScores property value. User experience analytics model scores
     * @return array<UserExperienceAnalyticsModelScores>|null
    */
    public function getUserExperienceAnalyticsModelScores(): ?array {
        return $this->userExperienceAnalyticsModelScores;
    }

    /**
     * Gets the userExperienceAnalyticsNotAutopilotReadyDevice property value. User experience analytics devices not Windows Autopilot ready.
     * @return array<UserExperienceAnalyticsNotAutopilotReadyDevice>|null
    */
    public function getUserExperienceAnalyticsNotAutopilotReadyDevice(): ?array {
        return $this->userExperienceAnalyticsNotAutopilotReadyDevice;
    }

    /**
     * Gets the userExperienceAnalyticsOverview property value. User experience analytics overview
     * @return UserExperienceAnalyticsOverview|null
    */
    public function getUserExperienceAnalyticsOverview(): ?UserExperienceAnalyticsOverview {
        return $this->userExperienceAnalyticsOverview;
    }

    /**
     * Gets the userExperienceAnalyticsRegressionSummary property value. User experience analytics regression summary
     * @return UserExperienceAnalyticsRegressionSummary|null
    */
    public function getUserExperienceAnalyticsRegressionSummary(): ?UserExperienceAnalyticsRegressionSummary {
        return $this->userExperienceAnalyticsRegressionSummary;
    }

    /**
     * Gets the userExperienceAnalyticsRemoteConnection property value. User experience analytics remote connection
     * @return array<UserExperienceAnalyticsRemoteConnection>|null
    */
    public function getUserExperienceAnalyticsRemoteConnection(): ?array {
        return $this->userExperienceAnalyticsRemoteConnection;
    }

    /**
     * Gets the userExperienceAnalyticsResourcePerformance property value. User experience analytics resource performance
     * @return array<UserExperienceAnalyticsResourcePerformance>|null
    */
    public function getUserExperienceAnalyticsResourcePerformance(): ?array {
        return $this->userExperienceAnalyticsResourcePerformance;
    }

    /**
     * Gets the userExperienceAnalyticsScoreHistory property value. User experience analytics device Startup Score History
     * @return array<UserExperienceAnalyticsScoreHistory>|null
    */
    public function getUserExperienceAnalyticsScoreHistory(): ?array {
        return $this->userExperienceAnalyticsScoreHistory;
    }

    /**
     * Gets the userExperienceAnalyticsSettings property value. User experience analytics device settings
     * @return UserExperienceAnalyticsSettings|null
    */
    public function getUserExperienceAnalyticsSettings(): ?UserExperienceAnalyticsSettings {
        return $this->userExperienceAnalyticsSettings;
    }

    /**
     * Gets the userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric property value. User experience analytics work from anywhere hardware readiness metrics.
     * @return UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric|null
    */
    public function getUserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric(): ?UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric {
        return $this->userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric;
    }

    /**
     * Gets the userExperienceAnalyticsWorkFromAnywhereMetrics property value. User experience analytics work from anywhere metrics.
     * @return array<UserExperienceAnalyticsWorkFromAnywhereMetric>|null
    */
    public function getUserExperienceAnalyticsWorkFromAnywhereMetrics(): ?array {
        return $this->userExperienceAnalyticsWorkFromAnywhereMetrics;
    }

    /**
     * Gets the userExperienceAnalyticsWorkFromAnywhereModelPerformance property value. The user experience analytics work from anywhere model performance
     * @return array<UserExperienceAnalyticsWorkFromAnywhereModelPerformance>|null
    */
    public function getUserExperienceAnalyticsWorkFromAnywhereModelPerformance(): ?array {
        return $this->userExperienceAnalyticsWorkFromAnywhereModelPerformance;
    }

    /**
     * Gets the userPfxCertificates property value. Collection of PFX certificates associated with a user.
     * @return array<UserPFXCertificate>|null
    */
    public function getUserPfxCertificates(): ?array {
        return $this->userPfxCertificates;
    }

    /**
     * Gets the virtualEndpoint property value. The virtualEndpoint property
     * @return VirtualEndpoint|null
    */
    public function getVirtualEndpoint(): ?VirtualEndpoint {
        return $this->virtualEndpoint;
    }

    /**
     * Gets the windowsAutopilotDeploymentProfiles property value. Windows auto pilot deployment profiles
     * @return array<WindowsAutopilotDeploymentProfile>|null
    */
    public function getWindowsAutopilotDeploymentProfiles(): ?array {
        return $this->windowsAutopilotDeploymentProfiles;
    }

    /**
     * Gets the windowsAutopilotDeviceIdentities property value. The Windows autopilot device identities contained collection.
     * @return array<WindowsAutopilotDeviceIdentity>|null
    */
    public function getWindowsAutopilotDeviceIdentities(): ?array {
        return $this->windowsAutopilotDeviceIdentities;
    }

    /**
     * Gets the windowsAutopilotSettings property value. The Windows autopilot account settings.
     * @return WindowsAutopilotSettings|null
    */
    public function getWindowsAutopilotSettings(): ?WindowsAutopilotSettings {
        return $this->windowsAutopilotSettings;
    }

    /**
     * Gets the windowsDriverUpdateProfiles property value. A collection of windows driver update profiles
     * @return array<WindowsDriverUpdateProfile>|null
    */
    public function getWindowsDriverUpdateProfiles(): ?array {
        return $this->windowsDriverUpdateProfiles;
    }

    /**
     * Gets the windowsFeatureUpdateProfiles property value. A collection of windows feature update profiles
     * @return array<WindowsFeatureUpdateProfile>|null
    */
    public function getWindowsFeatureUpdateProfiles(): ?array {
        return $this->windowsFeatureUpdateProfiles;
    }

    /**
     * Gets the windowsInformationProtectionAppLearningSummaries property value. The windows information protection app learning summaries.
     * @return array<WindowsInformationProtectionAppLearningSummary>|null
    */
    public function getWindowsInformationProtectionAppLearningSummaries(): ?array {
        return $this->windowsInformationProtectionAppLearningSummaries;
    }

    /**
     * Gets the windowsInformationProtectionNetworkLearningSummaries property value. The windows information protection network learning summaries.
     * @return array<WindowsInformationProtectionNetworkLearningSummary>|null
    */
    public function getWindowsInformationProtectionNetworkLearningSummaries(): ?array {
        return $this->windowsInformationProtectionNetworkLearningSummaries;
    }

    /**
     * Gets the windowsMalwareInformation property value. The list of affected malware in the tenant.
     * @return array<WindowsMalwareInformation>|null
    */
    public function getWindowsMalwareInformation(): ?array {
        return $this->windowsMalwareInformation;
    }

    /**
     * Gets the windowsMalwareOverview property value. Malware overview for windows devices.
     * @return WindowsMalwareOverview|null
    */
    public function getWindowsMalwareOverview(): ?WindowsMalwareOverview {
        return $this->windowsMalwareOverview;
    }

    /**
     * Gets the windowsQualityUpdateProfiles property value. A collection of windows quality update profiles
     * @return array<WindowsQualityUpdateProfile>|null
    */
    public function getWindowsQualityUpdateProfiles(): ?array {
        return $this->windowsQualityUpdateProfiles;
    }

    /**
     * Gets the windowsUpdateCatalogItems property value. A collection of windows update catalog items (fetaure updates item , quality updates item)
     * @return array<WindowsUpdateCatalogItem>|null
    */
    public function getWindowsUpdateCatalogItems(): ?array {
        return $this->windowsUpdateCatalogItems;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('accountMoveCompletionDateTime', $this->accountMoveCompletionDateTime);
        $writer->writeObjectValue('adminConsent', $this->adminConsent);
        $writer->writeObjectValue('advancedThreatProtectionOnboardingStateSummary', $this->advancedThreatProtectionOnboardingStateSummary);
        $writer->writeCollectionOfObjectValues('androidDeviceOwnerEnrollmentProfiles', $this->androidDeviceOwnerEnrollmentProfiles);
        $writer->writeCollectionOfObjectValues('androidForWorkAppConfigurationSchemas', $this->androidForWorkAppConfigurationSchemas);
        $writer->writeCollectionOfObjectValues('androidForWorkEnrollmentProfiles', $this->androidForWorkEnrollmentProfiles);
        $writer->writeObjectValue('androidForWorkSettings', $this->androidForWorkSettings);
        $writer->writeObjectValue('androidManagedStoreAccountEnterpriseSettings', $this->androidManagedStoreAccountEnterpriseSettings);
        $writer->writeCollectionOfObjectValues('androidManagedStoreAppConfigurationSchemas', $this->androidManagedStoreAppConfigurationSchemas);
        $writer->writeObjectValue('applePushNotificationCertificate', $this->applePushNotificationCertificate);
        $writer->writeCollectionOfObjectValues('appleUserInitiatedEnrollmentProfiles', $this->appleUserInitiatedEnrollmentProfiles);
        $writer->writeCollectionOfObjectValues('assignmentFilters', $this->assignmentFilters);
        $writer->writeCollectionOfObjectValues('auditEvents', $this->auditEvents);
        $writer->writeCollectionOfObjectValues('autopilotEvents', $this->autopilotEvents);
        $writer->writeCollectionOfObjectValues('cartToClassAssociations', $this->cartToClassAssociations);
        $writer->writeCollectionOfObjectValues('categories', $this->categories);
        $writer->writeCollectionOfObjectValues('certificateConnectorDetails', $this->certificateConnectorDetails);
        $writer->writeCollectionOfObjectValues('chromeOSOnboardingSettings', $this->chromeOSOnboardingSettings);
        $writer->writeCollectionOfObjectValues('cloudPCConnectivityIssues', $this->cloudPCConnectivityIssues);
        $writer->writeCollectionOfObjectValues('comanagedDevices', $this->comanagedDevices);
        $writer->writeCollectionOfObjectValues('comanagementEligibleDevices', $this->comanagementEligibleDevices);
        $writer->writeCollectionOfObjectValues('complianceCategories', $this->complianceCategories);
        $writer->writeCollectionOfObjectValues('complianceManagementPartners', $this->complianceManagementPartners);
        $writer->writeCollectionOfObjectValues('compliancePolicies', $this->compliancePolicies);
        $writer->writeCollectionOfObjectValues('complianceSettings', $this->complianceSettings);
        $writer->writeObjectValue('conditionalAccessSettings', $this->conditionalAccessSettings);
        $writer->writeCollectionOfObjectValues('configManagerCollections', $this->configManagerCollections);
        $writer->writeCollectionOfObjectValues('configurationCategories', $this->configurationCategories);
        $writer->writeCollectionOfObjectValues('configurationPolicies', $this->configurationPolicies);
        $writer->writeCollectionOfObjectValues('configurationPolicyTemplates', $this->configurationPolicyTemplates);
        $writer->writeCollectionOfObjectValues('configurationSettings', $this->configurationSettings);
        $writer->writeCollectionOfObjectValues('dataSharingConsents', $this->dataSharingConsents);
        $writer->writeCollectionOfObjectValues('depOnboardingSettings', $this->depOnboardingSettings);
        $writer->writeCollectionOfObjectValues('derivedCredentials', $this->derivedCredentials);
        $writer->writeCollectionOfObjectValues('detectedApps', $this->detectedApps);
        $writer->writeCollectionOfObjectValues('deviceCategories', $this->deviceCategories);
        $writer->writeCollectionOfObjectValues('deviceCompliancePolicies', $this->deviceCompliancePolicies);
        $writer->writeObjectValue('deviceCompliancePolicyDeviceStateSummary', $this->deviceCompliancePolicyDeviceStateSummary);
        $writer->writeCollectionOfObjectValues('deviceCompliancePolicySettingStateSummaries', $this->deviceCompliancePolicySettingStateSummaries);
        $writer->writeDateTimeValue('deviceComplianceReportSummarizationDateTime', $this->deviceComplianceReportSummarizationDateTime);
        $writer->writeCollectionOfObjectValues('deviceComplianceScripts', $this->deviceComplianceScripts);
        $writer->writeCollectionOfObjectValues('deviceConfigurationConflictSummary', $this->deviceConfigurationConflictSummary);
        $writer->writeObjectValue('deviceConfigurationDeviceStateSummaries', $this->deviceConfigurationDeviceStateSummaries);
        $writer->writeCollectionOfObjectValues('deviceConfigurationRestrictedAppsViolations', $this->deviceConfigurationRestrictedAppsViolations);
        $writer->writeCollectionOfObjectValues('deviceConfigurations', $this->deviceConfigurations);
        $writer->writeCollectionOfObjectValues('deviceConfigurationsAllManagedDeviceCertificateStates', $this->deviceConfigurationsAllManagedDeviceCertificateStates);
        $writer->writeObjectValue('deviceConfigurationUserStateSummaries', $this->deviceConfigurationUserStateSummaries);
        $writer->writeCollectionOfObjectValues('deviceCustomAttributeShellScripts', $this->deviceCustomAttributeShellScripts);
        $writer->writeCollectionOfObjectValues('deviceEnrollmentConfigurations', $this->deviceEnrollmentConfigurations);
        $writer->writeCollectionOfObjectValues('deviceHealthScripts', $this->deviceHealthScripts);
        $writer->writeCollectionOfObjectValues('deviceManagementPartners', $this->deviceManagementPartners);
        $writer->writeCollectionOfObjectValues('deviceManagementScripts', $this->deviceManagementScripts);
        $writer->writeObjectValue('deviceProtectionOverview', $this->deviceProtectionOverview);
        $writer->writeCollectionOfObjectValues('deviceShellScripts', $this->deviceShellScripts);
        $writer->writeCollectionOfObjectValues('domainJoinConnectors', $this->domainJoinConnectors);
        $writer->writeCollectionOfObjectValues('embeddedSIMActivationCodePools', $this->embeddedSIMActivationCodePools);
        $writer->writeCollectionOfObjectValues('exchangeConnectors', $this->exchangeConnectors);
        $writer->writeCollectionOfObjectValues('exchangeOnPremisesPolicies', $this->exchangeOnPremisesPolicies);
        $writer->writeObjectValue('exchangeOnPremisesPolicy', $this->exchangeOnPremisesPolicy);
        $writer->writeCollectionOfObjectValues('groupPolicyCategories', $this->groupPolicyCategories);
        $writer->writeCollectionOfObjectValues('groupPolicyConfigurations', $this->groupPolicyConfigurations);
        $writer->writeCollectionOfObjectValues('groupPolicyDefinitionFiles', $this->groupPolicyDefinitionFiles);
        $writer->writeCollectionOfObjectValues('groupPolicyDefinitions', $this->groupPolicyDefinitions);
        $writer->writeCollectionOfObjectValues('groupPolicyMigrationReports', $this->groupPolicyMigrationReports);
        $writer->writeCollectionOfObjectValues('groupPolicyObjectFiles', $this->groupPolicyObjectFiles);
        $writer->writeCollectionOfObjectValues('groupPolicyUploadedDefinitionFiles', $this->groupPolicyUploadedDefinitionFiles);
        $writer->writeCollectionOfObjectValues('importedDeviceIdentities', $this->importedDeviceIdentities);
        $writer->writeCollectionOfObjectValues('importedWindowsAutopilotDeviceIdentities', $this->importedWindowsAutopilotDeviceIdentities);
        $writer->writeCollectionOfObjectValues('intents', $this->intents);
        $writer->writeStringValue('intuneAccountId', $this->intuneAccountId);
        $writer->writeObjectValue('intuneBrand', $this->intuneBrand);
        $writer->writeCollectionOfObjectValues('intuneBrandingProfiles', $this->intuneBrandingProfiles);
        $writer->writeCollectionOfObjectValues('iosUpdateStatuses', $this->iosUpdateStatuses);
        $writer->writeDateTimeValue('lastReportAggregationDateTime', $this->lastReportAggregationDateTime);
        $writer->writeBooleanValue('legacyPcManangementEnabled', $this->legacyPcManangementEnabled);
        $writer->writeCollectionOfObjectValues('macOSSoftwareUpdateAccountSummaries', $this->macOSSoftwareUpdateAccountSummaries);
        $writer->writeObjectValue('managedDeviceCleanupSettings', $this->managedDeviceCleanupSettings);
        $writer->writeCollectionOfObjectValues('managedDeviceEncryptionStates', $this->managedDeviceEncryptionStates);
        $writer->writeObjectValue('managedDeviceOverview', $this->managedDeviceOverview);
        $writer->writeCollectionOfObjectValues('managedDevices', $this->managedDevices);
        $writer->writeCollectionOfObjectValues('managementConditions', $this->managementConditions);
        $writer->writeCollectionOfObjectValues('managementConditionStatements', $this->managementConditionStatements);
        $writer->writeIntegerValue('maximumDepTokens', $this->maximumDepTokens);
        $writer->writeCollectionOfObjectValues('microsoftTunnelConfigurations', $this->microsoftTunnelConfigurations);
        $writer->writeCollectionOfObjectValues('microsoftTunnelHealthThresholds', $this->microsoftTunnelHealthThresholds);
        $writer->writeCollectionOfObjectValues('microsoftTunnelServerLogCollectionResponses', $this->microsoftTunnelServerLogCollectionResponses);
        $writer->writeCollectionOfObjectValues('microsoftTunnelSites', $this->microsoftTunnelSites);
        $writer->writeCollectionOfObjectValues('mobileAppTroubleshootingEvents', $this->mobileAppTroubleshootingEvents);
        $writer->writeCollectionOfObjectValues('mobileThreatDefenseConnectors', $this->mobileThreatDefenseConnectors);
        $writer->writeCollectionOfObjectValues('ndesConnectors', $this->ndesConnectors);
        $writer->writeCollectionOfObjectValues('notificationMessageTemplates', $this->notificationMessageTemplates);
        $writer->writeCollectionOfObjectValues('oemWarrantyInformationOnboarding', $this->oemWarrantyInformationOnboarding);
        $writer->writeCollectionOfObjectValues('remoteActionAudits', $this->remoteActionAudits);
        $writer->writeCollectionOfObjectValues('remoteAssistancePartners', $this->remoteAssistancePartners);
        $writer->writeObjectValue('remoteAssistanceSettings', $this->remoteAssistanceSettings);
        $writer->writeObjectValue('reports', $this->reports);
        $writer->writeCollectionOfObjectValues('resourceAccessProfiles', $this->resourceAccessProfiles);
        $writer->writeCollectionOfObjectValues('resourceOperations', $this->resourceOperations);
        $writer->writeCollectionOfObjectValues('reusablePolicySettings', $this->reusablePolicySettings);
        $writer->writeCollectionOfObjectValues('reusableSettings', $this->reusableSettings);
        $writer->writeCollectionOfObjectValues('roleAssignments', $this->roleAssignments);
        $writer->writeCollectionOfObjectValues('roleDefinitions', $this->roleDefinitions);
        $writer->writeCollectionOfObjectValues('roleScopeTags', $this->roleScopeTags);
        $writer->writeCollectionOfObjectValues('settingDefinitions', $this->settingDefinitions);
        $writer->writeObjectValue('settings', $this->settings);
        $writer->writeObjectValue('softwareUpdateStatusSummary', $this->softwareUpdateStatusSummary);
        $writer->writeEnumValue('subscriptions', $this->subscriptions);
        $writer->writeEnumValue('subscriptionState', $this->subscriptionState);
        $writer->writeCollectionOfObjectValues('telecomExpenseManagementPartners', $this->telecomExpenseManagementPartners);
        $writer->writeCollectionOfObjectValues('templates', $this->templates);
        $writer->writeCollectionOfObjectValues('templateSettings', $this->templateSettings);
        $writer->writeObjectValue('tenantAttachRBAC', $this->tenantAttachRBAC);
        $writer->writeCollectionOfObjectValues('termsAndConditions', $this->termsAndConditions);
        $writer->writeCollectionOfObjectValues('troubleshootingEvents', $this->troubleshootingEvents);
        $writer->writeBooleanValue('unlicensedAdminstratorsEnabled', $this->unlicensedAdminstratorsEnabled);
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsAppHealthApplicationPerformance', $this->userExperienceAnalyticsAppHealthApplicationPerformance);
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion', $this->userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion);
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails', $this->userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails);
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId', $this->userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId);
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion', $this->userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion);
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsAppHealthDeviceModelPerformance', $this->userExperienceAnalyticsAppHealthDeviceModelPerformance);
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsAppHealthDevicePerformance', $this->userExperienceAnalyticsAppHealthDevicePerformance);
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsAppHealthDevicePerformanceDetails', $this->userExperienceAnalyticsAppHealthDevicePerformanceDetails);
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsAppHealthOSVersionPerformance', $this->userExperienceAnalyticsAppHealthOSVersionPerformance);
        $writer->writeObjectValue('userExperienceAnalyticsAppHealthOverview', $this->userExperienceAnalyticsAppHealthOverview);
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsBaselines', $this->userExperienceAnalyticsBaselines);
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsBatteryHealthAppImpact', $this->userExperienceAnalyticsBatteryHealthAppImpact);
        $writer->writeObjectValue('userExperienceAnalyticsBatteryHealthCapacityDetails', $this->userExperienceAnalyticsBatteryHealthCapacityDetails);
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsBatteryHealthDeviceAppImpact', $this->userExperienceAnalyticsBatteryHealthDeviceAppImpact);
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsBatteryHealthDevicePerformance', $this->userExperienceAnalyticsBatteryHealthDevicePerformance);
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory', $this->userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory);
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsBatteryHealthModelPerformance', $this->userExperienceAnalyticsBatteryHealthModelPerformance);
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsBatteryHealthOsPerformance', $this->userExperienceAnalyticsBatteryHealthOsPerformance);
        $writer->writeObjectValue('userExperienceAnalyticsBatteryHealthRuntimeDetails', $this->userExperienceAnalyticsBatteryHealthRuntimeDetails);
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsCategories', $this->userExperienceAnalyticsCategories);
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsDeviceMetricHistory', $this->userExperienceAnalyticsDeviceMetricHistory);
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsDevicePerformance', $this->userExperienceAnalyticsDevicePerformance);
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsDeviceScores', $this->userExperienceAnalyticsDeviceScores);
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsDeviceStartupHistory', $this->userExperienceAnalyticsDeviceStartupHistory);
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsDeviceStartupProcesses', $this->userExperienceAnalyticsDeviceStartupProcesses);
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsDeviceStartupProcessPerformance', $this->userExperienceAnalyticsDeviceStartupProcessPerformance);
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsDevicesWithoutCloudIdentity', $this->userExperienceAnalyticsDevicesWithoutCloudIdentity);
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsImpactingProcess', $this->userExperienceAnalyticsImpactingProcess);
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsMetricHistory', $this->userExperienceAnalyticsMetricHistory);
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsModelScores', $this->userExperienceAnalyticsModelScores);
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsNotAutopilotReadyDevice', $this->userExperienceAnalyticsNotAutopilotReadyDevice);
        $writer->writeObjectValue('userExperienceAnalyticsOverview', $this->userExperienceAnalyticsOverview);
        $writer->writeObjectValue('userExperienceAnalyticsRegressionSummary', $this->userExperienceAnalyticsRegressionSummary);
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsRemoteConnection', $this->userExperienceAnalyticsRemoteConnection);
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsResourcePerformance', $this->userExperienceAnalyticsResourcePerformance);
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsScoreHistory', $this->userExperienceAnalyticsScoreHistory);
        $writer->writeObjectValue('userExperienceAnalyticsSettings', $this->userExperienceAnalyticsSettings);
        $writer->writeObjectValue('userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric', $this->userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric);
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsWorkFromAnywhereMetrics', $this->userExperienceAnalyticsWorkFromAnywhereMetrics);
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsWorkFromAnywhereModelPerformance', $this->userExperienceAnalyticsWorkFromAnywhereModelPerformance);
        $writer->writeCollectionOfObjectValues('userPfxCertificates', $this->userPfxCertificates);
        $writer->writeObjectValue('virtualEndpoint', $this->virtualEndpoint);
        $writer->writeCollectionOfObjectValues('windowsAutopilotDeploymentProfiles', $this->windowsAutopilotDeploymentProfiles);
        $writer->writeCollectionOfObjectValues('windowsAutopilotDeviceIdentities', $this->windowsAutopilotDeviceIdentities);
        $writer->writeObjectValue('windowsAutopilotSettings', $this->windowsAutopilotSettings);
        $writer->writeCollectionOfObjectValues('windowsDriverUpdateProfiles', $this->windowsDriverUpdateProfiles);
        $writer->writeCollectionOfObjectValues('windowsFeatureUpdateProfiles', $this->windowsFeatureUpdateProfiles);
        $writer->writeCollectionOfObjectValues('windowsInformationProtectionAppLearningSummaries', $this->windowsInformationProtectionAppLearningSummaries);
        $writer->writeCollectionOfObjectValues('windowsInformationProtectionNetworkLearningSummaries', $this->windowsInformationProtectionNetworkLearningSummaries);
        $writer->writeCollectionOfObjectValues('windowsMalwareInformation', $this->windowsMalwareInformation);
        $writer->writeObjectValue('windowsMalwareOverview', $this->windowsMalwareOverview);
        $writer->writeCollectionOfObjectValues('windowsQualityUpdateProfiles', $this->windowsQualityUpdateProfiles);
        $writer->writeCollectionOfObjectValues('windowsUpdateCatalogItems', $this->windowsUpdateCatalogItems);
    }

    /**
     * Sets the accountMoveCompletionDateTime property value. The date & time when tenant data moved between scaleunits.
     *  @param DateTime|null $value Value to set for the accountMoveCompletionDateTime property.
    */
    public function setAccountMoveCompletionDateTime(?DateTime $value ): void {
        $this->accountMoveCompletionDateTime = $value;
    }

    /**
     * Sets the adminConsent property value. Admin consent information.
     *  @param AdminConsent|null $value Value to set for the adminConsent property.
    */
    public function setAdminConsent(?AdminConsent $value ): void {
        $this->adminConsent = $value;
    }

    /**
     * Sets the advancedThreatProtectionOnboardingStateSummary property value. The summary state of ATP onboarding state for this account.
     *  @param AdvancedThreatProtectionOnboardingStateSummary|null $value Value to set for the advancedThreatProtectionOnboardingStateSummary property.
    */
    public function setAdvancedThreatProtectionOnboardingStateSummary(?AdvancedThreatProtectionOnboardingStateSummary $value ): void {
        $this->advancedThreatProtectionOnboardingStateSummary = $value;
    }

    /**
     * Sets the androidDeviceOwnerEnrollmentProfiles property value. Android device owner enrollment profile entities.
     *  @param array<AndroidDeviceOwnerEnrollmentProfile>|null $value Value to set for the androidDeviceOwnerEnrollmentProfiles property.
    */
    public function setAndroidDeviceOwnerEnrollmentProfiles(?array $value ): void {
        $this->androidDeviceOwnerEnrollmentProfiles = $value;
    }

    /**
     * Sets the androidForWorkAppConfigurationSchemas property value. Android for Work app configuration schema entities.
     *  @param array<AndroidForWorkAppConfigurationSchema>|null $value Value to set for the androidForWorkAppConfigurationSchemas property.
    */
    public function setAndroidForWorkAppConfigurationSchemas(?array $value ): void {
        $this->androidForWorkAppConfigurationSchemas = $value;
    }

    /**
     * Sets the androidForWorkEnrollmentProfiles property value. Android for Work enrollment profile entities.
     *  @param array<AndroidForWorkEnrollmentProfile>|null $value Value to set for the androidForWorkEnrollmentProfiles property.
    */
    public function setAndroidForWorkEnrollmentProfiles(?array $value ): void {
        $this->androidForWorkEnrollmentProfiles = $value;
    }

    /**
     * Sets the androidForWorkSettings property value. The singleton Android for Work settings entity.
     *  @param AndroidForWorkSettings|null $value Value to set for the androidForWorkSettings property.
    */
    public function setAndroidForWorkSettings(?AndroidForWorkSettings $value ): void {
        $this->androidForWorkSettings = $value;
    }

    /**
     * Sets the androidManagedStoreAccountEnterpriseSettings property value. The singleton Android managed store account enterprise settings entity.
     *  @param AndroidManagedStoreAccountEnterpriseSettings|null $value Value to set for the androidManagedStoreAccountEnterpriseSettings property.
    */
    public function setAndroidManagedStoreAccountEnterpriseSettings(?AndroidManagedStoreAccountEnterpriseSettings $value ): void {
        $this->androidManagedStoreAccountEnterpriseSettings = $value;
    }

    /**
     * Sets the androidManagedStoreAppConfigurationSchemas property value. Android Enterprise app configuration schema entities.
     *  @param array<AndroidManagedStoreAppConfigurationSchema>|null $value Value to set for the androidManagedStoreAppConfigurationSchemas property.
    */
    public function setAndroidManagedStoreAppConfigurationSchemas(?array $value ): void {
        $this->androidManagedStoreAppConfigurationSchemas = $value;
    }

    /**
     * Sets the applePushNotificationCertificate property value. Apple push notification certificate.
     *  @param ApplePushNotificationCertificate|null $value Value to set for the applePushNotificationCertificate property.
    */
    public function setApplePushNotificationCertificate(?ApplePushNotificationCertificate $value ): void {
        $this->applePushNotificationCertificate = $value;
    }

    /**
     * Sets the appleUserInitiatedEnrollmentProfiles property value. Apple user initiated enrollment profiles
     *  @param array<AppleUserInitiatedEnrollmentProfile>|null $value Value to set for the appleUserInitiatedEnrollmentProfiles property.
    */
    public function setAppleUserInitiatedEnrollmentProfiles(?array $value ): void {
        $this->appleUserInitiatedEnrollmentProfiles = $value;
    }

    /**
     * Sets the assignmentFilters property value. The list of assignment filters
     *  @param array<DeviceAndAppManagementAssignmentFilter>|null $value Value to set for the assignmentFilters property.
    */
    public function setAssignmentFilters(?array $value ): void {
        $this->assignmentFilters = $value;
    }

    /**
     * Sets the auditEvents property value. The Audit Events
     *  @param array<AuditEvent>|null $value Value to set for the auditEvents property.
    */
    public function setAuditEvents(?array $value ): void {
        $this->auditEvents = $value;
    }

    /**
     * Sets the autopilotEvents property value. The list of autopilot events for the tenant.
     *  @param array<DeviceManagementAutopilotEvent>|null $value Value to set for the autopilotEvents property.
    */
    public function setAutopilotEvents(?array $value ): void {
        $this->autopilotEvents = $value;
    }

    /**
     * Sets the cartToClassAssociations property value. The Cart To Class Associations.
     *  @param array<CartToClassAssociation>|null $value Value to set for the cartToClassAssociations property.
    */
    public function setCartToClassAssociations(?array $value ): void {
        $this->cartToClassAssociations = $value;
    }

    /**
     * Sets the categories property value. The available categories
     *  @param array<DeviceManagementSettingCategory>|null $value Value to set for the categories property.
    */
    public function setCategories(?array $value ): void {
        $this->categories = $value;
    }

    /**
     * Sets the certificateConnectorDetails property value. Collection of certificate connector details, each associated with a corresponding Intune Certificate Connector.
     *  @param array<CertificateConnectorDetails>|null $value Value to set for the certificateConnectorDetails property.
    */
    public function setCertificateConnectorDetails(?array $value ): void {
        $this->certificateConnectorDetails = $value;
    }

    /**
     * Sets the chromeOSOnboardingSettings property value. Collection of ChromeOSOnboardingSettings settings associated with account.
     *  @param array<ChromeOSOnboardingSettings>|null $value Value to set for the chromeOSOnboardingSettings property.
    */
    public function setChromeOSOnboardingSettings(?array $value ): void {
        $this->chromeOSOnboardingSettings = $value;
    }

    /**
     * Sets the cloudPCConnectivityIssues property value. The list of CloudPC Connectivity Issue.
     *  @param array<CloudPCConnectivityIssue>|null $value Value to set for the cloudPCConnectivityIssues property.
    */
    public function setCloudPCConnectivityIssues(?array $value ): void {
        $this->cloudPCConnectivityIssues = $value;
    }

    /**
     * Sets the comanagedDevices property value. The list of co-managed devices report
     *  @param array<ManagedDevice>|null $value Value to set for the comanagedDevices property.
    */
    public function setComanagedDevices(?array $value ): void {
        $this->comanagedDevices = $value;
    }

    /**
     * Sets the comanagementEligibleDevices property value. The list of co-management eligible devices report
     *  @param array<ComanagementEligibleDevice>|null $value Value to set for the comanagementEligibleDevices property.
    */
    public function setComanagementEligibleDevices(?array $value ): void {
        $this->comanagementEligibleDevices = $value;
    }

    /**
     * Sets the complianceCategories property value. List of all compliance categories
     *  @param array<DeviceManagementConfigurationCategory>|null $value Value to set for the complianceCategories property.
    */
    public function setComplianceCategories(?array $value ): void {
        $this->complianceCategories = $value;
    }

    /**
     * Sets the complianceManagementPartners property value. The list of Compliance Management Partners configured by the tenant.
     *  @param array<ComplianceManagementPartner>|null $value Value to set for the complianceManagementPartners property.
    */
    public function setComplianceManagementPartners(?array $value ): void {
        $this->complianceManagementPartners = $value;
    }

    /**
     * Sets the compliancePolicies property value. List of all compliance policies
     *  @param array<DeviceManagementCompliancePolicy>|null $value Value to set for the compliancePolicies property.
    */
    public function setCompliancePolicies(?array $value ): void {
        $this->compliancePolicies = $value;
    }

    /**
     * Sets the complianceSettings property value. List of all ComplianceSettings
     *  @param array<DeviceManagementConfigurationSettingDefinition>|null $value Value to set for the complianceSettings property.
    */
    public function setComplianceSettings(?array $value ): void {
        $this->complianceSettings = $value;
    }

    /**
     * Sets the conditionalAccessSettings property value. The Exchange on premises conditional access settings. On premises conditional access will require devices to be both enrolled and compliant for mail access
     *  @param OnPremisesConditionalAccessSettings|null $value Value to set for the conditionalAccessSettings property.
    */
    public function setConditionalAccessSettings(?OnPremisesConditionalAccessSettings $value ): void {
        $this->conditionalAccessSettings = $value;
    }

    /**
     * Sets the configManagerCollections property value. A list of ConfigManagerCollection
     *  @param array<ConfigManagerCollection>|null $value Value to set for the configManagerCollections property.
    */
    public function setConfigManagerCollections(?array $value ): void {
        $this->configManagerCollections = $value;
    }

    /**
     * Sets the configurationCategories property value. List of all Configuration Categories
     *  @param array<DeviceManagementConfigurationCategory>|null $value Value to set for the configurationCategories property.
    */
    public function setConfigurationCategories(?array $value ): void {
        $this->configurationCategories = $value;
    }

    /**
     * Sets the configurationPolicies property value. List of all Configuration policies
     *  @param array<DeviceManagementConfigurationPolicy>|null $value Value to set for the configurationPolicies property.
    */
    public function setConfigurationPolicies(?array $value ): void {
        $this->configurationPolicies = $value;
    }

    /**
     * Sets the configurationPolicyTemplates property value. List of all templates
     *  @param array<DeviceManagementConfigurationPolicyTemplate>|null $value Value to set for the configurationPolicyTemplates property.
    */
    public function setConfigurationPolicyTemplates(?array $value ): void {
        $this->configurationPolicyTemplates = $value;
    }

    /**
     * Sets the configurationSettings property value. List of all ConfigurationSettings
     *  @param array<DeviceManagementConfigurationSettingDefinition>|null $value Value to set for the configurationSettings property.
    */
    public function setConfigurationSettings(?array $value ): void {
        $this->configurationSettings = $value;
    }

    /**
     * Sets the dataSharingConsents property value. Data sharing consents.
     *  @param array<DataSharingConsent>|null $value Value to set for the dataSharingConsents property.
    */
    public function setDataSharingConsents(?array $value ): void {
        $this->dataSharingConsents = $value;
    }

    /**
     * Sets the depOnboardingSettings property value. This collections of multiple DEP tokens per-tenant.
     *  @param array<DepOnboardingSetting>|null $value Value to set for the depOnboardingSettings property.
    */
    public function setDepOnboardingSettings(?array $value ): void {
        $this->depOnboardingSettings = $value;
    }

    /**
     * Sets the derivedCredentials property value. Collection of Derived credential settings associated with account.
     *  @param array<DeviceManagementDerivedCredentialSettings>|null $value Value to set for the derivedCredentials property.
    */
    public function setDerivedCredentials(?array $value ): void {
        $this->derivedCredentials = $value;
    }

    /**
     * Sets the detectedApps property value. The list of detected apps associated with a device.
     *  @param array<DetectedApp>|null $value Value to set for the detectedApps property.
    */
    public function setDetectedApps(?array $value ): void {
        $this->detectedApps = $value;
    }

    /**
     * Sets the deviceCategories property value. The list of device categories with the tenant.
     *  @param array<DeviceCategory>|null $value Value to set for the deviceCategories property.
    */
    public function setDeviceCategories(?array $value ): void {
        $this->deviceCategories = $value;
    }

    /**
     * Sets the deviceCompliancePolicies property value. The device compliance policies.
     *  @param array<DeviceCompliancePolicy>|null $value Value to set for the deviceCompliancePolicies property.
    */
    public function setDeviceCompliancePolicies(?array $value ): void {
        $this->deviceCompliancePolicies = $value;
    }

    /**
     * Sets the deviceCompliancePolicyDeviceStateSummary property value. The device compliance state summary for this account.
     *  @param DeviceCompliancePolicyDeviceStateSummary|null $value Value to set for the deviceCompliancePolicyDeviceStateSummary property.
    */
    public function setDeviceCompliancePolicyDeviceStateSummary(?DeviceCompliancePolicyDeviceStateSummary $value ): void {
        $this->deviceCompliancePolicyDeviceStateSummary = $value;
    }

    /**
     * Sets the deviceCompliancePolicySettingStateSummaries property value. The summary states of compliance policy settings for this account.
     *  @param array<DeviceCompliancePolicySettingStateSummary>|null $value Value to set for the deviceCompliancePolicySettingStateSummaries property.
    */
    public function setDeviceCompliancePolicySettingStateSummaries(?array $value ): void {
        $this->deviceCompliancePolicySettingStateSummaries = $value;
    }

    /**
     * Sets the deviceComplianceReportSummarizationDateTime property value. The last requested time of device compliance reporting for this account. This property is read-only.
     *  @param DateTime|null $value Value to set for the deviceComplianceReportSummarizationDateTime property.
    */
    public function setDeviceComplianceReportSummarizationDateTime(?DateTime $value ): void {
        $this->deviceComplianceReportSummarizationDateTime = $value;
    }

    /**
     * Sets the deviceComplianceScripts property value. The list of device compliance scripts associated with the tenant.
     *  @param array<DeviceComplianceScript>|null $value Value to set for the deviceComplianceScripts property.
    */
    public function setDeviceComplianceScripts(?array $value ): void {
        $this->deviceComplianceScripts = $value;
    }

    /**
     * Sets the deviceConfigurationConflictSummary property value. Summary of policies in conflict state for this account.
     *  @param array<DeviceConfigurationConflictSummary>|null $value Value to set for the deviceConfigurationConflictSummary property.
    */
    public function setDeviceConfigurationConflictSummary(?array $value ): void {
        $this->deviceConfigurationConflictSummary = $value;
    }

    /**
     * Sets the deviceConfigurationDeviceStateSummaries property value. The device configuration device state summary for this account.
     *  @param DeviceConfigurationDeviceStateSummary|null $value Value to set for the deviceConfigurationDeviceStateSummaries property.
    */
    public function setDeviceConfigurationDeviceStateSummaries(?DeviceConfigurationDeviceStateSummary $value ): void {
        $this->deviceConfigurationDeviceStateSummaries = $value;
    }

    /**
     * Sets the deviceConfigurationRestrictedAppsViolations property value. Restricted apps violations for this account.
     *  @param array<RestrictedAppsViolation>|null $value Value to set for the deviceConfigurationRestrictedAppsViolations property.
    */
    public function setDeviceConfigurationRestrictedAppsViolations(?array $value ): void {
        $this->deviceConfigurationRestrictedAppsViolations = $value;
    }

    /**
     * Sets the deviceConfigurations property value. The device configurations.
     *  @param array<DeviceConfiguration>|null $value Value to set for the deviceConfigurations property.
    */
    public function setDeviceConfigurations(?array $value ): void {
        $this->deviceConfigurations = $value;
    }

    /**
     * Sets the deviceConfigurationsAllManagedDeviceCertificateStates property value. Summary of all certificates for all devices.
     *  @param array<ManagedAllDeviceCertificateState>|null $value Value to set for the deviceConfigurationsAllManagedDeviceCertificateStates property.
    */
    public function setDeviceConfigurationsAllManagedDeviceCertificateStates(?array $value ): void {
        $this->deviceConfigurationsAllManagedDeviceCertificateStates = $value;
    }

    /**
     * Sets the deviceConfigurationUserStateSummaries property value. The device configuration user state summary for this account.
     *  @param DeviceConfigurationUserStateSummary|null $value Value to set for the deviceConfigurationUserStateSummaries property.
    */
    public function setDeviceConfigurationUserStateSummaries(?DeviceConfigurationUserStateSummary $value ): void {
        $this->deviceConfigurationUserStateSummaries = $value;
    }

    /**
     * Sets the deviceCustomAttributeShellScripts property value. The list of device custom attribute shell scripts associated with the tenant.
     *  @param array<DeviceCustomAttributeShellScript>|null $value Value to set for the deviceCustomAttributeShellScripts property.
    */
    public function setDeviceCustomAttributeShellScripts(?array $value ): void {
        $this->deviceCustomAttributeShellScripts = $value;
    }

    /**
     * Sets the deviceEnrollmentConfigurations property value. The list of device enrollment configurations
     *  @param array<DeviceEnrollmentConfiguration>|null $value Value to set for the deviceEnrollmentConfigurations property.
    */
    public function setDeviceEnrollmentConfigurations(?array $value ): void {
        $this->deviceEnrollmentConfigurations = $value;
    }

    /**
     * Sets the deviceHealthScripts property value. The list of device health scripts associated with the tenant.
     *  @param array<DeviceHealthScript>|null $value Value to set for the deviceHealthScripts property.
    */
    public function setDeviceHealthScripts(?array $value ): void {
        $this->deviceHealthScripts = $value;
    }

    /**
     * Sets the deviceManagementPartners property value. The list of Device Management Partners configured by the tenant.
     *  @param array<DeviceManagementPartner>|null $value Value to set for the deviceManagementPartners property.
    */
    public function setDeviceManagementPartners(?array $value ): void {
        $this->deviceManagementPartners = $value;
    }

    /**
     * Sets the deviceManagementScripts property value. The list of device management scripts associated with the tenant.
     *  @param array<DeviceManagementScript>|null $value Value to set for the deviceManagementScripts property.
    */
    public function setDeviceManagementScripts(?array $value ): void {
        $this->deviceManagementScripts = $value;
    }

    /**
     * Sets the deviceProtectionOverview property value. Device protection overview.
     *  @param DeviceProtectionOverview|null $value Value to set for the deviceProtectionOverview property.
    */
    public function setDeviceProtectionOverview(?DeviceProtectionOverview $value ): void {
        $this->deviceProtectionOverview = $value;
    }

    /**
     * Sets the deviceShellScripts property value. The list of device shell scripts associated with the tenant.
     *  @param array<DeviceShellScript>|null $value Value to set for the deviceShellScripts property.
    */
    public function setDeviceShellScripts(?array $value ): void {
        $this->deviceShellScripts = $value;
    }

    /**
     * Sets the domainJoinConnectors property value. A list of connector objects.
     *  @param array<DeviceManagementDomainJoinConnector>|null $value Value to set for the domainJoinConnectors property.
    */
    public function setDomainJoinConnectors(?array $value ): void {
        $this->domainJoinConnectors = $value;
    }

    /**
     * Sets the embeddedSIMActivationCodePools property value. The embedded SIM activation code pools created by this account.
     *  @param array<EmbeddedSIMActivationCodePool>|null $value Value to set for the embeddedSIMActivationCodePools property.
    */
    public function setEmbeddedSIMActivationCodePools(?array $value ): void {
        $this->embeddedSIMActivationCodePools = $value;
    }

    /**
     * Sets the exchangeConnectors property value. The list of Exchange Connectors configured by the tenant.
     *  @param array<DeviceManagementExchangeConnector>|null $value Value to set for the exchangeConnectors property.
    */
    public function setExchangeConnectors(?array $value ): void {
        $this->exchangeConnectors = $value;
    }

    /**
     * Sets the exchangeOnPremisesPolicies property value. The list of Exchange On Premisis policies configured by the tenant.
     *  @param array<DeviceManagementExchangeOnPremisesPolicy>|null $value Value to set for the exchangeOnPremisesPolicies property.
    */
    public function setExchangeOnPremisesPolicies(?array $value ): void {
        $this->exchangeOnPremisesPolicies = $value;
    }

    /**
     * Sets the exchangeOnPremisesPolicy property value. The policy which controls mobile device access to Exchange On Premises
     *  @param DeviceManagementExchangeOnPremisesPolicy|null $value Value to set for the exchangeOnPremisesPolicy property.
    */
    public function setExchangeOnPremisesPolicy(?DeviceManagementExchangeOnPremisesPolicy $value ): void {
        $this->exchangeOnPremisesPolicy = $value;
    }

    /**
     * Sets the groupPolicyCategories property value. The available group policy categories for this account.
     *  @param array<GroupPolicyCategory>|null $value Value to set for the groupPolicyCategories property.
    */
    public function setGroupPolicyCategories(?array $value ): void {
        $this->groupPolicyCategories = $value;
    }

    /**
     * Sets the groupPolicyConfigurations property value. The group policy configurations created by this account.
     *  @param array<GroupPolicyConfiguration>|null $value Value to set for the groupPolicyConfigurations property.
    */
    public function setGroupPolicyConfigurations(?array $value ): void {
        $this->groupPolicyConfigurations = $value;
    }

    /**
     * Sets the groupPolicyDefinitionFiles property value. The available group policy definition files for this account.
     *  @param array<GroupPolicyDefinitionFile>|null $value Value to set for the groupPolicyDefinitionFiles property.
    */
    public function setGroupPolicyDefinitionFiles(?array $value ): void {
        $this->groupPolicyDefinitionFiles = $value;
    }

    /**
     * Sets the groupPolicyDefinitions property value. The available group policy definitions for this account.
     *  @param array<GroupPolicyDefinition>|null $value Value to set for the groupPolicyDefinitions property.
    */
    public function setGroupPolicyDefinitions(?array $value ): void {
        $this->groupPolicyDefinitions = $value;
    }

    /**
     * Sets the groupPolicyMigrationReports property value. A list of Group Policy migration reports.
     *  @param array<GroupPolicyMigrationReport>|null $value Value to set for the groupPolicyMigrationReports property.
    */
    public function setGroupPolicyMigrationReports(?array $value ): void {
        $this->groupPolicyMigrationReports = $value;
    }

    /**
     * Sets the groupPolicyObjectFiles property value. A list of Group Policy Object files uploaded.
     *  @param array<GroupPolicyObjectFile>|null $value Value to set for the groupPolicyObjectFiles property.
    */
    public function setGroupPolicyObjectFiles(?array $value ): void {
        $this->groupPolicyObjectFiles = $value;
    }

    /**
     * Sets the groupPolicyUploadedDefinitionFiles property value. The available group policy uploaded definition files for this account.
     *  @param array<GroupPolicyUploadedDefinitionFile>|null $value Value to set for the groupPolicyUploadedDefinitionFiles property.
    */
    public function setGroupPolicyUploadedDefinitionFiles(?array $value ): void {
        $this->groupPolicyUploadedDefinitionFiles = $value;
    }

    /**
     * Sets the importedDeviceIdentities property value. The imported device identities.
     *  @param array<ImportedDeviceIdentity>|null $value Value to set for the importedDeviceIdentities property.
    */
    public function setImportedDeviceIdentities(?array $value ): void {
        $this->importedDeviceIdentities = $value;
    }

    /**
     * Sets the importedWindowsAutopilotDeviceIdentities property value. Collection of imported Windows autopilot devices.
     *  @param array<ImportedWindowsAutopilotDeviceIdentity>|null $value Value to set for the importedWindowsAutopilotDeviceIdentities property.
    */
    public function setImportedWindowsAutopilotDeviceIdentities(?array $value ): void {
        $this->importedWindowsAutopilotDeviceIdentities = $value;
    }

    /**
     * Sets the intents property value. The device management intents
     *  @param array<DeviceManagementIntent>|null $value Value to set for the intents property.
    */
    public function setIntents(?array $value ): void {
        $this->intents = $value;
    }

    /**
     * Sets the intuneAccountId property value. Intune Account Id for given tenant
     *  @param string|null $value Value to set for the intuneAccountId property.
    */
    public function setIntuneAccountId(?string $value ): void {
        $this->intuneAccountId = $value;
    }

    /**
     * Sets the intuneBrand property value. intuneBrand contains data which is used in customizing the appearance of the Company Portal applications as well as the end user web portal.
     *  @param IntuneBrand|null $value Value to set for the intuneBrand property.
    */
    public function setIntuneBrand(?IntuneBrand $value ): void {
        $this->intuneBrand = $value;
    }

    /**
     * Sets the intuneBrandingProfiles property value. Intune branding profiles targeted to AAD groups
     *  @param array<IntuneBrandingProfile>|null $value Value to set for the intuneBrandingProfiles property.
    */
    public function setIntuneBrandingProfiles(?array $value ): void {
        $this->intuneBrandingProfiles = $value;
    }

    /**
     * Sets the iosUpdateStatuses property value. The IOS software update installation statuses for this account.
     *  @param array<IosUpdateDeviceStatus>|null $value Value to set for the iosUpdateStatuses property.
    */
    public function setIosUpdateStatuses(?array $value ): void {
        $this->iosUpdateStatuses = $value;
    }

    /**
     * Sets the lastReportAggregationDateTime property value. The last modified time of reporting for this account. This property is read-only.
     *  @param DateTime|null $value Value to set for the lastReportAggregationDateTime property.
    */
    public function setLastReportAggregationDateTime(?DateTime $value ): void {
        $this->lastReportAggregationDateTime = $value;
    }

    /**
     * Sets the legacyPcManangementEnabled property value. The property to enable Non-MDM managed legacy PC management for this account. This property is read-only.
     *  @param bool|null $value Value to set for the legacyPcManangementEnabled property.
    */
    public function setLegacyPcManangementEnabled(?bool $value ): void {
        $this->legacyPcManangementEnabled = $value;
    }

    /**
     * Sets the macOSSoftwareUpdateAccountSummaries property value. The MacOS software update account summaries for this account.
     *  @param array<MacOSSoftwareUpdateAccountSummary>|null $value Value to set for the macOSSoftwareUpdateAccountSummaries property.
    */
    public function setMacOSSoftwareUpdateAccountSummaries(?array $value ): void {
        $this->macOSSoftwareUpdateAccountSummaries = $value;
    }

    /**
     * Sets the managedDeviceCleanupSettings property value. Device cleanup rule
     *  @param ManagedDeviceCleanupSettings|null $value Value to set for the managedDeviceCleanupSettings property.
    */
    public function setManagedDeviceCleanupSettings(?ManagedDeviceCleanupSettings $value ): void {
        $this->managedDeviceCleanupSettings = $value;
    }

    /**
     * Sets the managedDeviceEncryptionStates property value. Encryption report for devices in this account
     *  @param array<ManagedDeviceEncryptionState>|null $value Value to set for the managedDeviceEncryptionStates property.
    */
    public function setManagedDeviceEncryptionStates(?array $value ): void {
        $this->managedDeviceEncryptionStates = $value;
    }

    /**
     * Sets the managedDeviceOverview property value. Device overview
     *  @param ManagedDeviceOverview|null $value Value to set for the managedDeviceOverview property.
    */
    public function setManagedDeviceOverview(?ManagedDeviceOverview $value ): void {
        $this->managedDeviceOverview = $value;
    }

    /**
     * Sets the managedDevices property value. The list of managed devices.
     *  @param array<ManagedDevice>|null $value Value to set for the managedDevices property.
    */
    public function setManagedDevices(?array $value ): void {
        $this->managedDevices = $value;
    }

    /**
     * Sets the managementConditions property value. The management conditions associated with device management of the company.
     *  @param array<ManagementCondition>|null $value Value to set for the managementConditions property.
    */
    public function setManagementConditions(?array $value ): void {
        $this->managementConditions = $value;
    }

    /**
     * Sets the managementConditionStatements property value. The management condition statements associated with device management of the company.
     *  @param array<ManagementConditionStatement>|null $value Value to set for the managementConditionStatements property.
    */
    public function setManagementConditionStatements(?array $value ): void {
        $this->managementConditionStatements = $value;
    }

    /**
     * Sets the maximumDepTokens property value. Maximum number of DEP tokens allowed per-tenant.
     *  @param int|null $value Value to set for the maximumDepTokens property.
    */
    public function setMaximumDepTokens(?int $value ): void {
        $this->maximumDepTokens = $value;
    }

    /**
     * Sets the microsoftTunnelConfigurations property value. Collection of MicrosoftTunnelConfiguration settings associated with account.
     *  @param array<MicrosoftTunnelConfiguration>|null $value Value to set for the microsoftTunnelConfigurations property.
    */
    public function setMicrosoftTunnelConfigurations(?array $value ): void {
        $this->microsoftTunnelConfigurations = $value;
    }

    /**
     * Sets the microsoftTunnelHealthThresholds property value. Collection of MicrosoftTunnelHealthThreshold settings associated with account.
     *  @param array<MicrosoftTunnelHealthThreshold>|null $value Value to set for the microsoftTunnelHealthThresholds property.
    */
    public function setMicrosoftTunnelHealthThresholds(?array $value ): void {
        $this->microsoftTunnelHealthThresholds = $value;
    }

    /**
     * Sets the microsoftTunnelServerLogCollectionResponses property value. Collection of MicrosoftTunnelServerLogCollectionResponse settings associated with account.
     *  @param array<MicrosoftTunnelServerLogCollectionResponse>|null $value Value to set for the microsoftTunnelServerLogCollectionResponses property.
    */
    public function setMicrosoftTunnelServerLogCollectionResponses(?array $value ): void {
        $this->microsoftTunnelServerLogCollectionResponses = $value;
    }

    /**
     * Sets the microsoftTunnelSites property value. Collection of MicrosoftTunnelSite settings associated with account.
     *  @param array<MicrosoftTunnelSite>|null $value Value to set for the microsoftTunnelSites property.
    */
    public function setMicrosoftTunnelSites(?array $value ): void {
        $this->microsoftTunnelSites = $value;
    }

    /**
     * Sets the mobileAppTroubleshootingEvents property value. The collection property of MobileAppTroubleshootingEvent.
     *  @param array<MobileAppTroubleshootingEvent>|null $value Value to set for the mobileAppTroubleshootingEvents property.
    */
    public function setMobileAppTroubleshootingEvents(?array $value ): void {
        $this->mobileAppTroubleshootingEvents = $value;
    }

    /**
     * Sets the mobileThreatDefenseConnectors property value. The list of Mobile threat Defense connectors configured by the tenant.
     *  @param array<MobileThreatDefenseConnector>|null $value Value to set for the mobileThreatDefenseConnectors property.
    */
    public function setMobileThreatDefenseConnectors(?array $value ): void {
        $this->mobileThreatDefenseConnectors = $value;
    }

    /**
     * Sets the ndesConnectors property value. The collection of Ndes connectors for this account.
     *  @param array<NdesConnector>|null $value Value to set for the ndesConnectors property.
    */
    public function setNdesConnectors(?array $value ): void {
        $this->ndesConnectors = $value;
    }

    /**
     * Sets the notificationMessageTemplates property value. The Notification Message Templates.
     *  @param array<NotificationMessageTemplate>|null $value Value to set for the notificationMessageTemplates property.
    */
    public function setNotificationMessageTemplates(?array $value ): void {
        $this->notificationMessageTemplates = $value;
    }

    /**
     * Sets the oemWarrantyInformationOnboarding property value. List of OEM Warranty Statuses
     *  @param array<OemWarrantyInformationOnboarding>|null $value Value to set for the oemWarrantyInformationOnboarding property.
    */
    public function setOemWarrantyInformationOnboarding(?array $value ): void {
        $this->oemWarrantyInformationOnboarding = $value;
    }

    /**
     * Sets the remoteActionAudits property value. The list of device remote action audits with the tenant.
     *  @param array<RemoteActionAudit>|null $value Value to set for the remoteActionAudits property.
    */
    public function setRemoteActionAudits(?array $value ): void {
        $this->remoteActionAudits = $value;
    }

    /**
     * Sets the remoteAssistancePartners property value. The remote assist partners.
     *  @param array<RemoteAssistancePartner>|null $value Value to set for the remoteAssistancePartners property.
    */
    public function setRemoteAssistancePartners(?array $value ): void {
        $this->remoteAssistancePartners = $value;
    }

    /**
     * Sets the remoteAssistanceSettings property value. The remote assistance settings singleton
     *  @param RemoteAssistanceSettings|null $value Value to set for the remoteAssistanceSettings property.
    */
    public function setRemoteAssistanceSettings(?RemoteAssistanceSettings $value ): void {
        $this->remoteAssistanceSettings = $value;
    }

    /**
     * Sets the reports property value. Reports singleton
     *  @param DeviceManagementReports|null $value Value to set for the reports property.
    */
    public function setReports(?DeviceManagementReports $value ): void {
        $this->reports = $value;
    }

    /**
     * Sets the resourceAccessProfiles property value. Collection of resource access settings associated with account.
     *  @param array<DeviceManagementResourceAccessProfileBase>|null $value Value to set for the resourceAccessProfiles property.
    */
    public function setResourceAccessProfiles(?array $value ): void {
        $this->resourceAccessProfiles = $value;
    }

    /**
     * Sets the resourceOperations property value. The Resource Operations.
     *  @param array<ResourceOperation>|null $value Value to set for the resourceOperations property.
    */
    public function setResourceOperations(?array $value ): void {
        $this->resourceOperations = $value;
    }

    /**
     * Sets the reusablePolicySettings property value. List of all reusable settings that can be referred in a policy
     *  @param array<DeviceManagementReusablePolicySetting>|null $value Value to set for the reusablePolicySettings property.
    */
    public function setReusablePolicySettings(?array $value ): void {
        $this->reusablePolicySettings = $value;
    }

    /**
     * Sets the reusableSettings property value. List of all reusable settings
     *  @param array<DeviceManagementConfigurationSettingDefinition>|null $value Value to set for the reusableSettings property.
    */
    public function setReusableSettings(?array $value ): void {
        $this->reusableSettings = $value;
    }

    /**
     * Sets the roleAssignments property value. The Role Assignments.
     *  @param array<DeviceAndAppManagementRoleAssignment>|null $value Value to set for the roleAssignments property.
    */
    public function setRoleAssignments(?array $value ): void {
        $this->roleAssignments = $value;
    }

    /**
     * Sets the roleDefinitions property value. The Role Definitions.
     *  @param array<RoleDefinition>|null $value Value to set for the roleDefinitions property.
    */
    public function setRoleDefinitions(?array $value ): void {
        $this->roleDefinitions = $value;
    }

    /**
     * Sets the roleScopeTags property value. The Role Scope Tags.
     *  @param array<RoleScopeTag>|null $value Value to set for the roleScopeTags property.
    */
    public function setRoleScopeTags(?array $value ): void {
        $this->roleScopeTags = $value;
    }

    /**
     * Sets the settingDefinitions property value. The device management intent setting definitions
     *  @param array<DeviceManagementSettingDefinition>|null $value Value to set for the settingDefinitions property.
    */
    public function setSettingDefinitions(?array $value ): void {
        $this->settingDefinitions = $value;
    }

    /**
     * Sets the settings property value. Account level settings.
     *  @param DeviceManagementSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?DeviceManagementSettings $value ): void {
        $this->settings = $value;
    }

    /**
     * Sets the softwareUpdateStatusSummary property value. The software update status summary.
     *  @param SoftwareUpdateStatusSummary|null $value Value to set for the softwareUpdateStatusSummary property.
    */
    public function setSoftwareUpdateStatusSummary(?SoftwareUpdateStatusSummary $value ): void {
        $this->softwareUpdateStatusSummary = $value;
    }

    /**
     * Sets the subscriptions property value. Tenant's Subscription. Possible values are: none, intune, office365, intunePremium, intune_EDU, intune_SMB.
     *  @param DeviceManagementSubscriptions|null $value Value to set for the subscriptions property.
    */
    public function setSubscriptions(?DeviceManagementSubscriptions $value ): void {
        $this->subscriptions = $value;
    }

    /**
     * Sets the subscriptionState property value. Tenant mobile device management subscription state. Possible values are: pending, active, warning, disabled, deleted, blocked, lockedOut.
     *  @param DeviceManagementSubscriptionState|null $value Value to set for the subscriptionState property.
    */
    public function setSubscriptionState(?DeviceManagementSubscriptionState $value ): void {
        $this->subscriptionState = $value;
    }

    /**
     * Sets the telecomExpenseManagementPartners property value. The telecom expense management partners.
     *  @param array<TelecomExpenseManagementPartner>|null $value Value to set for the telecomExpenseManagementPartners property.
    */
    public function setTelecomExpenseManagementPartners(?array $value ): void {
        $this->telecomExpenseManagementPartners = $value;
    }

    /**
     * Sets the templates property value. The available templates
     *  @param array<DeviceManagementTemplate>|null $value Value to set for the templates property.
    */
    public function setTemplates(?array $value ): void {
        $this->templates = $value;
    }

    /**
     * Sets the templateSettings property value. List of all TemplateSettings
     *  @param array<DeviceManagementConfigurationSettingTemplate>|null $value Value to set for the templateSettings property.
    */
    public function setTemplateSettings(?array $value ): void {
        $this->templateSettings = $value;
    }

    /**
     * Sets the tenantAttachRBAC property value. TenantAttach RBAC Enablement
     *  @param TenantAttachRBAC|null $value Value to set for the tenantAttachRBAC property.
    */
    public function setTenantAttachRBAC(?TenantAttachRBAC $value ): void {
        $this->tenantAttachRBAC = $value;
    }

    /**
     * Sets the termsAndConditions property value. The terms and conditions associated with device management of the company.
     *  @param array<TermsAndConditions>|null $value Value to set for the termsAndConditions property.
    */
    public function setTermsAndConditions(?array $value ): void {
        $this->termsAndConditions = $value;
    }

    /**
     * Sets the troubleshootingEvents property value. The list of troubleshooting events for the tenant.
     *  @param array<DeviceManagementTroubleshootingEvent>|null $value Value to set for the troubleshootingEvents property.
    */
    public function setTroubleshootingEvents(?array $value ): void {
        $this->troubleshootingEvents = $value;
    }

    /**
     * Sets the unlicensedAdminstratorsEnabled property value. When enabled, users assigned as administrators via Role Assignment Memberships do not require an assigned Intune license. Prior to this, only Intune licensed users were granted permissions with an Intune role unless they were assigned a role via Azure Active Directory. You are limited to 350 unlicensed direct members for each AAD security group in a role assignment, but you can assign multiple AAD security groups to a role if you need to support more than 350 unlicensed administrators. Licensed administrators are unaffected, do not have to be direct members, nor does the 350 member limit apply. This property is read-only.
     *  @param bool|null $value Value to set for the unlicensedAdminstratorsEnabled property.
    */
    public function setUnlicensedAdminstratorsEnabled(?bool $value ): void {
        $this->unlicensedAdminstratorsEnabled = $value;
    }

    /**
     * Sets the userExperienceAnalyticsAppHealthApplicationPerformance property value. User experience analytics appHealth Application Performance
     *  @param array<UserExperienceAnalyticsAppHealthApplicationPerformance>|null $value Value to set for the userExperienceAnalyticsAppHealthApplicationPerformance property.
    */
    public function setUserExperienceAnalyticsAppHealthApplicationPerformance(?array $value ): void {
        $this->userExperienceAnalyticsAppHealthApplicationPerformance = $value;
    }

    /**
     * Sets the userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion property value. User experience analytics appHealth Application Performance by App Version
     *  @param array<UserExperienceAnalyticsAppHealthAppPerformanceByAppVersion>|null $value Value to set for the userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion property.
    */
    public function setUserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion(?array $value ): void {
        $this->userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion = $value;
    }

    /**
     * Sets the userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails property value. User experience analytics appHealth Application Performance by App Version details
     *  @param array<UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails>|null $value Value to set for the userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails property.
    */
    public function setUserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails(?array $value ): void {
        $this->userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails = $value;
    }

    /**
     * Sets the userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId property value. User experience analytics appHealth Application Performance by App Version Device Id
     *  @param array<UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId>|null $value Value to set for the userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId property.
    */
    public function setUserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId(?array $value ): void {
        $this->userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId = $value;
    }

    /**
     * Sets the userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion property value. User experience analytics appHealth Application Performance by OS Version
     *  @param array<UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion>|null $value Value to set for the userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion property.
    */
    public function setUserExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion(?array $value ): void {
        $this->userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion = $value;
    }

    /**
     * Sets the userExperienceAnalyticsAppHealthDeviceModelPerformance property value. User experience analytics appHealth Model Performance
     *  @param array<UserExperienceAnalyticsAppHealthDeviceModelPerformance>|null $value Value to set for the userExperienceAnalyticsAppHealthDeviceModelPerformance property.
    */
    public function setUserExperienceAnalyticsAppHealthDeviceModelPerformance(?array $value ): void {
        $this->userExperienceAnalyticsAppHealthDeviceModelPerformance = $value;
    }

    /**
     * Sets the userExperienceAnalyticsAppHealthDevicePerformance property value. User experience analytics appHealth Device Performance
     *  @param array<UserExperienceAnalyticsAppHealthDevicePerformance>|null $value Value to set for the userExperienceAnalyticsAppHealthDevicePerformance property.
    */
    public function setUserExperienceAnalyticsAppHealthDevicePerformance(?array $value ): void {
        $this->userExperienceAnalyticsAppHealthDevicePerformance = $value;
    }

    /**
     * Sets the userExperienceAnalyticsAppHealthDevicePerformanceDetails property value. User experience analytics device performance details
     *  @param array<UserExperienceAnalyticsAppHealthDevicePerformanceDetails>|null $value Value to set for the userExperienceAnalyticsAppHealthDevicePerformanceDetails property.
    */
    public function setUserExperienceAnalyticsAppHealthDevicePerformanceDetails(?array $value ): void {
        $this->userExperienceAnalyticsAppHealthDevicePerformanceDetails = $value;
    }

    /**
     * Sets the userExperienceAnalyticsAppHealthOSVersionPerformance property value. User experience analytics appHealth OS version Performance
     *  @param array<UserExperienceAnalyticsAppHealthOSVersionPerformance>|null $value Value to set for the userExperienceAnalyticsAppHealthOSVersionPerformance property.
    */
    public function setUserExperienceAnalyticsAppHealthOSVersionPerformance(?array $value ): void {
        $this->userExperienceAnalyticsAppHealthOSVersionPerformance = $value;
    }

    /**
     * Sets the userExperienceAnalyticsAppHealthOverview property value. User experience analytics appHealth overview
     *  @param UserExperienceAnalyticsCategory|null $value Value to set for the userExperienceAnalyticsAppHealthOverview property.
    */
    public function setUserExperienceAnalyticsAppHealthOverview(?UserExperienceAnalyticsCategory $value ): void {
        $this->userExperienceAnalyticsAppHealthOverview = $value;
    }

    /**
     * Sets the userExperienceAnalyticsBaselines property value. User experience analytics baselines
     *  @param array<UserExperienceAnalyticsBaseline>|null $value Value to set for the userExperienceAnalyticsBaselines property.
    */
    public function setUserExperienceAnalyticsBaselines(?array $value ): void {
        $this->userExperienceAnalyticsBaselines = $value;
    }

    /**
     * Sets the userExperienceAnalyticsBatteryHealthAppImpact property value. User Experience Analytics Battery Health App Impact
     *  @param array<UserExperienceAnalyticsBatteryHealthAppImpact>|null $value Value to set for the userExperienceAnalyticsBatteryHealthAppImpact property.
    */
    public function setUserExperienceAnalyticsBatteryHealthAppImpact(?array $value ): void {
        $this->userExperienceAnalyticsBatteryHealthAppImpact = $value;
    }

    /**
     * Sets the userExperienceAnalyticsBatteryHealthCapacityDetails property value. User Experience Analytics Battery Health Capacity Details
     *  @param UserExperienceAnalyticsBatteryHealthCapacityDetails|null $value Value to set for the userExperienceAnalyticsBatteryHealthCapacityDetails property.
    */
    public function setUserExperienceAnalyticsBatteryHealthCapacityDetails(?UserExperienceAnalyticsBatteryHealthCapacityDetails $value ): void {
        $this->userExperienceAnalyticsBatteryHealthCapacityDetails = $value;
    }

    /**
     * Sets the userExperienceAnalyticsBatteryHealthDeviceAppImpact property value. User Experience Analytics Battery Health Device App Impact
     *  @param array<UserExperienceAnalyticsBatteryHealthDeviceAppImpact>|null $value Value to set for the userExperienceAnalyticsBatteryHealthDeviceAppImpact property.
    */
    public function setUserExperienceAnalyticsBatteryHealthDeviceAppImpact(?array $value ): void {
        $this->userExperienceAnalyticsBatteryHealthDeviceAppImpact = $value;
    }

    /**
     * Sets the userExperienceAnalyticsBatteryHealthDevicePerformance property value. User Experience Analytics Battery Health Device Performance
     *  @param array<UserExperienceAnalyticsBatteryHealthDevicePerformance>|null $value Value to set for the userExperienceAnalyticsBatteryHealthDevicePerformance property.
    */
    public function setUserExperienceAnalyticsBatteryHealthDevicePerformance(?array $value ): void {
        $this->userExperienceAnalyticsBatteryHealthDevicePerformance = $value;
    }

    /**
     * Sets the userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory property value. User Experience Analytics Battery Health Device Runtime History
     *  @param array<UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory>|null $value Value to set for the userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory property.
    */
    public function setUserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory(?array $value ): void {
        $this->userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory = $value;
    }

    /**
     * Sets the userExperienceAnalyticsBatteryHealthModelPerformance property value. User Experience Analytics Battery Health Model Performance
     *  @param array<UserExperienceAnalyticsBatteryHealthModelPerformance>|null $value Value to set for the userExperienceAnalyticsBatteryHealthModelPerformance property.
    */
    public function setUserExperienceAnalyticsBatteryHealthModelPerformance(?array $value ): void {
        $this->userExperienceAnalyticsBatteryHealthModelPerformance = $value;
    }

    /**
     * Sets the userExperienceAnalyticsBatteryHealthOsPerformance property value. User Experience Analytics Battery Health Os Performance
     *  @param array<UserExperienceAnalyticsBatteryHealthOsPerformance>|null $value Value to set for the userExperienceAnalyticsBatteryHealthOsPerformance property.
    */
    public function setUserExperienceAnalyticsBatteryHealthOsPerformance(?array $value ): void {
        $this->userExperienceAnalyticsBatteryHealthOsPerformance = $value;
    }

    /**
     * Sets the userExperienceAnalyticsBatteryHealthRuntimeDetails property value. User Experience Analytics Battery Health Runtime Details
     *  @param UserExperienceAnalyticsBatteryHealthRuntimeDetails|null $value Value to set for the userExperienceAnalyticsBatteryHealthRuntimeDetails property.
    */
    public function setUserExperienceAnalyticsBatteryHealthRuntimeDetails(?UserExperienceAnalyticsBatteryHealthRuntimeDetails $value ): void {
        $this->userExperienceAnalyticsBatteryHealthRuntimeDetails = $value;
    }

    /**
     * Sets the userExperienceAnalyticsCategories property value. User experience analytics categories
     *  @param array<UserExperienceAnalyticsCategory>|null $value Value to set for the userExperienceAnalyticsCategories property.
    */
    public function setUserExperienceAnalyticsCategories(?array $value ): void {
        $this->userExperienceAnalyticsCategories = $value;
    }

    /**
     * Sets the userExperienceAnalyticsDeviceMetricHistory property value. User experience analytics device metric history
     *  @param array<UserExperienceAnalyticsMetricHistory>|null $value Value to set for the userExperienceAnalyticsDeviceMetricHistory property.
    */
    public function setUserExperienceAnalyticsDeviceMetricHistory(?array $value ): void {
        $this->userExperienceAnalyticsDeviceMetricHistory = $value;
    }

    /**
     * Sets the userExperienceAnalyticsDevicePerformance property value. User experience analytics device performance
     *  @param array<UserExperienceAnalyticsDevicePerformance>|null $value Value to set for the userExperienceAnalyticsDevicePerformance property.
    */
    public function setUserExperienceAnalyticsDevicePerformance(?array $value ): void {
        $this->userExperienceAnalyticsDevicePerformance = $value;
    }

    /**
     * Sets the userExperienceAnalyticsDeviceScores property value. User experience analytics device scores
     *  @param array<UserExperienceAnalyticsDeviceScores>|null $value Value to set for the userExperienceAnalyticsDeviceScores property.
    */
    public function setUserExperienceAnalyticsDeviceScores(?array $value ): void {
        $this->userExperienceAnalyticsDeviceScores = $value;
    }

    /**
     * Sets the userExperienceAnalyticsDeviceStartupHistory property value. User experience analytics device Startup History
     *  @param array<UserExperienceAnalyticsDeviceStartupHistory>|null $value Value to set for the userExperienceAnalyticsDeviceStartupHistory property.
    */
    public function setUserExperienceAnalyticsDeviceStartupHistory(?array $value ): void {
        $this->userExperienceAnalyticsDeviceStartupHistory = $value;
    }

    /**
     * Sets the userExperienceAnalyticsDeviceStartupProcesses property value. User experience analytics device Startup Processes
     *  @param array<UserExperienceAnalyticsDeviceStartupProcess>|null $value Value to set for the userExperienceAnalyticsDeviceStartupProcesses property.
    */
    public function setUserExperienceAnalyticsDeviceStartupProcesses(?array $value ): void {
        $this->userExperienceAnalyticsDeviceStartupProcesses = $value;
    }

    /**
     * Sets the userExperienceAnalyticsDeviceStartupProcessPerformance property value. User experience analytics device Startup Process Performance
     *  @param array<UserExperienceAnalyticsDeviceStartupProcessPerformance>|null $value Value to set for the userExperienceAnalyticsDeviceStartupProcessPerformance property.
    */
    public function setUserExperienceAnalyticsDeviceStartupProcessPerformance(?array $value ): void {
        $this->userExperienceAnalyticsDeviceStartupProcessPerformance = $value;
    }

    /**
     * Sets the userExperienceAnalyticsDevicesWithoutCloudIdentity property value. User experience analytics devices without cloud identity.
     *  @param array<UserExperienceAnalyticsDeviceWithoutCloudIdentity>|null $value Value to set for the userExperienceAnalyticsDevicesWithoutCloudIdentity property.
    */
    public function setUserExperienceAnalyticsDevicesWithoutCloudIdentity(?array $value ): void {
        $this->userExperienceAnalyticsDevicesWithoutCloudIdentity = $value;
    }

    /**
     * Sets the userExperienceAnalyticsImpactingProcess property value. User experience analytics impacting process
     *  @param array<UserExperienceAnalyticsImpactingProcess>|null $value Value to set for the userExperienceAnalyticsImpactingProcess property.
    */
    public function setUserExperienceAnalyticsImpactingProcess(?array $value ): void {
        $this->userExperienceAnalyticsImpactingProcess = $value;
    }

    /**
     * Sets the userExperienceAnalyticsMetricHistory property value. User experience analytics metric history
     *  @param array<UserExperienceAnalyticsMetricHistory>|null $value Value to set for the userExperienceAnalyticsMetricHistory property.
    */
    public function setUserExperienceAnalyticsMetricHistory(?array $value ): void {
        $this->userExperienceAnalyticsMetricHistory = $value;
    }

    /**
     * Sets the userExperienceAnalyticsModelScores property value. User experience analytics model scores
     *  @param array<UserExperienceAnalyticsModelScores>|null $value Value to set for the userExperienceAnalyticsModelScores property.
    */
    public function setUserExperienceAnalyticsModelScores(?array $value ): void {
        $this->userExperienceAnalyticsModelScores = $value;
    }

    /**
     * Sets the userExperienceAnalyticsNotAutopilotReadyDevice property value. User experience analytics devices not Windows Autopilot ready.
     *  @param array<UserExperienceAnalyticsNotAutopilotReadyDevice>|null $value Value to set for the userExperienceAnalyticsNotAutopilotReadyDevice property.
    */
    public function setUserExperienceAnalyticsNotAutopilotReadyDevice(?array $value ): void {
        $this->userExperienceAnalyticsNotAutopilotReadyDevice = $value;
    }

    /**
     * Sets the userExperienceAnalyticsOverview property value. User experience analytics overview
     *  @param UserExperienceAnalyticsOverview|null $value Value to set for the userExperienceAnalyticsOverview property.
    */
    public function setUserExperienceAnalyticsOverview(?UserExperienceAnalyticsOverview $value ): void {
        $this->userExperienceAnalyticsOverview = $value;
    }

    /**
     * Sets the userExperienceAnalyticsRegressionSummary property value. User experience analytics regression summary
     *  @param UserExperienceAnalyticsRegressionSummary|null $value Value to set for the userExperienceAnalyticsRegressionSummary property.
    */
    public function setUserExperienceAnalyticsRegressionSummary(?UserExperienceAnalyticsRegressionSummary $value ): void {
        $this->userExperienceAnalyticsRegressionSummary = $value;
    }

    /**
     * Sets the userExperienceAnalyticsRemoteConnection property value. User experience analytics remote connection
     *  @param array<UserExperienceAnalyticsRemoteConnection>|null $value Value to set for the userExperienceAnalyticsRemoteConnection property.
    */
    public function setUserExperienceAnalyticsRemoteConnection(?array $value ): void {
        $this->userExperienceAnalyticsRemoteConnection = $value;
    }

    /**
     * Sets the userExperienceAnalyticsResourcePerformance property value. User experience analytics resource performance
     *  @param array<UserExperienceAnalyticsResourcePerformance>|null $value Value to set for the userExperienceAnalyticsResourcePerformance property.
    */
    public function setUserExperienceAnalyticsResourcePerformance(?array $value ): void {
        $this->userExperienceAnalyticsResourcePerformance = $value;
    }

    /**
     * Sets the userExperienceAnalyticsScoreHistory property value. User experience analytics device Startup Score History
     *  @param array<UserExperienceAnalyticsScoreHistory>|null $value Value to set for the userExperienceAnalyticsScoreHistory property.
    */
    public function setUserExperienceAnalyticsScoreHistory(?array $value ): void {
        $this->userExperienceAnalyticsScoreHistory = $value;
    }

    /**
     * Sets the userExperienceAnalyticsSettings property value. User experience analytics device settings
     *  @param UserExperienceAnalyticsSettings|null $value Value to set for the userExperienceAnalyticsSettings property.
    */
    public function setUserExperienceAnalyticsSettings(?UserExperienceAnalyticsSettings $value ): void {
        $this->userExperienceAnalyticsSettings = $value;
    }

    /**
     * Sets the userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric property value. User experience analytics work from anywhere hardware readiness metrics.
     *  @param UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric|null $value Value to set for the userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric property.
    */
    public function setUserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric(?UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric $value ): void {
        $this->userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric = $value;
    }

    /**
     * Sets the userExperienceAnalyticsWorkFromAnywhereMetrics property value. User experience analytics work from anywhere metrics.
     *  @param array<UserExperienceAnalyticsWorkFromAnywhereMetric>|null $value Value to set for the userExperienceAnalyticsWorkFromAnywhereMetrics property.
    */
    public function setUserExperienceAnalyticsWorkFromAnywhereMetrics(?array $value ): void {
        $this->userExperienceAnalyticsWorkFromAnywhereMetrics = $value;
    }

    /**
     * Sets the userExperienceAnalyticsWorkFromAnywhereModelPerformance property value. The user experience analytics work from anywhere model performance
     *  @param array<UserExperienceAnalyticsWorkFromAnywhereModelPerformance>|null $value Value to set for the userExperienceAnalyticsWorkFromAnywhereModelPerformance property.
    */
    public function setUserExperienceAnalyticsWorkFromAnywhereModelPerformance(?array $value ): void {
        $this->userExperienceAnalyticsWorkFromAnywhereModelPerformance = $value;
    }

    /**
     * Sets the userPfxCertificates property value. Collection of PFX certificates associated with a user.
     *  @param array<UserPFXCertificate>|null $value Value to set for the userPfxCertificates property.
    */
    public function setUserPfxCertificates(?array $value ): void {
        $this->userPfxCertificates = $value;
    }

    /**
     * Sets the virtualEndpoint property value. The virtualEndpoint property
     *  @param VirtualEndpoint|null $value Value to set for the virtualEndpoint property.
    */
    public function setVirtualEndpoint(?VirtualEndpoint $value ): void {
        $this->virtualEndpoint = $value;
    }

    /**
     * Sets the windowsAutopilotDeploymentProfiles property value. Windows auto pilot deployment profiles
     *  @param array<WindowsAutopilotDeploymentProfile>|null $value Value to set for the windowsAutopilotDeploymentProfiles property.
    */
    public function setWindowsAutopilotDeploymentProfiles(?array $value ): void {
        $this->windowsAutopilotDeploymentProfiles = $value;
    }

    /**
     * Sets the windowsAutopilotDeviceIdentities property value. The Windows autopilot device identities contained collection.
     *  @param array<WindowsAutopilotDeviceIdentity>|null $value Value to set for the windowsAutopilotDeviceIdentities property.
    */
    public function setWindowsAutopilotDeviceIdentities(?array $value ): void {
        $this->windowsAutopilotDeviceIdentities = $value;
    }

    /**
     * Sets the windowsAutopilotSettings property value. The Windows autopilot account settings.
     *  @param WindowsAutopilotSettings|null $value Value to set for the windowsAutopilotSettings property.
    */
    public function setWindowsAutopilotSettings(?WindowsAutopilotSettings $value ): void {
        $this->windowsAutopilotSettings = $value;
    }

    /**
     * Sets the windowsDriverUpdateProfiles property value. A collection of windows driver update profiles
     *  @param array<WindowsDriverUpdateProfile>|null $value Value to set for the windowsDriverUpdateProfiles property.
    */
    public function setWindowsDriverUpdateProfiles(?array $value ): void {
        $this->windowsDriverUpdateProfiles = $value;
    }

    /**
     * Sets the windowsFeatureUpdateProfiles property value. A collection of windows feature update profiles
     *  @param array<WindowsFeatureUpdateProfile>|null $value Value to set for the windowsFeatureUpdateProfiles property.
    */
    public function setWindowsFeatureUpdateProfiles(?array $value ): void {
        $this->windowsFeatureUpdateProfiles = $value;
    }

    /**
     * Sets the windowsInformationProtectionAppLearningSummaries property value. The windows information protection app learning summaries.
     *  @param array<WindowsInformationProtectionAppLearningSummary>|null $value Value to set for the windowsInformationProtectionAppLearningSummaries property.
    */
    public function setWindowsInformationProtectionAppLearningSummaries(?array $value ): void {
        $this->windowsInformationProtectionAppLearningSummaries = $value;
    }

    /**
     * Sets the windowsInformationProtectionNetworkLearningSummaries property value. The windows information protection network learning summaries.
     *  @param array<WindowsInformationProtectionNetworkLearningSummary>|null $value Value to set for the windowsInformationProtectionNetworkLearningSummaries property.
    */
    public function setWindowsInformationProtectionNetworkLearningSummaries(?array $value ): void {
        $this->windowsInformationProtectionNetworkLearningSummaries = $value;
    }

    /**
     * Sets the windowsMalwareInformation property value. The list of affected malware in the tenant.
     *  @param array<WindowsMalwareInformation>|null $value Value to set for the windowsMalwareInformation property.
    */
    public function setWindowsMalwareInformation(?array $value ): void {
        $this->windowsMalwareInformation = $value;
    }

    /**
     * Sets the windowsMalwareOverview property value. Malware overview for windows devices.
     *  @param WindowsMalwareOverview|null $value Value to set for the windowsMalwareOverview property.
    */
    public function setWindowsMalwareOverview(?WindowsMalwareOverview $value ): void {
        $this->windowsMalwareOverview = $value;
    }

    /**
     * Sets the windowsQualityUpdateProfiles property value. A collection of windows quality update profiles
     *  @param array<WindowsQualityUpdateProfile>|null $value Value to set for the windowsQualityUpdateProfiles property.
    */
    public function setWindowsQualityUpdateProfiles(?array $value ): void {
        $this->windowsQualityUpdateProfiles = $value;
    }

    /**
     * Sets the windowsUpdateCatalogItems property value. A collection of windows update catalog items (fetaure updates item , quality updates item)
     *  @param array<WindowsUpdateCatalogItem>|null $value Value to set for the windowsUpdateCatalogItems property.
    */
    public function setWindowsUpdateCatalogItems(?array $value ): void {
        $this->windowsUpdateCatalogItems = $value;
    }

}

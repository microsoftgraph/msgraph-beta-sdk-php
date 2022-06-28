<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagement extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var DateTime|null $accountMoveCompletionDateTime The date & time when tenant data moved between scaleunits.
    */
    private ?DateTime $accountMoveCompletionDateTime = null;
    
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var AdminConsent|null $adminConsent Admin consent information.
    */
    private ?AdminConsent $adminConsent = null;
    
    /**
     * @var AdvancedThreatProtectionOnboardingStateSummary|null $advancedThreatProtectionOnboardingStateSummary The summary state of ATP onboarding state for this account.
    */
    private ?AdvancedThreatProtectionOnboardingStateSummary $advancedThreatProtectionOnboardingStateSummary = null;
    
    /**
     * @var array<AndroidDeviceOwnerEnrollmentProfile>|null $androidDeviceOwnerEnrollmentProfiles Android device owner enrollment profile entities.
    */
    private ?array $androidDeviceOwnerEnrollmentProfiles = null;
    
    /**
     * @var array<AndroidForWorkAppConfigurationSchema>|null $androidForWorkAppConfigurationSchemas Android for Work app configuration schema entities.
    */
    private ?array $androidForWorkAppConfigurationSchemas = null;
    
    /**
     * @var array<AndroidForWorkEnrollmentProfile>|null $androidForWorkEnrollmentProfiles Android for Work enrollment profile entities.
    */
    private ?array $androidForWorkEnrollmentProfiles = null;
    
    /**
     * @var AndroidForWorkSettings|null $androidForWorkSettings The singleton Android for Work settings entity.
    */
    private ?AndroidForWorkSettings $androidForWorkSettings = null;
    
    /**
     * @var AndroidManagedStoreAccountEnterpriseSettings|null $androidManagedStoreAccountEnterpriseSettings The singleton Android managed store account enterprise settings entity.
    */
    private ?AndroidManagedStoreAccountEnterpriseSettings $androidManagedStoreAccountEnterpriseSettings = null;
    
    /**
     * @var array<AndroidManagedStoreAppConfigurationSchema>|null $androidManagedStoreAppConfigurationSchemas Android Enterprise app configuration schema entities.
    */
    private ?array $androidManagedStoreAppConfigurationSchemas = null;
    
    /**
     * @var ApplePushNotificationCertificate|null $applePushNotificationCertificate Apple push notification certificate.
    */
    private ?ApplePushNotificationCertificate $applePushNotificationCertificate = null;
    
    /**
     * @var array<AppleUserInitiatedEnrollmentProfile>|null $appleUserInitiatedEnrollmentProfiles Apple user initiated enrollment profiles
    */
    private ?array $appleUserInitiatedEnrollmentProfiles = null;
    
    /**
     * @var array<DeviceAndAppManagementAssignmentFilter>|null $assignmentFilters The list of assignment filters
    */
    private ?array $assignmentFilters = null;
    
    /**
     * @var array<AuditEvent>|null $auditEvents The Audit Events
    */
    private ?array $auditEvents = null;
    
    /**
     * @var array<DeviceManagementAutopilotEvent>|null $autopilotEvents The list of autopilot events for the tenant.
    */
    private ?array $autopilotEvents = null;
    
    /**
     * @var array<CartToClassAssociation>|null $cartToClassAssociations The Cart To Class Associations.
    */
    private ?array $cartToClassAssociations = null;
    
    /**
     * @var array<DeviceManagementSettingCategory>|null $categories The available categories
    */
    private ?array $categories = null;
    
    /**
     * @var array<CertificateConnectorDetails>|null $certificateConnectorDetails Collection of certificate connector details, each associated with a corresponding Intune Certificate Connector.
    */
    private ?array $certificateConnectorDetails = null;
    
    /**
     * @var array<ChromeOSOnboardingSettings>|null $chromeOSOnboardingSettings Collection of ChromeOSOnboardingSettings settings associated with account.
    */
    private ?array $chromeOSOnboardingSettings = null;
    
    /**
     * @var array<CloudPCConnectivityIssue>|null $cloudPCConnectivityIssues The list of CloudPC Connectivity Issue.
    */
    private ?array $cloudPCConnectivityIssues = null;
    
    /**
     * @var array<ManagedDevice>|null $comanagedDevices The list of co-managed devices report
    */
    private ?array $comanagedDevices = null;
    
    /**
     * @var array<ComanagementEligibleDevice>|null $comanagementEligibleDevices The list of co-management eligible devices report
    */
    private ?array $comanagementEligibleDevices = null;
    
    /**
     * @var array<DeviceManagementConfigurationCategory>|null $complianceCategories List of all compliance categories
    */
    private ?array $complianceCategories = null;
    
    /**
     * @var array<ComplianceManagementPartner>|null $complianceManagementPartners The list of Compliance Management Partners configured by the tenant.
    */
    private ?array $complianceManagementPartners = null;
    
    /**
     * @var array<DeviceManagementCompliancePolicy>|null $compliancePolicies List of all compliance policies
    */
    private ?array $compliancePolicies = null;
    
    /**
     * @var array<DeviceManagementConfigurationSettingDefinition>|null $complianceSettings List of all ComplianceSettings
    */
    private ?array $complianceSettings = null;
    
    /**
     * @var OnPremisesConditionalAccessSettings|null $conditionalAccessSettings The Exchange on premises conditional access settings. On premises conditional access will require devices to be both enrolled and compliant for mail access
    */
    private ?OnPremisesConditionalAccessSettings $conditionalAccessSettings = null;
    
    /**
     * @var array<ConfigManagerCollection>|null $configManagerCollections A list of ConfigManagerCollection
    */
    private ?array $configManagerCollections = null;
    
    /**
     * @var array<DeviceManagementConfigurationCategory>|null $configurationCategories List of all Configuration Categories
    */
    private ?array $configurationCategories = null;
    
    /**
     * @var array<DeviceManagementConfigurationPolicy>|null $configurationPolicies List of all Configuration policies
    */
    private ?array $configurationPolicies = null;
    
    /**
     * @var array<DeviceManagementConfigurationPolicyTemplate>|null $configurationPolicyTemplates List of all templates
    */
    private ?array $configurationPolicyTemplates = null;
    
    /**
     * @var array<DeviceManagementConfigurationSettingDefinition>|null $configurationSettings List of all ConfigurationSettings
    */
    private ?array $configurationSettings = null;
    
    /**
     * @var array<DataSharingConsent>|null $dataSharingConsents Data sharing consents.
    */
    private ?array $dataSharingConsents = null;
    
    /**
     * @var array<DepOnboardingSetting>|null $depOnboardingSettings This collections of multiple DEP tokens per-tenant.
    */
    private ?array $depOnboardingSettings = null;
    
    /**
     * @var array<DeviceManagementDerivedCredentialSettings>|null $derivedCredentials Collection of Derived credential settings associated with account.
    */
    private ?array $derivedCredentials = null;
    
    /**
     * @var array<DetectedApp>|null $detectedApps The list of detected apps associated with a device.
    */
    private ?array $detectedApps = null;
    
    /**
     * @var array<DeviceCategory>|null $deviceCategories The list of device categories with the tenant.
    */
    private ?array $deviceCategories = null;
    
    /**
     * @var array<DeviceCompliancePolicy>|null $deviceCompliancePolicies The device compliance policies.
    */
    private ?array $deviceCompliancePolicies = null;
    
    /**
     * @var DeviceCompliancePolicyDeviceStateSummary|null $deviceCompliancePolicyDeviceStateSummary The device compliance state summary for this account.
    */
    private ?DeviceCompliancePolicyDeviceStateSummary $deviceCompliancePolicyDeviceStateSummary = null;
    
    /**
     * @var array<DeviceCompliancePolicySettingStateSummary>|null $deviceCompliancePolicySettingStateSummaries The summary states of compliance policy settings for this account.
    */
    private ?array $deviceCompliancePolicySettingStateSummaries = null;
    
    /**
     * @var DateTime|null $deviceComplianceReportSummarizationDateTime The last requested time of device compliance reporting for this account. This property is read-only.
    */
    private ?DateTime $deviceComplianceReportSummarizationDateTime = null;
    
    /**
     * @var array<DeviceComplianceScript>|null $deviceComplianceScripts The list of device compliance scripts associated with the tenant.
    */
    private ?array $deviceComplianceScripts = null;
    
    /**
     * @var array<DeviceConfigurationConflictSummary>|null $deviceConfigurationConflictSummary Summary of policies in conflict state for this account.
    */
    private ?array $deviceConfigurationConflictSummary = null;
    
    /**
     * @var DeviceConfigurationDeviceStateSummary|null $deviceConfigurationDeviceStateSummaries The device configuration device state summary for this account.
    */
    private ?DeviceConfigurationDeviceStateSummary $deviceConfigurationDeviceStateSummaries = null;
    
    /**
     * @var array<RestrictedAppsViolation>|null $deviceConfigurationRestrictedAppsViolations Restricted apps violations for this account.
    */
    private ?array $deviceConfigurationRestrictedAppsViolations = null;
    
    /**
     * @var array<DeviceConfiguration>|null $deviceConfigurations The device configurations.
    */
    private ?array $deviceConfigurations = null;
    
    /**
     * @var array<ManagedAllDeviceCertificateState>|null $deviceConfigurationsAllManagedDeviceCertificateStates Summary of all certificates for all devices.
    */
    private ?array $deviceConfigurationsAllManagedDeviceCertificateStates = null;
    
    /**
     * @var DeviceConfigurationUserStateSummary|null $deviceConfigurationUserStateSummaries The device configuration user state summary for this account.
    */
    private ?DeviceConfigurationUserStateSummary $deviceConfigurationUserStateSummaries = null;
    
    /**
     * @var array<DeviceCustomAttributeShellScript>|null $deviceCustomAttributeShellScripts The list of device custom attribute shell scripts associated with the tenant.
    */
    private ?array $deviceCustomAttributeShellScripts = null;
    
    /**
     * @var array<DeviceEnrollmentConfiguration>|null $deviceEnrollmentConfigurations The list of device enrollment configurations
    */
    private ?array $deviceEnrollmentConfigurations = null;
    
    /**
     * @var array<DeviceHealthScript>|null $deviceHealthScripts The list of device health scripts associated with the tenant.
    */
    private ?array $deviceHealthScripts = null;
    
    /**
     * @var array<DeviceManagementPartner>|null $deviceManagementPartners The list of Device Management Partners configured by the tenant.
    */
    private ?array $deviceManagementPartners = null;
    
    /**
     * @var array<DeviceManagementScript>|null $deviceManagementScripts The list of device management scripts associated with the tenant.
    */
    private ?array $deviceManagementScripts = null;
    
    /**
     * @var DeviceProtectionOverview|null $deviceProtectionOverview Device protection overview.
    */
    private ?DeviceProtectionOverview $deviceProtectionOverview = null;
    
    /**
     * @var array<DeviceShellScript>|null $deviceShellScripts The list of device shell scripts associated with the tenant.
    */
    private ?array $deviceShellScripts = null;
    
    /**
     * @var array<DeviceManagementDomainJoinConnector>|null $domainJoinConnectors A list of connector objects.
    */
    private ?array $domainJoinConnectors = null;
    
    /**
     * @var array<EmbeddedSIMActivationCodePool>|null $embeddedSIMActivationCodePools The embedded SIM activation code pools created by this account.
    */
    private ?array $embeddedSIMActivationCodePools = null;
    
    /**
     * @var array<DeviceManagementExchangeConnector>|null $exchangeConnectors The list of Exchange Connectors configured by the tenant.
    */
    private ?array $exchangeConnectors = null;
    
    /**
     * @var array<DeviceManagementExchangeOnPremisesPolicy>|null $exchangeOnPremisesPolicies The list of Exchange On Premisis policies configured by the tenant.
    */
    private ?array $exchangeOnPremisesPolicies = null;
    
    /**
     * @var DeviceManagementExchangeOnPremisesPolicy|null $exchangeOnPremisesPolicy The policy which controls mobile device access to Exchange On Premises
    */
    private ?DeviceManagementExchangeOnPremisesPolicy $exchangeOnPremisesPolicy = null;
    
    /**
     * @var array<GroupPolicyCategory>|null $groupPolicyCategories The available group policy categories for this account.
    */
    private ?array $groupPolicyCategories = null;
    
    /**
     * @var array<GroupPolicyConfiguration>|null $groupPolicyConfigurations The group policy configurations created by this account.
    */
    private ?array $groupPolicyConfigurations = null;
    
    /**
     * @var array<GroupPolicyDefinitionFile>|null $groupPolicyDefinitionFiles The available group policy definition files for this account.
    */
    private ?array $groupPolicyDefinitionFiles = null;
    
    /**
     * @var array<GroupPolicyDefinition>|null $groupPolicyDefinitions The available group policy definitions for this account.
    */
    private ?array $groupPolicyDefinitions = null;
    
    /**
     * @var array<GroupPolicyMigrationReport>|null $groupPolicyMigrationReports A list of Group Policy migration reports.
    */
    private ?array $groupPolicyMigrationReports = null;
    
    /**
     * @var array<GroupPolicyObjectFile>|null $groupPolicyObjectFiles A list of Group Policy Object files uploaded.
    */
    private ?array $groupPolicyObjectFiles = null;
    
    /**
     * @var array<GroupPolicyUploadedDefinitionFile>|null $groupPolicyUploadedDefinitionFiles The available group policy uploaded definition files for this account.
    */
    private ?array $groupPolicyUploadedDefinitionFiles = null;
    
    /**
     * @var array<ImportedDeviceIdentity>|null $importedDeviceIdentities The imported device identities.
    */
    private ?array $importedDeviceIdentities = null;
    
    /**
     * @var array<ImportedWindowsAutopilotDeviceIdentity>|null $importedWindowsAutopilotDeviceIdentities Collection of imported Windows autopilot devices.
    */
    private ?array $importedWindowsAutopilotDeviceIdentities = null;
    
    /**
     * @var array<DeviceManagementIntent>|null $intents The device management intents
    */
    private ?array $intents = null;
    
    /**
     * @var string|null $intuneAccountId Intune Account ID for given tenant
    */
    private ?string $intuneAccountId = null;
    
    /**
     * @var IntuneBrand|null $intuneBrand intuneBrand contains data which is used in customizing the appearance of the Company Portal applications as well as the end user web portal.
    */
    private ?IntuneBrand $intuneBrand = null;
    
    /**
     * @var array<IntuneBrandingProfile>|null $intuneBrandingProfiles Intune branding profiles targeted to AAD groups
    */
    private ?array $intuneBrandingProfiles = null;
    
    /**
     * @var array<IosUpdateDeviceStatus>|null $iosUpdateStatuses The IOS software update installation statuses for this account.
    */
    private ?array $iosUpdateStatuses = null;
    
    /**
     * @var DateTime|null $lastReportAggregationDateTime The last modified time of reporting for this account. This property is read-only.
    */
    private ?DateTime $lastReportAggregationDateTime = null;
    
    /**
     * @var bool|null $legacyPcManangementEnabled The property to enable Non-MDM managed legacy PC management for this account. This property is read-only.
    */
    private ?bool $legacyPcManangementEnabled = null;
    
    /**
     * @var array<MacOSSoftwareUpdateAccountSummary>|null $macOSSoftwareUpdateAccountSummaries The MacOS software update account summaries for this account.
    */
    private ?array $macOSSoftwareUpdateAccountSummaries = null;
    
    /**
     * @var ManagedDeviceCleanupSettings|null $managedDeviceCleanupSettings Device cleanup rule
    */
    private ?ManagedDeviceCleanupSettings $managedDeviceCleanupSettings = null;
    
    /**
     * @var array<ManagedDeviceEncryptionState>|null $managedDeviceEncryptionStates Encryption report for devices in this account
    */
    private ?array $managedDeviceEncryptionStates = null;
    
    /**
     * @var ManagedDeviceOverview|null $managedDeviceOverview Device overview
    */
    private ?ManagedDeviceOverview $managedDeviceOverview = null;
    
    /**
     * @var array<ManagedDevice>|null $managedDevices The list of managed devices.
    */
    private ?array $managedDevices = null;
    
    /**
     * @var int|null $maximumDepTokens Maximum number of DEP tokens allowed per-tenant.
    */
    private ?int $maximumDepTokens = null;
    
    /**
     * @var array<MicrosoftTunnelConfiguration>|null $microsoftTunnelConfigurations Collection of MicrosoftTunnelConfiguration settings associated with account.
    */
    private ?array $microsoftTunnelConfigurations = null;
    
    /**
     * @var array<MicrosoftTunnelHealthThreshold>|null $microsoftTunnelHealthThresholds Collection of MicrosoftTunnelHealthThreshold settings associated with account.
    */
    private ?array $microsoftTunnelHealthThresholds = null;
    
    /**
     * @var array<MicrosoftTunnelServerLogCollectionResponse>|null $microsoftTunnelServerLogCollectionResponses Collection of MicrosoftTunnelServerLogCollectionResponse settings associated with account.
    */
    private ?array $microsoftTunnelServerLogCollectionResponses = null;
    
    /**
     * @var array<MicrosoftTunnelSite>|null $microsoftTunnelSites Collection of MicrosoftTunnelSite settings associated with account.
    */
    private ?array $microsoftTunnelSites = null;
    
    /**
     * @var array<MobileAppTroubleshootingEvent>|null $mobileAppTroubleshootingEvents The collection property of MobileAppTroubleshootingEvent.
    */
    private ?array $mobileAppTroubleshootingEvents = null;
    
    /**
     * @var array<MobileThreatDefenseConnector>|null $mobileThreatDefenseConnectors The list of Mobile threat Defense connectors configured by the tenant.
    */
    private ?array $mobileThreatDefenseConnectors = null;
    
    /**
     * @var array<NdesConnector>|null $ndesConnectors The collection of Ndes connectors for this account.
    */
    private ?array $ndesConnectors = null;
    
    /**
     * @var array<NotificationMessageTemplate>|null $notificationMessageTemplates The Notification Message Templates.
    */
    private ?array $notificationMessageTemplates = null;
    
    /**
     * @var array<OemWarrantyInformationOnboarding>|null $oemWarrantyInformationOnboarding List of OEM Warranty Statuses
    */
    private ?array $oemWarrantyInformationOnboarding = null;
    
    /**
     * @var array<RemoteActionAudit>|null $remoteActionAudits The list of device remote action audits with the tenant.
    */
    private ?array $remoteActionAudits = null;
    
    /**
     * @var array<RemoteAssistancePartner>|null $remoteAssistancePartners The remote assist partners.
    */
    private ?array $remoteAssistancePartners = null;
    
    /**
     * @var RemoteAssistanceSettings|null $remoteAssistanceSettings The remote assistance settings singleton
    */
    private ?RemoteAssistanceSettings $remoteAssistanceSettings = null;
    
    /**
     * @var DeviceManagementReports|null $reports Reports singleton
    */
    private ?DeviceManagementReports $reports = null;
    
    /**
     * @var array<DeviceManagementResourceAccessProfileBase>|null $resourceAccessProfiles Collection of resource access settings associated with account.
    */
    private ?array $resourceAccessProfiles = null;
    
    /**
     * @var array<ResourceOperation>|null $resourceOperations The Resource Operations.
    */
    private ?array $resourceOperations = null;
    
    /**
     * @var array<DeviceManagementReusablePolicySetting>|null $reusablePolicySettings List of all reusable settings that can be referred in a policy
    */
    private ?array $reusablePolicySettings = null;
    
    /**
     * @var array<DeviceManagementConfigurationSettingDefinition>|null $reusableSettings List of all reusable settings
    */
    private ?array $reusableSettings = null;
    
    /**
     * @var array<DeviceAndAppManagementRoleAssignment>|null $roleAssignments The Role Assignments.
    */
    private ?array $roleAssignments = null;
    
    /**
     * @var array<RoleDefinition>|null $roleDefinitions The Role Definitions.
    */
    private ?array $roleDefinitions = null;
    
    /**
     * @var array<RoleScopeTag>|null $roleScopeTags The Role Scope Tags.
    */
    private ?array $roleScopeTags = null;
    
    /**
     * @var array<DeviceManagementSettingDefinition>|null $settingDefinitions The device management intent setting definitions
    */
    private ?array $settingDefinitions = null;
    
    /**
     * @var DeviceManagementSettings|null $settings Account level settings.
    */
    private ?DeviceManagementSettings $settings = null;
    
    /**
     * @var SoftwareUpdateStatusSummary|null $softwareUpdateStatusSummary The software update status summary.
    */
    private ?SoftwareUpdateStatusSummary $softwareUpdateStatusSummary = null;
    
    /**
     * @var DeviceManagementSubscriptions|null $subscriptions Tenant's Subscription. Possible values are: none, intune, office365, intunePremium, intune_EDU, intune_SMB.
    */
    private ?DeviceManagementSubscriptions $subscriptions = null;
    
    /**
     * @var DeviceManagementSubscriptionState|null $subscriptionState Tenant mobile device management subscription state. Possible values are: pending, active, warning, disabled, deleted, blocked, lockedOut.
    */
    private ?DeviceManagementSubscriptionState $subscriptionState = null;
    
    /**
     * @var array<TelecomExpenseManagementPartner>|null $telecomExpenseManagementPartners The telecom expense management partners.
    */
    private ?array $telecomExpenseManagementPartners = null;
    
    /**
     * @var array<DeviceManagementTemplate>|null $templates The available templates
    */
    private ?array $templates = null;
    
    /**
     * @var array<DeviceManagementConfigurationSettingTemplate>|null $templateSettings List of all TemplateSettings
    */
    private ?array $templateSettings = null;
    
    /**
     * @var TenantAttachRBAC|null $tenantAttachRBAC TenantAttach RBAC Enablement
    */
    private ?TenantAttachRBAC $tenantAttachRBAC = null;
    
    /**
     * @var array<TermsAndConditions>|null $termsAndConditions The terms and conditions associated with device management of the company.
    */
    private ?array $termsAndConditions = null;
    
    /**
     * @var array<DeviceManagementTroubleshootingEvent>|null $troubleshootingEvents The list of troubleshooting events for the tenant.
    */
    private ?array $troubleshootingEvents = null;
    
    /**
     * @var bool|null $unlicensedAdminstratorsEnabled When enabled, users assigned as administrators via Role Assignment Memberships do not require an assigned Intune license. Prior to this, only Intune licensed users were granted permissions with an Intune role unless they were assigned a role via Azure Active Directory. You are limited to 350 unlicensed direct members for each AAD security group in a role assignment, but you can assign multiple AAD security groups to a role if you need to support more than 350 unlicensed administrators. Licensed administrators are unaffected, do not have to be direct members, nor does the 350 member limit apply. This property is read-only.
    */
    private ?bool $unlicensedAdminstratorsEnabled = null;
    
    /**
     * @var array<UserExperienceAnalyticsAppHealthApplicationPerformance>|null $userExperienceAnalyticsAppHealthApplicationPerformance User experience analytics appHealth Application Performance
    */
    private ?array $userExperienceAnalyticsAppHealthApplicationPerformance = null;
    
    /**
     * @var array<UserExperienceAnalyticsAppHealthAppPerformanceByAppVersion>|null $userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion User experience analytics appHealth Application Performance by App Version
    */
    private ?array $userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion = null;
    
    /**
     * @var array<UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails>|null $userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails User experience analytics appHealth Application Performance by App Version details
    */
    private ?array $userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails = null;
    
    /**
     * @var array<UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId>|null $userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId User experience analytics appHealth Application Performance by App Version Device Id
    */
    private ?array $userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId = null;
    
    /**
     * @var array<UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion>|null $userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion User experience analytics appHealth Application Performance by OS Version
    */
    private ?array $userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion = null;
    
    /**
     * @var array<UserExperienceAnalyticsAppHealthDeviceModelPerformance>|null $userExperienceAnalyticsAppHealthDeviceModelPerformance User experience analytics appHealth Model Performance
    */
    private ?array $userExperienceAnalyticsAppHealthDeviceModelPerformance = null;
    
    /**
     * @var array<UserExperienceAnalyticsAppHealthDevicePerformance>|null $userExperienceAnalyticsAppHealthDevicePerformance User experience analytics appHealth Device Performance
    */
    private ?array $userExperienceAnalyticsAppHealthDevicePerformance = null;
    
    /**
     * @var array<UserExperienceAnalyticsAppHealthDevicePerformanceDetails>|null $userExperienceAnalyticsAppHealthDevicePerformanceDetails User experience analytics device performance details
    */
    private ?array $userExperienceAnalyticsAppHealthDevicePerformanceDetails = null;
    
    /**
     * @var array<UserExperienceAnalyticsAppHealthOSVersionPerformance>|null $userExperienceAnalyticsAppHealthOSVersionPerformance User experience analytics appHealth OS version Performance
    */
    private ?array $userExperienceAnalyticsAppHealthOSVersionPerformance = null;
    
    /**
     * @var UserExperienceAnalyticsCategory|null $userExperienceAnalyticsAppHealthOverview User experience analytics appHealth overview
    */
    private ?UserExperienceAnalyticsCategory $userExperienceAnalyticsAppHealthOverview = null;
    
    /**
     * @var array<UserExperienceAnalyticsBaseline>|null $userExperienceAnalyticsBaselines User experience analytics baselines
    */
    private ?array $userExperienceAnalyticsBaselines = null;
    
    /**
     * @var array<UserExperienceAnalyticsBatteryHealthAppImpact>|null $userExperienceAnalyticsBatteryHealthAppImpact User Experience Analytics Battery Health App Impact
    */
    private ?array $userExperienceAnalyticsBatteryHealthAppImpact = null;
    
    /**
     * @var UserExperienceAnalyticsBatteryHealthCapacityDetails|null $userExperienceAnalyticsBatteryHealthCapacityDetails User Experience Analytics Battery Health Capacity Details
    */
    private ?UserExperienceAnalyticsBatteryHealthCapacityDetails $userExperienceAnalyticsBatteryHealthCapacityDetails = null;
    
    /**
     * @var array<UserExperienceAnalyticsBatteryHealthDeviceAppImpact>|null $userExperienceAnalyticsBatteryHealthDeviceAppImpact User Experience Analytics Battery Health Device App Impact
    */
    private ?array $userExperienceAnalyticsBatteryHealthDeviceAppImpact = null;
    
    /**
     * @var array<UserExperienceAnalyticsBatteryHealthDevicePerformance>|null $userExperienceAnalyticsBatteryHealthDevicePerformance User Experience Analytics Battery Health Device Performance
    */
    private ?array $userExperienceAnalyticsBatteryHealthDevicePerformance = null;
    
    /**
     * @var array<UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory>|null $userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory User Experience Analytics Battery Health Device Runtime History
    */
    private ?array $userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory = null;
    
    /**
     * @var array<UserExperienceAnalyticsBatteryHealthModelPerformance>|null $userExperienceAnalyticsBatteryHealthModelPerformance User Experience Analytics Battery Health Model Performance
    */
    private ?array $userExperienceAnalyticsBatteryHealthModelPerformance = null;
    
    /**
     * @var array<UserExperienceAnalyticsBatteryHealthOsPerformance>|null $userExperienceAnalyticsBatteryHealthOsPerformance User Experience Analytics Battery Health Os Performance
    */
    private ?array $userExperienceAnalyticsBatteryHealthOsPerformance = null;
    
    /**
     * @var UserExperienceAnalyticsBatteryHealthRuntimeDetails|null $userExperienceAnalyticsBatteryHealthRuntimeDetails User Experience Analytics Battery Health Runtime Details
    */
    private ?UserExperienceAnalyticsBatteryHealthRuntimeDetails $userExperienceAnalyticsBatteryHealthRuntimeDetails = null;
    
    /**
     * @var array<UserExperienceAnalyticsCategory>|null $userExperienceAnalyticsCategories User experience analytics categories
    */
    private ?array $userExperienceAnalyticsCategories = null;
    
    /**
     * @var array<UserExperienceAnalyticsMetricHistory>|null $userExperienceAnalyticsDeviceMetricHistory User experience analytics device metric history
    */
    private ?array $userExperienceAnalyticsDeviceMetricHistory = null;
    
    /**
     * @var array<UserExperienceAnalyticsDevicePerformance>|null $userExperienceAnalyticsDevicePerformance User experience analytics device performance
    */
    private ?array $userExperienceAnalyticsDevicePerformance = null;
    
    /**
     * @var UserExperienceAnalyticsDeviceScope|null $userExperienceAnalyticsDeviceScope The user experience analytics device scope entity endpoint to trigger on the service to either START or STOP computing metrics data based on a device scope configuration.
    */
    private ?UserExperienceAnalyticsDeviceScope $userExperienceAnalyticsDeviceScope = null;
    
    /**
     * @var array<UserExperienceAnalyticsDeviceScope>|null $userExperienceAnalyticsDeviceScopes The user experience analytics device scope entity contains device scope configuration use to apply filtering on the endpoint analytics reports.
    */
    private ?array $userExperienceAnalyticsDeviceScopes = null;
    
    /**
     * @var array<UserExperienceAnalyticsDeviceScores>|null $userExperienceAnalyticsDeviceScores User experience analytics device scores
    */
    private ?array $userExperienceAnalyticsDeviceScores = null;
    
    /**
     * @var array<UserExperienceAnalyticsDeviceStartupHistory>|null $userExperienceAnalyticsDeviceStartupHistory User experience analytics device Startup History
    */
    private ?array $userExperienceAnalyticsDeviceStartupHistory = null;
    
    /**
     * @var array<UserExperienceAnalyticsDeviceStartupProcess>|null $userExperienceAnalyticsDeviceStartupProcesses User experience analytics device Startup Processes
    */
    private ?array $userExperienceAnalyticsDeviceStartupProcesses = null;
    
    /**
     * @var array<UserExperienceAnalyticsDeviceStartupProcessPerformance>|null $userExperienceAnalyticsDeviceStartupProcessPerformance User experience analytics device Startup Process Performance
    */
    private ?array $userExperienceAnalyticsDeviceStartupProcessPerformance = null;
    
    /**
     * @var array<UserExperienceAnalyticsDeviceWithoutCloudIdentity>|null $userExperienceAnalyticsDevicesWithoutCloudIdentity User experience analytics devices without cloud identity.
    */
    private ?array $userExperienceAnalyticsDevicesWithoutCloudIdentity = null;
    
    /**
     * @var array<UserExperienceAnalyticsImpactingProcess>|null $userExperienceAnalyticsImpactingProcess User experience analytics impacting process
    */
    private ?array $userExperienceAnalyticsImpactingProcess = null;
    
    /**
     * @var array<UserExperienceAnalyticsMetricHistory>|null $userExperienceAnalyticsMetricHistory User experience analytics metric history
    */
    private ?array $userExperienceAnalyticsMetricHistory = null;
    
    /**
     * @var array<UserExperienceAnalyticsModelScores>|null $userExperienceAnalyticsModelScores User experience analytics model scores
    */
    private ?array $userExperienceAnalyticsModelScores = null;
    
    /**
     * @var array<UserExperienceAnalyticsNotAutopilotReadyDevice>|null $userExperienceAnalyticsNotAutopilotReadyDevice User experience analytics devices not Windows Autopilot ready.
    */
    private ?array $userExperienceAnalyticsNotAutopilotReadyDevice = null;
    
    /**
     * @var UserExperienceAnalyticsOverview|null $userExperienceAnalyticsOverview User experience analytics overview
    */
    private ?UserExperienceAnalyticsOverview $userExperienceAnalyticsOverview = null;
    
    /**
     * @var UserExperienceAnalyticsRegressionSummary|null $userExperienceAnalyticsRegressionSummary User experience analytics regression summary
    */
    private ?UserExperienceAnalyticsRegressionSummary $userExperienceAnalyticsRegressionSummary = null;
    
    /**
     * @var array<UserExperienceAnalyticsRemoteConnection>|null $userExperienceAnalyticsRemoteConnection User experience analytics remote connection
    */
    private ?array $userExperienceAnalyticsRemoteConnection = null;
    
    /**
     * @var array<UserExperienceAnalyticsResourcePerformance>|null $userExperienceAnalyticsResourcePerformance User experience analytics resource performance
    */
    private ?array $userExperienceAnalyticsResourcePerformance = null;
    
    /**
     * @var array<UserExperienceAnalyticsScoreHistory>|null $userExperienceAnalyticsScoreHistory User experience analytics device Startup Score History
    */
    private ?array $userExperienceAnalyticsScoreHistory = null;
    
    /**
     * @var UserExperienceAnalyticsSettings|null $userExperienceAnalyticsSettings User experience analytics device settings
    */
    private ?UserExperienceAnalyticsSettings $userExperienceAnalyticsSettings = null;
    
    /**
     * @var UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric|null $userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric User experience analytics work from anywhere hardware readiness metrics.
    */
    private ?UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric $userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric = null;
    
    /**
     * @var array<UserExperienceAnalyticsWorkFromAnywhereMetric>|null $userExperienceAnalyticsWorkFromAnywhereMetrics User experience analytics work from anywhere metrics.
    */
    private ?array $userExperienceAnalyticsWorkFromAnywhereMetrics = null;
    
    /**
     * @var array<UserExperienceAnalyticsWorkFromAnywhereModelPerformance>|null $userExperienceAnalyticsWorkFromAnywhereModelPerformance The user experience analytics work from anywhere model performance
    */
    private ?array $userExperienceAnalyticsWorkFromAnywhereModelPerformance = null;
    
    /**
     * @var array<UserPFXCertificate>|null $userPfxCertificates Collection of PFX certificates associated with a user.
    */
    private ?array $userPfxCertificates = null;
    
    /**
     * @var VirtualEndpoint|null $virtualEndpoint The virtualEndpoint property
    */
    private ?VirtualEndpoint $virtualEndpoint = null;
    
    /**
     * @var array<WindowsAutopilotDeploymentProfile>|null $windowsAutopilotDeploymentProfiles Windows auto pilot deployment profiles
    */
    private ?array $windowsAutopilotDeploymentProfiles = null;
    
    /**
     * @var array<WindowsAutopilotDeviceIdentity>|null $windowsAutopilotDeviceIdentities The Windows autopilot device identities contained collection.
    */
    private ?array $windowsAutopilotDeviceIdentities = null;
    
    /**
     * @var WindowsAutopilotSettings|null $windowsAutopilotSettings The Windows autopilot account settings.
    */
    private ?WindowsAutopilotSettings $windowsAutopilotSettings = null;
    
    /**
     * @var array<WindowsDriverUpdateProfile>|null $windowsDriverUpdateProfiles A collection of windows driver update profiles
    */
    private ?array $windowsDriverUpdateProfiles = null;
    
    /**
     * @var array<WindowsFeatureUpdateProfile>|null $windowsFeatureUpdateProfiles A collection of windows feature update profiles
    */
    private ?array $windowsFeatureUpdateProfiles = null;
    
    /**
     * @var array<WindowsInformationProtectionAppLearningSummary>|null $windowsInformationProtectionAppLearningSummaries The windows information protection app learning summaries.
    */
    private ?array $windowsInformationProtectionAppLearningSummaries = null;
    
    /**
     * @var array<WindowsInformationProtectionNetworkLearningSummary>|null $windowsInformationProtectionNetworkLearningSummaries The windows information protection network learning summaries.
    */
    private ?array $windowsInformationProtectionNetworkLearningSummaries = null;
    
    /**
     * @var array<WindowsMalwareInformation>|null $windowsMalwareInformation The list of affected malware in the tenant.
    */
    private ?array $windowsMalwareInformation = null;
    
    /**
     * @var WindowsMalwareOverview|null $windowsMalwareOverview Malware overview for windows devices.
    */
    private ?WindowsMalwareOverview $windowsMalwareOverview = null;
    
    /**
     * @var array<WindowsQualityUpdateProfile>|null $windowsQualityUpdateProfiles A collection of windows quality update profiles
    */
    private ?array $windowsQualityUpdateProfiles = null;
    
    /**
     * @var array<WindowsUpdateCatalogItem>|null $windowsUpdateCatalogItems A collection of windows update catalog items (fetaure updates item , quality updates item)
    */
    private ?array $windowsUpdateCatalogItems = null;
    
    /**
     * @var array<ZebraFotaArtifact>|null $zebraFotaArtifacts The Collection of ZebraFotaArtifacts.
    */
    private ?array $zebraFotaArtifacts = null;
    
    /**
     * @var ZebraFotaConnector|null $zebraFotaConnector The singleton ZebraFotaConnector associated with account.
    */
    private ?ZebraFotaConnector $zebraFotaConnector = null;
    
    /**
     * @var array<ZebraFotaDeployment>|null $zebraFotaDeployments Collection of ZebraFotaDeployments associated with account.
    */
    private ?array $zebraFotaDeployments = null;
    
    /**
     * Instantiates a new DeviceManagement and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagement
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagement {
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accountMoveCompletionDateTime' => function (ParseNode $n) use ($o) { $o->setAccountMoveCompletionDateTime($n->getDateTimeValue()); },
            'adminConsent' => function (ParseNode $n) use ($o) { $o->setAdminConsent($n->getObjectValue(array(AdminConsent::class, 'createFromDiscriminatorValue'))); },
            'advancedThreatProtectionOnboardingStateSummary' => function (ParseNode $n) use ($o) { $o->setAdvancedThreatProtectionOnboardingStateSummary($n->getObjectValue(array(AdvancedThreatProtectionOnboardingStateSummary::class, 'createFromDiscriminatorValue'))); },
            'androidDeviceOwnerEnrollmentProfiles' => function (ParseNode $n) use ($o) { $o->setAndroidDeviceOwnerEnrollmentProfiles($n->getCollectionOfObjectValues(array(AndroidDeviceOwnerEnrollmentProfile::class, 'createFromDiscriminatorValue'))); },
            'androidForWorkAppConfigurationSchemas' => function (ParseNode $n) use ($o) { $o->setAndroidForWorkAppConfigurationSchemas($n->getCollectionOfObjectValues(array(AndroidForWorkAppConfigurationSchema::class, 'createFromDiscriminatorValue'))); },
            'androidForWorkEnrollmentProfiles' => function (ParseNode $n) use ($o) { $o->setAndroidForWorkEnrollmentProfiles($n->getCollectionOfObjectValues(array(AndroidForWorkEnrollmentProfile::class, 'createFromDiscriminatorValue'))); },
            'androidForWorkSettings' => function (ParseNode $n) use ($o) { $o->setAndroidForWorkSettings($n->getObjectValue(array(AndroidForWorkSettings::class, 'createFromDiscriminatorValue'))); },
            'androidManagedStoreAccountEnterpriseSettings' => function (ParseNode $n) use ($o) { $o->setAndroidManagedStoreAccountEnterpriseSettings($n->getObjectValue(array(AndroidManagedStoreAccountEnterpriseSettings::class, 'createFromDiscriminatorValue'))); },
            'androidManagedStoreAppConfigurationSchemas' => function (ParseNode $n) use ($o) { $o->setAndroidManagedStoreAppConfigurationSchemas($n->getCollectionOfObjectValues(array(AndroidManagedStoreAppConfigurationSchema::class, 'createFromDiscriminatorValue'))); },
            'applePushNotificationCertificate' => function (ParseNode $n) use ($o) { $o->setApplePushNotificationCertificate($n->getObjectValue(array(ApplePushNotificationCertificate::class, 'createFromDiscriminatorValue'))); },
            'appleUserInitiatedEnrollmentProfiles' => function (ParseNode $n) use ($o) { $o->setAppleUserInitiatedEnrollmentProfiles($n->getCollectionOfObjectValues(array(AppleUserInitiatedEnrollmentProfile::class, 'createFromDiscriminatorValue'))); },
            'assignmentFilters' => function (ParseNode $n) use ($o) { $o->setAssignmentFilters($n->getCollectionOfObjectValues(array(DeviceAndAppManagementAssignmentFilter::class, 'createFromDiscriminatorValue'))); },
            'auditEvents' => function (ParseNode $n) use ($o) { $o->setAuditEvents($n->getCollectionOfObjectValues(array(AuditEvent::class, 'createFromDiscriminatorValue'))); },
            'autopilotEvents' => function (ParseNode $n) use ($o) { $o->setAutopilotEvents($n->getCollectionOfObjectValues(array(DeviceManagementAutopilotEvent::class, 'createFromDiscriminatorValue'))); },
            'cartToClassAssociations' => function (ParseNode $n) use ($o) { $o->setCartToClassAssociations($n->getCollectionOfObjectValues(array(CartToClassAssociation::class, 'createFromDiscriminatorValue'))); },
            'categories' => function (ParseNode $n) use ($o) { $o->setCategories($n->getCollectionOfObjectValues(array(DeviceManagementSettingCategory::class, 'createFromDiscriminatorValue'))); },
            'certificateConnectorDetails' => function (ParseNode $n) use ($o) { $o->setCertificateConnectorDetails($n->getCollectionOfObjectValues(array(CertificateConnectorDetails::class, 'createFromDiscriminatorValue'))); },
            'chromeOSOnboardingSettings' => function (ParseNode $n) use ($o) { $o->setChromeOSOnboardingSettings($n->getCollectionOfObjectValues(array(ChromeOSOnboardingSettings::class, 'createFromDiscriminatorValue'))); },
            'cloudPCConnectivityIssues' => function (ParseNode $n) use ($o) { $o->setCloudPCConnectivityIssues($n->getCollectionOfObjectValues(array(CloudPCConnectivityIssue::class, 'createFromDiscriminatorValue'))); },
            'comanagedDevices' => function (ParseNode $n) use ($o) { $o->setComanagedDevices($n->getCollectionOfObjectValues(array(ManagedDevice::class, 'createFromDiscriminatorValue'))); },
            'comanagementEligibleDevices' => function (ParseNode $n) use ($o) { $o->setComanagementEligibleDevices($n->getCollectionOfObjectValues(array(ComanagementEligibleDevice::class, 'createFromDiscriminatorValue'))); },
            'complianceCategories' => function (ParseNode $n) use ($o) { $o->setComplianceCategories($n->getCollectionOfObjectValues(array(DeviceManagementConfigurationCategory::class, 'createFromDiscriminatorValue'))); },
            'complianceManagementPartners' => function (ParseNode $n) use ($o) { $o->setComplianceManagementPartners($n->getCollectionOfObjectValues(array(ComplianceManagementPartner::class, 'createFromDiscriminatorValue'))); },
            'compliancePolicies' => function (ParseNode $n) use ($o) { $o->setCompliancePolicies($n->getCollectionOfObjectValues(array(DeviceManagementCompliancePolicy::class, 'createFromDiscriminatorValue'))); },
            'complianceSettings' => function (ParseNode $n) use ($o) { $o->setComplianceSettings($n->getCollectionOfObjectValues(array(DeviceManagementConfigurationSettingDefinition::class, 'createFromDiscriminatorValue'))); },
            'conditionalAccessSettings' => function (ParseNode $n) use ($o) { $o->setConditionalAccessSettings($n->getObjectValue(array(OnPremisesConditionalAccessSettings::class, 'createFromDiscriminatorValue'))); },
            'configManagerCollections' => function (ParseNode $n) use ($o) { $o->setConfigManagerCollections($n->getCollectionOfObjectValues(array(ConfigManagerCollection::class, 'createFromDiscriminatorValue'))); },
            'configurationCategories' => function (ParseNode $n) use ($o) { $o->setConfigurationCategories($n->getCollectionOfObjectValues(array(DeviceManagementConfigurationCategory::class, 'createFromDiscriminatorValue'))); },
            'configurationPolicies' => function (ParseNode $n) use ($o) { $o->setConfigurationPolicies($n->getCollectionOfObjectValues(array(DeviceManagementConfigurationPolicy::class, 'createFromDiscriminatorValue'))); },
            'configurationPolicyTemplates' => function (ParseNode $n) use ($o) { $o->setConfigurationPolicyTemplates($n->getCollectionOfObjectValues(array(DeviceManagementConfigurationPolicyTemplate::class, 'createFromDiscriminatorValue'))); },
            'configurationSettings' => function (ParseNode $n) use ($o) { $o->setConfigurationSettings($n->getCollectionOfObjectValues(array(DeviceManagementConfigurationSettingDefinition::class, 'createFromDiscriminatorValue'))); },
            'dataSharingConsents' => function (ParseNode $n) use ($o) { $o->setDataSharingConsents($n->getCollectionOfObjectValues(array(DataSharingConsent::class, 'createFromDiscriminatorValue'))); },
            'depOnboardingSettings' => function (ParseNode $n) use ($o) { $o->setDepOnboardingSettings($n->getCollectionOfObjectValues(array(DepOnboardingSetting::class, 'createFromDiscriminatorValue'))); },
            'derivedCredentials' => function (ParseNode $n) use ($o) { $o->setDerivedCredentials($n->getCollectionOfObjectValues(array(DeviceManagementDerivedCredentialSettings::class, 'createFromDiscriminatorValue'))); },
            'detectedApps' => function (ParseNode $n) use ($o) { $o->setDetectedApps($n->getCollectionOfObjectValues(array(DetectedApp::class, 'createFromDiscriminatorValue'))); },
            'deviceCategories' => function (ParseNode $n) use ($o) { $o->setDeviceCategories($n->getCollectionOfObjectValues(array(DeviceCategory::class, 'createFromDiscriminatorValue'))); },
            'deviceCompliancePolicies' => function (ParseNode $n) use ($o) { $o->setDeviceCompliancePolicies($n->getCollectionOfObjectValues(array(DeviceCompliancePolicy::class, 'createFromDiscriminatorValue'))); },
            'deviceCompliancePolicyDeviceStateSummary' => function (ParseNode $n) use ($o) { $o->setDeviceCompliancePolicyDeviceStateSummary($n->getObjectValue(array(DeviceCompliancePolicyDeviceStateSummary::class, 'createFromDiscriminatorValue'))); },
            'deviceCompliancePolicySettingStateSummaries' => function (ParseNode $n) use ($o) { $o->setDeviceCompliancePolicySettingStateSummaries($n->getCollectionOfObjectValues(array(DeviceCompliancePolicySettingStateSummary::class, 'createFromDiscriminatorValue'))); },
            'deviceComplianceReportSummarizationDateTime' => function (ParseNode $n) use ($o) { $o->setDeviceComplianceReportSummarizationDateTime($n->getDateTimeValue()); },
            'deviceComplianceScripts' => function (ParseNode $n) use ($o) { $o->setDeviceComplianceScripts($n->getCollectionOfObjectValues(array(DeviceComplianceScript::class, 'createFromDiscriminatorValue'))); },
            'deviceConfigurationConflictSummary' => function (ParseNode $n) use ($o) { $o->setDeviceConfigurationConflictSummary($n->getCollectionOfObjectValues(array(DeviceConfigurationConflictSummary::class, 'createFromDiscriminatorValue'))); },
            'deviceConfigurationDeviceStateSummaries' => function (ParseNode $n) use ($o) { $o->setDeviceConfigurationDeviceStateSummaries($n->getObjectValue(array(DeviceConfigurationDeviceStateSummary::class, 'createFromDiscriminatorValue'))); },
            'deviceConfigurationRestrictedAppsViolations' => function (ParseNode $n) use ($o) { $o->setDeviceConfigurationRestrictedAppsViolations($n->getCollectionOfObjectValues(array(RestrictedAppsViolation::class, 'createFromDiscriminatorValue'))); },
            'deviceConfigurations' => function (ParseNode $n) use ($o) { $o->setDeviceConfigurations($n->getCollectionOfObjectValues(array(DeviceConfiguration::class, 'createFromDiscriminatorValue'))); },
            'deviceConfigurationsAllManagedDeviceCertificateStates' => function (ParseNode $n) use ($o) { $o->setDeviceConfigurationsAllManagedDeviceCertificateStates($n->getCollectionOfObjectValues(array(ManagedAllDeviceCertificateState::class, 'createFromDiscriminatorValue'))); },
            'deviceConfigurationUserStateSummaries' => function (ParseNode $n) use ($o) { $o->setDeviceConfigurationUserStateSummaries($n->getObjectValue(array(DeviceConfigurationUserStateSummary::class, 'createFromDiscriminatorValue'))); },
            'deviceCustomAttributeShellScripts' => function (ParseNode $n) use ($o) { $o->setDeviceCustomAttributeShellScripts($n->getCollectionOfObjectValues(array(DeviceCustomAttributeShellScript::class, 'createFromDiscriminatorValue'))); },
            'deviceEnrollmentConfigurations' => function (ParseNode $n) use ($o) { $o->setDeviceEnrollmentConfigurations($n->getCollectionOfObjectValues(array(DeviceEnrollmentConfiguration::class, 'createFromDiscriminatorValue'))); },
            'deviceHealthScripts' => function (ParseNode $n) use ($o) { $o->setDeviceHealthScripts($n->getCollectionOfObjectValues(array(DeviceHealthScript::class, 'createFromDiscriminatorValue'))); },
            'deviceManagementPartners' => function (ParseNode $n) use ($o) { $o->setDeviceManagementPartners($n->getCollectionOfObjectValues(array(DeviceManagementPartner::class, 'createFromDiscriminatorValue'))); },
            'deviceManagementScripts' => function (ParseNode $n) use ($o) { $o->setDeviceManagementScripts($n->getCollectionOfObjectValues(array(DeviceManagementScript::class, 'createFromDiscriminatorValue'))); },
            'deviceProtectionOverview' => function (ParseNode $n) use ($o) { $o->setDeviceProtectionOverview($n->getObjectValue(array(DeviceProtectionOverview::class, 'createFromDiscriminatorValue'))); },
            'deviceShellScripts' => function (ParseNode $n) use ($o) { $o->setDeviceShellScripts($n->getCollectionOfObjectValues(array(DeviceShellScript::class, 'createFromDiscriminatorValue'))); },
            'domainJoinConnectors' => function (ParseNode $n) use ($o) { $o->setDomainJoinConnectors($n->getCollectionOfObjectValues(array(DeviceManagementDomainJoinConnector::class, 'createFromDiscriminatorValue'))); },
            'embeddedSIMActivationCodePools' => function (ParseNode $n) use ($o) { $o->setEmbeddedSIMActivationCodePools($n->getCollectionOfObjectValues(array(EmbeddedSIMActivationCodePool::class, 'createFromDiscriminatorValue'))); },
            'exchangeConnectors' => function (ParseNode $n) use ($o) { $o->setExchangeConnectors($n->getCollectionOfObjectValues(array(DeviceManagementExchangeConnector::class, 'createFromDiscriminatorValue'))); },
            'exchangeOnPremisesPolicies' => function (ParseNode $n) use ($o) { $o->setExchangeOnPremisesPolicies($n->getCollectionOfObjectValues(array(DeviceManagementExchangeOnPremisesPolicy::class, 'createFromDiscriminatorValue'))); },
            'exchangeOnPremisesPolicy' => function (ParseNode $n) use ($o) { $o->setExchangeOnPremisesPolicy($n->getObjectValue(array(DeviceManagementExchangeOnPremisesPolicy::class, 'createFromDiscriminatorValue'))); },
            'groupPolicyCategories' => function (ParseNode $n) use ($o) { $o->setGroupPolicyCategories($n->getCollectionOfObjectValues(array(GroupPolicyCategory::class, 'createFromDiscriminatorValue'))); },
            'groupPolicyConfigurations' => function (ParseNode $n) use ($o) { $o->setGroupPolicyConfigurations($n->getCollectionOfObjectValues(array(GroupPolicyConfiguration::class, 'createFromDiscriminatorValue'))); },
            'groupPolicyDefinitionFiles' => function (ParseNode $n) use ($o) { $o->setGroupPolicyDefinitionFiles($n->getCollectionOfObjectValues(array(GroupPolicyDefinitionFile::class, 'createFromDiscriminatorValue'))); },
            'groupPolicyDefinitions' => function (ParseNode $n) use ($o) { $o->setGroupPolicyDefinitions($n->getCollectionOfObjectValues(array(GroupPolicyDefinition::class, 'createFromDiscriminatorValue'))); },
            'groupPolicyMigrationReports' => function (ParseNode $n) use ($o) { $o->setGroupPolicyMigrationReports($n->getCollectionOfObjectValues(array(GroupPolicyMigrationReport::class, 'createFromDiscriminatorValue'))); },
            'groupPolicyObjectFiles' => function (ParseNode $n) use ($o) { $o->setGroupPolicyObjectFiles($n->getCollectionOfObjectValues(array(GroupPolicyObjectFile::class, 'createFromDiscriminatorValue'))); },
            'groupPolicyUploadedDefinitionFiles' => function (ParseNode $n) use ($o) { $o->setGroupPolicyUploadedDefinitionFiles($n->getCollectionOfObjectValues(array(GroupPolicyUploadedDefinitionFile::class, 'createFromDiscriminatorValue'))); },
            'importedDeviceIdentities' => function (ParseNode $n) use ($o) { $o->setImportedDeviceIdentities($n->getCollectionOfObjectValues(array(ImportedDeviceIdentity::class, 'createFromDiscriminatorValue'))); },
            'importedWindowsAutopilotDeviceIdentities' => function (ParseNode $n) use ($o) { $o->setImportedWindowsAutopilotDeviceIdentities($n->getCollectionOfObjectValues(array(ImportedWindowsAutopilotDeviceIdentity::class, 'createFromDiscriminatorValue'))); },
            'intents' => function (ParseNode $n) use ($o) { $o->setIntents($n->getCollectionOfObjectValues(array(DeviceManagementIntent::class, 'createFromDiscriminatorValue'))); },
            'intuneAccountId' => function (ParseNode $n) use ($o) { $o->setIntuneAccountId($n->getStringValue()); },
            'intuneBrand' => function (ParseNode $n) use ($o) { $o->setIntuneBrand($n->getObjectValue(array(IntuneBrand::class, 'createFromDiscriminatorValue'))); },
            'intuneBrandingProfiles' => function (ParseNode $n) use ($o) { $o->setIntuneBrandingProfiles($n->getCollectionOfObjectValues(array(IntuneBrandingProfile::class, 'createFromDiscriminatorValue'))); },
            'iosUpdateStatuses' => function (ParseNode $n) use ($o) { $o->setIosUpdateStatuses($n->getCollectionOfObjectValues(array(IosUpdateDeviceStatus::class, 'createFromDiscriminatorValue'))); },
            'lastReportAggregationDateTime' => function (ParseNode $n) use ($o) { $o->setLastReportAggregationDateTime($n->getDateTimeValue()); },
            'legacyPcManangementEnabled' => function (ParseNode $n) use ($o) { $o->setLegacyPcManangementEnabled($n->getBooleanValue()); },
            'macOSSoftwareUpdateAccountSummaries' => function (ParseNode $n) use ($o) { $o->setMacOSSoftwareUpdateAccountSummaries($n->getCollectionOfObjectValues(array(MacOSSoftwareUpdateAccountSummary::class, 'createFromDiscriminatorValue'))); },
            'managedDeviceCleanupSettings' => function (ParseNode $n) use ($o) { $o->setManagedDeviceCleanupSettings($n->getObjectValue(array(ManagedDeviceCleanupSettings::class, 'createFromDiscriminatorValue'))); },
            'managedDeviceEncryptionStates' => function (ParseNode $n) use ($o) { $o->setManagedDeviceEncryptionStates($n->getCollectionOfObjectValues(array(ManagedDeviceEncryptionState::class, 'createFromDiscriminatorValue'))); },
            'managedDeviceOverview' => function (ParseNode $n) use ($o) { $o->setManagedDeviceOverview($n->getObjectValue(array(ManagedDeviceOverview::class, 'createFromDiscriminatorValue'))); },
            'managedDevices' => function (ParseNode $n) use ($o) { $o->setManagedDevices($n->getCollectionOfObjectValues(array(ManagedDevice::class, 'createFromDiscriminatorValue'))); },
            'maximumDepTokens' => function (ParseNode $n) use ($o) { $o->setMaximumDepTokens($n->getIntegerValue()); },
            'microsoftTunnelConfigurations' => function (ParseNode $n) use ($o) { $o->setMicrosoftTunnelConfigurations($n->getCollectionOfObjectValues(array(MicrosoftTunnelConfiguration::class, 'createFromDiscriminatorValue'))); },
            'microsoftTunnelHealthThresholds' => function (ParseNode $n) use ($o) { $o->setMicrosoftTunnelHealthThresholds($n->getCollectionOfObjectValues(array(MicrosoftTunnelHealthThreshold::class, 'createFromDiscriminatorValue'))); },
            'microsoftTunnelServerLogCollectionResponses' => function (ParseNode $n) use ($o) { $o->setMicrosoftTunnelServerLogCollectionResponses($n->getCollectionOfObjectValues(array(MicrosoftTunnelServerLogCollectionResponse::class, 'createFromDiscriminatorValue'))); },
            'microsoftTunnelSites' => function (ParseNode $n) use ($o) { $o->setMicrosoftTunnelSites($n->getCollectionOfObjectValues(array(MicrosoftTunnelSite::class, 'createFromDiscriminatorValue'))); },
            'mobileAppTroubleshootingEvents' => function (ParseNode $n) use ($o) { $o->setMobileAppTroubleshootingEvents($n->getCollectionOfObjectValues(array(MobileAppTroubleshootingEvent::class, 'createFromDiscriminatorValue'))); },
            'mobileThreatDefenseConnectors' => function (ParseNode $n) use ($o) { $o->setMobileThreatDefenseConnectors($n->getCollectionOfObjectValues(array(MobileThreatDefenseConnector::class, 'createFromDiscriminatorValue'))); },
            'ndesConnectors' => function (ParseNode $n) use ($o) { $o->setNdesConnectors($n->getCollectionOfObjectValues(array(NdesConnector::class, 'createFromDiscriminatorValue'))); },
            'notificationMessageTemplates' => function (ParseNode $n) use ($o) { $o->setNotificationMessageTemplates($n->getCollectionOfObjectValues(array(NotificationMessageTemplate::class, 'createFromDiscriminatorValue'))); },
            'oemWarrantyInformationOnboarding' => function (ParseNode $n) use ($o) { $o->setOemWarrantyInformationOnboarding($n->getCollectionOfObjectValues(array(OemWarrantyInformationOnboarding::class, 'createFromDiscriminatorValue'))); },
            'remoteActionAudits' => function (ParseNode $n) use ($o) { $o->setRemoteActionAudits($n->getCollectionOfObjectValues(array(RemoteActionAudit::class, 'createFromDiscriminatorValue'))); },
            'remoteAssistancePartners' => function (ParseNode $n) use ($o) { $o->setRemoteAssistancePartners($n->getCollectionOfObjectValues(array(RemoteAssistancePartner::class, 'createFromDiscriminatorValue'))); },
            'remoteAssistanceSettings' => function (ParseNode $n) use ($o) { $o->setRemoteAssistanceSettings($n->getObjectValue(array(RemoteAssistanceSettings::class, 'createFromDiscriminatorValue'))); },
            'reports' => function (ParseNode $n) use ($o) { $o->setReports($n->getObjectValue(array(DeviceManagementReports::class, 'createFromDiscriminatorValue'))); },
            'resourceAccessProfiles' => function (ParseNode $n) use ($o) { $o->setResourceAccessProfiles($n->getCollectionOfObjectValues(array(DeviceManagementResourceAccessProfileBase::class, 'createFromDiscriminatorValue'))); },
            'resourceOperations' => function (ParseNode $n) use ($o) { $o->setResourceOperations($n->getCollectionOfObjectValues(array(ResourceOperation::class, 'createFromDiscriminatorValue'))); },
            'reusablePolicySettings' => function (ParseNode $n) use ($o) { $o->setReusablePolicySettings($n->getCollectionOfObjectValues(array(DeviceManagementReusablePolicySetting::class, 'createFromDiscriminatorValue'))); },
            'reusableSettings' => function (ParseNode $n) use ($o) { $o->setReusableSettings($n->getCollectionOfObjectValues(array(DeviceManagementConfigurationSettingDefinition::class, 'createFromDiscriminatorValue'))); },
            'roleAssignments' => function (ParseNode $n) use ($o) { $o->setRoleAssignments($n->getCollectionOfObjectValues(array(DeviceAndAppManagementRoleAssignment::class, 'createFromDiscriminatorValue'))); },
            'roleDefinitions' => function (ParseNode $n) use ($o) { $o->setRoleDefinitions($n->getCollectionOfObjectValues(array(RoleDefinition::class, 'createFromDiscriminatorValue'))); },
            'roleScopeTags' => function (ParseNode $n) use ($o) { $o->setRoleScopeTags($n->getCollectionOfObjectValues(array(RoleScopeTag::class, 'createFromDiscriminatorValue'))); },
            'settingDefinitions' => function (ParseNode $n) use ($o) { $o->setSettingDefinitions($n->getCollectionOfObjectValues(array(DeviceManagementSettingDefinition::class, 'createFromDiscriminatorValue'))); },
            'settings' => function (ParseNode $n) use ($o) { $o->setSettings($n->getObjectValue(array(DeviceManagementSettings::class, 'createFromDiscriminatorValue'))); },
            'softwareUpdateStatusSummary' => function (ParseNode $n) use ($o) { $o->setSoftwareUpdateStatusSummary($n->getObjectValue(array(SoftwareUpdateStatusSummary::class, 'createFromDiscriminatorValue'))); },
            'subscriptions' => function (ParseNode $n) use ($o) { $o->setSubscriptions($n->getEnumValue(DeviceManagementSubscriptions::class)); },
            'subscriptionState' => function (ParseNode $n) use ($o) { $o->setSubscriptionState($n->getEnumValue(DeviceManagementSubscriptionState::class)); },
            'telecomExpenseManagementPartners' => function (ParseNode $n) use ($o) { $o->setTelecomExpenseManagementPartners($n->getCollectionOfObjectValues(array(TelecomExpenseManagementPartner::class, 'createFromDiscriminatorValue'))); },
            'templates' => function (ParseNode $n) use ($o) { $o->setTemplates($n->getCollectionOfObjectValues(array(DeviceManagementTemplate::class, 'createFromDiscriminatorValue'))); },
            'templateSettings' => function (ParseNode $n) use ($o) { $o->setTemplateSettings($n->getCollectionOfObjectValues(array(DeviceManagementConfigurationSettingTemplate::class, 'createFromDiscriminatorValue'))); },
            'tenantAttachRBAC' => function (ParseNode $n) use ($o) { $o->setTenantAttachRBAC($n->getObjectValue(array(TenantAttachRBAC::class, 'createFromDiscriminatorValue'))); },
            'termsAndConditions' => function (ParseNode $n) use ($o) { $o->setTermsAndConditions($n->getCollectionOfObjectValues(array(TermsAndConditions::class, 'createFromDiscriminatorValue'))); },
            'troubleshootingEvents' => function (ParseNode $n) use ($o) { $o->setTroubleshootingEvents($n->getCollectionOfObjectValues(array(DeviceManagementTroubleshootingEvent::class, 'createFromDiscriminatorValue'))); },
            'unlicensedAdminstratorsEnabled' => function (ParseNode $n) use ($o) { $o->setUnlicensedAdminstratorsEnabled($n->getBooleanValue()); },
            'userExperienceAnalyticsAppHealthApplicationPerformance' => function (ParseNode $n) use ($o) { $o->setUserExperienceAnalyticsAppHealthApplicationPerformance($n->getCollectionOfObjectValues(array(UserExperienceAnalyticsAppHealthApplicationPerformance::class, 'createFromDiscriminatorValue'))); },
            'userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion' => function (ParseNode $n) use ($o) { $o->setUserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion($n->getCollectionOfObjectValues(array(UserExperienceAnalyticsAppHealthAppPerformanceByAppVersion::class, 'createFromDiscriminatorValue'))); },
            'userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails' => function (ParseNode $n) use ($o) { $o->setUserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails($n->getCollectionOfObjectValues(array(UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails::class, 'createFromDiscriminatorValue'))); },
            'userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId' => function (ParseNode $n) use ($o) { $o->setUserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId($n->getCollectionOfObjectValues(array(UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId::class, 'createFromDiscriminatorValue'))); },
            'userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion' => function (ParseNode $n) use ($o) { $o->setUserExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion($n->getCollectionOfObjectValues(array(UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion::class, 'createFromDiscriminatorValue'))); },
            'userExperienceAnalyticsAppHealthDeviceModelPerformance' => function (ParseNode $n) use ($o) { $o->setUserExperienceAnalyticsAppHealthDeviceModelPerformance($n->getCollectionOfObjectValues(array(UserExperienceAnalyticsAppHealthDeviceModelPerformance::class, 'createFromDiscriminatorValue'))); },
            'userExperienceAnalyticsAppHealthDevicePerformance' => function (ParseNode $n) use ($o) { $o->setUserExperienceAnalyticsAppHealthDevicePerformance($n->getCollectionOfObjectValues(array(UserExperienceAnalyticsAppHealthDevicePerformance::class, 'createFromDiscriminatorValue'))); },
            'userExperienceAnalyticsAppHealthDevicePerformanceDetails' => function (ParseNode $n) use ($o) { $o->setUserExperienceAnalyticsAppHealthDevicePerformanceDetails($n->getCollectionOfObjectValues(array(UserExperienceAnalyticsAppHealthDevicePerformanceDetails::class, 'createFromDiscriminatorValue'))); },
            'userExperienceAnalyticsAppHealthOSVersionPerformance' => function (ParseNode $n) use ($o) { $o->setUserExperienceAnalyticsAppHealthOSVersionPerformance($n->getCollectionOfObjectValues(array(UserExperienceAnalyticsAppHealthOSVersionPerformance::class, 'createFromDiscriminatorValue'))); },
            'userExperienceAnalyticsAppHealthOverview' => function (ParseNode $n) use ($o) { $o->setUserExperienceAnalyticsAppHealthOverview($n->getObjectValue(array(UserExperienceAnalyticsCategory::class, 'createFromDiscriminatorValue'))); },
            'userExperienceAnalyticsBaselines' => function (ParseNode $n) use ($o) { $o->setUserExperienceAnalyticsBaselines($n->getCollectionOfObjectValues(array(UserExperienceAnalyticsBaseline::class, 'createFromDiscriminatorValue'))); },
            'userExperienceAnalyticsBatteryHealthAppImpact' => function (ParseNode $n) use ($o) { $o->setUserExperienceAnalyticsBatteryHealthAppImpact($n->getCollectionOfObjectValues(array(UserExperienceAnalyticsBatteryHealthAppImpact::class, 'createFromDiscriminatorValue'))); },
            'userExperienceAnalyticsBatteryHealthCapacityDetails' => function (ParseNode $n) use ($o) { $o->setUserExperienceAnalyticsBatteryHealthCapacityDetails($n->getObjectValue(array(UserExperienceAnalyticsBatteryHealthCapacityDetails::class, 'createFromDiscriminatorValue'))); },
            'userExperienceAnalyticsBatteryHealthDeviceAppImpact' => function (ParseNode $n) use ($o) { $o->setUserExperienceAnalyticsBatteryHealthDeviceAppImpact($n->getCollectionOfObjectValues(array(UserExperienceAnalyticsBatteryHealthDeviceAppImpact::class, 'createFromDiscriminatorValue'))); },
            'userExperienceAnalyticsBatteryHealthDevicePerformance' => function (ParseNode $n) use ($o) { $o->setUserExperienceAnalyticsBatteryHealthDevicePerformance($n->getCollectionOfObjectValues(array(UserExperienceAnalyticsBatteryHealthDevicePerformance::class, 'createFromDiscriminatorValue'))); },
            'userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory' => function (ParseNode $n) use ($o) { $o->setUserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory($n->getCollectionOfObjectValues(array(UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory::class, 'createFromDiscriminatorValue'))); },
            'userExperienceAnalyticsBatteryHealthModelPerformance' => function (ParseNode $n) use ($o) { $o->setUserExperienceAnalyticsBatteryHealthModelPerformance($n->getCollectionOfObjectValues(array(UserExperienceAnalyticsBatteryHealthModelPerformance::class, 'createFromDiscriminatorValue'))); },
            'userExperienceAnalyticsBatteryHealthOsPerformance' => function (ParseNode $n) use ($o) { $o->setUserExperienceAnalyticsBatteryHealthOsPerformance($n->getCollectionOfObjectValues(array(UserExperienceAnalyticsBatteryHealthOsPerformance::class, 'createFromDiscriminatorValue'))); },
            'userExperienceAnalyticsBatteryHealthRuntimeDetails' => function (ParseNode $n) use ($o) { $o->setUserExperienceAnalyticsBatteryHealthRuntimeDetails($n->getObjectValue(array(UserExperienceAnalyticsBatteryHealthRuntimeDetails::class, 'createFromDiscriminatorValue'))); },
            'userExperienceAnalyticsCategories' => function (ParseNode $n) use ($o) { $o->setUserExperienceAnalyticsCategories($n->getCollectionOfObjectValues(array(UserExperienceAnalyticsCategory::class, 'createFromDiscriminatorValue'))); },
            'userExperienceAnalyticsDeviceMetricHistory' => function (ParseNode $n) use ($o) { $o->setUserExperienceAnalyticsDeviceMetricHistory($n->getCollectionOfObjectValues(array(UserExperienceAnalyticsMetricHistory::class, 'createFromDiscriminatorValue'))); },
            'userExperienceAnalyticsDevicePerformance' => function (ParseNode $n) use ($o) { $o->setUserExperienceAnalyticsDevicePerformance($n->getCollectionOfObjectValues(array(UserExperienceAnalyticsDevicePerformance::class, 'createFromDiscriminatorValue'))); },
            'userExperienceAnalyticsDeviceScope' => function (ParseNode $n) use ($o) { $o->setUserExperienceAnalyticsDeviceScope($n->getObjectValue(array(UserExperienceAnalyticsDeviceScope::class, 'createFromDiscriminatorValue'))); },
            'userExperienceAnalyticsDeviceScopes' => function (ParseNode $n) use ($o) { $o->setUserExperienceAnalyticsDeviceScopes($n->getCollectionOfObjectValues(array(UserExperienceAnalyticsDeviceScope::class, 'createFromDiscriminatorValue'))); },
            'userExperienceAnalyticsDeviceScores' => function (ParseNode $n) use ($o) { $o->setUserExperienceAnalyticsDeviceScores($n->getCollectionOfObjectValues(array(UserExperienceAnalyticsDeviceScores::class, 'createFromDiscriminatorValue'))); },
            'userExperienceAnalyticsDeviceStartupHistory' => function (ParseNode $n) use ($o) { $o->setUserExperienceAnalyticsDeviceStartupHistory($n->getCollectionOfObjectValues(array(UserExperienceAnalyticsDeviceStartupHistory::class, 'createFromDiscriminatorValue'))); },
            'userExperienceAnalyticsDeviceStartupProcesses' => function (ParseNode $n) use ($o) { $o->setUserExperienceAnalyticsDeviceStartupProcesses($n->getCollectionOfObjectValues(array(UserExperienceAnalyticsDeviceStartupProcess::class, 'createFromDiscriminatorValue'))); },
            'userExperienceAnalyticsDeviceStartupProcessPerformance' => function (ParseNode $n) use ($o) { $o->setUserExperienceAnalyticsDeviceStartupProcessPerformance($n->getCollectionOfObjectValues(array(UserExperienceAnalyticsDeviceStartupProcessPerformance::class, 'createFromDiscriminatorValue'))); },
            'userExperienceAnalyticsDevicesWithoutCloudIdentity' => function (ParseNode $n) use ($o) { $o->setUserExperienceAnalyticsDevicesWithoutCloudIdentity($n->getCollectionOfObjectValues(array(UserExperienceAnalyticsDeviceWithoutCloudIdentity::class, 'createFromDiscriminatorValue'))); },
            'userExperienceAnalyticsImpactingProcess' => function (ParseNode $n) use ($o) { $o->setUserExperienceAnalyticsImpactingProcess($n->getCollectionOfObjectValues(array(UserExperienceAnalyticsImpactingProcess::class, 'createFromDiscriminatorValue'))); },
            'userExperienceAnalyticsMetricHistory' => function (ParseNode $n) use ($o) { $o->setUserExperienceAnalyticsMetricHistory($n->getCollectionOfObjectValues(array(UserExperienceAnalyticsMetricHistory::class, 'createFromDiscriminatorValue'))); },
            'userExperienceAnalyticsModelScores' => function (ParseNode $n) use ($o) { $o->setUserExperienceAnalyticsModelScores($n->getCollectionOfObjectValues(array(UserExperienceAnalyticsModelScores::class, 'createFromDiscriminatorValue'))); },
            'userExperienceAnalyticsNotAutopilotReadyDevice' => function (ParseNode $n) use ($o) { $o->setUserExperienceAnalyticsNotAutopilotReadyDevice($n->getCollectionOfObjectValues(array(UserExperienceAnalyticsNotAutopilotReadyDevice::class, 'createFromDiscriminatorValue'))); },
            'userExperienceAnalyticsOverview' => function (ParseNode $n) use ($o) { $o->setUserExperienceAnalyticsOverview($n->getObjectValue(array(UserExperienceAnalyticsOverview::class, 'createFromDiscriminatorValue'))); },
            'userExperienceAnalyticsRegressionSummary' => function (ParseNode $n) use ($o) { $o->setUserExperienceAnalyticsRegressionSummary($n->getObjectValue(array(UserExperienceAnalyticsRegressionSummary::class, 'createFromDiscriminatorValue'))); },
            'userExperienceAnalyticsRemoteConnection' => function (ParseNode $n) use ($o) { $o->setUserExperienceAnalyticsRemoteConnection($n->getCollectionOfObjectValues(array(UserExperienceAnalyticsRemoteConnection::class, 'createFromDiscriminatorValue'))); },
            'userExperienceAnalyticsResourcePerformance' => function (ParseNode $n) use ($o) { $o->setUserExperienceAnalyticsResourcePerformance($n->getCollectionOfObjectValues(array(UserExperienceAnalyticsResourcePerformance::class, 'createFromDiscriminatorValue'))); },
            'userExperienceAnalyticsScoreHistory' => function (ParseNode $n) use ($o) { $o->setUserExperienceAnalyticsScoreHistory($n->getCollectionOfObjectValues(array(UserExperienceAnalyticsScoreHistory::class, 'createFromDiscriminatorValue'))); },
            'userExperienceAnalyticsSettings' => function (ParseNode $n) use ($o) { $o->setUserExperienceAnalyticsSettings($n->getObjectValue(array(UserExperienceAnalyticsSettings::class, 'createFromDiscriminatorValue'))); },
            'userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric' => function (ParseNode $n) use ($o) { $o->setUserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric($n->getObjectValue(array(UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric::class, 'createFromDiscriminatorValue'))); },
            'userExperienceAnalyticsWorkFromAnywhereMetrics' => function (ParseNode $n) use ($o) { $o->setUserExperienceAnalyticsWorkFromAnywhereMetrics($n->getCollectionOfObjectValues(array(UserExperienceAnalyticsWorkFromAnywhereMetric::class, 'createFromDiscriminatorValue'))); },
            'userExperienceAnalyticsWorkFromAnywhereModelPerformance' => function (ParseNode $n) use ($o) { $o->setUserExperienceAnalyticsWorkFromAnywhereModelPerformance($n->getCollectionOfObjectValues(array(UserExperienceAnalyticsWorkFromAnywhereModelPerformance::class, 'createFromDiscriminatorValue'))); },
            'userPfxCertificates' => function (ParseNode $n) use ($o) { $o->setUserPfxCertificates($n->getCollectionOfObjectValues(array(UserPFXCertificate::class, 'createFromDiscriminatorValue'))); },
            'virtualEndpoint' => function (ParseNode $n) use ($o) { $o->setVirtualEndpoint($n->getObjectValue(array(VirtualEndpoint::class, 'createFromDiscriminatorValue'))); },
            'windowsAutopilotDeploymentProfiles' => function (ParseNode $n) use ($o) { $o->setWindowsAutopilotDeploymentProfiles($n->getCollectionOfObjectValues(array(WindowsAutopilotDeploymentProfile::class, 'createFromDiscriminatorValue'))); },
            'windowsAutopilotDeviceIdentities' => function (ParseNode $n) use ($o) { $o->setWindowsAutopilotDeviceIdentities($n->getCollectionOfObjectValues(array(WindowsAutopilotDeviceIdentity::class, 'createFromDiscriminatorValue'))); },
            'windowsAutopilotSettings' => function (ParseNode $n) use ($o) { $o->setWindowsAutopilotSettings($n->getObjectValue(array(WindowsAutopilotSettings::class, 'createFromDiscriminatorValue'))); },
            'windowsDriverUpdateProfiles' => function (ParseNode $n) use ($o) { $o->setWindowsDriverUpdateProfiles($n->getCollectionOfObjectValues(array(WindowsDriverUpdateProfile::class, 'createFromDiscriminatorValue'))); },
            'windowsFeatureUpdateProfiles' => function (ParseNode $n) use ($o) { $o->setWindowsFeatureUpdateProfiles($n->getCollectionOfObjectValues(array(WindowsFeatureUpdateProfile::class, 'createFromDiscriminatorValue'))); },
            'windowsInformationProtectionAppLearningSummaries' => function (ParseNode $n) use ($o) { $o->setWindowsInformationProtectionAppLearningSummaries($n->getCollectionOfObjectValues(array(WindowsInformationProtectionAppLearningSummary::class, 'createFromDiscriminatorValue'))); },
            'windowsInformationProtectionNetworkLearningSummaries' => function (ParseNode $n) use ($o) { $o->setWindowsInformationProtectionNetworkLearningSummaries($n->getCollectionOfObjectValues(array(WindowsInformationProtectionNetworkLearningSummary::class, 'createFromDiscriminatorValue'))); },
            'windowsMalwareInformation' => function (ParseNode $n) use ($o) { $o->setWindowsMalwareInformation($n->getCollectionOfObjectValues(array(WindowsMalwareInformation::class, 'createFromDiscriminatorValue'))); },
            'windowsMalwareOverview' => function (ParseNode $n) use ($o) { $o->setWindowsMalwareOverview($n->getObjectValue(array(WindowsMalwareOverview::class, 'createFromDiscriminatorValue'))); },
            'windowsQualityUpdateProfiles' => function (ParseNode $n) use ($o) { $o->setWindowsQualityUpdateProfiles($n->getCollectionOfObjectValues(array(WindowsQualityUpdateProfile::class, 'createFromDiscriminatorValue'))); },
            'windowsUpdateCatalogItems' => function (ParseNode $n) use ($o) { $o->setWindowsUpdateCatalogItems($n->getCollectionOfObjectValues(array(WindowsUpdateCatalogItem::class, 'createFromDiscriminatorValue'))); },
            'zebraFotaArtifacts' => function (ParseNode $n) use ($o) { $o->setZebraFotaArtifacts($n->getCollectionOfObjectValues(array(ZebraFotaArtifact::class, 'createFromDiscriminatorValue'))); },
            'zebraFotaConnector' => function (ParseNode $n) use ($o) { $o->setZebraFotaConnector($n->getObjectValue(array(ZebraFotaConnector::class, 'createFromDiscriminatorValue'))); },
            'zebraFotaDeployments' => function (ParseNode $n) use ($o) { $o->setZebraFotaDeployments($n->getCollectionOfObjectValues(array(ZebraFotaDeployment::class, 'createFromDiscriminatorValue'))); },
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
     * Gets the intuneAccountId property value. Intune Account ID for given tenant
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
     * Gets the userExperienceAnalyticsDeviceScope property value. The user experience analytics device scope entity endpoint to trigger on the service to either START or STOP computing metrics data based on a device scope configuration.
     * @return UserExperienceAnalyticsDeviceScope|null
    */
    public function getUserExperienceAnalyticsDeviceScope(): ?UserExperienceAnalyticsDeviceScope {
        return $this->userExperienceAnalyticsDeviceScope;
    }

    /**
     * Gets the userExperienceAnalyticsDeviceScopes property value. The user experience analytics device scope entity contains device scope configuration use to apply filtering on the endpoint analytics reports.
     * @return array<UserExperienceAnalyticsDeviceScope>|null
    */
    public function getUserExperienceAnalyticsDeviceScopes(): ?array {
        return $this->userExperienceAnalyticsDeviceScopes;
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
     * Gets the zebraFotaArtifacts property value. The Collection of ZebraFotaArtifacts.
     * @return array<ZebraFotaArtifact>|null
    */
    public function getZebraFotaArtifacts(): ?array {
        return $this->zebraFotaArtifacts;
    }

    /**
     * Gets the zebraFotaConnector property value. The singleton ZebraFotaConnector associated with account.
     * @return ZebraFotaConnector|null
    */
    public function getZebraFotaConnector(): ?ZebraFotaConnector {
        return $this->zebraFotaConnector;
    }

    /**
     * Gets the zebraFotaDeployments property value. Collection of ZebraFotaDeployments associated with account.
     * @return array<ZebraFotaDeployment>|null
    */
    public function getZebraFotaDeployments(): ?array {
        return $this->zebraFotaDeployments;
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
        $writer->writeObjectValue('userExperienceAnalyticsDeviceScope', $this->userExperienceAnalyticsDeviceScope);
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsDeviceScopes', $this->userExperienceAnalyticsDeviceScopes);
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
        $writer->writeCollectionOfObjectValues('zebraFotaArtifacts', $this->zebraFotaArtifacts);
        $writer->writeObjectValue('zebraFotaConnector', $this->zebraFotaConnector);
        $writer->writeCollectionOfObjectValues('zebraFotaDeployments', $this->zebraFotaDeployments);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the accountMoveCompletionDateTime property value. The date & time when tenant data moved between scaleunits.
     *  @param DateTime|null $value Value to set for the accountMoveCompletionDateTime property.
    */
    public function setAccountMoveCompletionDateTime(?DateTime $value ): void {
        $this->accountMoveCompletionDateTime = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
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
     * Sets the intuneAccountId property value. Intune Account ID for given tenant
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
     * Sets the userExperienceAnalyticsDeviceScope property value. The user experience analytics device scope entity endpoint to trigger on the service to either START or STOP computing metrics data based on a device scope configuration.
     *  @param UserExperienceAnalyticsDeviceScope|null $value Value to set for the userExperienceAnalyticsDeviceScope property.
    */
    public function setUserExperienceAnalyticsDeviceScope(?UserExperienceAnalyticsDeviceScope $value ): void {
        $this->userExperienceAnalyticsDeviceScope = $value;
    }

    /**
     * Sets the userExperienceAnalyticsDeviceScopes property value. The user experience analytics device scope entity contains device scope configuration use to apply filtering on the endpoint analytics reports.
     *  @param array<UserExperienceAnalyticsDeviceScope>|null $value Value to set for the userExperienceAnalyticsDeviceScopes property.
    */
    public function setUserExperienceAnalyticsDeviceScopes(?array $value ): void {
        $this->userExperienceAnalyticsDeviceScopes = $value;
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

    /**
     * Sets the zebraFotaArtifacts property value. The Collection of ZebraFotaArtifacts.
     *  @param array<ZebraFotaArtifact>|null $value Value to set for the zebraFotaArtifacts property.
    */
    public function setZebraFotaArtifacts(?array $value ): void {
        $this->zebraFotaArtifacts = $value;
    }

    /**
     * Sets the zebraFotaConnector property value. The singleton ZebraFotaConnector associated with account.
     *  @param ZebraFotaConnector|null $value Value to set for the zebraFotaConnector property.
    */
    public function setZebraFotaConnector(?ZebraFotaConnector $value ): void {
        $this->zebraFotaConnector = $value;
    }

    /**
     * Sets the zebraFotaDeployments property value. Collection of ZebraFotaDeployments associated with account.
     *  @param array<ZebraFotaDeployment>|null $value Value to set for the zebraFotaDeployments property.
    */
    public function setZebraFotaDeployments(?array $value ): void {
        $this->zebraFotaDeployments = $value;
    }

}

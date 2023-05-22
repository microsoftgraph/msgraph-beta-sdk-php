<?php

namespace Microsoft\Graph\Beta\Generated\Models\DeviceManagement;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\AdminConsent;
use Microsoft\Graph\Beta\Generated\Models\AdvancedThreatProtectionOnboardingStateSummary;
use Microsoft\Graph\Beta\Generated\Models\AndroidDeviceOwnerEnrollmentProfile;
use Microsoft\Graph\Beta\Generated\Models\AndroidForWorkAppConfigurationSchema;
use Microsoft\Graph\Beta\Generated\Models\AndroidForWorkEnrollmentProfile;
use Microsoft\Graph\Beta\Generated\Models\AndroidForWorkSettings;
use Microsoft\Graph\Beta\Generated\Models\AndroidManagedStoreAccountEnterpriseSettings;
use Microsoft\Graph\Beta\Generated\Models\AndroidManagedStoreAppConfigurationSchema;
use Microsoft\Graph\Beta\Generated\Models\ApplePushNotificationCertificate;
use Microsoft\Graph\Beta\Generated\Models\AppleUserInitiatedEnrollmentProfile;
use Microsoft\Graph\Beta\Generated\Models\AuditEvent;
use Microsoft\Graph\Beta\Generated\Models\CartToClassAssociation;
use Microsoft\Graph\Beta\Generated\Models\CertificateConnectorDetails;
use Microsoft\Graph\Beta\Generated\Models\ChromeOSOnboardingSettings;
use Microsoft\Graph\Beta\Generated\Models\CloudPCConnectivityIssue;
use Microsoft\Graph\Beta\Generated\Models\ComanagementEligibleDevice;
use Microsoft\Graph\Beta\Generated\Models\ComplianceManagementPartner;
use Microsoft\Graph\Beta\Generated\Models\ConfigManagerCollection;
use Microsoft\Graph\Beta\Generated\Models\ConnectorStatusDetails;
use Microsoft\Graph\Beta\Generated\Models\DataProcessorServiceForWindowsFeaturesOnboarding;
use Microsoft\Graph\Beta\Generated\Models\DataSharingConsent;
use Microsoft\Graph\Beta\Generated\Models\DepOnboardingSetting;
use Microsoft\Graph\Beta\Generated\Models\DetectedApp;
use Microsoft\Graph\Beta\Generated\Models\DeviceAndAppManagementAssignmentFilter;
use Microsoft\Graph\Beta\Generated\Models\DeviceAndAppManagementRoleAssignment;
use Microsoft\Graph\Beta\Generated\Models\DeviceCategory;
use Microsoft\Graph\Beta\Generated\Models\DeviceCompliancePolicy;
use Microsoft\Graph\Beta\Generated\Models\DeviceCompliancePolicyDeviceStateSummary;
use Microsoft\Graph\Beta\Generated\Models\DeviceCompliancePolicySettingStateSummary;
use Microsoft\Graph\Beta\Generated\Models\DeviceComplianceScript;
use Microsoft\Graph\Beta\Generated\Models\DeviceConfiguration;
use Microsoft\Graph\Beta\Generated\Models\DeviceConfigurationConflictSummary;
use Microsoft\Graph\Beta\Generated\Models\DeviceConfigurationDeviceStateSummary;
use Microsoft\Graph\Beta\Generated\Models\DeviceConfigurationUserStateSummary;
use Microsoft\Graph\Beta\Generated\Models\DeviceCustomAttributeShellScript;
use Microsoft\Graph\Beta\Generated\Models\DeviceEnrollmentConfiguration;
use Microsoft\Graph\Beta\Generated\Models\DeviceHealthScript;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementAutopilotEvent;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementCompliancePolicy;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementConfigurationCategory;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementConfigurationPolicy;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementConfigurationPolicyTemplate;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementConfigurationSettingDefinition;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementConfigurationSettingTemplate;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementDerivedCredentialSettings;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementDomainJoinConnector;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementExchangeConnector;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementExchangeOnPremisesPolicy;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementIntent;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementPartner;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementReports;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementResourceAccessProfileBase;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementReusablePolicySetting;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementScript;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementSettingCategory;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementSettingDefinition;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementSettings;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementSubscriptions;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementSubscriptionState;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementTemplate;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementTemplateInsightsDefinition;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementTroubleshootingEvent;
use Microsoft\Graph\Beta\Generated\Models\DeviceProtectionOverview;
use Microsoft\Graph\Beta\Generated\Models\DeviceShellScript;
use Microsoft\Graph\Beta\Generated\Models\EmbeddedSIMActivationCodePool;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Graph\Beta\Generated\Models\GroupPolicyCategory;
use Microsoft\Graph\Beta\Generated\Models\GroupPolicyConfiguration;
use Microsoft\Graph\Beta\Generated\Models\GroupPolicyDefinition;
use Microsoft\Graph\Beta\Generated\Models\GroupPolicyDefinitionFile;
use Microsoft\Graph\Beta\Generated\Models\GroupPolicyMigrationReport;
use Microsoft\Graph\Beta\Generated\Models\GroupPolicyObjectFile;
use Microsoft\Graph\Beta\Generated\Models\GroupPolicyUploadedDefinitionFile;
use Microsoft\Graph\Beta\Generated\Models\ImportedDeviceIdentity;
use Microsoft\Graph\Beta\Generated\Models\ImportedWindowsAutopilotDeviceIdentity;
use Microsoft\Graph\Beta\Generated\Models\IntuneBrand;
use Microsoft\Graph\Beta\Generated\Models\IntuneBrandingProfile;
use Microsoft\Graph\Beta\Generated\Models\IosUpdateDeviceStatus;
use Microsoft\Graph\Beta\Generated\Models\MacOSSoftwareUpdateAccountSummary;
use Microsoft\Graph\Beta\Generated\Models\ManagedAllDeviceCertificateState;
use Microsoft\Graph\Beta\Generated\Models\ManagedDevice;
use Microsoft\Graph\Beta\Generated\Models\ManagedDeviceCleanupSettings;
use Microsoft\Graph\Beta\Generated\Models\ManagedDeviceEncryptionState;
use Microsoft\Graph\Beta\Generated\Models\ManagedDeviceOverview;
use Microsoft\Graph\Beta\Generated\Models\MicrosoftTunnelConfiguration;
use Microsoft\Graph\Beta\Generated\Models\MicrosoftTunnelHealthThreshold;
use Microsoft\Graph\Beta\Generated\Models\MicrosoftTunnelServerLogCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\MicrosoftTunnelSite;
use Microsoft\Graph\Beta\Generated\Models\MobileAppTroubleshootingEvent;
use Microsoft\Graph\Beta\Generated\Models\MobileThreatDefenseConnector;
use Microsoft\Graph\Beta\Generated\Models\NdesConnector;
use Microsoft\Graph\Beta\Generated\Models\NotificationMessageTemplate;
use Microsoft\Graph\Beta\Generated\Models\OnPremisesConditionalAccessSettings;
use Microsoft\Graph\Beta\Generated\Models\RemoteActionAudit;
use Microsoft\Graph\Beta\Generated\Models\RemoteAssistancePartner;
use Microsoft\Graph\Beta\Generated\Models\RemoteAssistanceSettings;
use Microsoft\Graph\Beta\Generated\Models\ResourceOperation;
use Microsoft\Graph\Beta\Generated\Models\RestrictedAppsViolation;
use Microsoft\Graph\Beta\Generated\Models\RoleDefinition;
use Microsoft\Graph\Beta\Generated\Models\RoleScopeTag;
use Microsoft\Graph\Beta\Generated\Models\ServiceNowConnection;
use Microsoft\Graph\Beta\Generated\Models\SoftwareUpdateStatusSummary;
use Microsoft\Graph\Beta\Generated\Models\TelecomExpenseManagementPartner;
use Microsoft\Graph\Beta\Generated\Models\TenantAttachRBAC;
use Microsoft\Graph\Beta\Generated\Models\TermsAndConditions;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsAnomaly;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsAnomalyDevice;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsAnomalySeverityOverview;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsAppHealthApplicationPerformance;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsAppHealthAppPerformanceByAppVersion;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsAppHealthDeviceModelPerformance;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsAppHealthDevicePerformance;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsAppHealthDevicePerformanceDetails;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsAppHealthOSVersionPerformance;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsBaseline;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsBatteryHealthAppImpact;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsBatteryHealthCapacityDetails;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsBatteryHealthDeviceAppImpact;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsBatteryHealthDevicePerformance;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsBatteryHealthModelPerformance;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsBatteryHealthOsPerformance;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsBatteryHealthRuntimeDetails;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsCategory;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsDevicePerformance;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsDeviceScope;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsDeviceScores;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsDeviceStartupHistory;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsDeviceStartupProcess;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsDeviceStartupProcessPerformance;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsDeviceTimelineEvent;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsDeviceWithoutCloudIdentity;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsImpactingProcess;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsMetricHistory;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsModelScores;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsNotAutopilotReadyDevice;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsOverview;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsRemoteConnection;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsResourcePerformance;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsScoreHistory;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsSettings;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsWorkFromAnywhereMetric;
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsWorkFromAnywhereModelPerformance;
use Microsoft\Graph\Beta\Generated\Models\UserPFXCertificate;
use Microsoft\Graph\Beta\Generated\Models\VirtualEndpoint;
use Microsoft\Graph\Beta\Generated\Models\WindowsAutopilotDeploymentProfile;
use Microsoft\Graph\Beta\Generated\Models\WindowsAutopilotDeviceIdentity;
use Microsoft\Graph\Beta\Generated\Models\WindowsAutopilotSettings;
use Microsoft\Graph\Beta\Generated\Models\WindowsDriverUpdateProfile;
use Microsoft\Graph\Beta\Generated\Models\WindowsFeatureUpdateProfile;
use Microsoft\Graph\Beta\Generated\Models\WindowsInformationProtectionAppLearningSummary;
use Microsoft\Graph\Beta\Generated\Models\WindowsInformationProtectionNetworkLearningSummary;
use Microsoft\Graph\Beta\Generated\Models\WindowsMalwareInformation;
use Microsoft\Graph\Beta\Generated\Models\WindowsMalwareOverview;
use Microsoft\Graph\Beta\Generated\Models\WindowsQualityUpdateProfile;
use Microsoft\Graph\Beta\Generated\Models\WindowsUpdateCatalogItem;
use Microsoft\Graph\Beta\Generated\Models\ZebraFotaArtifact;
use Microsoft\Graph\Beta\Generated\Models\ZebraFotaConnector;
use Microsoft\Graph\Beta\Generated\Models\ZebraFotaDeployment;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagement extends Entity implements Parsable 
{
    /**
     * Instantiates a new DeviceManagement and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->getBackingStore()->get('accountMoveCompletionDateTime');
    }

    /**
     * Gets the adminConsent property value. Admin consent information.
     * @return AdminConsent|null
    */
    public function getAdminConsent(): ?AdminConsent {
        return $this->getBackingStore()->get('adminConsent');
    }

    /**
     * Gets the advancedThreatProtectionOnboardingStateSummary property value. The summary state of ATP onboarding state for this account.
     * @return AdvancedThreatProtectionOnboardingStateSummary|null
    */
    public function getAdvancedThreatProtectionOnboardingStateSummary(): ?AdvancedThreatProtectionOnboardingStateSummary {
        return $this->getBackingStore()->get('advancedThreatProtectionOnboardingStateSummary');
    }

    /**
     * Gets the androidDeviceOwnerEnrollmentProfiles property value. Android device owner enrollment profile entities.
     * @return array<AndroidDeviceOwnerEnrollmentProfile>|null
    */
    public function getAndroidDeviceOwnerEnrollmentProfiles(): ?array {
        return $this->getBackingStore()->get('androidDeviceOwnerEnrollmentProfiles');
    }

    /**
     * Gets the androidForWorkAppConfigurationSchemas property value. Android for Work app configuration schema entities.
     * @return array<AndroidForWorkAppConfigurationSchema>|null
    */
    public function getAndroidForWorkAppConfigurationSchemas(): ?array {
        return $this->getBackingStore()->get('androidForWorkAppConfigurationSchemas');
    }

    /**
     * Gets the androidForWorkEnrollmentProfiles property value. Android for Work enrollment profile entities.
     * @return array<AndroidForWorkEnrollmentProfile>|null
    */
    public function getAndroidForWorkEnrollmentProfiles(): ?array {
        return $this->getBackingStore()->get('androidForWorkEnrollmentProfiles');
    }

    /**
     * Gets the androidForWorkSettings property value. The singleton Android for Work settings entity.
     * @return AndroidForWorkSettings|null
    */
    public function getAndroidForWorkSettings(): ?AndroidForWorkSettings {
        return $this->getBackingStore()->get('androidForWorkSettings');
    }

    /**
     * Gets the androidManagedStoreAccountEnterpriseSettings property value. The singleton Android managed store account enterprise settings entity.
     * @return AndroidManagedStoreAccountEnterpriseSettings|null
    */
    public function getAndroidManagedStoreAccountEnterpriseSettings(): ?AndroidManagedStoreAccountEnterpriseSettings {
        return $this->getBackingStore()->get('androidManagedStoreAccountEnterpriseSettings');
    }

    /**
     * Gets the androidManagedStoreAppConfigurationSchemas property value. Android Enterprise app configuration schema entities.
     * @return array<AndroidManagedStoreAppConfigurationSchema>|null
    */
    public function getAndroidManagedStoreAppConfigurationSchemas(): ?array {
        return $this->getBackingStore()->get('androidManagedStoreAppConfigurationSchemas');
    }

    /**
     * Gets the applePushNotificationCertificate property value. Apple push notification certificate.
     * @return ApplePushNotificationCertificate|null
    */
    public function getApplePushNotificationCertificate(): ?ApplePushNotificationCertificate {
        return $this->getBackingStore()->get('applePushNotificationCertificate');
    }

    /**
     * Gets the appleUserInitiatedEnrollmentProfiles property value. Apple user initiated enrollment profiles
     * @return array<AppleUserInitiatedEnrollmentProfile>|null
    */
    public function getAppleUserInitiatedEnrollmentProfiles(): ?array {
        return $this->getBackingStore()->get('appleUserInitiatedEnrollmentProfiles');
    }

    /**
     * Gets the assignmentFilters property value. The list of assignment filters
     * @return array<DeviceAndAppManagementAssignmentFilter>|null
    */
    public function getAssignmentFilters(): ?array {
        return $this->getBackingStore()->get('assignmentFilters');
    }

    /**
     * Gets the auditEvents property value. The Audit Events
     * @return array<AuditEvent>|null
    */
    public function getAuditEvents(): ?array {
        return $this->getBackingStore()->get('auditEvents');
    }

    /**
     * Gets the autopilotEvents property value. The list of autopilot events for the tenant.
     * @return array<DeviceManagementAutopilotEvent>|null
    */
    public function getAutopilotEvents(): ?array {
        return $this->getBackingStore()->get('autopilotEvents');
    }

    /**
     * Gets the cartToClassAssociations property value. The Cart To Class Associations.
     * @return array<CartToClassAssociation>|null
    */
    public function getCartToClassAssociations(): ?array {
        return $this->getBackingStore()->get('cartToClassAssociations');
    }

    /**
     * Gets the categories property value. The available categories
     * @return array<DeviceManagementSettingCategory>|null
    */
    public function getCategories(): ?array {
        return $this->getBackingStore()->get('categories');
    }

    /**
     * Gets the certificateConnectorDetails property value. Collection of certificate connector details, each associated with a corresponding Intune Certificate Connector.
     * @return array<CertificateConnectorDetails>|null
    */
    public function getCertificateConnectorDetails(): ?array {
        return $this->getBackingStore()->get('certificateConnectorDetails');
    }

    /**
     * Gets the chromeOSOnboardingSettings property value. Collection of ChromeOSOnboardingSettings settings associated with account.
     * @return array<ChromeOSOnboardingSettings>|null
    */
    public function getChromeOSOnboardingSettings(): ?array {
        return $this->getBackingStore()->get('chromeOSOnboardingSettings');
    }

    /**
     * Gets the cloudPCConnectivityIssues property value. The list of CloudPC Connectivity Issue.
     * @return array<CloudPCConnectivityIssue>|null
    */
    public function getCloudPCConnectivityIssues(): ?array {
        return $this->getBackingStore()->get('cloudPCConnectivityIssues');
    }

    /**
     * Gets the comanagedDevices property value. The list of co-managed devices report
     * @return array<ManagedDevice>|null
    */
    public function getComanagedDevices(): ?array {
        return $this->getBackingStore()->get('comanagedDevices');
    }

    /**
     * Gets the comanagementEligibleDevices property value. The list of co-management eligible devices report
     * @return array<ComanagementEligibleDevice>|null
    */
    public function getComanagementEligibleDevices(): ?array {
        return $this->getBackingStore()->get('comanagementEligibleDevices');
    }

    /**
     * Gets the complianceCategories property value. List of all compliance categories
     * @return array<DeviceManagementConfigurationCategory>|null
    */
    public function getComplianceCategories(): ?array {
        return $this->getBackingStore()->get('complianceCategories');
    }

    /**
     * Gets the complianceManagementPartners property value. The list of Compliance Management Partners configured by the tenant.
     * @return array<ComplianceManagementPartner>|null
    */
    public function getComplianceManagementPartners(): ?array {
        return $this->getBackingStore()->get('complianceManagementPartners');
    }

    /**
     * Gets the compliancePolicies property value. List of all compliance policies
     * @return array<DeviceManagementCompliancePolicy>|null
    */
    public function getCompliancePolicies(): ?array {
        return $this->getBackingStore()->get('compliancePolicies');
    }

    /**
     * Gets the complianceSettings property value. List of all ComplianceSettings
     * @return array<DeviceManagementConfigurationSettingDefinition>|null
    */
    public function getComplianceSettings(): ?array {
        return $this->getBackingStore()->get('complianceSettings');
    }

    /**
     * Gets the conditionalAccessSettings property value. The Exchange on premises conditional access settings. On premises conditional access will require devices to be both enrolled and compliant for mail access
     * @return OnPremisesConditionalAccessSettings|null
    */
    public function getConditionalAccessSettings(): ?OnPremisesConditionalAccessSettings {
        return $this->getBackingStore()->get('conditionalAccessSettings');
    }

    /**
     * Gets the configManagerCollections property value. A list of ConfigManagerCollection
     * @return array<ConfigManagerCollection>|null
    */
    public function getConfigManagerCollections(): ?array {
        return $this->getBackingStore()->get('configManagerCollections');
    }

    /**
     * Gets the configurationCategories property value. List of all Configuration Categories
     * @return array<DeviceManagementConfigurationCategory>|null
    */
    public function getConfigurationCategories(): ?array {
        return $this->getBackingStore()->get('configurationCategories');
    }

    /**
     * Gets the configurationPolicies property value. List of all Configuration policies
     * @return array<DeviceManagementConfigurationPolicy>|null
    */
    public function getConfigurationPolicies(): ?array {
        return $this->getBackingStore()->get('configurationPolicies');
    }

    /**
     * Gets the configurationPolicyTemplates property value. List of all templates
     * @return array<DeviceManagementConfigurationPolicyTemplate>|null
    */
    public function getConfigurationPolicyTemplates(): ?array {
        return $this->getBackingStore()->get('configurationPolicyTemplates');
    }

    /**
     * Gets the configurationSettings property value. List of all ConfigurationSettings
     * @return array<DeviceManagementConfigurationSettingDefinition>|null
    */
    public function getConfigurationSettings(): ?array {
        return $this->getBackingStore()->get('configurationSettings');
    }

    /**
     * Gets the connectorStatus property value. The list of connector status for the tenant.
     * @return array<ConnectorStatusDetails>|null
    */
    public function getConnectorStatus(): ?array {
        return $this->getBackingStore()->get('connectorStatus');
    }

    /**
     * Gets the dataProcessorServiceForWindowsFeaturesOnboarding property value. A configuration entity for MEM features that utilize Data Processor Service for Windows (DPSW) data.
     * @return DataProcessorServiceForWindowsFeaturesOnboarding|null
    */
    public function getDataProcessorServiceForWindowsFeaturesOnboarding(): ?DataProcessorServiceForWindowsFeaturesOnboarding {
        return $this->getBackingStore()->get('dataProcessorServiceForWindowsFeaturesOnboarding');
    }

    /**
     * Gets the dataSharingConsents property value. Data sharing consents.
     * @return array<DataSharingConsent>|null
    */
    public function getDataSharingConsents(): ?array {
        return $this->getBackingStore()->get('dataSharingConsents');
    }

    /**
     * Gets the depOnboardingSettings property value. This collections of multiple DEP tokens per-tenant.
     * @return array<DepOnboardingSetting>|null
    */
    public function getDepOnboardingSettings(): ?array {
        return $this->getBackingStore()->get('depOnboardingSettings');
    }

    /**
     * Gets the derivedCredentials property value. Collection of Derived credential settings associated with account.
     * @return array<DeviceManagementDerivedCredentialSettings>|null
    */
    public function getDerivedCredentials(): ?array {
        return $this->getBackingStore()->get('derivedCredentials');
    }

    /**
     * Gets the detectedApps property value. The list of detected apps associated with a device.
     * @return array<DetectedApp>|null
    */
    public function getDetectedApps(): ?array {
        return $this->getBackingStore()->get('detectedApps');
    }

    /**
     * Gets the deviceCategories property value. The list of device categories with the tenant.
     * @return array<DeviceCategory>|null
    */
    public function getDeviceCategories(): ?array {
        return $this->getBackingStore()->get('deviceCategories');
    }

    /**
     * Gets the deviceCompliancePolicies property value. The device compliance policies.
     * @return array<DeviceCompliancePolicy>|null
    */
    public function getDeviceCompliancePolicies(): ?array {
        return $this->getBackingStore()->get('deviceCompliancePolicies');
    }

    /**
     * Gets the deviceCompliancePolicyDeviceStateSummary property value. The device compliance state summary for this account.
     * @return DeviceCompliancePolicyDeviceStateSummary|null
    */
    public function getDeviceCompliancePolicyDeviceStateSummary(): ?DeviceCompliancePolicyDeviceStateSummary {
        return $this->getBackingStore()->get('deviceCompliancePolicyDeviceStateSummary');
    }

    /**
     * Gets the deviceCompliancePolicySettingStateSummaries property value. The summary states of compliance policy settings for this account.
     * @return array<DeviceCompliancePolicySettingStateSummary>|null
    */
    public function getDeviceCompliancePolicySettingStateSummaries(): ?array {
        return $this->getBackingStore()->get('deviceCompliancePolicySettingStateSummaries');
    }

    /**
     * Gets the deviceComplianceReportSummarizationDateTime property value. The last requested time of device compliance reporting for this account. This property is read-only.
     * @return DateTime|null
    */
    public function getDeviceComplianceReportSummarizationDateTime(): ?DateTime {
        return $this->getBackingStore()->get('deviceComplianceReportSummarizationDateTime');
    }

    /**
     * Gets the deviceComplianceScripts property value. The list of device compliance scripts associated with the tenant.
     * @return array<DeviceComplianceScript>|null
    */
    public function getDeviceComplianceScripts(): ?array {
        return $this->getBackingStore()->get('deviceComplianceScripts');
    }

    /**
     * Gets the deviceConfigurationConflictSummary property value. Summary of policies in conflict state for this account.
     * @return array<DeviceConfigurationConflictSummary>|null
    */
    public function getDeviceConfigurationConflictSummary(): ?array {
        return $this->getBackingStore()->get('deviceConfigurationConflictSummary');
    }

    /**
     * Gets the deviceConfigurationDeviceStateSummaries property value. The device configuration device state summary for this account.
     * @return DeviceConfigurationDeviceStateSummary|null
    */
    public function getDeviceConfigurationDeviceStateSummaries(): ?DeviceConfigurationDeviceStateSummary {
        return $this->getBackingStore()->get('deviceConfigurationDeviceStateSummaries');
    }

    /**
     * Gets the deviceConfigurationRestrictedAppsViolations property value. Restricted apps violations for this account.
     * @return array<RestrictedAppsViolation>|null
    */
    public function getDeviceConfigurationRestrictedAppsViolations(): ?array {
        return $this->getBackingStore()->get('deviceConfigurationRestrictedAppsViolations');
    }

    /**
     * Gets the deviceConfigurations property value. The device configurations.
     * @return array<DeviceConfiguration>|null
    */
    public function getDeviceConfigurations(): ?array {
        return $this->getBackingStore()->get('deviceConfigurations');
    }

    /**
     * Gets the deviceConfigurationsAllManagedDeviceCertificateStates property value. Summary of all certificates for all devices.
     * @return array<ManagedAllDeviceCertificateState>|null
    */
    public function getDeviceConfigurationsAllManagedDeviceCertificateStates(): ?array {
        return $this->getBackingStore()->get('deviceConfigurationsAllManagedDeviceCertificateStates');
    }

    /**
     * Gets the deviceConfigurationUserStateSummaries property value. The device configuration user state summary for this account.
     * @return DeviceConfigurationUserStateSummary|null
    */
    public function getDeviceConfigurationUserStateSummaries(): ?DeviceConfigurationUserStateSummary {
        return $this->getBackingStore()->get('deviceConfigurationUserStateSummaries');
    }

    /**
     * Gets the deviceCustomAttributeShellScripts property value. The list of device custom attribute shell scripts associated with the tenant.
     * @return array<DeviceCustomAttributeShellScript>|null
    */
    public function getDeviceCustomAttributeShellScripts(): ?array {
        return $this->getBackingStore()->get('deviceCustomAttributeShellScripts');
    }

    /**
     * Gets the deviceEnrollmentConfigurations property value. The list of device enrollment configurations
     * @return array<DeviceEnrollmentConfiguration>|null
    */
    public function getDeviceEnrollmentConfigurations(): ?array {
        return $this->getBackingStore()->get('deviceEnrollmentConfigurations');
    }

    /**
     * Gets the deviceHealthScripts property value. The list of device health scripts associated with the tenant.
     * @return array<DeviceHealthScript>|null
    */
    public function getDeviceHealthScripts(): ?array {
        return $this->getBackingStore()->get('deviceHealthScripts');
    }

    /**
     * Gets the deviceManagementPartners property value. The list of Device Management Partners configured by the tenant.
     * @return array<DeviceManagementPartner>|null
    */
    public function getDeviceManagementPartners(): ?array {
        return $this->getBackingStore()->get('deviceManagementPartners');
    }

    /**
     * Gets the deviceManagementScripts property value. The list of device management scripts associated with the tenant.
     * @return array<DeviceManagementScript>|null
    */
    public function getDeviceManagementScripts(): ?array {
        return $this->getBackingStore()->get('deviceManagementScripts');
    }

    /**
     * Gets the deviceProtectionOverview property value. Device protection overview.
     * @return DeviceProtectionOverview|null
    */
    public function getDeviceProtectionOverview(): ?DeviceProtectionOverview {
        return $this->getBackingStore()->get('deviceProtectionOverview');
    }

    /**
     * Gets the deviceShellScripts property value. The list of device shell scripts associated with the tenant.
     * @return array<DeviceShellScript>|null
    */
    public function getDeviceShellScripts(): ?array {
        return $this->getBackingStore()->get('deviceShellScripts');
    }

    /**
     * Gets the domainJoinConnectors property value. A list of connector objects.
     * @return array<DeviceManagementDomainJoinConnector>|null
    */
    public function getDomainJoinConnectors(): ?array {
        return $this->getBackingStore()->get('domainJoinConnectors');
    }

    /**
     * Gets the embeddedSIMActivationCodePools property value. The embedded SIM activation code pools created by this account.
     * @return array<EmbeddedSIMActivationCodePool>|null
    */
    public function getEmbeddedSIMActivationCodePools(): ?array {
        return $this->getBackingStore()->get('embeddedSIMActivationCodePools');
    }

    /**
     * Gets the exchangeConnectors property value. The list of Exchange Connectors configured by the tenant.
     * @return array<DeviceManagementExchangeConnector>|null
    */
    public function getExchangeConnectors(): ?array {
        return $this->getBackingStore()->get('exchangeConnectors');
    }

    /**
     * Gets the exchangeOnPremisesPolicies property value. The list of Exchange On Premisis policies configured by the tenant.
     * @return array<DeviceManagementExchangeOnPremisesPolicy>|null
    */
    public function getExchangeOnPremisesPolicies(): ?array {
        return $this->getBackingStore()->get('exchangeOnPremisesPolicies');
    }

    /**
     * Gets the exchangeOnPremisesPolicy property value. The policy which controls mobile device access to Exchange On Premises
     * @return DeviceManagementExchangeOnPremisesPolicy|null
    */
    public function getExchangeOnPremisesPolicy(): ?DeviceManagementExchangeOnPremisesPolicy {
        return $this->getBackingStore()->get('exchangeOnPremisesPolicy');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accountMoveCompletionDateTime' => fn(ParseNode $n) => $o->setAccountMoveCompletionDateTime($n->getDateTimeValue()),
            'adminConsent' => fn(ParseNode $n) => $o->setAdminConsent($n->getObjectValue([AdminConsent::class, 'createFromDiscriminatorValue'])),
            'advancedThreatProtectionOnboardingStateSummary' => fn(ParseNode $n) => $o->setAdvancedThreatProtectionOnboardingStateSummary($n->getObjectValue([AdvancedThreatProtectionOnboardingStateSummary::class, 'createFromDiscriminatorValue'])),
            'androidDeviceOwnerEnrollmentProfiles' => fn(ParseNode $n) => $o->setAndroidDeviceOwnerEnrollmentProfiles($n->getCollectionOfObjectValues([AndroidDeviceOwnerEnrollmentProfile::class, 'createFromDiscriminatorValue'])),
            'androidForWorkAppConfigurationSchemas' => fn(ParseNode $n) => $o->setAndroidForWorkAppConfigurationSchemas($n->getCollectionOfObjectValues([AndroidForWorkAppConfigurationSchema::class, 'createFromDiscriminatorValue'])),
            'androidForWorkEnrollmentProfiles' => fn(ParseNode $n) => $o->setAndroidForWorkEnrollmentProfiles($n->getCollectionOfObjectValues([AndroidForWorkEnrollmentProfile::class, 'createFromDiscriminatorValue'])),
            'androidForWorkSettings' => fn(ParseNode $n) => $o->setAndroidForWorkSettings($n->getObjectValue([AndroidForWorkSettings::class, 'createFromDiscriminatorValue'])),
            'androidManagedStoreAccountEnterpriseSettings' => fn(ParseNode $n) => $o->setAndroidManagedStoreAccountEnterpriseSettings($n->getObjectValue([AndroidManagedStoreAccountEnterpriseSettings::class, 'createFromDiscriminatorValue'])),
            'androidManagedStoreAppConfigurationSchemas' => fn(ParseNode $n) => $o->setAndroidManagedStoreAppConfigurationSchemas($n->getCollectionOfObjectValues([AndroidManagedStoreAppConfigurationSchema::class, 'createFromDiscriminatorValue'])),
            'applePushNotificationCertificate' => fn(ParseNode $n) => $o->setApplePushNotificationCertificate($n->getObjectValue([ApplePushNotificationCertificate::class, 'createFromDiscriminatorValue'])),
            'appleUserInitiatedEnrollmentProfiles' => fn(ParseNode $n) => $o->setAppleUserInitiatedEnrollmentProfiles($n->getCollectionOfObjectValues([AppleUserInitiatedEnrollmentProfile::class, 'createFromDiscriminatorValue'])),
            'assignmentFilters' => fn(ParseNode $n) => $o->setAssignmentFilters($n->getCollectionOfObjectValues([DeviceAndAppManagementAssignmentFilter::class, 'createFromDiscriminatorValue'])),
            'auditEvents' => fn(ParseNode $n) => $o->setAuditEvents($n->getCollectionOfObjectValues([AuditEvent::class, 'createFromDiscriminatorValue'])),
            'autopilotEvents' => fn(ParseNode $n) => $o->setAutopilotEvents($n->getCollectionOfObjectValues([DeviceManagementAutopilotEvent::class, 'createFromDiscriminatorValue'])),
            'cartToClassAssociations' => fn(ParseNode $n) => $o->setCartToClassAssociations($n->getCollectionOfObjectValues([CartToClassAssociation::class, 'createFromDiscriminatorValue'])),
            'categories' => fn(ParseNode $n) => $o->setCategories($n->getCollectionOfObjectValues([DeviceManagementSettingCategory::class, 'createFromDiscriminatorValue'])),
            'certificateConnectorDetails' => fn(ParseNode $n) => $o->setCertificateConnectorDetails($n->getCollectionOfObjectValues([CertificateConnectorDetails::class, 'createFromDiscriminatorValue'])),
            'chromeOSOnboardingSettings' => fn(ParseNode $n) => $o->setChromeOSOnboardingSettings($n->getCollectionOfObjectValues([ChromeOSOnboardingSettings::class, 'createFromDiscriminatorValue'])),
            'cloudPCConnectivityIssues' => fn(ParseNode $n) => $o->setCloudPCConnectivityIssues($n->getCollectionOfObjectValues([CloudPCConnectivityIssue::class, 'createFromDiscriminatorValue'])),
            'comanagedDevices' => fn(ParseNode $n) => $o->setComanagedDevices($n->getCollectionOfObjectValues([ManagedDevice::class, 'createFromDiscriminatorValue'])),
            'comanagementEligibleDevices' => fn(ParseNode $n) => $o->setComanagementEligibleDevices($n->getCollectionOfObjectValues([ComanagementEligibleDevice::class, 'createFromDiscriminatorValue'])),
            'complianceCategories' => fn(ParseNode $n) => $o->setComplianceCategories($n->getCollectionOfObjectValues([DeviceManagementConfigurationCategory::class, 'createFromDiscriminatorValue'])),
            'complianceManagementPartners' => fn(ParseNode $n) => $o->setComplianceManagementPartners($n->getCollectionOfObjectValues([ComplianceManagementPartner::class, 'createFromDiscriminatorValue'])),
            'compliancePolicies' => fn(ParseNode $n) => $o->setCompliancePolicies($n->getCollectionOfObjectValues([DeviceManagementCompliancePolicy::class, 'createFromDiscriminatorValue'])),
            'complianceSettings' => fn(ParseNode $n) => $o->setComplianceSettings($n->getCollectionOfObjectValues([DeviceManagementConfigurationSettingDefinition::class, 'createFromDiscriminatorValue'])),
            'conditionalAccessSettings' => fn(ParseNode $n) => $o->setConditionalAccessSettings($n->getObjectValue([OnPremisesConditionalAccessSettings::class, 'createFromDiscriminatorValue'])),
            'configManagerCollections' => fn(ParseNode $n) => $o->setConfigManagerCollections($n->getCollectionOfObjectValues([ConfigManagerCollection::class, 'createFromDiscriminatorValue'])),
            'configurationCategories' => fn(ParseNode $n) => $o->setConfigurationCategories($n->getCollectionOfObjectValues([DeviceManagementConfigurationCategory::class, 'createFromDiscriminatorValue'])),
            'configurationPolicies' => fn(ParseNode $n) => $o->setConfigurationPolicies($n->getCollectionOfObjectValues([DeviceManagementConfigurationPolicy::class, 'createFromDiscriminatorValue'])),
            'configurationPolicyTemplates' => fn(ParseNode $n) => $o->setConfigurationPolicyTemplates($n->getCollectionOfObjectValues([DeviceManagementConfigurationPolicyTemplate::class, 'createFromDiscriminatorValue'])),
            'configurationSettings' => fn(ParseNode $n) => $o->setConfigurationSettings($n->getCollectionOfObjectValues([DeviceManagementConfigurationSettingDefinition::class, 'createFromDiscriminatorValue'])),
            'connectorStatus' => fn(ParseNode $n) => $o->setConnectorStatus($n->getCollectionOfObjectValues([ConnectorStatusDetails::class, 'createFromDiscriminatorValue'])),
            'dataProcessorServiceForWindowsFeaturesOnboarding' => fn(ParseNode $n) => $o->setDataProcessorServiceForWindowsFeaturesOnboarding($n->getObjectValue([DataProcessorServiceForWindowsFeaturesOnboarding::class, 'createFromDiscriminatorValue'])),
            'dataSharingConsents' => fn(ParseNode $n) => $o->setDataSharingConsents($n->getCollectionOfObjectValues([DataSharingConsent::class, 'createFromDiscriminatorValue'])),
            'depOnboardingSettings' => fn(ParseNode $n) => $o->setDepOnboardingSettings($n->getCollectionOfObjectValues([DepOnboardingSetting::class, 'createFromDiscriminatorValue'])),
            'derivedCredentials' => fn(ParseNode $n) => $o->setDerivedCredentials($n->getCollectionOfObjectValues([DeviceManagementDerivedCredentialSettings::class, 'createFromDiscriminatorValue'])),
            'detectedApps' => fn(ParseNode $n) => $o->setDetectedApps($n->getCollectionOfObjectValues([DetectedApp::class, 'createFromDiscriminatorValue'])),
            'deviceCategories' => fn(ParseNode $n) => $o->setDeviceCategories($n->getCollectionOfObjectValues([DeviceCategory::class, 'createFromDiscriminatorValue'])),
            'deviceCompliancePolicies' => fn(ParseNode $n) => $o->setDeviceCompliancePolicies($n->getCollectionOfObjectValues([DeviceCompliancePolicy::class, 'createFromDiscriminatorValue'])),
            'deviceCompliancePolicyDeviceStateSummary' => fn(ParseNode $n) => $o->setDeviceCompliancePolicyDeviceStateSummary($n->getObjectValue([DeviceCompliancePolicyDeviceStateSummary::class, 'createFromDiscriminatorValue'])),
            'deviceCompliancePolicySettingStateSummaries' => fn(ParseNode $n) => $o->setDeviceCompliancePolicySettingStateSummaries($n->getCollectionOfObjectValues([DeviceCompliancePolicySettingStateSummary::class, 'createFromDiscriminatorValue'])),
            'deviceComplianceReportSummarizationDateTime' => fn(ParseNode $n) => $o->setDeviceComplianceReportSummarizationDateTime($n->getDateTimeValue()),
            'deviceComplianceScripts' => fn(ParseNode $n) => $o->setDeviceComplianceScripts($n->getCollectionOfObjectValues([DeviceComplianceScript::class, 'createFromDiscriminatorValue'])),
            'deviceConfigurationConflictSummary' => fn(ParseNode $n) => $o->setDeviceConfigurationConflictSummary($n->getCollectionOfObjectValues([DeviceConfigurationConflictSummary::class, 'createFromDiscriminatorValue'])),
            'deviceConfigurationDeviceStateSummaries' => fn(ParseNode $n) => $o->setDeviceConfigurationDeviceStateSummaries($n->getObjectValue([DeviceConfigurationDeviceStateSummary::class, 'createFromDiscriminatorValue'])),
            'deviceConfigurationRestrictedAppsViolations' => fn(ParseNode $n) => $o->setDeviceConfigurationRestrictedAppsViolations($n->getCollectionOfObjectValues([RestrictedAppsViolation::class, 'createFromDiscriminatorValue'])),
            'deviceConfigurations' => fn(ParseNode $n) => $o->setDeviceConfigurations($n->getCollectionOfObjectValues([DeviceConfiguration::class, 'createFromDiscriminatorValue'])),
            'deviceConfigurationsAllManagedDeviceCertificateStates' => fn(ParseNode $n) => $o->setDeviceConfigurationsAllManagedDeviceCertificateStates($n->getCollectionOfObjectValues([ManagedAllDeviceCertificateState::class, 'createFromDiscriminatorValue'])),
            'deviceConfigurationUserStateSummaries' => fn(ParseNode $n) => $o->setDeviceConfigurationUserStateSummaries($n->getObjectValue([DeviceConfigurationUserStateSummary::class, 'createFromDiscriminatorValue'])),
            'deviceCustomAttributeShellScripts' => fn(ParseNode $n) => $o->setDeviceCustomAttributeShellScripts($n->getCollectionOfObjectValues([DeviceCustomAttributeShellScript::class, 'createFromDiscriminatorValue'])),
            'deviceEnrollmentConfigurations' => fn(ParseNode $n) => $o->setDeviceEnrollmentConfigurations($n->getCollectionOfObjectValues([DeviceEnrollmentConfiguration::class, 'createFromDiscriminatorValue'])),
            'deviceHealthScripts' => fn(ParseNode $n) => $o->setDeviceHealthScripts($n->getCollectionOfObjectValues([DeviceHealthScript::class, 'createFromDiscriminatorValue'])),
            'deviceManagementPartners' => fn(ParseNode $n) => $o->setDeviceManagementPartners($n->getCollectionOfObjectValues([DeviceManagementPartner::class, 'createFromDiscriminatorValue'])),
            'deviceManagementScripts' => fn(ParseNode $n) => $o->setDeviceManagementScripts($n->getCollectionOfObjectValues([DeviceManagementScript::class, 'createFromDiscriminatorValue'])),
            'deviceProtectionOverview' => fn(ParseNode $n) => $o->setDeviceProtectionOverview($n->getObjectValue([DeviceProtectionOverview::class, 'createFromDiscriminatorValue'])),
            'deviceShellScripts' => fn(ParseNode $n) => $o->setDeviceShellScripts($n->getCollectionOfObjectValues([DeviceShellScript::class, 'createFromDiscriminatorValue'])),
            'domainJoinConnectors' => fn(ParseNode $n) => $o->setDomainJoinConnectors($n->getCollectionOfObjectValues([DeviceManagementDomainJoinConnector::class, 'createFromDiscriminatorValue'])),
            'embeddedSIMActivationCodePools' => fn(ParseNode $n) => $o->setEmbeddedSIMActivationCodePools($n->getCollectionOfObjectValues([EmbeddedSIMActivationCodePool::class, 'createFromDiscriminatorValue'])),
            'exchangeConnectors' => fn(ParseNode $n) => $o->setExchangeConnectors($n->getCollectionOfObjectValues([DeviceManagementExchangeConnector::class, 'createFromDiscriminatorValue'])),
            'exchangeOnPremisesPolicies' => fn(ParseNode $n) => $o->setExchangeOnPremisesPolicies($n->getCollectionOfObjectValues([DeviceManagementExchangeOnPremisesPolicy::class, 'createFromDiscriminatorValue'])),
            'exchangeOnPremisesPolicy' => fn(ParseNode $n) => $o->setExchangeOnPremisesPolicy($n->getObjectValue([DeviceManagementExchangeOnPremisesPolicy::class, 'createFromDiscriminatorValue'])),
            'groupPolicyCategories' => fn(ParseNode $n) => $o->setGroupPolicyCategories($n->getCollectionOfObjectValues([GroupPolicyCategory::class, 'createFromDiscriminatorValue'])),
            'groupPolicyConfigurations' => fn(ParseNode $n) => $o->setGroupPolicyConfigurations($n->getCollectionOfObjectValues([GroupPolicyConfiguration::class, 'createFromDiscriminatorValue'])),
            'groupPolicyDefinitionFiles' => fn(ParseNode $n) => $o->setGroupPolicyDefinitionFiles($n->getCollectionOfObjectValues([GroupPolicyDefinitionFile::class, 'createFromDiscriminatorValue'])),
            'groupPolicyDefinitions' => fn(ParseNode $n) => $o->setGroupPolicyDefinitions($n->getCollectionOfObjectValues([GroupPolicyDefinition::class, 'createFromDiscriminatorValue'])),
            'groupPolicyMigrationReports' => fn(ParseNode $n) => $o->setGroupPolicyMigrationReports($n->getCollectionOfObjectValues([GroupPolicyMigrationReport::class, 'createFromDiscriminatorValue'])),
            'groupPolicyObjectFiles' => fn(ParseNode $n) => $o->setGroupPolicyObjectFiles($n->getCollectionOfObjectValues([GroupPolicyObjectFile::class, 'createFromDiscriminatorValue'])),
            'groupPolicyUploadedDefinitionFiles' => fn(ParseNode $n) => $o->setGroupPolicyUploadedDefinitionFiles($n->getCollectionOfObjectValues([GroupPolicyUploadedDefinitionFile::class, 'createFromDiscriminatorValue'])),
            'importedDeviceIdentities' => fn(ParseNode $n) => $o->setImportedDeviceIdentities($n->getCollectionOfObjectValues([ImportedDeviceIdentity::class, 'createFromDiscriminatorValue'])),
            'importedWindowsAutopilotDeviceIdentities' => fn(ParseNode $n) => $o->setImportedWindowsAutopilotDeviceIdentities($n->getCollectionOfObjectValues([ImportedWindowsAutopilotDeviceIdentity::class, 'createFromDiscriminatorValue'])),
            'intents' => fn(ParseNode $n) => $o->setIntents($n->getCollectionOfObjectValues([DeviceManagementIntent::class, 'createFromDiscriminatorValue'])),
            'intuneAccountId' => fn(ParseNode $n) => $o->setIntuneAccountId($n->getStringValue()),
            'intuneBrand' => fn(ParseNode $n) => $o->setIntuneBrand($n->getObjectValue([IntuneBrand::class, 'createFromDiscriminatorValue'])),
            'intuneBrandingProfiles' => fn(ParseNode $n) => $o->setIntuneBrandingProfiles($n->getCollectionOfObjectValues([IntuneBrandingProfile::class, 'createFromDiscriminatorValue'])),
            'iosUpdateStatuses' => fn(ParseNode $n) => $o->setIosUpdateStatuses($n->getCollectionOfObjectValues([IosUpdateDeviceStatus::class, 'createFromDiscriminatorValue'])),
            'lastReportAggregationDateTime' => fn(ParseNode $n) => $o->setLastReportAggregationDateTime($n->getDateTimeValue()),
            'legacyPcManangementEnabled' => fn(ParseNode $n) => $o->setLegacyPcManangementEnabled($n->getBooleanValue()),
            'macOSSoftwareUpdateAccountSummaries' => fn(ParseNode $n) => $o->setMacOSSoftwareUpdateAccountSummaries($n->getCollectionOfObjectValues([MacOSSoftwareUpdateAccountSummary::class, 'createFromDiscriminatorValue'])),
            'managedDeviceCleanupSettings' => fn(ParseNode $n) => $o->setManagedDeviceCleanupSettings($n->getObjectValue([ManagedDeviceCleanupSettings::class, 'createFromDiscriminatorValue'])),
            'managedDeviceEncryptionStates' => fn(ParseNode $n) => $o->setManagedDeviceEncryptionStates($n->getCollectionOfObjectValues([ManagedDeviceEncryptionState::class, 'createFromDiscriminatorValue'])),
            'managedDeviceOverview' => fn(ParseNode $n) => $o->setManagedDeviceOverview($n->getObjectValue([ManagedDeviceOverview::class, 'createFromDiscriminatorValue'])),
            'managedDevices' => fn(ParseNode $n) => $o->setManagedDevices($n->getCollectionOfObjectValues([ManagedDevice::class, 'createFromDiscriminatorValue'])),
            'maximumDepTokens' => fn(ParseNode $n) => $o->setMaximumDepTokens($n->getIntegerValue()),
            'microsoftTunnelConfigurations' => fn(ParseNode $n) => $o->setMicrosoftTunnelConfigurations($n->getCollectionOfObjectValues([MicrosoftTunnelConfiguration::class, 'createFromDiscriminatorValue'])),
            'microsoftTunnelHealthThresholds' => fn(ParseNode $n) => $o->setMicrosoftTunnelHealthThresholds($n->getCollectionOfObjectValues([MicrosoftTunnelHealthThreshold::class, 'createFromDiscriminatorValue'])),
            'microsoftTunnelServerLogCollectionResponses' => fn(ParseNode $n) => $o->setMicrosoftTunnelServerLogCollectionResponses($n->getCollectionOfObjectValues([MicrosoftTunnelServerLogCollectionResponse::class, 'createFromDiscriminatorValue'])),
            'microsoftTunnelSites' => fn(ParseNode $n) => $o->setMicrosoftTunnelSites($n->getCollectionOfObjectValues([MicrosoftTunnelSite::class, 'createFromDiscriminatorValue'])),
            'mobileAppTroubleshootingEvents' => fn(ParseNode $n) => $o->setMobileAppTroubleshootingEvents($n->getCollectionOfObjectValues([MobileAppTroubleshootingEvent::class, 'createFromDiscriminatorValue'])),
            'mobileThreatDefenseConnectors' => fn(ParseNode $n) => $o->setMobileThreatDefenseConnectors($n->getCollectionOfObjectValues([MobileThreatDefenseConnector::class, 'createFromDiscriminatorValue'])),
            'monitoring' => fn(ParseNode $n) => $o->setMonitoring($n->getObjectValue([Monitoring::class, 'createFromDiscriminatorValue'])),
            'ndesConnectors' => fn(ParseNode $n) => $o->setNdesConnectors($n->getCollectionOfObjectValues([NdesConnector::class, 'createFromDiscriminatorValue'])),
            'notificationMessageTemplates' => fn(ParseNode $n) => $o->setNotificationMessageTemplates($n->getCollectionOfObjectValues([NotificationMessageTemplate::class, 'createFromDiscriminatorValue'])),
            'remoteActionAudits' => fn(ParseNode $n) => $o->setRemoteActionAudits($n->getCollectionOfObjectValues([RemoteActionAudit::class, 'createFromDiscriminatorValue'])),
            'remoteAssistancePartners' => fn(ParseNode $n) => $o->setRemoteAssistancePartners($n->getCollectionOfObjectValues([RemoteAssistancePartner::class, 'createFromDiscriminatorValue'])),
            'remoteAssistanceSettings' => fn(ParseNode $n) => $o->setRemoteAssistanceSettings($n->getObjectValue([RemoteAssistanceSettings::class, 'createFromDiscriminatorValue'])),
            'reports' => fn(ParseNode $n) => $o->setReports($n->getObjectValue([DeviceManagementReports::class, 'createFromDiscriminatorValue'])),
            'resourceAccessProfiles' => fn(ParseNode $n) => $o->setResourceAccessProfiles($n->getCollectionOfObjectValues([DeviceManagementResourceAccessProfileBase::class, 'createFromDiscriminatorValue'])),
            'resourceOperations' => fn(ParseNode $n) => $o->setResourceOperations($n->getCollectionOfObjectValues([ResourceOperation::class, 'createFromDiscriminatorValue'])),
            'reusablePolicySettings' => fn(ParseNode $n) => $o->setReusablePolicySettings($n->getCollectionOfObjectValues([DeviceManagementReusablePolicySetting::class, 'createFromDiscriminatorValue'])),
            'reusableSettings' => fn(ParseNode $n) => $o->setReusableSettings($n->getCollectionOfObjectValues([DeviceManagementConfigurationSettingDefinition::class, 'createFromDiscriminatorValue'])),
            'roleAssignments' => fn(ParseNode $n) => $o->setRoleAssignments($n->getCollectionOfObjectValues([DeviceAndAppManagementRoleAssignment::class, 'createFromDiscriminatorValue'])),
            'roleDefinitions' => fn(ParseNode $n) => $o->setRoleDefinitions($n->getCollectionOfObjectValues([RoleDefinition::class, 'createFromDiscriminatorValue'])),
            'roleScopeTags' => fn(ParseNode $n) => $o->setRoleScopeTags($n->getCollectionOfObjectValues([RoleScopeTag::class, 'createFromDiscriminatorValue'])),
            'serviceNowConnections' => fn(ParseNode $n) => $o->setServiceNowConnections($n->getCollectionOfObjectValues([ServiceNowConnection::class, 'createFromDiscriminatorValue'])),
            'settingDefinitions' => fn(ParseNode $n) => $o->setSettingDefinitions($n->getCollectionOfObjectValues([DeviceManagementSettingDefinition::class, 'createFromDiscriminatorValue'])),
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getObjectValue([DeviceManagementSettings::class, 'createFromDiscriminatorValue'])),
            'softwareUpdateStatusSummary' => fn(ParseNode $n) => $o->setSoftwareUpdateStatusSummary($n->getObjectValue([SoftwareUpdateStatusSummary::class, 'createFromDiscriminatorValue'])),
            'subscriptions' => fn(ParseNode $n) => $o->setSubscriptions($n->getEnumValue(DeviceManagementSubscriptions::class)),
            'subscriptionState' => fn(ParseNode $n) => $o->setSubscriptionState($n->getEnumValue(DeviceManagementSubscriptionState::class)),
            'telecomExpenseManagementPartners' => fn(ParseNode $n) => $o->setTelecomExpenseManagementPartners($n->getCollectionOfObjectValues([TelecomExpenseManagementPartner::class, 'createFromDiscriminatorValue'])),
            'templateInsights' => fn(ParseNode $n) => $o->setTemplateInsights($n->getCollectionOfObjectValues([DeviceManagementTemplateInsightsDefinition::class, 'createFromDiscriminatorValue'])),
            'templates' => fn(ParseNode $n) => $o->setTemplates($n->getCollectionOfObjectValues([DeviceManagementTemplate::class, 'createFromDiscriminatorValue'])),
            'templateSettings' => fn(ParseNode $n) => $o->setTemplateSettings($n->getCollectionOfObjectValues([DeviceManagementConfigurationSettingTemplate::class, 'createFromDiscriminatorValue'])),
            'tenantAttachRBAC' => fn(ParseNode $n) => $o->setTenantAttachRBAC($n->getObjectValue([TenantAttachRBAC::class, 'createFromDiscriminatorValue'])),
            'termsAndConditions' => fn(ParseNode $n) => $o->setTermsAndConditions($n->getCollectionOfObjectValues([TermsAndConditions::class, 'createFromDiscriminatorValue'])),
            'troubleshootingEvents' => fn(ParseNode $n) => $o->setTroubleshootingEvents($n->getCollectionOfObjectValues([DeviceManagementTroubleshootingEvent::class, 'createFromDiscriminatorValue'])),
            'unlicensedAdminstratorsEnabled' => fn(ParseNode $n) => $o->setUnlicensedAdminstratorsEnabled($n->getBooleanValue()),
            'userExperienceAnalyticsAnomaly' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsAnomaly($n->getCollectionOfObjectValues([UserExperienceAnalyticsAnomaly::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsAnomalyDevice' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsAnomalyDevice($n->getCollectionOfObjectValues([UserExperienceAnalyticsAnomalyDevice::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsAnomalySeverityOverview' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsAnomalySeverityOverview($n->getObjectValue([UserExperienceAnalyticsAnomalySeverityOverview::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsAppHealthApplicationPerformance' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsAppHealthApplicationPerformance($n->getCollectionOfObjectValues([UserExperienceAnalyticsAppHealthApplicationPerformance::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion($n->getCollectionOfObjectValues([UserExperienceAnalyticsAppHealthAppPerformanceByAppVersion::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails($n->getCollectionOfObjectValues([UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId($n->getCollectionOfObjectValues([UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion($n->getCollectionOfObjectValues([UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsAppHealthDeviceModelPerformance' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsAppHealthDeviceModelPerformance($n->getCollectionOfObjectValues([UserExperienceAnalyticsAppHealthDeviceModelPerformance::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsAppHealthDevicePerformance' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsAppHealthDevicePerformance($n->getCollectionOfObjectValues([UserExperienceAnalyticsAppHealthDevicePerformance::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsAppHealthDevicePerformanceDetails' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsAppHealthDevicePerformanceDetails($n->getCollectionOfObjectValues([UserExperienceAnalyticsAppHealthDevicePerformanceDetails::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsAppHealthOSVersionPerformance' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsAppHealthOSVersionPerformance($n->getCollectionOfObjectValues([UserExperienceAnalyticsAppHealthOSVersionPerformance::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsAppHealthOverview' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsAppHealthOverview($n->getObjectValue([UserExperienceAnalyticsCategory::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsBaselines' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsBaselines($n->getCollectionOfObjectValues([UserExperienceAnalyticsBaseline::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsBatteryHealthAppImpact' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsBatteryHealthAppImpact($n->getCollectionOfObjectValues([UserExperienceAnalyticsBatteryHealthAppImpact::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsBatteryHealthCapacityDetails' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsBatteryHealthCapacityDetails($n->getObjectValue([UserExperienceAnalyticsBatteryHealthCapacityDetails::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsBatteryHealthDeviceAppImpact' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsBatteryHealthDeviceAppImpact($n->getCollectionOfObjectValues([UserExperienceAnalyticsBatteryHealthDeviceAppImpact::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsBatteryHealthDevicePerformance' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsBatteryHealthDevicePerformance($n->getCollectionOfObjectValues([UserExperienceAnalyticsBatteryHealthDevicePerformance::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory($n->getCollectionOfObjectValues([UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsBatteryHealthModelPerformance' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsBatteryHealthModelPerformance($n->getCollectionOfObjectValues([UserExperienceAnalyticsBatteryHealthModelPerformance::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsBatteryHealthOsPerformance' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsBatteryHealthOsPerformance($n->getCollectionOfObjectValues([UserExperienceAnalyticsBatteryHealthOsPerformance::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsBatteryHealthRuntimeDetails' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsBatteryHealthRuntimeDetails($n->getObjectValue([UserExperienceAnalyticsBatteryHealthRuntimeDetails::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsCategories' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsCategories($n->getCollectionOfObjectValues([UserExperienceAnalyticsCategory::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsDeviceMetricHistory' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsDeviceMetricHistory($n->getCollectionOfObjectValues([UserExperienceAnalyticsMetricHistory::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsDevicePerformance' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsDevicePerformance($n->getCollectionOfObjectValues([UserExperienceAnalyticsDevicePerformance::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsDeviceScope' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsDeviceScope($n->getObjectValue([UserExperienceAnalyticsDeviceScope::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsDeviceScopes' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsDeviceScopes($n->getCollectionOfObjectValues([UserExperienceAnalyticsDeviceScope::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsDeviceScores' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsDeviceScores($n->getCollectionOfObjectValues([UserExperienceAnalyticsDeviceScores::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsDeviceStartupHistory' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsDeviceStartupHistory($n->getCollectionOfObjectValues([UserExperienceAnalyticsDeviceStartupHistory::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsDeviceStartupProcesses' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsDeviceStartupProcesses($n->getCollectionOfObjectValues([UserExperienceAnalyticsDeviceStartupProcess::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsDeviceStartupProcessPerformance' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsDeviceStartupProcessPerformance($n->getCollectionOfObjectValues([UserExperienceAnalyticsDeviceStartupProcessPerformance::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsDevicesWithoutCloudIdentity' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsDevicesWithoutCloudIdentity($n->getCollectionOfObjectValues([UserExperienceAnalyticsDeviceWithoutCloudIdentity::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsDeviceTimelineEvent' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsDeviceTimelineEvent($n->getCollectionOfObjectValues([UserExperienceAnalyticsDeviceTimelineEvent::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsImpactingProcess' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsImpactingProcess($n->getCollectionOfObjectValues([UserExperienceAnalyticsImpactingProcess::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsMetricHistory' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsMetricHistory($n->getCollectionOfObjectValues([UserExperienceAnalyticsMetricHistory::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsModelScores' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsModelScores($n->getCollectionOfObjectValues([UserExperienceAnalyticsModelScores::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsNotAutopilotReadyDevice' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsNotAutopilotReadyDevice($n->getCollectionOfObjectValues([UserExperienceAnalyticsNotAutopilotReadyDevice::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsOverview' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsOverview($n->getObjectValue([UserExperienceAnalyticsOverview::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsRemoteConnection' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsRemoteConnection($n->getCollectionOfObjectValues([UserExperienceAnalyticsRemoteConnection::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsResourcePerformance' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsResourcePerformance($n->getCollectionOfObjectValues([UserExperienceAnalyticsResourcePerformance::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsScoreHistory' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsScoreHistory($n->getCollectionOfObjectValues([UserExperienceAnalyticsScoreHistory::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsSettings' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsSettings($n->getObjectValue([UserExperienceAnalyticsSettings::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric($n->getObjectValue([UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsWorkFromAnywhereMetrics' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsWorkFromAnywhereMetrics($n->getCollectionOfObjectValues([UserExperienceAnalyticsWorkFromAnywhereMetric::class, 'createFromDiscriminatorValue'])),
            'userExperienceAnalyticsWorkFromAnywhereModelPerformance' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsWorkFromAnywhereModelPerformance($n->getCollectionOfObjectValues([UserExperienceAnalyticsWorkFromAnywhereModelPerformance::class, 'createFromDiscriminatorValue'])),
            'userPfxCertificates' => fn(ParseNode $n) => $o->setUserPfxCertificates($n->getCollectionOfObjectValues([UserPFXCertificate::class, 'createFromDiscriminatorValue'])),
            'virtualEndpoint' => fn(ParseNode $n) => $o->setVirtualEndpoint($n->getObjectValue([VirtualEndpoint::class, 'createFromDiscriminatorValue'])),
            'windowsAutopilotDeploymentProfiles' => fn(ParseNode $n) => $o->setWindowsAutopilotDeploymentProfiles($n->getCollectionOfObjectValues([WindowsAutopilotDeploymentProfile::class, 'createFromDiscriminatorValue'])),
            'windowsAutopilotDeviceIdentities' => fn(ParseNode $n) => $o->setWindowsAutopilotDeviceIdentities($n->getCollectionOfObjectValues([WindowsAutopilotDeviceIdentity::class, 'createFromDiscriminatorValue'])),
            'windowsAutopilotSettings' => fn(ParseNode $n) => $o->setWindowsAutopilotSettings($n->getObjectValue([WindowsAutopilotSettings::class, 'createFromDiscriminatorValue'])),
            'windowsDriverUpdateProfiles' => fn(ParseNode $n) => $o->setWindowsDriverUpdateProfiles($n->getCollectionOfObjectValues([WindowsDriverUpdateProfile::class, 'createFromDiscriminatorValue'])),
            'windowsFeatureUpdateProfiles' => fn(ParseNode $n) => $o->setWindowsFeatureUpdateProfiles($n->getCollectionOfObjectValues([WindowsFeatureUpdateProfile::class, 'createFromDiscriminatorValue'])),
            'windowsInformationProtectionAppLearningSummaries' => fn(ParseNode $n) => $o->setWindowsInformationProtectionAppLearningSummaries($n->getCollectionOfObjectValues([WindowsInformationProtectionAppLearningSummary::class, 'createFromDiscriminatorValue'])),
            'windowsInformationProtectionNetworkLearningSummaries' => fn(ParseNode $n) => $o->setWindowsInformationProtectionNetworkLearningSummaries($n->getCollectionOfObjectValues([WindowsInformationProtectionNetworkLearningSummary::class, 'createFromDiscriminatorValue'])),
            'windowsMalwareInformation' => fn(ParseNode $n) => $o->setWindowsMalwareInformation($n->getCollectionOfObjectValues([WindowsMalwareInformation::class, 'createFromDiscriminatorValue'])),
            'windowsMalwareOverview' => fn(ParseNode $n) => $o->setWindowsMalwareOverview($n->getObjectValue([WindowsMalwareOverview::class, 'createFromDiscriminatorValue'])),
            'windowsQualityUpdateProfiles' => fn(ParseNode $n) => $o->setWindowsQualityUpdateProfiles($n->getCollectionOfObjectValues([WindowsQualityUpdateProfile::class, 'createFromDiscriminatorValue'])),
            'windowsUpdateCatalogItems' => fn(ParseNode $n) => $o->setWindowsUpdateCatalogItems($n->getCollectionOfObjectValues([WindowsUpdateCatalogItem::class, 'createFromDiscriminatorValue'])),
            'zebraFotaArtifacts' => fn(ParseNode $n) => $o->setZebraFotaArtifacts($n->getCollectionOfObjectValues([ZebraFotaArtifact::class, 'createFromDiscriminatorValue'])),
            'zebraFotaConnector' => fn(ParseNode $n) => $o->setZebraFotaConnector($n->getObjectValue([ZebraFotaConnector::class, 'createFromDiscriminatorValue'])),
            'zebraFotaDeployments' => fn(ParseNode $n) => $o->setZebraFotaDeployments($n->getCollectionOfObjectValues([ZebraFotaDeployment::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the groupPolicyCategories property value. The available group policy categories for this account.
     * @return array<GroupPolicyCategory>|null
    */
    public function getGroupPolicyCategories(): ?array {
        return $this->getBackingStore()->get('groupPolicyCategories');
    }

    /**
     * Gets the groupPolicyConfigurations property value. The group policy configurations created by this account.
     * @return array<GroupPolicyConfiguration>|null
    */
    public function getGroupPolicyConfigurations(): ?array {
        return $this->getBackingStore()->get('groupPolicyConfigurations');
    }

    /**
     * Gets the groupPolicyDefinitionFiles property value. The available group policy definition files for this account.
     * @return array<GroupPolicyDefinitionFile>|null
    */
    public function getGroupPolicyDefinitionFiles(): ?array {
        return $this->getBackingStore()->get('groupPolicyDefinitionFiles');
    }

    /**
     * Gets the groupPolicyDefinitions property value. The available group policy definitions for this account.
     * @return array<GroupPolicyDefinition>|null
    */
    public function getGroupPolicyDefinitions(): ?array {
        return $this->getBackingStore()->get('groupPolicyDefinitions');
    }

    /**
     * Gets the groupPolicyMigrationReports property value. A list of Group Policy migration reports.
     * @return array<GroupPolicyMigrationReport>|null
    */
    public function getGroupPolicyMigrationReports(): ?array {
        return $this->getBackingStore()->get('groupPolicyMigrationReports');
    }

    /**
     * Gets the groupPolicyObjectFiles property value. A list of Group Policy Object files uploaded.
     * @return array<GroupPolicyObjectFile>|null
    */
    public function getGroupPolicyObjectFiles(): ?array {
        return $this->getBackingStore()->get('groupPolicyObjectFiles');
    }

    /**
     * Gets the groupPolicyUploadedDefinitionFiles property value. The available group policy uploaded definition files for this account.
     * @return array<GroupPolicyUploadedDefinitionFile>|null
    */
    public function getGroupPolicyUploadedDefinitionFiles(): ?array {
        return $this->getBackingStore()->get('groupPolicyUploadedDefinitionFiles');
    }

    /**
     * Gets the importedDeviceIdentities property value. The imported device identities.
     * @return array<ImportedDeviceIdentity>|null
    */
    public function getImportedDeviceIdentities(): ?array {
        return $this->getBackingStore()->get('importedDeviceIdentities');
    }

    /**
     * Gets the importedWindowsAutopilotDeviceIdentities property value. Collection of imported Windows autopilot devices.
     * @return array<ImportedWindowsAutopilotDeviceIdentity>|null
    */
    public function getImportedWindowsAutopilotDeviceIdentities(): ?array {
        return $this->getBackingStore()->get('importedWindowsAutopilotDeviceIdentities');
    }

    /**
     * Gets the intents property value. The device management intents
     * @return array<DeviceManagementIntent>|null
    */
    public function getIntents(): ?array {
        return $this->getBackingStore()->get('intents');
    }

    /**
     * Gets the intuneAccountId property value. Intune Account ID for given tenant
     * @return string|null
    */
    public function getIntuneAccountId(): ?string {
        return $this->getBackingStore()->get('intuneAccountId');
    }

    /**
     * Gets the intuneBrand property value. intuneBrand contains data which is used in customizing the appearance of the Company Portal applications as well as the end user web portal.
     * @return IntuneBrand|null
    */
    public function getIntuneBrand(): ?IntuneBrand {
        return $this->getBackingStore()->get('intuneBrand');
    }

    /**
     * Gets the intuneBrandingProfiles property value. Intune branding profiles targeted to AAD groups
     * @return array<IntuneBrandingProfile>|null
    */
    public function getIntuneBrandingProfiles(): ?array {
        return $this->getBackingStore()->get('intuneBrandingProfiles');
    }

    /**
     * Gets the iosUpdateStatuses property value. The IOS software update installation statuses for this account.
     * @return array<IosUpdateDeviceStatus>|null
    */
    public function getIosUpdateStatuses(): ?array {
        return $this->getBackingStore()->get('iosUpdateStatuses');
    }

    /**
     * Gets the lastReportAggregationDateTime property value. The last modified time of reporting for this account. This property is read-only.
     * @return DateTime|null
    */
    public function getLastReportAggregationDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastReportAggregationDateTime');
    }

    /**
     * Gets the legacyPcManangementEnabled property value. The property to enable Non-MDM managed legacy PC management for this account. This property is read-only.
     * @return bool|null
    */
    public function getLegacyPcManangementEnabled(): ?bool {
        return $this->getBackingStore()->get('legacyPcManangementEnabled');
    }

    /**
     * Gets the macOSSoftwareUpdateAccountSummaries property value. The MacOS software update account summaries for this account.
     * @return array<MacOSSoftwareUpdateAccountSummary>|null
    */
    public function getMacOSSoftwareUpdateAccountSummaries(): ?array {
        return $this->getBackingStore()->get('macOSSoftwareUpdateAccountSummaries');
    }

    /**
     * Gets the managedDeviceCleanupSettings property value. Device cleanup rule
     * @return ManagedDeviceCleanupSettings|null
    */
    public function getManagedDeviceCleanupSettings(): ?ManagedDeviceCleanupSettings {
        return $this->getBackingStore()->get('managedDeviceCleanupSettings');
    }

    /**
     * Gets the managedDeviceEncryptionStates property value. Encryption report for devices in this account
     * @return array<ManagedDeviceEncryptionState>|null
    */
    public function getManagedDeviceEncryptionStates(): ?array {
        return $this->getBackingStore()->get('managedDeviceEncryptionStates');
    }

    /**
     * Gets the managedDeviceOverview property value. Device overview
     * @return ManagedDeviceOverview|null
    */
    public function getManagedDeviceOverview(): ?ManagedDeviceOverview {
        return $this->getBackingStore()->get('managedDeviceOverview');
    }

    /**
     * Gets the managedDevices property value. The list of managed devices.
     * @return array<ManagedDevice>|null
    */
    public function getManagedDevices(): ?array {
        return $this->getBackingStore()->get('managedDevices');
    }

    /**
     * Gets the maximumDepTokens property value. Maximum number of DEP tokens allowed per-tenant.
     * @return int|null
    */
    public function getMaximumDepTokens(): ?int {
        return $this->getBackingStore()->get('maximumDepTokens');
    }

    /**
     * Gets the microsoftTunnelConfigurations property value. Collection of MicrosoftTunnelConfiguration settings associated with account.
     * @return array<MicrosoftTunnelConfiguration>|null
    */
    public function getMicrosoftTunnelConfigurations(): ?array {
        return $this->getBackingStore()->get('microsoftTunnelConfigurations');
    }

    /**
     * Gets the microsoftTunnelHealthThresholds property value. Collection of MicrosoftTunnelHealthThreshold settings associated with account.
     * @return array<MicrosoftTunnelHealthThreshold>|null
    */
    public function getMicrosoftTunnelHealthThresholds(): ?array {
        return $this->getBackingStore()->get('microsoftTunnelHealthThresholds');
    }

    /**
     * Gets the microsoftTunnelServerLogCollectionResponses property value. Collection of MicrosoftTunnelServerLogCollectionResponse settings associated with account.
     * @return array<MicrosoftTunnelServerLogCollectionResponse>|null
    */
    public function getMicrosoftTunnelServerLogCollectionResponses(): ?array {
        return $this->getBackingStore()->get('microsoftTunnelServerLogCollectionResponses');
    }

    /**
     * Gets the microsoftTunnelSites property value. Collection of MicrosoftTunnelSite settings associated with account.
     * @return array<MicrosoftTunnelSite>|null
    */
    public function getMicrosoftTunnelSites(): ?array {
        return $this->getBackingStore()->get('microsoftTunnelSites');
    }

    /**
     * Gets the mobileAppTroubleshootingEvents property value. The collection property of MobileAppTroubleshootingEvent.
     * @return array<MobileAppTroubleshootingEvent>|null
    */
    public function getMobileAppTroubleshootingEvents(): ?array {
        return $this->getBackingStore()->get('mobileAppTroubleshootingEvents');
    }

    /**
     * Gets the mobileThreatDefenseConnectors property value. The list of Mobile threat Defense connectors configured by the tenant.
     * @return array<MobileThreatDefenseConnector>|null
    */
    public function getMobileThreatDefenseConnectors(): ?array {
        return $this->getBackingStore()->get('mobileThreatDefenseConnectors');
    }

    /**
     * Gets the monitoring property value. The monitoring property
     * @return Monitoring|null
    */
    public function getMonitoring(): ?Monitoring {
        return $this->getBackingStore()->get('monitoring');
    }

    /**
     * Gets the ndesConnectors property value. The collection of Ndes connectors for this account.
     * @return array<NdesConnector>|null
    */
    public function getNdesConnectors(): ?array {
        return $this->getBackingStore()->get('ndesConnectors');
    }

    /**
     * Gets the notificationMessageTemplates property value. The Notification Message Templates.
     * @return array<NotificationMessageTemplate>|null
    */
    public function getNotificationMessageTemplates(): ?array {
        return $this->getBackingStore()->get('notificationMessageTemplates');
    }

    /**
     * Gets the remoteActionAudits property value. The list of device remote action audits with the tenant.
     * @return array<RemoteActionAudit>|null
    */
    public function getRemoteActionAudits(): ?array {
        return $this->getBackingStore()->get('remoteActionAudits');
    }

    /**
     * Gets the remoteAssistancePartners property value. The remote assist partners.
     * @return array<RemoteAssistancePartner>|null
    */
    public function getRemoteAssistancePartners(): ?array {
        return $this->getBackingStore()->get('remoteAssistancePartners');
    }

    /**
     * Gets the remoteAssistanceSettings property value. The remote assistance settings singleton
     * @return RemoteAssistanceSettings|null
    */
    public function getRemoteAssistanceSettings(): ?RemoteAssistanceSettings {
        return $this->getBackingStore()->get('remoteAssistanceSettings');
    }

    /**
     * Gets the reports property value. Reports singleton
     * @return DeviceManagementReports|null
    */
    public function getReports(): ?DeviceManagementReports {
        return $this->getBackingStore()->get('reports');
    }

    /**
     * Gets the resourceAccessProfiles property value. Collection of resource access settings associated with account.
     * @return array<DeviceManagementResourceAccessProfileBase>|null
    */
    public function getResourceAccessProfiles(): ?array {
        return $this->getBackingStore()->get('resourceAccessProfiles');
    }

    /**
     * Gets the resourceOperations property value. The Resource Operations.
     * @return array<ResourceOperation>|null
    */
    public function getResourceOperations(): ?array {
        return $this->getBackingStore()->get('resourceOperations');
    }

    /**
     * Gets the reusablePolicySettings property value. List of all reusable settings that can be referred in a policy
     * @return array<DeviceManagementReusablePolicySetting>|null
    */
    public function getReusablePolicySettings(): ?array {
        return $this->getBackingStore()->get('reusablePolicySettings');
    }

    /**
     * Gets the reusableSettings property value. List of all reusable settings
     * @return array<DeviceManagementConfigurationSettingDefinition>|null
    */
    public function getReusableSettings(): ?array {
        return $this->getBackingStore()->get('reusableSettings');
    }

    /**
     * Gets the roleAssignments property value. The Role Assignments.
     * @return array<DeviceAndAppManagementRoleAssignment>|null
    */
    public function getRoleAssignments(): ?array {
        return $this->getBackingStore()->get('roleAssignments');
    }

    /**
     * Gets the roleDefinitions property value. The Role Definitions.
     * @return array<RoleDefinition>|null
    */
    public function getRoleDefinitions(): ?array {
        return $this->getBackingStore()->get('roleDefinitions');
    }

    /**
     * Gets the roleScopeTags property value. The Role Scope Tags.
     * @return array<RoleScopeTag>|null
    */
    public function getRoleScopeTags(): ?array {
        return $this->getBackingStore()->get('roleScopeTags');
    }

    /**
     * Gets the serviceNowConnections property value. A list of ServiceNowConnections
     * @return array<ServiceNowConnection>|null
    */
    public function getServiceNowConnections(): ?array {
        return $this->getBackingStore()->get('serviceNowConnections');
    }

    /**
     * Gets the settingDefinitions property value. The device management intent setting definitions
     * @return array<DeviceManagementSettingDefinition>|null
    */
    public function getSettingDefinitions(): ?array {
        return $this->getBackingStore()->get('settingDefinitions');
    }

    /**
     * Gets the settings property value. Account level settings.
     * @return DeviceManagementSettings|null
    */
    public function getSettings(): ?DeviceManagementSettings {
        return $this->getBackingStore()->get('settings');
    }

    /**
     * Gets the softwareUpdateStatusSummary property value. The software update status summary.
     * @return SoftwareUpdateStatusSummary|null
    */
    public function getSoftwareUpdateStatusSummary(): ?SoftwareUpdateStatusSummary {
        return $this->getBackingStore()->get('softwareUpdateStatusSummary');
    }

    /**
     * Gets the subscriptions property value. Tenant mobile device management subscriptions.
     * @return DeviceManagementSubscriptions|null
    */
    public function getSubscriptions(): ?DeviceManagementSubscriptions {
        return $this->getBackingStore()->get('subscriptions');
    }

    /**
     * Gets the subscriptionState property value. Tenant mobile device management subscription state.
     * @return DeviceManagementSubscriptionState|null
    */
    public function getSubscriptionState(): ?DeviceManagementSubscriptionState {
        return $this->getBackingStore()->get('subscriptionState');
    }

    /**
     * Gets the telecomExpenseManagementPartners property value. The telecom expense management partners.
     * @return array<TelecomExpenseManagementPartner>|null
    */
    public function getTelecomExpenseManagementPartners(): ?array {
        return $this->getBackingStore()->get('telecomExpenseManagementPartners');
    }

    /**
     * Gets the templateInsights property value. List of setting insights in a template
     * @return array<DeviceManagementTemplateInsightsDefinition>|null
    */
    public function getTemplateInsights(): ?array {
        return $this->getBackingStore()->get('templateInsights');
    }

    /**
     * Gets the templates property value. The available templates
     * @return array<DeviceManagementTemplate>|null
    */
    public function getTemplates(): ?array {
        return $this->getBackingStore()->get('templates');
    }

    /**
     * Gets the templateSettings property value. List of all TemplateSettings
     * @return array<DeviceManagementConfigurationSettingTemplate>|null
    */
    public function getTemplateSettings(): ?array {
        return $this->getBackingStore()->get('templateSettings');
    }

    /**
     * Gets the tenantAttachRBAC property value. TenantAttach RBAC Enablement
     * @return TenantAttachRBAC|null
    */
    public function getTenantAttachRBAC(): ?TenantAttachRBAC {
        return $this->getBackingStore()->get('tenantAttachRBAC');
    }

    /**
     * Gets the termsAndConditions property value. The terms and conditions associated with device management of the company.
     * @return array<TermsAndConditions>|null
    */
    public function getTermsAndConditions(): ?array {
        return $this->getBackingStore()->get('termsAndConditions');
    }

    /**
     * Gets the troubleshootingEvents property value. The list of troubleshooting events for the tenant.
     * @return array<DeviceManagementTroubleshootingEvent>|null
    */
    public function getTroubleshootingEvents(): ?array {
        return $this->getBackingStore()->get('troubleshootingEvents');
    }

    /**
     * Gets the unlicensedAdminstratorsEnabled property value. When enabled, users assigned as administrators via Role Assignment Memberships do not require an assigned Intune license. Prior to this, only Intune licensed users were granted permissions with an Intune role unless they were assigned a role via Azure Active Directory. You are limited to 350 unlicensed direct members for each AAD security group in a role assignment, but you can assign multiple AAD security groups to a role if you need to support more than 350 unlicensed administrators. Licensed administrators are unaffected, do not have to be direct members, nor does the 350 member limit apply. This property is read-only.
     * @return bool|null
    */
    public function getUnlicensedAdminstratorsEnabled(): ?bool {
        return $this->getBackingStore()->get('unlicensedAdminstratorsEnabled');
    }

    /**
     * Gets the userExperienceAnalyticsAnomaly property value. The user experience analytics anomaly entity contains anomaly details.
     * @return array<UserExperienceAnalyticsAnomaly>|null
    */
    public function getUserExperienceAnalyticsAnomaly(): ?array {
        return $this->getBackingStore()->get('userExperienceAnalyticsAnomaly');
    }

    /**
     * Gets the userExperienceAnalyticsAnomalyDevice property value. The user experience analytics anomaly entity contains device details.
     * @return array<UserExperienceAnalyticsAnomalyDevice>|null
    */
    public function getUserExperienceAnalyticsAnomalyDevice(): ?array {
        return $this->getBackingStore()->get('userExperienceAnalyticsAnomalyDevice');
    }

    /**
     * Gets the userExperienceAnalyticsAnomalySeverityOverview property value. The user experience analytics anomaly severity overview entity contains the count information for each severity of anomaly.
     * @return UserExperienceAnalyticsAnomalySeverityOverview|null
    */
    public function getUserExperienceAnalyticsAnomalySeverityOverview(): ?UserExperienceAnalyticsAnomalySeverityOverview {
        return $this->getBackingStore()->get('userExperienceAnalyticsAnomalySeverityOverview');
    }

    /**
     * Gets the userExperienceAnalyticsAppHealthApplicationPerformance property value. User experience analytics appHealth Application Performance
     * @return array<UserExperienceAnalyticsAppHealthApplicationPerformance>|null
    */
    public function getUserExperienceAnalyticsAppHealthApplicationPerformance(): ?array {
        return $this->getBackingStore()->get('userExperienceAnalyticsAppHealthApplicationPerformance');
    }

    /**
     * Gets the userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion property value. User experience analytics appHealth Application Performance by App Version
     * @return array<UserExperienceAnalyticsAppHealthAppPerformanceByAppVersion>|null
    */
    public function getUserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion(): ?array {
        return $this->getBackingStore()->get('userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion');
    }

    /**
     * Gets the userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails property value. User experience analytics appHealth Application Performance by App Version details
     * @return array<UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails>|null
    */
    public function getUserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails(): ?array {
        return $this->getBackingStore()->get('userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails');
    }

    /**
     * Gets the userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId property value. User experience analytics appHealth Application Performance by App Version Device Id
     * @return array<UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId>|null
    */
    public function getUserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId(): ?array {
        return $this->getBackingStore()->get('userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId');
    }

    /**
     * Gets the userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion property value. User experience analytics appHealth Application Performance by OS Version
     * @return array<UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion>|null
    */
    public function getUserExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion(): ?array {
        return $this->getBackingStore()->get('userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion');
    }

    /**
     * Gets the userExperienceAnalyticsAppHealthDeviceModelPerformance property value. User experience analytics appHealth Model Performance
     * @return array<UserExperienceAnalyticsAppHealthDeviceModelPerformance>|null
    */
    public function getUserExperienceAnalyticsAppHealthDeviceModelPerformance(): ?array {
        return $this->getBackingStore()->get('userExperienceAnalyticsAppHealthDeviceModelPerformance');
    }

    /**
     * Gets the userExperienceAnalyticsAppHealthDevicePerformance property value. User experience analytics appHealth Device Performance
     * @return array<UserExperienceAnalyticsAppHealthDevicePerformance>|null
    */
    public function getUserExperienceAnalyticsAppHealthDevicePerformance(): ?array {
        return $this->getBackingStore()->get('userExperienceAnalyticsAppHealthDevicePerformance');
    }

    /**
     * Gets the userExperienceAnalyticsAppHealthDevicePerformanceDetails property value. User experience analytics device performance details
     * @return array<UserExperienceAnalyticsAppHealthDevicePerformanceDetails>|null
    */
    public function getUserExperienceAnalyticsAppHealthDevicePerformanceDetails(): ?array {
        return $this->getBackingStore()->get('userExperienceAnalyticsAppHealthDevicePerformanceDetails');
    }

    /**
     * Gets the userExperienceAnalyticsAppHealthOSVersionPerformance property value. User experience analytics appHealth OS version Performance
     * @return array<UserExperienceAnalyticsAppHealthOSVersionPerformance>|null
    */
    public function getUserExperienceAnalyticsAppHealthOSVersionPerformance(): ?array {
        return $this->getBackingStore()->get('userExperienceAnalyticsAppHealthOSVersionPerformance');
    }

    /**
     * Gets the userExperienceAnalyticsAppHealthOverview property value. User experience analytics appHealth overview
     * @return UserExperienceAnalyticsCategory|null
    */
    public function getUserExperienceAnalyticsAppHealthOverview(): ?UserExperienceAnalyticsCategory {
        return $this->getBackingStore()->get('userExperienceAnalyticsAppHealthOverview');
    }

    /**
     * Gets the userExperienceAnalyticsBaselines property value. User experience analytics baselines
     * @return array<UserExperienceAnalyticsBaseline>|null
    */
    public function getUserExperienceAnalyticsBaselines(): ?array {
        return $this->getBackingStore()->get('userExperienceAnalyticsBaselines');
    }

    /**
     * Gets the userExperienceAnalyticsBatteryHealthAppImpact property value. User Experience Analytics Battery Health App Impact
     * @return array<UserExperienceAnalyticsBatteryHealthAppImpact>|null
    */
    public function getUserExperienceAnalyticsBatteryHealthAppImpact(): ?array {
        return $this->getBackingStore()->get('userExperienceAnalyticsBatteryHealthAppImpact');
    }

    /**
     * Gets the userExperienceAnalyticsBatteryHealthCapacityDetails property value. User Experience Analytics Battery Health Capacity Details
     * @return UserExperienceAnalyticsBatteryHealthCapacityDetails|null
    */
    public function getUserExperienceAnalyticsBatteryHealthCapacityDetails(): ?UserExperienceAnalyticsBatteryHealthCapacityDetails {
        return $this->getBackingStore()->get('userExperienceAnalyticsBatteryHealthCapacityDetails');
    }

    /**
     * Gets the userExperienceAnalyticsBatteryHealthDeviceAppImpact property value. User Experience Analytics Battery Health Device App Impact
     * @return array<UserExperienceAnalyticsBatteryHealthDeviceAppImpact>|null
    */
    public function getUserExperienceAnalyticsBatteryHealthDeviceAppImpact(): ?array {
        return $this->getBackingStore()->get('userExperienceAnalyticsBatteryHealthDeviceAppImpact');
    }

    /**
     * Gets the userExperienceAnalyticsBatteryHealthDevicePerformance property value. User Experience Analytics Battery Health Device Performance
     * @return array<UserExperienceAnalyticsBatteryHealthDevicePerformance>|null
    */
    public function getUserExperienceAnalyticsBatteryHealthDevicePerformance(): ?array {
        return $this->getBackingStore()->get('userExperienceAnalyticsBatteryHealthDevicePerformance');
    }

    /**
     * Gets the userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory property value. User Experience Analytics Battery Health Device Runtime History
     * @return array<UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory>|null
    */
    public function getUserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory(): ?array {
        return $this->getBackingStore()->get('userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory');
    }

    /**
     * Gets the userExperienceAnalyticsBatteryHealthModelPerformance property value. User Experience Analytics Battery Health Model Performance
     * @return array<UserExperienceAnalyticsBatteryHealthModelPerformance>|null
    */
    public function getUserExperienceAnalyticsBatteryHealthModelPerformance(): ?array {
        return $this->getBackingStore()->get('userExperienceAnalyticsBatteryHealthModelPerformance');
    }

    /**
     * Gets the userExperienceAnalyticsBatteryHealthOsPerformance property value. User Experience Analytics Battery Health Os Performance
     * @return array<UserExperienceAnalyticsBatteryHealthOsPerformance>|null
    */
    public function getUserExperienceAnalyticsBatteryHealthOsPerformance(): ?array {
        return $this->getBackingStore()->get('userExperienceAnalyticsBatteryHealthOsPerformance');
    }

    /**
     * Gets the userExperienceAnalyticsBatteryHealthRuntimeDetails property value. User Experience Analytics Battery Health Runtime Details
     * @return UserExperienceAnalyticsBatteryHealthRuntimeDetails|null
    */
    public function getUserExperienceAnalyticsBatteryHealthRuntimeDetails(): ?UserExperienceAnalyticsBatteryHealthRuntimeDetails {
        return $this->getBackingStore()->get('userExperienceAnalyticsBatteryHealthRuntimeDetails');
    }

    /**
     * Gets the userExperienceAnalyticsCategories property value. User experience analytics categories
     * @return array<UserExperienceAnalyticsCategory>|null
    */
    public function getUserExperienceAnalyticsCategories(): ?array {
        return $this->getBackingStore()->get('userExperienceAnalyticsCategories');
    }

    /**
     * Gets the userExperienceAnalyticsDeviceMetricHistory property value. User experience analytics device metric history
     * @return array<UserExperienceAnalyticsMetricHistory>|null
    */
    public function getUserExperienceAnalyticsDeviceMetricHistory(): ?array {
        return $this->getBackingStore()->get('userExperienceAnalyticsDeviceMetricHistory');
    }

    /**
     * Gets the userExperienceAnalyticsDevicePerformance property value. User experience analytics device performance
     * @return array<UserExperienceAnalyticsDevicePerformance>|null
    */
    public function getUserExperienceAnalyticsDevicePerformance(): ?array {
        return $this->getBackingStore()->get('userExperienceAnalyticsDevicePerformance');
    }

    /**
     * Gets the userExperienceAnalyticsDeviceScope property value. The user experience analytics device scope entity endpoint to trigger on the service to either START or STOP computing metrics data based on a device scope configuration.
     * @return UserExperienceAnalyticsDeviceScope|null
    */
    public function getUserExperienceAnalyticsDeviceScope(): ?UserExperienceAnalyticsDeviceScope {
        return $this->getBackingStore()->get('userExperienceAnalyticsDeviceScope');
    }

    /**
     * Gets the userExperienceAnalyticsDeviceScopes property value. The user experience analytics device scope entity contains device scope configuration use to apply filtering on the endpoint analytics reports.
     * @return array<UserExperienceAnalyticsDeviceScope>|null
    */
    public function getUserExperienceAnalyticsDeviceScopes(): ?array {
        return $this->getBackingStore()->get('userExperienceAnalyticsDeviceScopes');
    }

    /**
     * Gets the userExperienceAnalyticsDeviceScores property value. User experience analytics device scores
     * @return array<UserExperienceAnalyticsDeviceScores>|null
    */
    public function getUserExperienceAnalyticsDeviceScores(): ?array {
        return $this->getBackingStore()->get('userExperienceAnalyticsDeviceScores');
    }

    /**
     * Gets the userExperienceAnalyticsDeviceStartupHistory property value. User experience analytics device Startup History
     * @return array<UserExperienceAnalyticsDeviceStartupHistory>|null
    */
    public function getUserExperienceAnalyticsDeviceStartupHistory(): ?array {
        return $this->getBackingStore()->get('userExperienceAnalyticsDeviceStartupHistory');
    }

    /**
     * Gets the userExperienceAnalyticsDeviceStartupProcesses property value. User experience analytics device Startup Processes
     * @return array<UserExperienceAnalyticsDeviceStartupProcess>|null
    */
    public function getUserExperienceAnalyticsDeviceStartupProcesses(): ?array {
        return $this->getBackingStore()->get('userExperienceAnalyticsDeviceStartupProcesses');
    }

    /**
     * Gets the userExperienceAnalyticsDeviceStartupProcessPerformance property value. User experience analytics device Startup Process Performance
     * @return array<UserExperienceAnalyticsDeviceStartupProcessPerformance>|null
    */
    public function getUserExperienceAnalyticsDeviceStartupProcessPerformance(): ?array {
        return $this->getBackingStore()->get('userExperienceAnalyticsDeviceStartupProcessPerformance');
    }

    /**
     * Gets the userExperienceAnalyticsDevicesWithoutCloudIdentity property value. User experience analytics devices without cloud identity.
     * @return array<UserExperienceAnalyticsDeviceWithoutCloudIdentity>|null
    */
    public function getUserExperienceAnalyticsDevicesWithoutCloudIdentity(): ?array {
        return $this->getBackingStore()->get('userExperienceAnalyticsDevicesWithoutCloudIdentity');
    }

    /**
     * Gets the userExperienceAnalyticsDeviceTimelineEvent property value. The user experience analytics device events entity contains NRT device timeline event details.
     * @return array<UserExperienceAnalyticsDeviceTimelineEvent>|null
    */
    public function getUserExperienceAnalyticsDeviceTimelineEvent(): ?array {
        return $this->getBackingStore()->get('userExperienceAnalyticsDeviceTimelineEvent');
    }

    /**
     * Gets the userExperienceAnalyticsImpactingProcess property value. User experience analytics impacting process
     * @return array<UserExperienceAnalyticsImpactingProcess>|null
    */
    public function getUserExperienceAnalyticsImpactingProcess(): ?array {
        return $this->getBackingStore()->get('userExperienceAnalyticsImpactingProcess');
    }

    /**
     * Gets the userExperienceAnalyticsMetricHistory property value. User experience analytics metric history
     * @return array<UserExperienceAnalyticsMetricHistory>|null
    */
    public function getUserExperienceAnalyticsMetricHistory(): ?array {
        return $this->getBackingStore()->get('userExperienceAnalyticsMetricHistory');
    }

    /**
     * Gets the userExperienceAnalyticsModelScores property value. User experience analytics model scores
     * @return array<UserExperienceAnalyticsModelScores>|null
    */
    public function getUserExperienceAnalyticsModelScores(): ?array {
        return $this->getBackingStore()->get('userExperienceAnalyticsModelScores');
    }

    /**
     * Gets the userExperienceAnalyticsNotAutopilotReadyDevice property value. User experience analytics devices not Windows Autopilot ready.
     * @return array<UserExperienceAnalyticsNotAutopilotReadyDevice>|null
    */
    public function getUserExperienceAnalyticsNotAutopilotReadyDevice(): ?array {
        return $this->getBackingStore()->get('userExperienceAnalyticsNotAutopilotReadyDevice');
    }

    /**
     * Gets the userExperienceAnalyticsOverview property value. User experience analytics overview
     * @return UserExperienceAnalyticsOverview|null
    */
    public function getUserExperienceAnalyticsOverview(): ?UserExperienceAnalyticsOverview {
        return $this->getBackingStore()->get('userExperienceAnalyticsOverview');
    }

    /**
     * Gets the userExperienceAnalyticsRemoteConnection property value. User experience analytics remote connection
     * @return array<UserExperienceAnalyticsRemoteConnection>|null
    */
    public function getUserExperienceAnalyticsRemoteConnection(): ?array {
        return $this->getBackingStore()->get('userExperienceAnalyticsRemoteConnection');
    }

    /**
     * Gets the userExperienceAnalyticsResourcePerformance property value. User experience analytics resource performance
     * @return array<UserExperienceAnalyticsResourcePerformance>|null
    */
    public function getUserExperienceAnalyticsResourcePerformance(): ?array {
        return $this->getBackingStore()->get('userExperienceAnalyticsResourcePerformance');
    }

    /**
     * Gets the userExperienceAnalyticsScoreHistory property value. User experience analytics device Startup Score History
     * @return array<UserExperienceAnalyticsScoreHistory>|null
    */
    public function getUserExperienceAnalyticsScoreHistory(): ?array {
        return $this->getBackingStore()->get('userExperienceAnalyticsScoreHistory');
    }

    /**
     * Gets the userExperienceAnalyticsSettings property value. User experience analytics device settings
     * @return UserExperienceAnalyticsSettings|null
    */
    public function getUserExperienceAnalyticsSettings(): ?UserExperienceAnalyticsSettings {
        return $this->getBackingStore()->get('userExperienceAnalyticsSettings');
    }

    /**
     * Gets the userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric property value. User experience analytics work from anywhere hardware readiness metrics.
     * @return UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric|null
    */
    public function getUserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric(): ?UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric {
        return $this->getBackingStore()->get('userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric');
    }

    /**
     * Gets the userExperienceAnalyticsWorkFromAnywhereMetrics property value. User experience analytics work from anywhere metrics.
     * @return array<UserExperienceAnalyticsWorkFromAnywhereMetric>|null
    */
    public function getUserExperienceAnalyticsWorkFromAnywhereMetrics(): ?array {
        return $this->getBackingStore()->get('userExperienceAnalyticsWorkFromAnywhereMetrics');
    }

    /**
     * Gets the userExperienceAnalyticsWorkFromAnywhereModelPerformance property value. The user experience analytics work from anywhere model performance
     * @return array<UserExperienceAnalyticsWorkFromAnywhereModelPerformance>|null
    */
    public function getUserExperienceAnalyticsWorkFromAnywhereModelPerformance(): ?array {
        return $this->getBackingStore()->get('userExperienceAnalyticsWorkFromAnywhereModelPerformance');
    }

    /**
     * Gets the userPfxCertificates property value. Collection of PFX certificates associated with a user.
     * @return array<UserPFXCertificate>|null
    */
    public function getUserPfxCertificates(): ?array {
        return $this->getBackingStore()->get('userPfxCertificates');
    }

    /**
     * Gets the virtualEndpoint property value. The virtualEndpoint property
     * @return VirtualEndpoint|null
    */
    public function getVirtualEndpoint(): ?VirtualEndpoint {
        return $this->getBackingStore()->get('virtualEndpoint');
    }

    /**
     * Gets the windowsAutopilotDeploymentProfiles property value. Windows auto pilot deployment profiles
     * @return array<WindowsAutopilotDeploymentProfile>|null
    */
    public function getWindowsAutopilotDeploymentProfiles(): ?array {
        return $this->getBackingStore()->get('windowsAutopilotDeploymentProfiles');
    }

    /**
     * Gets the windowsAutopilotDeviceIdentities property value. The Windows autopilot device identities contained collection.
     * @return array<WindowsAutopilotDeviceIdentity>|null
    */
    public function getWindowsAutopilotDeviceIdentities(): ?array {
        return $this->getBackingStore()->get('windowsAutopilotDeviceIdentities');
    }

    /**
     * Gets the windowsAutopilotSettings property value. The Windows autopilot account settings.
     * @return WindowsAutopilotSettings|null
    */
    public function getWindowsAutopilotSettings(): ?WindowsAutopilotSettings {
        return $this->getBackingStore()->get('windowsAutopilotSettings');
    }

    /**
     * Gets the windowsDriverUpdateProfiles property value. A collection of windows driver update profiles
     * @return array<WindowsDriverUpdateProfile>|null
    */
    public function getWindowsDriverUpdateProfiles(): ?array {
        return $this->getBackingStore()->get('windowsDriverUpdateProfiles');
    }

    /**
     * Gets the windowsFeatureUpdateProfiles property value. A collection of windows feature update profiles
     * @return array<WindowsFeatureUpdateProfile>|null
    */
    public function getWindowsFeatureUpdateProfiles(): ?array {
        return $this->getBackingStore()->get('windowsFeatureUpdateProfiles');
    }

    /**
     * Gets the windowsInformationProtectionAppLearningSummaries property value. The windows information protection app learning summaries.
     * @return array<WindowsInformationProtectionAppLearningSummary>|null
    */
    public function getWindowsInformationProtectionAppLearningSummaries(): ?array {
        return $this->getBackingStore()->get('windowsInformationProtectionAppLearningSummaries');
    }

    /**
     * Gets the windowsInformationProtectionNetworkLearningSummaries property value. The windows information protection network learning summaries.
     * @return array<WindowsInformationProtectionNetworkLearningSummary>|null
    */
    public function getWindowsInformationProtectionNetworkLearningSummaries(): ?array {
        return $this->getBackingStore()->get('windowsInformationProtectionNetworkLearningSummaries');
    }

    /**
     * Gets the windowsMalwareInformation property value. The list of affected malware in the tenant.
     * @return array<WindowsMalwareInformation>|null
    */
    public function getWindowsMalwareInformation(): ?array {
        return $this->getBackingStore()->get('windowsMalwareInformation');
    }

    /**
     * Gets the windowsMalwareOverview property value. Malware overview for windows devices.
     * @return WindowsMalwareOverview|null
    */
    public function getWindowsMalwareOverview(): ?WindowsMalwareOverview {
        return $this->getBackingStore()->get('windowsMalwareOverview');
    }

    /**
     * Gets the windowsQualityUpdateProfiles property value. A collection of windows quality update profiles
     * @return array<WindowsQualityUpdateProfile>|null
    */
    public function getWindowsQualityUpdateProfiles(): ?array {
        return $this->getBackingStore()->get('windowsQualityUpdateProfiles');
    }

    /**
     * Gets the windowsUpdateCatalogItems property value. A collection of windows update catalog items (fetaure updates item , quality updates item)
     * @return array<WindowsUpdateCatalogItem>|null
    */
    public function getWindowsUpdateCatalogItems(): ?array {
        return $this->getBackingStore()->get('windowsUpdateCatalogItems');
    }

    /**
     * Gets the zebraFotaArtifacts property value. The Collection of ZebraFotaArtifacts.
     * @return array<ZebraFotaArtifact>|null
    */
    public function getZebraFotaArtifacts(): ?array {
        return $this->getBackingStore()->get('zebraFotaArtifacts');
    }

    /**
     * Gets the zebraFotaConnector property value. The singleton ZebraFotaConnector associated with account.
     * @return ZebraFotaConnector|null
    */
    public function getZebraFotaConnector(): ?ZebraFotaConnector {
        return $this->getBackingStore()->get('zebraFotaConnector');
    }

    /**
     * Gets the zebraFotaDeployments property value. Collection of ZebraFotaDeployments associated with account.
     * @return array<ZebraFotaDeployment>|null
    */
    public function getZebraFotaDeployments(): ?array {
        return $this->getBackingStore()->get('zebraFotaDeployments');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('accountMoveCompletionDateTime', $this->getAccountMoveCompletionDateTime());
        $writer->writeObjectValue('adminConsent', $this->getAdminConsent());
        $writer->writeObjectValue('advancedThreatProtectionOnboardingStateSummary', $this->getAdvancedThreatProtectionOnboardingStateSummary());
        $writer->writeCollectionOfObjectValues('androidDeviceOwnerEnrollmentProfiles', $this->getAndroidDeviceOwnerEnrollmentProfiles());
        $writer->writeCollectionOfObjectValues('androidForWorkAppConfigurationSchemas', $this->getAndroidForWorkAppConfigurationSchemas());
        $writer->writeCollectionOfObjectValues('androidForWorkEnrollmentProfiles', $this->getAndroidForWorkEnrollmentProfiles());
        $writer->writeObjectValue('androidForWorkSettings', $this->getAndroidForWorkSettings());
        $writer->writeObjectValue('androidManagedStoreAccountEnterpriseSettings', $this->getAndroidManagedStoreAccountEnterpriseSettings());
        $writer->writeCollectionOfObjectValues('androidManagedStoreAppConfigurationSchemas', $this->getAndroidManagedStoreAppConfigurationSchemas());
        $writer->writeObjectValue('applePushNotificationCertificate', $this->getApplePushNotificationCertificate());
        $writer->writeCollectionOfObjectValues('appleUserInitiatedEnrollmentProfiles', $this->getAppleUserInitiatedEnrollmentProfiles());
        $writer->writeCollectionOfObjectValues('assignmentFilters', $this->getAssignmentFilters());
        $writer->writeCollectionOfObjectValues('auditEvents', $this->getAuditEvents());
        $writer->writeCollectionOfObjectValues('autopilotEvents', $this->getAutopilotEvents());
        $writer->writeCollectionOfObjectValues('cartToClassAssociations', $this->getCartToClassAssociations());
        $writer->writeCollectionOfObjectValues('categories', $this->getCategories());
        $writer->writeCollectionOfObjectValues('certificateConnectorDetails', $this->getCertificateConnectorDetails());
        $writer->writeCollectionOfObjectValues('chromeOSOnboardingSettings', $this->getChromeOSOnboardingSettings());
        $writer->writeCollectionOfObjectValues('cloudPCConnectivityIssues', $this->getCloudPCConnectivityIssues());
        $writer->writeCollectionOfObjectValues('comanagedDevices', $this->getComanagedDevices());
        $writer->writeCollectionOfObjectValues('comanagementEligibleDevices', $this->getComanagementEligibleDevices());
        $writer->writeCollectionOfObjectValues('complianceCategories', $this->getComplianceCategories());
        $writer->writeCollectionOfObjectValues('complianceManagementPartners', $this->getComplianceManagementPartners());
        $writer->writeCollectionOfObjectValues('compliancePolicies', $this->getCompliancePolicies());
        $writer->writeCollectionOfObjectValues('complianceSettings', $this->getComplianceSettings());
        $writer->writeObjectValue('conditionalAccessSettings', $this->getConditionalAccessSettings());
        $writer->writeCollectionOfObjectValues('configManagerCollections', $this->getConfigManagerCollections());
        $writer->writeCollectionOfObjectValues('configurationCategories', $this->getConfigurationCategories());
        $writer->writeCollectionOfObjectValues('configurationPolicies', $this->getConfigurationPolicies());
        $writer->writeCollectionOfObjectValues('configurationPolicyTemplates', $this->getConfigurationPolicyTemplates());
        $writer->writeCollectionOfObjectValues('configurationSettings', $this->getConfigurationSettings());
        $writer->writeCollectionOfObjectValues('connectorStatus', $this->getConnectorStatus());
        $writer->writeObjectValue('dataProcessorServiceForWindowsFeaturesOnboarding', $this->getDataProcessorServiceForWindowsFeaturesOnboarding());
        $writer->writeCollectionOfObjectValues('dataSharingConsents', $this->getDataSharingConsents());
        $writer->writeCollectionOfObjectValues('depOnboardingSettings', $this->getDepOnboardingSettings());
        $writer->writeCollectionOfObjectValues('derivedCredentials', $this->getDerivedCredentials());
        $writer->writeCollectionOfObjectValues('detectedApps', $this->getDetectedApps());
        $writer->writeCollectionOfObjectValues('deviceCategories', $this->getDeviceCategories());
        $writer->writeCollectionOfObjectValues('deviceCompliancePolicies', $this->getDeviceCompliancePolicies());
        $writer->writeObjectValue('deviceCompliancePolicyDeviceStateSummary', $this->getDeviceCompliancePolicyDeviceStateSummary());
        $writer->writeCollectionOfObjectValues('deviceCompliancePolicySettingStateSummaries', $this->getDeviceCompliancePolicySettingStateSummaries());
        $writer->writeCollectionOfObjectValues('deviceComplianceScripts', $this->getDeviceComplianceScripts());
        $writer->writeCollectionOfObjectValues('deviceConfigurationConflictSummary', $this->getDeviceConfigurationConflictSummary());
        $writer->writeObjectValue('deviceConfigurationDeviceStateSummaries', $this->getDeviceConfigurationDeviceStateSummaries());
        $writer->writeCollectionOfObjectValues('deviceConfigurationRestrictedAppsViolations', $this->getDeviceConfigurationRestrictedAppsViolations());
        $writer->writeCollectionOfObjectValues('deviceConfigurations', $this->getDeviceConfigurations());
        $writer->writeCollectionOfObjectValues('deviceConfigurationsAllManagedDeviceCertificateStates', $this->getDeviceConfigurationsAllManagedDeviceCertificateStates());
        $writer->writeObjectValue('deviceConfigurationUserStateSummaries', $this->getDeviceConfigurationUserStateSummaries());
        $writer->writeCollectionOfObjectValues('deviceCustomAttributeShellScripts', $this->getDeviceCustomAttributeShellScripts());
        $writer->writeCollectionOfObjectValues('deviceEnrollmentConfigurations', $this->getDeviceEnrollmentConfigurations());
        $writer->writeCollectionOfObjectValues('deviceHealthScripts', $this->getDeviceHealthScripts());
        $writer->writeCollectionOfObjectValues('deviceManagementPartners', $this->getDeviceManagementPartners());
        $writer->writeCollectionOfObjectValues('deviceManagementScripts', $this->getDeviceManagementScripts());
        $writer->writeObjectValue('deviceProtectionOverview', $this->getDeviceProtectionOverview());
        $writer->writeCollectionOfObjectValues('deviceShellScripts', $this->getDeviceShellScripts());
        $writer->writeCollectionOfObjectValues('domainJoinConnectors', $this->getDomainJoinConnectors());
        $writer->writeCollectionOfObjectValues('embeddedSIMActivationCodePools', $this->getEmbeddedSIMActivationCodePools());
        $writer->writeCollectionOfObjectValues('exchangeConnectors', $this->getExchangeConnectors());
        $writer->writeCollectionOfObjectValues('exchangeOnPremisesPolicies', $this->getExchangeOnPremisesPolicies());
        $writer->writeObjectValue('exchangeOnPremisesPolicy', $this->getExchangeOnPremisesPolicy());
        $writer->writeCollectionOfObjectValues('groupPolicyCategories', $this->getGroupPolicyCategories());
        $writer->writeCollectionOfObjectValues('groupPolicyConfigurations', $this->getGroupPolicyConfigurations());
        $writer->writeCollectionOfObjectValues('groupPolicyDefinitionFiles', $this->getGroupPolicyDefinitionFiles());
        $writer->writeCollectionOfObjectValues('groupPolicyDefinitions', $this->getGroupPolicyDefinitions());
        $writer->writeCollectionOfObjectValues('groupPolicyMigrationReports', $this->getGroupPolicyMigrationReports());
        $writer->writeCollectionOfObjectValues('groupPolicyObjectFiles', $this->getGroupPolicyObjectFiles());
        $writer->writeCollectionOfObjectValues('groupPolicyUploadedDefinitionFiles', $this->getGroupPolicyUploadedDefinitionFiles());
        $writer->writeCollectionOfObjectValues('importedDeviceIdentities', $this->getImportedDeviceIdentities());
        $writer->writeCollectionOfObjectValues('importedWindowsAutopilotDeviceIdentities', $this->getImportedWindowsAutopilotDeviceIdentities());
        $writer->writeCollectionOfObjectValues('intents', $this->getIntents());
        $writer->writeStringValue('intuneAccountId', $this->getIntuneAccountId());
        $writer->writeObjectValue('intuneBrand', $this->getIntuneBrand());
        $writer->writeCollectionOfObjectValues('intuneBrandingProfiles', $this->getIntuneBrandingProfiles());
        $writer->writeCollectionOfObjectValues('iosUpdateStatuses', $this->getIosUpdateStatuses());
        $writer->writeCollectionOfObjectValues('macOSSoftwareUpdateAccountSummaries', $this->getMacOSSoftwareUpdateAccountSummaries());
        $writer->writeObjectValue('managedDeviceCleanupSettings', $this->getManagedDeviceCleanupSettings());
        $writer->writeCollectionOfObjectValues('managedDeviceEncryptionStates', $this->getManagedDeviceEncryptionStates());
        $writer->writeObjectValue('managedDeviceOverview', $this->getManagedDeviceOverview());
        $writer->writeCollectionOfObjectValues('managedDevices', $this->getManagedDevices());
        $writer->writeIntegerValue('maximumDepTokens', $this->getMaximumDepTokens());
        $writer->writeCollectionOfObjectValues('microsoftTunnelConfigurations', $this->getMicrosoftTunnelConfigurations());
        $writer->writeCollectionOfObjectValues('microsoftTunnelHealthThresholds', $this->getMicrosoftTunnelHealthThresholds());
        $writer->writeCollectionOfObjectValues('microsoftTunnelServerLogCollectionResponses', $this->getMicrosoftTunnelServerLogCollectionResponses());
        $writer->writeCollectionOfObjectValues('microsoftTunnelSites', $this->getMicrosoftTunnelSites());
        $writer->writeCollectionOfObjectValues('mobileAppTroubleshootingEvents', $this->getMobileAppTroubleshootingEvents());
        $writer->writeCollectionOfObjectValues('mobileThreatDefenseConnectors', $this->getMobileThreatDefenseConnectors());
        $writer->writeObjectValue('monitoring', $this->getMonitoring());
        $writer->writeCollectionOfObjectValues('ndesConnectors', $this->getNdesConnectors());
        $writer->writeCollectionOfObjectValues('notificationMessageTemplates', $this->getNotificationMessageTemplates());
        $writer->writeCollectionOfObjectValues('remoteActionAudits', $this->getRemoteActionAudits());
        $writer->writeCollectionOfObjectValues('remoteAssistancePartners', $this->getRemoteAssistancePartners());
        $writer->writeObjectValue('remoteAssistanceSettings', $this->getRemoteAssistanceSettings());
        $writer->writeObjectValue('reports', $this->getReports());
        $writer->writeCollectionOfObjectValues('resourceAccessProfiles', $this->getResourceAccessProfiles());
        $writer->writeCollectionOfObjectValues('resourceOperations', $this->getResourceOperations());
        $writer->writeCollectionOfObjectValues('reusablePolicySettings', $this->getReusablePolicySettings());
        $writer->writeCollectionOfObjectValues('reusableSettings', $this->getReusableSettings());
        $writer->writeCollectionOfObjectValues('roleAssignments', $this->getRoleAssignments());
        $writer->writeCollectionOfObjectValues('roleDefinitions', $this->getRoleDefinitions());
        $writer->writeCollectionOfObjectValues('roleScopeTags', $this->getRoleScopeTags());
        $writer->writeCollectionOfObjectValues('serviceNowConnections', $this->getServiceNowConnections());
        $writer->writeCollectionOfObjectValues('settingDefinitions', $this->getSettingDefinitions());
        $writer->writeObjectValue('settings', $this->getSettings());
        $writer->writeObjectValue('softwareUpdateStatusSummary', $this->getSoftwareUpdateStatusSummary());
        $writer->writeEnumValue('subscriptions', $this->getSubscriptions());
        $writer->writeEnumValue('subscriptionState', $this->getSubscriptionState());
        $writer->writeCollectionOfObjectValues('telecomExpenseManagementPartners', $this->getTelecomExpenseManagementPartners());
        $writer->writeCollectionOfObjectValues('templateInsights', $this->getTemplateInsights());
        $writer->writeCollectionOfObjectValues('templates', $this->getTemplates());
        $writer->writeCollectionOfObjectValues('templateSettings', $this->getTemplateSettings());
        $writer->writeObjectValue('tenantAttachRBAC', $this->getTenantAttachRBAC());
        $writer->writeCollectionOfObjectValues('termsAndConditions', $this->getTermsAndConditions());
        $writer->writeCollectionOfObjectValues('troubleshootingEvents', $this->getTroubleshootingEvents());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsAnomaly', $this->getUserExperienceAnalyticsAnomaly());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsAnomalyDevice', $this->getUserExperienceAnalyticsAnomalyDevice());
        $writer->writeObjectValue('userExperienceAnalyticsAnomalySeverityOverview', $this->getUserExperienceAnalyticsAnomalySeverityOverview());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsAppHealthApplicationPerformance', $this->getUserExperienceAnalyticsAppHealthApplicationPerformance());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion', $this->getUserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails', $this->getUserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId', $this->getUserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion', $this->getUserExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsAppHealthDeviceModelPerformance', $this->getUserExperienceAnalyticsAppHealthDeviceModelPerformance());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsAppHealthDevicePerformance', $this->getUserExperienceAnalyticsAppHealthDevicePerformance());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsAppHealthDevicePerformanceDetails', $this->getUserExperienceAnalyticsAppHealthDevicePerformanceDetails());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsAppHealthOSVersionPerformance', $this->getUserExperienceAnalyticsAppHealthOSVersionPerformance());
        $writer->writeObjectValue('userExperienceAnalyticsAppHealthOverview', $this->getUserExperienceAnalyticsAppHealthOverview());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsBaselines', $this->getUserExperienceAnalyticsBaselines());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsBatteryHealthAppImpact', $this->getUserExperienceAnalyticsBatteryHealthAppImpact());
        $writer->writeObjectValue('userExperienceAnalyticsBatteryHealthCapacityDetails', $this->getUserExperienceAnalyticsBatteryHealthCapacityDetails());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsBatteryHealthDeviceAppImpact', $this->getUserExperienceAnalyticsBatteryHealthDeviceAppImpact());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsBatteryHealthDevicePerformance', $this->getUserExperienceAnalyticsBatteryHealthDevicePerformance());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory', $this->getUserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsBatteryHealthModelPerformance', $this->getUserExperienceAnalyticsBatteryHealthModelPerformance());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsBatteryHealthOsPerformance', $this->getUserExperienceAnalyticsBatteryHealthOsPerformance());
        $writer->writeObjectValue('userExperienceAnalyticsBatteryHealthRuntimeDetails', $this->getUserExperienceAnalyticsBatteryHealthRuntimeDetails());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsCategories', $this->getUserExperienceAnalyticsCategories());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsDeviceMetricHistory', $this->getUserExperienceAnalyticsDeviceMetricHistory());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsDevicePerformance', $this->getUserExperienceAnalyticsDevicePerformance());
        $writer->writeObjectValue('userExperienceAnalyticsDeviceScope', $this->getUserExperienceAnalyticsDeviceScope());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsDeviceScopes', $this->getUserExperienceAnalyticsDeviceScopes());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsDeviceScores', $this->getUserExperienceAnalyticsDeviceScores());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsDeviceStartupHistory', $this->getUserExperienceAnalyticsDeviceStartupHistory());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsDeviceStartupProcesses', $this->getUserExperienceAnalyticsDeviceStartupProcesses());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsDeviceStartupProcessPerformance', $this->getUserExperienceAnalyticsDeviceStartupProcessPerformance());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsDevicesWithoutCloudIdentity', $this->getUserExperienceAnalyticsDevicesWithoutCloudIdentity());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsDeviceTimelineEvent', $this->getUserExperienceAnalyticsDeviceTimelineEvent());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsImpactingProcess', $this->getUserExperienceAnalyticsImpactingProcess());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsMetricHistory', $this->getUserExperienceAnalyticsMetricHistory());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsModelScores', $this->getUserExperienceAnalyticsModelScores());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsNotAutopilotReadyDevice', $this->getUserExperienceAnalyticsNotAutopilotReadyDevice());
        $writer->writeObjectValue('userExperienceAnalyticsOverview', $this->getUserExperienceAnalyticsOverview());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsRemoteConnection', $this->getUserExperienceAnalyticsRemoteConnection());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsResourcePerformance', $this->getUserExperienceAnalyticsResourcePerformance());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsScoreHistory', $this->getUserExperienceAnalyticsScoreHistory());
        $writer->writeObjectValue('userExperienceAnalyticsSettings', $this->getUserExperienceAnalyticsSettings());
        $writer->writeObjectValue('userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric', $this->getUserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsWorkFromAnywhereMetrics', $this->getUserExperienceAnalyticsWorkFromAnywhereMetrics());
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsWorkFromAnywhereModelPerformance', $this->getUserExperienceAnalyticsWorkFromAnywhereModelPerformance());
        $writer->writeCollectionOfObjectValues('userPfxCertificates', $this->getUserPfxCertificates());
        $writer->writeObjectValue('virtualEndpoint', $this->getVirtualEndpoint());
        $writer->writeCollectionOfObjectValues('windowsAutopilotDeploymentProfiles', $this->getWindowsAutopilotDeploymentProfiles());
        $writer->writeCollectionOfObjectValues('windowsAutopilotDeviceIdentities', $this->getWindowsAutopilotDeviceIdentities());
        $writer->writeObjectValue('windowsAutopilotSettings', $this->getWindowsAutopilotSettings());
        $writer->writeCollectionOfObjectValues('windowsDriverUpdateProfiles', $this->getWindowsDriverUpdateProfiles());
        $writer->writeCollectionOfObjectValues('windowsFeatureUpdateProfiles', $this->getWindowsFeatureUpdateProfiles());
        $writer->writeCollectionOfObjectValues('windowsInformationProtectionAppLearningSummaries', $this->getWindowsInformationProtectionAppLearningSummaries());
        $writer->writeCollectionOfObjectValues('windowsInformationProtectionNetworkLearningSummaries', $this->getWindowsInformationProtectionNetworkLearningSummaries());
        $writer->writeCollectionOfObjectValues('windowsMalwareInformation', $this->getWindowsMalwareInformation());
        $writer->writeObjectValue('windowsMalwareOverview', $this->getWindowsMalwareOverview());
        $writer->writeCollectionOfObjectValues('windowsQualityUpdateProfiles', $this->getWindowsQualityUpdateProfiles());
        $writer->writeCollectionOfObjectValues('windowsUpdateCatalogItems', $this->getWindowsUpdateCatalogItems());
        $writer->writeCollectionOfObjectValues('zebraFotaArtifacts', $this->getZebraFotaArtifacts());
        $writer->writeObjectValue('zebraFotaConnector', $this->getZebraFotaConnector());
        $writer->writeCollectionOfObjectValues('zebraFotaDeployments', $this->getZebraFotaDeployments());
    }

    /**
     * Sets the accountMoveCompletionDateTime property value. The date & time when tenant data moved between scaleunits.
     * @param DateTime|null $value Value to set for the accountMoveCompletionDateTime property.
    */
    public function setAccountMoveCompletionDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('accountMoveCompletionDateTime', $value);
    }

    /**
     * Sets the adminConsent property value. Admin consent information.
     * @param AdminConsent|null $value Value to set for the adminConsent property.
    */
    public function setAdminConsent(?AdminConsent $value): void {
        $this->getBackingStore()->set('adminConsent', $value);
    }

    /**
     * Sets the advancedThreatProtectionOnboardingStateSummary property value. The summary state of ATP onboarding state for this account.
     * @param AdvancedThreatProtectionOnboardingStateSummary|null $value Value to set for the advancedThreatProtectionOnboardingStateSummary property.
    */
    public function setAdvancedThreatProtectionOnboardingStateSummary(?AdvancedThreatProtectionOnboardingStateSummary $value): void {
        $this->getBackingStore()->set('advancedThreatProtectionOnboardingStateSummary', $value);
    }

    /**
     * Sets the androidDeviceOwnerEnrollmentProfiles property value. Android device owner enrollment profile entities.
     * @param array<AndroidDeviceOwnerEnrollmentProfile>|null $value Value to set for the androidDeviceOwnerEnrollmentProfiles property.
    */
    public function setAndroidDeviceOwnerEnrollmentProfiles(?array $value): void {
        $this->getBackingStore()->set('androidDeviceOwnerEnrollmentProfiles', $value);
    }

    /**
     * Sets the androidForWorkAppConfigurationSchemas property value. Android for Work app configuration schema entities.
     * @param array<AndroidForWorkAppConfigurationSchema>|null $value Value to set for the androidForWorkAppConfigurationSchemas property.
    */
    public function setAndroidForWorkAppConfigurationSchemas(?array $value): void {
        $this->getBackingStore()->set('androidForWorkAppConfigurationSchemas', $value);
    }

    /**
     * Sets the androidForWorkEnrollmentProfiles property value. Android for Work enrollment profile entities.
     * @param array<AndroidForWorkEnrollmentProfile>|null $value Value to set for the androidForWorkEnrollmentProfiles property.
    */
    public function setAndroidForWorkEnrollmentProfiles(?array $value): void {
        $this->getBackingStore()->set('androidForWorkEnrollmentProfiles', $value);
    }

    /**
     * Sets the androidForWorkSettings property value. The singleton Android for Work settings entity.
     * @param AndroidForWorkSettings|null $value Value to set for the androidForWorkSettings property.
    */
    public function setAndroidForWorkSettings(?AndroidForWorkSettings $value): void {
        $this->getBackingStore()->set('androidForWorkSettings', $value);
    }

    /**
     * Sets the androidManagedStoreAccountEnterpriseSettings property value. The singleton Android managed store account enterprise settings entity.
     * @param AndroidManagedStoreAccountEnterpriseSettings|null $value Value to set for the androidManagedStoreAccountEnterpriseSettings property.
    */
    public function setAndroidManagedStoreAccountEnterpriseSettings(?AndroidManagedStoreAccountEnterpriseSettings $value): void {
        $this->getBackingStore()->set('androidManagedStoreAccountEnterpriseSettings', $value);
    }

    /**
     * Sets the androidManagedStoreAppConfigurationSchemas property value. Android Enterprise app configuration schema entities.
     * @param array<AndroidManagedStoreAppConfigurationSchema>|null $value Value to set for the androidManagedStoreAppConfigurationSchemas property.
    */
    public function setAndroidManagedStoreAppConfigurationSchemas(?array $value): void {
        $this->getBackingStore()->set('androidManagedStoreAppConfigurationSchemas', $value);
    }

    /**
     * Sets the applePushNotificationCertificate property value. Apple push notification certificate.
     * @param ApplePushNotificationCertificate|null $value Value to set for the applePushNotificationCertificate property.
    */
    public function setApplePushNotificationCertificate(?ApplePushNotificationCertificate $value): void {
        $this->getBackingStore()->set('applePushNotificationCertificate', $value);
    }

    /**
     * Sets the appleUserInitiatedEnrollmentProfiles property value. Apple user initiated enrollment profiles
     * @param array<AppleUserInitiatedEnrollmentProfile>|null $value Value to set for the appleUserInitiatedEnrollmentProfiles property.
    */
    public function setAppleUserInitiatedEnrollmentProfiles(?array $value): void {
        $this->getBackingStore()->set('appleUserInitiatedEnrollmentProfiles', $value);
    }

    /**
     * Sets the assignmentFilters property value. The list of assignment filters
     * @param array<DeviceAndAppManagementAssignmentFilter>|null $value Value to set for the assignmentFilters property.
    */
    public function setAssignmentFilters(?array $value): void {
        $this->getBackingStore()->set('assignmentFilters', $value);
    }

    /**
     * Sets the auditEvents property value. The Audit Events
     * @param array<AuditEvent>|null $value Value to set for the auditEvents property.
    */
    public function setAuditEvents(?array $value): void {
        $this->getBackingStore()->set('auditEvents', $value);
    }

    /**
     * Sets the autopilotEvents property value. The list of autopilot events for the tenant.
     * @param array<DeviceManagementAutopilotEvent>|null $value Value to set for the autopilotEvents property.
    */
    public function setAutopilotEvents(?array $value): void {
        $this->getBackingStore()->set('autopilotEvents', $value);
    }

    /**
     * Sets the cartToClassAssociations property value. The Cart To Class Associations.
     * @param array<CartToClassAssociation>|null $value Value to set for the cartToClassAssociations property.
    */
    public function setCartToClassAssociations(?array $value): void {
        $this->getBackingStore()->set('cartToClassAssociations', $value);
    }

    /**
     * Sets the categories property value. The available categories
     * @param array<DeviceManagementSettingCategory>|null $value Value to set for the categories property.
    */
    public function setCategories(?array $value): void {
        $this->getBackingStore()->set('categories', $value);
    }

    /**
     * Sets the certificateConnectorDetails property value. Collection of certificate connector details, each associated with a corresponding Intune Certificate Connector.
     * @param array<CertificateConnectorDetails>|null $value Value to set for the certificateConnectorDetails property.
    */
    public function setCertificateConnectorDetails(?array $value): void {
        $this->getBackingStore()->set('certificateConnectorDetails', $value);
    }

    /**
     * Sets the chromeOSOnboardingSettings property value. Collection of ChromeOSOnboardingSettings settings associated with account.
     * @param array<ChromeOSOnboardingSettings>|null $value Value to set for the chromeOSOnboardingSettings property.
    */
    public function setChromeOSOnboardingSettings(?array $value): void {
        $this->getBackingStore()->set('chromeOSOnboardingSettings', $value);
    }

    /**
     * Sets the cloudPCConnectivityIssues property value. The list of CloudPC Connectivity Issue.
     * @param array<CloudPCConnectivityIssue>|null $value Value to set for the cloudPCConnectivityIssues property.
    */
    public function setCloudPCConnectivityIssues(?array $value): void {
        $this->getBackingStore()->set('cloudPCConnectivityIssues', $value);
    }

    /**
     * Sets the comanagedDevices property value. The list of co-managed devices report
     * @param array<ManagedDevice>|null $value Value to set for the comanagedDevices property.
    */
    public function setComanagedDevices(?array $value): void {
        $this->getBackingStore()->set('comanagedDevices', $value);
    }

    /**
     * Sets the comanagementEligibleDevices property value. The list of co-management eligible devices report
     * @param array<ComanagementEligibleDevice>|null $value Value to set for the comanagementEligibleDevices property.
    */
    public function setComanagementEligibleDevices(?array $value): void {
        $this->getBackingStore()->set('comanagementEligibleDevices', $value);
    }

    /**
     * Sets the complianceCategories property value. List of all compliance categories
     * @param array<DeviceManagementConfigurationCategory>|null $value Value to set for the complianceCategories property.
    */
    public function setComplianceCategories(?array $value): void {
        $this->getBackingStore()->set('complianceCategories', $value);
    }

    /**
     * Sets the complianceManagementPartners property value. The list of Compliance Management Partners configured by the tenant.
     * @param array<ComplianceManagementPartner>|null $value Value to set for the complianceManagementPartners property.
    */
    public function setComplianceManagementPartners(?array $value): void {
        $this->getBackingStore()->set('complianceManagementPartners', $value);
    }

    /**
     * Sets the compliancePolicies property value. List of all compliance policies
     * @param array<DeviceManagementCompliancePolicy>|null $value Value to set for the compliancePolicies property.
    */
    public function setCompliancePolicies(?array $value): void {
        $this->getBackingStore()->set('compliancePolicies', $value);
    }

    /**
     * Sets the complianceSettings property value. List of all ComplianceSettings
     * @param array<DeviceManagementConfigurationSettingDefinition>|null $value Value to set for the complianceSettings property.
    */
    public function setComplianceSettings(?array $value): void {
        $this->getBackingStore()->set('complianceSettings', $value);
    }

    /**
     * Sets the conditionalAccessSettings property value. The Exchange on premises conditional access settings. On premises conditional access will require devices to be both enrolled and compliant for mail access
     * @param OnPremisesConditionalAccessSettings|null $value Value to set for the conditionalAccessSettings property.
    */
    public function setConditionalAccessSettings(?OnPremisesConditionalAccessSettings $value): void {
        $this->getBackingStore()->set('conditionalAccessSettings', $value);
    }

    /**
     * Sets the configManagerCollections property value. A list of ConfigManagerCollection
     * @param array<ConfigManagerCollection>|null $value Value to set for the configManagerCollections property.
    */
    public function setConfigManagerCollections(?array $value): void {
        $this->getBackingStore()->set('configManagerCollections', $value);
    }

    /**
     * Sets the configurationCategories property value. List of all Configuration Categories
     * @param array<DeviceManagementConfigurationCategory>|null $value Value to set for the configurationCategories property.
    */
    public function setConfigurationCategories(?array $value): void {
        $this->getBackingStore()->set('configurationCategories', $value);
    }

    /**
     * Sets the configurationPolicies property value. List of all Configuration policies
     * @param array<DeviceManagementConfigurationPolicy>|null $value Value to set for the configurationPolicies property.
    */
    public function setConfigurationPolicies(?array $value): void {
        $this->getBackingStore()->set('configurationPolicies', $value);
    }

    /**
     * Sets the configurationPolicyTemplates property value. List of all templates
     * @param array<DeviceManagementConfigurationPolicyTemplate>|null $value Value to set for the configurationPolicyTemplates property.
    */
    public function setConfigurationPolicyTemplates(?array $value): void {
        $this->getBackingStore()->set('configurationPolicyTemplates', $value);
    }

    /**
     * Sets the configurationSettings property value. List of all ConfigurationSettings
     * @param array<DeviceManagementConfigurationSettingDefinition>|null $value Value to set for the configurationSettings property.
    */
    public function setConfigurationSettings(?array $value): void {
        $this->getBackingStore()->set('configurationSettings', $value);
    }

    /**
     * Sets the connectorStatus property value. The list of connector status for the tenant.
     * @param array<ConnectorStatusDetails>|null $value Value to set for the connectorStatus property.
    */
    public function setConnectorStatus(?array $value): void {
        $this->getBackingStore()->set('connectorStatus', $value);
    }

    /**
     * Sets the dataProcessorServiceForWindowsFeaturesOnboarding property value. A configuration entity for MEM features that utilize Data Processor Service for Windows (DPSW) data.
     * @param DataProcessorServiceForWindowsFeaturesOnboarding|null $value Value to set for the dataProcessorServiceForWindowsFeaturesOnboarding property.
    */
    public function setDataProcessorServiceForWindowsFeaturesOnboarding(?DataProcessorServiceForWindowsFeaturesOnboarding $value): void {
        $this->getBackingStore()->set('dataProcessorServiceForWindowsFeaturesOnboarding', $value);
    }

    /**
     * Sets the dataSharingConsents property value. Data sharing consents.
     * @param array<DataSharingConsent>|null $value Value to set for the dataSharingConsents property.
    */
    public function setDataSharingConsents(?array $value): void {
        $this->getBackingStore()->set('dataSharingConsents', $value);
    }

    /**
     * Sets the depOnboardingSettings property value. This collections of multiple DEP tokens per-tenant.
     * @param array<DepOnboardingSetting>|null $value Value to set for the depOnboardingSettings property.
    */
    public function setDepOnboardingSettings(?array $value): void {
        $this->getBackingStore()->set('depOnboardingSettings', $value);
    }

    /**
     * Sets the derivedCredentials property value. Collection of Derived credential settings associated with account.
     * @param array<DeviceManagementDerivedCredentialSettings>|null $value Value to set for the derivedCredentials property.
    */
    public function setDerivedCredentials(?array $value): void {
        $this->getBackingStore()->set('derivedCredentials', $value);
    }

    /**
     * Sets the detectedApps property value. The list of detected apps associated with a device.
     * @param array<DetectedApp>|null $value Value to set for the detectedApps property.
    */
    public function setDetectedApps(?array $value): void {
        $this->getBackingStore()->set('detectedApps', $value);
    }

    /**
     * Sets the deviceCategories property value. The list of device categories with the tenant.
     * @param array<DeviceCategory>|null $value Value to set for the deviceCategories property.
    */
    public function setDeviceCategories(?array $value): void {
        $this->getBackingStore()->set('deviceCategories', $value);
    }

    /**
     * Sets the deviceCompliancePolicies property value. The device compliance policies.
     * @param array<DeviceCompliancePolicy>|null $value Value to set for the deviceCompliancePolicies property.
    */
    public function setDeviceCompliancePolicies(?array $value): void {
        $this->getBackingStore()->set('deviceCompliancePolicies', $value);
    }

    /**
     * Sets the deviceCompliancePolicyDeviceStateSummary property value. The device compliance state summary for this account.
     * @param DeviceCompliancePolicyDeviceStateSummary|null $value Value to set for the deviceCompliancePolicyDeviceStateSummary property.
    */
    public function setDeviceCompliancePolicyDeviceStateSummary(?DeviceCompliancePolicyDeviceStateSummary $value): void {
        $this->getBackingStore()->set('deviceCompliancePolicyDeviceStateSummary', $value);
    }

    /**
     * Sets the deviceCompliancePolicySettingStateSummaries property value. The summary states of compliance policy settings for this account.
     * @param array<DeviceCompliancePolicySettingStateSummary>|null $value Value to set for the deviceCompliancePolicySettingStateSummaries property.
    */
    public function setDeviceCompliancePolicySettingStateSummaries(?array $value): void {
        $this->getBackingStore()->set('deviceCompliancePolicySettingStateSummaries', $value);
    }

    /**
     * Sets the deviceComplianceReportSummarizationDateTime property value. The last requested time of device compliance reporting for this account. This property is read-only.
     * @param DateTime|null $value Value to set for the deviceComplianceReportSummarizationDateTime property.
    */
    public function setDeviceComplianceReportSummarizationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('deviceComplianceReportSummarizationDateTime', $value);
    }

    /**
     * Sets the deviceComplianceScripts property value. The list of device compliance scripts associated with the tenant.
     * @param array<DeviceComplianceScript>|null $value Value to set for the deviceComplianceScripts property.
    */
    public function setDeviceComplianceScripts(?array $value): void {
        $this->getBackingStore()->set('deviceComplianceScripts', $value);
    }

    /**
     * Sets the deviceConfigurationConflictSummary property value. Summary of policies in conflict state for this account.
     * @param array<DeviceConfigurationConflictSummary>|null $value Value to set for the deviceConfigurationConflictSummary property.
    */
    public function setDeviceConfigurationConflictSummary(?array $value): void {
        $this->getBackingStore()->set('deviceConfigurationConflictSummary', $value);
    }

    /**
     * Sets the deviceConfigurationDeviceStateSummaries property value. The device configuration device state summary for this account.
     * @param DeviceConfigurationDeviceStateSummary|null $value Value to set for the deviceConfigurationDeviceStateSummaries property.
    */
    public function setDeviceConfigurationDeviceStateSummaries(?DeviceConfigurationDeviceStateSummary $value): void {
        $this->getBackingStore()->set('deviceConfigurationDeviceStateSummaries', $value);
    }

    /**
     * Sets the deviceConfigurationRestrictedAppsViolations property value. Restricted apps violations for this account.
     * @param array<RestrictedAppsViolation>|null $value Value to set for the deviceConfigurationRestrictedAppsViolations property.
    */
    public function setDeviceConfigurationRestrictedAppsViolations(?array $value): void {
        $this->getBackingStore()->set('deviceConfigurationRestrictedAppsViolations', $value);
    }

    /**
     * Sets the deviceConfigurations property value. The device configurations.
     * @param array<DeviceConfiguration>|null $value Value to set for the deviceConfigurations property.
    */
    public function setDeviceConfigurations(?array $value): void {
        $this->getBackingStore()->set('deviceConfigurations', $value);
    }

    /**
     * Sets the deviceConfigurationsAllManagedDeviceCertificateStates property value. Summary of all certificates for all devices.
     * @param array<ManagedAllDeviceCertificateState>|null $value Value to set for the deviceConfigurationsAllManagedDeviceCertificateStates property.
    */
    public function setDeviceConfigurationsAllManagedDeviceCertificateStates(?array $value): void {
        $this->getBackingStore()->set('deviceConfigurationsAllManagedDeviceCertificateStates', $value);
    }

    /**
     * Sets the deviceConfigurationUserStateSummaries property value. The device configuration user state summary for this account.
     * @param DeviceConfigurationUserStateSummary|null $value Value to set for the deviceConfigurationUserStateSummaries property.
    */
    public function setDeviceConfigurationUserStateSummaries(?DeviceConfigurationUserStateSummary $value): void {
        $this->getBackingStore()->set('deviceConfigurationUserStateSummaries', $value);
    }

    /**
     * Sets the deviceCustomAttributeShellScripts property value. The list of device custom attribute shell scripts associated with the tenant.
     * @param array<DeviceCustomAttributeShellScript>|null $value Value to set for the deviceCustomAttributeShellScripts property.
    */
    public function setDeviceCustomAttributeShellScripts(?array $value): void {
        $this->getBackingStore()->set('deviceCustomAttributeShellScripts', $value);
    }

    /**
     * Sets the deviceEnrollmentConfigurations property value. The list of device enrollment configurations
     * @param array<DeviceEnrollmentConfiguration>|null $value Value to set for the deviceEnrollmentConfigurations property.
    */
    public function setDeviceEnrollmentConfigurations(?array $value): void {
        $this->getBackingStore()->set('deviceEnrollmentConfigurations', $value);
    }

    /**
     * Sets the deviceHealthScripts property value. The list of device health scripts associated with the tenant.
     * @param array<DeviceHealthScript>|null $value Value to set for the deviceHealthScripts property.
    */
    public function setDeviceHealthScripts(?array $value): void {
        $this->getBackingStore()->set('deviceHealthScripts', $value);
    }

    /**
     * Sets the deviceManagementPartners property value. The list of Device Management Partners configured by the tenant.
     * @param array<DeviceManagementPartner>|null $value Value to set for the deviceManagementPartners property.
    */
    public function setDeviceManagementPartners(?array $value): void {
        $this->getBackingStore()->set('deviceManagementPartners', $value);
    }

    /**
     * Sets the deviceManagementScripts property value. The list of device management scripts associated with the tenant.
     * @param array<DeviceManagementScript>|null $value Value to set for the deviceManagementScripts property.
    */
    public function setDeviceManagementScripts(?array $value): void {
        $this->getBackingStore()->set('deviceManagementScripts', $value);
    }

    /**
     * Sets the deviceProtectionOverview property value. Device protection overview.
     * @param DeviceProtectionOverview|null $value Value to set for the deviceProtectionOverview property.
    */
    public function setDeviceProtectionOverview(?DeviceProtectionOverview $value): void {
        $this->getBackingStore()->set('deviceProtectionOverview', $value);
    }

    /**
     * Sets the deviceShellScripts property value. The list of device shell scripts associated with the tenant.
     * @param array<DeviceShellScript>|null $value Value to set for the deviceShellScripts property.
    */
    public function setDeviceShellScripts(?array $value): void {
        $this->getBackingStore()->set('deviceShellScripts', $value);
    }

    /**
     * Sets the domainJoinConnectors property value. A list of connector objects.
     * @param array<DeviceManagementDomainJoinConnector>|null $value Value to set for the domainJoinConnectors property.
    */
    public function setDomainJoinConnectors(?array $value): void {
        $this->getBackingStore()->set('domainJoinConnectors', $value);
    }

    /**
     * Sets the embeddedSIMActivationCodePools property value. The embedded SIM activation code pools created by this account.
     * @param array<EmbeddedSIMActivationCodePool>|null $value Value to set for the embeddedSIMActivationCodePools property.
    */
    public function setEmbeddedSIMActivationCodePools(?array $value): void {
        $this->getBackingStore()->set('embeddedSIMActivationCodePools', $value);
    }

    /**
     * Sets the exchangeConnectors property value. The list of Exchange Connectors configured by the tenant.
     * @param array<DeviceManagementExchangeConnector>|null $value Value to set for the exchangeConnectors property.
    */
    public function setExchangeConnectors(?array $value): void {
        $this->getBackingStore()->set('exchangeConnectors', $value);
    }

    /**
     * Sets the exchangeOnPremisesPolicies property value. The list of Exchange On Premisis policies configured by the tenant.
     * @param array<DeviceManagementExchangeOnPremisesPolicy>|null $value Value to set for the exchangeOnPremisesPolicies property.
    */
    public function setExchangeOnPremisesPolicies(?array $value): void {
        $this->getBackingStore()->set('exchangeOnPremisesPolicies', $value);
    }

    /**
     * Sets the exchangeOnPremisesPolicy property value. The policy which controls mobile device access to Exchange On Premises
     * @param DeviceManagementExchangeOnPremisesPolicy|null $value Value to set for the exchangeOnPremisesPolicy property.
    */
    public function setExchangeOnPremisesPolicy(?DeviceManagementExchangeOnPremisesPolicy $value): void {
        $this->getBackingStore()->set('exchangeOnPremisesPolicy', $value);
    }

    /**
     * Sets the groupPolicyCategories property value. The available group policy categories for this account.
     * @param array<GroupPolicyCategory>|null $value Value to set for the groupPolicyCategories property.
    */
    public function setGroupPolicyCategories(?array $value): void {
        $this->getBackingStore()->set('groupPolicyCategories', $value);
    }

    /**
     * Sets the groupPolicyConfigurations property value. The group policy configurations created by this account.
     * @param array<GroupPolicyConfiguration>|null $value Value to set for the groupPolicyConfigurations property.
    */
    public function setGroupPolicyConfigurations(?array $value): void {
        $this->getBackingStore()->set('groupPolicyConfigurations', $value);
    }

    /**
     * Sets the groupPolicyDefinitionFiles property value. The available group policy definition files for this account.
     * @param array<GroupPolicyDefinitionFile>|null $value Value to set for the groupPolicyDefinitionFiles property.
    */
    public function setGroupPolicyDefinitionFiles(?array $value): void {
        $this->getBackingStore()->set('groupPolicyDefinitionFiles', $value);
    }

    /**
     * Sets the groupPolicyDefinitions property value. The available group policy definitions for this account.
     * @param array<GroupPolicyDefinition>|null $value Value to set for the groupPolicyDefinitions property.
    */
    public function setGroupPolicyDefinitions(?array $value): void {
        $this->getBackingStore()->set('groupPolicyDefinitions', $value);
    }

    /**
     * Sets the groupPolicyMigrationReports property value. A list of Group Policy migration reports.
     * @param array<GroupPolicyMigrationReport>|null $value Value to set for the groupPolicyMigrationReports property.
    */
    public function setGroupPolicyMigrationReports(?array $value): void {
        $this->getBackingStore()->set('groupPolicyMigrationReports', $value);
    }

    /**
     * Sets the groupPolicyObjectFiles property value. A list of Group Policy Object files uploaded.
     * @param array<GroupPolicyObjectFile>|null $value Value to set for the groupPolicyObjectFiles property.
    */
    public function setGroupPolicyObjectFiles(?array $value): void {
        $this->getBackingStore()->set('groupPolicyObjectFiles', $value);
    }

    /**
     * Sets the groupPolicyUploadedDefinitionFiles property value. The available group policy uploaded definition files for this account.
     * @param array<GroupPolicyUploadedDefinitionFile>|null $value Value to set for the groupPolicyUploadedDefinitionFiles property.
    */
    public function setGroupPolicyUploadedDefinitionFiles(?array $value): void {
        $this->getBackingStore()->set('groupPolicyUploadedDefinitionFiles', $value);
    }

    /**
     * Sets the importedDeviceIdentities property value. The imported device identities.
     * @param array<ImportedDeviceIdentity>|null $value Value to set for the importedDeviceIdentities property.
    */
    public function setImportedDeviceIdentities(?array $value): void {
        $this->getBackingStore()->set('importedDeviceIdentities', $value);
    }

    /**
     * Sets the importedWindowsAutopilotDeviceIdentities property value. Collection of imported Windows autopilot devices.
     * @param array<ImportedWindowsAutopilotDeviceIdentity>|null $value Value to set for the importedWindowsAutopilotDeviceIdentities property.
    */
    public function setImportedWindowsAutopilotDeviceIdentities(?array $value): void {
        $this->getBackingStore()->set('importedWindowsAutopilotDeviceIdentities', $value);
    }

    /**
     * Sets the intents property value. The device management intents
     * @param array<DeviceManagementIntent>|null $value Value to set for the intents property.
    */
    public function setIntents(?array $value): void {
        $this->getBackingStore()->set('intents', $value);
    }

    /**
     * Sets the intuneAccountId property value. Intune Account ID for given tenant
     * @param string|null $value Value to set for the intuneAccountId property.
    */
    public function setIntuneAccountId(?string $value): void {
        $this->getBackingStore()->set('intuneAccountId', $value);
    }

    /**
     * Sets the intuneBrand property value. intuneBrand contains data which is used in customizing the appearance of the Company Portal applications as well as the end user web portal.
     * @param IntuneBrand|null $value Value to set for the intuneBrand property.
    */
    public function setIntuneBrand(?IntuneBrand $value): void {
        $this->getBackingStore()->set('intuneBrand', $value);
    }

    /**
     * Sets the intuneBrandingProfiles property value. Intune branding profiles targeted to AAD groups
     * @param array<IntuneBrandingProfile>|null $value Value to set for the intuneBrandingProfiles property.
    */
    public function setIntuneBrandingProfiles(?array $value): void {
        $this->getBackingStore()->set('intuneBrandingProfiles', $value);
    }

    /**
     * Sets the iosUpdateStatuses property value. The IOS software update installation statuses for this account.
     * @param array<IosUpdateDeviceStatus>|null $value Value to set for the iosUpdateStatuses property.
    */
    public function setIosUpdateStatuses(?array $value): void {
        $this->getBackingStore()->set('iosUpdateStatuses', $value);
    }

    /**
     * Sets the lastReportAggregationDateTime property value. The last modified time of reporting for this account. This property is read-only.
     * @param DateTime|null $value Value to set for the lastReportAggregationDateTime property.
    */
    public function setLastReportAggregationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastReportAggregationDateTime', $value);
    }

    /**
     * Sets the legacyPcManangementEnabled property value. The property to enable Non-MDM managed legacy PC management for this account. This property is read-only.
     * @param bool|null $value Value to set for the legacyPcManangementEnabled property.
    */
    public function setLegacyPcManangementEnabled(?bool $value): void {
        $this->getBackingStore()->set('legacyPcManangementEnabled', $value);
    }

    /**
     * Sets the macOSSoftwareUpdateAccountSummaries property value. The MacOS software update account summaries for this account.
     * @param array<MacOSSoftwareUpdateAccountSummary>|null $value Value to set for the macOSSoftwareUpdateAccountSummaries property.
    */
    public function setMacOSSoftwareUpdateAccountSummaries(?array $value): void {
        $this->getBackingStore()->set('macOSSoftwareUpdateAccountSummaries', $value);
    }

    /**
     * Sets the managedDeviceCleanupSettings property value. Device cleanup rule
     * @param ManagedDeviceCleanupSettings|null $value Value to set for the managedDeviceCleanupSettings property.
    */
    public function setManagedDeviceCleanupSettings(?ManagedDeviceCleanupSettings $value): void {
        $this->getBackingStore()->set('managedDeviceCleanupSettings', $value);
    }

    /**
     * Sets the managedDeviceEncryptionStates property value. Encryption report for devices in this account
     * @param array<ManagedDeviceEncryptionState>|null $value Value to set for the managedDeviceEncryptionStates property.
    */
    public function setManagedDeviceEncryptionStates(?array $value): void {
        $this->getBackingStore()->set('managedDeviceEncryptionStates', $value);
    }

    /**
     * Sets the managedDeviceOverview property value. Device overview
     * @param ManagedDeviceOverview|null $value Value to set for the managedDeviceOverview property.
    */
    public function setManagedDeviceOverview(?ManagedDeviceOverview $value): void {
        $this->getBackingStore()->set('managedDeviceOverview', $value);
    }

    /**
     * Sets the managedDevices property value. The list of managed devices.
     * @param array<ManagedDevice>|null $value Value to set for the managedDevices property.
    */
    public function setManagedDevices(?array $value): void {
        $this->getBackingStore()->set('managedDevices', $value);
    }

    /**
     * Sets the maximumDepTokens property value. Maximum number of DEP tokens allowed per-tenant.
     * @param int|null $value Value to set for the maximumDepTokens property.
    */
    public function setMaximumDepTokens(?int $value): void {
        $this->getBackingStore()->set('maximumDepTokens', $value);
    }

    /**
     * Sets the microsoftTunnelConfigurations property value. Collection of MicrosoftTunnelConfiguration settings associated with account.
     * @param array<MicrosoftTunnelConfiguration>|null $value Value to set for the microsoftTunnelConfigurations property.
    */
    public function setMicrosoftTunnelConfigurations(?array $value): void {
        $this->getBackingStore()->set('microsoftTunnelConfigurations', $value);
    }

    /**
     * Sets the microsoftTunnelHealthThresholds property value. Collection of MicrosoftTunnelHealthThreshold settings associated with account.
     * @param array<MicrosoftTunnelHealthThreshold>|null $value Value to set for the microsoftTunnelHealthThresholds property.
    */
    public function setMicrosoftTunnelHealthThresholds(?array $value): void {
        $this->getBackingStore()->set('microsoftTunnelHealthThresholds', $value);
    }

    /**
     * Sets the microsoftTunnelServerLogCollectionResponses property value. Collection of MicrosoftTunnelServerLogCollectionResponse settings associated with account.
     * @param array<MicrosoftTunnelServerLogCollectionResponse>|null $value Value to set for the microsoftTunnelServerLogCollectionResponses property.
    */
    public function setMicrosoftTunnelServerLogCollectionResponses(?array $value): void {
        $this->getBackingStore()->set('microsoftTunnelServerLogCollectionResponses', $value);
    }

    /**
     * Sets the microsoftTunnelSites property value. Collection of MicrosoftTunnelSite settings associated with account.
     * @param array<MicrosoftTunnelSite>|null $value Value to set for the microsoftTunnelSites property.
    */
    public function setMicrosoftTunnelSites(?array $value): void {
        $this->getBackingStore()->set('microsoftTunnelSites', $value);
    }

    /**
     * Sets the mobileAppTroubleshootingEvents property value. The collection property of MobileAppTroubleshootingEvent.
     * @param array<MobileAppTroubleshootingEvent>|null $value Value to set for the mobileAppTroubleshootingEvents property.
    */
    public function setMobileAppTroubleshootingEvents(?array $value): void {
        $this->getBackingStore()->set('mobileAppTroubleshootingEvents', $value);
    }

    /**
     * Sets the mobileThreatDefenseConnectors property value. The list of Mobile threat Defense connectors configured by the tenant.
     * @param array<MobileThreatDefenseConnector>|null $value Value to set for the mobileThreatDefenseConnectors property.
    */
    public function setMobileThreatDefenseConnectors(?array $value): void {
        $this->getBackingStore()->set('mobileThreatDefenseConnectors', $value);
    }

    /**
     * Sets the monitoring property value. The monitoring property
     * @param Monitoring|null $value Value to set for the monitoring property.
    */
    public function setMonitoring(?Monitoring $value): void {
        $this->getBackingStore()->set('monitoring', $value);
    }

    /**
     * Sets the ndesConnectors property value. The collection of Ndes connectors for this account.
     * @param array<NdesConnector>|null $value Value to set for the ndesConnectors property.
    */
    public function setNdesConnectors(?array $value): void {
        $this->getBackingStore()->set('ndesConnectors', $value);
    }

    /**
     * Sets the notificationMessageTemplates property value. The Notification Message Templates.
     * @param array<NotificationMessageTemplate>|null $value Value to set for the notificationMessageTemplates property.
    */
    public function setNotificationMessageTemplates(?array $value): void {
        $this->getBackingStore()->set('notificationMessageTemplates', $value);
    }

    /**
     * Sets the remoteActionAudits property value. The list of device remote action audits with the tenant.
     * @param array<RemoteActionAudit>|null $value Value to set for the remoteActionAudits property.
    */
    public function setRemoteActionAudits(?array $value): void {
        $this->getBackingStore()->set('remoteActionAudits', $value);
    }

    /**
     * Sets the remoteAssistancePartners property value. The remote assist partners.
     * @param array<RemoteAssistancePartner>|null $value Value to set for the remoteAssistancePartners property.
    */
    public function setRemoteAssistancePartners(?array $value): void {
        $this->getBackingStore()->set('remoteAssistancePartners', $value);
    }

    /**
     * Sets the remoteAssistanceSettings property value. The remote assistance settings singleton
     * @param RemoteAssistanceSettings|null $value Value to set for the remoteAssistanceSettings property.
    */
    public function setRemoteAssistanceSettings(?RemoteAssistanceSettings $value): void {
        $this->getBackingStore()->set('remoteAssistanceSettings', $value);
    }

    /**
     * Sets the reports property value. Reports singleton
     * @param DeviceManagementReports|null $value Value to set for the reports property.
    */
    public function setReports(?DeviceManagementReports $value): void {
        $this->getBackingStore()->set('reports', $value);
    }

    /**
     * Sets the resourceAccessProfiles property value. Collection of resource access settings associated with account.
     * @param array<DeviceManagementResourceAccessProfileBase>|null $value Value to set for the resourceAccessProfiles property.
    */
    public function setResourceAccessProfiles(?array $value): void {
        $this->getBackingStore()->set('resourceAccessProfiles', $value);
    }

    /**
     * Sets the resourceOperations property value. The Resource Operations.
     * @param array<ResourceOperation>|null $value Value to set for the resourceOperations property.
    */
    public function setResourceOperations(?array $value): void {
        $this->getBackingStore()->set('resourceOperations', $value);
    }

    /**
     * Sets the reusablePolicySettings property value. List of all reusable settings that can be referred in a policy
     * @param array<DeviceManagementReusablePolicySetting>|null $value Value to set for the reusablePolicySettings property.
    */
    public function setReusablePolicySettings(?array $value): void {
        $this->getBackingStore()->set('reusablePolicySettings', $value);
    }

    /**
     * Sets the reusableSettings property value. List of all reusable settings
     * @param array<DeviceManagementConfigurationSettingDefinition>|null $value Value to set for the reusableSettings property.
    */
    public function setReusableSettings(?array $value): void {
        $this->getBackingStore()->set('reusableSettings', $value);
    }

    /**
     * Sets the roleAssignments property value. The Role Assignments.
     * @param array<DeviceAndAppManagementRoleAssignment>|null $value Value to set for the roleAssignments property.
    */
    public function setRoleAssignments(?array $value): void {
        $this->getBackingStore()->set('roleAssignments', $value);
    }

    /**
     * Sets the roleDefinitions property value. The Role Definitions.
     * @param array<RoleDefinition>|null $value Value to set for the roleDefinitions property.
    */
    public function setRoleDefinitions(?array $value): void {
        $this->getBackingStore()->set('roleDefinitions', $value);
    }

    /**
     * Sets the roleScopeTags property value. The Role Scope Tags.
     * @param array<RoleScopeTag>|null $value Value to set for the roleScopeTags property.
    */
    public function setRoleScopeTags(?array $value): void {
        $this->getBackingStore()->set('roleScopeTags', $value);
    }

    /**
     * Sets the serviceNowConnections property value. A list of ServiceNowConnections
     * @param array<ServiceNowConnection>|null $value Value to set for the serviceNowConnections property.
    */
    public function setServiceNowConnections(?array $value): void {
        $this->getBackingStore()->set('serviceNowConnections', $value);
    }

    /**
     * Sets the settingDefinitions property value. The device management intent setting definitions
     * @param array<DeviceManagementSettingDefinition>|null $value Value to set for the settingDefinitions property.
    */
    public function setSettingDefinitions(?array $value): void {
        $this->getBackingStore()->set('settingDefinitions', $value);
    }

    /**
     * Sets the settings property value. Account level settings.
     * @param DeviceManagementSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?DeviceManagementSettings $value): void {
        $this->getBackingStore()->set('settings', $value);
    }

    /**
     * Sets the softwareUpdateStatusSummary property value. The software update status summary.
     * @param SoftwareUpdateStatusSummary|null $value Value to set for the softwareUpdateStatusSummary property.
    */
    public function setSoftwareUpdateStatusSummary(?SoftwareUpdateStatusSummary $value): void {
        $this->getBackingStore()->set('softwareUpdateStatusSummary', $value);
    }

    /**
     * Sets the subscriptions property value. Tenant mobile device management subscriptions.
     * @param DeviceManagementSubscriptions|null $value Value to set for the subscriptions property.
    */
    public function setSubscriptions(?DeviceManagementSubscriptions $value): void {
        $this->getBackingStore()->set('subscriptions', $value);
    }

    /**
     * Sets the subscriptionState property value. Tenant mobile device management subscription state.
     * @param DeviceManagementSubscriptionState|null $value Value to set for the subscriptionState property.
    */
    public function setSubscriptionState(?DeviceManagementSubscriptionState $value): void {
        $this->getBackingStore()->set('subscriptionState', $value);
    }

    /**
     * Sets the telecomExpenseManagementPartners property value. The telecom expense management partners.
     * @param array<TelecomExpenseManagementPartner>|null $value Value to set for the telecomExpenseManagementPartners property.
    */
    public function setTelecomExpenseManagementPartners(?array $value): void {
        $this->getBackingStore()->set('telecomExpenseManagementPartners', $value);
    }

    /**
     * Sets the templateInsights property value. List of setting insights in a template
     * @param array<DeviceManagementTemplateInsightsDefinition>|null $value Value to set for the templateInsights property.
    */
    public function setTemplateInsights(?array $value): void {
        $this->getBackingStore()->set('templateInsights', $value);
    }

    /**
     * Sets the templates property value. The available templates
     * @param array<DeviceManagementTemplate>|null $value Value to set for the templates property.
    */
    public function setTemplates(?array $value): void {
        $this->getBackingStore()->set('templates', $value);
    }

    /**
     * Sets the templateSettings property value. List of all TemplateSettings
     * @param array<DeviceManagementConfigurationSettingTemplate>|null $value Value to set for the templateSettings property.
    */
    public function setTemplateSettings(?array $value): void {
        $this->getBackingStore()->set('templateSettings', $value);
    }

    /**
     * Sets the tenantAttachRBAC property value. TenantAttach RBAC Enablement
     * @param TenantAttachRBAC|null $value Value to set for the tenantAttachRBAC property.
    */
    public function setTenantAttachRBAC(?TenantAttachRBAC $value): void {
        $this->getBackingStore()->set('tenantAttachRBAC', $value);
    }

    /**
     * Sets the termsAndConditions property value. The terms and conditions associated with device management of the company.
     * @param array<TermsAndConditions>|null $value Value to set for the termsAndConditions property.
    */
    public function setTermsAndConditions(?array $value): void {
        $this->getBackingStore()->set('termsAndConditions', $value);
    }

    /**
     * Sets the troubleshootingEvents property value. The list of troubleshooting events for the tenant.
     * @param array<DeviceManagementTroubleshootingEvent>|null $value Value to set for the troubleshootingEvents property.
    */
    public function setTroubleshootingEvents(?array $value): void {
        $this->getBackingStore()->set('troubleshootingEvents', $value);
    }

    /**
     * Sets the unlicensedAdminstratorsEnabled property value. When enabled, users assigned as administrators via Role Assignment Memberships do not require an assigned Intune license. Prior to this, only Intune licensed users were granted permissions with an Intune role unless they were assigned a role via Azure Active Directory. You are limited to 350 unlicensed direct members for each AAD security group in a role assignment, but you can assign multiple AAD security groups to a role if you need to support more than 350 unlicensed administrators. Licensed administrators are unaffected, do not have to be direct members, nor does the 350 member limit apply. This property is read-only.
     * @param bool|null $value Value to set for the unlicensedAdminstratorsEnabled property.
    */
    public function setUnlicensedAdminstratorsEnabled(?bool $value): void {
        $this->getBackingStore()->set('unlicensedAdminstratorsEnabled', $value);
    }

    /**
     * Sets the userExperienceAnalyticsAnomaly property value. The user experience analytics anomaly entity contains anomaly details.
     * @param array<UserExperienceAnalyticsAnomaly>|null $value Value to set for the userExperienceAnalyticsAnomaly property.
    */
    public function setUserExperienceAnalyticsAnomaly(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsAnomaly', $value);
    }

    /**
     * Sets the userExperienceAnalyticsAnomalyDevice property value. The user experience analytics anomaly entity contains device details.
     * @param array<UserExperienceAnalyticsAnomalyDevice>|null $value Value to set for the userExperienceAnalyticsAnomalyDevice property.
    */
    public function setUserExperienceAnalyticsAnomalyDevice(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsAnomalyDevice', $value);
    }

    /**
     * Sets the userExperienceAnalyticsAnomalySeverityOverview property value. The user experience analytics anomaly severity overview entity contains the count information for each severity of anomaly.
     * @param UserExperienceAnalyticsAnomalySeverityOverview|null $value Value to set for the userExperienceAnalyticsAnomalySeverityOverview property.
    */
    public function setUserExperienceAnalyticsAnomalySeverityOverview(?UserExperienceAnalyticsAnomalySeverityOverview $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsAnomalySeverityOverview', $value);
    }

    /**
     * Sets the userExperienceAnalyticsAppHealthApplicationPerformance property value. User experience analytics appHealth Application Performance
     * @param array<UserExperienceAnalyticsAppHealthApplicationPerformance>|null $value Value to set for the userExperienceAnalyticsAppHealthApplicationPerformance property.
    */
    public function setUserExperienceAnalyticsAppHealthApplicationPerformance(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsAppHealthApplicationPerformance', $value);
    }

    /**
     * Sets the userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion property value. User experience analytics appHealth Application Performance by App Version
     * @param array<UserExperienceAnalyticsAppHealthAppPerformanceByAppVersion>|null $value Value to set for the userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion property.
    */
    public function setUserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion', $value);
    }

    /**
     * Sets the userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails property value. User experience analytics appHealth Application Performance by App Version details
     * @param array<UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails>|null $value Value to set for the userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails property.
    */
    public function setUserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails', $value);
    }

    /**
     * Sets the userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId property value. User experience analytics appHealth Application Performance by App Version Device Id
     * @param array<UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId>|null $value Value to set for the userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId property.
    */
    public function setUserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId', $value);
    }

    /**
     * Sets the userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion property value. User experience analytics appHealth Application Performance by OS Version
     * @param array<UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion>|null $value Value to set for the userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion property.
    */
    public function setUserExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion', $value);
    }

    /**
     * Sets the userExperienceAnalyticsAppHealthDeviceModelPerformance property value. User experience analytics appHealth Model Performance
     * @param array<UserExperienceAnalyticsAppHealthDeviceModelPerformance>|null $value Value to set for the userExperienceAnalyticsAppHealthDeviceModelPerformance property.
    */
    public function setUserExperienceAnalyticsAppHealthDeviceModelPerformance(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsAppHealthDeviceModelPerformance', $value);
    }

    /**
     * Sets the userExperienceAnalyticsAppHealthDevicePerformance property value. User experience analytics appHealth Device Performance
     * @param array<UserExperienceAnalyticsAppHealthDevicePerformance>|null $value Value to set for the userExperienceAnalyticsAppHealthDevicePerformance property.
    */
    public function setUserExperienceAnalyticsAppHealthDevicePerformance(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsAppHealthDevicePerformance', $value);
    }

    /**
     * Sets the userExperienceAnalyticsAppHealthDevicePerformanceDetails property value. User experience analytics device performance details
     * @param array<UserExperienceAnalyticsAppHealthDevicePerformanceDetails>|null $value Value to set for the userExperienceAnalyticsAppHealthDevicePerformanceDetails property.
    */
    public function setUserExperienceAnalyticsAppHealthDevicePerformanceDetails(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsAppHealthDevicePerformanceDetails', $value);
    }

    /**
     * Sets the userExperienceAnalyticsAppHealthOSVersionPerformance property value. User experience analytics appHealth OS version Performance
     * @param array<UserExperienceAnalyticsAppHealthOSVersionPerformance>|null $value Value to set for the userExperienceAnalyticsAppHealthOSVersionPerformance property.
    */
    public function setUserExperienceAnalyticsAppHealthOSVersionPerformance(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsAppHealthOSVersionPerformance', $value);
    }

    /**
     * Sets the userExperienceAnalyticsAppHealthOverview property value. User experience analytics appHealth overview
     * @param UserExperienceAnalyticsCategory|null $value Value to set for the userExperienceAnalyticsAppHealthOverview property.
    */
    public function setUserExperienceAnalyticsAppHealthOverview(?UserExperienceAnalyticsCategory $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsAppHealthOverview', $value);
    }

    /**
     * Sets the userExperienceAnalyticsBaselines property value. User experience analytics baselines
     * @param array<UserExperienceAnalyticsBaseline>|null $value Value to set for the userExperienceAnalyticsBaselines property.
    */
    public function setUserExperienceAnalyticsBaselines(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsBaselines', $value);
    }

    /**
     * Sets the userExperienceAnalyticsBatteryHealthAppImpact property value. User Experience Analytics Battery Health App Impact
     * @param array<UserExperienceAnalyticsBatteryHealthAppImpact>|null $value Value to set for the userExperienceAnalyticsBatteryHealthAppImpact property.
    */
    public function setUserExperienceAnalyticsBatteryHealthAppImpact(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsBatteryHealthAppImpact', $value);
    }

    /**
     * Sets the userExperienceAnalyticsBatteryHealthCapacityDetails property value. User Experience Analytics Battery Health Capacity Details
     * @param UserExperienceAnalyticsBatteryHealthCapacityDetails|null $value Value to set for the userExperienceAnalyticsBatteryHealthCapacityDetails property.
    */
    public function setUserExperienceAnalyticsBatteryHealthCapacityDetails(?UserExperienceAnalyticsBatteryHealthCapacityDetails $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsBatteryHealthCapacityDetails', $value);
    }

    /**
     * Sets the userExperienceAnalyticsBatteryHealthDeviceAppImpact property value. User Experience Analytics Battery Health Device App Impact
     * @param array<UserExperienceAnalyticsBatteryHealthDeviceAppImpact>|null $value Value to set for the userExperienceAnalyticsBatteryHealthDeviceAppImpact property.
    */
    public function setUserExperienceAnalyticsBatteryHealthDeviceAppImpact(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsBatteryHealthDeviceAppImpact', $value);
    }

    /**
     * Sets the userExperienceAnalyticsBatteryHealthDevicePerformance property value. User Experience Analytics Battery Health Device Performance
     * @param array<UserExperienceAnalyticsBatteryHealthDevicePerformance>|null $value Value to set for the userExperienceAnalyticsBatteryHealthDevicePerformance property.
    */
    public function setUserExperienceAnalyticsBatteryHealthDevicePerformance(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsBatteryHealthDevicePerformance', $value);
    }

    /**
     * Sets the userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory property value. User Experience Analytics Battery Health Device Runtime History
     * @param array<UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory>|null $value Value to set for the userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory property.
    */
    public function setUserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory', $value);
    }

    /**
     * Sets the userExperienceAnalyticsBatteryHealthModelPerformance property value. User Experience Analytics Battery Health Model Performance
     * @param array<UserExperienceAnalyticsBatteryHealthModelPerformance>|null $value Value to set for the userExperienceAnalyticsBatteryHealthModelPerformance property.
    */
    public function setUserExperienceAnalyticsBatteryHealthModelPerformance(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsBatteryHealthModelPerformance', $value);
    }

    /**
     * Sets the userExperienceAnalyticsBatteryHealthOsPerformance property value. User Experience Analytics Battery Health Os Performance
     * @param array<UserExperienceAnalyticsBatteryHealthOsPerformance>|null $value Value to set for the userExperienceAnalyticsBatteryHealthOsPerformance property.
    */
    public function setUserExperienceAnalyticsBatteryHealthOsPerformance(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsBatteryHealthOsPerformance', $value);
    }

    /**
     * Sets the userExperienceAnalyticsBatteryHealthRuntimeDetails property value. User Experience Analytics Battery Health Runtime Details
     * @param UserExperienceAnalyticsBatteryHealthRuntimeDetails|null $value Value to set for the userExperienceAnalyticsBatteryHealthRuntimeDetails property.
    */
    public function setUserExperienceAnalyticsBatteryHealthRuntimeDetails(?UserExperienceAnalyticsBatteryHealthRuntimeDetails $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsBatteryHealthRuntimeDetails', $value);
    }

    /**
     * Sets the userExperienceAnalyticsCategories property value. User experience analytics categories
     * @param array<UserExperienceAnalyticsCategory>|null $value Value to set for the userExperienceAnalyticsCategories property.
    */
    public function setUserExperienceAnalyticsCategories(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsCategories', $value);
    }

    /**
     * Sets the userExperienceAnalyticsDeviceMetricHistory property value. User experience analytics device metric history
     * @param array<UserExperienceAnalyticsMetricHistory>|null $value Value to set for the userExperienceAnalyticsDeviceMetricHistory property.
    */
    public function setUserExperienceAnalyticsDeviceMetricHistory(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsDeviceMetricHistory', $value);
    }

    /**
     * Sets the userExperienceAnalyticsDevicePerformance property value. User experience analytics device performance
     * @param array<UserExperienceAnalyticsDevicePerformance>|null $value Value to set for the userExperienceAnalyticsDevicePerformance property.
    */
    public function setUserExperienceAnalyticsDevicePerformance(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsDevicePerformance', $value);
    }

    /**
     * Sets the userExperienceAnalyticsDeviceScope property value. The user experience analytics device scope entity endpoint to trigger on the service to either START or STOP computing metrics data based on a device scope configuration.
     * @param UserExperienceAnalyticsDeviceScope|null $value Value to set for the userExperienceAnalyticsDeviceScope property.
    */
    public function setUserExperienceAnalyticsDeviceScope(?UserExperienceAnalyticsDeviceScope $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsDeviceScope', $value);
    }

    /**
     * Sets the userExperienceAnalyticsDeviceScopes property value. The user experience analytics device scope entity contains device scope configuration use to apply filtering on the endpoint analytics reports.
     * @param array<UserExperienceAnalyticsDeviceScope>|null $value Value to set for the userExperienceAnalyticsDeviceScopes property.
    */
    public function setUserExperienceAnalyticsDeviceScopes(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsDeviceScopes', $value);
    }

    /**
     * Sets the userExperienceAnalyticsDeviceScores property value. User experience analytics device scores
     * @param array<UserExperienceAnalyticsDeviceScores>|null $value Value to set for the userExperienceAnalyticsDeviceScores property.
    */
    public function setUserExperienceAnalyticsDeviceScores(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsDeviceScores', $value);
    }

    /**
     * Sets the userExperienceAnalyticsDeviceStartupHistory property value. User experience analytics device Startup History
     * @param array<UserExperienceAnalyticsDeviceStartupHistory>|null $value Value to set for the userExperienceAnalyticsDeviceStartupHistory property.
    */
    public function setUserExperienceAnalyticsDeviceStartupHistory(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsDeviceStartupHistory', $value);
    }

    /**
     * Sets the userExperienceAnalyticsDeviceStartupProcesses property value. User experience analytics device Startup Processes
     * @param array<UserExperienceAnalyticsDeviceStartupProcess>|null $value Value to set for the userExperienceAnalyticsDeviceStartupProcesses property.
    */
    public function setUserExperienceAnalyticsDeviceStartupProcesses(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsDeviceStartupProcesses', $value);
    }

    /**
     * Sets the userExperienceAnalyticsDeviceStartupProcessPerformance property value. User experience analytics device Startup Process Performance
     * @param array<UserExperienceAnalyticsDeviceStartupProcessPerformance>|null $value Value to set for the userExperienceAnalyticsDeviceStartupProcessPerformance property.
    */
    public function setUserExperienceAnalyticsDeviceStartupProcessPerformance(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsDeviceStartupProcessPerformance', $value);
    }

    /**
     * Sets the userExperienceAnalyticsDevicesWithoutCloudIdentity property value. User experience analytics devices without cloud identity.
     * @param array<UserExperienceAnalyticsDeviceWithoutCloudIdentity>|null $value Value to set for the userExperienceAnalyticsDevicesWithoutCloudIdentity property.
    */
    public function setUserExperienceAnalyticsDevicesWithoutCloudIdentity(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsDevicesWithoutCloudIdentity', $value);
    }

    /**
     * Sets the userExperienceAnalyticsDeviceTimelineEvent property value. The user experience analytics device events entity contains NRT device timeline event details.
     * @param array<UserExperienceAnalyticsDeviceTimelineEvent>|null $value Value to set for the userExperienceAnalyticsDeviceTimelineEvent property.
    */
    public function setUserExperienceAnalyticsDeviceTimelineEvent(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsDeviceTimelineEvent', $value);
    }

    /**
     * Sets the userExperienceAnalyticsImpactingProcess property value. User experience analytics impacting process
     * @param array<UserExperienceAnalyticsImpactingProcess>|null $value Value to set for the userExperienceAnalyticsImpactingProcess property.
    */
    public function setUserExperienceAnalyticsImpactingProcess(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsImpactingProcess', $value);
    }

    /**
     * Sets the userExperienceAnalyticsMetricHistory property value. User experience analytics metric history
     * @param array<UserExperienceAnalyticsMetricHistory>|null $value Value to set for the userExperienceAnalyticsMetricHistory property.
    */
    public function setUserExperienceAnalyticsMetricHistory(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsMetricHistory', $value);
    }

    /**
     * Sets the userExperienceAnalyticsModelScores property value. User experience analytics model scores
     * @param array<UserExperienceAnalyticsModelScores>|null $value Value to set for the userExperienceAnalyticsModelScores property.
    */
    public function setUserExperienceAnalyticsModelScores(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsModelScores', $value);
    }

    /**
     * Sets the userExperienceAnalyticsNotAutopilotReadyDevice property value. User experience analytics devices not Windows Autopilot ready.
     * @param array<UserExperienceAnalyticsNotAutopilotReadyDevice>|null $value Value to set for the userExperienceAnalyticsNotAutopilotReadyDevice property.
    */
    public function setUserExperienceAnalyticsNotAutopilotReadyDevice(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsNotAutopilotReadyDevice', $value);
    }

    /**
     * Sets the userExperienceAnalyticsOverview property value. User experience analytics overview
     * @param UserExperienceAnalyticsOverview|null $value Value to set for the userExperienceAnalyticsOverview property.
    */
    public function setUserExperienceAnalyticsOverview(?UserExperienceAnalyticsOverview $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsOverview', $value);
    }

    /**
     * Sets the userExperienceAnalyticsRemoteConnection property value. User experience analytics remote connection
     * @param array<UserExperienceAnalyticsRemoteConnection>|null $value Value to set for the userExperienceAnalyticsRemoteConnection property.
    */
    public function setUserExperienceAnalyticsRemoteConnection(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsRemoteConnection', $value);
    }

    /**
     * Sets the userExperienceAnalyticsResourcePerformance property value. User experience analytics resource performance
     * @param array<UserExperienceAnalyticsResourcePerformance>|null $value Value to set for the userExperienceAnalyticsResourcePerformance property.
    */
    public function setUserExperienceAnalyticsResourcePerformance(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsResourcePerformance', $value);
    }

    /**
     * Sets the userExperienceAnalyticsScoreHistory property value. User experience analytics device Startup Score History
     * @param array<UserExperienceAnalyticsScoreHistory>|null $value Value to set for the userExperienceAnalyticsScoreHistory property.
    */
    public function setUserExperienceAnalyticsScoreHistory(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsScoreHistory', $value);
    }

    /**
     * Sets the userExperienceAnalyticsSettings property value. User experience analytics device settings
     * @param UserExperienceAnalyticsSettings|null $value Value to set for the userExperienceAnalyticsSettings property.
    */
    public function setUserExperienceAnalyticsSettings(?UserExperienceAnalyticsSettings $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsSettings', $value);
    }

    /**
     * Sets the userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric property value. User experience analytics work from anywhere hardware readiness metrics.
     * @param UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric|null $value Value to set for the userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric property.
    */
    public function setUserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric(?UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric', $value);
    }

    /**
     * Sets the userExperienceAnalyticsWorkFromAnywhereMetrics property value. User experience analytics work from anywhere metrics.
     * @param array<UserExperienceAnalyticsWorkFromAnywhereMetric>|null $value Value to set for the userExperienceAnalyticsWorkFromAnywhereMetrics property.
    */
    public function setUserExperienceAnalyticsWorkFromAnywhereMetrics(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsWorkFromAnywhereMetrics', $value);
    }

    /**
     * Sets the userExperienceAnalyticsWorkFromAnywhereModelPerformance property value. The user experience analytics work from anywhere model performance
     * @param array<UserExperienceAnalyticsWorkFromAnywhereModelPerformance>|null $value Value to set for the userExperienceAnalyticsWorkFromAnywhereModelPerformance property.
    */
    public function setUserExperienceAnalyticsWorkFromAnywhereModelPerformance(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsWorkFromAnywhereModelPerformance', $value);
    }

    /**
     * Sets the userPfxCertificates property value. Collection of PFX certificates associated with a user.
     * @param array<UserPFXCertificate>|null $value Value to set for the userPfxCertificates property.
    */
    public function setUserPfxCertificates(?array $value): void {
        $this->getBackingStore()->set('userPfxCertificates', $value);
    }

    /**
     * Sets the virtualEndpoint property value. The virtualEndpoint property
     * @param VirtualEndpoint|null $value Value to set for the virtualEndpoint property.
    */
    public function setVirtualEndpoint(?VirtualEndpoint $value): void {
        $this->getBackingStore()->set('virtualEndpoint', $value);
    }

    /**
     * Sets the windowsAutopilotDeploymentProfiles property value. Windows auto pilot deployment profiles
     * @param array<WindowsAutopilotDeploymentProfile>|null $value Value to set for the windowsAutopilotDeploymentProfiles property.
    */
    public function setWindowsAutopilotDeploymentProfiles(?array $value): void {
        $this->getBackingStore()->set('windowsAutopilotDeploymentProfiles', $value);
    }

    /**
     * Sets the windowsAutopilotDeviceIdentities property value. The Windows autopilot device identities contained collection.
     * @param array<WindowsAutopilotDeviceIdentity>|null $value Value to set for the windowsAutopilotDeviceIdentities property.
    */
    public function setWindowsAutopilotDeviceIdentities(?array $value): void {
        $this->getBackingStore()->set('windowsAutopilotDeviceIdentities', $value);
    }

    /**
     * Sets the windowsAutopilotSettings property value. The Windows autopilot account settings.
     * @param WindowsAutopilotSettings|null $value Value to set for the windowsAutopilotSettings property.
    */
    public function setWindowsAutopilotSettings(?WindowsAutopilotSettings $value): void {
        $this->getBackingStore()->set('windowsAutopilotSettings', $value);
    }

    /**
     * Sets the windowsDriverUpdateProfiles property value. A collection of windows driver update profiles
     * @param array<WindowsDriverUpdateProfile>|null $value Value to set for the windowsDriverUpdateProfiles property.
    */
    public function setWindowsDriverUpdateProfiles(?array $value): void {
        $this->getBackingStore()->set('windowsDriverUpdateProfiles', $value);
    }

    /**
     * Sets the windowsFeatureUpdateProfiles property value. A collection of windows feature update profiles
     * @param array<WindowsFeatureUpdateProfile>|null $value Value to set for the windowsFeatureUpdateProfiles property.
    */
    public function setWindowsFeatureUpdateProfiles(?array $value): void {
        $this->getBackingStore()->set('windowsFeatureUpdateProfiles', $value);
    }

    /**
     * Sets the windowsInformationProtectionAppLearningSummaries property value. The windows information protection app learning summaries.
     * @param array<WindowsInformationProtectionAppLearningSummary>|null $value Value to set for the windowsInformationProtectionAppLearningSummaries property.
    */
    public function setWindowsInformationProtectionAppLearningSummaries(?array $value): void {
        $this->getBackingStore()->set('windowsInformationProtectionAppLearningSummaries', $value);
    }

    /**
     * Sets the windowsInformationProtectionNetworkLearningSummaries property value. The windows information protection network learning summaries.
     * @param array<WindowsInformationProtectionNetworkLearningSummary>|null $value Value to set for the windowsInformationProtectionNetworkLearningSummaries property.
    */
    public function setWindowsInformationProtectionNetworkLearningSummaries(?array $value): void {
        $this->getBackingStore()->set('windowsInformationProtectionNetworkLearningSummaries', $value);
    }

    /**
     * Sets the windowsMalwareInformation property value. The list of affected malware in the tenant.
     * @param array<WindowsMalwareInformation>|null $value Value to set for the windowsMalwareInformation property.
    */
    public function setWindowsMalwareInformation(?array $value): void {
        $this->getBackingStore()->set('windowsMalwareInformation', $value);
    }

    /**
     * Sets the windowsMalwareOverview property value. Malware overview for windows devices.
     * @param WindowsMalwareOverview|null $value Value to set for the windowsMalwareOverview property.
    */
    public function setWindowsMalwareOverview(?WindowsMalwareOverview $value): void {
        $this->getBackingStore()->set('windowsMalwareOverview', $value);
    }

    /**
     * Sets the windowsQualityUpdateProfiles property value. A collection of windows quality update profiles
     * @param array<WindowsQualityUpdateProfile>|null $value Value to set for the windowsQualityUpdateProfiles property.
    */
    public function setWindowsQualityUpdateProfiles(?array $value): void {
        $this->getBackingStore()->set('windowsQualityUpdateProfiles', $value);
    }

    /**
     * Sets the windowsUpdateCatalogItems property value. A collection of windows update catalog items (fetaure updates item , quality updates item)
     * @param array<WindowsUpdateCatalogItem>|null $value Value to set for the windowsUpdateCatalogItems property.
    */
    public function setWindowsUpdateCatalogItems(?array $value): void {
        $this->getBackingStore()->set('windowsUpdateCatalogItems', $value);
    }

    /**
     * Sets the zebraFotaArtifacts property value. The Collection of ZebraFotaArtifacts.
     * @param array<ZebraFotaArtifact>|null $value Value to set for the zebraFotaArtifacts property.
    */
    public function setZebraFotaArtifacts(?array $value): void {
        $this->getBackingStore()->set('zebraFotaArtifacts', $value);
    }

    /**
     * Sets the zebraFotaConnector property value. The singleton ZebraFotaConnector associated with account.
     * @param ZebraFotaConnector|null $value Value to set for the zebraFotaConnector property.
    */
    public function setZebraFotaConnector(?ZebraFotaConnector $value): void {
        $this->getBackingStore()->set('zebraFotaConnector', $value);
    }

    /**
     * Sets the zebraFotaDeployments property value. Collection of ZebraFotaDeployments associated with account.
     * @param array<ZebraFotaDeployment>|null $value Value to set for the zebraFotaDeployments property.
    */
    public function setZebraFotaDeployments(?array $value): void {
        $this->getBackingStore()->set('zebraFotaDeployments', $value);
    }

}

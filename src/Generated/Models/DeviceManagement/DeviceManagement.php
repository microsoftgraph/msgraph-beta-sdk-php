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
use Microsoft\Graph\Beta\Generated\Models\CloudCertificationAuthority;
use Microsoft\Graph\Beta\Generated\Models\CloudCertificationAuthorityLeafCertificate;
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
use Microsoft\Graph\Beta\Generated\Models\EndpointPrivilegeManagementProvisioningStatus;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Graph\Beta\Generated\Models\GroupPolicyCategory;
use Microsoft\Graph\Beta\Generated\Models\GroupPolicyConfiguration;
use Microsoft\Graph\Beta\Generated\Models\GroupPolicyDefinition;
use Microsoft\Graph\Beta\Generated\Models\GroupPolicyDefinitionFile;
use Microsoft\Graph\Beta\Generated\Models\GroupPolicyMigrationReport;
use Microsoft\Graph\Beta\Generated\Models\GroupPolicyObjectFile;
use Microsoft\Graph\Beta\Generated\Models\GroupPolicyUploadedDefinitionFile;
use Microsoft\Graph\Beta\Generated\Models\HardwareConfiguration;
use Microsoft\Graph\Beta\Generated\Models\HardwarePasswordDetail;
use Microsoft\Graph\Beta\Generated\Models\HardwarePasswordInfo;
use Microsoft\Graph\Beta\Generated\Models\ImportedDeviceIdentity;
use Microsoft\Graph\Beta\Generated\Models\ImportedWindowsAutopilotDeviceIdentity;
use Microsoft\Graph\Beta\Generated\Models\IntuneBrand;
use Microsoft\Graph\Beta\Generated\Models\IntuneBrandingProfile;
use Microsoft\Graph\Beta\Generated\Models\IosUpdateDeviceStatus;
use Microsoft\Graph\Beta\Generated\Models\MacOSSoftwareUpdateAccountSummary;
use Microsoft\Graph\Beta\Generated\Models\ManagedAllDeviceCertificateState;
use Microsoft\Graph\Beta\Generated\Models\ManagedDevice;
use Microsoft\Graph\Beta\Generated\Models\ManagedDeviceCleanupRule;
use Microsoft\Graph\Beta\Generated\Models\ManagedDeviceCleanupSettings;
use Microsoft\Graph\Beta\Generated\Models\ManagedDeviceEncryptionState;
use Microsoft\Graph\Beta\Generated\Models\ManagedDeviceOverview;
use Microsoft\Graph\Beta\Generated\Models\ManagedDeviceWindowsOperatingSystemImage;
use Microsoft\Graph\Beta\Generated\Models\MicrosoftTunnelConfiguration;
use Microsoft\Graph\Beta\Generated\Models\MicrosoftTunnelHealthThreshold;
use Microsoft\Graph\Beta\Generated\Models\MicrosoftTunnelServerLogCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\MicrosoftTunnelSite;
use Microsoft\Graph\Beta\Generated\Models\MobileAppTroubleshootingEvent;
use Microsoft\Graph\Beta\Generated\Models\MobileThreatDefenseConnector;
use Microsoft\Graph\Beta\Generated\Models\NdesConnector;
use Microsoft\Graph\Beta\Generated\Models\NotificationMessageTemplate;
use Microsoft\Graph\Beta\Generated\Models\OnPremisesConditionalAccessSettings;
use Microsoft\Graph\Beta\Generated\Models\OperationApprovalPolicy;
use Microsoft\Graph\Beta\Generated\Models\OperationApprovalRequest;
use Microsoft\Graph\Beta\Generated\Models\PrivilegeManagementElevation;
use Microsoft\Graph\Beta\Generated\Models\PrivilegeManagementElevationRequest;
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
use Microsoft\Graph\Beta\Generated\Models\UserExperienceAnalyticsAnomalyCorrelationGroupOverview;
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
use Microsoft\Graph\Beta\Generated\Models\WindowsQualityUpdatePolicy;
use Microsoft\Graph\Beta\Generated\Models\WindowsQualityUpdateProfile;
use Microsoft\Graph\Beta\Generated\Models\WindowsUpdateCatalogItem;
use Microsoft\Graph\Beta\Generated\Models\ZebraFotaArtifact;
use Microsoft\Graph\Beta\Generated\Models\ZebraFotaConnector;
use Microsoft\Graph\Beta\Generated\Models\ZebraFotaDeployment;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

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
        $val = $this->getBackingStore()->get('accountMoveCompletionDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accountMoveCompletionDateTime'");
    }

    /**
     * Gets the adminConsent property value. Admin consent information.
     * @return AdminConsent|null
    */
    public function getAdminConsent(): ?AdminConsent {
        $val = $this->getBackingStore()->get('adminConsent');
        if (is_null($val) || $val instanceof AdminConsent) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'adminConsent'");
    }

    /**
     * Gets the advancedThreatProtectionOnboardingStateSummary property value. The summary state of ATP onboarding state for this account.
     * @return AdvancedThreatProtectionOnboardingStateSummary|null
    */
    public function getAdvancedThreatProtectionOnboardingStateSummary(): ?AdvancedThreatProtectionOnboardingStateSummary {
        $val = $this->getBackingStore()->get('advancedThreatProtectionOnboardingStateSummary');
        if (is_null($val) || $val instanceof AdvancedThreatProtectionOnboardingStateSummary) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'advancedThreatProtectionOnboardingStateSummary'");
    }

    /**
     * Gets the androidDeviceOwnerEnrollmentProfiles property value. Android device owner enrollment profile entities.
     * @return array<AndroidDeviceOwnerEnrollmentProfile>|null
    */
    public function getAndroidDeviceOwnerEnrollmentProfiles(): ?array {
        $val = $this->getBackingStore()->get('androidDeviceOwnerEnrollmentProfiles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AndroidDeviceOwnerEnrollmentProfile::class);
            /** @var array<AndroidDeviceOwnerEnrollmentProfile>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'androidDeviceOwnerEnrollmentProfiles'");
    }

    /**
     * Gets the androidForWorkAppConfigurationSchemas property value. Android for Work app configuration schema entities.
     * @return array<AndroidForWorkAppConfigurationSchema>|null
    */
    public function getAndroidForWorkAppConfigurationSchemas(): ?array {
        $val = $this->getBackingStore()->get('androidForWorkAppConfigurationSchemas');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AndroidForWorkAppConfigurationSchema::class);
            /** @var array<AndroidForWorkAppConfigurationSchema>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'androidForWorkAppConfigurationSchemas'");
    }

    /**
     * Gets the androidForWorkEnrollmentProfiles property value. Android for Work enrollment profile entities.
     * @return array<AndroidForWorkEnrollmentProfile>|null
    */
    public function getAndroidForWorkEnrollmentProfiles(): ?array {
        $val = $this->getBackingStore()->get('androidForWorkEnrollmentProfiles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AndroidForWorkEnrollmentProfile::class);
            /** @var array<AndroidForWorkEnrollmentProfile>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'androidForWorkEnrollmentProfiles'");
    }

    /**
     * Gets the androidForWorkSettings property value. The singleton Android for Work settings entity.
     * @return AndroidForWorkSettings|null
    */
    public function getAndroidForWorkSettings(): ?AndroidForWorkSettings {
        $val = $this->getBackingStore()->get('androidForWorkSettings');
        if (is_null($val) || $val instanceof AndroidForWorkSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'androidForWorkSettings'");
    }

    /**
     * Gets the androidManagedStoreAccountEnterpriseSettings property value. The singleton Android managed store account enterprise settings entity.
     * @return AndroidManagedStoreAccountEnterpriseSettings|null
    */
    public function getAndroidManagedStoreAccountEnterpriseSettings(): ?AndroidManagedStoreAccountEnterpriseSettings {
        $val = $this->getBackingStore()->get('androidManagedStoreAccountEnterpriseSettings');
        if (is_null($val) || $val instanceof AndroidManagedStoreAccountEnterpriseSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'androidManagedStoreAccountEnterpriseSettings'");
    }

    /**
     * Gets the androidManagedStoreAppConfigurationSchemas property value. Android Enterprise app configuration schema entities.
     * @return array<AndroidManagedStoreAppConfigurationSchema>|null
    */
    public function getAndroidManagedStoreAppConfigurationSchemas(): ?array {
        $val = $this->getBackingStore()->get('androidManagedStoreAppConfigurationSchemas');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AndroidManagedStoreAppConfigurationSchema::class);
            /** @var array<AndroidManagedStoreAppConfigurationSchema>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'androidManagedStoreAppConfigurationSchemas'");
    }

    /**
     * Gets the applePushNotificationCertificate property value. Apple push notification certificate.
     * @return ApplePushNotificationCertificate|null
    */
    public function getApplePushNotificationCertificate(): ?ApplePushNotificationCertificate {
        $val = $this->getBackingStore()->get('applePushNotificationCertificate');
        if (is_null($val) || $val instanceof ApplePushNotificationCertificate) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applePushNotificationCertificate'");
    }

    /**
     * Gets the appleUserInitiatedEnrollmentProfiles property value. Apple user initiated enrollment profiles
     * @return array<AppleUserInitiatedEnrollmentProfile>|null
    */
    public function getAppleUserInitiatedEnrollmentProfiles(): ?array {
        $val = $this->getBackingStore()->get('appleUserInitiatedEnrollmentProfiles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AppleUserInitiatedEnrollmentProfile::class);
            /** @var array<AppleUserInitiatedEnrollmentProfile>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appleUserInitiatedEnrollmentProfiles'");
    }

    /**
     * Gets the assignmentFilters property value. The list of assignment filters
     * @return array<DeviceAndAppManagementAssignmentFilter>|null
    */
    public function getAssignmentFilters(): ?array {
        $val = $this->getBackingStore()->get('assignmentFilters');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceAndAppManagementAssignmentFilter::class);
            /** @var array<DeviceAndAppManagementAssignmentFilter>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignmentFilters'");
    }

    /**
     * Gets the auditEvents property value. The Audit Events
     * @return array<AuditEvent>|null
    */
    public function getAuditEvents(): ?array {
        $val = $this->getBackingStore()->get('auditEvents');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AuditEvent::class);
            /** @var array<AuditEvent>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'auditEvents'");
    }

    /**
     * Gets the autopilotEvents property value. The list of autopilot events for the tenant.
     * @return array<DeviceManagementAutopilotEvent>|null
    */
    public function getAutopilotEvents(): ?array {
        $val = $this->getBackingStore()->get('autopilotEvents');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementAutopilotEvent::class);
            /** @var array<DeviceManagementAutopilotEvent>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'autopilotEvents'");
    }

    /**
     * Gets the cartToClassAssociations property value. The Cart To Class Associations.
     * @return array<CartToClassAssociation>|null
    */
    public function getCartToClassAssociations(): ?array {
        $val = $this->getBackingStore()->get('cartToClassAssociations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CartToClassAssociation::class);
            /** @var array<CartToClassAssociation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cartToClassAssociations'");
    }

    /**
     * Gets the categories property value. The available categories
     * @return array<DeviceManagementSettingCategory>|null
    */
    public function getCategories(): ?array {
        $val = $this->getBackingStore()->get('categories');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementSettingCategory::class);
            /** @var array<DeviceManagementSettingCategory>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'categories'");
    }

    /**
     * Gets the certificateConnectorDetails property value. Collection of certificate connector details, each associated with a corresponding Intune Certificate Connector.
     * @return array<CertificateConnectorDetails>|null
    */
    public function getCertificateConnectorDetails(): ?array {
        $val = $this->getBackingStore()->get('certificateConnectorDetails');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CertificateConnectorDetails::class);
            /** @var array<CertificateConnectorDetails>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificateConnectorDetails'");
    }

    /**
     * Gets the chromeOSOnboardingSettings property value. Collection of ChromeOSOnboardingSettings settings associated with account.
     * @return array<ChromeOSOnboardingSettings>|null
    */
    public function getChromeOSOnboardingSettings(): ?array {
        $val = $this->getBackingStore()->get('chromeOSOnboardingSettings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ChromeOSOnboardingSettings::class);
            /** @var array<ChromeOSOnboardingSettings>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'chromeOSOnboardingSettings'");
    }

    /**
     * Gets the cloudCertificationAuthority property value. Collection of CloudCertificationAuthority records associated with account.
     * @return array<CloudCertificationAuthority>|null
    */
    public function getCloudCertificationAuthority(): ?array {
        $val = $this->getBackingStore()->get('cloudCertificationAuthority');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CloudCertificationAuthority::class);
            /** @var array<CloudCertificationAuthority>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudCertificationAuthority'");
    }

    /**
     * Gets the cloudCertificationAuthorityLeafCertificate property value. Collection of CloudCertificationAuthorityLeafCertificate records associated with account.
     * @return array<CloudCertificationAuthorityLeafCertificate>|null
    */
    public function getCloudCertificationAuthorityLeafCertificate(): ?array {
        $val = $this->getBackingStore()->get('cloudCertificationAuthorityLeafCertificate');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CloudCertificationAuthorityLeafCertificate::class);
            /** @var array<CloudCertificationAuthorityLeafCertificate>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudCertificationAuthorityLeafCertificate'");
    }

    /**
     * Gets the cloudPCConnectivityIssues property value. The list of CloudPC Connectivity Issue.
     * @return array<CloudPCConnectivityIssue>|null
    */
    public function getCloudPCConnectivityIssues(): ?array {
        $val = $this->getBackingStore()->get('cloudPCConnectivityIssues');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CloudPCConnectivityIssue::class);
            /** @var array<CloudPCConnectivityIssue>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudPCConnectivityIssues'");
    }

    /**
     * Gets the comanagedDevices property value. The list of co-managed devices report
     * @return array<ManagedDevice>|null
    */
    public function getComanagedDevices(): ?array {
        $val = $this->getBackingStore()->get('comanagedDevices');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ManagedDevice::class);
            /** @var array<ManagedDevice>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'comanagedDevices'");
    }

    /**
     * Gets the comanagementEligibleDevices property value. The list of co-management eligible devices report
     * @return array<ComanagementEligibleDevice>|null
    */
    public function getComanagementEligibleDevices(): ?array {
        $val = $this->getBackingStore()->get('comanagementEligibleDevices');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ComanagementEligibleDevice::class);
            /** @var array<ComanagementEligibleDevice>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'comanagementEligibleDevices'");
    }

    /**
     * Gets the complianceCategories property value. List of all compliance categories
     * @return array<DeviceManagementConfigurationCategory>|null
    */
    public function getComplianceCategories(): ?array {
        $val = $this->getBackingStore()->get('complianceCategories');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementConfigurationCategory::class);
            /** @var array<DeviceManagementConfigurationCategory>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'complianceCategories'");
    }

    /**
     * Gets the complianceManagementPartners property value. The list of Compliance Management Partners configured by the tenant.
     * @return array<ComplianceManagementPartner>|null
    */
    public function getComplianceManagementPartners(): ?array {
        $val = $this->getBackingStore()->get('complianceManagementPartners');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ComplianceManagementPartner::class);
            /** @var array<ComplianceManagementPartner>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'complianceManagementPartners'");
    }

    /**
     * Gets the compliancePolicies property value. List of all compliance policies
     * @return array<DeviceManagementCompliancePolicy>|null
    */
    public function getCompliancePolicies(): ?array {
        $val = $this->getBackingStore()->get('compliancePolicies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementCompliancePolicy::class);
            /** @var array<DeviceManagementCompliancePolicy>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'compliancePolicies'");
    }

    /**
     * Gets the complianceSettings property value. List of all ComplianceSettings
     * @return array<DeviceManagementConfigurationSettingDefinition>|null
    */
    public function getComplianceSettings(): ?array {
        $val = $this->getBackingStore()->get('complianceSettings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementConfigurationSettingDefinition::class);
            /** @var array<DeviceManagementConfigurationSettingDefinition>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'complianceSettings'");
    }

    /**
     * Gets the conditionalAccessSettings property value. The Exchange on premises conditional access settings. On premises conditional access will require devices to be both enrolled and compliant for mail access
     * @return OnPremisesConditionalAccessSettings|null
    */
    public function getConditionalAccessSettings(): ?OnPremisesConditionalAccessSettings {
        $val = $this->getBackingStore()->get('conditionalAccessSettings');
        if (is_null($val) || $val instanceof OnPremisesConditionalAccessSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'conditionalAccessSettings'");
    }

    /**
     * Gets the configManagerCollections property value. A list of ConfigManagerCollection
     * @return array<ConfigManagerCollection>|null
    */
    public function getConfigManagerCollections(): ?array {
        $val = $this->getBackingStore()->get('configManagerCollections');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ConfigManagerCollection::class);
            /** @var array<ConfigManagerCollection>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'configManagerCollections'");
    }

    /**
     * Gets the configurationCategories property value. List of all Configuration Categories
     * @return array<DeviceManagementConfigurationCategory>|null
    */
    public function getConfigurationCategories(): ?array {
        $val = $this->getBackingStore()->get('configurationCategories');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementConfigurationCategory::class);
            /** @var array<DeviceManagementConfigurationCategory>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'configurationCategories'");
    }

    /**
     * Gets the configurationPolicies property value. List of all Configuration policies
     * @return array<DeviceManagementConfigurationPolicy>|null
    */
    public function getConfigurationPolicies(): ?array {
        $val = $this->getBackingStore()->get('configurationPolicies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementConfigurationPolicy::class);
            /** @var array<DeviceManagementConfigurationPolicy>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'configurationPolicies'");
    }

    /**
     * Gets the configurationPolicyTemplates property value. List of all templates
     * @return array<DeviceManagementConfigurationPolicyTemplate>|null
    */
    public function getConfigurationPolicyTemplates(): ?array {
        $val = $this->getBackingStore()->get('configurationPolicyTemplates');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementConfigurationPolicyTemplate::class);
            /** @var array<DeviceManagementConfigurationPolicyTemplate>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'configurationPolicyTemplates'");
    }

    /**
     * Gets the configurationSettings property value. List of all ConfigurationSettings
     * @return array<DeviceManagementConfigurationSettingDefinition>|null
    */
    public function getConfigurationSettings(): ?array {
        $val = $this->getBackingStore()->get('configurationSettings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementConfigurationSettingDefinition::class);
            /** @var array<DeviceManagementConfigurationSettingDefinition>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'configurationSettings'");
    }

    /**
     * Gets the connectorStatus property value. The list of connector status for the tenant.
     * @return array<ConnectorStatusDetails>|null
    */
    public function getConnectorStatus(): ?array {
        $val = $this->getBackingStore()->get('connectorStatus');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ConnectorStatusDetails::class);
            /** @var array<ConnectorStatusDetails>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'connectorStatus'");
    }

    /**
     * Gets the dataProcessorServiceForWindowsFeaturesOnboarding property value. A configuration entity for MEM features that utilize Data Processor Service for Windows (DPSW) data.
     * @return DataProcessorServiceForWindowsFeaturesOnboarding|null
    */
    public function getDataProcessorServiceForWindowsFeaturesOnboarding(): ?DataProcessorServiceForWindowsFeaturesOnboarding {
        $val = $this->getBackingStore()->get('dataProcessorServiceForWindowsFeaturesOnboarding');
        if (is_null($val) || $val instanceof DataProcessorServiceForWindowsFeaturesOnboarding) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dataProcessorServiceForWindowsFeaturesOnboarding'");
    }

    /**
     * Gets the dataSharingConsents property value. Data sharing consents.
     * @return array<DataSharingConsent>|null
    */
    public function getDataSharingConsents(): ?array {
        $val = $this->getBackingStore()->get('dataSharingConsents');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DataSharingConsent::class);
            /** @var array<DataSharingConsent>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dataSharingConsents'");
    }

    /**
     * Gets the depOnboardingSettings property value. This collections of multiple DEP tokens per-tenant.
     * @return array<DepOnboardingSetting>|null
    */
    public function getDepOnboardingSettings(): ?array {
        $val = $this->getBackingStore()->get('depOnboardingSettings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DepOnboardingSetting::class);
            /** @var array<DepOnboardingSetting>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'depOnboardingSettings'");
    }

    /**
     * Gets the derivedCredentials property value. Collection of Derived credential settings associated with account.
     * @return array<DeviceManagementDerivedCredentialSettings>|null
    */
    public function getDerivedCredentials(): ?array {
        $val = $this->getBackingStore()->get('derivedCredentials');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementDerivedCredentialSettings::class);
            /** @var array<DeviceManagementDerivedCredentialSettings>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'derivedCredentials'");
    }

    /**
     * Gets the detectedApps property value. The list of detected apps associated with a device.
     * @return array<DetectedApp>|null
    */
    public function getDetectedApps(): ?array {
        $val = $this->getBackingStore()->get('detectedApps');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DetectedApp::class);
            /** @var array<DetectedApp>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'detectedApps'");
    }

    /**
     * Gets the deviceCategories property value. The list of device categories with the tenant.
     * @return array<DeviceCategory>|null
    */
    public function getDeviceCategories(): ?array {
        $val = $this->getBackingStore()->get('deviceCategories');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceCategory::class);
            /** @var array<DeviceCategory>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceCategories'");
    }

    /**
     * Gets the deviceCompliancePolicies property value. The device compliance policies.
     * @return array<DeviceCompliancePolicy>|null
    */
    public function getDeviceCompliancePolicies(): ?array {
        $val = $this->getBackingStore()->get('deviceCompliancePolicies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceCompliancePolicy::class);
            /** @var array<DeviceCompliancePolicy>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceCompliancePolicies'");
    }

    /**
     * Gets the deviceCompliancePolicyDeviceStateSummary property value. The device compliance state summary for this account.
     * @return DeviceCompliancePolicyDeviceStateSummary|null
    */
    public function getDeviceCompliancePolicyDeviceStateSummary(): ?DeviceCompliancePolicyDeviceStateSummary {
        $val = $this->getBackingStore()->get('deviceCompliancePolicyDeviceStateSummary');
        if (is_null($val) || $val instanceof DeviceCompliancePolicyDeviceStateSummary) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceCompliancePolicyDeviceStateSummary'");
    }

    /**
     * Gets the deviceCompliancePolicySettingStateSummaries property value. The summary states of compliance policy settings for this account.
     * @return array<DeviceCompliancePolicySettingStateSummary>|null
    */
    public function getDeviceCompliancePolicySettingStateSummaries(): ?array {
        $val = $this->getBackingStore()->get('deviceCompliancePolicySettingStateSummaries');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceCompliancePolicySettingStateSummary::class);
            /** @var array<DeviceCompliancePolicySettingStateSummary>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceCompliancePolicySettingStateSummaries'");
    }

    /**
     * Gets the deviceComplianceReportSummarizationDateTime property value. The last requested time of device compliance reporting for this account. This property is read-only.
     * @return DateTime|null
    */
    public function getDeviceComplianceReportSummarizationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('deviceComplianceReportSummarizationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceComplianceReportSummarizationDateTime'");
    }

    /**
     * Gets the deviceComplianceScripts property value. The list of device compliance scripts associated with the tenant.
     * @return array<DeviceComplianceScript>|null
    */
    public function getDeviceComplianceScripts(): ?array {
        $val = $this->getBackingStore()->get('deviceComplianceScripts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceComplianceScript::class);
            /** @var array<DeviceComplianceScript>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceComplianceScripts'");
    }

    /**
     * Gets the deviceConfigurationConflictSummary property value. Summary of policies in conflict state for this account.
     * @return array<DeviceConfigurationConflictSummary>|null
    */
    public function getDeviceConfigurationConflictSummary(): ?array {
        $val = $this->getBackingStore()->get('deviceConfigurationConflictSummary');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceConfigurationConflictSummary::class);
            /** @var array<DeviceConfigurationConflictSummary>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceConfigurationConflictSummary'");
    }

    /**
     * Gets the deviceConfigurationDeviceStateSummaries property value. The device configuration device state summary for this account.
     * @return DeviceConfigurationDeviceStateSummary|null
    */
    public function getDeviceConfigurationDeviceStateSummaries(): ?DeviceConfigurationDeviceStateSummary {
        $val = $this->getBackingStore()->get('deviceConfigurationDeviceStateSummaries');
        if (is_null($val) || $val instanceof DeviceConfigurationDeviceStateSummary) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceConfigurationDeviceStateSummaries'");
    }

    /**
     * Gets the deviceConfigurationRestrictedAppsViolations property value. Restricted apps violations for this account.
     * @return array<RestrictedAppsViolation>|null
    */
    public function getDeviceConfigurationRestrictedAppsViolations(): ?array {
        $val = $this->getBackingStore()->get('deviceConfigurationRestrictedAppsViolations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RestrictedAppsViolation::class);
            /** @var array<RestrictedAppsViolation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceConfigurationRestrictedAppsViolations'");
    }

    /**
     * Gets the deviceConfigurations property value. The device configurations.
     * @return array<DeviceConfiguration>|null
    */
    public function getDeviceConfigurations(): ?array {
        $val = $this->getBackingStore()->get('deviceConfigurations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceConfiguration::class);
            /** @var array<DeviceConfiguration>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceConfigurations'");
    }

    /**
     * Gets the deviceConfigurationsAllManagedDeviceCertificateStates property value. Summary of all certificates for all devices.
     * @return array<ManagedAllDeviceCertificateState>|null
    */
    public function getDeviceConfigurationsAllManagedDeviceCertificateStates(): ?array {
        $val = $this->getBackingStore()->get('deviceConfigurationsAllManagedDeviceCertificateStates');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ManagedAllDeviceCertificateState::class);
            /** @var array<ManagedAllDeviceCertificateState>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceConfigurationsAllManagedDeviceCertificateStates'");
    }

    /**
     * Gets the deviceConfigurationUserStateSummaries property value. The device configuration user state summary for this account.
     * @return DeviceConfigurationUserStateSummary|null
    */
    public function getDeviceConfigurationUserStateSummaries(): ?DeviceConfigurationUserStateSummary {
        $val = $this->getBackingStore()->get('deviceConfigurationUserStateSummaries');
        if (is_null($val) || $val instanceof DeviceConfigurationUserStateSummary) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceConfigurationUserStateSummaries'");
    }

    /**
     * Gets the deviceCustomAttributeShellScripts property value. The list of device custom attribute shell scripts associated with the tenant.
     * @return array<DeviceCustomAttributeShellScript>|null
    */
    public function getDeviceCustomAttributeShellScripts(): ?array {
        $val = $this->getBackingStore()->get('deviceCustomAttributeShellScripts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceCustomAttributeShellScript::class);
            /** @var array<DeviceCustomAttributeShellScript>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceCustomAttributeShellScripts'");
    }

    /**
     * Gets the deviceEnrollmentConfigurations property value. The list of device enrollment configurations
     * @return array<DeviceEnrollmentConfiguration>|null
    */
    public function getDeviceEnrollmentConfigurations(): ?array {
        $val = $this->getBackingStore()->get('deviceEnrollmentConfigurations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceEnrollmentConfiguration::class);
            /** @var array<DeviceEnrollmentConfiguration>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceEnrollmentConfigurations'");
    }

    /**
     * Gets the deviceHealthScripts property value. The list of device health scripts associated with the tenant.
     * @return array<DeviceHealthScript>|null
    */
    public function getDeviceHealthScripts(): ?array {
        $val = $this->getBackingStore()->get('deviceHealthScripts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceHealthScript::class);
            /** @var array<DeviceHealthScript>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceHealthScripts'");
    }

    /**
     * Gets the deviceManagementPartners property value. The list of Device Management Partners configured by the tenant.
     * @return array<DeviceManagementPartner>|null
    */
    public function getDeviceManagementPartners(): ?array {
        $val = $this->getBackingStore()->get('deviceManagementPartners');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementPartner::class);
            /** @var array<DeviceManagementPartner>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceManagementPartners'");
    }

    /**
     * Gets the deviceManagementScripts property value. The list of device management scripts associated with the tenant.
     * @return array<DeviceManagementScript>|null
    */
    public function getDeviceManagementScripts(): ?array {
        $val = $this->getBackingStore()->get('deviceManagementScripts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementScript::class);
            /** @var array<DeviceManagementScript>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceManagementScripts'");
    }

    /**
     * Gets the deviceProtectionOverview property value. Device protection overview.
     * @return DeviceProtectionOverview|null
    */
    public function getDeviceProtectionOverview(): ?DeviceProtectionOverview {
        $val = $this->getBackingStore()->get('deviceProtectionOverview');
        if (is_null($val) || $val instanceof DeviceProtectionOverview) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceProtectionOverview'");
    }

    /**
     * Gets the deviceShellScripts property value. The list of device shell scripts associated with the tenant.
     * @return array<DeviceShellScript>|null
    */
    public function getDeviceShellScripts(): ?array {
        $val = $this->getBackingStore()->get('deviceShellScripts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceShellScript::class);
            /** @var array<DeviceShellScript>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceShellScripts'");
    }

    /**
     * Gets the domainJoinConnectors property value. A list of connector objects.
     * @return array<DeviceManagementDomainJoinConnector>|null
    */
    public function getDomainJoinConnectors(): ?array {
        $val = $this->getBackingStore()->get('domainJoinConnectors');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementDomainJoinConnector::class);
            /** @var array<DeviceManagementDomainJoinConnector>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'domainJoinConnectors'");
    }

    /**
     * Gets the elevationRequests property value. List of elevation requests
     * @return array<PrivilegeManagementElevationRequest>|null
    */
    public function getElevationRequests(): ?array {
        $val = $this->getBackingStore()->get('elevationRequests');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PrivilegeManagementElevationRequest::class);
            /** @var array<PrivilegeManagementElevationRequest>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'elevationRequests'");
    }

    /**
     * Gets the embeddedSIMActivationCodePools property value. The embedded SIM activation code pools created by this account.
     * @return array<EmbeddedSIMActivationCodePool>|null
    */
    public function getEmbeddedSIMActivationCodePools(): ?array {
        $val = $this->getBackingStore()->get('embeddedSIMActivationCodePools');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EmbeddedSIMActivationCodePool::class);
            /** @var array<EmbeddedSIMActivationCodePool>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'embeddedSIMActivationCodePools'");
    }

    /**
     * Gets the endpointPrivilegeManagementProvisioningStatus property value. Endpoint privilege management (EPM) tenant provisioning status contains tenant level license and onboarding state information.
     * @return EndpointPrivilegeManagementProvisioningStatus|null
    */
    public function getEndpointPrivilegeManagementProvisioningStatus(): ?EndpointPrivilegeManagementProvisioningStatus {
        $val = $this->getBackingStore()->get('endpointPrivilegeManagementProvisioningStatus');
        if (is_null($val) || $val instanceof EndpointPrivilegeManagementProvisioningStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endpointPrivilegeManagementProvisioningStatus'");
    }

    /**
     * Gets the exchangeConnectors property value. The list of Exchange Connectors configured by the tenant.
     * @return array<DeviceManagementExchangeConnector>|null
    */
    public function getExchangeConnectors(): ?array {
        $val = $this->getBackingStore()->get('exchangeConnectors');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementExchangeConnector::class);
            /** @var array<DeviceManagementExchangeConnector>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exchangeConnectors'");
    }

    /**
     * Gets the exchangeOnPremisesPolicies property value. The list of Exchange On Premisis policies configured by the tenant.
     * @return array<DeviceManagementExchangeOnPremisesPolicy>|null
    */
    public function getExchangeOnPremisesPolicies(): ?array {
        $val = $this->getBackingStore()->get('exchangeOnPremisesPolicies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementExchangeOnPremisesPolicy::class);
            /** @var array<DeviceManagementExchangeOnPremisesPolicy>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exchangeOnPremisesPolicies'");
    }

    /**
     * Gets the exchangeOnPremisesPolicy property value. The policy which controls mobile device access to Exchange On Premises
     * @return DeviceManagementExchangeOnPremisesPolicy|null
    */
    public function getExchangeOnPremisesPolicy(): ?DeviceManagementExchangeOnPremisesPolicy {
        $val = $this->getBackingStore()->get('exchangeOnPremisesPolicy');
        if (is_null($val) || $val instanceof DeviceManagementExchangeOnPremisesPolicy) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exchangeOnPremisesPolicy'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
            'cloudCertificationAuthority' => fn(ParseNode $n) => $o->setCloudCertificationAuthority($n->getCollectionOfObjectValues([CloudCertificationAuthority::class, 'createFromDiscriminatorValue'])),
            'cloudCertificationAuthorityLeafCertificate' => fn(ParseNode $n) => $o->setCloudCertificationAuthorityLeafCertificate($n->getCollectionOfObjectValues([CloudCertificationAuthorityLeafCertificate::class, 'createFromDiscriminatorValue'])),
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
            'elevationRequests' => fn(ParseNode $n) => $o->setElevationRequests($n->getCollectionOfObjectValues([PrivilegeManagementElevationRequest::class, 'createFromDiscriminatorValue'])),
            'embeddedSIMActivationCodePools' => fn(ParseNode $n) => $o->setEmbeddedSIMActivationCodePools($n->getCollectionOfObjectValues([EmbeddedSIMActivationCodePool::class, 'createFromDiscriminatorValue'])),
            'endpointPrivilegeManagementProvisioningStatus' => fn(ParseNode $n) => $o->setEndpointPrivilegeManagementProvisioningStatus($n->getObjectValue([EndpointPrivilegeManagementProvisioningStatus::class, 'createFromDiscriminatorValue'])),
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
            'hardwareConfigurations' => fn(ParseNode $n) => $o->setHardwareConfigurations($n->getCollectionOfObjectValues([HardwareConfiguration::class, 'createFromDiscriminatorValue'])),
            'hardwarePasswordDetails' => fn(ParseNode $n) => $o->setHardwarePasswordDetails($n->getCollectionOfObjectValues([HardwarePasswordDetail::class, 'createFromDiscriminatorValue'])),
            'hardwarePasswordInfo' => fn(ParseNode $n) => $o->setHardwarePasswordInfo($n->getCollectionOfObjectValues([HardwarePasswordInfo::class, 'createFromDiscriminatorValue'])),
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
            'managedDeviceCleanupRules' => fn(ParseNode $n) => $o->setManagedDeviceCleanupRules($n->getCollectionOfObjectValues([ManagedDeviceCleanupRule::class, 'createFromDiscriminatorValue'])),
            'managedDeviceCleanupSettings' => fn(ParseNode $n) => $o->setManagedDeviceCleanupSettings($n->getObjectValue([ManagedDeviceCleanupSettings::class, 'createFromDiscriminatorValue'])),
            'managedDeviceEncryptionStates' => fn(ParseNode $n) => $o->setManagedDeviceEncryptionStates($n->getCollectionOfObjectValues([ManagedDeviceEncryptionState::class, 'createFromDiscriminatorValue'])),
            'managedDeviceOverview' => fn(ParseNode $n) => $o->setManagedDeviceOverview($n->getObjectValue([ManagedDeviceOverview::class, 'createFromDiscriminatorValue'])),
            'managedDevices' => fn(ParseNode $n) => $o->setManagedDevices($n->getCollectionOfObjectValues([ManagedDevice::class, 'createFromDiscriminatorValue'])),
            'managedDeviceWindowsOSImages' => fn(ParseNode $n) => $o->setManagedDeviceWindowsOSImages($n->getCollectionOfObjectValues([ManagedDeviceWindowsOperatingSystemImage::class, 'createFromDiscriminatorValue'])),
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
            'operationApprovalPolicies' => fn(ParseNode $n) => $o->setOperationApprovalPolicies($n->getCollectionOfObjectValues([OperationApprovalPolicy::class, 'createFromDiscriminatorValue'])),
            'operationApprovalRequests' => fn(ParseNode $n) => $o->setOperationApprovalRequests($n->getCollectionOfObjectValues([OperationApprovalRequest::class, 'createFromDiscriminatorValue'])),
            'privilegeManagementElevations' => fn(ParseNode $n) => $o->setPrivilegeManagementElevations($n->getCollectionOfObjectValues([PrivilegeManagementElevation::class, 'createFromDiscriminatorValue'])),
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
            'userExperienceAnalyticsAnomalyCorrelationGroupOverview' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsAnomalyCorrelationGroupOverview($n->getCollectionOfObjectValues([UserExperienceAnalyticsAnomalyCorrelationGroupOverview::class, 'createFromDiscriminatorValue'])),
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
            'windowsQualityUpdatePolicies' => fn(ParseNode $n) => $o->setWindowsQualityUpdatePolicies($n->getCollectionOfObjectValues([WindowsQualityUpdatePolicy::class, 'createFromDiscriminatorValue'])),
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
        $val = $this->getBackingStore()->get('groupPolicyCategories');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, GroupPolicyCategory::class);
            /** @var array<GroupPolicyCategory>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupPolicyCategories'");
    }

    /**
     * Gets the groupPolicyConfigurations property value. The group policy configurations created by this account.
     * @return array<GroupPolicyConfiguration>|null
    */
    public function getGroupPolicyConfigurations(): ?array {
        $val = $this->getBackingStore()->get('groupPolicyConfigurations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, GroupPolicyConfiguration::class);
            /** @var array<GroupPolicyConfiguration>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupPolicyConfigurations'");
    }

    /**
     * Gets the groupPolicyDefinitionFiles property value. The available group policy definition files for this account.
     * @return array<GroupPolicyDefinitionFile>|null
    */
    public function getGroupPolicyDefinitionFiles(): ?array {
        $val = $this->getBackingStore()->get('groupPolicyDefinitionFiles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, GroupPolicyDefinitionFile::class);
            /** @var array<GroupPolicyDefinitionFile>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupPolicyDefinitionFiles'");
    }

    /**
     * Gets the groupPolicyDefinitions property value. The available group policy definitions for this account.
     * @return array<GroupPolicyDefinition>|null
    */
    public function getGroupPolicyDefinitions(): ?array {
        $val = $this->getBackingStore()->get('groupPolicyDefinitions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, GroupPolicyDefinition::class);
            /** @var array<GroupPolicyDefinition>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupPolicyDefinitions'");
    }

    /**
     * Gets the groupPolicyMigrationReports property value. A list of Group Policy migration reports.
     * @return array<GroupPolicyMigrationReport>|null
    */
    public function getGroupPolicyMigrationReports(): ?array {
        $val = $this->getBackingStore()->get('groupPolicyMigrationReports');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, GroupPolicyMigrationReport::class);
            /** @var array<GroupPolicyMigrationReport>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupPolicyMigrationReports'");
    }

    /**
     * Gets the groupPolicyObjectFiles property value. A list of Group Policy Object files uploaded.
     * @return array<GroupPolicyObjectFile>|null
    */
    public function getGroupPolicyObjectFiles(): ?array {
        $val = $this->getBackingStore()->get('groupPolicyObjectFiles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, GroupPolicyObjectFile::class);
            /** @var array<GroupPolicyObjectFile>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupPolicyObjectFiles'");
    }

    /**
     * Gets the groupPolicyUploadedDefinitionFiles property value. The available group policy uploaded definition files for this account.
     * @return array<GroupPolicyUploadedDefinitionFile>|null
    */
    public function getGroupPolicyUploadedDefinitionFiles(): ?array {
        $val = $this->getBackingStore()->get('groupPolicyUploadedDefinitionFiles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, GroupPolicyUploadedDefinitionFile::class);
            /** @var array<GroupPolicyUploadedDefinitionFile>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupPolicyUploadedDefinitionFiles'");
    }

    /**
     * Gets the hardwareConfigurations property value. BIOS configuration and other settings provides customers the ability to configure hardware/bios settings on the enrolled Windows 10/11 Entra ID joined devices by uploading a configuration file generated with their OEM tool (e.g. Dell Command tool). A BIOS configuration policy can be assigned to multiple devices, allowing admins to remotely control a device's hardware properties (e.g. enable Secure Boot) from the Intune Portal. Supported for Dell only at this time.
     * @return array<HardwareConfiguration>|null
    */
    public function getHardwareConfigurations(): ?array {
        $val = $this->getBackingStore()->get('hardwareConfigurations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, HardwareConfiguration::class);
            /** @var array<HardwareConfiguration>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hardwareConfigurations'");
    }

    /**
     * Gets the hardwarePasswordDetails property value. Device BIOS password information for devices with managed BIOS and firmware configuration, which provides device serial number, list of previous passwords, and current password.
     * @return array<HardwarePasswordDetail>|null
    */
    public function getHardwarePasswordDetails(): ?array {
        $val = $this->getBackingStore()->get('hardwarePasswordDetails');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, HardwarePasswordDetail::class);
            /** @var array<HardwarePasswordDetail>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hardwarePasswordDetails'");
    }

    /**
     * Gets the hardwarePasswordInfo property value. Intune will provide customer the ability to configure BIOS configuration settings on the enrolled Windows 10 and Windows 11 Microsoft Entra joined devices. Starting from June, 2024, customers should start using hardwarePasswordDetail resource type - Microsoft Graph beta | Microsoft Learn. HardwarePasswordInfo will be marked as deprecated with Intune Release 2409
     * @return array<HardwarePasswordInfo>|null
    */
    public function getHardwarePasswordInfo(): ?array {
        $val = $this->getBackingStore()->get('hardwarePasswordInfo');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, HardwarePasswordInfo::class);
            /** @var array<HardwarePasswordInfo>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hardwarePasswordInfo'");
    }

    /**
     * Gets the importedDeviceIdentities property value. The imported device identities.
     * @return array<ImportedDeviceIdentity>|null
    */
    public function getImportedDeviceIdentities(): ?array {
        $val = $this->getBackingStore()->get('importedDeviceIdentities');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ImportedDeviceIdentity::class);
            /** @var array<ImportedDeviceIdentity>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'importedDeviceIdentities'");
    }

    /**
     * Gets the importedWindowsAutopilotDeviceIdentities property value. Collection of imported Windows autopilot devices.
     * @return array<ImportedWindowsAutopilotDeviceIdentity>|null
    */
    public function getImportedWindowsAutopilotDeviceIdentities(): ?array {
        $val = $this->getBackingStore()->get('importedWindowsAutopilotDeviceIdentities');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ImportedWindowsAutopilotDeviceIdentity::class);
            /** @var array<ImportedWindowsAutopilotDeviceIdentity>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'importedWindowsAutopilotDeviceIdentities'");
    }

    /**
     * Gets the intents property value. The device management intents
     * @return array<DeviceManagementIntent>|null
    */
    public function getIntents(): ?array {
        $val = $this->getBackingStore()->get('intents');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementIntent::class);
            /** @var array<DeviceManagementIntent>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'intents'");
    }

    /**
     * Gets the intuneAccountId property value. Intune Account Id for given tenant
     * @return string|null
    */
    public function getIntuneAccountId(): ?string {
        $val = $this->getBackingStore()->get('intuneAccountId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'intuneAccountId'");
    }

    /**
     * Gets the intuneBrand property value. intuneBrand contains data which is used in customizing the appearance of the Company Portal applications as well as the end user web portal.
     * @return IntuneBrand|null
    */
    public function getIntuneBrand(): ?IntuneBrand {
        $val = $this->getBackingStore()->get('intuneBrand');
        if (is_null($val) || $val instanceof IntuneBrand) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'intuneBrand'");
    }

    /**
     * Gets the intuneBrandingProfiles property value. Intune branding profiles targeted to AAD groups
     * @return array<IntuneBrandingProfile>|null
    */
    public function getIntuneBrandingProfiles(): ?array {
        $val = $this->getBackingStore()->get('intuneBrandingProfiles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, IntuneBrandingProfile::class);
            /** @var array<IntuneBrandingProfile>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'intuneBrandingProfiles'");
    }

    /**
     * Gets the iosUpdateStatuses property value. The IOS software update installation statuses for this account.
     * @return array<IosUpdateDeviceStatus>|null
    */
    public function getIosUpdateStatuses(): ?array {
        $val = $this->getBackingStore()->get('iosUpdateStatuses');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, IosUpdateDeviceStatus::class);
            /** @var array<IosUpdateDeviceStatus>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iosUpdateStatuses'");
    }

    /**
     * Gets the lastReportAggregationDateTime property value. The last modified time of reporting for this account. This property is read-only.
     * @return DateTime|null
    */
    public function getLastReportAggregationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastReportAggregationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastReportAggregationDateTime'");
    }

    /**
     * Gets the legacyPcManangementEnabled property value. The property to enable Non-MDM managed legacy PC management for this account. This property is read-only.
     * @return bool|null
    */
    public function getLegacyPcManangementEnabled(): ?bool {
        $val = $this->getBackingStore()->get('legacyPcManangementEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'legacyPcManangementEnabled'");
    }

    /**
     * Gets the macOSSoftwareUpdateAccountSummaries property value. The MacOS software update account summaries for this account.
     * @return array<MacOSSoftwareUpdateAccountSummary>|null
    */
    public function getMacOSSoftwareUpdateAccountSummaries(): ?array {
        $val = $this->getBackingStore()->get('macOSSoftwareUpdateAccountSummaries');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MacOSSoftwareUpdateAccountSummary::class);
            /** @var array<MacOSSoftwareUpdateAccountSummary>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'macOSSoftwareUpdateAccountSummaries'");
    }

    /**
     * Gets the managedDeviceCleanupRules property value. Device cleanup rule V2
     * @return array<ManagedDeviceCleanupRule>|null
    */
    public function getManagedDeviceCleanupRules(): ?array {
        $val = $this->getBackingStore()->get('managedDeviceCleanupRules');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ManagedDeviceCleanupRule::class);
            /** @var array<ManagedDeviceCleanupRule>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedDeviceCleanupRules'");
    }

    /**
     * Gets the managedDeviceCleanupSettings property value. Device cleanup rule
     * @return ManagedDeviceCleanupSettings|null
    */
    public function getManagedDeviceCleanupSettings(): ?ManagedDeviceCleanupSettings {
        $val = $this->getBackingStore()->get('managedDeviceCleanupSettings');
        if (is_null($val) || $val instanceof ManagedDeviceCleanupSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedDeviceCleanupSettings'");
    }

    /**
     * Gets the managedDeviceEncryptionStates property value. Encryption report for devices in this account
     * @return array<ManagedDeviceEncryptionState>|null
    */
    public function getManagedDeviceEncryptionStates(): ?array {
        $val = $this->getBackingStore()->get('managedDeviceEncryptionStates');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ManagedDeviceEncryptionState::class);
            /** @var array<ManagedDeviceEncryptionState>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedDeviceEncryptionStates'");
    }

    /**
     * Gets the managedDeviceOverview property value. Device overview
     * @return ManagedDeviceOverview|null
    */
    public function getManagedDeviceOverview(): ?ManagedDeviceOverview {
        $val = $this->getBackingStore()->get('managedDeviceOverview');
        if (is_null($val) || $val instanceof ManagedDeviceOverview) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedDeviceOverview'");
    }

    /**
     * Gets the managedDevices property value. The list of managed devices.
     * @return array<ManagedDevice>|null
    */
    public function getManagedDevices(): ?array {
        $val = $this->getBackingStore()->get('managedDevices');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ManagedDevice::class);
            /** @var array<ManagedDevice>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedDevices'");
    }

    /**
     * Gets the managedDeviceWindowsOSImages property value. A list of ManagedDeviceWindowsOperatingSystemImages
     * @return array<ManagedDeviceWindowsOperatingSystemImage>|null
    */
    public function getManagedDeviceWindowsOSImages(): ?array {
        $val = $this->getBackingStore()->get('managedDeviceWindowsOSImages');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ManagedDeviceWindowsOperatingSystemImage::class);
            /** @var array<ManagedDeviceWindowsOperatingSystemImage>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedDeviceWindowsOSImages'");
    }

    /**
     * Gets the maximumDepTokens property value. Maximum number of dep tokens allowed per-tenant.
     * @return int|null
    */
    public function getMaximumDepTokens(): ?int {
        $val = $this->getBackingStore()->get('maximumDepTokens');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maximumDepTokens'");
    }

    /**
     * Gets the microsoftTunnelConfigurations property value. Collection of MicrosoftTunnelConfiguration settings associated with account.
     * @return array<MicrosoftTunnelConfiguration>|null
    */
    public function getMicrosoftTunnelConfigurations(): ?array {
        $val = $this->getBackingStore()->get('microsoftTunnelConfigurations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MicrosoftTunnelConfiguration::class);
            /** @var array<MicrosoftTunnelConfiguration>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'microsoftTunnelConfigurations'");
    }

    /**
     * Gets the microsoftTunnelHealthThresholds property value. Collection of MicrosoftTunnelHealthThreshold settings associated with account.
     * @return array<MicrosoftTunnelHealthThreshold>|null
    */
    public function getMicrosoftTunnelHealthThresholds(): ?array {
        $val = $this->getBackingStore()->get('microsoftTunnelHealthThresholds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MicrosoftTunnelHealthThreshold::class);
            /** @var array<MicrosoftTunnelHealthThreshold>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'microsoftTunnelHealthThresholds'");
    }

    /**
     * Gets the microsoftTunnelServerLogCollectionResponses property value. Collection of MicrosoftTunnelServerLogCollectionResponse settings associated with account.
     * @return array<MicrosoftTunnelServerLogCollectionResponse>|null
    */
    public function getMicrosoftTunnelServerLogCollectionResponses(): ?array {
        $val = $this->getBackingStore()->get('microsoftTunnelServerLogCollectionResponses');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MicrosoftTunnelServerLogCollectionResponse::class);
            /** @var array<MicrosoftTunnelServerLogCollectionResponse>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'microsoftTunnelServerLogCollectionResponses'");
    }

    /**
     * Gets the microsoftTunnelSites property value. Collection of MicrosoftTunnelSite settings associated with account.
     * @return array<MicrosoftTunnelSite>|null
    */
    public function getMicrosoftTunnelSites(): ?array {
        $val = $this->getBackingStore()->get('microsoftTunnelSites');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MicrosoftTunnelSite::class);
            /** @var array<MicrosoftTunnelSite>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'microsoftTunnelSites'");
    }

    /**
     * Gets the mobileAppTroubleshootingEvents property value. The collection property of MobileAppTroubleshootingEvent.
     * @return array<MobileAppTroubleshootingEvent>|null
    */
    public function getMobileAppTroubleshootingEvents(): ?array {
        $val = $this->getBackingStore()->get('mobileAppTroubleshootingEvents');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MobileAppTroubleshootingEvent::class);
            /** @var array<MobileAppTroubleshootingEvent>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mobileAppTroubleshootingEvents'");
    }

    /**
     * Gets the mobileThreatDefenseConnectors property value. The list of Mobile threat Defense connectors configured by the tenant.
     * @return array<MobileThreatDefenseConnector>|null
    */
    public function getMobileThreatDefenseConnectors(): ?array {
        $val = $this->getBackingStore()->get('mobileThreatDefenseConnectors');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MobileThreatDefenseConnector::class);
            /** @var array<MobileThreatDefenseConnector>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mobileThreatDefenseConnectors'");
    }

    /**
     * Gets the monitoring property value. The monitoring property
     * @return Monitoring|null
    */
    public function getMonitoring(): ?Monitoring {
        $val = $this->getBackingStore()->get('monitoring');
        if (is_null($val) || $val instanceof Monitoring) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'monitoring'");
    }

    /**
     * Gets the ndesConnectors property value. The collection of Ndes connectors for this account.
     * @return array<NdesConnector>|null
    */
    public function getNdesConnectors(): ?array {
        $val = $this->getBackingStore()->get('ndesConnectors');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, NdesConnector::class);
            /** @var array<NdesConnector>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ndesConnectors'");
    }

    /**
     * Gets the notificationMessageTemplates property value. The Notification Message Templates.
     * @return array<NotificationMessageTemplate>|null
    */
    public function getNotificationMessageTemplates(): ?array {
        $val = $this->getBackingStore()->get('notificationMessageTemplates');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, NotificationMessageTemplate::class);
            /** @var array<NotificationMessageTemplate>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notificationMessageTemplates'");
    }

    /**
     * Gets the operationApprovalPolicies property value. The Operation Approval Policies
     * @return array<OperationApprovalPolicy>|null
    */
    public function getOperationApprovalPolicies(): ?array {
        $val = $this->getBackingStore()->get('operationApprovalPolicies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, OperationApprovalPolicy::class);
            /** @var array<OperationApprovalPolicy>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operationApprovalPolicies'");
    }

    /**
     * Gets the operationApprovalRequests property value. The Operation Approval Requests
     * @return array<OperationApprovalRequest>|null
    */
    public function getOperationApprovalRequests(): ?array {
        $val = $this->getBackingStore()->get('operationApprovalRequests');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, OperationApprovalRequest::class);
            /** @var array<OperationApprovalRequest>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operationApprovalRequests'");
    }

    /**
     * Gets the privilegeManagementElevations property value. The endpoint privilege management elevation event entity contains elevation details.
     * @return array<PrivilegeManagementElevation>|null
    */
    public function getPrivilegeManagementElevations(): ?array {
        $val = $this->getBackingStore()->get('privilegeManagementElevations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PrivilegeManagementElevation::class);
            /** @var array<PrivilegeManagementElevation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'privilegeManagementElevations'");
    }

    /**
     * Gets the remoteActionAudits property value. The list of device remote action audits with the tenant.
     * @return array<RemoteActionAudit>|null
    */
    public function getRemoteActionAudits(): ?array {
        $val = $this->getBackingStore()->get('remoteActionAudits');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RemoteActionAudit::class);
            /** @var array<RemoteActionAudit>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'remoteActionAudits'");
    }

    /**
     * Gets the remoteAssistancePartners property value. The remote assist partners.
     * @return array<RemoteAssistancePartner>|null
    */
    public function getRemoteAssistancePartners(): ?array {
        $val = $this->getBackingStore()->get('remoteAssistancePartners');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RemoteAssistancePartner::class);
            /** @var array<RemoteAssistancePartner>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'remoteAssistancePartners'");
    }

    /**
     * Gets the remoteAssistanceSettings property value. The remote assistance settings singleton
     * @return RemoteAssistanceSettings|null
    */
    public function getRemoteAssistanceSettings(): ?RemoteAssistanceSettings {
        $val = $this->getBackingStore()->get('remoteAssistanceSettings');
        if (is_null($val) || $val instanceof RemoteAssistanceSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'remoteAssistanceSettings'");
    }

    /**
     * Gets the reports property value. The reports property
     * @return DeviceManagementReports|null
    */
    public function getReports(): ?DeviceManagementReports {
        $val = $this->getBackingStore()->get('reports');
        if (is_null($val) || $val instanceof DeviceManagementReports) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reports'");
    }

    /**
     * Gets the resourceAccessProfiles property value. Collection of resource access settings associated with account.
     * @return array<DeviceManagementResourceAccessProfileBase>|null
    */
    public function getResourceAccessProfiles(): ?array {
        $val = $this->getBackingStore()->get('resourceAccessProfiles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementResourceAccessProfileBase::class);
            /** @var array<DeviceManagementResourceAccessProfileBase>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceAccessProfiles'");
    }

    /**
     * Gets the resourceOperations property value. The Resource Operations.
     * @return array<ResourceOperation>|null
    */
    public function getResourceOperations(): ?array {
        $val = $this->getBackingStore()->get('resourceOperations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ResourceOperation::class);
            /** @var array<ResourceOperation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceOperations'");
    }

    /**
     * Gets the reusablePolicySettings property value. List of all reusable settings that can be referred in a policy
     * @return array<DeviceManagementReusablePolicySetting>|null
    */
    public function getReusablePolicySettings(): ?array {
        $val = $this->getBackingStore()->get('reusablePolicySettings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementReusablePolicySetting::class);
            /** @var array<DeviceManagementReusablePolicySetting>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reusablePolicySettings'");
    }

    /**
     * Gets the reusableSettings property value. List of all reusable settings
     * @return array<DeviceManagementConfigurationSettingDefinition>|null
    */
    public function getReusableSettings(): ?array {
        $val = $this->getBackingStore()->get('reusableSettings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementConfigurationSettingDefinition::class);
            /** @var array<DeviceManagementConfigurationSettingDefinition>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reusableSettings'");
    }

    /**
     * Gets the roleAssignments property value. The Role Assignments.
     * @return array<DeviceAndAppManagementRoleAssignment>|null
    */
    public function getRoleAssignments(): ?array {
        $val = $this->getBackingStore()->get('roleAssignments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceAndAppManagementRoleAssignment::class);
            /** @var array<DeviceAndAppManagementRoleAssignment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleAssignments'");
    }

    /**
     * Gets the roleDefinitions property value. The Role Definitions.
     * @return array<RoleDefinition>|null
    */
    public function getRoleDefinitions(): ?array {
        $val = $this->getBackingStore()->get('roleDefinitions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RoleDefinition::class);
            /** @var array<RoleDefinition>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleDefinitions'");
    }

    /**
     * Gets the roleScopeTags property value. The Role Scope Tags.
     * @return array<RoleScopeTag>|null
    */
    public function getRoleScopeTags(): ?array {
        $val = $this->getBackingStore()->get('roleScopeTags');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RoleScopeTag::class);
            /** @var array<RoleScopeTag>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleScopeTags'");
    }

    /**
     * Gets the serviceNowConnections property value. A list of ServiceNowConnections
     * @return array<ServiceNowConnection>|null
    */
    public function getServiceNowConnections(): ?array {
        $val = $this->getBackingStore()->get('serviceNowConnections');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ServiceNowConnection::class);
            /** @var array<ServiceNowConnection>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serviceNowConnections'");
    }

    /**
     * Gets the settingDefinitions property value. The device management intent setting definitions
     * @return array<DeviceManagementSettingDefinition>|null
    */
    public function getSettingDefinitions(): ?array {
        $val = $this->getBackingStore()->get('settingDefinitions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementSettingDefinition::class);
            /** @var array<DeviceManagementSettingDefinition>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingDefinitions'");
    }

    /**
     * Gets the settings property value. Account level settings.
     * @return DeviceManagementSettings|null
    */
    public function getSettings(): ?DeviceManagementSettings {
        $val = $this->getBackingStore()->get('settings');
        if (is_null($val) || $val instanceof DeviceManagementSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settings'");
    }

    /**
     * Gets the softwareUpdateStatusSummary property value. The software update status summary.
     * @return SoftwareUpdateStatusSummary|null
    */
    public function getSoftwareUpdateStatusSummary(): ?SoftwareUpdateStatusSummary {
        $val = $this->getBackingStore()->get('softwareUpdateStatusSummary');
        if (is_null($val) || $val instanceof SoftwareUpdateStatusSummary) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'softwareUpdateStatusSummary'");
    }

    /**
     * Gets the subscriptions property value. Tenant mobile device management subscriptions.
     * @return DeviceManagementSubscriptions|null
    */
    public function getSubscriptions(): ?DeviceManagementSubscriptions {
        $val = $this->getBackingStore()->get('subscriptions');
        if (is_null($val) || $val instanceof DeviceManagementSubscriptions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subscriptions'");
    }

    /**
     * Gets the subscriptionState property value. Tenant mobile device management subscription state.
     * @return DeviceManagementSubscriptionState|null
    */
    public function getSubscriptionState(): ?DeviceManagementSubscriptionState {
        $val = $this->getBackingStore()->get('subscriptionState');
        if (is_null($val) || $val instanceof DeviceManagementSubscriptionState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subscriptionState'");
    }

    /**
     * Gets the telecomExpenseManagementPartners property value. The telecom expense management partners.
     * @return array<TelecomExpenseManagementPartner>|null
    */
    public function getTelecomExpenseManagementPartners(): ?array {
        $val = $this->getBackingStore()->get('telecomExpenseManagementPartners');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TelecomExpenseManagementPartner::class);
            /** @var array<TelecomExpenseManagementPartner>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'telecomExpenseManagementPartners'");
    }

    /**
     * Gets the templateInsights property value. List of setting insights in a template
     * @return array<DeviceManagementTemplateInsightsDefinition>|null
    */
    public function getTemplateInsights(): ?array {
        $val = $this->getBackingStore()->get('templateInsights');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementTemplateInsightsDefinition::class);
            /** @var array<DeviceManagementTemplateInsightsDefinition>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'templateInsights'");
    }

    /**
     * Gets the templates property value. The available templates
     * @return array<DeviceManagementTemplate>|null
    */
    public function getTemplates(): ?array {
        $val = $this->getBackingStore()->get('templates');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementTemplate::class);
            /** @var array<DeviceManagementTemplate>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'templates'");
    }

    /**
     * Gets the templateSettings property value. List of all TemplateSettings
     * @return array<DeviceManagementConfigurationSettingTemplate>|null
    */
    public function getTemplateSettings(): ?array {
        $val = $this->getBackingStore()->get('templateSettings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementConfigurationSettingTemplate::class);
            /** @var array<DeviceManagementConfigurationSettingTemplate>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'templateSettings'");
    }

    /**
     * Gets the tenantAttachRBAC property value. TenantAttach RBAC Enablement
     * @return TenantAttachRBAC|null
    */
    public function getTenantAttachRBAC(): ?TenantAttachRBAC {
        $val = $this->getBackingStore()->get('tenantAttachRBAC');
        if (is_null($val) || $val instanceof TenantAttachRBAC) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantAttachRBAC'");
    }

    /**
     * Gets the termsAndConditions property value. The terms and conditions associated with device management of the company.
     * @return array<TermsAndConditions>|null
    */
    public function getTermsAndConditions(): ?array {
        $val = $this->getBackingStore()->get('termsAndConditions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TermsAndConditions::class);
            /** @var array<TermsAndConditions>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'termsAndConditions'");
    }

    /**
     * Gets the troubleshootingEvents property value. The list of troubleshooting events for the tenant.
     * @return array<DeviceManagementTroubleshootingEvent>|null
    */
    public function getTroubleshootingEvents(): ?array {
        $val = $this->getBackingStore()->get('troubleshootingEvents');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementTroubleshootingEvent::class);
            /** @var array<DeviceManagementTroubleshootingEvent>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'troubleshootingEvents'");
    }

    /**
     * Gets the unlicensedAdminstratorsEnabled property value. When enabled, users assigned as administrators via Role Assignment Memberships do not require an assigned Intune license. Prior to this, only Intune licensed users were granted permissions with an Intune role unless they were assigned a role via Azure Active Directory. You are limited to 350 unlicensed direct members for each AAD security group in a role assignment, but you can assign multiple AAD security groups to a role if you need to support more than 350 unlicensed administrators. Licensed administrators are unaffected, do not have to be direct members, nor does the 350 member limit apply. This property is read-only.
     * @return bool|null
    */
    public function getUnlicensedAdminstratorsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('unlicensedAdminstratorsEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'unlicensedAdminstratorsEnabled'");
    }

    /**
     * Gets the userExperienceAnalyticsAnomaly property value. The user experience analytics anomaly entity contains anomaly details.
     * @return array<UserExperienceAnalyticsAnomaly>|null
    */
    public function getUserExperienceAnalyticsAnomaly(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsAnomaly');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsAnomaly::class);
            /** @var array<UserExperienceAnalyticsAnomaly>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsAnomaly'");
    }

    /**
     * Gets the userExperienceAnalyticsAnomalyCorrelationGroupOverview property value. The user experience analytics anomaly correlation group overview entity contains the information for each correlation group of an anomaly.
     * @return array<UserExperienceAnalyticsAnomalyCorrelationGroupOverview>|null
    */
    public function getUserExperienceAnalyticsAnomalyCorrelationGroupOverview(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsAnomalyCorrelationGroupOverview');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsAnomalyCorrelationGroupOverview::class);
            /** @var array<UserExperienceAnalyticsAnomalyCorrelationGroupOverview>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsAnomalyCorrelationGroupOverview'");
    }

    /**
     * Gets the userExperienceAnalyticsAnomalyDevice property value. The user experience analytics anomaly entity contains device details.
     * @return array<UserExperienceAnalyticsAnomalyDevice>|null
    */
    public function getUserExperienceAnalyticsAnomalyDevice(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsAnomalyDevice');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsAnomalyDevice::class);
            /** @var array<UserExperienceAnalyticsAnomalyDevice>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsAnomalyDevice'");
    }

    /**
     * Gets the userExperienceAnalyticsAnomalySeverityOverview property value. The user experience analytics anomaly severity overview entity contains the count information for each severity of anomaly.
     * @return UserExperienceAnalyticsAnomalySeverityOverview|null
    */
    public function getUserExperienceAnalyticsAnomalySeverityOverview(): ?UserExperienceAnalyticsAnomalySeverityOverview {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsAnomalySeverityOverview');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsAnomalySeverityOverview) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsAnomalySeverityOverview'");
    }

    /**
     * Gets the userExperienceAnalyticsAppHealthApplicationPerformance property value. User experience analytics appHealth Application Performance
     * @return array<UserExperienceAnalyticsAppHealthApplicationPerformance>|null
    */
    public function getUserExperienceAnalyticsAppHealthApplicationPerformance(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsAppHealthApplicationPerformance');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsAppHealthApplicationPerformance::class);
            /** @var array<UserExperienceAnalyticsAppHealthApplicationPerformance>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsAppHealthApplicationPerformance'");
    }

    /**
     * Gets the userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion property value. User experience analytics appHealth Application Performance by App Version
     * @return array<UserExperienceAnalyticsAppHealthAppPerformanceByAppVersion>|null
    */
    public function getUserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsAppHealthAppPerformanceByAppVersion::class);
            /** @var array<UserExperienceAnalyticsAppHealthAppPerformanceByAppVersion>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion'");
    }

    /**
     * Gets the userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails property value. User experience analytics appHealth Application Performance by App Version details
     * @return array<UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails>|null
    */
    public function getUserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails::class);
            /** @var array<UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails'");
    }

    /**
     * Gets the userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId property value. User experience analytics appHealth Application Performance by App Version Device Id
     * @return array<UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId>|null
    */
    public function getUserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId::class);
            /** @var array<UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId'");
    }

    /**
     * Gets the userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion property value. User experience analytics appHealth Application Performance by OS Version
     * @return array<UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion>|null
    */
    public function getUserExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion::class);
            /** @var array<UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion'");
    }

    /**
     * Gets the userExperienceAnalyticsAppHealthDeviceModelPerformance property value. User experience analytics appHealth Model Performance
     * @return array<UserExperienceAnalyticsAppHealthDeviceModelPerformance>|null
    */
    public function getUserExperienceAnalyticsAppHealthDeviceModelPerformance(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsAppHealthDeviceModelPerformance');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsAppHealthDeviceModelPerformance::class);
            /** @var array<UserExperienceAnalyticsAppHealthDeviceModelPerformance>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsAppHealthDeviceModelPerformance'");
    }

    /**
     * Gets the userExperienceAnalyticsAppHealthDevicePerformance property value. User experience analytics appHealth Device Performance
     * @return array<UserExperienceAnalyticsAppHealthDevicePerformance>|null
    */
    public function getUserExperienceAnalyticsAppHealthDevicePerformance(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsAppHealthDevicePerformance');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsAppHealthDevicePerformance::class);
            /** @var array<UserExperienceAnalyticsAppHealthDevicePerformance>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsAppHealthDevicePerformance'");
    }

    /**
     * Gets the userExperienceAnalyticsAppHealthDevicePerformanceDetails property value. User experience analytics device performance details
     * @return array<UserExperienceAnalyticsAppHealthDevicePerformanceDetails>|null
    */
    public function getUserExperienceAnalyticsAppHealthDevicePerformanceDetails(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsAppHealthDevicePerformanceDetails');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsAppHealthDevicePerformanceDetails::class);
            /** @var array<UserExperienceAnalyticsAppHealthDevicePerformanceDetails>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsAppHealthDevicePerformanceDetails'");
    }

    /**
     * Gets the userExperienceAnalyticsAppHealthOSVersionPerformance property value. User experience analytics appHealth OS version Performance
     * @return array<UserExperienceAnalyticsAppHealthOSVersionPerformance>|null
    */
    public function getUserExperienceAnalyticsAppHealthOSVersionPerformance(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsAppHealthOSVersionPerformance');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsAppHealthOSVersionPerformance::class);
            /** @var array<UserExperienceAnalyticsAppHealthOSVersionPerformance>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsAppHealthOSVersionPerformance'");
    }

    /**
     * Gets the userExperienceAnalyticsAppHealthOverview property value. User experience analytics appHealth overview
     * @return UserExperienceAnalyticsCategory|null
    */
    public function getUserExperienceAnalyticsAppHealthOverview(): ?UserExperienceAnalyticsCategory {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsAppHealthOverview');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsCategory) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsAppHealthOverview'");
    }

    /**
     * Gets the userExperienceAnalyticsBaselines property value. User experience analytics baselines
     * @return array<UserExperienceAnalyticsBaseline>|null
    */
    public function getUserExperienceAnalyticsBaselines(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsBaselines');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsBaseline::class);
            /** @var array<UserExperienceAnalyticsBaseline>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsBaselines'");
    }

    /**
     * Gets the userExperienceAnalyticsBatteryHealthAppImpact property value. User Experience Analytics Battery Health App Impact
     * @return array<UserExperienceAnalyticsBatteryHealthAppImpact>|null
    */
    public function getUserExperienceAnalyticsBatteryHealthAppImpact(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsBatteryHealthAppImpact');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsBatteryHealthAppImpact::class);
            /** @var array<UserExperienceAnalyticsBatteryHealthAppImpact>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsBatteryHealthAppImpact'");
    }

    /**
     * Gets the userExperienceAnalyticsBatteryHealthCapacityDetails property value. User Experience Analytics Battery Health Capacity Details
     * @return UserExperienceAnalyticsBatteryHealthCapacityDetails|null
    */
    public function getUserExperienceAnalyticsBatteryHealthCapacityDetails(): ?UserExperienceAnalyticsBatteryHealthCapacityDetails {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsBatteryHealthCapacityDetails');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsBatteryHealthCapacityDetails) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsBatteryHealthCapacityDetails'");
    }

    /**
     * Gets the userExperienceAnalyticsBatteryHealthDeviceAppImpact property value. User Experience Analytics Battery Health Device App Impact
     * @return array<UserExperienceAnalyticsBatteryHealthDeviceAppImpact>|null
    */
    public function getUserExperienceAnalyticsBatteryHealthDeviceAppImpact(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsBatteryHealthDeviceAppImpact');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsBatteryHealthDeviceAppImpact::class);
            /** @var array<UserExperienceAnalyticsBatteryHealthDeviceAppImpact>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsBatteryHealthDeviceAppImpact'");
    }

    /**
     * Gets the userExperienceAnalyticsBatteryHealthDevicePerformance property value. User Experience Analytics Battery Health Device Performance
     * @return array<UserExperienceAnalyticsBatteryHealthDevicePerformance>|null
    */
    public function getUserExperienceAnalyticsBatteryHealthDevicePerformance(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsBatteryHealthDevicePerformance');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsBatteryHealthDevicePerformance::class);
            /** @var array<UserExperienceAnalyticsBatteryHealthDevicePerformance>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsBatteryHealthDevicePerformance'");
    }

    /**
     * Gets the userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory property value. User Experience Analytics Battery Health Device Runtime History
     * @return array<UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory>|null
    */
    public function getUserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory::class);
            /** @var array<UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory'");
    }

    /**
     * Gets the userExperienceAnalyticsBatteryHealthModelPerformance property value. User Experience Analytics Battery Health Model Performance
     * @return array<UserExperienceAnalyticsBatteryHealthModelPerformance>|null
    */
    public function getUserExperienceAnalyticsBatteryHealthModelPerformance(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsBatteryHealthModelPerformance');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsBatteryHealthModelPerformance::class);
            /** @var array<UserExperienceAnalyticsBatteryHealthModelPerformance>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsBatteryHealthModelPerformance'");
    }

    /**
     * Gets the userExperienceAnalyticsBatteryHealthOsPerformance property value. User Experience Analytics Battery Health Os Performance
     * @return array<UserExperienceAnalyticsBatteryHealthOsPerformance>|null
    */
    public function getUserExperienceAnalyticsBatteryHealthOsPerformance(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsBatteryHealthOsPerformance');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsBatteryHealthOsPerformance::class);
            /** @var array<UserExperienceAnalyticsBatteryHealthOsPerformance>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsBatteryHealthOsPerformance'");
    }

    /**
     * Gets the userExperienceAnalyticsBatteryHealthRuntimeDetails property value. User Experience Analytics Battery Health Runtime Details
     * @return UserExperienceAnalyticsBatteryHealthRuntimeDetails|null
    */
    public function getUserExperienceAnalyticsBatteryHealthRuntimeDetails(): ?UserExperienceAnalyticsBatteryHealthRuntimeDetails {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsBatteryHealthRuntimeDetails');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsBatteryHealthRuntimeDetails) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsBatteryHealthRuntimeDetails'");
    }

    /**
     * Gets the userExperienceAnalyticsCategories property value. User experience analytics categories
     * @return array<UserExperienceAnalyticsCategory>|null
    */
    public function getUserExperienceAnalyticsCategories(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsCategories');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsCategory::class);
            /** @var array<UserExperienceAnalyticsCategory>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsCategories'");
    }

    /**
     * Gets the userExperienceAnalyticsDeviceMetricHistory property value. User experience analytics device metric history. The report will be retired on December 31, 2024. You can start using the Cloud PC connection quality report now via https://learn.microsoft.com/windows-365/enterprise/report-cloud-pc-connection-quality.
     * @return array<UserExperienceAnalyticsMetricHistory>|null
    */
    public function getUserExperienceAnalyticsDeviceMetricHistory(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsDeviceMetricHistory');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsMetricHistory::class);
            /** @var array<UserExperienceAnalyticsMetricHistory>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsDeviceMetricHistory'");
    }

    /**
     * Gets the userExperienceAnalyticsDevicePerformance property value. User experience analytics device performance
     * @return array<UserExperienceAnalyticsDevicePerformance>|null
    */
    public function getUserExperienceAnalyticsDevicePerformance(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsDevicePerformance');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsDevicePerformance::class);
            /** @var array<UserExperienceAnalyticsDevicePerformance>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsDevicePerformance'");
    }

    /**
     * Gets the userExperienceAnalyticsDeviceScope property value. The user experience analytics device scope entity endpoint to trigger on the service to either START or STOP computing metrics data based on a device scope configuration.
     * @return UserExperienceAnalyticsDeviceScope|null
    */
    public function getUserExperienceAnalyticsDeviceScope(): ?UserExperienceAnalyticsDeviceScope {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsDeviceScope');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsDeviceScope) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsDeviceScope'");
    }

    /**
     * Gets the userExperienceAnalyticsDeviceScopes property value. The user experience analytics device scope entity contains device scope configuration use to apply filtering on the endpoint analytics reports.
     * @return array<UserExperienceAnalyticsDeviceScope>|null
    */
    public function getUserExperienceAnalyticsDeviceScopes(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsDeviceScopes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsDeviceScope::class);
            /** @var array<UserExperienceAnalyticsDeviceScope>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsDeviceScopes'");
    }

    /**
     * Gets the userExperienceAnalyticsDeviceScores property value. User experience analytics device scores
     * @return array<UserExperienceAnalyticsDeviceScores>|null
    */
    public function getUserExperienceAnalyticsDeviceScores(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsDeviceScores');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsDeviceScores::class);
            /** @var array<UserExperienceAnalyticsDeviceScores>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsDeviceScores'");
    }

    /**
     * Gets the userExperienceAnalyticsDeviceStartupHistory property value. User experience analytics device Startup History
     * @return array<UserExperienceAnalyticsDeviceStartupHistory>|null
    */
    public function getUserExperienceAnalyticsDeviceStartupHistory(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsDeviceStartupHistory');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsDeviceStartupHistory::class);
            /** @var array<UserExperienceAnalyticsDeviceStartupHistory>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsDeviceStartupHistory'");
    }

    /**
     * Gets the userExperienceAnalyticsDeviceStartupProcesses property value. User experience analytics device Startup Processes
     * @return array<UserExperienceAnalyticsDeviceStartupProcess>|null
    */
    public function getUserExperienceAnalyticsDeviceStartupProcesses(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsDeviceStartupProcesses');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsDeviceStartupProcess::class);
            /** @var array<UserExperienceAnalyticsDeviceStartupProcess>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsDeviceStartupProcesses'");
    }

    /**
     * Gets the userExperienceAnalyticsDeviceStartupProcessPerformance property value. User experience analytics device Startup Process Performance
     * @return array<UserExperienceAnalyticsDeviceStartupProcessPerformance>|null
    */
    public function getUserExperienceAnalyticsDeviceStartupProcessPerformance(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsDeviceStartupProcessPerformance');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsDeviceStartupProcessPerformance::class);
            /** @var array<UserExperienceAnalyticsDeviceStartupProcessPerformance>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsDeviceStartupProcessPerformance'");
    }

    /**
     * Gets the userExperienceAnalyticsDevicesWithoutCloudIdentity property value. User experience analytics devices without cloud identity.
     * @return array<UserExperienceAnalyticsDeviceWithoutCloudIdentity>|null
    */
    public function getUserExperienceAnalyticsDevicesWithoutCloudIdentity(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsDevicesWithoutCloudIdentity');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsDeviceWithoutCloudIdentity::class);
            /** @var array<UserExperienceAnalyticsDeviceWithoutCloudIdentity>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsDevicesWithoutCloudIdentity'");
    }

    /**
     * Gets the userExperienceAnalyticsDeviceTimelineEvent property value. The user experience analytics device events entity contains NRT device timeline event details.
     * @return array<UserExperienceAnalyticsDeviceTimelineEvent>|null
    */
    public function getUserExperienceAnalyticsDeviceTimelineEvent(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsDeviceTimelineEvent');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsDeviceTimelineEvent::class);
            /** @var array<UserExperienceAnalyticsDeviceTimelineEvent>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsDeviceTimelineEvent'");
    }

    /**
     * Gets the userExperienceAnalyticsImpactingProcess property value. User experience analytics impacting process
     * @return array<UserExperienceAnalyticsImpactingProcess>|null
    */
    public function getUserExperienceAnalyticsImpactingProcess(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsImpactingProcess');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsImpactingProcess::class);
            /** @var array<UserExperienceAnalyticsImpactingProcess>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsImpactingProcess'");
    }

    /**
     * Gets the userExperienceAnalyticsMetricHistory property value. User experience analytics metric history
     * @return array<UserExperienceAnalyticsMetricHistory>|null
    */
    public function getUserExperienceAnalyticsMetricHistory(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsMetricHistory');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsMetricHistory::class);
            /** @var array<UserExperienceAnalyticsMetricHistory>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsMetricHistory'");
    }

    /**
     * Gets the userExperienceAnalyticsModelScores property value. User experience analytics model scores
     * @return array<UserExperienceAnalyticsModelScores>|null
    */
    public function getUserExperienceAnalyticsModelScores(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsModelScores');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsModelScores::class);
            /** @var array<UserExperienceAnalyticsModelScores>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsModelScores'");
    }

    /**
     * Gets the userExperienceAnalyticsNotAutopilotReadyDevice property value. User experience analytics devices not Windows Autopilot ready.
     * @return array<UserExperienceAnalyticsNotAutopilotReadyDevice>|null
    */
    public function getUserExperienceAnalyticsNotAutopilotReadyDevice(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsNotAutopilotReadyDevice');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsNotAutopilotReadyDevice::class);
            /** @var array<UserExperienceAnalyticsNotAutopilotReadyDevice>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsNotAutopilotReadyDevice'");
    }

    /**
     * Gets the userExperienceAnalyticsOverview property value. User experience analytics overview
     * @return UserExperienceAnalyticsOverview|null
    */
    public function getUserExperienceAnalyticsOverview(): ?UserExperienceAnalyticsOverview {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsOverview');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsOverview) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsOverview'");
    }

    /**
     * Gets the userExperienceAnalyticsRemoteConnection property value. User experience analytics remote connection. The report will be retired on December 31, 2024. You can start using the Cloud PC connection quality report now via https://learn.microsoft.com/windows-365/enterprise/report-cloud-pc-connection-quality.
     * @return array<UserExperienceAnalyticsRemoteConnection>|null
    */
    public function getUserExperienceAnalyticsRemoteConnection(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsRemoteConnection');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsRemoteConnection::class);
            /** @var array<UserExperienceAnalyticsRemoteConnection>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsRemoteConnection'");
    }

    /**
     * Gets the userExperienceAnalyticsResourcePerformance property value. User experience analytics resource performance
     * @return array<UserExperienceAnalyticsResourcePerformance>|null
    */
    public function getUserExperienceAnalyticsResourcePerformance(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsResourcePerformance');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsResourcePerformance::class);
            /** @var array<UserExperienceAnalyticsResourcePerformance>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsResourcePerformance'");
    }

    /**
     * Gets the userExperienceAnalyticsScoreHistory property value. User experience analytics device Startup Score History
     * @return array<UserExperienceAnalyticsScoreHistory>|null
    */
    public function getUserExperienceAnalyticsScoreHistory(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsScoreHistory');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsScoreHistory::class);
            /** @var array<UserExperienceAnalyticsScoreHistory>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsScoreHistory'");
    }

    /**
     * Gets the userExperienceAnalyticsSettings property value. User experience analytics device settings
     * @return UserExperienceAnalyticsSettings|null
    */
    public function getUserExperienceAnalyticsSettings(): ?UserExperienceAnalyticsSettings {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsSettings');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsSettings'");
    }

    /**
     * Gets the userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric property value. User experience analytics work from anywhere hardware readiness metrics.
     * @return UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric|null
    */
    public function getUserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric(): ?UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric'");
    }

    /**
     * Gets the userExperienceAnalyticsWorkFromAnywhereMetrics property value. User experience analytics work from anywhere metrics.
     * @return array<UserExperienceAnalyticsWorkFromAnywhereMetric>|null
    */
    public function getUserExperienceAnalyticsWorkFromAnywhereMetrics(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsWorkFromAnywhereMetrics');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsWorkFromAnywhereMetric::class);
            /** @var array<UserExperienceAnalyticsWorkFromAnywhereMetric>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsWorkFromAnywhereMetrics'");
    }

    /**
     * Gets the userExperienceAnalyticsWorkFromAnywhereModelPerformance property value. The user experience analytics work from anywhere model performance
     * @return array<UserExperienceAnalyticsWorkFromAnywhereModelPerformance>|null
    */
    public function getUserExperienceAnalyticsWorkFromAnywhereModelPerformance(): ?array {
        $val = $this->getBackingStore()->get('userExperienceAnalyticsWorkFromAnywhereModelPerformance');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsWorkFromAnywhereModelPerformance::class);
            /** @var array<UserExperienceAnalyticsWorkFromAnywhereModelPerformance>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userExperienceAnalyticsWorkFromAnywhereModelPerformance'");
    }

    /**
     * Gets the userPfxCertificates property value. Collection of PFX certificates associated with a user.
     * @return array<UserPFXCertificate>|null
    */
    public function getUserPfxCertificates(): ?array {
        $val = $this->getBackingStore()->get('userPfxCertificates');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserPFXCertificate::class);
            /** @var array<UserPFXCertificate>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userPfxCertificates'");
    }

    /**
     * Gets the virtualEndpoint property value. The virtualEndpoint property
     * @return VirtualEndpoint|null
    */
    public function getVirtualEndpoint(): ?VirtualEndpoint {
        $val = $this->getBackingStore()->get('virtualEndpoint');
        if (is_null($val) || $val instanceof VirtualEndpoint) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'virtualEndpoint'");
    }

    /**
     * Gets the windowsAutopilotDeploymentProfiles property value. Windows auto pilot deployment profiles
     * @return array<WindowsAutopilotDeploymentProfile>|null
    */
    public function getWindowsAutopilotDeploymentProfiles(): ?array {
        $val = $this->getBackingStore()->get('windowsAutopilotDeploymentProfiles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WindowsAutopilotDeploymentProfile::class);
            /** @var array<WindowsAutopilotDeploymentProfile>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsAutopilotDeploymentProfiles'");
    }

    /**
     * Gets the windowsAutopilotDeviceIdentities property value. The Windows autopilot device identities contained collection.
     * @return array<WindowsAutopilotDeviceIdentity>|null
    */
    public function getWindowsAutopilotDeviceIdentities(): ?array {
        $val = $this->getBackingStore()->get('windowsAutopilotDeviceIdentities');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WindowsAutopilotDeviceIdentity::class);
            /** @var array<WindowsAutopilotDeviceIdentity>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsAutopilotDeviceIdentities'");
    }

    /**
     * Gets the windowsAutopilotSettings property value. The Windows autopilot account settings.
     * @return WindowsAutopilotSettings|null
    */
    public function getWindowsAutopilotSettings(): ?WindowsAutopilotSettings {
        $val = $this->getBackingStore()->get('windowsAutopilotSettings');
        if (is_null($val) || $val instanceof WindowsAutopilotSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsAutopilotSettings'");
    }

    /**
     * Gets the windowsDriverUpdateProfiles property value. A collection of windows driver update profiles
     * @return array<WindowsDriverUpdateProfile>|null
    */
    public function getWindowsDriverUpdateProfiles(): ?array {
        $val = $this->getBackingStore()->get('windowsDriverUpdateProfiles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WindowsDriverUpdateProfile::class);
            /** @var array<WindowsDriverUpdateProfile>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsDriverUpdateProfiles'");
    }

    /**
     * Gets the windowsFeatureUpdateProfiles property value. A collection of windows feature update profiles
     * @return array<WindowsFeatureUpdateProfile>|null
    */
    public function getWindowsFeatureUpdateProfiles(): ?array {
        $val = $this->getBackingStore()->get('windowsFeatureUpdateProfiles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WindowsFeatureUpdateProfile::class);
            /** @var array<WindowsFeatureUpdateProfile>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsFeatureUpdateProfiles'");
    }

    /**
     * Gets the windowsInformationProtectionAppLearningSummaries property value. The windows information protection app learning summaries.
     * @return array<WindowsInformationProtectionAppLearningSummary>|null
    */
    public function getWindowsInformationProtectionAppLearningSummaries(): ?array {
        $val = $this->getBackingStore()->get('windowsInformationProtectionAppLearningSummaries');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WindowsInformationProtectionAppLearningSummary::class);
            /** @var array<WindowsInformationProtectionAppLearningSummary>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsInformationProtectionAppLearningSummaries'");
    }

    /**
     * Gets the windowsInformationProtectionNetworkLearningSummaries property value. The windows information protection network learning summaries.
     * @return array<WindowsInformationProtectionNetworkLearningSummary>|null
    */
    public function getWindowsInformationProtectionNetworkLearningSummaries(): ?array {
        $val = $this->getBackingStore()->get('windowsInformationProtectionNetworkLearningSummaries');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WindowsInformationProtectionNetworkLearningSummary::class);
            /** @var array<WindowsInformationProtectionNetworkLearningSummary>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsInformationProtectionNetworkLearningSummaries'");
    }

    /**
     * Gets the windowsMalwareInformation property value. The list of affected malware in the tenant.
     * @return array<WindowsMalwareInformation>|null
    */
    public function getWindowsMalwareInformation(): ?array {
        $val = $this->getBackingStore()->get('windowsMalwareInformation');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WindowsMalwareInformation::class);
            /** @var array<WindowsMalwareInformation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsMalwareInformation'");
    }

    /**
     * Gets the windowsMalwareOverview property value. Malware overview for windows devices.
     * @return WindowsMalwareOverview|null
    */
    public function getWindowsMalwareOverview(): ?WindowsMalwareOverview {
        $val = $this->getBackingStore()->get('windowsMalwareOverview');
        if (is_null($val) || $val instanceof WindowsMalwareOverview) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsMalwareOverview'");
    }

    /**
     * Gets the windowsQualityUpdatePolicies property value. A collection of Windows quality update policies
     * @return array<WindowsQualityUpdatePolicy>|null
    */
    public function getWindowsQualityUpdatePolicies(): ?array {
        $val = $this->getBackingStore()->get('windowsQualityUpdatePolicies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WindowsQualityUpdatePolicy::class);
            /** @var array<WindowsQualityUpdatePolicy>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsQualityUpdatePolicies'");
    }

    /**
     * Gets the windowsQualityUpdateProfiles property value. A collection of windows quality update profiles
     * @return array<WindowsQualityUpdateProfile>|null
    */
    public function getWindowsQualityUpdateProfiles(): ?array {
        $val = $this->getBackingStore()->get('windowsQualityUpdateProfiles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WindowsQualityUpdateProfile::class);
            /** @var array<WindowsQualityUpdateProfile>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsQualityUpdateProfiles'");
    }

    /**
     * Gets the windowsUpdateCatalogItems property value. A collection of windows update catalog items (fetaure updates item , quality updates item)
     * @return array<WindowsUpdateCatalogItem>|null
    */
    public function getWindowsUpdateCatalogItems(): ?array {
        $val = $this->getBackingStore()->get('windowsUpdateCatalogItems');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WindowsUpdateCatalogItem::class);
            /** @var array<WindowsUpdateCatalogItem>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsUpdateCatalogItems'");
    }

    /**
     * Gets the zebraFotaArtifacts property value. The Collection of ZebraFotaArtifacts.
     * @return array<ZebraFotaArtifact>|null
    */
    public function getZebraFotaArtifacts(): ?array {
        $val = $this->getBackingStore()->get('zebraFotaArtifacts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ZebraFotaArtifact::class);
            /** @var array<ZebraFotaArtifact>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'zebraFotaArtifacts'");
    }

    /**
     * Gets the zebraFotaConnector property value. The singleton ZebraFotaConnector associated with account.
     * @return ZebraFotaConnector|null
    */
    public function getZebraFotaConnector(): ?ZebraFotaConnector {
        $val = $this->getBackingStore()->get('zebraFotaConnector');
        if (is_null($val) || $val instanceof ZebraFotaConnector) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'zebraFotaConnector'");
    }

    /**
     * Gets the zebraFotaDeployments property value. Collection of ZebraFotaDeployments associated with account.
     * @return array<ZebraFotaDeployment>|null
    */
    public function getZebraFotaDeployments(): ?array {
        $val = $this->getBackingStore()->get('zebraFotaDeployments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ZebraFotaDeployment::class);
            /** @var array<ZebraFotaDeployment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'zebraFotaDeployments'");
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
        $writer->writeCollectionOfObjectValues('cloudCertificationAuthority', $this->getCloudCertificationAuthority());
        $writer->writeCollectionOfObjectValues('cloudCertificationAuthorityLeafCertificate', $this->getCloudCertificationAuthorityLeafCertificate());
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
        $writer->writeCollectionOfObjectValues('elevationRequests', $this->getElevationRequests());
        $writer->writeCollectionOfObjectValues('embeddedSIMActivationCodePools', $this->getEmbeddedSIMActivationCodePools());
        $writer->writeObjectValue('endpointPrivilegeManagementProvisioningStatus', $this->getEndpointPrivilegeManagementProvisioningStatus());
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
        $writer->writeCollectionOfObjectValues('hardwareConfigurations', $this->getHardwareConfigurations());
        $writer->writeCollectionOfObjectValues('hardwarePasswordDetails', $this->getHardwarePasswordDetails());
        $writer->writeCollectionOfObjectValues('hardwarePasswordInfo', $this->getHardwarePasswordInfo());
        $writer->writeCollectionOfObjectValues('importedDeviceIdentities', $this->getImportedDeviceIdentities());
        $writer->writeCollectionOfObjectValues('importedWindowsAutopilotDeviceIdentities', $this->getImportedWindowsAutopilotDeviceIdentities());
        $writer->writeCollectionOfObjectValues('intents', $this->getIntents());
        $writer->writeStringValue('intuneAccountId', $this->getIntuneAccountId());
        $writer->writeObjectValue('intuneBrand', $this->getIntuneBrand());
        $writer->writeCollectionOfObjectValues('intuneBrandingProfiles', $this->getIntuneBrandingProfiles());
        $writer->writeCollectionOfObjectValues('iosUpdateStatuses', $this->getIosUpdateStatuses());
        $writer->writeCollectionOfObjectValues('macOSSoftwareUpdateAccountSummaries', $this->getMacOSSoftwareUpdateAccountSummaries());
        $writer->writeCollectionOfObjectValues('managedDeviceCleanupRules', $this->getManagedDeviceCleanupRules());
        $writer->writeObjectValue('managedDeviceCleanupSettings', $this->getManagedDeviceCleanupSettings());
        $writer->writeCollectionOfObjectValues('managedDeviceEncryptionStates', $this->getManagedDeviceEncryptionStates());
        $writer->writeObjectValue('managedDeviceOverview', $this->getManagedDeviceOverview());
        $writer->writeCollectionOfObjectValues('managedDevices', $this->getManagedDevices());
        $writer->writeCollectionOfObjectValues('managedDeviceWindowsOSImages', $this->getManagedDeviceWindowsOSImages());
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
        $writer->writeCollectionOfObjectValues('operationApprovalPolicies', $this->getOperationApprovalPolicies());
        $writer->writeCollectionOfObjectValues('operationApprovalRequests', $this->getOperationApprovalRequests());
        $writer->writeCollectionOfObjectValues('privilegeManagementElevations', $this->getPrivilegeManagementElevations());
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
        $writer->writeCollectionOfObjectValues('userExperienceAnalyticsAnomalyCorrelationGroupOverview', $this->getUserExperienceAnalyticsAnomalyCorrelationGroupOverview());
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
        $writer->writeCollectionOfObjectValues('windowsQualityUpdatePolicies', $this->getWindowsQualityUpdatePolicies());
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
     * Sets the cloudCertificationAuthority property value. Collection of CloudCertificationAuthority records associated with account.
     * @param array<CloudCertificationAuthority>|null $value Value to set for the cloudCertificationAuthority property.
    */
    public function setCloudCertificationAuthority(?array $value): void {
        $this->getBackingStore()->set('cloudCertificationAuthority', $value);
    }

    /**
     * Sets the cloudCertificationAuthorityLeafCertificate property value. Collection of CloudCertificationAuthorityLeafCertificate records associated with account.
     * @param array<CloudCertificationAuthorityLeafCertificate>|null $value Value to set for the cloudCertificationAuthorityLeafCertificate property.
    */
    public function setCloudCertificationAuthorityLeafCertificate(?array $value): void {
        $this->getBackingStore()->set('cloudCertificationAuthorityLeafCertificate', $value);
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
     * Sets the elevationRequests property value. List of elevation requests
     * @param array<PrivilegeManagementElevationRequest>|null $value Value to set for the elevationRequests property.
    */
    public function setElevationRequests(?array $value): void {
        $this->getBackingStore()->set('elevationRequests', $value);
    }

    /**
     * Sets the embeddedSIMActivationCodePools property value. The embedded SIM activation code pools created by this account.
     * @param array<EmbeddedSIMActivationCodePool>|null $value Value to set for the embeddedSIMActivationCodePools property.
    */
    public function setEmbeddedSIMActivationCodePools(?array $value): void {
        $this->getBackingStore()->set('embeddedSIMActivationCodePools', $value);
    }

    /**
     * Sets the endpointPrivilegeManagementProvisioningStatus property value. Endpoint privilege management (EPM) tenant provisioning status contains tenant level license and onboarding state information.
     * @param EndpointPrivilegeManagementProvisioningStatus|null $value Value to set for the endpointPrivilegeManagementProvisioningStatus property.
    */
    public function setEndpointPrivilegeManagementProvisioningStatus(?EndpointPrivilegeManagementProvisioningStatus $value): void {
        $this->getBackingStore()->set('endpointPrivilegeManagementProvisioningStatus', $value);
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
     * Sets the hardwareConfigurations property value. BIOS configuration and other settings provides customers the ability to configure hardware/bios settings on the enrolled Windows 10/11 Entra ID joined devices by uploading a configuration file generated with their OEM tool (e.g. Dell Command tool). A BIOS configuration policy can be assigned to multiple devices, allowing admins to remotely control a device's hardware properties (e.g. enable Secure Boot) from the Intune Portal. Supported for Dell only at this time.
     * @param array<HardwareConfiguration>|null $value Value to set for the hardwareConfigurations property.
    */
    public function setHardwareConfigurations(?array $value): void {
        $this->getBackingStore()->set('hardwareConfigurations', $value);
    }

    /**
     * Sets the hardwarePasswordDetails property value. Device BIOS password information for devices with managed BIOS and firmware configuration, which provides device serial number, list of previous passwords, and current password.
     * @param array<HardwarePasswordDetail>|null $value Value to set for the hardwarePasswordDetails property.
    */
    public function setHardwarePasswordDetails(?array $value): void {
        $this->getBackingStore()->set('hardwarePasswordDetails', $value);
    }

    /**
     * Sets the hardwarePasswordInfo property value. Intune will provide customer the ability to configure BIOS configuration settings on the enrolled Windows 10 and Windows 11 Microsoft Entra joined devices. Starting from June, 2024, customers should start using hardwarePasswordDetail resource type - Microsoft Graph beta | Microsoft Learn. HardwarePasswordInfo will be marked as deprecated with Intune Release 2409
     * @param array<HardwarePasswordInfo>|null $value Value to set for the hardwarePasswordInfo property.
    */
    public function setHardwarePasswordInfo(?array $value): void {
        $this->getBackingStore()->set('hardwarePasswordInfo', $value);
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
     * Sets the intuneAccountId property value. Intune Account Id for given tenant
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
     * Sets the managedDeviceCleanupRules property value. Device cleanup rule V2
     * @param array<ManagedDeviceCleanupRule>|null $value Value to set for the managedDeviceCleanupRules property.
    */
    public function setManagedDeviceCleanupRules(?array $value): void {
        $this->getBackingStore()->set('managedDeviceCleanupRules', $value);
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
     * Sets the managedDeviceWindowsOSImages property value. A list of ManagedDeviceWindowsOperatingSystemImages
     * @param array<ManagedDeviceWindowsOperatingSystemImage>|null $value Value to set for the managedDeviceWindowsOSImages property.
    */
    public function setManagedDeviceWindowsOSImages(?array $value): void {
        $this->getBackingStore()->set('managedDeviceWindowsOSImages', $value);
    }

    /**
     * Sets the maximumDepTokens property value. Maximum number of dep tokens allowed per-tenant.
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
     * Sets the operationApprovalPolicies property value. The Operation Approval Policies
     * @param array<OperationApprovalPolicy>|null $value Value to set for the operationApprovalPolicies property.
    */
    public function setOperationApprovalPolicies(?array $value): void {
        $this->getBackingStore()->set('operationApprovalPolicies', $value);
    }

    /**
     * Sets the operationApprovalRequests property value. The Operation Approval Requests
     * @param array<OperationApprovalRequest>|null $value Value to set for the operationApprovalRequests property.
    */
    public function setOperationApprovalRequests(?array $value): void {
        $this->getBackingStore()->set('operationApprovalRequests', $value);
    }

    /**
     * Sets the privilegeManagementElevations property value. The endpoint privilege management elevation event entity contains elevation details.
     * @param array<PrivilegeManagementElevation>|null $value Value to set for the privilegeManagementElevations property.
    */
    public function setPrivilegeManagementElevations(?array $value): void {
        $this->getBackingStore()->set('privilegeManagementElevations', $value);
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
     * Sets the reports property value. The reports property
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
     * Sets the userExperienceAnalyticsAnomalyCorrelationGroupOverview property value. The user experience analytics anomaly correlation group overview entity contains the information for each correlation group of an anomaly.
     * @param array<UserExperienceAnalyticsAnomalyCorrelationGroupOverview>|null $value Value to set for the userExperienceAnalyticsAnomalyCorrelationGroupOverview property.
    */
    public function setUserExperienceAnalyticsAnomalyCorrelationGroupOverview(?array $value): void {
        $this->getBackingStore()->set('userExperienceAnalyticsAnomalyCorrelationGroupOverview', $value);
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
     * Sets the userExperienceAnalyticsDeviceMetricHistory property value. User experience analytics device metric history. The report will be retired on December 31, 2024. You can start using the Cloud PC connection quality report now via https://learn.microsoft.com/windows-365/enterprise/report-cloud-pc-connection-quality.
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
     * Sets the userExperienceAnalyticsRemoteConnection property value. User experience analytics remote connection. The report will be retired on December 31, 2024. You can start using the Cloud PC connection quality report now via https://learn.microsoft.com/windows-365/enterprise/report-cloud-pc-connection-quality.
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
     * Sets the windowsQualityUpdatePolicies property value. A collection of Windows quality update policies
     * @param array<WindowsQualityUpdatePolicy>|null $value Value to set for the windowsQualityUpdatePolicies property.
    */
    public function setWindowsQualityUpdatePolicies(?array $value): void {
        $this->getBackingStore()->set('windowsQualityUpdatePolicies', $value);
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

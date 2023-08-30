<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\AdvancedThreatProtectionOnboardingStateSummary\AdvancedThreatProtectionOnboardingStateSummaryRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidDeviceOwnerEnrollmentProfiles\AndroidDeviceOwnerEnrollmentProfilesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidForWorkAppConfigurationSchemas\AndroidForWorkAppConfigurationSchemasRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidForWorkEnrollmentProfiles\AndroidForWorkEnrollmentProfilesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidForWorkSettings\AndroidForWorkSettingsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidManagedStoreAccountEnterpriseSettings\AndroidManagedStoreAccountEnterpriseSettingsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\AndroidManagedStoreAppConfigurationSchemas\AndroidManagedStoreAppConfigurationSchemasRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ApplePushNotificationCertificate\ApplePushNotificationCertificateRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\AppleUserInitiatedEnrollmentProfiles\AppleUserInitiatedEnrollmentProfilesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\AssignmentFilters\AssignmentFiltersRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\AuditEvents\AuditEventsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\AutopilotEvents\AutopilotEventsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\CartToClassAssociations\CartToClassAssociationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Categories\CategoriesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\CertificateConnectorDetails\CertificateConnectorDetailsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ChromeOSOnboardingSettings\ChromeOSOnboardingSettingsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\CloudPCConnectivityIssues\CloudPCConnectivityIssuesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\ComanagedDevicesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagementEligibleDevices\ComanagementEligibleDevicesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComplianceCategories\ComplianceCategoriesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComplianceManagementPartners\ComplianceManagementPartnersRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\CompliancePolicies\CompliancePoliciesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComplianceSettings\ComplianceSettingsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ConditionalAccessSettings\ConditionalAccessSettingsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ConfigManagerCollections\ConfigManagerCollectionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ConfigurationCategories\ConfigurationCategoriesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ConfigurationPolicies\ConfigurationPoliciesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ConfigurationPolicyTemplates\ConfigurationPolicyTemplatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ConfigurationSettings\ConfigurationSettingsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DataSharingConsents\DataSharingConsentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DepOnboardingSettings\DepOnboardingSettingsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DerivedCredentials\DerivedCredentialsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DetectedApps\DetectedAppsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceCategories\DeviceCategoriesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceCompliancePolicies\DeviceCompliancePoliciesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceCompliancePolicyDeviceStateSummary\DeviceCompliancePolicyDeviceStateSummaryRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceCompliancePolicySettingStateSummaries\DeviceCompliancePolicySettingStateSummariesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceComplianceScripts\DeviceComplianceScriptsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceConfigurationConflictSummary\DeviceConfigurationConflictSummaryRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceConfigurationDeviceStateSummaries\DeviceConfigurationDeviceStateSummariesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceConfigurationRestrictedAppsViolations\DeviceConfigurationRestrictedAppsViolationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceConfigurations\DeviceConfigurationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceConfigurationsAllManagedDeviceCertificateStates\DeviceConfigurationsAllManagedDeviceCertificateStatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceConfigurationUserStateSummaries\DeviceConfigurationUserStateSummariesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceCustomAttributeShellScripts\DeviceCustomAttributeShellScriptsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceEnrollmentConfigurations\DeviceEnrollmentConfigurationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceHealthScripts\DeviceHealthScriptsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceManagementPartners\DeviceManagementPartnersRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceManagementScripts\DeviceManagementScriptsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceShellScripts\DeviceShellScriptsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DomainJoinConnectors\DomainJoinConnectorsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\EmbeddedSIMActivationCodePools\EmbeddedSIMActivationCodePoolsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\EnableAndroidDeviceAdministratorEnrollment\EnableAndroidDeviceAdministratorEnrollmentRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\EnableLegacyPcManagement\EnableLegacyPcManagementRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\EnableUnlicensedAdminstrators\EnableUnlicensedAdminstratorsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\EvaluateAssignmentFilter\EvaluateAssignmentFilterRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ExchangeConnectors\ExchangeConnectorsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ExchangeOnPremisesPolicies\ExchangeOnPremisesPoliciesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ExchangeOnPremisesPolicy\ExchangeOnPremisesPolicyRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GetAssignedRoleDetails\GetAssignedRoleDetailsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GetAssignmentFiltersStatusDetails\GetAssignmentFiltersStatusDetailsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GetComanagedDevicesSummary\GetComanagedDevicesSummaryRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GetComanagementEligibleDevicesSummary\GetComanagementEligibleDevicesSummaryRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GetEffectivePermissions\GetEffectivePermissionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GetEffectivePermissionsWithScope\GetEffectivePermissionsWithScopeRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GetRoleScopeTagsByIdsWithIds\GetRoleScopeTagsByIdsWithIdsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GetRoleScopeTagsByResourceWithResource\GetRoleScopeTagsByResourceWithResourceRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GetSuggestedEnrollmentLimitWithEnrollmentType\GetSuggestedEnrollmentLimitWithEnrollmentTypeRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyCategories\GroupPolicyCategoriesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyConfigurations\GroupPolicyConfigurationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyDefinitionFiles\GroupPolicyDefinitionFilesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyDefinitions\GroupPolicyDefinitionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyMigrationReports\GroupPolicyMigrationReportsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyObjectFiles\GroupPolicyObjectFilesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyUploadedDefinitionFiles\GroupPolicyUploadedDefinitionFilesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ImportedDeviceIdentities\ImportedDeviceIdentitiesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ImportedWindowsAutopilotDeviceIdentities\ImportedWindowsAutopilotDeviceIdentitiesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Intents\IntentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\IntuneBrandingProfiles\IntuneBrandingProfilesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\IosUpdateStatuses\IosUpdateStatusesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\MacOSSoftwareUpdateAccountSummaries\MacOSSoftwareUpdateAccountSummariesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDeviceEncryptionStates\ManagedDeviceEncryptionStatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDeviceOverview\ManagedDeviceOverviewRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\ManagedDevicesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\MicrosoftTunnelConfigurations\MicrosoftTunnelConfigurationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\MicrosoftTunnelHealthThresholds\MicrosoftTunnelHealthThresholdsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\MicrosoftTunnelServerLogCollectionResponses\MicrosoftTunnelServerLogCollectionResponsesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\MicrosoftTunnelSites\MicrosoftTunnelSitesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\MobileAppTroubleshootingEvents\MobileAppTroubleshootingEventsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\MobileThreatDefenseConnectors\MobileThreatDefenseConnectorsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Monitoring\MonitoringRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\NdesConnectors\NdesConnectorsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\NotificationMessageTemplates\NotificationMessageTemplatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\PrivilegeManagementElevations\PrivilegeManagementElevationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\RemoteActionAudits\RemoteActionAuditsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\RemoteAssistancePartners\RemoteAssistancePartnersRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\RemoteAssistanceSettings\RemoteAssistanceSettingsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\ReportsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ResourceAccessProfiles\ResourceAccessProfilesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ResourceOperations\ResourceOperationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ReusablePolicySettings\ReusablePolicySettingsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ReusableSettings\ReusableSettingsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\RoleAssignments\RoleAssignmentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\RoleDefinitions\RoleDefinitionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\RoleScopeTags\RoleScopeTagsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ScopedForResourceWithResource\ScopedForResourceWithResourceRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\SendCustomNotificationToCompanyPortal\SendCustomNotificationToCompanyPortalRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ServiceNowConnections\ServiceNowConnectionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\SettingDefinitions\SettingDefinitionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\SoftwareUpdateStatusSummary\SoftwareUpdateStatusSummaryRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\TelecomExpenseManagementPartners\TelecomExpenseManagementPartnersRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\TemplateInsights\TemplateInsightsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Templates\TemplatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\TemplateSettings\TemplateSettingsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\TenantAttachRBAC\TenantAttachRBACRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\TermsAndConditions\TermsAndConditionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\TroubleshootingEvents\TroubleshootingEventsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsAnomaly\UserExperienceAnalyticsAnomalyRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsAnomalyCorrelationGroupOverview\UserExperienceAnalyticsAnomalyCorrelationGroupOverviewRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsAnomalyDevice\UserExperienceAnalyticsAnomalyDeviceRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthApplicationPerformance\UserExperienceAnalyticsAppHealthApplicationPerformanceRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion\UserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails\UserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetailsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId\UserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceIdRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion\UserExperienceAnalyticsAppHealthApplicationPerformanceByOSVersionRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthDeviceModelPerformance\UserExperienceAnalyticsAppHealthDeviceModelPerformanceRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthDevicePerformance\UserExperienceAnalyticsAppHealthDevicePerformanceRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthDevicePerformanceDetails\UserExperienceAnalyticsAppHealthDevicePerformanceDetailsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthOSVersionPerformance\UserExperienceAnalyticsAppHealthOSVersionPerformanceRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthOverview\UserExperienceAnalyticsAppHealthOverviewRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsBaselines\UserExperienceAnalyticsBaselinesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsBatteryHealthAppImpact\UserExperienceAnalyticsBatteryHealthAppImpactRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsBatteryHealthCapacityDetails\UserExperienceAnalyticsBatteryHealthCapacityDetailsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsBatteryHealthDeviceAppImpact\UserExperienceAnalyticsBatteryHealthDeviceAppImpactRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsBatteryHealthDevicePerformance\UserExperienceAnalyticsBatteryHealthDevicePerformanceRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistory\UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistoryRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsBatteryHealthModelPerformance\UserExperienceAnalyticsBatteryHealthModelPerformanceRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsBatteryHealthOsPerformance\UserExperienceAnalyticsBatteryHealthOsPerformanceRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsBatteryHealthRuntimeDetails\UserExperienceAnalyticsBatteryHealthRuntimeDetailsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsCategories\UserExperienceAnalyticsCategoriesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsDeviceMetricHistory\UserExperienceAnalyticsDeviceMetricHistoryRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsDevicePerformance\UserExperienceAnalyticsDevicePerformanceRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsDeviceScope\UserExperienceAnalyticsDeviceScopeRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsDeviceScopes\UserExperienceAnalyticsDeviceScopesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsDeviceScores\UserExperienceAnalyticsDeviceScoresRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsDeviceStartupHistory\UserExperienceAnalyticsDeviceStartupHistoryRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsDeviceStartupProcesses\UserExperienceAnalyticsDeviceStartupProcessesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsDeviceStartupProcessPerformance\UserExperienceAnalyticsDeviceStartupProcessPerformanceRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsDevicesWithoutCloudIdentity\UserExperienceAnalyticsDevicesWithoutCloudIdentityRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsDeviceTimelineEvent\UserExperienceAnalyticsDeviceTimelineEventRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsImpactingProcess\UserExperienceAnalyticsImpactingProcessRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsMetricHistory\UserExperienceAnalyticsMetricHistoryRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsModelScores\UserExperienceAnalyticsModelScoresRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsNotAutopilotReadyDevice\UserExperienceAnalyticsNotAutopilotReadyDeviceRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsOverview\UserExperienceAnalyticsOverviewRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsRemoteConnection\UserExperienceAnalyticsRemoteConnectionRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsResourcePerformance\UserExperienceAnalyticsResourcePerformanceRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsScoreHistory\UserExperienceAnalyticsScoreHistoryRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsSummarizedDeviceScopes\UserExperienceAnalyticsSummarizedDeviceScopesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsSummarizeWorkFromAnywhereDevices\UserExperienceAnalyticsSummarizeWorkFromAnywhereDevicesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric\UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetricRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsWorkFromAnywhereMetrics\UserExperienceAnalyticsWorkFromAnywhereMetricsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsWorkFromAnywhereModelPerformance\UserExperienceAnalyticsWorkFromAnywhereModelPerformanceRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\UserPfxCertificates\UserPfxCertificatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VerifyWindowsEnrollmentAutoDiscoveryWithDomainName\VerifyWindowsEnrollmentAutoDiscoveryWithDomainNameRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\VirtualEndpointRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\WindowsAutopilotDeploymentProfiles\WindowsAutopilotDeploymentProfilesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\WindowsAutopilotDeviceIdentities\WindowsAutopilotDeviceIdentitiesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\WindowsAutopilotSettings\WindowsAutopilotSettingsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\WindowsDriverUpdateProfiles\WindowsDriverUpdateProfilesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\WindowsFeatureUpdateProfiles\WindowsFeatureUpdateProfilesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\WindowsInformationProtectionAppLearningSummaries\WindowsInformationProtectionAppLearningSummariesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\WindowsInformationProtectionNetworkLearningSummaries\WindowsInformationProtectionNetworkLearningSummariesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\WindowsMalwareInformation\WindowsMalwareInformationRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\WindowsQualityUpdateProfiles\WindowsQualityUpdateProfilesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\WindowsUpdateCatalogItems\WindowsUpdateCatalogItemsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ZebraFotaArtifacts\ZebraFotaArtifactsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ZebraFotaConnector\ZebraFotaConnectorRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ZebraFotaDeployments\ZebraFotaDeploymentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagement\DeviceManagement;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the deviceManagement singleton.
*/
class DeviceManagementRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the advancedThreatProtectionOnboardingStateSummary property of the microsoft.graph.deviceManagement entity.
    */
    public function advancedThreatProtectionOnboardingStateSummary(): AdvancedThreatProtectionOnboardingStateSummaryRequestBuilder {
        return new AdvancedThreatProtectionOnboardingStateSummaryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the androidDeviceOwnerEnrollmentProfiles property of the microsoft.graph.deviceManagement entity.
    */
    public function androidDeviceOwnerEnrollmentProfiles(): AndroidDeviceOwnerEnrollmentProfilesRequestBuilder {
        return new AndroidDeviceOwnerEnrollmentProfilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the androidForWorkAppConfigurationSchemas property of the microsoft.graph.deviceManagement entity.
    */
    public function androidForWorkAppConfigurationSchemas(): AndroidForWorkAppConfigurationSchemasRequestBuilder {
        return new AndroidForWorkAppConfigurationSchemasRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the androidForWorkEnrollmentProfiles property of the microsoft.graph.deviceManagement entity.
    */
    public function androidForWorkEnrollmentProfiles(): AndroidForWorkEnrollmentProfilesRequestBuilder {
        return new AndroidForWorkEnrollmentProfilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the androidForWorkSettings property of the microsoft.graph.deviceManagement entity.
    */
    public function androidForWorkSettings(): AndroidForWorkSettingsRequestBuilder {
        return new AndroidForWorkSettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the androidManagedStoreAccountEnterpriseSettings property of the microsoft.graph.deviceManagement entity.
    */
    public function androidManagedStoreAccountEnterpriseSettings(): AndroidManagedStoreAccountEnterpriseSettingsRequestBuilder {
        return new AndroidManagedStoreAccountEnterpriseSettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the androidManagedStoreAppConfigurationSchemas property of the microsoft.graph.deviceManagement entity.
    */
    public function androidManagedStoreAppConfigurationSchemas(): AndroidManagedStoreAppConfigurationSchemasRequestBuilder {
        return new AndroidManagedStoreAppConfigurationSchemasRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the applePushNotificationCertificate property of the microsoft.graph.deviceManagement entity.
    */
    public function applePushNotificationCertificate(): ApplePushNotificationCertificateRequestBuilder {
        return new ApplePushNotificationCertificateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the appleUserInitiatedEnrollmentProfiles property of the microsoft.graph.deviceManagement entity.
    */
    public function appleUserInitiatedEnrollmentProfiles(): AppleUserInitiatedEnrollmentProfilesRequestBuilder {
        return new AppleUserInitiatedEnrollmentProfilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the assignmentFilters property of the microsoft.graph.deviceManagement entity.
    */
    public function assignmentFilters(): AssignmentFiltersRequestBuilder {
        return new AssignmentFiltersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the auditEvents property of the microsoft.graph.deviceManagement entity.
    */
    public function auditEvents(): AuditEventsRequestBuilder {
        return new AuditEventsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the autopilotEvents property of the microsoft.graph.deviceManagement entity.
    */
    public function autopilotEvents(): AutopilotEventsRequestBuilder {
        return new AutopilotEventsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the cartToClassAssociations property of the microsoft.graph.deviceManagement entity.
    */
    public function cartToClassAssociations(): CartToClassAssociationsRequestBuilder {
        return new CartToClassAssociationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the categories property of the microsoft.graph.deviceManagement entity.
    */
    public function categories(): CategoriesRequestBuilder {
        return new CategoriesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the certificateConnectorDetails property of the microsoft.graph.deviceManagement entity.
    */
    public function certificateConnectorDetails(): CertificateConnectorDetailsRequestBuilder {
        return new CertificateConnectorDetailsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the chromeOSOnboardingSettings property of the microsoft.graph.deviceManagement entity.
    */
    public function chromeOSOnboardingSettings(): ChromeOSOnboardingSettingsRequestBuilder {
        return new ChromeOSOnboardingSettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the cloudPCConnectivityIssues property of the microsoft.graph.deviceManagement entity.
    */
    public function cloudPCConnectivityIssues(): CloudPCConnectivityIssuesRequestBuilder {
        return new CloudPCConnectivityIssuesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the comanagedDevices property of the microsoft.graph.deviceManagement entity.
    */
    public function comanagedDevices(): ComanagedDevicesRequestBuilder {
        return new ComanagedDevicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the comanagementEligibleDevices property of the microsoft.graph.deviceManagement entity.
    */
    public function comanagementEligibleDevices(): ComanagementEligibleDevicesRequestBuilder {
        return new ComanagementEligibleDevicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the complianceCategories property of the microsoft.graph.deviceManagement entity.
    */
    public function complianceCategories(): ComplianceCategoriesRequestBuilder {
        return new ComplianceCategoriesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the complianceManagementPartners property of the microsoft.graph.deviceManagement entity.
    */
    public function complianceManagementPartners(): ComplianceManagementPartnersRequestBuilder {
        return new ComplianceManagementPartnersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the compliancePolicies property of the microsoft.graph.deviceManagement entity.
    */
    public function compliancePolicies(): CompliancePoliciesRequestBuilder {
        return new CompliancePoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the complianceSettings property of the microsoft.graph.deviceManagement entity.
    */
    public function complianceSettings(): ComplianceSettingsRequestBuilder {
        return new ComplianceSettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the conditionalAccessSettings property of the microsoft.graph.deviceManagement entity.
    */
    public function conditionalAccessSettings(): ConditionalAccessSettingsRequestBuilder {
        return new ConditionalAccessSettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the configManagerCollections property of the microsoft.graph.deviceManagement entity.
    */
    public function configManagerCollections(): ConfigManagerCollectionsRequestBuilder {
        return new ConfigManagerCollectionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the configurationCategories property of the microsoft.graph.deviceManagement entity.
    */
    public function configurationCategories(): ConfigurationCategoriesRequestBuilder {
        return new ConfigurationCategoriesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the configurationPolicies property of the microsoft.graph.deviceManagement entity.
    */
    public function configurationPolicies(): ConfigurationPoliciesRequestBuilder {
        return new ConfigurationPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the configurationPolicyTemplates property of the microsoft.graph.deviceManagement entity.
    */
    public function configurationPolicyTemplates(): ConfigurationPolicyTemplatesRequestBuilder {
        return new ConfigurationPolicyTemplatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the configurationSettings property of the microsoft.graph.deviceManagement entity.
    */
    public function configurationSettings(): ConfigurationSettingsRequestBuilder {
        return new ConfigurationSettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the dataSharingConsents property of the microsoft.graph.deviceManagement entity.
    */
    public function dataSharingConsents(): DataSharingConsentsRequestBuilder {
        return new DataSharingConsentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the depOnboardingSettings property of the microsoft.graph.deviceManagement entity.
    */
    public function depOnboardingSettings(): DepOnboardingSettingsRequestBuilder {
        return new DepOnboardingSettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the derivedCredentials property of the microsoft.graph.deviceManagement entity.
    */
    public function derivedCredentials(): DerivedCredentialsRequestBuilder {
        return new DerivedCredentialsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the detectedApps property of the microsoft.graph.deviceManagement entity.
    */
    public function detectedApps(): DetectedAppsRequestBuilder {
        return new DetectedAppsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceCategories property of the microsoft.graph.deviceManagement entity.
    */
    public function deviceCategories(): DeviceCategoriesRequestBuilder {
        return new DeviceCategoriesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceCompliancePolicies property of the microsoft.graph.deviceManagement entity.
    */
    public function deviceCompliancePolicies(): DeviceCompliancePoliciesRequestBuilder {
        return new DeviceCompliancePoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceCompliancePolicyDeviceStateSummary property of the microsoft.graph.deviceManagement entity.
    */
    public function deviceCompliancePolicyDeviceStateSummary(): DeviceCompliancePolicyDeviceStateSummaryRequestBuilder {
        return new DeviceCompliancePolicyDeviceStateSummaryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceCompliancePolicySettingStateSummaries property of the microsoft.graph.deviceManagement entity.
    */
    public function deviceCompliancePolicySettingStateSummaries(): DeviceCompliancePolicySettingStateSummariesRequestBuilder {
        return new DeviceCompliancePolicySettingStateSummariesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceComplianceScripts property of the microsoft.graph.deviceManagement entity.
    */
    public function deviceComplianceScripts(): DeviceComplianceScriptsRequestBuilder {
        return new DeviceComplianceScriptsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceConfigurationConflictSummary property of the microsoft.graph.deviceManagement entity.
    */
    public function deviceConfigurationConflictSummary(): DeviceConfigurationConflictSummaryRequestBuilder {
        return new DeviceConfigurationConflictSummaryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceConfigurationDeviceStateSummaries property of the microsoft.graph.deviceManagement entity.
    */
    public function deviceConfigurationDeviceStateSummaries(): DeviceConfigurationDeviceStateSummariesRequestBuilder {
        return new DeviceConfigurationDeviceStateSummariesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceConfigurationRestrictedAppsViolations property of the microsoft.graph.deviceManagement entity.
    */
    public function deviceConfigurationRestrictedAppsViolations(): DeviceConfigurationRestrictedAppsViolationsRequestBuilder {
        return new DeviceConfigurationRestrictedAppsViolationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceConfigurations property of the microsoft.graph.deviceManagement entity.
    */
    public function deviceConfigurations(): DeviceConfigurationsRequestBuilder {
        return new DeviceConfigurationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceConfigurationsAllManagedDeviceCertificateStates property of the microsoft.graph.deviceManagement entity.
    */
    public function deviceConfigurationsAllManagedDeviceCertificateStates(): DeviceConfigurationsAllManagedDeviceCertificateStatesRequestBuilder {
        return new DeviceConfigurationsAllManagedDeviceCertificateStatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceConfigurationUserStateSummaries property of the microsoft.graph.deviceManagement entity.
    */
    public function deviceConfigurationUserStateSummaries(): DeviceConfigurationUserStateSummariesRequestBuilder {
        return new DeviceConfigurationUserStateSummariesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceCustomAttributeShellScripts property of the microsoft.graph.deviceManagement entity.
    */
    public function deviceCustomAttributeShellScripts(): DeviceCustomAttributeShellScriptsRequestBuilder {
        return new DeviceCustomAttributeShellScriptsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceEnrollmentConfigurations property of the microsoft.graph.deviceManagement entity.
    */
    public function deviceEnrollmentConfigurations(): DeviceEnrollmentConfigurationsRequestBuilder {
        return new DeviceEnrollmentConfigurationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceHealthScripts property of the microsoft.graph.deviceManagement entity.
    */
    public function deviceHealthScripts(): DeviceHealthScriptsRequestBuilder {
        return new DeviceHealthScriptsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceManagementPartners property of the microsoft.graph.deviceManagement entity.
    */
    public function deviceManagementPartners(): DeviceManagementPartnersRequestBuilder {
        return new DeviceManagementPartnersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceManagementScripts property of the microsoft.graph.deviceManagement entity.
    */
    public function deviceManagementScripts(): DeviceManagementScriptsRequestBuilder {
        return new DeviceManagementScriptsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceShellScripts property of the microsoft.graph.deviceManagement entity.
    */
    public function deviceShellScripts(): DeviceShellScriptsRequestBuilder {
        return new DeviceShellScriptsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the domainJoinConnectors property of the microsoft.graph.deviceManagement entity.
    */
    public function domainJoinConnectors(): DomainJoinConnectorsRequestBuilder {
        return new DomainJoinConnectorsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the embeddedSIMActivationCodePools property of the microsoft.graph.deviceManagement entity.
    */
    public function embeddedSIMActivationCodePools(): EmbeddedSIMActivationCodePoolsRequestBuilder {
        return new EmbeddedSIMActivationCodePoolsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the enableAndroidDeviceAdministratorEnrollment method.
    */
    public function enableAndroidDeviceAdministratorEnrollment(): EnableAndroidDeviceAdministratorEnrollmentRequestBuilder {
        return new EnableAndroidDeviceAdministratorEnrollmentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the enableLegacyPcManagement method.
    */
    public function enableLegacyPcManagement(): EnableLegacyPcManagementRequestBuilder {
        return new EnableLegacyPcManagementRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the enableUnlicensedAdminstrators method.
    */
    public function enableUnlicensedAdminstrators(): EnableUnlicensedAdminstratorsRequestBuilder {
        return new EnableUnlicensedAdminstratorsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the evaluateAssignmentFilter method.
    */
    public function evaluateAssignmentFilter(): EvaluateAssignmentFilterRequestBuilder {
        return new EvaluateAssignmentFilterRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the exchangeConnectors property of the microsoft.graph.deviceManagement entity.
    */
    public function exchangeConnectors(): ExchangeConnectorsRequestBuilder {
        return new ExchangeConnectorsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the exchangeOnPremisesPolicies property of the microsoft.graph.deviceManagement entity.
    */
    public function exchangeOnPremisesPolicies(): ExchangeOnPremisesPoliciesRequestBuilder {
        return new ExchangeOnPremisesPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the exchangeOnPremisesPolicy property of the microsoft.graph.deviceManagement entity.
    */
    public function exchangeOnPremisesPolicy(): ExchangeOnPremisesPolicyRequestBuilder {
        return new ExchangeOnPremisesPolicyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getAssignedRoleDetails method.
    */
    public function getAssignedRoleDetails(): GetAssignedRoleDetailsRequestBuilder {
        return new GetAssignedRoleDetailsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getAssignmentFiltersStatusDetails method.
    */
    public function getAssignmentFiltersStatusDetails(): GetAssignmentFiltersStatusDetailsRequestBuilder {
        return new GetAssignmentFiltersStatusDetailsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getComanagedDevicesSummary method.
    */
    public function getComanagedDevicesSummary(): GetComanagedDevicesSummaryRequestBuilder {
        return new GetComanagedDevicesSummaryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getComanagementEligibleDevicesSummary method.
    */
    public function getComanagementEligibleDevicesSummary(): GetComanagementEligibleDevicesSummaryRequestBuilder {
        return new GetComanagementEligibleDevicesSummaryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getEffectivePermissions method.
    */
    public function getEffectivePermissions(): GetEffectivePermissionsRequestBuilder {
        return new GetEffectivePermissionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the groupPolicyCategories property of the microsoft.graph.deviceManagement entity.
    */
    public function groupPolicyCategories(): GroupPolicyCategoriesRequestBuilder {
        return new GroupPolicyCategoriesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the groupPolicyConfigurations property of the microsoft.graph.deviceManagement entity.
    */
    public function groupPolicyConfigurations(): GroupPolicyConfigurationsRequestBuilder {
        return new GroupPolicyConfigurationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the groupPolicyDefinitionFiles property of the microsoft.graph.deviceManagement entity.
    */
    public function groupPolicyDefinitionFiles(): GroupPolicyDefinitionFilesRequestBuilder {
        return new GroupPolicyDefinitionFilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the groupPolicyDefinitions property of the microsoft.graph.deviceManagement entity.
    */
    public function groupPolicyDefinitions(): GroupPolicyDefinitionsRequestBuilder {
        return new GroupPolicyDefinitionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the groupPolicyMigrationReports property of the microsoft.graph.deviceManagement entity.
    */
    public function groupPolicyMigrationReports(): GroupPolicyMigrationReportsRequestBuilder {
        return new GroupPolicyMigrationReportsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the groupPolicyObjectFiles property of the microsoft.graph.deviceManagement entity.
    */
    public function groupPolicyObjectFiles(): GroupPolicyObjectFilesRequestBuilder {
        return new GroupPolicyObjectFilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the groupPolicyUploadedDefinitionFiles property of the microsoft.graph.deviceManagement entity.
    */
    public function groupPolicyUploadedDefinitionFiles(): GroupPolicyUploadedDefinitionFilesRequestBuilder {
        return new GroupPolicyUploadedDefinitionFilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the importedDeviceIdentities property of the microsoft.graph.deviceManagement entity.
    */
    public function importedDeviceIdentities(): ImportedDeviceIdentitiesRequestBuilder {
        return new ImportedDeviceIdentitiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the importedWindowsAutopilotDeviceIdentities property of the microsoft.graph.deviceManagement entity.
    */
    public function importedWindowsAutopilotDeviceIdentities(): ImportedWindowsAutopilotDeviceIdentitiesRequestBuilder {
        return new ImportedWindowsAutopilotDeviceIdentitiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the intents property of the microsoft.graph.deviceManagement entity.
    */
    public function intents(): IntentsRequestBuilder {
        return new IntentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the intuneBrandingProfiles property of the microsoft.graph.deviceManagement entity.
    */
    public function intuneBrandingProfiles(): IntuneBrandingProfilesRequestBuilder {
        return new IntuneBrandingProfilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the iosUpdateStatuses property of the microsoft.graph.deviceManagement entity.
    */
    public function iosUpdateStatuses(): IosUpdateStatusesRequestBuilder {
        return new IosUpdateStatusesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the macOSSoftwareUpdateAccountSummaries property of the microsoft.graph.deviceManagement entity.
    */
    public function macOSSoftwareUpdateAccountSummaries(): MacOSSoftwareUpdateAccountSummariesRequestBuilder {
        return new MacOSSoftwareUpdateAccountSummariesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managedDeviceEncryptionStates property of the microsoft.graph.deviceManagement entity.
    */
    public function managedDeviceEncryptionStates(): ManagedDeviceEncryptionStatesRequestBuilder {
        return new ManagedDeviceEncryptionStatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managedDeviceOverview property of the microsoft.graph.deviceManagement entity.
    */
    public function managedDeviceOverview(): ManagedDeviceOverviewRequestBuilder {
        return new ManagedDeviceOverviewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managedDevices property of the microsoft.graph.deviceManagement entity.
    */
    public function managedDevices(): ManagedDevicesRequestBuilder {
        return new ManagedDevicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the microsoftTunnelConfigurations property of the microsoft.graph.deviceManagement entity.
    */
    public function microsoftTunnelConfigurations(): MicrosoftTunnelConfigurationsRequestBuilder {
        return new MicrosoftTunnelConfigurationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the microsoftTunnelHealthThresholds property of the microsoft.graph.deviceManagement entity.
    */
    public function microsoftTunnelHealthThresholds(): MicrosoftTunnelHealthThresholdsRequestBuilder {
        return new MicrosoftTunnelHealthThresholdsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the microsoftTunnelServerLogCollectionResponses property of the microsoft.graph.deviceManagement entity.
    */
    public function microsoftTunnelServerLogCollectionResponses(): MicrosoftTunnelServerLogCollectionResponsesRequestBuilder {
        return new MicrosoftTunnelServerLogCollectionResponsesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the microsoftTunnelSites property of the microsoft.graph.deviceManagement entity.
    */
    public function microsoftTunnelSites(): MicrosoftTunnelSitesRequestBuilder {
        return new MicrosoftTunnelSitesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the mobileAppTroubleshootingEvents property of the microsoft.graph.deviceManagement entity.
    */
    public function mobileAppTroubleshootingEvents(): MobileAppTroubleshootingEventsRequestBuilder {
        return new MobileAppTroubleshootingEventsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the mobileThreatDefenseConnectors property of the microsoft.graph.deviceManagement entity.
    */
    public function mobileThreatDefenseConnectors(): MobileThreatDefenseConnectorsRequestBuilder {
        return new MobileThreatDefenseConnectorsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the monitoring property of the microsoft.graph.deviceManagement entity.
    */
    public function monitoring(): MonitoringRequestBuilder {
        return new MonitoringRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the ndesConnectors property of the microsoft.graph.deviceManagement entity.
    */
    public function ndesConnectors(): NdesConnectorsRequestBuilder {
        return new NdesConnectorsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the notificationMessageTemplates property of the microsoft.graph.deviceManagement entity.
    */
    public function notificationMessageTemplates(): NotificationMessageTemplatesRequestBuilder {
        return new NotificationMessageTemplatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the privilegeManagementElevations property of the microsoft.graph.deviceManagement entity.
    */
    public function privilegeManagementElevations(): PrivilegeManagementElevationsRequestBuilder {
        return new PrivilegeManagementElevationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the remoteActionAudits property of the microsoft.graph.deviceManagement entity.
    */
    public function remoteActionAudits(): RemoteActionAuditsRequestBuilder {
        return new RemoteActionAuditsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the remoteAssistancePartners property of the microsoft.graph.deviceManagement entity.
    */
    public function remoteAssistancePartners(): RemoteAssistancePartnersRequestBuilder {
        return new RemoteAssistancePartnersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the remoteAssistanceSettings property of the microsoft.graph.deviceManagement entity.
    */
    public function remoteAssistanceSettings(): RemoteAssistanceSettingsRequestBuilder {
        return new RemoteAssistanceSettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the reports property of the microsoft.graph.deviceManagement entity.
    */
    public function reports(): ReportsRequestBuilder {
        return new ReportsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the resourceAccessProfiles property of the microsoft.graph.deviceManagement entity.
    */
    public function resourceAccessProfiles(): ResourceAccessProfilesRequestBuilder {
        return new ResourceAccessProfilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the resourceOperations property of the microsoft.graph.deviceManagement entity.
    */
    public function resourceOperations(): ResourceOperationsRequestBuilder {
        return new ResourceOperationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the reusablePolicySettings property of the microsoft.graph.deviceManagement entity.
    */
    public function reusablePolicySettings(): ReusablePolicySettingsRequestBuilder {
        return new ReusablePolicySettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the reusableSettings property of the microsoft.graph.deviceManagement entity.
    */
    public function reusableSettings(): ReusableSettingsRequestBuilder {
        return new ReusableSettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the roleAssignments property of the microsoft.graph.deviceManagement entity.
    */
    public function roleAssignments(): RoleAssignmentsRequestBuilder {
        return new RoleAssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the roleDefinitions property of the microsoft.graph.deviceManagement entity.
    */
    public function roleDefinitions(): RoleDefinitionsRequestBuilder {
        return new RoleDefinitionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the roleScopeTags property of the microsoft.graph.deviceManagement entity.
    */
    public function roleScopeTags(): RoleScopeTagsRequestBuilder {
        return new RoleScopeTagsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sendCustomNotificationToCompanyPortal method.
    */
    public function sendCustomNotificationToCompanyPortal(): SendCustomNotificationToCompanyPortalRequestBuilder {
        return new SendCustomNotificationToCompanyPortalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the serviceNowConnections property of the microsoft.graph.deviceManagement entity.
    */
    public function serviceNowConnections(): ServiceNowConnectionsRequestBuilder {
        return new ServiceNowConnectionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the settingDefinitions property of the microsoft.graph.deviceManagement entity.
    */
    public function settingDefinitions(): SettingDefinitionsRequestBuilder {
        return new SettingDefinitionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the softwareUpdateStatusSummary property of the microsoft.graph.deviceManagement entity.
    */
    public function softwareUpdateStatusSummary(): SoftwareUpdateStatusSummaryRequestBuilder {
        return new SoftwareUpdateStatusSummaryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the telecomExpenseManagementPartners property of the microsoft.graph.deviceManagement entity.
    */
    public function telecomExpenseManagementPartners(): TelecomExpenseManagementPartnersRequestBuilder {
        return new TelecomExpenseManagementPartnersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the templateInsights property of the microsoft.graph.deviceManagement entity.
    */
    public function templateInsights(): TemplateInsightsRequestBuilder {
        return new TemplateInsightsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the templates property of the microsoft.graph.deviceManagement entity.
    */
    public function templates(): TemplatesRequestBuilder {
        return new TemplatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the templateSettings property of the microsoft.graph.deviceManagement entity.
    */
    public function templateSettings(): TemplateSettingsRequestBuilder {
        return new TemplateSettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the tenantAttachRBAC property of the microsoft.graph.deviceManagement entity.
    */
    public function tenantAttachRBAC(): TenantAttachRBACRequestBuilder {
        return new TenantAttachRBACRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the termsAndConditions property of the microsoft.graph.deviceManagement entity.
    */
    public function termsAndConditions(): TermsAndConditionsRequestBuilder {
        return new TermsAndConditionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the troubleshootingEvents property of the microsoft.graph.deviceManagement entity.
    */
    public function troubleshootingEvents(): TroubleshootingEventsRequestBuilder {
        return new TroubleshootingEventsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsAnomaly property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsAnomaly(): UserExperienceAnalyticsAnomalyRequestBuilder {
        return new UserExperienceAnalyticsAnomalyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsAnomalyCorrelationGroupOverview property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsAnomalyCorrelationGroupOverview(): UserExperienceAnalyticsAnomalyCorrelationGroupOverviewRequestBuilder {
        return new UserExperienceAnalyticsAnomalyCorrelationGroupOverviewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsAnomalyDevice property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsAnomalyDevice(): UserExperienceAnalyticsAnomalyDeviceRequestBuilder {
        return new UserExperienceAnalyticsAnomalyDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsAppHealthApplicationPerformance property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsAppHealthApplicationPerformance(): UserExperienceAnalyticsAppHealthApplicationPerformanceRequestBuilder {
        return new UserExperienceAnalyticsAppHealthApplicationPerformanceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersion(): UserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionRequestBuilder {
        return new UserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetails(): UserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetailsRequestBuilder {
        return new UserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetailsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceId(): UserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceIdRequestBuilder {
        return new UserExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDeviceIdRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsAppHealthApplicationPerformanceByOSVersion(): UserExperienceAnalyticsAppHealthApplicationPerformanceByOSVersionRequestBuilder {
        return new UserExperienceAnalyticsAppHealthApplicationPerformanceByOSVersionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsAppHealthDeviceModelPerformance property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsAppHealthDeviceModelPerformance(): UserExperienceAnalyticsAppHealthDeviceModelPerformanceRequestBuilder {
        return new UserExperienceAnalyticsAppHealthDeviceModelPerformanceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsAppHealthDevicePerformance property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsAppHealthDevicePerformance(): UserExperienceAnalyticsAppHealthDevicePerformanceRequestBuilder {
        return new UserExperienceAnalyticsAppHealthDevicePerformanceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsAppHealthDevicePerformanceDetails property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsAppHealthDevicePerformanceDetails(): UserExperienceAnalyticsAppHealthDevicePerformanceDetailsRequestBuilder {
        return new UserExperienceAnalyticsAppHealthDevicePerformanceDetailsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsAppHealthOSVersionPerformance property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsAppHealthOSVersionPerformance(): UserExperienceAnalyticsAppHealthOSVersionPerformanceRequestBuilder {
        return new UserExperienceAnalyticsAppHealthOSVersionPerformanceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsAppHealthOverview property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsAppHealthOverview(): UserExperienceAnalyticsAppHealthOverviewRequestBuilder {
        return new UserExperienceAnalyticsAppHealthOverviewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsBaselines property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsBaselines(): UserExperienceAnalyticsBaselinesRequestBuilder {
        return new UserExperienceAnalyticsBaselinesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsBatteryHealthAppImpact property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsBatteryHealthAppImpact(): UserExperienceAnalyticsBatteryHealthAppImpactRequestBuilder {
        return new UserExperienceAnalyticsBatteryHealthAppImpactRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsBatteryHealthCapacityDetails property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsBatteryHealthCapacityDetails(): UserExperienceAnalyticsBatteryHealthCapacityDetailsRequestBuilder {
        return new UserExperienceAnalyticsBatteryHealthCapacityDetailsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsBatteryHealthDeviceAppImpact property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsBatteryHealthDeviceAppImpact(): UserExperienceAnalyticsBatteryHealthDeviceAppImpactRequestBuilder {
        return new UserExperienceAnalyticsBatteryHealthDeviceAppImpactRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsBatteryHealthDevicePerformance property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsBatteryHealthDevicePerformance(): UserExperienceAnalyticsBatteryHealthDevicePerformanceRequestBuilder {
        return new UserExperienceAnalyticsBatteryHealthDevicePerformanceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsBatteryHealthDeviceRuntimeHistory(): UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistoryRequestBuilder {
        return new UserExperienceAnalyticsBatteryHealthDeviceRuntimeHistoryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsBatteryHealthModelPerformance property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsBatteryHealthModelPerformance(): UserExperienceAnalyticsBatteryHealthModelPerformanceRequestBuilder {
        return new UserExperienceAnalyticsBatteryHealthModelPerformanceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsBatteryHealthOsPerformance property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsBatteryHealthOsPerformance(): UserExperienceAnalyticsBatteryHealthOsPerformanceRequestBuilder {
        return new UserExperienceAnalyticsBatteryHealthOsPerformanceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsBatteryHealthRuntimeDetails property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsBatteryHealthRuntimeDetails(): UserExperienceAnalyticsBatteryHealthRuntimeDetailsRequestBuilder {
        return new UserExperienceAnalyticsBatteryHealthRuntimeDetailsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsCategories property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsCategories(): UserExperienceAnalyticsCategoriesRequestBuilder {
        return new UserExperienceAnalyticsCategoriesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsDeviceMetricHistory property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsDeviceMetricHistory(): UserExperienceAnalyticsDeviceMetricHistoryRequestBuilder {
        return new UserExperienceAnalyticsDeviceMetricHistoryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsDevicePerformance property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsDevicePerformance(): UserExperienceAnalyticsDevicePerformanceRequestBuilder {
        return new UserExperienceAnalyticsDevicePerformanceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsDeviceScope property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsDeviceScope(): UserExperienceAnalyticsDeviceScopeRequestBuilder {
        return new UserExperienceAnalyticsDeviceScopeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsDeviceScopes property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsDeviceScopes(): UserExperienceAnalyticsDeviceScopesRequestBuilder {
        return new UserExperienceAnalyticsDeviceScopesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsDeviceScores property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsDeviceScores(): UserExperienceAnalyticsDeviceScoresRequestBuilder {
        return new UserExperienceAnalyticsDeviceScoresRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsDeviceStartupHistory property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsDeviceStartupHistory(): UserExperienceAnalyticsDeviceStartupHistoryRequestBuilder {
        return new UserExperienceAnalyticsDeviceStartupHistoryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsDeviceStartupProcesses property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsDeviceStartupProcesses(): UserExperienceAnalyticsDeviceStartupProcessesRequestBuilder {
        return new UserExperienceAnalyticsDeviceStartupProcessesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsDeviceStartupProcessPerformance property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsDeviceStartupProcessPerformance(): UserExperienceAnalyticsDeviceStartupProcessPerformanceRequestBuilder {
        return new UserExperienceAnalyticsDeviceStartupProcessPerformanceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsDevicesWithoutCloudIdentity property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsDevicesWithoutCloudIdentity(): UserExperienceAnalyticsDevicesWithoutCloudIdentityRequestBuilder {
        return new UserExperienceAnalyticsDevicesWithoutCloudIdentityRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsDeviceTimelineEvent property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsDeviceTimelineEvent(): UserExperienceAnalyticsDeviceTimelineEventRequestBuilder {
        return new UserExperienceAnalyticsDeviceTimelineEventRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsImpactingProcess property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsImpactingProcess(): UserExperienceAnalyticsImpactingProcessRequestBuilder {
        return new UserExperienceAnalyticsImpactingProcessRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsMetricHistory property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsMetricHistory(): UserExperienceAnalyticsMetricHistoryRequestBuilder {
        return new UserExperienceAnalyticsMetricHistoryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsModelScores property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsModelScores(): UserExperienceAnalyticsModelScoresRequestBuilder {
        return new UserExperienceAnalyticsModelScoresRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsNotAutopilotReadyDevice property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsNotAutopilotReadyDevice(): UserExperienceAnalyticsNotAutopilotReadyDeviceRequestBuilder {
        return new UserExperienceAnalyticsNotAutopilotReadyDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsOverview property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsOverview(): UserExperienceAnalyticsOverviewRequestBuilder {
        return new UserExperienceAnalyticsOverviewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsRemoteConnection property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsRemoteConnection(): UserExperienceAnalyticsRemoteConnectionRequestBuilder {
        return new UserExperienceAnalyticsRemoteConnectionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsResourcePerformance property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsResourcePerformance(): UserExperienceAnalyticsResourcePerformanceRequestBuilder {
        return new UserExperienceAnalyticsResourcePerformanceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsScoreHistory property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsScoreHistory(): UserExperienceAnalyticsScoreHistoryRequestBuilder {
        return new UserExperienceAnalyticsScoreHistoryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the userExperienceAnalyticsSummarizedDeviceScopes method.
    */
    public function userExperienceAnalyticsSummarizedDeviceScopes(): UserExperienceAnalyticsSummarizedDeviceScopesRequestBuilder {
        return new UserExperienceAnalyticsSummarizedDeviceScopesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the userExperienceAnalyticsSummarizeWorkFromAnywhereDevices method.
    */
    public function userExperienceAnalyticsSummarizeWorkFromAnywhereDevices(): UserExperienceAnalyticsSummarizeWorkFromAnywhereDevicesRequestBuilder {
        return new UserExperienceAnalyticsSummarizeWorkFromAnywhereDevicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric(): UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetricRequestBuilder {
        return new UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetricRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsWorkFromAnywhereMetrics property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsWorkFromAnywhereMetrics(): UserExperienceAnalyticsWorkFromAnywhereMetricsRequestBuilder {
        return new UserExperienceAnalyticsWorkFromAnywhereMetricsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userExperienceAnalyticsWorkFromAnywhereModelPerformance property of the microsoft.graph.deviceManagement entity.
    */
    public function userExperienceAnalyticsWorkFromAnywhereModelPerformance(): UserExperienceAnalyticsWorkFromAnywhereModelPerformanceRequestBuilder {
        return new UserExperienceAnalyticsWorkFromAnywhereModelPerformanceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userPfxCertificates property of the microsoft.graph.deviceManagement entity.
    */
    public function userPfxCertificates(): UserPfxCertificatesRequestBuilder {
        return new UserPfxCertificatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the virtualEndpoint property of the microsoft.graph.deviceManagement entity.
    */
    public function virtualEndpoint(): VirtualEndpointRequestBuilder {
        return new VirtualEndpointRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the windowsAutopilotDeploymentProfiles property of the microsoft.graph.deviceManagement entity.
    */
    public function windowsAutopilotDeploymentProfiles(): WindowsAutopilotDeploymentProfilesRequestBuilder {
        return new WindowsAutopilotDeploymentProfilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the windowsAutopilotDeviceIdentities property of the microsoft.graph.deviceManagement entity.
    */
    public function windowsAutopilotDeviceIdentities(): WindowsAutopilotDeviceIdentitiesRequestBuilder {
        return new WindowsAutopilotDeviceIdentitiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the windowsAutopilotSettings property of the microsoft.graph.deviceManagement entity.
    */
    public function windowsAutopilotSettings(): WindowsAutopilotSettingsRequestBuilder {
        return new WindowsAutopilotSettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the windowsDriverUpdateProfiles property of the microsoft.graph.deviceManagement entity.
    */
    public function windowsDriverUpdateProfiles(): WindowsDriverUpdateProfilesRequestBuilder {
        return new WindowsDriverUpdateProfilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the windowsFeatureUpdateProfiles property of the microsoft.graph.deviceManagement entity.
    */
    public function windowsFeatureUpdateProfiles(): WindowsFeatureUpdateProfilesRequestBuilder {
        return new WindowsFeatureUpdateProfilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the windowsInformationProtectionAppLearningSummaries property of the microsoft.graph.deviceManagement entity.
    */
    public function windowsInformationProtectionAppLearningSummaries(): WindowsInformationProtectionAppLearningSummariesRequestBuilder {
        return new WindowsInformationProtectionAppLearningSummariesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the windowsInformationProtectionNetworkLearningSummaries property of the microsoft.graph.deviceManagement entity.
    */
    public function windowsInformationProtectionNetworkLearningSummaries(): WindowsInformationProtectionNetworkLearningSummariesRequestBuilder {
        return new WindowsInformationProtectionNetworkLearningSummariesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the windowsMalwareInformation property of the microsoft.graph.deviceManagement entity.
    */
    public function windowsMalwareInformation(): WindowsMalwareInformationRequestBuilder {
        return new WindowsMalwareInformationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the windowsQualityUpdateProfiles property of the microsoft.graph.deviceManagement entity.
    */
    public function windowsQualityUpdateProfiles(): WindowsQualityUpdateProfilesRequestBuilder {
        return new WindowsQualityUpdateProfilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the windowsUpdateCatalogItems property of the microsoft.graph.deviceManagement entity.
    */
    public function windowsUpdateCatalogItems(): WindowsUpdateCatalogItemsRequestBuilder {
        return new WindowsUpdateCatalogItemsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the zebraFotaArtifacts property of the microsoft.graph.deviceManagement entity.
    */
    public function zebraFotaArtifacts(): ZebraFotaArtifactsRequestBuilder {
        return new ZebraFotaArtifactsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the zebraFotaConnector property of the microsoft.graph.deviceManagement entity.
    */
    public function zebraFotaConnector(): ZebraFotaConnectorRequestBuilder {
        return new ZebraFotaConnectorRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the zebraFotaDeployments property of the microsoft.graph.deviceManagement entity.
    */
    public function zebraFotaDeployments(): ZebraFotaDeploymentsRequestBuilder {
        return new ZebraFotaDeploymentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new DeviceManagementRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get deviceManagement
     * @param DeviceManagementRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?DeviceManagementRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagement::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to call the getEffectivePermissions method.
     * @param string $scope Usage: scope='{scope}'
     * @return GetEffectivePermissionsWithScopeRequestBuilder
    */
    public function getEffectivePermissionsWithScope(string $scope): GetEffectivePermissionsWithScopeRequestBuilder {
        return new GetEffectivePermissionsWithScopeRequestBuilder($this->pathParameters, $this->requestAdapter, $scope);
    }

    /**
     * Provides operations to call the getRoleScopeTagsByIds method.
     * @param string $ids Usage: ids={ids}
     * @return GetRoleScopeTagsByIdsWithIdsRequestBuilder
    */
    public function getRoleScopeTagsByIdsWithIds(string $ids): GetRoleScopeTagsByIdsWithIdsRequestBuilder {
        return new GetRoleScopeTagsByIdsWithIdsRequestBuilder($this->pathParameters, $this->requestAdapter, $ids);
    }

    /**
     * Provides operations to call the getRoleScopeTagsByResource method.
     * @param string $resource Usage: resource='{resource}'
     * @return GetRoleScopeTagsByResourceWithResourceRequestBuilder
    */
    public function getRoleScopeTagsByResourceWithResource(string $resource): GetRoleScopeTagsByResourceWithResourceRequestBuilder {
        return new GetRoleScopeTagsByResourceWithResourceRequestBuilder($this->pathParameters, $this->requestAdapter, $resource);
    }

    /**
     * Provides operations to call the getSuggestedEnrollmentLimit method.
     * @param string $enrollmentType Usage: enrollmentType='{enrollmentType}'
     * @return GetSuggestedEnrollmentLimitWithEnrollmentTypeRequestBuilder
    */
    public function getSuggestedEnrollmentLimitWithEnrollmentType(string $enrollmentType): GetSuggestedEnrollmentLimitWithEnrollmentTypeRequestBuilder {
        return new GetSuggestedEnrollmentLimitWithEnrollmentTypeRequestBuilder($this->pathParameters, $this->requestAdapter, $enrollmentType);
    }

    /**
     * Update deviceManagement
     * @param DeviceManagement $body The request body
     * @param DeviceManagementRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(DeviceManagement $body, ?DeviceManagementRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagement::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to call the scopedForResource method.
     * @param string $resource Usage: resource='{resource}'
     * @return ScopedForResourceWithResourceRequestBuilder
    */
    public function scopedForResourceWithResource(string $resource): ScopedForResourceWithResourceRequestBuilder {
        return new ScopedForResourceWithResourceRequestBuilder($this->pathParameters, $this->requestAdapter, $resource);
    }

    /**
     * Get deviceManagement
     * @param DeviceManagementRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DeviceManagementRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Update deviceManagement
     * @param DeviceManagement $body The request body
     * @param DeviceManagementRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(DeviceManagement $body, ?DeviceManagementRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Provides operations to call the verifyWindowsEnrollmentAutoDiscovery method.
     * @param string $domainName Usage: domainName='{domainName}'
     * @return VerifyWindowsEnrollmentAutoDiscoveryWithDomainNameRequestBuilder
    */
    public function verifyWindowsEnrollmentAutoDiscoveryWithDomainName(string $domainName): VerifyWindowsEnrollmentAutoDiscoveryWithDomainNameRequestBuilder {
        return new VerifyWindowsEnrollmentAutoDiscoveryWithDomainNameRequestBuilder($this->pathParameters, $this->requestAdapter, $domainName);
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return DeviceManagementRequestBuilder
    */
    public function withUrl(string $rawUrl): DeviceManagementRequestBuilder {
        return new DeviceManagementRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

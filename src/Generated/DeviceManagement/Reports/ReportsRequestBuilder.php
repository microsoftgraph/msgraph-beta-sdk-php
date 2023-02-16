<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\Reports;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\CachedReportConfigurations\CachedReportConfigurationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\CachedReportConfigurations\Item\DeviceManagementCachedReportConfigurationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\ExportJobs\ExportJobsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\ExportJobs\Item\DeviceManagementExportJobItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetActiveMalwareReport\MicrosoftGraphGetActiveMalwareReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetActiveMalwareSummaryReport\MicrosoftGraphGetActiveMalwareSummaryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetAllCertificatesReport\MicrosoftGraphGetAllCertificatesReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetAppsInstallSummaryReport\MicrosoftGraphGetAppsInstallSummaryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetAppStatusOverviewReport\MicrosoftGraphGetAppStatusOverviewReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetCachedReport\MicrosoftGraphGetCachedReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetCertificatesReport\MicrosoftGraphGetCertificatesReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetCompliancePoliciesReportForDevice\MicrosoftGraphGetCompliancePoliciesReportForDeviceRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetCompliancePolicyDevicesReport\MicrosoftGraphGetCompliancePolicyDevicesReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetCompliancePolicyDeviceSummaryReport\MicrosoftGraphGetCompliancePolicyDeviceSummaryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetCompliancePolicyNonComplianceReport\MicrosoftGraphGetCompliancePolicyNonComplianceReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetCompliancePolicyNonComplianceSummaryReport\MicrosoftGraphGetCompliancePolicyNonComplianceSummaryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetComplianceSettingDetailsReport\MicrosoftGraphGetComplianceSettingDetailsReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetComplianceSettingNonComplianceReport\MicrosoftGraphGetComplianceSettingNonComplianceReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetComplianceSettingsReport\MicrosoftGraphGetComplianceSettingsReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetConfigManagerDevicePolicyStatusReport\MicrosoftGraphGetConfigManagerDevicePolicyStatusReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetConfigurationPoliciesReportForDevice\MicrosoftGraphGetConfigurationPoliciesReportForDeviceRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetConfigurationPolicyDevicesReport\MicrosoftGraphGetConfigurationPolicyDevicesReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetConfigurationPolicyDeviceSummaryReport\MicrosoftGraphGetConfigurationPolicyDeviceSummaryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetConfigurationPolicyNonComplianceReport\MicrosoftGraphGetConfigurationPolicyNonComplianceReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetConfigurationPolicyNonComplianceSummaryReport\MicrosoftGraphGetConfigurationPolicyNonComplianceSummaryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetConfigurationPolicySettingsDeviceSummaryReport\MicrosoftGraphGetConfigurationPolicySettingsDeviceSummaryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetConfigurationSettingDetailsReport\MicrosoftGraphGetConfigurationSettingDetailsReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetConfigurationSettingNonComplianceReport\MicrosoftGraphGetConfigurationSettingNonComplianceReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetConfigurationSettingsReport\MicrosoftGraphGetConfigurationSettingsReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetDeviceConfigurationPolicySettingsSummaryReport\MicrosoftGraphGetDeviceConfigurationPolicySettingsSummaryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetDeviceConfigurationPolicyStatusSummary\MicrosoftGraphGetDeviceConfigurationPolicyStatusSummaryRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetDeviceInstallStatusReport\MicrosoftGraphGetDeviceInstallStatusReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetDeviceManagementIntentPerSettingContributingProfiles\MicrosoftGraphGetDeviceManagementIntentPerSettingContributingProfilesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetDeviceManagementIntentSettingsReport\MicrosoftGraphGetDeviceManagementIntentSettingsReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetDeviceNonComplianceReport\MicrosoftGraphGetDeviceNonComplianceReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetDevicesWithoutCompliancePolicyReport\MicrosoftGraphGetDevicesWithoutCompliancePolicyReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetEncryptionReportForDevices\MicrosoftGraphGetEncryptionReportForDevicesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetEnrollmentConfigurationPoliciesByDevice\MicrosoftGraphGetEnrollmentConfigurationPoliciesByDeviceRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetFailedMobileAppsReport\MicrosoftGraphGetFailedMobileAppsReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetFailedMobileAppsSummaryReport\MicrosoftGraphGetFailedMobileAppsSummaryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetGroupPolicySettingsDeviceSettingsReport\MicrosoftGraphGetGroupPolicySettingsDeviceSettingsReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetHistoricalReport\MicrosoftGraphGetHistoricalReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetMalwareSummaryReport\MicrosoftGraphGetMalwareSummaryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetMobileApplicationManagementAppConfigurationReport\MicrosoftGraphGetMobileApplicationManagementAppConfigurationReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetMobileApplicationManagementAppRegistrationSummaryReport\MicrosoftGraphGetMobileApplicationManagementAppRegistrationSummaryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetNoncompliantDevicesAndSettingsReport\MicrosoftGraphGetNoncompliantDevicesAndSettingsReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetPolicyNonComplianceMetadata\MicrosoftGraphGetPolicyNonComplianceMetadataRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetPolicyNonComplianceReport\MicrosoftGraphGetPolicyNonComplianceReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetPolicyNonComplianceSummaryReport\MicrosoftGraphGetPolicyNonComplianceSummaryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetQuietTimePolicyUsersReport\MicrosoftGraphGetQuietTimePolicyUsersReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetQuietTimePolicyUserSummaryReport\MicrosoftGraphGetQuietTimePolicyUserSummaryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetRelatedAppsStatusReport\MicrosoftGraphGetRelatedAppsStatusReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetRemoteAssistanceSessionsReport\MicrosoftGraphGetRemoteAssistanceSessionsReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetReportFilters\MicrosoftGraphGetReportFiltersRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetSettingNonComplianceReport\MicrosoftGraphGetSettingNonComplianceReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetUnhealthyDefenderAgentsReport\MicrosoftGraphGetUnhealthyDefenderAgentsReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetUnhealthyFirewallReport\MicrosoftGraphGetUnhealthyFirewallReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetUnhealthyFirewallSummaryReport\MicrosoftGraphGetUnhealthyFirewallSummaryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetUserInstallStatusReport\MicrosoftGraphGetUserInstallStatusReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetWindowsQualityUpdateAlertsPerPolicyPerDeviceReport\MicrosoftGraphGetWindowsQualityUpdateAlertsPerPolicyPerDeviceReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetWindowsQualityUpdateAlertSummaryReport\MicrosoftGraphGetWindowsQualityUpdateAlertSummaryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetWindowsUpdateAlertsPerPolicyPerDeviceReport\MicrosoftGraphGetWindowsUpdateAlertsPerPolicyPerDeviceReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetWindowsUpdateAlertSummaryReport\MicrosoftGraphGetWindowsUpdateAlertSummaryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetZebraFotaDeploymentReport\MicrosoftGraphGetZebraFotaDeploymentReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementReports;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the reports property of the microsoft.graph.deviceManagement entity.
*/
class ReportsRequestBuilder 
{
    /**
     * Provides operations to manage the cachedReportConfigurations property of the microsoft.graph.deviceManagementReports entity.
    */
    public function cachedReportConfigurations(): CachedReportConfigurationsRequestBuilder {
        return new CachedReportConfigurationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the exportJobs property of the microsoft.graph.deviceManagementReports entity.
    */
    public function exportJobs(): ExportJobsRequestBuilder {
        return new ExportJobsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getActiveMalwareReport method.
    */
    public function microsoftGraphGetActiveMalwareReport(): MicrosoftGraphGetActiveMalwareReportRequestBuilder {
        return new MicrosoftGraphGetActiveMalwareReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getActiveMalwareSummaryReport method.
    */
    public function microsoftGraphGetActiveMalwareSummaryReport(): MicrosoftGraphGetActiveMalwareSummaryReportRequestBuilder {
        return new MicrosoftGraphGetActiveMalwareSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getAllCertificatesReport method.
    */
    public function microsoftGraphGetAllCertificatesReport(): MicrosoftGraphGetAllCertificatesReportRequestBuilder {
        return new MicrosoftGraphGetAllCertificatesReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getAppsInstallSummaryReport method.
    */
    public function microsoftGraphGetAppsInstallSummaryReport(): MicrosoftGraphGetAppsInstallSummaryReportRequestBuilder {
        return new MicrosoftGraphGetAppsInstallSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getAppStatusOverviewReport method.
    */
    public function microsoftGraphGetAppStatusOverviewReport(): MicrosoftGraphGetAppStatusOverviewReportRequestBuilder {
        return new MicrosoftGraphGetAppStatusOverviewReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getCachedReport method.
    */
    public function microsoftGraphGetCachedReport(): MicrosoftGraphGetCachedReportRequestBuilder {
        return new MicrosoftGraphGetCachedReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getCertificatesReport method.
    */
    public function microsoftGraphGetCertificatesReport(): MicrosoftGraphGetCertificatesReportRequestBuilder {
        return new MicrosoftGraphGetCertificatesReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getCompliancePoliciesReportForDevice method.
    */
    public function microsoftGraphGetCompliancePoliciesReportForDevice(): MicrosoftGraphGetCompliancePoliciesReportForDeviceRequestBuilder {
        return new MicrosoftGraphGetCompliancePoliciesReportForDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getCompliancePolicyDevicesReport method.
    */
    public function microsoftGraphGetCompliancePolicyDevicesReport(): MicrosoftGraphGetCompliancePolicyDevicesReportRequestBuilder {
        return new MicrosoftGraphGetCompliancePolicyDevicesReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getCompliancePolicyDeviceSummaryReport method.
    */
    public function microsoftGraphGetCompliancePolicyDeviceSummaryReport(): MicrosoftGraphGetCompliancePolicyDeviceSummaryReportRequestBuilder {
        return new MicrosoftGraphGetCompliancePolicyDeviceSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getCompliancePolicyNonComplianceReport method.
    */
    public function microsoftGraphGetCompliancePolicyNonComplianceReport(): MicrosoftGraphGetCompliancePolicyNonComplianceReportRequestBuilder {
        return new MicrosoftGraphGetCompliancePolicyNonComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getCompliancePolicyNonComplianceSummaryReport method.
    */
    public function microsoftGraphGetCompliancePolicyNonComplianceSummaryReport(): MicrosoftGraphGetCompliancePolicyNonComplianceSummaryReportRequestBuilder {
        return new MicrosoftGraphGetCompliancePolicyNonComplianceSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getComplianceSettingDetailsReport method.
    */
    public function microsoftGraphGetComplianceSettingDetailsReport(): MicrosoftGraphGetComplianceSettingDetailsReportRequestBuilder {
        return new MicrosoftGraphGetComplianceSettingDetailsReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getComplianceSettingNonComplianceReport method.
    */
    public function microsoftGraphGetComplianceSettingNonComplianceReport(): MicrosoftGraphGetComplianceSettingNonComplianceReportRequestBuilder {
        return new MicrosoftGraphGetComplianceSettingNonComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getComplianceSettingsReport method.
    */
    public function microsoftGraphGetComplianceSettingsReport(): MicrosoftGraphGetComplianceSettingsReportRequestBuilder {
        return new MicrosoftGraphGetComplianceSettingsReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getConfigManagerDevicePolicyStatusReport method.
    */
    public function microsoftGraphGetConfigManagerDevicePolicyStatusReport(): MicrosoftGraphGetConfigManagerDevicePolicyStatusReportRequestBuilder {
        return new MicrosoftGraphGetConfigManagerDevicePolicyStatusReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getConfigurationPoliciesReportForDevice method.
    */
    public function microsoftGraphGetConfigurationPoliciesReportForDevice(): MicrosoftGraphGetConfigurationPoliciesReportForDeviceRequestBuilder {
        return new MicrosoftGraphGetConfigurationPoliciesReportForDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getConfigurationPolicyDevicesReport method.
    */
    public function microsoftGraphGetConfigurationPolicyDevicesReport(): MicrosoftGraphGetConfigurationPolicyDevicesReportRequestBuilder {
        return new MicrosoftGraphGetConfigurationPolicyDevicesReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getConfigurationPolicyDeviceSummaryReport method.
    */
    public function microsoftGraphGetConfigurationPolicyDeviceSummaryReport(): MicrosoftGraphGetConfigurationPolicyDeviceSummaryReportRequestBuilder {
        return new MicrosoftGraphGetConfigurationPolicyDeviceSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getConfigurationPolicyNonComplianceReport method.
    */
    public function microsoftGraphGetConfigurationPolicyNonComplianceReport(): MicrosoftGraphGetConfigurationPolicyNonComplianceReportRequestBuilder {
        return new MicrosoftGraphGetConfigurationPolicyNonComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getConfigurationPolicyNonComplianceSummaryReport method.
    */
    public function microsoftGraphGetConfigurationPolicyNonComplianceSummaryReport(): MicrosoftGraphGetConfigurationPolicyNonComplianceSummaryReportRequestBuilder {
        return new MicrosoftGraphGetConfigurationPolicyNonComplianceSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getConfigurationPolicySettingsDeviceSummaryReport method.
    */
    public function microsoftGraphGetConfigurationPolicySettingsDeviceSummaryReport(): MicrosoftGraphGetConfigurationPolicySettingsDeviceSummaryReportRequestBuilder {
        return new MicrosoftGraphGetConfigurationPolicySettingsDeviceSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getConfigurationSettingDetailsReport method.
    */
    public function microsoftGraphGetConfigurationSettingDetailsReport(): MicrosoftGraphGetConfigurationSettingDetailsReportRequestBuilder {
        return new MicrosoftGraphGetConfigurationSettingDetailsReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getConfigurationSettingNonComplianceReport method.
    */
    public function microsoftGraphGetConfigurationSettingNonComplianceReport(): MicrosoftGraphGetConfigurationSettingNonComplianceReportRequestBuilder {
        return new MicrosoftGraphGetConfigurationSettingNonComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getConfigurationSettingsReport method.
    */
    public function microsoftGraphGetConfigurationSettingsReport(): MicrosoftGraphGetConfigurationSettingsReportRequestBuilder {
        return new MicrosoftGraphGetConfigurationSettingsReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getDeviceConfigurationPolicySettingsSummaryReport method.
    */
    public function microsoftGraphGetDeviceConfigurationPolicySettingsSummaryReport(): MicrosoftGraphGetDeviceConfigurationPolicySettingsSummaryReportRequestBuilder {
        return new MicrosoftGraphGetDeviceConfigurationPolicySettingsSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getDeviceConfigurationPolicyStatusSummary method.
    */
    public function microsoftGraphGetDeviceConfigurationPolicyStatusSummary(): MicrosoftGraphGetDeviceConfigurationPolicyStatusSummaryRequestBuilder {
        return new MicrosoftGraphGetDeviceConfigurationPolicyStatusSummaryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getDeviceInstallStatusReport method.
    */
    public function microsoftGraphGetDeviceInstallStatusReport(): MicrosoftGraphGetDeviceInstallStatusReportRequestBuilder {
        return new MicrosoftGraphGetDeviceInstallStatusReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getDeviceManagementIntentPerSettingContributingProfiles method.
    */
    public function microsoftGraphGetDeviceManagementIntentPerSettingContributingProfiles(): MicrosoftGraphGetDeviceManagementIntentPerSettingContributingProfilesRequestBuilder {
        return new MicrosoftGraphGetDeviceManagementIntentPerSettingContributingProfilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getDeviceManagementIntentSettingsReport method.
    */
    public function microsoftGraphGetDeviceManagementIntentSettingsReport(): MicrosoftGraphGetDeviceManagementIntentSettingsReportRequestBuilder {
        return new MicrosoftGraphGetDeviceManagementIntentSettingsReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getDeviceNonComplianceReport method.
    */
    public function microsoftGraphGetDeviceNonComplianceReport(): MicrosoftGraphGetDeviceNonComplianceReportRequestBuilder {
        return new MicrosoftGraphGetDeviceNonComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getDevicesWithoutCompliancePolicyReport method.
    */
    public function microsoftGraphGetDevicesWithoutCompliancePolicyReport(): MicrosoftGraphGetDevicesWithoutCompliancePolicyReportRequestBuilder {
        return new MicrosoftGraphGetDevicesWithoutCompliancePolicyReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getEncryptionReportForDevices method.
    */
    public function microsoftGraphGetEncryptionReportForDevices(): MicrosoftGraphGetEncryptionReportForDevicesRequestBuilder {
        return new MicrosoftGraphGetEncryptionReportForDevicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getEnrollmentConfigurationPoliciesByDevice method.
    */
    public function microsoftGraphGetEnrollmentConfigurationPoliciesByDevice(): MicrosoftGraphGetEnrollmentConfigurationPoliciesByDeviceRequestBuilder {
        return new MicrosoftGraphGetEnrollmentConfigurationPoliciesByDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getFailedMobileAppsReport method.
    */
    public function microsoftGraphGetFailedMobileAppsReport(): MicrosoftGraphGetFailedMobileAppsReportRequestBuilder {
        return new MicrosoftGraphGetFailedMobileAppsReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getFailedMobileAppsSummaryReport method.
    */
    public function microsoftGraphGetFailedMobileAppsSummaryReport(): MicrosoftGraphGetFailedMobileAppsSummaryReportRequestBuilder {
        return new MicrosoftGraphGetFailedMobileAppsSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getGroupPolicySettingsDeviceSettingsReport method.
    */
    public function microsoftGraphGetGroupPolicySettingsDeviceSettingsReport(): MicrosoftGraphGetGroupPolicySettingsDeviceSettingsReportRequestBuilder {
        return new MicrosoftGraphGetGroupPolicySettingsDeviceSettingsReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getHistoricalReport method.
    */
    public function microsoftGraphGetHistoricalReport(): MicrosoftGraphGetHistoricalReportRequestBuilder {
        return new MicrosoftGraphGetHistoricalReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getMalwareSummaryReport method.
    */
    public function microsoftGraphGetMalwareSummaryReport(): MicrosoftGraphGetMalwareSummaryReportRequestBuilder {
        return new MicrosoftGraphGetMalwareSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getMobileApplicationManagementAppConfigurationReport method.
    */
    public function microsoftGraphGetMobileApplicationManagementAppConfigurationReport(): MicrosoftGraphGetMobileApplicationManagementAppConfigurationReportRequestBuilder {
        return new MicrosoftGraphGetMobileApplicationManagementAppConfigurationReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getMobileApplicationManagementAppRegistrationSummaryReport method.
    */
    public function microsoftGraphGetMobileApplicationManagementAppRegistrationSummaryReport(): MicrosoftGraphGetMobileApplicationManagementAppRegistrationSummaryReportRequestBuilder {
        return new MicrosoftGraphGetMobileApplicationManagementAppRegistrationSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getNoncompliantDevicesAndSettingsReport method.
    */
    public function microsoftGraphGetNoncompliantDevicesAndSettingsReport(): MicrosoftGraphGetNoncompliantDevicesAndSettingsReportRequestBuilder {
        return new MicrosoftGraphGetNoncompliantDevicesAndSettingsReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getPolicyNonComplianceMetadata method.
    */
    public function microsoftGraphGetPolicyNonComplianceMetadata(): MicrosoftGraphGetPolicyNonComplianceMetadataRequestBuilder {
        return new MicrosoftGraphGetPolicyNonComplianceMetadataRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getPolicyNonComplianceReport method.
    */
    public function microsoftGraphGetPolicyNonComplianceReport(): MicrosoftGraphGetPolicyNonComplianceReportRequestBuilder {
        return new MicrosoftGraphGetPolicyNonComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getPolicyNonComplianceSummaryReport method.
    */
    public function microsoftGraphGetPolicyNonComplianceSummaryReport(): MicrosoftGraphGetPolicyNonComplianceSummaryReportRequestBuilder {
        return new MicrosoftGraphGetPolicyNonComplianceSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getQuietTimePolicyUsersReport method.
    */
    public function microsoftGraphGetQuietTimePolicyUsersReport(): MicrosoftGraphGetQuietTimePolicyUsersReportRequestBuilder {
        return new MicrosoftGraphGetQuietTimePolicyUsersReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getQuietTimePolicyUserSummaryReport method.
    */
    public function microsoftGraphGetQuietTimePolicyUserSummaryReport(): MicrosoftGraphGetQuietTimePolicyUserSummaryReportRequestBuilder {
        return new MicrosoftGraphGetQuietTimePolicyUserSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getRelatedAppsStatusReport method.
    */
    public function microsoftGraphGetRelatedAppsStatusReport(): MicrosoftGraphGetRelatedAppsStatusReportRequestBuilder {
        return new MicrosoftGraphGetRelatedAppsStatusReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getRemoteAssistanceSessionsReport method.
    */
    public function microsoftGraphGetRemoteAssistanceSessionsReport(): MicrosoftGraphGetRemoteAssistanceSessionsReportRequestBuilder {
        return new MicrosoftGraphGetRemoteAssistanceSessionsReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getReportFilters method.
    */
    public function microsoftGraphGetReportFilters(): MicrosoftGraphGetReportFiltersRequestBuilder {
        return new MicrosoftGraphGetReportFiltersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getSettingNonComplianceReport method.
    */
    public function microsoftGraphGetSettingNonComplianceReport(): MicrosoftGraphGetSettingNonComplianceReportRequestBuilder {
        return new MicrosoftGraphGetSettingNonComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getUnhealthyDefenderAgentsReport method.
    */
    public function microsoftGraphGetUnhealthyDefenderAgentsReport(): MicrosoftGraphGetUnhealthyDefenderAgentsReportRequestBuilder {
        return new MicrosoftGraphGetUnhealthyDefenderAgentsReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getUnhealthyFirewallReport method.
    */
    public function microsoftGraphGetUnhealthyFirewallReport(): MicrosoftGraphGetUnhealthyFirewallReportRequestBuilder {
        return new MicrosoftGraphGetUnhealthyFirewallReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getUnhealthyFirewallSummaryReport method.
    */
    public function microsoftGraphGetUnhealthyFirewallSummaryReport(): MicrosoftGraphGetUnhealthyFirewallSummaryReportRequestBuilder {
        return new MicrosoftGraphGetUnhealthyFirewallSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getUserInstallStatusReport method.
    */
    public function microsoftGraphGetUserInstallStatusReport(): MicrosoftGraphGetUserInstallStatusReportRequestBuilder {
        return new MicrosoftGraphGetUserInstallStatusReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getWindowsQualityUpdateAlertsPerPolicyPerDeviceReport method.
    */
    public function microsoftGraphGetWindowsQualityUpdateAlertsPerPolicyPerDeviceReport(): MicrosoftGraphGetWindowsQualityUpdateAlertsPerPolicyPerDeviceReportRequestBuilder {
        return new MicrosoftGraphGetWindowsQualityUpdateAlertsPerPolicyPerDeviceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getWindowsQualityUpdateAlertSummaryReport method.
    */
    public function microsoftGraphGetWindowsQualityUpdateAlertSummaryReport(): MicrosoftGraphGetWindowsQualityUpdateAlertSummaryReportRequestBuilder {
        return new MicrosoftGraphGetWindowsQualityUpdateAlertSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getWindowsUpdateAlertsPerPolicyPerDeviceReport method.
    */
    public function microsoftGraphGetWindowsUpdateAlertsPerPolicyPerDeviceReport(): MicrosoftGraphGetWindowsUpdateAlertsPerPolicyPerDeviceReportRequestBuilder {
        return new MicrosoftGraphGetWindowsUpdateAlertsPerPolicyPerDeviceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getWindowsUpdateAlertSummaryReport method.
    */
    public function microsoftGraphGetWindowsUpdateAlertSummaryReport(): MicrosoftGraphGetWindowsUpdateAlertSummaryReportRequestBuilder {
        return new MicrosoftGraphGetWindowsUpdateAlertSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getZebraFotaDeploymentReport method.
    */
    public function microsoftGraphGetZebraFotaDeploymentReport(): MicrosoftGraphGetZebraFotaDeploymentReportRequestBuilder {
        return new MicrosoftGraphGetZebraFotaDeploymentReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the cachedReportConfigurations property of the microsoft.graph.deviceManagementReports entity.
     * @param string $id Unique identifier of the item
     * @return DeviceManagementCachedReportConfigurationItemRequestBuilder
    */
    public function cachedReportConfigurationsById(string $id): DeviceManagementCachedReportConfigurationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceManagementCachedReportConfiguration%2Did'] = $id;
        return new DeviceManagementCachedReportConfigurationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ReportsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/deviceManagement/reports{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property reports for deviceManagement
     * @param ReportsRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function delete(?ReportsRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the exportJobs property of the microsoft.graph.deviceManagementReports entity.
     * @param string $id Unique identifier of the item
     * @return DeviceManagementExportJobItemRequestBuilder
    */
    public function exportJobsById(string $id): DeviceManagementExportJobItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceManagementExportJob%2Did'] = $id;
        return new DeviceManagementExportJobItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Reports singleton
     * @param ReportsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?ReportsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementReports::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property reports in deviceManagement
     * @param DeviceManagementReports $body The request body
     * @param ReportsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(DeviceManagementReports $body, ?ReportsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementReports::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Delete navigation property reports for deviceManagement
     * @param ReportsRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ReportsRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Reports singleton
     * @param ReportsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ReportsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Update the navigation property reports in deviceManagement
     * @param DeviceManagementReports $body The request body
     * @param ReportsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(DeviceManagementReports $body, ?ReportsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}

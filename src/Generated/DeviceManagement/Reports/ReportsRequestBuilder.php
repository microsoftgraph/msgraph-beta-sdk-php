<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\Reports;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\CachedReportConfigurations\CachedReportConfigurationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\CachedReportConfigurations\Item\DeviceManagementCachedReportConfigurationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\ExportJobs\ExportJobsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\ExportJobs\Item\DeviceManagementExportJobItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetActiveMalwareReport\GetActiveMalwareReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetActiveMalwareSummaryReport\GetActiveMalwareSummaryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetAllCertificatesReport\GetAllCertificatesReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetAppsInstallSummaryReport\GetAppsInstallSummaryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetAppStatusOverviewReport\GetAppStatusOverviewReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetCachedReport\GetCachedReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetCertificatesReport\GetCertificatesReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetCompliancePoliciesReportForDevice\GetCompliancePoliciesReportForDeviceRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetCompliancePolicyDevicesReport\GetCompliancePolicyDevicesReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetCompliancePolicyDeviceSummaryReport\GetCompliancePolicyDeviceSummaryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetCompliancePolicyNonComplianceReport\GetCompliancePolicyNonComplianceReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetCompliancePolicyNonComplianceSummaryReport\GetCompliancePolicyNonComplianceSummaryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetComplianceSettingDetailsReport\GetComplianceSettingDetailsReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetComplianceSettingNonComplianceReport\GetComplianceSettingNonComplianceReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetComplianceSettingsReport\GetComplianceSettingsReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetConfigManagerDevicePolicyStatusReport\GetConfigManagerDevicePolicyStatusReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetConfigurationPoliciesReportForDevice\GetConfigurationPoliciesReportForDeviceRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetConfigurationPolicyDevicesReport\GetConfigurationPolicyDevicesReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetConfigurationPolicyDeviceSummaryReport\GetConfigurationPolicyDeviceSummaryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetConfigurationPolicyNonComplianceReport\GetConfigurationPolicyNonComplianceReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetConfigurationPolicyNonComplianceSummaryReport\GetConfigurationPolicyNonComplianceSummaryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetConfigurationPolicySettingsDeviceSummaryReport\GetConfigurationPolicySettingsDeviceSummaryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetConfigurationSettingDetailsReport\GetConfigurationSettingDetailsReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetConfigurationSettingNonComplianceReport\GetConfigurationSettingNonComplianceReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetConfigurationSettingsReport\GetConfigurationSettingsReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetDeviceConfigurationPolicySettingsSummaryReport\GetDeviceConfigurationPolicySettingsSummaryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetDeviceConfigurationPolicyStatusSummary\GetDeviceConfigurationPolicyStatusSummaryRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetDeviceInstallStatusReport\GetDeviceInstallStatusReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetDeviceManagementIntentPerSettingContributingProfiles\GetDeviceManagementIntentPerSettingContributingProfilesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetDeviceManagementIntentSettingsReport\GetDeviceManagementIntentSettingsReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetDeviceNonComplianceReport\GetDeviceNonComplianceReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetDevicePoliciesComplianceReport\GetDevicePoliciesComplianceReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetDevicePolicySettingsComplianceReport\GetDevicePolicySettingsComplianceReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetDevicesStatusByPolicyPlatformComplianceReport\GetDevicesStatusByPolicyPlatformComplianceReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetDevicesStatusBySettingReport\GetDevicesStatusBySettingReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetDeviceStatusByCompliacePolicyReport\GetDeviceStatusByCompliacePolicyReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetDeviceStatusByCompliancePolicySettingReport\GetDeviceStatusByCompliancePolicySettingReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetDeviceStatusSummaryByCompliacePolicyReport\GetDeviceStatusSummaryByCompliacePolicyReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetDeviceStatusSummaryByCompliancePolicySettingsReport\GetDeviceStatusSummaryByCompliancePolicySettingsReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetDevicesWithoutCompliancePolicyReport\GetDevicesWithoutCompliancePolicyReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetEncryptionReportForDevices\GetEncryptionReportForDevicesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetEnrollmentConfigurationPoliciesByDevice\GetEnrollmentConfigurationPoliciesByDeviceRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetFailedMobileAppsReport\GetFailedMobileAppsReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetFailedMobileAppsSummaryReport\GetFailedMobileAppsSummaryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetGroupPolicySettingsDeviceSettingsReport\GetGroupPolicySettingsDeviceSettingsReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetHistoricalReport\GetHistoricalReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetMalwareSummaryReport\GetMalwareSummaryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetMobileApplicationManagementAppConfigurationReport\GetMobileApplicationManagementAppConfigurationReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetMobileApplicationManagementAppRegistrationSummaryReport\GetMobileApplicationManagementAppRegistrationSummaryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetNoncompliantDevicesAndSettingsReport\GetNoncompliantDevicesAndSettingsReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetPolicyNonComplianceMetadata\GetPolicyNonComplianceMetadataRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetPolicyNonComplianceReport\GetPolicyNonComplianceReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetPolicyNonComplianceSummaryReport\GetPolicyNonComplianceSummaryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetQuietTimePolicyUsersReport\GetQuietTimePolicyUsersReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetQuietTimePolicyUserSummaryReport\GetQuietTimePolicyUserSummaryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetRelatedAppsStatusReport\GetRelatedAppsStatusReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetRemoteAssistanceSessionsReport\GetRemoteAssistanceSessionsReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetReportFilters\GetReportFiltersRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetSettingNonComplianceReport\GetSettingNonComplianceReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetUnhealthyDefenderAgentsReport\GetUnhealthyDefenderAgentsReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetUnhealthyFirewallReport\GetUnhealthyFirewallReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetUnhealthyFirewallSummaryReport\GetUnhealthyFirewallSummaryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetUserInstallStatusReport\GetUserInstallStatusReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetWindowsQualityUpdateAlertsPerPolicyPerDeviceReport\GetWindowsQualityUpdateAlertsPerPolicyPerDeviceReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetWindowsQualityUpdateAlertSummaryReport\GetWindowsQualityUpdateAlertSummaryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetWindowsUpdateAlertsPerPolicyPerDeviceReport\GetWindowsUpdateAlertsPerPolicyPerDeviceReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetWindowsUpdateAlertSummaryReport\GetWindowsUpdateAlertSummaryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetZebraFotaDeploymentReport\GetZebraFotaDeploymentReportRequestBuilder;
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
    public function getActiveMalwareReport(): GetActiveMalwareReportRequestBuilder {
        return new GetActiveMalwareReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getActiveMalwareSummaryReport method.
    */
    public function getActiveMalwareSummaryReport(): GetActiveMalwareSummaryReportRequestBuilder {
        return new GetActiveMalwareSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getAllCertificatesReport method.
    */
    public function getAllCertificatesReport(): GetAllCertificatesReportRequestBuilder {
        return new GetAllCertificatesReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getAppsInstallSummaryReport method.
    */
    public function getAppsInstallSummaryReport(): GetAppsInstallSummaryReportRequestBuilder {
        return new GetAppsInstallSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getAppStatusOverviewReport method.
    */
    public function getAppStatusOverviewReport(): GetAppStatusOverviewReportRequestBuilder {
        return new GetAppStatusOverviewReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getCachedReport method.
    */
    public function getCachedReport(): GetCachedReportRequestBuilder {
        return new GetCachedReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getCertificatesReport method.
    */
    public function getCertificatesReport(): GetCertificatesReportRequestBuilder {
        return new GetCertificatesReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getCompliancePoliciesReportForDevice method.
    */
    public function getCompliancePoliciesReportForDevice(): GetCompliancePoliciesReportForDeviceRequestBuilder {
        return new GetCompliancePoliciesReportForDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getCompliancePolicyDevicesReport method.
    */
    public function getCompliancePolicyDevicesReport(): GetCompliancePolicyDevicesReportRequestBuilder {
        return new GetCompliancePolicyDevicesReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getCompliancePolicyDeviceSummaryReport method.
    */
    public function getCompliancePolicyDeviceSummaryReport(): GetCompliancePolicyDeviceSummaryReportRequestBuilder {
        return new GetCompliancePolicyDeviceSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getCompliancePolicyNonComplianceReport method.
    */
    public function getCompliancePolicyNonComplianceReport(): GetCompliancePolicyNonComplianceReportRequestBuilder {
        return new GetCompliancePolicyNonComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getCompliancePolicyNonComplianceSummaryReport method.
    */
    public function getCompliancePolicyNonComplianceSummaryReport(): GetCompliancePolicyNonComplianceSummaryReportRequestBuilder {
        return new GetCompliancePolicyNonComplianceSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getComplianceSettingDetailsReport method.
    */
    public function getComplianceSettingDetailsReport(): GetComplianceSettingDetailsReportRequestBuilder {
        return new GetComplianceSettingDetailsReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getComplianceSettingNonComplianceReport method.
    */
    public function getComplianceSettingNonComplianceReport(): GetComplianceSettingNonComplianceReportRequestBuilder {
        return new GetComplianceSettingNonComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getComplianceSettingsReport method.
    */
    public function getComplianceSettingsReport(): GetComplianceSettingsReportRequestBuilder {
        return new GetComplianceSettingsReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getConfigManagerDevicePolicyStatusReport method.
    */
    public function getConfigManagerDevicePolicyStatusReport(): GetConfigManagerDevicePolicyStatusReportRequestBuilder {
        return new GetConfigManagerDevicePolicyStatusReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getConfigurationPoliciesReportForDevice method.
    */
    public function getConfigurationPoliciesReportForDevice(): GetConfigurationPoliciesReportForDeviceRequestBuilder {
        return new GetConfigurationPoliciesReportForDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getConfigurationPolicyDevicesReport method.
    */
    public function getConfigurationPolicyDevicesReport(): GetConfigurationPolicyDevicesReportRequestBuilder {
        return new GetConfigurationPolicyDevicesReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getConfigurationPolicyDeviceSummaryReport method.
    */
    public function getConfigurationPolicyDeviceSummaryReport(): GetConfigurationPolicyDeviceSummaryReportRequestBuilder {
        return new GetConfigurationPolicyDeviceSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getConfigurationPolicyNonComplianceReport method.
    */
    public function getConfigurationPolicyNonComplianceReport(): GetConfigurationPolicyNonComplianceReportRequestBuilder {
        return new GetConfigurationPolicyNonComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getConfigurationPolicyNonComplianceSummaryReport method.
    */
    public function getConfigurationPolicyNonComplianceSummaryReport(): GetConfigurationPolicyNonComplianceSummaryReportRequestBuilder {
        return new GetConfigurationPolicyNonComplianceSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getConfigurationPolicySettingsDeviceSummaryReport method.
    */
    public function getConfigurationPolicySettingsDeviceSummaryReport(): GetConfigurationPolicySettingsDeviceSummaryReportRequestBuilder {
        return new GetConfigurationPolicySettingsDeviceSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getConfigurationSettingDetailsReport method.
    */
    public function getConfigurationSettingDetailsReport(): GetConfigurationSettingDetailsReportRequestBuilder {
        return new GetConfigurationSettingDetailsReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getConfigurationSettingNonComplianceReport method.
    */
    public function getConfigurationSettingNonComplianceReport(): GetConfigurationSettingNonComplianceReportRequestBuilder {
        return new GetConfigurationSettingNonComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getConfigurationSettingsReport method.
    */
    public function getConfigurationSettingsReport(): GetConfigurationSettingsReportRequestBuilder {
        return new GetConfigurationSettingsReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getDeviceConfigurationPolicySettingsSummaryReport method.
    */
    public function getDeviceConfigurationPolicySettingsSummaryReport(): GetDeviceConfigurationPolicySettingsSummaryReportRequestBuilder {
        return new GetDeviceConfigurationPolicySettingsSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getDeviceConfigurationPolicyStatusSummary method.
    */
    public function getDeviceConfigurationPolicyStatusSummary(): GetDeviceConfigurationPolicyStatusSummaryRequestBuilder {
        return new GetDeviceConfigurationPolicyStatusSummaryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getDeviceInstallStatusReport method.
    */
    public function getDeviceInstallStatusReport(): GetDeviceInstallStatusReportRequestBuilder {
        return new GetDeviceInstallStatusReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getDeviceManagementIntentPerSettingContributingProfiles method.
    */
    public function getDeviceManagementIntentPerSettingContributingProfiles(): GetDeviceManagementIntentPerSettingContributingProfilesRequestBuilder {
        return new GetDeviceManagementIntentPerSettingContributingProfilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getDeviceManagementIntentSettingsReport method.
    */
    public function getDeviceManagementIntentSettingsReport(): GetDeviceManagementIntentSettingsReportRequestBuilder {
        return new GetDeviceManagementIntentSettingsReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getDeviceNonComplianceReport method.
    */
    public function getDeviceNonComplianceReport(): GetDeviceNonComplianceReportRequestBuilder {
        return new GetDeviceNonComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getDevicePoliciesComplianceReport method.
    */
    public function getDevicePoliciesComplianceReport(): GetDevicePoliciesComplianceReportRequestBuilder {
        return new GetDevicePoliciesComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getDevicePolicySettingsComplianceReport method.
    */
    public function getDevicePolicySettingsComplianceReport(): GetDevicePolicySettingsComplianceReportRequestBuilder {
        return new GetDevicePolicySettingsComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getDevicesStatusByPolicyPlatformComplianceReport method.
    */
    public function getDevicesStatusByPolicyPlatformComplianceReport(): GetDevicesStatusByPolicyPlatformComplianceReportRequestBuilder {
        return new GetDevicesStatusByPolicyPlatformComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getDevicesStatusBySettingReport method.
    */
    public function getDevicesStatusBySettingReport(): GetDevicesStatusBySettingReportRequestBuilder {
        return new GetDevicesStatusBySettingReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getDeviceStatusByCompliacePolicyReport method.
    */
    public function getDeviceStatusByCompliacePolicyReport(): GetDeviceStatusByCompliacePolicyReportRequestBuilder {
        return new GetDeviceStatusByCompliacePolicyReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getDeviceStatusByCompliancePolicySettingReport method.
    */
    public function getDeviceStatusByCompliancePolicySettingReport(): GetDeviceStatusByCompliancePolicySettingReportRequestBuilder {
        return new GetDeviceStatusByCompliancePolicySettingReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getDeviceStatusSummaryByCompliacePolicyReport method.
    */
    public function getDeviceStatusSummaryByCompliacePolicyReport(): GetDeviceStatusSummaryByCompliacePolicyReportRequestBuilder {
        return new GetDeviceStatusSummaryByCompliacePolicyReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getDeviceStatusSummaryByCompliancePolicySettingsReport method.
    */
    public function getDeviceStatusSummaryByCompliancePolicySettingsReport(): GetDeviceStatusSummaryByCompliancePolicySettingsReportRequestBuilder {
        return new GetDeviceStatusSummaryByCompliancePolicySettingsReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getDevicesWithoutCompliancePolicyReport method.
    */
    public function getDevicesWithoutCompliancePolicyReport(): GetDevicesWithoutCompliancePolicyReportRequestBuilder {
        return new GetDevicesWithoutCompliancePolicyReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getEncryptionReportForDevices method.
    */
    public function getEncryptionReportForDevices(): GetEncryptionReportForDevicesRequestBuilder {
        return new GetEncryptionReportForDevicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getEnrollmentConfigurationPoliciesByDevice method.
    */
    public function getEnrollmentConfigurationPoliciesByDevice(): GetEnrollmentConfigurationPoliciesByDeviceRequestBuilder {
        return new GetEnrollmentConfigurationPoliciesByDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getFailedMobileAppsReport method.
    */
    public function getFailedMobileAppsReport(): GetFailedMobileAppsReportRequestBuilder {
        return new GetFailedMobileAppsReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getFailedMobileAppsSummaryReport method.
    */
    public function getFailedMobileAppsSummaryReport(): GetFailedMobileAppsSummaryReportRequestBuilder {
        return new GetFailedMobileAppsSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getGroupPolicySettingsDeviceSettingsReport method.
    */
    public function getGroupPolicySettingsDeviceSettingsReport(): GetGroupPolicySettingsDeviceSettingsReportRequestBuilder {
        return new GetGroupPolicySettingsDeviceSettingsReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getHistoricalReport method.
    */
    public function getHistoricalReport(): GetHistoricalReportRequestBuilder {
        return new GetHistoricalReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getMalwareSummaryReport method.
    */
    public function getMalwareSummaryReport(): GetMalwareSummaryReportRequestBuilder {
        return new GetMalwareSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getMobileApplicationManagementAppConfigurationReport method.
    */
    public function getMobileApplicationManagementAppConfigurationReport(): GetMobileApplicationManagementAppConfigurationReportRequestBuilder {
        return new GetMobileApplicationManagementAppConfigurationReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getMobileApplicationManagementAppRegistrationSummaryReport method.
    */
    public function getMobileApplicationManagementAppRegistrationSummaryReport(): GetMobileApplicationManagementAppRegistrationSummaryReportRequestBuilder {
        return new GetMobileApplicationManagementAppRegistrationSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getNoncompliantDevicesAndSettingsReport method.
    */
    public function getNoncompliantDevicesAndSettingsReport(): GetNoncompliantDevicesAndSettingsReportRequestBuilder {
        return new GetNoncompliantDevicesAndSettingsReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getPolicyNonComplianceMetadata method.
    */
    public function getPolicyNonComplianceMetadata(): GetPolicyNonComplianceMetadataRequestBuilder {
        return new GetPolicyNonComplianceMetadataRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getPolicyNonComplianceReport method.
    */
    public function getPolicyNonComplianceReport(): GetPolicyNonComplianceReportRequestBuilder {
        return new GetPolicyNonComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getPolicyNonComplianceSummaryReport method.
    */
    public function getPolicyNonComplianceSummaryReport(): GetPolicyNonComplianceSummaryReportRequestBuilder {
        return new GetPolicyNonComplianceSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getQuietTimePolicyUsersReport method.
    */
    public function getQuietTimePolicyUsersReport(): GetQuietTimePolicyUsersReportRequestBuilder {
        return new GetQuietTimePolicyUsersReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getQuietTimePolicyUserSummaryReport method.
    */
    public function getQuietTimePolicyUserSummaryReport(): GetQuietTimePolicyUserSummaryReportRequestBuilder {
        return new GetQuietTimePolicyUserSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getRelatedAppsStatusReport method.
    */
    public function getRelatedAppsStatusReport(): GetRelatedAppsStatusReportRequestBuilder {
        return new GetRelatedAppsStatusReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getRemoteAssistanceSessionsReport method.
    */
    public function getRemoteAssistanceSessionsReport(): GetRemoteAssistanceSessionsReportRequestBuilder {
        return new GetRemoteAssistanceSessionsReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getReportFilters method.
    */
    public function getReportFilters(): GetReportFiltersRequestBuilder {
        return new GetReportFiltersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getSettingNonComplianceReport method.
    */
    public function getSettingNonComplianceReport(): GetSettingNonComplianceReportRequestBuilder {
        return new GetSettingNonComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getUnhealthyDefenderAgentsReport method.
    */
    public function getUnhealthyDefenderAgentsReport(): GetUnhealthyDefenderAgentsReportRequestBuilder {
        return new GetUnhealthyDefenderAgentsReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getUnhealthyFirewallReport method.
    */
    public function getUnhealthyFirewallReport(): GetUnhealthyFirewallReportRequestBuilder {
        return new GetUnhealthyFirewallReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getUnhealthyFirewallSummaryReport method.
    */
    public function getUnhealthyFirewallSummaryReport(): GetUnhealthyFirewallSummaryReportRequestBuilder {
        return new GetUnhealthyFirewallSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getUserInstallStatusReport method.
    */
    public function getUserInstallStatusReport(): GetUserInstallStatusReportRequestBuilder {
        return new GetUserInstallStatusReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getWindowsQualityUpdateAlertsPerPolicyPerDeviceReport method.
    */
    public function getWindowsQualityUpdateAlertsPerPolicyPerDeviceReport(): GetWindowsQualityUpdateAlertsPerPolicyPerDeviceReportRequestBuilder {
        return new GetWindowsQualityUpdateAlertsPerPolicyPerDeviceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getWindowsQualityUpdateAlertSummaryReport method.
    */
    public function getWindowsQualityUpdateAlertSummaryReport(): GetWindowsQualityUpdateAlertSummaryReportRequestBuilder {
        return new GetWindowsQualityUpdateAlertSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getWindowsUpdateAlertsPerPolicyPerDeviceReport method.
    */
    public function getWindowsUpdateAlertsPerPolicyPerDeviceReport(): GetWindowsUpdateAlertsPerPolicyPerDeviceReportRequestBuilder {
        return new GetWindowsUpdateAlertsPerPolicyPerDeviceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getWindowsUpdateAlertSummaryReport method.
    */
    public function getWindowsUpdateAlertSummaryReport(): GetWindowsUpdateAlertSummaryReportRequestBuilder {
        return new GetWindowsUpdateAlertSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getZebraFotaDeploymentReport method.
    */
    public function getZebraFotaDeploymentReport(): GetZebraFotaDeploymentReportRequestBuilder {
        return new GetZebraFotaDeploymentReportRequestBuilder($this->pathParameters, $this->requestAdapter);
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

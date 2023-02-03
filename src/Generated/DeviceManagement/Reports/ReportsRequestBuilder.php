<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\Reports;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\CachedReportConfigurations\CachedReportConfigurationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\CachedReportConfigurations\Item\DeviceManagementCachedReportConfigurationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\ExportJobs\ExportJobsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\ExportJobs\Item\DeviceManagementExportJobItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetActiveMalwareReport\GetActiveMalwareReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetActiveMalwareSummaryReport\GetActiveMalwareSummaryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetAllCertificatesReport\GetAllCertificatesReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetAppsInstallSummaryReport\GetAppsInstallSummaryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetAppStatusOverviewReport\GetAppStatusOverviewReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetCachedReport\GetCachedReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetCertificatesReport\GetCertificatesReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetCompliancePoliciesReportForDevice\GetCompliancePoliciesReportForDeviceRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetCompliancePolicyDevicesReport\GetCompliancePolicyDevicesReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetCompliancePolicyDeviceSummaryReport\GetCompliancePolicyDeviceSummaryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetCompliancePolicyNonComplianceReport\GetCompliancePolicyNonComplianceReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetCompliancePolicyNonComplianceSummaryReport\GetCompliancePolicyNonComplianceSummaryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetComplianceSettingDetailsReport\GetComplianceSettingDetailsReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetComplianceSettingNonComplianceReport\GetComplianceSettingNonComplianceReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetComplianceSettingsReport\GetComplianceSettingsReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetConfigManagerDevicePolicyStatusReport\GetConfigManagerDevicePolicyStatusReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetConfigurationPoliciesReportForDevice\GetConfigurationPoliciesReportForDeviceRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetConfigurationPolicyDevicesReport\GetConfigurationPolicyDevicesReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetConfigurationPolicyDeviceSummaryReport\GetConfigurationPolicyDeviceSummaryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetConfigurationPolicyNonComplianceReport\GetConfigurationPolicyNonComplianceReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetConfigurationPolicyNonComplianceSummaryReport\GetConfigurationPolicyNonComplianceSummaryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetConfigurationPolicySettingsDeviceSummaryReport\GetConfigurationPolicySettingsDeviceSummaryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetConfigurationSettingDetailsReport\GetConfigurationSettingDetailsReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetConfigurationSettingNonComplianceReport\GetConfigurationSettingNonComplianceReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetConfigurationSettingsReport\GetConfigurationSettingsReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetDeviceConfigurationPolicySettingsSummaryReport\GetDeviceConfigurationPolicySettingsSummaryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetDeviceConfigurationPolicyStatusSummary\GetDeviceConfigurationPolicyStatusSummaryRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetDeviceInstallStatusReport\GetDeviceInstallStatusReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetDeviceManagementIntentPerSettingContributingProfiles\GetDeviceManagementIntentPerSettingContributingProfilesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetDeviceManagementIntentSettingsReport\GetDeviceManagementIntentSettingsReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetDeviceNonComplianceReport\GetDeviceNonComplianceReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetDevicesWithoutCompliancePolicyReport\GetDevicesWithoutCompliancePolicyReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetEncryptionReportForDevices\GetEncryptionReportForDevicesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetEnrollmentConfigurationPoliciesByDevice\GetEnrollmentConfigurationPoliciesByDeviceRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetFailedMobileAppsReport\GetFailedMobileAppsReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetFailedMobileAppsSummaryReport\GetFailedMobileAppsSummaryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetGroupPolicySettingsDeviceSettingsReport\GetGroupPolicySettingsDeviceSettingsReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetHistoricalReport\GetHistoricalReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetMalwareSummaryReport\GetMalwareSummaryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetMobileApplicationManagementAppConfigurationReport\GetMobileApplicationManagementAppConfigurationReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetMobileApplicationManagementAppRegistrationSummaryReport\GetMobileApplicationManagementAppRegistrationSummaryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetNoncompliantDevicesAndSettingsReport\GetNoncompliantDevicesAndSettingsReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetPolicyNonComplianceMetadata\GetPolicyNonComplianceMetadataRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetPolicyNonComplianceReport\GetPolicyNonComplianceReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetPolicyNonComplianceSummaryReport\GetPolicyNonComplianceSummaryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetQuietTimePolicyUsersReport\GetQuietTimePolicyUsersReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetQuietTimePolicyUserSummaryReport\GetQuietTimePolicyUserSummaryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetRelatedAppsStatusReport\GetRelatedAppsStatusReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetRemoteAssistanceSessionsReport\GetRemoteAssistanceSessionsReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetReportFilters\GetReportFiltersRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetSettingNonComplianceReport\GetSettingNonComplianceReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetUnhealthyDefenderAgentsReport\GetUnhealthyDefenderAgentsReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetUnhealthyFirewallReport\GetUnhealthyFirewallReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetUnhealthyFirewallSummaryReport\GetUnhealthyFirewallSummaryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetUserInstallStatusReport\GetUserInstallStatusReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetWindowsQualityUpdateAlertsPerPolicyPerDeviceReport\GetWindowsQualityUpdateAlertsPerPolicyPerDeviceReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetWindowsQualityUpdateAlertSummaryReport\GetWindowsQualityUpdateAlertSummaryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetWindowsUpdateAlertsPerPolicyPerDeviceReport\GetWindowsUpdateAlertsPerPolicyPerDeviceReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetWindowsUpdateAlertSummaryReport\GetWindowsUpdateAlertSummaryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\MicrosoftGraphGetZebraFotaDeploymentReport\GetZebraFotaDeploymentReportRequestBuilder;
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
    public function microsoftGraphGetActiveMalwareReport(): GetActiveMalwareReportRequestBuilder {
        return new GetActiveMalwareReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getActiveMalwareSummaryReport method.
    */
    public function microsoftGraphGetActiveMalwareSummaryReport(): GetActiveMalwareSummaryReportRequestBuilder {
        return new GetActiveMalwareSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getAllCertificatesReport method.
    */
    public function microsoftGraphGetAllCertificatesReport(): GetAllCertificatesReportRequestBuilder {
        return new GetAllCertificatesReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getAppsInstallSummaryReport method.
    */
    public function microsoftGraphGetAppsInstallSummaryReport(): GetAppsInstallSummaryReportRequestBuilder {
        return new GetAppsInstallSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getAppStatusOverviewReport method.
    */
    public function microsoftGraphGetAppStatusOverviewReport(): GetAppStatusOverviewReportRequestBuilder {
        return new GetAppStatusOverviewReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getCachedReport method.
    */
    public function microsoftGraphGetCachedReport(): GetCachedReportRequestBuilder {
        return new GetCachedReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getCertificatesReport method.
    */
    public function microsoftGraphGetCertificatesReport(): GetCertificatesReportRequestBuilder {
        return new GetCertificatesReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getCompliancePoliciesReportForDevice method.
    */
    public function microsoftGraphGetCompliancePoliciesReportForDevice(): GetCompliancePoliciesReportForDeviceRequestBuilder {
        return new GetCompliancePoliciesReportForDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getCompliancePolicyDevicesReport method.
    */
    public function microsoftGraphGetCompliancePolicyDevicesReport(): GetCompliancePolicyDevicesReportRequestBuilder {
        return new GetCompliancePolicyDevicesReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getCompliancePolicyDeviceSummaryReport method.
    */
    public function microsoftGraphGetCompliancePolicyDeviceSummaryReport(): GetCompliancePolicyDeviceSummaryReportRequestBuilder {
        return new GetCompliancePolicyDeviceSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getCompliancePolicyNonComplianceReport method.
    */
    public function microsoftGraphGetCompliancePolicyNonComplianceReport(): GetCompliancePolicyNonComplianceReportRequestBuilder {
        return new GetCompliancePolicyNonComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getCompliancePolicyNonComplianceSummaryReport method.
    */
    public function microsoftGraphGetCompliancePolicyNonComplianceSummaryReport(): GetCompliancePolicyNonComplianceSummaryReportRequestBuilder {
        return new GetCompliancePolicyNonComplianceSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getComplianceSettingDetailsReport method.
    */
    public function microsoftGraphGetComplianceSettingDetailsReport(): GetComplianceSettingDetailsReportRequestBuilder {
        return new GetComplianceSettingDetailsReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getComplianceSettingNonComplianceReport method.
    */
    public function microsoftGraphGetComplianceSettingNonComplianceReport(): GetComplianceSettingNonComplianceReportRequestBuilder {
        return new GetComplianceSettingNonComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getComplianceSettingsReport method.
    */
    public function microsoftGraphGetComplianceSettingsReport(): GetComplianceSettingsReportRequestBuilder {
        return new GetComplianceSettingsReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getConfigManagerDevicePolicyStatusReport method.
    */
    public function microsoftGraphGetConfigManagerDevicePolicyStatusReport(): GetConfigManagerDevicePolicyStatusReportRequestBuilder {
        return new GetConfigManagerDevicePolicyStatusReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getConfigurationPoliciesReportForDevice method.
    */
    public function microsoftGraphGetConfigurationPoliciesReportForDevice(): GetConfigurationPoliciesReportForDeviceRequestBuilder {
        return new GetConfigurationPoliciesReportForDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getConfigurationPolicyDevicesReport method.
    */
    public function microsoftGraphGetConfigurationPolicyDevicesReport(): GetConfigurationPolicyDevicesReportRequestBuilder {
        return new GetConfigurationPolicyDevicesReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getConfigurationPolicyDeviceSummaryReport method.
    */
    public function microsoftGraphGetConfigurationPolicyDeviceSummaryReport(): GetConfigurationPolicyDeviceSummaryReportRequestBuilder {
        return new GetConfigurationPolicyDeviceSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getConfigurationPolicyNonComplianceReport method.
    */
    public function microsoftGraphGetConfigurationPolicyNonComplianceReport(): GetConfigurationPolicyNonComplianceReportRequestBuilder {
        return new GetConfigurationPolicyNonComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getConfigurationPolicyNonComplianceSummaryReport method.
    */
    public function microsoftGraphGetConfigurationPolicyNonComplianceSummaryReport(): GetConfigurationPolicyNonComplianceSummaryReportRequestBuilder {
        return new GetConfigurationPolicyNonComplianceSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getConfigurationPolicySettingsDeviceSummaryReport method.
    */
    public function microsoftGraphGetConfigurationPolicySettingsDeviceSummaryReport(): GetConfigurationPolicySettingsDeviceSummaryReportRequestBuilder {
        return new GetConfigurationPolicySettingsDeviceSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getConfigurationSettingDetailsReport method.
    */
    public function microsoftGraphGetConfigurationSettingDetailsReport(): GetConfigurationSettingDetailsReportRequestBuilder {
        return new GetConfigurationSettingDetailsReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getConfigurationSettingNonComplianceReport method.
    */
    public function microsoftGraphGetConfigurationSettingNonComplianceReport(): GetConfigurationSettingNonComplianceReportRequestBuilder {
        return new GetConfigurationSettingNonComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getConfigurationSettingsReport method.
    */
    public function microsoftGraphGetConfigurationSettingsReport(): GetConfigurationSettingsReportRequestBuilder {
        return new GetConfigurationSettingsReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getDeviceConfigurationPolicySettingsSummaryReport method.
    */
    public function microsoftGraphGetDeviceConfigurationPolicySettingsSummaryReport(): GetDeviceConfigurationPolicySettingsSummaryReportRequestBuilder {
        return new GetDeviceConfigurationPolicySettingsSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getDeviceConfigurationPolicyStatusSummary method.
    */
    public function microsoftGraphGetDeviceConfigurationPolicyStatusSummary(): GetDeviceConfigurationPolicyStatusSummaryRequestBuilder {
        return new GetDeviceConfigurationPolicyStatusSummaryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getDeviceInstallStatusReport method.
    */
    public function microsoftGraphGetDeviceInstallStatusReport(): GetDeviceInstallStatusReportRequestBuilder {
        return new GetDeviceInstallStatusReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getDeviceManagementIntentPerSettingContributingProfiles method.
    */
    public function microsoftGraphGetDeviceManagementIntentPerSettingContributingProfiles(): GetDeviceManagementIntentPerSettingContributingProfilesRequestBuilder {
        return new GetDeviceManagementIntentPerSettingContributingProfilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getDeviceManagementIntentSettingsReport method.
    */
    public function microsoftGraphGetDeviceManagementIntentSettingsReport(): GetDeviceManagementIntentSettingsReportRequestBuilder {
        return new GetDeviceManagementIntentSettingsReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getDeviceNonComplianceReport method.
    */
    public function microsoftGraphGetDeviceNonComplianceReport(): GetDeviceNonComplianceReportRequestBuilder {
        return new GetDeviceNonComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getDevicesWithoutCompliancePolicyReport method.
    */
    public function microsoftGraphGetDevicesWithoutCompliancePolicyReport(): GetDevicesWithoutCompliancePolicyReportRequestBuilder {
        return new GetDevicesWithoutCompliancePolicyReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getEncryptionReportForDevices method.
    */
    public function microsoftGraphGetEncryptionReportForDevices(): GetEncryptionReportForDevicesRequestBuilder {
        return new GetEncryptionReportForDevicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getEnrollmentConfigurationPoliciesByDevice method.
    */
    public function microsoftGraphGetEnrollmentConfigurationPoliciesByDevice(): GetEnrollmentConfigurationPoliciesByDeviceRequestBuilder {
        return new GetEnrollmentConfigurationPoliciesByDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getFailedMobileAppsReport method.
    */
    public function microsoftGraphGetFailedMobileAppsReport(): GetFailedMobileAppsReportRequestBuilder {
        return new GetFailedMobileAppsReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getFailedMobileAppsSummaryReport method.
    */
    public function microsoftGraphGetFailedMobileAppsSummaryReport(): GetFailedMobileAppsSummaryReportRequestBuilder {
        return new GetFailedMobileAppsSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getGroupPolicySettingsDeviceSettingsReport method.
    */
    public function microsoftGraphGetGroupPolicySettingsDeviceSettingsReport(): GetGroupPolicySettingsDeviceSettingsReportRequestBuilder {
        return new GetGroupPolicySettingsDeviceSettingsReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getHistoricalReport method.
    */
    public function microsoftGraphGetHistoricalReport(): GetHistoricalReportRequestBuilder {
        return new GetHistoricalReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getMalwareSummaryReport method.
    */
    public function microsoftGraphGetMalwareSummaryReport(): GetMalwareSummaryReportRequestBuilder {
        return new GetMalwareSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getMobileApplicationManagementAppConfigurationReport method.
    */
    public function microsoftGraphGetMobileApplicationManagementAppConfigurationReport(): GetMobileApplicationManagementAppConfigurationReportRequestBuilder {
        return new GetMobileApplicationManagementAppConfigurationReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getMobileApplicationManagementAppRegistrationSummaryReport method.
    */
    public function microsoftGraphGetMobileApplicationManagementAppRegistrationSummaryReport(): GetMobileApplicationManagementAppRegistrationSummaryReportRequestBuilder {
        return new GetMobileApplicationManagementAppRegistrationSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getNoncompliantDevicesAndSettingsReport method.
    */
    public function microsoftGraphGetNoncompliantDevicesAndSettingsReport(): GetNoncompliantDevicesAndSettingsReportRequestBuilder {
        return new GetNoncompliantDevicesAndSettingsReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getPolicyNonComplianceMetadata method.
    */
    public function microsoftGraphGetPolicyNonComplianceMetadata(): GetPolicyNonComplianceMetadataRequestBuilder {
        return new GetPolicyNonComplianceMetadataRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getPolicyNonComplianceReport method.
    */
    public function microsoftGraphGetPolicyNonComplianceReport(): GetPolicyNonComplianceReportRequestBuilder {
        return new GetPolicyNonComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getPolicyNonComplianceSummaryReport method.
    */
    public function microsoftGraphGetPolicyNonComplianceSummaryReport(): GetPolicyNonComplianceSummaryReportRequestBuilder {
        return new GetPolicyNonComplianceSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getQuietTimePolicyUsersReport method.
    */
    public function microsoftGraphGetQuietTimePolicyUsersReport(): GetQuietTimePolicyUsersReportRequestBuilder {
        return new GetQuietTimePolicyUsersReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getQuietTimePolicyUserSummaryReport method.
    */
    public function microsoftGraphGetQuietTimePolicyUserSummaryReport(): GetQuietTimePolicyUserSummaryReportRequestBuilder {
        return new GetQuietTimePolicyUserSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getRelatedAppsStatusReport method.
    */
    public function microsoftGraphGetRelatedAppsStatusReport(): GetRelatedAppsStatusReportRequestBuilder {
        return new GetRelatedAppsStatusReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getRemoteAssistanceSessionsReport method.
    */
    public function microsoftGraphGetRemoteAssistanceSessionsReport(): GetRemoteAssistanceSessionsReportRequestBuilder {
        return new GetRemoteAssistanceSessionsReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getReportFilters method.
    */
    public function microsoftGraphGetReportFilters(): GetReportFiltersRequestBuilder {
        return new GetReportFiltersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getSettingNonComplianceReport method.
    */
    public function microsoftGraphGetSettingNonComplianceReport(): GetSettingNonComplianceReportRequestBuilder {
        return new GetSettingNonComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getUnhealthyDefenderAgentsReport method.
    */
    public function microsoftGraphGetUnhealthyDefenderAgentsReport(): GetUnhealthyDefenderAgentsReportRequestBuilder {
        return new GetUnhealthyDefenderAgentsReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getUnhealthyFirewallReport method.
    */
    public function microsoftGraphGetUnhealthyFirewallReport(): GetUnhealthyFirewallReportRequestBuilder {
        return new GetUnhealthyFirewallReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getUnhealthyFirewallSummaryReport method.
    */
    public function microsoftGraphGetUnhealthyFirewallSummaryReport(): GetUnhealthyFirewallSummaryReportRequestBuilder {
        return new GetUnhealthyFirewallSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getUserInstallStatusReport method.
    */
    public function microsoftGraphGetUserInstallStatusReport(): GetUserInstallStatusReportRequestBuilder {
        return new GetUserInstallStatusReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getWindowsQualityUpdateAlertsPerPolicyPerDeviceReport method.
    */
    public function microsoftGraphGetWindowsQualityUpdateAlertsPerPolicyPerDeviceReport(): GetWindowsQualityUpdateAlertsPerPolicyPerDeviceReportRequestBuilder {
        return new GetWindowsQualityUpdateAlertsPerPolicyPerDeviceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getWindowsQualityUpdateAlertSummaryReport method.
    */
    public function microsoftGraphGetWindowsQualityUpdateAlertSummaryReport(): GetWindowsQualityUpdateAlertSummaryReportRequestBuilder {
        return new GetWindowsQualityUpdateAlertSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getWindowsUpdateAlertsPerPolicyPerDeviceReport method.
    */
    public function microsoftGraphGetWindowsUpdateAlertsPerPolicyPerDeviceReport(): GetWindowsUpdateAlertsPerPolicyPerDeviceReportRequestBuilder {
        return new GetWindowsUpdateAlertsPerPolicyPerDeviceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getWindowsUpdateAlertSummaryReport method.
    */
    public function microsoftGraphGetWindowsUpdateAlertSummaryReport(): GetWindowsUpdateAlertSummaryReportRequestBuilder {
        return new GetWindowsUpdateAlertSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getZebraFotaDeploymentReport method.
    */
    public function microsoftGraphGetZebraFotaDeploymentReport(): GetZebraFotaDeploymentReportRequestBuilder {
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
        return new DeviceManagementCachedReportConfigurationItemRequestBuilder($urlTplParams, $this->requestAdapter, $id);
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
        return new DeviceManagementExportJobItemRequestBuilder($urlTplParams, $this->requestAdapter, $id);
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

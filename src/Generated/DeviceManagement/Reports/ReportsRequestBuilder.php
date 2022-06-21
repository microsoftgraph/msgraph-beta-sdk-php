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
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetEnrollmentConfigurationPoliciesByDevice\GetEnrollmentConfigurationPoliciesByDeviceRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetFailedMobileAppsReport\GetFailedMobileAppsReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetFailedMobileAppsSummaryReport\GetFailedMobileAppsSummaryReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetGroupPolicySettingsDeviceSettingsReport\GetGroupPolicySettingsDeviceSettingsReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetHistoricalReport\GetHistoricalReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetMalwareSummaryReport\GetMalwareSummaryReportRequestBuilder;
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
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementReports;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class ReportsRequestBuilder 
{
    /**
     * The cachedReportConfigurations property
    */
    public function cachedReportConfigurations(): CachedReportConfigurationsRequestBuilder {
        return new CachedReportConfigurationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The exportJobs property
    */
    public function exportJobs(): ExportJobsRequestBuilder {
        return new ExportJobsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getActiveMalwareReport property
    */
    public function getActiveMalwareReport(): GetActiveMalwareReportRequestBuilder {
        return new GetActiveMalwareReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getActiveMalwareSummaryReport property
    */
    public function getActiveMalwareSummaryReport(): GetActiveMalwareSummaryReportRequestBuilder {
        return new GetActiveMalwareSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getAllCertificatesReport property
    */
    public function getAllCertificatesReport(): GetAllCertificatesReportRequestBuilder {
        return new GetAllCertificatesReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getAppsInstallSummaryReport property
    */
    public function getAppsInstallSummaryReport(): GetAppsInstallSummaryReportRequestBuilder {
        return new GetAppsInstallSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getAppStatusOverviewReport property
    */
    public function getAppStatusOverviewReport(): GetAppStatusOverviewReportRequestBuilder {
        return new GetAppStatusOverviewReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getCachedReport property
    */
    public function getCachedReport(): GetCachedReportRequestBuilder {
        return new GetCachedReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getCertificatesReport property
    */
    public function getCertificatesReport(): GetCertificatesReportRequestBuilder {
        return new GetCertificatesReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getCompliancePoliciesReportForDevice property
    */
    public function getCompliancePoliciesReportForDevice(): GetCompliancePoliciesReportForDeviceRequestBuilder {
        return new GetCompliancePoliciesReportForDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getCompliancePolicyDevicesReport property
    */
    public function getCompliancePolicyDevicesReport(): GetCompliancePolicyDevicesReportRequestBuilder {
        return new GetCompliancePolicyDevicesReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getCompliancePolicyDeviceSummaryReport property
    */
    public function getCompliancePolicyDeviceSummaryReport(): GetCompliancePolicyDeviceSummaryReportRequestBuilder {
        return new GetCompliancePolicyDeviceSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getCompliancePolicyNonComplianceReport property
    */
    public function getCompliancePolicyNonComplianceReport(): GetCompliancePolicyNonComplianceReportRequestBuilder {
        return new GetCompliancePolicyNonComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getCompliancePolicyNonComplianceSummaryReport property
    */
    public function getCompliancePolicyNonComplianceSummaryReport(): GetCompliancePolicyNonComplianceSummaryReportRequestBuilder {
        return new GetCompliancePolicyNonComplianceSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getComplianceSettingDetailsReport property
    */
    public function getComplianceSettingDetailsReport(): GetComplianceSettingDetailsReportRequestBuilder {
        return new GetComplianceSettingDetailsReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getComplianceSettingNonComplianceReport property
    */
    public function getComplianceSettingNonComplianceReport(): GetComplianceSettingNonComplianceReportRequestBuilder {
        return new GetComplianceSettingNonComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getComplianceSettingsReport property
    */
    public function getComplianceSettingsReport(): GetComplianceSettingsReportRequestBuilder {
        return new GetComplianceSettingsReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getConfigManagerDevicePolicyStatusReport property
    */
    public function getConfigManagerDevicePolicyStatusReport(): GetConfigManagerDevicePolicyStatusReportRequestBuilder {
        return new GetConfigManagerDevicePolicyStatusReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getConfigurationPoliciesReportForDevice property
    */
    public function getConfigurationPoliciesReportForDevice(): GetConfigurationPoliciesReportForDeviceRequestBuilder {
        return new GetConfigurationPoliciesReportForDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getConfigurationPolicyDevicesReport property
    */
    public function getConfigurationPolicyDevicesReport(): GetConfigurationPolicyDevicesReportRequestBuilder {
        return new GetConfigurationPolicyDevicesReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getConfigurationPolicyDeviceSummaryReport property
    */
    public function getConfigurationPolicyDeviceSummaryReport(): GetConfigurationPolicyDeviceSummaryReportRequestBuilder {
        return new GetConfigurationPolicyDeviceSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getConfigurationPolicyNonComplianceReport property
    */
    public function getConfigurationPolicyNonComplianceReport(): GetConfigurationPolicyNonComplianceReportRequestBuilder {
        return new GetConfigurationPolicyNonComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getConfigurationPolicyNonComplianceSummaryReport property
    */
    public function getConfigurationPolicyNonComplianceSummaryReport(): GetConfigurationPolicyNonComplianceSummaryReportRequestBuilder {
        return new GetConfigurationPolicyNonComplianceSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getConfigurationPolicySettingsDeviceSummaryReport property
    */
    public function getConfigurationPolicySettingsDeviceSummaryReport(): GetConfigurationPolicySettingsDeviceSummaryReportRequestBuilder {
        return new GetConfigurationPolicySettingsDeviceSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getConfigurationSettingDetailsReport property
    */
    public function getConfigurationSettingDetailsReport(): GetConfigurationSettingDetailsReportRequestBuilder {
        return new GetConfigurationSettingDetailsReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getConfigurationSettingNonComplianceReport property
    */
    public function getConfigurationSettingNonComplianceReport(): GetConfigurationSettingNonComplianceReportRequestBuilder {
        return new GetConfigurationSettingNonComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getConfigurationSettingsReport property
    */
    public function getConfigurationSettingsReport(): GetConfigurationSettingsReportRequestBuilder {
        return new GetConfigurationSettingsReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getDeviceConfigurationPolicySettingsSummaryReport property
    */
    public function getDeviceConfigurationPolicySettingsSummaryReport(): GetDeviceConfigurationPolicySettingsSummaryReportRequestBuilder {
        return new GetDeviceConfigurationPolicySettingsSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getDeviceConfigurationPolicyStatusSummary property
    */
    public function getDeviceConfigurationPolicyStatusSummary(): GetDeviceConfigurationPolicyStatusSummaryRequestBuilder {
        return new GetDeviceConfigurationPolicyStatusSummaryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getDeviceInstallStatusReport property
    */
    public function getDeviceInstallStatusReport(): GetDeviceInstallStatusReportRequestBuilder {
        return new GetDeviceInstallStatusReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getDeviceManagementIntentPerSettingContributingProfiles property
    */
    public function getDeviceManagementIntentPerSettingContributingProfiles(): GetDeviceManagementIntentPerSettingContributingProfilesRequestBuilder {
        return new GetDeviceManagementIntentPerSettingContributingProfilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getDeviceManagementIntentSettingsReport property
    */
    public function getDeviceManagementIntentSettingsReport(): GetDeviceManagementIntentSettingsReportRequestBuilder {
        return new GetDeviceManagementIntentSettingsReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getDeviceNonComplianceReport property
    */
    public function getDeviceNonComplianceReport(): GetDeviceNonComplianceReportRequestBuilder {
        return new GetDeviceNonComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getEnrollmentConfigurationPoliciesByDevice property
    */
    public function getEnrollmentConfigurationPoliciesByDevice(): GetEnrollmentConfigurationPoliciesByDeviceRequestBuilder {
        return new GetEnrollmentConfigurationPoliciesByDeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getFailedMobileAppsReport property
    */
    public function getFailedMobileAppsReport(): GetFailedMobileAppsReportRequestBuilder {
        return new GetFailedMobileAppsReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getFailedMobileAppsSummaryReport property
    */
    public function getFailedMobileAppsSummaryReport(): GetFailedMobileAppsSummaryReportRequestBuilder {
        return new GetFailedMobileAppsSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getGroupPolicySettingsDeviceSettingsReport property
    */
    public function getGroupPolicySettingsDeviceSettingsReport(): GetGroupPolicySettingsDeviceSettingsReportRequestBuilder {
        return new GetGroupPolicySettingsDeviceSettingsReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getHistoricalReport property
    */
    public function getHistoricalReport(): GetHistoricalReportRequestBuilder {
        return new GetHistoricalReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getMalwareSummaryReport property
    */
    public function getMalwareSummaryReport(): GetMalwareSummaryReportRequestBuilder {
        return new GetMalwareSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getPolicyNonComplianceMetadata property
    */
    public function getPolicyNonComplianceMetadata(): GetPolicyNonComplianceMetadataRequestBuilder {
        return new GetPolicyNonComplianceMetadataRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getPolicyNonComplianceReport property
    */
    public function getPolicyNonComplianceReport(): GetPolicyNonComplianceReportRequestBuilder {
        return new GetPolicyNonComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getPolicyNonComplianceSummaryReport property
    */
    public function getPolicyNonComplianceSummaryReport(): GetPolicyNonComplianceSummaryReportRequestBuilder {
        return new GetPolicyNonComplianceSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getQuietTimePolicyUsersReport property
    */
    public function getQuietTimePolicyUsersReport(): GetQuietTimePolicyUsersReportRequestBuilder {
        return new GetQuietTimePolicyUsersReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getQuietTimePolicyUserSummaryReport property
    */
    public function getQuietTimePolicyUserSummaryReport(): GetQuietTimePolicyUserSummaryReportRequestBuilder {
        return new GetQuietTimePolicyUserSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getRelatedAppsStatusReport property
    */
    public function getRelatedAppsStatusReport(): GetRelatedAppsStatusReportRequestBuilder {
        return new GetRelatedAppsStatusReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getRemoteAssistanceSessionsReport property
    */
    public function getRemoteAssistanceSessionsReport(): GetRemoteAssistanceSessionsReportRequestBuilder {
        return new GetRemoteAssistanceSessionsReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getReportFilters property
    */
    public function getReportFilters(): GetReportFiltersRequestBuilder {
        return new GetReportFiltersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getSettingNonComplianceReport property
    */
    public function getSettingNonComplianceReport(): GetSettingNonComplianceReportRequestBuilder {
        return new GetSettingNonComplianceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getUnhealthyDefenderAgentsReport property
    */
    public function getUnhealthyDefenderAgentsReport(): GetUnhealthyDefenderAgentsReportRequestBuilder {
        return new GetUnhealthyDefenderAgentsReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getUnhealthyFirewallReport property
    */
    public function getUnhealthyFirewallReport(): GetUnhealthyFirewallReportRequestBuilder {
        return new GetUnhealthyFirewallReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getUnhealthyFirewallSummaryReport property
    */
    public function getUnhealthyFirewallSummaryReport(): GetUnhealthyFirewallSummaryReportRequestBuilder {
        return new GetUnhealthyFirewallSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getUserInstallStatusReport property
    */
    public function getUserInstallStatusReport(): GetUserInstallStatusReportRequestBuilder {
        return new GetUserInstallStatusReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getWindowsQualityUpdateAlertsPerPolicyPerDeviceReport property
    */
    public function getWindowsQualityUpdateAlertsPerPolicyPerDeviceReport(): GetWindowsQualityUpdateAlertsPerPolicyPerDeviceReportRequestBuilder {
        return new GetWindowsQualityUpdateAlertsPerPolicyPerDeviceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getWindowsQualityUpdateAlertSummaryReport property
    */
    public function getWindowsQualityUpdateAlertSummaryReport(): GetWindowsQualityUpdateAlertSummaryReportRequestBuilder {
        return new GetWindowsQualityUpdateAlertSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getWindowsUpdateAlertsPerPolicyPerDeviceReport property
    */
    public function getWindowsUpdateAlertsPerPolicyPerDeviceReport(): GetWindowsUpdateAlertsPerPolicyPerDeviceReportRequestBuilder {
        return new GetWindowsUpdateAlertsPerPolicyPerDeviceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getWindowsUpdateAlertSummaryReport property
    */
    public function getWindowsUpdateAlertSummaryReport(): GetWindowsUpdateAlertSummaryReportRequestBuilder {
        return new GetWindowsUpdateAlertSummaryReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceManagement.reports.cachedReportConfigurations.item collection
     * @param string $id Unique identifier of the item
     * @return DeviceManagementCachedReportConfigurationItemRequestBuilder
    */
    public function cachedReportConfigurationsById(string $id): DeviceManagementCachedReportConfigurationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceManagementCachedReportConfiguration_id'] = $id;
        return new DeviceManagementCachedReportConfigurationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ReportsRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/deviceManagement/reports{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property reports for deviceManagement
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Reports singleton
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createGetRequestInformation(?array $queryParameters = null, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($queryParameters !== null) {
            $requestInfo->setQueryParameters($queryParameters);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Update the navigation property reports in deviceManagement
     * @param DeviceManagementReports $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(DeviceManagementReports $body, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Delete navigation property reports for deviceManagement
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceManagement.reports.exportJobs.item collection
     * @param string $id Unique identifier of the item
     * @return DeviceManagementExportJobItemRequestBuilder
    */
    public function exportJobsById(string $id): DeviceManagementExportJobItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceManagementExportJob_id'] = $id;
        return new DeviceManagementExportJobItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Reports singleton
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, DeviceManagementReports::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property reports in deviceManagement
     * @param DeviceManagementReports $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(DeviceManagementReports $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

}

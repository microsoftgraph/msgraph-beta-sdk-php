<?php

namespace Microsoft\\Graph\\Beta\\Generated\TenantRelationships\ManagedTenants;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Models\ManagedTenants\ManagedTenant;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Beta\\Generated\TenantRelationships\ManagedTenants\AggregatedPolicyCompliances\AggregatedPolicyCompliancesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\TenantRelationships\ManagedTenants\AppPerformances\AppPerformancesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\TenantRelationships\ManagedTenants\AuditEvents\AuditEventsRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\TenantRelationships\ManagedTenants\CloudPcConnections\CloudPcConnectionsRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\TenantRelationships\ManagedTenants\CloudPcDevices\CloudPcDevicesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\TenantRelationships\ManagedTenants\CloudPcsOverview\CloudPcsOverviewRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\TenantRelationships\ManagedTenants\ConditionalAccessPolicyCoverages\ConditionalAccessPolicyCoveragesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\TenantRelationships\ManagedTenants\CredentialUserRegistrationsSummaries\CredentialUserRegistrationsSummariesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\TenantRelationships\ManagedTenants\DeviceAppPerformances\DeviceAppPerformancesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\TenantRelationships\ManagedTenants\DeviceCompliancePolicySettingStateSummaries\DeviceCompliancePolicySettingStateSummariesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\TenantRelationships\ManagedTenants\DeviceHealthStatuses\DeviceHealthStatusesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\TenantRelationships\ManagedTenants\ManagedDeviceCompliances\ManagedDeviceCompliancesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\TenantRelationships\ManagedTenants\ManagedDeviceComplianceTrends\ManagedDeviceComplianceTrendsRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\TenantRelationships\ManagedTenants\ManagedTenantAlertLogs\ManagedTenantAlertLogsRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\TenantRelationships\ManagedTenants\ManagedTenantAlertRuleDefinitions\ManagedTenantAlertRuleDefinitionsRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\TenantRelationships\ManagedTenants\ManagedTenantAlertRules\ManagedTenantAlertRulesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\TenantRelationships\ManagedTenants\ManagedTenantAlerts\ManagedTenantAlertsRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\TenantRelationships\ManagedTenants\ManagedTenantApiNotifications\ManagedTenantApiNotificationsRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\TenantRelationships\ManagedTenants\ManagedTenantEmailNotifications\ManagedTenantEmailNotificationsRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\TenantRelationships\ManagedTenants\ManagedTenantTicketingEndpoints\ManagedTenantTicketingEndpointsRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\TenantRelationships\ManagedTenants\ManagementActions\ManagementActionsRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\TenantRelationships\ManagedTenants\ManagementActionTenantDeploymentStatuses\ManagementActionTenantDeploymentStatusesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\TenantRelationships\ManagedTenants\ManagementIntents\ManagementIntentsRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\TenantRelationships\ManagedTenants\ManagementTemplateCollections\ManagementTemplateCollectionsRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\TenantRelationships\ManagedTenants\ManagementTemplateCollectionTenantSummaries\ManagementTemplateCollectionTenantSummariesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\TenantRelationships\ManagedTenants\ManagementTemplates\ManagementTemplatesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\TenantRelationships\ManagedTenants\ManagementTemplateSteps\ManagementTemplateStepsRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\TenantRelationships\ManagedTenants\ManagementTemplateStepTenantSummaries\ManagementTemplateStepTenantSummariesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\TenantRelationships\ManagedTenants\ManagementTemplateStepVersions\ManagementTemplateStepVersionsRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\TenantRelationships\ManagedTenants\MyRoles\MyRolesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\TenantRelationships\ManagedTenants\TenantGroups\TenantGroupsRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\TenantRelationships\ManagedTenants\Tenants\TenantsRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\TenantRelationships\ManagedTenants\TenantsCustomizedInformation\TenantsCustomizedInformationRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\TenantRelationships\ManagedTenants\TenantsDetailedInformation\TenantsDetailedInformationRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\TenantRelationships\ManagedTenants\TenantTags\TenantTagsRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\TenantRelationships\ManagedTenants\WindowsDeviceMalwareStates\WindowsDeviceMalwareStatesRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\TenantRelationships\ManagedTenants\WindowsProtectionStates\WindowsProtectionStatesRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the managedTenants property of the microsoft.graph.tenantRelationship entity.
*/
class ManagedTenantsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the aggregatedPolicyCompliances property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function aggregatedPolicyCompliances(): AggregatedPolicyCompliancesRequestBuilder {
        return new AggregatedPolicyCompliancesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the appPerformances property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function appPerformances(): AppPerformancesRequestBuilder {
        return new AppPerformancesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the auditEvents property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function auditEvents(): AuditEventsRequestBuilder {
        return new AuditEventsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the cloudPcConnections property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function cloudPcConnections(): CloudPcConnectionsRequestBuilder {
        return new CloudPcConnectionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the cloudPcDevices property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function cloudPcDevices(): CloudPcDevicesRequestBuilder {
        return new CloudPcDevicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the cloudPcsOverview property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function cloudPcsOverview(): CloudPcsOverviewRequestBuilder {
        return new CloudPcsOverviewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the conditionalAccessPolicyCoverages property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function conditionalAccessPolicyCoverages(): ConditionalAccessPolicyCoveragesRequestBuilder {
        return new ConditionalAccessPolicyCoveragesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the credentialUserRegistrationsSummaries property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function credentialUserRegistrationsSummaries(): CredentialUserRegistrationsSummariesRequestBuilder {
        return new CredentialUserRegistrationsSummariesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceAppPerformances property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function deviceAppPerformances(): DeviceAppPerformancesRequestBuilder {
        return new DeviceAppPerformancesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceCompliancePolicySettingStateSummaries property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function deviceCompliancePolicySettingStateSummaries(): DeviceCompliancePolicySettingStateSummariesRequestBuilder {
        return new DeviceCompliancePolicySettingStateSummariesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceHealthStatuses property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function deviceHealthStatuses(): DeviceHealthStatusesRequestBuilder {
        return new DeviceHealthStatusesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managedDeviceCompliances property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function managedDeviceCompliances(): ManagedDeviceCompliancesRequestBuilder {
        return new ManagedDeviceCompliancesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managedDeviceComplianceTrends property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function managedDeviceComplianceTrends(): ManagedDeviceComplianceTrendsRequestBuilder {
        return new ManagedDeviceComplianceTrendsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managedTenantAlertLogs property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function managedTenantAlertLogs(): ManagedTenantAlertLogsRequestBuilder {
        return new ManagedTenantAlertLogsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managedTenantAlertRuleDefinitions property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function managedTenantAlertRuleDefinitions(): ManagedTenantAlertRuleDefinitionsRequestBuilder {
        return new ManagedTenantAlertRuleDefinitionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managedTenantAlertRules property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function managedTenantAlertRules(): ManagedTenantAlertRulesRequestBuilder {
        return new ManagedTenantAlertRulesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managedTenantAlerts property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function managedTenantAlerts(): ManagedTenantAlertsRequestBuilder {
        return new ManagedTenantAlertsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managedTenantApiNotifications property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function managedTenantApiNotifications(): ManagedTenantApiNotificationsRequestBuilder {
        return new ManagedTenantApiNotificationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managedTenantEmailNotifications property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function managedTenantEmailNotifications(): ManagedTenantEmailNotificationsRequestBuilder {
        return new ManagedTenantEmailNotificationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managedTenantTicketingEndpoints property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function managedTenantTicketingEndpoints(): ManagedTenantTicketingEndpointsRequestBuilder {
        return new ManagedTenantTicketingEndpointsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managementActions property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function managementActions(): ManagementActionsRequestBuilder {
        return new ManagementActionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managementActionTenantDeploymentStatuses property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function managementActionTenantDeploymentStatuses(): ManagementActionTenantDeploymentStatusesRequestBuilder {
        return new ManagementActionTenantDeploymentStatusesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managementIntents property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function managementIntents(): ManagementIntentsRequestBuilder {
        return new ManagementIntentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managementTemplateCollections property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function managementTemplateCollections(): ManagementTemplateCollectionsRequestBuilder {
        return new ManagementTemplateCollectionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managementTemplateCollectionTenantSummaries property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function managementTemplateCollectionTenantSummaries(): ManagementTemplateCollectionTenantSummariesRequestBuilder {
        return new ManagementTemplateCollectionTenantSummariesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managementTemplates property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function managementTemplates(): ManagementTemplatesRequestBuilder {
        return new ManagementTemplatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managementTemplateSteps property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function managementTemplateSteps(): ManagementTemplateStepsRequestBuilder {
        return new ManagementTemplateStepsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managementTemplateStepTenantSummaries property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function managementTemplateStepTenantSummaries(): ManagementTemplateStepTenantSummariesRequestBuilder {
        return new ManagementTemplateStepTenantSummariesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managementTemplateStepVersions property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function managementTemplateStepVersions(): ManagementTemplateStepVersionsRequestBuilder {
        return new ManagementTemplateStepVersionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the myRoles property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function myRoles(): MyRolesRequestBuilder {
        return new MyRolesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the tenantGroups property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function tenantGroups(): TenantGroupsRequestBuilder {
        return new TenantGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the tenants property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function tenants(): TenantsRequestBuilder {
        return new TenantsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the tenantsCustomizedInformation property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function tenantsCustomizedInformation(): TenantsCustomizedInformationRequestBuilder {
        return new TenantsCustomizedInformationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the tenantsDetailedInformation property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function tenantsDetailedInformation(): TenantsDetailedInformationRequestBuilder {
        return new TenantsDetailedInformationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the tenantTags property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function tenantTags(): TenantTagsRequestBuilder {
        return new TenantTagsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the windowsDeviceMalwareStates property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function windowsDeviceMalwareStates(): WindowsDeviceMalwareStatesRequestBuilder {
        return new WindowsDeviceMalwareStatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the windowsProtectionStates property of the microsoft.graph.managedTenants.managedTenant entity.
    */
    public function windowsProtectionStates(): WindowsProtectionStatesRequestBuilder {
        return new WindowsProtectionStatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ManagedTenantsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/tenantRelationships/managedTenants{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property managedTenants for tenantRelationships
     * @param ManagedTenantsRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?ManagedTenantsRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * The operations available to interact with the multi-tenant management platform.
     * @param ManagedTenantsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ManagedTenant|null>
     * @throws Exception
    */
    public function get(?ManagedTenantsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ManagedTenant::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property managedTenants in tenantRelationships
     * @param ManagedTenant $body The request body
     * @param ManagedTenantsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ManagedTenant|null>
     * @throws Exception
    */
    public function patch(ManagedTenant $body, ?ManagedTenantsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ManagedTenant::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property managedTenants for tenantRelationships
     * @param ManagedTenantsRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ManagedTenantsRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * The operations available to interact with the multi-tenant management platform.
     * @param ManagedTenantsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ManagedTenantsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Update the navigation property managedTenants in tenantRelationships
     * @param ManagedTenant $body The request body
     * @param ManagedTenantsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(ManagedTenant $body, ?ManagedTenantsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return ManagedTenantsRequestBuilder
    */
    public function withUrl(string $rawUrl): ManagedTenantsRequestBuilder {
        return new ManagedTenantsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

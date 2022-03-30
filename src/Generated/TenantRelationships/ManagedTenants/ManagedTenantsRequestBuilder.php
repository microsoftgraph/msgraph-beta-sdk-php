<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ManagedTenants\ManagedTenant;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\AggregatedPolicyCompliances\AggregatedPolicyCompliancesRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\AggregatedPolicyCompliances\Item\AggregatedPolicyComplianceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\AuditEvents\AuditEventsRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\AuditEvents\Item\AuditEventItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\CloudPcConnections\CloudPcConnectionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\CloudPcConnections\Item\CloudPcConnectionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\CloudPcDevices\CloudPcDevicesRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\CloudPcDevices\Item\CloudPcDeviceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\CloudPcsOverview\CloudPcsOverviewRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\CloudPcsOverview\Item\CloudPcOverviewItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ConditionalAccessPolicyCoverages\ConditionalAccessPolicyCoveragesRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ConditionalAccessPolicyCoverages\Item\ConditionalAccessPolicyCoverageItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\CredentialUserRegistrationsSummaries\CredentialUserRegistrationsSummariesRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\CredentialUserRegistrationsSummaries\Item\CredentialUserRegistrationsSummaryItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\DeviceCompliancePolicySettingStateSummaries\DeviceCompliancePolicySettingStateSummariesRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\DeviceCompliancePolicySettingStateSummaries\Item\DeviceCompliancePolicySettingStateSummaryItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagedDeviceCompliances\Item\ManagedDeviceComplianceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagedDeviceCompliances\ManagedDeviceCompliancesRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagedDeviceComplianceTrends\Item\ManagedDeviceComplianceTrendItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagedDeviceComplianceTrends\ManagedDeviceComplianceTrendsRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementActions\Item\ManagementActionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementActions\ManagementActionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementActionTenantDeploymentStatuses\Item\ManagementActionTenantDeploymentStatusItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementActionTenantDeploymentStatuses\ManagementActionTenantDeploymentStatusesRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementIntents\Item\ManagementIntentItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementIntents\ManagementIntentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementTemplateCollections\Item\ManagementTemplateCollectionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementTemplateCollections\ManagementTemplateCollectionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementTemplates\Item\ManagementTemplateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementTemplates\ManagementTemplatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementTemplateSteps\Item\ManagementTemplateStepItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementTemplateSteps\ManagementTemplateStepsRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementTemplateStepVersions\Item\ManagementTemplateStepVersionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementTemplateStepVersions\ManagementTemplateStepVersionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\TenantGroups\Item\TenantGroupItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\TenantGroups\TenantGroupsRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\Tenants\Item\TenantItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\Tenants\TenantsRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\TenantsCustomizedInformation\Item\TenantCustomizedInformationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\TenantsCustomizedInformation\TenantsCustomizedInformationRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\TenantsDetailedInformation\Item\TenantDetailedInformationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\TenantsDetailedInformation\TenantsDetailedInformationRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\TenantTags\Item\TenantTagItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\TenantTags\TenantTagsRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\WindowsDeviceMalwareStates\Item\WindowsDeviceMalwareStateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\WindowsDeviceMalwareStates\WindowsDeviceMalwareStatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\WindowsProtectionStates\Item\WindowsProtectionStateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\WindowsProtectionStates\WindowsProtectionStatesRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class ManagedTenantsRequestBuilder 
{
    public function aggregatedPolicyCompliances(): AggregatedPolicyCompliancesRequestBuilder {
        return new AggregatedPolicyCompliancesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function auditEvents(): AuditEventsRequestBuilder {
        return new AuditEventsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function cloudPcConnections(): CloudPcConnectionsRequestBuilder {
        return new CloudPcConnectionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function cloudPcDevices(): CloudPcDevicesRequestBuilder {
        return new CloudPcDevicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function cloudPcsOverview(): CloudPcsOverviewRequestBuilder {
        return new CloudPcsOverviewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function conditionalAccessPolicyCoverages(): ConditionalAccessPolicyCoveragesRequestBuilder {
        return new ConditionalAccessPolicyCoveragesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function credentialUserRegistrationsSummaries(): CredentialUserRegistrationsSummariesRequestBuilder {
        return new CredentialUserRegistrationsSummariesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function deviceCompliancePolicySettingStateSummaries(): DeviceCompliancePolicySettingStateSummariesRequestBuilder {
        return new DeviceCompliancePolicySettingStateSummariesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function managedDeviceCompliances(): ManagedDeviceCompliancesRequestBuilder {
        return new ManagedDeviceCompliancesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function managedDeviceComplianceTrends(): ManagedDeviceComplianceTrendsRequestBuilder {
        return new ManagedDeviceComplianceTrendsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function managementActions(): ManagementActionsRequestBuilder {
        return new ManagementActionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function managementActionTenantDeploymentStatuses(): ManagementActionTenantDeploymentStatusesRequestBuilder {
        return new ManagementActionTenantDeploymentStatusesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function managementIntents(): ManagementIntentsRequestBuilder {
        return new ManagementIntentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function managementTemplateCollections(): ManagementTemplateCollectionsRequestBuilder {
        return new ManagementTemplateCollectionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function managementTemplates(): ManagementTemplatesRequestBuilder {
        return new ManagementTemplatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function managementTemplateSteps(): ManagementTemplateStepsRequestBuilder {
        return new ManagementTemplateStepsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function managementTemplateStepVersions(): ManagementTemplateStepVersionsRequestBuilder {
        return new ManagementTemplateStepVersionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    public function tenantGroups(): TenantGroupsRequestBuilder {
        return new TenantGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function tenants(): TenantsRequestBuilder {
        return new TenantsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function tenantsCustomizedInformation(): TenantsCustomizedInformationRequestBuilder {
        return new TenantsCustomizedInformationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function tenantsDetailedInformation(): TenantsDetailedInformationRequestBuilder {
        return new TenantsDetailedInformationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function tenantTags(): TenantTagsRequestBuilder {
        return new TenantTagsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    public function windowsDeviceMalwareStates(): WindowsDeviceMalwareStatesRequestBuilder {
        return new WindowsDeviceMalwareStatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function windowsProtectionStates(): WindowsProtectionStatesRequestBuilder {
        return new WindowsProtectionStatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.tenantRelationships.managedTenants.aggregatedPolicyCompliances.item collection
     * @param string $id Unique identifier of the item
     * @return AggregatedPolicyComplianceItemRequestBuilder
    */
    public function aggregatedPolicyCompliancesById(string $id): AggregatedPolicyComplianceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['aggregatedPolicyCompliance_id'] = $id;
        return new AggregatedPolicyComplianceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.tenantRelationships.managedTenants.auditEvents.item collection
     * @param string $id Unique identifier of the item
     * @return AuditEventItemRequestBuilder
    */
    public function auditEventsById(string $id): AuditEventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['auditEvent_id'] = $id;
        return new AuditEventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.tenantRelationships.managedTenants.cloudPcConnections.item collection
     * @param string $id Unique identifier of the item
     * @return CloudPcConnectionItemRequestBuilder
    */
    public function cloudPcConnectionsById(string $id): CloudPcConnectionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['cloudPcConnection_id'] = $id;
        return new CloudPcConnectionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.tenantRelationships.managedTenants.cloudPcDevices.item collection
     * @param string $id Unique identifier of the item
     * @return CloudPcDeviceItemRequestBuilder
    */
    public function cloudPcDevicesById(string $id): CloudPcDeviceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['cloudPcDevice_id'] = $id;
        return new CloudPcDeviceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.tenantRelationships.managedTenants.cloudPcsOverview.item collection
     * @param string $id Unique identifier of the item
     * @return CloudPcOverviewItemRequestBuilder
    */
    public function cloudPcsOverviewById(string $id): CloudPcOverviewItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['cloudPcOverview_tenantId'] = $id;
        return new CloudPcOverviewItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.tenantRelationships.managedTenants.conditionalAccessPolicyCoverages.item collection
     * @param string $id Unique identifier of the item
     * @return ConditionalAccessPolicyCoverageItemRequestBuilder
    */
    public function conditionalAccessPolicyCoveragesById(string $id): ConditionalAccessPolicyCoverageItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['conditionalAccessPolicyCoverage_id'] = $id;
        return new ConditionalAccessPolicyCoverageItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ManagedTenantsRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/tenantRelationships/managedTenants{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property managedTenants for tenantRelationships
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
     * The operations available to interact with the multi-tenant management platform.
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
     * Update the navigation property managedTenants in tenantRelationships
     * @param ManagedTenant $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(ManagedTenant $body, ?array $headers = null, ?array $options = null): RequestInformation {
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
     * Gets an item from the Microsoft\Graph\Beta\Generated.tenantRelationships.managedTenants.credentialUserRegistrationsSummaries.item collection
     * @param string $id Unique identifier of the item
     * @return CredentialUserRegistrationsSummaryItemRequestBuilder
    */
    public function credentialUserRegistrationsSummariesById(string $id): CredentialUserRegistrationsSummaryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['credentialUserRegistrationsSummary_id'] = $id;
        return new CredentialUserRegistrationsSummaryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete navigation property managedTenants for tenantRelationships
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
     * Gets an item from the Microsoft\Graph\Beta\Generated.tenantRelationships.managedTenants.deviceCompliancePolicySettingStateSummaries.item collection
     * @param string $id Unique identifier of the item
     * @return DeviceCompliancePolicySettingStateSummaryItemRequestBuilder
    */
    public function deviceCompliancePolicySettingStateSummariesById(string $id): DeviceCompliancePolicySettingStateSummaryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceCompliancePolicySettingStateSummary_id'] = $id;
        return new DeviceCompliancePolicySettingStateSummaryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * The operations available to interact with the multi-tenant management platform.
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, ManagedTenant::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.tenantRelationships.managedTenants.managedDeviceCompliances.item collection
     * @param string $id Unique identifier of the item
     * @return ManagedDeviceComplianceItemRequestBuilder
    */
    public function managedDeviceCompliancesById(string $id): ManagedDeviceComplianceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedDeviceCompliance_id'] = $id;
        return new ManagedDeviceComplianceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.tenantRelationships.managedTenants.managedDeviceComplianceTrends.item collection
     * @param string $id Unique identifier of the item
     * @return ManagedDeviceComplianceTrendItemRequestBuilder
    */
    public function managedDeviceComplianceTrendsById(string $id): ManagedDeviceComplianceTrendItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedDeviceComplianceTrend_id'] = $id;
        return new ManagedDeviceComplianceTrendItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.tenantRelationships.managedTenants.managementActions.item collection
     * @param string $id Unique identifier of the item
     * @return ManagementActionItemRequestBuilder
    */
    public function managementActionsById(string $id): ManagementActionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managementAction_id'] = $id;
        return new ManagementActionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.tenantRelationships.managedTenants.managementActionTenantDeploymentStatuses.item collection
     * @param string $id Unique identifier of the item
     * @return ManagementActionTenantDeploymentStatusItemRequestBuilder
    */
    public function managementActionTenantDeploymentStatusesById(string $id): ManagementActionTenantDeploymentStatusItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managementActionTenantDeploymentStatus_id'] = $id;
        return new ManagementActionTenantDeploymentStatusItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.tenantRelationships.managedTenants.managementIntents.item collection
     * @param string $id Unique identifier of the item
     * @return ManagementIntentItemRequestBuilder
    */
    public function managementIntentsById(string $id): ManagementIntentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managementIntent_id'] = $id;
        return new ManagementIntentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.tenantRelationships.managedTenants.managementTemplateCollections.item collection
     * @param string $id Unique identifier of the item
     * @return ManagementTemplateCollectionItemRequestBuilder
    */
    public function managementTemplateCollectionsById(string $id): ManagementTemplateCollectionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managementTemplateCollection_id'] = $id;
        return new ManagementTemplateCollectionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.tenantRelationships.managedTenants.managementTemplates.item collection
     * @param string $id Unique identifier of the item
     * @return ManagementTemplateItemRequestBuilder
    */
    public function managementTemplatesById(string $id): ManagementTemplateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managementTemplate_id'] = $id;
        return new ManagementTemplateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.tenantRelationships.managedTenants.managementTemplateSteps.item collection
     * @param string $id Unique identifier of the item
     * @return ManagementTemplateStepItemRequestBuilder
    */
    public function managementTemplateStepsById(string $id): ManagementTemplateStepItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managementTemplateStep_id'] = $id;
        return new ManagementTemplateStepItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.tenantRelationships.managedTenants.managementTemplateStepVersions.item collection
     * @param string $id Unique identifier of the item
     * @return ManagementTemplateStepVersionItemRequestBuilder
    */
    public function managementTemplateStepVersionsById(string $id): ManagementTemplateStepVersionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managementTemplateStepVersion_id'] = $id;
        return new ManagementTemplateStepVersionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property managedTenants in tenantRelationships
     * @param ManagedTenant $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(ManagedTenant $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.tenantRelationships.managedTenants.tenantGroups.item collection
     * @param string $id Unique identifier of the item
     * @return TenantGroupItemRequestBuilder
    */
    public function tenantGroupsById(string $id): TenantGroupItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['tenantGroup_id'] = $id;
        return new TenantGroupItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.tenantRelationships.managedTenants.tenants.item collection
     * @param string $id Unique identifier of the item
     * @return TenantItemRequestBuilder
    */
    public function tenantsById(string $id): TenantItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['tenant_id'] = $id;
        return new TenantItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.tenantRelationships.managedTenants.tenantsCustomizedInformation.item collection
     * @param string $id Unique identifier of the item
     * @return TenantCustomizedInformationItemRequestBuilder
    */
    public function tenantsCustomizedInformationById(string $id): TenantCustomizedInformationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['tenantCustomizedInformation_id'] = $id;
        return new TenantCustomizedInformationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.tenantRelationships.managedTenants.tenantsDetailedInformation.item collection
     * @param string $id Unique identifier of the item
     * @return TenantDetailedInformationItemRequestBuilder
    */
    public function tenantsDetailedInformationById(string $id): TenantDetailedInformationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['tenantDetailedInformation_id'] = $id;
        return new TenantDetailedInformationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.tenantRelationships.managedTenants.tenantTags.item collection
     * @param string $id Unique identifier of the item
     * @return TenantTagItemRequestBuilder
    */
    public function tenantTagsById(string $id): TenantTagItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['tenantTag_id'] = $id;
        return new TenantTagItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.tenantRelationships.managedTenants.windowsDeviceMalwareStates.item collection
     * @param string $id Unique identifier of the item
     * @return WindowsDeviceMalwareStateItemRequestBuilder
    */
    public function windowsDeviceMalwareStatesById(string $id): WindowsDeviceMalwareStateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['windowsDeviceMalwareState_id'] = $id;
        return new WindowsDeviceMalwareStateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.tenantRelationships.managedTenants.windowsProtectionStates.item collection
     * @param string $id Unique identifier of the item
     * @return WindowsProtectionStateItemRequestBuilder
    */
    public function windowsProtectionStatesById(string $id): WindowsProtectionStateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['windowsProtectionState_id'] = $id;
        return new WindowsProtectionStateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}

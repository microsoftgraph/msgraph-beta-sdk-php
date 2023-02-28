<?php

namespace Microsoft\Graph\Beta\Generated\RoleManagement\EntitlementManagement;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\RbacApplication;
use Microsoft\Graph\Beta\Generated\RoleManagement\EntitlementManagement\ResourceNamespaces\Item\UnifiedRbacResourceNamespaceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\EntitlementManagement\ResourceNamespaces\ResourceNamespacesRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\EntitlementManagement\RoleAssignmentApprovals\Item\ApprovalItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\EntitlementManagement\RoleAssignmentApprovals\RoleAssignmentApprovalsRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\EntitlementManagement\RoleAssignments\RoleAssignmentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\EntitlementManagement\RoleAssignmentScheduleInstances\Item\UnifiedRoleAssignmentScheduleInstanceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\EntitlementManagement\RoleAssignmentScheduleInstances\RoleAssignmentScheduleInstancesRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\EntitlementManagement\RoleAssignmentScheduleRequests\Item\UnifiedRoleAssignmentScheduleRequestItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\EntitlementManagement\RoleAssignmentScheduleRequests\RoleAssignmentScheduleRequestsRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\EntitlementManagement\RoleAssignmentSchedules\Item\UnifiedRoleAssignmentScheduleItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\EntitlementManagement\RoleAssignmentSchedules\RoleAssignmentSchedulesRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\EntitlementManagement\RoleDefinitions\Item\UnifiedRoleDefinitionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\EntitlementManagement\RoleDefinitions\RoleDefinitionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\EntitlementManagement\RoleEligibilityScheduleInstances\Item\UnifiedRoleEligibilityScheduleInstanceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\EntitlementManagement\RoleEligibilityScheduleInstances\RoleEligibilityScheduleInstancesRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\EntitlementManagement\RoleEligibilityScheduleRequests\Item\UnifiedRoleEligibilityScheduleRequestItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\EntitlementManagement\RoleEligibilityScheduleRequests\RoleEligibilityScheduleRequestsRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\EntitlementManagement\RoleEligibilitySchedules\Item\UnifiedRoleEligibilityScheduleItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\EntitlementManagement\RoleEligibilitySchedules\RoleEligibilitySchedulesRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\EntitlementManagement\RoleScheduleInstancesdirectoryScopeIdDirectoryScopeIdAppScopeIdAppScopeIdPrincipalIdPrincipalIdRoleDefinitionIdRoleDefinitionId\RoleScheduleInstancesdirectoryScopeIdDirectoryScopeIdAppScopeIdAppScopeIdPrincipalIdPrincipalIdRoleDefinitionIdRoleDefinitionIdRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\EntitlementManagement\RoleSchedulesdirectoryScopeIdDirectoryScopeIdAppScopeIdAppScopeIdPrincipalIdPrincipalIdRoleDefinitionIdRoleDefinitionId\RoleSchedulesdirectoryScopeIdDirectoryScopeIdAppScopeIdAppScopeIdPrincipalIdPrincipalIdRoleDefinitionIdRoleDefinitionIdRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\EntitlementManagement\TransitiveRoleAssignments\TransitiveRoleAssignmentsRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the entitlementManagement property of the microsoft.graph.roleManagement entity.
*/
class EntitlementManagementRequestBuilder 
{
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * Provides operations to manage the resourceNamespaces property of the microsoft.graph.rbacApplication entity.
    */
    public function resourceNamespaces(): ResourceNamespacesRequestBuilder {
        return new ResourceNamespacesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the roleAssignmentApprovals property of the microsoft.graph.rbacApplication entity.
    */
    public function roleAssignmentApprovals(): RoleAssignmentApprovalsRequestBuilder {
        return new RoleAssignmentApprovalsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the roleAssignments property of the microsoft.graph.rbacApplication entity.
    */
    public function roleAssignments(): RoleAssignmentsRequestBuilder {
        return new RoleAssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the roleAssignmentScheduleInstances property of the microsoft.graph.rbacApplication entity.
    */
    public function roleAssignmentScheduleInstances(): RoleAssignmentScheduleInstancesRequestBuilder {
        return new RoleAssignmentScheduleInstancesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the roleAssignmentScheduleRequests property of the microsoft.graph.rbacApplication entity.
    */
    public function roleAssignmentScheduleRequests(): RoleAssignmentScheduleRequestsRequestBuilder {
        return new RoleAssignmentScheduleRequestsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the roleAssignmentSchedules property of the microsoft.graph.rbacApplication entity.
    */
    public function roleAssignmentSchedules(): RoleAssignmentSchedulesRequestBuilder {
        return new RoleAssignmentSchedulesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the roleDefinitions property of the microsoft.graph.rbacApplication entity.
    */
    public function roleDefinitions(): RoleDefinitionsRequestBuilder {
        return new RoleDefinitionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the roleEligibilityScheduleInstances property of the microsoft.graph.rbacApplication entity.
    */
    public function roleEligibilityScheduleInstances(): RoleEligibilityScheduleInstancesRequestBuilder {
        return new RoleEligibilityScheduleInstancesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the roleEligibilityScheduleRequests property of the microsoft.graph.rbacApplication entity.
    */
    public function roleEligibilityScheduleRequests(): RoleEligibilityScheduleRequestsRequestBuilder {
        return new RoleEligibilityScheduleRequestsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the roleEligibilitySchedules property of the microsoft.graph.rbacApplication entity.
    */
    public function roleEligibilitySchedules(): RoleEligibilitySchedulesRequestBuilder {
        return new RoleEligibilitySchedulesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the roleScheduleInstances method.
    */
    public function roleScheduleInstancesdirectoryScopeIdDirectoryScopeIdAppScopeIdAppScopeIdPrincipalIdPrincipalIdRoleDefinitionIdRoleDefinitionId(): RoleScheduleInstancesdirectoryScopeIdDirectoryScopeIdAppScopeIdAppScopeIdPrincipalIdPrincipalIdRoleDefinitionIdRoleDefinitionIdRequestBuilder {
        return new RoleScheduleInstancesdirectoryScopeIdDirectoryScopeIdAppScopeIdAppScopeIdPrincipalIdPrincipalIdRoleDefinitionIdRoleDefinitionIdRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the roleSchedules method.
    */
    public function roleSchedulesdirectoryScopeIdDirectoryScopeIdAppScopeIdAppScopeIdPrincipalIdPrincipalIdRoleDefinitionIdRoleDefinitionId(): RoleSchedulesdirectoryScopeIdDirectoryScopeIdAppScopeIdAppScopeIdPrincipalIdPrincipalIdRoleDefinitionIdRoleDefinitionIdRequestBuilder {
        return new RoleSchedulesdirectoryScopeIdDirectoryScopeIdAppScopeIdAppScopeIdPrincipalIdPrincipalIdRoleDefinitionIdRoleDefinitionIdRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the transitiveRoleAssignments property of the microsoft.graph.rbacApplication entity.
    */
    public function transitiveRoleAssignments(): TransitiveRoleAssignmentsRequestBuilder {
        return new TransitiveRoleAssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Instantiates a new EntitlementManagementRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/roleManagement/entitlementManagement{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property entitlementManagement for roleManagement
     * @param EntitlementManagementRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function delete(?EntitlementManagementRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
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
     * The RbacApplication for Entitlement Management
     * @param EntitlementManagementRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?EntitlementManagementRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [RbacApplication::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property entitlementManagement in roleManagement
     * @param RbacApplication $body The request body
     * @param EntitlementManagementRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(RbacApplication $body, ?EntitlementManagementRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [RbacApplication::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the resourceNamespaces property of the microsoft.graph.rbacApplication entity.
     * @param string $id Unique identifier of the item
     * @return UnifiedRbacResourceNamespaceItemRequestBuilder
    */
    public function resourceNamespacesById(string $id): UnifiedRbacResourceNamespaceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['unifiedRbacResourceNamespace%2Did'] = $id;
        return new UnifiedRbacResourceNamespaceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the roleAssignmentApprovals property of the microsoft.graph.rbacApplication entity.
     * @param string $id Unique identifier of the item
     * @return ApprovalItemRequestBuilder
    */
    public function roleAssignmentApprovalsById(string $id): ApprovalItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['approval%2Did'] = $id;
        return new ApprovalItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the roleAssignments property of the microsoft.graph.rbacApplication entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Beta\Generated\RoleManagement\EntitlementManagement\RoleAssignments\Item\UnifiedRoleAssignmentItemRequestBuilder
    */
    public function roleAssignmentsById(string $id): \Microsoft\Graph\Beta\Generated\RoleManagement\EntitlementManagement\RoleAssignments\Item\UnifiedRoleAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['unifiedRoleAssignment%2Did'] = $id;
        return new \Microsoft\Graph\Beta\Generated\RoleManagement\EntitlementManagement\RoleAssignments\Item\UnifiedRoleAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the roleAssignmentScheduleInstances property of the microsoft.graph.rbacApplication entity.
     * @param string $id Unique identifier of the item
     * @return UnifiedRoleAssignmentScheduleInstanceItemRequestBuilder
    */
    public function roleAssignmentScheduleInstancesById(string $id): UnifiedRoleAssignmentScheduleInstanceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['unifiedRoleAssignmentScheduleInstance%2Did'] = $id;
        return new UnifiedRoleAssignmentScheduleInstanceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the roleAssignmentScheduleRequests property of the microsoft.graph.rbacApplication entity.
     * @param string $id Unique identifier of the item
     * @return UnifiedRoleAssignmentScheduleRequestItemRequestBuilder
    */
    public function roleAssignmentScheduleRequestsById(string $id): UnifiedRoleAssignmentScheduleRequestItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['unifiedRoleAssignmentScheduleRequest%2Did'] = $id;
        return new UnifiedRoleAssignmentScheduleRequestItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the roleAssignmentSchedules property of the microsoft.graph.rbacApplication entity.
     * @param string $id Unique identifier of the item
     * @return UnifiedRoleAssignmentScheduleItemRequestBuilder
    */
    public function roleAssignmentSchedulesById(string $id): UnifiedRoleAssignmentScheduleItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['unifiedRoleAssignmentSchedule%2Did'] = $id;
        return new UnifiedRoleAssignmentScheduleItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the roleDefinitions property of the microsoft.graph.rbacApplication entity.
     * @param string $id Unique identifier of the item
     * @return UnifiedRoleDefinitionItemRequestBuilder
    */
    public function roleDefinitionsById(string $id): UnifiedRoleDefinitionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['unifiedRoleDefinition%2Did'] = $id;
        return new UnifiedRoleDefinitionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the roleEligibilityScheduleInstances property of the microsoft.graph.rbacApplication entity.
     * @param string $id Unique identifier of the item
     * @return UnifiedRoleEligibilityScheduleInstanceItemRequestBuilder
    */
    public function roleEligibilityScheduleInstancesById(string $id): UnifiedRoleEligibilityScheduleInstanceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['unifiedRoleEligibilityScheduleInstance%2Did'] = $id;
        return new UnifiedRoleEligibilityScheduleInstanceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the roleEligibilityScheduleRequests property of the microsoft.graph.rbacApplication entity.
     * @param string $id Unique identifier of the item
     * @return UnifiedRoleEligibilityScheduleRequestItemRequestBuilder
    */
    public function roleEligibilityScheduleRequestsById(string $id): UnifiedRoleEligibilityScheduleRequestItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['unifiedRoleEligibilityScheduleRequest%2Did'] = $id;
        return new UnifiedRoleEligibilityScheduleRequestItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the roleEligibilitySchedules property of the microsoft.graph.rbacApplication entity.
     * @param string $id Unique identifier of the item
     * @return UnifiedRoleEligibilityScheduleItemRequestBuilder
    */
    public function roleEligibilitySchedulesById(string $id): UnifiedRoleEligibilityScheduleItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['unifiedRoleEligibilitySchedule%2Did'] = $id;
        return new UnifiedRoleEligibilityScheduleItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete navigation property entitlementManagement for roleManagement
     * @param EntitlementManagementRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?EntitlementManagementRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * The RbacApplication for Entitlement Management
     * @param EntitlementManagementRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?EntitlementManagementRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property entitlementManagement in roleManagement
     * @param RbacApplication $body The request body
     * @param EntitlementManagementRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(RbacApplication $body, ?EntitlementManagementRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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

    /**
     * Provides operations to manage the transitiveRoleAssignments property of the microsoft.graph.rbacApplication entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Beta\Generated\RoleManagement\EntitlementManagement\TransitiveRoleAssignments\Item\UnifiedRoleAssignmentItemRequestBuilder
    */
    public function transitiveRoleAssignmentsById(string $id): \Microsoft\Graph\Beta\Generated\RoleManagement\EntitlementManagement\TransitiveRoleAssignments\Item\UnifiedRoleAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['unifiedRoleAssignment%2Did'] = $id;
        return new \Microsoft\Graph\Beta\Generated\RoleManagement\EntitlementManagement\TransitiveRoleAssignments\Item\UnifiedRoleAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}

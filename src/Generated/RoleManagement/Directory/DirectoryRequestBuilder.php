<?php

namespace Microsoft\Graph\Beta\Generated\RoleManagement\Directory;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\RbacApplication;
use Microsoft\Graph\Beta\Generated\RoleManagement\Directory\ResourceNamespaces\Item\UnifiedRbacResourceNamespaceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\Directory\ResourceNamespaces\ResourceNamespacesRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\Directory\RoleAssignmentApprovals\Item\ApprovalItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\Directory\RoleAssignmentApprovals\RoleAssignmentApprovalsRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\Directory\RoleAssignments\Item\UnifiedRoleAssignmentItemRequestBuilder as MicrosoftGraphBetaGeneratedRoleManagementDirectoryRoleAssignmentsItemUnifiedRoleAssignmentItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\Directory\RoleAssignments\RoleAssignmentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\Directory\RoleAssignmentScheduleInstances\Item\UnifiedRoleAssignmentScheduleInstanceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\Directory\RoleAssignmentScheduleInstances\RoleAssignmentScheduleInstancesRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\Directory\RoleAssignmentScheduleRequests\Item\UnifiedRoleAssignmentScheduleRequestItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\Directory\RoleAssignmentScheduleRequests\RoleAssignmentScheduleRequestsRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\Directory\RoleAssignmentSchedules\Item\UnifiedRoleAssignmentScheduleItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\Directory\RoleAssignmentSchedules\RoleAssignmentSchedulesRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\Directory\RoleDefinitions\Item\UnifiedRoleDefinitionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\Directory\RoleDefinitions\RoleDefinitionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\Directory\RoleEligibilityScheduleInstances\Item\UnifiedRoleEligibilityScheduleInstanceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\Directory\RoleEligibilityScheduleInstances\RoleEligibilityScheduleInstancesRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\Directory\RoleEligibilityScheduleRequests\Item\UnifiedRoleEligibilityScheduleRequestItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\Directory\RoleEligibilityScheduleRequests\RoleEligibilityScheduleRequestsRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\Directory\RoleEligibilitySchedules\Item\UnifiedRoleEligibilityScheduleItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\Directory\RoleEligibilitySchedules\RoleEligibilitySchedulesRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\Directory\RoleScheduleInstancesWithDirectoryScopeIdWithAppScopeIdWithPrincipalIdWithRoleDefinitionId\RoleScheduleInstancesWithDirectoryScopeIdWithAppScopeIdWithPrincipalIdWithRoleDefinitionIdRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\Directory\RoleSchedulesWithDirectoryScopeIdWithAppScopeIdWithPrincipalIdWithRoleDefinitionId\RoleSchedulesWithDirectoryScopeIdWithAppScopeIdWithPrincipalIdWithRoleDefinitionIdRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\Directory\TransitiveRoleAssignments\Item\UnifiedRoleAssignmentItemRequestBuilder as MicrosoftGraphBetaGeneratedRoleManagementDirectoryTransitiveRoleAssignmentsItemUnifiedRoleAssignmentItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\Directory\TransitiveRoleAssignments\TransitiveRoleAssignmentsRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class DirectoryRequestBuilder 
{
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    public function resourceNamespaces(): ResourceNamespacesRequestBuilder {
        return new ResourceNamespacesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function roleAssignmentApprovals(): RoleAssignmentApprovalsRequestBuilder {
        return new RoleAssignmentApprovalsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function roleAssignments(): RoleAssignmentsRequestBuilder {
        return new RoleAssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function roleAssignmentScheduleInstances(): RoleAssignmentScheduleInstancesRequestBuilder {
        return new RoleAssignmentScheduleInstancesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function roleAssignmentScheduleRequests(): RoleAssignmentScheduleRequestsRequestBuilder {
        return new RoleAssignmentScheduleRequestsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function roleAssignmentSchedules(): RoleAssignmentSchedulesRequestBuilder {
        return new RoleAssignmentSchedulesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function roleDefinitions(): RoleDefinitionsRequestBuilder {
        return new RoleDefinitionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function roleEligibilityScheduleInstances(): RoleEligibilityScheduleInstancesRequestBuilder {
        return new RoleEligibilityScheduleInstancesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function roleEligibilityScheduleRequests(): RoleEligibilityScheduleRequestsRequestBuilder {
        return new RoleEligibilityScheduleRequestsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function roleEligibilitySchedules(): RoleEligibilitySchedulesRequestBuilder {
        return new RoleEligibilitySchedulesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function transitiveRoleAssignments(): TransitiveRoleAssignmentsRequestBuilder {
        return new TransitiveRoleAssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * Instantiates a new DirectoryRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/roleManagement/directory{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property directory for roleManagement
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
     * Read-only. Nullable.
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
     * Update the navigation property directory in roleManagement
     * @param RbacApplication $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(RbacApplication $body, ?array $headers = null, ?array $options = null): RequestInformation {
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
     * Delete navigation property directory for roleManagement
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
     * Read-only. Nullable.
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, RbacApplication::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property directory in roleManagement
     * @param RbacApplication $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(RbacApplication $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.roleManagement.directory.resourceNamespaces.item collection
     * @param string $id Unique identifier of the item
     * @return UnifiedRbacResourceNamespaceItemRequestBuilder
    */
    public function resourceNamespacesById(string $id): UnifiedRbacResourceNamespaceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['unifiedRbacResourceNamespace_id'] = $id;
        return new UnifiedRbacResourceNamespaceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.roleManagement.directory.roleAssignmentApprovals.item collection
     * @param string $id Unique identifier of the item
     * @return ApprovalItemRequestBuilder
    */
    public function roleAssignmentApprovalsById(string $id): ApprovalItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['approval_id'] = $id;
        return new ApprovalItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.roleManagement.directory.roleAssignments.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedRoleManagementDirectoryRoleAssignmentsItemUnifiedRoleAssignmentItemRequestBuilder
    */
    public function roleAssignmentsById(string $id): MicrosoftGraphBetaGeneratedRoleManagementDirectoryRoleAssignmentsItemUnifiedRoleAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['unifiedRoleAssignment_id'] = $id;
        return new MicrosoftGraphBetaGeneratedRoleManagementDirectoryRoleAssignmentsItemUnifiedRoleAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.roleManagement.directory.roleAssignmentScheduleInstances.item collection
     * @param string $id Unique identifier of the item
     * @return UnifiedRoleAssignmentScheduleInstanceItemRequestBuilder
    */
    public function roleAssignmentScheduleInstancesById(string $id): UnifiedRoleAssignmentScheduleInstanceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['unifiedRoleAssignmentScheduleInstance_id'] = $id;
        return new UnifiedRoleAssignmentScheduleInstanceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.roleManagement.directory.roleAssignmentScheduleRequests.item collection
     * @param string $id Unique identifier of the item
     * @return UnifiedRoleAssignmentScheduleRequestItemRequestBuilder
    */
    public function roleAssignmentScheduleRequestsById(string $id): UnifiedRoleAssignmentScheduleRequestItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['unifiedRoleAssignmentScheduleRequest_id'] = $id;
        return new UnifiedRoleAssignmentScheduleRequestItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.roleManagement.directory.roleAssignmentSchedules.item collection
     * @param string $id Unique identifier of the item
     * @return UnifiedRoleAssignmentScheduleItemRequestBuilder
    */
    public function roleAssignmentSchedulesById(string $id): UnifiedRoleAssignmentScheduleItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['unifiedRoleAssignmentSchedule_id'] = $id;
        return new UnifiedRoleAssignmentScheduleItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.roleManagement.directory.roleDefinitions.item collection
     * @param string $id Unique identifier of the item
     * @return UnifiedRoleDefinitionItemRequestBuilder
    */
    public function roleDefinitionsById(string $id): UnifiedRoleDefinitionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['unifiedRoleDefinition_id'] = $id;
        return new UnifiedRoleDefinitionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.roleManagement.directory.roleEligibilityScheduleInstances.item collection
     * @param string $id Unique identifier of the item
     * @return UnifiedRoleEligibilityScheduleInstanceItemRequestBuilder
    */
    public function roleEligibilityScheduleInstancesById(string $id): UnifiedRoleEligibilityScheduleInstanceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['unifiedRoleEligibilityScheduleInstance_id'] = $id;
        return new UnifiedRoleEligibilityScheduleInstanceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.roleManagement.directory.roleEligibilityScheduleRequests.item collection
     * @param string $id Unique identifier of the item
     * @return UnifiedRoleEligibilityScheduleRequestItemRequestBuilder
    */
    public function roleEligibilityScheduleRequestsById(string $id): UnifiedRoleEligibilityScheduleRequestItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['unifiedRoleEligibilityScheduleRequest_id'] = $id;
        return new UnifiedRoleEligibilityScheduleRequestItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.roleManagement.directory.roleEligibilitySchedules.item collection
     * @param string $id Unique identifier of the item
     * @return UnifiedRoleEligibilityScheduleItemRequestBuilder
    */
    public function roleEligibilitySchedulesById(string $id): UnifiedRoleEligibilityScheduleItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['unifiedRoleEligibilitySchedule_id'] = $id;
        return new UnifiedRoleEligibilityScheduleItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to call the roleScheduleInstances method.
     * @param string $appScopeId Usage: appScopeId='{appScopeId}'
     * @param string $directoryScopeId Usage: directoryScopeId='{directoryScopeId}'
     * @param string $principalId Usage: principalId='{principalId}'
     * @param string $roleDefinitionId Usage: roleDefinitionId='{roleDefinitionId}'
     * @return RoleScheduleInstancesWithDirectoryScopeIdWithAppScopeIdWithPrincipalIdWithRoleDefinitionIdRequestBuilder
    */
    public function roleScheduleInstancesWithDirectoryScopeIdWithAppScopeIdWithPrincipalIdWithRoleDefinitionId(string $appScopeId, string $directoryScopeId, string $principalId, string $roleDefinitionId): RoleScheduleInstancesWithDirectoryScopeIdWithAppScopeIdWithPrincipalIdWithRoleDefinitionIdRequestBuilder {
        return new RoleScheduleInstancesWithDirectoryScopeIdWithAppScopeIdWithPrincipalIdWithRoleDefinitionIdRequestBuilder($this->pathParameters, $this->requestAdapter, $appScopeId, $directoryScopeId, $principalId, $roleDefinitionId);
    }

    /**
     * Provides operations to call the roleSchedules method.
     * @param string $appScopeId Usage: appScopeId='{appScopeId}'
     * @param string $directoryScopeId Usage: directoryScopeId='{directoryScopeId}'
     * @param string $principalId Usage: principalId='{principalId}'
     * @param string $roleDefinitionId Usage: roleDefinitionId='{roleDefinitionId}'
     * @return RoleSchedulesWithDirectoryScopeIdWithAppScopeIdWithPrincipalIdWithRoleDefinitionIdRequestBuilder
    */
    public function roleSchedulesWithDirectoryScopeIdWithAppScopeIdWithPrincipalIdWithRoleDefinitionId(string $appScopeId, string $directoryScopeId, string $principalId, string $roleDefinitionId): RoleSchedulesWithDirectoryScopeIdWithAppScopeIdWithPrincipalIdWithRoleDefinitionIdRequestBuilder {
        return new RoleSchedulesWithDirectoryScopeIdWithAppScopeIdWithPrincipalIdWithRoleDefinitionIdRequestBuilder($this->pathParameters, $this->requestAdapter, $appScopeId, $directoryScopeId, $principalId, $roleDefinitionId);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.roleManagement.directory.transitiveRoleAssignments.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedRoleManagementDirectoryTransitiveRoleAssignmentsItemUnifiedRoleAssignmentItemRequestBuilder
    */
    public function transitiveRoleAssignmentsById(string $id): MicrosoftGraphBetaGeneratedRoleManagementDirectoryTransitiveRoleAssignmentsItemUnifiedRoleAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['unifiedRoleAssignment_id'] = $id;
        return new MicrosoftGraphBetaGeneratedRoleManagementDirectoryTransitiveRoleAssignmentsItemUnifiedRoleAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}

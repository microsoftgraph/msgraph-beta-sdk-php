<?php

namespace Microsoft\Graph\Beta\Generated\GovernanceResources\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\GovernanceResources\Item\Parent\ParentRequestBuilder;
use Microsoft\Graph\Beta\Generated\GovernanceResources\Item\RoleAssignmentRequests\Item\GovernanceRoleAssignmentRequestItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\GovernanceResources\Item\RoleAssignmentRequests\RoleAssignmentRequestsRequestBuilder;
use Microsoft\Graph\Beta\Generated\GovernanceResources\Item\RoleAssignments\Item\GovernanceRoleAssignmentItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\GovernanceResources\Item\RoleAssignments\RoleAssignmentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\GovernanceResources\Item\RoleDefinitions\Item\GovernanceRoleDefinitionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\GovernanceResources\Item\RoleDefinitions\RoleDefinitionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\GovernanceResources\Item\RoleSettings\Item\GovernanceRoleSettingItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\GovernanceResources\Item\RoleSettings\RoleSettingsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\GovernanceResource;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class GovernanceResourceItemRequestBuilder 
{
    /**
     * The parent property
    */
    public function parent(): ParentRequestBuilder {
        return new ParentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    /**
     * The roleAssignmentRequests property
    */
    public function roleAssignmentRequests(): RoleAssignmentRequestsRequestBuilder {
        return new RoleAssignmentRequestsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The roleAssignments property
    */
    public function roleAssignments(): RoleAssignmentsRequestBuilder {
        return new RoleAssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The roleDefinitions property
    */
    public function roleDefinitions(): RoleDefinitionsRequestBuilder {
        return new RoleDefinitionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The roleSettings property
    */
    public function roleSettings(): RoleSettingsRequestBuilder {
        return new RoleSettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * Instantiates a new GovernanceResourceItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/governanceResources/{governanceResource_id}{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete entity from governanceResources
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
     * Get entity from governanceResources by key
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
     * Update entity in governanceResources
     * @param GovernanceResource $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(GovernanceResource $body, ?array $headers = null, ?array $options = null): RequestInformation {
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
     * Delete entity from governanceResources
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
     * Get entity from governanceResources by key
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, GovernanceResource::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update entity in governanceResources
     * @param GovernanceResource $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(GovernanceResource $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.governanceResources.item.roleAssignmentRequests.item collection
     * @param string $id Unique identifier of the item
     * @return GovernanceRoleAssignmentRequestItemRequestBuilder
    */
    public function roleAssignmentRequestsById(string $id): GovernanceRoleAssignmentRequestItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['governanceRoleAssignmentRequest_id'] = $id;
        return new GovernanceRoleAssignmentRequestItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.governanceResources.item.roleAssignments.item collection
     * @param string $id Unique identifier of the item
     * @return GovernanceRoleAssignmentItemRequestBuilder
    */
    public function roleAssignmentsById(string $id): GovernanceRoleAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['governanceRoleAssignment_id'] = $id;
        return new GovernanceRoleAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.governanceResources.item.roleDefinitions.item collection
     * @param string $id Unique identifier of the item
     * @return GovernanceRoleDefinitionItemRequestBuilder
    */
    public function roleDefinitionsById(string $id): GovernanceRoleDefinitionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['governanceRoleDefinition_id'] = $id;
        return new GovernanceRoleDefinitionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.governanceResources.item.roleSettings.item collection
     * @param string $id Unique identifier of the item
     * @return GovernanceRoleSettingItemRequestBuilder
    */
    public function roleSettingsById(string $id): GovernanceRoleSettingItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['governanceRoleSetting_id'] = $id;
        return new GovernanceRoleSettingItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}

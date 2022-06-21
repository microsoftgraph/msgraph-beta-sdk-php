<?php

namespace Microsoft\Graph\Beta\Generated\PrivilegedAccess\Item\Resources\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\GovernanceResource;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\PrivilegedAccess\Item\Resources\Item\Parent\ParentRequestBuilder;
use Microsoft\Graph\Beta\Generated\PrivilegedAccess\Item\Resources\Item\RoleAssignmentRequests\Item\GovernanceRoleAssignmentRequestItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\PrivilegedAccess\Item\Resources\Item\RoleAssignmentRequests\RoleAssignmentRequestsRequestBuilder;
use Microsoft\Graph\Beta\Generated\PrivilegedAccess\Item\Resources\Item\RoleAssignments\Item\GovernanceRoleAssignmentItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\PrivilegedAccess\Item\Resources\Item\RoleAssignments\RoleAssignmentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\PrivilegedAccess\Item\Resources\Item\RoleDefinitions\Item\GovernanceRoleDefinitionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\PrivilegedAccess\Item\Resources\Item\RoleDefinitions\RoleDefinitionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\PrivilegedAccess\Item\Resources\Item\RoleSettings\Item\GovernanceRoleSettingItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\PrivilegedAccess\Item\Resources\Item\RoleSettings\RoleSettingsRequestBuilder;
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
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
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
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Instantiates a new GovernanceResourceItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/privilegedAccess/{privilegedAccess%2Did}/resources/{governanceResource%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property resources for privilegedAccess
     * @param GovernanceResourceItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?GovernanceResourceItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * A collection of resources for the provider.
     * @param GovernanceResourceItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?GovernanceResourceItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
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
     * Update the navigation property resources in privilegedAccess
     * @param GovernanceResource $body 
     * @param GovernanceResourceItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(GovernanceResource $body, ?GovernanceResourceItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Delete navigation property resources for privilegedAccess
     * @param GovernanceResourceItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?GovernanceResourceItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * A collection of resources for the provider.
     * @param GovernanceResourceItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?GovernanceResourceItemRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(GovernanceResource::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property resources in privilegedAccess
     * @param GovernanceResource $body 
     * @param GovernanceResourceItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(GovernanceResource $body, ?GovernanceResourceItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.privilegedAccess.item.resources.item.roleAssignmentRequests.item collection
     * @param string $id Unique identifier of the item
     * @return GovernanceRoleAssignmentRequestItemRequestBuilder
    */
    public function roleAssignmentRequestsById(string $id): GovernanceRoleAssignmentRequestItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['governanceRoleAssignmentRequest%2Did'] = $id;
        return new GovernanceRoleAssignmentRequestItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.privilegedAccess.item.resources.item.roleAssignments.item collection
     * @param string $id Unique identifier of the item
     * @return GovernanceRoleAssignmentItemRequestBuilder
    */
    public function roleAssignmentsById(string $id): GovernanceRoleAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['governanceRoleAssignment%2Did'] = $id;
        return new GovernanceRoleAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.privilegedAccess.item.resources.item.roleDefinitions.item collection
     * @param string $id Unique identifier of the item
     * @return GovernanceRoleDefinitionItemRequestBuilder
    */
    public function roleDefinitionsById(string $id): GovernanceRoleDefinitionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['governanceRoleDefinition%2Did'] = $id;
        return new GovernanceRoleDefinitionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.privilegedAccess.item.resources.item.roleSettings.item collection
     * @param string $id Unique identifier of the item
     * @return GovernanceRoleSettingItemRequestBuilder
    */
    public function roleSettingsById(string $id): GovernanceRoleSettingItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['governanceRoleSetting%2Did'] = $id;
        return new GovernanceRoleSettingItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}

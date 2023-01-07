<?php

namespace Microsoft\Graph\Beta\Generated\RoleManagement\DeviceManagement\RoleAssignments\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\UnifiedRoleAssignmentMultiple;
use Microsoft\Graph\Beta\Generated\RoleManagement\DeviceManagement\RoleAssignments\Item\AppScopes\AppScopesRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\DeviceManagement\RoleAssignments\Item\AppScopes\Item\AppScopeItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\DeviceManagement\RoleAssignments\Item\DirectoryScopes\DirectoryScopesRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\DeviceManagement\RoleAssignments\Item\Principals\PrincipalsRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\DeviceManagement\RoleAssignments\Item\RoleDefinition\RoleDefinitionRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class UnifiedRoleAssignmentMultipleItemRequestBuilder 
{
    /**
     * Provides operations to manage the appScopes property of the microsoft.graph.unifiedRoleAssignmentMultiple entity.
    */
    public function appScopes(): AppScopesRequestBuilder {
        return new AppScopesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the directoryScopes property of the microsoft.graph.unifiedRoleAssignmentMultiple entity.
    */
    public function directoryScopes(): DirectoryScopesRequestBuilder {
        return new DirectoryScopesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * Provides operations to manage the principals property of the microsoft.graph.unifiedRoleAssignmentMultiple entity.
    */
    public function principals(): PrincipalsRequestBuilder {
        return new PrincipalsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * Provides operations to manage the roleDefinition property of the microsoft.graph.unifiedRoleAssignmentMultiple entity.
    */
    public function roleDefinition(): RoleDefinitionRequestBuilder {
        return new RoleDefinitionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the appScopes property of the microsoft.graph.unifiedRoleAssignmentMultiple entity.
     * @param string $id Unique identifier of the item
     * @return AppScopeItemRequestBuilder
    */
    public function appScopesById(string $id): AppScopeItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['appScope%2Did'] = $id;
        return new AppScopeItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new UnifiedRoleAssignmentMultipleItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/roleManagement/deviceManagement/roleAssignments/{unifiedRoleAssignmentMultiple%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property roleAssignments for roleManagement
     * @param UnifiedRoleAssignmentMultipleItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?UnifiedRoleAssignmentMultipleItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Get roleAssignments from roleManagement
     * @param UnifiedRoleAssignmentMultipleItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?UnifiedRoleAssignmentMultipleItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property roleAssignments in roleManagement
     * @param UnifiedRoleAssignmentMultiple $body The request body
     * @param UnifiedRoleAssignmentMultipleItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(UnifiedRoleAssignmentMultiple $body, ?UnifiedRoleAssignmentMultipleItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
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
     * Delete navigation property roleAssignments for roleManagement
     * @param UnifiedRoleAssignmentMultipleItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?UnifiedRoleAssignmentMultipleItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the directoryScopes property of the microsoft.graph.unifiedRoleAssignmentMultiple entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Beta\Generated\RoleManagement\DeviceManagement\RoleAssignments\Item\DirectoryScopes\Item\DirectoryObjectItemRequestBuilder
    */
    public function directoryScopesById(string $id): \Microsoft\Graph\Beta\Generated\RoleManagement\DeviceManagement\RoleAssignments\Item\DirectoryScopes\Item\DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new \Microsoft\Graph\Beta\Generated\RoleManagement\DeviceManagement\RoleAssignments\Item\DirectoryScopes\Item\DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get roleAssignments from roleManagement
     * @param UnifiedRoleAssignmentMultipleItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?UnifiedRoleAssignmentMultipleItemRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [UnifiedRoleAssignmentMultiple::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property roleAssignments in roleManagement
     * @param UnifiedRoleAssignmentMultiple $body The request body
     * @param UnifiedRoleAssignmentMultipleItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(UnifiedRoleAssignmentMultiple $body, ?UnifiedRoleAssignmentMultipleItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [UnifiedRoleAssignmentMultiple::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the principals property of the microsoft.graph.unifiedRoleAssignmentMultiple entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Beta\Generated\RoleManagement\DeviceManagement\RoleAssignments\Item\Principals\Item\DirectoryObjectItemRequestBuilder
    */
    public function principalsById(string $id): \Microsoft\Graph\Beta\Generated\RoleManagement\DeviceManagement\RoleAssignments\Item\Principals\Item\DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new \Microsoft\Graph\Beta\Generated\RoleManagement\DeviceManagement\RoleAssignments\Item\Principals\Item\DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}

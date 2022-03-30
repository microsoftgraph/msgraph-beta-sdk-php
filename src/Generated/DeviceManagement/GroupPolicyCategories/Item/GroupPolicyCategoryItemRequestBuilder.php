<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyCategories\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyCategories\Item\Children\ChildrenRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyCategories\Item\DefinitionFile\DefinitionFileRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyCategories\Item\Definitions\DefinitionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyCategories\Item\Definitions\Item\GroupPolicyDefinitionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyCategories\Item\Parent\ParentRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\GroupPolicyCategory;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class GroupPolicyCategoryItemRequestBuilder 
{
    public function children(): ChildrenRequestBuilder {
        return new ChildrenRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function definitionFile(): DefinitionFileRequestBuilder {
        return new DefinitionFileRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function definitions(): DefinitionsRequestBuilder {
        return new DefinitionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function parent(): ParentRequestBuilder {
        return new ParentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceManagement.groupPolicyCategories.item.children.item collection
     * @param string $id Unique identifier of the item
     * @return GroupPolicyCategoryItemRequestBuilder
    */
    public function childrenById(string $id): GroupPolicyCategoryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['groupPolicyCategory_id1'] = $id;
        return new GroupPolicyCategoryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new GroupPolicyCategoryItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/deviceManagement/groupPolicyCategories/{groupPolicyCategory_id}{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property groupPolicyCategories for deviceManagement
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
     * The available group policy categories for this account.
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
     * Update the navigation property groupPolicyCategories in deviceManagement
     * @param GroupPolicyCategory $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(GroupPolicyCategory $body, ?array $headers = null, ?array $options = null): RequestInformation {
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
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceManagement.groupPolicyCategories.item.definitions.item collection
     * @param string $id Unique identifier of the item
     * @return GroupPolicyDefinitionItemRequestBuilder
    */
    public function definitionsById(string $id): GroupPolicyDefinitionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['groupPolicyDefinition_id'] = $id;
        return new GroupPolicyDefinitionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete navigation property groupPolicyCategories for deviceManagement
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
     * The available group policy categories for this account.
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, GroupPolicyCategory::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property groupPolicyCategories in deviceManagement
     * @param GroupPolicyCategory $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(GroupPolicyCategory $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

}

<?php

namespace Microsoft\Graph\Beta\Generated\Admin\ResourcePolicy\DeletedItems\Definitions\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Admin\ResourcePolicy\DeletedItems\Definitions\Item\Assignments\AssignmentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Admin\ResourcePolicy\DeletedItems\Definitions\Item\PreviousVersions\PreviousVersionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Admin\ResourcePolicy\DeletedItems\Definitions\Item\Restore\RestoreRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\ResourcePolicyDefinition;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the definitions property of the microsoft.graph.resourcePolicyDeletableRoot entity.
*/
class ResourcePolicyDefinitionUniqueNameItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the assignments property of the microsoft.graph.resourcePolicyDefinition entity.
    */
    public function assignments(): AssignmentsRequestBuilder {
        return new AssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the previousVersions property of the microsoft.graph.resourcePolicyDefinition entity.
    */
    public function previousVersions(): PreviousVersionsRequestBuilder {
        return new PreviousVersionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the restore method.
    */
    public function restore(): RestoreRequestBuilder {
        return new RestoreRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ResourcePolicyDefinitionUniqueNameItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/resourcePolicy/deletedItems/definitions/{resourcePolicyDefinition%2DuniqueName}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property definitions for admin
     * @param ResourcePolicyDefinitionUniqueNameItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?ResourcePolicyDefinitionUniqueNameItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Get definitions from admin
     * @param ResourcePolicyDefinitionUniqueNameItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ResourcePolicyDefinition|null>
     * @throws Exception
    */
    public function get(?ResourcePolicyDefinitionUniqueNameItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ResourcePolicyDefinition::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property definitions in admin
     * @param ResourcePolicyDefinition $body The request body
     * @param ResourcePolicyDefinitionUniqueNameItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ResourcePolicyDefinition|null>
     * @throws Exception
    */
    public function patch(ResourcePolicyDefinition $body, ?ResourcePolicyDefinitionUniqueNameItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ResourcePolicyDefinition::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property definitions for admin
     * @param ResourcePolicyDefinitionUniqueNameItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ResourcePolicyDefinitionUniqueNameItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Get definitions from admin
     * @param ResourcePolicyDefinitionUniqueNameItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ResourcePolicyDefinitionUniqueNameItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property definitions in admin
     * @param ResourcePolicyDefinition $body The request body
     * @param ResourcePolicyDefinitionUniqueNameItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(ResourcePolicyDefinition $body, ?ResourcePolicyDefinitionUniqueNameItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ResourcePolicyDefinitionUniqueNameItemRequestBuilder
    */
    public function withUrl(string $rawUrl): ResourcePolicyDefinitionUniqueNameItemRequestBuilder {
        return new ResourcePolicyDefinitionUniqueNameItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

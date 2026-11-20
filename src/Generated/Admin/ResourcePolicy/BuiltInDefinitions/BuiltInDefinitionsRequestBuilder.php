<?php

namespace Microsoft\Graph\Beta\Generated\Admin\ResourcePolicy\BuiltInDefinitions;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Admin\ResourcePolicy\BuiltInDefinitions\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Admin\ResourcePolicy\BuiltInDefinitions\Item\ResourcePolicyDefinitionUniqueNameItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\ResourcePolicyDefinitionCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the builtInDefinitions property of the microsoft.graph.resourcePolicyRoot entity.
*/
class BuiltInDefinitionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the builtInDefinitions property of the microsoft.graph.resourcePolicyRoot entity.
     * @param string $resourcePolicyDefinitionUniqueName The unique identifier of resourcePolicyDefinition
     * @return ResourcePolicyDefinitionUniqueNameItemRequestBuilder
    */
    public function byResourcePolicyDefinitionUniqueName(string $resourcePolicyDefinitionUniqueName): ResourcePolicyDefinitionUniqueNameItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['resourcePolicyDefinition%2DuniqueName'] = $resourcePolicyDefinitionUniqueName;
        return new ResourcePolicyDefinitionUniqueNameItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new BuiltInDefinitionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/resourcePolicy/builtInDefinitions{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get builtInDefinitions from admin
     * @param BuiltInDefinitionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ResourcePolicyDefinitionCollectionResponse|null>
     * @throws Exception
    */
    public function get(?BuiltInDefinitionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ResourcePolicyDefinitionCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get builtInDefinitions from admin
     * @param BuiltInDefinitionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?BuiltInDefinitionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return BuiltInDefinitionsRequestBuilder
    */
    public function withUrl(string $rawUrl): BuiltInDefinitionsRequestBuilder {
        return new BuiltInDefinitionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

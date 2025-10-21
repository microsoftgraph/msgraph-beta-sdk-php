<?php

namespace Microsoft\\Graph\\Beta\\Generated\TrustFramework\KeySets\Item\Keys_v2;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Beta\\Generated\Models\TrustFrameworkKey_v2CollectionResponse;
use Microsoft\\Graph\\Beta\\Generated\TrustFramework\KeySets\Item\Keys_v2\Count\CountRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\TrustFramework\KeySets\Item\Keys_v2\Item\TrustFrameworkKey_v2KItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the keys_v2 property of the microsoft.graph.trustFrameworkKeySet entity.
*/
class Keys_v2RequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the keys_v2 property of the microsoft.graph.trustFrameworkKeySet entity.
     * @param string $trustFrameworkKey_v2Kid The unique identifier of trustFrameworkKey_v2
     * @return TrustFrameworkKey_v2KItemRequestBuilder
    */
    public function byTrustFrameworkKey_v2Kid(string $trustFrameworkKey_v2Kid): TrustFrameworkKey_v2KItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['trustFrameworkKey_v2%2Dkid'] = $trustFrameworkKey_v2Kid;
        return new TrustFrameworkKey_v2KItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new Keys_v2RequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/trustFramework/keySets/{trustFrameworkKeySet%2Did}/keys_v2{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Read the properties and relationships of a trustFrameworkKeyv2 object.
     * @param Keys_v2RequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TrustFrameworkKey_v2CollectionResponse|null>
     * @throws Exception
    */
    public function get(?Keys_v2RequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TrustFrameworkKey_v2CollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Read the properties and relationships of a trustFrameworkKeyv2 object.
     * @param Keys_v2RequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?Keys_v2RequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Keys_v2RequestBuilder
    */
    public function withUrl(string $rawUrl): Keys_v2RequestBuilder {
        return new Keys_v2RequestBuilder($rawUrl, $this->requestAdapter);
    }

}

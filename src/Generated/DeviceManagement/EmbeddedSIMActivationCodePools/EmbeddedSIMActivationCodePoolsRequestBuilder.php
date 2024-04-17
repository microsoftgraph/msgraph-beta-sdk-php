<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\EmbeddedSIMActivationCodePools;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\EmbeddedSIMActivationCodePools\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\EmbeddedSIMActivationCodePools\Item\EmbeddedSIMActivationCodePoolItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\EmbeddedSIMActivationCodePool;
use Microsoft\Graph\Beta\Generated\Models\EmbeddedSIMActivationCodePoolCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the embeddedSIMActivationCodePools property of the microsoft.graph.deviceManagement entity.
*/
class EmbeddedSIMActivationCodePoolsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the embeddedSIMActivationCodePools property of the microsoft.graph.deviceManagement entity.
     * @param string $embeddedSIMActivationCodePoolId The unique identifier of embeddedSIMActivationCodePool
     * @return EmbeddedSIMActivationCodePoolItemRequestBuilder
    */
    public function byEmbeddedSIMActivationCodePoolId(string $embeddedSIMActivationCodePoolId): EmbeddedSIMActivationCodePoolItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['embeddedSIMActivationCodePool%2Did'] = $embeddedSIMActivationCodePoolId;
        return new EmbeddedSIMActivationCodePoolItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new EmbeddedSIMActivationCodePoolsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/embeddedSIMActivationCodePools{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The embedded SIM activation code pools created by this account.
     * @param EmbeddedSIMActivationCodePoolsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EmbeddedSIMActivationCodePoolCollectionResponse|null>
     * @throws Exception
    */
    public function get(?EmbeddedSIMActivationCodePoolsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EmbeddedSIMActivationCodePoolCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to embeddedSIMActivationCodePools for deviceManagement
     * @param EmbeddedSIMActivationCodePool $body The request body
     * @param EmbeddedSIMActivationCodePoolsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EmbeddedSIMActivationCodePool|null>
     * @throws Exception
    */
    public function post(EmbeddedSIMActivationCodePool $body, ?EmbeddedSIMActivationCodePoolsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EmbeddedSIMActivationCodePool::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The embedded SIM activation code pools created by this account.
     * @param EmbeddedSIMActivationCodePoolsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?EmbeddedSIMActivationCodePoolsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to embeddedSIMActivationCodePools for deviceManagement
     * @param EmbeddedSIMActivationCodePool $body The request body
     * @param EmbeddedSIMActivationCodePoolsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(EmbeddedSIMActivationCodePool $body, ?EmbeddedSIMActivationCodePoolsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
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
     * @return EmbeddedSIMActivationCodePoolsRequestBuilder
    */
    public function withUrl(string $rawUrl): EmbeddedSIMActivationCodePoolsRequestBuilder {
        return new EmbeddedSIMActivationCodePoolsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

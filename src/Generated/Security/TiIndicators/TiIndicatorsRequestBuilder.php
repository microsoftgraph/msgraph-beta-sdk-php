<?php

namespace Microsoft\Graph\Beta\Generated\Security\TiIndicators;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\TiIndicator;
use Microsoft\Graph\Beta\Generated\Models\TiIndicatorCollectionResponse;
use Microsoft\Graph\Beta\Generated\Security\TiIndicators\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\TiIndicators\DeleteTiIndicators\DeleteTiIndicatorsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\TiIndicators\DeleteTiIndicatorsByExternalId\DeleteTiIndicatorsByExternalIdRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\TiIndicators\Item\TiIndicatorItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\TiIndicators\SubmitTiIndicators\SubmitTiIndicatorsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\TiIndicators\UpdateTiIndicators\UpdateTiIndicatorsRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the tiIndicators property of the microsoft.graph.security entity.
*/
class TiIndicatorsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the deleteTiIndicators method.
    */
    public function deleteTiIndicators(): DeleteTiIndicatorsRequestBuilder {
        return new DeleteTiIndicatorsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the deleteTiIndicatorsByExternalId method.
    */
    public function deleteTiIndicatorsByExternalId(): DeleteTiIndicatorsByExternalIdRequestBuilder {
        return new DeleteTiIndicatorsByExternalIdRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the submitTiIndicators method.
    */
    public function submitTiIndicators(): SubmitTiIndicatorsRequestBuilder {
        return new SubmitTiIndicatorsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the updateTiIndicators method.
    */
    public function updateTiIndicators(): UpdateTiIndicatorsRequestBuilder {
        return new UpdateTiIndicatorsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the tiIndicators property of the microsoft.graph.security entity.
     * @param string $tiIndicatorId The unique identifier of tiIndicator
     * @return TiIndicatorItemRequestBuilder
    */
    public function byTiIndicatorId(string $tiIndicatorId): TiIndicatorItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['tiIndicator%2Did'] = $tiIndicatorId;
        return new TiIndicatorItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new TiIndicatorsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/tiIndicators{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve a list of tiIndicator objects.
     * @param TiIndicatorsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TiIndicatorCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/tiindicators-list?view=graph-rest-beta Find more info here
    */
    public function get(?TiIndicatorsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TiIndicatorCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new tiIndicator object.
     * @param TiIndicator $body The request body
     * @param TiIndicatorsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TiIndicator|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/tiindicators-post?view=graph-rest-beta Find more info here
    */
    public function post(TiIndicator $body, ?TiIndicatorsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TiIndicator::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve a list of tiIndicator objects.
     * @param TiIndicatorsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?TiIndicatorsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new tiIndicator object.
     * @param TiIndicator $body The request body
     * @param TiIndicatorsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(TiIndicator $body, ?TiIndicatorsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return TiIndicatorsRequestBuilder
    */
    public function withUrl(string $rawUrl): TiIndicatorsRequestBuilder {
        return new TiIndicatorsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

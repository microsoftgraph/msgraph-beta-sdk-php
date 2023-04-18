<?php

namespace Microsoft\Graph\Beta\Generated\Security\TiIndicators;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\TiIndicator;
use Microsoft\Graph\Beta\Generated\Models\TiIndicatorCollectionResponse;
use Microsoft\Graph\Beta\Generated\Security\TiIndicators\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\TiIndicators\DeleteTiIndicators\DeleteTiIndicatorsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\TiIndicators\DeleteTiIndicatorsByExternalId\DeleteTiIndicatorsByExternalIdRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\TiIndicators\Item\TiIndicatorItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\TiIndicators\SubmitTiIndicators\SubmitTiIndicatorsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\TiIndicators\UpdateTiIndicators\UpdateTiIndicatorsRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the tiIndicators property of the microsoft.graph.security entity.
*/
class TiIndicatorsRequestBuilder 
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
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
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
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the tiIndicators property of the microsoft.graph.security entity.
     * @param string $tiIndicatorId Unique identifier of the item
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
        $this->urlTemplate = '{+baseurl}/security/tiIndicators{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve a list of tiIndicator objects.
     * @param TiIndicatorsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://docs.microsoft.com/graph/api/tiindicators-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?TiIndicatorsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [TiIndicatorCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Create a new tiIndicator object.
     * @param TiIndicator $body The request body
     * @param TiIndicatorsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://docs.microsoft.com/graph/api/tiindicators-post?view=graph-rest-1.0 Find more info here
    */
    public function post(TiIndicator $body, ?TiIndicatorsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [TiIndicator::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
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
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
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
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}

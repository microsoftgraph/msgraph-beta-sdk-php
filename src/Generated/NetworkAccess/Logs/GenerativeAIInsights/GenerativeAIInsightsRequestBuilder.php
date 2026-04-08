<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\Logs\GenerativeAIInsights;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\Networkaccess\GenerativeAIInsight;
use Microsoft\Graph\Beta\Generated\Models\Networkaccess\GenerativeAIInsightCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\NetworkAccess\Logs\GenerativeAIInsights\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\NetworkAccess\Logs\GenerativeAIInsights\Item\GenerativeAIInsightTransactionItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the generativeAIInsights property of the microsoft.graph.networkaccess.logs entity.
*/
class GenerativeAIInsightsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the generativeAIInsights property of the microsoft.graph.networkaccess.logs entity.
     * @param string $generativeAIInsightTransactionId The unique identifier of generativeAIInsight
     * @return GenerativeAIInsightTransactionItemRequestBuilder
    */
    public function byGenerativeAIInsightTransactionId(string $generativeAIInsightTransactionId): GenerativeAIInsightTransactionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['generativeAIInsight%2DtransactionId'] = $generativeAIInsightTransactionId;
        return new GenerativeAIInsightTransactionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new GenerativeAIInsightsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/networkAccess/logs/generativeAIInsights{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get generativeAIInsights from networkAccess
     * @param GenerativeAIInsightsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GenerativeAIInsightCollectionResponse|null>
     * @throws Exception
    */
    public function get(?GenerativeAIInsightsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GenerativeAIInsightCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to generativeAIInsights for networkAccess
     * @param GenerativeAIInsight $body The request body
     * @param GenerativeAIInsightsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GenerativeAIInsight|null>
     * @throws Exception
    */
    public function post(GenerativeAIInsight $body, ?GenerativeAIInsightsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GenerativeAIInsight::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get generativeAIInsights from networkAccess
     * @param GenerativeAIInsightsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GenerativeAIInsightsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to generativeAIInsights for networkAccess
     * @param GenerativeAIInsight $body The request body
     * @param GenerativeAIInsightsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(GenerativeAIInsight $body, ?GenerativeAIInsightsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return GenerativeAIInsightsRequestBuilder
    */
    public function withUrl(string $rawUrl): GenerativeAIInsightsRequestBuilder {
        return new GenerativeAIInsightsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

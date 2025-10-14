<?php

namespace Microsoft\\Graph\\Beta\\Generated\App\OnlineMeetings\Item\AiInsights;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\App\OnlineMeetings\Item\AiInsights\Count\CountRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\App\OnlineMeetings\Item\AiInsights\Item\CallAiInsightItemRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Models\CallAiInsight;
use Microsoft\\Graph\\Beta\\Generated\Models\CallAiInsightCollectionResponse;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the aiInsights property of the microsoft.graph.onlineMeeting entity.
*/
class AiInsightsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the aiInsights property of the microsoft.graph.onlineMeeting entity.
     * @param string $callAiInsightId The unique identifier of callAiInsight
     * @return CallAiInsightItemRequestBuilder
    */
    public function byCallAiInsightId(string $callAiInsightId): CallAiInsightItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['callAiInsight%2Did'] = $callAiInsightId;
        return new CallAiInsightItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AiInsightsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/app/onlineMeetings/{onlineMeeting%2Did}/aiInsights{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The AI insights generated for an online meeting. Read-only.
     * @param AiInsightsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CallAiInsightCollectionResponse|null>
     * @throws Exception
    */
    public function get(?AiInsightsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CallAiInsightCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to aiInsights for app
     * @param CallAiInsight $body The request body
     * @param AiInsightsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CallAiInsight|null>
     * @throws Exception
    */
    public function post(CallAiInsight $body, ?AiInsightsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CallAiInsight::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The AI insights generated for an online meeting. Read-only.
     * @param AiInsightsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AiInsightsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to aiInsights for app
     * @param CallAiInsight $body The request body
     * @param AiInsightsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CallAiInsight $body, ?AiInsightsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AiInsightsRequestBuilder
    */
    public function withUrl(string $rawUrl): AiInsightsRequestBuilder {
        return new AiInsightsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

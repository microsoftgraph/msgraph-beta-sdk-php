<?php

namespace Microsoft\Graph\Beta\Generated\Reports\UserInsights\Daily\ActiveUsersBreakdown;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ActiveUsersBreakdownMetricCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Reports\UserInsights\Daily\ActiveUsersBreakdown\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Reports\UserInsights\Daily\ActiveUsersBreakdown\Item\ActiveUsersBreakdownMetricItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the activeUsersBreakdown property of the microsoft.graph.dailyUserInsightMetricsRoot entity.
*/
class ActiveUsersBreakdownRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the activeUsersBreakdown property of the microsoft.graph.dailyUserInsightMetricsRoot entity.
     * @param string $activeUsersBreakdownMetricId The unique identifier of activeUsersBreakdownMetric
     * @return ActiveUsersBreakdownMetricItemRequestBuilder
    */
    public function byActiveUsersBreakdownMetricId(string $activeUsersBreakdownMetricId): ActiveUsersBreakdownMetricItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['activeUsersBreakdownMetric%2Did'] = $activeUsersBreakdownMetricId;
        return new ActiveUsersBreakdownMetricItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ActiveUsersBreakdownRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/userInsights/daily/activeUsersBreakdown{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of daily activeUsersBreakdown objects on apps registered in your tenant configured for Microsoft Entra External ID for customers.
     * @param ActiveUsersBreakdownRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ActiveUsersBreakdownMetricCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/dailyuserinsightmetricsroot-list-activeusersbreakdown?view=graph-rest-1.0 Find more info here
    */
    public function get(?ActiveUsersBreakdownRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ActiveUsersBreakdownMetricCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of daily activeUsersBreakdown objects on apps registered in your tenant configured for Microsoft Entra External ID for customers.
     * @param ActiveUsersBreakdownRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ActiveUsersBreakdownRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ActiveUsersBreakdownRequestBuilder
    */
    public function withUrl(string $rawUrl): ActiveUsersBreakdownRequestBuilder {
        return new ActiveUsersBreakdownRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

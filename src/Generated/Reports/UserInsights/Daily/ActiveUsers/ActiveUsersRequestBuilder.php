<?php

namespace Microsoft\\Graph\\Beta\\Generated\Reports\UserInsights\Daily\ActiveUsers;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Models\ActiveUsersMetricCollectionResponse;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Beta\\Generated\Reports\UserInsights\Daily\ActiveUsers\Count\CountRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Reports\UserInsights\Daily\ActiveUsers\Item\ActiveUsersMetricItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the activeUsers property of the microsoft.graph.dailyUserInsightMetricsRoot entity.
*/
class ActiveUsersRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the activeUsers property of the microsoft.graph.dailyUserInsightMetricsRoot entity.
     * @param string $activeUsersMetricId The unique identifier of activeUsersMetric
     * @return ActiveUsersMetricItemRequestBuilder
    */
    public function byActiveUsersMetricId(string $activeUsersMetricId): ActiveUsersMetricItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['activeUsersMetric%2Did'] = $activeUsersMetricId;
        return new ActiveUsersMetricItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ActiveUsersRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/userInsights/daily/activeUsers{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of daily active users on apps registered in your tenant configured for Microsoft Entra External ID for customers.
     * @param ActiveUsersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ActiveUsersMetricCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/dailyuserinsightmetricsroot-list-activeusers?view=graph-rest-beta Find more info here
    */
    public function get(?ActiveUsersRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ActiveUsersMetricCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of daily active users on apps registered in your tenant configured for Microsoft Entra External ID for customers.
     * @param ActiveUsersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ActiveUsersRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ActiveUsersRequestBuilder
    */
    public function withUrl(string $rawUrl): ActiveUsersRequestBuilder {
        return new ActiveUsersRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

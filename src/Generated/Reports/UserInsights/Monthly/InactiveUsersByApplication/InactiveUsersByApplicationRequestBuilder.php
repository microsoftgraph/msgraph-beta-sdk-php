<?php

namespace Microsoft\Graph\Beta\Generated\Reports\UserInsights\Monthly\InactiveUsersByApplication;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\MonthlyInactiveUsersByApplicationMetricCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Reports\UserInsights\Monthly\InactiveUsersByApplication\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Reports\UserInsights\Monthly\InactiveUsersByApplication\Item\MonthlyInactiveUsersByApplicationMetricItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the inactiveUsersByApplication property of the microsoft.graph.monthlyUserInsightMetricsRoot entity.
*/
class InactiveUsersByApplicationRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the inactiveUsersByApplication property of the microsoft.graph.monthlyUserInsightMetricsRoot entity.
     * @param string $monthlyInactiveUsersByApplicationMetricId The unique identifier of monthlyInactiveUsersByApplicationMetric
     * @return MonthlyInactiveUsersByApplicationMetricItemRequestBuilder
    */
    public function byMonthlyInactiveUsersByApplicationMetricId(string $monthlyInactiveUsersByApplicationMetricId): MonthlyInactiveUsersByApplicationMetricItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['monthlyInactiveUsersByApplicationMetric%2Did'] = $monthlyInactiveUsersByApplicationMetricId;
        return new MonthlyInactiveUsersByApplicationMetricItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new InactiveUsersByApplicationRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/userInsights/monthly/inactiveUsersByApplication{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get inactiveUsersByApplication from reports
     * @param InactiveUsersByApplicationRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MonthlyInactiveUsersByApplicationMetricCollectionResponse|null>
     * @throws Exception
    */
    public function get(?InactiveUsersByApplicationRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MonthlyInactiveUsersByApplicationMetricCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get inactiveUsersByApplication from reports
     * @param InactiveUsersByApplicationRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?InactiveUsersByApplicationRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return InactiveUsersByApplicationRequestBuilder
    */
    public function withUrl(string $rawUrl): InactiveUsersByApplicationRequestBuilder {
        return new InactiveUsersByApplicationRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

<?php

namespace Microsoft\Graph\Beta\Generated\Reports\UserInsights\Monthly\Summary;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\InsightSummaryCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Reports\UserInsights\Monthly\Summary\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Reports\UserInsights\Monthly\Summary\Item\InsightSummaryItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the summary property of the microsoft.graph.monthlyUserInsightMetricsRoot entity.
*/
class SummaryRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the summary property of the microsoft.graph.monthlyUserInsightMetricsRoot entity.
     * @param string $insightSummaryId The unique identifier of insightSummary
     * @return InsightSummaryItemRequestBuilder
    */
    public function byInsightSummaryId(string $insightSummaryId): InsightSummaryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['insightSummary%2Did'] = $insightSummaryId;
        return new InsightSummaryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SummaryRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/userInsights/monthly/summary{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Summary of all usage insights on apps registered in the tenant for a specified period.
     * @param SummaryRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<InsightSummaryCollectionResponse|null>
     * @throws Exception
    */
    public function get(?SummaryRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [InsightSummaryCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Summary of all usage insights on apps registered in the tenant for a specified period.
     * @param SummaryRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SummaryRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SummaryRequestBuilder
    */
    public function withUrl(string $rawUrl): SummaryRequestBuilder {
        return new SummaryRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

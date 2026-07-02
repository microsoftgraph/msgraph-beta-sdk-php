<?php

namespace Microsoft\Graph\Beta\Generated\AuditLogs\GetSummarizedNonInteractiveSignInsWithAggregationWindow;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getSummarizedNonInteractiveSignIns method. Original name: getSummarizedNonInteractiveSignInsWithAggregationWindowRequestBuilder
*/
class GetSummarizedNonInteractiveSignInsWithAggregationWindow_bf746882 extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetSummarizedNonInteractiveSignInsWithAggregationWindow_bf746882 and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $aggregationWindow Usage: aggregationWindow='{aggregationWindow}'
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $aggregationWindow = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/auditLogs/getSummarizedNonInteractiveSignIns(aggregationWindow=\'{aggregationWindow}\'){?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['aggregationWindow'] = $aggregationWindow;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Returns aggregated non-interactive sign-in event counts grouped by user, application, IP address, and time window, with drill-down capability using individual requestIds via the /signIns endpoint. This includes autonomous agent sign-in events.
     * @param GetSummarizedNonInteractiveSignInsWithAggregationWindow_7ec0a97b|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetSummarizedNonInteractiveSignInsWithAggregationWindow_0b0370ab|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/auditlogroot-getsummarizednoninteractivesignins?view=graph-rest-beta Find more info here
    */
    public function get(?GetSummarizedNonInteractiveSignInsWithAggregationWindow_7ec0a97b $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GetSummarizedNonInteractiveSignInsWithAggregationWindow_0b0370ab::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Returns aggregated non-interactive sign-in event counts grouped by user, application, IP address, and time window, with drill-down capability using individual requestIds via the /signIns endpoint. This includes autonomous agent sign-in events.
     * @param GetSummarizedNonInteractiveSignInsWithAggregationWindow_7ec0a97b|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GetSummarizedNonInteractiveSignInsWithAggregationWindow_7ec0a97b $requestConfiguration = null): RequestInformation {
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
     * @return GetSummarizedNonInteractiveSignInsWithAggregationWindow_bf746882
    */
    public function withUrl(string $rawUrl): GetSummarizedNonInteractiveSignInsWithAggregationWindow_bf746882 {
        return new GetSummarizedNonInteractiveSignInsWithAggregationWindow_bf746882($rawUrl, $this->requestAdapter);
    }

}

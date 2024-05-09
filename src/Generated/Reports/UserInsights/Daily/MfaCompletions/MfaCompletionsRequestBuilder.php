<?php

namespace Microsoft\Graph\Beta\Generated\Reports\UserInsights\Daily\MfaCompletions;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\MfaCompletionMetricCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Reports\UserInsights\Daily\MfaCompletions\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Reports\UserInsights\Daily\MfaCompletions\Item\MfaCompletionMetricItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the mfaCompletions property of the microsoft.graph.dailyUserInsightMetricsRoot entity.
*/
class MfaCompletionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the mfaCompletions property of the microsoft.graph.dailyUserInsightMetricsRoot entity.
     * @param string $mfaCompletionMetricId The unique identifier of mfaCompletionMetric
     * @return MfaCompletionMetricItemRequestBuilder
    */
    public function byMfaCompletionMetricId(string $mfaCompletionMetricId): MfaCompletionMetricItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mfaCompletionMetric%2Did'] = $mfaCompletionMetricId;
        return new MfaCompletionMetricItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new MfaCompletionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/userInsights/daily/mfaCompletions{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of daily MFA completions on apps registered in your tenant configured for Microsoft Entra External ID for customers.
     * @param MfaCompletionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MfaCompletionMetricCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/dailyuserinsightmetricsroot-list-mfacompletions?view=graph-rest-beta Find more info here
    */
    public function get(?MfaCompletionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MfaCompletionMetricCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of daily MFA completions on apps registered in your tenant configured for Microsoft Entra External ID for customers.
     * @param MfaCompletionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MfaCompletionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MfaCompletionsRequestBuilder
    */
    public function withUrl(string $rawUrl): MfaCompletionsRequestBuilder {
        return new MfaCompletionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

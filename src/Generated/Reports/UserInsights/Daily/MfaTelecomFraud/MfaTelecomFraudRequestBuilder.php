<?php

namespace Microsoft\Graph\Beta\Generated\Reports\UserInsights\Daily\MfaTelecomFraud;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\MfaTelecomFraudMetric;
use Microsoft\Graph\Beta\Generated\Models\MfaTelecomFraudMetricCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Reports\UserInsights\Daily\MfaTelecomFraud\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Reports\UserInsights\Daily\MfaTelecomFraud\Item\MfaTelecomFraudMetricItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the mfaTelecomFraud property of the microsoft.graph.dailyUserInsightMetricsRoot entity.
*/
class MfaTelecomFraudRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the mfaTelecomFraud property of the microsoft.graph.dailyUserInsightMetricsRoot entity.
     * @param string $mfaTelecomFraudMetricId The unique identifier of mfaTelecomFraudMetric
     * @return MfaTelecomFraudMetricItemRequestBuilder
    */
    public function byMfaTelecomFraudMetricId(string $mfaTelecomFraudMetricId): MfaTelecomFraudMetricItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mfaTelecomFraudMetric%2Did'] = $mfaTelecomFraudMetricId;
        return new MfaTelecomFraudMetricItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new MfaTelecomFraudRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/userInsights/daily/mfaTelecomFraud{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get mfaTelecomFraud from reports
     * @param MfaTelecomFraudRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MfaTelecomFraudMetricCollectionResponse|null>
     * @throws Exception
    */
    public function get(?MfaTelecomFraudRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MfaTelecomFraudMetricCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to mfaTelecomFraud for reports
     * @param MfaTelecomFraudMetric $body The request body
     * @param MfaTelecomFraudRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MfaTelecomFraudMetric|null>
     * @throws Exception
    */
    public function post(MfaTelecomFraudMetric $body, ?MfaTelecomFraudRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MfaTelecomFraudMetric::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get mfaTelecomFraud from reports
     * @param MfaTelecomFraudRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MfaTelecomFraudRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to mfaTelecomFraud for reports
     * @param MfaTelecomFraudMetric $body The request body
     * @param MfaTelecomFraudRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(MfaTelecomFraudMetric $body, ?MfaTelecomFraudRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MfaTelecomFraudRequestBuilder
    */
    public function withUrl(string $rawUrl): MfaTelecomFraudRequestBuilder {
        return new MfaTelecomFraudRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

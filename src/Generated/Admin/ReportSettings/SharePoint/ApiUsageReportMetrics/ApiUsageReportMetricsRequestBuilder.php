<?php

namespace Microsoft\Graph\Beta\Generated\Admin\ReportSettings\SharePoint\ApiUsageReportMetrics;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Admin\ReportSettings\SharePoint\ApiUsageReportMetrics\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Admin\ReportSettings\SharePoint\ApiUsageReportMetrics\Item\ApiUsageReportEnablementStatusMetricItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ApiUsageReportEnablementStatus;
use Microsoft\Graph\Beta\Generated\Models\ApiUsageReportEnablementStatusCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the apiUsageReportMetrics property of the microsoft.graph.sharePointReportSettings entity.
*/
class ApiUsageReportMetricsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the apiUsageReportMetrics property of the microsoft.graph.sharePointReportSettings entity.
     * @param string $apiUsageReportEnablementStatusMetric The unique identifier of apiUsageReportEnablementStatus
     * @return ApiUsageReportEnablementStatusMetricItemRequestBuilder
    */
    public function byApiUsageReportEnablementStatusMetric(string $apiUsageReportEnablementStatusMetric): ApiUsageReportEnablementStatusMetricItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['apiUsageReportEnablementStatus%2Dmetric'] = $apiUsageReportEnablementStatusMetric;
        return new ApiUsageReportEnablementStatusMetricItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ApiUsageReportMetricsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the list of SharePoint API usage report metrics and their enablement status for the tenant. Currently, only the EgressReport metric is supported.
     * @param ApiUsageReportMetricsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ApiUsageReportEnablementStatusCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/sharepointreportsettings-list-apiusagereportmetrics?view=graph-rest-beta Find more info here
    */
    public function get(?ApiUsageReportMetricsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ApiUsageReportEnablementStatusCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to apiUsageReportMetrics for admin
     * @param ApiUsageReportEnablementStatus $body The request body
     * @param ApiUsageReportMetricsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ApiUsageReportEnablementStatus|null>
     * @throws Exception
    */
    public function post(ApiUsageReportEnablementStatus $body, ?ApiUsageReportMetricsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ApiUsageReportEnablementStatus::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the list of SharePoint API usage report metrics and their enablement status for the tenant. Currently, only the EgressReport metric is supported.
     * @param ApiUsageReportMetricsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ApiUsageReportMetricsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to apiUsageReportMetrics for admin
     * @param ApiUsageReportEnablementStatus $body The request body
     * @param ApiUsageReportMetricsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ApiUsageReportEnablementStatus $body, ?ApiUsageReportMetricsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ApiUsageReportMetricsRequestBuilder
    */
    public function withUrl(string $rawUrl): ApiUsageReportMetricsRequestBuilder {
        return new ApiUsageReportMetricsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

<?php

namespace Microsoft\Graph\Beta\Generated\Admin\ReportSettings\SharePoint\ApiUsageReportMetrics\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ApiUsageReportEnablementStatus;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the apiUsageReportMetrics property of the microsoft.graph.sharePointReportSettings entity.
*/
class ApiUsageReportEnablementStatusMetricItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ApiUsageReportEnablementStatusMetricItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/reportSettings/sharePoint/apiUsageReportMetrics/{apiUsageReportEnablementStatus%2Dmetric}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property apiUsageReportMetrics for admin
     * @param ApiUsageReportEnablementStatusMetricItemRequestBuilderD_1ff4c0d4|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?ApiUsageReportEnablementStatusMetricItemRequestBuilderD_1ff4c0d4 $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * The collection of API usage report metrics and the status of their enablement.
     * @param ApiUsageReportEnablementStatusMetricItemRequestBuilderG_4611c62f|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ApiUsageReportEnablementStatus|null>
     * @throws Exception
    */
    public function get(?ApiUsageReportEnablementStatusMetricItemRequestBuilderG_4611c62f $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ApiUsageReportEnablementStatus::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property apiUsageReportMetrics in admin
     * @param ApiUsageReportEnablementStatus $body The request body
     * @param ApiUsageReportEnablementStatusMetricItemRequestBuilderP_c2308bac|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ApiUsageReportEnablementStatus|null>
     * @throws Exception
    */
    public function patch(ApiUsageReportEnablementStatus $body, ?ApiUsageReportEnablementStatusMetricItemRequestBuilderP_c2308bac $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ApiUsageReportEnablementStatus::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property apiUsageReportMetrics for admin
     * @param ApiUsageReportEnablementStatusMetricItemRequestBuilderD_1ff4c0d4|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ApiUsageReportEnablementStatusMetricItemRequestBuilderD_1ff4c0d4 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * The collection of API usage report metrics and the status of their enablement.
     * @param ApiUsageReportEnablementStatusMetricItemRequestBuilderG_4611c62f|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ApiUsageReportEnablementStatusMetricItemRequestBuilderG_4611c62f $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property apiUsageReportMetrics in admin
     * @param ApiUsageReportEnablementStatus $body The request body
     * @param ApiUsageReportEnablementStatusMetricItemRequestBuilderP_c2308bac|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(ApiUsageReportEnablementStatus $body, ?ApiUsageReportEnablementStatusMetricItemRequestBuilderP_c2308bac $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * @return ApiUsageReportEnablementStatusMetricItemRequestBuilder
    */
    public function withUrl(string $rawUrl): ApiUsageReportEnablementStatusMetricItemRequestBuilder {
        return new ApiUsageReportEnablementStatusMetricItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

<?php

namespace Microsoft\Graph\Beta\Generated\Reports\GetSharePointApiUsageWithPeriodWithAppIdreportTypeReportType;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Psr\Http\Message\StreamInterface;

/**
 * Provides operations to call the getSharePointApiUsage method.
*/
class GetSharePointApiUsageWithPeriodWithAppIdreportTypeReportTypeRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetSharePointApiUsageWithPeriodWithAppIdreportTypeReportTypeRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $appId Usage: appId='{appId}'
     * @param string|null $period Usage: period='{period}'
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $appId = null, ?string $period = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/getSharePointApiUsage(period=\'{period}\',appId=\'{appId}\',reportType=\'@reportType\'){?reportType*}');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['appId'] = $appId;
            $urlTplParams['period'] = $period;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invoke function getSharePointApiUsage
     * @param GetSharePointApiUsageWithPeriodWithAppIdreportTypeReportTypeRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StreamInterface|null>
     * @throws Exception
    */
    public function get(?GetSharePointApiUsageWithPeriodWithAppIdreportTypeReportTypeRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        /** @var Promise<StreamInterface|null> $result */
        $result = $this->requestAdapter->sendPrimitiveAsync($requestInfo, StreamInterface::class, $errorMappings);
        return $result;
    }

    /**
     * Invoke function getSharePointApiUsage
     * @param GetSharePointApiUsageWithPeriodWithAppIdreportTypeReportTypeRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GetSharePointApiUsageWithPeriodWithAppIdreportTypeReportTypeRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
        $requestInfo->tryAddHeader('Accept', "application/octet-stream, application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return GetSharePointApiUsageWithPeriodWithAppIdreportTypeReportTypeRequestBuilder
    */
    public function withUrl(string $rawUrl): GetSharePointApiUsageWithPeriodWithAppIdreportTypeReportTypeRequestBuilder {
        return new GetSharePointApiUsageWithPeriodWithAppIdreportTypeReportTypeRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

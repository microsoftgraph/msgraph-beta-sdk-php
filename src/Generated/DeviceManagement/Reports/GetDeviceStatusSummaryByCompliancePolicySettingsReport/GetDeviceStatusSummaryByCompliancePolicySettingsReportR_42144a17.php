<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetDeviceStatusSummaryByCompliancePolicySettingsReport;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Psr\Http\Message\StreamInterface;

/**
 * Provides operations to call the getDeviceStatusSummaryByCompliancePolicySettingsReport method. Original name: GetDeviceStatusSummaryByCompliancePolicySettingsReportRequestBuilder
*/
class GetDeviceStatusSummaryByCompliancePolicySettingsReportR_42144a17 extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetDeviceStatusSummaryByCompliancePolicySettingsReportR_42144a17 and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/reports/getDeviceStatusSummaryByCompliancePolicySettingsReport');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invoke action getDeviceStatusSummaryByCompliancePolicySettingsReport
     * @param GetDeviceStatusSummaryByCompliancePolicySettingsReportP_da0ce5f0 $body The request body
     * @param GetDeviceStatusSummaryByCompliancePolicySettingsReportR_c93e3795|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StreamInterface|null>
     * @throws Exception
    */
    public function post(GetDeviceStatusSummaryByCompliancePolicySettingsReportP_da0ce5f0 $body, ?GetDeviceStatusSummaryByCompliancePolicySettingsReportR_c93e3795 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        /** @var Promise<StreamInterface|null> $result */
        $result = $this->requestAdapter->sendPrimitiveAsync($requestInfo, StreamInterface::class, $errorMappings);
        return $result;
    }

    /**
     * Invoke action getDeviceStatusSummaryByCompliancePolicySettingsReport
     * @param GetDeviceStatusSummaryByCompliancePolicySettingsReportP_da0ce5f0 $body The request body
     * @param GetDeviceStatusSummaryByCompliancePolicySettingsReportR_c93e3795|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(GetDeviceStatusSummaryByCompliancePolicySettingsReportP_da0ce5f0 $body, ?GetDeviceStatusSummaryByCompliancePolicySettingsReportR_c93e3795 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/octet-stream, application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return GetDeviceStatusSummaryByCompliancePolicySettingsReportR_42144a17
    */
    public function withUrl(string $rawUrl): GetDeviceStatusSummaryByCompliancePolicySettingsReportR_42144a17 {
        return new GetDeviceStatusSummaryByCompliancePolicySettingsReportR_42144a17($rawUrl, $this->requestAdapter);
    }

}

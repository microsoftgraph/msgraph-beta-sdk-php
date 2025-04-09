<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetMobileApplicationManagementAppConfigurationReport;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Psr\Http\Message\StreamInterface;

/**
 * Provides operations to call the getMobileApplicationManagementAppConfigurationReport method.
*/
class GetMobileApplicationManagementAppConfigurationReportRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetMobileApplicationManagementAppConfigurationReportRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/reports/getMobileApplicationManagementAppConfigurationReport');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invoke action getMobileApplicationManagementAppConfigurationReport
     * @param GetMobileApplicationManagementAppConfigurationReportPostRequestBody $body The request body
     * @param GetMobileApplicationManagementAppConfigurationReportRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StreamInterface|null>
     * @throws Exception
    */
    public function post(GetMobileApplicationManagementAppConfigurationReportPostRequestBody $body, ?GetMobileApplicationManagementAppConfigurationReportRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        /** @var Promise<StreamInterface|null> $result */
        $result = $this->requestAdapter->sendPrimitiveAsync($requestInfo, StreamInterface::class, $errorMappings);
        return $result;
    }

    /**
     * Invoke action getMobileApplicationManagementAppConfigurationReport
     * @param GetMobileApplicationManagementAppConfigurationReportPostRequestBody $body The request body
     * @param GetMobileApplicationManagementAppConfigurationReportRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(GetMobileApplicationManagementAppConfigurationReportPostRequestBody $body, ?GetMobileApplicationManagementAppConfigurationReportRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/octet-stream");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return GetMobileApplicationManagementAppConfigurationReportRequestBuilder
    */
    public function withUrl(string $rawUrl): GetMobileApplicationManagementAppConfigurationReportRequestBuilder {
        return new GetMobileApplicationManagementAppConfigurationReportRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

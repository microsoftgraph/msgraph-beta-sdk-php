<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\Reports\RetrieveCloudPcTroubleshootReports;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Psr\Http\Message\StreamInterface;

/**
 * Provides operations to call the retrieveCloudPcTroubleshootReports method.
*/
class RetrieveCloudPcTroubleshootReportsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new RetrieveCloudPcTroubleshootReportsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/virtualEndpoint/reports/retrieveCloudPcTroubleshootReports');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get troubleshooting reports for Cloud PCs. You can get a regional troubleshooting report, a report with troubleshooting details, a report with troubleshooting trends, or a report on the number of troubleshooting issues.
     * @param RetrieveCloudPcTroubleshootReportsPostRequestBody $body The request body
     * @param RetrieveCloudPcTroubleshootReportsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StreamInterface|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/cloudpcreports-retrievecloudpctroubleshootreports?view=graph-rest-beta Find more info here
    */
    public function post(RetrieveCloudPcTroubleshootReportsPostRequestBody $body, ?RetrieveCloudPcTroubleshootReportsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        /** @var Promise<StreamInterface|null> $result */
        $result = $this->requestAdapter->sendPrimitiveAsync($requestInfo, StreamInterface::class, $errorMappings);
        return $result;
    }

    /**
     * Get troubleshooting reports for Cloud PCs. You can get a regional troubleshooting report, a report with troubleshooting details, a report with troubleshooting trends, or a report on the number of troubleshooting issues.
     * @param RetrieveCloudPcTroubleshootReportsPostRequestBody $body The request body
     * @param RetrieveCloudPcTroubleshootReportsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(RetrieveCloudPcTroubleshootReportsPostRequestBody $body, ?RetrieveCloudPcTroubleshootReportsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return RetrieveCloudPcTroubleshootReportsRequestBuilder
    */
    public function withUrl(string $rawUrl): RetrieveCloudPcTroubleshootReportsRequestBuilder {
        return new RetrieveCloudPcTroubleshootReportsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

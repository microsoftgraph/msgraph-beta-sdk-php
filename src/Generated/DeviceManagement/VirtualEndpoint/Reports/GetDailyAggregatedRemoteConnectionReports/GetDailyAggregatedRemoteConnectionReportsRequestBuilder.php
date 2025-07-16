<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\Reports\GetDailyAggregatedRemoteConnectionReports;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Psr\Http\Message\StreamInterface;

/**
 * Provides operations to call the getDailyAggregatedRemoteConnectionReports method.
*/
class GetDailyAggregatedRemoteConnectionReportsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetDailyAggregatedRemoteConnectionReportsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/virtualEndpoint/reports/getDailyAggregatedRemoteConnectionReports');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the daily aggregated remote connection reports, such as round trip time, available bandwidth, and so on, in a given period.
     * @param GetDailyAggregatedRemoteConnectionReportsPostRequestBody $body The request body
     * @param GetDailyAggregatedRemoteConnectionReportsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StreamInterface|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/cloudpcreports-getdailyaggregatedremoteconnectionreports?view=graph-rest-beta Find more info here
    */
    public function post(GetDailyAggregatedRemoteConnectionReportsPostRequestBody $body, ?GetDailyAggregatedRemoteConnectionReportsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        /** @var Promise<StreamInterface|null> $result */
        $result = $this->requestAdapter->sendPrimitiveAsync($requestInfo, StreamInterface::class, $errorMappings);
        return $result;
    }

    /**
     * Get the daily aggregated remote connection reports, such as round trip time, available bandwidth, and so on, in a given period.
     * @param GetDailyAggregatedRemoteConnectionReportsPostRequestBody $body The request body
     * @param GetDailyAggregatedRemoteConnectionReportsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(GetDailyAggregatedRemoteConnectionReportsPostRequestBody $body, ?GetDailyAggregatedRemoteConnectionReportsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return GetDailyAggregatedRemoteConnectionReportsRequestBuilder
    */
    public function withUrl(string $rawUrl): GetDailyAggregatedRemoteConnectionReportsRequestBuilder {
        return new GetDailyAggregatedRemoteConnectionReportsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\VirtualEndpoint\Reports\GetRealTimeRemoteConnectionStatusWithCloudPcId;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Psr\Http\Message\StreamInterface;

/**
 * Provides operations to call the getRealTimeRemoteConnectionStatus method.
*/
class GetRealTimeRemoteConnectionStatusWithCloudPcIdRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetRealTimeRemoteConnectionStatusWithCloudPcIdRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $cloudPcId Usage: cloudPcId='{cloudPcId}'
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $cloudPcId = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/virtualEndpoint/reports/getRealTimeRemoteConnectionStatus(cloudPcId=\'{cloudPcId}\')');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['cloudPcId'] = $cloudPcId;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the real-time connection status information, such as signInStatus or daysSinceLastUse, for a Cloud PC.
     * @param GetRealTimeRemoteConnectionStatusWithCloudPcIdRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StreamInterface|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/cloudpcreports-getrealtimeremoteconnectionstatus?view=graph-rest-beta Find more info here
    */
    public function get(?GetRealTimeRemoteConnectionStatusWithCloudPcIdRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        /** @var Promise<StreamInterface|null> $result */
        $result = $this->requestAdapter->sendPrimitiveAsync($requestInfo, StreamInterface::class, $errorMappings);
        return $result;
    }

    /**
     * Get the real-time connection status information, such as signInStatus or daysSinceLastUse, for a Cloud PC.
     * @param GetRealTimeRemoteConnectionStatusWithCloudPcIdRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GetRealTimeRemoteConnectionStatusWithCloudPcIdRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/octet-stream, application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return GetRealTimeRemoteConnectionStatusWithCloudPcIdRequestBuilder
    */
    public function withUrl(string $rawUrl): GetRealTimeRemoteConnectionStatusWithCloudPcIdRequestBuilder {
        return new GetRealTimeRemoteConnectionStatusWithCloudPcIdRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

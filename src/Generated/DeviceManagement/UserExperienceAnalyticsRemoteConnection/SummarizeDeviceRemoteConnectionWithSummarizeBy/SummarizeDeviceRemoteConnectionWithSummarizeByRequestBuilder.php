<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsRemoteConnection\SummarizeDeviceRemoteConnectionWithSummarizeBy;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the summarizeDeviceRemoteConnection method.
*/
class SummarizeDeviceRemoteConnectionWithSummarizeByRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new SummarizeDeviceRemoteConnectionWithSummarizeByRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $summarizeBy Usage: summarizeBy='{summarizeBy}'
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $summarizeBy = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/userExperienceAnalyticsRemoteConnection/summarizeDeviceRemoteConnection(summarizeBy=\'{summarizeBy}\'){?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['summarizeBy'] = $summarizeBy;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The report will be retired on December 31, 2024. You can start using the Cloud PC connection quality report now via https://go.microsoft.com/fwlink/?linkid=2283835.
     * @param SummarizeDeviceRemoteConnectionWithSummarizeByRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SummarizeDeviceRemoteConnectionWithSummarizeByGetResponse|null>
     * @throws Exception
    */
    public function get(?SummarizeDeviceRemoteConnectionWithSummarizeByRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SummarizeDeviceRemoteConnectionWithSummarizeByGetResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The report will be retired on December 31, 2024. You can start using the Cloud PC connection quality report now via https://go.microsoft.com/fwlink/?linkid=2283835.
     * @param SummarizeDeviceRemoteConnectionWithSummarizeByRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SummarizeDeviceRemoteConnectionWithSummarizeByRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SummarizeDeviceRemoteConnectionWithSummarizeByRequestBuilder
    */
    public function withUrl(string $rawUrl): SummarizeDeviceRemoteConnectionWithSummarizeByRequestBuilder {
        return new SummarizeDeviceRemoteConnectionWithSummarizeByRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

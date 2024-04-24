<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\ManagedDevices\Item\GetCloudPcRemoteActionResults;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getCloudPcRemoteActionResults method.
*/
class GetCloudPcRemoteActionResultsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetCloudPcRemoteActionResultsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/managedDevices/{managedDevice%2Did}/getCloudPcRemoteActionResults(){?%24count,%24filter,%24search,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Check the Cloud PC-specified remote action results for a Cloud PC device. Cloud PC supports reprovision and resize remote actions.
     * @param GetCloudPcRemoteActionResultsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetCloudPcRemoteActionResultsGetResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/manageddevice-getcloudpcremoteactionresults?view=graph-rest-beta Find more info here
    */
    public function get(?GetCloudPcRemoteActionResultsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GetCloudPcRemoteActionResultsGetResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Check the Cloud PC-specified remote action results for a Cloud PC device. Cloud PC supports reprovision and resize remote actions.
     * @param GetCloudPcRemoteActionResultsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GetCloudPcRemoteActionResultsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return GetCloudPcRemoteActionResultsRequestBuilder
    */
    public function withUrl(string $rawUrl): GetCloudPcRemoteActionResultsRequestBuilder {
        return new GetCloudPcRemoteActionResultsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

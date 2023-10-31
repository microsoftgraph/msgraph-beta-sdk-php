<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\MicrosoftTunnelSites\Item\MicrosoftTunnelServers\Item\CreateServerLogCollectionRequest;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\MicrosoftTunnelServerLogCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the createServerLogCollectionRequest method.
*/
class CreateServerLogCollectionRequestRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new CreateServerLogCollectionRequestRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/microsoftTunnelSites/{microsoftTunnelSite%2Did}/microsoftTunnelServers/{microsoftTunnelServer%2Did}/createServerLogCollectionRequest');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invoke action createServerLogCollectionRequest
     * @param CreateServerLogCollectionRequestPostRequestBody $body The request body
     * @param CreateServerLogCollectionRequestRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MicrosoftTunnelServerLogCollectionResponse|null>
     * @throws Exception
    */
    public function post(CreateServerLogCollectionRequestPostRequestBody $body, ?CreateServerLogCollectionRequestRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MicrosoftTunnelServerLogCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Invoke action createServerLogCollectionRequest
     * @param CreateServerLogCollectionRequestPostRequestBody $body The request body
     * @param CreateServerLogCollectionRequestRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CreateServerLogCollectionRequestPostRequestBody $body, ?CreateServerLogCollectionRequestRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return CreateServerLogCollectionRequestRequestBuilder
    */
    public function withUrl(string $rawUrl): CreateServerLogCollectionRequestRequestBuilder {
        return new CreateServerLogCollectionRequestRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

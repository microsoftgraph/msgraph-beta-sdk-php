<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ChromeOSOnboardingSettings\Connect;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ChromeOSOnboardingStatus;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the connect method.
*/
class ConnectRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ConnectRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/chromeOSOnboardingSettings/connect');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invoke action connect
     * @param ConnectPostRequestBody $body The request body
     * @param ConnectRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ChromeOSOnboardingStatus|null>
     * @throws Exception
    */
    public function post(ConnectPostRequestBody $body, ?ConnectRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        /** @var Promise<ChromeOSOnboardingStatus|null> $result */
        $result = $this->requestAdapter->sendPrimitiveAsync($requestInfo, ChromeOSOnboardingStatus::class, $errorMappings);
        return $result;
    }

    /**
     * Invoke action connect
     * @param ConnectPostRequestBody $body The request body
     * @param ConnectRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ConnectPostRequestBody $body, ?ConnectRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
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
     * @return ConnectRequestBuilder
    */
    public function withUrl(string $rawUrl): ConnectRequestBuilder {
        return new ConnectRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

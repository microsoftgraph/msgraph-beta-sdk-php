<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\WipeManagedAppRegistrationByDeviceTag;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the wipeManagedAppRegistrationByDeviceTag method.
*/
class WipeManagedAppRegistrationByDeviceTagRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new WipeManagedAppRegistrationByDeviceTagRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/wipeManagedAppRegistrationByDeviceTag');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Issues a wipe operation on an app registration with specified device tag.
     * @param WipeManagedAppRegistrationByDeviceTagPostRequestBody $body The request body
     * @param WipeManagedAppRegistrationByDeviceTagRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function post(WipeManagedAppRegistrationByDeviceTagPostRequestBody $body, ?WipeManagedAppRegistrationByDeviceTagRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Issues a wipe operation on an app registration with specified device tag.
     * @param WipeManagedAppRegistrationByDeviceTagPostRequestBody $body The request body
     * @param WipeManagedAppRegistrationByDeviceTagRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(WipeManagedAppRegistrationByDeviceTagPostRequestBody $body, ?WipeManagedAppRegistrationByDeviceTagRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return WipeManagedAppRegistrationByDeviceTagRequestBuilder
    */
    public function withUrl(string $rawUrl): WipeManagedAppRegistrationByDeviceTagRequestBuilder {
        return new WipeManagedAppRegistrationByDeviceTagRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

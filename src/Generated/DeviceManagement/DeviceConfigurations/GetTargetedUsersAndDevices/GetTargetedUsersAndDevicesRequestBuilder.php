<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceConfigurations\GetTargetedUsersAndDevices;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getTargetedUsersAndDevices method.
*/
class GetTargetedUsersAndDevicesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetTargetedUsersAndDevicesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/deviceConfigurations/getTargetedUsersAndDevices');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invoke action getTargetedUsersAndDevices
     * @param GetTargetedUsersAndDevicesPostRequestBody $body The request body
     * @param GetTargetedUsersAndDevicesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetTargetedUsersAndDevicesPostResponse|null>
     * @throws Exception
    */
    public function post(GetTargetedUsersAndDevicesPostRequestBody $body, ?GetTargetedUsersAndDevicesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GetTargetedUsersAndDevicesPostResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Invoke action getTargetedUsersAndDevices
     * @param GetTargetedUsersAndDevicesPostRequestBody $body The request body
     * @param GetTargetedUsersAndDevicesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(GetTargetedUsersAndDevicesPostRequestBody $body, ?GetTargetedUsersAndDevicesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return GetTargetedUsersAndDevicesRequestBuilder
    */
    public function withUrl(string $rawUrl): GetTargetedUsersAndDevicesRequestBuilder {
        return new GetTargetedUsersAndDevicesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

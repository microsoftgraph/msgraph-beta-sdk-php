<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\CloudPCs\Item\SetDeviceName;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the setDeviceName method.
*/
class SetDeviceNameRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new SetDeviceNameRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/virtualEndpoint/cloudPCs/{cloudPC%2Did}/setDeviceName');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Set the operating system device name of a Cloud PC. This action runs asynchronously and changes the computer name, not the displayName property. To change the display name, use rename. This action supports Windows 365 Enterprise and Windows 365 Flex (formerly Frontline) Cloud PCs in dedicated mode. Use getSupportedCloudPcRemoteActions to check whether the action is available for a Cloud PC.
     * @param SetDeviceNamePostRequestBody $body The request body
     * @param SetDeviceNameRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/cloudpc-setdevicename?view=graph-rest-beta Find more info here
    */
    public function post(SetDeviceNamePostRequestBody $body, ?SetDeviceNameRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Set the operating system device name of a Cloud PC. This action runs asynchronously and changes the computer name, not the displayName property. To change the display name, use rename. This action supports Windows 365 Enterprise and Windows 365 Flex (formerly Frontline) Cloud PCs in dedicated mode. Use getSupportedCloudPcRemoteActions to check whether the action is available for a Cloud PC.
     * @param SetDeviceNamePostRequestBody $body The request body
     * @param SetDeviceNameRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(SetDeviceNamePostRequestBody $body, ?SetDeviceNameRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SetDeviceNameRequestBuilder
    */
    public function withUrl(string $rawUrl): SetDeviceNameRequestBuilder {
        return new SetDeviceNameRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

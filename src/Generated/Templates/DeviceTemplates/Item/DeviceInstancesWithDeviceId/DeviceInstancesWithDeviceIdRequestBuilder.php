<?php

namespace Microsoft\Graph\Beta\Generated\Templates\DeviceTemplates\Item\DeviceInstancesWithDeviceId;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\Device;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the deviceInstances property of the microsoft.graph.deviceTemplate entity.
*/
class DeviceInstancesWithDeviceIdRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new DeviceInstancesWithDeviceIdRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $deviceId Alternate key of device
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $deviceId = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/templates/deviceTemplates/{deviceTemplate%2Did}/deviceInstances(deviceId=\'{deviceId}\'){?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['deviceId'] = $deviceId;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get deviceInstances from templates
     * @param DeviceInstancesWithDeviceIdRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Device|null>
     * @throws Exception
    */
    public function get(?DeviceInstancesWithDeviceIdRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Device::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get deviceInstances from templates
     * @param DeviceInstancesWithDeviceIdRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DeviceInstancesWithDeviceIdRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DeviceInstancesWithDeviceIdRequestBuilder
    */
    public function withUrl(string $rawUrl): DeviceInstancesWithDeviceIdRequestBuilder {
        return new DeviceInstancesWithDeviceIdRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

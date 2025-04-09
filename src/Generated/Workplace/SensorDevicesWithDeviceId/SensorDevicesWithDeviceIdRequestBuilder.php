<?php

namespace Microsoft\Graph\Beta\Generated\Workplace\SensorDevicesWithDeviceId;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\WorkplaceSensorDevice;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the sensorDevices property of the microsoft.graph.workplace entity.
*/
class SensorDevicesWithDeviceIdRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new SensorDevicesWithDeviceIdRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $deviceId Alternate key of workplaceSensorDevice
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $deviceId = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/workplace/sensorDevices(deviceId=\'{deviceId}\'){?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['deviceId'] = $deviceId;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete a workplace sensor device.
     * @param SensorDevicesWithDeviceIdRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/workplacesensordevice-delete?view=graph-rest-beta Find more info here
    */
    public function delete(?SensorDevicesWithDeviceIdRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Get the properties of a workplace sensor device, including tags, MAC address, sensors, and more.
     * @param SensorDevicesWithDeviceIdRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WorkplaceSensorDevice|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/workplacesensordevice-get?view=graph-rest-beta Find more info here
    */
    public function get(?SensorDevicesWithDeviceIdRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WorkplaceSensorDevice::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of a workplace sensor device.
     * @param WorkplaceSensorDevice $body The request body
     * @param SensorDevicesWithDeviceIdRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WorkplaceSensorDevice|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/workplacesensordevice-update?view=graph-rest-beta Find more info here
    */
    public function patch(WorkplaceSensorDevice $body, ?SensorDevicesWithDeviceIdRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WorkplaceSensorDevice::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete a workplace sensor device.
     * @param SensorDevicesWithDeviceIdRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?SensorDevicesWithDeviceIdRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Get the properties of a workplace sensor device, including tags, MAC address, sensors, and more.
     * @param SensorDevicesWithDeviceIdRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SensorDevicesWithDeviceIdRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of a workplace sensor device.
     * @param WorkplaceSensorDevice $body The request body
     * @param SensorDevicesWithDeviceIdRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(WorkplaceSensorDevice $body, ?SensorDevicesWithDeviceIdRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * @return SensorDevicesWithDeviceIdRequestBuilder
    */
    public function withUrl(string $rawUrl): SensorDevicesWithDeviceIdRequestBuilder {
        return new SensorDevicesWithDeviceIdRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

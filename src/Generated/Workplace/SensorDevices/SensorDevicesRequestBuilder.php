<?php

namespace Microsoft\Graph\Beta\Generated\Workplace\SensorDevices;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\WorkplaceSensorDevice;
use Microsoft\Graph\Beta\Generated\Models\WorkplaceSensorDeviceCollectionResponse;
use Microsoft\Graph\Beta\Generated\Workplace\SensorDevices\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Workplace\SensorDevices\IngestTelemetry\IngestTelemetryRequestBuilder;
use Microsoft\Graph\Beta\Generated\Workplace\SensorDevices\Item\WorkplaceSensorDeviceItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the sensorDevices property of the microsoft.graph.workplace entity.
*/
class SensorDevicesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the ingestTelemetry method.
    */
    public function ingestTelemetry(): IngestTelemetryRequestBuilder {
        return new IngestTelemetryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the sensorDevices property of the microsoft.graph.workplace entity.
     * @param string $workplaceSensorDeviceId The unique identifier of workplaceSensorDevice
     * @return WorkplaceSensorDeviceItemRequestBuilder
    */
    public function byWorkplaceSensorDeviceId(string $workplaceSensorDeviceId): WorkplaceSensorDeviceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['workplaceSensorDevice%2Did'] = $workplaceSensorDeviceId;
        return new WorkplaceSensorDeviceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SensorDevicesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/workplace/sensorDevices{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get sensorDevices from workplace
     * @param SensorDevicesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WorkplaceSensorDeviceCollectionResponse|null>
     * @throws Exception
    */
    public function get(?SensorDevicesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WorkplaceSensorDeviceCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to sensorDevices for workplace
     * @param WorkplaceSensorDevice $body The request body
     * @param SensorDevicesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WorkplaceSensorDevice|null>
     * @throws Exception
    */
    public function post(WorkplaceSensorDevice $body, ?SensorDevicesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WorkplaceSensorDevice::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get sensorDevices from workplace
     * @param SensorDevicesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SensorDevicesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to sensorDevices for workplace
     * @param WorkplaceSensorDevice $body The request body
     * @param SensorDevicesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(WorkplaceSensorDevice $body, ?SensorDevicesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/workplace/sensorDevices';
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
     * @return SensorDevicesRequestBuilder
    */
    public function withUrl(string $rawUrl): SensorDevicesRequestBuilder {
        return new SensorDevicesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

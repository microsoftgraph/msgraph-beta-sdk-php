<?php

namespace Microsoft\Graph\Beta\Generated\Workplace;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Workplace;
use Microsoft\Graph\Beta\Generated\Workplace\SensorDevices\SensorDevicesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Workplace\SensorDevicesWithDeviceId\SensorDevicesWithDeviceIdRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the workplace singleton.
*/
class WorkplaceRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the sensorDevices property of the microsoft.graph.workplace entity.
    */
    public function sensorDevices(): SensorDevicesRequestBuilder {
        return new SensorDevicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WorkplaceRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/workplace{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get workplace
     * @param WorkplaceRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Workplace|null>
     * @throws Exception
    */
    public function get(?WorkplaceRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Workplace::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update workplace
     * @param Workplace $body The request body
     * @param WorkplaceRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Workplace|null>
     * @throws Exception
    */
    public function patch(Workplace $body, ?WorkplaceRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Workplace::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Provides operations to manage the sensorDevices property of the microsoft.graph.workplace entity.
     * @param string $deviceId Alternate key of workplaceSensorDevice
     * @return SensorDevicesWithDeviceIdRequestBuilder
    */
    public function sensorDevicesWithDeviceId(string $deviceId): SensorDevicesWithDeviceIdRequestBuilder {
        return new SensorDevicesWithDeviceIdRequestBuilder($this->pathParameters, $this->requestAdapter, $deviceId);
    }

    /**
     * Get workplace
     * @param WorkplaceRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WorkplaceRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update workplace
     * @param Workplace $body The request body
     * @param WorkplaceRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(Workplace $body, ?WorkplaceRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/workplace';
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
     * @return WorkplaceRequestBuilder
    */
    public function withUrl(string $rawUrl): WorkplaceRequestBuilder {
        return new WorkplaceRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\ComanagementEligibleDevices;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\DeviceManagement\ComanagementEligibleDevices\Count\CountRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\DeviceManagement\ComanagementEligibleDevices\Item\ComanagementEligibleDeviceItemRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Models\ComanagementEligibleDevice;
use Microsoft\\Graph\\Beta\\Generated\Models\ComanagementEligibleDeviceCollectionResponse;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the comanagementEligibleDevices property of the microsoft.graph.deviceManagement entity.
*/
class ComanagementEligibleDevicesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the comanagementEligibleDevices property of the microsoft.graph.deviceManagement entity.
     * @param string $comanagementEligibleDeviceId The unique identifier of comanagementEligibleDevice
     * @return ComanagementEligibleDeviceItemRequestBuilder
    */
    public function byComanagementEligibleDeviceId(string $comanagementEligibleDeviceId): ComanagementEligibleDeviceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['comanagementEligibleDevice%2Did'] = $comanagementEligibleDeviceId;
        return new ComanagementEligibleDeviceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ComanagementEligibleDevicesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/comanagementEligibleDevices{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The list of co-management eligible devices report
     * @param ComanagementEligibleDevicesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ComanagementEligibleDeviceCollectionResponse|null>
     * @throws Exception
    */
    public function get(?ComanagementEligibleDevicesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ComanagementEligibleDeviceCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to comanagementEligibleDevices for deviceManagement
     * @param ComanagementEligibleDevice $body The request body
     * @param ComanagementEligibleDevicesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ComanagementEligibleDevice|null>
     * @throws Exception
    */
    public function post(ComanagementEligibleDevice $body, ?ComanagementEligibleDevicesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ComanagementEligibleDevice::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The list of co-management eligible devices report
     * @param ComanagementEligibleDevicesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ComanagementEligibleDevicesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to comanagementEligibleDevices for deviceManagement
     * @param ComanagementEligibleDevice $body The request body
     * @param ComanagementEligibleDevicesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ComanagementEligibleDevice $body, ?ComanagementEligibleDevicesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ComanagementEligibleDevicesRequestBuilder
    */
    public function withUrl(string $rawUrl): ComanagementEligibleDevicesRequestBuilder {
        return new ComanagementEligibleDevicesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

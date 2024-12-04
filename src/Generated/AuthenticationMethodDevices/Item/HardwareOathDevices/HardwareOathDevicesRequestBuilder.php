<?php

namespace Microsoft\Graph\Beta\Generated\AuthenticationMethodDevices\Item\HardwareOathDevices;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\AuthenticationMethodDevices\Item\HardwareOathDevices\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\AuthenticationMethodDevices\Item\HardwareOathDevices\Item\HardwareOathTokenAuthenticationMethodDeviceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\HardwareOathTokenAuthenticationMethodDevice;
use Microsoft\Graph\Beta\Generated\Models\HardwareOathTokenAuthenticationMethodDeviceCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the hardwareOathDevices property of the microsoft.graph.authenticationMethodDevice entity.
*/
class HardwareOathDevicesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the hardwareOathDevices property of the microsoft.graph.authenticationMethodDevice entity.
     * @param string $hardwareOathTokenAuthenticationMethodDeviceId The unique identifier of hardwareOathTokenAuthenticationMethodDevice
     * @return HardwareOathTokenAuthenticationMethodDeviceItemRequestBuilder
    */
    public function byHardwareOathTokenAuthenticationMethodDeviceId(string $hardwareOathTokenAuthenticationMethodDeviceId): HardwareOathTokenAuthenticationMethodDeviceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['hardwareOathTokenAuthenticationMethodDevice%2Did'] = $hardwareOathTokenAuthenticationMethodDeviceId;
        return new HardwareOathTokenAuthenticationMethodDeviceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new HardwareOathDevicesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/authenticationMethodDevices/{authenticationMethodDevice%2Did}/hardwareOathDevices{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get hardwareOathDevices from authenticationMethodDevices
     * @param HardwareOathDevicesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<HardwareOathTokenAuthenticationMethodDeviceCollectionResponse|null>
     * @throws Exception
    */
    public function get(?HardwareOathDevicesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [HardwareOathTokenAuthenticationMethodDeviceCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to hardwareOathDevices for authenticationMethodDevices
     * @param HardwareOathTokenAuthenticationMethodDevice $body The request body
     * @param HardwareOathDevicesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<HardwareOathTokenAuthenticationMethodDevice|null>
     * @throws Exception
    */
    public function post(HardwareOathTokenAuthenticationMethodDevice $body, ?HardwareOathDevicesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [HardwareOathTokenAuthenticationMethodDevice::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get hardwareOathDevices from authenticationMethodDevices
     * @param HardwareOathDevicesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?HardwareOathDevicesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to hardwareOathDevices for authenticationMethodDevices
     * @param HardwareOathTokenAuthenticationMethodDevice $body The request body
     * @param HardwareOathDevicesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(HardwareOathTokenAuthenticationMethodDevice $body, ?HardwareOathDevicesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return HardwareOathDevicesRequestBuilder
    */
    public function withUrl(string $rawUrl): HardwareOathDevicesRequestBuilder {
        return new HardwareOathDevicesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Authentication\HardwareOathMethods\Item\Device\HardwareOathDevices\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\HardwareOathTokenAuthenticationMethodDevice;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Users\Item\Authentication\HardwareOathMethods\Item\Device\HardwareOathDevices\Item\AssignTo\AssignToRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the hardwareOathDevices property of the microsoft.graph.authenticationMethodDevice entity.
*/
class HardwareOathTokenAuthenticationMethodDeviceItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the assignTo property of the microsoft.graph.hardwareOathTokenAuthenticationMethodDevice entity.
    */
    public function assignTo(): AssignToRequestBuilder {
        return new AssignToRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new HardwareOathTokenAuthenticationMethodDeviceItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/authentication/hardwareOathMethods/{hardwareOathAuthenticationMethod%2Did}/device/hardwareOathDevices/{hardwareOathTokenAuthenticationMethodDevice%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property hardwareOathDevices for users
     * @param HardwareOathTokenAuthenticationMethodDeviceItemRequestB_aa1dc50f|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?HardwareOathTokenAuthenticationMethodDeviceItemRequestB_aa1dc50f $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Exposes the hardware OATH method in the directory.
     * @param HardwareOathTokenAuthenticationMethodDeviceItemRequestB_b4384836|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<HardwareOathTokenAuthenticationMethodDevice|null>
     * @throws Exception
    */
    public function get(?HardwareOathTokenAuthenticationMethodDeviceItemRequestB_b4384836 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [HardwareOathTokenAuthenticationMethodDevice::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property hardwareOathDevices in users
     * @param HardwareOathTokenAuthenticationMethodDevice $body The request body
     * @param HardwareOathTokenAuthenticationMethodDeviceItemRequestB_30216958|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<HardwareOathTokenAuthenticationMethodDevice|null>
     * @throws Exception
    */
    public function patch(HardwareOathTokenAuthenticationMethodDevice $body, ?HardwareOathTokenAuthenticationMethodDeviceItemRequestB_30216958 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [HardwareOathTokenAuthenticationMethodDevice::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property hardwareOathDevices for users
     * @param HardwareOathTokenAuthenticationMethodDeviceItemRequestB_aa1dc50f|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?HardwareOathTokenAuthenticationMethodDeviceItemRequestB_aa1dc50f $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Exposes the hardware OATH method in the directory.
     * @param HardwareOathTokenAuthenticationMethodDeviceItemRequestB_b4384836|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?HardwareOathTokenAuthenticationMethodDeviceItemRequestB_b4384836 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/users/{user%2Did}/authentication/hardwareOathMethods/{hardwareOathAuthenticationMethod%2Did}/device/hardwareOathDevices/{hardwareOathTokenAuthenticationMethodDevice%2Did}{?%24expand,%24select}';
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
     * Update the navigation property hardwareOathDevices in users
     * @param HardwareOathTokenAuthenticationMethodDevice $body The request body
     * @param HardwareOathTokenAuthenticationMethodDeviceItemRequestB_30216958|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(HardwareOathTokenAuthenticationMethodDevice $body, ?HardwareOathTokenAuthenticationMethodDeviceItemRequestB_30216958 $requestConfiguration = null): RequestInformation {
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
     * @return HardwareOathTokenAuthenticationMethodDeviceItemRequestBuilder
    */
    public function withUrl(string $rawUrl): HardwareOathTokenAuthenticationMethodDeviceItemRequestBuilder {
        return new HardwareOathTokenAuthenticationMethodDeviceItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

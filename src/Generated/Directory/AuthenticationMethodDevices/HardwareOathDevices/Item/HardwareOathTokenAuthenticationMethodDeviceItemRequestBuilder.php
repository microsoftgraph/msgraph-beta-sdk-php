<?php

namespace Microsoft\Graph\Beta\Generated\Directory\AuthenticationMethodDevices\HardwareOathDevices\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Directory\AuthenticationMethodDevices\HardwareOathDevices\Item\AssignTo\AssignToRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\HardwareOathTokenAuthenticationMethodDevice;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
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
        parent::__construct($requestAdapter, [], '{+baseurl}/directory/authenticationMethodDevices/hardwareOathDevices/{hardwareOathTokenAuthenticationMethodDevice%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete a Hardware OATH token. Token needs to be unassigned.
     * @param HardwareOathTokenAuthenticationMethodDeviceItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/authenticationmethoddevice-delete-hardwareoathdevices?view=graph-rest-beta Find more info here
    */
    public function delete(?HardwareOathTokenAuthenticationMethodDeviceItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties and relationships of a hardwareOathTokenAuthenticationMethodDevice object.
     * @param HardwareOathTokenAuthenticationMethodDeviceItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<HardwareOathTokenAuthenticationMethodDevice|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/hardwareoathtokenauthenticationmethoddevice-get?view=graph-rest-beta Find more info here
    */
    public function get(?HardwareOathTokenAuthenticationMethodDeviceItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [HardwareOathTokenAuthenticationMethodDevice::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of a hardwareOathTokenAuthenticationMethodDevice object. The token needs to unassigned.
     * @param HardwareOathTokenAuthenticationMethodDevice $body The request body
     * @param HardwareOathTokenAuthenticationMethodDeviceItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<HardwareOathTokenAuthenticationMethodDevice|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/hardwareoathtokenauthenticationmethoddevice-update?view=graph-rest-beta Find more info here
    */
    public function patch(HardwareOathTokenAuthenticationMethodDevice $body, ?HardwareOathTokenAuthenticationMethodDeviceItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [HardwareOathTokenAuthenticationMethodDevice::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete a Hardware OATH token. Token needs to be unassigned.
     * @param HardwareOathTokenAuthenticationMethodDeviceItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?HardwareOathTokenAuthenticationMethodDeviceItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Read the properties and relationships of a hardwareOathTokenAuthenticationMethodDevice object.
     * @param HardwareOathTokenAuthenticationMethodDeviceItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?HardwareOathTokenAuthenticationMethodDeviceItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of a hardwareOathTokenAuthenticationMethodDevice object. The token needs to unassigned.
     * @param HardwareOathTokenAuthenticationMethodDevice $body The request body
     * @param HardwareOathTokenAuthenticationMethodDeviceItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(HardwareOathTokenAuthenticationMethodDevice $body, ?HardwareOathTokenAuthenticationMethodDeviceItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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

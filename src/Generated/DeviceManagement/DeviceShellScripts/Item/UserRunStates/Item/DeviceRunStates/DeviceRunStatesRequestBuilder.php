<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\DeviceShellScripts\Item\UserRunStates\Item\DeviceRunStates;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\DeviceManagement\DeviceShellScripts\Item\UserRunStates\Item\DeviceRunStates\Count\CountRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\DeviceManagement\DeviceShellScripts\Item\UserRunStates\Item\DeviceRunStates\Item\DeviceManagementScriptDeviceStateItemRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Models\DeviceManagementScriptDeviceState;
use Microsoft\\Graph\\Beta\\Generated\Models\DeviceManagementScriptDeviceStateCollectionResponse;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the deviceRunStates property of the microsoft.graph.deviceManagementScriptUserState entity.
*/
class DeviceRunStatesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceRunStates property of the microsoft.graph.deviceManagementScriptUserState entity.
     * @param string $deviceManagementScriptDeviceStateId The unique identifier of deviceManagementScriptDeviceState
     * @return DeviceManagementScriptDeviceStateItemRequestBuilder
    */
    public function byDeviceManagementScriptDeviceStateId(string $deviceManagementScriptDeviceStateId): DeviceManagementScriptDeviceStateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceManagementScriptDeviceState%2Did'] = $deviceManagementScriptDeviceStateId;
        return new DeviceManagementScriptDeviceStateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DeviceRunStatesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/deviceShellScripts/{deviceShellScript%2Did}/userRunStates/{deviceManagementScriptUserState%2Did}/deviceRunStates{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * List of run states for this script across all devices of specific user.
     * @param DeviceRunStatesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceManagementScriptDeviceStateCollectionResponse|null>
     * @throws Exception
    */
    public function get(?DeviceRunStatesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementScriptDeviceStateCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to deviceRunStates for deviceManagement
     * @param DeviceManagementScriptDeviceState $body The request body
     * @param DeviceRunStatesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceManagementScriptDeviceState|null>
     * @throws Exception
    */
    public function post(DeviceManagementScriptDeviceState $body, ?DeviceRunStatesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementScriptDeviceState::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * List of run states for this script across all devices of specific user.
     * @param DeviceRunStatesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DeviceRunStatesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to deviceRunStates for deviceManagement
     * @param DeviceManagementScriptDeviceState $body The request body
     * @param DeviceRunStatesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DeviceManagementScriptDeviceState $body, ?DeviceRunStatesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DeviceRunStatesRequestBuilder
    */
    public function withUrl(string $rawUrl): DeviceRunStatesRequestBuilder {
        return new DeviceRunStatesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

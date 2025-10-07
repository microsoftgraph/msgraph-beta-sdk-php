<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\ManagedDevices\Item\ManagedDeviceMobileAppConfigurationStates;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\DeviceManagement\ManagedDevices\Item\ManagedDeviceMobileAppConfigurationStates\Count\CountRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\DeviceManagement\ManagedDevices\Item\ManagedDeviceMobileAppConfigurationStates\Item\ManagedDeviceMobileAppConfigurationStateItemRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Models\ManagedDeviceMobileAppConfigurationState;
use Microsoft\\Graph\\Beta\\Generated\Models\ManagedDeviceMobileAppConfigurationStateCollectionResponse;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the managedDeviceMobileAppConfigurationStates property of the microsoft.graph.managedDevice entity.
*/
class ManagedDeviceMobileAppConfigurationStatesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managedDeviceMobileAppConfigurationStates property of the microsoft.graph.managedDevice entity.
     * @param string $managedDeviceMobileAppConfigurationStateId The unique identifier of managedDeviceMobileAppConfigurationState
     * @return ManagedDeviceMobileAppConfigurationStateItemRequestBuilder
    */
    public function byManagedDeviceMobileAppConfigurationStateId(string $managedDeviceMobileAppConfigurationStateId): ManagedDeviceMobileAppConfigurationStateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedDeviceMobileAppConfigurationState%2Did'] = $managedDeviceMobileAppConfigurationStateId;
        return new ManagedDeviceMobileAppConfigurationStateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ManagedDeviceMobileAppConfigurationStatesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/managedDevices/{managedDevice%2Did}/managedDeviceMobileAppConfigurationStates{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Managed device mobile app configuration states for this device.
     * @param ManagedDeviceMobileAppConfigurationStatesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ManagedDeviceMobileAppConfigurationStateCollectionResponse|null>
     * @throws Exception
    */
    public function get(?ManagedDeviceMobileAppConfigurationStatesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ManagedDeviceMobileAppConfigurationStateCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to managedDeviceMobileAppConfigurationStates for deviceManagement
     * @param ManagedDeviceMobileAppConfigurationState $body The request body
     * @param ManagedDeviceMobileAppConfigurationStatesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ManagedDeviceMobileAppConfigurationState|null>
     * @throws Exception
    */
    public function post(ManagedDeviceMobileAppConfigurationState $body, ?ManagedDeviceMobileAppConfigurationStatesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ManagedDeviceMobileAppConfigurationState::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Managed device mobile app configuration states for this device.
     * @param ManagedDeviceMobileAppConfigurationStatesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ManagedDeviceMobileAppConfigurationStatesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to managedDeviceMobileAppConfigurationStates for deviceManagement
     * @param ManagedDeviceMobileAppConfigurationState $body The request body
     * @param ManagedDeviceMobileAppConfigurationStatesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ManagedDeviceMobileAppConfigurationState $body, ?ManagedDeviceMobileAppConfigurationStatesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ManagedDeviceMobileAppConfigurationStatesRequestBuilder
    */
    public function withUrl(string $rawUrl): ManagedDeviceMobileAppConfigurationStatesRequestBuilder {
        return new ManagedDeviceMobileAppConfigurationStatesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

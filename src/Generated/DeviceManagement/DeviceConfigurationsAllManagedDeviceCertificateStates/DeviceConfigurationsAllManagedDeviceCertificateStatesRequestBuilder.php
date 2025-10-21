<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\DeviceConfigurationsAllManagedDeviceCertificateStates;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\DeviceManagement\DeviceConfigurationsAllManagedDeviceCertificateStates\Count\CountRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\DeviceManagement\DeviceConfigurationsAllManagedDeviceCertificateStates\Item\ManagedAllDeviceCertificateStateItemRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Models\ManagedAllDeviceCertificateState;
use Microsoft\\Graph\\Beta\\Generated\Models\ManagedAllDeviceCertificateStateCollectionResponse;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the deviceConfigurationsAllManagedDeviceCertificateStates property of the microsoft.graph.deviceManagement entity.
*/
class DeviceConfigurationsAllManagedDeviceCertificateStatesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceConfigurationsAllManagedDeviceCertificateStates property of the microsoft.graph.deviceManagement entity.
     * @param string $managedAllDeviceCertificateStateId The unique identifier of managedAllDeviceCertificateState
     * @return ManagedAllDeviceCertificateStateItemRequestBuilder
    */
    public function byManagedAllDeviceCertificateStateId(string $managedAllDeviceCertificateStateId): ManagedAllDeviceCertificateStateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['managedAllDeviceCertificateState%2Did'] = $managedAllDeviceCertificateStateId;
        return new ManagedAllDeviceCertificateStateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DeviceConfigurationsAllManagedDeviceCertificateStatesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/deviceConfigurationsAllManagedDeviceCertificateStates{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Summary of all certificates for all devices.
     * @param DeviceConfigurationsAllManagedDeviceCertificateStatesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ManagedAllDeviceCertificateStateCollectionResponse|null>
     * @throws Exception
    */
    public function get(?DeviceConfigurationsAllManagedDeviceCertificateStatesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ManagedAllDeviceCertificateStateCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to deviceConfigurationsAllManagedDeviceCertificateStates for deviceManagement
     * @param ManagedAllDeviceCertificateState $body The request body
     * @param DeviceConfigurationsAllManagedDeviceCertificateStatesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ManagedAllDeviceCertificateState|null>
     * @throws Exception
    */
    public function post(ManagedAllDeviceCertificateState $body, ?DeviceConfigurationsAllManagedDeviceCertificateStatesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ManagedAllDeviceCertificateState::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Summary of all certificates for all devices.
     * @param DeviceConfigurationsAllManagedDeviceCertificateStatesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DeviceConfigurationsAllManagedDeviceCertificateStatesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to deviceConfigurationsAllManagedDeviceCertificateStates for deviceManagement
     * @param ManagedAllDeviceCertificateState $body The request body
     * @param DeviceConfigurationsAllManagedDeviceCertificateStatesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ManagedAllDeviceCertificateState $body, ?DeviceConfigurationsAllManagedDeviceCertificateStatesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DeviceConfigurationsAllManagedDeviceCertificateStatesRequestBuilder
    */
    public function withUrl(string $rawUrl): DeviceConfigurationsAllManagedDeviceCertificateStatesRequestBuilder {
        return new DeviceConfigurationsAllManagedDeviceCertificateStatesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\DeviceHealthScriptStates;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\DeviceHealthScriptStates\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ComanagedDevices\Item\DeviceHealthScriptStates\WithIdWithPolicyIdWithDeviceId\WithIdWithPolicyIdWithDeviceIdRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\DeviceHealthScriptPolicyState;
use Microsoft\Graph\Beta\Generated\Models\DeviceHealthScriptPolicyStateCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the deviceHealthScriptStates property of the microsoft.graph.managedDevice entity.
*/
class DeviceHealthScriptStatesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new DeviceHealthScriptStatesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/comanagedDevices/{managedDevice%2Did}/deviceHealthScriptStates{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Results of device health scripts that ran for this device. Default is empty list. This property is read-only.
     * @param DeviceHealthScriptStatesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceHealthScriptPolicyStateCollectionResponse|null>
     * @throws Exception
    */
    public function get(?DeviceHealthScriptStatesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceHealthScriptPolicyStateCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to deviceHealthScriptStates for deviceManagement
     * @param DeviceHealthScriptPolicyState $body Contains properties for policy run state of the device health script.
     * @param DeviceHealthScriptStatesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceHealthScriptPolicyState|null>
     * @throws Exception
    */
    public function post(DeviceHealthScriptPolicyState $body, ?DeviceHealthScriptStatesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceHealthScriptPolicyState::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Results of device health scripts that ran for this device. Default is empty list. This property is read-only.
     * @param DeviceHealthScriptStatesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DeviceHealthScriptStatesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        return $requestInfo;
    }

    /**
     * Create new navigation property to deviceHealthScriptStates for deviceManagement
     * @param DeviceHealthScriptPolicyState $body Contains properties for policy run state of the device health script.
     * @param DeviceHealthScriptStatesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DeviceHealthScriptPolicyState $body, ?DeviceHealthScriptStatesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Provides operations to manage the deviceHealthScriptStates property of the microsoft.graph.managedDevice entity.
     * @param string $deviceId Property in multi-part unique identifier of deviceHealthScriptPolicyState
     * @param string $id Property in multi-part unique identifier of deviceHealthScriptPolicyState
     * @param string $policyId Property in multi-part unique identifier of deviceHealthScriptPolicyState
     * @return WithIdWithPolicyIdWithDeviceIdRequestBuilder
    */
    public function withIdWithPolicyIdWithDeviceId(string $deviceId, string $id, string $policyId): WithIdWithPolicyIdWithDeviceIdRequestBuilder {
        return new WithIdWithPolicyIdWithDeviceIdRequestBuilder($this->pathParameters, $this->requestAdapter, $deviceId, $id, $policyId);
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return DeviceHealthScriptStatesRequestBuilder
    */
    public function withUrl(string $rawUrl): DeviceHealthScriptStatesRequestBuilder {
        return new DeviceHealthScriptStatesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

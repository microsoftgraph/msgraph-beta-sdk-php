<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\DeviceHealthScriptStates\WithIdWithPolicyIdWithDeviceId;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\DeviceHealthScriptPolicyState;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the deviceHealthScriptStates property of the microsoft.graph.managedDevice entity.
*/
class WithIdWithPolicyIdWithDeviceIdRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new WithIdWithPolicyIdWithDeviceIdRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $deviceId Property in multi-part unique identifier of deviceHealthScriptPolicyState
     * @param string|null $id Property in multi-part unique identifier of deviceHealthScriptPolicyState
     * @param string|null $policyId Property in multi-part unique identifier of deviceHealthScriptPolicyState
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $deviceId = null, ?string $id = null, ?string $policyId = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/managedDevices/{managedDevice%2Did}/deviceHealthScriptStates/id=\'{id}\',policyId=\'{policyId}\',deviceId=\'{deviceId}\'{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['deviceId'] = $deviceId;
            $urlTplParams['id'] = $id;
            $urlTplParams['policyId'] = $policyId;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property deviceHealthScriptStates for deviceManagement
     * @param WithIdWithPolicyIdWithDeviceIdRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?WithIdWithPolicyIdWithDeviceIdRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Results of device health scripts that ran for this device. Default is empty list. This property is read-only.
     * @param WithIdWithPolicyIdWithDeviceIdRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceHealthScriptPolicyState|null>
     * @throws Exception
    */
    public function get(?WithIdWithPolicyIdWithDeviceIdRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceHealthScriptPolicyState::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property deviceHealthScriptStates in deviceManagement
     * @param DeviceHealthScriptPolicyState $body Contains properties for policy run state of the device health script.
     * @param WithIdWithPolicyIdWithDeviceIdRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceHealthScriptPolicyState|null>
     * @throws Exception
    */
    public function patch(DeviceHealthScriptPolicyState $body, ?WithIdWithPolicyIdWithDeviceIdRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceHealthScriptPolicyState::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property deviceHealthScriptStates for deviceManagement
     * @param WithIdWithPolicyIdWithDeviceIdRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?WithIdWithPolicyIdWithDeviceIdRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/deviceManagement/managedDevices/{managedDevice%2Did}/deviceHealthScriptStates/id=\'{id}\',policyId=\'{policyId}\',deviceId=\'{deviceId}\'';
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
     * Results of device health scripts that ran for this device. Default is empty list. This property is read-only.
     * @param WithIdWithPolicyIdWithDeviceIdRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WithIdWithPolicyIdWithDeviceIdRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property deviceHealthScriptStates in deviceManagement
     * @param DeviceHealthScriptPolicyState $body Contains properties for policy run state of the device health script.
     * @param WithIdWithPolicyIdWithDeviceIdRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(DeviceHealthScriptPolicyState $body, ?WithIdWithPolicyIdWithDeviceIdRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/deviceManagement/managedDevices/{managedDevice%2Did}/deviceHealthScriptStates/id=\'{id}\',policyId=\'{policyId}\',deviceId=\'{deviceId}\'';
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
     * @return WithIdWithPolicyIdWithDeviceIdRequestBuilder
    */
    public function withUrl(string $rawUrl): WithIdWithPolicyIdWithDeviceIdRequestBuilder {
        return new WithIdWithPolicyIdWithDeviceIdRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

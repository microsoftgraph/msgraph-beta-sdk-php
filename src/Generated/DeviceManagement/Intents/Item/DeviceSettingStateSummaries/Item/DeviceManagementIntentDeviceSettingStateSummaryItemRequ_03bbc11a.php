<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\Intents\Item\DeviceSettingStateSummaries\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementIntentDeviceSettingStateSummary;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the deviceSettingStateSummaries property of the microsoft.graph.deviceManagementIntent entity. Original name: DeviceManagementIntentDeviceSettingStateSummaryItemRequestBuilder
*/
class DeviceManagementIntentDeviceSettingStateSummaryItemRequ_03bbc11a extends BaseRequestBuilder 
{
    /**
     * Instantiates a new DeviceManagementIntentDeviceSettingStateSummaryItemRequ_03bbc11a and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/intents/{deviceManagementIntent%2Did}/deviceSettingStateSummaries/{deviceManagementIntentDeviceSettingStateSummary%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property deviceSettingStateSummaries for deviceManagement
     * @param DeviceManagementIntentDeviceSettingStateSummaryItemRequ_44e26a16|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?DeviceManagementIntentDeviceSettingStateSummaryItemRequ_44e26a16 $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Collection of settings and their states and counts of devices that belong to corresponding state for all settings within the intent
     * @param DeviceManagementIntentDeviceSettingStateSummaryItemRequ_3797a334|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceManagementIntentDeviceSettingStateSummary|null>
     * @throws Exception
    */
    public function get(?DeviceManagementIntentDeviceSettingStateSummaryItemRequ_3797a334 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementIntentDeviceSettingStateSummary::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property deviceSettingStateSummaries in deviceManagement
     * @param DeviceManagementIntentDeviceSettingStateSummary $body The request body
     * @param DeviceManagementIntentDeviceSettingStateSummaryItemRequ_36ac6820|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceManagementIntentDeviceSettingStateSummary|null>
     * @throws Exception
    */
    public function patch(DeviceManagementIntentDeviceSettingStateSummary $body, ?DeviceManagementIntentDeviceSettingStateSummaryItemRequ_36ac6820 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementIntentDeviceSettingStateSummary::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property deviceSettingStateSummaries for deviceManagement
     * @param DeviceManagementIntentDeviceSettingStateSummaryItemRequ_44e26a16|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?DeviceManagementIntentDeviceSettingStateSummaryItemRequ_44e26a16 $requestConfiguration = null): RequestInformation {
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
     * Collection of settings and their states and counts of devices that belong to corresponding state for all settings within the intent
     * @param DeviceManagementIntentDeviceSettingStateSummaryItemRequ_3797a334|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DeviceManagementIntentDeviceSettingStateSummaryItemRequ_3797a334 $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property deviceSettingStateSummaries in deviceManagement
     * @param DeviceManagementIntentDeviceSettingStateSummary $body The request body
     * @param DeviceManagementIntentDeviceSettingStateSummaryItemRequ_36ac6820|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(DeviceManagementIntentDeviceSettingStateSummary $body, ?DeviceManagementIntentDeviceSettingStateSummaryItemRequ_36ac6820 $requestConfiguration = null): RequestInformation {
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
     * @return DeviceManagementIntentDeviceSettingStateSummaryItemRequ_03bbc11a
    */
    public function withUrl(string $rawUrl): DeviceManagementIntentDeviceSettingStateSummaryItemRequ_03bbc11a {
        return new DeviceManagementIntentDeviceSettingStateSummaryItemRequ_03bbc11a($rawUrl, $this->requestAdapter);
    }

}

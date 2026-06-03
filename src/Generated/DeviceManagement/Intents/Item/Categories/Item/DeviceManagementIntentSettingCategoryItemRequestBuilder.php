<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\Intents\Item\Categories\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Intents\Item\Categories\Item\SettingDefinitions\SettingDefinitionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Intents\Item\Categories\Item\Settings\SettingsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementIntentSettingCategory;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the categories property of the microsoft.graph.deviceManagementIntent entity.
*/
class DeviceManagementIntentSettingCategoryItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the settingDefinitions property of the microsoft.graph.deviceManagementSettingCategory entity.
    */
    public function settingDefinitions(): SettingDefinitionsRequestBuilder {
        return new SettingDefinitionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the settings property of the microsoft.graph.deviceManagementIntentSettingCategory entity.
    */
    public function settings(): SettingsRequestBuilder {
        return new SettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new DeviceManagementIntentSettingCategoryItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/intents/{deviceManagementIntent%2Did}/categories/{deviceManagementIntentSettingCategory%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property categories for deviceManagement
     * @param DeviceManagementIntentSettingCategoryItemRequestBuilder_2ca574c6|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?DeviceManagementIntentSettingCategoryItemRequestBuilder_2ca574c6 $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Collection of setting categories within the intent
     * @param DeviceManagementIntentSettingCategoryItemRequestBuilder_c8d3686e|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceManagementIntentSettingCategory|null>
     * @throws Exception
    */
    public function get(?DeviceManagementIntentSettingCategoryItemRequestBuilder_c8d3686e $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementIntentSettingCategory::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property categories in deviceManagement
     * @param DeviceManagementIntentSettingCategory $body The request body
     * @param DeviceManagementIntentSettingCategoryItemRequestBuilder_81aefb16|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceManagementIntentSettingCategory|null>
     * @throws Exception
    */
    public function patch(DeviceManagementIntentSettingCategory $body, ?DeviceManagementIntentSettingCategoryItemRequestBuilder_81aefb16 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementIntentSettingCategory::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property categories for deviceManagement
     * @param DeviceManagementIntentSettingCategoryItemRequestBuilder_2ca574c6|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?DeviceManagementIntentSettingCategoryItemRequestBuilder_2ca574c6 $requestConfiguration = null): RequestInformation {
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
     * Collection of setting categories within the intent
     * @param DeviceManagementIntentSettingCategoryItemRequestBuilder_c8d3686e|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DeviceManagementIntentSettingCategoryItemRequestBuilder_c8d3686e $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property categories in deviceManagement
     * @param DeviceManagementIntentSettingCategory $body The request body
     * @param DeviceManagementIntentSettingCategoryItemRequestBuilder_81aefb16|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(DeviceManagementIntentSettingCategory $body, ?DeviceManagementIntentSettingCategoryItemRequestBuilder_81aefb16 $requestConfiguration = null): RequestInformation {
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
     * @return DeviceManagementIntentSettingCategoryItemRequestBuilder
    */
    public function withUrl(string $rawUrl): DeviceManagementIntentSettingCategoryItemRequestBuilder {
        return new DeviceManagementIntentSettingCategoryItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

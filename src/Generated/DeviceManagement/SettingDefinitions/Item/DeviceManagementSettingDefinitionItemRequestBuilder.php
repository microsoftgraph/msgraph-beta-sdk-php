<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\SettingDefinitions\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementSettingDefinition;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the settingDefinitions property of the microsoft.graph.deviceManagement entity.
*/
class DeviceManagementSettingDefinitionItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new DeviceManagementSettingDefinitionItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/settingDefinitions/{deviceManagementSettingDefinition%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property settingDefinitions for deviceManagement
     * @param DeviceManagementSettingDefinitionItemRequestBuilderDele_c6eef4c4|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?DeviceManagementSettingDefinitionItemRequestBuilderDele_c6eef4c4 $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * The device management intent setting definitions
     * @param DeviceManagementSettingDefinitionItemRequestBuilderGetR_a3aa36a2|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceManagementSettingDefinition|null>
     * @throws Exception
    */
    public function get(?DeviceManagementSettingDefinitionItemRequestBuilderGetR_a3aa36a2 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementSettingDefinition::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property settingDefinitions in deviceManagement
     * @param DeviceManagementSettingDefinition $body The request body
     * @param DeviceManagementSettingDefinitionItemRequestBuilderPatc_3d3a4d5d|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceManagementSettingDefinition|null>
     * @throws Exception
    */
    public function patch(DeviceManagementSettingDefinition $body, ?DeviceManagementSettingDefinitionItemRequestBuilderPatc_3d3a4d5d $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementSettingDefinition::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property settingDefinitions for deviceManagement
     * @param DeviceManagementSettingDefinitionItemRequestBuilderDele_c6eef4c4|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?DeviceManagementSettingDefinitionItemRequestBuilderDele_c6eef4c4 $requestConfiguration = null): RequestInformation {
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
     * The device management intent setting definitions
     * @param DeviceManagementSettingDefinitionItemRequestBuilderGetR_a3aa36a2|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DeviceManagementSettingDefinitionItemRequestBuilderGetR_a3aa36a2 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/deviceManagement/settingDefinitions/{deviceManagementSettingDefinition%2Did}{?%24expand,%24select}';
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
     * Update the navigation property settingDefinitions in deviceManagement
     * @param DeviceManagementSettingDefinition $body The request body
     * @param DeviceManagementSettingDefinitionItemRequestBuilderPatc_3d3a4d5d|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(DeviceManagementSettingDefinition $body, ?DeviceManagementSettingDefinitionItemRequestBuilderPatc_3d3a4d5d $requestConfiguration = null): RequestInformation {
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
     * @return DeviceManagementSettingDefinitionItemRequestBuilder
    */
    public function withUrl(string $rawUrl): DeviceManagementSettingDefinitionItemRequestBuilder {
        return new DeviceManagementSettingDefinitionItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ComplianceSettings\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementConfigurationSettingDefinition;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the complianceSettings property of the microsoft.graph.deviceManagement entity.
*/
class DeviceManagementConfigurationSettingDefinitionItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new DeviceManagementConfigurationSettingDefinitionItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/complianceSettings/{deviceManagementConfigurationSettingDefinition%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property complianceSettings for deviceManagement
     * @param DeviceManagementConfigurationSettingDefinitionItemReque_f06ee41a|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?DeviceManagementConfigurationSettingDefinitionItemReque_f06ee41a $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * List of all ComplianceSettings
     * @param DeviceManagementConfigurationSettingDefinitionItemReque_b9e14d9c|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceManagementConfigurationSettingDefinition|null>
     * @throws Exception
    */
    public function get(?DeviceManagementConfigurationSettingDefinitionItemReque_b9e14d9c $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementConfigurationSettingDefinition::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property complianceSettings in deviceManagement
     * @param DeviceManagementConfigurationSettingDefinition $body The request body
     * @param DeviceManagementConfigurationSettingDefinitionItemReque_a40df461|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceManagementConfigurationSettingDefinition|null>
     * @throws Exception
    */
    public function patch(DeviceManagementConfigurationSettingDefinition $body, ?DeviceManagementConfigurationSettingDefinitionItemReque_a40df461 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementConfigurationSettingDefinition::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property complianceSettings for deviceManagement
     * @param DeviceManagementConfigurationSettingDefinitionItemReque_f06ee41a|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?DeviceManagementConfigurationSettingDefinitionItemReque_f06ee41a $requestConfiguration = null): RequestInformation {
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
     * List of all ComplianceSettings
     * @param DeviceManagementConfigurationSettingDefinitionItemReque_b9e14d9c|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DeviceManagementConfigurationSettingDefinitionItemReque_b9e14d9c $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/deviceManagement/complianceSettings/{deviceManagementConfigurationSettingDefinition%2Did}{?%24expand,%24select}';
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
     * Update the navigation property complianceSettings in deviceManagement
     * @param DeviceManagementConfigurationSettingDefinition $body The request body
     * @param DeviceManagementConfigurationSettingDefinitionItemReque_a40df461|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(DeviceManagementConfigurationSettingDefinition $body, ?DeviceManagementConfigurationSettingDefinitionItemReque_a40df461 $requestConfiguration = null): RequestInformation {
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
     * @return DeviceManagementConfigurationSettingDefinitionItemRequestBuilder
    */
    public function withUrl(string $rawUrl): DeviceManagementConfigurationSettingDefinitionItemRequestBuilder {
        return new DeviceManagementConfigurationSettingDefinitionItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

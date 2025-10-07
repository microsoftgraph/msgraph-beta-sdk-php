<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\Categories\Item\SettingDefinitions;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\DeviceManagement\Categories\Item\SettingDefinitions\Count\CountRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\DeviceManagement\Categories\Item\SettingDefinitions\Item\DeviceManagementSettingDefinitionItemRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Models\DeviceManagementSettingDefinition;
use Microsoft\\Graph\\Beta\\Generated\Models\DeviceManagementSettingDefinitionCollectionResponse;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the settingDefinitions property of the microsoft.graph.deviceManagementSettingCategory entity.
*/
class SettingDefinitionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the settingDefinitions property of the microsoft.graph.deviceManagementSettingCategory entity.
     * @param string $deviceManagementSettingDefinitionId The unique identifier of deviceManagementSettingDefinition
     * @return DeviceManagementSettingDefinitionItemRequestBuilder
    */
    public function byDeviceManagementSettingDefinitionId(string $deviceManagementSettingDefinitionId): DeviceManagementSettingDefinitionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceManagementSettingDefinition%2Did'] = $deviceManagementSettingDefinitionId;
        return new DeviceManagementSettingDefinitionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SettingDefinitionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/categories/{deviceManagementSettingCategory%2Did}/settingDefinitions{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The setting definitions this category contains
     * @param SettingDefinitionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceManagementSettingDefinitionCollectionResponse|null>
     * @throws Exception
    */
    public function get(?SettingDefinitionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementSettingDefinitionCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to settingDefinitions for deviceManagement
     * @param DeviceManagementSettingDefinition $body The request body
     * @param SettingDefinitionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceManagementSettingDefinition|null>
     * @throws Exception
    */
    public function post(DeviceManagementSettingDefinition $body, ?SettingDefinitionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementSettingDefinition::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The setting definitions this category contains
     * @param SettingDefinitionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SettingDefinitionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to settingDefinitions for deviceManagement
     * @param DeviceManagementSettingDefinition $body The request body
     * @param SettingDefinitionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DeviceManagementSettingDefinition $body, ?SettingDefinitionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SettingDefinitionsRequestBuilder
    */
    public function withUrl(string $rawUrl): SettingDefinitionsRequestBuilder {
        return new SettingDefinitionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

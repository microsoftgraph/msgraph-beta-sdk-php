<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\Templates\Item\Settings;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Templates\Item\Settings\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Templates\Item\Settings\Item\DeviceManagementSettingInstanceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementSettingInstance;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementSettingInstanceCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the settings property of the microsoft.graph.deviceManagementTemplate entity.
*/
class SettingsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the settings property of the microsoft.graph.deviceManagementTemplate entity.
     * @param string $deviceManagementSettingInstanceId The unique identifier of deviceManagementSettingInstance
     * @return DeviceManagementSettingInstanceItemRequestBuilder
    */
    public function byDeviceManagementSettingInstanceId(string $deviceManagementSettingInstanceId): DeviceManagementSettingInstanceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceManagementSettingInstance%2Did'] = $deviceManagementSettingInstanceId;
        return new DeviceManagementSettingInstanceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SettingsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/templates/{deviceManagementTemplate%2Did}/settings{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Collection of all settings this template has
     * @param SettingsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceManagementSettingInstanceCollectionResponse|null>
     * @throws Exception
    */
    public function get(?SettingsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementSettingInstanceCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to settings for deviceManagement
     * @param DeviceManagementSettingInstance $body The request body
     * @param SettingsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceManagementSettingInstance|null>
     * @throws Exception
    */
    public function post(DeviceManagementSettingInstance $body, ?SettingsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementSettingInstance::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Collection of all settings this template has
     * @param SettingsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SettingsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to settings for deviceManagement
     * @param DeviceManagementSettingInstance $body The request body
     * @param SettingsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DeviceManagementSettingInstance $body, ?SettingsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SettingsRequestBuilder
    */
    public function withUrl(string $rawUrl): SettingsRequestBuilder {
        return new SettingsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

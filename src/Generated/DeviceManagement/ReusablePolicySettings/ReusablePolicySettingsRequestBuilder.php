<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ReusablePolicySettings;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ReusablePolicySettings\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ReusablePolicySettings\Item\DeviceManagementReusablePolicySettingItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementReusablePolicySetting;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementReusablePolicySettingCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the reusablePolicySettings property of the microsoft.graph.deviceManagement entity.
*/
class ReusablePolicySettingsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the reusablePolicySettings property of the microsoft.graph.deviceManagement entity.
     * @param string $deviceManagementReusablePolicySettingId The unique identifier of deviceManagementReusablePolicySetting
     * @return DeviceManagementReusablePolicySettingItemRequestBuilder
    */
    public function byDeviceManagementReusablePolicySettingId(string $deviceManagementReusablePolicySettingId): DeviceManagementReusablePolicySettingItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceManagementReusablePolicySetting%2Did'] = $deviceManagementReusablePolicySettingId;
        return new DeviceManagementReusablePolicySettingItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ReusablePolicySettingsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/reusablePolicySettings{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * List of all reusable settings that can be referred in a policy
     * @param ReusablePolicySettingsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceManagementReusablePolicySettingCollectionResponse|null>
     * @throws Exception
    */
    public function get(?ReusablePolicySettingsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementReusablePolicySettingCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to reusablePolicySettings for deviceManagement
     * @param DeviceManagementReusablePolicySetting $body The request body
     * @param ReusablePolicySettingsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceManagementReusablePolicySetting|null>
     * @throws Exception
    */
    public function post(DeviceManagementReusablePolicySetting $body, ?ReusablePolicySettingsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementReusablePolicySetting::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * List of all reusable settings that can be referred in a policy
     * @param ReusablePolicySettingsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ReusablePolicySettingsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to reusablePolicySettings for deviceManagement
     * @param DeviceManagementReusablePolicySetting $body The request body
     * @param ReusablePolicySettingsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DeviceManagementReusablePolicySetting $body, ?ReusablePolicySettingsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return ReusablePolicySettingsRequestBuilder
    */
    public function withUrl(string $rawUrl): ReusablePolicySettingsRequestBuilder {
        return new ReusablePolicySettingsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

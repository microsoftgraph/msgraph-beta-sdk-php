<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\Intents\Item\Categories;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Intents\Item\Categories\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\Intents\Item\Categories\Item\DeviceManagementIntentSettingCategoryItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementIntentSettingCategory;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementIntentSettingCategoryCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the categories property of the microsoft.graph.deviceManagementIntent entity.
*/
class CategoriesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the categories property of the microsoft.graph.deviceManagementIntent entity.
     * @param string $deviceManagementIntentSettingCategoryId The unique identifier of deviceManagementIntentSettingCategory
     * @return DeviceManagementIntentSettingCategoryItemRequestBuilder
    */
    public function byDeviceManagementIntentSettingCategoryId(string $deviceManagementIntentSettingCategoryId): DeviceManagementIntentSettingCategoryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceManagementIntentSettingCategory%2Did'] = $deviceManagementIntentSettingCategoryId;
        return new DeviceManagementIntentSettingCategoryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CategoriesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/intents/{deviceManagementIntent%2Did}/categories{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Collection of setting categories within the intent
     * @param CategoriesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceManagementIntentSettingCategoryCollectionResponse|null>
     * @throws Exception
    */
    public function get(?CategoriesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementIntentSettingCategoryCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to categories for deviceManagement
     * @param DeviceManagementIntentSettingCategory $body The request body
     * @param CategoriesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceManagementIntentSettingCategory|null>
     * @throws Exception
    */
    public function post(DeviceManagementIntentSettingCategory $body, ?CategoriesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementIntentSettingCategory::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Collection of setting categories within the intent
     * @param CategoriesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CategoriesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to categories for deviceManagement
     * @param DeviceManagementIntentSettingCategory $body The request body
     * @param CategoriesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DeviceManagementIntentSettingCategory $body, ?CategoriesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CategoriesRequestBuilder
    */
    public function withUrl(string $rawUrl): CategoriesRequestBuilder {
        return new CategoriesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

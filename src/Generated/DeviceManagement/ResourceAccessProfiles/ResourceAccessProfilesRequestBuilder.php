<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ResourceAccessProfiles;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ResourceAccessProfiles\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ResourceAccessProfiles\Item\DeviceManagementResourceAccessProfileBaseItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ResourceAccessProfiles\QueryByPlatformType\QueryByPlatformTypeRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementResourceAccessProfileBase;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementResourceAccessProfileBaseCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the resourceAccessProfiles property of the microsoft.graph.deviceManagement entity.
*/
class ResourceAccessProfilesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the queryByPlatformType method.
    */
    public function queryByPlatformType(): QueryByPlatformTypeRequestBuilder {
        return new QueryByPlatformTypeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the resourceAccessProfiles property of the microsoft.graph.deviceManagement entity.
     * @param string $deviceManagementResourceAccessProfileBaseId The unique identifier of deviceManagementResourceAccessProfileBase
     * @return DeviceManagementResourceAccessProfileBaseItemRequestBuilder
    */
    public function byDeviceManagementResourceAccessProfileBaseId(string $deviceManagementResourceAccessProfileBaseId): DeviceManagementResourceAccessProfileBaseItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceManagementResourceAccessProfileBase%2Did'] = $deviceManagementResourceAccessProfileBaseId;
        return new DeviceManagementResourceAccessProfileBaseItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ResourceAccessProfilesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/resourceAccessProfiles{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Collection of resource access settings associated with account.
     * @param ResourceAccessProfilesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceManagementResourceAccessProfileBaseCollectionResponse|null>
     * @throws Exception
    */
    public function get(?ResourceAccessProfilesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementResourceAccessProfileBaseCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to resourceAccessProfiles for deviceManagement
     * @param DeviceManagementResourceAccessProfileBase $body The request body
     * @param ResourceAccessProfilesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceManagementResourceAccessProfileBase|null>
     * @throws Exception
    */
    public function post(DeviceManagementResourceAccessProfileBase $body, ?ResourceAccessProfilesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementResourceAccessProfileBase::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Collection of resource access settings associated with account.
     * @param ResourceAccessProfilesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ResourceAccessProfilesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to resourceAccessProfiles for deviceManagement
     * @param DeviceManagementResourceAccessProfileBase $body The request body
     * @param ResourceAccessProfilesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DeviceManagementResourceAccessProfileBase $body, ?ResourceAccessProfilesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ResourceAccessProfilesRequestBuilder
    */
    public function withUrl(string $rawUrl): ResourceAccessProfilesRequestBuilder {
        return new ResourceAccessProfilesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

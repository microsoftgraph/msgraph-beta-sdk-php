<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyMigrationReports\Item\GroupPolicySettingMappings;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyMigrationReports\Item\GroupPolicySettingMappings\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyMigrationReports\Item\GroupPolicySettingMappings\Item\GroupPolicySettingMappingItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\GroupPolicySettingMapping;
use Microsoft\Graph\Beta\Generated\Models\GroupPolicySettingMappingCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the groupPolicySettingMappings property of the microsoft.graph.groupPolicyMigrationReport entity.
*/
class GroupPolicySettingMappingsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the groupPolicySettingMappings property of the microsoft.graph.groupPolicyMigrationReport entity.
     * @param string $groupPolicySettingMappingId The unique identifier of groupPolicySettingMapping
     * @return GroupPolicySettingMappingItemRequestBuilder
    */
    public function byGroupPolicySettingMappingId(string $groupPolicySettingMappingId): GroupPolicySettingMappingItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['groupPolicySettingMapping%2Did'] = $groupPolicySettingMappingId;
        return new GroupPolicySettingMappingItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new GroupPolicySettingMappingsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/groupPolicyMigrationReports/{groupPolicyMigrationReport%2Did}/groupPolicySettingMappings{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * A list of group policy settings to MDM/Intune mappings.
     * @param GroupPolicySettingMappingsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GroupPolicySettingMappingCollectionResponse|null>
     * @throws Exception
    */
    public function get(?GroupPolicySettingMappingsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GroupPolicySettingMappingCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to groupPolicySettingMappings for deviceManagement
     * @param GroupPolicySettingMapping $body The request body
     * @param GroupPolicySettingMappingsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GroupPolicySettingMapping|null>
     * @throws Exception
    */
    public function post(GroupPolicySettingMapping $body, ?GroupPolicySettingMappingsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GroupPolicySettingMapping::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * A list of group policy settings to MDM/Intune mappings.
     * @param GroupPolicySettingMappingsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GroupPolicySettingMappingsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to groupPolicySettingMappings for deviceManagement
     * @param GroupPolicySettingMapping $body The request body
     * @param GroupPolicySettingMappingsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(GroupPolicySettingMapping $body, ?GroupPolicySettingMappingsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return GroupPolicySettingMappingsRequestBuilder
    */
    public function withUrl(string $rawUrl): GroupPolicySettingMappingsRequestBuilder {
        return new GroupPolicySettingMappingsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

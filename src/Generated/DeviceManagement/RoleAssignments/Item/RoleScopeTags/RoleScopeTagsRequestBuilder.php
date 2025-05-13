<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\RoleAssignments\Item\RoleScopeTags;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\RoleAssignments\Item\RoleScopeTags\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\RoleAssignments\Item\RoleScopeTags\Item\RoleScopeTagItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\RoleScopeTagCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the roleScopeTags property of the microsoft.graph.deviceAndAppManagementRoleAssignment entity.
*/
class RoleScopeTagsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the roleScopeTags property of the microsoft.graph.deviceAndAppManagementRoleAssignment entity.
     * @param string $roleScopeTagId The unique identifier of roleScopeTag
     * @return RoleScopeTagItemRequestBuilder
    */
    public function byRoleScopeTagId(string $roleScopeTagId): RoleScopeTagItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['roleScopeTag%2Did'] = $roleScopeTagId;
        return new RoleScopeTagItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new RoleScopeTagsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/roleAssignments/{deviceAndAppManagementRoleAssignment%2Did}/roleScopeTags{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Indicates the set of scope tags for the role assignment. These scope tags will limit the visibility of any Intune resources to those that match any of the scope tags in this collection.
     * @param RoleScopeTagsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<RoleScopeTagCollectionResponse|null>
     * @throws Exception
    */
    public function get(?RoleScopeTagsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [RoleScopeTagCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Indicates the set of scope tags for the role assignment. These scope tags will limit the visibility of any Intune resources to those that match any of the scope tags in this collection.
     * @param RoleScopeTagsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?RoleScopeTagsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return RoleScopeTagsRequestBuilder
    */
    public function withUrl(string $rawUrl): RoleScopeTagsRequestBuilder {
        return new RoleScopeTagsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

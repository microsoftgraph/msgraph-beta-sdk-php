<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\UpdatableAssets\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\UpdatableAssets\Item\MicrosoftGraphWindowsUpdatesAddMembers\MicrosoftGraphWindowsUpdatesAddMembersRequestBuilder;
use Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\UpdatableAssets\Item\MicrosoftGraphWindowsUpdatesAddMembersById\MicrosoftGraphWindowsUpdatesAddMembersByIdRequestBuilder;
use Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\UpdatableAssets\Item\MicrosoftGraphWindowsUpdatesRemoveMembers\MicrosoftGraphWindowsUpdatesRemoveMembersRequestBuilder;
use Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\UpdatableAssets\Item\MicrosoftGraphWindowsUpdatesRemoveMembersById\MicrosoftGraphWindowsUpdatesRemoveMembersByIdRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\WindowsUpdates\UpdatableAsset;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the updatableAssets property of the microsoft.graph.adminWindowsUpdates entity.
*/
class UpdatableAssetItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the addMembers method.
    */
    public function microsoftGraphWindowsUpdatesAddMembers(): MicrosoftGraphWindowsUpdatesAddMembersRequestBuilder {
        return new MicrosoftGraphWindowsUpdatesAddMembersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the addMembersById method.
    */
    public function microsoftGraphWindowsUpdatesAddMembersById(): MicrosoftGraphWindowsUpdatesAddMembersByIdRequestBuilder {
        return new MicrosoftGraphWindowsUpdatesAddMembersByIdRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the removeMembers method.
    */
    public function microsoftGraphWindowsUpdatesRemoveMembers(): MicrosoftGraphWindowsUpdatesRemoveMembersRequestBuilder {
        return new MicrosoftGraphWindowsUpdatesRemoveMembersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the removeMembersById method.
    */
    public function microsoftGraphWindowsUpdatesRemoveMembersById(): MicrosoftGraphWindowsUpdatesRemoveMembersByIdRequestBuilder {
        return new MicrosoftGraphWindowsUpdatesRemoveMembersByIdRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new UpdatableAssetItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/windows/updates/updatableAssets/{updatableAsset%2Did}{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete an updatableAssetGroup object. When an updatableAssetGroup object, its member updatableAsset objects are not deleted. This API is available in the following national cloud deployments.
     * @param UpdatableAssetItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/windowsupdates-updatableassetgroup-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?UpdatableAssetItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties of an azureADDevice object. This API is available in the following national cloud deployments.
     * @param UpdatableAssetItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UpdatableAsset|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/windowsupdates-azureaddevice-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?UpdatableAssetItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UpdatableAsset::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property updatableAssets in admin
     * @param UpdatableAsset $body The request body
     * @param UpdatableAssetItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UpdatableAsset|null>
     * @throws Exception
    */
    public function patch(UpdatableAsset $body, ?UpdatableAssetItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UpdatableAsset::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete an updatableAssetGroup object. When an updatableAssetGroup object, its member updatableAsset objects are not deleted. This API is available in the following national cloud deployments.
     * @param UpdatableAssetItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?UpdatableAssetItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json, application/json");
        return $requestInfo;
    }

    /**
     * Read the properties of an azureADDevice object. This API is available in the following national cloud deployments.
     * @param UpdatableAssetItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UpdatableAssetItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property updatableAssets in admin
     * @param UpdatableAsset $body The request body
     * @param UpdatableAssetItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(UpdatableAsset $body, ?UpdatableAssetItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * @return UpdatableAssetItemRequestBuilder
    */
    public function withUrl(string $rawUrl): UpdatableAssetItemRequestBuilder {
        return new UpdatableAssetItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

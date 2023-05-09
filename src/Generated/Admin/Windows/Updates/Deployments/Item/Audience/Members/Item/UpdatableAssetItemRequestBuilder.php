<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Deployments\Item\Audience\Members\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Deployments\Item\Audience\Members\Item\MicrosoftGraphWindowsUpdatesAddMembers\MicrosoftGraphWindowsUpdatesAddMembersRequestBuilder;
use Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Deployments\Item\Audience\Members\Item\MicrosoftGraphWindowsUpdatesAddMembersById\MicrosoftGraphWindowsUpdatesAddMembersByIdRequestBuilder;
use Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Deployments\Item\Audience\Members\Item\MicrosoftGraphWindowsUpdatesRemoveMembers\MicrosoftGraphWindowsUpdatesRemoveMembersRequestBuilder;
use Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Deployments\Item\Audience\Members\Item\MicrosoftGraphWindowsUpdatesRemoveMembersById\MicrosoftGraphWindowsUpdatesRemoveMembersByIdRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\WindowsUpdates\UpdatableAsset;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the members property of the microsoft.graph.windowsUpdates.deploymentAudience entity.
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
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/windows/updates/deployments/{deployment%2Did}/audience/members/{updatableAsset%2Did}{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property members for admin
     * @param UpdatableAssetItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function delete(?UpdatableAssetItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Specifies the assets to include in the audience.
     * @param UpdatableAssetItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?UpdatableAssetItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [UpdatableAsset::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property members in admin
     * @param UpdatableAsset $body The request body
     * @param UpdatableAssetItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(UpdatableAsset $body, ?UpdatableAssetItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [UpdatableAsset::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Delete navigation property members for admin
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
        return $requestInfo;
    }

    /**
     * Specifies the assets to include in the audience.
     * @param UpdatableAssetItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UpdatableAssetItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Update the navigation property members in admin
     * @param UpdatableAsset $body The request body
     * @param UpdatableAssetItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(UpdatableAsset $body, ?UpdatableAssetItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}

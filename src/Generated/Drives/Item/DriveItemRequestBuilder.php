<?php

namespace Microsoft\Graph\Beta\Generated\Drives\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Drives\Item\Activities\ActivitiesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Drives\Item\Activities\Item\ItemActivityOLDItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Drives\Item\Bundles\BundlesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Drives\Item\Bundles\Item\DriveItemItemRequestBuilder as MicrosoftGraphBetaGeneratedDrivesItemBundlesItemDriveItemItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Drives\Item\EscapedList\ListRequestBuilder;
use Microsoft\Graph\Beta\Generated\Drives\Item\Following\FollowingRequestBuilder;
use Microsoft\Graph\Beta\Generated\Drives\Item\Following\Item\DriveItemItemRequestBuilder as MicrosoftGraphBetaGeneratedDrivesItemFollowingItemDriveItemItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Drives\Item\Items\Item\DriveItemItemRequestBuilder as MicrosoftGraphBetaGeneratedDrivesItemItemsItemDriveItemItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Drives\Item\Items\ItemsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Drives\Item\Recent\RecentRequestBuilder;
use Microsoft\Graph\Beta\Generated\Drives\Item\Root\RootRequestBuilder;
use Microsoft\Graph\Beta\Generated\Drives\Item\SearchWithQ\SearchWithQRequestBuilder;
use Microsoft\Graph\Beta\Generated\Drives\Item\SharedWithMe\SharedWithMeRequestBuilder;
use Microsoft\Graph\Beta\Generated\Drives\Item\Special\Item\DriveItemItemRequestBuilder as MicrosoftGraphBetaGeneratedDrivesItemSpecialItemDriveItemItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Drives\Item\Special\SpecialRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\Drive;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class DriveItemRequestBuilder 
{
    /**
     * The activities property
    */
    public function activities(): ActivitiesRequestBuilder {
        return new ActivitiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The bundles property
    */
    public function bundles(): BundlesRequestBuilder {
        return new BundlesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The list property
    */
    public function escapedList(): ListRequestBuilder {
        return new ListRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The following property
    */
    public function following(): FollowingRequestBuilder {
        return new FollowingRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The items property
    */
    public function items(): ItemsRequestBuilder {
        return new ItemsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * The root property
    */
    public function root(): RootRequestBuilder {
        return new RootRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The special property
    */
    public function special(): SpecialRequestBuilder {
        return new SpecialRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.drives.item.activities.item collection
     * @param string $id Unique identifier of the item
     * @return ItemActivityOLDItemRequestBuilder
    */
    public function activitiesById(string $id): ItemActivityOLDItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['itemActivityOLD%2Did'] = $id;
        return new ItemActivityOLDItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.drives.item.bundles.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedDrivesItemBundlesItemDriveItemItemRequestBuilder
    */
    public function bundlesById(string $id): MicrosoftGraphBetaGeneratedDrivesItemBundlesItemDriveItemItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['driveItem%2Did'] = $id;
        return new MicrosoftGraphBetaGeneratedDrivesItemBundlesItemDriveItemItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DriveItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/drives/{drive%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete entity from drives
     * @param DriveItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?DriveItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Retrieve the properties and relationships of a Drive resource. A Drive is the top-level container for a file system, such as OneDrive or SharePoint document libraries.
     * @param DriveItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?DriveItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Update entity in drives
     * @param Drive $body 
     * @param DriveItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(Drive $body, ?DriveItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Delete entity from drives
     * @param DriveItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?DriveItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.drives.item.following.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedDrivesItemFollowingItemDriveItemItemRequestBuilder
    */
    public function followingById(string $id): MicrosoftGraphBetaGeneratedDrivesItemFollowingItemDriveItemItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['driveItem%2Did'] = $id;
        return new MicrosoftGraphBetaGeneratedDrivesItemFollowingItemDriveItemItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Retrieve the properties and relationships of a Drive resource. A Drive is the top-level container for a file system, such as OneDrive or SharePoint document libraries.
     * @param DriveItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?DriveItemRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(Drive::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.drives.item.items.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedDrivesItemItemsItemDriveItemItemRequestBuilder
    */
    public function itemsById(string $id): MicrosoftGraphBetaGeneratedDrivesItemItemsItemDriveItemItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['driveItem%2Did'] = $id;
        return new MicrosoftGraphBetaGeneratedDrivesItemItemsItemDriveItemItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update entity in drives
     * @param Drive $body 
     * @param DriveItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(Drive $body, ?DriveItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to call the recent method.
     * @return RecentRequestBuilder
    */
    public function recent(): RecentRequestBuilder {
        return new RecentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Provides operations to call the search method.
     * @param string $q Usage: q='{q}'
     * @return SearchWithQRequestBuilder
    */
    public function searchWithQ(string $q): SearchWithQRequestBuilder {
        return new SearchWithQRequestBuilder($this->pathParameters, $this->requestAdapter, $q);
    }

    /**
     * Provides operations to call the sharedWithMe method.
     * @return SharedWithMeRequestBuilder
    */
    public function sharedWithMe(): SharedWithMeRequestBuilder {
        return new SharedWithMeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.drives.item.special.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedDrivesItemSpecialItemDriveItemItemRequestBuilder
    */
    public function specialById(string $id): MicrosoftGraphBetaGeneratedDrivesItemSpecialItemDriveItemItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['driveItem%2Did'] = $id;
        return new MicrosoftGraphBetaGeneratedDrivesItemSpecialItemDriveItemItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}

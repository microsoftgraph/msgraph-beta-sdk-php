<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Teamwork\Sections\Item\Items;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\TeamworkSectionItem;
use Microsoft\Graph\Beta\Generated\Models\TeamworkSectionItemCollectionResponse;
use Microsoft\Graph\Beta\Generated\Users\Item\Teamwork\Sections\Item\Items\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Teamwork\Sections\Item\Items\Item\TeamworkSectionItemItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the items property of the microsoft.graph.teamworkSection entity.
*/
class ItemsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the items property of the microsoft.graph.teamworkSection entity.
     * @param string $teamworkSectionItemId The unique identifier of teamworkSectionItem
     * @return TeamworkSectionItemItemRequestBuilder
    */
    public function byTeamworkSectionItemId(string $teamworkSectionItemId): TeamworkSectionItemItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['teamworkSectionItem%2Did'] = $teamworkSectionItemId;
        return new TeamworkSectionItemItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ItemsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/teamwork/sections/{teamworkSection%2Did}/items{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the list of items in a section of a user's teamwork.
     * @param ItemsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TeamworkSectionItemCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/teamworksection-list-items?view=graph-rest-beta Find more info here
    */
    public function get(?ItemsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TeamworkSectionItemCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Add an item, such as a chat, channel, meeting, or community, to a user-defined section in a user's teamwork. Each item can belong to only one section at a time. You can only add items that are currently in a system-defined section. If the item is already in another user-defined section, use the move action to relocate it.
     * @param TeamworkSectionItem $body The request body
     * @param ItemsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TeamworkSectionItem|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/teamworksection-post-items?view=graph-rest-beta Find more info here
    */
    public function post(TeamworkSectionItem $body, ?ItemsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TeamworkSectionItem::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the list of items in a section of a user's teamwork.
     * @param ItemsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ItemsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Add an item, such as a chat, channel, meeting, or community, to a user-defined section in a user's teamwork. Each item can belong to only one section at a time. You can only add items that are currently in a system-defined section. If the item is already in another user-defined section, use the move action to relocate it.
     * @param TeamworkSectionItem $body The request body
     * @param ItemsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(TeamworkSectionItem $body, ?ItemsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ItemsRequestBuilder
    */
    public function withUrl(string $rawUrl): ItemsRequestBuilder {
        return new ItemsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

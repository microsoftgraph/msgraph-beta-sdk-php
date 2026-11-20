<?php

namespace Microsoft\Graph\Beta\Generated\Teams\Item\Channels\Item\Tags;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\TeamworkChannelTag;
use Microsoft\Graph\Beta\Generated\Models\TeamworkChannelTagCollectionResponse;
use Microsoft\Graph\Beta\Generated\Teams\Item\Channels\Item\Tags\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teams\Item\Channels\Item\Tags\Item\TeamworkChannelTagItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the tags property of the microsoft.graph.channel entity.
*/
class TagsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the tags property of the microsoft.graph.channel entity.
     * @param string $teamworkChannelTagId The unique identifier of teamworkChannelTag
     * @return TeamworkChannelTagItemRequestBuilder
    */
    public function byTeamworkChannelTagId(string $teamworkChannelTagId): TeamworkChannelTagItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['teamworkChannelTag%2Did'] = $teamworkChannelTagId;
        return new TeamworkChannelTagItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new TagsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/teams/{team%2Did}/channels/{channel%2Did}/tags{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the teamworkChannelTag objects owned by the specified channel.
     * @param TagsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TeamworkChannelTagCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/channel-list-tags?view=graph-rest-beta Find more info here
    */
    public function get(?TagsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TeamworkChannelTagCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a teamworkChannelTag owned by a channel and assign its initial members. The General channel doesn't support the creation of channel-owned tags; use the Create teamworkTag instead.
     * @param TeamworkChannelTag $body The request body
     * @param TagsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TeamworkChannelTag|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/channel-post-tags?view=graph-rest-beta Find more info here
    */
    public function post(TeamworkChannelTag $body, ?TagsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TeamworkChannelTag::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the teamworkChannelTag objects owned by the specified channel.
     * @param TagsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?TagsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a teamworkChannelTag owned by a channel and assign its initial members. The General channel doesn't support the creation of channel-owned tags; use the Create teamworkTag instead.
     * @param TeamworkChannelTag $body The request body
     * @param TagsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(TeamworkChannelTag $body, ?TagsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return TagsRequestBuilder
    */
    public function withUrl(string $rawUrl): TagsRequestBuilder {
        return new TagsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

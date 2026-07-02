<?php

namespace Microsoft\Graph\Beta\Generated\Teamwork\Messaging\CustomEmojis;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\TeamworkCustomEmoji;
use Microsoft\Graph\Beta\Generated\Models\TeamworkCustomEmojiCollectionResponse;
use Microsoft\Graph\Beta\Generated\Teamwork\Messaging\CustomEmojis\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teamwork\Messaging\CustomEmojis\Item\TeamworkCustomEmojiDisplayNameItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the customEmojis property of the microsoft.graph.teamworkMessaging entity.
*/
class CustomEmojisRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the customEmojis property of the microsoft.graph.teamworkMessaging entity.
     * @param string $teamworkCustomEmojiDisplayName The unique identifier of teamworkCustomEmoji
     * @return TeamworkCustomEmojiDisplayNameItemRequestBuilder
    */
    public function byTeamworkCustomEmojiDisplayName(string $teamworkCustomEmojiDisplayName): TeamworkCustomEmojiDisplayNameItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['teamworkCustomEmoji%2DdisplayName'] = $teamworkCustomEmojiDisplayName;
        return new TeamworkCustomEmojiDisplayNameItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CustomEmojisRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/teamwork/messaging/customEmojis{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get customEmojis from teamwork
     * @param CustomEmojisRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TeamworkCustomEmojiCollectionResponse|null>
     * @throws Exception
    */
    public function get(?CustomEmojisRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TeamworkCustomEmojiCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to customEmojis for teamwork
     * @param TeamworkCustomEmoji $body The request body
     * @param CustomEmojisRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TeamworkCustomEmoji|null>
     * @throws Exception
    */
    public function post(TeamworkCustomEmoji $body, ?CustomEmojisRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TeamworkCustomEmoji::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get customEmojis from teamwork
     * @param CustomEmojisRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CustomEmojisRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to customEmojis for teamwork
     * @param TeamworkCustomEmoji $body The request body
     * @param CustomEmojisRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(TeamworkCustomEmoji $body, ?CustomEmojisRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CustomEmojisRequestBuilder
    */
    public function withUrl(string $rawUrl): CustomEmojisRequestBuilder {
        return new CustomEmojisRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

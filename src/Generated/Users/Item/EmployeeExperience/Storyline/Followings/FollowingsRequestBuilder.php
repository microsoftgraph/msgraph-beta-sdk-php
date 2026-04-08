<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\EmployeeExperience\Storyline\Followings;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\StorylineFollowing;
use Microsoft\Graph\Beta\Generated\Models\StorylineFollowingCollectionResponse;
use Microsoft\Graph\Beta\Generated\Users\Item\EmployeeExperience\Storyline\Followings\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\EmployeeExperience\Storyline\Followings\Item\StorylineFollowingItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the followings property of the microsoft.graph.storyline entity.
*/
class FollowingsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the followings property of the microsoft.graph.storyline entity.
     * @param string $storylineFollowingId The unique identifier of storylineFollowing
     * @return StorylineFollowingItemRequestBuilder
    */
    public function byStorylineFollowingId(string $storylineFollowingId): StorylineFollowingItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['storylineFollowing%2Did'] = $storylineFollowingId;
        return new StorylineFollowingItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new FollowingsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/employeeExperience/storyline/followings{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve a list of users whose storyline the specified user is currently following.
     * @param FollowingsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StorylineFollowingCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/storyline-list-followings?view=graph-rest-beta Find more info here
    */
    public function get(?FollowingsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [StorylineFollowingCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to followings for users
     * @param StorylineFollowing $body The request body
     * @param FollowingsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StorylineFollowing|null>
     * @throws Exception
    */
    public function post(StorylineFollowing $body, ?FollowingsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [StorylineFollowing::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve a list of users whose storyline the specified user is currently following.
     * @param FollowingsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?FollowingsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to followings for users
     * @param StorylineFollowing $body The request body
     * @param FollowingsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(StorylineFollowing $body, ?FollowingsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return FollowingsRequestBuilder
    */
    public function withUrl(string $rawUrl): FollowingsRequestBuilder {
        return new FollowingsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

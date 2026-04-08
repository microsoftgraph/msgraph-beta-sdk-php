<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\EmployeeExperience\Storyline\Followers;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\StorylineFollower;
use Microsoft\Graph\Beta\Generated\Models\StorylineFollowerCollectionResponse;
use Microsoft\Graph\Beta\Generated\Users\Item\EmployeeExperience\Storyline\Followers\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\EmployeeExperience\Storyline\Followers\Item\StorylineFollowerItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the followers property of the microsoft.graph.storyline entity.
*/
class FollowersRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the followers property of the microsoft.graph.storyline entity.
     * @param string $storylineFollowerId The unique identifier of storylineFollower
     * @return StorylineFollowerItemRequestBuilder
    */
    public function byStorylineFollowerId(string $storylineFollowerId): StorylineFollowerItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['storylineFollower%2Did'] = $storylineFollowerId;
        return new StorylineFollowerItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new FollowersRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/employeeExperience/storyline/followers{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve a list of users who are following a specified user's storyline.
     * @param FollowersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StorylineFollowerCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/storyline-list-followers?view=graph-rest-beta Find more info here
    */
    public function get(?FollowersRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [StorylineFollowerCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to followers for users
     * @param StorylineFollower $body The request body
     * @param FollowersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StorylineFollower|null>
     * @throws Exception
    */
    public function post(StorylineFollower $body, ?FollowersRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [StorylineFollower::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve a list of users who are following a specified user's storyline.
     * @param FollowersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?FollowersRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to followers for users
     * @param StorylineFollower $body The request body
     * @param FollowersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(StorylineFollower $body, ?FollowersRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return FollowersRequestBuilder
    */
    public function withUrl(string $rawUrl): FollowersRequestBuilder {
        return new FollowersRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

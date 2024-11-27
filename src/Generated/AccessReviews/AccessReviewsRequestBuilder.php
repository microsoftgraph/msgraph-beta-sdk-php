<?php

namespace Microsoft\Graph\Beta\Generated\AccessReviews;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\AccessReviews\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\AccessReviews\Item\AccessReviewItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\AccessReview;
use Microsoft\Graph\Beta\Generated\Models\AccessReviewCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the collection of accessReview entities.
*/
class AccessReviewsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of accessReview entities.
     * @param string $accessReviewId The unique identifier of accessReview
     * @return AccessReviewItemRequestBuilder
    */
    public function byAccessReviewId(string $accessReviewId): AccessReviewItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['accessReview%2Did'] = $accessReviewId;
        return new AccessReviewItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AccessReviewsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/accessReviews{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve the accessReview objects for a particular businessFlowTemplate. A list of zero or more accessReview objects are returned, for each one-time and recurring access review that was created with that business flow template.  Business flow template IDs are case sensitive. If many access reviews match the filter, to improve efficiency and avoid timeouts, retrieve the result set in pages, by including both the $top query parameter with a page size, for example 100, and the $skip=0 query parameter in the request. These parameters can be included even when you don't anticipate that the request spans multiple pages. When a result set spans multiple pages, Microsoft Graph returns that page with an @odata.nextLink property in the response that contains a URL to the next page of results. If that property is present, continue making requests with the @odata.nextLink URL in each response, until all the results are returned, as described in paging Microsoft Graph data in your app. The accessReview objects returned by this API don't include nested structure properties such as settings, or relationships.  To retrieve an access review settings or relationships, use the get accessReview API.
     * @param AccessReviewsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AccessReviewCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/accessreview-list?view=graph-rest-beta Find more info here
    */
    public function get(?AccessReviewsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AccessReviewCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * In the Microsoft Entra access reviews feature, create a new accessReview object. Before making this request, the caller must have previously retrieved the list of business flow templates, to have the value of businessFlowTemplateId to include in the request. After making this request, the caller should create a programControl, to link the access review to a program.  
     * @param AccessReview $body The request body
     * @param AccessReviewsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AccessReview|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/accessreview-create?view=graph-rest-beta Find more info here
    */
    public function post(AccessReview $body, ?AccessReviewsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AccessReview::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve the accessReview objects for a particular businessFlowTemplate. A list of zero or more accessReview objects are returned, for each one-time and recurring access review that was created with that business flow template.  Business flow template IDs are case sensitive. If many access reviews match the filter, to improve efficiency and avoid timeouts, retrieve the result set in pages, by including both the $top query parameter with a page size, for example 100, and the $skip=0 query parameter in the request. These parameters can be included even when you don't anticipate that the request spans multiple pages. When a result set spans multiple pages, Microsoft Graph returns that page with an @odata.nextLink property in the response that contains a URL to the next page of results. If that property is present, continue making requests with the @odata.nextLink URL in each response, until all the results are returned, as described in paging Microsoft Graph data in your app. The accessReview objects returned by this API don't include nested structure properties such as settings, or relationships.  To retrieve an access review settings or relationships, use the get accessReview API.
     * @param AccessReviewsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AccessReviewsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * In the Microsoft Entra access reviews feature, create a new accessReview object. Before making this request, the caller must have previously retrieved the list of business flow templates, to have the value of businessFlowTemplateId to include in the request. After making this request, the caller should create a programControl, to link the access review to a program.  
     * @param AccessReview $body The request body
     * @param AccessReviewsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AccessReview $body, ?AccessReviewsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AccessReviewsRequestBuilder
    */
    public function withUrl(string $rawUrl): AccessReviewsRequestBuilder {
        return new AccessReviewsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

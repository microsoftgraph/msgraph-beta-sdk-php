<?php

namespace Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\ReviewSets;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\ReviewSets\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\ReviewSets\Item\ReviewSetItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\Ediscovery\ReviewSet;
use Microsoft\Graph\Beta\Generated\Models\Ediscovery\ReviewSetCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the reviewSets property of the microsoft.graph.ediscovery.case entity.
*/
class ReviewSetsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the reviewSets property of the microsoft.graph.ediscovery.case entity.
     * @param string $reviewSetId The unique identifier of reviewSet
     * @return ReviewSetItemRequestBuilder
    */
    public function byReviewSetId(string $reviewSetId): ReviewSetItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['reviewSet%2Did'] = $reviewSetId;
        return new ReviewSetItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ReviewSetsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/compliance/ediscovery/cases/{case%2Did}/reviewSets{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve the properties and relationships of a reviewSet object.
     * @param ReviewSetsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ReviewSetCollectionResponse|null>
     * @throws Exception
    */
    public function get(?ReviewSetsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ReviewSetCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new reviewSet object. The request body contains the display name of the review set, which is the only writable property.
     * @param ReviewSet $body The request body
     * @param ReviewSetsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ReviewSet|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/ediscovery-case-post-reviewsets?view=graph-rest-beta Find more info here
    */
    public function post(ReviewSet $body, ?ReviewSetsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ReviewSet::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve the properties and relationships of a reviewSet object.
     * @param ReviewSetsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ReviewSetsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new reviewSet object. The request body contains the display name of the review set, which is the only writable property.
     * @param ReviewSet $body The request body
     * @param ReviewSetsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ReviewSet $body, ?ReviewSetsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ReviewSetsRequestBuilder
    */
    public function withUrl(string $rawUrl): ReviewSetsRequestBuilder {
        return new ReviewSetsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

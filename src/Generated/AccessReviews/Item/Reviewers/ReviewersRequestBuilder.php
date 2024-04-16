<?php

namespace Microsoft\Graph\Beta\Generated\AccessReviews\Item\Reviewers;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\AccessReviews\Item\Reviewers\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\AccessReviews\Item\Reviewers\Item\AccessReviewReviewerItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\AccessReviewReviewer;
use Microsoft\Graph\Beta\Generated\Models\AccessReviewReviewerCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the reviewers property of the microsoft.graph.accessReview entity.
*/
class ReviewersRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the reviewers property of the microsoft.graph.accessReview entity.
     * @param string $accessReviewReviewerId The unique identifier of accessReviewReviewer
     * @return AccessReviewReviewerItemRequestBuilder
    */
    public function byAccessReviewReviewerId(string $accessReviewReviewerId): AccessReviewReviewerItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['accessReviewReviewer%2Did'] = $accessReviewReviewerId;
        return new AccessReviewReviewerItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ReviewersRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/accessReviews/{accessReview%2Did}/reviewers{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * In the Microsoft Entra access reviews feature, retrieve the reviewers of an accessReview object.
     * @param ReviewersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AccessReviewReviewerCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/accessreview-listreviewers?view=graph-rest-1.0 Find more info here
    */
    public function get(?ReviewersRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AccessReviewReviewerCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * In the Microsoft Entra access reviews feature, update an existing accessReview object to add another user as a reviewer.  This operation is only permitted for an access review that isn't yet completed, and only for an access review where the reviewers are explicitly specified. This operation isn't permitted for an access review in which users review their own access, and not intended for an access review in which the group owners are assigned as the reviewers. 
     * @param AccessReviewReviewer $body The request body
     * @param ReviewersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AccessReviewReviewer|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/accessreview-addreviewer?view=graph-rest-1.0 Find more info here
    */
    public function post(AccessReviewReviewer $body, ?ReviewersRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AccessReviewReviewer::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * In the Microsoft Entra access reviews feature, retrieve the reviewers of an accessReview object.
     * @param ReviewersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ReviewersRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * In the Microsoft Entra access reviews feature, update an existing accessReview object to add another user as a reviewer.  This operation is only permitted for an access review that isn't yet completed, and only for an access review where the reviewers are explicitly specified. This operation isn't permitted for an access review in which users review their own access, and not intended for an access review in which the group owners are assigned as the reviewers. 
     * @param AccessReviewReviewer $body The request body
     * @param ReviewersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AccessReviewReviewer $body, ?ReviewersRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ReviewersRequestBuilder
    */
    public function withUrl(string $rawUrl): ReviewersRequestBuilder {
        return new ReviewersRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

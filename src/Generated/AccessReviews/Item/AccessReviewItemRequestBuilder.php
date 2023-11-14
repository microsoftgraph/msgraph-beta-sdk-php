<?php

namespace Microsoft\Graph\Beta\Generated\AccessReviews\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\AccessReviews\Item\ApplyDecisions\ApplyDecisionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\AccessReviews\Item\Decisions\DecisionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\AccessReviews\Item\Instances\InstancesRequestBuilder;
use Microsoft\Graph\Beta\Generated\AccessReviews\Item\MyDecisions\MyDecisionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\AccessReviews\Item\ResetDecisions\ResetDecisionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\AccessReviews\Item\Reviewers\ReviewersRequestBuilder;
use Microsoft\Graph\Beta\Generated\AccessReviews\Item\SendReminder\SendReminderRequestBuilder;
use Microsoft\Graph\Beta\Generated\AccessReviews\Item\Stop\StopRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\AccessReview;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the collection of accessReview entities.
*/
class AccessReviewItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the applyDecisions method.
    */
    public function applyDecisions(): ApplyDecisionsRequestBuilder {
        return new ApplyDecisionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the decisions property of the microsoft.graph.accessReview entity.
    */
    public function decisions(): DecisionsRequestBuilder {
        return new DecisionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the instances property of the microsoft.graph.accessReview entity.
    */
    public function instances(): InstancesRequestBuilder {
        return new InstancesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the myDecisions property of the microsoft.graph.accessReview entity.
    */
    public function myDecisions(): MyDecisionsRequestBuilder {
        return new MyDecisionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the resetDecisions method.
    */
    public function resetDecisions(): ResetDecisionsRequestBuilder {
        return new ResetDecisionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the reviewers property of the microsoft.graph.accessReview entity.
    */
    public function reviewers(): ReviewersRequestBuilder {
        return new ReviewersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sendReminder method.
    */
    public function sendReminder(): SendReminderRequestBuilder {
        return new SendReminderRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the stop method.
    */
    public function stop(): StopRequestBuilder {
        return new StopRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new AccessReviewItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/accessReviews/{accessReview%2Did}{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * In the Microsoft Entra access reviews feature, delete an accessReview object. This API is available in the following national cloud deployments.
     * @param AccessReviewItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/accessreview-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?AccessReviewItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * In the Microsoft Entra access reviews feature, retrieve an accessReview object.   To retrieve the reviewers of the access review, use the list accessReview reviewers API. To retrieve the decisions of the access review, use the list accessReview decisions API, or the list my accessReview decisions API. If this is a recurring access review, no decisions will be associated with the recurring access review series. Instead, use the instances relationship of that series to retrieve an accessReview collection of the past, current, and future instances of the access review. Each past and current instance will have decisions. This API is available in the following national cloud deployments.
     * @param AccessReviewItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AccessReview|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/accessreview-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?AccessReviewItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AccessReview::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * In the Microsoft Entra access reviews feature, update an existing accessReview object to change one or more of its properties. This API is not intended to change the reviewers or decisions of a review.  To change the reviewers, use the addReviewer or removeReviewer APIs.  To stop an already-started one-time review, or an already-started instance of a recurring review, early, use the stop API. To apply the decisions to the target group or app access rights, use the apply API.  This API is available in the following national cloud deployments.
     * @param AccessReview $body The request body
     * @param AccessReviewItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AccessReview|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/accessreview-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(AccessReview $body, ?AccessReviewItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AccessReview::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * In the Microsoft Entra access reviews feature, delete an accessReview object. This API is available in the following national cloud deployments.
     * @param AccessReviewItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?AccessReviewItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * In the Microsoft Entra access reviews feature, retrieve an accessReview object.   To retrieve the reviewers of the access review, use the list accessReview reviewers API. To retrieve the decisions of the access review, use the list accessReview decisions API, or the list my accessReview decisions API. If this is a recurring access review, no decisions will be associated with the recurring access review series. Instead, use the instances relationship of that series to retrieve an accessReview collection of the past, current, and future instances of the access review. Each past and current instance will have decisions. This API is available in the following national cloud deployments.
     * @param AccessReviewItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AccessReviewItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * In the Microsoft Entra access reviews feature, update an existing accessReview object to change one or more of its properties. This API is not intended to change the reviewers or decisions of a review.  To change the reviewers, use the addReviewer or removeReviewer APIs.  To stop an already-started one-time review, or an already-started instance of a recurring review, early, use the stop API. To apply the decisions to the target group or app access rights, use the apply API.  This API is available in the following national cloud deployments.
     * @param AccessReview $body The request body
     * @param AccessReviewItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(AccessReview $body, ?AccessReviewItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * @return AccessReviewItemRequestBuilder
    */
    public function withUrl(string $rawUrl): AccessReviewItemRequestBuilder {
        return new AccessReviewItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

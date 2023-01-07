<?php

namespace Microsoft\Graph\Beta\Generated\AccessReviews\Item\Instances\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\AccessReviews\Item\Instances\Item\ApplyDecisions\ApplyDecisionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\AccessReviews\Item\Instances\Item\Decisions\DecisionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\AccessReviews\Item\Instances\Item\MyDecisions\MyDecisionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\AccessReviews\Item\Instances\Item\ResetDecisions\ResetDecisionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\AccessReviews\Item\Instances\Item\Reviewers\Item\AccessReviewReviewerItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\AccessReviews\Item\Instances\Item\Reviewers\ReviewersRequestBuilder;
use Microsoft\Graph\Beta\Generated\AccessReviews\Item\Instances\Item\SendReminder\SendReminderRequestBuilder;
use Microsoft\Graph\Beta\Generated\AccessReviews\Item\Instances\Item\Stop\StopRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\AccessReview;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class AccessReviewItemRequestBuilder 
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
     * Provides operations to manage the myDecisions property of the microsoft.graph.accessReview entity.
    */
    public function myDecisions(): MyDecisionsRequestBuilder {
        return new MyDecisionsRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Instantiates a new AccessReviewItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/accessReviews/{accessReview%2Did}/instances/{accessReview%2Did1}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property instances for accessReviews
     * @param AccessReviewItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?AccessReviewItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * The collection of access reviews instances past, present and future, if this object is a recurring access review.
     * @param AccessReviewItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?AccessReviewItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property instances in accessReviews
     * @param AccessReview $body The request body
     * @param AccessReviewItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(AccessReview $body, ?AccessReviewItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
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
     * Provides operations to manage the decisions property of the microsoft.graph.accessReview entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Beta\Generated\AccessReviews\Item\Instances\Item\Decisions\Item\AccessReviewDecisionItemRequestBuilder
    */
    public function decisionsById(string $id): \Microsoft\Graph\Beta\Generated\AccessReviews\Item\Instances\Item\Decisions\Item\AccessReviewDecisionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['accessReviewDecision%2Did'] = $id;
        return new \Microsoft\Graph\Beta\Generated\AccessReviews\Item\Instances\Item\Decisions\Item\AccessReviewDecisionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete navigation property instances for accessReviews
     * @param AccessReviewItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?AccessReviewItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * The collection of access reviews instances past, present and future, if this object is a recurring access review.
     * @param AccessReviewItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?AccessReviewItemRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [AccessReview::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the myDecisions property of the microsoft.graph.accessReview entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Beta\Generated\AccessReviews\Item\Instances\Item\MyDecisions\Item\AccessReviewDecisionItemRequestBuilder
    */
    public function myDecisionsById(string $id): \Microsoft\Graph\Beta\Generated\AccessReviews\Item\Instances\Item\MyDecisions\Item\AccessReviewDecisionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['accessReviewDecision%2Did'] = $id;
        return new \Microsoft\Graph\Beta\Generated\AccessReviews\Item\Instances\Item\MyDecisions\Item\AccessReviewDecisionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property instances in accessReviews
     * @param AccessReview $body The request body
     * @param AccessReviewItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(AccessReview $body, ?AccessReviewItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [AccessReview::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the reviewers property of the microsoft.graph.accessReview entity.
     * @param string $id Unique identifier of the item
     * @return AccessReviewReviewerItemRequestBuilder
    */
    public function reviewersById(string $id): AccessReviewReviewerItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['accessReviewReviewer%2Did'] = $id;
        return new AccessReviewReviewerItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}

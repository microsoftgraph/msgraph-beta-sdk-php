<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\PendingAccessReviewInstances\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\AccessReviewInstance;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Users\Item\PendingAccessReviewInstances\Item\AcceptRecommendations\AcceptRecommendationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\PendingAccessReviewInstances\Item\ApplyDecisions\ApplyDecisionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\PendingAccessReviewInstances\Item\BatchRecordDecisions\BatchRecordDecisionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\PendingAccessReviewInstances\Item\ContactedReviewers\ContactedReviewersRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\PendingAccessReviewInstances\Item\ContactedReviewers\Item\AccessReviewReviewerItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\PendingAccessReviewInstances\Item\Decisions\DecisionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\PendingAccessReviewInstances\Item\Decisions\Item\AccessReviewInstanceDecisionItemItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\PendingAccessReviewInstances\Item\Definition\DefinitionRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\PendingAccessReviewInstances\Item\ResetDecisions\ResetDecisionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\PendingAccessReviewInstances\Item\SendReminder\SendReminderRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\PendingAccessReviewInstances\Item\Stages\Item\AccessReviewStageItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\PendingAccessReviewInstances\Item\Stages\StagesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\PendingAccessReviewInstances\Item\Stop\StopRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;
use Psr\Http\Message\StreamInterface;

/**
 * Provides operations to manage the pendingAccessReviewInstances property of the microsoft.graph.user entity.
*/
class AccessReviewInstanceItemRequestBuilder 
{
    /**
     * Provides operations to call the acceptRecommendations method.
    */
    public function acceptRecommendations(): AcceptRecommendationsRequestBuilder {
        return new AcceptRecommendationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the applyDecisions method.
    */
    public function applyDecisions(): ApplyDecisionsRequestBuilder {
        return new ApplyDecisionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the batchRecordDecisions method.
    */
    public function batchRecordDecisions(): BatchRecordDecisionsRequestBuilder {
        return new BatchRecordDecisionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the contactedReviewers property of the microsoft.graph.accessReviewInstance entity.
    */
    public function contactedReviewers(): ContactedReviewersRequestBuilder {
        return new ContactedReviewersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the decisions property of the microsoft.graph.accessReviewInstance entity.
    */
    public function decisions(): DecisionsRequestBuilder {
        return new DecisionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the definition property of the microsoft.graph.accessReviewInstance entity.
    */
    public function definition(): DefinitionRequestBuilder {
        return new DefinitionRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Provides operations to call the sendReminder method.
    */
    public function sendReminder(): SendReminderRequestBuilder {
        return new SendReminderRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the stages property of the microsoft.graph.accessReviewInstance entity.
    */
    public function stages(): StagesRequestBuilder {
        return new StagesRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Instantiates a new AccessReviewInstanceItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/users/{user%2Did}/pendingAccessReviewInstances/{accessReviewInstance%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Provides operations to manage the contactedReviewers property of the microsoft.graph.accessReviewInstance entity.
     * @param string $id Unique identifier of the item
     * @return AccessReviewReviewerItemRequestBuilder
    */
    public function contactedReviewersById(string $id): AccessReviewReviewerItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['accessReviewReviewer%2Did'] = $id;
        return new AccessReviewReviewerItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the decisions property of the microsoft.graph.accessReviewInstance entity.
     * @param string $id Unique identifier of the item
     * @return AccessReviewInstanceDecisionItemItemRequestBuilder
    */
    public function decisionsById(string $id): AccessReviewInstanceDecisionItemItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['accessReviewInstanceDecisionItem%2Did'] = $id;
        return new AccessReviewInstanceDecisionItemItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete navigation property pendingAccessReviewInstances for users
     * @param AccessReviewInstanceItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function delete(?AccessReviewInstanceItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendPrimitiveAsync($requestInfo, StreamInterface::class, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Navigation property to get list of access reviews pending approval by reviewer.
     * @param AccessReviewInstanceItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?AccessReviewInstanceItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [AccessReviewInstance::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property pendingAccessReviewInstances in users
     * @param AccessReviewInstance $body The request body
     * @param AccessReviewInstanceItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(AccessReviewInstance $body, ?AccessReviewInstanceItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [AccessReviewInstance::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the stages property of the microsoft.graph.accessReviewInstance entity.
     * @param string $id Unique identifier of the item
     * @return AccessReviewStageItemRequestBuilder
    */
    public function stagesById(string $id): AccessReviewStageItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['accessReviewStage%2Did'] = $id;
        return new AccessReviewStageItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete navigation property pendingAccessReviewInstances for users
     * @param AccessReviewInstanceItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?AccessReviewInstanceItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Navigation property to get list of access reviews pending approval by reviewer.
     * @param AccessReviewInstanceItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AccessReviewInstanceItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
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
     * Update the navigation property pendingAccessReviewInstances in users
     * @param AccessReviewInstance $body The request body
     * @param AccessReviewInstanceItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(AccessReviewInstance $body, ?AccessReviewInstanceItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}

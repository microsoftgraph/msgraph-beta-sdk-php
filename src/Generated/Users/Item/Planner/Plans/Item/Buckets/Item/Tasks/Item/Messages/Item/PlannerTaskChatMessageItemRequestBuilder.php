<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Planner\Plans\Item\Buckets\Item\Tasks\Item\Messages\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\PlannerTaskChatMessage;
use Microsoft\Graph\Beta\Generated\Users\Item\Planner\Plans\Item\Buckets\Item\Tasks\Item\Messages\Item\SetReaction\SetReactionRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Planner\Plans\Item\Buckets\Item\Tasks\Item\Messages\Item\UnsetReaction\UnsetReactionRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the messages property of the microsoft.graph.plannerTask entity.
*/
class PlannerTaskChatMessageItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the setReaction method.
    */
    public function setReaction(): SetReactionRequestBuilder {
        return new SetReactionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the unsetReaction method.
    */
    public function unsetReaction(): UnsetReactionRequestBuilder {
        return new UnsetReactionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new PlannerTaskChatMessageItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/planner/plans/{plannerPlan%2Did}/buckets/{plannerBucket%2Did}/tasks/{plannerTask%2Did}/messages/{plannerTaskChatMessage%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property messages for users
     * @param PlannerTaskChatMessageItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?PlannerTaskChatMessageItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read-only. Nullable. Chat messages associated with the task.
     * @param PlannerTaskChatMessageItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PlannerTaskChatMessage|null>
     * @throws Exception
    */
    public function get(?PlannerTaskChatMessageItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PlannerTaskChatMessage::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property messages in users
     * @param PlannerTaskChatMessage $body The request body
     * @param PlannerTaskChatMessageItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PlannerTaskChatMessage|null>
     * @throws Exception
    */
    public function patch(PlannerTaskChatMessage $body, ?PlannerTaskChatMessageItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PlannerTaskChatMessage::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property messages for users
     * @param PlannerTaskChatMessageItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?PlannerTaskChatMessageItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Read-only. Nullable. Chat messages associated with the task.
     * @param PlannerTaskChatMessageItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?PlannerTaskChatMessageItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property messages in users
     * @param PlannerTaskChatMessage $body The request body
     * @param PlannerTaskChatMessageItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(PlannerTaskChatMessage $body, ?PlannerTaskChatMessageItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return PlannerTaskChatMessageItemRequestBuilder
    */
    public function withUrl(string $rawUrl): PlannerTaskChatMessageItemRequestBuilder {
        return new PlannerTaskChatMessageItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

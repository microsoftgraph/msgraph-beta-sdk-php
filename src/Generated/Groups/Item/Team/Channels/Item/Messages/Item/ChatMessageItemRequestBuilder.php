<?php

namespace Microsoft\Graph\Beta\Generated\Groups\Item\Team\Channels\Item\Messages\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Groups\Item\Team\Channels\Item\Messages\Item\HostedContents\HostedContentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Team\Channels\Item\Messages\Item\Replies\RepliesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Team\Channels\Item\Messages\Item\SetReaction\SetReactionRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Team\Channels\Item\Messages\Item\SoftDelete\SoftDeleteRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Team\Channels\Item\Messages\Item\UndoSoftDelete\UndoSoftDeleteRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Team\Channels\Item\Messages\Item\UnsetReaction\UnsetReactionRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ChatMessage;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the messages property of the microsoft.graph.channel entity.
*/
class ChatMessageItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the hostedContents property of the microsoft.graph.chatMessage entity.
    */
    public function hostedContents(): HostedContentsRequestBuilder {
        return new HostedContentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the replies property of the microsoft.graph.chatMessage entity.
    */
    public function replies(): RepliesRequestBuilder {
        return new RepliesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the setReaction method.
    */
    public function setReaction(): SetReactionRequestBuilder {
        return new SetReactionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the softDelete method.
    */
    public function softDelete(): SoftDeleteRequestBuilder {
        return new SoftDeleteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the undoSoftDelete method.
    */
    public function undoSoftDelete(): UndoSoftDeleteRequestBuilder {
        return new UndoSoftDeleteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the unsetReaction method.
    */
    public function unsetReaction(): UnsetReactionRequestBuilder {
        return new UnsetReactionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ChatMessageItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/groups/{group%2Did}/team/channels/{channel%2Did}/messages/{chatMessage%2Did}{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property messages for groups
     * @param ChatMessageItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function delete(?ChatMessageItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Retrieve a single message or a message reply in a channel or a chat.
     * @param ChatMessageItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://learn.microsoft.com/graph/api/chatmessage-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?ChatMessageItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [ChatMessage::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update a chatMessage object. You can update all the properties of chatMessage in delegated permissions scenarios, except for the policyViolation property and read-only properties. The policyViolation property is the only property that can be updated in application permissions scenarios. Updating works only for chats where conversation members are Microsoft Teams users. If one of the members is using Skype, the operation fails. This method does not support federation. Only the user in the tenant who sent the message can perform data loss prevention (DLP) updates on the specified chat message.
     * @param ChatMessage $body The request body
     * @param ChatMessageItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://learn.microsoft.com/graph/api/chatmessage-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(ChatMessage $body, ?ChatMessageItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [ChatMessage::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Delete navigation property messages for groups
     * @param ChatMessageItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ChatMessageItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Retrieve a single message or a message reply in a channel or a chat.
     * @param ChatMessageItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ChatMessageItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Update a chatMessage object. You can update all the properties of chatMessage in delegated permissions scenarios, except for the policyViolation property and read-only properties. The policyViolation property is the only property that can be updated in application permissions scenarios. Updating works only for chats where conversation members are Microsoft Teams users. If one of the members is using Skype, the operation fails. This method does not support federation. Only the user in the tenant who sent the message can perform data loss prevention (DLP) updates on the specified chat message.
     * @param ChatMessage $body The request body
     * @param ChatMessageItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(ChatMessage $body, ?ChatMessageItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return ChatMessageItemRequestBuilder
    */
    public function withUrl(string $rawUrl): ChatMessageItemRequestBuilder {
        return new ChatMessageItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

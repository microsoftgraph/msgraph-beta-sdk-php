<?php

namespace Microsoft\Graph\Beta\Generated\App\Calls\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\App\Calls\Item\AddLargeGalleryView\AddLargeGalleryViewRequestBuilder;
use Microsoft\Graph\Beta\Generated\App\Calls\Item\Answer\AnswerRequestBuilder;
use Microsoft\Graph\Beta\Generated\App\Calls\Item\AudioRoutingGroups\AudioRoutingGroupsRequestBuilder;
use Microsoft\Graph\Beta\Generated\App\Calls\Item\CancelMediaProcessing\CancelMediaProcessingRequestBuilder;
use Microsoft\Graph\Beta\Generated\App\Calls\Item\ChangeScreenSharingRole\ChangeScreenSharingRoleRequestBuilder;
use Microsoft\Graph\Beta\Generated\App\Calls\Item\ContentSharingSessions\ContentSharingSessionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\App\Calls\Item\KeepAlive\KeepAliveRequestBuilder;
use Microsoft\Graph\Beta\Generated\App\Calls\Item\Mute\MuteRequestBuilder;
use Microsoft\Graph\Beta\Generated\App\Calls\Item\Operations\OperationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\App\Calls\Item\Participants\ParticipantsRequestBuilder;
use Microsoft\Graph\Beta\Generated\App\Calls\Item\PlayPrompt\PlayPromptRequestBuilder;
use Microsoft\Graph\Beta\Generated\App\Calls\Item\Record\RecordRequestBuilder;
use Microsoft\Graph\Beta\Generated\App\Calls\Item\RecordResponse\RecordResponseRequestBuilder;
use Microsoft\Graph\Beta\Generated\App\Calls\Item\Redirect\RedirectRequestBuilder;
use Microsoft\Graph\Beta\Generated\App\Calls\Item\Reject\RejectRequestBuilder;
use Microsoft\Graph\Beta\Generated\App\Calls\Item\SendDtmfTones\SendDtmfTonesRequestBuilder;
use Microsoft\Graph\Beta\Generated\App\Calls\Item\SubscribeToTone\SubscribeToToneRequestBuilder;
use Microsoft\Graph\Beta\Generated\App\Calls\Item\Transfer\TransferRequestBuilder;
use Microsoft\Graph\Beta\Generated\App\Calls\Item\Unmute\UnmuteRequestBuilder;
use Microsoft\Graph\Beta\Generated\App\Calls\Item\UpdateRecordingStatus\UpdateRecordingStatusRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\Call;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the calls property of the microsoft.graph.commsApplication entity.
*/
class CallItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the addLargeGalleryView method.
    */
    public function addLargeGalleryView(): AddLargeGalleryViewRequestBuilder {
        return new AddLargeGalleryViewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the answer method.
    */
    public function answer(): AnswerRequestBuilder {
        return new AnswerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the audioRoutingGroups property of the microsoft.graph.call entity.
    */
    public function audioRoutingGroups(): AudioRoutingGroupsRequestBuilder {
        return new AudioRoutingGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the cancelMediaProcessing method.
    */
    public function cancelMediaProcessing(): CancelMediaProcessingRequestBuilder {
        return new CancelMediaProcessingRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the changeScreenSharingRole method.
    */
    public function changeScreenSharingRole(): ChangeScreenSharingRoleRequestBuilder {
        return new ChangeScreenSharingRoleRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the contentSharingSessions property of the microsoft.graph.call entity.
    */
    public function contentSharingSessions(): ContentSharingSessionsRequestBuilder {
        return new ContentSharingSessionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the keepAlive method.
    */
    public function keepAlive(): KeepAliveRequestBuilder {
        return new KeepAliveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the mute method.
    */
    public function mute(): MuteRequestBuilder {
        return new MuteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the operations property of the microsoft.graph.call entity.
    */
    public function operations(): OperationsRequestBuilder {
        return new OperationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the participants property of the microsoft.graph.call entity.
    */
    public function participants(): ParticipantsRequestBuilder {
        return new ParticipantsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the playPrompt method.
    */
    public function playPrompt(): PlayPromptRequestBuilder {
        return new PlayPromptRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the record method.
    */
    public function record(): RecordRequestBuilder {
        return new RecordRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the recordResponse method.
    */
    public function recordResponse(): RecordResponseRequestBuilder {
        return new RecordResponseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the redirect method.
    */
    public function redirect(): RedirectRequestBuilder {
        return new RedirectRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the reject method.
    */
    public function reject(): RejectRequestBuilder {
        return new RejectRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sendDtmfTones method.
    */
    public function sendDtmfTones(): SendDtmfTonesRequestBuilder {
        return new SendDtmfTonesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the subscribeToTone method.
    */
    public function subscribeToTone(): SubscribeToToneRequestBuilder {
        return new SubscribeToToneRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the transfer method.
    */
    public function transfer(): TransferRequestBuilder {
        return new TransferRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the unmute method.
    */
    public function unmute(): UnmuteRequestBuilder {
        return new UnmuteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the updateRecordingStatus method.
    */
    public function updateRecordingStatus(): UpdateRecordingStatusRequestBuilder {
        return new UpdateRecordingStatusRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new CallItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/app/calls/{call%2Did}{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property calls for app
     * @param CallItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?CallItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Get calls from app
     * @param CallItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Call|null>
     * @throws Exception
    */
    public function get(?CallItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Call::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property calls in app
     * @param Call $body The request body
     * @param CallItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Call|null>
     * @throws Exception
    */
    public function patch(Call $body, ?CallItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Call::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property calls for app
     * @param CallItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?CallItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Get calls from app
     * @param CallItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CallItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property calls in app
     * @param Call $body The request body
     * @param CallItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(Call $body, ?CallItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CallItemRequestBuilder
    */
    public function withUrl(string $rawUrl): CallItemRequestBuilder {
        return new CallItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

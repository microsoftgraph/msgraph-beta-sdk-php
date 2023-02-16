<?php

namespace Microsoft\Graph\Beta\Generated\App\Calls\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\App\Calls\Item\AudioRoutingGroups\AudioRoutingGroupsRequestBuilder;
use Microsoft\Graph\Beta\Generated\App\Calls\Item\AudioRoutingGroups\Item\AudioRoutingGroupItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\App\Calls\Item\ContentSharingSessions\ContentSharingSessionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\App\Calls\Item\ContentSharingSessions\Item\ContentSharingSessionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\App\Calls\Item\MicrosoftGraphAddLargeGalleryView\MicrosoftGraphAddLargeGalleryViewRequestBuilder;
use Microsoft\Graph\Beta\Generated\App\Calls\Item\MicrosoftGraphAnswer\MicrosoftGraphAnswerRequestBuilder;
use Microsoft\Graph\Beta\Generated\App\Calls\Item\MicrosoftGraphCancelMediaProcessing\MicrosoftGraphCancelMediaProcessingRequestBuilder;
use Microsoft\Graph\Beta\Generated\App\Calls\Item\MicrosoftGraphChangeScreenSharingRole\MicrosoftGraphChangeScreenSharingRoleRequestBuilder;
use Microsoft\Graph\Beta\Generated\App\Calls\Item\MicrosoftGraphKeepAlive\MicrosoftGraphKeepAliveRequestBuilder;
use Microsoft\Graph\Beta\Generated\App\Calls\Item\MicrosoftGraphMute\MicrosoftGraphMuteRequestBuilder;
use Microsoft\Graph\Beta\Generated\App\Calls\Item\MicrosoftGraphPlayPrompt\MicrosoftGraphPlayPromptRequestBuilder;
use Microsoft\Graph\Beta\Generated\App\Calls\Item\MicrosoftGraphRecord\MicrosoftGraphRecordRequestBuilder;
use Microsoft\Graph\Beta\Generated\App\Calls\Item\MicrosoftGraphRecordResponse\MicrosoftGraphRecordResponseRequestBuilder;
use Microsoft\Graph\Beta\Generated\App\Calls\Item\MicrosoftGraphRedirect\MicrosoftGraphRedirectRequestBuilder;
use Microsoft\Graph\Beta\Generated\App\Calls\Item\MicrosoftGraphReject\MicrosoftGraphRejectRequestBuilder;
use Microsoft\Graph\Beta\Generated\App\Calls\Item\MicrosoftGraphSubscribeToTone\MicrosoftGraphSubscribeToToneRequestBuilder;
use Microsoft\Graph\Beta\Generated\App\Calls\Item\MicrosoftGraphTransfer\MicrosoftGraphTransferRequestBuilder;
use Microsoft\Graph\Beta\Generated\App\Calls\Item\MicrosoftGraphUnmute\MicrosoftGraphUnmuteRequestBuilder;
use Microsoft\Graph\Beta\Generated\App\Calls\Item\MicrosoftGraphUpdateRecordingStatus\MicrosoftGraphUpdateRecordingStatusRequestBuilder;
use Microsoft\Graph\Beta\Generated\App\Calls\Item\Operations\Item\CommsOperationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\App\Calls\Item\Operations\OperationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\App\Calls\Item\Participants\Item\ParticipantItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\App\Calls\Item\Participants\ParticipantsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\Call;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the calls property of the microsoft.graph.commsApplication entity.
*/
class CallItemRequestBuilder 
{
    /**
     * Provides operations to manage the audioRoutingGroups property of the microsoft.graph.call entity.
    */
    public function audioRoutingGroups(): AudioRoutingGroupsRequestBuilder {
        return new AudioRoutingGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the contentSharingSessions property of the microsoft.graph.call entity.
    */
    public function contentSharingSessions(): ContentSharingSessionsRequestBuilder {
        return new ContentSharingSessionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the addLargeGalleryView method.
    */
    public function microsoftGraphAddLargeGalleryView(): MicrosoftGraphAddLargeGalleryViewRequestBuilder {
        return new MicrosoftGraphAddLargeGalleryViewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the answer method.
    */
    public function microsoftGraphAnswer(): MicrosoftGraphAnswerRequestBuilder {
        return new MicrosoftGraphAnswerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the cancelMediaProcessing method.
    */
    public function microsoftGraphCancelMediaProcessing(): MicrosoftGraphCancelMediaProcessingRequestBuilder {
        return new MicrosoftGraphCancelMediaProcessingRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the changeScreenSharingRole method.
    */
    public function microsoftGraphChangeScreenSharingRole(): MicrosoftGraphChangeScreenSharingRoleRequestBuilder {
        return new MicrosoftGraphChangeScreenSharingRoleRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the keepAlive method.
    */
    public function microsoftGraphKeepAlive(): MicrosoftGraphKeepAliveRequestBuilder {
        return new MicrosoftGraphKeepAliveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the mute method.
    */
    public function microsoftGraphMute(): MicrosoftGraphMuteRequestBuilder {
        return new MicrosoftGraphMuteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the playPrompt method.
    */
    public function microsoftGraphPlayPrompt(): MicrosoftGraphPlayPromptRequestBuilder {
        return new MicrosoftGraphPlayPromptRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the record method.
    */
    public function microsoftGraphRecord(): MicrosoftGraphRecordRequestBuilder {
        return new MicrosoftGraphRecordRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the recordResponse method.
    */
    public function microsoftGraphRecordResponse(): MicrosoftGraphRecordResponseRequestBuilder {
        return new MicrosoftGraphRecordResponseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the redirect method.
    */
    public function microsoftGraphRedirect(): MicrosoftGraphRedirectRequestBuilder {
        return new MicrosoftGraphRedirectRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the reject method.
    */
    public function microsoftGraphReject(): MicrosoftGraphRejectRequestBuilder {
        return new MicrosoftGraphRejectRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the subscribeToTone method.
    */
    public function microsoftGraphSubscribeToTone(): MicrosoftGraphSubscribeToToneRequestBuilder {
        return new MicrosoftGraphSubscribeToToneRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the transfer method.
    */
    public function microsoftGraphTransfer(): MicrosoftGraphTransferRequestBuilder {
        return new MicrosoftGraphTransferRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the unmute method.
    */
    public function microsoftGraphUnmute(): MicrosoftGraphUnmuteRequestBuilder {
        return new MicrosoftGraphUnmuteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the updateRecordingStatus method.
    */
    public function microsoftGraphUpdateRecordingStatus(): MicrosoftGraphUpdateRecordingStatusRequestBuilder {
        return new MicrosoftGraphUpdateRecordingStatusRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the audioRoutingGroups property of the microsoft.graph.call entity.
     * @param string $id Unique identifier of the item
     * @return AudioRoutingGroupItemRequestBuilder
    */
    public function audioRoutingGroupsById(string $id): AudioRoutingGroupItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['audioRoutingGroup%2Did'] = $id;
        return new AudioRoutingGroupItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CallItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/app/calls/{call%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Provides operations to manage the contentSharingSessions property of the microsoft.graph.call entity.
     * @param string $id Unique identifier of the item
     * @return ContentSharingSessionItemRequestBuilder
    */
    public function contentSharingSessionsById(string $id): ContentSharingSessionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['contentSharingSession%2Did'] = $id;
        return new ContentSharingSessionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete navigation property calls for app
     * @param CallItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function delete(?CallItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
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
     * Get calls from app
     * @param CallItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?CallItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Call::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the operations property of the microsoft.graph.call entity.
     * @param string $id Unique identifier of the item
     * @return CommsOperationItemRequestBuilder
    */
    public function operationsById(string $id): CommsOperationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['commsOperation%2Did'] = $id;
        return new CommsOperationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the participants property of the microsoft.graph.call entity.
     * @param string $id Unique identifier of the item
     * @return ParticipantItemRequestBuilder
    */
    public function participantsById(string $id): ParticipantItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['participant%2Did'] = $id;
        return new ParticipantItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property calls in app
     * @param Call $body The request body
     * @param CallItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(Call $body, ?CallItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Call::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
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
     * Get calls from app
     * @param CallItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CallItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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

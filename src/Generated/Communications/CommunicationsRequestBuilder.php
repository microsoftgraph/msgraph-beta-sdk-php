<?php

namespace Microsoft\Graph\Beta\Generated\Communications;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Communications\CallRecords\CallRecordsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Communications\Calls\CallsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Communications\GetAllOnlineMeetingMessages\GetAllOnlineMeetingMessagesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Communications\GetPresencesByUserId\GetPresencesByUserIdRequestBuilder;
use Microsoft\Graph\Beta\Generated\Communications\OnlineMeetingConversations\OnlineMeetingConversationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Communications\OnlineMeetings\OnlineMeetingsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Communications\OnlineMeetingsWithJoinWebUrl\OnlineMeetingsWithJoinWebUrlRequestBuilder;
use Microsoft\Graph\Beta\Generated\Communications\Presences\PresencesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\CloudCommunications;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the cloudCommunications singleton.
*/
class CommunicationsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the callRecords property of the microsoft.graph.cloudCommunications entity.
    */
    public function callRecords(): CallRecordsRequestBuilder {
        return new CallRecordsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the calls property of the microsoft.graph.cloudCommunications entity.
    */
    public function calls(): CallsRequestBuilder {
        return new CallsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getAllOnlineMeetingMessages method.
    */
    public function getAllOnlineMeetingMessages(): GetAllOnlineMeetingMessagesRequestBuilder {
        return new GetAllOnlineMeetingMessagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getPresencesByUserId method.
    */
    public function getPresencesByUserId(): GetPresencesByUserIdRequestBuilder {
        return new GetPresencesByUserIdRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the onlineMeetingConversations property of the microsoft.graph.cloudCommunications entity.
    */
    public function onlineMeetingConversations(): OnlineMeetingConversationsRequestBuilder {
        return new OnlineMeetingConversationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the onlineMeetings property of the microsoft.graph.cloudCommunications entity.
    */
    public function onlineMeetings(): OnlineMeetingsRequestBuilder {
        return new OnlineMeetingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the presences property of the microsoft.graph.cloudCommunications entity.
    */
    public function presences(): PresencesRequestBuilder {
        return new PresencesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new CommunicationsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/communications{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get communications
     * @param CommunicationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudCommunications|null>
     * @throws Exception
    */
    public function get(?CommunicationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudCommunications::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Provides operations to manage the onlineMeetings property of the microsoft.graph.cloudCommunications entity.
     * @param string $joinWebUrl Alternate key of onlineMeeting
     * @return OnlineMeetingsWithJoinWebUrlRequestBuilder
    */
    public function onlineMeetingsWithJoinWebUrl(string $joinWebUrl): OnlineMeetingsWithJoinWebUrlRequestBuilder {
        return new OnlineMeetingsWithJoinWebUrlRequestBuilder($this->pathParameters, $this->requestAdapter, $joinWebUrl);
    }

    /**
     * Update communications
     * @param CloudCommunications $body Represents a container that exposes navigation properties for cloud communications resources.
     * @param CommunicationsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudCommunications|null>
     * @throws Exception
    */
    public function patch(CloudCommunications $body, ?CommunicationsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudCommunications::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get communications
     * @param CommunicationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CommunicationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update communications
     * @param CloudCommunications $body Represents a container that exposes navigation properties for cloud communications resources.
     * @param CommunicationsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(CloudCommunications $body, ?CommunicationsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CommunicationsRequestBuilder
    */
    public function withUrl(string $rawUrl): CommunicationsRequestBuilder {
        return new CommunicationsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

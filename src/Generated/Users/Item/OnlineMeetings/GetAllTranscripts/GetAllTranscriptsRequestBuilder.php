<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\OnlineMeetings\GetAllTranscripts;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getAllTranscripts method.
*/
class GetAllTranscriptsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetAllTranscriptsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/onlineMeetings/getAllTranscripts(){?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get all transcripts from scheduled onlineMeeting instances for which the specified user is the organizer. This API currently doesn't support getting call transcripts from channel meetings. You can apply the delta function on getAllTranscripts to synchronize and get callTranscript resources as they are added for onlineMeeting instances organized by the specified user. Delta query supports both full synchronization that gets all the transcripts for online meetings organized by the user, and incremental synchronization that gets transcripts that have been added since the last synchronization. Typically, you would do an initial full synchronization, and then get incremental changes to that transcript view periodically. Find more information in the delta query documentation. For additional examples, see callTranscript: delta. To learn more about using the Microsoft Teams export APIs to export content, see Export content with the Microsoft Teams export APIs.
     * @param GetAllTranscriptsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetAllTranscriptsGetResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/onlinemeeting-getalltranscripts?view=graph-rest-beta Find more info here
    */
    public function get(?GetAllTranscriptsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GetAllTranscriptsGetResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get all transcripts from scheduled onlineMeeting instances for which the specified user is the organizer. This API currently doesn't support getting call transcripts from channel meetings. You can apply the delta function on getAllTranscripts to synchronize and get callTranscript resources as they are added for onlineMeeting instances organized by the specified user. Delta query supports both full synchronization that gets all the transcripts for online meetings organized by the user, and incremental synchronization that gets transcripts that have been added since the last synchronization. Typically, you would do an initial full synchronization, and then get incremental changes to that transcript view periodically. Find more information in the delta query documentation. For additional examples, see callTranscript: delta. To learn more about using the Microsoft Teams export APIs to export content, see Export content with the Microsoft Teams export APIs.
     * @param GetAllTranscriptsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GetAllTranscriptsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return GetAllTranscriptsRequestBuilder
    */
    public function withUrl(string $rawUrl): GetAllTranscriptsRequestBuilder {
        return new GetAllTranscriptsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

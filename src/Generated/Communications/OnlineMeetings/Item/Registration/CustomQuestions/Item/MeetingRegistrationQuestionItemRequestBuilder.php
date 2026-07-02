<?php

namespace Microsoft\Graph\Beta\Generated\Communications\OnlineMeetings\Item\Registration\CustomQuestions\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\MeetingRegistrationQuestion;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the customQuestions property of the microsoft.graph.meetingRegistration entity.
*/
class MeetingRegistrationQuestionItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MeetingRegistrationQuestionItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/communications/onlineMeetings/{onlineMeeting%2Did}/registration/customQuestions/{meetingRegistrationQuestion%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property customQuestions for communications
     * @param MeetingRegistrationQuestionItemRequestBuilderDeleteRequ_9f341082|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?MeetingRegistrationQuestionItemRequestBuilderDeleteRequ_9f341082 $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Custom registration questions.
     * @param MeetingRegistrationQuestionItemRequestBuilderGetRequest_3c39bc74|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MeetingRegistrationQuestion|null>
     * @throws Exception
    */
    public function get(?MeetingRegistrationQuestionItemRequestBuilderGetRequest_3c39bc74 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MeetingRegistrationQuestion::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property customQuestions in communications
     * @param MeetingRegistrationQuestion $body The request body
     * @param MeetingRegistrationQuestionItemRequestBuilderPatchReque_965d867c|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MeetingRegistrationQuestion|null>
     * @throws Exception
    */
    public function patch(MeetingRegistrationQuestion $body, ?MeetingRegistrationQuestionItemRequestBuilderPatchReque_965d867c $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MeetingRegistrationQuestion::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property customQuestions for communications
     * @param MeetingRegistrationQuestionItemRequestBuilderDeleteRequ_9f341082|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?MeetingRegistrationQuestionItemRequestBuilderDeleteRequ_9f341082 $requestConfiguration = null): RequestInformation {
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
     * Custom registration questions.
     * @param MeetingRegistrationQuestionItemRequestBuilderGetRequest_3c39bc74|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MeetingRegistrationQuestionItemRequestBuilderGetRequest_3c39bc74 $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property customQuestions in communications
     * @param MeetingRegistrationQuestion $body The request body
     * @param MeetingRegistrationQuestionItemRequestBuilderPatchReque_965d867c|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(MeetingRegistrationQuestion $body, ?MeetingRegistrationQuestionItemRequestBuilderPatchReque_965d867c $requestConfiguration = null): RequestInformation {
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
     * @return MeetingRegistrationQuestionItemRequestBuilder
    */
    public function withUrl(string $rawUrl): MeetingRegistrationQuestionItemRequestBuilder {
        return new MeetingRegistrationQuestionItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

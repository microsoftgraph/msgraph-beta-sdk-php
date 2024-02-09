<?php

namespace Microsoft\Graph\Beta\Generated\App\OnlineMeetings\Item\Registration\CustomQuestions;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\App\OnlineMeetings\Item\Registration\CustomQuestions\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\App\OnlineMeetings\Item\Registration\CustomQuestions\Item\MeetingRegistrationQuestionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\MeetingRegistrationQuestion;
use Microsoft\Graph\Beta\Generated\Models\MeetingRegistrationQuestionCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the customQuestions property of the microsoft.graph.meetingRegistration entity.
*/
class CustomQuestionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the customQuestions property of the microsoft.graph.meetingRegistration entity.
     * @param string $meetingRegistrationQuestionId The unique identifier of meetingRegistrationQuestion
     * @return MeetingRegistrationQuestionItemRequestBuilder
    */
    public function byMeetingRegistrationQuestionId(string $meetingRegistrationQuestionId): MeetingRegistrationQuestionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['meetingRegistrationQuestion%2Did'] = $meetingRegistrationQuestionId;
        return new MeetingRegistrationQuestionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CustomQuestionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/app/onlineMeetings/{onlineMeeting%2Did}/registration/customQuestions{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a custom registration question associated with a meetingRegistration object on behalf of the organizer.
     * @param CustomQuestionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MeetingRegistrationQuestionCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/meetingregistration-list-customquestions?view=graph-rest-1.0 Find more info here
    */
    public function get(?CustomQuestionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MeetingRegistrationQuestionCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a custom registration question associated with a meetingRegistration object on behalf of the organizer.
     * @param MeetingRegistrationQuestion $body The request body
     * @param CustomQuestionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MeetingRegistrationQuestion|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/meetingregistration-post-customquestions?view=graph-rest-1.0 Find more info here
    */
    public function post(MeetingRegistrationQuestion $body, ?CustomQuestionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MeetingRegistrationQuestion::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a custom registration question associated with a meetingRegistration object on behalf of the organizer.
     * @param CustomQuestionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CustomQuestionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a custom registration question associated with a meetingRegistration object on behalf of the organizer.
     * @param MeetingRegistrationQuestion $body The request body
     * @param CustomQuestionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(MeetingRegistrationQuestion $body, ?CustomQuestionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/app/onlineMeetings/{onlineMeeting%2Did}/registration/customQuestions';
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
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
     * @return CustomQuestionsRequestBuilder
    */
    public function withUrl(string $rawUrl): CustomQuestionsRequestBuilder {
        return new CustomQuestionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

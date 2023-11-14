<?php

namespace Microsoft\Graph\Beta\Generated\App\OnlineMeetings\Item\Registration;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\App\OnlineMeetings\Item\Registration\CustomQuestions\CustomQuestionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\App\OnlineMeetings\Item\Registration\Registrants\RegistrantsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\MeetingRegistration;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the registration property of the microsoft.graph.onlineMeeting entity.
*/
class RegistrationRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the customQuestions property of the microsoft.graph.meetingRegistration entity.
    */
    public function customQuestions(): CustomQuestionsRequestBuilder {
        return new CustomQuestionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the registrants property of the microsoft.graph.meetingRegistrationBase entity.
    */
    public function registrants(): RegistrantsRequestBuilder {
        return new RegistrantsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new RegistrationRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/app/onlineMeetings/{onlineMeeting%2Did}/registration{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Disable and delete the externalMeetingRegistration of an onlineMeeting. This API is available in the following national cloud deployments.
     * @param RegistrationRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/externalmeetingregistration-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?RegistrationRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Get the externalMeetingRegistration details associated with an onlineMeeting. This API is available in the following national cloud deployments.
     * @param RegistrationRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MeetingRegistration|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/externalmeetingregistration-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?RegistrationRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MeetingRegistration::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the details of a meetingRegistration object assciated with an onlineMeeting on behalf of the organizer. This API is available in the following national cloud deployments.
     * @param MeetingRegistration $body The request body
     * @param RegistrationRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MeetingRegistration|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/meetingregistration-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(MeetingRegistration $body, ?RegistrationRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MeetingRegistration::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Disable and delete the externalMeetingRegistration of an onlineMeeting. This API is available in the following national cloud deployments.
     * @param RegistrationRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?RegistrationRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Get the externalMeetingRegistration details associated with an onlineMeeting. This API is available in the following national cloud deployments.
     * @param RegistrationRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?RegistrationRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the details of a meetingRegistration object assciated with an onlineMeeting on behalf of the organizer. This API is available in the following national cloud deployments.
     * @param MeetingRegistration $body The request body
     * @param RegistrationRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(MeetingRegistration $body, ?RegistrationRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return RegistrationRequestBuilder
    */
    public function withUrl(string $rawUrl): RegistrationRequestBuilder {
        return new RegistrationRequestBuilder($rawUrl, $this->requestAdapter);
    }

}

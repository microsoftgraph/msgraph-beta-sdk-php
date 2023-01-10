<?php

namespace Microsoft\Graph\Beta\Generated\Me\OnlineMeetings\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Me\OnlineMeetings\Item\AlternativeRecording\AlternativeRecordingRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\OnlineMeetings\Item\AttendanceReports\AttendanceReportsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\OnlineMeetings\Item\AttendanceReports\Item\MeetingAttendanceReportItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\OnlineMeetings\Item\AttendeeReport\AttendeeReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\OnlineMeetings\Item\MeetingAttendanceReport\MeetingAttendanceReportRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\OnlineMeetings\Item\Recording\RecordingRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\OnlineMeetings\Item\Registration\RegistrationRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\OnlineMeetings\Item\Transcripts\Item\CallTranscriptItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\OnlineMeetings\Item\Transcripts\TranscriptsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\OnlineMeetings\Item\VirtualAppointment\VirtualAppointmentRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\OnlineMeeting;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class OnlineMeetingItemRequestBuilder 
{
    /**
     * Provides operations to manage the media for the user entity.
    */
    public function alternativeRecording(): AlternativeRecordingRequestBuilder {
        return new AlternativeRecordingRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the attendanceReports property of the microsoft.graph.onlineMeeting entity.
    */
    public function attendanceReports(): AttendanceReportsRequestBuilder {
        return new AttendanceReportsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the media for the user entity.
    */
    public function attendeeReport(): AttendeeReportRequestBuilder {
        return new AttendeeReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the meetingAttendanceReport property of the microsoft.graph.onlineMeeting entity.
    */
    public function meetingAttendanceReport(): MeetingAttendanceReportRequestBuilder {
        return new MeetingAttendanceReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * Provides operations to manage the media for the user entity.
    */
    public function recording(): RecordingRequestBuilder {
        return new RecordingRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the registration property of the microsoft.graph.onlineMeeting entity.
    */
    public function registration(): RegistrationRequestBuilder {
        return new RegistrationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * Provides operations to manage the transcripts property of the microsoft.graph.onlineMeeting entity.
    */
    public function transcripts(): TranscriptsRequestBuilder {
        return new TranscriptsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the virtualAppointment property of the microsoft.graph.onlineMeeting entity.
    */
    public function virtualAppointment(): VirtualAppointmentRequestBuilder {
        return new VirtualAppointmentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the attendanceReports property of the microsoft.graph.onlineMeeting entity.
     * @param string $id Unique identifier of the item
     * @return MeetingAttendanceReportItemRequestBuilder
    */
    public function attendanceReportsById(string $id): MeetingAttendanceReportItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['meetingAttendanceReport%2Did'] = $id;
        return new MeetingAttendanceReportItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new OnlineMeetingItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/me/onlineMeetings/{onlineMeeting%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property onlineMeetings for me
     * @param OnlineMeetingItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?OnlineMeetingItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Get onlineMeetings from me
     * @param OnlineMeetingItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?OnlineMeetingItemRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [OnlineMeeting::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property onlineMeetings in me
     * @param OnlineMeeting $body The request body
     * @param OnlineMeetingItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(OnlineMeeting $body, ?OnlineMeetingItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [OnlineMeeting::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Delete navigation property onlineMeetings for me
     * @param OnlineMeetingItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?OnlineMeetingItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Get onlineMeetings from me
     * @param OnlineMeetingItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?OnlineMeetingItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
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
     * Update the navigation property onlineMeetings in me
     * @param OnlineMeeting $body The request body
     * @param OnlineMeetingItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(OnlineMeeting $body, ?OnlineMeetingItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Provides operations to manage the transcripts property of the microsoft.graph.onlineMeeting entity.
     * @param string $id Unique identifier of the item
     * @return CallTranscriptItemRequestBuilder
    */
    public function transcriptsById(string $id): CallTranscriptItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['callTranscript%2Did'] = $id;
        return new CallTranscriptItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}

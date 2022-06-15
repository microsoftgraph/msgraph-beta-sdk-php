<?php

namespace Microsoft\Graph\Beta\Generated\BookingBusinesses\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\BookingBusinesses\Item\Appointments\AppointmentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\BookingBusinesses\Item\Appointments\Item\BookingAppointmentItemRequestBuilder as MicrosoftGraphBetaGeneratedBookingBusinessesItemAppointmentsItemBookingAppointmentItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\BookingBusinesses\Item\CalendarView\CalendarViewRequestBuilder;
use Microsoft\Graph\Beta\Generated\BookingBusinesses\Item\CalendarView\Item\BookingAppointmentItemRequestBuilder as MicrosoftGraphBetaGeneratedBookingBusinessesItemCalendarViewItemBookingAppointmentItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\BookingBusinesses\Item\Customers\CustomersRequestBuilder;
use Microsoft\Graph\Beta\Generated\BookingBusinesses\Item\Customers\Item\BookingCustomerItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\BookingBusinesses\Item\CustomQuestions\CustomQuestionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\BookingBusinesses\Item\CustomQuestions\Item\BookingCustomQuestionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\BookingBusinesses\Item\GetStaffAvailability\GetStaffAvailabilityRequestBuilder;
use Microsoft\Graph\Beta\Generated\BookingBusinesses\Item\Publish\PublishRequestBuilder;
use Microsoft\Graph\Beta\Generated\BookingBusinesses\Item\Services\Item\BookingServiceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\BookingBusinesses\Item\Services\ServicesRequestBuilder;
use Microsoft\Graph\Beta\Generated\BookingBusinesses\Item\StaffMembers\Item\BookingStaffMemberItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\BookingBusinesses\Item\StaffMembers\StaffMembersRequestBuilder;
use Microsoft\Graph\Beta\Generated\BookingBusinesses\Item\Unpublish\UnpublishRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\BookingBusiness;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class BookingBusinessItemRequestBuilder 
{
    /**
     * The appointments property
    */
    public function appointments(): AppointmentsRequestBuilder {
        return new AppointmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The calendarView property
    */
    public function calendarView(): CalendarViewRequestBuilder {
        return new CalendarViewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The customers property
    */
    public function customers(): CustomersRequestBuilder {
        return new CustomersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The customQuestions property
    */
    public function customQuestions(): CustomQuestionsRequestBuilder {
        return new CustomQuestionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getStaffAvailability property
    */
    public function getStaffAvailability(): GetStaffAvailabilityRequestBuilder {
        return new GetStaffAvailabilityRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * The publish property
    */
    public function publish(): PublishRequestBuilder {
        return new PublishRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * The services property
    */
    public function services(): ServicesRequestBuilder {
        return new ServicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The staffMembers property
    */
    public function staffMembers(): StaffMembersRequestBuilder {
        return new StaffMembersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The unpublish property
    */
    public function unpublish(): UnpublishRequestBuilder {
        return new UnpublishRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.bookingBusinesses.item.appointments.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedBookingBusinessesItemAppointmentsItemBookingAppointmentItemRequestBuilder
    */
    public function appointmentsById(string $id): MicrosoftGraphBetaGeneratedBookingBusinessesItemAppointmentsItemBookingAppointmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['bookingAppointment%2Did'] = $id;
        return new MicrosoftGraphBetaGeneratedBookingBusinessesItemAppointmentsItemBookingAppointmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.bookingBusinesses.item.calendarView.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedBookingBusinessesItemCalendarViewItemBookingAppointmentItemRequestBuilder
    */
    public function calendarViewById(string $id): MicrosoftGraphBetaGeneratedBookingBusinessesItemCalendarViewItemBookingAppointmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['bookingAppointment%2Did'] = $id;
        return new MicrosoftGraphBetaGeneratedBookingBusinessesItemCalendarViewItemBookingAppointmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new BookingBusinessItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/bookingBusinesses/{bookingBusiness%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete entity from bookingBusinesses
     * @param BookingBusinessItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?BookingBusinessItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Represents a Microsot Bookings Business.
     * @param BookingBusinessItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?BookingBusinessItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update entity in bookingBusinesses
     * @param BookingBusiness $body 
     * @param BookingBusinessItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(BookingBusiness $body, ?BookingBusinessItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * Gets an item from the Microsoft\Graph\Beta\Generated.bookingBusinesses.item.customers.item collection
     * @param string $id Unique identifier of the item
     * @return BookingCustomerItemRequestBuilder
    */
    public function customersById(string $id): BookingCustomerItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['bookingCustomer%2Did'] = $id;
        return new BookingCustomerItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.bookingBusinesses.item.customQuestions.item collection
     * @param string $id Unique identifier of the item
     * @return BookingCustomQuestionItemRequestBuilder
    */
    public function customQuestionsById(string $id): BookingCustomQuestionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['bookingCustomQuestion%2Did'] = $id;
        return new BookingCustomQuestionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete entity from bookingBusinesses
     * @param BookingBusinessItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?BookingBusinessItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Represents a Microsot Bookings Business.
     * @param BookingBusinessItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?BookingBusinessItemRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(BookingBusiness::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update entity in bookingBusinesses
     * @param BookingBusiness $body 
     * @param BookingBusinessItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(BookingBusiness $body, ?BookingBusinessItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.bookingBusinesses.item.services.item collection
     * @param string $id Unique identifier of the item
     * @return BookingServiceItemRequestBuilder
    */
    public function servicesById(string $id): BookingServiceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['bookingService%2Did'] = $id;
        return new BookingServiceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.bookingBusinesses.item.staffMembers.item collection
     * @param string $id Unique identifier of the item
     * @return BookingStaffMemberItemRequestBuilder
    */
    public function staffMembersById(string $id): BookingStaffMemberItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['bookingStaffMember%2Did'] = $id;
        return new BookingStaffMemberItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}

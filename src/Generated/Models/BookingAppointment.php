<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Represents a booked appointment of a service by a customer in a business.
*/
class BookingAppointment extends Entity implements Parsable 
{
    /**
     * Instantiates a new bookingAppointment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BookingAppointment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BookingAppointment {
        return new BookingAppointment();
    }

    /**
     * Gets the additionalInformation property value. Additional information that is sent to the customer when an appointment is confirmed.
     * @return string|null
    */
    public function getAdditionalInformation(): ?string {
        $val = $this->getBackingStore()->get('additionalInformation');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalInformation'");
    }

    /**
     * Gets the anonymousJoinWebUrl property value. The URL of the meeting to join anonymously.
     * @return string|null
    */
    public function getAnonymousJoinWebUrl(): ?string {
        $val = $this->getBackingStore()->get('anonymousJoinWebUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'anonymousJoinWebUrl'");
    }

    /**
     * Gets the customerEmailAddress property value. The SMTP address of the bookingCustomer who is booking the appointment.
     * @return string|null
    */
    public function getCustomerEmailAddress(): ?string {
        $val = $this->getBackingStore()->get('customerEmailAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customerEmailAddress'");
    }

    /**
     * Gets the customerId property value. The ID of the bookingCustomer for this appointment. If no ID is specified when an appointment is created, then a new bookingCustomer object is created. Once set, you should consider the customerId immutable.
     * @return string|null
    */
    public function getCustomerId(): ?string {
        $val = $this->getBackingStore()->get('customerId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customerId'");
    }

    /**
     * Gets the customerLocation property value. Represents location information for the bookingCustomer who is booking the appointment.
     * @return Location|null
    */
    public function getCustomerLocation(): ?Location {
        $val = $this->getBackingStore()->get('customerLocation');
        if (is_null($val) || $val instanceof Location) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customerLocation'");
    }

    /**
     * Gets the customerName property value. The customer's name.
     * @return string|null
    */
    public function getCustomerName(): ?string {
        $val = $this->getBackingStore()->get('customerName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customerName'");
    }

    /**
     * Gets the customerNotes property value. Notes from the customer associated with this appointment. You can get the value only when reading this bookingAppointment by its ID.  You can set this property only when initially creating an appointment with a new customer. After that point, the value is computed from the customer represented by customerId.
     * @return string|null
    */
    public function getCustomerNotes(): ?string {
        $val = $this->getBackingStore()->get('customerNotes');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customerNotes'");
    }

    /**
     * Gets the customerPhone property value. The customer's phone number.
     * @return string|null
    */
    public function getCustomerPhone(): ?string {
        $val = $this->getBackingStore()->get('customerPhone');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customerPhone'");
    }

    /**
     * Gets the customers property value. A collection of the customer properties for an appointment. An appointment will contain a list of customer information and each unit will indicate the properties of a customer who is part of that appointment. Optional.
     * @return array<BookingCustomerInformationBase>|null
    */
    public function getCustomers(): ?array {
        $val = $this->getBackingStore()->get('customers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, BookingCustomerInformationBase::class);
            /** @var array<BookingCustomerInformationBase>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customers'");
    }

    /**
     * Gets the customerTimeZone property value. The time zone of the customer. For a list of possible values, see dateTimeTimeZone.
     * @return string|null
    */
    public function getCustomerTimeZone(): ?string {
        $val = $this->getBackingStore()->get('customerTimeZone');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customerTimeZone'");
    }

    /**
     * Gets the duration property value. The length of the appointment, denoted in ISO8601 format.
     * @return DateInterval|null
    */
    public function getDuration(): ?DateInterval {
        $val = $this->getBackingStore()->get('duration');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'duration'");
    }

    /**
     * Gets the end property value. The end property
     * @return DateTimeTimeZone|null
    */
    public function getEnd(): ?DateTimeTimeZone {
        $val = $this->getBackingStore()->get('end');
        if (is_null($val) || $val instanceof DateTimeTimeZone) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'end'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'additionalInformation' => fn(ParseNode $n) => $o->setAdditionalInformation($n->getStringValue()),
            'anonymousJoinWebUrl' => fn(ParseNode $n) => $o->setAnonymousJoinWebUrl($n->getStringValue()),
            'customerEmailAddress' => fn(ParseNode $n) => $o->setCustomerEmailAddress($n->getStringValue()),
            'customerId' => fn(ParseNode $n) => $o->setCustomerId($n->getStringValue()),
            'customerLocation' => fn(ParseNode $n) => $o->setCustomerLocation($n->getObjectValue([Location::class, 'createFromDiscriminatorValue'])),
            'customerName' => fn(ParseNode $n) => $o->setCustomerName($n->getStringValue()),
            'customerNotes' => fn(ParseNode $n) => $o->setCustomerNotes($n->getStringValue()),
            'customerPhone' => fn(ParseNode $n) => $o->setCustomerPhone($n->getStringValue()),
            'customers' => fn(ParseNode $n) => $o->setCustomers($n->getCollectionOfObjectValues([BookingCustomerInformationBase::class, 'createFromDiscriminatorValue'])),
            'customerTimeZone' => fn(ParseNode $n) => $o->setCustomerTimeZone($n->getStringValue()),
            'duration' => fn(ParseNode $n) => $o->setDuration($n->getDateIntervalValue()),
            'end' => fn(ParseNode $n) => $o->setEnd($n->getObjectValue([DateTimeTimeZone::class, 'createFromDiscriminatorValue'])),
            'filledAttendeesCount' => fn(ParseNode $n) => $o->setFilledAttendeesCount($n->getIntegerValue()),
            'invoiceAmount' => fn(ParseNode $n) => $o->setInvoiceAmount($n->getFloatValue()),
            'invoiceDate' => fn(ParseNode $n) => $o->setInvoiceDate($n->getObjectValue([DateTimeTimeZone::class, 'createFromDiscriminatorValue'])),
            'invoiceId' => fn(ParseNode $n) => $o->setInvoiceId($n->getStringValue()),
            'invoiceStatus' => fn(ParseNode $n) => $o->setInvoiceStatus($n->getEnumValue(BookingInvoiceStatus::class)),
            'invoiceUrl' => fn(ParseNode $n) => $o->setInvoiceUrl($n->getStringValue()),
            'isLocationOnline' => fn(ParseNode $n) => $o->setIsLocationOnline($n->getBooleanValue()),
            'joinWebUrl' => fn(ParseNode $n) => $o->setJoinWebUrl($n->getStringValue()),
            'maximumAttendeesCount' => fn(ParseNode $n) => $o->setMaximumAttendeesCount($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'onlineMeetingUrl' => fn(ParseNode $n) => $o->setOnlineMeetingUrl($n->getStringValue()),
            'optOutOfCustomerEmail' => fn(ParseNode $n) => $o->setOptOutOfCustomerEmail($n->getBooleanValue()),
            'postBuffer' => fn(ParseNode $n) => $o->setPostBuffer($n->getDateIntervalValue()),
            'preBuffer' => fn(ParseNode $n) => $o->setPreBuffer($n->getDateIntervalValue()),
            'price' => fn(ParseNode $n) => $o->setPrice($n->getFloatValue()),
            'priceType' => fn(ParseNode $n) => $o->setPriceType($n->getEnumValue(BookingPriceType::class)),
            'reminders' => fn(ParseNode $n) => $o->setReminders($n->getCollectionOfObjectValues([BookingReminder::class, 'createFromDiscriminatorValue'])),
            'selfServiceAppointmentId' => fn(ParseNode $n) => $o->setSelfServiceAppointmentId($n->getStringValue()),
            'serviceId' => fn(ParseNode $n) => $o->setServiceId($n->getStringValue()),
            'serviceLocation' => fn(ParseNode $n) => $o->setServiceLocation($n->getObjectValue([Location::class, 'createFromDiscriminatorValue'])),
            'serviceName' => fn(ParseNode $n) => $o->setServiceName($n->getStringValue()),
            'serviceNotes' => fn(ParseNode $n) => $o->setServiceNotes($n->getStringValue()),
            'smsNotificationsEnabled' => fn(ParseNode $n) => $o->setSmsNotificationsEnabled($n->getBooleanValue()),
            'staffMemberIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setStaffMemberIds($val);
            },
            'start' => fn(ParseNode $n) => $o->setStart($n->getObjectValue([DateTimeTimeZone::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the filledAttendeesCount property value. The current number of customers in the appointment.
     * @return int|null
    */
    public function getFilledAttendeesCount(): ?int {
        $val = $this->getBackingStore()->get('filledAttendeesCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'filledAttendeesCount'");
    }

    /**
     * Gets the invoiceAmount property value. The billed amount on the invoice.
     * @return float|null
    */
    public function getInvoiceAmount(): ?float {
        $val = $this->getBackingStore()->get('invoiceAmount');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'invoiceAmount'");
    }

    /**
     * Gets the invoiceDate property value. The date, time, and time zone of the invoice for this appointment.
     * @return DateTimeTimeZone|null
    */
    public function getInvoiceDate(): ?DateTimeTimeZone {
        $val = $this->getBackingStore()->get('invoiceDate');
        if (is_null($val) || $val instanceof DateTimeTimeZone) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'invoiceDate'");
    }

    /**
     * Gets the invoiceId property value. The ID of the invoice.
     * @return string|null
    */
    public function getInvoiceId(): ?string {
        $val = $this->getBackingStore()->get('invoiceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'invoiceId'");
    }

    /**
     * Gets the invoiceStatus property value. The invoiceStatus property
     * @return BookingInvoiceStatus|null
    */
    public function getInvoiceStatus(): ?BookingInvoiceStatus {
        $val = $this->getBackingStore()->get('invoiceStatus');
        if (is_null($val) || $val instanceof BookingInvoiceStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'invoiceStatus'");
    }

    /**
     * Gets the invoiceUrl property value. The URL of the invoice in Microsoft Bookings.
     * @return string|null
    */
    public function getInvoiceUrl(): ?string {
        $val = $this->getBackingStore()->get('invoiceUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'invoiceUrl'");
    }

    /**
     * Gets the isLocationOnline property value. True indicates that the appointment will be held online. Default value is false.
     * @return bool|null
    */
    public function getIsLocationOnline(): ?bool {
        $val = $this->getBackingStore()->get('isLocationOnline');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isLocationOnline'");
    }

    /**
     * Gets the joinWebUrl property value. The URL of the online meeting for the appointment.
     * @return string|null
    */
    public function getJoinWebUrl(): ?string {
        $val = $this->getBackingStore()->get('joinWebUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'joinWebUrl'");
    }

    /**
     * Gets the maximumAttendeesCount property value. The maximum number of customers allowed in an appointment. If maximumAttendeesCount of the service is greater than 1, pass valid customer IDs while creating or updating an appointment. To create a customer, use the Create bookingCustomer operation.
     * @return int|null
    */
    public function getMaximumAttendeesCount(): ?int {
        $val = $this->getBackingStore()->get('maximumAttendeesCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maximumAttendeesCount'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the onlineMeetingUrl property value. The onlineMeetingUrl property
     * @return string|null
    */
    public function getOnlineMeetingUrl(): ?string {
        $val = $this->getBackingStore()->get('onlineMeetingUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onlineMeetingUrl'");
    }

    /**
     * Gets the optOutOfCustomerEmail property value. True indicates that the bookingCustomer for this appointment does not wish to receive a confirmation for this appointment.
     * @return bool|null
    */
    public function getOptOutOfCustomerEmail(): ?bool {
        $val = $this->getBackingStore()->get('optOutOfCustomerEmail');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'optOutOfCustomerEmail'");
    }

    /**
     * Gets the postBuffer property value. The amount of time to reserve after the appointment ends, for cleaning up, as an example. The value is expressed in ISO8601 format.
     * @return DateInterval|null
    */
    public function getPostBuffer(): ?DateInterval {
        $val = $this->getBackingStore()->get('postBuffer');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'postBuffer'");
    }

    /**
     * Gets the preBuffer property value. The amount of time to reserve before the appointment begins, for preparation, as an example. The value is expressed in ISO8601 format.
     * @return DateInterval|null
    */
    public function getPreBuffer(): ?DateInterval {
        $val = $this->getBackingStore()->get('preBuffer');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'preBuffer'");
    }

    /**
     * Gets the price property value. The regular price for an appointment for the specified bookingService.
     * @return float|null
    */
    public function getPrice(): ?float {
        $val = $this->getBackingStore()->get('price');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'price'");
    }

    /**
     * Gets the priceType property value. Represents the type of pricing of a booking service.
     * @return BookingPriceType|null
    */
    public function getPriceType(): ?BookingPriceType {
        $val = $this->getBackingStore()->get('priceType');
        if (is_null($val) || $val instanceof BookingPriceType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'priceType'");
    }

    /**
     * Gets the reminders property value. The collection of customer reminders sent for this appointment. The value of this property is available only when reading this bookingAppointment by its ID.
     * @return array<BookingReminder>|null
    */
    public function getReminders(): ?array {
        $val = $this->getBackingStore()->get('reminders');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, BookingReminder::class);
            /** @var array<BookingReminder>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reminders'");
    }

    /**
     * Gets the selfServiceAppointmentId property value. An additional tracking ID for the appointment, if the appointment has been created directly by the customer on the scheduling page, as opposed to by a staff member on the behalf of the customer.
     * @return string|null
    */
    public function getSelfServiceAppointmentId(): ?string {
        $val = $this->getBackingStore()->get('selfServiceAppointmentId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'selfServiceAppointmentId'");
    }

    /**
     * Gets the serviceId property value. The ID of the bookingService associated with this appointment.
     * @return string|null
    */
    public function getServiceId(): ?string {
        $val = $this->getBackingStore()->get('serviceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serviceId'");
    }

    /**
     * Gets the serviceLocation property value. The location where the service is delivered.
     * @return Location|null
    */
    public function getServiceLocation(): ?Location {
        $val = $this->getBackingStore()->get('serviceLocation');
        if (is_null($val) || $val instanceof Location) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serviceLocation'");
    }

    /**
     * Gets the serviceName property value. The name of the bookingService associated with this appointment.This property is optional when creating a new appointment. If not specified, it is computed from the service associated with the appointment by the serviceId property.
     * @return string|null
    */
    public function getServiceName(): ?string {
        $val = $this->getBackingStore()->get('serviceName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serviceName'");
    }

    /**
     * Gets the serviceNotes property value. Notes from a bookingStaffMember. The value of this property is available only when reading this bookingAppointment by its ID.
     * @return string|null
    */
    public function getServiceNotes(): ?string {
        $val = $this->getBackingStore()->get('serviceNotes');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serviceNotes'");
    }

    /**
     * Gets the smsNotificationsEnabled property value. True indicates SMS notifications will be sent to the customers for the appointment. Default value is false.
     * @return bool|null
    */
    public function getSmsNotificationsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('smsNotificationsEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'smsNotificationsEnabled'");
    }

    /**
     * Gets the staffMemberIds property value. The ID of each bookingStaffMember who is scheduled in this appointment.
     * @return array<string>|null
    */
    public function getStaffMemberIds(): ?array {
        $val = $this->getBackingStore()->get('staffMemberIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'staffMemberIds'");
    }

    /**
     * Gets the start property value. The start property
     * @return DateTimeTimeZone|null
    */
    public function getStart(): ?DateTimeTimeZone {
        $val = $this->getBackingStore()->get('start');
        if (is_null($val) || $val instanceof DateTimeTimeZone) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'start'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('additionalInformation', $this->getAdditionalInformation());
        $writer->writeStringValue('anonymousJoinWebUrl', $this->getAnonymousJoinWebUrl());
        $writer->writeStringValue('customerEmailAddress', $this->getCustomerEmailAddress());
        $writer->writeStringValue('customerId', $this->getCustomerId());
        $writer->writeObjectValue('customerLocation', $this->getCustomerLocation());
        $writer->writeStringValue('customerName', $this->getCustomerName());
        $writer->writeStringValue('customerNotes', $this->getCustomerNotes());
        $writer->writeStringValue('customerPhone', $this->getCustomerPhone());
        $writer->writeCollectionOfObjectValues('customers', $this->getCustomers());
        $writer->writeStringValue('customerTimeZone', $this->getCustomerTimeZone());
        $writer->writeObjectValue('end', $this->getEnd());
        $writer->writeFloatValue('invoiceAmount', $this->getInvoiceAmount());
        $writer->writeObjectValue('invoiceDate', $this->getInvoiceDate());
        $writer->writeStringValue('invoiceId', $this->getInvoiceId());
        $writer->writeEnumValue('invoiceStatus', $this->getInvoiceStatus());
        $writer->writeStringValue('invoiceUrl', $this->getInvoiceUrl());
        $writer->writeBooleanValue('isLocationOnline', $this->getIsLocationOnline());
        $writer->writeStringValue('joinWebUrl', $this->getJoinWebUrl());
        $writer->writeIntegerValue('maximumAttendeesCount', $this->getMaximumAttendeesCount());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('onlineMeetingUrl', $this->getOnlineMeetingUrl());
        $writer->writeBooleanValue('optOutOfCustomerEmail', $this->getOptOutOfCustomerEmail());
        $writer->writeDateIntervalValue('postBuffer', $this->getPostBuffer());
        $writer->writeDateIntervalValue('preBuffer', $this->getPreBuffer());
        $writer->writeFloatValue('price', $this->getPrice());
        $writer->writeEnumValue('priceType', $this->getPriceType());
        $writer->writeCollectionOfObjectValues('reminders', $this->getReminders());
        $writer->writeStringValue('selfServiceAppointmentId', $this->getSelfServiceAppointmentId());
        $writer->writeStringValue('serviceId', $this->getServiceId());
        $writer->writeObjectValue('serviceLocation', $this->getServiceLocation());
        $writer->writeStringValue('serviceName', $this->getServiceName());
        $writer->writeStringValue('serviceNotes', $this->getServiceNotes());
        $writer->writeBooleanValue('smsNotificationsEnabled', $this->getSmsNotificationsEnabled());
        $writer->writeCollectionOfPrimitiveValues('staffMemberIds', $this->getStaffMemberIds());
        $writer->writeObjectValue('start', $this->getStart());
    }

    /**
     * Sets the additionalInformation property value. Additional information that is sent to the customer when an appointment is confirmed.
     * @param string|null $value Value to set for the additionalInformation property.
    */
    public function setAdditionalInformation(?string $value): void {
        $this->getBackingStore()->set('additionalInformation', $value);
    }

    /**
     * Sets the anonymousJoinWebUrl property value. The URL of the meeting to join anonymously.
     * @param string|null $value Value to set for the anonymousJoinWebUrl property.
    */
    public function setAnonymousJoinWebUrl(?string $value): void {
        $this->getBackingStore()->set('anonymousJoinWebUrl', $value);
    }

    /**
     * Sets the customerEmailAddress property value. The SMTP address of the bookingCustomer who is booking the appointment.
     * @param string|null $value Value to set for the customerEmailAddress property.
    */
    public function setCustomerEmailAddress(?string $value): void {
        $this->getBackingStore()->set('customerEmailAddress', $value);
    }

    /**
     * Sets the customerId property value. The ID of the bookingCustomer for this appointment. If no ID is specified when an appointment is created, then a new bookingCustomer object is created. Once set, you should consider the customerId immutable.
     * @param string|null $value Value to set for the customerId property.
    */
    public function setCustomerId(?string $value): void {
        $this->getBackingStore()->set('customerId', $value);
    }

    /**
     * Sets the customerLocation property value. Represents location information for the bookingCustomer who is booking the appointment.
     * @param Location|null $value Value to set for the customerLocation property.
    */
    public function setCustomerLocation(?Location $value): void {
        $this->getBackingStore()->set('customerLocation', $value);
    }

    /**
     * Sets the customerName property value. The customer's name.
     * @param string|null $value Value to set for the customerName property.
    */
    public function setCustomerName(?string $value): void {
        $this->getBackingStore()->set('customerName', $value);
    }

    /**
     * Sets the customerNotes property value. Notes from the customer associated with this appointment. You can get the value only when reading this bookingAppointment by its ID.  You can set this property only when initially creating an appointment with a new customer. After that point, the value is computed from the customer represented by customerId.
     * @param string|null $value Value to set for the customerNotes property.
    */
    public function setCustomerNotes(?string $value): void {
        $this->getBackingStore()->set('customerNotes', $value);
    }

    /**
     * Sets the customerPhone property value. The customer's phone number.
     * @param string|null $value Value to set for the customerPhone property.
    */
    public function setCustomerPhone(?string $value): void {
        $this->getBackingStore()->set('customerPhone', $value);
    }

    /**
     * Sets the customers property value. A collection of the customer properties for an appointment. An appointment will contain a list of customer information and each unit will indicate the properties of a customer who is part of that appointment. Optional.
     * @param array<BookingCustomerInformationBase>|null $value Value to set for the customers property.
    */
    public function setCustomers(?array $value): void {
        $this->getBackingStore()->set('customers', $value);
    }

    /**
     * Sets the customerTimeZone property value. The time zone of the customer. For a list of possible values, see dateTimeTimeZone.
     * @param string|null $value Value to set for the customerTimeZone property.
    */
    public function setCustomerTimeZone(?string $value): void {
        $this->getBackingStore()->set('customerTimeZone', $value);
    }

    /**
     * Sets the duration property value. The length of the appointment, denoted in ISO8601 format.
     * @param DateInterval|null $value Value to set for the duration property.
    */
    public function setDuration(?DateInterval $value): void {
        $this->getBackingStore()->set('duration', $value);
    }

    /**
     * Sets the end property value. The end property
     * @param DateTimeTimeZone|null $value Value to set for the end property.
    */
    public function setEnd(?DateTimeTimeZone $value): void {
        $this->getBackingStore()->set('end', $value);
    }

    /**
     * Sets the filledAttendeesCount property value. The current number of customers in the appointment.
     * @param int|null $value Value to set for the filledAttendeesCount property.
    */
    public function setFilledAttendeesCount(?int $value): void {
        $this->getBackingStore()->set('filledAttendeesCount', $value);
    }

    /**
     * Sets the invoiceAmount property value. The billed amount on the invoice.
     * @param float|null $value Value to set for the invoiceAmount property.
    */
    public function setInvoiceAmount(?float $value): void {
        $this->getBackingStore()->set('invoiceAmount', $value);
    }

    /**
     * Sets the invoiceDate property value. The date, time, and time zone of the invoice for this appointment.
     * @param DateTimeTimeZone|null $value Value to set for the invoiceDate property.
    */
    public function setInvoiceDate(?DateTimeTimeZone $value): void {
        $this->getBackingStore()->set('invoiceDate', $value);
    }

    /**
     * Sets the invoiceId property value. The ID of the invoice.
     * @param string|null $value Value to set for the invoiceId property.
    */
    public function setInvoiceId(?string $value): void {
        $this->getBackingStore()->set('invoiceId', $value);
    }

    /**
     * Sets the invoiceStatus property value. The invoiceStatus property
     * @param BookingInvoiceStatus|null $value Value to set for the invoiceStatus property.
    */
    public function setInvoiceStatus(?BookingInvoiceStatus $value): void {
        $this->getBackingStore()->set('invoiceStatus', $value);
    }

    /**
     * Sets the invoiceUrl property value. The URL of the invoice in Microsoft Bookings.
     * @param string|null $value Value to set for the invoiceUrl property.
    */
    public function setInvoiceUrl(?string $value): void {
        $this->getBackingStore()->set('invoiceUrl', $value);
    }

    /**
     * Sets the isLocationOnline property value. True indicates that the appointment will be held online. Default value is false.
     * @param bool|null $value Value to set for the isLocationOnline property.
    */
    public function setIsLocationOnline(?bool $value): void {
        $this->getBackingStore()->set('isLocationOnline', $value);
    }

    /**
     * Sets the joinWebUrl property value. The URL of the online meeting for the appointment.
     * @param string|null $value Value to set for the joinWebUrl property.
    */
    public function setJoinWebUrl(?string $value): void {
        $this->getBackingStore()->set('joinWebUrl', $value);
    }

    /**
     * Sets the maximumAttendeesCount property value. The maximum number of customers allowed in an appointment. If maximumAttendeesCount of the service is greater than 1, pass valid customer IDs while creating or updating an appointment. To create a customer, use the Create bookingCustomer operation.
     * @param int|null $value Value to set for the maximumAttendeesCount property.
    */
    public function setMaximumAttendeesCount(?int $value): void {
        $this->getBackingStore()->set('maximumAttendeesCount', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the onlineMeetingUrl property value. The onlineMeetingUrl property
     * @param string|null $value Value to set for the onlineMeetingUrl property.
    */
    public function setOnlineMeetingUrl(?string $value): void {
        $this->getBackingStore()->set('onlineMeetingUrl', $value);
    }

    /**
     * Sets the optOutOfCustomerEmail property value. True indicates that the bookingCustomer for this appointment does not wish to receive a confirmation for this appointment.
     * @param bool|null $value Value to set for the optOutOfCustomerEmail property.
    */
    public function setOptOutOfCustomerEmail(?bool $value): void {
        $this->getBackingStore()->set('optOutOfCustomerEmail', $value);
    }

    /**
     * Sets the postBuffer property value. The amount of time to reserve after the appointment ends, for cleaning up, as an example. The value is expressed in ISO8601 format.
     * @param DateInterval|null $value Value to set for the postBuffer property.
    */
    public function setPostBuffer(?DateInterval $value): void {
        $this->getBackingStore()->set('postBuffer', $value);
    }

    /**
     * Sets the preBuffer property value. The amount of time to reserve before the appointment begins, for preparation, as an example. The value is expressed in ISO8601 format.
     * @param DateInterval|null $value Value to set for the preBuffer property.
    */
    public function setPreBuffer(?DateInterval $value): void {
        $this->getBackingStore()->set('preBuffer', $value);
    }

    /**
     * Sets the price property value. The regular price for an appointment for the specified bookingService.
     * @param float|null $value Value to set for the price property.
    */
    public function setPrice(?float $value): void {
        $this->getBackingStore()->set('price', $value);
    }

    /**
     * Sets the priceType property value. Represents the type of pricing of a booking service.
     * @param BookingPriceType|null $value Value to set for the priceType property.
    */
    public function setPriceType(?BookingPriceType $value): void {
        $this->getBackingStore()->set('priceType', $value);
    }

    /**
     * Sets the reminders property value. The collection of customer reminders sent for this appointment. The value of this property is available only when reading this bookingAppointment by its ID.
     * @param array<BookingReminder>|null $value Value to set for the reminders property.
    */
    public function setReminders(?array $value): void {
        $this->getBackingStore()->set('reminders', $value);
    }

    /**
     * Sets the selfServiceAppointmentId property value. An additional tracking ID for the appointment, if the appointment has been created directly by the customer on the scheduling page, as opposed to by a staff member on the behalf of the customer.
     * @param string|null $value Value to set for the selfServiceAppointmentId property.
    */
    public function setSelfServiceAppointmentId(?string $value): void {
        $this->getBackingStore()->set('selfServiceAppointmentId', $value);
    }

    /**
     * Sets the serviceId property value. The ID of the bookingService associated with this appointment.
     * @param string|null $value Value to set for the serviceId property.
    */
    public function setServiceId(?string $value): void {
        $this->getBackingStore()->set('serviceId', $value);
    }

    /**
     * Sets the serviceLocation property value. The location where the service is delivered.
     * @param Location|null $value Value to set for the serviceLocation property.
    */
    public function setServiceLocation(?Location $value): void {
        $this->getBackingStore()->set('serviceLocation', $value);
    }

    /**
     * Sets the serviceName property value. The name of the bookingService associated with this appointment.This property is optional when creating a new appointment. If not specified, it is computed from the service associated with the appointment by the serviceId property.
     * @param string|null $value Value to set for the serviceName property.
    */
    public function setServiceName(?string $value): void {
        $this->getBackingStore()->set('serviceName', $value);
    }

    /**
     * Sets the serviceNotes property value. Notes from a bookingStaffMember. The value of this property is available only when reading this bookingAppointment by its ID.
     * @param string|null $value Value to set for the serviceNotes property.
    */
    public function setServiceNotes(?string $value): void {
        $this->getBackingStore()->set('serviceNotes', $value);
    }

    /**
     * Sets the smsNotificationsEnabled property value. True indicates SMS notifications will be sent to the customers for the appointment. Default value is false.
     * @param bool|null $value Value to set for the smsNotificationsEnabled property.
    */
    public function setSmsNotificationsEnabled(?bool $value): void {
        $this->getBackingStore()->set('smsNotificationsEnabled', $value);
    }

    /**
     * Sets the staffMemberIds property value. The ID of each bookingStaffMember who is scheduled in this appointment.
     * @param array<string>|null $value Value to set for the staffMemberIds property.
    */
    public function setStaffMemberIds(?array $value): void {
        $this->getBackingStore()->set('staffMemberIds', $value);
    }

    /**
     * Sets the start property value. The start property
     * @param DateTimeTimeZone|null $value Value to set for the start property.
    */
    public function setStart(?DateTimeTimeZone $value): void {
        $this->getBackingStore()->set('start', $value);
    }

}

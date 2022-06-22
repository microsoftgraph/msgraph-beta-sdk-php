<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BookingAppointment extends Entity implements Parsable 
{
    /**
     * @var string|null $additionalInformation Additional information that is sent to the customer when an appointment is confirmed.
    */
    private ?string $additionalInformation = null;
    
    /**
     * @var string|null $anonymousJoinWebUrl Url of meeting to join anonymously.
    */
    private ?string $anonymousJoinWebUrl = null;
    
    /**
     * @var string|null $customerEmailAddress The SMTP address of the bookingCustomer who is booking the appointment.
    */
    private ?string $customerEmailAddress = null;
    
    /**
     * @var string|null $customerId The ID of the bookingCustomer for this appointment. If no ID is specified when an appointment is created, then a new bookingCustomer object is created. Once set, you should consider the customerId immutable.
    */
    private ?string $customerId = null;
    
    /**
     * @var Location|null $customerLocation Represents location information for the bookingCustomer who is booking the appointment.
    */
    private ?Location $customerLocation = null;
    
    /**
     * @var string|null $customerName The customer's name.
    */
    private ?string $customerName = null;
    
    /**
     * @var string|null $customerNotes Notes from the customer associated with this appointment. You can get the value only when reading this bookingAppointment by its ID.  You can set this property only when initially creating an appointment with a new customer. After that point, the value is computed from the customer represented by customerId.
    */
    private ?string $customerNotes = null;
    
    /**
     * @var string|null $customerPhone The customer's phone number.
    */
    private ?string $customerPhone = null;
    
    /**
     * @var array<BookingCustomerInformationBase>|null $customers It lists down the customer properties for an appointment. An appointment will contain a list of customer information and each unit will indicate the properties of a customer who is part of that appointment. Optional.
    */
    private ?array $customers = null;
    
    /**
     * @var string|null $customerTimeZone The time zone of the customer. For a list of possible values, see dateTimeTimeZone.
    */
    private ?string $customerTimeZone = null;
    
    /**
     * @var DateInterval|null $duration The length of the appointment, denoted in ISO8601 format.
    */
    private ?DateInterval $duration = null;
    
    /**
     * @var DateTimeTimeZone|null $end The end property
    */
    private ?DateTimeTimeZone $end = null;
    
    /**
     * @var int|null $filledAttendeesCount The current number of customers in the appointment.
    */
    private ?int $filledAttendeesCount = null;
    
    /**
     * @var float|null $invoiceAmount The billed amount on the invoice.
    */
    private ?float $invoiceAmount = null;
    
    /**
     * @var DateTimeTimeZone|null $invoiceDate The date, time, and time zone of the invoice for this appointment.
    */
    private ?DateTimeTimeZone $invoiceDate = null;
    
    /**
     * @var string|null $invoiceId The ID of the invoice.
    */
    private ?string $invoiceId = null;
    
    /**
     * @var BookingInvoiceStatus|null $invoiceStatus The status of the invoice. Possible values are: draft, reviewing, open, canceled, paid, corrective.
    */
    private ?BookingInvoiceStatus $invoiceStatus = null;
    
    /**
     * @var string|null $invoiceUrl The URL of the invoice in Microsoft Bookings.
    */
    private ?string $invoiceUrl = null;
    
    /**
     * @var bool|null $isLocationOnline True indicates that the appointment will be held online. Default value is false.
    */
    private ?bool $isLocationOnline = null;
    
    /**
     * @var string|null $joinWebUrl The URL of the online meeting for the appointment.
    */
    private ?string $joinWebUrl = null;
    
    /**
     * @var int|null $maximumAttendeesCount The maximum number of customers allowed in an appointment. If maximumAttendeesCount of the service is greater than 1, pass valid customer IDs while creating or updating an appointment. To create a customer, use the Create bookingCustomer operation.
    */
    private ?int $maximumAttendeesCount = null;
    
    /**
     * @var string|null $onlineMeetingUrl The onlineMeetingUrl property
    */
    private ?string $onlineMeetingUrl = null;
    
    /**
     * @var bool|null $optOutOfCustomerEmail True indicates that the bookingCustomer for this appointment does not wish to receive a confirmation for this appointment.
    */
    private ?bool $optOutOfCustomerEmail = null;
    
    /**
     * @var DateInterval|null $postBuffer The amount of time to reserve after the appointment ends, for cleaning up, as an example. The value is expressed in ISO8601 format.
    */
    private ?DateInterval $postBuffer = null;
    
    /**
     * @var DateInterval|null $preBuffer The amount of time to reserve before the appointment begins, for preparation, as an example. The value is expressed in ISO8601 format.
    */
    private ?DateInterval $preBuffer = null;
    
    /**
     * @var float|null $price The regular price for an appointment for the specified bookingService.
    */
    private ?float $price = null;
    
    /**
     * @var BookingPriceType|null $priceType A setting to provide flexibility for the pricing structure of services. Possible values are: undefined, fixedPrice, startingAt, hourly, free, priceVaries, callUs, notSet, unknownFutureValue.
    */
    private ?BookingPriceType $priceType = null;
    
    /**
     * @var array<BookingReminder>|null $reminders The collection of customer reminders sent for this appointment. The value of this property is available only when reading this bookingAppointment by its ID.
    */
    private ?array $reminders = null;
    
    /**
     * @var string|null $selfServiceAppointmentId An additional tracking ID for the appointment, if the appointment has been created directly by the customer on the scheduling page, as opposed to by a staff member on the behalf of the customer.
    */
    private ?string $selfServiceAppointmentId = null;
    
    /**
     * @var string|null $serviceId The ID of the bookingService associated with this appointment.
    */
    private ?string $serviceId = null;
    
    /**
     * @var Location|null $serviceLocation The location where the service is delivered.
    */
    private ?Location $serviceLocation = null;
    
    /**
     * @var string|null $serviceName The name of the bookingService associated with this appointment.This property is optional when creating a new appointment. If not specified, it is computed from the service associated with the appointment by the serviceId property.
    */
    private ?string $serviceName = null;
    
    /**
     * @var string|null $serviceNotes Notes from a bookingStaffMember. The value of this property is available only when reading this bookingAppointment by its ID.
    */
    private ?string $serviceNotes = null;
    
    /**
     * @var bool|null $smsNotificationsEnabled True indicates SMS notifications will be sent to the customers for the appointment. Default value is false.
    */
    private ?bool $smsNotificationsEnabled = null;
    
    /**
     * @var array<string>|null $staffMemberIds The ID of each bookingStaffMember who is scheduled in this appointment.
    */
    private ?array $staffMemberIds = null;
    
    /**
     * @var DateTimeTimeZone|null $start The start property
    */
    private ?DateTimeTimeZone $start = null;
    
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
        return $this->additionalInformation;
    }

    /**
     * Gets the anonymousJoinWebUrl property value. Url of meeting to join anonymously.
     * @return string|null
    */
    public function getAnonymousJoinWebUrl(): ?string {
        return $this->anonymousJoinWebUrl;
    }

    /**
     * Gets the customerEmailAddress property value. The SMTP address of the bookingCustomer who is booking the appointment.
     * @return string|null
    */
    public function getCustomerEmailAddress(): ?string {
        return $this->customerEmailAddress;
    }

    /**
     * Gets the customerId property value. The ID of the bookingCustomer for this appointment. If no ID is specified when an appointment is created, then a new bookingCustomer object is created. Once set, you should consider the customerId immutable.
     * @return string|null
    */
    public function getCustomerId(): ?string {
        return $this->customerId;
    }

    /**
     * Gets the customerLocation property value. Represents location information for the bookingCustomer who is booking the appointment.
     * @return Location|null
    */
    public function getCustomerLocation(): ?Location {
        return $this->customerLocation;
    }

    /**
     * Gets the customerName property value. The customer's name.
     * @return string|null
    */
    public function getCustomerName(): ?string {
        return $this->customerName;
    }

    /**
     * Gets the customerNotes property value. Notes from the customer associated with this appointment. You can get the value only when reading this bookingAppointment by its ID.  You can set this property only when initially creating an appointment with a new customer. After that point, the value is computed from the customer represented by customerId.
     * @return string|null
    */
    public function getCustomerNotes(): ?string {
        return $this->customerNotes;
    }

    /**
     * Gets the customerPhone property value. The customer's phone number.
     * @return string|null
    */
    public function getCustomerPhone(): ?string {
        return $this->customerPhone;
    }

    /**
     * Gets the customers property value. It lists down the customer properties for an appointment. An appointment will contain a list of customer information and each unit will indicate the properties of a customer who is part of that appointment. Optional.
     * @return array<BookingCustomerInformationBase>|null
    */
    public function getCustomers(): ?array {
        return $this->customers;
    }

    /**
     * Gets the customerTimeZone property value. The time zone of the customer. For a list of possible values, see dateTimeTimeZone.
     * @return string|null
    */
    public function getCustomerTimeZone(): ?string {
        return $this->customerTimeZone;
    }

    /**
     * Gets the duration property value. The length of the appointment, denoted in ISO8601 format.
     * @return DateInterval|null
    */
    public function getDuration(): ?DateInterval {
        return $this->duration;
    }

    /**
     * Gets the end property value. The end property
     * @return DateTimeTimeZone|null
    */
    public function getEnd(): ?DateTimeTimeZone {
        return $this->end;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'additionalInformation' => function (ParseNode $n) use ($o) { $o->setAdditionalInformation($n->getStringValue()); },
            'anonymousJoinWebUrl' => function (ParseNode $n) use ($o) { $o->setAnonymousJoinWebUrl($n->getStringValue()); },
            'customerEmailAddress' => function (ParseNode $n) use ($o) { $o->setCustomerEmailAddress($n->getStringValue()); },
            'customerId' => function (ParseNode $n) use ($o) { $o->setCustomerId($n->getStringValue()); },
            'customerLocation' => function (ParseNode $n) use ($o) { $o->setCustomerLocation($n->getObjectValue(array(Location::class, 'createFromDiscriminatorValue'))); },
            'customerName' => function (ParseNode $n) use ($o) { $o->setCustomerName($n->getStringValue()); },
            'customerNotes' => function (ParseNode $n) use ($o) { $o->setCustomerNotes($n->getStringValue()); },
            'customerPhone' => function (ParseNode $n) use ($o) { $o->setCustomerPhone($n->getStringValue()); },
            'customers' => function (ParseNode $n) use ($o) { $o->setCustomers($n->getCollectionOfObjectValues(array(BookingCustomerInformationBase::class, 'createFromDiscriminatorValue'))); },
            'customerTimeZone' => function (ParseNode $n) use ($o) { $o->setCustomerTimeZone($n->getStringValue()); },
            'duration' => function (ParseNode $n) use ($o) { $o->setDuration($n->getDateIntervalValue()); },
            'end' => function (ParseNode $n) use ($o) { $o->setEnd($n->getObjectValue(array(DateTimeTimeZone::class, 'createFromDiscriminatorValue'))); },
            'filledAttendeesCount' => function (ParseNode $n) use ($o) { $o->setFilledAttendeesCount($n->getIntegerValue()); },
            'invoiceAmount' => function (ParseNode $n) use ($o) { $o->setInvoiceAmount($n->getFloatValue()); },
            'invoiceDate' => function (ParseNode $n) use ($o) { $o->setInvoiceDate($n->getObjectValue(array(DateTimeTimeZone::class, 'createFromDiscriminatorValue'))); },
            'invoiceId' => function (ParseNode $n) use ($o) { $o->setInvoiceId($n->getStringValue()); },
            'invoiceStatus' => function (ParseNode $n) use ($o) { $o->setInvoiceStatus($n->getEnumValue(BookingInvoiceStatus::class)); },
            'invoiceUrl' => function (ParseNode $n) use ($o) { $o->setInvoiceUrl($n->getStringValue()); },
            'isLocationOnline' => function (ParseNode $n) use ($o) { $o->setIsLocationOnline($n->getBooleanValue()); },
            'joinWebUrl' => function (ParseNode $n) use ($o) { $o->setJoinWebUrl($n->getStringValue()); },
            'maximumAttendeesCount' => function (ParseNode $n) use ($o) { $o->setMaximumAttendeesCount($n->getIntegerValue()); },
            'onlineMeetingUrl' => function (ParseNode $n) use ($o) { $o->setOnlineMeetingUrl($n->getStringValue()); },
            'optOutOfCustomerEmail' => function (ParseNode $n) use ($o) { $o->setOptOutOfCustomerEmail($n->getBooleanValue()); },
            'postBuffer' => function (ParseNode $n) use ($o) { $o->setPostBuffer($n->getDateIntervalValue()); },
            'preBuffer' => function (ParseNode $n) use ($o) { $o->setPreBuffer($n->getDateIntervalValue()); },
            'price' => function (ParseNode $n) use ($o) { $o->setPrice($n->getFloatValue()); },
            'priceType' => function (ParseNode $n) use ($o) { $o->setPriceType($n->getEnumValue(BookingPriceType::class)); },
            'reminders' => function (ParseNode $n) use ($o) { $o->setReminders($n->getCollectionOfObjectValues(array(BookingReminder::class, 'createFromDiscriminatorValue'))); },
            'selfServiceAppointmentId' => function (ParseNode $n) use ($o) { $o->setSelfServiceAppointmentId($n->getStringValue()); },
            'serviceId' => function (ParseNode $n) use ($o) { $o->setServiceId($n->getStringValue()); },
            'serviceLocation' => function (ParseNode $n) use ($o) { $o->setServiceLocation($n->getObjectValue(array(Location::class, 'createFromDiscriminatorValue'))); },
            'serviceName' => function (ParseNode $n) use ($o) { $o->setServiceName($n->getStringValue()); },
            'serviceNotes' => function (ParseNode $n) use ($o) { $o->setServiceNotes($n->getStringValue()); },
            'smsNotificationsEnabled' => function (ParseNode $n) use ($o) { $o->setSmsNotificationsEnabled($n->getBooleanValue()); },
            'staffMemberIds' => function (ParseNode $n) use ($o) { $o->setStaffMemberIds($n->getCollectionOfPrimitiveValues()); },
            'start' => function (ParseNode $n) use ($o) { $o->setStart($n->getObjectValue(array(DateTimeTimeZone::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the filledAttendeesCount property value. The current number of customers in the appointment.
     * @return int|null
    */
    public function getFilledAttendeesCount(): ?int {
        return $this->filledAttendeesCount;
    }

    /**
     * Gets the invoiceAmount property value. The billed amount on the invoice.
     * @return float|null
    */
    public function getInvoiceAmount(): ?float {
        return $this->invoiceAmount;
    }

    /**
     * Gets the invoiceDate property value. The date, time, and time zone of the invoice for this appointment.
     * @return DateTimeTimeZone|null
    */
    public function getInvoiceDate(): ?DateTimeTimeZone {
        return $this->invoiceDate;
    }

    /**
     * Gets the invoiceId property value. The ID of the invoice.
     * @return string|null
    */
    public function getInvoiceId(): ?string {
        return $this->invoiceId;
    }

    /**
     * Gets the invoiceStatus property value. The status of the invoice. Possible values are: draft, reviewing, open, canceled, paid, corrective.
     * @return BookingInvoiceStatus|null
    */
    public function getInvoiceStatus(): ?BookingInvoiceStatus {
        return $this->invoiceStatus;
    }

    /**
     * Gets the invoiceUrl property value. The URL of the invoice in Microsoft Bookings.
     * @return string|null
    */
    public function getInvoiceUrl(): ?string {
        return $this->invoiceUrl;
    }

    /**
     * Gets the isLocationOnline property value. True indicates that the appointment will be held online. Default value is false.
     * @return bool|null
    */
    public function getIsLocationOnline(): ?bool {
        return $this->isLocationOnline;
    }

    /**
     * Gets the joinWebUrl property value. The URL of the online meeting for the appointment.
     * @return string|null
    */
    public function getJoinWebUrl(): ?string {
        return $this->joinWebUrl;
    }

    /**
     * Gets the maximumAttendeesCount property value. The maximum number of customers allowed in an appointment. If maximumAttendeesCount of the service is greater than 1, pass valid customer IDs while creating or updating an appointment. To create a customer, use the Create bookingCustomer operation.
     * @return int|null
    */
    public function getMaximumAttendeesCount(): ?int {
        return $this->maximumAttendeesCount;
    }

    /**
     * Gets the onlineMeetingUrl property value. The onlineMeetingUrl property
     * @return string|null
    */
    public function getOnlineMeetingUrl(): ?string {
        return $this->onlineMeetingUrl;
    }

    /**
     * Gets the optOutOfCustomerEmail property value. True indicates that the bookingCustomer for this appointment does not wish to receive a confirmation for this appointment.
     * @return bool|null
    */
    public function getOptOutOfCustomerEmail(): ?bool {
        return $this->optOutOfCustomerEmail;
    }

    /**
     * Gets the postBuffer property value. The amount of time to reserve after the appointment ends, for cleaning up, as an example. The value is expressed in ISO8601 format.
     * @return DateInterval|null
    */
    public function getPostBuffer(): ?DateInterval {
        return $this->postBuffer;
    }

    /**
     * Gets the preBuffer property value. The amount of time to reserve before the appointment begins, for preparation, as an example. The value is expressed in ISO8601 format.
     * @return DateInterval|null
    */
    public function getPreBuffer(): ?DateInterval {
        return $this->preBuffer;
    }

    /**
     * Gets the price property value. The regular price for an appointment for the specified bookingService.
     * @return float|null
    */
    public function getPrice(): ?float {
        return $this->price;
    }

    /**
     * Gets the priceType property value. A setting to provide flexibility for the pricing structure of services. Possible values are: undefined, fixedPrice, startingAt, hourly, free, priceVaries, callUs, notSet, unknownFutureValue.
     * @return BookingPriceType|null
    */
    public function getPriceType(): ?BookingPriceType {
        return $this->priceType;
    }

    /**
     * Gets the reminders property value. The collection of customer reminders sent for this appointment. The value of this property is available only when reading this bookingAppointment by its ID.
     * @return array<BookingReminder>|null
    */
    public function getReminders(): ?array {
        return $this->reminders;
    }

    /**
     * Gets the selfServiceAppointmentId property value. An additional tracking ID for the appointment, if the appointment has been created directly by the customer on the scheduling page, as opposed to by a staff member on the behalf of the customer.
     * @return string|null
    */
    public function getSelfServiceAppointmentId(): ?string {
        return $this->selfServiceAppointmentId;
    }

    /**
     * Gets the serviceId property value. The ID of the bookingService associated with this appointment.
     * @return string|null
    */
    public function getServiceId(): ?string {
        return $this->serviceId;
    }

    /**
     * Gets the serviceLocation property value. The location where the service is delivered.
     * @return Location|null
    */
    public function getServiceLocation(): ?Location {
        return $this->serviceLocation;
    }

    /**
     * Gets the serviceName property value. The name of the bookingService associated with this appointment.This property is optional when creating a new appointment. If not specified, it is computed from the service associated with the appointment by the serviceId property.
     * @return string|null
    */
    public function getServiceName(): ?string {
        return $this->serviceName;
    }

    /**
     * Gets the serviceNotes property value. Notes from a bookingStaffMember. The value of this property is available only when reading this bookingAppointment by its ID.
     * @return string|null
    */
    public function getServiceNotes(): ?string {
        return $this->serviceNotes;
    }

    /**
     * Gets the smsNotificationsEnabled property value. True indicates SMS notifications will be sent to the customers for the appointment. Default value is false.
     * @return bool|null
    */
    public function getSmsNotificationsEnabled(): ?bool {
        return $this->smsNotificationsEnabled;
    }

    /**
     * Gets the staffMemberIds property value. The ID of each bookingStaffMember who is scheduled in this appointment.
     * @return array<string>|null
    */
    public function getStaffMemberIds(): ?array {
        return $this->staffMemberIds;
    }

    /**
     * Gets the start property value. The start property
     * @return DateTimeTimeZone|null
    */
    public function getStart(): ?DateTimeTimeZone {
        return $this->start;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('additionalInformation', $this->additionalInformation);
        $writer->writeStringValue('anonymousJoinWebUrl', $this->anonymousJoinWebUrl);
        $writer->writeStringValue('customerEmailAddress', $this->customerEmailAddress);
        $writer->writeStringValue('customerId', $this->customerId);
        $writer->writeObjectValue('customerLocation', $this->customerLocation);
        $writer->writeStringValue('customerName', $this->customerName);
        $writer->writeStringValue('customerNotes', $this->customerNotes);
        $writer->writeStringValue('customerPhone', $this->customerPhone);
        $writer->writeCollectionOfObjectValues('customers', $this->customers);
        $writer->writeStringValue('customerTimeZone', $this->customerTimeZone);
        $writer->writeDateIntervalValue('duration', $this->duration);
        $writer->writeObjectValue('end', $this->end);
        $writer->writeIntegerValue('filledAttendeesCount', $this->filledAttendeesCount);
        $writer->writeFloatValue('invoiceAmount', $this->invoiceAmount);
        $writer->writeObjectValue('invoiceDate', $this->invoiceDate);
        $writer->writeStringValue('invoiceId', $this->invoiceId);
        $writer->writeEnumValue('invoiceStatus', $this->invoiceStatus);
        $writer->writeStringValue('invoiceUrl', $this->invoiceUrl);
        $writer->writeBooleanValue('isLocationOnline', $this->isLocationOnline);
        $writer->writeStringValue('joinWebUrl', $this->joinWebUrl);
        $writer->writeIntegerValue('maximumAttendeesCount', $this->maximumAttendeesCount);
        $writer->writeStringValue('onlineMeetingUrl', $this->onlineMeetingUrl);
        $writer->writeBooleanValue('optOutOfCustomerEmail', $this->optOutOfCustomerEmail);
        $writer->writeDateIntervalValue('postBuffer', $this->postBuffer);
        $writer->writeDateIntervalValue('preBuffer', $this->preBuffer);
        $writer->writeFloatValue('price', $this->price);
        $writer->writeEnumValue('priceType', $this->priceType);
        $writer->writeCollectionOfObjectValues('reminders', $this->reminders);
        $writer->writeStringValue('selfServiceAppointmentId', $this->selfServiceAppointmentId);
        $writer->writeStringValue('serviceId', $this->serviceId);
        $writer->writeObjectValue('serviceLocation', $this->serviceLocation);
        $writer->writeStringValue('serviceName', $this->serviceName);
        $writer->writeStringValue('serviceNotes', $this->serviceNotes);
        $writer->writeBooleanValue('smsNotificationsEnabled', $this->smsNotificationsEnabled);
        $writer->writeCollectionOfPrimitiveValues('staffMemberIds', $this->staffMemberIds);
        $writer->writeObjectValue('start', $this->start);
    }

    /**
     * Sets the additionalInformation property value. Additional information that is sent to the customer when an appointment is confirmed.
     *  @param string|null $value Value to set for the additionalInformation property.
    */
    public function setAdditionalInformation(?string $value ): void {
        $this->additionalInformation = $value;
    }

    /**
     * Sets the anonymousJoinWebUrl property value. Url of meeting to join anonymously.
     *  @param string|null $value Value to set for the anonymousJoinWebUrl property.
    */
    public function setAnonymousJoinWebUrl(?string $value ): void {
        $this->anonymousJoinWebUrl = $value;
    }

    /**
     * Sets the customerEmailAddress property value. The SMTP address of the bookingCustomer who is booking the appointment.
     *  @param string|null $value Value to set for the customerEmailAddress property.
    */
    public function setCustomerEmailAddress(?string $value ): void {
        $this->customerEmailAddress = $value;
    }

    /**
     * Sets the customerId property value. The ID of the bookingCustomer for this appointment. If no ID is specified when an appointment is created, then a new bookingCustomer object is created. Once set, you should consider the customerId immutable.
     *  @param string|null $value Value to set for the customerId property.
    */
    public function setCustomerId(?string $value ): void {
        $this->customerId = $value;
    }

    /**
     * Sets the customerLocation property value. Represents location information for the bookingCustomer who is booking the appointment.
     *  @param Location|null $value Value to set for the customerLocation property.
    */
    public function setCustomerLocation(?Location $value ): void {
        $this->customerLocation = $value;
    }

    /**
     * Sets the customerName property value. The customer's name.
     *  @param string|null $value Value to set for the customerName property.
    */
    public function setCustomerName(?string $value ): void {
        $this->customerName = $value;
    }

    /**
     * Sets the customerNotes property value. Notes from the customer associated with this appointment. You can get the value only when reading this bookingAppointment by its ID.  You can set this property only when initially creating an appointment with a new customer. After that point, the value is computed from the customer represented by customerId.
     *  @param string|null $value Value to set for the customerNotes property.
    */
    public function setCustomerNotes(?string $value ): void {
        $this->customerNotes = $value;
    }

    /**
     * Sets the customerPhone property value. The customer's phone number.
     *  @param string|null $value Value to set for the customerPhone property.
    */
    public function setCustomerPhone(?string $value ): void {
        $this->customerPhone = $value;
    }

    /**
     * Sets the customers property value. It lists down the customer properties for an appointment. An appointment will contain a list of customer information and each unit will indicate the properties of a customer who is part of that appointment. Optional.
     *  @param array<BookingCustomerInformationBase>|null $value Value to set for the customers property.
    */
    public function setCustomers(?array $value ): void {
        $this->customers = $value;
    }

    /**
     * Sets the customerTimeZone property value. The time zone of the customer. For a list of possible values, see dateTimeTimeZone.
     *  @param string|null $value Value to set for the customerTimeZone property.
    */
    public function setCustomerTimeZone(?string $value ): void {
        $this->customerTimeZone = $value;
    }

    /**
     * Sets the duration property value. The length of the appointment, denoted in ISO8601 format.
     *  @param DateInterval|null $value Value to set for the duration property.
    */
    public function setDuration(?DateInterval $value ): void {
        $this->duration = $value;
    }

    /**
     * Sets the end property value. The end property
     *  @param DateTimeTimeZone|null $value Value to set for the end property.
    */
    public function setEnd(?DateTimeTimeZone $value ): void {
        $this->end = $value;
    }

    /**
     * Sets the filledAttendeesCount property value. The current number of customers in the appointment.
     *  @param int|null $value Value to set for the filledAttendeesCount property.
    */
    public function setFilledAttendeesCount(?int $value ): void {
        $this->filledAttendeesCount = $value;
    }

    /**
     * Sets the invoiceAmount property value. The billed amount on the invoice.
     *  @param float|null $value Value to set for the invoiceAmount property.
    */
    public function setInvoiceAmount(?float $value ): void {
        $this->invoiceAmount = $value;
    }

    /**
     * Sets the invoiceDate property value. The date, time, and time zone of the invoice for this appointment.
     *  @param DateTimeTimeZone|null $value Value to set for the invoiceDate property.
    */
    public function setInvoiceDate(?DateTimeTimeZone $value ): void {
        $this->invoiceDate = $value;
    }

    /**
     * Sets the invoiceId property value. The ID of the invoice.
     *  @param string|null $value Value to set for the invoiceId property.
    */
    public function setInvoiceId(?string $value ): void {
        $this->invoiceId = $value;
    }

    /**
     * Sets the invoiceStatus property value. The status of the invoice. Possible values are: draft, reviewing, open, canceled, paid, corrective.
     *  @param BookingInvoiceStatus|null $value Value to set for the invoiceStatus property.
    */
    public function setInvoiceStatus(?BookingInvoiceStatus $value ): void {
        $this->invoiceStatus = $value;
    }

    /**
     * Sets the invoiceUrl property value. The URL of the invoice in Microsoft Bookings.
     *  @param string|null $value Value to set for the invoiceUrl property.
    */
    public function setInvoiceUrl(?string $value ): void {
        $this->invoiceUrl = $value;
    }

    /**
     * Sets the isLocationOnline property value. True indicates that the appointment will be held online. Default value is false.
     *  @param bool|null $value Value to set for the isLocationOnline property.
    */
    public function setIsLocationOnline(?bool $value ): void {
        $this->isLocationOnline = $value;
    }

    /**
     * Sets the joinWebUrl property value. The URL of the online meeting for the appointment.
     *  @param string|null $value Value to set for the joinWebUrl property.
    */
    public function setJoinWebUrl(?string $value ): void {
        $this->joinWebUrl = $value;
    }

    /**
     * Sets the maximumAttendeesCount property value. The maximum number of customers allowed in an appointment. If maximumAttendeesCount of the service is greater than 1, pass valid customer IDs while creating or updating an appointment. To create a customer, use the Create bookingCustomer operation.
     *  @param int|null $value Value to set for the maximumAttendeesCount property.
    */
    public function setMaximumAttendeesCount(?int $value ): void {
        $this->maximumAttendeesCount = $value;
    }

    /**
     * Sets the onlineMeetingUrl property value. The onlineMeetingUrl property
     *  @param string|null $value Value to set for the onlineMeetingUrl property.
    */
    public function setOnlineMeetingUrl(?string $value ): void {
        $this->onlineMeetingUrl = $value;
    }

    /**
     * Sets the optOutOfCustomerEmail property value. True indicates that the bookingCustomer for this appointment does not wish to receive a confirmation for this appointment.
     *  @param bool|null $value Value to set for the optOutOfCustomerEmail property.
    */
    public function setOptOutOfCustomerEmail(?bool $value ): void {
        $this->optOutOfCustomerEmail = $value;
    }

    /**
     * Sets the postBuffer property value. The amount of time to reserve after the appointment ends, for cleaning up, as an example. The value is expressed in ISO8601 format.
     *  @param DateInterval|null $value Value to set for the postBuffer property.
    */
    public function setPostBuffer(?DateInterval $value ): void {
        $this->postBuffer = $value;
    }

    /**
     * Sets the preBuffer property value. The amount of time to reserve before the appointment begins, for preparation, as an example. The value is expressed in ISO8601 format.
     *  @param DateInterval|null $value Value to set for the preBuffer property.
    */
    public function setPreBuffer(?DateInterval $value ): void {
        $this->preBuffer = $value;
    }

    /**
     * Sets the price property value. The regular price for an appointment for the specified bookingService.
     *  @param float|null $value Value to set for the price property.
    */
    public function setPrice(?float $value ): void {
        $this->price = $value;
    }

    /**
     * Sets the priceType property value. A setting to provide flexibility for the pricing structure of services. Possible values are: undefined, fixedPrice, startingAt, hourly, free, priceVaries, callUs, notSet, unknownFutureValue.
     *  @param BookingPriceType|null $value Value to set for the priceType property.
    */
    public function setPriceType(?BookingPriceType $value ): void {
        $this->priceType = $value;
    }

    /**
     * Sets the reminders property value. The collection of customer reminders sent for this appointment. The value of this property is available only when reading this bookingAppointment by its ID.
     *  @param array<BookingReminder>|null $value Value to set for the reminders property.
    */
    public function setReminders(?array $value ): void {
        $this->reminders = $value;
    }

    /**
     * Sets the selfServiceAppointmentId property value. An additional tracking ID for the appointment, if the appointment has been created directly by the customer on the scheduling page, as opposed to by a staff member on the behalf of the customer.
     *  @param string|null $value Value to set for the selfServiceAppointmentId property.
    */
    public function setSelfServiceAppointmentId(?string $value ): void {
        $this->selfServiceAppointmentId = $value;
    }

    /**
     * Sets the serviceId property value. The ID of the bookingService associated with this appointment.
     *  @param string|null $value Value to set for the serviceId property.
    */
    public function setServiceId(?string $value ): void {
        $this->serviceId = $value;
    }

    /**
     * Sets the serviceLocation property value. The location where the service is delivered.
     *  @param Location|null $value Value to set for the serviceLocation property.
    */
    public function setServiceLocation(?Location $value ): void {
        $this->serviceLocation = $value;
    }

    /**
     * Sets the serviceName property value. The name of the bookingService associated with this appointment.This property is optional when creating a new appointment. If not specified, it is computed from the service associated with the appointment by the serviceId property.
     *  @param string|null $value Value to set for the serviceName property.
    */
    public function setServiceName(?string $value ): void {
        $this->serviceName = $value;
    }

    /**
     * Sets the serviceNotes property value. Notes from a bookingStaffMember. The value of this property is available only when reading this bookingAppointment by its ID.
     *  @param string|null $value Value to set for the serviceNotes property.
    */
    public function setServiceNotes(?string $value ): void {
        $this->serviceNotes = $value;
    }

    /**
     * Sets the smsNotificationsEnabled property value. True indicates SMS notifications will be sent to the customers for the appointment. Default value is false.
     *  @param bool|null $value Value to set for the smsNotificationsEnabled property.
    */
    public function setSmsNotificationsEnabled(?bool $value ): void {
        $this->smsNotificationsEnabled = $value;
    }

    /**
     * Sets the staffMemberIds property value. The ID of each bookingStaffMember who is scheduled in this appointment.
     *  @param array<string>|null $value Value to set for the staffMemberIds property.
    */
    public function setStaffMemberIds(?array $value ): void {
        $this->staffMemberIds = $value;
    }

    /**
     * Sets the start property value. The start property
     *  @param DateTimeTimeZone|null $value Value to set for the start property.
    */
    public function setStart(?DateTimeTimeZone $value ): void {
        $this->start = $value;
    }

}

<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceLogCollectionResponse extends Entity implements Parsable 
{
    /**
     * Instantiates a new deviceLogCollectionResponse and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceLogCollectionResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceLogCollectionResponse {
        return new DeviceLogCollectionResponse();
    }

    /**
     * Gets the enrolledByUser property value. The User Principal Name (UPN) of the user that enrolled the device
     * @return string|null
    */
    public function getEnrolledByUser(): ?string {
        return $this->getBackingStore()->get('enrolledByUser');
    }

    /**
     * Gets the errorCode property value. The error code, if any. Valid values -9.22337203685478E+18 to 9.22337203685478E+18
     * @return int|null
    */
    public function getErrorCode(): ?int {
        return $this->getBackingStore()->get('errorCode');
    }

    /**
     * Gets the expirationDateTimeUTC property value. The DateTime of the expiration of the logs
     * @return DateTime|null
    */
    public function getExpirationDateTimeUTC(): ?DateTime {
        return $this->getBackingStore()->get('expirationDateTimeUTC');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'enrolledByUser' => fn(ParseNode $n) => $o->setEnrolledByUser($n->getStringValue()),
            'errorCode' => fn(ParseNode $n) => $o->setErrorCode($n->getIntegerValue()),
            'expirationDateTimeUTC' => fn(ParseNode $n) => $o->setExpirationDateTimeUTC($n->getDateTimeValue()),
            'initiatedByUserPrincipalName' => fn(ParseNode $n) => $o->setInitiatedByUserPrincipalName($n->getStringValue()),
            'managedDeviceId' => fn(ParseNode $n) => $o->setManagedDeviceId($n->getObjectValue([Guid::class, 'createFromDiscriminatorValue'])),
            'receivedDateTimeUTC' => fn(ParseNode $n) => $o->setReceivedDateTimeUTC($n->getDateTimeValue()),
            'requestedDateTimeUTC' => fn(ParseNode $n) => $o->setRequestedDateTimeUTC($n->getDateTimeValue()),
            'size' => fn(ParseNode $n) => $o->setSize($n->getFloatValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
        ]);
    }

    /**
     * Gets the initiatedByUserPrincipalName property value. The UPN for who initiated the request
     * @return string|null
    */
    public function getInitiatedByUserPrincipalName(): ?string {
        return $this->getBackingStore()->get('initiatedByUserPrincipalName');
    }

    /**
     * Gets the managedDeviceId property value. The device Id
     * @return Guid|null
    */
    public function getManagedDeviceId(): ?Guid {
        return $this->getBackingStore()->get('managedDeviceId');
    }

    /**
     * Gets the receivedDateTimeUTC property value. The DateTime the request was received
     * @return DateTime|null
    */
    public function getReceivedDateTimeUTC(): ?DateTime {
        return $this->getBackingStore()->get('receivedDateTimeUTC');
    }

    /**
     * Gets the requestedDateTimeUTC property value. The DateTime of the request
     * @return DateTime|null
    */
    public function getRequestedDateTimeUTC(): ?DateTime {
        return $this->getBackingStore()->get('requestedDateTimeUTC');
    }

    /**
     * Gets the size property value. The size of the logs. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getSize(): ?float {
        return $this->getBackingStore()->get('size');
    }

    /**
     * Gets the status property value. The status of the log collection request
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('enrolledByUser', $this->getEnrolledByUser());
        $writer->writeIntegerValue('errorCode', $this->getErrorCode());
        $writer->writeDateTimeValue('expirationDateTimeUTC', $this->getExpirationDateTimeUTC());
        $writer->writeStringValue('initiatedByUserPrincipalName', $this->getInitiatedByUserPrincipalName());
        $writer->writeStringValue('managedDeviceId', $this->getManagedDeviceId());
        $writer->writeDateTimeValue('receivedDateTimeUTC', $this->getReceivedDateTimeUTC());
        $writer->writeDateTimeValue('requestedDateTimeUTC', $this->getRequestedDateTimeUTC());
        $writer->writeFloatValue('size', $this->getSize());
        $writer->writeStringValue('status', $this->getStatus());
    }

    /**
     * Sets the enrolledByUser property value. The User Principal Name (UPN) of the user that enrolled the device
     *  @param string|null $value Value to set for the enrolledByUser property.
    */
    public function setEnrolledByUser(?string $value): void {
        $this->getBackingStore()->set('enrolledByUser', $value);
    }

    /**
     * Sets the errorCode property value. The error code, if any. Valid values -9.22337203685478E+18 to 9.22337203685478E+18
     *  @param int|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?int $value): void {
        $this->getBackingStore()->set('errorCode', $value);
    }

    /**
     * Sets the expirationDateTimeUTC property value. The DateTime of the expiration of the logs
     *  @param DateTime|null $value Value to set for the expirationDateTimeUTC property.
    */
    public function setExpirationDateTimeUTC(?DateTime $value): void {
        $this->getBackingStore()->set('expirationDateTimeUTC', $value);
    }

    /**
     * Sets the initiatedByUserPrincipalName property value. The UPN for who initiated the request
     *  @param string|null $value Value to set for the initiatedByUserPrincipalName property.
    */
    public function setInitiatedByUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('initiatedByUserPrincipalName', $value);
    }

    /**
     * Sets the managedDeviceId property value. The device Id
     *  @param Guid|null $value Value to set for the managedDeviceId property.
    */
    public function setManagedDeviceId(?Guid $value): void {
        $this->getBackingStore()->set('managedDeviceId', $value);
    }

    /**
     * Sets the receivedDateTimeUTC property value. The DateTime the request was received
     *  @param DateTime|null $value Value to set for the receivedDateTimeUTC property.
    */
    public function setReceivedDateTimeUTC(?DateTime $value): void {
        $this->getBackingStore()->set('receivedDateTimeUTC', $value);
    }

    /**
     * Sets the requestedDateTimeUTC property value. The DateTime of the request
     *  @param DateTime|null $value Value to set for the requestedDateTimeUTC property.
    */
    public function setRequestedDateTimeUTC(?DateTime $value): void {
        $this->getBackingStore()->set('requestedDateTimeUTC', $value);
    }

    /**
     * Sets the size property value. The size of the logs. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the size property.
    */
    public function setSize(?float $value): void {
        $this->getBackingStore()->set('size', $value);
    }

    /**
     * Sets the status property value. The status of the log collection request
     *  @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}

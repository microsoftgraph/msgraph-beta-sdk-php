<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceLogCollectionResponse extends Entity implements Parsable 
{
    /**
     * @var int|null $errorCode The error code, if any. Valid values -9.22337203685478E+18 to 9.22337203685478E+18
    */
    private ?int $errorCode = null;
    
    /**
     * @var DateTime|null $expirationDateTimeUTC The DateTime of the expiration of the logs
    */
    private ?DateTime $expirationDateTimeUTC = null;
    
    /**
     * @var string|null $initiatedByUserPrincipalName The UPN for who initiated the request
    */
    private ?string $initiatedByUserPrincipalName = null;
    
    /**
     * @var string|null $managedDeviceId The device Id
    */
    private ?string $managedDeviceId = null;
    
    /**
     * @var DateTime|null $receivedDateTimeUTC The DateTime the request was received
    */
    private ?DateTime $receivedDateTimeUTC = null;
    
    /**
     * @var DateTime|null $requestedDateTimeUTC The DateTime of the request
    */
    private ?DateTime $requestedDateTimeUTC = null;
    
    /**
     * @var float|null $size The size of the logs. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    */
    private ?float $size = null;
    
    /**
     * @var string|null $status The status of the log collection request
    */
    private ?string $status = null;
    
    /**
     * Instantiates a new deviceLogCollectionResponse and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceLogCollectionResponse');
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
     * Gets the errorCode property value. The error code, if any. Valid values -9.22337203685478E+18 to 9.22337203685478E+18
     * @return int|null
    */
    public function getErrorCode(): ?int {
        return $this->errorCode;
    }

    /**
     * Gets the expirationDateTimeUTC property value. The DateTime of the expiration of the logs
     * @return DateTime|null
    */
    public function getExpirationDateTimeUTC(): ?DateTime {
        return $this->expirationDateTimeUTC;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'errorCode' => fn(ParseNode $n) => $o->setErrorCode($n->getIntegerValue()),
            'expirationDateTimeUTC' => fn(ParseNode $n) => $o->setExpirationDateTimeUTC($n->getDateTimeValue()),
            'initiatedByUserPrincipalName' => fn(ParseNode $n) => $o->setInitiatedByUserPrincipalName($n->getStringValue()),
            'managedDeviceId' => fn(ParseNode $n) => $o->setManagedDeviceId($n->getStringValue()),
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
        return $this->initiatedByUserPrincipalName;
    }

    /**
     * Gets the managedDeviceId property value. The device Id
     * @return string|null
    */
    public function getManagedDeviceId(): ?string {
        return $this->managedDeviceId;
    }

    /**
     * Gets the receivedDateTimeUTC property value. The DateTime the request was received
     * @return DateTime|null
    */
    public function getReceivedDateTimeUTC(): ?DateTime {
        return $this->receivedDateTimeUTC;
    }

    /**
     * Gets the requestedDateTimeUTC property value. The DateTime of the request
     * @return DateTime|null
    */
    public function getRequestedDateTimeUTC(): ?DateTime {
        return $this->requestedDateTimeUTC;
    }

    /**
     * Gets the size property value. The size of the logs. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getSize(): ?float {
        return $this->size;
    }

    /**
     * Gets the status property value. The status of the log collection request
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('errorCode', $this->errorCode);
        $writer->writeDateTimeValue('expirationDateTimeUTC', $this->expirationDateTimeUTC);
        $writer->writeStringValue('initiatedByUserPrincipalName', $this->initiatedByUserPrincipalName);
        $writer->writeStringValue('managedDeviceId', $this->managedDeviceId);
        $writer->writeDateTimeValue('receivedDateTimeUTC', $this->receivedDateTimeUTC);
        $writer->writeDateTimeValue('requestedDateTimeUTC', $this->requestedDateTimeUTC);
        $writer->writeFloatValue('size', $this->size);
        $writer->writeStringValue('status', $this->status);
    }

    /**
     * Sets the errorCode property value. The error code, if any. Valid values -9.22337203685478E+18 to 9.22337203685478E+18
     *  @param int|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?int $value ): void {
        $this->errorCode = $value;
    }

    /**
     * Sets the expirationDateTimeUTC property value. The DateTime of the expiration of the logs
     *  @param DateTime|null $value Value to set for the expirationDateTimeUTC property.
    */
    public function setExpirationDateTimeUTC(?DateTime $value ): void {
        $this->expirationDateTimeUTC = $value;
    }

    /**
     * Sets the initiatedByUserPrincipalName property value. The UPN for who initiated the request
     *  @param string|null $value Value to set for the initiatedByUserPrincipalName property.
    */
    public function setInitiatedByUserPrincipalName(?string $value ): void {
        $this->initiatedByUserPrincipalName = $value;
    }

    /**
     * Sets the managedDeviceId property value. The device Id
     *  @param string|null $value Value to set for the managedDeviceId property.
    */
    public function setManagedDeviceId(?string $value ): void {
        $this->managedDeviceId = $value;
    }

    /**
     * Sets the receivedDateTimeUTC property value. The DateTime the request was received
     *  @param DateTime|null $value Value to set for the receivedDateTimeUTC property.
    */
    public function setReceivedDateTimeUTC(?DateTime $value ): void {
        $this->receivedDateTimeUTC = $value;
    }

    /**
     * Sets the requestedDateTimeUTC property value. The DateTime of the request
     *  @param DateTime|null $value Value to set for the requestedDateTimeUTC property.
    */
    public function setRequestedDateTimeUTC(?DateTime $value ): void {
        $this->requestedDateTimeUTC = $value;
    }

    /**
     * Sets the size property value. The size of the logs. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the size property.
    */
    public function setSize(?float $value ): void {
        $this->size = $value;
    }

    /**
     * Sets the status property value. The status of the log collection request
     *  @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value ): void {
        $this->status = $value;
    }

}

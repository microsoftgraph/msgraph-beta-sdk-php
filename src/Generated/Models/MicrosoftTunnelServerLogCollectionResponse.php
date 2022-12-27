<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MicrosoftTunnelServerLogCollectionResponse extends Entity implements Parsable 
{
    /**
     * Instantiates a new microsoftTunnelServerLogCollectionResponse and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MicrosoftTunnelServerLogCollectionResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MicrosoftTunnelServerLogCollectionResponse {
        return new MicrosoftTunnelServerLogCollectionResponse();
    }

    /**
     * Gets the endDateTime property value. The end time of the logs collected
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        return $this->getBackingStore()->get('endDateTime');
    }

    /**
     * Gets the expiryDateTime property value. The time when the log collection is expired
     * @return DateTime|null
    */
    public function getExpiryDateTime(): ?DateTime {
        return $this->getBackingStore()->get('expiryDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'endDateTime' => fn(ParseNode $n) => $o->setEndDateTime($n->getDateTimeValue()),
            'expiryDateTime' => fn(ParseNode $n) => $o->setExpiryDateTime($n->getDateTimeValue()),
            'requestDateTime' => fn(ParseNode $n) => $o->setRequestDateTime($n->getDateTimeValue()),
            'serverId' => fn(ParseNode $n) => $o->setServerId($n->getStringValue()),
            'sizeInBytes' => fn(ParseNode $n) => $o->setSizeInBytes($n->getIntegerValue()),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(MicrosoftTunnelLogCollectionStatus::class)),
        ]);
    }

    /**
     * Gets the requestDateTime property value. The time when the log collection was requested
     * @return DateTime|null
    */
    public function getRequestDateTime(): ?DateTime {
        return $this->getBackingStore()->get('requestDateTime');
    }

    /**
     * Gets the serverId property value. ID of the server the log collection is requested upon
     * @return string|null
    */
    public function getServerId(): ?string {
        return $this->getBackingStore()->get('serverId');
    }

    /**
     * Gets the sizeInBytes property value. The size of the logs in bytes
     * @return int|null
    */
    public function getSizeInBytes(): ?int {
        return $this->getBackingStore()->get('sizeInBytes');
    }

    /**
     * Gets the startDateTime property value. The start time of the logs collected
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->getBackingStore()->get('startDateTime');
    }

    /**
     * Gets the status property value. Enum type that represent the status of log collection
     * @return MicrosoftTunnelLogCollectionStatus|null
    */
    public function getStatus(): ?MicrosoftTunnelLogCollectionStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('endDateTime', $this->getEndDateTime());
        $writer->writeDateTimeValue('expiryDateTime', $this->getExpiryDateTime());
        $writer->writeDateTimeValue('requestDateTime', $this->getRequestDateTime());
        $writer->writeStringValue('serverId', $this->getServerId());
        $writer->writeIntegerValue('sizeInBytes', $this->getSizeInBytes());
        $writer->writeDateTimeValue('startDateTime', $this->getStartDateTime());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the endDateTime property value. The end time of the logs collected
     *  @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('endDateTime', $value);
    }

    /**
     * Sets the expiryDateTime property value. The time when the log collection is expired
     *  @param DateTime|null $value Value to set for the expiryDateTime property.
    */
    public function setExpiryDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expiryDateTime', $value);
    }

    /**
     * Sets the requestDateTime property value. The time when the log collection was requested
     *  @param DateTime|null $value Value to set for the requestDateTime property.
    */
    public function setRequestDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('requestDateTime', $value);
    }

    /**
     * Sets the serverId property value. ID of the server the log collection is requested upon
     *  @param string|null $value Value to set for the serverId property.
    */
    public function setServerId(?string $value): void {
        $this->getBackingStore()->set('serverId', $value);
    }

    /**
     * Sets the sizeInBytes property value. The size of the logs in bytes
     *  @param int|null $value Value to set for the sizeInBytes property.
    */
    public function setSizeInBytes(?int $value): void {
        $this->getBackingStore()->set('sizeInBytes', $value);
    }

    /**
     * Sets the startDateTime property value. The start time of the logs collected
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

    /**
     * Sets the status property value. Enum type that represent the status of log collection
     *  @param MicrosoftTunnelLogCollectionStatus|null $value Value to set for the status property.
    */
    public function setStatus(?MicrosoftTunnelLogCollectionStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}

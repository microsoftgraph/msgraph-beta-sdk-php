<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MicrosoftTunnelServerLogCollectionResponse extends Entity implements Parsable 
{
    /**
     * @var DateTime|null $endDateTime The end time of the logs collected
    */
    private ?DateTime $endDateTime = null;
    
    /**
     * @var DateTime|null $expiryDateTime The time when the log collection is expired
    */
    private ?DateTime $expiryDateTime = null;
    
    /**
     * @var DateTime|null $requestDateTime The time when the log collection was requested
    */
    private ?DateTime $requestDateTime = null;
    
    /**
     * @var string|null $serverId ID of the server the log collection is requested upon
    */
    private ?string $serverId = null;
    
    /**
     * @var int|null $sizeInBytes The size of the logs in bytes
    */
    private ?int $sizeInBytes = null;
    
    /**
     * @var DateTime|null $startDateTime The start time of the logs collected
    */
    private ?DateTime $startDateTime = null;
    
    /**
     * @var MicrosoftTunnelLogCollectionStatus|null $status Enum type that represent the status of log collection.
    */
    private ?MicrosoftTunnelLogCollectionStatus $status = null;
    
    /**
     * Instantiates a new microsoftTunnelServerLogCollectionResponse and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.microsoftTunnelServerLogCollectionResponse');
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
        return $this->endDateTime;
    }

    /**
     * Gets the expiryDateTime property value. The time when the log collection is expired
     * @return DateTime|null
    */
    public function getExpiryDateTime(): ?DateTime {
        return $this->expiryDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'endDateTime' => function (ParseNode $n) use ($o) { $o->setEndDateTime($n->getDateTimeValue()); },
            'expiryDateTime' => function (ParseNode $n) use ($o) { $o->setExpiryDateTime($n->getDateTimeValue()); },
            'requestDateTime' => function (ParseNode $n) use ($o) { $o->setRequestDateTime($n->getDateTimeValue()); },
            'serverId' => function (ParseNode $n) use ($o) { $o->setServerId($n->getStringValue()); },
            'sizeInBytes' => function (ParseNode $n) use ($o) { $o->setSizeInBytes($n->getIntegerValue()); },
            'startDateTime' => function (ParseNode $n) use ($o) { $o->setStartDateTime($n->getDateTimeValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(MicrosoftTunnelLogCollectionStatus::class)); },
        ]);
    }

    /**
     * Gets the requestDateTime property value. The time when the log collection was requested
     * @return DateTime|null
    */
    public function getRequestDateTime(): ?DateTime {
        return $this->requestDateTime;
    }

    /**
     * Gets the serverId property value. ID of the server the log collection is requested upon
     * @return string|null
    */
    public function getServerId(): ?string {
        return $this->serverId;
    }

    /**
     * Gets the sizeInBytes property value. The size of the logs in bytes
     * @return int|null
    */
    public function getSizeInBytes(): ?int {
        return $this->sizeInBytes;
    }

    /**
     * Gets the startDateTime property value. The start time of the logs collected
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->startDateTime;
    }

    /**
     * Gets the status property value. Enum type that represent the status of log collection.
     * @return MicrosoftTunnelLogCollectionStatus|null
    */
    public function getStatus(): ?MicrosoftTunnelLogCollectionStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('endDateTime', $this->endDateTime);
        $writer->writeDateTimeValue('expiryDateTime', $this->expiryDateTime);
        $writer->writeDateTimeValue('requestDateTime', $this->requestDateTime);
        $writer->writeStringValue('serverId', $this->serverId);
        $writer->writeIntegerValue('sizeInBytes', $this->sizeInBytes);
        $writer->writeDateTimeValue('startDateTime', $this->startDateTime);
        $writer->writeEnumValue('status', $this->status);
    }

    /**
     * Sets the endDateTime property value. The end time of the logs collected
     *  @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value ): void {
        $this->endDateTime = $value;
    }

    /**
     * Sets the expiryDateTime property value. The time when the log collection is expired
     *  @param DateTime|null $value Value to set for the expiryDateTime property.
    */
    public function setExpiryDateTime(?DateTime $value ): void {
        $this->expiryDateTime = $value;
    }

    /**
     * Sets the requestDateTime property value. The time when the log collection was requested
     *  @param DateTime|null $value Value to set for the requestDateTime property.
    */
    public function setRequestDateTime(?DateTime $value ): void {
        $this->requestDateTime = $value;
    }

    /**
     * Sets the serverId property value. ID of the server the log collection is requested upon
     *  @param string|null $value Value to set for the serverId property.
    */
    public function setServerId(?string $value ): void {
        $this->serverId = $value;
    }

    /**
     * Sets the sizeInBytes property value. The size of the logs in bytes
     *  @param int|null $value Value to set for the sizeInBytes property.
    */
    public function setSizeInBytes(?int $value ): void {
        $this->sizeInBytes = $value;
    }

    /**
     * Sets the startDateTime property value. The start time of the logs collected
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value ): void {
        $this->startDateTime = $value;
    }

    /**
     * Sets the status property value. Enum type that represent the status of log collection.
     *  @param MicrosoftTunnelLogCollectionStatus|null $value Value to set for the status property.
    */
    public function setStatus(?MicrosoftTunnelLogCollectionStatus $value ): void {
        $this->status = $value;
    }

}

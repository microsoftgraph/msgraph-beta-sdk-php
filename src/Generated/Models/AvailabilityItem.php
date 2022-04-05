<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AvailabilityItem implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var DateTimeTimeZone|null $endDateTime The endDateTime property */
    private ?DateTimeTimeZone $endDateTime = null;
    
    /** @var string|null $serviceId The serviceId property */
    private ?string $serviceId = null;
    
    /** @var DateTimeTimeZone|null $startDateTime The startDateTime property */
    private ?DateTimeTimeZone $startDateTime = null;
    
    /** @var BookingsAvailabilityStatus|null $status The status property */
    private ?BookingsAvailabilityStatus $status = null;
    
    /**
     * Instantiates a new availabilityItem and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AvailabilityItem
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AvailabilityItem {
        return new AvailabilityItem();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the endDateTime property value. The endDateTime property
     * @return DateTimeTimeZone|null
    */
    public function getEndDateTime(): ?DateTimeTimeZone {
        return $this->endDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'endDateTime' => function (self $o, ParseNode $n) { $o->setEndDateTime($n->getObjectValue(DateTimeTimeZone::class)); },
            'serviceId' => function (self $o, ParseNode $n) { $o->setServiceId($n->getStringValue()); },
            'startDateTime' => function (self $o, ParseNode $n) { $o->setStartDateTime($n->getObjectValue(DateTimeTimeZone::class)); },
            'status' => function (self $o, ParseNode $n) { $o->setStatus($n->getEnumValue(BookingsAvailabilityStatus::class)); },
        ];
    }

    /**
     * Gets the serviceId property value. The serviceId property
     * @return string|null
    */
    public function getServiceId(): ?string {
        return $this->serviceId;
    }

    /**
     * Gets the startDateTime property value. The startDateTime property
     * @return DateTimeTimeZone|null
    */
    public function getStartDateTime(): ?DateTimeTimeZone {
        return $this->startDateTime;
    }

    /**
     * Gets the status property value. The status property
     * @return BookingsAvailabilityStatus|null
    */
    public function getStatus(): ?BookingsAvailabilityStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('endDateTime', $this->endDateTime);
        $writer->writeStringValue('serviceId', $this->serviceId);
        $writer->writeObjectValue('startDateTime', $this->startDateTime);
        $writer->writeEnumValue('status', $this->status);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the endDateTime property value. The endDateTime property
     *  @param DateTimeTimeZone|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTimeTimeZone $value ): void {
        $this->endDateTime = $value;
    }

    /**
     * Sets the serviceId property value. The serviceId property
     *  @param string|null $value Value to set for the serviceId property.
    */
    public function setServiceId(?string $value ): void {
        $this->serviceId = $value;
    }

    /**
     * Sets the startDateTime property value. The startDateTime property
     *  @param DateTimeTimeZone|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTimeTimeZone $value ): void {
        $this->startDateTime = $value;
    }

    /**
     * Sets the status property value. The status property
     *  @param BookingsAvailabilityStatus|null $value Value to set for the status property.
    */
    public function setStatus(?BookingsAvailabilityStatus $value ): void {
        $this->status = $value;
    }

}

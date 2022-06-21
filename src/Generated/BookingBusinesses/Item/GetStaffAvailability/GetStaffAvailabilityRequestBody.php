<?php

namespace Microsoft\Graph\Beta\Generated\BookingBusinesses\Item\GetStaffAvailability;

use Microsoft\Graph\Beta\Generated\Models\DateTimeTimeZone;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GetStaffAvailabilityRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var DateTimeTimeZone|null $endDateTime The endDateTime property */
    private ?DateTimeTimeZone $endDateTime = null;
    
    /** @var array<string>|null $staffIds The staffIds property */
    private ?array $staffIds = null;
    
    /** @var DateTimeTimeZone|null $startDateTime The startDateTime property */
    private ?DateTimeTimeZone $startDateTime = null;
    
    /**
     * Instantiates a new getStaffAvailabilityRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetStaffAvailabilityRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): GetStaffAvailabilityRequestBody {
        return new GetStaffAvailabilityRequestBody();
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
            'staffIds' => function (self $o, ParseNode $n) { $o->setStaffIds($n->getCollectionOfPrimitiveValues()); },
            'startDateTime' => function (self $o, ParseNode $n) { $o->setStartDateTime($n->getObjectValue(DateTimeTimeZone::class)); },
        ];
    }

    /**
     * Gets the staffIds property value. The staffIds property
     * @return array<string>|null
    */
    public function getStaffIds(): ?array {
        return $this->staffIds;
    }

    /**
     * Gets the startDateTime property value. The startDateTime property
     * @return DateTimeTimeZone|null
    */
    public function getStartDateTime(): ?DateTimeTimeZone {
        return $this->startDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('endDateTime', $this->endDateTime);
        $writer->writeCollectionOfPrimitiveValues('staffIds', $this->staffIds);
        $writer->writeObjectValue('startDateTime', $this->startDateTime);
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
     * Sets the staffIds property value. The staffIds property
     *  @param array<string>|null $value Value to set for the staffIds property.
    */
    public function setStaffIds(?array $value ): void {
        $this->staffIds = $value;
    }

    /**
     * Sets the startDateTime property value. The startDateTime property
     *  @param DateTimeTimeZone|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTimeTimeZone $value ): void {
        $this->startDateTime = $value;
    }

}

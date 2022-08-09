<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BookingWorkHours implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DayOfWeek|null $day The day property
    */
    private ?DayOfWeek $day = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var array<BookingWorkTimeSlot>|null $timeSlots A list of start/end times during a day.
    */
    private ?array $timeSlots = null;
    
    /**
     * Instantiates a new bookingWorkHours and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.bookingWorkHours');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BookingWorkHours
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BookingWorkHours {
        return new BookingWorkHours();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the day property value. The day property
     * @return DayOfWeek|null
    */
    public function getDay(): ?DayOfWeek {
        return $this->day;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'day' => function (ParseNode $n) use ($o) { $o->setDay($n->getEnumValue(DayOfWeek::class)); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'timeSlots' => function (ParseNode $n) use ($o) { $o->setTimeSlots($n->getCollectionOfObjectValues(array(BookingWorkTimeSlot::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the timeSlots property value. A list of start/end times during a day.
     * @return array<BookingWorkTimeSlot>|null
    */
    public function getTimeSlots(): ?array {
        return $this->timeSlots;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('day', $this->day);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeCollectionOfObjectValues('timeSlots', $this->timeSlots);
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
     * Sets the day property value. The day property
     *  @param DayOfWeek|null $value Value to set for the day property.
    */
    public function setDay(?DayOfWeek $value ): void {
        $this->day = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the timeSlots property value. A list of start/end times during a day.
     *  @param array<BookingWorkTimeSlot>|null $value Value to set for the timeSlots property.
    */
    public function setTimeSlots(?array $value ): void {
        $this->timeSlots = $value;
    }

}

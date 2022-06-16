<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Time;

class BookingWorkTimeSlot implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var Time|null $end The time of the day when work stops. For example, 17:00:00.0000000. */
    private ?Time $end = null;
    
    /** @var Time|null $start The time of the day when work starts. For example, 08:00:00.0000000. */
    private ?Time $start = null;
    
    /**
     * Instantiates a new bookingWorkTimeSlot and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BookingWorkTimeSlot
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): BookingWorkTimeSlot {
        return new BookingWorkTimeSlot();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the end property value. The time of the day when work stops. For example, 17:00:00.0000000.
     * @return Time|null
    */
    public function getEnd(): ?Time {
        return $this->end;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'end' => function (self $o, ParseNode $n) { $o->setEnd($n->getTimeValue()); },
            'start' => function (self $o, ParseNode $n) { $o->setStart($n->getTimeValue()); },
        ];
    }

    /**
     * Gets the start property value. The time of the day when work starts. For example, 08:00:00.0000000.
     * @return Time|null
    */
    public function getStart(): ?Time {
        return $this->start;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeTimeValue('end', $this->end);
        $writer->writeTimeValue('start', $this->start);
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
     * Sets the end property value. The time of the day when work stops. For example, 17:00:00.0000000.
     *  @param Time|null $value Value to set for the end property.
    */
    public function setEnd(?Time $value ): void {
        $this->end = $value;
    }

    /**
     * Sets the start property value. The time of the day when work starts. For example, 08:00:00.0000000.
     *  @param Time|null $value Value to set for the start property.
    */
    public function setStart(?Time $value ): void {
        $this->start = $value;
    }

}

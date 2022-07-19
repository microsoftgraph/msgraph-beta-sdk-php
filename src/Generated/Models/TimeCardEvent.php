<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TimeCardEvent implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $atApprovedLocation Indicates whether the entry was recorded at the approved location.
    */
    private ?bool $atApprovedLocation = null;
    
    /**
     * @var DateTime|null $dateTime The time the entry is recorded.
    */
    private ?DateTime $dateTime = null;
    
    /**
     * @var ItemBody|null $notes Notes about the timeCardEvent.
    */
    private ?ItemBody $notes = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new timeCardEvent and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.timeCardEvent');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TimeCardEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TimeCardEvent {
        return new TimeCardEvent();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the atApprovedLocation property value. Indicates whether the entry was recorded at the approved location.
     * @return bool|null
    */
    public function getAtApprovedLocation(): ?bool {
        return $this->atApprovedLocation;
    }

    /**
     * Gets the dateTime property value. The time the entry is recorded.
     * @return DateTime|null
    */
    public function getDateTime(): ?DateTime {
        return $this->dateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'atApprovedLocation' => function (ParseNode $n) use ($o) { $o->setAtApprovedLocation($n->getBooleanValue()); },
            'dateTime' => function (ParseNode $n) use ($o) { $o->setDateTime($n->getDateTimeValue()); },
            'notes' => function (ParseNode $n) use ($o) { $o->setNotes($n->getObjectValue(array(ItemBody::class, 'createFromDiscriminatorValue'))); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the notes property value. Notes about the timeCardEvent.
     * @return ItemBody|null
    */
    public function getNotes(): ?ItemBody {
        return $this->notes;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('atApprovedLocation', $this->atApprovedLocation);
        $writer->writeDateTimeValue('dateTime', $this->dateTime);
        $writer->writeObjectValue('notes', $this->notes);
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the atApprovedLocation property value. Indicates whether the entry was recorded at the approved location.
     *  @param bool|null $value Value to set for the atApprovedLocation property.
    */
    public function setAtApprovedLocation(?bool $value ): void {
        $this->atApprovedLocation = $value;
    }

    /**
     * Sets the dateTime property value. The time the entry is recorded.
     *  @param DateTime|null $value Value to set for the dateTime property.
    */
    public function setDateTime(?DateTime $value ): void {
        $this->dateTime = $value;
    }

    /**
     * Sets the notes property value. Notes about the timeCardEvent.
     *  @param ItemBody|null $value Value to set for the notes property.
    */
    public function setNotes(?ItemBody $value ): void {
        $this->notes = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}

<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ItemActivityTimeSet implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DateTime|null $lastRecordedDateTime The lastRecordedDateTime property
    */
    private ?DateTime $lastRecordedDateTime = null;
    
    /**
     * @var DateTime|null $observedDateTime When the activity was observed to take place.
    */
    private ?DateTime $observedDateTime = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var DateTime|null $recordedDateTime When the observation was recorded on the service.
    */
    private ?DateTime $recordedDateTime = null;
    
    /**
     * Instantiates a new itemActivityTimeSet and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.itemActivityTimeSet');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ItemActivityTimeSet
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ItemActivityTimeSet {
        return new ItemActivityTimeSet();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'lastRecordedDateTime' => function (ParseNode $n) use ($o) { $o->setLastRecordedDateTime($n->getDateTimeValue()); },
            'observedDateTime' => function (ParseNode $n) use ($o) { $o->setObservedDateTime($n->getDateTimeValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'recordedDateTime' => function (ParseNode $n) use ($o) { $o->setRecordedDateTime($n->getDateTimeValue()); },
        ];
    }

    /**
     * Gets the lastRecordedDateTime property value. The lastRecordedDateTime property
     * @return DateTime|null
    */
    public function getLastRecordedDateTime(): ?DateTime {
        return $this->lastRecordedDateTime;
    }

    /**
     * Gets the observedDateTime property value. When the activity was observed to take place.
     * @return DateTime|null
    */
    public function getObservedDateTime(): ?DateTime {
        return $this->observedDateTime;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the recordedDateTime property value. When the observation was recorded on the service.
     * @return DateTime|null
    */
    public function getRecordedDateTime(): ?DateTime {
        return $this->recordedDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('lastRecordedDateTime', $this->lastRecordedDateTime);
        $writer->writeDateTimeValue('observedDateTime', $this->observedDateTime);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeDateTimeValue('recordedDateTime', $this->recordedDateTime);
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
     * Sets the lastRecordedDateTime property value. The lastRecordedDateTime property
     *  @param DateTime|null $value Value to set for the lastRecordedDateTime property.
    */
    public function setLastRecordedDateTime(?DateTime $value ): void {
        $this->lastRecordedDateTime = $value;
    }

    /**
     * Sets the observedDateTime property value. When the activity was observed to take place.
     *  @param DateTime|null $value Value to set for the observedDateTime property.
    */
    public function setObservedDateTime(?DateTime $value ): void {
        $this->observedDateTime = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the recordedDateTime property value. When the observation was recorded on the service.
     *  @param DateTime|null $value Value to set for the recordedDateTime property.
    */
    public function setRecordedDateTime(?DateTime $value ): void {
        $this->recordedDateTime = $value;
    }

}

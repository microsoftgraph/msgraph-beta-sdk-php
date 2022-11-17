<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ItemActivityTimeSet implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new itemActivityTimeSet and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
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
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'lastRecordedDateTime' => fn(ParseNode $n) => $o->setLastRecordedDateTime($n->getDateTimeValue()),
            'observedDateTime' => fn(ParseNode $n) => $o->setObservedDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'recordedDateTime' => fn(ParseNode $n) => $o->setRecordedDateTime($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the lastRecordedDateTime property value. The lastRecordedDateTime property
     * @return DateTime|null
    */
    public function getLastRecordedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastRecordedDateTime');
    }

    /**
     * Gets the observedDateTime property value. When the activity was observed to take place.
     * @return DateTime|null
    */
    public function getObservedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('observedDateTime');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the recordedDateTime property value. When the observation was recorded on the service.
     * @return DateTime|null
    */
    public function getRecordedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('recordedDateTime');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('lastRecordedDateTime', $this->getLastRecordedDateTime());
        $writer->writeDateTimeValue('observedDateTime', $this->getObservedDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeDateTimeValue('recordedDateTime', $this->getRecordedDateTime());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the lastRecordedDateTime property value. The lastRecordedDateTime property
     *  @param DateTime|null $value Value to set for the lastRecordedDateTime property.
    */
    public function setLastRecordedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastRecordedDateTime', $value);
    }

    /**
     * Sets the observedDateTime property value. When the activity was observed to take place.
     *  @param DateTime|null $value Value to set for the observedDateTime property.
    */
    public function setObservedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('observedDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the recordedDateTime property value. When the observation was recorded on the service.
     *  @param DateTime|null $value Value to set for the recordedDateTime property.
    */
    public function setRecordedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('recordedDateTime', $value);
    }

}

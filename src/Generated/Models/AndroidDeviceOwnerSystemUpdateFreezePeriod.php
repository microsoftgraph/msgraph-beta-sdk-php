<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AndroidDeviceOwnerSystemUpdateFreezePeriod implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new androidDeviceOwnerSystemUpdateFreezePeriod and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidDeviceOwnerSystemUpdateFreezePeriod
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidDeviceOwnerSystemUpdateFreezePeriod {
        return new AndroidDeviceOwnerSystemUpdateFreezePeriod();
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
     * Gets the endDay property value. The day of the end date of the freeze period. Valid values 1 to 31
     * @return int|null
    */
    public function getEndDay(): ?int {
        return $this->getBackingStore()->get('endDay');
    }

    /**
     * Gets the endMonth property value. The month of the end date of the freeze period. Valid values 1 to 12
     * @return int|null
    */
    public function getEndMonth(): ?int {
        return $this->getBackingStore()->get('endMonth');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'endDay' => fn(ParseNode $n) => $o->setEndDay($n->getIntegerValue()),
            'endMonth' => fn(ParseNode $n) => $o->setEndMonth($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'startDay' => fn(ParseNode $n) => $o->setStartDay($n->getIntegerValue()),
            'startMonth' => fn(ParseNode $n) => $o->setStartMonth($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the startDay property value. The day of the start date of the freeze period. Valid values 1 to 31
     * @return int|null
    */
    public function getStartDay(): ?int {
        return $this->getBackingStore()->get('startDay');
    }

    /**
     * Gets the startMonth property value. The month of the start date of the freeze period. Valid values 1 to 12
     * @return int|null
    */
    public function getStartMonth(): ?int {
        return $this->getBackingStore()->get('startMonth');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('endDay', $this->getEndDay());
        $writer->writeIntegerValue('endMonth', $this->getEndMonth());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('startDay', $this->getStartDay());
        $writer->writeIntegerValue('startMonth', $this->getStartMonth());
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
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the endDay property value. The day of the end date of the freeze period. Valid values 1 to 31
     *  @param int|null $value Value to set for the endDay property.
    */
    public function setEndDay(?int $value): void {
        $this->getBackingStore()->set('endDay', $value);
    }

    /**
     * Sets the endMonth property value. The month of the end date of the freeze period. Valid values 1 to 12
     *  @param int|null $value Value to set for the endMonth property.
    */
    public function setEndMonth(?int $value): void {
        $this->getBackingStore()->set('endMonth', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the startDay property value. The day of the start date of the freeze period. Valid values 1 to 31
     *  @param int|null $value Value to set for the startDay property.
    */
    public function setStartDay(?int $value): void {
        $this->getBackingStore()->set('startDay', $value);
    }

    /**
     * Sets the startMonth property value. The month of the start date of the freeze period. Valid values 1 to 12
     *  @param int|null $value Value to set for the startMonth property.
    */
    public function setStartMonth(?int $value): void {
        $this->getBackingStore()->set('startMonth', $value);
    }

}

<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AndroidDeviceOwnerKioskModeAppPositionItem implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new androidDeviceOwnerKioskModeAppPositionItem and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidDeviceOwnerKioskModeAppPositionItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidDeviceOwnerKioskModeAppPositionItem {
        return new AndroidDeviceOwnerKioskModeAppPositionItem();
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
            'item' => fn(ParseNode $n) => $o->setItem($n->getObjectValue([AndroidDeviceOwnerKioskModeHomeScreenItem::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'position' => fn(ParseNode $n) => $o->setPosition($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the item property value. Represents an item on the Android Device Owner Managed Home Screen (application, weblink or folder
     * @return AndroidDeviceOwnerKioskModeHomeScreenItem|null
    */
    public function getItem(): ?AndroidDeviceOwnerKioskModeHomeScreenItem {
        return $this->getBackingStore()->get('item');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the position property value. Position of the item on the grid. Valid values 0 to 9999999
     * @return int|null
    */
    public function getPosition(): ?int {
        return $this->getBackingStore()->get('position');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('item', $this->getItem());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('position', $this->getPosition());
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
     * Sets the item property value. Represents an item on the Android Device Owner Managed Home Screen (application, weblink or folder
     *  @param AndroidDeviceOwnerKioskModeHomeScreenItem|null $value Value to set for the item property.
    */
    public function setItem(?AndroidDeviceOwnerKioskModeHomeScreenItem $value): void {
        $this->getBackingStore()->set('item', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the position property value. Position of the item on the grid. Valid values 0 to 9999999
     *  @param int|null $value Value to set for the position property.
    */
    public function setPosition(?int $value): void {
        $this->getBackingStore()->set('position', $value);
    }

}

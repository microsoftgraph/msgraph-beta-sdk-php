<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidDeviceOwnerKioskModeAppPositionItem implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var AndroidDeviceOwnerKioskModeHomeScreenItem|null $item Represents an item on the Android Device Owner Managed Home Screen (application, weblink or folder
    */
    private ?AndroidDeviceOwnerKioskModeHomeScreenItem $item = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var int|null $position Position of the item on the grid. Valid values 0 to 9999999
    */
    private ?int $position = null;
    
    /**
     * Instantiates a new androidDeviceOwnerKioskModeAppPositionItem and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.androidDeviceOwnerKioskModeAppPositionItem');
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
            'item' => function (ParseNode $n) use ($o) { $o->setItem($n->getObjectValue(array(AndroidDeviceOwnerKioskModeHomeScreenItem::class, 'createFromDiscriminatorValue'))); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'position' => function (ParseNode $n) use ($o) { $o->setPosition($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the item property value. Represents an item on the Android Device Owner Managed Home Screen (application, weblink or folder
     * @return AndroidDeviceOwnerKioskModeHomeScreenItem|null
    */
    public function getItem(): ?AndroidDeviceOwnerKioskModeHomeScreenItem {
        return $this->item;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the position property value. Position of the item on the grid. Valid values 0 to 9999999
     * @return int|null
    */
    public function getPosition(): ?int {
        return $this->position;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('item', $this->item);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeIntegerValue('position', $this->position);
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
     * Sets the item property value. Represents an item on the Android Device Owner Managed Home Screen (application, weblink or folder
     *  @param AndroidDeviceOwnerKioskModeHomeScreenItem|null $value Value to set for the item property.
    */
    public function setItem(?AndroidDeviceOwnerKioskModeHomeScreenItem $value ): void {
        $this->item = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the position property value. Position of the item on the grid. Valid values 0 to 9999999
     *  @param int|null $value Value to set for the position property.
    */
    public function setPosition(?int $value ): void {
        $this->position = $value;
    }

}

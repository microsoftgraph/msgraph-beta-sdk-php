<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ItemAttachment extends Attachment implements Parsable 
{
    /**
     * Instantiates a new itemAttachment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.itemAttachment');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ItemAttachment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ItemAttachment {
        return new ItemAttachment();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'item' => fn(ParseNode $n) => $o->setItem($n->getObjectValue([OutlookItem::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the item property value. The attached contact, message or event. Navigation property.
     * @return OutlookItem|null
    */
    public function getItem(): ?OutlookItem {
        $val = $this->getBackingStore()->get('item');
        if (is_null($val) || $val instanceof OutlookItem) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'item'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('item', $this->getItem());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the item property value. The attached contact, message or event. Navigation property.
     * @param OutlookItem|null $value Value to set for the item property.
    */
    public function setItem(?OutlookItem $value): void {
        $this->getBackingStore()->set('item', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}

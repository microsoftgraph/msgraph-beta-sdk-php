<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamworkPeripheral extends Entity implements Parsable 
{
    /**
     * Instantiates a new TeamworkPeripheral and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkPeripheral
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkPeripheral {
        return new TeamworkPeripheral();
    }

    /**
     * Gets the displayName property value. Display name for the peripheral.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'productId' => fn(ParseNode $n) => $o->setProductId($n->getStringValue()),
            'vendorId' => fn(ParseNode $n) => $o->setVendorId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the productId property value. The product ID of the device. Each product from a vendor has its own ID.
     * @return string|null
    */
    public function getProductId(): ?string {
        $val = $this->getBackingStore()->get('productId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'productId'");
    }

    /**
     * Gets the vendorId property value. The unique identifier for the vendor of the device. Each vendor has a unique ID.
     * @return string|null
    */
    public function getVendorId(): ?string {
        $val = $this->getBackingStore()->get('vendorId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'vendorId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('productId', $this->getProductId());
        $writer->writeStringValue('vendorId', $this->getVendorId());
    }

    /**
     * Sets the displayName property value. Display name for the peripheral.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the productId property value. The product ID of the device. Each product from a vendor has its own ID.
     * @param string|null $value Value to set for the productId property.
    */
    public function setProductId(?string $value): void {
        $this->getBackingStore()->set('productId', $value);
    }

    /**
     * Sets the vendorId property value. The unique identifier for the vendor of the device. Each vendor has a unique ID.
     * @param string|null $value Value to set for the vendorId property.
    */
    public function setVendorId(?string $value): void {
        $this->getBackingStore()->set('vendorId', $value);
    }

}

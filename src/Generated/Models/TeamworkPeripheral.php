<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamworkPeripheral extends Entity implements Parsable 
{
    /**
     * @var string|null $displayName Display name for the peripheral.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $productId The product ID of the device. Each product from a vendor has its own ID.
    */
    private ?string $productId = null;
    
    /**
     * @var string|null $vendorId The unique identifier for the vendor of the device. Each vendor has a unique ID.
    */
    private ?string $vendorId = null;
    
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
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'productId' => function (ParseNode $n) use ($o) { $o->setProductId($n->getStringValue()); },
            'vendorId' => function (ParseNode $n) use ($o) { $o->setVendorId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the productId property value. The product ID of the device. Each product from a vendor has its own ID.
     * @return string|null
    */
    public function getProductId(): ?string {
        return $this->productId;
    }

    /**
     * Gets the vendorId property value. The unique identifier for the vendor of the device. Each vendor has a unique ID.
     * @return string|null
    */
    public function getVendorId(): ?string {
        return $this->vendorId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('productId', $this->productId);
        $writer->writeStringValue('vendorId', $this->vendorId);
    }

    /**
     * Sets the displayName property value. Display name for the peripheral.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the productId property value. The product ID of the device. Each product from a vendor has its own ID.
     *  @param string|null $value Value to set for the productId property.
    */
    public function setProductId(?string $value ): void {
        $this->productId = $value;
    }

    /**
     * Sets the vendorId property value. The unique identifier for the vendor of the device. Each vendor has a unique ID.
     *  @param string|null $value Value to set for the vendorId property.
    */
    public function setVendorId(?string $value ): void {
        $this->vendorId = $value;
    }

}

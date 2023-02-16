<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Win32LobAppProductCodeDetection extends Win32LobAppDetection implements Parsable 
{
    /**
     * Instantiates a new Win32LobAppProductCodeDetection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.win32LobAppProductCodeDetection');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Win32LobAppProductCodeDetection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Win32LobAppProductCodeDetection {
        return new Win32LobAppProductCodeDetection();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'productCode' => fn(ParseNode $n) => $o->setProductCode($n->getStringValue()),
            'productVersion' => fn(ParseNode $n) => $o->setProductVersion($n->getStringValue()),
            'productVersionOperator' => fn(ParseNode $n) => $o->setProductVersionOperator($n->getEnumValue(Win32LobAppDetectionOperator::class)),
        ]);
    }

    /**
     * Gets the productCode property value. The product code of Win32 Line of Business (LoB) app.
     * @return string|null
    */
    public function getProductCode(): ?string {
        return $this->getBackingStore()->get('productCode');
    }

    /**
     * Gets the productVersion property value. The product version of Win32 Line of Business (LoB) app.
     * @return string|null
    */
    public function getProductVersion(): ?string {
        return $this->getBackingStore()->get('productVersion');
    }

    /**
     * Gets the productVersionOperator property value. Contains properties for detection operator.
     * @return Win32LobAppDetectionOperator|null
    */
    public function getProductVersionOperator(): ?Win32LobAppDetectionOperator {
        return $this->getBackingStore()->get('productVersionOperator');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('productCode', $this->getProductCode());
        $writer->writeStringValue('productVersion', $this->getProductVersion());
        $writer->writeEnumValue('productVersionOperator', $this->getProductVersionOperator());
    }

    /**
     * Sets the productCode property value. The product code of Win32 Line of Business (LoB) app.
     * @param string|null $value Value to set for the productCode property.
    */
    public function setProductCode(?string $value): void {
        $this->getBackingStore()->set('productCode', $value);
    }

    /**
     * Sets the productVersion property value. The product version of Win32 Line of Business (LoB) app.
     * @param string|null $value Value to set for the productVersion property.
    */
    public function setProductVersion(?string $value): void {
        $this->getBackingStore()->set('productVersion', $value);
    }

    /**
     * Sets the productVersionOperator property value. Contains properties for detection operator.
     * @param Win32LobAppDetectionOperator|null $value Value to set for the productVersionOperator property.
    */
    public function setProductVersionOperator(?Win32LobAppDetectionOperator $value): void {
        $this->getBackingStore()->set('productVersionOperator', $value);
    }

}

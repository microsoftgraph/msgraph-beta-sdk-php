<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Contains properties and inherited properties for Windows Phone XAP Line Of Business apps.
*/
class WindowsPhoneXAP extends MobileLobApp implements Parsable 
{
    /**
     * Instantiates a new WindowsPhoneXAP and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsPhoneXAP');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsPhoneXAP
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsPhoneXAP {
        return new WindowsPhoneXAP();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'identityVersion' => fn(ParseNode $n) => $o->setIdentityVersion($n->getStringValue()),
            'minimumSupportedOperatingSystem' => fn(ParseNode $n) => $o->setMinimumSupportedOperatingSystem($n->getObjectValue([WindowsMinimumOperatingSystem::class, 'createFromDiscriminatorValue'])),
            'productIdentifier' => fn(ParseNode $n) => $o->setProductIdentifier($n->getStringValue()),
        ]);
    }

    /**
     * Gets the identityVersion property value. The identity version.
     * @return string|null
    */
    public function getIdentityVersion(): ?string {
        $val = $this->getBackingStore()->get('identityVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identityVersion'");
    }

    /**
     * Gets the minimumSupportedOperatingSystem property value. The minimum operating system required for a Windows mobile app.
     * @return WindowsMinimumOperatingSystem|null
    */
    public function getMinimumSupportedOperatingSystem(): ?WindowsMinimumOperatingSystem {
        $val = $this->getBackingStore()->get('minimumSupportedOperatingSystem');
        if (is_null($val) || $val instanceof WindowsMinimumOperatingSystem) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumSupportedOperatingSystem'");
    }

    /**
     * Gets the productIdentifier property value. The Product Identifier.
     * @return string|null
    */
    public function getProductIdentifier(): ?string {
        $val = $this->getBackingStore()->get('productIdentifier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'productIdentifier'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('identityVersion', $this->getIdentityVersion());
        $writer->writeObjectValue('minimumSupportedOperatingSystem', $this->getMinimumSupportedOperatingSystem());
        $writer->writeStringValue('productIdentifier', $this->getProductIdentifier());
    }

    /**
     * Sets the identityVersion property value. The identity version.
     * @param string|null $value Value to set for the identityVersion property.
    */
    public function setIdentityVersion(?string $value): void {
        $this->getBackingStore()->set('identityVersion', $value);
    }

    /**
     * Sets the minimumSupportedOperatingSystem property value. The minimum operating system required for a Windows mobile app.
     * @param WindowsMinimumOperatingSystem|null $value Value to set for the minimumSupportedOperatingSystem property.
    */
    public function setMinimumSupportedOperatingSystem(?WindowsMinimumOperatingSystem $value): void {
        $this->getBackingStore()->set('minimumSupportedOperatingSystem', $value);
    }

    /**
     * Sets the productIdentifier property value. The Product Identifier.
     * @param string|null $value Value to set for the productIdentifier property.
    */
    public function setProductIdentifier(?string $value): void {
        $this->getBackingStore()->set('productIdentifier', $value);
    }

}

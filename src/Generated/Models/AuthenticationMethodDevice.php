<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AuthenticationMethodDevice extends Entity implements Parsable 
{
    /**
     * Instantiates a new AuthenticationMethodDevice and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuthenticationMethodDevice
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuthenticationMethodDevice {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.hardwareOathTokenAuthenticationMethodDevice': return new HardwareOathTokenAuthenticationMethodDevice();
            }
        }
        return new AuthenticationMethodDevice();
    }

    /**
     * Gets the displayName property value. Optional name given to the hardware OATH device.
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
            'hardwareOathDevices' => fn(ParseNode $n) => $o->setHardwareOathDevices($n->getCollectionOfObjectValues([HardwareOathTokenAuthenticationMethodDevice::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the hardwareOathDevices property value. Exposes the hardware OATH method in the directory.
     * @return array<HardwareOathTokenAuthenticationMethodDevice>|null
    */
    public function getHardwareOathDevices(): ?array {
        $val = $this->getBackingStore()->get('hardwareOathDevices');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, HardwareOathTokenAuthenticationMethodDevice::class);
            /** @var array<HardwareOathTokenAuthenticationMethodDevice>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hardwareOathDevices'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('hardwareOathDevices', $this->getHardwareOathDevices());
    }

    /**
     * Sets the displayName property value. Optional name given to the hardware OATH device.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the hardwareOathDevices property value. Exposes the hardware OATH method in the directory.
     * @param array<HardwareOathTokenAuthenticationMethodDevice>|null $value Value to set for the hardwareOathDevices property.
    */
    public function setHardwareOathDevices(?array $value): void {
        $this->getBackingStore()->set('hardwareOathDevices', $value);
    }

}

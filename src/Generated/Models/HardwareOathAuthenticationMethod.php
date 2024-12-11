<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class HardwareOathAuthenticationMethod extends AuthenticationMethod implements Parsable 
{
    /**
     * Instantiates a new HardwareOathAuthenticationMethod and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.hardwareOathAuthenticationMethod');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return HardwareOathAuthenticationMethod
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): HardwareOathAuthenticationMethod {
        return new HardwareOathAuthenticationMethod();
    }

    /**
     * Gets the device property value. Exposes the hardware OATH method in the directory.
     * @return HardwareOathTokenAuthenticationMethodDevice|null
    */
    public function getDevice(): ?HardwareOathTokenAuthenticationMethodDevice {
        $val = $this->getBackingStore()->get('device');
        if (is_null($val) || $val instanceof HardwareOathTokenAuthenticationMethodDevice) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'device'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'device' => fn(ParseNode $n) => $o->setDevice($n->getObjectValue([HardwareOathTokenAuthenticationMethodDevice::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('device', $this->getDevice());
    }

    /**
     * Sets the device property value. Exposes the hardware OATH method in the directory.
     * @param HardwareOathTokenAuthenticationMethodDevice|null $value Value to set for the device property.
    */
    public function setDevice(?HardwareOathTokenAuthenticationMethodDevice $value): void {
        $this->getBackingStore()->set('device', $value);
    }

}

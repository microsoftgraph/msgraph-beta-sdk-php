<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IosVppAppAssignedDeviceLicense extends IosVppAppAssignedLicense implements Parsable 
{
    /**
     * Instantiates a new IosVppAppAssignedDeviceLicense and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosVppAppAssignedDeviceLicense
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosVppAppAssignedDeviceLicense {
        return new IosVppAppAssignedDeviceLicense();
    }

    /**
     * Gets the deviceName property value. The device name.
     * @return string|null
    */
    public function getDeviceName(): ?string {
        $val = $this->getBackingStore()->get('deviceName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceName' => fn(ParseNode $n) => $o->setDeviceName($n->getStringValue()),
            'managedDeviceId' => fn(ParseNode $n) => $o->setManagedDeviceId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the managedDeviceId property value. The managed device ID.
     * @return string|null
    */
    public function getManagedDeviceId(): ?string {
        $val = $this->getBackingStore()->get('managedDeviceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedDeviceId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('deviceName', $this->getDeviceName());
        $writer->writeStringValue('managedDeviceId', $this->getManagedDeviceId());
    }

    /**
     * Sets the deviceName property value. The device name.
     * @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value): void {
        $this->getBackingStore()->set('deviceName', $value);
    }

    /**
     * Sets the managedDeviceId property value. The managed device ID.
     * @param string|null $value Value to set for the managedDeviceId property.
    */
    public function setManagedDeviceId(?string $value): void {
        $this->getBackingStore()->set('managedDeviceId', $value);
    }

}

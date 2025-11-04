<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Indicates the configuration is of type Windows Restore which refers to the tenant level Windows Backup and Restore settings a user receives during OOBE Windows enrollment
*/
class WindowsRestoreDeviceEnrollmentConfiguration extends DeviceEnrollmentConfiguration implements Parsable 
{
    /**
     * Instantiates a new WindowsRestoreDeviceEnrollmentConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsRestoreDeviceEnrollmentConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsRestoreDeviceEnrollmentConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsRestoreDeviceEnrollmentConfiguration {
        return new WindowsRestoreDeviceEnrollmentConfiguration();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(Enablement::class)),
        ]);
    }

    /**
     * Gets the state property value. Possible values of a property
     * @return Enablement|null
    */
    public function getState(): ?Enablement {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || $val instanceof Enablement) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'state'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('state', $this->getState());
    }

    /**
     * Sets the state property value. Possible values of a property
     * @param Enablement|null $value Value to set for the state property.
    */
    public function setState(?Enablement $value): void {
        $this->getBackingStore()->set('state', $value);
    }

}

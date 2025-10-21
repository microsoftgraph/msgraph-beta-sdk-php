<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class StopAndQuarantineFileIncidentTaskResponseAction extends IncidentTaskResponseAction implements Parsable 
{
    /**
     * Instantiates a new StopAndQuarantineFileIncidentTaskResponseAction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.stopAndQuarantineFileIncidentTaskResponseAction');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return StopAndQuarantineFileIncidentTaskResponseAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): StopAndQuarantineFileIncidentTaskResponseAction {
        return new StopAndQuarantineFileIncidentTaskResponseAction();
    }

    /**
     * Gets the deviceId property value. Optional. The identifier of the device where the file is located. This property allows targeting the action to a specific device when the same file exists on multiple devices.
     * @return string|null
    */
    public function getDeviceId(): ?string {
        $val = $this->getBackingStore()->get('deviceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceId' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('deviceId', $this->getDeviceId());
    }

    /**
     * Sets the deviceId property value. Optional. The identifier of the device where the file is located. This property allows targeting the action to a specific device when the same file exists on multiple devices.
     * @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value): void {
        $this->getBackingStore()->set('deviceId', $value);
    }

}

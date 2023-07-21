<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Activate device eSIM action result
*/
class ActivateDeviceEsimActionResult extends DeviceActionResult implements Parsable 
{
    /**
     * Instantiates a new activateDeviceEsimActionResult and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ActivateDeviceEsimActionResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ActivateDeviceEsimActionResult {
        return new ActivateDeviceEsimActionResult();
    }

    /**
     * Gets the carrierUrl property value. Carrier Url to activate the device eSIM
     * @return string|null
    */
    public function getCarrierUrl(): ?string {
        $val = $this->getBackingStore()->get('carrierUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'carrierUrl'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'carrierUrl' => fn(ParseNode $n) => $o->setCarrierUrl($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('carrierUrl', $this->getCarrierUrl());
    }

    /**
     * Sets the carrierUrl property value. Carrier Url to activate the device eSIM
     * @param string|null $value Value to set for the carrierUrl property.
    */
    public function setCarrierUrl(?string $value): void {
        $this->getBackingStore()->set('carrierUrl', $value);
    }

}

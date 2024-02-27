<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Constraint enforcing a given string length range
*/
class DeviceManagementSettingStringLengthConstraint extends DeviceManagementConstraint implements Parsable 
{
    /**
     * Instantiates a new DeviceManagementSettingStringLengthConstraint and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementSettingStringLengthConstraint');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementSettingStringLengthConstraint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementSettingStringLengthConstraint {
        return new DeviceManagementSettingStringLengthConstraint();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'maximumLength' => fn(ParseNode $n) => $o->setMaximumLength($n->getIntegerValue()),
            'minimumLength' => fn(ParseNode $n) => $o->setMinimumLength($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the maximumLength property value. The maximum permitted string length
     * @return int|null
    */
    public function getMaximumLength(): ?int {
        $val = $this->getBackingStore()->get('maximumLength');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maximumLength'");
    }

    /**
     * Gets the minimumLength property value. The minimum permitted string length
     * @return int|null
    */
    public function getMinimumLength(): ?int {
        $val = $this->getBackingStore()->get('minimumLength');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumLength'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('maximumLength', $this->getMaximumLength());
        $writer->writeIntegerValue('minimumLength', $this->getMinimumLength());
    }

    /**
     * Sets the maximumLength property value. The maximum permitted string length
     * @param int|null $value Value to set for the maximumLength property.
    */
    public function setMaximumLength(?int $value): void {
        $this->getBackingStore()->set('maximumLength', $value);
    }

    /**
     * Sets the minimumLength property value. The minimum permitted string length
     * @param int|null $value Value to set for the minimumLength property.
    */
    public function setMinimumLength(?int $value): void {
        $this->getBackingStore()->set('minimumLength', $value);
    }

}

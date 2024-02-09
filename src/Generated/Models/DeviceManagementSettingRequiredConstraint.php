<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Constraint that enforces a particular required setting that is not null/undefined/empty string/not configured
*/
class DeviceManagementSettingRequiredConstraint extends DeviceManagementConstraint implements Parsable 
{
    /**
     * Instantiates a new DeviceManagementSettingRequiredConstraint and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementSettingRequiredConstraint');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementSettingRequiredConstraint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementSettingRequiredConstraint {
        return new DeviceManagementSettingRequiredConstraint();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'notConfiguredValue' => fn(ParseNode $n) => $o->setNotConfiguredValue($n->getStringValue()),
        ]);
    }

    /**
     * Gets the notConfiguredValue property value. List of value which means not configured for the setting
     * @return string|null
    */
    public function getNotConfiguredValue(): ?string {
        $val = $this->getBackingStore()->get('notConfiguredValue');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notConfiguredValue'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('notConfiguredValue', $this->getNotConfiguredValue());
    }

    /**
     * Sets the notConfiguredValue property value. List of value which means not configured for the setting
     * @param string|null $value Value to set for the notConfiguredValue property.
    */
    public function setNotConfiguredValue(?string $value): void {
        $this->getBackingStore()->set('notConfiguredValue', $value);
    }

}

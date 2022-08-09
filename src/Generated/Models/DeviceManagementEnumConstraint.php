<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementEnumConstraint extends DeviceManagementConstraint implements Parsable 
{
    /**
     * @var array<DeviceManagementEnumValue>|null $values List of valid values for this string
    */
    private ?array $values = null;
    
    /**
     * Instantiates a new DeviceManagementEnumConstraint and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementEnumConstraint');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementEnumConstraint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementEnumConstraint {
        return new DeviceManagementEnumConstraint();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'values' => function (ParseNode $n) use ($o) { $o->setValues($n->getCollectionOfObjectValues(array(DeviceManagementEnumValue::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the values property value. List of valid values for this string
     * @return array<DeviceManagementEnumValue>|null
    */
    public function getValues(): ?array {
        return $this->values;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('values', $this->values);
    }

    /**
     * Sets the values property value. List of valid values for this string
     *  @param array<DeviceManagementEnumValue>|null $value Value to set for the values property.
    */
    public function setValues(?array $value ): void {
        $this->values = $value;
    }

}

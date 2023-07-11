<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Base entity for a constraint
*/
class DeviceManagementEnumConstraint extends DeviceManagementConstraint implements Parsable 
{
    /**
     * Instantiates a new deviceManagementEnumConstraint and sets the default values.
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
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'values' => fn(ParseNode $n) => $o->setValues($n->getCollectionOfObjectValues([DeviceManagementEnumValue::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the values property value. List of valid values for this string
     * @return array<DeviceManagementEnumValue>|null
    */
    public function getValues(): ?array {
        $val = $this->getBackingStore()->get('values');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementEnumValue::class);
            /** @var array<DeviceManagementEnumValue>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'values'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('values', $this->getValues());
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the values property value. List of valid values for this string
     * @param array<DeviceManagementEnumValue>|null $value Value to set for the values property.
    */
    public function setValues(?array $value): void {
        $this->getBackingStore()->set('values', $value);
    }

}

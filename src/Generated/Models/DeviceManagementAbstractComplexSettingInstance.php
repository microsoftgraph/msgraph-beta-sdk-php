<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * A setting instance representing a complex value for an abstract setting
*/
class DeviceManagementAbstractComplexSettingInstance extends DeviceManagementSettingInstance implements Parsable 
{
    /**
     * Instantiates a new deviceManagementAbstractComplexSettingInstance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementAbstractComplexSettingInstance');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementAbstractComplexSettingInstance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementAbstractComplexSettingInstance {
        return new DeviceManagementAbstractComplexSettingInstance();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'implementationId' => fn(ParseNode $n) => $o->setImplementationId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getCollectionOfObjectValues([DeviceManagementSettingInstance::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the implementationId property value. The definition ID for the chosen implementation of this complex setting
     * @return string|null
    */
    public function getImplementationId(): ?string {
        $val = $this->getBackingStore()->get('implementationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'implementationId'");
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
     * Gets the value property value. The values that make up the complex setting
     * @return array<DeviceManagementSettingInstance>|null
    */
    public function getValue(): ?array {
        $val = $this->getBackingStore()->get('value');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementSettingInstance::class);
            /** @var array<DeviceManagementSettingInstance>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'value'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('implementationId', $this->getImplementationId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('value', $this->getValue());
    }

    /**
     * Sets the implementationId property value. The definition ID for the chosen implementation of this complex setting
     * @param string|null $value Value to set for the implementationId property.
    */
    public function setImplementationId(?string $value): void {
        $this->getBackingStore()->set('implementationId', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the value property value. The values that make up the complex setting
     * @param array<DeviceManagementSettingInstance>|null $value Value to set for the value property.
    */
    public function setValue(?array $value): void {
        $this->getBackingStore()->set('value', $value);
    }

}

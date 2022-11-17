<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementAbstractComplexSettingInstance extends DeviceManagementSettingInstance implements Parsable 
{
    /**
     * Instantiates a new DeviceManagementAbstractComplexSettingInstance and sets the default values.
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
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'implementationId' => fn(ParseNode $n) => $o->setImplementationId($n->getStringValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getCollectionOfObjectValues([DeviceManagementSettingInstance::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the implementationId property value. The definition ID for the chosen implementation of this complex setting
     * @return string|null
    */
    public function getImplementationId(): ?string {
        return $this->getBackingStore()->get('implementationId');
    }

    /**
     * Gets the value property value. The values that make up the complex setting
     * @return array<DeviceManagementSettingInstance>|null
    */
    public function getValue(): ?array {
        return $this->getBackingStore()->get('value');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('implementationId', $this->getImplementationId());
        $writer->writeCollectionOfObjectValues('value', $this->getValue());
    }

    /**
     * Sets the implementationId property value. The definition ID for the chosen implementation of this complex setting
     *  @param string|null $value Value to set for the implementationId property.
    */
    public function setImplementationId(?string $value): void {
        $this->getBackingStore()->set('implementationId', $value);
    }

    /**
     * Sets the value property value. The values that make up the complex setting
     *  @param array<DeviceManagementSettingInstance>|null $value Value to set for the value property.
    */
    public function setValue(?array $value): void {
        $this->getBackingStore()->set('value', $value);
    }

}

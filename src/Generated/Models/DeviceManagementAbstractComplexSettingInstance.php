<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementAbstractComplexSettingInstance extends DeviceManagementSettingInstance implements Parsable 
{
    /**
     * @var string|null $implementationId The definition ID for the chosen implementation of this complex setting
    */
    private ?string $implementationId = null;
    
    /**
     * @var array<DeviceManagementSettingInstance>|null $value The values that make up the complex setting
    */
    private ?array $value = null;
    
    /**
     * Instantiates a new DeviceManagementAbstractComplexSettingInstance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
            'implementationId' => function (ParseNode $n) use ($o) { $o->setImplementationId($n->getStringValue()); },
            'value' => function (ParseNode $n) use ($o) { $o->setValue($n->getCollectionOfObjectValues(array(DeviceManagementSettingInstance::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the implementationId property value. The definition ID for the chosen implementation of this complex setting
     * @return string|null
    */
    public function getImplementationId(): ?string {
        return $this->implementationId;
    }

    /**
     * Gets the value property value. The values that make up the complex setting
     * @return array<DeviceManagementSettingInstance>|null
    */
    public function getValue(): ?array {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('implementationId', $this->implementationId);
        $writer->writeCollectionOfObjectValues('value', $this->value);
    }

    /**
     * Sets the implementationId property value. The definition ID for the chosen implementation of this complex setting
     *  @param string|null $value Value to set for the implementationId property.
    */
    public function setImplementationId(?string $value ): void {
        $this->implementationId = $value;
    }

    /**
     * Sets the value property value. The values that make up the complex setting
     *  @param array<DeviceManagementSettingInstance>|null $value Value to set for the value property.
    */
    public function setValue(?array $value ): void {
        $this->value = $value;
    }

}

<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementSettingInstance extends Entity implements Parsable 
{
    /**
     * Instantiates a new deviceManagementSettingInstance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementSettingInstance');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementSettingInstance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementSettingInstance {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.deviceManagementAbstractComplexSettingInstance': return new DeviceManagementAbstractComplexSettingInstance();
                case '#microsoft.graph.deviceManagementBooleanSettingInstance': return new DeviceManagementBooleanSettingInstance();
                case '#microsoft.graph.deviceManagementCollectionSettingInstance': return new DeviceManagementCollectionSettingInstance();
                case '#microsoft.graph.deviceManagementComplexSettingInstance': return new DeviceManagementComplexSettingInstance();
                case '#microsoft.graph.deviceManagementIntegerSettingInstance': return new DeviceManagementIntegerSettingInstance();
                case '#microsoft.graph.deviceManagementStringSettingInstance': return new DeviceManagementStringSettingInstance();
            }
        }
        return new DeviceManagementSettingInstance();
    }

    /**
     * Gets the definitionId property value. The ID of the setting definition for this instance
     * @return string|null
    */
    public function getDefinitionId(): ?string {
        return $this->getBackingStore()->get('definitionId');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'definitionId' => fn(ParseNode $n) => $o->setDefinitionId($n->getStringValue()),
            'valueJson' => fn(ParseNode $n) => $o->setValueJson($n->getStringValue()),
        ]);
    }

    /**
     * Gets the valueJson property value. JSON representation of the value
     * @return string|null
    */
    public function getValueJson(): ?string {
        return $this->getBackingStore()->get('valueJson');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('definitionId', $this->getDefinitionId());
        $writer->writeStringValue('valueJson', $this->getValueJson());
    }

    /**
     * Sets the definitionId property value. The ID of the setting definition for this instance
     *  @param string|null $value Value to set for the definitionId property.
    */
    public function setDefinitionId(?string $value): void {
        $this->getBackingStore()->set('definitionId', $value);
    }

    /**
     * Sets the valueJson property value. JSON representation of the value
     *  @param string|null $value Value to set for the valueJson property.
    */
    public function setValueJson(?string $value): void {
        $this->getBackingStore()->set('valueJson', $value);
    }

}

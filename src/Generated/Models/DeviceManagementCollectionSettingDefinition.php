<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Entity representing the defintion for a collection setting
*/
class DeviceManagementCollectionSettingDefinition extends DeviceManagementSettingDefinition implements Parsable 
{
    /**
     * Instantiates a new DeviceManagementCollectionSettingDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementCollectionSettingDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementCollectionSettingDefinition {
        return new DeviceManagementCollectionSettingDefinition();
    }

    /**
     * Gets the elementDefinitionId property value. The Setting Definition ID that describes what each element of the collection looks like
     * @return string|null
    */
    public function getElementDefinitionId(): ?string {
        $val = $this->getBackingStore()->get('elementDefinitionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'elementDefinitionId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'elementDefinitionId' => fn(ParseNode $n) => $o->setElementDefinitionId($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('elementDefinitionId', $this->getElementDefinitionId());
    }

    /**
     * Sets the elementDefinitionId property value. The Setting Definition ID that describes what each element of the collection looks like
     * @param string|null $value Value to set for the elementDefinitionId property.
    */
    public function setElementDefinitionId(?string $value): void {
        $this->getBackingStore()->set('elementDefinitionId', $value);
    }

}

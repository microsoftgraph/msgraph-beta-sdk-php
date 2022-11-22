<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementSettingProfileConstraint extends DeviceManagementConstraint implements Parsable 
{
    /**
     * Instantiates a new DeviceManagementSettingProfileConstraint and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementSettingProfileConstraint');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementSettingProfileConstraint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementSettingProfileConstraint {
        return new DeviceManagementSettingProfileConstraint();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'source' => fn(ParseNode $n) => $o->setSource($n->getStringValue()),
            'types' => fn(ParseNode $n) => $o->setTypes($n->getCollectionOfPrimitiveValues()),
        ]);
    }

    /**
     * Gets the source property value. The source of the entity
     * @return string|null
    */
    public function getSource(): ?string {
        return $this->getBackingStore()->get('source');
    }

    /**
     * Gets the types property value. A collection of types this entity carries
     * @return array<string>|null
    */
    public function getTypes(): ?array {
        return $this->getBackingStore()->get('types');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('source', $this->getSource());
        $writer->writeCollectionOfPrimitiveValues('types', $this->getTypes());
    }

    /**
     * Sets the source property value. The source of the entity
     *  @param string|null $value Value to set for the source property.
    */
    public function setSource(?string $value): void {
        $this->getBackingStore()->set('source', $value);
    }

    /**
     * Sets the types property value. A collection of types this entity carries
     *  @param array<string>|null $value Value to set for the types property.
    */
    public function setTypes(?array $value): void {
        $this->getBackingStore()->set('types', $value);
    }

}

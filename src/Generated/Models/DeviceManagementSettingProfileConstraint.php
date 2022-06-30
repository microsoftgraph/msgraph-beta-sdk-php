<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementSettingProfileConstraint extends DeviceManagementConstraint implements Parsable 
{
    /**
     * @var string|null $source The source of the entity
    */
    private ?string $source = null;
    
    /**
     * @var array<string>|null $types A collection of types this entity carries
    */
    private ?array $types = null;
    
    /**
     * Instantiates a new DeviceManagementSettingProfileConstraint and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
            'source' => function (ParseNode $n) use ($o) { $o->setSource($n->getStringValue()); },
            'types' => function (ParseNode $n) use ($o) { $o->setTypes($n->getCollectionOfPrimitiveValues()); },
        ]);
    }

    /**
     * Gets the source property value. The source of the entity
     * @return string|null
    */
    public function getSource(): ?string {
        return $this->source;
    }

    /**
     * Gets the types property value. A collection of types this entity carries
     * @return array<string>|null
    */
    public function getTypes(): ?array {
        return $this->types;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('source', $this->source);
        $writer->writeCollectionOfPrimitiveValues('types', $this->types);
    }

    /**
     * Sets the source property value. The source of the entity
     *  @param string|null $value Value to set for the source property.
    */
    public function setSource(?string $value ): void {
        $this->source = $value;
    }

    /**
     * Sets the types property value. A collection of types this entity carries
     *  @param array<string>|null $value Value to set for the types property.
    */
    public function setTypes(?array $value ): void {
        $this->types = $value;
    }

}

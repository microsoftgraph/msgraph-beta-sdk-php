<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class DeviceManagementComplexSettingDefinition extends DeviceManagementSettingDefinition implements Parsable 
{
    /**
     * Instantiates a new DeviceManagementComplexSettingDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementComplexSettingDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementComplexSettingDefinition {
        return new DeviceManagementComplexSettingDefinition();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'propertyDefinitionIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setPropertyDefinitionIds($val);
            },
        ]);
    }

    /**
     * Gets the propertyDefinitionIds property value. The definitions of each property of the complex setting
     * @return array<string>|null
    */
    public function getPropertyDefinitionIds(): ?array {
        $val = $this->getBackingStore()->get('propertyDefinitionIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'propertyDefinitionIds'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('propertyDefinitionIds', $this->getPropertyDefinitionIds());
    }

    /**
     * Sets the propertyDefinitionIds property value. The definitions of each property of the complex setting
     * @param array<string>|null $value Value to set for the propertyDefinitionIds property.
    */
    public function setPropertyDefinitionIds(?array $value): void {
        $this->getBackingStore()->set('propertyDefinitionIds', $value);
    }

}

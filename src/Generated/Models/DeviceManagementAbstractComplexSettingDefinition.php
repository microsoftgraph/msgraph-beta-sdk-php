<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class DeviceManagementAbstractComplexSettingDefinition extends DeviceManagementSettingDefinition implements Parsable 
{
    /**
     * Instantiates a new DeviceManagementAbstractComplexSettingDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementAbstractComplexSettingDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementAbstractComplexSettingDefinition {
        return new DeviceManagementAbstractComplexSettingDefinition();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'implementations' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setImplementations($val);
            },
        ]);
    }

    /**
     * Gets the implementations property value. List of definition IDs for all possible implementations of this abstract complex setting
     * @return array<string>|null
    */
    public function getImplementations(): ?array {
        $val = $this->getBackingStore()->get('implementations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'implementations'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('implementations', $this->getImplementations());
    }

    /**
     * Sets the implementations property value. List of definition IDs for all possible implementations of this abstract complex setting
     * @param array<string>|null $value Value to set for the implementations property.
    */
    public function setImplementations(?array $value): void {
        $this->getBackingStore()->set('implementations', $value);
    }

}

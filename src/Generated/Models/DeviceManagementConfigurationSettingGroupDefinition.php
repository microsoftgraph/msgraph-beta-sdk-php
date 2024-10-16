<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class DeviceManagementConfigurationSettingGroupDefinition extends DeviceManagementConfigurationSettingDefinition implements Parsable 
{
    /**
     * Instantiates a new DeviceManagementConfigurationSettingGroupDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationSettingGroupDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationSettingGroupDefinition {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.deviceManagementConfigurationSettingGroupCollectionDefinition': return new DeviceManagementConfigurationSettingGroupCollectionDefinition();
            }
        }
        return new DeviceManagementConfigurationSettingGroupDefinition();
    }

    /**
     * Gets the childIds property value. Dependent child settings to this group of settings
     * @return array<string>|null
    */
    public function getChildIds(): ?array {
        $val = $this->getBackingStore()->get('childIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'childIds'");
    }

    /**
     * Gets the dependedOnBy property value. List of child settings that depend on this setting
     * @return array<DeviceManagementConfigurationSettingDependedOnBy>|null
    */
    public function getDependedOnBy(): ?array {
        $val = $this->getBackingStore()->get('dependedOnBy');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementConfigurationSettingDependedOnBy::class);
            /** @var array<DeviceManagementConfigurationSettingDependedOnBy>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dependedOnBy'");
    }

    /**
     * Gets the dependentOn property value. List of Dependencies for the setting group
     * @return array<DeviceManagementConfigurationDependentOn>|null
    */
    public function getDependentOn(): ?array {
        $val = $this->getBackingStore()->get('dependentOn');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementConfigurationDependentOn::class);
            /** @var array<DeviceManagementConfigurationDependentOn>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dependentOn'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'childIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setChildIds($val);
            },
            'dependedOnBy' => fn(ParseNode $n) => $o->setDependedOnBy($n->getCollectionOfObjectValues([DeviceManagementConfigurationSettingDependedOnBy::class, 'createFromDiscriminatorValue'])),
            'dependentOn' => fn(ParseNode $n) => $o->setDependentOn($n->getCollectionOfObjectValues([DeviceManagementConfigurationDependentOn::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('childIds', $this->getChildIds());
        $writer->writeCollectionOfObjectValues('dependedOnBy', $this->getDependedOnBy());
        $writer->writeCollectionOfObjectValues('dependentOn', $this->getDependentOn());
    }

    /**
     * Sets the childIds property value. Dependent child settings to this group of settings
     * @param array<string>|null $value Value to set for the childIds property.
    */
    public function setChildIds(?array $value): void {
        $this->getBackingStore()->set('childIds', $value);
    }

    /**
     * Sets the dependedOnBy property value. List of child settings that depend on this setting
     * @param array<DeviceManagementConfigurationSettingDependedOnBy>|null $value Value to set for the dependedOnBy property.
    */
    public function setDependedOnBy(?array $value): void {
        $this->getBackingStore()->set('dependedOnBy', $value);
    }

    /**
     * Sets the dependentOn property value. List of Dependencies for the setting group
     * @param array<DeviceManagementConfigurationDependentOn>|null $value Value to set for the dependentOn property.
    */
    public function setDependentOn(?array $value): void {
        $this->getBackingStore()->set('dependentOn', $value);
    }

}

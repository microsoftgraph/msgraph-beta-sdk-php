<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationSettingGroupDefinition extends DeviceManagementConfigurationSettingDefinition implements Parsable 
{
    /**
     * @var array<string>|null $childIds Dependent child settings to this group of settings
    */
    private ?array $childIds = null;
    
    /**
     * @var array<DeviceManagementConfigurationSettingDependedOnBy>|null $dependedOnBy List of child settings that depend on this setting
    */
    private ?array $dependedOnBy = null;
    
    /**
     * @var array<DeviceManagementConfigurationDependentOn>|null $dependentOn List of Dependencies for the setting group
    */
    private ?array $dependentOn = null;
    
    /**
     * @var string|null $type The type property
    */
    private ?string $type = null;
    
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
        return $this->childIds;
    }

    /**
     * Gets the dependedOnBy property value. List of child settings that depend on this setting
     * @return array<DeviceManagementConfigurationSettingDependedOnBy>|null
    */
    public function getDependedOnBy(): ?array {
        return $this->dependedOnBy;
    }

    /**
     * Gets the dependentOn property value. List of Dependencies for the setting group
     * @return array<DeviceManagementConfigurationDependentOn>|null
    */
    public function getDependentOn(): ?array {
        return $this->dependentOn;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'childIds' => function (ParseNode $n) use ($o) { $o->setChildIds($n->getCollectionOfPrimitiveValues()); },
            'dependedOnBy' => function (ParseNode $n) use ($o) { $o->setDependedOnBy($n->getCollectionOfObjectValues(array(DeviceManagementConfigurationSettingDependedOnBy::class, 'createFromDiscriminatorValue'))); },
            'dependentOn' => function (ParseNode $n) use ($o) { $o->setDependentOn($n->getCollectionOfObjectValues(array(DeviceManagementConfigurationDependentOn::class, 'createFromDiscriminatorValue'))); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdatatype($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the @odata.type property value. The type property
     * @return string|null
    */
    public function getOdatatype(): ?string {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('childIds', $this->childIds);
        $writer->writeCollectionOfObjectValues('dependedOnBy', $this->dependedOnBy);
        $writer->writeCollectionOfObjectValues('dependentOn', $this->dependentOn);
        $writer->writeStringValue('@odata.type', $this->type);
    }

    /**
     * Sets the childIds property value. Dependent child settings to this group of settings
     *  @param array<string>|null $value Value to set for the childIds property.
    */
    public function setChildIds(?array $value ): void {
        $this->childIds = $value;
    }

    /**
     * Sets the dependedOnBy property value. List of child settings that depend on this setting
     *  @param array<DeviceManagementConfigurationSettingDependedOnBy>|null $value Value to set for the dependedOnBy property.
    */
    public function setDependedOnBy(?array $value ): void {
        $this->dependedOnBy = $value;
    }

    /**
     * Sets the dependentOn property value. List of Dependencies for the setting group
     *  @param array<DeviceManagementConfigurationDependentOn>|null $value Value to set for the dependentOn property.
    */
    public function setDependentOn(?array $value ): void {
        $this->dependentOn = $value;
    }

    /**
     * Sets the @odata.type property value. The type property
     *  @param string|null $value Value to set for the type property.
    */
    public function setOdatatype(?string $value ): void {
        $this->type = $value;
    }

}

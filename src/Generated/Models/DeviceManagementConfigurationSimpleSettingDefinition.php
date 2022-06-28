<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationSimpleSettingDefinition extends DeviceManagementConfigurationSettingDefinition implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DeviceManagementConfigurationSettingValue|null $defaultValue Default setting value for this setting
    */
    private ?DeviceManagementConfigurationSettingValue $defaultValue = null;
    
    /**
     * @var array<DeviceManagementConfigurationSettingDependedOnBy>|null $dependedOnBy list of child settings that depend on this setting
    */
    private ?array $dependedOnBy = null;
    
    /**
     * @var array<DeviceManagementConfigurationDependentOn>|null $dependentOn list of parent settings this setting is dependent on
    */
    private ?array $dependentOn = null;
    
    /**
     * @var DeviceManagementConfigurationSettingValueDefinition|null $valueDefinition Definition of the value for this setting
    */
    private ?DeviceManagementConfigurationSettingValueDefinition $valueDefinition = null;
    
    /**
     * Instantiates a new DeviceManagementConfigurationSimpleSettingDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationSimpleSettingDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationSimpleSettingDefinition {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.deviceManagementConfigurationSimpleSettingCollectionDefinition': return new DeviceManagementConfigurationSimpleSettingCollectionDefinition();
            }
        }
        return new DeviceManagementConfigurationSimpleSettingDefinition();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the defaultValue property value. Default setting value for this setting
     * @return DeviceManagementConfigurationSettingValue|null
    */
    public function getDefaultValue(): ?DeviceManagementConfigurationSettingValue {
        return $this->defaultValue;
    }

    /**
     * Gets the dependedOnBy property value. list of child settings that depend on this setting
     * @return array<DeviceManagementConfigurationSettingDependedOnBy>|null
    */
    public function getDependedOnBy(): ?array {
        return $this->dependedOnBy;
    }

    /**
     * Gets the dependentOn property value. list of parent settings this setting is dependent on
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
            'defaultValue' => function (ParseNode $n) use ($o) { $o->setDefaultValue($n->getObjectValue(array(DeviceManagementConfigurationSettingValue::class, 'createFromDiscriminatorValue'))); },
            'dependedOnBy' => function (ParseNode $n) use ($o) { $o->setDependedOnBy($n->getCollectionOfObjectValues(array(DeviceManagementConfigurationSettingDependedOnBy::class, 'createFromDiscriminatorValue'))); },
            'dependentOn' => function (ParseNode $n) use ($o) { $o->setDependentOn($n->getCollectionOfObjectValues(array(DeviceManagementConfigurationDependentOn::class, 'createFromDiscriminatorValue'))); },
            'valueDefinition' => function (ParseNode $n) use ($o) { $o->setValueDefinition($n->getObjectValue(array(DeviceManagementConfigurationSettingValueDefinition::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the valueDefinition property value. Definition of the value for this setting
     * @return DeviceManagementConfigurationSettingValueDefinition|null
    */
    public function getValueDefinition(): ?DeviceManagementConfigurationSettingValueDefinition {
        return $this->valueDefinition;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('defaultValue', $this->defaultValue);
        $writer->writeCollectionOfObjectValues('dependedOnBy', $this->dependedOnBy);
        $writer->writeCollectionOfObjectValues('dependentOn', $this->dependentOn);
        $writer->writeObjectValue('valueDefinition', $this->valueDefinition);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the defaultValue property value. Default setting value for this setting
     *  @param DeviceManagementConfigurationSettingValue|null $value Value to set for the defaultValue property.
    */
    public function setDefaultValue(?DeviceManagementConfigurationSettingValue $value ): void {
        $this->defaultValue = $value;
    }

    /**
     * Sets the dependedOnBy property value. list of child settings that depend on this setting
     *  @param array<DeviceManagementConfigurationSettingDependedOnBy>|null $value Value to set for the dependedOnBy property.
    */
    public function setDependedOnBy(?array $value ): void {
        $this->dependedOnBy = $value;
    }

    /**
     * Sets the dependentOn property value. list of parent settings this setting is dependent on
     *  @param array<DeviceManagementConfigurationDependentOn>|null $value Value to set for the dependentOn property.
    */
    public function setDependentOn(?array $value ): void {
        $this->dependentOn = $value;
    }

    /**
     * Sets the valueDefinition property value. Definition of the value for this setting
     *  @param DeviceManagementConfigurationSettingValueDefinition|null $value Value to set for the valueDefinition property.
    */
    public function setValueDefinition(?DeviceManagementConfigurationSettingValueDefinition $value ): void {
        $this->valueDefinition = $value;
    }

}

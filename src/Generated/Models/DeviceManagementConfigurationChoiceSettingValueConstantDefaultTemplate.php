<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationChoiceSettingValueConstantDefaultTemplate extends DeviceManagementConfigurationChoiceSettingValueDefaultTemplate implements Parsable 
{
    /**
     * @var array<DeviceManagementConfigurationSettingInstanceTemplate>|null $children Option Children
    */
    private ?array $children = null;
    
    /**
     * @var string|null $settingDefinitionOptionId Default Constant Value
    */
    private ?string $settingDefinitionOptionId = null;
    
    /**
     * Instantiates a new DeviceManagementConfigurationChoiceSettingValueConstantDefaultTemplate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationChoiceSettingValueConstantDefaultTemplate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationChoiceSettingValueConstantDefaultTemplate {
        return new DeviceManagementConfigurationChoiceSettingValueConstantDefaultTemplate();
    }

    /**
     * Gets the children property value. Option Children
     * @return array<DeviceManagementConfigurationSettingInstanceTemplate>|null
    */
    public function getChildren(): ?array {
        return $this->children;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'children' => function (ParseNode $n) use ($o) { $o->setChildren($n->getCollectionOfObjectValues(array(DeviceManagementConfigurationSettingInstanceTemplate::class, 'createFromDiscriminatorValue'))); },
            'settingDefinitionOptionId' => function (ParseNode $n) use ($o) { $o->setSettingDefinitionOptionId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the settingDefinitionOptionId property value. Default Constant Value
     * @return string|null
    */
    public function getSettingDefinitionOptionId(): ?string {
        return $this->settingDefinitionOptionId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('children', $this->children);
        $writer->writeStringValue('settingDefinitionOptionId', $this->settingDefinitionOptionId);
    }

    /**
     * Sets the children property value. Option Children
     *  @param array<DeviceManagementConfigurationSettingInstanceTemplate>|null $value Value to set for the children property.
    */
    public function setChildren(?array $value ): void {
        $this->children = $value;
    }

    /**
     * Sets the settingDefinitionOptionId property value. Default Constant Value
     *  @param string|null $value Value to set for the settingDefinitionOptionId property.
    */
    public function setSettingDefinitionOptionId(?string $value ): void {
        $this->settingDefinitionOptionId = $value;
    }

}

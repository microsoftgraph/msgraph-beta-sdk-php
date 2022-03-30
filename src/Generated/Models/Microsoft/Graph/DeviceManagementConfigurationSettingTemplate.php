<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationSettingTemplate extends Entity 
{
    /** @var array<DeviceManagementConfigurationSettingDefinition>|null $settingDefinitions List of related Setting Definitions */
    private ?array $settingDefinitions = null;
    
    /** @var DeviceManagementConfigurationSettingInstanceTemplate|null $settingInstanceTemplate Setting Instance Template */
    private ?DeviceManagementConfigurationSettingInstanceTemplate $settingInstanceTemplate = null;
    
    /**
     * Instantiates a new deviceManagementConfigurationSettingTemplate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationSettingTemplate
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationSettingTemplate {
        return new DeviceManagementConfigurationSettingTemplate();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'settingDefinitions' => function (self $o, ParseNode $n) { $o->setSettingDefinitions($n->getCollectionOfObjectValues(DeviceManagementConfigurationSettingDefinition::class)); },
            'settingInstanceTemplate' => function (self $o, ParseNode $n) { $o->setSettingInstanceTemplate($n->getObjectValue(DeviceManagementConfigurationSettingInstanceTemplate::class)); },
        ]);
    }

    /**
     * Gets the settingDefinitions property value. List of related Setting Definitions
     * @return array<DeviceManagementConfigurationSettingDefinition>|null
    */
    public function getSettingDefinitions(): ?array {
        return $this->settingDefinitions;
    }

    /**
     * Gets the settingInstanceTemplate property value. Setting Instance Template
     * @return DeviceManagementConfigurationSettingInstanceTemplate|null
    */
    public function getSettingInstanceTemplate(): ?DeviceManagementConfigurationSettingInstanceTemplate {
        return $this->settingInstanceTemplate;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('settingDefinitions', $this->settingDefinitions);
        $writer->writeObjectValue('settingInstanceTemplate', $this->settingInstanceTemplate);
    }

    /**
     * Sets the settingDefinitions property value. List of related Setting Definitions
     *  @param array<DeviceManagementConfigurationSettingDefinition>|null $value Value to set for the settingDefinitions property.
    */
    public function setSettingDefinitions(?array $value ): void {
        $this->settingDefinitions = $value;
    }

    /**
     * Sets the settingInstanceTemplate property value. Setting Instance Template
     *  @param DeviceManagementConfigurationSettingInstanceTemplate|null $value Value to set for the settingInstanceTemplate property.
    */
    public function setSettingInstanceTemplate(?DeviceManagementConfigurationSettingInstanceTemplate $value ): void {
        $this->settingInstanceTemplate = $value;
    }

}

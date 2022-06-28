<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationSettingTemplate extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<DeviceManagementConfigurationSettingDefinition>|null $settingDefinitions List of related Setting Definitions
    */
    private ?array $settingDefinitions = null;
    
    /**
     * @var DeviceManagementConfigurationSettingInstanceTemplate|null $settingInstanceTemplate Setting Instance Template
    */
    private ?DeviceManagementConfigurationSettingInstanceTemplate $settingInstanceTemplate = null;
    
    /**
     * Instantiates a new deviceManagementConfigurationSettingTemplate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationSettingTemplate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationSettingTemplate {
        return new DeviceManagementConfigurationSettingTemplate();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'settingDefinitions' => function (ParseNode $n) use ($o) { $o->setSettingDefinitions($n->getCollectionOfObjectValues(array(DeviceManagementConfigurationSettingDefinition::class, 'createFromDiscriminatorValue'))); },
            'settingInstanceTemplate' => function (ParseNode $n) use ($o) { $o->setSettingInstanceTemplate($n->getObjectValue(array(DeviceManagementConfigurationSettingInstanceTemplate::class, 'createFromDiscriminatorValue'))); },
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

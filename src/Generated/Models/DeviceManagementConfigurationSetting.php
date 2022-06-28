<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationSetting extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<DeviceManagementConfigurationSettingDefinition>|null $settingDefinitions List of related Setting Definitions. This property is read-only.
    */
    private ?array $settingDefinitions = null;
    
    /**
     * @var DeviceManagementConfigurationSettingInstance|null $settingInstance Setting instance within policy
    */
    private ?DeviceManagementConfigurationSettingInstance $settingInstance = null;
    
    /**
     * Instantiates a new deviceManagementConfigurationSetting and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationSetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationSetting {
        return new DeviceManagementConfigurationSetting();
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
            'settingInstance' => function (ParseNode $n) use ($o) { $o->setSettingInstance($n->getObjectValue(array(DeviceManagementConfigurationSettingInstance::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the settingDefinitions property value. List of related Setting Definitions. This property is read-only.
     * @return array<DeviceManagementConfigurationSettingDefinition>|null
    */
    public function getSettingDefinitions(): ?array {
        return $this->settingDefinitions;
    }

    /**
     * Gets the settingInstance property value. Setting instance within policy
     * @return DeviceManagementConfigurationSettingInstance|null
    */
    public function getSettingInstance(): ?DeviceManagementConfigurationSettingInstance {
        return $this->settingInstance;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('settingDefinitions', $this->settingDefinitions);
        $writer->writeObjectValue('settingInstance', $this->settingInstance);
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
     * Sets the settingDefinitions property value. List of related Setting Definitions. This property is read-only.
     *  @param array<DeviceManagementConfigurationSettingDefinition>|null $value Value to set for the settingDefinitions property.
    */
    public function setSettingDefinitions(?array $value ): void {
        $this->settingDefinitions = $value;
    }

    /**
     * Sets the settingInstance property value. Setting instance within policy
     *  @param DeviceManagementConfigurationSettingInstance|null $value Value to set for the settingInstance property.
    */
    public function setSettingInstance(?DeviceManagementConfigurationSettingInstance $value ): void {
        $this->settingInstance = $value;
    }

}

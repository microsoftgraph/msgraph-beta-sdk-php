<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementSettingCategory extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $displayName The category name
    */
    private ?string $displayName = null;
    
    /**
     * @var bool|null $hasRequiredSetting The category contains top level required setting
    */
    private ?bool $hasRequiredSetting = null;
    
    /**
     * @var array<DeviceManagementSettingDefinition>|null $settingDefinitions The setting definitions this category contains
    */
    private ?array $settingDefinitions = null;
    
    /**
     * Instantiates a new deviceManagementSettingCategory and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementSettingCategory
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementSettingCategory {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.deviceManagementIntentSettingCategory': return new DeviceManagementIntentSettingCategory();
                case '#microsoft.graph.deviceManagementTemplateSettingCategory': return new DeviceManagementTemplateSettingCategory();
            }
        }
        return new DeviceManagementSettingCategory();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the displayName property value. The category name
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'hasRequiredSetting' => function (ParseNode $n) use ($o) { $o->setHasRequiredSetting($n->getBooleanValue()); },
            'settingDefinitions' => function (ParseNode $n) use ($o) { $o->setSettingDefinitions($n->getCollectionOfObjectValues(array(DeviceManagementSettingDefinition::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the hasRequiredSetting property value. The category contains top level required setting
     * @return bool|null
    */
    public function getHasRequiredSetting(): ?bool {
        return $this->hasRequiredSetting;
    }

    /**
     * Gets the settingDefinitions property value. The setting definitions this category contains
     * @return array<DeviceManagementSettingDefinition>|null
    */
    public function getSettingDefinitions(): ?array {
        return $this->settingDefinitions;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeBooleanValue('hasRequiredSetting', $this->hasRequiredSetting);
        $writer->writeCollectionOfObjectValues('settingDefinitions', $this->settingDefinitions);
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
     * Sets the displayName property value. The category name
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the hasRequiredSetting property value. The category contains top level required setting
     *  @param bool|null $value Value to set for the hasRequiredSetting property.
    */
    public function setHasRequiredSetting(?bool $value ): void {
        $this->hasRequiredSetting = $value;
    }

    /**
     * Sets the settingDefinitions property value. The setting definitions this category contains
     *  @param array<DeviceManagementSettingDefinition>|null $value Value to set for the settingDefinitions property.
    */
    public function setSettingDefinitions(?array $value ): void {
        $this->settingDefinitions = $value;
    }

}

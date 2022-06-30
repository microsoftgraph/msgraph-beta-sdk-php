<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationChoiceSettingCollectionInstanceTemplate extends DeviceManagementConfigurationSettingInstanceTemplate implements Parsable 
{
    /**
     * @var bool|null $allowUnmanagedValues Linked policy may append values which are not present in the template.
    */
    private ?bool $allowUnmanagedValues = null;
    
    /**
     * @var array<DeviceManagementConfigurationChoiceSettingValueTemplate>|null $choiceSettingCollectionValueTemplate Choice Setting Collection Value Template
    */
    private ?array $choiceSettingCollectionValueTemplate = null;
    
    /**
     * Instantiates a new DeviceManagementConfigurationChoiceSettingCollectionInstanceTemplate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationChoiceSettingCollectionInstanceTemplate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationChoiceSettingCollectionInstanceTemplate {
        return new DeviceManagementConfigurationChoiceSettingCollectionInstanceTemplate();
    }

    /**
     * Gets the allowUnmanagedValues property value. Linked policy may append values which are not present in the template.
     * @return bool|null
    */
    public function getAllowUnmanagedValues(): ?bool {
        return $this->allowUnmanagedValues;
    }

    /**
     * Gets the choiceSettingCollectionValueTemplate property value. Choice Setting Collection Value Template
     * @return array<DeviceManagementConfigurationChoiceSettingValueTemplate>|null
    */
    public function getChoiceSettingCollectionValueTemplate(): ?array {
        return $this->choiceSettingCollectionValueTemplate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowUnmanagedValues' => function (ParseNode $n) use ($o) { $o->setAllowUnmanagedValues($n->getBooleanValue()); },
            'choiceSettingCollectionValueTemplate' => function (ParseNode $n) use ($o) { $o->setChoiceSettingCollectionValueTemplate($n->getCollectionOfObjectValues(array(DeviceManagementConfigurationChoiceSettingValueTemplate::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowUnmanagedValues', $this->allowUnmanagedValues);
        $writer->writeCollectionOfObjectValues('choiceSettingCollectionValueTemplate', $this->choiceSettingCollectionValueTemplate);
    }

    /**
     * Sets the allowUnmanagedValues property value. Linked policy may append values which are not present in the template.
     *  @param bool|null $value Value to set for the allowUnmanagedValues property.
    */
    public function setAllowUnmanagedValues(?bool $value ): void {
        $this->allowUnmanagedValues = $value;
    }

    /**
     * Sets the choiceSettingCollectionValueTemplate property value. Choice Setting Collection Value Template
     *  @param array<DeviceManagementConfigurationChoiceSettingValueTemplate>|null $value Value to set for the choiceSettingCollectionValueTemplate property.
    */
    public function setChoiceSettingCollectionValueTemplate(?array $value ): void {
        $this->choiceSettingCollectionValueTemplate = $value;
    }

}

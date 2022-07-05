<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationSimpleSettingCollectionInstanceTemplate extends DeviceManagementConfigurationSettingInstanceTemplate implements Parsable 
{
    /**
     * @var bool|null $allowUnmanagedValues Linked policy may append values which are not present in the template.
    */
    private ?bool $allowUnmanagedValues = null;
    
    /**
     * @var array<DeviceManagementConfigurationSimpleSettingValueTemplate>|null $simpleSettingCollectionValueTemplate Simple Setting Collection Value Template
    */
    private ?array $simpleSettingCollectionValueTemplate = null;
    
    /**
     * Instantiates a new DeviceManagementConfigurationSimpleSettingCollectionInstanceTemplate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationSimpleSettingCollectionInstanceTemplate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationSimpleSettingCollectionInstanceTemplate {
        return new DeviceManagementConfigurationSimpleSettingCollectionInstanceTemplate();
    }

    /**
     * Gets the allowUnmanagedValues property value. Linked policy may append values which are not present in the template.
     * @return bool|null
    */
    public function getAllowUnmanagedValues(): ?bool {
        return $this->allowUnmanagedValues;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowUnmanagedValues' => function (ParseNode $n) use ($o) { $o->setAllowUnmanagedValues($n->getBooleanValue()); },
            'simpleSettingCollectionValueTemplate' => function (ParseNode $n) use ($o) { $o->setSimpleSettingCollectionValueTemplate($n->getCollectionOfObjectValues(array(DeviceManagementConfigurationSimpleSettingValueTemplate::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the simpleSettingCollectionValueTemplate property value. Simple Setting Collection Value Template
     * @return array<DeviceManagementConfigurationSimpleSettingValueTemplate>|null
    */
    public function getSimpleSettingCollectionValueTemplate(): ?array {
        return $this->simpleSettingCollectionValueTemplate;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowUnmanagedValues', $this->allowUnmanagedValues);
        $writer->writeCollectionOfObjectValues('simpleSettingCollectionValueTemplate', $this->simpleSettingCollectionValueTemplate);
    }

    /**
     * Sets the allowUnmanagedValues property value. Linked policy may append values which are not present in the template.
     *  @param bool|null $value Value to set for the allowUnmanagedValues property.
    */
    public function setAllowUnmanagedValues(?bool $value ): void {
        $this->allowUnmanagedValues = $value;
    }

    /**
     * Sets the simpleSettingCollectionValueTemplate property value. Simple Setting Collection Value Template
     *  @param array<DeviceManagementConfigurationSimpleSettingValueTemplate>|null $value Value to set for the simpleSettingCollectionValueTemplate property.
    */
    public function setSimpleSettingCollectionValueTemplate(?array $value ): void {
        $this->simpleSettingCollectionValueTemplate = $value;
    }

}

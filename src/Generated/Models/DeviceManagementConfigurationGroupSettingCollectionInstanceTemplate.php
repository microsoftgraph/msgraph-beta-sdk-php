<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationGroupSettingCollectionInstanceTemplate extends DeviceManagementConfigurationSettingInstanceTemplate implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $allowUnmanagedValues Linked policy may append values which are not present in the template.
    */
    private ?bool $allowUnmanagedValues = null;
    
    /**
     * @var array<DeviceManagementConfigurationGroupSettingValueTemplate>|null $groupSettingCollectionValueTemplate Group Setting Collection Value Template
    */
    private ?array $groupSettingCollectionValueTemplate = null;
    
    /**
     * Instantiates a new DeviceManagementConfigurationGroupSettingCollectionInstanceTemplate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationGroupSettingCollectionInstanceTemplate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationGroupSettingCollectionInstanceTemplate {
        return new DeviceManagementConfigurationGroupSettingCollectionInstanceTemplate();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
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
            'groupSettingCollectionValueTemplate' => function (ParseNode $n) use ($o) { $o->setGroupSettingCollectionValueTemplate($n->getCollectionOfObjectValues(array(DeviceManagementConfigurationGroupSettingValueTemplate::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the groupSettingCollectionValueTemplate property value. Group Setting Collection Value Template
     * @return array<DeviceManagementConfigurationGroupSettingValueTemplate>|null
    */
    public function getGroupSettingCollectionValueTemplate(): ?array {
        return $this->groupSettingCollectionValueTemplate;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowUnmanagedValues', $this->allowUnmanagedValues);
        $writer->writeCollectionOfObjectValues('groupSettingCollectionValueTemplate', $this->groupSettingCollectionValueTemplate);
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
     * Sets the allowUnmanagedValues property value. Linked policy may append values which are not present in the template.
     *  @param bool|null $value Value to set for the allowUnmanagedValues property.
    */
    public function setAllowUnmanagedValues(?bool $value ): void {
        $this->allowUnmanagedValues = $value;
    }

    /**
     * Sets the groupSettingCollectionValueTemplate property value. Group Setting Collection Value Template
     *  @param array<DeviceManagementConfigurationGroupSettingValueTemplate>|null $value Value to set for the groupSettingCollectionValueTemplate property.
    */
    public function setGroupSettingCollectionValueTemplate(?array $value ): void {
        $this->groupSettingCollectionValueTemplate = $value;
    }

}

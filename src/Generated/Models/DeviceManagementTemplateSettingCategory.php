<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementTemplateSettingCategory extends DeviceManagementSettingCategory implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<DeviceManagementSettingInstance>|null $recommendedSettings The settings this category contains
    */
    private ?array $recommendedSettings = null;
    
    /**
     * Instantiates a new DeviceManagementTemplateSettingCategory and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementTemplateSettingCategory
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementTemplateSettingCategory {
        return new DeviceManagementTemplateSettingCategory();
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
            'recommendedSettings' => function (ParseNode $n) use ($o) { $o->setRecommendedSettings($n->getCollectionOfObjectValues(array(DeviceManagementSettingInstance::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the recommendedSettings property value. The settings this category contains
     * @return array<DeviceManagementSettingInstance>|null
    */
    public function getRecommendedSettings(): ?array {
        return $this->recommendedSettings;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('recommendedSettings', $this->recommendedSettings);
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
     * Sets the recommendedSettings property value. The settings this category contains
     *  @param array<DeviceManagementSettingInstance>|null $value Value to set for the recommendedSettings property.
    */
    public function setRecommendedSettings(?array $value ): void {
        $this->recommendedSettings = $value;
    }

}

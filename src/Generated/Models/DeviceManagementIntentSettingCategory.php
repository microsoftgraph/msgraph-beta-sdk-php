<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementIntentSettingCategory extends DeviceManagementSettingCategory implements Parsable 
{
    /**
     * @var array<DeviceManagementSettingInstance>|null $settings The settings this category contains
    */
    private ?array $settings = null;
    
    /**
     * Instantiates a new deviceManagementIntentSettingCategory and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementIntentSettingCategory');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementIntentSettingCategory
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementIntentSettingCategory {
        return new DeviceManagementIntentSettingCategory();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'settings' => function (ParseNode $n) use ($o) { $o->setSettings($n->getCollectionOfObjectValues(array(DeviceManagementSettingInstance::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the settings property value. The settings this category contains
     * @return array<DeviceManagementSettingInstance>|null
    */
    public function getSettings(): ?array {
        return $this->settings;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('settings', $this->settings);
    }

    /**
     * Sets the settings property value. The settings this category contains
     *  @param array<DeviceManagementSettingInstance>|null $value Value to set for the settings property.
    */
    public function setSettings(?array $value ): void {
        $this->settings = $value;
    }

}

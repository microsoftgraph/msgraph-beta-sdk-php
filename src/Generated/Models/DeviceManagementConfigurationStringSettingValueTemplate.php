<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationStringSettingValueTemplate extends DeviceManagementConfigurationSimpleSettingValueTemplate implements Parsable 
{
    /**
     * @var DeviceManagementConfigurationStringSettingValueDefaultTemplate|null $defaultValue String Setting Value Default Template.
    */
    private ?DeviceManagementConfigurationStringSettingValueDefaultTemplate $defaultValue = null;
    
    /**
     * Instantiates a new DeviceManagementConfigurationStringSettingValueTemplate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationStringSettingValueTemplate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationStringSettingValueTemplate {
        return new DeviceManagementConfigurationStringSettingValueTemplate();
    }

    /**
     * Gets the defaultValue property value. String Setting Value Default Template.
     * @return DeviceManagementConfigurationStringSettingValueDefaultTemplate|null
    */
    public function getDefaultValue(): ?DeviceManagementConfigurationStringSettingValueDefaultTemplate {
        return $this->defaultValue;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'defaultValue' => function (ParseNode $n) use ($o) { $o->setDefaultValue($n->getObjectValue(array(DeviceManagementConfigurationStringSettingValueDefaultTemplate::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('defaultValue', $this->defaultValue);
    }

    /**
     * Sets the defaultValue property value. String Setting Value Default Template.
     *  @param DeviceManagementConfigurationStringSettingValueDefaultTemplate|null $value Value to set for the defaultValue property.
    */
    public function setDefaultValue(?DeviceManagementConfigurationStringSettingValueDefaultTemplate $value ): void {
        $this->defaultValue = $value;
    }

}

<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationSimpleSettingInstanceTemplate extends DeviceManagementConfigurationSettingInstanceTemplate implements Parsable 
{
    /**
     * Instantiates a new DeviceManagementConfigurationSimpleSettingInstanceTemplate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementConfigurationSimpleSettingInstanceTemplate');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationSimpleSettingInstanceTemplate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationSimpleSettingInstanceTemplate {
        return new DeviceManagementConfigurationSimpleSettingInstanceTemplate();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'simpleSettingValueTemplate' => fn(ParseNode $n) => $o->setSimpleSettingValueTemplate($n->getObjectValue([DeviceManagementConfigurationSimpleSettingValueTemplate::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the simpleSettingValueTemplate property value. Simple Setting Value Template
     * @return DeviceManagementConfigurationSimpleSettingValueTemplate|null
    */
    public function getSimpleSettingValueTemplate(): ?DeviceManagementConfigurationSimpleSettingValueTemplate {
        return $this->getBackingStore()->get('simpleSettingValueTemplate');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('simpleSettingValueTemplate', $this->getSimpleSettingValueTemplate());
    }

    /**
     * Sets the simpleSettingValueTemplate property value. Simple Setting Value Template
     * @param DeviceManagementConfigurationSimpleSettingValueTemplate|null $value Value to set for the simpleSettingValueTemplate property.
    */
    public function setSimpleSettingValueTemplate(?DeviceManagementConfigurationSimpleSettingValueTemplate $value): void {
        $this->getBackingStore()->set('simpleSettingValueTemplate', $value);
    }

}

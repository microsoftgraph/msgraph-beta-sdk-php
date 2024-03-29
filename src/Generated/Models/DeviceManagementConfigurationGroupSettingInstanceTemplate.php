<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Group Setting Instance Template
*/
class DeviceManagementConfigurationGroupSettingInstanceTemplate extends DeviceManagementConfigurationSettingInstanceTemplate implements Parsable 
{
    /**
     * Instantiates a new DeviceManagementConfigurationGroupSettingInstanceTemplate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementConfigurationGroupSettingInstanceTemplate');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationGroupSettingInstanceTemplate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationGroupSettingInstanceTemplate {
        return new DeviceManagementConfigurationGroupSettingInstanceTemplate();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'groupSettingValueTemplate' => fn(ParseNode $n) => $o->setGroupSettingValueTemplate($n->getObjectValue([DeviceManagementConfigurationGroupSettingValueTemplate::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the groupSettingValueTemplate property value. Group Setting Value Template
     * @return DeviceManagementConfigurationGroupSettingValueTemplate|null
    */
    public function getGroupSettingValueTemplate(): ?DeviceManagementConfigurationGroupSettingValueTemplate {
        $val = $this->getBackingStore()->get('groupSettingValueTemplate');
        if (is_null($val) || $val instanceof DeviceManagementConfigurationGroupSettingValueTemplate) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupSettingValueTemplate'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('groupSettingValueTemplate', $this->getGroupSettingValueTemplate());
    }

    /**
     * Sets the groupSettingValueTemplate property value. Group Setting Value Template
     * @param DeviceManagementConfigurationGroupSettingValueTemplate|null $value Value to set for the groupSettingValueTemplate property.
    */
    public function setGroupSettingValueTemplate(?DeviceManagementConfigurationGroupSettingValueTemplate $value): void {
        $this->getBackingStore()->set('groupSettingValueTemplate', $value);
    }

}

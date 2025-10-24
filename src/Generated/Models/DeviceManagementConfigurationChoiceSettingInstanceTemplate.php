<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Choice Setting Instance Template
*/
class DeviceManagementConfigurationChoiceSettingInstanceTemplate extends DeviceManagementConfigurationSettingInstanceTemplate implements Parsable 
{
    /**
     * Instantiates a new DeviceManagementConfigurationChoiceSettingInstanceTemplate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementConfigurationChoiceSettingInstanceTemplate');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationChoiceSettingInstanceTemplate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationChoiceSettingInstanceTemplate {
        return new DeviceManagementConfigurationChoiceSettingInstanceTemplate();
    }

    /**
     * Gets the choiceSettingValueTemplate property value. Choice Setting Value Template
     * @return DeviceManagementConfigurationChoiceSettingValueTemplate|null
    */
    public function getChoiceSettingValueTemplate(): ?DeviceManagementConfigurationChoiceSettingValueTemplate {
        $val = $this->getBackingStore()->get('choiceSettingValueTemplate');
        if (is_null($val) || $val instanceof DeviceManagementConfigurationChoiceSettingValueTemplate) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'choiceSettingValueTemplate'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'choiceSettingValueTemplate' => fn(ParseNode $n) => $o->setChoiceSettingValueTemplate($n->getObjectValue([DeviceManagementConfigurationChoiceSettingValueTemplate::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('choiceSettingValueTemplate', $this->getChoiceSettingValueTemplate());
    }

    /**
     * Sets the choiceSettingValueTemplate property value. Choice Setting Value Template
     * @param DeviceManagementConfigurationChoiceSettingValueTemplate|null $value Value to set for the choiceSettingValueTemplate property.
    */
    public function setChoiceSettingValueTemplate(?DeviceManagementConfigurationChoiceSettingValueTemplate $value): void {
        $this->getBackingStore()->set('choiceSettingValueTemplate', $value);
    }

}

<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Group Setting Collection Instance Template
*/
class DeviceManagementConfigurationGroupSettingCollectionInstanceTemplate extends DeviceManagementConfigurationSettingInstanceTemplate implements Parsable 
{
    /**
     * Instantiates a new DeviceManagementConfigurationGroupSettingCollectionInstanceTemplate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementConfigurationGroupSettingCollectionInstanceTemplate');
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
     * Gets the allowUnmanagedValues property value. Linked policy may append values which are not present in the template.
     * @return bool|null
    */
    public function getAllowUnmanagedValues(): ?bool {
        $val = $this->getBackingStore()->get('allowUnmanagedValues');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowUnmanagedValues'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowUnmanagedValues' => fn(ParseNode $n) => $o->setAllowUnmanagedValues($n->getBooleanValue()),
            'groupSettingCollectionValueTemplate' => fn(ParseNode $n) => $o->setGroupSettingCollectionValueTemplate($n->getCollectionOfObjectValues([DeviceManagementConfigurationGroupSettingValueTemplate::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the groupSettingCollectionValueTemplate property value. Group Setting Collection Value Template
     * @return array<DeviceManagementConfigurationGroupSettingValueTemplate>|null
    */
    public function getGroupSettingCollectionValueTemplate(): ?array {
        $val = $this->getBackingStore()->get('groupSettingCollectionValueTemplate');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementConfigurationGroupSettingValueTemplate::class);
            /** @var array<DeviceManagementConfigurationGroupSettingValueTemplate>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupSettingCollectionValueTemplate'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowUnmanagedValues', $this->getAllowUnmanagedValues());
        $writer->writeCollectionOfObjectValues('groupSettingCollectionValueTemplate', $this->getGroupSettingCollectionValueTemplate());
    }

    /**
     * Sets the allowUnmanagedValues property value. Linked policy may append values which are not present in the template.
     * @param bool|null $value Value to set for the allowUnmanagedValues property.
    */
    public function setAllowUnmanagedValues(?bool $value): void {
        $this->getBackingStore()->set('allowUnmanagedValues', $value);
    }

    /**
     * Sets the groupSettingCollectionValueTemplate property value. Group Setting Collection Value Template
     * @param array<DeviceManagementConfigurationGroupSettingValueTemplate>|null $value Value to set for the groupSettingCollectionValueTemplate property.
    */
    public function setGroupSettingCollectionValueTemplate(?array $value): void {
        $this->getBackingStore()->set('groupSettingCollectionValueTemplate', $value);
    }

}

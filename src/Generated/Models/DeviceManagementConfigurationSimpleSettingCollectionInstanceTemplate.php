<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Simple Setting Collection Instance Template
*/
class DeviceManagementConfigurationSimpleSettingCollectionInstanceTemplate extends DeviceManagementConfigurationSettingInstanceTemplate implements Parsable 
{
    /**
     * Instantiates a new deviceManagementConfigurationSimpleSettingCollectionInstanceTemplate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementConfigurationSimpleSettingCollectionInstanceTemplate');
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
            'simpleSettingCollectionValueTemplate' => fn(ParseNode $n) => $o->setSimpleSettingCollectionValueTemplate($n->getCollectionOfObjectValues([DeviceManagementConfigurationSimpleSettingValueTemplate::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the simpleSettingCollectionValueTemplate property value. Simple Setting Collection Value Template
     * @return array<DeviceManagementConfigurationSimpleSettingValueTemplate>|null
    */
    public function getSimpleSettingCollectionValueTemplate(): ?array {
        $val = $this->getBackingStore()->get('simpleSettingCollectionValueTemplate');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementConfigurationSimpleSettingValueTemplate::class);
            /** @var array<DeviceManagementConfigurationSimpleSettingValueTemplate>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'simpleSettingCollectionValueTemplate'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowUnmanagedValues', $this->getAllowUnmanagedValues());
        $writer->writeCollectionOfObjectValues('simpleSettingCollectionValueTemplate', $this->getSimpleSettingCollectionValueTemplate());
    }

    /**
     * Sets the allowUnmanagedValues property value. Linked policy may append values which are not present in the template.
     * @param bool|null $value Value to set for the allowUnmanagedValues property.
    */
    public function setAllowUnmanagedValues(?bool $value): void {
        $this->getBackingStore()->set('allowUnmanagedValues', $value);
    }

    /**
     * Sets the simpleSettingCollectionValueTemplate property value. Simple Setting Collection Value Template
     * @param array<DeviceManagementConfigurationSimpleSettingValueTemplate>|null $value Value to set for the simpleSettingCollectionValueTemplate property.
    */
    public function setSimpleSettingCollectionValueTemplate(?array $value): void {
        $this->getBackingStore()->set('simpleSettingCollectionValueTemplate', $value);
    }

}

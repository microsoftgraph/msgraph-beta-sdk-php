<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Choice Setting Collection Instance Template
*/
class DeviceManagementConfigurationChoiceSettingCollectionInstanceTemplate extends DeviceManagementConfigurationSettingInstanceTemplate implements Parsable 
{
    /**
     * Instantiates a new deviceManagementConfigurationChoiceSettingCollectionInstanceTemplate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementConfigurationChoiceSettingCollectionInstanceTemplate');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationChoiceSettingCollectionInstanceTemplate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationChoiceSettingCollectionInstanceTemplate {
        return new DeviceManagementConfigurationChoiceSettingCollectionInstanceTemplate();
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
     * Gets the choiceSettingCollectionValueTemplate property value. Choice Setting Collection Value Template
     * @return array<DeviceManagementConfigurationChoiceSettingValueTemplate>|null
    */
    public function getChoiceSettingCollectionValueTemplate(): ?array {
        $val = $this->getBackingStore()->get('choiceSettingCollectionValueTemplate');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementConfigurationChoiceSettingValueTemplate::class);
            /** @var array<DeviceManagementConfigurationChoiceSettingValueTemplate>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'choiceSettingCollectionValueTemplate'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowUnmanagedValues' => fn(ParseNode $n) => $o->setAllowUnmanagedValues($n->getBooleanValue()),
            'choiceSettingCollectionValueTemplate' => fn(ParseNode $n) => $o->setChoiceSettingCollectionValueTemplate($n->getCollectionOfObjectValues([DeviceManagementConfigurationChoiceSettingValueTemplate::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowUnmanagedValues', $this->getAllowUnmanagedValues());
        $writer->writeCollectionOfObjectValues('choiceSettingCollectionValueTemplate', $this->getChoiceSettingCollectionValueTemplate());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the allowUnmanagedValues property value. Linked policy may append values which are not present in the template.
     * @param bool|null $value Value to set for the allowUnmanagedValues property.
    */
    public function setAllowUnmanagedValues(?bool $value): void {
        $this->getBackingStore()->set('allowUnmanagedValues', $value);
    }

    /**
     * Sets the choiceSettingCollectionValueTemplate property value. Choice Setting Collection Value Template
     * @param array<DeviceManagementConfigurationChoiceSettingValueTemplate>|null $value Value to set for the choiceSettingCollectionValueTemplate property.
    */
    public function setChoiceSettingCollectionValueTemplate(?array $value): void {
        $this->getBackingStore()->set('choiceSettingCollectionValueTemplate', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}

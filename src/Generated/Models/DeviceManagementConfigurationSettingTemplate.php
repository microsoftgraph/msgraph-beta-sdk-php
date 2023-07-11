<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Setting Template
*/
class DeviceManagementConfigurationSettingTemplate extends Entity implements Parsable 
{
    /**
     * Instantiates a new deviceManagementConfigurationSettingTemplate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationSettingTemplate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationSettingTemplate {
        return new DeviceManagementConfigurationSettingTemplate();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'settingDefinitions' => fn(ParseNode $n) => $o->setSettingDefinitions($n->getCollectionOfObjectValues([DeviceManagementConfigurationSettingDefinition::class, 'createFromDiscriminatorValue'])),
            'settingInstanceTemplate' => fn(ParseNode $n) => $o->setSettingInstanceTemplate($n->getObjectValue([DeviceManagementConfigurationSettingInstanceTemplate::class, 'createFromDiscriminatorValue'])),
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
     * Gets the settingDefinitions property value. List of related Setting Definitions
     * @return array<DeviceManagementConfigurationSettingDefinition>|null
    */
    public function getSettingDefinitions(): ?array {
        $val = $this->getBackingStore()->get('settingDefinitions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementConfigurationSettingDefinition::class);
            /** @var array<DeviceManagementConfigurationSettingDefinition>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingDefinitions'");
    }

    /**
     * Gets the settingInstanceTemplate property value. Setting Instance Template
     * @return DeviceManagementConfigurationSettingInstanceTemplate|null
    */
    public function getSettingInstanceTemplate(): ?DeviceManagementConfigurationSettingInstanceTemplate {
        $val = $this->getBackingStore()->get('settingInstanceTemplate');
        if (is_null($val) || $val instanceof DeviceManagementConfigurationSettingInstanceTemplate) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingInstanceTemplate'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('settingDefinitions', $this->getSettingDefinitions());
        $writer->writeObjectValue('settingInstanceTemplate', $this->getSettingInstanceTemplate());
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the settingDefinitions property value. List of related Setting Definitions
     * @param array<DeviceManagementConfigurationSettingDefinition>|null $value Value to set for the settingDefinitions property.
    */
    public function setSettingDefinitions(?array $value): void {
        $this->getBackingStore()->set('settingDefinitions', $value);
    }

    /**
     * Sets the settingInstanceTemplate property value. Setting Instance Template
     * @param DeviceManagementConfigurationSettingInstanceTemplate|null $value Value to set for the settingInstanceTemplate property.
    */
    public function setSettingInstanceTemplate(?DeviceManagementConfigurationSettingInstanceTemplate $value): void {
        $this->getBackingStore()->set('settingInstanceTemplate', $value);
    }

}

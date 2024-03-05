<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Entity representing a template setting category
*/
class DeviceManagementTemplateSettingCategory extends DeviceManagementSettingCategory implements Parsable 
{
    /**
     * Instantiates a new DeviceManagementTemplateSettingCategory and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'recommendedSettings' => fn(ParseNode $n) => $o->setRecommendedSettings($n->getCollectionOfObjectValues([DeviceManagementSettingInstance::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the recommendedSettings property value. The settings this category contains
     * @return array<DeviceManagementSettingInstance>|null
    */
    public function getRecommendedSettings(): ?array {
        $val = $this->getBackingStore()->get('recommendedSettings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementSettingInstance::class);
            /** @var array<DeviceManagementSettingInstance>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recommendedSettings'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('recommendedSettings', $this->getRecommendedSettings());
    }

    /**
     * Sets the recommendedSettings property value. The settings this category contains
     * @param array<DeviceManagementSettingInstance>|null $value Value to set for the recommendedSettings property.
    */
    public function setRecommendedSettings(?array $value): void {
        $this->getBackingStore()->set('recommendedSettings', $value);
    }

}

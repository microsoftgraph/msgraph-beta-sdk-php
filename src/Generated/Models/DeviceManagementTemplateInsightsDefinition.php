<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * template insights definition
*/
class DeviceManagementTemplateInsightsDefinition extends Entity implements Parsable 
{
    /**
     * Instantiates a new DeviceManagementTemplateInsightsDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementTemplateInsightsDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementTemplateInsightsDefinition {
        return new DeviceManagementTemplateInsightsDefinition();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'settingInsights' => fn(ParseNode $n) => $o->setSettingInsights($n->getCollectionOfObjectValues([DeviceManagementSettingInsightsDefinition::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the settingInsights property value. Setting insights in a template
     * @return array<DeviceManagementSettingInsightsDefinition>|null
    */
    public function getSettingInsights(): ?array {
        $val = $this->getBackingStore()->get('settingInsights');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementSettingInsightsDefinition::class);
            /** @var array<DeviceManagementSettingInsightsDefinition>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingInsights'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('settingInsights', $this->getSettingInsights());
    }

    /**
     * Sets the settingInsights property value. Setting insights in a template
     * @param array<DeviceManagementSettingInsightsDefinition>|null $value Value to set for the settingInsights property.
    */
    public function setSettingInsights(?array $value): void {
        $this->getBackingStore()->set('settingInsights', $value);
    }

}

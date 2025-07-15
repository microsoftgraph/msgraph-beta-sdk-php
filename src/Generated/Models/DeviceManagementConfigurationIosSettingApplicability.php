<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Indicates the applicability for an apple setting.
*/
class DeviceManagementConfigurationIosSettingApplicability extends DeviceManagementConfigurationSettingApplicability implements Parsable 
{
    /**
     * Instantiates a new DeviceManagementConfigurationIosSettingApplicability and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementConfigurationIosSettingApplicability');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationIosSettingApplicability
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationIosSettingApplicability {
        return new DeviceManagementConfigurationIosSettingApplicability();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'versionApplicabilities' => fn(ParseNode $n) => $o->setVersionApplicabilities($n->getCollectionOfObjectValues([DeviceManagementConfigurationAppleSettingVersionApplicability::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the versionApplicabilities property value. Gets a list of Apple applicability objects.
     * @return array<DeviceManagementConfigurationAppleSettingVersionApplicability>|null
    */
    public function getVersionApplicabilities(): ?array {
        $val = $this->getBackingStore()->get('versionApplicabilities');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementConfigurationAppleSettingVersionApplicability::class);
            /** @var array<DeviceManagementConfigurationAppleSettingVersionApplicability>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'versionApplicabilities'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('versionApplicabilities', $this->getVersionApplicabilities());
    }

    /**
     * Sets the versionApplicabilities property value. Gets a list of Apple applicability objects.
     * @param array<DeviceManagementConfigurationAppleSettingVersionApplicability>|null $value Value to set for the versionApplicabilities property.
    */
    public function setVersionApplicabilities(?array $value): void {
        $this->getBackingStore()->set('versionApplicabilities', $value);
    }

}

<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Tenant-level settings singleton for Windows Autopatch updates. Each tenant has at most one resource; a missing resource means all defaults apply.
*/
class TenantSetting extends Entity implements Parsable 
{
    /**
     * Instantiates a new TenantSetting and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TenantSetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TenantSetting {
        return new TenantSetting();
    }

    /**
     * Gets the areDataProcessorServiceForWindowsFeaturesEnabled property value. Whether Data Processor Service for Windows (DPSW) features are enabled for this tenant. The default is false.
     * @return bool|null
    */
    public function getAreDataProcessorServiceForWindowsFeaturesEnabled(): ?bool {
        $val = $this->getBackingStore()->get('areDataProcessorServiceForWindowsFeaturesEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'areDataProcessorServiceForWindowsFeaturesEnabled'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'areDataProcessorServiceForWindowsFeaturesEnabled' => fn(ParseNode $n) => $o->setAreDataProcessorServiceForWindowsFeaturesEnabled($n->getBooleanValue()),
            'mdmAppSettings' => fn(ParseNode $n) => $o->setMdmAppSettings($n->getCollectionOfObjectValues([MdmAppSetting::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the mdmAppSettings property value. The per-MDM-application settings for the current tenant.
     * @return array<MdmAppSetting>|null
    */
    public function getMdmAppSettings(): ?array {
        $val = $this->getBackingStore()->get('mdmAppSettings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MdmAppSetting::class);
            /** @var array<MdmAppSetting>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mdmAppSettings'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('areDataProcessorServiceForWindowsFeaturesEnabled', $this->getAreDataProcessorServiceForWindowsFeaturesEnabled());
        $writer->writeCollectionOfObjectValues('mdmAppSettings', $this->getMdmAppSettings());
    }

    /**
     * Sets the areDataProcessorServiceForWindowsFeaturesEnabled property value. Whether Data Processor Service for Windows (DPSW) features are enabled for this tenant. The default is false.
     * @param bool|null $value Value to set for the areDataProcessorServiceForWindowsFeaturesEnabled property.
    */
    public function setAreDataProcessorServiceForWindowsFeaturesEnabled(?bool $value): void {
        $this->getBackingStore()->set('areDataProcessorServiceForWindowsFeaturesEnabled', $value);
    }

    /**
     * Sets the mdmAppSettings property value. The per-MDM-application settings for the current tenant.
     * @param array<MdmAppSetting>|null $value Value to set for the mdmAppSettings property.
    */
    public function setMdmAppSettings(?array $value): void {
        $this->getBackingStore()->set('mdmAppSettings', $value);
    }

}

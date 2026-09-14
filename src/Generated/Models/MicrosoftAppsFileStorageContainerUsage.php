<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class MicrosoftAppsFileStorageContainerUsage extends Entity implements Parsable 
{
    /**
     * Instantiates a new MicrosoftAppsFileStorageContainerUsage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MicrosoftAppsFileStorageContainerUsage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MicrosoftAppsFileStorageContainerUsage {
        return new MicrosoftAppsFileStorageContainerUsage();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'totalActiveContainerCount' => fn(ParseNode $n) => $o->setTotalActiveContainerCount($n->getIntegerValue()),
            'totalActiveStorageUsedInBytes' => fn(ParseNode $n) => $o->setTotalActiveStorageUsedInBytes($n->getIntegerValue()),
            'usageByDataLocation' => fn(ParseNode $n) => $o->setUsageByDataLocation($n->getCollectionOfObjectValues([MicrosoftAppsFileStorageContainerGeoUsage::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the totalActiveContainerCount property value. The total number of active file storage containers across the tenant.
     * @return int|null
    */
    public function getTotalActiveContainerCount(): ?int {
        $val = $this->getBackingStore()->get('totalActiveContainerCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalActiveContainerCount'");
    }

    /**
     * Gets the totalActiveStorageUsedInBytes property value. The total storage used in bytes across all active file storage containers in the tenant.
     * @return int|null
    */
    public function getTotalActiveStorageUsedInBytes(): ?int {
        $val = $this->getBackingStore()->get('totalActiveStorageUsedInBytes');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalActiveStorageUsedInBytes'");
    }

    /**
     * Gets the usageByDataLocation property value. Storage usage data broken down by geographic location. Expandable using $expand=usageByDataLocation.
     * @return array<MicrosoftAppsFileStorageContainerGeoUsage>|null
    */
    public function getUsageByDataLocation(): ?array {
        $val = $this->getBackingStore()->get('usageByDataLocation');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MicrosoftAppsFileStorageContainerGeoUsage::class);
            /** @var array<MicrosoftAppsFileStorageContainerGeoUsage>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'usageByDataLocation'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('usageByDataLocation', $this->getUsageByDataLocation());
    }

    /**
     * Sets the totalActiveContainerCount property value. The total number of active file storage containers across the tenant.
     * @param int|null $value Value to set for the totalActiveContainerCount property.
    */
    public function setTotalActiveContainerCount(?int $value): void {
        $this->getBackingStore()->set('totalActiveContainerCount', $value);
    }

    /**
     * Sets the totalActiveStorageUsedInBytes property value. The total storage used in bytes across all active file storage containers in the tenant.
     * @param int|null $value Value to set for the totalActiveStorageUsedInBytes property.
    */
    public function setTotalActiveStorageUsedInBytes(?int $value): void {
        $this->getBackingStore()->set('totalActiveStorageUsedInBytes', $value);
    }

    /**
     * Sets the usageByDataLocation property value. Storage usage data broken down by geographic location. Expandable using $expand=usageByDataLocation.
     * @param array<MicrosoftAppsFileStorageContainerGeoUsage>|null $value Value to set for the usageByDataLocation property.
    */
    public function setUsageByDataLocation(?array $value): void {
        $this->getBackingStore()->set('usageByDataLocation', $value);
    }

}

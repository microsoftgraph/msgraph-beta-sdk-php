<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ApplicableCatalog extends Entity implements Parsable 
{
    /**
     * Instantiates a new ApplicableCatalog and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApplicableCatalog
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApplicableCatalog {
        return new ApplicableCatalog();
    }

    /**
     * Gets the catalogEntry property value. The associated Windows update catalog entry.
     * @return CatalogEntry|null
    */
    public function getCatalogEntry(): ?CatalogEntry {
        $val = $this->getBackingStore()->get('catalogEntry');
        if (is_null($val) || $val instanceof CatalogEntry) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'catalogEntry'");
    }

    /**
     * Gets the deviceCount property value. The number of devices for which the catalog entry is applicable. Read-only.
     * @return int|null
    */
    public function getDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('deviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceCount'");
    }

    /**
     * Gets the devices property value. The devices for which the catalog entry is applicable.
     * @return array<ApplicableDevice>|null
    */
    public function getDevices(): ?array {
        $val = $this->getBackingStore()->get('devices');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ApplicableDevice::class);
            /** @var array<ApplicableDevice>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'devices'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'catalogEntry' => fn(ParseNode $n) => $o->setCatalogEntry($n->getObjectValue([CatalogEntry::class, 'createFromDiscriminatorValue'])),
            'deviceCount' => fn(ParseNode $n) => $o->setDeviceCount($n->getIntegerValue()),
            'devices' => fn(ParseNode $n) => $o->setDevices($n->getCollectionOfObjectValues([ApplicableDevice::class, 'createFromDiscriminatorValue'])),
            'hasRecommendedDevice' => fn(ParseNode $n) => $o->setHasRecommendedDevice($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the hasRecommendedDevice property value. Indicates whether the catalog entry is recommended for at least one applicable device. Read-only.
     * @return bool|null
    */
    public function getHasRecommendedDevice(): ?bool {
        $val = $this->getBackingStore()->get('hasRecommendedDevice');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasRecommendedDevice'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('catalogEntry', $this->getCatalogEntry());
        $writer->writeCollectionOfObjectValues('devices', $this->getDevices());
    }

    /**
     * Sets the catalogEntry property value. The associated Windows update catalog entry.
     * @param CatalogEntry|null $value Value to set for the catalogEntry property.
    */
    public function setCatalogEntry(?CatalogEntry $value): void {
        $this->getBackingStore()->set('catalogEntry', $value);
    }

    /**
     * Sets the deviceCount property value. The number of devices for which the catalog entry is applicable. Read-only.
     * @param int|null $value Value to set for the deviceCount property.
    */
    public function setDeviceCount(?int $value): void {
        $this->getBackingStore()->set('deviceCount', $value);
    }

    /**
     * Sets the devices property value. The devices for which the catalog entry is applicable.
     * @param array<ApplicableDevice>|null $value Value to set for the devices property.
    */
    public function setDevices(?array $value): void {
        $this->getBackingStore()->set('devices', $value);
    }

    /**
     * Sets the hasRecommendedDevice property value. Indicates whether the catalog entry is recommended for at least one applicable device. Read-only.
     * @param bool|null $value Value to set for the hasRecommendedDevice property.
    */
    public function setHasRecommendedDevice(?bool $value): void {
        $this->getBackingStore()->set('hasRecommendedDevice', $value);
    }

}

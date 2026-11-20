<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ApplicableCatalogSummary extends Entity implements Parsable 
{
    /**
     * Instantiates a new ApplicableCatalogSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApplicableCatalogSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApplicableCatalogSummary {
        return new ApplicableCatalogSummary();
    }

    /**
     * Gets the aggregatedDeviceCount property value. The number of devices included in the summary. Read-only.
     * @return int|null
    */
    public function getAggregatedDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('aggregatedDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'aggregatedDeviceCount'");
    }

    /**
     * Gets the aggregatedDevices property value. The devices included in the applicability summary.
     * @return array<ApplicableDevice>|null
    */
    public function getAggregatedDevices(): ?array {
        $val = $this->getBackingStore()->get('aggregatedDevices');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ApplicableDevice::class);
            /** @var array<ApplicableDevice>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'aggregatedDevices'");
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'aggregatedDeviceCount' => fn(ParseNode $n) => $o->setAggregatedDeviceCount($n->getIntegerValue()),
            'aggregatedDevices' => fn(ParseNode $n) => $o->setAggregatedDevices($n->getCollectionOfObjectValues([ApplicableDevice::class, 'createFromDiscriminatorValue'])),
            'catalogEntry' => fn(ParseNode $n) => $o->setCatalogEntry($n->getObjectValue([CatalogEntry::class, 'createFromDiscriminatorValue'])),
            'hasRecommendedDevice' => fn(ParseNode $n) => $o->setHasRecommendedDevice($n->getBooleanValue()),
            'policies' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setPolicies($val);
            },
        ]);
    }

    /**
     * Gets the hasRecommendedDevice property value. Indicates whether the catalog entry is recommended for at least one device in the summary. Read-only.
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
     * Gets the policies property value. The identifiers of Windows Autopatch policies for which the catalog entry is applicable. Read-only.
     * @return array<string>|null
    */
    public function getPolicies(): ?array {
        $val = $this->getBackingStore()->get('policies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policies'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('aggregatedDevices', $this->getAggregatedDevices());
        $writer->writeObjectValue('catalogEntry', $this->getCatalogEntry());
    }

    /**
     * Sets the aggregatedDeviceCount property value. The number of devices included in the summary. Read-only.
     * @param int|null $value Value to set for the aggregatedDeviceCount property.
    */
    public function setAggregatedDeviceCount(?int $value): void {
        $this->getBackingStore()->set('aggregatedDeviceCount', $value);
    }

    /**
     * Sets the aggregatedDevices property value. The devices included in the applicability summary.
     * @param array<ApplicableDevice>|null $value Value to set for the aggregatedDevices property.
    */
    public function setAggregatedDevices(?array $value): void {
        $this->getBackingStore()->set('aggregatedDevices', $value);
    }

    /**
     * Sets the catalogEntry property value. The associated Windows update catalog entry.
     * @param CatalogEntry|null $value Value to set for the catalogEntry property.
    */
    public function setCatalogEntry(?CatalogEntry $value): void {
        $this->getBackingStore()->set('catalogEntry', $value);
    }

    /**
     * Sets the hasRecommendedDevice property value. Indicates whether the catalog entry is recommended for at least one device in the summary. Read-only.
     * @param bool|null $value Value to set for the hasRecommendedDevice property.
    */
    public function setHasRecommendedDevice(?bool $value): void {
        $this->getBackingStore()->set('hasRecommendedDevice', $value);
    }

    /**
     * Sets the policies property value. The identifiers of Windows Autopatch policies for which the catalog entry is applicable. Read-only.
     * @param array<string>|null $value Value to set for the policies property.
    */
    public function setPolicies(?array $value): void {
        $this->getBackingStore()->set('policies', $value);
    }

}

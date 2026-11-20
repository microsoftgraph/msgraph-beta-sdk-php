<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * The Copilot Cost Management usage reporting root.
*/
class CostManagementUsageReportRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new CostManagementUsageReportRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CostManagementUsageReportRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CostManagementUsageReportRoot {
        return new CostManagementUsageReportRoot();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'fundingUsageRecords' => fn(ParseNode $n) => $o->setFundingUsageRecords($n->getCollectionOfObjectValues([CostManagementFundingUsageRecord::class, 'createFromDiscriminatorValue'])),
            'groupUsageRecords' => fn(ParseNode $n) => $o->setGroupUsageRecords($n->getCollectionOfObjectValues([CostManagementGroupUsageRecord::class, 'createFromDiscriminatorValue'])),
            'serviceUsageRecords' => fn(ParseNode $n) => $o->setServiceUsageRecords($n->getCollectionOfObjectValues([CostManagementServiceUsageRecord::class, 'createFromDiscriminatorValue'])),
            'userUsageDetails' => fn(ParseNode $n) => $o->setUserUsageDetails($n->getCollectionOfObjectValues([CostManagementUserUsageDetail::class, 'createFromDiscriminatorValue'])),
            'userUsageRecords' => fn(ParseNode $n) => $o->setUserUsageRecords($n->getCollectionOfObjectValues([CostManagementUserUsageRecord::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the fundingUsageRecords property value. Reported consumption per funding class for a calendar month.
     * @return array<CostManagementFundingUsageRecord>|null
    */
    public function getFundingUsageRecords(): ?array {
        $val = $this->getBackingStore()->get('fundingUsageRecords');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CostManagementFundingUsageRecord::class);
            /** @var array<CostManagementFundingUsageRecord>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fundingUsageRecords'");
    }

    /**
     * Gets the groupUsageRecords property value. Reported consumption per security group for one completed UTC day.
     * @return array<CostManagementGroupUsageRecord>|null
    */
    public function getGroupUsageRecords(): ?array {
        $val = $this->getBackingStore()->get('groupUsageRecords');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CostManagementGroupUsageRecord::class);
            /** @var array<CostManagementGroupUsageRecord>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupUsageRecords'");
    }

    /**
     * Gets the serviceUsageRecords property value. Reported consumption per governed service for one completed UTC day.
     * @return array<CostManagementServiceUsageRecord>|null
    */
    public function getServiceUsageRecords(): ?array {
        $val = $this->getBackingStore()->get('serviceUsageRecords');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CostManagementServiceUsageRecord::class);
            /** @var array<CostManagementServiceUsageRecord>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serviceUsageRecords'");
    }

    /**
     * Gets the userUsageDetails property value. Raw per-user usage detail, read one user at a time.
     * @return array<CostManagementUserUsageDetail>|null
    */
    public function getUserUsageDetails(): ?array {
        $val = $this->getBackingStore()->get('userUsageDetails');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CostManagementUserUsageDetail::class);
            /** @var array<CostManagementUserUsageDetail>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userUsageDetails'");
    }

    /**
     * Gets the userUsageRecords property value. Reported consumption per user for one completed UTC day, ranked by consumption.
     * @return array<CostManagementUserUsageRecord>|null
    */
    public function getUserUsageRecords(): ?array {
        $val = $this->getBackingStore()->get('userUsageRecords');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CostManagementUserUsageRecord::class);
            /** @var array<CostManagementUserUsageRecord>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userUsageRecords'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('fundingUsageRecords', $this->getFundingUsageRecords());
        $writer->writeCollectionOfObjectValues('groupUsageRecords', $this->getGroupUsageRecords());
        $writer->writeCollectionOfObjectValues('serviceUsageRecords', $this->getServiceUsageRecords());
        $writer->writeCollectionOfObjectValues('userUsageDetails', $this->getUserUsageDetails());
        $writer->writeCollectionOfObjectValues('userUsageRecords', $this->getUserUsageRecords());
    }

    /**
     * Sets the fundingUsageRecords property value. Reported consumption per funding class for a calendar month.
     * @param array<CostManagementFundingUsageRecord>|null $value Value to set for the fundingUsageRecords property.
    */
    public function setFundingUsageRecords(?array $value): void {
        $this->getBackingStore()->set('fundingUsageRecords', $value);
    }

    /**
     * Sets the groupUsageRecords property value. Reported consumption per security group for one completed UTC day.
     * @param array<CostManagementGroupUsageRecord>|null $value Value to set for the groupUsageRecords property.
    */
    public function setGroupUsageRecords(?array $value): void {
        $this->getBackingStore()->set('groupUsageRecords', $value);
    }

    /**
     * Sets the serviceUsageRecords property value. Reported consumption per governed service for one completed UTC day.
     * @param array<CostManagementServiceUsageRecord>|null $value Value to set for the serviceUsageRecords property.
    */
    public function setServiceUsageRecords(?array $value): void {
        $this->getBackingStore()->set('serviceUsageRecords', $value);
    }

    /**
     * Sets the userUsageDetails property value. Raw per-user usage detail, read one user at a time.
     * @param array<CostManagementUserUsageDetail>|null $value Value to set for the userUsageDetails property.
    */
    public function setUserUsageDetails(?array $value): void {
        $this->getBackingStore()->set('userUsageDetails', $value);
    }

    /**
     * Sets the userUsageRecords property value. Reported consumption per user for one completed UTC day, ranked by consumption.
     * @param array<CostManagementUserUsageRecord>|null $value Value to set for the userUsageRecords property.
    */
    public function setUserUsageRecords(?array $value): void {
        $this->getBackingStore()->set('userUsageRecords', $value);
    }

}

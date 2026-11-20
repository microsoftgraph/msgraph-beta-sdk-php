<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * One funding class's share of reported consumption for a calendar month.
*/
class CostManagementFundingUsageRecord extends Entity implements Parsable 
{
    /**
     * Instantiates a new CostManagementFundingUsageRecord and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CostManagementFundingUsageRecord
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CostManagementFundingUsageRecord {
        return new CostManagementFundingUsageRecord();
    }

    /**
     * Gets the consumedQuantity property value. Consumption attributed to this funding class during the requested month, includingunbilled consumption where applicable. Read-only.
     * @return float|null
    */
    public function getConsumedQuantity(): ?float {
        $val = $this->getBackingStore()->get('consumedQuantity');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'consumedQuantity'");
    }

    /**
     * Gets the dataStatus property value. Freshness of the source data behind a Phase 2 usage report result that can report it.
     * @return CostManagementUsageDataStatus|null
    */
    public function getDataStatus(): ?CostManagementUsageDataStatus {
        $val = $this->getBackingStore()->get('dataStatus');
        if (is_null($val) || $val instanceof CostManagementUsageDataStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dataStatus'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'consumedQuantity' => fn(ParseNode $n) => $o->setConsumedQuantity($n->getFloatValue()),
            'dataStatus' => fn(ParseNode $n) => $o->setDataStatus($n->getObjectValue([CostManagementUsageDataStatus::class, 'createFromDiscriminatorValue'])),
            'fundingClass' => fn(ParseNode $n) => $o->setFundingClass($n->getEnumValue(CostManagementFundingClass::class)),
            'unit' => fn(ParseNode $n) => $o->setUnit($n->getEnumValue(CostManagementUnit::class)),
        ]);
    }

    /**
     * Gets the fundingClass property value. The funding classification of reported consumption, including unbilled consumption.
     * @return CostManagementFundingClass|null
    */
    public function getFundingClass(): ?CostManagementFundingClass {
        $val = $this->getBackingStore()->get('fundingClass');
        if (is_null($val) || $val instanceof CostManagementFundingClass) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fundingClass'");
    }

    /**
     * Gets the unit property value. Unit in which consumption quantities are expressed. Values are consumption units, not currency.
     * @return CostManagementUnit|null
    */
    public function getUnit(): ?CostManagementUnit {
        $val = $this->getBackingStore()->get('unit');
        if (is_null($val) || $val instanceof CostManagementUnit) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'unit'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('dataStatus', $this->getDataStatus());
        $writer->writeEnumValue('fundingClass', $this->getFundingClass());
        $writer->writeEnumValue('unit', $this->getUnit());
    }

    /**
     * Sets the consumedQuantity property value. Consumption attributed to this funding class during the requested month, includingunbilled consumption where applicable. Read-only.
     * @param float|null $value Value to set for the consumedQuantity property.
    */
    public function setConsumedQuantity(?float $value): void {
        $this->getBackingStore()->set('consumedQuantity', $value);
    }

    /**
     * Sets the dataStatus property value. Freshness of the source data behind a Phase 2 usage report result that can report it.
     * @param CostManagementUsageDataStatus|null $value Value to set for the dataStatus property.
    */
    public function setDataStatus(?CostManagementUsageDataStatus $value): void {
        $this->getBackingStore()->set('dataStatus', $value);
    }

    /**
     * Sets the fundingClass property value. The funding classification of reported consumption, including unbilled consumption.
     * @param CostManagementFundingClass|null $value Value to set for the fundingClass property.
    */
    public function setFundingClass(?CostManagementFundingClass $value): void {
        $this->getBackingStore()->set('fundingClass', $value);
    }

    /**
     * Sets the unit property value. Unit in which consumption quantities are expressed. Values are consumption units, not currency.
     * @param CostManagementUnit|null $value Value to set for the unit property.
    */
    public function setUnit(?CostManagementUnit $value): void {
        $this->getBackingStore()->set('unit', $value);
    }

}

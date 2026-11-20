<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * One governed service's share of a user's raw usage detail.
*/
class CostManagementUserUsageServiceDetail extends Entity implements Parsable 
{
    /**
     * Instantiates a new CostManagementUserUsageServiceDetail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CostManagementUserUsageServiceDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CostManagementUserUsageServiceDetail {
        return new CostManagementUserUsageServiceDetail();
    }

    /**
     * Gets the consumedQuantity property value. Raw, billable-flagged consumption attributed to this service within the containing user'sdetail window. Independently rounded; child rows are not guaranteed to sum exactly to thecontaining detail's consumedQuantity. Read-only.
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'consumedQuantity' => fn(ParseNode $n) => $o->setConsumedQuantity($n->getFloatValue()),
            'unit' => fn(ParseNode $n) => $o->setUnit($n->getEnumValue(CostManagementUnit::class)),
        ]);
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
        $writer->writeEnumValue('unit', $this->getUnit());
    }

    /**
     * Sets the consumedQuantity property value. Raw, billable-flagged consumption attributed to this service within the containing user'sdetail window. Independently rounded; child rows are not guaranteed to sum exactly to thecontaining detail's consumedQuantity. Read-only.
     * @param float|null $value Value to set for the consumedQuantity property.
    */
    public function setConsumedQuantity(?float $value): void {
        $this->getBackingStore()->set('consumedQuantity', $value);
    }

    /**
     * Sets the unit property value. Unit in which consumption quantities are expressed. Values are consumption units, not currency.
     * @param CostManagementUnit|null $value Value to set for the unit property.
    */
    public function setUnit(?CostManagementUnit $value): void {
        $this->getBackingStore()->set('unit', $value);
    }

}

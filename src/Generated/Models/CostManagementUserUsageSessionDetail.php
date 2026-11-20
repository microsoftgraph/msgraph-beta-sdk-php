<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A native-source session grouping within a user's raw usage detail. Activity without a sessionidentifier may be omitted, even when it contributes to the parent total.
*/
class CostManagementUserUsageSessionDetail extends Entity implements Parsable 
{
    /**
     * Instantiates a new CostManagementUserUsageSessionDetail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CostManagementUserUsageSessionDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CostManagementUserUsageSessionDetail {
        return new CostManagementUserUsageSessionDetail();
    }

    /**
     * Gets the consumedQuantity property value. Raw, billable-flagged consumption attributed to this source-returned session grouping withinthe containing user's detail window. Session rows need not sum to the parent's consumedQuantity.Read-only.
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
            'firstActivityDateTime' => fn(ParseNode $n) => $o->setFirstActivityDateTime($n->getDateTimeValue()),
            'lastActivityDateTime' => fn(ParseNode $n) => $o->setLastActivityDateTime($n->getDateTimeValue()),
            'sourceSessionId' => fn(ParseNode $n) => $o->setSourceSessionId($n->getStringValue()),
            'unit' => fn(ParseNode $n) => $o->setUnit($n->getEnumValue(CostManagementUnit::class)),
        ]);
    }

    /**
     * Gets the firstActivityDateTime property value. Time the earliest activity in this session was recorded, or null when the source did notreport one. Read-only.
     * @return DateTime|null
    */
    public function getFirstActivityDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('firstActivityDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'firstActivityDateTime'");
    }

    /**
     * Gets the lastActivityDateTime property value. Time the latest activity in this session was recorded, or null when the source did notreport one. Read-only.
     * @return DateTime|null
    */
    public function getLastActivityDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastActivityDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastActivityDateTime'");
    }

    /**
     * Gets the sourceSessionId property value. The native session identifier on a row returned by the source, preserved verbatim, includingnull if the source returns it. Distinct from this row's opaque id. A nullable value does notguarantee a returned group for activity without a session identifier; such activity may beabsent from the session breakdown while contributing to the parent total. Read-only.
     * @return string|null
    */
    public function getSourceSessionId(): ?string {
        $val = $this->getBackingStore()->get('sourceSessionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourceSessionId'");
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
     * Sets the consumedQuantity property value. Raw, billable-flagged consumption attributed to this source-returned session grouping withinthe containing user's detail window. Session rows need not sum to the parent's consumedQuantity.Read-only.
     * @param float|null $value Value to set for the consumedQuantity property.
    */
    public function setConsumedQuantity(?float $value): void {
        $this->getBackingStore()->set('consumedQuantity', $value);
    }

    /**
     * Sets the firstActivityDateTime property value. Time the earliest activity in this session was recorded, or null when the source did notreport one. Read-only.
     * @param DateTime|null $value Value to set for the firstActivityDateTime property.
    */
    public function setFirstActivityDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('firstActivityDateTime', $value);
    }

    /**
     * Sets the lastActivityDateTime property value. Time the latest activity in this session was recorded, or null when the source did notreport one. Read-only.
     * @param DateTime|null $value Value to set for the lastActivityDateTime property.
    */
    public function setLastActivityDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastActivityDateTime', $value);
    }

    /**
     * Sets the sourceSessionId property value. The native session identifier on a row returned by the source, preserved verbatim, includingnull if the source returns it. Distinct from this row's opaque id. A nullable value does notguarantee a returned group for activity without a session identifier; such activity may beabsent from the session breakdown while contributing to the parent total. Read-only.
     * @param string|null $value Value to set for the sourceSessionId property.
    */
    public function setSourceSessionId(?string $value): void {
        $this->getBackingStore()->set('sourceSessionId', $value);
    }

    /**
     * Sets the unit property value. Unit in which consumption quantities are expressed. Values are consumption units, not currency.
     * @param CostManagementUnit|null $value Value to set for the unit property.
    */
    public function setUnit(?CostManagementUnit $value): void {
        $this->getBackingStore()->set('unit', $value);
    }

}

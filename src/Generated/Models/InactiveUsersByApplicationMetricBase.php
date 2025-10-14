<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class InactiveUsersByApplicationMetricBase extends Entity implements Parsable 
{
    /**
     * Instantiates a new InactiveUsersByApplicationMetricBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InactiveUsersByApplicationMetricBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InactiveUsersByApplicationMetricBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.dailyInactiveUsersByApplicationMetric': return new DailyInactiveUsersByApplicationMetric();
                case '#microsoft.graph.monthlyInactiveUsersByApplicationMetric': return new MonthlyInactiveUsersByApplicationMetric();
            }
        }
        return new InactiveUsersByApplicationMetricBase();
    }

    /**
     * Gets the appId property value. The appId property
     * @return string|null
    */
    public function getAppId(): ?string {
        $val = $this->getBackingStore()->get('appId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appId'");
    }

    /**
     * Gets the factDate property value. The factDate property
     * @return Date|null
    */
    public function getFactDate(): ?Date {
        $val = $this->getBackingStore()->get('factDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'factDate'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appId' => fn(ParseNode $n) => $o->setAppId($n->getStringValue()),
            'factDate' => fn(ParseNode $n) => $o->setFactDate($n->getDateValue()),
            'inactive30DayCount' => fn(ParseNode $n) => $o->setInactive30DayCount($n->getIntegerValue()),
            'inactive60DayCount' => fn(ParseNode $n) => $o->setInactive60DayCount($n->getIntegerValue()),
            'inactive90DayCount' => fn(ParseNode $n) => $o->setInactive90DayCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the inactive30DayCount property value. The inactive30DayCount property
     * @return int|null
    */
    public function getInactive30DayCount(): ?int {
        $val = $this->getBackingStore()->get('inactive30DayCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inactive30DayCount'");
    }

    /**
     * Gets the inactive60DayCount property value. The inactive60DayCount property
     * @return int|null
    */
    public function getInactive60DayCount(): ?int {
        $val = $this->getBackingStore()->get('inactive60DayCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inactive60DayCount'");
    }

    /**
     * Gets the inactive90DayCount property value. The inactive90DayCount property
     * @return int|null
    */
    public function getInactive90DayCount(): ?int {
        $val = $this->getBackingStore()->get('inactive90DayCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inactive90DayCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appId', $this->getAppId());
        $writer->writeDateValue('factDate', $this->getFactDate());
        $writer->writeIntegerValue('inactive30DayCount', $this->getInactive30DayCount());
        $writer->writeIntegerValue('inactive60DayCount', $this->getInactive60DayCount());
        $writer->writeIntegerValue('inactive90DayCount', $this->getInactive90DayCount());
    }

    /**
     * Sets the appId property value. The appId property
     * @param string|null $value Value to set for the appId property.
    */
    public function setAppId(?string $value): void {
        $this->getBackingStore()->set('appId', $value);
    }

    /**
     * Sets the factDate property value. The factDate property
     * @param Date|null $value Value to set for the factDate property.
    */
    public function setFactDate(?Date $value): void {
        $this->getBackingStore()->set('factDate', $value);
    }

    /**
     * Sets the inactive30DayCount property value. The inactive30DayCount property
     * @param int|null $value Value to set for the inactive30DayCount property.
    */
    public function setInactive30DayCount(?int $value): void {
        $this->getBackingStore()->set('inactive30DayCount', $value);
    }

    /**
     * Sets the inactive60DayCount property value. The inactive60DayCount property
     * @param int|null $value Value to set for the inactive60DayCount property.
    */
    public function setInactive60DayCount(?int $value): void {
        $this->getBackingStore()->set('inactive60DayCount', $value);
    }

    /**
     * Sets the inactive90DayCount property value. The inactive90DayCount property
     * @param int|null $value Value to set for the inactive90DayCount property.
    */
    public function setInactive90DayCount(?int $value): void {
        $this->getBackingStore()->set('inactive90DayCount', $value);
    }

}

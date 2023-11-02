<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MonthlyInactiveUsersByApplicationMetric extends InactiveUsersByApplicationMetricBase implements Parsable 
{
    /**
     * Instantiates a new monthlyInactiveUsersByApplicationMetric and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MonthlyInactiveUsersByApplicationMetric
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MonthlyInactiveUsersByApplicationMetric {
        return new MonthlyInactiveUsersByApplicationMetric();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'inactiveCalendarMonthCount' => fn(ParseNode $n) => $o->setInactiveCalendarMonthCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the inactiveCalendarMonthCount property value. The inactiveCalendarMonthCount property
     * @return int|null
    */
    public function getInactiveCalendarMonthCount(): ?int {
        $val = $this->getBackingStore()->get('inactiveCalendarMonthCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inactiveCalendarMonthCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('inactiveCalendarMonthCount', $this->getInactiveCalendarMonthCount());
    }

    /**
     * Sets the inactiveCalendarMonthCount property value. The inactiveCalendarMonthCount property
     * @param int|null $value Value to set for the inactiveCalendarMonthCount property.
    */
    public function setInactiveCalendarMonthCount(?int $value): void {
        $this->getBackingStore()->set('inactiveCalendarMonthCount', $value);
    }

}

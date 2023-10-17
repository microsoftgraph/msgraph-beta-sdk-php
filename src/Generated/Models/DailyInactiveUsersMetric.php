<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DailyInactiveUsersMetric extends InactiveUsersMetricBase implements Parsable 
{
    /**
     * Instantiates a new dailyInactiveUsersMetric and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DailyInactiveUsersMetric
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DailyInactiveUsersMetric {
        return new DailyInactiveUsersMetric();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'inactive1DayCount' => fn(ParseNode $n) => $o->setInactive1DayCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the inactive1DayCount property value. The inactive1DayCount property
     * @return int|null
    */
    public function getInactive1DayCount(): ?int {
        $val = $this->getBackingStore()->get('inactive1DayCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inactive1DayCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('inactive1DayCount', $this->getInactive1DayCount());
    }

    /**
     * Sets the inactive1DayCount property value. The inactive1DayCount property
     * @param int|null $value Value to set for the inactive1DayCount property.
    */
    public function setInactive1DayCount(?int $value): void {
        $this->getBackingStore()->set('inactive1DayCount', $value);
    }

}

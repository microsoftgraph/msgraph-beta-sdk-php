<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserInsightsRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new UserInsightsRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserInsightsRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserInsightsRoot {
        return new UserInsightsRoot();
    }

    /**
     * Gets the daily property value. Summaries of daily user activities on apps registered in your tenant that is configured for Microsoft Entra External ID for customers.
     * @return DailyUserInsightMetricsRoot|null
    */
    public function getDaily(): ?DailyUserInsightMetricsRoot {
        $val = $this->getBackingStore()->get('daily');
        if (is_null($val) || $val instanceof DailyUserInsightMetricsRoot) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'daily'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'daily' => fn(ParseNode $n) => $o->setDaily($n->getObjectValue([DailyUserInsightMetricsRoot::class, 'createFromDiscriminatorValue'])),
            'monthly' => fn(ParseNode $n) => $o->setMonthly($n->getObjectValue([MonthlyUserInsightMetricsRoot::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the monthly property value. Summaries of monthly user activities on apps registered in your tenant that is configured for Microsoft Entra External ID for customers.
     * @return MonthlyUserInsightMetricsRoot|null
    */
    public function getMonthly(): ?MonthlyUserInsightMetricsRoot {
        $val = $this->getBackingStore()->get('monthly');
        if (is_null($val) || $val instanceof MonthlyUserInsightMetricsRoot) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'monthly'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('daily', $this->getDaily());
        $writer->writeObjectValue('monthly', $this->getMonthly());
    }

    /**
     * Sets the daily property value. Summaries of daily user activities on apps registered in your tenant that is configured for Microsoft Entra External ID for customers.
     * @param DailyUserInsightMetricsRoot|null $value Value to set for the daily property.
    */
    public function setDaily(?DailyUserInsightMetricsRoot $value): void {
        $this->getBackingStore()->set('daily', $value);
    }

    /**
     * Sets the monthly property value. Summaries of monthly user activities on apps registered in your tenant that is configured for Microsoft Entra External ID for customers.
     * @param MonthlyUserInsightMetricsRoot|null $value Value to set for the monthly property.
    */
    public function setMonthly(?MonthlyUserInsightMetricsRoot $value): void {
        $this->getBackingStore()->set('monthly', $value);
    }

}

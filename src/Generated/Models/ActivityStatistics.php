<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class ActivityStatistics extends Entity implements Parsable 
{
    /**
     * Instantiates a new ActivityStatistics and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ActivityStatistics
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ActivityStatistics {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.callActivityStatistics': return new CallActivityStatistics();
                case '#microsoft.graph.chatActivityStatistics': return new ChatActivityStatistics();
                case '#microsoft.graph.emailActivityStatistics': return new EmailActivityStatistics();
                case '#microsoft.graph.focusActivityStatistics': return new FocusActivityStatistics();
                case '#microsoft.graph.meetingActivityStatistics': return new MeetingActivityStatistics();
            }
        }
        return new ActivityStatistics();
    }

    /**
     * Gets the activity property value. The type of activity for which statistics are returned. The possible values are: call, chat, email, focus, and meeting.
     * @return AnalyticsActivityType|null
    */
    public function getActivity(): ?AnalyticsActivityType {
        $val = $this->getBackingStore()->get('activity');
        if (is_null($val) || $val instanceof AnalyticsActivityType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activity'");
    }

    /**
     * Gets the duration property value. Total hours spent on the activity. The value is represented in ISO 8601 format for durations.
     * @return DateInterval|null
    */
    public function getDuration(): ?DateInterval {
        $val = $this->getBackingStore()->get('duration');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'duration'");
    }

    /**
     * Gets the endDate property value. Date when the activity ended, expressed in ISO 8601 format for calendar dates. For example, the property value could be '2019-07-03' that follows the YYYY-MM-DD format.
     * @return Date|null
    */
    public function getEndDate(): ?Date {
        $val = $this->getBackingStore()->get('endDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endDate'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activity' => fn(ParseNode $n) => $o->setActivity($n->getEnumValue(AnalyticsActivityType::class)),
            'duration' => fn(ParseNode $n) => $o->setDuration($n->getDateIntervalValue()),
            'endDate' => fn(ParseNode $n) => $o->setEndDate($n->getDateValue()),
            'startDate' => fn(ParseNode $n) => $o->setStartDate($n->getDateValue()),
            'timeZoneUsed' => fn(ParseNode $n) => $o->setTimeZoneUsed($n->getStringValue()),
        ]);
    }

    /**
     * Gets the startDate property value. Date when the activity started, expressed in ISO 8601 format for calendar dates. For example, the property value could be '2019-07-04' that follows the YYYY-MM-DD format.
     * @return Date|null
    */
    public function getStartDate(): ?Date {
        $val = $this->getBackingStore()->get('startDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startDate'");
    }

    /**
     * Gets the timeZoneUsed property value. The time zone that the user sets in Microsoft Outlook is used for the computation. For example, the property value could be 'Pacific Standard Time.'
     * @return string|null
    */
    public function getTimeZoneUsed(): ?string {
        $val = $this->getBackingStore()->get('timeZoneUsed');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'timeZoneUsed'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('activity', $this->getActivity());
        $writer->writeDateIntervalValue('duration', $this->getDuration());
        $writer->writeDateValue('endDate', $this->getEndDate());
        $writer->writeDateValue('startDate', $this->getStartDate());
        $writer->writeStringValue('timeZoneUsed', $this->getTimeZoneUsed());
    }

    /**
     * Sets the activity property value. The type of activity for which statistics are returned. The possible values are: call, chat, email, focus, and meeting.
     * @param AnalyticsActivityType|null $value Value to set for the activity property.
    */
    public function setActivity(?AnalyticsActivityType $value): void {
        $this->getBackingStore()->set('activity', $value);
    }

    /**
     * Sets the duration property value. Total hours spent on the activity. The value is represented in ISO 8601 format for durations.
     * @param DateInterval|null $value Value to set for the duration property.
    */
    public function setDuration(?DateInterval $value): void {
        $this->getBackingStore()->set('duration', $value);
    }

    /**
     * Sets the endDate property value. Date when the activity ended, expressed in ISO 8601 format for calendar dates. For example, the property value could be '2019-07-03' that follows the YYYY-MM-DD format.
     * @param Date|null $value Value to set for the endDate property.
    */
    public function setEndDate(?Date $value): void {
        $this->getBackingStore()->set('endDate', $value);
    }

    /**
     * Sets the startDate property value. Date when the activity started, expressed in ISO 8601 format for calendar dates. For example, the property value could be '2019-07-04' that follows the YYYY-MM-DD format.
     * @param Date|null $value Value to set for the startDate property.
    */
    public function setStartDate(?Date $value): void {
        $this->getBackingStore()->set('startDate', $value);
    }

    /**
     * Sets the timeZoneUsed property value. The time zone that the user sets in Microsoft Outlook is used for the computation. For example, the property value could be 'Pacific Standard Time.'
     * @param string|null $value Value to set for the timeZoneUsed property.
    */
    public function setTimeZoneUsed(?string $value): void {
        $this->getBackingStore()->set('timeZoneUsed', $value);
    }

}

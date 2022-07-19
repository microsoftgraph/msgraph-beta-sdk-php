<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class ActivityStatistics extends Entity implements Parsable 
{
    /**
     * @var AnalyticsActivityType|null $activity The type of activity for which statistics are returned. The possible values are: call, chat, email, focus, and meeting.
    */
    private ?AnalyticsActivityType $activity = null;
    
    /**
     * @var DateInterval|null $duration Total hours spent on the activity. The value is represented in ISO 8601 format for durations.
    */
    private ?DateInterval $duration = null;
    
    /**
     * @var Date|null $endDate Date when the activity ended, expressed in ISO 8601 format for calendar dates. For example, the property value could be '2019-07-03' that follows the YYYY-MM-DD format.
    */
    private ?Date $endDate = null;
    
    /**
     * @var Date|null $startDate Date when the activity started, expressed in ISO 8601 format for calendar dates. For example, the property value could be '2019-07-04' that follows the YYYY-MM-DD format.
    */
    private ?Date $startDate = null;
    
    /**
     * @var string|null $timeZoneUsed The time zone that the user sets in Microsoft Outlook is used for the computation. For example, the property value could be 'Pacific Standard Time.'
    */
    private ?string $timeZoneUsed = null;
    
    /**
     * Instantiates a new activityStatistics and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.activityStatistics');
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
        return $this->activity;
    }

    /**
     * Gets the duration property value. Total hours spent on the activity. The value is represented in ISO 8601 format for durations.
     * @return DateInterval|null
    */
    public function getDuration(): ?DateInterval {
        return $this->duration;
    }

    /**
     * Gets the endDate property value. Date when the activity ended, expressed in ISO 8601 format for calendar dates. For example, the property value could be '2019-07-03' that follows the YYYY-MM-DD format.
     * @return Date|null
    */
    public function getEndDate(): ?Date {
        return $this->endDate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activity' => function (ParseNode $n) use ($o) { $o->setActivity($n->getEnumValue(AnalyticsActivityType::class)); },
            'duration' => function (ParseNode $n) use ($o) { $o->setDuration($n->getDateIntervalValue()); },
            'endDate' => function (ParseNode $n) use ($o) { $o->setEndDate($n->getDateValue()); },
            'startDate' => function (ParseNode $n) use ($o) { $o->setStartDate($n->getDateValue()); },
            'timeZoneUsed' => function (ParseNode $n) use ($o) { $o->setTimeZoneUsed($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the startDate property value. Date when the activity started, expressed in ISO 8601 format for calendar dates. For example, the property value could be '2019-07-04' that follows the YYYY-MM-DD format.
     * @return Date|null
    */
    public function getStartDate(): ?Date {
        return $this->startDate;
    }

    /**
     * Gets the timeZoneUsed property value. The time zone that the user sets in Microsoft Outlook is used for the computation. For example, the property value could be 'Pacific Standard Time.'
     * @return string|null
    */
    public function getTimeZoneUsed(): ?string {
        return $this->timeZoneUsed;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('activity', $this->activity);
        $writer->writeDateIntervalValue('duration', $this->duration);
        $writer->writeDateValue('endDate', $this->endDate);
        $writer->writeDateValue('startDate', $this->startDate);
        $writer->writeStringValue('timeZoneUsed', $this->timeZoneUsed);
    }

    /**
     * Sets the activity property value. The type of activity for which statistics are returned. The possible values are: call, chat, email, focus, and meeting.
     *  @param AnalyticsActivityType|null $value Value to set for the activity property.
    */
    public function setActivity(?AnalyticsActivityType $value ): void {
        $this->activity = $value;
    }

    /**
     * Sets the duration property value. Total hours spent on the activity. The value is represented in ISO 8601 format for durations.
     *  @param DateInterval|null $value Value to set for the duration property.
    */
    public function setDuration(?DateInterval $value ): void {
        $this->duration = $value;
    }

    /**
     * Sets the endDate property value. Date when the activity ended, expressed in ISO 8601 format for calendar dates. For example, the property value could be '2019-07-03' that follows the YYYY-MM-DD format.
     *  @param Date|null $value Value to set for the endDate property.
    */
    public function setEndDate(?Date $value ): void {
        $this->endDate = $value;
    }

    /**
     * Sets the startDate property value. Date when the activity started, expressed in ISO 8601 format for calendar dates. For example, the property value could be '2019-07-04' that follows the YYYY-MM-DD format.
     *  @param Date|null $value Value to set for the startDate property.
    */
    public function setStartDate(?Date $value ): void {
        $this->startDate = $value;
    }

    /**
     * Sets the timeZoneUsed property value. The time zone that the user sets in Microsoft Outlook is used for the computation. For example, the property value could be 'Pacific Standard Time.'
     *  @param string|null $value Value to set for the timeZoneUsed property.
    */
    public function setTimeZoneUsed(?string $value ): void {
        $this->timeZoneUsed = $value;
    }

}

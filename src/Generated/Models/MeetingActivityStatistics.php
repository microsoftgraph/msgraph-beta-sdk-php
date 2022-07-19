<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MeetingActivityStatistics extends ActivityStatistics implements Parsable 
{
    /**
     * @var DateInterval|null $afterHours Time spent on meetings outside of working hours, which is based on the user's Outlook calendar setting for work hours. The value is represented in ISO 8601 format for durations.
    */
    private ?DateInterval $afterHours = null;
    
    /**
     * @var DateInterval|null $conflicting Time spent in conflicting meetings (meetings that overlap with other meetings that the person accepted and where the person’s status is set to Busy). The value is represented in ISO 8601 format for durations.
    */
    private ?DateInterval $conflicting = null;
    
    /**
     * @var DateInterval|null $long Time spent in long meetings (more than an hour in duration). The value is represented in ISO 8601 format for durations.
    */
    private ?DateInterval $long = null;
    
    /**
     * @var DateInterval|null $multitasking Time spent in meetings where the person was multitasking (read/sent more than a minimum number of emails and/or sent more than a minimum number of messages in Teams or in Skype for Business). The value is represented in ISO 8601 format for durations.
    */
    private ?DateInterval $multitasking = null;
    
    /**
     * @var DateInterval|null $organized Time spent in meetings organized by the user. The value is represented in ISO 8601 format for durations.
    */
    private ?DateInterval $organized = null;
    
    /**
     * @var DateInterval|null $recurring Time spent on recurring meetings. The value is represented in ISO 8601 format for durations.
    */
    private ?DateInterval $recurring = null;
    
    /**
     * Instantiates a new MeetingActivityStatistics and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.meetingActivityStatistics');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MeetingActivityStatistics
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MeetingActivityStatistics {
        return new MeetingActivityStatistics();
    }

    /**
     * Gets the afterHours property value. Time spent on meetings outside of working hours, which is based on the user's Outlook calendar setting for work hours. The value is represented in ISO 8601 format for durations.
     * @return DateInterval|null
    */
    public function getAfterHours(): ?DateInterval {
        return $this->afterHours;
    }

    /**
     * Gets the conflicting property value. Time spent in conflicting meetings (meetings that overlap with other meetings that the person accepted and where the person’s status is set to Busy). The value is represented in ISO 8601 format for durations.
     * @return DateInterval|null
    */
    public function getConflicting(): ?DateInterval {
        return $this->conflicting;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'afterHours' => function (ParseNode $n) use ($o) { $o->setAfterHours($n->getDateIntervalValue()); },
            'conflicting' => function (ParseNode $n) use ($o) { $o->setConflicting($n->getDateIntervalValue()); },
            'long' => function (ParseNode $n) use ($o) { $o->setLong($n->getDateIntervalValue()); },
            'multitasking' => function (ParseNode $n) use ($o) { $o->setMultitasking($n->getDateIntervalValue()); },
            'organized' => function (ParseNode $n) use ($o) { $o->setOrganized($n->getDateIntervalValue()); },
            'recurring' => function (ParseNode $n) use ($o) { $o->setRecurring($n->getDateIntervalValue()); },
        ]);
    }

    /**
     * Gets the long property value. Time spent in long meetings (more than an hour in duration). The value is represented in ISO 8601 format for durations.
     * @return DateInterval|null
    */
    public function getLong(): ?DateInterval {
        return $this->long;
    }

    /**
     * Gets the multitasking property value. Time spent in meetings where the person was multitasking (read/sent more than a minimum number of emails and/or sent more than a minimum number of messages in Teams or in Skype for Business). The value is represented in ISO 8601 format for durations.
     * @return DateInterval|null
    */
    public function getMultitasking(): ?DateInterval {
        return $this->multitasking;
    }

    /**
     * Gets the organized property value. Time spent in meetings organized by the user. The value is represented in ISO 8601 format for durations.
     * @return DateInterval|null
    */
    public function getOrganized(): ?DateInterval {
        return $this->organized;
    }

    /**
     * Gets the recurring property value. Time spent on recurring meetings. The value is represented in ISO 8601 format for durations.
     * @return DateInterval|null
    */
    public function getRecurring(): ?DateInterval {
        return $this->recurring;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateIntervalValue('afterHours', $this->afterHours);
        $writer->writeDateIntervalValue('conflicting', $this->conflicting);
        $writer->writeDateIntervalValue('long', $this->long);
        $writer->writeDateIntervalValue('multitasking', $this->multitasking);
        $writer->writeDateIntervalValue('organized', $this->organized);
        $writer->writeDateIntervalValue('recurring', $this->recurring);
    }

    /**
     * Sets the afterHours property value. Time spent on meetings outside of working hours, which is based on the user's Outlook calendar setting for work hours. The value is represented in ISO 8601 format for durations.
     *  @param DateInterval|null $value Value to set for the afterHours property.
    */
    public function setAfterHours(?DateInterval $value ): void {
        $this->afterHours = $value;
    }

    /**
     * Sets the conflicting property value. Time spent in conflicting meetings (meetings that overlap with other meetings that the person accepted and where the person’s status is set to Busy). The value is represented in ISO 8601 format for durations.
     *  @param DateInterval|null $value Value to set for the conflicting property.
    */
    public function setConflicting(?DateInterval $value ): void {
        $this->conflicting = $value;
    }

    /**
     * Sets the long property value. Time spent in long meetings (more than an hour in duration). The value is represented in ISO 8601 format for durations.
     *  @param DateInterval|null $value Value to set for the long property.
    */
    public function setLong(?DateInterval $value ): void {
        $this->long = $value;
    }

    /**
     * Sets the multitasking property value. Time spent in meetings where the person was multitasking (read/sent more than a minimum number of emails and/or sent more than a minimum number of messages in Teams or in Skype for Business). The value is represented in ISO 8601 format for durations.
     *  @param DateInterval|null $value Value to set for the multitasking property.
    */
    public function setMultitasking(?DateInterval $value ): void {
        $this->multitasking = $value;
    }

    /**
     * Sets the organized property value. Time spent in meetings organized by the user. The value is represented in ISO 8601 format for durations.
     *  @param DateInterval|null $value Value to set for the organized property.
    */
    public function setOrganized(?DateInterval $value ): void {
        $this->organized = $value;
    }

    /**
     * Sets the recurring property value. Time spent on recurring meetings. The value is represented in ISO 8601 format for durations.
     *  @param DateInterval|null $value Value to set for the recurring property.
    */
    public function setRecurring(?DateInterval $value ): void {
        $this->recurring = $value;
    }

}

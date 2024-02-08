<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MeetingActivityStatistics extends ActivityStatistics implements Parsable 
{
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
        $val = $this->getBackingStore()->get('afterHours');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'afterHours'");
    }

    /**
     * Gets the conflicting property value. Time spent in conflicting meetings (meetings that overlap with other meetings that the person accepted and where the person’s status is set to Busy). The value is represented in ISO 8601 format for durations.
     * @return DateInterval|null
    */
    public function getConflicting(): ?DateInterval {
        $val = $this->getBackingStore()->get('conflicting');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'conflicting'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'afterHours' => fn(ParseNode $n) => $o->setAfterHours($n->getDateIntervalValue()),
            'conflicting' => fn(ParseNode $n) => $o->setConflicting($n->getDateIntervalValue()),
            'long' => fn(ParseNode $n) => $o->setLong($n->getDateIntervalValue()),
            'multitasking' => fn(ParseNode $n) => $o->setMultitasking($n->getDateIntervalValue()),
            'organized' => fn(ParseNode $n) => $o->setOrganized($n->getDateIntervalValue()),
            'recurring' => fn(ParseNode $n) => $o->setRecurring($n->getDateIntervalValue()),
        ]);
    }

    /**
     * Gets the long property value. Time spent in long meetings (more than an hour in duration). The value is represented in ISO 8601 format for durations.
     * @return DateInterval|null
    */
    public function getLong(): ?DateInterval {
        $val = $this->getBackingStore()->get('long');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'long'");
    }

    /**
     * Gets the multitasking property value. Time spent in meetings where the person was multitasking (read/sent more than a minimum number of emails and/or sent more than a minimum number of messages in Teams or in Skype for Business). The value is represented in ISO 8601 format for durations.
     * @return DateInterval|null
    */
    public function getMultitasking(): ?DateInterval {
        $val = $this->getBackingStore()->get('multitasking');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'multitasking'");
    }

    /**
     * Gets the organized property value. Time spent in meetings organized by the user. The value is represented in ISO 8601 format for durations.
     * @return DateInterval|null
    */
    public function getOrganized(): ?DateInterval {
        $val = $this->getBackingStore()->get('organized');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'organized'");
    }

    /**
     * Gets the recurring property value. Time spent on recurring meetings. The value is represented in ISO 8601 format for durations.
     * @return DateInterval|null
    */
    public function getRecurring(): ?DateInterval {
        $val = $this->getBackingStore()->get('recurring');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recurring'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateIntervalValue('afterHours', $this->getAfterHours());
        $writer->writeDateIntervalValue('conflicting', $this->getConflicting());
        $writer->writeDateIntervalValue('long', $this->getLong());
        $writer->writeDateIntervalValue('multitasking', $this->getMultitasking());
        $writer->writeDateIntervalValue('organized', $this->getOrganized());
        $writer->writeDateIntervalValue('recurring', $this->getRecurring());
    }

    /**
     * Sets the afterHours property value. Time spent on meetings outside of working hours, which is based on the user's Outlook calendar setting for work hours. The value is represented in ISO 8601 format for durations.
     * @param DateInterval|null $value Value to set for the afterHours property.
    */
    public function setAfterHours(?DateInterval $value): void {
        $this->getBackingStore()->set('afterHours', $value);
    }

    /**
     * Sets the conflicting property value. Time spent in conflicting meetings (meetings that overlap with other meetings that the person accepted and where the person’s status is set to Busy). The value is represented in ISO 8601 format for durations.
     * @param DateInterval|null $value Value to set for the conflicting property.
    */
    public function setConflicting(?DateInterval $value): void {
        $this->getBackingStore()->set('conflicting', $value);
    }

    /**
     * Sets the long property value. Time spent in long meetings (more than an hour in duration). The value is represented in ISO 8601 format for durations.
     * @param DateInterval|null $value Value to set for the long property.
    */
    public function setLong(?DateInterval $value): void {
        $this->getBackingStore()->set('long', $value);
    }

    /**
     * Sets the multitasking property value. Time spent in meetings where the person was multitasking (read/sent more than a minimum number of emails and/or sent more than a minimum number of messages in Teams or in Skype for Business). The value is represented in ISO 8601 format for durations.
     * @param DateInterval|null $value Value to set for the multitasking property.
    */
    public function setMultitasking(?DateInterval $value): void {
        $this->getBackingStore()->set('multitasking', $value);
    }

    /**
     * Sets the organized property value. Time spent in meetings organized by the user. The value is represented in ISO 8601 format for durations.
     * @param DateInterval|null $value Value to set for the organized property.
    */
    public function setOrganized(?DateInterval $value): void {
        $this->getBackingStore()->set('organized', $value);
    }

    /**
     * Sets the recurring property value. Time spent on recurring meetings. The value is represented in ISO 8601 format for durations.
     * @param DateInterval|null $value Value to set for the recurring property.
    */
    public function setRecurring(?DateInterval $value): void {
        $this->getBackingStore()->set('recurring', $value);
    }

}

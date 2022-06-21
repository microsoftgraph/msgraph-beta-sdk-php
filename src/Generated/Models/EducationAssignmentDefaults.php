<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Time;

class EducationAssignmentDefaults extends Entity implements Parsable 
{
    /**
     * @var EducationAddedStudentAction|null $addedStudentAction Class-level default behavior for handling students who are added after the assignment is published. Possible values are: none, assignIfOpen.
    */
    private ?EducationAddedStudentAction $addedStudentAction = null;
    
    /**
     * @var EducationAddToCalendarOptions|null $addToCalendarAction Optional field to control adding assignments to students' and teachers' calendars when the assignment is published. The possible values are: none, studentsAndPublisher, studentsAndTeamOwners, unknownFutureValue, and studentsOnly. Note that you must use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: studentsOnly. The default value is none.
    */
    private ?EducationAddToCalendarOptions $addToCalendarAction = null;
    
    /**
     * @var Time|null $dueTime Class-level default value for due time field. Default value is 23:59:00.
    */
    private ?Time $dueTime = null;
    
    /**
     * @var string|null $notificationChannelUrl Default Teams channel to which notifications will be sent. Default value is null.
    */
    private ?string $notificationChannelUrl = null;
    
    /**
     * Instantiates a new educationAssignmentDefaults and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationAssignmentDefaults
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationAssignmentDefaults {
        return new EducationAssignmentDefaults();
    }

    /**
     * Gets the addedStudentAction property value. Class-level default behavior for handling students who are added after the assignment is published. Possible values are: none, assignIfOpen.
     * @return EducationAddedStudentAction|null
    */
    public function getAddedStudentAction(): ?EducationAddedStudentAction {
        return $this->addedStudentAction;
    }

    /**
     * Gets the addToCalendarAction property value. Optional field to control adding assignments to students' and teachers' calendars when the assignment is published. The possible values are: none, studentsAndPublisher, studentsAndTeamOwners, unknownFutureValue, and studentsOnly. Note that you must use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: studentsOnly. The default value is none.
     * @return EducationAddToCalendarOptions|null
    */
    public function getAddToCalendarAction(): ?EducationAddToCalendarOptions {
        return $this->addToCalendarAction;
    }

    /**
     * Gets the dueTime property value. Class-level default value for due time field. Default value is 23:59:00.
     * @return Time|null
    */
    public function getDueTime(): ?Time {
        return $this->dueTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'addedStudentAction' => function (ParseNode $n) use ($o) { $o->setAddedStudentAction($n->getEnumValue(EducationAddedStudentAction::class)); },
            'addToCalendarAction' => function (ParseNode $n) use ($o) { $o->setAddToCalendarAction($n->getEnumValue(EducationAddToCalendarOptions::class)); },
            'dueTime' => function (ParseNode $n) use ($o) { $o->setDueTime($n->getTimeValue()); },
            'notificationChannelUrl' => function (ParseNode $n) use ($o) { $o->setNotificationChannelUrl($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the notificationChannelUrl property value. Default Teams channel to which notifications will be sent. Default value is null.
     * @return string|null
    */
    public function getNotificationChannelUrl(): ?string {
        return $this->notificationChannelUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('addedStudentAction', $this->addedStudentAction);
        $writer->writeEnumValue('addToCalendarAction', $this->addToCalendarAction);
        $writer->writeTimeValue('dueTime', $this->dueTime);
        $writer->writeStringValue('notificationChannelUrl', $this->notificationChannelUrl);
    }

    /**
     * Sets the addedStudentAction property value. Class-level default behavior for handling students who are added after the assignment is published. Possible values are: none, assignIfOpen.
     *  @param EducationAddedStudentAction|null $value Value to set for the addedStudentAction property.
    */
    public function setAddedStudentAction(?EducationAddedStudentAction $value ): void {
        $this->addedStudentAction = $value;
    }

    /**
     * Sets the addToCalendarAction property value. Optional field to control adding assignments to students' and teachers' calendars when the assignment is published. The possible values are: none, studentsAndPublisher, studentsAndTeamOwners, unknownFutureValue, and studentsOnly. Note that you must use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: studentsOnly. The default value is none.
     *  @param EducationAddToCalendarOptions|null $value Value to set for the addToCalendarAction property.
    */
    public function setAddToCalendarAction(?EducationAddToCalendarOptions $value ): void {
        $this->addToCalendarAction = $value;
    }

    /**
     * Sets the dueTime property value. Class-level default value for due time field. Default value is 23:59:00.
     *  @param Time|null $value Value to set for the dueTime property.
    */
    public function setDueTime(?Time $value ): void {
        $this->dueTime = $value;
    }

    /**
     * Sets the notificationChannelUrl property value. Default Teams channel to which notifications will be sent. Default value is null.
     *  @param string|null $value Value to set for the notificationChannelUrl property.
    */
    public function setNotificationChannelUrl(?string $value ): void {
        $this->notificationChannelUrl = $value;
    }

}

<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MeetingRegistrant extends MeetingRegistrantBase implements Parsable 
{
    /**
     * Instantiates a new MeetingRegistrant and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.meetingRegistrant');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MeetingRegistrant
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MeetingRegistrant {
        return new MeetingRegistrant();
    }

    /**
     * Gets the customQuestionAnswers property value. The registrant's answer to custom questions.
     * @return array<CustomQuestionAnswer>|null
    */
    public function getCustomQuestionAnswers(): ?array {
        return $this->getBackingStore()->get('customQuestionAnswers');
    }

    /**
     * Gets the email property value. The email address of the registrant.
     * @return string|null
    */
    public function getEmail(): ?string {
        return $this->getBackingStore()->get('email');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'customQuestionAnswers' => fn(ParseNode $n) => $o->setCustomQuestionAnswers($n->getCollectionOfObjectValues([CustomQuestionAnswer::class, 'createFromDiscriminatorValue'])),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'firstName' => fn(ParseNode $n) => $o->setFirstName($n->getStringValue()),
            'lastName' => fn(ParseNode $n) => $o->setLastName($n->getStringValue()),
            'registrationDateTime' => fn(ParseNode $n) => $o->setRegistrationDateTime($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(MeetingRegistrantStatus::class)),
        ]);
    }

    /**
     * Gets the firstName property value. The first name of the registrant.
     * @return string|null
    */
    public function getFirstName(): ?string {
        return $this->getBackingStore()->get('firstName');
    }

    /**
     * Gets the lastName property value. The last name of the registrant.
     * @return string|null
    */
    public function getLastName(): ?string {
        return $this->getBackingStore()->get('lastName');
    }

    /**
     * Gets the registrationDateTime property value. Time in UTC when the registrant registers for the meeting. Read-only.
     * @return DateTime|null
    */
    public function getRegistrationDateTime(): ?DateTime {
        return $this->getBackingStore()->get('registrationDateTime');
    }

    /**
     * Gets the status property value. The registration status of the registrant. Read-only.
     * @return MeetingRegistrantStatus|null
    */
    public function getStatus(): ?MeetingRegistrantStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('customQuestionAnswers', $this->getCustomQuestionAnswers());
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeStringValue('firstName', $this->getFirstName());
        $writer->writeStringValue('lastName', $this->getLastName());
        $writer->writeDateTimeValue('registrationDateTime', $this->getRegistrationDateTime());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the customQuestionAnswers property value. The registrant's answer to custom questions.
     * @param array<CustomQuestionAnswer>|null $value Value to set for the customQuestionAnswers property.
    */
    public function setCustomQuestionAnswers(?array $value): void {
        $this->getBackingStore()->set('customQuestionAnswers', $value);
    }

    /**
     * Sets the email property value. The email address of the registrant.
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->getBackingStore()->set('email', $value);
    }

    /**
     * Sets the firstName property value. The first name of the registrant.
     * @param string|null $value Value to set for the firstName property.
    */
    public function setFirstName(?string $value): void {
        $this->getBackingStore()->set('firstName', $value);
    }

    /**
     * Sets the lastName property value. The last name of the registrant.
     * @param string|null $value Value to set for the lastName property.
    */
    public function setLastName(?string $value): void {
        $this->getBackingStore()->set('lastName', $value);
    }

    /**
     * Sets the registrationDateTime property value. Time in UTC when the registrant registers for the meeting. Read-only.
     * @param DateTime|null $value Value to set for the registrationDateTime property.
    */
    public function setRegistrationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('registrationDateTime', $value);
    }

    /**
     * Sets the status property value. The registration status of the registrant. Read-only.
     * @param MeetingRegistrantStatus|null $value Value to set for the status property.
    */
    public function setStatus(?MeetingRegistrantStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}

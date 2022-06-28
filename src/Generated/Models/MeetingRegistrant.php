<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MeetingRegistrant extends MeetingRegistrantBase implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<CustomQuestionAnswer>|null $customQuestionAnswers The registrant's answer to custom questions.
    */
    private ?array $customQuestionAnswers = null;
    
    /**
     * @var string|null $email The email address of the registrant.
    */
    private ?string $email = null;
    
    /**
     * @var string|null $firstName The first name of the registrant.
    */
    private ?string $firstName = null;
    
    /**
     * @var string|null $lastName The last name of the registrant.
    */
    private ?string $lastName = null;
    
    /**
     * @var DateTime|null $registrationDateTime Time in UTC when the registrant registers for the meeting. Read-only.
    */
    private ?DateTime $registrationDateTime = null;
    
    /**
     * @var MeetingRegistrantStatus|null $status The registration status of the registrant. Read-only.
    */
    private ?MeetingRegistrantStatus $status = null;
    
    /**
     * Instantiates a new MeetingRegistrant and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the customQuestionAnswers property value. The registrant's answer to custom questions.
     * @return array<CustomQuestionAnswer>|null
    */
    public function getCustomQuestionAnswers(): ?array {
        return $this->customQuestionAnswers;
    }

    /**
     * Gets the email property value. The email address of the registrant.
     * @return string|null
    */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'customQuestionAnswers' => function (ParseNode $n) use ($o) { $o->setCustomQuestionAnswers($n->getCollectionOfObjectValues(array(CustomQuestionAnswer::class, 'createFromDiscriminatorValue'))); },
            'email' => function (ParseNode $n) use ($o) { $o->setEmail($n->getStringValue()); },
            'firstName' => function (ParseNode $n) use ($o) { $o->setFirstName($n->getStringValue()); },
            'lastName' => function (ParseNode $n) use ($o) { $o->setLastName($n->getStringValue()); },
            'registrationDateTime' => function (ParseNode $n) use ($o) { $o->setRegistrationDateTime($n->getDateTimeValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(MeetingRegistrantStatus::class)); },
        ]);
    }

    /**
     * Gets the firstName property value. The first name of the registrant.
     * @return string|null
    */
    public function getFirstName(): ?string {
        return $this->firstName;
    }

    /**
     * Gets the lastName property value. The last name of the registrant.
     * @return string|null
    */
    public function getLastName(): ?string {
        return $this->lastName;
    }

    /**
     * Gets the registrationDateTime property value. Time in UTC when the registrant registers for the meeting. Read-only.
     * @return DateTime|null
    */
    public function getRegistrationDateTime(): ?DateTime {
        return $this->registrationDateTime;
    }

    /**
     * Gets the status property value. The registration status of the registrant. Read-only.
     * @return MeetingRegistrantStatus|null
    */
    public function getStatus(): ?MeetingRegistrantStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('customQuestionAnswers', $this->customQuestionAnswers);
        $writer->writeStringValue('email', $this->email);
        $writer->writeStringValue('firstName', $this->firstName);
        $writer->writeStringValue('lastName', $this->lastName);
        $writer->writeDateTimeValue('registrationDateTime', $this->registrationDateTime);
        $writer->writeEnumValue('status', $this->status);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the customQuestionAnswers property value. The registrant's answer to custom questions.
     *  @param array<CustomQuestionAnswer>|null $value Value to set for the customQuestionAnswers property.
    */
    public function setCustomQuestionAnswers(?array $value ): void {
        $this->customQuestionAnswers = $value;
    }

    /**
     * Sets the email property value. The email address of the registrant.
     *  @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value ): void {
        $this->email = $value;
    }

    /**
     * Sets the firstName property value. The first name of the registrant.
     *  @param string|null $value Value to set for the firstName property.
    */
    public function setFirstName(?string $value ): void {
        $this->firstName = $value;
    }

    /**
     * Sets the lastName property value. The last name of the registrant.
     *  @param string|null $value Value to set for the lastName property.
    */
    public function setLastName(?string $value ): void {
        $this->lastName = $value;
    }

    /**
     * Sets the registrationDateTime property value. Time in UTC when the registrant registers for the meeting. Read-only.
     *  @param DateTime|null $value Value to set for the registrationDateTime property.
    */
    public function setRegistrationDateTime(?DateTime $value ): void {
        $this->registrationDateTime = $value;
    }

    /**
     * Sets the status property value. The registration status of the registrant. Read-only.
     *  @param MeetingRegistrantStatus|null $value Value to set for the status property.
    */
    public function setStatus(?MeetingRegistrantStatus $value ): void {
        $this->status = $value;
    }

}

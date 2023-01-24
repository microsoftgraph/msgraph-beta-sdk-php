<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MeetingRegistrationQuestion extends Entity implements Parsable 
{
    /**
     * Instantiates a new meetingRegistrationQuestion and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MeetingRegistrationQuestion
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MeetingRegistrationQuestion {
        return new MeetingRegistrationQuestion();
    }

    /**
     * Gets the answerInputType property value. Answer input type of the custom registration question.
     * @return AnswerInputType|null
    */
    public function getAnswerInputType(): ?AnswerInputType {
        return $this->getBackingStore()->get('answerInputType');
    }

    /**
     * Gets the answerOptions property value. Answer options when answerInputType is radioButton.
     * @return array<string>|null
    */
    public function getAnswerOptions(): ?array {
        return $this->getBackingStore()->get('answerOptions');
    }

    /**
     * Gets the displayName property value. Display name of the custom registration question.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'answerInputType' => fn(ParseNode $n) => $o->setAnswerInputType($n->getEnumValue(AnswerInputType::class)),
            'answerOptions' => fn(ParseNode $n) => $o->setAnswerOptions($n->getCollectionOfPrimitiveValues()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'isRequired' => fn(ParseNode $n) => $o->setIsRequired($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the isRequired property value. Indicates whether the question is required. Default value is false.
     * @return bool|null
    */
    public function getIsRequired(): ?bool {
        return $this->getBackingStore()->get('isRequired');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('answerInputType', $this->getAnswerInputType());
        $writer->writeCollectionOfPrimitiveValues('answerOptions', $this->getAnswerOptions());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('isRequired', $this->getIsRequired());
    }

    /**
     * Sets the answerInputType property value. Answer input type of the custom registration question.
     * @param AnswerInputType|null $value Value to set for the answerInputType property.
    */
    public function setAnswerInputType(?AnswerInputType $value): void {
        $this->getBackingStore()->set('answerInputType', $value);
    }

    /**
     * Sets the answerOptions property value. Answer options when answerInputType is radioButton.
     * @param array<string>|null $value Value to set for the answerOptions property.
    */
    public function setAnswerOptions(?array $value): void {
        $this->getBackingStore()->set('answerOptions', $value);
    }

    /**
     * Sets the displayName property value. Display name of the custom registration question.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the isRequired property value. Indicates whether the question is required. Default value is false.
     * @param bool|null $value Value to set for the isRequired property.
    */
    public function setIsRequired(?bool $value): void {
        $this->getBackingStore()->set('isRequired', $value);
    }

}

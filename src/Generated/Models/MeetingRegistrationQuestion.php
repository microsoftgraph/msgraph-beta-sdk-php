<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MeetingRegistrationQuestion extends Entity implements Parsable 
{
    /**
     * @var AnswerInputType|null $answerInputType Answer input type of the custom registration question.
    */
    private ?AnswerInputType $answerInputType = null;
    
    /**
     * @var array<string>|null $answerOptions Answer options when answerInputType is radioButton.
    */
    private ?array $answerOptions = null;
    
    /**
     * @var string|null $displayName Display name of the custom registration question.
    */
    private ?string $displayName = null;
    
    /**
     * @var bool|null $isRequired Indicates whether the question is required. Default value is false.
    */
    private ?bool $isRequired = null;
    
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
        return $this->answerInputType;
    }

    /**
     * Gets the answerOptions property value. Answer options when answerInputType is radioButton.
     * @return array<string>|null
    */
    public function getAnswerOptions(): ?array {
        return $this->answerOptions;
    }

    /**
     * Gets the displayName property value. Display name of the custom registration question.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'answerInputType' => function (ParseNode $n) use ($o) { $o->setAnswerInputType($n->getEnumValue(AnswerInputType::class)); },
            'answerOptions' => function (ParseNode $n) use ($o) { $o->setAnswerOptions($n->getCollectionOfPrimitiveValues()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'isRequired' => function (ParseNode $n) use ($o) { $o->setIsRequired($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the isRequired property value. Indicates whether the question is required. Default value is false.
     * @return bool|null
    */
    public function getIsRequired(): ?bool {
        return $this->isRequired;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('answerInputType', $this->answerInputType);
        $writer->writeCollectionOfPrimitiveValues('answerOptions', $this->answerOptions);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeBooleanValue('isRequired', $this->isRequired);
    }

    /**
     * Sets the answerInputType property value. Answer input type of the custom registration question.
     *  @param AnswerInputType|null $value Value to set for the answerInputType property.
    */
    public function setAnswerInputType(?AnswerInputType $value ): void {
        $this->answerInputType = $value;
    }

    /**
     * Sets the answerOptions property value. Answer options when answerInputType is radioButton.
     *  @param array<string>|null $value Value to set for the answerOptions property.
    */
    public function setAnswerOptions(?array $value ): void {
        $this->answerOptions = $value;
    }

    /**
     * Sets the displayName property value. Display name of the custom registration question.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the isRequired property value. Indicates whether the question is required. Default value is false.
     *  @param bool|null $value Value to set for the isRequired property.
    */
    public function setIsRequired(?bool $value ): void {
        $this->isRequired = $value;
    }

}

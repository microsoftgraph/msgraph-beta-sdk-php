<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class VirtualEventRegistrationQuestion extends Entity implements Parsable 
{
    /**
     * Instantiates a new virtualEventRegistrationQuestion and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VirtualEventRegistrationQuestion
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VirtualEventRegistrationQuestion {
        return new VirtualEventRegistrationQuestion();
    }

    /**
     * Gets the answerChoices property value. The answerChoices property
     * @return array<string>|null
    */
    public function getAnswerChoices(): ?array {
        return $this->getBackingStore()->get('answerChoices');
    }

    /**
     * Gets the answerInputType property value. The answerInputType property
     * @return VirtualEventRegistrationQuestionAnswerInputType|null
    */
    public function getAnswerInputType(): ?VirtualEventRegistrationQuestionAnswerInputType {
        return $this->getBackingStore()->get('answerInputType');
    }

    /**
     * Gets the displayName property value. The displayName property
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
            'answerChoices' => fn(ParseNode $n) => $o->setAnswerChoices($n->getCollectionOfPrimitiveValues()),
            'answerInputType' => fn(ParseNode $n) => $o->setAnswerInputType($n->getEnumValue(VirtualEventRegistrationQuestionAnswerInputType::class)),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'isRequired' => fn(ParseNode $n) => $o->setIsRequired($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the isRequired property value. The isRequired property
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
        $writer->writeCollectionOfPrimitiveValues('answerChoices', $this->getAnswerChoices());
        $writer->writeEnumValue('answerInputType', $this->getAnswerInputType());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('isRequired', $this->getIsRequired());
    }

    /**
     * Sets the answerChoices property value. The answerChoices property
     * @param array<string>|null $value Value to set for the answerChoices property.
    */
    public function setAnswerChoices(?array $value): void {
        $this->getBackingStore()->set('answerChoices', $value);
    }

    /**
     * Sets the answerInputType property value. The answerInputType property
     * @param VirtualEventRegistrationQuestionAnswerInputType|null $value Value to set for the answerInputType property.
    */
    public function setAnswerInputType(?VirtualEventRegistrationQuestionAnswerInputType $value): void {
        $this->getBackingStore()->set('answerInputType', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the isRequired property value. The isRequired property
     * @param bool|null $value Value to set for the isRequired property.
    */
    public function setIsRequired(?bool $value): void {
        $this->getBackingStore()->set('isRequired', $value);
    }

}

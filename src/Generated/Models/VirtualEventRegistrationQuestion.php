<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class VirtualEventRegistrationQuestion extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
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
     * Gets the answerChoices property value. Answer choices when answerInputType is singleChoice or multiChoice.
     * @return array<string>|null
    */
    public function getAnswerChoices(): ?array {
        $val = $this->getBackingStore()->get('answerChoices');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'answerChoices'");
    }

    /**
     * Gets the answerInputType property value. Input type of the registration question answer.
     * @return VirtualEventRegistrationQuestionAnswerInputType|null
    */
    public function getAnswerInputType(): ?VirtualEventRegistrationQuestionAnswerInputType {
        $val = $this->getBackingStore()->get('answerInputType');
        if (is_null($val) || $val instanceof VirtualEventRegistrationQuestionAnswerInputType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'answerInputType'");
    }

    /**
     * Gets the displayName property value. Display name of the registration question.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'answerChoices' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAnswerChoices($val);
            },
            'answerInputType' => fn(ParseNode $n) => $o->setAnswerInputType($n->getEnumValue(VirtualEventRegistrationQuestionAnswerInputType::class)),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'isRequired' => fn(ParseNode $n) => $o->setIsRequired($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the isRequired property value. Indicates whether the question is required to answer. Default value is false.
     * @return bool|null
    */
    public function getIsRequired(): ?bool {
        $val = $this->getBackingStore()->get('isRequired');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isRequired'");
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
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the answerChoices property value. Answer choices when answerInputType is singleChoice or multiChoice.
     * @param array<string>|null $value Value to set for the answerChoices property.
    */
    public function setAnswerChoices(?array $value): void {
        $this->getBackingStore()->set('answerChoices', $value);
    }

    /**
     * Sets the answerInputType property value. Input type of the registration question answer.
     * @param VirtualEventRegistrationQuestionAnswerInputType|null $value Value to set for the answerInputType property.
    */
    public function setAnswerInputType(?VirtualEventRegistrationQuestionAnswerInputType $value): void {
        $this->getBackingStore()->set('answerInputType', $value);
    }

    /**
     * Sets the displayName property value. Display name of the registration question.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the isRequired property value. Indicates whether the question is required to answer. Default value is false.
     * @param bool|null $value Value to set for the isRequired property.
    */
    public function setIsRequired(?bool $value): void {
        $this->getBackingStore()->set('isRequired', $value);
    }

}

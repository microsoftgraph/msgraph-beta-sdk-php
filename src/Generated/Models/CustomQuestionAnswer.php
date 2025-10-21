<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CustomQuestionAnswer extends Entity implements Parsable 
{
    /**
     * Instantiates a new CustomQuestionAnswer and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomQuestionAnswer
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomQuestionAnswer {
        return new CustomQuestionAnswer();
    }

    /**
     * Gets the displayName property value. Display name of the custom registration question. Read-only.
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
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'questionId' => fn(ParseNode $n) => $o->setQuestionId($n->getStringValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
        ]);
    }

    /**
     * Gets the questionId property value. ID the custom registration question. Read-only.
     * @return string|null
    */
    public function getQuestionId(): ?string {
        $val = $this->getBackingStore()->get('questionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'questionId'");
    }

    /**
     * Gets the value property value. Answer to the custom registration question.
     * @return string|null
    */
    public function getValue(): ?string {
        $val = $this->getBackingStore()->get('value');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'value'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('questionId', $this->getQuestionId());
        $writer->writeStringValue('value', $this->getValue());
    }

    /**
     * Sets the displayName property value. Display name of the custom registration question. Read-only.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the questionId property value. ID the custom registration question. Read-only.
     * @param string|null $value Value to set for the questionId property.
    */
    public function setQuestionId(?string $value): void {
        $this->getBackingStore()->set('questionId', $value);
    }

    /**
     * Sets the value property value. Answer to the custom registration question.
     * @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value): void {
        $this->getBackingStore()->set('value', $value);
    }

}

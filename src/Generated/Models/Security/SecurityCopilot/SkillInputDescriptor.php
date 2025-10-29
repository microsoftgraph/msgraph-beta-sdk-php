<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\Security\SecurityCopilot;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SkillInputDescriptor extends SkillVariableDescriptor implements Parsable 
{
    /**
     * Instantiates a new SkillInputDescriptor and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SkillInputDescriptor
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SkillInputDescriptor {
        return new SkillInputDescriptor();
    }

    /**
     * Gets the defaultValue property value. The defaultValue property
     * @return string|null
    */
    public function getDefaultValue(): ?string {
        $val = $this->getBackingStore()->get('defaultValue');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defaultValue'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'defaultValue' => fn(ParseNode $n) => $o->setDefaultValue($n->getStringValue()),
            'isRequired' => fn(ParseNode $n) => $o->setIsRequired($n->getBooleanValue()),
            'placeholderValue' => fn(ParseNode $n) => $o->setPlaceholderValue($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isRequired property value. The isRequired property
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
     * Gets the placeholderValue property value. The placeholderValue property
     * @return string|null
    */
    public function getPlaceholderValue(): ?string {
        $val = $this->getBackingStore()->get('placeholderValue');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'placeholderValue'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('defaultValue', $this->getDefaultValue());
        $writer->writeBooleanValue('isRequired', $this->getIsRequired());
        $writer->writeStringValue('placeholderValue', $this->getPlaceholderValue());
    }

    /**
     * Sets the defaultValue property value. The defaultValue property
     * @param string|null $value Value to set for the defaultValue property.
    */
    public function setDefaultValue(?string $value): void {
        $this->getBackingStore()->set('defaultValue', $value);
    }

    /**
     * Sets the isRequired property value. The isRequired property
     * @param bool|null $value Value to set for the isRequired property.
    */
    public function setIsRequired(?bool $value): void {
        $this->getBackingStore()->set('isRequired', $value);
    }

    /**
     * Sets the placeholderValue property value. The placeholderValue property
     * @param string|null $value Value to set for the placeholderValue property.
    */
    public function setPlaceholderValue(?string $value): void {
        $this->getBackingStore()->set('placeholderValue', $value);
    }

}

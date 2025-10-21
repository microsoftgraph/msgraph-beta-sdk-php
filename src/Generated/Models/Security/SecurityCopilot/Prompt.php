<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\Security\SecurityCopilot;

use DateTime;
use Microsoft\\Graph\\Beta\\Generated\Models\Dictionary;
use Microsoft\\Graph\\Beta\\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Prompt extends Entity implements Parsable 
{
    /**
     * Instantiates a new Prompt and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Prompt
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Prompt {
        return new Prompt();
    }

    /**
     * Gets the content property value. The content property
     * @return string|null
    */
    public function getContent(): ?string {
        $val = $this->getBackingStore()->get('content');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'content'");
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the evaluations property value. The evaluations property
     * @return array<Evaluation>|null
    */
    public function getEvaluations(): ?array {
        $val = $this->getBackingStore()->get('evaluations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Evaluation::class);
            /** @var array<Evaluation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'evaluations'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'content' => fn(ParseNode $n) => $o->setContent($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'evaluations' => fn(ParseNode $n) => $o->setEvaluations($n->getCollectionOfObjectValues([Evaluation::class, 'createFromDiscriminatorValue'])),
            'inputs' => fn(ParseNode $n) => $o->setInputs($n->getObjectValue([Dictionary::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'skillInputDescriptors' => fn(ParseNode $n) => $o->setSkillInputDescriptors($n->getCollectionOfObjectValues([SkillInputDescriptor::class, 'createFromDiscriminatorValue'])),
            'skillName' => fn(ParseNode $n) => $o->setSkillName($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(PromptType::class)),
        ]);
    }

    /**
     * Gets the inputs property value. The inputs property
     * @return Dictionary|null
    */
    public function getInputs(): ?Dictionary {
        $val = $this->getBackingStore()->get('inputs');
        if (is_null($val) || $val instanceof Dictionary) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inputs'");
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the skillInputDescriptors property value. The skillInputDescriptors property
     * @return array<SkillInputDescriptor>|null
    */
    public function getSkillInputDescriptors(): ?array {
        $val = $this->getBackingStore()->get('skillInputDescriptors');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SkillInputDescriptor::class);
            /** @var array<SkillInputDescriptor>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'skillInputDescriptors'");
    }

    /**
     * Gets the skillName property value. The skillName property
     * @return string|null
    */
    public function getSkillName(): ?string {
        $val = $this->getBackingStore()->get('skillName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'skillName'");
    }

    /**
     * Gets the type property value. The type property
     * @return PromptType|null
    */
    public function getType(): ?PromptType {
        $val = $this->getBackingStore()->get('type');
        if (is_null($val) || $val instanceof PromptType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'type'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('content', $this->getContent());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeCollectionOfObjectValues('evaluations', $this->getEvaluations());
        $writer->writeObjectValue('inputs', $this->getInputs());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeCollectionOfObjectValues('skillInputDescriptors', $this->getSkillInputDescriptors());
        $writer->writeStringValue('skillName', $this->getSkillName());
        $writer->writeEnumValue('type', $this->getType());
    }

    /**
     * Sets the content property value. The content property
     * @param string|null $value Value to set for the content property.
    */
    public function setContent(?string $value): void {
        $this->getBackingStore()->set('content', $value);
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the evaluations property value. The evaluations property
     * @param array<Evaluation>|null $value Value to set for the evaluations property.
    */
    public function setEvaluations(?array $value): void {
        $this->getBackingStore()->set('evaluations', $value);
    }

    /**
     * Sets the inputs property value. The inputs property
     * @param Dictionary|null $value Value to set for the inputs property.
    */
    public function setInputs(?Dictionary $value): void {
        $this->getBackingStore()->set('inputs', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the skillInputDescriptors property value. The skillInputDescriptors property
     * @param array<SkillInputDescriptor>|null $value Value to set for the skillInputDescriptors property.
    */
    public function setSkillInputDescriptors(?array $value): void {
        $this->getBackingStore()->set('skillInputDescriptors', $value);
    }

    /**
     * Sets the skillName property value. The skillName property
     * @param string|null $value Value to set for the skillName property.
    */
    public function setSkillName(?string $value): void {
        $this->getBackingStore()->set('skillName', $value);
    }

    /**
     * Sets the type property value. The type property
     * @param PromptType|null $value Value to set for the type property.
    */
    public function setType(?PromptType $value): void {
        $this->getBackingStore()->set('type', $value);
    }

}

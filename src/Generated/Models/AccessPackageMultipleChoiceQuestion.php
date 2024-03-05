<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AccessPackageMultipleChoiceQuestion extends AccessPackageQuestion implements Parsable 
{
    /**
     * Instantiates a new AccessPackageMultipleChoiceQuestion and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.accessPackageMultipleChoiceQuestion');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageMultipleChoiceQuestion
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageMultipleChoiceQuestion {
        return new AccessPackageMultipleChoiceQuestion();
    }

    /**
     * Gets the allowsMultipleSelection property value. Indicates whether requestor can select multiple choices as their answer.
     * @return bool|null
    */
    public function getAllowsMultipleSelection(): ?bool {
        $val = $this->getBackingStore()->get('allowsMultipleSelection');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowsMultipleSelection'");
    }

    /**
     * Gets the choices property value. List of answer choices.
     * @return array<AccessPackageAnswerChoice>|null
    */
    public function getChoices(): ?array {
        $val = $this->getBackingStore()->get('choices');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessPackageAnswerChoice::class);
            /** @var array<AccessPackageAnswerChoice>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'choices'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowsMultipleSelection' => fn(ParseNode $n) => $o->setAllowsMultipleSelection($n->getBooleanValue()),
            'choices' => fn(ParseNode $n) => $o->setChoices($n->getCollectionOfObjectValues([AccessPackageAnswerChoice::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowsMultipleSelection', $this->getAllowsMultipleSelection());
        $writer->writeCollectionOfObjectValues('choices', $this->getChoices());
    }

    /**
     * Sets the allowsMultipleSelection property value. Indicates whether requestor can select multiple choices as their answer.
     * @param bool|null $value Value to set for the allowsMultipleSelection property.
    */
    public function setAllowsMultipleSelection(?bool $value): void {
        $this->getBackingStore()->set('allowsMultipleSelection', $value);
    }

    /**
     * Sets the choices property value. List of answer choices.
     * @param array<AccessPackageAnswerChoice>|null $value Value to set for the choices property.
    */
    public function setChoices(?array $value): void {
        $this->getBackingStore()->set('choices', $value);
    }

}

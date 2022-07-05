<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageMultipleChoiceQuestion extends AccessPackageQuestion implements Parsable 
{
    /**
     * @var bool|null $allowsMultipleSelection Indicates whether requestor can select multiple choices as their answer.
    */
    private ?bool $allowsMultipleSelection = null;
    
    /**
     * @var array<AccessPackageAnswerChoice>|null $choices List of answer choices.
    */
    private ?array $choices = null;
    
    /**
     * Instantiates a new AccessPackageMultipleChoiceQuestion and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->allowsMultipleSelection;
    }

    /**
     * Gets the choices property value. List of answer choices.
     * @return array<AccessPackageAnswerChoice>|null
    */
    public function getChoices(): ?array {
        return $this->choices;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowsMultipleSelection' => function (ParseNode $n) use ($o) { $o->setAllowsMultipleSelection($n->getBooleanValue()); },
            'choices' => function (ParseNode $n) use ($o) { $o->setChoices($n->getCollectionOfObjectValues(array(AccessPackageAnswerChoice::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowsMultipleSelection', $this->allowsMultipleSelection);
        $writer->writeCollectionOfObjectValues('choices', $this->choices);
    }

    /**
     * Sets the allowsMultipleSelection property value. Indicates whether requestor can select multiple choices as their answer.
     *  @param bool|null $value Value to set for the allowsMultipleSelection property.
    */
    public function setAllowsMultipleSelection(?bool $value ): void {
        $this->allowsMultipleSelection = $value;
    }

    /**
     * Sets the choices property value. List of answer choices.
     *  @param array<AccessPackageAnswerChoice>|null $value Value to set for the choices property.
    */
    public function setChoices(?array $value ): void {
        $this->choices = $value;
    }

}

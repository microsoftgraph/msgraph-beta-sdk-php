<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageQuestion implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $id ID of the question. */
    private ?string $id = null;
    
    /** @var bool|null $isAnswerEditable Specifies whether the requestor is allowed to edit answers to questions. */
    private ?bool $isAnswerEditable = null;
    
    /** @var bool|null $isRequired Whether the requestor is required to supply an answer or not. */
    private ?bool $isRequired = null;
    
    /** @var int|null $sequence Relative position of this question when displaying a list of questions to the requestor. */
    private ?int $sequence = null;
    
    /** @var AccessPackageLocalizedContent|null $text The text of the question to show to the requestor. */
    private ?AccessPackageLocalizedContent $text = null;
    
    /**
     * Instantiates a new accessPackageQuestion and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageQuestion
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageQuestion {
        return new AccessPackageQuestion();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'id' => function (self $o, ParseNode $n) { $o->setId($n->getStringValue()); },
            'isAnswerEditable' => function (self $o, ParseNode $n) { $o->setIsAnswerEditable($n->getBooleanValue()); },
            'isRequired' => function (self $o, ParseNode $n) { $o->setIsRequired($n->getBooleanValue()); },
            'sequence' => function (self $o, ParseNode $n) { $o->setSequence($n->getIntegerValue()); },
            'text' => function (self $o, ParseNode $n) { $o->setText($n->getObjectValue(AccessPackageLocalizedContent::class)); },
        ];
    }

    /**
     * Gets the id property value. ID of the question.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the isAnswerEditable property value. Specifies whether the requestor is allowed to edit answers to questions.
     * @return bool|null
    */
    public function getIsAnswerEditable(): ?bool {
        return $this->isAnswerEditable;
    }

    /**
     * Gets the isRequired property value. Whether the requestor is required to supply an answer or not.
     * @return bool|null
    */
    public function getIsRequired(): ?bool {
        return $this->isRequired;
    }

    /**
     * Gets the sequence property value. Relative position of this question when displaying a list of questions to the requestor.
     * @return int|null
    */
    public function getSequence(): ?int {
        return $this->sequence;
    }

    /**
     * Gets the text property value. The text of the question to show to the requestor.
     * @return AccessPackageLocalizedContent|null
    */
    public function getText(): ?AccessPackageLocalizedContent {
        return $this->text;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('id', $this->id);
        $writer->writeBooleanValue('isAnswerEditable', $this->isAnswerEditable);
        $writer->writeBooleanValue('isRequired', $this->isRequired);
        $writer->writeIntegerValue('sequence', $this->sequence);
        $writer->writeObjectValue('text', $this->text);
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
     * Sets the id property value. ID of the question.
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value ): void {
        $this->id = $value;
    }

    /**
     * Sets the isAnswerEditable property value. Specifies whether the requestor is allowed to edit answers to questions.
     *  @param bool|null $value Value to set for the isAnswerEditable property.
    */
    public function setIsAnswerEditable(?bool $value ): void {
        $this->isAnswerEditable = $value;
    }

    /**
     * Sets the isRequired property value. Whether the requestor is required to supply an answer or not.
     *  @param bool|null $value Value to set for the isRequired property.
    */
    public function setIsRequired(?bool $value ): void {
        $this->isRequired = $value;
    }

    /**
     * Sets the sequence property value. Relative position of this question when displaying a list of questions to the requestor.
     *  @param int|null $value Value to set for the sequence property.
    */
    public function setSequence(?int $value ): void {
        $this->sequence = $value;
    }

    /**
     * Sets the text property value. The text of the question to show to the requestor.
     *  @param AccessPackageLocalizedContent|null $value Value to set for the text property.
    */
    public function setText(?AccessPackageLocalizedContent $value ): void {
        $this->text = $value;
    }

}

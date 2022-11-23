<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AccessPackageQuestion implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new accessPackageQuestion and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageQuestion
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageQuestion {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.accessPackageMultipleChoiceQuestion': return new AccessPackageMultipleChoiceQuestion();
                case '#microsoft.graph.accessPackageTextInputQuestion': return new AccessPackageTextInputQuestion();
            }
        }
        return new AccessPackageQuestion();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'isAnswerEditable' => fn(ParseNode $n) => $o->setIsAnswerEditable($n->getBooleanValue()),
            'isRequired' => fn(ParseNode $n) => $o->setIsRequired($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'sequence' => fn(ParseNode $n) => $o->setSequence($n->getIntegerValue()),
            'text' => fn(ParseNode $n) => $o->setText($n->getObjectValue([AccessPackageLocalizedContent::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the id property value. ID of the question.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->getBackingStore()->get('id');
    }

    /**
     * Gets the isAnswerEditable property value. Specifies whether the requestor is allowed to edit answers to questions.
     * @return bool|null
    */
    public function getIsAnswerEditable(): ?bool {
        return $this->getBackingStore()->get('isAnswerEditable');
    }

    /**
     * Gets the isRequired property value. Whether the requestor is required to supply an answer or not.
     * @return bool|null
    */
    public function getIsRequired(): ?bool {
        return $this->getBackingStore()->get('isRequired');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the sequence property value. Relative position of this question when displaying a list of questions to the requestor.
     * @return int|null
    */
    public function getSequence(): ?int {
        return $this->getBackingStore()->get('sequence');
    }

    /**
     * Gets the text property value. The text of the question to show to the requestor.
     * @return AccessPackageLocalizedContent|null
    */
    public function getText(): ?AccessPackageLocalizedContent {
        return $this->getBackingStore()->get('text');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('id', $this->getId());
        $writer->writeBooleanValue('isAnswerEditable', $this->getIsAnswerEditable());
        $writer->writeBooleanValue('isRequired', $this->getIsRequired());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('sequence', $this->getSequence());
        $writer->writeObjectValue('text', $this->getText());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the id property value. ID of the question.
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->getBackingStore()->set('id', $value);
    }

    /**
     * Sets the isAnswerEditable property value. Specifies whether the requestor is allowed to edit answers to questions.
     *  @param bool|null $value Value to set for the isAnswerEditable property.
    */
    public function setIsAnswerEditable(?bool $value): void {
        $this->getBackingStore()->set('isAnswerEditable', $value);
    }

    /**
     * Sets the isRequired property value. Whether the requestor is required to supply an answer or not.
     *  @param bool|null $value Value to set for the isRequired property.
    */
    public function setIsRequired(?bool $value): void {
        $this->getBackingStore()->set('isRequired', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the sequence property value. Relative position of this question when displaying a list of questions to the requestor.
     *  @param int|null $value Value to set for the sequence property.
    */
    public function setSequence(?int $value): void {
        $this->getBackingStore()->set('sequence', $value);
    }

    /**
     * Sets the text property value. The text of the question to show to the requestor.
     *  @param AccessPackageLocalizedContent|null $value Value to set for the text property.
    */
    public function setText(?AccessPackageLocalizedContent $value): void {
        $this->getBackingStore()->set('text', $value);
    }

}

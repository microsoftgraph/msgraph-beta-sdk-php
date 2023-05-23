<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class VirtualEventRegistrationQuestionAnswer implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new virtualEventRegistrationQuestionAnswer and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VirtualEventRegistrationQuestionAnswer
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VirtualEventRegistrationQuestionAnswer {
        return new VirtualEventRegistrationQuestionAnswer();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
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
     * Gets the booleanValue property value. The booleanValue property
     * @return bool|null
    */
    public function getBooleanValue(): ?bool {
        return $this->getBackingStore()->get('booleanValue');
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
        return  [
            'booleanValue' => fn(ParseNode $n) => $o->setBooleanValue($n->getBooleanValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'multiChoiceValues' => fn(ParseNode $n) => $o->setMultiChoiceValues($n->getCollectionOfPrimitiveValues()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'questionId' => fn(ParseNode $n) => $o->setQuestionId($n->getStringValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
        ];
    }

    /**
     * Gets the multiChoiceValues property value. The multiChoiceValues property
     * @return array<string>|null
    */
    public function getMultiChoiceValues(): ?array {
        return $this->getBackingStore()->get('multiChoiceValues');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the questionId property value. The questionId property
     * @return string|null
    */
    public function getQuestionId(): ?string {
        return $this->getBackingStore()->get('questionId');
    }

    /**
     * Gets the value property value. The value property
     * @return string|null
    */
    public function getValue(): ?string {
        return $this->getBackingStore()->get('value');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('booleanValue', $this->getBooleanValue());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfPrimitiveValues('multiChoiceValues', $this->getMultiChoiceValues());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('questionId', $this->getQuestionId());
        $writer->writeStringValue('value', $this->getValue());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the booleanValue property value. The booleanValue property
     * @param bool|null $value Value to set for the booleanValue property.
    */
    public function setBooleanValue(?bool $value): void {
        $this->getBackingStore()->set('booleanValue', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the multiChoiceValues property value. The multiChoiceValues property
     * @param array<string>|null $value Value to set for the multiChoiceValues property.
    */
    public function setMultiChoiceValues(?array $value): void {
        $this->getBackingStore()->set('multiChoiceValues', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the questionId property value. The questionId property
     * @param string|null $value Value to set for the questionId property.
    */
    public function setQuestionId(?string $value): void {
        $this->getBackingStore()->set('questionId', $value);
    }

    /**
     * Sets the value property value. The value property
     * @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value): void {
        $this->getBackingStore()->set('value', $value);
    }

}

<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class FilterClause implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new filterClause and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.filterClause');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FilterClause
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FilterClause {
        return new FilterClause();
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
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'operatorName' => fn(ParseNode $n) => $o->setOperatorName($n->getStringValue()),
            'sourceOperandName' => fn(ParseNode $n) => $o->setSourceOperandName($n->getStringValue()),
            'targetOperand' => fn(ParseNode $n) => $o->setTargetOperand($n->getObjectValue([FilterOperand::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the operatorName property value. Name of the operator to be applied to the source and target operands. Must be one of the supported operators. Supported operators can be discovered.
     * @return string|null
    */
    public function getOperatorName(): ?string {
        return $this->getBackingStore()->get('operatorName');
    }

    /**
     * Gets the sourceOperandName property value. Name of source operand (the operand being tested). The source operand name must match one of the attribute names on the source object.
     * @return string|null
    */
    public function getSourceOperandName(): ?string {
        return $this->getBackingStore()->get('sourceOperandName');
    }

    /**
     * Gets the targetOperand property value. Values that the source operand will be tested against.
     * @return FilterOperand|null
    */
    public function getTargetOperand(): ?FilterOperand {
        return $this->getBackingStore()->get('targetOperand');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('operatorName', $this->getOperatorName());
        $writer->writeStringValue('sourceOperandName', $this->getSourceOperandName());
        $writer->writeObjectValue('targetOperand', $this->getTargetOperand());
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
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the operatorName property value. Name of the operator to be applied to the source and target operands. Must be one of the supported operators. Supported operators can be discovered.
     *  @param string|null $value Value to set for the operatorName property.
    */
    public function setOperatorName(?string $value): void {
        $this->getBackingStore()->set('operatorName', $value);
    }

    /**
     * Sets the sourceOperandName property value. Name of source operand (the operand being tested). The source operand name must match one of the attribute names on the source object.
     *  @param string|null $value Value to set for the sourceOperandName property.
    */
    public function setSourceOperandName(?string $value): void {
        $this->getBackingStore()->set('sourceOperandName', $value);
    }

    /**
     * Sets the targetOperand property value. Values that the source operand will be tested against.
     *  @param FilterOperand|null $value Value to set for the targetOperand property.
    */
    public function setTargetOperand(?FilterOperand $value): void {
        $this->getBackingStore()->set('targetOperand', $value);
    }

}

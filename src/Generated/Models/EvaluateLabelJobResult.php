<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class EvaluateLabelJobResult implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new evaluateLabelJobResult and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.evaluateLabelJobResult');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EvaluateLabelJobResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EvaluateLabelJobResult {
        return new EvaluateLabelJobResult();
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
            'responsiblePolicy' => fn(ParseNode $n) => $o->setResponsiblePolicy($n->getObjectValue([ResponsiblePolicy::class, 'createFromDiscriminatorValue'])),
            'responsibleSensitiveTypes' => fn(ParseNode $n) => $o->setResponsibleSensitiveTypes($n->getCollectionOfObjectValues([ResponsibleSensitiveType::class, 'createFromDiscriminatorValue'])),
            'sensitivityLabel' => fn(ParseNode $n) => $o->setSensitivityLabel($n->getObjectValue([MatchingLabel::class, 'createFromDiscriminatorValue'])),
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
     * Gets the responsiblePolicy property value. The responsiblePolicy property
     * @return ResponsiblePolicy|null
    */
    public function getResponsiblePolicy(): ?ResponsiblePolicy {
        return $this->getBackingStore()->get('responsiblePolicy');
    }

    /**
     * Gets the responsibleSensitiveTypes property value. The responsibleSensitiveTypes property
     * @return array<ResponsibleSensitiveType>|null
    */
    public function getResponsibleSensitiveTypes(): ?array {
        return $this->getBackingStore()->get('responsibleSensitiveTypes');
    }

    /**
     * Gets the sensitivityLabel property value. The sensitivityLabel property
     * @return MatchingLabel|null
    */
    public function getSensitivityLabel(): ?MatchingLabel {
        return $this->getBackingStore()->get('sensitivityLabel');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('responsiblePolicy', $this->getResponsiblePolicy());
        $writer->writeCollectionOfObjectValues('responsibleSensitiveTypes', $this->getResponsibleSensitiveTypes());
        $writer->writeObjectValue('sensitivityLabel', $this->getSensitivityLabel());
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
     * Sets the responsiblePolicy property value. The responsiblePolicy property
     *  @param ResponsiblePolicy|null $value Value to set for the responsiblePolicy property.
    */
    public function setResponsiblePolicy(?ResponsiblePolicy $value): void {
        $this->getBackingStore()->set('responsiblePolicy', $value);
    }

    /**
     * Sets the responsibleSensitiveTypes property value. The responsibleSensitiveTypes property
     *  @param array<ResponsibleSensitiveType>|null $value Value to set for the responsibleSensitiveTypes property.
    */
    public function setResponsibleSensitiveTypes(?array $value): void {
        $this->getBackingStore()->set('responsibleSensitiveTypes', $value);
    }

    /**
     * Sets the sensitivityLabel property value. The sensitivityLabel property
     *  @param MatchingLabel|null $value Value to set for the sensitivityLabel property.
    */
    public function setSensitivityLabel(?MatchingLabel $value): void {
        $this->getBackingStore()->set('sensitivityLabel', $value);
    }

}

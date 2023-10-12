<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class EvaluateLabelJobResultGroup implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new evaluateLabelJobResultGroup and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EvaluateLabelJobResultGroup
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EvaluateLabelJobResultGroup {
        return new EvaluateLabelJobResultGroup();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the automatic property value. The automatic property
     * @return EvaluateLabelJobResult|null
    */
    public function getAutomatic(): ?EvaluateLabelJobResult {
        $val = $this->getBackingStore()->get('automatic');
        if (is_null($val) || $val instanceof EvaluateLabelJobResult) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'automatic'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'automatic' => fn(ParseNode $n) => $o->setAutomatic($n->getObjectValue([EvaluateLabelJobResult::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'recommended' => fn(ParseNode $n) => $o->setRecommended($n->getObjectValue([EvaluateLabelJobResult::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the recommended property value. The recommended property
     * @return EvaluateLabelJobResult|null
    */
    public function getRecommended(): ?EvaluateLabelJobResult {
        $val = $this->getBackingStore()->get('recommended');
        if (is_null($val) || $val instanceof EvaluateLabelJobResult) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recommended'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('automatic', $this->getAutomatic());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('recommended', $this->getRecommended());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the automatic property value. The automatic property
     * @param EvaluateLabelJobResult|null $value Value to set for the automatic property.
    */
    public function setAutomatic(?EvaluateLabelJobResult $value): void {
        $this->getBackingStore()->set('automatic', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the recommended property value. The recommended property
     * @param EvaluateLabelJobResult|null $value Value to set for the recommended property.
    */
    public function setRecommended(?EvaluateLabelJobResult $value): void {
        $this->getBackingStore()->set('recommended', $value);
    }

}

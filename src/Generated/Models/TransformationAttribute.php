<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class TransformationAttribute implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new TransformationAttribute and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TransformationAttribute
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TransformationAttribute {
        return new TransformationAttribute();
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
     * Gets the attribute property value. The attribute property
     * @return CustomClaimAttributeBase|null
    */
    public function getAttribute(): ?CustomClaimAttributeBase {
        $val = $this->getBackingStore()->get('attribute');
        if (is_null($val) || $val instanceof CustomClaimAttributeBase) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attribute'");
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
            'attribute' => fn(ParseNode $n) => $o->setAttribute($n->getObjectValue([CustomClaimAttributeBase::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'treatAsMultiValue' => fn(ParseNode $n) => $o->setTreatAsMultiValue($n->getBooleanValue()),
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
     * Gets the treatAsMultiValue property value. This flag is only relevant in the case where the attribute is multivalued. By default, transformations are only applied to the first element in a multi-valued claim, however setting this flag to true ensures the transformation is applied to all values, resulting in a multivalued output.
     * @return bool|null
    */
    public function getTreatAsMultiValue(): ?bool {
        $val = $this->getBackingStore()->get('treatAsMultiValue');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'treatAsMultiValue'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('attribute', $this->getAttribute());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('treatAsMultiValue', $this->getTreatAsMultiValue());
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
     * Sets the attribute property value. The attribute property
     * @param CustomClaimAttributeBase|null $value Value to set for the attribute property.
    */
    public function setAttribute(?CustomClaimAttributeBase $value): void {
        $this->getBackingStore()->set('attribute', $value);
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
     * Sets the treatAsMultiValue property value. This flag is only relevant in the case where the attribute is multivalued. By default, transformations are only applied to the first element in a multi-valued claim, however setting this flag to true ensures the transformation is applied to all values, resulting in a multivalued output.
     * @param bool|null $value Value to set for the treatAsMultiValue property.
    */
    public function setTreatAsMultiValue(?bool $value): void {
        $this->getBackingStore()->set('treatAsMultiValue', $value);
    }

}

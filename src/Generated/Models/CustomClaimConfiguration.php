<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CustomClaimConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CustomClaimConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomClaimConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomClaimConfiguration {
        return new CustomClaimConfiguration();
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
     * Gets the attribute property value. The attribute on which we source this property.
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
     * Gets the condition property value. The condition, if any, associated with this configuration.
     * @return CustomClaimConditionBase|null
    */
    public function getCondition(): ?CustomClaimConditionBase {
        $val = $this->getBackingStore()->get('condition');
        if (is_null($val) || $val instanceof CustomClaimConditionBase) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'condition'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'attribute' => fn(ParseNode $n) => $o->setAttribute($n->getObjectValue([CustomClaimAttributeBase::class, 'createFromDiscriminatorValue'])),
            'condition' => fn(ParseNode $n) => $o->setCondition($n->getObjectValue([CustomClaimConditionBase::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'transformations' => fn(ParseNode $n) => $o->setTransformations($n->getCollectionOfObjectValues([CustomClaimTransformation::class, 'createFromDiscriminatorValue'])),
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
     * Gets the transformations property value. An ordered list of transformations that are applied in sequence.
     * @return array<CustomClaimTransformation>|null
    */
    public function getTransformations(): ?array {
        $val = $this->getBackingStore()->get('transformations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CustomClaimTransformation::class);
            /** @var array<CustomClaimTransformation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'transformations'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('attribute', $this->getAttribute());
        $writer->writeObjectValue('condition', $this->getCondition());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('transformations', $this->getTransformations());
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
     * Sets the attribute property value. The attribute on which we source this property.
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
     * Sets the condition property value. The condition, if any, associated with this configuration.
     * @param CustomClaimConditionBase|null $value Value to set for the condition property.
    */
    public function setCondition(?CustomClaimConditionBase $value): void {
        $this->getBackingStore()->set('condition', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the transformations property value. An ordered list of transformations that are applied in sequence.
     * @param array<CustomClaimTransformation>|null $value Value to set for the transformations property.
    */
    public function setTransformations(?array $value): void {
        $this->getBackingStore()->set('transformations', $value);
    }

}

<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CustomClaimTransformation implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CustomClaimTransformation and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomClaimTransformation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomClaimTransformation {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.containsTransformation': return new ContainsTransformation();
                case '#microsoft.graph.endsWithTransformation': return new EndsWithTransformation();
                case '#microsoft.graph.extractAlphaTransformation': return new ExtractAlphaTransformation();
                case '#microsoft.graph.extractMailPrefixTransformation': return new ExtractMailPrefixTransformation();
                case '#microsoft.graph.extractNumberTransformation': return new ExtractNumberTransformation();
                case '#microsoft.graph.extractTransformation': return new ExtractTransformation();
                case '#microsoft.graph.ifEmptyTransformation': return new IfEmptyTransformation();
                case '#microsoft.graph.ifNotEmptyTransformation': return new IfNotEmptyTransformation();
                case '#microsoft.graph.joinTransformation': return new JoinTransformation();
                case '#microsoft.graph.regexReplaceTransformation': return new RegexReplaceTransformation();
                case '#microsoft.graph.startsWithTransformation': return new StartsWithTransformation();
                case '#microsoft.graph.substringTransformation': return new SubstringTransformation();
                case '#microsoft.graph.toLowercaseTransformation': return new ToLowercaseTransformation();
                case '#microsoft.graph.toUppercaseTransformation': return new ToUppercaseTransformation();
                case '#microsoft.graph.trimTransformation': return new TrimTransformation();
            }
        }
        return new CustomClaimTransformation();
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
            'input' => fn(ParseNode $n) => $o->setInput($n->getObjectValue([TransformationAttribute::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the input property value. The input property
     * @return TransformationAttribute|null
    */
    public function getInput(): ?TransformationAttribute {
        $val = $this->getBackingStore()->get('input');
        if (is_null($val) || $val instanceof TransformationAttribute) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'input'");
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('input', $this->getInput());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the input property value. The input property
     * @param TransformationAttribute|null $value Value to set for the input property.
    */
    public function setInput(?TransformationAttribute $value): void {
        $this->getBackingStore()->set('input', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}

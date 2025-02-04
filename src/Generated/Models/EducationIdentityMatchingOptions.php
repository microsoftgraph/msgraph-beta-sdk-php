<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class EducationIdentityMatchingOptions implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new EducationIdentityMatchingOptions and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationIdentityMatchingOptions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationIdentityMatchingOptions {
        return new EducationIdentityMatchingOptions();
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
     * Gets the appliesTo property value. The appliesTo property
     * @return EducationUserRole|null
    */
    public function getAppliesTo(): ?EducationUserRole {
        $val = $this->getBackingStore()->get('appliesTo');
        if (is_null($val) || $val instanceof EducationUserRole) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appliesTo'");
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
            'appliesTo' => fn(ParseNode $n) => $o->setAppliesTo($n->getEnumValue(EducationUserRole::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'sourcePropertyName' => fn(ParseNode $n) => $o->setSourcePropertyName($n->getStringValue()),
            'targetDomain' => fn(ParseNode $n) => $o->setTargetDomain($n->getStringValue()),
            'targetPropertyName' => fn(ParseNode $n) => $o->setTargetPropertyName($n->getStringValue()),
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
     * Gets the sourcePropertyName property value. The sourcePropertyName property
     * @return string|null
    */
    public function getSourcePropertyName(): ?string {
        $val = $this->getBackingStore()->get('sourcePropertyName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourcePropertyName'");
    }

    /**
     * Gets the targetDomain property value. The targetDomain property
     * @return string|null
    */
    public function getTargetDomain(): ?string {
        $val = $this->getBackingStore()->get('targetDomain');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetDomain'");
    }

    /**
     * Gets the targetPropertyName property value. The targetPropertyName property
     * @return string|null
    */
    public function getTargetPropertyName(): ?string {
        $val = $this->getBackingStore()->get('targetPropertyName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetPropertyName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('appliesTo', $this->getAppliesTo());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('sourcePropertyName', $this->getSourcePropertyName());
        $writer->writeStringValue('targetDomain', $this->getTargetDomain());
        $writer->writeStringValue('targetPropertyName', $this->getTargetPropertyName());
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
     * Sets the appliesTo property value. The appliesTo property
     * @param EducationUserRole|null $value Value to set for the appliesTo property.
    */
    public function setAppliesTo(?EducationUserRole $value): void {
        $this->getBackingStore()->set('appliesTo', $value);
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
     * Sets the sourcePropertyName property value. The sourcePropertyName property
     * @param string|null $value Value to set for the sourcePropertyName property.
    */
    public function setSourcePropertyName(?string $value): void {
        $this->getBackingStore()->set('sourcePropertyName', $value);
    }

    /**
     * Sets the targetDomain property value. The targetDomain property
     * @param string|null $value Value to set for the targetDomain property.
    */
    public function setTargetDomain(?string $value): void {
        $this->getBackingStore()->set('targetDomain', $value);
    }

    /**
     * Sets the targetPropertyName property value. The targetPropertyName property
     * @param string|null $value Value to set for the targetPropertyName property.
    */
    public function setTargetPropertyName(?string $value): void {
        $this->getBackingStore()->set('targetPropertyName', $value);
    }

}

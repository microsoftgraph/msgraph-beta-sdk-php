<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class VerifiedIdProfileConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new VerifiedIdProfileConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VerifiedIdProfileConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VerifiedIdProfileConfiguration {
        return new VerifiedIdProfileConfiguration();
    }

    /**
     * Gets the acceptedIssuer property value. Trusted Verified ID issuer. Required.
     * @return string|null
    */
    public function getAcceptedIssuer(): ?string {
        $val = $this->getBackingStore()->get('acceptedIssuer');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'acceptedIssuer'");
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
     * Gets the claimBindings property value. Claim bindings from Verified ID to source attributes. Required.
     * @return array<ClaimBinding>|null
    */
    public function getClaimBindings(): ?array {
        $val = $this->getBackingStore()->get('claimBindings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ClaimBinding::class);
            /** @var array<ClaimBinding>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'claimBindings'");
    }

    /**
     * Gets the claimBindingSource property value. The claimBindingSource property
     * @return ClaimBindingSource|null
    */
    public function getClaimBindingSource(): ?ClaimBindingSource {
        $val = $this->getBackingStore()->get('claimBindingSource');
        if (is_null($val) || $val instanceof ClaimBindingSource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'claimBindingSource'");
    }

    /**
     * Gets the claimValidation property value. The claimValidation property
     * @return ClaimValidation|null
    */
    public function getClaimValidation(): ?ClaimValidation {
        $val = $this->getBackingStore()->get('claimValidation');
        if (is_null($val) || $val instanceof ClaimValidation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'claimValidation'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'acceptedIssuer' => fn(ParseNode $n) => $o->setAcceptedIssuer($n->getStringValue()),
            'claimBindings' => fn(ParseNode $n) => $o->setClaimBindings($n->getCollectionOfObjectValues([ClaimBinding::class, 'createFromDiscriminatorValue'])),
            'claimBindingSource' => fn(ParseNode $n) => $o->setClaimBindingSource($n->getEnumValue(ClaimBindingSource::class)),
            'claimValidation' => fn(ParseNode $n) => $o->setClaimValidation($n->getObjectValue([ClaimValidation::class, 'createFromDiscriminatorValue'])),
            'manifestUrl' => fn(ParseNode $n) => $o->setManifestUrl($n->getStringValue()),
            'methodType' => fn(ParseNode $n) => $o->setMethodType($n->getEnumValue(VerifiedIdMethodType::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
        ];
    }

    /**
     * Gets the manifestUrl property value. The URL where the credential issuer's manifest can be found. The manifest defines the credential schema and issuer details. Optional.
     * @return string|null
    */
    public function getManifestUrl(): ?string {
        $val = $this->getBackingStore()->get('manifestUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'manifestUrl'");
    }

    /**
     * Gets the methodType property value. The methodType property
     * @return VerifiedIdMethodType|null
    */
    public function getMethodType(): ?VerifiedIdMethodType {
        $val = $this->getBackingStore()->get('methodType');
        if (is_null($val) || $val instanceof VerifiedIdMethodType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'methodType'");
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
     * Gets the type property value. Verified ID type. Required.
     * @return string|null
    */
    public function getType(): ?string {
        $val = $this->getBackingStore()->get('type');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'type'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('acceptedIssuer', $this->getAcceptedIssuer());
        $writer->writeCollectionOfObjectValues('claimBindings', $this->getClaimBindings());
        $writer->writeEnumValue('claimBindingSource', $this->getClaimBindingSource());
        $writer->writeObjectValue('claimValidation', $this->getClaimValidation());
        $writer->writeStringValue('manifestUrl', $this->getManifestUrl());
        $writer->writeEnumValue('methodType', $this->getMethodType());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('type', $this->getType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the acceptedIssuer property value. Trusted Verified ID issuer. Required.
     * @param string|null $value Value to set for the acceptedIssuer property.
    */
    public function setAcceptedIssuer(?string $value): void {
        $this->getBackingStore()->set('acceptedIssuer', $value);
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
     * Sets the claimBindings property value. Claim bindings from Verified ID to source attributes. Required.
     * @param array<ClaimBinding>|null $value Value to set for the claimBindings property.
    */
    public function setClaimBindings(?array $value): void {
        $this->getBackingStore()->set('claimBindings', $value);
    }

    /**
     * Sets the claimBindingSource property value. The claimBindingSource property
     * @param ClaimBindingSource|null $value Value to set for the claimBindingSource property.
    */
    public function setClaimBindingSource(?ClaimBindingSource $value): void {
        $this->getBackingStore()->set('claimBindingSource', $value);
    }

    /**
     * Sets the claimValidation property value. The claimValidation property
     * @param ClaimValidation|null $value Value to set for the claimValidation property.
    */
    public function setClaimValidation(?ClaimValidation $value): void {
        $this->getBackingStore()->set('claimValidation', $value);
    }

    /**
     * Sets the manifestUrl property value. The URL where the credential issuer's manifest can be found. The manifest defines the credential schema and issuer details. Optional.
     * @param string|null $value Value to set for the manifestUrl property.
    */
    public function setManifestUrl(?string $value): void {
        $this->getBackingStore()->set('manifestUrl', $value);
    }

    /**
     * Sets the methodType property value. The methodType property
     * @param VerifiedIdMethodType|null $value Value to set for the methodType property.
    */
    public function setMethodType(?VerifiedIdMethodType $value): void {
        $this->getBackingStore()->set('methodType', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the type property value. Verified ID type. Required.
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->getBackingStore()->set('type', $value);
    }

}

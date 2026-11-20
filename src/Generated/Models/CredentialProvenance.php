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

class CredentialProvenance implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CredentialProvenance and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CredentialProvenance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CredentialProvenance {
        return new CredentialProvenance();
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
     * Gets the assertedBy property value. Identifies the actor that established the provenance. This property is computed by the service.
     * @return ProvenanceAssertedBy|null
    */
    public function getAssertedBy(): ?ProvenanceAssertedBy {
        $val = $this->getBackingStore()->get('assertedBy');
        if (is_null($val) || $val instanceof ProvenanceAssertedBy) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assertedBy'");
    }

    /**
     * Gets the assertions property value. The assertions that support the credential's provenance classification.
     * @return array<ProvenanceAssertion>|null
    */
    public function getAssertions(): ?array {
        $val = $this->getBackingStore()->get('assertions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ProvenanceAssertion::class);
            /** @var array<ProvenanceAssertion>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assertions'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the chainStatus property value. The current integrity status of the credential's chain of trust.
     * @return ProvenanceChainStatus|null
    */
    public function getChainStatus(): ?ProvenanceChainStatus {
        $val = $this->getBackingStore()->get('chainStatus');
        if (is_null($val) || $val instanceof ProvenanceChainStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'chainStatus'");
    }

    /**
     * Gets the classification property value. The classification property
     * @return ProvenanceClassification|null
    */
    public function getClassification(): ?ProvenanceClassification {
        $val = $this->getBackingStore()->get('classification');
        if (is_null($val) || $val instanceof ProvenanceClassification) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'classification'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'assertedBy' => fn(ParseNode $n) => $o->setAssertedBy($n->getObjectValue([ProvenanceAssertedBy::class, 'createFromDiscriminatorValue'])),
            'assertions' => fn(ParseNode $n) => $o->setAssertions($n->getCollectionOfObjectValues([ProvenanceAssertion::class, 'createFromDiscriminatorValue'])),
            'chainStatus' => fn(ParseNode $n) => $o->setChainStatus($n->getObjectValue([ProvenanceChainStatus::class, 'createFromDiscriminatorValue'])),
            'classification' => fn(ParseNode $n) => $o->setClassification($n->getEnumValue(ProvenanceClassification::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('assertions', $this->getAssertions());
        $writer->writeObjectValue('chainStatus', $this->getChainStatus());
        $writer->writeEnumValue('classification', $this->getClassification());
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
     * Sets the assertedBy property value. Identifies the actor that established the provenance. This property is computed by the service.
     * @param ProvenanceAssertedBy|null $value Value to set for the assertedBy property.
    */
    public function setAssertedBy(?ProvenanceAssertedBy $value): void {
        $this->getBackingStore()->set('assertedBy', $value);
    }

    /**
     * Sets the assertions property value. The assertions that support the credential's provenance classification.
     * @param array<ProvenanceAssertion>|null $value Value to set for the assertions property.
    */
    public function setAssertions(?array $value): void {
        $this->getBackingStore()->set('assertions', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the chainStatus property value. The current integrity status of the credential's chain of trust.
     * @param ProvenanceChainStatus|null $value Value to set for the chainStatus property.
    */
    public function setChainStatus(?ProvenanceChainStatus $value): void {
        $this->getBackingStore()->set('chainStatus', $value);
    }

    /**
     * Sets the classification property value. The classification property
     * @param ProvenanceClassification|null $value Value to set for the classification property.
    */
    public function setClassification(?ProvenanceClassification $value): void {
        $this->getBackingStore()->set('classification', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}

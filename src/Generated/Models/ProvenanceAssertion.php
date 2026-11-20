<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ProvenanceAssertion implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ProvenanceAssertion and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProvenanceAssertion
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProvenanceAssertion {
        return new ProvenanceAssertion();
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
     * Gets the attestationReason property value. The reason supplied for a manual attestation.
     * @return string|null
    */
    public function getAttestationReason(): ?string {
        $val = $this->getBackingStore()->get('attestationReason');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attestationReason'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the eventDateTime property value. The date and time of the provenance event represented by this assertion.
     * @return DateTime|null
    */
    public function getEventDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('eventDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'eventDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'attestationReason' => fn(ParseNode $n) => $o->setAttestationReason($n->getStringValue()),
            'eventDateTime' => fn(ParseNode $n) => $o->setEventDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'provenanceType' => fn(ParseNode $n) => $o->setProvenanceType($n->getEnumValue(ProvenanceAssertionType::class)),
            'sourceCredentialId' => fn(ParseNode $n) => $o->setSourceCredentialId($n->getStringValue()),
            'sourceCredentialType' => fn(ParseNode $n) => $o->setSourceCredentialType($n->getStringValue()),
            'verificationEventId' => fn(ParseNode $n) => $o->setVerificationEventId($n->getStringValue()),
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
     * Gets the provenanceType property value. The provenanceType property
     * @return ProvenanceAssertionType|null
    */
    public function getProvenanceType(): ?ProvenanceAssertionType {
        $val = $this->getBackingStore()->get('provenanceType');
        if (is_null($val) || $val instanceof ProvenanceAssertionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'provenanceType'");
    }

    /**
     * Gets the sourceCredentialId property value. The identifier of the credential from which this credential was derived.
     * @return string|null
    */
    public function getSourceCredentialId(): ?string {
        $val = $this->getBackingStore()->get('sourceCredentialId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourceCredentialId'");
    }

    /**
     * Gets the sourceCredentialType property value. The type of credential from which this credential was derived.
     * @return string|null
    */
    public function getSourceCredentialType(): ?string {
        $val = $this->getBackingStore()->get('sourceCredentialType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourceCredentialType'");
    }

    /**
     * Gets the verificationEventId property value. The identifier of the identityVerificationEvent that supports this assertion.
     * @return string|null
    */
    public function getVerificationEventId(): ?string {
        $val = $this->getBackingStore()->get('verificationEventId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'verificationEventId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('attestationReason', $this->getAttestationReason());
        $writer->writeDateTimeValue('eventDateTime', $this->getEventDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('provenanceType', $this->getProvenanceType());
        $writer->writeStringValue('sourceCredentialId', $this->getSourceCredentialId());
        $writer->writeStringValue('sourceCredentialType', $this->getSourceCredentialType());
        $writer->writeStringValue('verificationEventId', $this->getVerificationEventId());
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
     * Sets the attestationReason property value. The reason supplied for a manual attestation.
     * @param string|null $value Value to set for the attestationReason property.
    */
    public function setAttestationReason(?string $value): void {
        $this->getBackingStore()->set('attestationReason', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the eventDateTime property value. The date and time of the provenance event represented by this assertion.
     * @param DateTime|null $value Value to set for the eventDateTime property.
    */
    public function setEventDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('eventDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the provenanceType property value. The provenanceType property
     * @param ProvenanceAssertionType|null $value Value to set for the provenanceType property.
    */
    public function setProvenanceType(?ProvenanceAssertionType $value): void {
        $this->getBackingStore()->set('provenanceType', $value);
    }

    /**
     * Sets the sourceCredentialId property value. The identifier of the credential from which this credential was derived.
     * @param string|null $value Value to set for the sourceCredentialId property.
    */
    public function setSourceCredentialId(?string $value): void {
        $this->getBackingStore()->set('sourceCredentialId', $value);
    }

    /**
     * Sets the sourceCredentialType property value. The type of credential from which this credential was derived.
     * @param string|null $value Value to set for the sourceCredentialType property.
    */
    public function setSourceCredentialType(?string $value): void {
        $this->getBackingStore()->set('sourceCredentialType', $value);
    }

    /**
     * Sets the verificationEventId property value. The identifier of the identityVerificationEvent that supports this assertion.
     * @param string|null $value Value to set for the verificationEventId property.
    */
    public function setVerificationEventId(?string $value): void {
        $this->getBackingStore()->set('verificationEventId', $value);
    }

}

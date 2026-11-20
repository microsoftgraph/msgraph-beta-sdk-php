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

/**
 * Verification details for an identity verification event, including the provider and temporal metadata.
*/
class VerificationEventDetail implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new VerificationEventDetail and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VerificationEventDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VerificationEventDetail {
        return new VerificationEventDetail();
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
     * Gets the expiresDateTime property value. The date and time when this verification expires, in ISO 8601 format. Must be after verifiedDateTime. Compare this value with the current time to determine expiry. Immutable.
     * @return DateTime|null
    */
    public function getExpiresDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('expiresDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expiresDateTime'");
    }

    /**
     * Gets the externalCredentialId property value. The unique credential reference in URN format, such as urn:pic:73b78a00-5b9e-4f8c-85dd-b60a08dc1123. Used for deduplication so repeated presentation of the same credential produces one event. Maximum 256 characters. Immutable.
     * @return string|null
    */
    public function getExternalCredentialId(): ?string {
        $val = $this->getBackingStore()->get('externalCredentialId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalCredentialId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'expiresDateTime' => fn(ParseNode $n) => $o->setExpiresDateTime($n->getDateTimeValue()),
            'externalCredentialId' => fn(ParseNode $n) => $o->setExternalCredentialId($n->getStringValue()),
            'issuedDateTime' => fn(ParseNode $n) => $o->setIssuedDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'source' => fn(ParseNode $n) => $o->setSource($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(VerificationState::class)),
            'verifiedDateTime' => fn(ParseNode $n) => $o->setVerifiedDateTime($n->getDateTimeValue()),
            'verifiedIdProfileId' => fn(ParseNode $n) => $o->setVerifiedIdProfileId($n->getStringValue()),
        ];
    }

    /**
     * Gets the issuedDateTime property value. The date and time when the provider issued the underlying credential, in ISO 8601 format. Must not be in the future. Distinct from verifiedDateTime. Immutable.
     * @return DateTime|null
    */
    public function getIssuedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('issuedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'issuedDateTime'");
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
     * Gets the source property value. The verification provider or attestation authority, such as Contoso Identity Services. May be null when state is issued. Maximum 200 characters. Immutable.
     * @return string|null
    */
    public function getSource(): ?string {
        $val = $this->getBackingStore()->get('source');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'source'");
    }

    /**
     * Gets the state property value. The state property
     * @return VerificationState|null
    */
    public function getState(): ?VerificationState {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || $val instanceof VerificationState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'state'");
    }

    /**
     * Gets the verifiedDateTime property value. The date and time when identity verification was performed, in ISO 8601 format. Must not be in the future. May be null when state is issued. Immutable.
     * @return DateTime|null
    */
    public function getVerifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('verifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'verifiedDateTime'");
    }

    /**
     * Gets the verifiedIdProfileId property value. The identifier of the verified identity profile in the provider's system, in UUID format. Immutable.
     * @return string|null
    */
    public function getVerifiedIdProfileId(): ?string {
        $val = $this->getBackingStore()->get('verifiedIdProfileId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'verifiedIdProfileId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('expiresDateTime', $this->getExpiresDateTime());
        $writer->writeStringValue('externalCredentialId', $this->getExternalCredentialId());
        $writer->writeDateTimeValue('issuedDateTime', $this->getIssuedDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('source', $this->getSource());
        $writer->writeEnumValue('state', $this->getState());
        $writer->writeDateTimeValue('verifiedDateTime', $this->getVerifiedDateTime());
        $writer->writeStringValue('verifiedIdProfileId', $this->getVerifiedIdProfileId());
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
     * Sets the expiresDateTime property value. The date and time when this verification expires, in ISO 8601 format. Must be after verifiedDateTime. Compare this value with the current time to determine expiry. Immutable.
     * @param DateTime|null $value Value to set for the expiresDateTime property.
    */
    public function setExpiresDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expiresDateTime', $value);
    }

    /**
     * Sets the externalCredentialId property value. The unique credential reference in URN format, such as urn:pic:73b78a00-5b9e-4f8c-85dd-b60a08dc1123. Used for deduplication so repeated presentation of the same credential produces one event. Maximum 256 characters. Immutable.
     * @param string|null $value Value to set for the externalCredentialId property.
    */
    public function setExternalCredentialId(?string $value): void {
        $this->getBackingStore()->set('externalCredentialId', $value);
    }

    /**
     * Sets the issuedDateTime property value. The date and time when the provider issued the underlying credential, in ISO 8601 format. Must not be in the future. Distinct from verifiedDateTime. Immutable.
     * @param DateTime|null $value Value to set for the issuedDateTime property.
    */
    public function setIssuedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('issuedDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the source property value. The verification provider or attestation authority, such as Contoso Identity Services. May be null when state is issued. Maximum 200 characters. Immutable.
     * @param string|null $value Value to set for the source property.
    */
    public function setSource(?string $value): void {
        $this->getBackingStore()->set('source', $value);
    }

    /**
     * Sets the state property value. The state property
     * @param VerificationState|null $value Value to set for the state property.
    */
    public function setState(?VerificationState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

    /**
     * Sets the verifiedDateTime property value. The date and time when identity verification was performed, in ISO 8601 format. Must not be in the future. May be null when state is issued. Immutable.
     * @param DateTime|null $value Value to set for the verifiedDateTime property.
    */
    public function setVerifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('verifiedDateTime', $value);
    }

    /**
     * Sets the verifiedIdProfileId property value. The identifier of the verified identity profile in the provider's system, in UUID format. Immutable.
     * @param string|null $value Value to set for the verifiedIdProfileId property.
    */
    public function setVerifiedIdProfileId(?string $value): void {
        $this->getBackingStore()->set('verifiedIdProfileId', $value);
    }

}

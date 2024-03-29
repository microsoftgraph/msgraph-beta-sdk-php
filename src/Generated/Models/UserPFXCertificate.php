<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

/**
 * Entity that encapsulates all information required for a user's PFX certificates.
*/
class UserPFXCertificate extends Entity implements Parsable 
{
    /**
     * Instantiates a new UserPFXCertificate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserPFXCertificate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserPFXCertificate {
        return new UserPFXCertificate();
    }

    /**
     * Gets the createdDateTime property value. Date/time when this PFX certificate was imported.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the encryptedPfxBlob property value. Encrypted PFX blob.
     * @return StreamInterface|null
    */
    public function getEncryptedPfxBlob(): ?StreamInterface {
        $val = $this->getBackingStore()->get('encryptedPfxBlob');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'encryptedPfxBlob'");
    }

    /**
     * Gets the encryptedPfxPassword property value. Encrypted PFX password.
     * @return string|null
    */
    public function getEncryptedPfxPassword(): ?string {
        $val = $this->getBackingStore()->get('encryptedPfxPassword');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'encryptedPfxPassword'");
    }

    /**
     * Gets the expirationDateTime property value. Certificate's validity expiration date/time.
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('expirationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expirationDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'encryptedPfxBlob' => fn(ParseNode $n) => $o->setEncryptedPfxBlob($n->getBinaryContent()),
            'encryptedPfxPassword' => fn(ParseNode $n) => $o->setEncryptedPfxPassword($n->getStringValue()),
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            'intendedPurpose' => fn(ParseNode $n) => $o->setIntendedPurpose($n->getEnumValue(UserPfxIntendedPurpose::class)),
            'keyName' => fn(ParseNode $n) => $o->setKeyName($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'paddingScheme' => fn(ParseNode $n) => $o->setPaddingScheme($n->getEnumValue(UserPfxPaddingScheme::class)),
            'providerName' => fn(ParseNode $n) => $o->setProviderName($n->getStringValue()),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
            'thumbprint' => fn(ParseNode $n) => $o->setThumbprint($n->getStringValue()),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the intendedPurpose property value. Supported values for the intended purpose of a user PFX certificate.
     * @return UserPfxIntendedPurpose|null
    */
    public function getIntendedPurpose(): ?UserPfxIntendedPurpose {
        $val = $this->getBackingStore()->get('intendedPurpose');
        if (is_null($val) || $val instanceof UserPfxIntendedPurpose) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'intendedPurpose'");
    }

    /**
     * Gets the keyName property value. Name of the key (within the provider) used to encrypt the blob.
     * @return string|null
    */
    public function getKeyName(): ?string {
        $val = $this->getBackingStore()->get('keyName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'keyName'");
    }

    /**
     * Gets the lastModifiedDateTime property value. Date/time when this PFX certificate was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the paddingScheme property value. Supported values for the padding scheme used by encryption provider.
     * @return UserPfxPaddingScheme|null
    */
    public function getPaddingScheme(): ?UserPfxPaddingScheme {
        $val = $this->getBackingStore()->get('paddingScheme');
        if (is_null($val) || $val instanceof UserPfxPaddingScheme) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'paddingScheme'");
    }

    /**
     * Gets the providerName property value. Crypto provider used to encrypt this blob.
     * @return string|null
    */
    public function getProviderName(): ?string {
        $val = $this->getBackingStore()->get('providerName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'providerName'");
    }

    /**
     * Gets the startDateTime property value. Certificate's validity start date/time.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('startDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startDateTime'");
    }

    /**
     * Gets the thumbprint property value. SHA-1 thumbprint of the PFX certificate.
     * @return string|null
    */
    public function getThumbprint(): ?string {
        $val = $this->getBackingStore()->get('thumbprint');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'thumbprint'");
    }

    /**
     * Gets the userPrincipalName property value. User Principal Name of the PFX certificate.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        $val = $this->getBackingStore()->get('userPrincipalName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userPrincipalName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeBinaryContent('encryptedPfxBlob', $this->getEncryptedPfxBlob());
        $writer->writeStringValue('encryptedPfxPassword', $this->getEncryptedPfxPassword());
        $writer->writeDateTimeValue('expirationDateTime', $this->getExpirationDateTime());
        $writer->writeEnumValue('intendedPurpose', $this->getIntendedPurpose());
        $writer->writeStringValue('keyName', $this->getKeyName());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeEnumValue('paddingScheme', $this->getPaddingScheme());
        $writer->writeStringValue('providerName', $this->getProviderName());
        $writer->writeDateTimeValue('startDateTime', $this->getStartDateTime());
        $writer->writeStringValue('thumbprint', $this->getThumbprint());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
    }

    /**
     * Sets the createdDateTime property value. Date/time when this PFX certificate was imported.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the encryptedPfxBlob property value. Encrypted PFX blob.
     * @param StreamInterface|null $value Value to set for the encryptedPfxBlob property.
    */
    public function setEncryptedPfxBlob(?StreamInterface $value): void {
        $this->getBackingStore()->set('encryptedPfxBlob', $value);
    }

    /**
     * Sets the encryptedPfxPassword property value. Encrypted PFX password.
     * @param string|null $value Value to set for the encryptedPfxPassword property.
    */
    public function setEncryptedPfxPassword(?string $value): void {
        $this->getBackingStore()->set('encryptedPfxPassword', $value);
    }

    /**
     * Sets the expirationDateTime property value. Certificate's validity expiration date/time.
     * @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expirationDateTime', $value);
    }

    /**
     * Sets the intendedPurpose property value. Supported values for the intended purpose of a user PFX certificate.
     * @param UserPfxIntendedPurpose|null $value Value to set for the intendedPurpose property.
    */
    public function setIntendedPurpose(?UserPfxIntendedPurpose $value): void {
        $this->getBackingStore()->set('intendedPurpose', $value);
    }

    /**
     * Sets the keyName property value. Name of the key (within the provider) used to encrypt the blob.
     * @param string|null $value Value to set for the keyName property.
    */
    public function setKeyName(?string $value): void {
        $this->getBackingStore()->set('keyName', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Date/time when this PFX certificate was last modified.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the paddingScheme property value. Supported values for the padding scheme used by encryption provider.
     * @param UserPfxPaddingScheme|null $value Value to set for the paddingScheme property.
    */
    public function setPaddingScheme(?UserPfxPaddingScheme $value): void {
        $this->getBackingStore()->set('paddingScheme', $value);
    }

    /**
     * Sets the providerName property value. Crypto provider used to encrypt this blob.
     * @param string|null $value Value to set for the providerName property.
    */
    public function setProviderName(?string $value): void {
        $this->getBackingStore()->set('providerName', $value);
    }

    /**
     * Sets the startDateTime property value. Certificate's validity start date/time.
     * @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

    /**
     * Sets the thumbprint property value. SHA-1 thumbprint of the PFX certificate.
     * @param string|null $value Value to set for the thumbprint property.
    */
    public function setThumbprint(?string $value): void {
        $this->getBackingStore()->set('thumbprint', $value);
    }

    /**
     * Sets the userPrincipalName property value. User Principal Name of the PFX certificate.
     * @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

}

<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class UserPFXCertificate extends Entity implements Parsable 
{
    /**
     * @var DateTime|null $createdDateTime Date/time when this PFX certificate was imported.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var StreamInterface|null $encryptedPfxBlob Encrypted PFX blob.
    */
    private ?StreamInterface $encryptedPfxBlob = null;
    
    /**
     * @var string|null $encryptedPfxPassword Encrypted PFX password.
    */
    private ?string $encryptedPfxPassword = null;
    
    /**
     * @var DateTime|null $expirationDateTime Certificate's validity expiration date/time.
    */
    private ?DateTime $expirationDateTime = null;
    
    /**
     * @var UserPfxIntendedPurpose|null $intendedPurpose Supported values for the intended purpose of a user PFX certificate.
    */
    private ?UserPfxIntendedPurpose $intendedPurpose = null;
    
    /**
     * @var string|null $keyName Name of the key (within the provider) used to encrypt the blob.
    */
    private ?string $keyName = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime Date/time when this PFX certificate was last modified.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var UserPfxPaddingScheme|null $paddingScheme Supported values for the padding scheme used by encryption provider.
    */
    private ?UserPfxPaddingScheme $paddingScheme = null;
    
    /**
     * @var string|null $providerName Crypto provider used to encrypt this blob.
    */
    private ?string $providerName = null;
    
    /**
     * @var DateTime|null $startDateTime Certificate's validity start date/time.
    */
    private ?DateTime $startDateTime = null;
    
    /**
     * @var string|null $thumbprint SHA-1 thumbprint of the PFX certificate.
    */
    private ?string $thumbprint = null;
    
    /**
     * @var string|null $userPrincipalName User Principal Name of the PFX certificate.
    */
    private ?string $userPrincipalName = null;
    
    /**
     * Instantiates a new UserPFXCertificate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.userPFXCertificate');
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
        return $this->createdDateTime;
    }

    /**
     * Gets the encryptedPfxBlob property value. Encrypted PFX blob.
     * @return StreamInterface
    */
    public function getEncryptedPfxBlob(): StreamInterface {
        return $this->encryptedPfxBlob;
    }

    /**
     * Gets the encryptedPfxPassword property value. Encrypted PFX password.
     * @return string|null
    */
    public function getEncryptedPfxPassword(): ?string {
        return $this->encryptedPfxPassword;
    }

    /**
     * Gets the expirationDateTime property value. Certificate's validity expiration date/time.
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        return $this->expirationDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
        return $this->intendedPurpose;
    }

    /**
     * Gets the keyName property value. Name of the key (within the provider) used to encrypt the blob.
     * @return string|null
    */
    public function getKeyName(): ?string {
        return $this->keyName;
    }

    /**
     * Gets the lastModifiedDateTime property value. Date/time when this PFX certificate was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the paddingScheme property value. Supported values for the padding scheme used by encryption provider.
     * @return UserPfxPaddingScheme|null
    */
    public function getPaddingScheme(): ?UserPfxPaddingScheme {
        return $this->paddingScheme;
    }

    /**
     * Gets the providerName property value. Crypto provider used to encrypt this blob.
     * @return string|null
    */
    public function getProviderName(): ?string {
        return $this->providerName;
    }

    /**
     * Gets the startDateTime property value. Certificate's validity start date/time.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->startDateTime;
    }

    /**
     * Gets the thumbprint property value. SHA-1 thumbprint of the PFX certificate.
     * @return string|null
    */
    public function getThumbprint(): ?string {
        return $this->thumbprint;
    }

    /**
     * Gets the userPrincipalName property value. User Principal Name of the PFX certificate.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->userPrincipalName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeBinaryContent('encryptedPfxBlob', $this->encryptedPfxBlob);
        $writer->writeStringValue('encryptedPfxPassword', $this->encryptedPfxPassword);
        $writer->writeDateTimeValue('expirationDateTime', $this->expirationDateTime);
        $writer->writeEnumValue('intendedPurpose', $this->intendedPurpose);
        $writer->writeStringValue('keyName', $this->keyName);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeEnumValue('paddingScheme', $this->paddingScheme);
        $writer->writeStringValue('providerName', $this->providerName);
        $writer->writeDateTimeValue('startDateTime', $this->startDateTime);
        $writer->writeStringValue('thumbprint', $this->thumbprint);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
    }

    /**
     * Sets the createdDateTime property value. Date/time when this PFX certificate was imported.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the encryptedPfxBlob property value. Encrypted PFX blob.
     *  @param StreamInterface|null $value Value to set for the encryptedPfxBlob property.
    */
    public function setEncryptedPfxBlob(?StreamInterface $value ): void {
        $this->encryptedPfxBlob = $value;
    }

    /**
     * Sets the encryptedPfxPassword property value. Encrypted PFX password.
     *  @param string|null $value Value to set for the encryptedPfxPassword property.
    */
    public function setEncryptedPfxPassword(?string $value ): void {
        $this->encryptedPfxPassword = $value;
    }

    /**
     * Sets the expirationDateTime property value. Certificate's validity expiration date/time.
     *  @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value ): void {
        $this->expirationDateTime = $value;
    }

    /**
     * Sets the intendedPurpose property value. Supported values for the intended purpose of a user PFX certificate.
     *  @param UserPfxIntendedPurpose|null $value Value to set for the intendedPurpose property.
    */
    public function setIntendedPurpose(?UserPfxIntendedPurpose $value ): void {
        $this->intendedPurpose = $value;
    }

    /**
     * Sets the keyName property value. Name of the key (within the provider) used to encrypt the blob.
     *  @param string|null $value Value to set for the keyName property.
    */
    public function setKeyName(?string $value ): void {
        $this->keyName = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. Date/time when this PFX certificate was last modified.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the paddingScheme property value. Supported values for the padding scheme used by encryption provider.
     *  @param UserPfxPaddingScheme|null $value Value to set for the paddingScheme property.
    */
    public function setPaddingScheme(?UserPfxPaddingScheme $value ): void {
        $this->paddingScheme = $value;
    }

    /**
     * Sets the providerName property value. Crypto provider used to encrypt this blob.
     *  @param string|null $value Value to set for the providerName property.
    */
    public function setProviderName(?string $value ): void {
        $this->providerName = $value;
    }

    /**
     * Sets the startDateTime property value. Certificate's validity start date/time.
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value ): void {
        $this->startDateTime = $value;
    }

    /**
     * Sets the thumbprint property value. SHA-1 thumbprint of the PFX certificate.
     *  @param string|null $value Value to set for the thumbprint property.
    */
    public function setThumbprint(?string $value ): void {
        $this->thumbprint = $value;
    }

    /**
     * Sets the userPrincipalName property value. User Principal Name of the PFX certificate.
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

}

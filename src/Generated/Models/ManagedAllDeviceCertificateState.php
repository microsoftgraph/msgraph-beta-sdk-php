<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagedAllDeviceCertificateState extends Entity implements Parsable 
{
    /**
     * @var DateTime|null $certificateExpirationDateTime Certificate expiry date
    */
    private ?DateTime $certificateExpirationDateTime = null;
    
    /**
     * @var string|null $certificateExtendedKeyUsages Enhanced Key Usage
    */
    private ?string $certificateExtendedKeyUsages = null;
    
    /**
     * @var DateTime|null $certificateIssuanceDateTime Issuance date
    */
    private ?DateTime $certificateIssuanceDateTime = null;
    
    /**
     * @var string|null $certificateIssuerName Issuer
    */
    private ?string $certificateIssuerName = null;
    
    /**
     * @var int|null $certificateKeyUsages Key Usage
    */
    private ?int $certificateKeyUsages = null;
    
    /**
     * @var CertificateRevocationStatus|null $certificateRevokeStatus Revoke status. Possible values are: none, pending, issued, failed, revoked.
    */
    private ?CertificateRevocationStatus $certificateRevokeStatus = null;
    
    /**
     * @var DateTime|null $certificateRevokeStatusLastChangeDateTime The time the revoke status was last changed
    */
    private ?DateTime $certificateRevokeStatusLastChangeDateTime = null;
    
    /**
     * @var string|null $certificateSerialNumber Serial number
    */
    private ?string $certificateSerialNumber = null;
    
    /**
     * @var string|null $certificateSubjectName Certificate subject name
    */
    private ?string $certificateSubjectName = null;
    
    /**
     * @var string|null $certificateThumbprint Thumbprint
    */
    private ?string $certificateThumbprint = null;
    
    /**
     * @var string|null $managedDeviceDisplayName Device display name
    */
    private ?string $managedDeviceDisplayName = null;
    
    /**
     * @var string|null $userPrincipalName User principal name
    */
    private ?string $userPrincipalName = null;
    
    /**
     * Instantiates a new managedAllDeviceCertificateState and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedAllDeviceCertificateState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedAllDeviceCertificateState {
        return new ManagedAllDeviceCertificateState();
    }

    /**
     * Gets the certificateExpirationDateTime property value. Certificate expiry date
     * @return DateTime|null
    */
    public function getCertificateExpirationDateTime(): ?DateTime {
        return $this->certificateExpirationDateTime;
    }

    /**
     * Gets the certificateExtendedKeyUsages property value. Enhanced Key Usage
     * @return string|null
    */
    public function getCertificateExtendedKeyUsages(): ?string {
        return $this->certificateExtendedKeyUsages;
    }

    /**
     * Gets the certificateIssuanceDateTime property value. Issuance date
     * @return DateTime|null
    */
    public function getCertificateIssuanceDateTime(): ?DateTime {
        return $this->certificateIssuanceDateTime;
    }

    /**
     * Gets the certificateIssuerName property value. Issuer
     * @return string|null
    */
    public function getCertificateIssuerName(): ?string {
        return $this->certificateIssuerName;
    }

    /**
     * Gets the certificateKeyUsages property value. Key Usage
     * @return int|null
    */
    public function getCertificateKeyUsages(): ?int {
        return $this->certificateKeyUsages;
    }

    /**
     * Gets the certificateRevokeStatus property value. Revoke status. Possible values are: none, pending, issued, failed, revoked.
     * @return CertificateRevocationStatus|null
    */
    public function getCertificateRevokeStatus(): ?CertificateRevocationStatus {
        return $this->certificateRevokeStatus;
    }

    /**
     * Gets the certificateRevokeStatusLastChangeDateTime property value. The time the revoke status was last changed
     * @return DateTime|null
    */
    public function getCertificateRevokeStatusLastChangeDateTime(): ?DateTime {
        return $this->certificateRevokeStatusLastChangeDateTime;
    }

    /**
     * Gets the certificateSerialNumber property value. Serial number
     * @return string|null
    */
    public function getCertificateSerialNumber(): ?string {
        return $this->certificateSerialNumber;
    }

    /**
     * Gets the certificateSubjectName property value. Certificate subject name
     * @return string|null
    */
    public function getCertificateSubjectName(): ?string {
        return $this->certificateSubjectName;
    }

    /**
     * Gets the certificateThumbprint property value. Thumbprint
     * @return string|null
    */
    public function getCertificateThumbprint(): ?string {
        return $this->certificateThumbprint;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'certificateExpirationDateTime' => function (ParseNode $n) use ($o) { $o->setCertificateExpirationDateTime($n->getDateTimeValue()); },
            'certificateExtendedKeyUsages' => function (ParseNode $n) use ($o) { $o->setCertificateExtendedKeyUsages($n->getStringValue()); },
            'certificateIssuanceDateTime' => function (ParseNode $n) use ($o) { $o->setCertificateIssuanceDateTime($n->getDateTimeValue()); },
            'certificateIssuerName' => function (ParseNode $n) use ($o) { $o->setCertificateIssuerName($n->getStringValue()); },
            'certificateKeyUsages' => function (ParseNode $n) use ($o) { $o->setCertificateKeyUsages($n->getIntegerValue()); },
            'certificateRevokeStatus' => function (ParseNode $n) use ($o) { $o->setCertificateRevokeStatus($n->getEnumValue(CertificateRevocationStatus::class)); },
            'certificateRevokeStatusLastChangeDateTime' => function (ParseNode $n) use ($o) { $o->setCertificateRevokeStatusLastChangeDateTime($n->getDateTimeValue()); },
            'certificateSerialNumber' => function (ParseNode $n) use ($o) { $o->setCertificateSerialNumber($n->getStringValue()); },
            'certificateSubjectName' => function (ParseNode $n) use ($o) { $o->setCertificateSubjectName($n->getStringValue()); },
            'certificateThumbprint' => function (ParseNode $n) use ($o) { $o->setCertificateThumbprint($n->getStringValue()); },
            'managedDeviceDisplayName' => function (ParseNode $n) use ($o) { $o->setManagedDeviceDisplayName($n->getStringValue()); },
            'userPrincipalName' => function (ParseNode $n) use ($o) { $o->setUserPrincipalName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the managedDeviceDisplayName property value. Device display name
     * @return string|null
    */
    public function getManagedDeviceDisplayName(): ?string {
        return $this->managedDeviceDisplayName;
    }

    /**
     * Gets the userPrincipalName property value. User principal name
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
        $writer->writeDateTimeValue('certificateExpirationDateTime', $this->certificateExpirationDateTime);
        $writer->writeStringValue('certificateExtendedKeyUsages', $this->certificateExtendedKeyUsages);
        $writer->writeDateTimeValue('certificateIssuanceDateTime', $this->certificateIssuanceDateTime);
        $writer->writeStringValue('certificateIssuerName', $this->certificateIssuerName);
        $writer->writeIntegerValue('certificateKeyUsages', $this->certificateKeyUsages);
        $writer->writeEnumValue('certificateRevokeStatus', $this->certificateRevokeStatus);
        $writer->writeDateTimeValue('certificateRevokeStatusLastChangeDateTime', $this->certificateRevokeStatusLastChangeDateTime);
        $writer->writeStringValue('certificateSerialNumber', $this->certificateSerialNumber);
        $writer->writeStringValue('certificateSubjectName', $this->certificateSubjectName);
        $writer->writeStringValue('certificateThumbprint', $this->certificateThumbprint);
        $writer->writeStringValue('managedDeviceDisplayName', $this->managedDeviceDisplayName);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
    }

    /**
     * Sets the certificateExpirationDateTime property value. Certificate expiry date
     *  @param DateTime|null $value Value to set for the certificateExpirationDateTime property.
    */
    public function setCertificateExpirationDateTime(?DateTime $value ): void {
        $this->certificateExpirationDateTime = $value;
    }

    /**
     * Sets the certificateExtendedKeyUsages property value. Enhanced Key Usage
     *  @param string|null $value Value to set for the certificateExtendedKeyUsages property.
    */
    public function setCertificateExtendedKeyUsages(?string $value ): void {
        $this->certificateExtendedKeyUsages = $value;
    }

    /**
     * Sets the certificateIssuanceDateTime property value. Issuance date
     *  @param DateTime|null $value Value to set for the certificateIssuanceDateTime property.
    */
    public function setCertificateIssuanceDateTime(?DateTime $value ): void {
        $this->certificateIssuanceDateTime = $value;
    }

    /**
     * Sets the certificateIssuerName property value. Issuer
     *  @param string|null $value Value to set for the certificateIssuerName property.
    */
    public function setCertificateIssuerName(?string $value ): void {
        $this->certificateIssuerName = $value;
    }

    /**
     * Sets the certificateKeyUsages property value. Key Usage
     *  @param int|null $value Value to set for the certificateKeyUsages property.
    */
    public function setCertificateKeyUsages(?int $value ): void {
        $this->certificateKeyUsages = $value;
    }

    /**
     * Sets the certificateRevokeStatus property value. Revoke status. Possible values are: none, pending, issued, failed, revoked.
     *  @param CertificateRevocationStatus|null $value Value to set for the certificateRevokeStatus property.
    */
    public function setCertificateRevokeStatus(?CertificateRevocationStatus $value ): void {
        $this->certificateRevokeStatus = $value;
    }

    /**
     * Sets the certificateRevokeStatusLastChangeDateTime property value. The time the revoke status was last changed
     *  @param DateTime|null $value Value to set for the certificateRevokeStatusLastChangeDateTime property.
    */
    public function setCertificateRevokeStatusLastChangeDateTime(?DateTime $value ): void {
        $this->certificateRevokeStatusLastChangeDateTime = $value;
    }

    /**
     * Sets the certificateSerialNumber property value. Serial number
     *  @param string|null $value Value to set for the certificateSerialNumber property.
    */
    public function setCertificateSerialNumber(?string $value ): void {
        $this->certificateSerialNumber = $value;
    }

    /**
     * Sets the certificateSubjectName property value. Certificate subject name
     *  @param string|null $value Value to set for the certificateSubjectName property.
    */
    public function setCertificateSubjectName(?string $value ): void {
        $this->certificateSubjectName = $value;
    }

    /**
     * Sets the certificateThumbprint property value. Thumbprint
     *  @param string|null $value Value to set for the certificateThumbprint property.
    */
    public function setCertificateThumbprint(?string $value ): void {
        $this->certificateThumbprint = $value;
    }

    /**
     * Sets the managedDeviceDisplayName property value. Device display name
     *  @param string|null $value Value to set for the managedDeviceDisplayName property.
    */
    public function setManagedDeviceDisplayName(?string $value ): void {
        $this->managedDeviceDisplayName = $value;
    }

    /**
     * Sets the userPrincipalName property value. User principal name
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

}

<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagedAllDeviceCertificateState extends Entity implements Parsable 
{
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
        $val = $this->getBackingStore()->get('certificateExpirationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificateExpirationDateTime'");
    }

    /**
     * Gets the certificateExtendedKeyUsages property value. Enhanced Key Usage
     * @return string|null
    */
    public function getCertificateExtendedKeyUsages(): ?string {
        $val = $this->getBackingStore()->get('certificateExtendedKeyUsages');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificateExtendedKeyUsages'");
    }

    /**
     * Gets the certificateIssuanceDateTime property value. Issuance date
     * @return DateTime|null
    */
    public function getCertificateIssuanceDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('certificateIssuanceDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificateIssuanceDateTime'");
    }

    /**
     * Gets the certificateIssuerName property value. Issuer
     * @return string|null
    */
    public function getCertificateIssuerName(): ?string {
        $val = $this->getBackingStore()->get('certificateIssuerName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificateIssuerName'");
    }

    /**
     * Gets the certificateKeyUsages property value. Key Usage
     * @return int|null
    */
    public function getCertificateKeyUsages(): ?int {
        $val = $this->getBackingStore()->get('certificateKeyUsages');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificateKeyUsages'");
    }

    /**
     * Gets the certificateRevokeStatus property value. Certificate Revocation Status.
     * @return CertificateRevocationStatus|null
    */
    public function getCertificateRevokeStatus(): ?CertificateRevocationStatus {
        $val = $this->getBackingStore()->get('certificateRevokeStatus');
        if (is_null($val) || $val instanceof CertificateRevocationStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificateRevokeStatus'");
    }

    /**
     * Gets the certificateRevokeStatusLastChangeDateTime property value. The time the revoke status was last changed
     * @return DateTime|null
    */
    public function getCertificateRevokeStatusLastChangeDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('certificateRevokeStatusLastChangeDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificateRevokeStatusLastChangeDateTime'");
    }

    /**
     * Gets the certificateSerialNumber property value. Serial number
     * @return string|null
    */
    public function getCertificateSerialNumber(): ?string {
        $val = $this->getBackingStore()->get('certificateSerialNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificateSerialNumber'");
    }

    /**
     * Gets the certificateSubjectName property value. Certificate subject name
     * @return string|null
    */
    public function getCertificateSubjectName(): ?string {
        $val = $this->getBackingStore()->get('certificateSubjectName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificateSubjectName'");
    }

    /**
     * Gets the certificateThumbprint property value. Thumbprint
     * @return string|null
    */
    public function getCertificateThumbprint(): ?string {
        $val = $this->getBackingStore()->get('certificateThumbprint');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificateThumbprint'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'certificateExpirationDateTime' => fn(ParseNode $n) => $o->setCertificateExpirationDateTime($n->getDateTimeValue()),
            'certificateExtendedKeyUsages' => fn(ParseNode $n) => $o->setCertificateExtendedKeyUsages($n->getStringValue()),
            'certificateIssuanceDateTime' => fn(ParseNode $n) => $o->setCertificateIssuanceDateTime($n->getDateTimeValue()),
            'certificateIssuerName' => fn(ParseNode $n) => $o->setCertificateIssuerName($n->getStringValue()),
            'certificateKeyUsages' => fn(ParseNode $n) => $o->setCertificateKeyUsages($n->getIntegerValue()),
            'certificateRevokeStatus' => fn(ParseNode $n) => $o->setCertificateRevokeStatus($n->getEnumValue(CertificateRevocationStatus::class)),
            'certificateRevokeStatusLastChangeDateTime' => fn(ParseNode $n) => $o->setCertificateRevokeStatusLastChangeDateTime($n->getDateTimeValue()),
            'certificateSerialNumber' => fn(ParseNode $n) => $o->setCertificateSerialNumber($n->getStringValue()),
            'certificateSubjectName' => fn(ParseNode $n) => $o->setCertificateSubjectName($n->getStringValue()),
            'certificateThumbprint' => fn(ParseNode $n) => $o->setCertificateThumbprint($n->getStringValue()),
            'managedDeviceDisplayName' => fn(ParseNode $n) => $o->setManagedDeviceDisplayName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the managedDeviceDisplayName property value. Device display name
     * @return string|null
    */
    public function getManagedDeviceDisplayName(): ?string {
        $val = $this->getBackingStore()->get('managedDeviceDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedDeviceDisplayName'");
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
     * Gets the userPrincipalName property value. User principal name
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
        $writer->writeDateTimeValue('certificateExpirationDateTime', $this->getCertificateExpirationDateTime());
        $writer->writeStringValue('certificateExtendedKeyUsages', $this->getCertificateExtendedKeyUsages());
        $writer->writeDateTimeValue('certificateIssuanceDateTime', $this->getCertificateIssuanceDateTime());
        $writer->writeStringValue('certificateIssuerName', $this->getCertificateIssuerName());
        $writer->writeIntegerValue('certificateKeyUsages', $this->getCertificateKeyUsages());
        $writer->writeEnumValue('certificateRevokeStatus', $this->getCertificateRevokeStatus());
        $writer->writeDateTimeValue('certificateRevokeStatusLastChangeDateTime', $this->getCertificateRevokeStatusLastChangeDateTime());
        $writer->writeStringValue('certificateSerialNumber', $this->getCertificateSerialNumber());
        $writer->writeStringValue('certificateSubjectName', $this->getCertificateSubjectName());
        $writer->writeStringValue('certificateThumbprint', $this->getCertificateThumbprint());
        $writer->writeStringValue('managedDeviceDisplayName', $this->getManagedDeviceDisplayName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
    }

    /**
     * Sets the certificateExpirationDateTime property value. Certificate expiry date
     * @param DateTime|null $value Value to set for the certificateExpirationDateTime property.
    */
    public function setCertificateExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('certificateExpirationDateTime', $value);
    }

    /**
     * Sets the certificateExtendedKeyUsages property value. Enhanced Key Usage
     * @param string|null $value Value to set for the certificateExtendedKeyUsages property.
    */
    public function setCertificateExtendedKeyUsages(?string $value): void {
        $this->getBackingStore()->set('certificateExtendedKeyUsages', $value);
    }

    /**
     * Sets the certificateIssuanceDateTime property value. Issuance date
     * @param DateTime|null $value Value to set for the certificateIssuanceDateTime property.
    */
    public function setCertificateIssuanceDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('certificateIssuanceDateTime', $value);
    }

    /**
     * Sets the certificateIssuerName property value. Issuer
     * @param string|null $value Value to set for the certificateIssuerName property.
    */
    public function setCertificateIssuerName(?string $value): void {
        $this->getBackingStore()->set('certificateIssuerName', $value);
    }

    /**
     * Sets the certificateKeyUsages property value. Key Usage
     * @param int|null $value Value to set for the certificateKeyUsages property.
    */
    public function setCertificateKeyUsages(?int $value): void {
        $this->getBackingStore()->set('certificateKeyUsages', $value);
    }

    /**
     * Sets the certificateRevokeStatus property value. Certificate Revocation Status.
     * @param CertificateRevocationStatus|null $value Value to set for the certificateRevokeStatus property.
    */
    public function setCertificateRevokeStatus(?CertificateRevocationStatus $value): void {
        $this->getBackingStore()->set('certificateRevokeStatus', $value);
    }

    /**
     * Sets the certificateRevokeStatusLastChangeDateTime property value. The time the revoke status was last changed
     * @param DateTime|null $value Value to set for the certificateRevokeStatusLastChangeDateTime property.
    */
    public function setCertificateRevokeStatusLastChangeDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('certificateRevokeStatusLastChangeDateTime', $value);
    }

    /**
     * Sets the certificateSerialNumber property value. Serial number
     * @param string|null $value Value to set for the certificateSerialNumber property.
    */
    public function setCertificateSerialNumber(?string $value): void {
        $this->getBackingStore()->set('certificateSerialNumber', $value);
    }

    /**
     * Sets the certificateSubjectName property value. Certificate subject name
     * @param string|null $value Value to set for the certificateSubjectName property.
    */
    public function setCertificateSubjectName(?string $value): void {
        $this->getBackingStore()->set('certificateSubjectName', $value);
    }

    /**
     * Sets the certificateThumbprint property value. Thumbprint
     * @param string|null $value Value to set for the certificateThumbprint property.
    */
    public function setCertificateThumbprint(?string $value): void {
        $this->getBackingStore()->set('certificateThumbprint', $value);
    }

    /**
     * Sets the managedDeviceDisplayName property value. Device display name
     * @param string|null $value Value to set for the managedDeviceDisplayName property.
    */
    public function setManagedDeviceDisplayName(?string $value): void {
        $this->getBackingStore()->set('managedDeviceDisplayName', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the userPrincipalName property value. User principal name
     * @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

}

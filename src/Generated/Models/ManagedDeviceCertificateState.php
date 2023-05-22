<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagedDeviceCertificateState extends Entity implements Parsable 
{
    /**
     * Instantiates a new managedDeviceCertificateState and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedDeviceCertificateState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedDeviceCertificateState {
        return new ManagedDeviceCertificateState();
    }

    /**
     * Gets the certificateEnhancedKeyUsage property value. Extended key usage
     * @return string|null
    */
    public function getCertificateEnhancedKeyUsage(): ?string {
        return $this->getBackingStore()->get('certificateEnhancedKeyUsage');
    }

    /**
     * Gets the certificateErrorCode property value. Error code
     * @return int|null
    */
    public function getCertificateErrorCode(): ?int {
        return $this->getBackingStore()->get('certificateErrorCode');
    }

    /**
     * Gets the certificateExpirationDateTime property value. Certificate expiry date
     * @return DateTime|null
    */
    public function getCertificateExpirationDateTime(): ?DateTime {
        return $this->getBackingStore()->get('certificateExpirationDateTime');
    }

    /**
     * Gets the certificateIssuanceDateTime property value. Issuance date
     * @return DateTime|null
    */
    public function getCertificateIssuanceDateTime(): ?DateTime {
        return $this->getBackingStore()->get('certificateIssuanceDateTime');
    }

    /**
     * Gets the certificateIssuanceState property value. Certificate Issuance State Options.
     * @return CertificateIssuanceStates|null
    */
    public function getCertificateIssuanceState(): ?CertificateIssuanceStates {
        return $this->getBackingStore()->get('certificateIssuanceState');
    }

    /**
     * Gets the certificateIssuer property value. Issuer
     * @return string|null
    */
    public function getCertificateIssuer(): ?string {
        return $this->getBackingStore()->get('certificateIssuer');
    }

    /**
     * Gets the certificateKeyLength property value. Key length
     * @return int|null
    */
    public function getCertificateKeyLength(): ?int {
        return $this->getBackingStore()->get('certificateKeyLength');
    }

    /**
     * Gets the certificateKeyStorageProvider property value. Key Storage Provider (KSP) Import Options.
     * @return KeyStorageProviderOption|null
    */
    public function getCertificateKeyStorageProvider(): ?KeyStorageProviderOption {
        return $this->getBackingStore()->get('certificateKeyStorageProvider');
    }

    /**
     * Gets the certificateKeyUsage property value. Key Usage Options.
     * @return KeyUsages|null
    */
    public function getCertificateKeyUsage(): ?KeyUsages {
        return $this->getBackingStore()->get('certificateKeyUsage');
    }

    /**
     * Gets the certificateLastIssuanceStateChangedDateTime property value. Last certificate issuance state change
     * @return DateTime|null
    */
    public function getCertificateLastIssuanceStateChangedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('certificateLastIssuanceStateChangedDateTime');
    }

    /**
     * Gets the certificateProfileDisplayName property value. Certificate profile display name
     * @return string|null
    */
    public function getCertificateProfileDisplayName(): ?string {
        return $this->getBackingStore()->get('certificateProfileDisplayName');
    }

    /**
     * Gets the certificateRevokeStatus property value. Certificate Revocation Status.
     * @return CertificateRevocationStatus|null
    */
    public function getCertificateRevokeStatus(): ?CertificateRevocationStatus {
        return $this->getBackingStore()->get('certificateRevokeStatus');
    }

    /**
     * Gets the certificateSerialNumber property value. Serial number
     * @return string|null
    */
    public function getCertificateSerialNumber(): ?string {
        return $this->getBackingStore()->get('certificateSerialNumber');
    }

    /**
     * Gets the certificateSubjectAlternativeNameFormat property value. Subject Alternative Name Options.
     * @return SubjectAlternativeNameType|null
    */
    public function getCertificateSubjectAlternativeNameFormat(): ?SubjectAlternativeNameType {
        return $this->getBackingStore()->get('certificateSubjectAlternativeNameFormat');
    }

    /**
     * Gets the certificateSubjectAlternativeNameFormatString property value. Subject alternative name format string for custom formats
     * @return string|null
    */
    public function getCertificateSubjectAlternativeNameFormatString(): ?string {
        return $this->getBackingStore()->get('certificateSubjectAlternativeNameFormatString');
    }

    /**
     * Gets the certificateSubjectNameFormat property value. Subject Name Format Options.
     * @return SubjectNameFormat|null
    */
    public function getCertificateSubjectNameFormat(): ?SubjectNameFormat {
        return $this->getBackingStore()->get('certificateSubjectNameFormat');
    }

    /**
     * Gets the certificateSubjectNameFormatString property value. Subject name format string for custom subject name formats
     * @return string|null
    */
    public function getCertificateSubjectNameFormatString(): ?string {
        return $this->getBackingStore()->get('certificateSubjectNameFormatString');
    }

    /**
     * Gets the certificateThumbprint property value. Thumbprint
     * @return string|null
    */
    public function getCertificateThumbprint(): ?string {
        return $this->getBackingStore()->get('certificateThumbprint');
    }

    /**
     * Gets the certificateValidityPeriod property value. Validity period
     * @return int|null
    */
    public function getCertificateValidityPeriod(): ?int {
        return $this->getBackingStore()->get('certificateValidityPeriod');
    }

    /**
     * Gets the certificateValidityPeriodUnits property value. Certificate Validity Period Options.
     * @return CertificateValidityPeriodScale|null
    */
    public function getCertificateValidityPeriodUnits(): ?CertificateValidityPeriodScale {
        return $this->getBackingStore()->get('certificateValidityPeriodUnits');
    }

    /**
     * Gets the deviceDisplayName property value. Device display name
     * @return string|null
    */
    public function getDeviceDisplayName(): ?string {
        return $this->getBackingStore()->get('deviceDisplayName');
    }

    /**
     * Gets the devicePlatform property value. Supported platform types.
     * @return DevicePlatformType|null
    */
    public function getDevicePlatform(): ?DevicePlatformType {
        return $this->getBackingStore()->get('devicePlatform');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'certificateEnhancedKeyUsage' => fn(ParseNode $n) => $o->setCertificateEnhancedKeyUsage($n->getStringValue()),
            'certificateErrorCode' => fn(ParseNode $n) => $o->setCertificateErrorCode($n->getIntegerValue()),
            'certificateExpirationDateTime' => fn(ParseNode $n) => $o->setCertificateExpirationDateTime($n->getDateTimeValue()),
            'certificateIssuanceDateTime' => fn(ParseNode $n) => $o->setCertificateIssuanceDateTime($n->getDateTimeValue()),
            'certificateIssuanceState' => fn(ParseNode $n) => $o->setCertificateIssuanceState($n->getEnumValue(CertificateIssuanceStates::class)),
            'certificateIssuer' => fn(ParseNode $n) => $o->setCertificateIssuer($n->getStringValue()),
            'certificateKeyLength' => fn(ParseNode $n) => $o->setCertificateKeyLength($n->getIntegerValue()),
            'certificateKeyStorageProvider' => fn(ParseNode $n) => $o->setCertificateKeyStorageProvider($n->getEnumValue(KeyStorageProviderOption::class)),
            'certificateKeyUsage' => fn(ParseNode $n) => $o->setCertificateKeyUsage($n->getEnumValue(KeyUsages::class)),
            'certificateLastIssuanceStateChangedDateTime' => fn(ParseNode $n) => $o->setCertificateLastIssuanceStateChangedDateTime($n->getDateTimeValue()),
            'certificateProfileDisplayName' => fn(ParseNode $n) => $o->setCertificateProfileDisplayName($n->getStringValue()),
            'certificateRevokeStatus' => fn(ParseNode $n) => $o->setCertificateRevokeStatus($n->getEnumValue(CertificateRevocationStatus::class)),
            'certificateSerialNumber' => fn(ParseNode $n) => $o->setCertificateSerialNumber($n->getStringValue()),
            'certificateSubjectAlternativeNameFormat' => fn(ParseNode $n) => $o->setCertificateSubjectAlternativeNameFormat($n->getEnumValue(SubjectAlternativeNameType::class)),
            'certificateSubjectAlternativeNameFormatString' => fn(ParseNode $n) => $o->setCertificateSubjectAlternativeNameFormatString($n->getStringValue()),
            'certificateSubjectNameFormat' => fn(ParseNode $n) => $o->setCertificateSubjectNameFormat($n->getEnumValue(SubjectNameFormat::class)),
            'certificateSubjectNameFormatString' => fn(ParseNode $n) => $o->setCertificateSubjectNameFormatString($n->getStringValue()),
            'certificateThumbprint' => fn(ParseNode $n) => $o->setCertificateThumbprint($n->getStringValue()),
            'certificateValidityPeriod' => fn(ParseNode $n) => $o->setCertificateValidityPeriod($n->getIntegerValue()),
            'certificateValidityPeriodUnits' => fn(ParseNode $n) => $o->setCertificateValidityPeriodUnits($n->getEnumValue(CertificateValidityPeriodScale::class)),
            'deviceDisplayName' => fn(ParseNode $n) => $o->setDeviceDisplayName($n->getStringValue()),
            'devicePlatform' => fn(ParseNode $n) => $o->setDevicePlatform($n->getEnumValue(DevicePlatformType::class)),
            'lastCertificateStateChangeDateTime' => fn(ParseNode $n) => $o->setLastCertificateStateChangeDateTime($n->getDateTimeValue()),
            'userDisplayName' => fn(ParseNode $n) => $o->setUserDisplayName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastCertificateStateChangeDateTime property value. Last certificate issuance state change
     * @return DateTime|null
    */
    public function getLastCertificateStateChangeDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastCertificateStateChangeDateTime');
    }

    /**
     * Gets the userDisplayName property value. User display name
     * @return string|null
    */
    public function getUserDisplayName(): ?string {
        return $this->getBackingStore()->get('userDisplayName');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('certificateEnhancedKeyUsage', $this->getCertificateEnhancedKeyUsage());
        $writer->writeIntegerValue('certificateErrorCode', $this->getCertificateErrorCode());
        $writer->writeDateTimeValue('certificateExpirationDateTime', $this->getCertificateExpirationDateTime());
        $writer->writeDateTimeValue('certificateIssuanceDateTime', $this->getCertificateIssuanceDateTime());
        $writer->writeEnumValue('certificateIssuanceState', $this->getCertificateIssuanceState());
        $writer->writeStringValue('certificateIssuer', $this->getCertificateIssuer());
        $writer->writeIntegerValue('certificateKeyLength', $this->getCertificateKeyLength());
        $writer->writeEnumValue('certificateKeyStorageProvider', $this->getCertificateKeyStorageProvider());
        $writer->writeEnumValue('certificateKeyUsage', $this->getCertificateKeyUsage());
        $writer->writeDateTimeValue('certificateLastIssuanceStateChangedDateTime', $this->getCertificateLastIssuanceStateChangedDateTime());
        $writer->writeStringValue('certificateProfileDisplayName', $this->getCertificateProfileDisplayName());
        $writer->writeEnumValue('certificateRevokeStatus', $this->getCertificateRevokeStatus());
        $writer->writeStringValue('certificateSerialNumber', $this->getCertificateSerialNumber());
        $writer->writeEnumValue('certificateSubjectAlternativeNameFormat', $this->getCertificateSubjectAlternativeNameFormat());
        $writer->writeStringValue('certificateSubjectAlternativeNameFormatString', $this->getCertificateSubjectAlternativeNameFormatString());
        $writer->writeEnumValue('certificateSubjectNameFormat', $this->getCertificateSubjectNameFormat());
        $writer->writeStringValue('certificateSubjectNameFormatString', $this->getCertificateSubjectNameFormatString());
        $writer->writeStringValue('certificateThumbprint', $this->getCertificateThumbprint());
        $writer->writeIntegerValue('certificateValidityPeriod', $this->getCertificateValidityPeriod());
        $writer->writeEnumValue('certificateValidityPeriodUnits', $this->getCertificateValidityPeriodUnits());
        $writer->writeStringValue('deviceDisplayName', $this->getDeviceDisplayName());
        $writer->writeEnumValue('devicePlatform', $this->getDevicePlatform());
        $writer->writeDateTimeValue('lastCertificateStateChangeDateTime', $this->getLastCertificateStateChangeDateTime());
        $writer->writeStringValue('userDisplayName', $this->getUserDisplayName());
    }

    /**
     * Sets the certificateEnhancedKeyUsage property value. Extended key usage
     * @param string|null $value Value to set for the certificateEnhancedKeyUsage property.
    */
    public function setCertificateEnhancedKeyUsage(?string $value): void {
        $this->getBackingStore()->set('certificateEnhancedKeyUsage', $value);
    }

    /**
     * Sets the certificateErrorCode property value. Error code
     * @param int|null $value Value to set for the certificateErrorCode property.
    */
    public function setCertificateErrorCode(?int $value): void {
        $this->getBackingStore()->set('certificateErrorCode', $value);
    }

    /**
     * Sets the certificateExpirationDateTime property value. Certificate expiry date
     * @param DateTime|null $value Value to set for the certificateExpirationDateTime property.
    */
    public function setCertificateExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('certificateExpirationDateTime', $value);
    }

    /**
     * Sets the certificateIssuanceDateTime property value. Issuance date
     * @param DateTime|null $value Value to set for the certificateIssuanceDateTime property.
    */
    public function setCertificateIssuanceDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('certificateIssuanceDateTime', $value);
    }

    /**
     * Sets the certificateIssuanceState property value. Certificate Issuance State Options.
     * @param CertificateIssuanceStates|null $value Value to set for the certificateIssuanceState property.
    */
    public function setCertificateIssuanceState(?CertificateIssuanceStates $value): void {
        $this->getBackingStore()->set('certificateIssuanceState', $value);
    }

    /**
     * Sets the certificateIssuer property value. Issuer
     * @param string|null $value Value to set for the certificateIssuer property.
    */
    public function setCertificateIssuer(?string $value): void {
        $this->getBackingStore()->set('certificateIssuer', $value);
    }

    /**
     * Sets the certificateKeyLength property value. Key length
     * @param int|null $value Value to set for the certificateKeyLength property.
    */
    public function setCertificateKeyLength(?int $value): void {
        $this->getBackingStore()->set('certificateKeyLength', $value);
    }

    /**
     * Sets the certificateKeyStorageProvider property value. Key Storage Provider (KSP) Import Options.
     * @param KeyStorageProviderOption|null $value Value to set for the certificateKeyStorageProvider property.
    */
    public function setCertificateKeyStorageProvider(?KeyStorageProviderOption $value): void {
        $this->getBackingStore()->set('certificateKeyStorageProvider', $value);
    }

    /**
     * Sets the certificateKeyUsage property value. Key Usage Options.
     * @param KeyUsages|null $value Value to set for the certificateKeyUsage property.
    */
    public function setCertificateKeyUsage(?KeyUsages $value): void {
        $this->getBackingStore()->set('certificateKeyUsage', $value);
    }

    /**
     * Sets the certificateLastIssuanceStateChangedDateTime property value. Last certificate issuance state change
     * @param DateTime|null $value Value to set for the certificateLastIssuanceStateChangedDateTime property.
    */
    public function setCertificateLastIssuanceStateChangedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('certificateLastIssuanceStateChangedDateTime', $value);
    }

    /**
     * Sets the certificateProfileDisplayName property value. Certificate profile display name
     * @param string|null $value Value to set for the certificateProfileDisplayName property.
    */
    public function setCertificateProfileDisplayName(?string $value): void {
        $this->getBackingStore()->set('certificateProfileDisplayName', $value);
    }

    /**
     * Sets the certificateRevokeStatus property value. Certificate Revocation Status.
     * @param CertificateRevocationStatus|null $value Value to set for the certificateRevokeStatus property.
    */
    public function setCertificateRevokeStatus(?CertificateRevocationStatus $value): void {
        $this->getBackingStore()->set('certificateRevokeStatus', $value);
    }

    /**
     * Sets the certificateSerialNumber property value. Serial number
     * @param string|null $value Value to set for the certificateSerialNumber property.
    */
    public function setCertificateSerialNumber(?string $value): void {
        $this->getBackingStore()->set('certificateSerialNumber', $value);
    }

    /**
     * Sets the certificateSubjectAlternativeNameFormat property value. Subject Alternative Name Options.
     * @param SubjectAlternativeNameType|null $value Value to set for the certificateSubjectAlternativeNameFormat property.
    */
    public function setCertificateSubjectAlternativeNameFormat(?SubjectAlternativeNameType $value): void {
        $this->getBackingStore()->set('certificateSubjectAlternativeNameFormat', $value);
    }

    /**
     * Sets the certificateSubjectAlternativeNameFormatString property value. Subject alternative name format string for custom formats
     * @param string|null $value Value to set for the certificateSubjectAlternativeNameFormatString property.
    */
    public function setCertificateSubjectAlternativeNameFormatString(?string $value): void {
        $this->getBackingStore()->set('certificateSubjectAlternativeNameFormatString', $value);
    }

    /**
     * Sets the certificateSubjectNameFormat property value. Subject Name Format Options.
     * @param SubjectNameFormat|null $value Value to set for the certificateSubjectNameFormat property.
    */
    public function setCertificateSubjectNameFormat(?SubjectNameFormat $value): void {
        $this->getBackingStore()->set('certificateSubjectNameFormat', $value);
    }

    /**
     * Sets the certificateSubjectNameFormatString property value. Subject name format string for custom subject name formats
     * @param string|null $value Value to set for the certificateSubjectNameFormatString property.
    */
    public function setCertificateSubjectNameFormatString(?string $value): void {
        $this->getBackingStore()->set('certificateSubjectNameFormatString', $value);
    }

    /**
     * Sets the certificateThumbprint property value. Thumbprint
     * @param string|null $value Value to set for the certificateThumbprint property.
    */
    public function setCertificateThumbprint(?string $value): void {
        $this->getBackingStore()->set('certificateThumbprint', $value);
    }

    /**
     * Sets the certificateValidityPeriod property value. Validity period
     * @param int|null $value Value to set for the certificateValidityPeriod property.
    */
    public function setCertificateValidityPeriod(?int $value): void {
        $this->getBackingStore()->set('certificateValidityPeriod', $value);
    }

    /**
     * Sets the certificateValidityPeriodUnits property value. Certificate Validity Period Options.
     * @param CertificateValidityPeriodScale|null $value Value to set for the certificateValidityPeriodUnits property.
    */
    public function setCertificateValidityPeriodUnits(?CertificateValidityPeriodScale $value): void {
        $this->getBackingStore()->set('certificateValidityPeriodUnits', $value);
    }

    /**
     * Sets the deviceDisplayName property value. Device display name
     * @param string|null $value Value to set for the deviceDisplayName property.
    */
    public function setDeviceDisplayName(?string $value): void {
        $this->getBackingStore()->set('deviceDisplayName', $value);
    }

    /**
     * Sets the devicePlatform property value. Supported platform types.
     * @param DevicePlatformType|null $value Value to set for the devicePlatform property.
    */
    public function setDevicePlatform(?DevicePlatformType $value): void {
        $this->getBackingStore()->set('devicePlatform', $value);
    }

    /**
     * Sets the lastCertificateStateChangeDateTime property value. Last certificate issuance state change
     * @param DateTime|null $value Value to set for the lastCertificateStateChangeDateTime property.
    */
    public function setLastCertificateStateChangeDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastCertificateStateChangeDateTime', $value);
    }

    /**
     * Sets the userDisplayName property value. User display name
     * @param string|null $value Value to set for the userDisplayName property.
    */
    public function setUserDisplayName(?string $value): void {
        $this->getBackingStore()->set('userDisplayName', $value);
    }

}

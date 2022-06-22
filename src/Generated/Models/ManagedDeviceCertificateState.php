<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagedDeviceCertificateState extends Entity implements Parsable 
{
    /**
     * @var string|null $certificateEnhancedKeyUsage Extended key usage
    */
    private ?string $certificateEnhancedKeyUsage = null;
    
    /**
     * @var int|null $certificateErrorCode Error code
    */
    private ?int $certificateErrorCode = null;
    
    /**
     * @var DateTime|null $certificateExpirationDateTime Certificate expiry date
    */
    private ?DateTime $certificateExpirationDateTime = null;
    
    /**
     * @var DateTime|null $certificateIssuanceDateTime Issuance date
    */
    private ?DateTime $certificateIssuanceDateTime = null;
    
    /**
     * @var CertificateIssuanceStates|null $certificateIssuanceState Issuance State. Possible values are: unknown, challengeIssued, challengeIssueFailed, requestCreationFailed, requestSubmitFailed, challengeValidationSucceeded, challengeValidationFailed, issueFailed, issuePending, issued, responseProcessingFailed, responsePending, enrollmentSucceeded, enrollmentNotNeeded, revoked, removedFromCollection, renewVerified, installFailed, installed, deleteFailed, deleted, renewalRequested, requested.
    */
    private ?CertificateIssuanceStates $certificateIssuanceState = null;
    
    /**
     * @var string|null $certificateIssuer Issuer
    */
    private ?string $certificateIssuer = null;
    
    /**
     * @var int|null $certificateKeyLength Key length
    */
    private ?int $certificateKeyLength = null;
    
    /**
     * @var KeyStorageProviderOption|null $certificateKeyStorageProvider Key Storage Provider. Possible values are: useTpmKspOtherwiseUseSoftwareKsp, useTpmKspOtherwiseFail, usePassportForWorkKspOtherwiseFail, useSoftwareKsp.
    */
    private ?KeyStorageProviderOption $certificateKeyStorageProvider = null;
    
    /**
     * @var KeyUsages|null $certificateKeyUsage Key usage. Possible values are: keyEncipherment, digitalSignature.
    */
    private ?KeyUsages $certificateKeyUsage = null;
    
    /**
     * @var DateTime|null $certificateLastIssuanceStateChangedDateTime Last certificate issuance state change
    */
    private ?DateTime $certificateLastIssuanceStateChangedDateTime = null;
    
    /**
     * @var string|null $certificateProfileDisplayName Certificate profile display name
    */
    private ?string $certificateProfileDisplayName = null;
    
    /**
     * @var CertificateRevocationStatus|null $certificateRevokeStatus Revoke status. Possible values are: none, pending, issued, failed, revoked.
    */
    private ?CertificateRevocationStatus $certificateRevokeStatus = null;
    
    /**
     * @var string|null $certificateSerialNumber Serial number
    */
    private ?string $certificateSerialNumber = null;
    
    /**
     * @var SubjectAlternativeNameType|null $certificateSubjectAlternativeNameFormat Subject alternative name format. Possible values are: none, emailAddress, userPrincipalName, customAzureADAttribute, domainNameService, universalResourceIdentifier.
    */
    private ?SubjectAlternativeNameType $certificateSubjectAlternativeNameFormat = null;
    
    /**
     * @var string|null $certificateSubjectAlternativeNameFormatString Subject alternative name format string for custom formats
    */
    private ?string $certificateSubjectAlternativeNameFormatString = null;
    
    /**
     * @var SubjectNameFormat|null $certificateSubjectNameFormat Subject name format. Possible values are: commonName, commonNameIncludingEmail, commonNameAsEmail, custom, commonNameAsIMEI, commonNameAsSerialNumber, commonNameAsAadDeviceId, commonNameAsIntuneDeviceId, commonNameAsDurableDeviceId.
    */
    private ?SubjectNameFormat $certificateSubjectNameFormat = null;
    
    /**
     * @var string|null $certificateSubjectNameFormatString Subject name format string for custom subject name formats
    */
    private ?string $certificateSubjectNameFormatString = null;
    
    /**
     * @var string|null $certificateThumbprint Thumbprint
    */
    private ?string $certificateThumbprint = null;
    
    /**
     * @var int|null $certificateValidityPeriod Validity period
    */
    private ?int $certificateValidityPeriod = null;
    
    /**
     * @var CertificateValidityPeriodScale|null $certificateValidityPeriodUnits Validity period units. Possible values are: days, months, years.
    */
    private ?CertificateValidityPeriodScale $certificateValidityPeriodUnits = null;
    
    /**
     * @var string|null $deviceDisplayName Device display name
    */
    private ?string $deviceDisplayName = null;
    
    /**
     * @var DevicePlatformType|null $devicePlatform Device platform. Possible values are: android, androidForWork, iOS, macOS, windowsPhone81, windows81AndLater, windows10AndLater, androidWorkProfile, unknown, androidAOSP.
    */
    private ?DevicePlatformType $devicePlatform = null;
    
    /**
     * @var DateTime|null $lastCertificateStateChangeDateTime Last certificate issuance state change
    */
    private ?DateTime $lastCertificateStateChangeDateTime = null;
    
    /**
     * @var string|null $userDisplayName User display name
    */
    private ?string $userDisplayName = null;
    
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
        return $this->certificateEnhancedKeyUsage;
    }

    /**
     * Gets the certificateErrorCode property value. Error code
     * @return int|null
    */
    public function getCertificateErrorCode(): ?int {
        return $this->certificateErrorCode;
    }

    /**
     * Gets the certificateExpirationDateTime property value. Certificate expiry date
     * @return DateTime|null
    */
    public function getCertificateExpirationDateTime(): ?DateTime {
        return $this->certificateExpirationDateTime;
    }

    /**
     * Gets the certificateIssuanceDateTime property value. Issuance date
     * @return DateTime|null
    */
    public function getCertificateIssuanceDateTime(): ?DateTime {
        return $this->certificateIssuanceDateTime;
    }

    /**
     * Gets the certificateIssuanceState property value. Issuance State. Possible values are: unknown, challengeIssued, challengeIssueFailed, requestCreationFailed, requestSubmitFailed, challengeValidationSucceeded, challengeValidationFailed, issueFailed, issuePending, issued, responseProcessingFailed, responsePending, enrollmentSucceeded, enrollmentNotNeeded, revoked, removedFromCollection, renewVerified, installFailed, installed, deleteFailed, deleted, renewalRequested, requested.
     * @return CertificateIssuanceStates|null
    */
    public function getCertificateIssuanceState(): ?CertificateIssuanceStates {
        return $this->certificateIssuanceState;
    }

    /**
     * Gets the certificateIssuer property value. Issuer
     * @return string|null
    */
    public function getCertificateIssuer(): ?string {
        return $this->certificateIssuer;
    }

    /**
     * Gets the certificateKeyLength property value. Key length
     * @return int|null
    */
    public function getCertificateKeyLength(): ?int {
        return $this->certificateKeyLength;
    }

    /**
     * Gets the certificateKeyStorageProvider property value. Key Storage Provider. Possible values are: useTpmKspOtherwiseUseSoftwareKsp, useTpmKspOtherwiseFail, usePassportForWorkKspOtherwiseFail, useSoftwareKsp.
     * @return KeyStorageProviderOption|null
    */
    public function getCertificateKeyStorageProvider(): ?KeyStorageProviderOption {
        return $this->certificateKeyStorageProvider;
    }

    /**
     * Gets the certificateKeyUsage property value. Key usage. Possible values are: keyEncipherment, digitalSignature.
     * @return KeyUsages|null
    */
    public function getCertificateKeyUsage(): ?KeyUsages {
        return $this->certificateKeyUsage;
    }

    /**
     * Gets the certificateLastIssuanceStateChangedDateTime property value. Last certificate issuance state change
     * @return DateTime|null
    */
    public function getCertificateLastIssuanceStateChangedDateTime(): ?DateTime {
        return $this->certificateLastIssuanceStateChangedDateTime;
    }

    /**
     * Gets the certificateProfileDisplayName property value. Certificate profile display name
     * @return string|null
    */
    public function getCertificateProfileDisplayName(): ?string {
        return $this->certificateProfileDisplayName;
    }

    /**
     * Gets the certificateRevokeStatus property value. Revoke status. Possible values are: none, pending, issued, failed, revoked.
     * @return CertificateRevocationStatus|null
    */
    public function getCertificateRevokeStatus(): ?CertificateRevocationStatus {
        return $this->certificateRevokeStatus;
    }

    /**
     * Gets the certificateSerialNumber property value. Serial number
     * @return string|null
    */
    public function getCertificateSerialNumber(): ?string {
        return $this->certificateSerialNumber;
    }

    /**
     * Gets the certificateSubjectAlternativeNameFormat property value. Subject alternative name format. Possible values are: none, emailAddress, userPrincipalName, customAzureADAttribute, domainNameService, universalResourceIdentifier.
     * @return SubjectAlternativeNameType|null
    */
    public function getCertificateSubjectAlternativeNameFormat(): ?SubjectAlternativeNameType {
        return $this->certificateSubjectAlternativeNameFormat;
    }

    /**
     * Gets the certificateSubjectAlternativeNameFormatString property value. Subject alternative name format string for custom formats
     * @return string|null
    */
    public function getCertificateSubjectAlternativeNameFormatString(): ?string {
        return $this->certificateSubjectAlternativeNameFormatString;
    }

    /**
     * Gets the certificateSubjectNameFormat property value. Subject name format. Possible values are: commonName, commonNameIncludingEmail, commonNameAsEmail, custom, commonNameAsIMEI, commonNameAsSerialNumber, commonNameAsAadDeviceId, commonNameAsIntuneDeviceId, commonNameAsDurableDeviceId.
     * @return SubjectNameFormat|null
    */
    public function getCertificateSubjectNameFormat(): ?SubjectNameFormat {
        return $this->certificateSubjectNameFormat;
    }

    /**
     * Gets the certificateSubjectNameFormatString property value. Subject name format string for custom subject name formats
     * @return string|null
    */
    public function getCertificateSubjectNameFormatString(): ?string {
        return $this->certificateSubjectNameFormatString;
    }

    /**
     * Gets the certificateThumbprint property value. Thumbprint
     * @return string|null
    */
    public function getCertificateThumbprint(): ?string {
        return $this->certificateThumbprint;
    }

    /**
     * Gets the certificateValidityPeriod property value. Validity period
     * @return int|null
    */
    public function getCertificateValidityPeriod(): ?int {
        return $this->certificateValidityPeriod;
    }

    /**
     * Gets the certificateValidityPeriodUnits property value. Validity period units. Possible values are: days, months, years.
     * @return CertificateValidityPeriodScale|null
    */
    public function getCertificateValidityPeriodUnits(): ?CertificateValidityPeriodScale {
        return $this->certificateValidityPeriodUnits;
    }

    /**
     * Gets the deviceDisplayName property value. Device display name
     * @return string|null
    */
    public function getDeviceDisplayName(): ?string {
        return $this->deviceDisplayName;
    }

    /**
     * Gets the devicePlatform property value. Device platform. Possible values are: android, androidForWork, iOS, macOS, windowsPhone81, windows81AndLater, windows10AndLater, androidWorkProfile, unknown, androidAOSP.
     * @return DevicePlatformType|null
    */
    public function getDevicePlatform(): ?DevicePlatformType {
        return $this->devicePlatform;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'certificateEnhancedKeyUsage' => function (ParseNode $n) use ($o) { $o->setCertificateEnhancedKeyUsage($n->getStringValue()); },
            'certificateErrorCode' => function (ParseNode $n) use ($o) { $o->setCertificateErrorCode($n->getIntegerValue()); },
            'certificateExpirationDateTime' => function (ParseNode $n) use ($o) { $o->setCertificateExpirationDateTime($n->getDateTimeValue()); },
            'certificateIssuanceDateTime' => function (ParseNode $n) use ($o) { $o->setCertificateIssuanceDateTime($n->getDateTimeValue()); },
            'certificateIssuanceState' => function (ParseNode $n) use ($o) { $o->setCertificateIssuanceState($n->getEnumValue(CertificateIssuanceStates::class)); },
            'certificateIssuer' => function (ParseNode $n) use ($o) { $o->setCertificateIssuer($n->getStringValue()); },
            'certificateKeyLength' => function (ParseNode $n) use ($o) { $o->setCertificateKeyLength($n->getIntegerValue()); },
            'certificateKeyStorageProvider' => function (ParseNode $n) use ($o) { $o->setCertificateKeyStorageProvider($n->getEnumValue(KeyStorageProviderOption::class)); },
            'certificateKeyUsage' => function (ParseNode $n) use ($o) { $o->setCertificateKeyUsage($n->getEnumValue(KeyUsages::class)); },
            'certificateLastIssuanceStateChangedDateTime' => function (ParseNode $n) use ($o) { $o->setCertificateLastIssuanceStateChangedDateTime($n->getDateTimeValue()); },
            'certificateProfileDisplayName' => function (ParseNode $n) use ($o) { $o->setCertificateProfileDisplayName($n->getStringValue()); },
            'certificateRevokeStatus' => function (ParseNode $n) use ($o) { $o->setCertificateRevokeStatus($n->getEnumValue(CertificateRevocationStatus::class)); },
            'certificateSerialNumber' => function (ParseNode $n) use ($o) { $o->setCertificateSerialNumber($n->getStringValue()); },
            'certificateSubjectAlternativeNameFormat' => function (ParseNode $n) use ($o) { $o->setCertificateSubjectAlternativeNameFormat($n->getEnumValue(SubjectAlternativeNameType::class)); },
            'certificateSubjectAlternativeNameFormatString' => function (ParseNode $n) use ($o) { $o->setCertificateSubjectAlternativeNameFormatString($n->getStringValue()); },
            'certificateSubjectNameFormat' => function (ParseNode $n) use ($o) { $o->setCertificateSubjectNameFormat($n->getEnumValue(SubjectNameFormat::class)); },
            'certificateSubjectNameFormatString' => function (ParseNode $n) use ($o) { $o->setCertificateSubjectNameFormatString($n->getStringValue()); },
            'certificateThumbprint' => function (ParseNode $n) use ($o) { $o->setCertificateThumbprint($n->getStringValue()); },
            'certificateValidityPeriod' => function (ParseNode $n) use ($o) { $o->setCertificateValidityPeriod($n->getIntegerValue()); },
            'certificateValidityPeriodUnits' => function (ParseNode $n) use ($o) { $o->setCertificateValidityPeriodUnits($n->getEnumValue(CertificateValidityPeriodScale::class)); },
            'deviceDisplayName' => function (ParseNode $n) use ($o) { $o->setDeviceDisplayName($n->getStringValue()); },
            'devicePlatform' => function (ParseNode $n) use ($o) { $o->setDevicePlatform($n->getEnumValue(DevicePlatformType::class)); },
            'lastCertificateStateChangeDateTime' => function (ParseNode $n) use ($o) { $o->setLastCertificateStateChangeDateTime($n->getDateTimeValue()); },
            'userDisplayName' => function (ParseNode $n) use ($o) { $o->setUserDisplayName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the lastCertificateStateChangeDateTime property value. Last certificate issuance state change
     * @return DateTime|null
    */
    public function getLastCertificateStateChangeDateTime(): ?DateTime {
        return $this->lastCertificateStateChangeDateTime;
    }

    /**
     * Gets the userDisplayName property value. User display name
     * @return string|null
    */
    public function getUserDisplayName(): ?string {
        return $this->userDisplayName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('certificateEnhancedKeyUsage', $this->certificateEnhancedKeyUsage);
        $writer->writeIntegerValue('certificateErrorCode', $this->certificateErrorCode);
        $writer->writeDateTimeValue('certificateExpirationDateTime', $this->certificateExpirationDateTime);
        $writer->writeDateTimeValue('certificateIssuanceDateTime', $this->certificateIssuanceDateTime);
        $writer->writeEnumValue('certificateIssuanceState', $this->certificateIssuanceState);
        $writer->writeStringValue('certificateIssuer', $this->certificateIssuer);
        $writer->writeIntegerValue('certificateKeyLength', $this->certificateKeyLength);
        $writer->writeEnumValue('certificateKeyStorageProvider', $this->certificateKeyStorageProvider);
        $writer->writeEnumValue('certificateKeyUsage', $this->certificateKeyUsage);
        $writer->writeDateTimeValue('certificateLastIssuanceStateChangedDateTime', $this->certificateLastIssuanceStateChangedDateTime);
        $writer->writeStringValue('certificateProfileDisplayName', $this->certificateProfileDisplayName);
        $writer->writeEnumValue('certificateRevokeStatus', $this->certificateRevokeStatus);
        $writer->writeStringValue('certificateSerialNumber', $this->certificateSerialNumber);
        $writer->writeEnumValue('certificateSubjectAlternativeNameFormat', $this->certificateSubjectAlternativeNameFormat);
        $writer->writeStringValue('certificateSubjectAlternativeNameFormatString', $this->certificateSubjectAlternativeNameFormatString);
        $writer->writeEnumValue('certificateSubjectNameFormat', $this->certificateSubjectNameFormat);
        $writer->writeStringValue('certificateSubjectNameFormatString', $this->certificateSubjectNameFormatString);
        $writer->writeStringValue('certificateThumbprint', $this->certificateThumbprint);
        $writer->writeIntegerValue('certificateValidityPeriod', $this->certificateValidityPeriod);
        $writer->writeEnumValue('certificateValidityPeriodUnits', $this->certificateValidityPeriodUnits);
        $writer->writeStringValue('deviceDisplayName', $this->deviceDisplayName);
        $writer->writeEnumValue('devicePlatform', $this->devicePlatform);
        $writer->writeDateTimeValue('lastCertificateStateChangeDateTime', $this->lastCertificateStateChangeDateTime);
        $writer->writeStringValue('userDisplayName', $this->userDisplayName);
    }

    /**
     * Sets the certificateEnhancedKeyUsage property value. Extended key usage
     *  @param string|null $value Value to set for the certificateEnhancedKeyUsage property.
    */
    public function setCertificateEnhancedKeyUsage(?string $value ): void {
        $this->certificateEnhancedKeyUsage = $value;
    }

    /**
     * Sets the certificateErrorCode property value. Error code
     *  @param int|null $value Value to set for the certificateErrorCode property.
    */
    public function setCertificateErrorCode(?int $value ): void {
        $this->certificateErrorCode = $value;
    }

    /**
     * Sets the certificateExpirationDateTime property value. Certificate expiry date
     *  @param DateTime|null $value Value to set for the certificateExpirationDateTime property.
    */
    public function setCertificateExpirationDateTime(?DateTime $value ): void {
        $this->certificateExpirationDateTime = $value;
    }

    /**
     * Sets the certificateIssuanceDateTime property value. Issuance date
     *  @param DateTime|null $value Value to set for the certificateIssuanceDateTime property.
    */
    public function setCertificateIssuanceDateTime(?DateTime $value ): void {
        $this->certificateIssuanceDateTime = $value;
    }

    /**
     * Sets the certificateIssuanceState property value. Issuance State. Possible values are: unknown, challengeIssued, challengeIssueFailed, requestCreationFailed, requestSubmitFailed, challengeValidationSucceeded, challengeValidationFailed, issueFailed, issuePending, issued, responseProcessingFailed, responsePending, enrollmentSucceeded, enrollmentNotNeeded, revoked, removedFromCollection, renewVerified, installFailed, installed, deleteFailed, deleted, renewalRequested, requested.
     *  @param CertificateIssuanceStates|null $value Value to set for the certificateIssuanceState property.
    */
    public function setCertificateIssuanceState(?CertificateIssuanceStates $value ): void {
        $this->certificateIssuanceState = $value;
    }

    /**
     * Sets the certificateIssuer property value. Issuer
     *  @param string|null $value Value to set for the certificateIssuer property.
    */
    public function setCertificateIssuer(?string $value ): void {
        $this->certificateIssuer = $value;
    }

    /**
     * Sets the certificateKeyLength property value. Key length
     *  @param int|null $value Value to set for the certificateKeyLength property.
    */
    public function setCertificateKeyLength(?int $value ): void {
        $this->certificateKeyLength = $value;
    }

    /**
     * Sets the certificateKeyStorageProvider property value. Key Storage Provider. Possible values are: useTpmKspOtherwiseUseSoftwareKsp, useTpmKspOtherwiseFail, usePassportForWorkKspOtherwiseFail, useSoftwareKsp.
     *  @param KeyStorageProviderOption|null $value Value to set for the certificateKeyStorageProvider property.
    */
    public function setCertificateKeyStorageProvider(?KeyStorageProviderOption $value ): void {
        $this->certificateKeyStorageProvider = $value;
    }

    /**
     * Sets the certificateKeyUsage property value. Key usage. Possible values are: keyEncipherment, digitalSignature.
     *  @param KeyUsages|null $value Value to set for the certificateKeyUsage property.
    */
    public function setCertificateKeyUsage(?KeyUsages $value ): void {
        $this->certificateKeyUsage = $value;
    }

    /**
     * Sets the certificateLastIssuanceStateChangedDateTime property value. Last certificate issuance state change
     *  @param DateTime|null $value Value to set for the certificateLastIssuanceStateChangedDateTime property.
    */
    public function setCertificateLastIssuanceStateChangedDateTime(?DateTime $value ): void {
        $this->certificateLastIssuanceStateChangedDateTime = $value;
    }

    /**
     * Sets the certificateProfileDisplayName property value. Certificate profile display name
     *  @param string|null $value Value to set for the certificateProfileDisplayName property.
    */
    public function setCertificateProfileDisplayName(?string $value ): void {
        $this->certificateProfileDisplayName = $value;
    }

    /**
     * Sets the certificateRevokeStatus property value. Revoke status. Possible values are: none, pending, issued, failed, revoked.
     *  @param CertificateRevocationStatus|null $value Value to set for the certificateRevokeStatus property.
    */
    public function setCertificateRevokeStatus(?CertificateRevocationStatus $value ): void {
        $this->certificateRevokeStatus = $value;
    }

    /**
     * Sets the certificateSerialNumber property value. Serial number
     *  @param string|null $value Value to set for the certificateSerialNumber property.
    */
    public function setCertificateSerialNumber(?string $value ): void {
        $this->certificateSerialNumber = $value;
    }

    /**
     * Sets the certificateSubjectAlternativeNameFormat property value. Subject alternative name format. Possible values are: none, emailAddress, userPrincipalName, customAzureADAttribute, domainNameService, universalResourceIdentifier.
     *  @param SubjectAlternativeNameType|null $value Value to set for the certificateSubjectAlternativeNameFormat property.
    */
    public function setCertificateSubjectAlternativeNameFormat(?SubjectAlternativeNameType $value ): void {
        $this->certificateSubjectAlternativeNameFormat = $value;
    }

    /**
     * Sets the certificateSubjectAlternativeNameFormatString property value. Subject alternative name format string for custom formats
     *  @param string|null $value Value to set for the certificateSubjectAlternativeNameFormatString property.
    */
    public function setCertificateSubjectAlternativeNameFormatString(?string $value ): void {
        $this->certificateSubjectAlternativeNameFormatString = $value;
    }

    /**
     * Sets the certificateSubjectNameFormat property value. Subject name format. Possible values are: commonName, commonNameIncludingEmail, commonNameAsEmail, custom, commonNameAsIMEI, commonNameAsSerialNumber, commonNameAsAadDeviceId, commonNameAsIntuneDeviceId, commonNameAsDurableDeviceId.
     *  @param SubjectNameFormat|null $value Value to set for the certificateSubjectNameFormat property.
    */
    public function setCertificateSubjectNameFormat(?SubjectNameFormat $value ): void {
        $this->certificateSubjectNameFormat = $value;
    }

    /**
     * Sets the certificateSubjectNameFormatString property value. Subject name format string for custom subject name formats
     *  @param string|null $value Value to set for the certificateSubjectNameFormatString property.
    */
    public function setCertificateSubjectNameFormatString(?string $value ): void {
        $this->certificateSubjectNameFormatString = $value;
    }

    /**
     * Sets the certificateThumbprint property value. Thumbprint
     *  @param string|null $value Value to set for the certificateThumbprint property.
    */
    public function setCertificateThumbprint(?string $value ): void {
        $this->certificateThumbprint = $value;
    }

    /**
     * Sets the certificateValidityPeriod property value. Validity period
     *  @param int|null $value Value to set for the certificateValidityPeriod property.
    */
    public function setCertificateValidityPeriod(?int $value ): void {
        $this->certificateValidityPeriod = $value;
    }

    /**
     * Sets the certificateValidityPeriodUnits property value. Validity period units. Possible values are: days, months, years.
     *  @param CertificateValidityPeriodScale|null $value Value to set for the certificateValidityPeriodUnits property.
    */
    public function setCertificateValidityPeriodUnits(?CertificateValidityPeriodScale $value ): void {
        $this->certificateValidityPeriodUnits = $value;
    }

    /**
     * Sets the deviceDisplayName property value. Device display name
     *  @param string|null $value Value to set for the deviceDisplayName property.
    */
    public function setDeviceDisplayName(?string $value ): void {
        $this->deviceDisplayName = $value;
    }

    /**
     * Sets the devicePlatform property value. Device platform. Possible values are: android, androidForWork, iOS, macOS, windowsPhone81, windows81AndLater, windows10AndLater, androidWorkProfile, unknown, androidAOSP.
     *  @param DevicePlatformType|null $value Value to set for the devicePlatform property.
    */
    public function setDevicePlatform(?DevicePlatformType $value ): void {
        $this->devicePlatform = $value;
    }

    /**
     * Sets the lastCertificateStateChangeDateTime property value. Last certificate issuance state change
     *  @param DateTime|null $value Value to set for the lastCertificateStateChangeDateTime property.
    */
    public function setLastCertificateStateChangeDateTime(?DateTime $value ): void {
        $this->lastCertificateStateChangeDateTime = $value;
    }

    /**
     * Sets the userDisplayName property value. User display name
     *  @param string|null $value Value to set for the userDisplayName property.
    */
    public function setUserDisplayName(?string $value ): void {
        $this->userDisplayName = $value;
    }

}

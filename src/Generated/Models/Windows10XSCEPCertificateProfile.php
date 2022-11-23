<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Windows10XSCEPCertificateProfile extends Windows10XCertificateProfile implements Parsable 
{
    /**
     * Instantiates a new Windows10XSCEPCertificateProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windows10XSCEPCertificateProfile');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Windows10XSCEPCertificateProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Windows10XSCEPCertificateProfile {
        return new Windows10XSCEPCertificateProfile();
    }

    /**
     * Gets the certificateStore property value. CertificateStore types
     * @return CertificateStore|null
    */
    public function getCertificateStore(): ?CertificateStore {
        return $this->getBackingStore()->get('certificateStore');
    }

    /**
     * Gets the certificateValidityPeriodScale property value. Certificate Validity Period Options.
     * @return CertificateValidityPeriodScale|null
    */
    public function getCertificateValidityPeriodScale(): ?CertificateValidityPeriodScale {
        return $this->getBackingStore()->get('certificateValidityPeriodScale');
    }

    /**
     * Gets the certificateValidityPeriodValue property value. Value for the Certificate Validity Period
     * @return int|null
    */
    public function getCertificateValidityPeriodValue(): ?int {
        return $this->getBackingStore()->get('certificateValidityPeriodValue');
    }

    /**
     * Gets the extendedKeyUsages property value. Extended Key Usage (EKU) settings.
     * @return array<ExtendedKeyUsage>|null
    */
    public function getExtendedKeyUsages(): ?array {
        return $this->getBackingStore()->get('extendedKeyUsages');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'certificateStore' => fn(ParseNode $n) => $o->setCertificateStore($n->getEnumValue(CertificateStore::class)),
            'certificateValidityPeriodScale' => fn(ParseNode $n) => $o->setCertificateValidityPeriodScale($n->getEnumValue(CertificateValidityPeriodScale::class)),
            'certificateValidityPeriodValue' => fn(ParseNode $n) => $o->setCertificateValidityPeriodValue($n->getIntegerValue()),
            'extendedKeyUsages' => fn(ParseNode $n) => $o->setExtendedKeyUsages($n->getCollectionOfObjectValues([ExtendedKeyUsage::class, 'createFromDiscriminatorValue'])),
            'hashAlgorithm' => fn(ParseNode $n) => $o->setHashAlgorithm($n->getCollectionOfEnumValues(HashAlgorithms::class)),
            'keySize' => fn(ParseNode $n) => $o->setKeySize($n->getEnumValue(KeySize::class)),
            'keyStorageProvider' => fn(ParseNode $n) => $o->setKeyStorageProvider($n->getEnumValue(KeyStorageProviderOption::class)),
            'keyUsage' => fn(ParseNode $n) => $o->setKeyUsage($n->getEnumValue(KeyUsages::class)),
            'renewalThresholdPercentage' => fn(ParseNode $n) => $o->setRenewalThresholdPercentage($n->getIntegerValue()),
            'rootCertificateId' => fn(ParseNode $n) => $o->setRootCertificateId($n->getStringValue()),
            'scepServerUrls' => fn(ParseNode $n) => $o->setScepServerUrls($n->getCollectionOfPrimitiveValues()),
            'subjectAlternativeNameFormats' => fn(ParseNode $n) => $o->setSubjectAlternativeNameFormats($n->getCollectionOfObjectValues([Windows10XCustomSubjectAlternativeName::class, 'createFromDiscriminatorValue'])),
            'subjectNameFormatString' => fn(ParseNode $n) => $o->setSubjectNameFormatString($n->getStringValue()),
        ]);
    }

    /**
     * Gets the hashAlgorithm property value. SCEP Hash Algorithm.
     * @return array<HashAlgorithms>|null
    */
    public function getHashAlgorithm(): ?array {
        return $this->getBackingStore()->get('hashAlgorithm');
    }

    /**
     * Gets the keySize property value. Key Size Options.
     * @return KeySize|null
    */
    public function getKeySize(): ?KeySize {
        return $this->getBackingStore()->get('keySize');
    }

    /**
     * Gets the keyStorageProvider property value. Key Storage Provider (KSP) Import Options.
     * @return KeyStorageProviderOption|null
    */
    public function getKeyStorageProvider(): ?KeyStorageProviderOption {
        return $this->getBackingStore()->get('keyStorageProvider');
    }

    /**
     * Gets the keyUsage property value. Key Usage Options.
     * @return KeyUsages|null
    */
    public function getKeyUsage(): ?KeyUsages {
        return $this->getBackingStore()->get('keyUsage');
    }

    /**
     * Gets the renewalThresholdPercentage property value. Certificate renewal threshold percentage
     * @return int|null
    */
    public function getRenewalThresholdPercentage(): ?int {
        return $this->getBackingStore()->get('renewalThresholdPercentage');
    }

    /**
     * Gets the rootCertificateId property value. Trusted Root Certificate ID
     * @return string|null
    */
    public function getRootCertificateId(): ?string {
        return $this->getBackingStore()->get('rootCertificateId');
    }

    /**
     * Gets the scepServerUrls property value. SCEP Server Url(s).
     * @return array<string>|null
    */
    public function getScepServerUrls(): ?array {
        return $this->getBackingStore()->get('scepServerUrls');
    }

    /**
     * Gets the subjectAlternativeNameFormats property value. Custom AAD Attributes.
     * @return array<Windows10XCustomSubjectAlternativeName>|null
    */
    public function getSubjectAlternativeNameFormats(): ?array {
        return $this->getBackingStore()->get('subjectAlternativeNameFormats');
    }

    /**
     * Gets the subjectNameFormatString property value. Custom format to use with SubjectNameFormat = Custom. Example: CN={{EmailAddress}},E={{EmailAddress}},OU=Enterprise Users,O=Contoso Corporation,L=Redmond,ST=WA,C=US
     * @return string|null
    */
    public function getSubjectNameFormatString(): ?string {
        return $this->getBackingStore()->get('subjectNameFormatString');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('certificateStore', $this->getCertificateStore());
        $writer->writeEnumValue('certificateValidityPeriodScale', $this->getCertificateValidityPeriodScale());
        $writer->writeIntegerValue('certificateValidityPeriodValue', $this->getCertificateValidityPeriodValue());
        $writer->writeCollectionOfObjectValues('extendedKeyUsages', $this->getExtendedKeyUsages());
        $writer->writeCollectionOfEnumValues('hashAlgorithm', $this->getHashAlgorithm());
        $writer->writeEnumValue('keySize', $this->getKeySize());
        $writer->writeEnumValue('keyStorageProvider', $this->getKeyStorageProvider());
        $writer->writeEnumValue('keyUsage', $this->getKeyUsage());
        $writer->writeIntegerValue('renewalThresholdPercentage', $this->getRenewalThresholdPercentage());
        $writer->writeStringValue('rootCertificateId', $this->getRootCertificateId());
        $writer->writeCollectionOfPrimitiveValues('scepServerUrls', $this->getScepServerUrls());
        $writer->writeCollectionOfObjectValues('subjectAlternativeNameFormats', $this->getSubjectAlternativeNameFormats());
        $writer->writeStringValue('subjectNameFormatString', $this->getSubjectNameFormatString());
    }

    /**
     * Sets the certificateStore property value. CertificateStore types
     *  @param CertificateStore|null $value Value to set for the certificateStore property.
    */
    public function setCertificateStore(?CertificateStore $value): void {
        $this->getBackingStore()->set('certificateStore', $value);
    }

    /**
     * Sets the certificateValidityPeriodScale property value. Certificate Validity Period Options.
     *  @param CertificateValidityPeriodScale|null $value Value to set for the certificateValidityPeriodScale property.
    */
    public function setCertificateValidityPeriodScale(?CertificateValidityPeriodScale $value): void {
        $this->getBackingStore()->set('certificateValidityPeriodScale', $value);
    }

    /**
     * Sets the certificateValidityPeriodValue property value. Value for the Certificate Validity Period
     *  @param int|null $value Value to set for the certificateValidityPeriodValue property.
    */
    public function setCertificateValidityPeriodValue(?int $value): void {
        $this->getBackingStore()->set('certificateValidityPeriodValue', $value);
    }

    /**
     * Sets the extendedKeyUsages property value. Extended Key Usage (EKU) settings.
     *  @param array<ExtendedKeyUsage>|null $value Value to set for the extendedKeyUsages property.
    */
    public function setExtendedKeyUsages(?array $value): void {
        $this->getBackingStore()->set('extendedKeyUsages', $value);
    }

    /**
     * Sets the hashAlgorithm property value. SCEP Hash Algorithm.
     *  @param array<HashAlgorithms>|null $value Value to set for the hashAlgorithm property.
    */
    public function setHashAlgorithm(?array $value): void {
        $this->getBackingStore()->set('hashAlgorithm', $value);
    }

    /**
     * Sets the keySize property value. Key Size Options.
     *  @param KeySize|null $value Value to set for the keySize property.
    */
    public function setKeySize(?KeySize $value): void {
        $this->getBackingStore()->set('keySize', $value);
    }

    /**
     * Sets the keyStorageProvider property value. Key Storage Provider (KSP) Import Options.
     *  @param KeyStorageProviderOption|null $value Value to set for the keyStorageProvider property.
    */
    public function setKeyStorageProvider(?KeyStorageProviderOption $value): void {
        $this->getBackingStore()->set('keyStorageProvider', $value);
    }

    /**
     * Sets the keyUsage property value. Key Usage Options.
     *  @param KeyUsages|null $value Value to set for the keyUsage property.
    */
    public function setKeyUsage(?KeyUsages $value): void {
        $this->getBackingStore()->set('keyUsage', $value);
    }

    /**
     * Sets the renewalThresholdPercentage property value. Certificate renewal threshold percentage
     *  @param int|null $value Value to set for the renewalThresholdPercentage property.
    */
    public function setRenewalThresholdPercentage(?int $value): void {
        $this->getBackingStore()->set('renewalThresholdPercentage', $value);
    }

    /**
     * Sets the rootCertificateId property value. Trusted Root Certificate ID
     *  @param string|null $value Value to set for the rootCertificateId property.
    */
    public function setRootCertificateId(?string $value): void {
        $this->getBackingStore()->set('rootCertificateId', $value);
    }

    /**
     * Sets the scepServerUrls property value. SCEP Server Url(s).
     *  @param array<string>|null $value Value to set for the scepServerUrls property.
    */
    public function setScepServerUrls(?array $value): void {
        $this->getBackingStore()->set('scepServerUrls', $value);
    }

    /**
     * Sets the subjectAlternativeNameFormats property value. Custom AAD Attributes.
     *  @param array<Windows10XCustomSubjectAlternativeName>|null $value Value to set for the subjectAlternativeNameFormats property.
    */
    public function setSubjectAlternativeNameFormats(?array $value): void {
        $this->getBackingStore()->set('subjectAlternativeNameFormats', $value);
    }

    /**
     * Sets the subjectNameFormatString property value. Custom format to use with SubjectNameFormat = Custom. Example: CN={{EmailAddress}},E={{EmailAddress}},OU=Enterprise Users,O=Contoso Corporation,L=Redmond,ST=WA,C=US
     *  @param string|null $value Value to set for the subjectNameFormatString property.
    */
    public function setSubjectNameFormatString(?string $value): void {
        $this->getBackingStore()->set('subjectNameFormatString', $value);
    }

}

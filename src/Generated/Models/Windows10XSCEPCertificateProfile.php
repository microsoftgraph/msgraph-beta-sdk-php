<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Windows10XSCEPCertificateProfile extends Windows10XCertificateProfile implements Parsable 
{
    /**
     * @var CertificateStore|null $certificateStore CertificateStore types
    */
    private ?CertificateStore $certificateStore = null;
    
    /**
     * @var CertificateValidityPeriodScale|null $certificateValidityPeriodScale Certificate Validity Period Options.
    */
    private ?CertificateValidityPeriodScale $certificateValidityPeriodScale = null;
    
    /**
     * @var int|null $certificateValidityPeriodValue Value for the Certificate Validity Period
    */
    private ?int $certificateValidityPeriodValue = null;
    
    /**
     * @var array<ExtendedKeyUsage>|null $extendedKeyUsages Extended Key Usage (EKU) settings.
    */
    private ?array $extendedKeyUsages = null;
    
    /**
     * @var array<HashAlgorithms>|null $hashAlgorithm SCEP Hash Algorithm.
    */
    private ?array $hashAlgorithm = null;
    
    /**
     * @var KeySize|null $keySize Key Size Options.
    */
    private ?KeySize $keySize = null;
    
    /**
     * @var KeyStorageProviderOption|null $keyStorageProvider Key Storage Provider (KSP) Import Options.
    */
    private ?KeyStorageProviderOption $keyStorageProvider = null;
    
    /**
     * @var KeyUsages|null $keyUsage Key Usage Options.
    */
    private ?KeyUsages $keyUsage = null;
    
    /**
     * @var int|null $renewalThresholdPercentage Certificate renewal threshold percentage
    */
    private ?int $renewalThresholdPercentage = null;
    
    /**
     * @var string|null $rootCertificateId Trusted Root Certificate ID
    */
    private ?string $rootCertificateId = null;
    
    /**
     * @var array<string>|null $scepServerUrls SCEP Server Url(s).
    */
    private ?array $scepServerUrls = null;
    
    /**
     * @var array<Windows10XCustomSubjectAlternativeName>|null $subjectAlternativeNameFormats Custom AAD Attributes.
    */
    private ?array $subjectAlternativeNameFormats = null;
    
    /**
     * @var string|null $subjectNameFormatString Custom format to use with SubjectNameFormat = Custom. Example: CN={{EmailAddress}},E={{EmailAddress}},OU=Enterprise Users,O=Contoso Corporation,L=Redmond,ST=WA,C=US
    */
    private ?string $subjectNameFormatString = null;
    
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
        return $this->certificateStore;
    }

    /**
     * Gets the certificateValidityPeriodScale property value. Certificate Validity Period Options.
     * @return CertificateValidityPeriodScale|null
    */
    public function getCertificateValidityPeriodScale(): ?CertificateValidityPeriodScale {
        return $this->certificateValidityPeriodScale;
    }

    /**
     * Gets the certificateValidityPeriodValue property value. Value for the Certificate Validity Period
     * @return int|null
    */
    public function getCertificateValidityPeriodValue(): ?int {
        return $this->certificateValidityPeriodValue;
    }

    /**
     * Gets the extendedKeyUsages property value. Extended Key Usage (EKU) settings.
     * @return array<ExtendedKeyUsage>|null
    */
    public function getExtendedKeyUsages(): ?array {
        return $this->extendedKeyUsages;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'certificateStore' => function (ParseNode $n) use ($o) { $o->setCertificateStore($n->getEnumValue(CertificateStore::class)); },
            'certificateValidityPeriodScale' => function (ParseNode $n) use ($o) { $o->setCertificateValidityPeriodScale($n->getEnumValue(CertificateValidityPeriodScale::class)); },
            'certificateValidityPeriodValue' => function (ParseNode $n) use ($o) { $o->setCertificateValidityPeriodValue($n->getIntegerValue()); },
            'extendedKeyUsages' => function (ParseNode $n) use ($o) { $o->setExtendedKeyUsages($n->getCollectionOfObjectValues(array(ExtendedKeyUsage::class, 'createFromDiscriminatorValue'))); },
            'hashAlgorithm' => function (ParseNode $n) use ($o) { $o->setHashAlgorithm($n->getCollectionOfEnumValues(HashAlgorithms::class)); },
            'keySize' => function (ParseNode $n) use ($o) { $o->setKeySize($n->getEnumValue(KeySize::class)); },
            'keyStorageProvider' => function (ParseNode $n) use ($o) { $o->setKeyStorageProvider($n->getEnumValue(KeyStorageProviderOption::class)); },
            'keyUsage' => function (ParseNode $n) use ($o) { $o->setKeyUsage($n->getEnumValue(KeyUsages::class)); },
            'renewalThresholdPercentage' => function (ParseNode $n) use ($o) { $o->setRenewalThresholdPercentage($n->getIntegerValue()); },
            'rootCertificateId' => function (ParseNode $n) use ($o) { $o->setRootCertificateId($n->getStringValue()); },
            'scepServerUrls' => function (ParseNode $n) use ($o) { $o->setScepServerUrls($n->getCollectionOfPrimitiveValues()); },
            'subjectAlternativeNameFormats' => function (ParseNode $n) use ($o) { $o->setSubjectAlternativeNameFormats($n->getCollectionOfObjectValues(array(Windows10XCustomSubjectAlternativeName::class, 'createFromDiscriminatorValue'))); },
            'subjectNameFormatString' => function (ParseNode $n) use ($o) { $o->setSubjectNameFormatString($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the hashAlgorithm property value. SCEP Hash Algorithm.
     * @return array<HashAlgorithms>|null
    */
    public function getHashAlgorithm(): ?array {
        return $this->hashAlgorithm;
    }

    /**
     * Gets the keySize property value. Key Size Options.
     * @return KeySize|null
    */
    public function getKeySize(): ?KeySize {
        return $this->keySize;
    }

    /**
     * Gets the keyStorageProvider property value. Key Storage Provider (KSP) Import Options.
     * @return KeyStorageProviderOption|null
    */
    public function getKeyStorageProvider(): ?KeyStorageProviderOption {
        return $this->keyStorageProvider;
    }

    /**
     * Gets the keyUsage property value. Key Usage Options.
     * @return KeyUsages|null
    */
    public function getKeyUsage(): ?KeyUsages {
        return $this->keyUsage;
    }

    /**
     * Gets the renewalThresholdPercentage property value. Certificate renewal threshold percentage
     * @return int|null
    */
    public function getRenewalThresholdPercentage(): ?int {
        return $this->renewalThresholdPercentage;
    }

    /**
     * Gets the rootCertificateId property value. Trusted Root Certificate ID
     * @return string|null
    */
    public function getRootCertificateId(): ?string {
        return $this->rootCertificateId;
    }

    /**
     * Gets the scepServerUrls property value. SCEP Server Url(s).
     * @return array<string>|null
    */
    public function getScepServerUrls(): ?array {
        return $this->scepServerUrls;
    }

    /**
     * Gets the subjectAlternativeNameFormats property value. Custom AAD Attributes.
     * @return array<Windows10XCustomSubjectAlternativeName>|null
    */
    public function getSubjectAlternativeNameFormats(): ?array {
        return $this->subjectAlternativeNameFormats;
    }

    /**
     * Gets the subjectNameFormatString property value. Custom format to use with SubjectNameFormat = Custom. Example: CN={{EmailAddress}},E={{EmailAddress}},OU=Enterprise Users,O=Contoso Corporation,L=Redmond,ST=WA,C=US
     * @return string|null
    */
    public function getSubjectNameFormatString(): ?string {
        return $this->subjectNameFormatString;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('certificateStore', $this->certificateStore);
        $writer->writeEnumValue('certificateValidityPeriodScale', $this->certificateValidityPeriodScale);
        $writer->writeIntegerValue('certificateValidityPeriodValue', $this->certificateValidityPeriodValue);
        $writer->writeCollectionOfObjectValues('extendedKeyUsages', $this->extendedKeyUsages);
        $writer->writeCollectionOfEnumValues('hashAlgorithm', $this->hashAlgorithm);
        $writer->writeEnumValue('keySize', $this->keySize);
        $writer->writeEnumValue('keyStorageProvider', $this->keyStorageProvider);
        $writer->writeEnumValue('keyUsage', $this->keyUsage);
        $writer->writeIntegerValue('renewalThresholdPercentage', $this->renewalThresholdPercentage);
        $writer->writeStringValue('rootCertificateId', $this->rootCertificateId);
        $writer->writeCollectionOfPrimitiveValues('scepServerUrls', $this->scepServerUrls);
        $writer->writeCollectionOfObjectValues('subjectAlternativeNameFormats', $this->subjectAlternativeNameFormats);
        $writer->writeStringValue('subjectNameFormatString', $this->subjectNameFormatString);
    }

    /**
     * Sets the certificateStore property value. CertificateStore types
     *  @param CertificateStore|null $value Value to set for the certificateStore property.
    */
    public function setCertificateStore(?CertificateStore $value ): void {
        $this->certificateStore = $value;
    }

    /**
     * Sets the certificateValidityPeriodScale property value. Certificate Validity Period Options.
     *  @param CertificateValidityPeriodScale|null $value Value to set for the certificateValidityPeriodScale property.
    */
    public function setCertificateValidityPeriodScale(?CertificateValidityPeriodScale $value ): void {
        $this->certificateValidityPeriodScale = $value;
    }

    /**
     * Sets the certificateValidityPeriodValue property value. Value for the Certificate Validity Period
     *  @param int|null $value Value to set for the certificateValidityPeriodValue property.
    */
    public function setCertificateValidityPeriodValue(?int $value ): void {
        $this->certificateValidityPeriodValue = $value;
    }

    /**
     * Sets the extendedKeyUsages property value. Extended Key Usage (EKU) settings.
     *  @param array<ExtendedKeyUsage>|null $value Value to set for the extendedKeyUsages property.
    */
    public function setExtendedKeyUsages(?array $value ): void {
        $this->extendedKeyUsages = $value;
    }

    /**
     * Sets the hashAlgorithm property value. SCEP Hash Algorithm.
     *  @param array<HashAlgorithms>|null $value Value to set for the hashAlgorithm property.
    */
    public function setHashAlgorithm(?array $value ): void {
        $this->hashAlgorithm = $value;
    }

    /**
     * Sets the keySize property value. Key Size Options.
     *  @param KeySize|null $value Value to set for the keySize property.
    */
    public function setKeySize(?KeySize $value ): void {
        $this->keySize = $value;
    }

    /**
     * Sets the keyStorageProvider property value. Key Storage Provider (KSP) Import Options.
     *  @param KeyStorageProviderOption|null $value Value to set for the keyStorageProvider property.
    */
    public function setKeyStorageProvider(?KeyStorageProviderOption $value ): void {
        $this->keyStorageProvider = $value;
    }

    /**
     * Sets the keyUsage property value. Key Usage Options.
     *  @param KeyUsages|null $value Value to set for the keyUsage property.
    */
    public function setKeyUsage(?KeyUsages $value ): void {
        $this->keyUsage = $value;
    }

    /**
     * Sets the renewalThresholdPercentage property value. Certificate renewal threshold percentage
     *  @param int|null $value Value to set for the renewalThresholdPercentage property.
    */
    public function setRenewalThresholdPercentage(?int $value ): void {
        $this->renewalThresholdPercentage = $value;
    }

    /**
     * Sets the rootCertificateId property value. Trusted Root Certificate ID
     *  @param string|null $value Value to set for the rootCertificateId property.
    */
    public function setRootCertificateId(?string $value ): void {
        $this->rootCertificateId = $value;
    }

    /**
     * Sets the scepServerUrls property value. SCEP Server Url(s).
     *  @param array<string>|null $value Value to set for the scepServerUrls property.
    */
    public function setScepServerUrls(?array $value ): void {
        $this->scepServerUrls = $value;
    }

    /**
     * Sets the subjectAlternativeNameFormats property value. Custom AAD Attributes.
     *  @param array<Windows10XCustomSubjectAlternativeName>|null $value Value to set for the subjectAlternativeNameFormats property.
    */
    public function setSubjectAlternativeNameFormats(?array $value ): void {
        $this->subjectAlternativeNameFormats = $value;
    }

    /**
     * Sets the subjectNameFormatString property value. Custom format to use with SubjectNameFormat = Custom. Example: CN={{EmailAddress}},E={{EmailAddress}},OU=Enterprise Users,O=Contoso Corporation,L=Redmond,ST=WA,C=US
     *  @param string|null $value Value to set for the subjectNameFormatString property.
    */
    public function setSubjectNameFormatString(?string $value ): void {
        $this->subjectNameFormatString = $value;
    }

}

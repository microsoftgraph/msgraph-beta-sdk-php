<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Windows81SCEPCertificateProfile extends Windows81CertificateProfileBase implements Parsable 
{
    /**
     * @var CertificateStore|null $certificateStore Target store certificate. Possible values are: user, machine.
    */
    private ?CertificateStore $certificateStore = null;
    
    /**
     * @var HashAlgorithms|null $hashAlgorithm Hash Algorithm Options.
    */
    private ?HashAlgorithms $hashAlgorithm = null;
    
    /**
     * @var KeySize|null $keySize Key Size Options.
    */
    private ?KeySize $keySize = null;
    
    /**
     * @var KeyUsages|null $keyUsage Key Usage Options.
    */
    private ?KeyUsages $keyUsage = null;
    
    /**
     * @var array<ManagedDeviceCertificateState>|null $managedDeviceCertificateStates Certificate state for devices. This collection can contain a maximum of 2147483647 elements.
    */
    private ?array $managedDeviceCertificateStates = null;
    
    /**
     * @var Windows81TrustedRootCertificate|null $rootCertificate Trusted Root Certificate
    */
    private ?Windows81TrustedRootCertificate $rootCertificate = null;
    
    /**
     * @var array<string>|null $scepServerUrls SCEP Server Url(s).
    */
    private ?array $scepServerUrls = null;
    
    /**
     * @var string|null $subjectAlternativeNameFormatString Custom String that defines the AAD Attribute.
    */
    private ?string $subjectAlternativeNameFormatString = null;
    
    /**
     * @var string|null $subjectNameFormatString Custom format to use with SubjectNameFormat = Custom. Example: CN={{EmailAddress}},E={{EmailAddress}},OU=Enterprise Users,O=Contoso Corporation,L=Redmond,ST=WA,C=US
    */
    private ?string $subjectNameFormatString = null;
    
    /**
     * Instantiates a new Windows81SCEPCertificateProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windows81SCEPCertificateProfile');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Windows81SCEPCertificateProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Windows81SCEPCertificateProfile {
        return new Windows81SCEPCertificateProfile();
    }

    /**
     * Gets the certificateStore property value. Target store certificate. Possible values are: user, machine.
     * @return CertificateStore|null
    */
    public function getCertificateStore(): ?CertificateStore {
        return $this->certificateStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'certificateStore' => fn(ParseNode $n) => $o->setCertificateStore($n->getEnumValue(CertificateStore::class)),
            'hashAlgorithm' => fn(ParseNode $n) => $o->setHashAlgorithm($n->getEnumValue(HashAlgorithms::class)),
            'keySize' => fn(ParseNode $n) => $o->setKeySize($n->getEnumValue(KeySize::class)),
            'keyUsage' => fn(ParseNode $n) => $o->setKeyUsage($n->getEnumValue(KeyUsages::class)),
            'managedDeviceCertificateStates' => fn(ParseNode $n) => $o->setManagedDeviceCertificateStates($n->getCollectionOfObjectValues([ManagedDeviceCertificateState::class, 'createFromDiscriminatorValue'])),
            'rootCertificate' => fn(ParseNode $n) => $o->setRootCertificate($n->getObjectValue([Windows81TrustedRootCertificate::class, 'createFromDiscriminatorValue'])),
            'scepServerUrls' => fn(ParseNode $n) => $o->setScepServerUrls($n->getCollectionOfPrimitiveValues()),
            'subjectAlternativeNameFormatString' => fn(ParseNode $n) => $o->setSubjectAlternativeNameFormatString($n->getStringValue()),
            'subjectNameFormatString' => fn(ParseNode $n) => $o->setSubjectNameFormatString($n->getStringValue()),
        ]);
    }

    /**
     * Gets the hashAlgorithm property value. Hash Algorithm Options.
     * @return HashAlgorithms|null
    */
    public function getHashAlgorithm(): ?HashAlgorithms {
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
     * Gets the keyUsage property value. Key Usage Options.
     * @return KeyUsages|null
    */
    public function getKeyUsage(): ?KeyUsages {
        return $this->keyUsage;
    }

    /**
     * Gets the managedDeviceCertificateStates property value. Certificate state for devices. This collection can contain a maximum of 2147483647 elements.
     * @return array<ManagedDeviceCertificateState>|null
    */
    public function getManagedDeviceCertificateStates(): ?array {
        return $this->managedDeviceCertificateStates;
    }

    /**
     * Gets the rootCertificate property value. Trusted Root Certificate
     * @return Windows81TrustedRootCertificate|null
    */
    public function getRootCertificate(): ?Windows81TrustedRootCertificate {
        return $this->rootCertificate;
    }

    /**
     * Gets the scepServerUrls property value. SCEP Server Url(s).
     * @return array<string>|null
    */
    public function getScepServerUrls(): ?array {
        return $this->scepServerUrls;
    }

    /**
     * Gets the subjectAlternativeNameFormatString property value. Custom String that defines the AAD Attribute.
     * @return string|null
    */
    public function getSubjectAlternativeNameFormatString(): ?string {
        return $this->subjectAlternativeNameFormatString;
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
        $writer->writeEnumValue('hashAlgorithm', $this->hashAlgorithm);
        $writer->writeEnumValue('keySize', $this->keySize);
        $writer->writeEnumValue('keyUsage', $this->keyUsage);
        $writer->writeCollectionOfObjectValues('managedDeviceCertificateStates', $this->managedDeviceCertificateStates);
        $writer->writeObjectValue('rootCertificate', $this->rootCertificate);
        $writer->writeCollectionOfPrimitiveValues('scepServerUrls', $this->scepServerUrls);
        $writer->writeStringValue('subjectAlternativeNameFormatString', $this->subjectAlternativeNameFormatString);
        $writer->writeStringValue('subjectNameFormatString', $this->subjectNameFormatString);
    }

    /**
     * Sets the certificateStore property value. Target store certificate. Possible values are: user, machine.
     *  @param CertificateStore|null $value Value to set for the certificateStore property.
    */
    public function setCertificateStore(?CertificateStore $value ): void {
        $this->certificateStore = $value;
    }

    /**
     * Sets the hashAlgorithm property value. Hash Algorithm Options.
     *  @param HashAlgorithms|null $value Value to set for the hashAlgorithm property.
    */
    public function setHashAlgorithm(?HashAlgorithms $value ): void {
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
     * Sets the keyUsage property value. Key Usage Options.
     *  @param KeyUsages|null $value Value to set for the keyUsage property.
    */
    public function setKeyUsage(?KeyUsages $value ): void {
        $this->keyUsage = $value;
    }

    /**
     * Sets the managedDeviceCertificateStates property value. Certificate state for devices. This collection can contain a maximum of 2147483647 elements.
     *  @param array<ManagedDeviceCertificateState>|null $value Value to set for the managedDeviceCertificateStates property.
    */
    public function setManagedDeviceCertificateStates(?array $value ): void {
        $this->managedDeviceCertificateStates = $value;
    }

    /**
     * Sets the rootCertificate property value. Trusted Root Certificate
     *  @param Windows81TrustedRootCertificate|null $value Value to set for the rootCertificate property.
    */
    public function setRootCertificate(?Windows81TrustedRootCertificate $value ): void {
        $this->rootCertificate = $value;
    }

    /**
     * Sets the scepServerUrls property value. SCEP Server Url(s).
     *  @param array<string>|null $value Value to set for the scepServerUrls property.
    */
    public function setScepServerUrls(?array $value ): void {
        $this->scepServerUrls = $value;
    }

    /**
     * Sets the subjectAlternativeNameFormatString property value. Custom String that defines the AAD Attribute.
     *  @param string|null $value Value to set for the subjectAlternativeNameFormatString property.
    */
    public function setSubjectAlternativeNameFormatString(?string $value ): void {
        $this->subjectAlternativeNameFormatString = $value;
    }

    /**
     * Sets the subjectNameFormatString property value. Custom format to use with SubjectNameFormat = Custom. Example: CN={{EmailAddress}},E={{EmailAddress}},OU=Enterprise Users,O=Contoso Corporation,L=Redmond,ST=WA,C=US
     *  @param string|null $value Value to set for the subjectNameFormatString property.
    */
    public function setSubjectNameFormatString(?string $value ): void {
        $this->subjectNameFormatString = $value;
    }

}

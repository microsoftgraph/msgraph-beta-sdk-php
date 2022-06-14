<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidWorkProfileScepCertificateProfile extends AndroidWorkProfileCertificateProfileBase implements Parsable 
{
    /**
     * @var CertificateStore|null $certificateStore Target store certificate. Possible values are: user, machine.
    */
    private ?CertificateStore $certificateStore = null;
    
    /**
     * @var array<CustomSubjectAlternativeName>|null $customSubjectAlternativeNames Custom Subject Alternative Name Settings. This collection can contain a maximum of 500 elements.
    */
    private ?array $customSubjectAlternativeNames = null;
    
    /**
     * @var HashAlgorithms|null $hashAlgorithm SCEP Hash Algorithm. Possible values are: sha1, sha2.
    */
    private ?HashAlgorithms $hashAlgorithm = null;
    
    /**
     * @var KeySize|null $keySize SCEP Key Size. Possible values are: size1024, size2048, size4096.
    */
    private ?KeySize $keySize = null;
    
    /**
     * @var KeyUsages|null $keyUsage SCEP Key Usage. Possible values are: keyEncipherment, digitalSignature.
    */
    private ?KeyUsages $keyUsage = null;
    
    /**
     * @var array<ManagedDeviceCertificateState>|null $managedDeviceCertificateStates Certificate state for devices. This collection can contain a maximum of 2147483647 elements.
    */
    private ?array $managedDeviceCertificateStates = null;
    
    /**
     * @var array<string>|null $scepServerUrls SCEP Server Url(s)
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
     * Instantiates a new AndroidWorkProfileScepCertificateProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidWorkProfileScepCertificateProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidWorkProfileScepCertificateProfile {
        return new AndroidWorkProfileScepCertificateProfile();
    }

    /**
     * Gets the certificateStore property value. Target store certificate. Possible values are: user, machine.
     * @return CertificateStore|null
    */
    public function getCertificateStore(): ?CertificateStore {
        return $this->certificateStore;
    }

    /**
     * Gets the customSubjectAlternativeNames property value. Custom Subject Alternative Name Settings. This collection can contain a maximum of 500 elements.
     * @return array<CustomSubjectAlternativeName>|null
    */
    public function getCustomSubjectAlternativeNames(): ?array {
        return $this->customSubjectAlternativeNames;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'certificateStore' => function (ParseNode $n) use ($o) { $o->setCertificateStore($n->getEnumValue(CertificateStore::class)); },
            'customSubjectAlternativeNames' => function (ParseNode $n) use ($o) { $o->setCustomSubjectAlternativeNames($n->getCollectionOfObjectValues(array(CustomSubjectAlternativeName::class, 'createFromDiscriminatorValue'))); },
            'hashAlgorithm' => function (ParseNode $n) use ($o) { $o->setHashAlgorithm($n->getEnumValue(HashAlgorithms::class)); },
            'keySize' => function (ParseNode $n) use ($o) { $o->setKeySize($n->getEnumValue(KeySize::class)); },
            'keyUsage' => function (ParseNode $n) use ($o) { $o->setKeyUsage($n->getEnumValue(KeyUsages::class)); },
            'managedDeviceCertificateStates' => function (ParseNode $n) use ($o) { $o->setManagedDeviceCertificateStates($n->getCollectionOfObjectValues(array(ManagedDeviceCertificateState::class, 'createFromDiscriminatorValue'))); },
            'scepServerUrls' => function (ParseNode $n) use ($o) { $o->setScepServerUrls($n->getCollectionOfPrimitiveValues()); },
            'subjectAlternativeNameFormatString' => function (ParseNode $n) use ($o) { $o->setSubjectAlternativeNameFormatString($n->getStringValue()); },
            'subjectNameFormatString' => function (ParseNode $n) use ($o) { $o->setSubjectNameFormatString($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the hashAlgorithm property value. SCEP Hash Algorithm. Possible values are: sha1, sha2.
     * @return HashAlgorithms|null
    */
    public function getHashAlgorithm(): ?HashAlgorithms {
        return $this->hashAlgorithm;
    }

    /**
     * Gets the keySize property value. SCEP Key Size. Possible values are: size1024, size2048, size4096.
     * @return KeySize|null
    */
    public function getKeySize(): ?KeySize {
        return $this->keySize;
    }

    /**
     * Gets the keyUsage property value. SCEP Key Usage. Possible values are: keyEncipherment, digitalSignature.
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
     * Gets the scepServerUrls property value. SCEP Server Url(s)
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
        $writer->writeCollectionOfObjectValues('customSubjectAlternativeNames', $this->customSubjectAlternativeNames);
        $writer->writeEnumValue('hashAlgorithm', $this->hashAlgorithm);
        $writer->writeEnumValue('keySize', $this->keySize);
        $writer->writeEnumValue('keyUsage', $this->keyUsage);
        $writer->writeCollectionOfObjectValues('managedDeviceCertificateStates', $this->managedDeviceCertificateStates);
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
     * Sets the customSubjectAlternativeNames property value. Custom Subject Alternative Name Settings. This collection can contain a maximum of 500 elements.
     *  @param array<CustomSubjectAlternativeName>|null $value Value to set for the customSubjectAlternativeNames property.
    */
    public function setCustomSubjectAlternativeNames(?array $value ): void {
        $this->customSubjectAlternativeNames = $value;
    }

    /**
     * Sets the hashAlgorithm property value. SCEP Hash Algorithm. Possible values are: sha1, sha2.
     *  @param HashAlgorithms|null $value Value to set for the hashAlgorithm property.
    */
    public function setHashAlgorithm(?HashAlgorithms $value ): void {
        $this->hashAlgorithm = $value;
    }

    /**
     * Sets the keySize property value. SCEP Key Size. Possible values are: size1024, size2048, size4096.
     *  @param KeySize|null $value Value to set for the keySize property.
    */
    public function setKeySize(?KeySize $value ): void {
        $this->keySize = $value;
    }

    /**
     * Sets the keyUsage property value. SCEP Key Usage. Possible values are: keyEncipherment, digitalSignature.
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
     * Sets the scepServerUrls property value. SCEP Server Url(s)
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

<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IosScepCertificateProfile extends IosCertificateProfileBase implements Parsable 
{
    /**
     * Instantiates a new IosScepCertificateProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.iosScepCertificateProfile');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosScepCertificateProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosScepCertificateProfile {
        return new IosScepCertificateProfile();
    }

    /**
     * Gets the certificateStore property value. Target store certificate. Possible values are: user, machine.
     * @return CertificateStore|null
    */
    public function getCertificateStore(): ?CertificateStore {
        return $this->getBackingStore()->get('certificateStore');
    }

    /**
     * Gets the customSubjectAlternativeNames property value. Custom Subject Alternative Name Settings. The OnPremisesUserPrincipalName variable is support as well as others documented here: https://go.microsoft.com/fwlink/?LinkId=2027630. This collection can contain a maximum of 500 elements.
     * @return array<CustomSubjectAlternativeName>|null
    */
    public function getCustomSubjectAlternativeNames(): ?array {
        return $this->getBackingStore()->get('customSubjectAlternativeNames');
    }

    /**
     * Gets the extendedKeyUsages property value. Extended Key Usage (EKU) settings. This collection can contain a maximum of 500 elements.
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
            'customSubjectAlternativeNames' => fn(ParseNode $n) => $o->setCustomSubjectAlternativeNames($n->getCollectionOfObjectValues([CustomSubjectAlternativeName::class, 'createFromDiscriminatorValue'])),
            'extendedKeyUsages' => fn(ParseNode $n) => $o->setExtendedKeyUsages($n->getCollectionOfObjectValues([ExtendedKeyUsage::class, 'createFromDiscriminatorValue'])),
            'keySize' => fn(ParseNode $n) => $o->setKeySize($n->getEnumValue(KeySize::class)),
            'keyUsage' => fn(ParseNode $n) => $o->setKeyUsage($n->getEnumValue(KeyUsages::class)),
            'managedDeviceCertificateStates' => fn(ParseNode $n) => $o->setManagedDeviceCertificateStates($n->getCollectionOfObjectValues([ManagedDeviceCertificateState::class, 'createFromDiscriminatorValue'])),
            'rootCertificate' => fn(ParseNode $n) => $o->setRootCertificate($n->getObjectValue([IosTrustedRootCertificate::class, 'createFromDiscriminatorValue'])),
            'scepServerUrls' => fn(ParseNode $n) => $o->setScepServerUrls($n->getCollectionOfPrimitiveValues()),
            'subjectAlternativeNameFormatString' => fn(ParseNode $n) => $o->setSubjectAlternativeNameFormatString($n->getStringValue()),
            'subjectNameFormatString' => fn(ParseNode $n) => $o->setSubjectNameFormatString($n->getStringValue()),
        ]);
    }

    /**
     * Gets the keySize property value. Key Size Options.
     * @return KeySize|null
    */
    public function getKeySize(): ?KeySize {
        return $this->getBackingStore()->get('keySize');
    }

    /**
     * Gets the keyUsage property value. Key Usage Options.
     * @return KeyUsages|null
    */
    public function getKeyUsage(): ?KeyUsages {
        return $this->getBackingStore()->get('keyUsage');
    }

    /**
     * Gets the managedDeviceCertificateStates property value. Certificate state for devices. This collection can contain a maximum of 2147483647 elements.
     * @return array<ManagedDeviceCertificateState>|null
    */
    public function getManagedDeviceCertificateStates(): ?array {
        return $this->getBackingStore()->get('managedDeviceCertificateStates');
    }

    /**
     * Gets the rootCertificate property value. Trusted Root Certificate.
     * @return IosTrustedRootCertificate|null
    */
    public function getRootCertificate(): ?IosTrustedRootCertificate {
        return $this->getBackingStore()->get('rootCertificate');
    }

    /**
     * Gets the scepServerUrls property value. SCEP Server Url(s).
     * @return array<string>|null
    */
    public function getScepServerUrls(): ?array {
        return $this->getBackingStore()->get('scepServerUrls');
    }

    /**
     * Gets the subjectAlternativeNameFormatString property value. Custom String that defines the AAD Attribute.
     * @return string|null
    */
    public function getSubjectAlternativeNameFormatString(): ?string {
        return $this->getBackingStore()->get('subjectAlternativeNameFormatString');
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
        $writer->writeCollectionOfObjectValues('customSubjectAlternativeNames', $this->getCustomSubjectAlternativeNames());
        $writer->writeCollectionOfObjectValues('extendedKeyUsages', $this->getExtendedKeyUsages());
        $writer->writeEnumValue('keySize', $this->getKeySize());
        $writer->writeEnumValue('keyUsage', $this->getKeyUsage());
        $writer->writeCollectionOfObjectValues('managedDeviceCertificateStates', $this->getManagedDeviceCertificateStates());
        $writer->writeObjectValue('rootCertificate', $this->getRootCertificate());
        $writer->writeCollectionOfPrimitiveValues('scepServerUrls', $this->getScepServerUrls());
        $writer->writeStringValue('subjectAlternativeNameFormatString', $this->getSubjectAlternativeNameFormatString());
        $writer->writeStringValue('subjectNameFormatString', $this->getSubjectNameFormatString());
    }

    /**
     * Sets the certificateStore property value. Target store certificate. Possible values are: user, machine.
     *  @param CertificateStore|null $value Value to set for the certificateStore property.
    */
    public function setCertificateStore(?CertificateStore $value): void {
        $this->getBackingStore()->set('certificateStore', $value);
    }

    /**
     * Sets the customSubjectAlternativeNames property value. Custom Subject Alternative Name Settings. The OnPremisesUserPrincipalName variable is support as well as others documented here: https://go.microsoft.com/fwlink/?LinkId=2027630. This collection can contain a maximum of 500 elements.
     *  @param array<CustomSubjectAlternativeName>|null $value Value to set for the customSubjectAlternativeNames property.
    */
    public function setCustomSubjectAlternativeNames(?array $value): void {
        $this->getBackingStore()->set('customSubjectAlternativeNames', $value);
    }

    /**
     * Sets the extendedKeyUsages property value. Extended Key Usage (EKU) settings. This collection can contain a maximum of 500 elements.
     *  @param array<ExtendedKeyUsage>|null $value Value to set for the extendedKeyUsages property.
    */
    public function setExtendedKeyUsages(?array $value): void {
        $this->getBackingStore()->set('extendedKeyUsages', $value);
    }

    /**
     * Sets the keySize property value. Key Size Options.
     *  @param KeySize|null $value Value to set for the keySize property.
    */
    public function setKeySize(?KeySize $value): void {
        $this->getBackingStore()->set('keySize', $value);
    }

    /**
     * Sets the keyUsage property value. Key Usage Options.
     *  @param KeyUsages|null $value Value to set for the keyUsage property.
    */
    public function setKeyUsage(?KeyUsages $value): void {
        $this->getBackingStore()->set('keyUsage', $value);
    }

    /**
     * Sets the managedDeviceCertificateStates property value. Certificate state for devices. This collection can contain a maximum of 2147483647 elements.
     *  @param array<ManagedDeviceCertificateState>|null $value Value to set for the managedDeviceCertificateStates property.
    */
    public function setManagedDeviceCertificateStates(?array $value): void {
        $this->getBackingStore()->set('managedDeviceCertificateStates', $value);
    }

    /**
     * Sets the rootCertificate property value. Trusted Root Certificate.
     *  @param IosTrustedRootCertificate|null $value Value to set for the rootCertificate property.
    */
    public function setRootCertificate(?IosTrustedRootCertificate $value): void {
        $this->getBackingStore()->set('rootCertificate', $value);
    }

    /**
     * Sets the scepServerUrls property value. SCEP Server Url(s).
     *  @param array<string>|null $value Value to set for the scepServerUrls property.
    */
    public function setScepServerUrls(?array $value): void {
        $this->getBackingStore()->set('scepServerUrls', $value);
    }

    /**
     * Sets the subjectAlternativeNameFormatString property value. Custom String that defines the AAD Attribute.
     *  @param string|null $value Value to set for the subjectAlternativeNameFormatString property.
    */
    public function setSubjectAlternativeNameFormatString(?string $value): void {
        $this->getBackingStore()->set('subjectAlternativeNameFormatString', $value);
    }

    /**
     * Sets the subjectNameFormatString property value. Custom format to use with SubjectNameFormat = Custom. Example: CN={{EmailAddress}},E={{EmailAddress}},OU=Enterprise Users,O=Contoso Corporation,L=Redmond,ST=WA,C=US
     *  @param string|null $value Value to set for the subjectNameFormatString property.
    */
    public function setSubjectNameFormatString(?string $value): void {
        $this->getBackingStore()->set('subjectNameFormatString', $value);
    }

}

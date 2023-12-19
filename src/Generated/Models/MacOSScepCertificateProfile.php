<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Mac OS SCEP certificate profile.
*/
class MacOSScepCertificateProfile extends MacOSCertificateProfileBase implements Parsable 
{
    /**
     * Instantiates a new macOSScepCertificateProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.macOSScepCertificateProfile');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOSScepCertificateProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOSScepCertificateProfile {
        return new MacOSScepCertificateProfile();
    }

    /**
     * Gets the allowAllAppsAccess property value. AllowAllAppsAccess setting
     * @return bool|null
    */
    public function getAllowAllAppsAccess(): ?bool {
        $val = $this->getBackingStore()->get('allowAllAppsAccess');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowAllAppsAccess'");
    }

    /**
     * Gets the certificateStore property value. Target store certificate. Possible values are: user, machine.
     * @return MacOSScepCertificateProfile_certificateStore|null
    */
    public function getCertificateStore(): ?MacOSScepCertificateProfile_certificateStore {
        $val = $this->getBackingStore()->get('certificateStore');
        if (is_null($val) || $val instanceof MacOSScepCertificateProfile_certificateStore) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificateStore'");
    }

    /**
     * Gets the customSubjectAlternativeNames property value. Custom Subject Alternative Name Settings. This collection can contain a maximum of 500 elements.
     * @return array<CustomSubjectAlternativeName>|null
    */
    public function getCustomSubjectAlternativeNames(): ?array {
        $val = $this->getBackingStore()->get('customSubjectAlternativeNames');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CustomSubjectAlternativeName::class);
            /** @var array<CustomSubjectAlternativeName>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customSubjectAlternativeNames'");
    }

    /**
     * Gets the extendedKeyUsages property value. Extended Key Usage (EKU) settings. This collection can contain a maximum of 500 elements.
     * @return array<ExtendedKeyUsage>|null
    */
    public function getExtendedKeyUsages(): ?array {
        $val = $this->getBackingStore()->get('extendedKeyUsages');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ExtendedKeyUsage::class);
            /** @var array<ExtendedKeyUsage>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'extendedKeyUsages'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowAllAppsAccess' => fn(ParseNode $n) => $o->setAllowAllAppsAccess($n->getBooleanValue()),
            'certificateStore' => fn(ParseNode $n) => $o->setCertificateStore($n->getEnumValue(MacOSScepCertificateProfile_certificateStore::class)),
            'customSubjectAlternativeNames' => fn(ParseNode $n) => $o->setCustomSubjectAlternativeNames($n->getCollectionOfObjectValues([CustomSubjectAlternativeName::class, 'createFromDiscriminatorValue'])),
            'extendedKeyUsages' => fn(ParseNode $n) => $o->setExtendedKeyUsages($n->getCollectionOfObjectValues([ExtendedKeyUsage::class, 'createFromDiscriminatorValue'])),
            'hashAlgorithm' => fn(ParseNode $n) => $o->setHashAlgorithm($n->getEnumValue(MacOSScepCertificateProfile_hashAlgorithm::class)),
            'keySize' => fn(ParseNode $n) => $o->setKeySize($n->getEnumValue(KeySize::class)),
            'keyUsage' => fn(ParseNode $n) => $o->setKeyUsage($n->getEnumValue(KeyUsages::class)),
            'managedDeviceCertificateStates' => fn(ParseNode $n) => $o->setManagedDeviceCertificateStates($n->getCollectionOfObjectValues([ManagedDeviceCertificateState::class, 'createFromDiscriminatorValue'])),
            'rootCertificate' => fn(ParseNode $n) => $o->setRootCertificate($n->getObjectValue([MacOSTrustedRootCertificate::class, 'createFromDiscriminatorValue'])),
            'scepServerUrls' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setScepServerUrls($val);
            },
            'subjectAlternativeNameFormatString' => fn(ParseNode $n) => $o->setSubjectAlternativeNameFormatString($n->getStringValue()),
            'subjectNameFormatString' => fn(ParseNode $n) => $o->setSubjectNameFormatString($n->getStringValue()),
        ]);
    }

    /**
     * Gets the hashAlgorithm property value. SCEP Hash Algorithm. Possible values are: sha1, sha2.
     * @return MacOSScepCertificateProfile_hashAlgorithm|null
    */
    public function getHashAlgorithm(): ?MacOSScepCertificateProfile_hashAlgorithm {
        $val = $this->getBackingStore()->get('hashAlgorithm');
        if (is_null($val) || $val instanceof MacOSScepCertificateProfile_hashAlgorithm) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hashAlgorithm'");
    }

    /**
     * Gets the keySize property value. Key Size Options.
     * @return KeySize|null
    */
    public function getKeySize(): ?KeySize {
        $val = $this->getBackingStore()->get('keySize');
        if (is_null($val) || $val instanceof KeySize) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'keySize'");
    }

    /**
     * Gets the keyUsage property value. Key Usage Options.
     * @return KeyUsages|null
    */
    public function getKeyUsage(): ?KeyUsages {
        $val = $this->getBackingStore()->get('keyUsage');
        if (is_null($val) || $val instanceof KeyUsages) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'keyUsage'");
    }

    /**
     * Gets the managedDeviceCertificateStates property value. Certificate state for devices. This collection can contain a maximum of 2147483647 elements.
     * @return array<ManagedDeviceCertificateState>|null
    */
    public function getManagedDeviceCertificateStates(): ?array {
        $val = $this->getBackingStore()->get('managedDeviceCertificateStates');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ManagedDeviceCertificateState::class);
            /** @var array<ManagedDeviceCertificateState>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedDeviceCertificateStates'");
    }

    /**
     * Gets the rootCertificate property value. Trusted Root Certificate.
     * @return MacOSTrustedRootCertificate|null
    */
    public function getRootCertificate(): ?MacOSTrustedRootCertificate {
        $val = $this->getBackingStore()->get('rootCertificate');
        if (is_null($val) || $val instanceof MacOSTrustedRootCertificate) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rootCertificate'");
    }

    /**
     * Gets the scepServerUrls property value. SCEP Server Url(s).
     * @return array<string>|null
    */
    public function getScepServerUrls(): ?array {
        $val = $this->getBackingStore()->get('scepServerUrls');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scepServerUrls'");
    }

    /**
     * Gets the subjectAlternativeNameFormatString property value. Custom String that defines the AAD Attribute.
     * @return string|null
    */
    public function getSubjectAlternativeNameFormatString(): ?string {
        $val = $this->getBackingStore()->get('subjectAlternativeNameFormatString');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subjectAlternativeNameFormatString'");
    }

    /**
     * Gets the subjectNameFormatString property value. Custom format to use with SubjectNameFormat = Custom. Example: CN={{EmailAddress}},E={{EmailAddress}},OU=Enterprise Users,O=Contoso Corporation,L=Redmond,ST=WA,C=US
     * @return string|null
    */
    public function getSubjectNameFormatString(): ?string {
        $val = $this->getBackingStore()->get('subjectNameFormatString');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subjectNameFormatString'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowAllAppsAccess', $this->getAllowAllAppsAccess());
        $writer->writeEnumValue('certificateStore', $this->getCertificateStore());
        $writer->writeCollectionOfObjectValues('customSubjectAlternativeNames', $this->getCustomSubjectAlternativeNames());
        $writer->writeCollectionOfObjectValues('extendedKeyUsages', $this->getExtendedKeyUsages());
        $writer->writeEnumValue('hashAlgorithm', $this->getHashAlgorithm());
        $writer->writeEnumValue('keySize', $this->getKeySize());
        $writer->writeEnumValue('keyUsage', $this->getKeyUsage());
        $writer->writeCollectionOfObjectValues('managedDeviceCertificateStates', $this->getManagedDeviceCertificateStates());
        $writer->writeObjectValue('rootCertificate', $this->getRootCertificate());
        $writer->writeCollectionOfPrimitiveValues('scepServerUrls', $this->getScepServerUrls());
        $writer->writeStringValue('subjectAlternativeNameFormatString', $this->getSubjectAlternativeNameFormatString());
        $writer->writeStringValue('subjectNameFormatString', $this->getSubjectNameFormatString());
    }

    /**
     * Sets the allowAllAppsAccess property value. AllowAllAppsAccess setting
     * @param bool|null $value Value to set for the allowAllAppsAccess property.
    */
    public function setAllowAllAppsAccess(?bool $value): void {
        $this->getBackingStore()->set('allowAllAppsAccess', $value);
    }

    /**
     * Sets the certificateStore property value. Target store certificate. Possible values are: user, machine.
     * @param MacOSScepCertificateProfile_certificateStore|null $value Value to set for the certificateStore property.
    */
    public function setCertificateStore(?MacOSScepCertificateProfile_certificateStore $value): void {
        $this->getBackingStore()->set('certificateStore', $value);
    }

    /**
     * Sets the customSubjectAlternativeNames property value. Custom Subject Alternative Name Settings. This collection can contain a maximum of 500 elements.
     * @param array<CustomSubjectAlternativeName>|null $value Value to set for the customSubjectAlternativeNames property.
    */
    public function setCustomSubjectAlternativeNames(?array $value): void {
        $this->getBackingStore()->set('customSubjectAlternativeNames', $value);
    }

    /**
     * Sets the extendedKeyUsages property value. Extended Key Usage (EKU) settings. This collection can contain a maximum of 500 elements.
     * @param array<ExtendedKeyUsage>|null $value Value to set for the extendedKeyUsages property.
    */
    public function setExtendedKeyUsages(?array $value): void {
        $this->getBackingStore()->set('extendedKeyUsages', $value);
    }

    /**
     * Sets the hashAlgorithm property value. SCEP Hash Algorithm. Possible values are: sha1, sha2.
     * @param MacOSScepCertificateProfile_hashAlgorithm|null $value Value to set for the hashAlgorithm property.
    */
    public function setHashAlgorithm(?MacOSScepCertificateProfile_hashAlgorithm $value): void {
        $this->getBackingStore()->set('hashAlgorithm', $value);
    }

    /**
     * Sets the keySize property value. Key Size Options.
     * @param KeySize|null $value Value to set for the keySize property.
    */
    public function setKeySize(?KeySize $value): void {
        $this->getBackingStore()->set('keySize', $value);
    }

    /**
     * Sets the keyUsage property value. Key Usage Options.
     * @param KeyUsages|null $value Value to set for the keyUsage property.
    */
    public function setKeyUsage(?KeyUsages $value): void {
        $this->getBackingStore()->set('keyUsage', $value);
    }

    /**
     * Sets the managedDeviceCertificateStates property value. Certificate state for devices. This collection can contain a maximum of 2147483647 elements.
     * @param array<ManagedDeviceCertificateState>|null $value Value to set for the managedDeviceCertificateStates property.
    */
    public function setManagedDeviceCertificateStates(?array $value): void {
        $this->getBackingStore()->set('managedDeviceCertificateStates', $value);
    }

    /**
     * Sets the rootCertificate property value. Trusted Root Certificate.
     * @param MacOSTrustedRootCertificate|null $value Value to set for the rootCertificate property.
    */
    public function setRootCertificate(?MacOSTrustedRootCertificate $value): void {
        $this->getBackingStore()->set('rootCertificate', $value);
    }

    /**
     * Sets the scepServerUrls property value. SCEP Server Url(s).
     * @param array<string>|null $value Value to set for the scepServerUrls property.
    */
    public function setScepServerUrls(?array $value): void {
        $this->getBackingStore()->set('scepServerUrls', $value);
    }

    /**
     * Sets the subjectAlternativeNameFormatString property value. Custom String that defines the AAD Attribute.
     * @param string|null $value Value to set for the subjectAlternativeNameFormatString property.
    */
    public function setSubjectAlternativeNameFormatString(?string $value): void {
        $this->getBackingStore()->set('subjectAlternativeNameFormatString', $value);
    }

    /**
     * Sets the subjectNameFormatString property value. Custom format to use with SubjectNameFormat = Custom. Example: CN={{EmailAddress}},E={{EmailAddress}},OU=Enterprise Users,O=Contoso Corporation,L=Redmond,ST=WA,C=US
     * @param string|null $value Value to set for the subjectNameFormatString property.
    */
    public function setSubjectNameFormatString(?string $value): void {
        $this->getBackingStore()->set('subjectNameFormatString', $value);
    }

}

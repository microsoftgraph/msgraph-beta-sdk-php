<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * MacOS PKCS certificate profile.
*/
class MacOSPkcsCertificateProfile extends MacOSCertificateProfileBase implements Parsable 
{
    /**
     * Instantiates a new MacOSPkcsCertificateProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.macOSPkcsCertificateProfile');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOSPkcsCertificateProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOSPkcsCertificateProfile {
        return new MacOSPkcsCertificateProfile();
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
     * @return CertificateStore|null
    */
    public function getCertificateStore(): ?CertificateStore {
        $val = $this->getBackingStore()->get('certificateStore');
        if (is_null($val) || $val instanceof CertificateStore) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificateStore'");
    }

    /**
     * Gets the certificateTemplateName property value. PKCS certificate template name.
     * @return string|null
    */
    public function getCertificateTemplateName(): ?string {
        $val = $this->getBackingStore()->get('certificateTemplateName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificateTemplateName'");
    }

    /**
     * Gets the certificationAuthority property value. PKCS certification authority FQDN.
     * @return string|null
    */
    public function getCertificationAuthority(): ?string {
        $val = $this->getBackingStore()->get('certificationAuthority');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificationAuthority'");
    }

    /**
     * Gets the certificationAuthorityName property value. PKCS certification authority Name.
     * @return string|null
    */
    public function getCertificationAuthorityName(): ?string {
        $val = $this->getBackingStore()->get('certificationAuthorityName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificationAuthorityName'");
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowAllAppsAccess' => fn(ParseNode $n) => $o->setAllowAllAppsAccess($n->getBooleanValue()),
            'certificateStore' => fn(ParseNode $n) => $o->setCertificateStore($n->getEnumValue(CertificateStore::class)),
            'certificateTemplateName' => fn(ParseNode $n) => $o->setCertificateTemplateName($n->getStringValue()),
            'certificationAuthority' => fn(ParseNode $n) => $o->setCertificationAuthority($n->getStringValue()),
            'certificationAuthorityName' => fn(ParseNode $n) => $o->setCertificationAuthorityName($n->getStringValue()),
            'customSubjectAlternativeNames' => fn(ParseNode $n) => $o->setCustomSubjectAlternativeNames($n->getCollectionOfObjectValues([CustomSubjectAlternativeName::class, 'createFromDiscriminatorValue'])),
            'managedDeviceCertificateStates' => fn(ParseNode $n) => $o->setManagedDeviceCertificateStates($n->getCollectionOfObjectValues([ManagedDeviceCertificateState::class, 'createFromDiscriminatorValue'])),
            'subjectAlternativeNameFormatString' => fn(ParseNode $n) => $o->setSubjectAlternativeNameFormatString($n->getStringValue()),
            'subjectNameFormatString' => fn(ParseNode $n) => $o->setSubjectNameFormatString($n->getStringValue()),
        ]);
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
     * Gets the subjectAlternativeNameFormatString property value. Format string that defines the subject alternative name.
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
     * Gets the subjectNameFormatString property value. Format string that defines the subject name. Example: CN={{EmailAddress}},E={{EmailAddress}},OU=Enterprise Users,O=Contoso Corporation,L=Redmond,ST=WA,C=US
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
        $writer->writeStringValue('certificateTemplateName', $this->getCertificateTemplateName());
        $writer->writeStringValue('certificationAuthority', $this->getCertificationAuthority());
        $writer->writeStringValue('certificationAuthorityName', $this->getCertificationAuthorityName());
        $writer->writeCollectionOfObjectValues('customSubjectAlternativeNames', $this->getCustomSubjectAlternativeNames());
        $writer->writeCollectionOfObjectValues('managedDeviceCertificateStates', $this->getManagedDeviceCertificateStates());
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
     * @param CertificateStore|null $value Value to set for the certificateStore property.
    */
    public function setCertificateStore(?CertificateStore $value): void {
        $this->getBackingStore()->set('certificateStore', $value);
    }

    /**
     * Sets the certificateTemplateName property value. PKCS certificate template name.
     * @param string|null $value Value to set for the certificateTemplateName property.
    */
    public function setCertificateTemplateName(?string $value): void {
        $this->getBackingStore()->set('certificateTemplateName', $value);
    }

    /**
     * Sets the certificationAuthority property value. PKCS certification authority FQDN.
     * @param string|null $value Value to set for the certificationAuthority property.
    */
    public function setCertificationAuthority(?string $value): void {
        $this->getBackingStore()->set('certificationAuthority', $value);
    }

    /**
     * Sets the certificationAuthorityName property value. PKCS certification authority Name.
     * @param string|null $value Value to set for the certificationAuthorityName property.
    */
    public function setCertificationAuthorityName(?string $value): void {
        $this->getBackingStore()->set('certificationAuthorityName', $value);
    }

    /**
     * Sets the customSubjectAlternativeNames property value. Custom Subject Alternative Name Settings. This collection can contain a maximum of 500 elements.
     * @param array<CustomSubjectAlternativeName>|null $value Value to set for the customSubjectAlternativeNames property.
    */
    public function setCustomSubjectAlternativeNames(?array $value): void {
        $this->getBackingStore()->set('customSubjectAlternativeNames', $value);
    }

    /**
     * Sets the managedDeviceCertificateStates property value. Certificate state for devices. This collection can contain a maximum of 2147483647 elements.
     * @param array<ManagedDeviceCertificateState>|null $value Value to set for the managedDeviceCertificateStates property.
    */
    public function setManagedDeviceCertificateStates(?array $value): void {
        $this->getBackingStore()->set('managedDeviceCertificateStates', $value);
    }

    /**
     * Sets the subjectAlternativeNameFormatString property value. Format string that defines the subject alternative name.
     * @param string|null $value Value to set for the subjectAlternativeNameFormatString property.
    */
    public function setSubjectAlternativeNameFormatString(?string $value): void {
        $this->getBackingStore()->set('subjectAlternativeNameFormatString', $value);
    }

    /**
     * Sets the subjectNameFormatString property value. Format string that defines the subject name. Example: CN={{EmailAddress}},E={{EmailAddress}},OU=Enterprise Users,O=Contoso Corporation,L=Redmond,ST=WA,C=US
     * @param string|null $value Value to set for the subjectNameFormatString property.
    */
    public function setSubjectNameFormatString(?string $value): void {
        $this->getBackingStore()->set('subjectNameFormatString', $value);
    }

}

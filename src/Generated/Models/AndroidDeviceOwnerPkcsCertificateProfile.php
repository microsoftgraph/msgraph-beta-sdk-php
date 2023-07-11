<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Android Device Owner PKCS certificate profile
*/
class AndroidDeviceOwnerPkcsCertificateProfile extends AndroidDeviceOwnerCertificateProfileBase implements Parsable 
{
    /**
     * Instantiates a new androidDeviceOwnerPkcsCertificateProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.androidDeviceOwnerPkcsCertificateProfile');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidDeviceOwnerPkcsCertificateProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidDeviceOwnerPkcsCertificateProfile {
        return new AndroidDeviceOwnerPkcsCertificateProfile();
    }

    /**
     * Gets the certificateAccessType property value. Certificate access type. Possible values are: userApproval, specificApps, unknownFutureValue.
     * @return AndroidDeviceOwnerCertificateAccessType|null
    */
    public function getCertificateAccessType(): ?AndroidDeviceOwnerCertificateAccessType {
        $val = $this->getBackingStore()->get('certificateAccessType');
        if (is_null($val) || $val instanceof AndroidDeviceOwnerCertificateAccessType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificateAccessType'");
    }

    /**
     * Gets the certificateStore property value. CertificateStore types
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
     * Gets the certificateTemplateName property value. PKCS Certificate Template Name
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
     * Gets the certificationAuthority property value. PKCS Certification Authority
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
     * Gets the certificationAuthorityName property value. PKCS Certification Authority Name
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
     * Gets the certificationAuthorityType property value. Device Management Certification Authority Types.
     * @return DeviceManagementCertificationAuthority|null
    */
    public function getCertificationAuthorityType(): ?DeviceManagementCertificationAuthority {
        $val = $this->getBackingStore()->get('certificationAuthorityType');
        if (is_null($val) || $val instanceof DeviceManagementCertificationAuthority) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificationAuthorityType'");
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
            'certificateAccessType' => fn(ParseNode $n) => $o->setCertificateAccessType($n->getEnumValue(AndroidDeviceOwnerCertificateAccessType::class)),
            'certificateStore' => fn(ParseNode $n) => $o->setCertificateStore($n->getEnumValue(CertificateStore::class)),
            'certificateTemplateName' => fn(ParseNode $n) => $o->setCertificateTemplateName($n->getStringValue()),
            'certificationAuthority' => fn(ParseNode $n) => $o->setCertificationAuthority($n->getStringValue()),
            'certificationAuthorityName' => fn(ParseNode $n) => $o->setCertificationAuthorityName($n->getStringValue()),
            'certificationAuthorityType' => fn(ParseNode $n) => $o->setCertificationAuthorityType($n->getEnumValue(DeviceManagementCertificationAuthority::class)),
            'customSubjectAlternativeNames' => fn(ParseNode $n) => $o->setCustomSubjectAlternativeNames($n->getCollectionOfObjectValues([CustomSubjectAlternativeName::class, 'createFromDiscriminatorValue'])),
            'managedDeviceCertificateStates' => fn(ParseNode $n) => $o->setManagedDeviceCertificateStates($n->getCollectionOfObjectValues([ManagedDeviceCertificateState::class, 'createFromDiscriminatorValue'])),
            'silentCertificateAccessDetails' => fn(ParseNode $n) => $o->setSilentCertificateAccessDetails($n->getCollectionOfObjectValues([AndroidDeviceOwnerSilentCertificateAccess::class, 'createFromDiscriminatorValue'])),
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
     * Gets the silentCertificateAccessDetails property value. Certificate access information. This collection can contain a maximum of 50 elements.
     * @return array<AndroidDeviceOwnerSilentCertificateAccess>|null
    */
    public function getSilentCertificateAccessDetails(): ?array {
        $val = $this->getBackingStore()->get('silentCertificateAccessDetails');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AndroidDeviceOwnerSilentCertificateAccess::class);
            /** @var array<AndroidDeviceOwnerSilentCertificateAccess>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'silentCertificateAccessDetails'");
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
        $writer->writeEnumValue('certificateAccessType', $this->getCertificateAccessType());
        $writer->writeEnumValue('certificateStore', $this->getCertificateStore());
        $writer->writeStringValue('certificateTemplateName', $this->getCertificateTemplateName());
        $writer->writeStringValue('certificationAuthority', $this->getCertificationAuthority());
        $writer->writeStringValue('certificationAuthorityName', $this->getCertificationAuthorityName());
        $writer->writeEnumValue('certificationAuthorityType', $this->getCertificationAuthorityType());
        $writer->writeCollectionOfObjectValues('customSubjectAlternativeNames', $this->getCustomSubjectAlternativeNames());
        $writer->writeCollectionOfObjectValues('managedDeviceCertificateStates', $this->getManagedDeviceCertificateStates());
        $writer->writeCollectionOfObjectValues('silentCertificateAccessDetails', $this->getSilentCertificateAccessDetails());
        $writer->writeStringValue('subjectAlternativeNameFormatString', $this->getSubjectAlternativeNameFormatString());
        $writer->writeStringValue('subjectNameFormatString', $this->getSubjectNameFormatString());
    }

    /**
     * Sets the certificateAccessType property value. Certificate access type. Possible values are: userApproval, specificApps, unknownFutureValue.
     * @param AndroidDeviceOwnerCertificateAccessType|null $value Value to set for the certificateAccessType property.
    */
    public function setCertificateAccessType(?AndroidDeviceOwnerCertificateAccessType $value): void {
        $this->getBackingStore()->set('certificateAccessType', $value);
    }

    /**
     * Sets the certificateStore property value. CertificateStore types
     * @param CertificateStore|null $value Value to set for the certificateStore property.
    */
    public function setCertificateStore(?CertificateStore $value): void {
        $this->getBackingStore()->set('certificateStore', $value);
    }

    /**
     * Sets the certificateTemplateName property value. PKCS Certificate Template Name
     * @param string|null $value Value to set for the certificateTemplateName property.
    */
    public function setCertificateTemplateName(?string $value): void {
        $this->getBackingStore()->set('certificateTemplateName', $value);
    }

    /**
     * Sets the certificationAuthority property value. PKCS Certification Authority
     * @param string|null $value Value to set for the certificationAuthority property.
    */
    public function setCertificationAuthority(?string $value): void {
        $this->getBackingStore()->set('certificationAuthority', $value);
    }

    /**
     * Sets the certificationAuthorityName property value. PKCS Certification Authority Name
     * @param string|null $value Value to set for the certificationAuthorityName property.
    */
    public function setCertificationAuthorityName(?string $value): void {
        $this->getBackingStore()->set('certificationAuthorityName', $value);
    }

    /**
     * Sets the certificationAuthorityType property value. Device Management Certification Authority Types.
     * @param DeviceManagementCertificationAuthority|null $value Value to set for the certificationAuthorityType property.
    */
    public function setCertificationAuthorityType(?DeviceManagementCertificationAuthority $value): void {
        $this->getBackingStore()->set('certificationAuthorityType', $value);
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
     * Sets the silentCertificateAccessDetails property value. Certificate access information. This collection can contain a maximum of 50 elements.
     * @param array<AndroidDeviceOwnerSilentCertificateAccess>|null $value Value to set for the silentCertificateAccessDetails property.
    */
    public function setSilentCertificateAccessDetails(?array $value): void {
        $this->getBackingStore()->set('silentCertificateAccessDetails', $value);
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

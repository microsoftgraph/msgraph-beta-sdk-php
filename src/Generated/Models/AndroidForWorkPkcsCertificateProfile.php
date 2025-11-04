<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Android For Work PKCS certificate profile
*/
class AndroidForWorkPkcsCertificateProfile extends AndroidForWorkCertificateProfileBase implements Parsable 
{
    /**
     * Instantiates a new AndroidForWorkPkcsCertificateProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.androidForWorkPkcsCertificateProfile');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidForWorkPkcsCertificateProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidForWorkPkcsCertificateProfile {
        return new AndroidForWorkPkcsCertificateProfile();
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'certificateTemplateName' => fn(ParseNode $n) => $o->setCertificateTemplateName($n->getStringValue()),
            'certificationAuthority' => fn(ParseNode $n) => $o->setCertificationAuthority($n->getStringValue()),
            'certificationAuthorityName' => fn(ParseNode $n) => $o->setCertificationAuthorityName($n->getStringValue()),
            'managedDeviceCertificateStates' => fn(ParseNode $n) => $o->setManagedDeviceCertificateStates($n->getCollectionOfObjectValues([ManagedDeviceCertificateState::class, 'createFromDiscriminatorValue'])),
            'subjectAlternativeNameFormatString' => fn(ParseNode $n) => $o->setSubjectAlternativeNameFormatString($n->getStringValue()),
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('certificateTemplateName', $this->getCertificateTemplateName());
        $writer->writeStringValue('certificationAuthority', $this->getCertificationAuthority());
        $writer->writeStringValue('certificationAuthorityName', $this->getCertificationAuthorityName());
        $writer->writeCollectionOfObjectValues('managedDeviceCertificateStates', $this->getManagedDeviceCertificateStates());
        $writer->writeStringValue('subjectAlternativeNameFormatString', $this->getSubjectAlternativeNameFormatString());
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
     * Sets the managedDeviceCertificateStates property value. Certificate state for devices. This collection can contain a maximum of 2147483647 elements.
     * @param array<ManagedDeviceCertificateState>|null $value Value to set for the managedDeviceCertificateStates property.
    */
    public function setManagedDeviceCertificateStates(?array $value): void {
        $this->getBackingStore()->set('managedDeviceCertificateStates', $value);
    }

    /**
     * Sets the subjectAlternativeNameFormatString property value. Custom String that defines the AAD Attribute.
     * @param string|null $value Value to set for the subjectAlternativeNameFormatString property.
    */
    public function setSubjectAlternativeNameFormatString(?string $value): void {
        $this->getBackingStore()->set('subjectAlternativeNameFormatString', $value);
    }

}

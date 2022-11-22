<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidForWorkCertificateProfileBase extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new AndroidForWorkCertificateProfileBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.androidForWorkCertificateProfileBase');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidForWorkCertificateProfileBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidForWorkCertificateProfileBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.androidForWorkPkcsCertificateProfile': return new AndroidForWorkPkcsCertificateProfile();
                case '#microsoft.graph.androidForWorkScepCertificateProfile': return new AndroidForWorkScepCertificateProfile();
            }
        }
        return new AndroidForWorkCertificateProfileBase();
    }

    /**
     * Gets the certificateValidityPeriodScale property value. Certificate Validity Period Options.
     * @return CertificateValidityPeriodScale|null
    */
    public function getCertificateValidityPeriodScale(): ?CertificateValidityPeriodScale {
        return $this->getBackingStore()->get('certificateValidityPeriodScale');
    }

    /**
     * Gets the certificateValidityPeriodValue property value. Value for the Certificate Validity Period.
     * @return int|null
    */
    public function getCertificateValidityPeriodValue(): ?int {
        return $this->getBackingStore()->get('certificateValidityPeriodValue');
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
            'certificateValidityPeriodScale' => fn(ParseNode $n) => $o->setCertificateValidityPeriodScale($n->getEnumValue(CertificateValidityPeriodScale::class)),
            'certificateValidityPeriodValue' => fn(ParseNode $n) => $o->setCertificateValidityPeriodValue($n->getIntegerValue()),
            'extendedKeyUsages' => fn(ParseNode $n) => $o->setExtendedKeyUsages($n->getCollectionOfObjectValues([ExtendedKeyUsage::class, 'createFromDiscriminatorValue'])),
            'renewalThresholdPercentage' => fn(ParseNode $n) => $o->setRenewalThresholdPercentage($n->getIntegerValue()),
            'rootCertificate' => fn(ParseNode $n) => $o->setRootCertificate($n->getObjectValue([AndroidForWorkTrustedRootCertificate::class, 'createFromDiscriminatorValue'])),
            'subjectAlternativeNameType' => fn(ParseNode $n) => $o->setSubjectAlternativeNameType($n->getEnumValue(SubjectAlternativeNameType::class)),
            'subjectNameFormat' => fn(ParseNode $n) => $o->setSubjectNameFormat($n->getEnumValue(SubjectNameFormat::class)),
        ]);
    }

    /**
     * Gets the renewalThresholdPercentage property value. Certificate renewal threshold percentage. Valid values 1 to 99
     * @return int|null
    */
    public function getRenewalThresholdPercentage(): ?int {
        return $this->getBackingStore()->get('renewalThresholdPercentage');
    }

    /**
     * Gets the rootCertificate property value. Trusted Root Certificate.
     * @return AndroidForWorkTrustedRootCertificate|null
    */
    public function getRootCertificate(): ?AndroidForWorkTrustedRootCertificate {
        return $this->getBackingStore()->get('rootCertificate');
    }

    /**
     * Gets the subjectAlternativeNameType property value. Certificate Subject Alternative Name Type. Possible values are: none, emailAddress, userPrincipalName, customAzureADAttribute, domainNameService, universalResourceIdentifier.
     * @return SubjectAlternativeNameType|null
    */
    public function getSubjectAlternativeNameType(): ?SubjectAlternativeNameType {
        return $this->getBackingStore()->get('subjectAlternativeNameType');
    }

    /**
     * Gets the subjectNameFormat property value. Subject Name Format Options.
     * @return SubjectNameFormat|null
    */
    public function getSubjectNameFormat(): ?SubjectNameFormat {
        return $this->getBackingStore()->get('subjectNameFormat');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('certificateValidityPeriodScale', $this->getCertificateValidityPeriodScale());
        $writer->writeIntegerValue('certificateValidityPeriodValue', $this->getCertificateValidityPeriodValue());
        $writer->writeCollectionOfObjectValues('extendedKeyUsages', $this->getExtendedKeyUsages());
        $writer->writeIntegerValue('renewalThresholdPercentage', $this->getRenewalThresholdPercentage());
        $writer->writeObjectValue('rootCertificate', $this->getRootCertificate());
        $writer->writeEnumValue('subjectAlternativeNameType', $this->getSubjectAlternativeNameType());
        $writer->writeEnumValue('subjectNameFormat', $this->getSubjectNameFormat());
    }

    /**
     * Sets the certificateValidityPeriodScale property value. Certificate Validity Period Options.
     *  @param CertificateValidityPeriodScale|null $value Value to set for the certificateValidityPeriodScale property.
    */
    public function setCertificateValidityPeriodScale(?CertificateValidityPeriodScale $value): void {
        $this->getBackingStore()->set('certificateValidityPeriodScale', $value);
    }

    /**
     * Sets the certificateValidityPeriodValue property value. Value for the Certificate Validity Period.
     *  @param int|null $value Value to set for the certificateValidityPeriodValue property.
    */
    public function setCertificateValidityPeriodValue(?int $value): void {
        $this->getBackingStore()->set('certificateValidityPeriodValue', $value);
    }

    /**
     * Sets the extendedKeyUsages property value. Extended Key Usage (EKU) settings. This collection can contain a maximum of 500 elements.
     *  @param array<ExtendedKeyUsage>|null $value Value to set for the extendedKeyUsages property.
    */
    public function setExtendedKeyUsages(?array $value): void {
        $this->getBackingStore()->set('extendedKeyUsages', $value);
    }

    /**
     * Sets the renewalThresholdPercentage property value. Certificate renewal threshold percentage. Valid values 1 to 99
     *  @param int|null $value Value to set for the renewalThresholdPercentage property.
    */
    public function setRenewalThresholdPercentage(?int $value): void {
        $this->getBackingStore()->set('renewalThresholdPercentage', $value);
    }

    /**
     * Sets the rootCertificate property value. Trusted Root Certificate.
     *  @param AndroidForWorkTrustedRootCertificate|null $value Value to set for the rootCertificate property.
    */
    public function setRootCertificate(?AndroidForWorkTrustedRootCertificate $value): void {
        $this->getBackingStore()->set('rootCertificate', $value);
    }

    /**
     * Sets the subjectAlternativeNameType property value. Certificate Subject Alternative Name Type. Possible values are: none, emailAddress, userPrincipalName, customAzureADAttribute, domainNameService, universalResourceIdentifier.
     *  @param SubjectAlternativeNameType|null $value Value to set for the subjectAlternativeNameType property.
    */
    public function setSubjectAlternativeNameType(?SubjectAlternativeNameType $value): void {
        $this->getBackingStore()->set('subjectAlternativeNameType', $value);
    }

    /**
     * Sets the subjectNameFormat property value. Subject Name Format Options.
     *  @param SubjectNameFormat|null $value Value to set for the subjectNameFormat property.
    */
    public function setSubjectNameFormat(?SubjectNameFormat $value): void {
        $this->getBackingStore()->set('subjectNameFormat', $value);
    }

}

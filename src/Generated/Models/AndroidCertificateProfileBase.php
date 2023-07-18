<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Android certificate profile base.
*/
class AndroidCertificateProfileBase extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new androidCertificateProfileBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.androidCertificateProfileBase');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidCertificateProfileBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidCertificateProfileBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.androidForWorkImportedPFXCertificateProfile': return new AndroidForWorkImportedPFXCertificateProfile();
                case '#microsoft.graph.androidImportedPFXCertificateProfile': return new AndroidImportedPFXCertificateProfile();
                case '#microsoft.graph.androidPkcsCertificateProfile': return new AndroidPkcsCertificateProfile();
                case '#microsoft.graph.androidScepCertificateProfile': return new AndroidScepCertificateProfile();
            }
        }
        return new AndroidCertificateProfileBase();
    }

    /**
     * Gets the certificateValidityPeriodScale property value. Certificate Validity Period Options.
     * @return CertificateValidityPeriodScale|null
    */
    public function getCertificateValidityPeriodScale(): ?CertificateValidityPeriodScale {
        $val = $this->getBackingStore()->get('certificateValidityPeriodScale');
        if (is_null($val) || $val instanceof CertificateValidityPeriodScale) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificateValidityPeriodScale'");
    }

    /**
     * Gets the certificateValidityPeriodValue property value. Value for the Certificate Validity Period.
     * @return int|null
    */
    public function getCertificateValidityPeriodValue(): ?int {
        $val = $this->getBackingStore()->get('certificateValidityPeriodValue');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificateValidityPeriodValue'");
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
            'certificateValidityPeriodScale' => fn(ParseNode $n) => $o->setCertificateValidityPeriodScale($n->getEnumValue(CertificateValidityPeriodScale::class)),
            'certificateValidityPeriodValue' => fn(ParseNode $n) => $o->setCertificateValidityPeriodValue($n->getIntegerValue()),
            'extendedKeyUsages' => fn(ParseNode $n) => $o->setExtendedKeyUsages($n->getCollectionOfObjectValues([ExtendedKeyUsage::class, 'createFromDiscriminatorValue'])),
            'renewalThresholdPercentage' => fn(ParseNode $n) => $o->setRenewalThresholdPercentage($n->getIntegerValue()),
            'rootCertificate' => fn(ParseNode $n) => $o->setRootCertificate($n->getObjectValue([AndroidTrustedRootCertificate::class, 'createFromDiscriminatorValue'])),
            'subjectAlternativeNameType' => fn(ParseNode $n) => $o->setSubjectAlternativeNameType($n->getEnumValue(SubjectAlternativeNameType::class)),
            'subjectNameFormat' => fn(ParseNode $n) => $o->setSubjectNameFormat($n->getEnumValue(SubjectNameFormat::class)),
        ]);
    }

    /**
     * Gets the renewalThresholdPercentage property value. Certificate renewal threshold percentage. Valid values 1 to 99
     * @return int|null
    */
    public function getRenewalThresholdPercentage(): ?int {
        $val = $this->getBackingStore()->get('renewalThresholdPercentage');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'renewalThresholdPercentage'");
    }

    /**
     * Gets the rootCertificate property value. Trusted Root Certificate.
     * @return AndroidTrustedRootCertificate|null
    */
    public function getRootCertificate(): ?AndroidTrustedRootCertificate {
        $val = $this->getBackingStore()->get('rootCertificate');
        if (is_null($val) || $val instanceof AndroidTrustedRootCertificate) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rootCertificate'");
    }

    /**
     * Gets the subjectAlternativeNameType property value. Subject Alternative Name Options.
     * @return SubjectAlternativeNameType|null
    */
    public function getSubjectAlternativeNameType(): ?SubjectAlternativeNameType {
        $val = $this->getBackingStore()->get('subjectAlternativeNameType');
        if (is_null($val) || $val instanceof SubjectAlternativeNameType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subjectAlternativeNameType'");
    }

    /**
     * Gets the subjectNameFormat property value. Subject Name Format Options.
     * @return SubjectNameFormat|null
    */
    public function getSubjectNameFormat(): ?SubjectNameFormat {
        $val = $this->getBackingStore()->get('subjectNameFormat');
        if (is_null($val) || $val instanceof SubjectNameFormat) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subjectNameFormat'");
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
     * @param CertificateValidityPeriodScale|null $value Value to set for the certificateValidityPeriodScale property.
    */
    public function setCertificateValidityPeriodScale(?CertificateValidityPeriodScale $value): void {
        $this->getBackingStore()->set('certificateValidityPeriodScale', $value);
    }

    /**
     * Sets the certificateValidityPeriodValue property value. Value for the Certificate Validity Period.
     * @param int|null $value Value to set for the certificateValidityPeriodValue property.
    */
    public function setCertificateValidityPeriodValue(?int $value): void {
        $this->getBackingStore()->set('certificateValidityPeriodValue', $value);
    }

    /**
     * Sets the extendedKeyUsages property value. Extended Key Usage (EKU) settings. This collection can contain a maximum of 500 elements.
     * @param array<ExtendedKeyUsage>|null $value Value to set for the extendedKeyUsages property.
    */
    public function setExtendedKeyUsages(?array $value): void {
        $this->getBackingStore()->set('extendedKeyUsages', $value);
    }

    /**
     * Sets the renewalThresholdPercentage property value. Certificate renewal threshold percentage. Valid values 1 to 99
     * @param int|null $value Value to set for the renewalThresholdPercentage property.
    */
    public function setRenewalThresholdPercentage(?int $value): void {
        $this->getBackingStore()->set('renewalThresholdPercentage', $value);
    }

    /**
     * Sets the rootCertificate property value. Trusted Root Certificate.
     * @param AndroidTrustedRootCertificate|null $value Value to set for the rootCertificate property.
    */
    public function setRootCertificate(?AndroidTrustedRootCertificate $value): void {
        $this->getBackingStore()->set('rootCertificate', $value);
    }

    /**
     * Sets the subjectAlternativeNameType property value. Subject Alternative Name Options.
     * @param SubjectAlternativeNameType|null $value Value to set for the subjectAlternativeNameType property.
    */
    public function setSubjectAlternativeNameType(?SubjectAlternativeNameType $value): void {
        $this->getBackingStore()->set('subjectAlternativeNameType', $value);
    }

    /**
     * Sets the subjectNameFormat property value. Subject Name Format Options.
     * @param SubjectNameFormat|null $value Value to set for the subjectNameFormat property.
    */
    public function setSubjectNameFormat(?SubjectNameFormat $value): void {
        $this->getBackingStore()->set('subjectNameFormat', $value);
    }

}

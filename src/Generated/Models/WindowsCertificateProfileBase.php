<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsCertificateProfileBase extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new WindowsCertificateProfileBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsCertificateProfileBase');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsCertificateProfileBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsCertificateProfileBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.windows10CertificateProfileBase': return new Windows10CertificateProfileBase();
                case '#microsoft.graph.windows10ImportedPFXCertificateProfile': return new Windows10ImportedPFXCertificateProfile();
                case '#microsoft.graph.windows10PkcsCertificateProfile': return new Windows10PkcsCertificateProfile();
                case '#microsoft.graph.windows81CertificateProfileBase': return new Windows81CertificateProfileBase();
                case '#microsoft.graph.windows81SCEPCertificateProfile': return new Windows81SCEPCertificateProfile();
                case '#microsoft.graph.windowsPhone81ImportedPFXCertificateProfile': return new WindowsPhone81ImportedPFXCertificateProfile();
            }
        }
        return new WindowsCertificateProfileBase();
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
     * Gets the certificateValidityPeriodValue property value. Value for the Certificate Validity Period
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'certificateValidityPeriodScale' => fn(ParseNode $n) => $o->setCertificateValidityPeriodScale($n->getEnumValue(CertificateValidityPeriodScale::class)),
            'certificateValidityPeriodValue' => fn(ParseNode $n) => $o->setCertificateValidityPeriodValue($n->getIntegerValue()),
            'keyStorageProvider' => fn(ParseNode $n) => $o->setKeyStorageProvider($n->getEnumValue(KeyStorageProviderOption::class)),
            'renewalThresholdPercentage' => fn(ParseNode $n) => $o->setRenewalThresholdPercentage($n->getIntegerValue()),
            'subjectAlternativeNameType' => fn(ParseNode $n) => $o->setSubjectAlternativeNameType($n->getEnumValue(SubjectAlternativeNameType::class)),
            'subjectNameFormat' => fn(ParseNode $n) => $o->setSubjectNameFormat($n->getEnumValue(SubjectNameFormat::class)),
        ]);
    }

    /**
     * Gets the keyStorageProvider property value. Key Storage Provider (KSP) Import Options.
     * @return KeyStorageProviderOption|null
    */
    public function getKeyStorageProvider(): ?KeyStorageProviderOption {
        $val = $this->getBackingStore()->get('keyStorageProvider');
        if (is_null($val) || $val instanceof KeyStorageProviderOption) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'keyStorageProvider'");
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
     * Gets the subjectAlternativeNameType property value. Certificate Subject Alternative Name Type. Possible values are: none, emailAddress, userPrincipalName, customAzureADAttribute, domainNameService, universalResourceIdentifier.
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
        $writer->writeEnumValue('keyStorageProvider', $this->getKeyStorageProvider());
        $writer->writeIntegerValue('renewalThresholdPercentage', $this->getRenewalThresholdPercentage());
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
     * Sets the certificateValidityPeriodValue property value. Value for the Certificate Validity Period
     * @param int|null $value Value to set for the certificateValidityPeriodValue property.
    */
    public function setCertificateValidityPeriodValue(?int $value): void {
        $this->getBackingStore()->set('certificateValidityPeriodValue', $value);
    }

    /**
     * Sets the keyStorageProvider property value. Key Storage Provider (KSP) Import Options.
     * @param KeyStorageProviderOption|null $value Value to set for the keyStorageProvider property.
    */
    public function setKeyStorageProvider(?KeyStorageProviderOption $value): void {
        $this->getBackingStore()->set('keyStorageProvider', $value);
    }

    /**
     * Sets the renewalThresholdPercentage property value. Certificate renewal threshold percentage. Valid values 1 to 99
     * @param int|null $value Value to set for the renewalThresholdPercentage property.
    */
    public function setRenewalThresholdPercentage(?int $value): void {
        $this->getBackingStore()->set('renewalThresholdPercentage', $value);
    }

    /**
     * Sets the subjectAlternativeNameType property value. Certificate Subject Alternative Name Type. Possible values are: none, emailAddress, userPrincipalName, customAzureADAttribute, domainNameService, universalResourceIdentifier.
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

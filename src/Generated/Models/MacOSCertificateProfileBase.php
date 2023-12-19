<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Mac OS certificate profile.
*/
class MacOSCertificateProfileBase extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new macOSCertificateProfileBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.macOSCertificateProfileBase');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOSCertificateProfileBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOSCertificateProfileBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.macOSImportedPFXCertificateProfile': return new MacOSImportedPFXCertificateProfile();
                case '#microsoft.graph.macOSPkcsCertificateProfile': return new MacOSPkcsCertificateProfile();
                case '#microsoft.graph.macOSScepCertificateProfile': return new MacOSScepCertificateProfile();
            }
        }
        return new MacOSCertificateProfileBase();
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'certificateValidityPeriodScale' => fn(ParseNode $n) => $o->setCertificateValidityPeriodScale($n->getEnumValue(CertificateValidityPeriodScale::class)),
            'certificateValidityPeriodValue' => fn(ParseNode $n) => $o->setCertificateValidityPeriodValue($n->getIntegerValue()),
            'renewalThresholdPercentage' => fn(ParseNode $n) => $o->setRenewalThresholdPercentage($n->getIntegerValue()),
            'subjectAlternativeNameType' => fn(ParseNode $n) => $o->setSubjectAlternativeNameType($n->getEnumValue(MacOSCertificateProfileBase_subjectAlternativeNameType::class)),
            'subjectNameFormat' => fn(ParseNode $n) => $o->setSubjectNameFormat($n->getEnumValue(AppleSubjectNameFormat::class)),
        ]);
    }

    /**
     * Gets the renewalThresholdPercentage property value. Certificate renewal threshold percentage.
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
     * @return MacOSCertificateProfileBase_subjectAlternativeNameType|null
    */
    public function getSubjectAlternativeNameType(): ?MacOSCertificateProfileBase_subjectAlternativeNameType {
        $val = $this->getBackingStore()->get('subjectAlternativeNameType');
        if (is_null($val) || $val instanceof MacOSCertificateProfileBase_subjectAlternativeNameType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subjectAlternativeNameType'");
    }

    /**
     * Gets the subjectNameFormat property value. Subject Name Format Options for Apple devices.
     * @return AppleSubjectNameFormat|null
    */
    public function getSubjectNameFormat(): ?AppleSubjectNameFormat {
        $val = $this->getBackingStore()->get('subjectNameFormat');
        if (is_null($val) || $val instanceof AppleSubjectNameFormat) {
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
     * Sets the certificateValidityPeriodValue property value. Value for the Certificate Validity Period.
     * @param int|null $value Value to set for the certificateValidityPeriodValue property.
    */
    public function setCertificateValidityPeriodValue(?int $value): void {
        $this->getBackingStore()->set('certificateValidityPeriodValue', $value);
    }

    /**
     * Sets the renewalThresholdPercentage property value. Certificate renewal threshold percentage.
     * @param int|null $value Value to set for the renewalThresholdPercentage property.
    */
    public function setRenewalThresholdPercentage(?int $value): void {
        $this->getBackingStore()->set('renewalThresholdPercentage', $value);
    }

    /**
     * Sets the subjectAlternativeNameType property value. Certificate Subject Alternative Name Type. Possible values are: none, emailAddress, userPrincipalName, customAzureADAttribute, domainNameService, universalResourceIdentifier.
     * @param MacOSCertificateProfileBase_subjectAlternativeNameType|null $value Value to set for the subjectAlternativeNameType property.
    */
    public function setSubjectAlternativeNameType(?MacOSCertificateProfileBase_subjectAlternativeNameType $value): void {
        $this->getBackingStore()->set('subjectAlternativeNameType', $value);
    }

    /**
     * Sets the subjectNameFormat property value. Subject Name Format Options for Apple devices.
     * @param AppleSubjectNameFormat|null $value Value to set for the subjectNameFormat property.
    */
    public function setSubjectNameFormat(?AppleSubjectNameFormat $value): void {
        $this->getBackingStore()->set('subjectNameFormat', $value);
    }

}

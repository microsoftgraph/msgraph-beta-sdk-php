<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsPhone81CertificateProfileBase extends DeviceConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var CertificateValidityPeriodScale|null $certificateValidityPeriodScale Scale for the Certificate Validity Period. Possible values are: days, months, years.
    */
    private ?CertificateValidityPeriodScale $certificateValidityPeriodScale = null;
    
    /**
     * @var int|null $certificateValidityPeriodValue Value for the Certificate Validtiy Period.
    */
    private ?int $certificateValidityPeriodValue = null;
    
    /**
     * @var array<ExtendedKeyUsage>|null $extendedKeyUsages Extended Key Usage (EKU) settings. This collection can contain a maximum of 500 elements.
    */
    private ?array $extendedKeyUsages = null;
    
    /**
     * @var KeyStorageProviderOption|null $keyStorageProvider Key Storage Provider (KSP). Possible values are: useTpmKspOtherwiseUseSoftwareKsp, useTpmKspOtherwiseFail, usePassportForWorkKspOtherwiseFail, useSoftwareKsp.
    */
    private ?KeyStorageProviderOption $keyStorageProvider = null;
    
    /**
     * @var int|null $renewalThresholdPercentage Certificate renewal threshold percentage.
    */
    private ?int $renewalThresholdPercentage = null;
    
    /**
     * @var SubjectAlternativeNameType|null $subjectAlternativeNameType Certificate Subject Alternative Name Type. Possible values are: none, emailAddress, userPrincipalName, customAzureADAttribute, domainNameService, universalResourceIdentifier.
    */
    private ?SubjectAlternativeNameType $subjectAlternativeNameType = null;
    
    /**
     * @var SubjectNameFormat|null $subjectNameFormat Certificate Subject Name Format. Possible values are: commonName, commonNameIncludingEmail, commonNameAsEmail, custom, commonNameAsIMEI, commonNameAsSerialNumber, commonNameAsAadDeviceId, commonNameAsIntuneDeviceId, commonNameAsDurableDeviceId.
    */
    private ?SubjectNameFormat $subjectNameFormat = null;
    
    /**
     * Instantiates a new windowsPhone81CertificateProfileBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsPhone81CertificateProfileBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsPhone81CertificateProfileBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.windowsPhone81SCEPCertificateProfile': return new WindowsPhone81SCEPCertificateProfile();
            }
        }
        return new WindowsPhone81CertificateProfileBase();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the certificateValidityPeriodScale property value. Scale for the Certificate Validity Period. Possible values are: days, months, years.
     * @return CertificateValidityPeriodScale|null
    */
    public function getCertificateValidityPeriodScale(): ?CertificateValidityPeriodScale {
        return $this->certificateValidityPeriodScale;
    }

    /**
     * Gets the certificateValidityPeriodValue property value. Value for the Certificate Validtiy Period.
     * @return int|null
    */
    public function getCertificateValidityPeriodValue(): ?int {
        return $this->certificateValidityPeriodValue;
    }

    /**
     * Gets the extendedKeyUsages property value. Extended Key Usage (EKU) settings. This collection can contain a maximum of 500 elements.
     * @return array<ExtendedKeyUsage>|null
    */
    public function getExtendedKeyUsages(): ?array {
        return $this->extendedKeyUsages;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'certificateValidityPeriodScale' => function (ParseNode $n) use ($o) { $o->setCertificateValidityPeriodScale($n->getEnumValue(CertificateValidityPeriodScale::class)); },
            'certificateValidityPeriodValue' => function (ParseNode $n) use ($o) { $o->setCertificateValidityPeriodValue($n->getIntegerValue()); },
            'extendedKeyUsages' => function (ParseNode $n) use ($o) { $o->setExtendedKeyUsages($n->getCollectionOfObjectValues(array(ExtendedKeyUsage::class, 'createFromDiscriminatorValue'))); },
            'keyStorageProvider' => function (ParseNode $n) use ($o) { $o->setKeyStorageProvider($n->getEnumValue(KeyStorageProviderOption::class)); },
            'renewalThresholdPercentage' => function (ParseNode $n) use ($o) { $o->setRenewalThresholdPercentage($n->getIntegerValue()); },
            'subjectAlternativeNameType' => function (ParseNode $n) use ($o) { $o->setSubjectAlternativeNameType($n->getEnumValue(SubjectAlternativeNameType::class)); },
            'subjectNameFormat' => function (ParseNode $n) use ($o) { $o->setSubjectNameFormat($n->getEnumValue(SubjectNameFormat::class)); },
        ]);
    }

    /**
     * Gets the keyStorageProvider property value. Key Storage Provider (KSP). Possible values are: useTpmKspOtherwiseUseSoftwareKsp, useTpmKspOtherwiseFail, usePassportForWorkKspOtherwiseFail, useSoftwareKsp.
     * @return KeyStorageProviderOption|null
    */
    public function getKeyStorageProvider(): ?KeyStorageProviderOption {
        return $this->keyStorageProvider;
    }

    /**
     * Gets the renewalThresholdPercentage property value. Certificate renewal threshold percentage.
     * @return int|null
    */
    public function getRenewalThresholdPercentage(): ?int {
        return $this->renewalThresholdPercentage;
    }

    /**
     * Gets the subjectAlternativeNameType property value. Certificate Subject Alternative Name Type. Possible values are: none, emailAddress, userPrincipalName, customAzureADAttribute, domainNameService, universalResourceIdentifier.
     * @return SubjectAlternativeNameType|null
    */
    public function getSubjectAlternativeNameType(): ?SubjectAlternativeNameType {
        return $this->subjectAlternativeNameType;
    }

    /**
     * Gets the subjectNameFormat property value. Certificate Subject Name Format. Possible values are: commonName, commonNameIncludingEmail, commonNameAsEmail, custom, commonNameAsIMEI, commonNameAsSerialNumber, commonNameAsAadDeviceId, commonNameAsIntuneDeviceId, commonNameAsDurableDeviceId.
     * @return SubjectNameFormat|null
    */
    public function getSubjectNameFormat(): ?SubjectNameFormat {
        return $this->subjectNameFormat;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('certificateValidityPeriodScale', $this->certificateValidityPeriodScale);
        $writer->writeIntegerValue('certificateValidityPeriodValue', $this->certificateValidityPeriodValue);
        $writer->writeCollectionOfObjectValues('extendedKeyUsages', $this->extendedKeyUsages);
        $writer->writeEnumValue('keyStorageProvider', $this->keyStorageProvider);
        $writer->writeIntegerValue('renewalThresholdPercentage', $this->renewalThresholdPercentage);
        $writer->writeEnumValue('subjectAlternativeNameType', $this->subjectAlternativeNameType);
        $writer->writeEnumValue('subjectNameFormat', $this->subjectNameFormat);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the certificateValidityPeriodScale property value. Scale for the Certificate Validity Period. Possible values are: days, months, years.
     *  @param CertificateValidityPeriodScale|null $value Value to set for the certificateValidityPeriodScale property.
    */
    public function setCertificateValidityPeriodScale(?CertificateValidityPeriodScale $value ): void {
        $this->certificateValidityPeriodScale = $value;
    }

    /**
     * Sets the certificateValidityPeriodValue property value. Value for the Certificate Validtiy Period.
     *  @param int|null $value Value to set for the certificateValidityPeriodValue property.
    */
    public function setCertificateValidityPeriodValue(?int $value ): void {
        $this->certificateValidityPeriodValue = $value;
    }

    /**
     * Sets the extendedKeyUsages property value. Extended Key Usage (EKU) settings. This collection can contain a maximum of 500 elements.
     *  @param array<ExtendedKeyUsage>|null $value Value to set for the extendedKeyUsages property.
    */
    public function setExtendedKeyUsages(?array $value ): void {
        $this->extendedKeyUsages = $value;
    }

    /**
     * Sets the keyStorageProvider property value. Key Storage Provider (KSP). Possible values are: useTpmKspOtherwiseUseSoftwareKsp, useTpmKspOtherwiseFail, usePassportForWorkKspOtherwiseFail, useSoftwareKsp.
     *  @param KeyStorageProviderOption|null $value Value to set for the keyStorageProvider property.
    */
    public function setKeyStorageProvider(?KeyStorageProviderOption $value ): void {
        $this->keyStorageProvider = $value;
    }

    /**
     * Sets the renewalThresholdPercentage property value. Certificate renewal threshold percentage.
     *  @param int|null $value Value to set for the renewalThresholdPercentage property.
    */
    public function setRenewalThresholdPercentage(?int $value ): void {
        $this->renewalThresholdPercentage = $value;
    }

    /**
     * Sets the subjectAlternativeNameType property value. Certificate Subject Alternative Name Type. Possible values are: none, emailAddress, userPrincipalName, customAzureADAttribute, domainNameService, universalResourceIdentifier.
     *  @param SubjectAlternativeNameType|null $value Value to set for the subjectAlternativeNameType property.
    */
    public function setSubjectAlternativeNameType(?SubjectAlternativeNameType $value ): void {
        $this->subjectAlternativeNameType = $value;
    }

    /**
     * Sets the subjectNameFormat property value. Certificate Subject Name Format. Possible values are: commonName, commonNameIncludingEmail, commonNameAsEmail, custom, commonNameAsIMEI, commonNameAsSerialNumber, commonNameAsAadDeviceId, commonNameAsIntuneDeviceId, commonNameAsDurableDeviceId.
     *  @param SubjectNameFormat|null $value Value to set for the subjectNameFormat property.
    */
    public function setSubjectNameFormat(?SubjectNameFormat $value ): void {
        $this->subjectNameFormat = $value;
    }

}

<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Psr\Http\Message\StreamInterface;

/**
 * Trusted Root and PFX certificates for iOS EDU.
*/
class IosEduCertificateSettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new IosEduCertificateSettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosEduCertificateSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosEduCertificateSettings {
        return new IosEduCertificateSettings();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the certFileName property value. File name to display in UI.
     * @return string|null
    */
    public function getCertFileName(): ?string {
        $val = $this->getBackingStore()->get('certFileName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certFileName'");
    }

    /**
     * Gets the certificateTemplateName property value. PKCS Certificate Template Name.
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
     * Gets the certificationAuthority property value. PKCS Certification Authority.
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
     * Gets the certificationAuthorityName property value. PKCS Certification Authority Name.
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
        return  [
            'certFileName' => fn(ParseNode $n) => $o->setCertFileName($n->getStringValue()),
            'certificateTemplateName' => fn(ParseNode $n) => $o->setCertificateTemplateName($n->getStringValue()),
            'certificateValidityPeriodScale' => fn(ParseNode $n) => $o->setCertificateValidityPeriodScale($n->getEnumValue(CertificateValidityPeriodScale::class)),
            'certificateValidityPeriodValue' => fn(ParseNode $n) => $o->setCertificateValidityPeriodValue($n->getIntegerValue()),
            'certificationAuthority' => fn(ParseNode $n) => $o->setCertificationAuthority($n->getStringValue()),
            'certificationAuthorityName' => fn(ParseNode $n) => $o->setCertificationAuthorityName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'renewalThresholdPercentage' => fn(ParseNode $n) => $o->setRenewalThresholdPercentage($n->getIntegerValue()),
            'trustedRootCertificate' => fn(ParseNode $n) => $o->setTrustedRootCertificate($n->getBinaryContent()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
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
     * Gets the trustedRootCertificate property value. Trusted Root Certificate.
     * @return StreamInterface|null
    */
    public function getTrustedRootCertificate(): ?StreamInterface {
        $val = $this->getBackingStore()->get('trustedRootCertificate');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'trustedRootCertificate'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('certFileName', $this->getCertFileName());
        $writer->writeStringValue('certificateTemplateName', $this->getCertificateTemplateName());
        $writer->writeEnumValue('certificateValidityPeriodScale', $this->getCertificateValidityPeriodScale());
        $writer->writeIntegerValue('certificateValidityPeriodValue', $this->getCertificateValidityPeriodValue());
        $writer->writeStringValue('certificationAuthority', $this->getCertificationAuthority());
        $writer->writeStringValue('certificationAuthorityName', $this->getCertificationAuthorityName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('renewalThresholdPercentage', $this->getRenewalThresholdPercentage());
        $writer->writeBinaryContent('trustedRootCertificate', $this->getTrustedRootCertificate());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the certFileName property value. File name to display in UI.
     * @param string|null $value Value to set for the certFileName property.
    */
    public function setCertFileName(?string $value): void {
        $this->getBackingStore()->set('certFileName', $value);
    }

    /**
     * Sets the certificateTemplateName property value. PKCS Certificate Template Name.
     * @param string|null $value Value to set for the certificateTemplateName property.
    */
    public function setCertificateTemplateName(?string $value): void {
        $this->getBackingStore()->set('certificateTemplateName', $value);
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
     * Sets the certificationAuthority property value. PKCS Certification Authority.
     * @param string|null $value Value to set for the certificationAuthority property.
    */
    public function setCertificationAuthority(?string $value): void {
        $this->getBackingStore()->set('certificationAuthority', $value);
    }

    /**
     * Sets the certificationAuthorityName property value. PKCS Certification Authority Name.
     * @param string|null $value Value to set for the certificationAuthorityName property.
    */
    public function setCertificationAuthorityName(?string $value): void {
        $this->getBackingStore()->set('certificationAuthorityName', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the renewalThresholdPercentage property value. Certificate renewal threshold percentage. Valid values 1 to 99
     * @param int|null $value Value to set for the renewalThresholdPercentage property.
    */
    public function setRenewalThresholdPercentage(?int $value): void {
        $this->getBackingStore()->set('renewalThresholdPercentage', $value);
    }

    /**
     * Sets the trustedRootCertificate property value. Trusted Root Certificate.
     * @param StreamInterface|null $value Value to set for the trustedRootCertificate property.
    */
    public function setTrustedRootCertificate(?StreamInterface $value): void {
        $this->getBackingStore()->set('trustedRootCertificate', $value);
    }

}

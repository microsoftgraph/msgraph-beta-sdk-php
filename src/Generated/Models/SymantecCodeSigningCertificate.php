<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class SymantecCodeSigningCertificate extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new symantecCodeSigningCertificate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SymantecCodeSigningCertificate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SymantecCodeSigningCertificate {
        return new SymantecCodeSigningCertificate();
    }

    /**
     * Gets the content property value. The Windows Symantec Code-Signing Certificate in the raw data format.
     * @return StreamInterface|null
    */
    public function getContent(): ?StreamInterface {
        $val = $this->getBackingStore()->get('content');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'content'");
    }

    /**
     * Gets the expirationDateTime property value. The Cert Expiration Date.
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('expirationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expirationDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'content' => fn(ParseNode $n) => $o->setContent($n->getBinaryContent()),
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            'issuer' => fn(ParseNode $n) => $o->setIssuer($n->getStringValue()),
            'issuerName' => fn(ParseNode $n) => $o->setIssuerName($n->getStringValue()),
            'password' => fn(ParseNode $n) => $o->setPassword($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(CertificateStatus::class)),
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getStringValue()),
            'subjectName' => fn(ParseNode $n) => $o->setSubjectName($n->getStringValue()),
            'uploadDateTime' => fn(ParseNode $n) => $o->setUploadDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the issuer property value. The Issuer value for the cert.
     * @return string|null
    */
    public function getIssuer(): ?string {
        $val = $this->getBackingStore()->get('issuer');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'issuer'");
    }

    /**
     * Gets the issuerName property value. The Issuer Name for the cert.
     * @return string|null
    */
    public function getIssuerName(): ?string {
        $val = $this->getBackingStore()->get('issuerName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'issuerName'");
    }

    /**
     * Gets the password property value. The Password required for .pfx file.
     * @return string|null
    */
    public function getPassword(): ?string {
        $val = $this->getBackingStore()->get('password');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'password'");
    }

    /**
     * Gets the status property value. The status property
     * @return CertificateStatus|null
    */
    public function getStatus(): ?CertificateStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof CertificateStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the subject property value. The Subject value for the cert.
     * @return string|null
    */
    public function getSubject(): ?string {
        $val = $this->getBackingStore()->get('subject');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subject'");
    }

    /**
     * Gets the subjectName property value. The Subject Name for the cert.
     * @return string|null
    */
    public function getSubjectName(): ?string {
        $val = $this->getBackingStore()->get('subjectName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subjectName'");
    }

    /**
     * Gets the uploadDateTime property value. The Type of the CodeSigning Cert as Symantec Cert.
     * @return DateTime|null
    */
    public function getUploadDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('uploadDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'uploadDateTime'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBinaryContent('content', $this->getContent());
        $writer->writeDateTimeValue('expirationDateTime', $this->getExpirationDateTime());
        $writer->writeStringValue('issuer', $this->getIssuer());
        $writer->writeStringValue('issuerName', $this->getIssuerName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('password', $this->getPassword());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('subject', $this->getSubject());
        $writer->writeStringValue('subjectName', $this->getSubjectName());
        $writer->writeDateTimeValue('uploadDateTime', $this->getUploadDateTime());
    }

    /**
     * Sets the content property value. The Windows Symantec Code-Signing Certificate in the raw data format.
     * @param StreamInterface|null $value Value to set for the content property.
    */
    public function setContent(?StreamInterface $value): void {
        $this->getBackingStore()->set('content', $value);
    }

    /**
     * Sets the expirationDateTime property value. The Cert Expiration Date.
     * @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expirationDateTime', $value);
    }

    /**
     * Sets the issuer property value. The Issuer value for the cert.
     * @param string|null $value Value to set for the issuer property.
    */
    public function setIssuer(?string $value): void {
        $this->getBackingStore()->set('issuer', $value);
    }

    /**
     * Sets the issuerName property value. The Issuer Name for the cert.
     * @param string|null $value Value to set for the issuerName property.
    */
    public function setIssuerName(?string $value): void {
        $this->getBackingStore()->set('issuerName', $value);
    }

    /**
     * Sets the password property value. The Password required for .pfx file.
     * @param string|null $value Value to set for the password property.
    */
    public function setPassword(?string $value): void {
        $this->getBackingStore()->set('password', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param CertificateStatus|null $value Value to set for the status property.
    */
    public function setStatus(?CertificateStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the subject property value. The Subject value for the cert.
     * @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value): void {
        $this->getBackingStore()->set('subject', $value);
    }

    /**
     * Sets the subjectName property value. The Subject Name for the cert.
     * @param string|null $value Value to set for the subjectName property.
    */
    public function setSubjectName(?string $value): void {
        $this->getBackingStore()->set('subjectName', $value);
    }

    /**
     * Sets the uploadDateTime property value. The Type of the CodeSigning Cert as Symantec Cert.
     * @param DateTime|null $value Value to set for the uploadDateTime property.
    */
    public function setUploadDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('uploadDateTime', $value);
    }

}

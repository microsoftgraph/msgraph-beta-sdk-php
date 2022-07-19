<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class EnterpriseCodeSigningCertificate extends Entity implements Parsable 
{
    /**
     * @var StreamInterface|null $content The Windows Enterprise Code-Signing Certificate in the raw data format.
    */
    private ?StreamInterface $content = null;
    
    /**
     * @var DateTime|null $expirationDateTime The Cert Expiration Date.
    */
    private ?DateTime $expirationDateTime = null;
    
    /**
     * @var string|null $issuer The Issuer value for the cert.
    */
    private ?string $issuer = null;
    
    /**
     * @var string|null $issuerName The Issuer Name for the cert.
    */
    private ?string $issuerName = null;
    
    /**
     * @var CertificateStatus|null $status The status property
    */
    private ?CertificateStatus $status = null;
    
    /**
     * @var string|null $subject The Subject Value for the cert.
    */
    private ?string $subject = null;
    
    /**
     * @var string|null $subjectName The Subject Name for the cert.
    */
    private ?string $subjectName = null;
    
    /**
     * @var DateTime|null $uploadDateTime The date time of CodeSigning Cert when it is uploaded.
    */
    private ?DateTime $uploadDateTime = null;
    
    /**
     * Instantiates a new enterpriseCodeSigningCertificate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.enterpriseCodeSigningCertificate');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EnterpriseCodeSigningCertificate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EnterpriseCodeSigningCertificate {
        return new EnterpriseCodeSigningCertificate();
    }

    /**
     * Gets the content property value. The Windows Enterprise Code-Signing Certificate in the raw data format.
     * @return StreamInterface|null
    */
    public function getContent(): ?StreamInterface {
        return $this->content;
    }

    /**
     * Gets the expirationDateTime property value. The Cert Expiration Date.
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        return $this->expirationDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'content' => function (ParseNode $n) use ($o) { $o->setContent($n->getBinaryContent()); },
            'expirationDateTime' => function (ParseNode $n) use ($o) { $o->setExpirationDateTime($n->getDateTimeValue()); },
            'issuer' => function (ParseNode $n) use ($o) { $o->setIssuer($n->getStringValue()); },
            'issuerName' => function (ParseNode $n) use ($o) { $o->setIssuerName($n->getStringValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(CertificateStatus::class)); },
            'subject' => function (ParseNode $n) use ($o) { $o->setSubject($n->getStringValue()); },
            'subjectName' => function (ParseNode $n) use ($o) { $o->setSubjectName($n->getStringValue()); },
            'uploadDateTime' => function (ParseNode $n) use ($o) { $o->setUploadDateTime($n->getDateTimeValue()); },
        ]);
    }

    /**
     * Gets the issuer property value. The Issuer value for the cert.
     * @return string|null
    */
    public function getIssuer(): ?string {
        return $this->issuer;
    }

    /**
     * Gets the issuerName property value. The Issuer Name for the cert.
     * @return string|null
    */
    public function getIssuerName(): ?string {
        return $this->issuerName;
    }

    /**
     * Gets the status property value. The status property
     * @return CertificateStatus|null
    */
    public function getStatus(): ?CertificateStatus {
        return $this->status;
    }

    /**
     * Gets the subject property value. The Subject Value for the cert.
     * @return string|null
    */
    public function getSubject(): ?string {
        return $this->subject;
    }

    /**
     * Gets the subjectName property value. The Subject Name for the cert.
     * @return string|null
    */
    public function getSubjectName(): ?string {
        return $this->subjectName;
    }

    /**
     * Gets the uploadDateTime property value. The date time of CodeSigning Cert when it is uploaded.
     * @return DateTime|null
    */
    public function getUploadDateTime(): ?DateTime {
        return $this->uploadDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBinaryContent('content', $this->content);
        $writer->writeDateTimeValue('expirationDateTime', $this->expirationDateTime);
        $writer->writeStringValue('issuer', $this->issuer);
        $writer->writeStringValue('issuerName', $this->issuerName);
        $writer->writeEnumValue('status', $this->status);
        $writer->writeStringValue('subject', $this->subject);
        $writer->writeStringValue('subjectName', $this->subjectName);
        $writer->writeDateTimeValue('uploadDateTime', $this->uploadDateTime);
    }

    /**
     * Sets the content property value. The Windows Enterprise Code-Signing Certificate in the raw data format.
     *  @param StreamInterface|null $value Value to set for the content property.
    */
    public function setContent(?StreamInterface $value ): void {
        $this->content = $value;
    }

    /**
     * Sets the expirationDateTime property value. The Cert Expiration Date.
     *  @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value ): void {
        $this->expirationDateTime = $value;
    }

    /**
     * Sets the issuer property value. The Issuer value for the cert.
     *  @param string|null $value Value to set for the issuer property.
    */
    public function setIssuer(?string $value ): void {
        $this->issuer = $value;
    }

    /**
     * Sets the issuerName property value. The Issuer Name for the cert.
     *  @param string|null $value Value to set for the issuerName property.
    */
    public function setIssuerName(?string $value ): void {
        $this->issuerName = $value;
    }

    /**
     * Sets the status property value. The status property
     *  @param CertificateStatus|null $value Value to set for the status property.
    */
    public function setStatus(?CertificateStatus $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the subject property value. The Subject Value for the cert.
     *  @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value ): void {
        $this->subject = $value;
    }

    /**
     * Sets the subjectName property value. The Subject Name for the cert.
     *  @param string|null $value Value to set for the subjectName property.
    */
    public function setSubjectName(?string $value ): void {
        $this->subjectName = $value;
    }

    /**
     * Sets the uploadDateTime property value. The date time of CodeSigning Cert when it is uploaded.
     *  @param DateTime|null $value Value to set for the uploadDateTime property.
    */
    public function setUploadDateTime(?DateTime $value ): void {
        $this->uploadDateTime = $value;
    }

}

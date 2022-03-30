<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class VerifiedCustomDomainCertificatesMetadata implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var DateTime|null $expiryDate The expiry date of the custom domain certificate. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    private ?DateTime $expiryDate = null;
    
    /** @var DateTime|null $issueDate The issue date of the custom domain. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    private ?DateTime $issueDate = null;
    
    /** @var string|null $issuerName The issuer name of the custom domain certificate. */
    private ?string $issuerName = null;
    
    /** @var string|null $subjectName The subject name of the custom domain certificate. */
    private ?string $subjectName = null;
    
    /** @var string|null $thumbprint The thumbprint associated with the custom domain certificate. */
    private ?string $thumbprint = null;
    
    /**
     * Instantiates a new verifiedCustomDomainCertificatesMetadata and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VerifiedCustomDomainCertificatesMetadata
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): VerifiedCustomDomainCertificatesMetadata {
        return new VerifiedCustomDomainCertificatesMetadata();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the expiryDate property value. The expiry date of the custom domain certificate. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getExpiryDate(): ?DateTime {
        return $this->expiryDate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'expiryDate' => function (self $o, ParseNode $n) { $o->setExpiryDate($n->getDateTimeValue()); },
            'issueDate' => function (self $o, ParseNode $n) { $o->setIssueDate($n->getDateTimeValue()); },
            'issuerName' => function (self $o, ParseNode $n) { $o->setIssuerName($n->getStringValue()); },
            'subjectName' => function (self $o, ParseNode $n) { $o->setSubjectName($n->getStringValue()); },
            'thumbprint' => function (self $o, ParseNode $n) { $o->setThumbprint($n->getStringValue()); },
        ];
    }

    /**
     * Gets the issueDate property value. The issue date of the custom domain. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getIssueDate(): ?DateTime {
        return $this->issueDate;
    }

    /**
     * Gets the issuerName property value. The issuer name of the custom domain certificate.
     * @return string|null
    */
    public function getIssuerName(): ?string {
        return $this->issuerName;
    }

    /**
     * Gets the subjectName property value. The subject name of the custom domain certificate.
     * @return string|null
    */
    public function getSubjectName(): ?string {
        return $this->subjectName;
    }

    /**
     * Gets the thumbprint property value. The thumbprint associated with the custom domain certificate.
     * @return string|null
    */
    public function getThumbprint(): ?string {
        return $this->thumbprint;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('expiryDate', $this->expiryDate);
        $writer->writeDateTimeValue('issueDate', $this->issueDate);
        $writer->writeStringValue('issuerName', $this->issuerName);
        $writer->writeStringValue('subjectName', $this->subjectName);
        $writer->writeStringValue('thumbprint', $this->thumbprint);
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
     * Sets the expiryDate property value. The expiry date of the custom domain certificate. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the expiryDate property.
    */
    public function setExpiryDate(?DateTime $value ): void {
        $this->expiryDate = $value;
    }

    /**
     * Sets the issueDate property value. The issue date of the custom domain. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the issueDate property.
    */
    public function setIssueDate(?DateTime $value ): void {
        $this->issueDate = $value;
    }

    /**
     * Sets the issuerName property value. The issuer name of the custom domain certificate.
     *  @param string|null $value Value to set for the issuerName property.
    */
    public function setIssuerName(?string $value ): void {
        $this->issuerName = $value;
    }

    /**
     * Sets the subjectName property value. The subject name of the custom domain certificate.
     *  @param string|null $value Value to set for the subjectName property.
    */
    public function setSubjectName(?string $value ): void {
        $this->subjectName = $value;
    }

    /**
     * Sets the thumbprint property value. The thumbprint associated with the custom domain certificate.
     *  @param string|null $value Value to set for the thumbprint property.
    */
    public function setThumbprint(?string $value ): void {
        $this->thumbprint = $value;
    }

}

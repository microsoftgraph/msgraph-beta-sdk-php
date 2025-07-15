<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExternalCertificateAuthorityCertificate extends Entity implements Parsable 
{
    /**
     * Instantiates a new ExternalCertificateAuthorityCertificate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExternalCertificateAuthorityCertificate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExternalCertificateAuthorityCertificate {
        return new ExternalCertificateAuthorityCertificate();
    }

    /**
     * Gets the certificate property value. The signed X.509 certificate in PEM format.
     * @return string|null
    */
    public function getCertificate(): ?string {
        $val = $this->getBackingStore()->get('certificate');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificate'");
    }

    /**
     * Gets the certificateSigningRequest property value. The Certificate Signing Request (CSR) generated when creating the CA. This CSR should be signed using the customer's PKI infrastructure. Read-only.
     * @return string|null
    */
    public function getCertificateSigningRequest(): ?string {
        $val = $this->getBackingStore()->get('certificateSigningRequest');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificateSigningRequest'");
    }

    /**
     * Gets the chain property value. The certificate chain in PEM format, containing all intermediate certificates up to the root CA.
     * @return string|null
    */
    public function getChain(): ?string {
        $val = $this->getBackingStore()->get('chain');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'chain'");
    }

    /**
     * Gets the commonName property value. The common name (CN) field of the certificate. Supports $filter (eq, ne, startsWith)
     * @return string|null
    */
    public function getCommonName(): ?string {
        $val = $this->getBackingStore()->get('commonName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'commonName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'certificate' => fn(ParseNode $n) => $o->setCertificate($n->getStringValue()),
            'certificateSigningRequest' => fn(ParseNode $n) => $o->setCertificateSigningRequest($n->getStringValue()),
            'chain' => fn(ParseNode $n) => $o->setChain($n->getStringValue()),
            'commonName' => fn(ParseNode $n) => $o->setCommonName($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'organizationName' => fn(ParseNode $n) => $o->setOrganizationName($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(TlsCertificateStatus::class)),
            'validity' => fn(ParseNode $n) => $o->setValidity($n->getObjectValue([ValidityDate::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the name property value. The display name of the CA. Supports $filter (eq, ne, startsWith)
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
    }

    /**
     * Gets the organizationName property value. The organization name (OU) field of the certificate. Supports $filter (eq, ne, startsWith)
     * @return string|null
    */
    public function getOrganizationName(): ?string {
        $val = $this->getBackingStore()->get('organizationName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'organizationName'");
    }

    /**
     * Gets the status property value. The status property
     * @return TlsCertificateStatus|null
    */
    public function getStatus(): ?TlsCertificateStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof TlsCertificateStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the validity property value. The validity property
     * @return ValidityDate|null
    */
    public function getValidity(): ?ValidityDate {
        $val = $this->getBackingStore()->get('validity');
        if (is_null($val) || $val instanceof ValidityDate) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'validity'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('certificate', $this->getCertificate());
        $writer->writeStringValue('certificateSigningRequest', $this->getCertificateSigningRequest());
        $writer->writeStringValue('chain', $this->getChain());
        $writer->writeStringValue('commonName', $this->getCommonName());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('organizationName', $this->getOrganizationName());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeObjectValue('validity', $this->getValidity());
    }

    /**
     * Sets the certificate property value. The signed X.509 certificate in PEM format.
     * @param string|null $value Value to set for the certificate property.
    */
    public function setCertificate(?string $value): void {
        $this->getBackingStore()->set('certificate', $value);
    }

    /**
     * Sets the certificateSigningRequest property value. The Certificate Signing Request (CSR) generated when creating the CA. This CSR should be signed using the customer's PKI infrastructure. Read-only.
     * @param string|null $value Value to set for the certificateSigningRequest property.
    */
    public function setCertificateSigningRequest(?string $value): void {
        $this->getBackingStore()->set('certificateSigningRequest', $value);
    }

    /**
     * Sets the chain property value. The certificate chain in PEM format, containing all intermediate certificates up to the root CA.
     * @param string|null $value Value to set for the chain property.
    */
    public function setChain(?string $value): void {
        $this->getBackingStore()->set('chain', $value);
    }

    /**
     * Sets the commonName property value. The common name (CN) field of the certificate. Supports $filter (eq, ne, startsWith)
     * @param string|null $value Value to set for the commonName property.
    */
    public function setCommonName(?string $value): void {
        $this->getBackingStore()->set('commonName', $value);
    }

    /**
     * Sets the name property value. The display name of the CA. Supports $filter (eq, ne, startsWith)
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the organizationName property value. The organization name (OU) field of the certificate. Supports $filter (eq, ne, startsWith)
     * @param string|null $value Value to set for the organizationName property.
    */
    public function setOrganizationName(?string $value): void {
        $this->getBackingStore()->set('organizationName', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param TlsCertificateStatus|null $value Value to set for the status property.
    */
    public function setStatus(?TlsCertificateStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the validity property value. The validity property
     * @param ValidityDate|null $value Value to set for the validity property.
    */
    public function setValidity(?ValidityDate $value): void {
        $this->getBackingStore()->set('validity', $value);
    }

}

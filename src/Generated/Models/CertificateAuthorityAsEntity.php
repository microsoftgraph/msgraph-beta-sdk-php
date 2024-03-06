<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class CertificateAuthorityAsEntity extends Entity implements Parsable 
{
    /**
     * Instantiates a new CertificateAuthorityAsEntity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CertificateAuthorityAsEntity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CertificateAuthorityAsEntity {
        return new CertificateAuthorityAsEntity();
    }

    /**
     * Gets the certificate property value. The trusted certificate.
     * @return StreamInterface|null
    */
    public function getCertificate(): ?StreamInterface {
        $val = $this->getBackingStore()->get('certificate');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificate'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'certificate' => fn(ParseNode $n) => $o->setCertificate($n->getBinaryContent()),
            'isRootAuthority' => fn(ParseNode $n) => $o->setIsRootAuthority($n->getBooleanValue()),
            'issuer' => fn(ParseNode $n) => $o->setIssuer($n->getStringValue()),
            'issuerSubjectKeyIdentifier' => fn(ParseNode $n) => $o->setIssuerSubjectKeyIdentifier($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isRootAuthority property value. Indicates if the certificate is a root authority. In a certificateBasedApplicationConfiguration object, at least one object in the trustedCertificateAuthorities collection must be a root authority.
     * @return bool|null
    */
    public function getIsRootAuthority(): ?bool {
        $val = $this->getBackingStore()->get('isRootAuthority');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isRootAuthority'");
    }

    /**
     * Gets the issuer property value. The issuer of the trusted certificate.
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
     * Gets the issuerSubjectKeyIdentifier property value. The subject key identifier of the trusted certificate.
     * @return string|null
    */
    public function getIssuerSubjectKeyIdentifier(): ?string {
        $val = $this->getBackingStore()->get('issuerSubjectKeyIdentifier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'issuerSubjectKeyIdentifier'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBinaryContent('certificate', $this->getCertificate());
        $writer->writeBooleanValue('isRootAuthority', $this->getIsRootAuthority());
        $writer->writeStringValue('issuer', $this->getIssuer());
        $writer->writeStringValue('issuerSubjectKeyIdentifier', $this->getIssuerSubjectKeyIdentifier());
    }

    /**
     * Sets the certificate property value. The trusted certificate.
     * @param StreamInterface|null $value Value to set for the certificate property.
    */
    public function setCertificate(?StreamInterface $value): void {
        $this->getBackingStore()->set('certificate', $value);
    }

    /**
     * Sets the isRootAuthority property value. Indicates if the certificate is a root authority. In a certificateBasedApplicationConfiguration object, at least one object in the trustedCertificateAuthorities collection must be a root authority.
     * @param bool|null $value Value to set for the isRootAuthority property.
    */
    public function setIsRootAuthority(?bool $value): void {
        $this->getBackingStore()->set('isRootAuthority', $value);
    }

    /**
     * Sets the issuer property value. The issuer of the trusted certificate.
     * @param string|null $value Value to set for the issuer property.
    */
    public function setIssuer(?string $value): void {
        $this->getBackingStore()->set('issuer', $value);
    }

    /**
     * Sets the issuerSubjectKeyIdentifier property value. The subject key identifier of the trusted certificate.
     * @param string|null $value Value to set for the issuerSubjectKeyIdentifier property.
    */
    public function setIssuerSubjectKeyIdentifier(?string $value): void {
        $this->getBackingStore()->set('issuerSubjectKeyIdentifier', $value);
    }

}

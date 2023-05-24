<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class CertificateAuthorityAsEntity extends Entity implements Parsable 
{
    /**
     * Instantiates a new certificateAuthorityAsEntity and sets the default values.
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
     * Gets the certificate property value. The certificate property
     * @return StreamInterface|null
    */
    public function getCertificate(): ?StreamInterface {
        return $this->getBackingStore()->get('certificate');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
     * Gets the isRootAuthority property value. The isRootAuthority property
     * @return bool|null
    */
    public function getIsRootAuthority(): ?bool {
        return $this->getBackingStore()->get('isRootAuthority');
    }

    /**
     * Gets the issuer property value. The issuer property
     * @return string|null
    */
    public function getIssuer(): ?string {
        return $this->getBackingStore()->get('issuer');
    }

    /**
     * Gets the issuerSubjectKeyIdentifier property value. The issuerSubjectKeyIdentifier property
     * @return string|null
    */
    public function getIssuerSubjectKeyIdentifier(): ?string {
        return $this->getBackingStore()->get('issuerSubjectKeyIdentifier');
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
     * Sets the certificate property value. The certificate property
     * @param StreamInterface|null $value Value to set for the certificate property.
    */
    public function setCertificate(?StreamInterface $value): void {
        $this->getBackingStore()->set('certificate', $value);
    }

    /**
     * Sets the isRootAuthority property value. The isRootAuthority property
     * @param bool|null $value Value to set for the isRootAuthority property.
    */
    public function setIsRootAuthority(?bool $value): void {
        $this->getBackingStore()->set('isRootAuthority', $value);
    }

    /**
     * Sets the issuer property value. The issuer property
     * @param string|null $value Value to set for the issuer property.
    */
    public function setIssuer(?string $value): void {
        $this->getBackingStore()->set('issuer', $value);
    }

    /**
     * Sets the issuerSubjectKeyIdentifier property value. The issuerSubjectKeyIdentifier property
     * @param string|null $value Value to set for the issuerSubjectKeyIdentifier property.
    */
    public function setIssuerSubjectKeyIdentifier(?string $value): void {
        $this->getBackingStore()->set('issuerSubjectKeyIdentifier', $value);
    }

}

<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class TlsTermination extends Entity implements Parsable 
{
    /**
     * Instantiates a new TlsTermination and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TlsTermination
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TlsTermination {
        return new TlsTermination();
    }

    /**
     * Gets the externalCertificateAuthorityCertificates property value. List of customer's Certificate Authority (CA) certificates used for TLS inspection in Global Secure Access
     * @return array<ExternalCertificateAuthorityCertificate>|null
    */
    public function getExternalCertificateAuthorityCertificates(): ?array {
        $val = $this->getBackingStore()->get('externalCertificateAuthorityCertificates');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ExternalCertificateAuthorityCertificate::class);
            /** @var array<ExternalCertificateAuthorityCertificate>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalCertificateAuthorityCertificates'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'externalCertificateAuthorityCertificates' => fn(ParseNode $n) => $o->setExternalCertificateAuthorityCertificates($n->getCollectionOfObjectValues([ExternalCertificateAuthorityCertificate::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('externalCertificateAuthorityCertificates', $this->getExternalCertificateAuthorityCertificates());
    }

    /**
     * Sets the externalCertificateAuthorityCertificates property value. List of customer's Certificate Authority (CA) certificates used for TLS inspection in Global Secure Access
     * @param array<ExternalCertificateAuthorityCertificate>|null $value Value to set for the externalCertificateAuthorityCertificates property.
    */
    public function setExternalCertificateAuthorityCertificates(?array $value): void {
        $this->getBackingStore()->set('externalCertificateAuthorityCertificates', $value);
    }

}

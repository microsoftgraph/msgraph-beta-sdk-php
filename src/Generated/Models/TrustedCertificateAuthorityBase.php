<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class TrustedCertificateAuthorityBase extends DirectoryObject implements Parsable 
{
    /**
     * Instantiates a new TrustedCertificateAuthorityBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.trustedCertificateAuthorityBase');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TrustedCertificateAuthorityBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TrustedCertificateAuthorityBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.mutualTlsOauthConfiguration': return new MutualTlsOauthConfiguration();
            }
        }
        return new TrustedCertificateAuthorityBase();
    }

    /**
     * Gets the certificateAuthorities property value. Multi-value property that represents a list of trusted certificate authorities.
     * @return array<CertificateAuthority>|null
    */
    public function getCertificateAuthorities(): ?array {
        $val = $this->getBackingStore()->get('certificateAuthorities');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CertificateAuthority::class);
            /** @var array<CertificateAuthority>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificateAuthorities'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'certificateAuthorities' => fn(ParseNode $n) => $o->setCertificateAuthorities($n->getCollectionOfObjectValues([CertificateAuthority::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('certificateAuthorities', $this->getCertificateAuthorities());
    }

    /**
     * Sets the certificateAuthorities property value. Multi-value property that represents a list of trusted certificate authorities.
     * @param array<CertificateAuthority>|null $value Value to set for the certificateAuthorities property.
    */
    public function setCertificateAuthorities(?array $value): void {
        $this->getBackingStore()->set('certificateAuthorities', $value);
    }

}

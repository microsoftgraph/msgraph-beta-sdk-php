<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class TrustedCertificateAuthorityAsEntityBase extends DirectoryObject implements Parsable 
{
    /**
     * Instantiates a new TrustedCertificateAuthorityAsEntityBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.trustedCertificateAuthorityAsEntityBase');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TrustedCertificateAuthorityAsEntityBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TrustedCertificateAuthorityAsEntityBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.certificateBasedApplicationConfiguration': return new CertificateBasedApplicationConfiguration();
            }
        }
        return new TrustedCertificateAuthorityAsEntityBase();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'trustedCertificateAuthorities' => fn(ParseNode $n) => $o->setTrustedCertificateAuthorities($n->getCollectionOfObjectValues([CertificateAuthorityAsEntity::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the trustedCertificateAuthorities property value. The trustedCertificateAuthorities property
     * @return array<CertificateAuthorityAsEntity>|null
    */
    public function getTrustedCertificateAuthorities(): ?array {
        $val = $this->getBackingStore()->get('trustedCertificateAuthorities');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CertificateAuthorityAsEntity::class);
            /** @var array<CertificateAuthorityAsEntity>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'trustedCertificateAuthorities'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('trustedCertificateAuthorities', $this->getTrustedCertificateAuthorities());
    }

    /**
     * Sets the trustedCertificateAuthorities property value. The trustedCertificateAuthorities property
     * @param array<CertificateAuthorityAsEntity>|null $value Value to set for the trustedCertificateAuthorities property.
    */
    public function setTrustedCertificateAuthorities(?array $value): void {
        $this->getBackingStore()->set('trustedCertificateAuthorities', $value);
    }

}

<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * By providing the configurations in this profile you can instruct the Mac device to connect to desired VPN endpoint. By specifying the authentication method and security types expected by VPN endpoint you can make the VPN connection seamless for end user.
*/
class MacOSVpnConfiguration extends AppleVpnConfiguration implements Parsable 
{
    /**
     * Instantiates a new macOSVpnConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.macOSVpnConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOSVpnConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOSVpnConfiguration {
        return new MacOSVpnConfiguration();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'identityCertificate' => fn(ParseNode $n) => $o->setIdentityCertificate($n->getObjectValue([MacOSCertificateProfileBase::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the identityCertificate property value. Identity certificate for client authentication when authentication method is certificate.
     * @return MacOSCertificateProfileBase|null
    */
    public function getIdentityCertificate(): ?MacOSCertificateProfileBase {
        $val = $this->getBackingStore()->get('identityCertificate');
        if (is_null($val) || $val instanceof MacOSCertificateProfileBase) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identityCertificate'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('identityCertificate', $this->getIdentityCertificate());
    }

    /**
     * Sets the identityCertificate property value. Identity certificate for client authentication when authentication method is certificate.
     * @param MacOSCertificateProfileBase|null $value Value to set for the identityCertificate property.
    */
    public function setIdentityCertificate(?MacOSCertificateProfileBase $value): void {
        $this->getBackingStore()->set('identityCertificate', $value);
    }

}

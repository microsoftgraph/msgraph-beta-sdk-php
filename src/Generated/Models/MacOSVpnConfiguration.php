<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MacOSVpnConfiguration extends AppleVpnConfiguration implements Parsable 
{
    /**
     * @var MacOSCertificateProfileBase|null $identityCertificate Identity certificate for client authentication when authentication method is certificate.
    */
    private ?MacOSCertificateProfileBase $identityCertificate = null;
    
    /**
     * Instantiates a new MacOSVpnConfiguration and sets the default values.
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
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'identityCertificate' => function (ParseNode $n) use ($o) { $o->setIdentityCertificate($n->getObjectValue(array(MacOSCertificateProfileBase::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the identityCertificate property value. Identity certificate for client authentication when authentication method is certificate.
     * @return MacOSCertificateProfileBase|null
    */
    public function getIdentityCertificate(): ?MacOSCertificateProfileBase {
        return $this->identityCertificate;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('identityCertificate', $this->identityCertificate);
    }

    /**
     * Sets the identityCertificate property value. Identity certificate for client authentication when authentication method is certificate.
     *  @param MacOSCertificateProfileBase|null $value Value to set for the identityCertificate property.
    */
    public function setIdentityCertificate(?MacOSCertificateProfileBase $value ): void {
        $this->identityCertificate = $value;
    }

}

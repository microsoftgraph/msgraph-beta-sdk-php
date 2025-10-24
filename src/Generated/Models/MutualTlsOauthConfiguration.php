<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MutualTlsOauthConfiguration extends TrustedCertificateAuthorityBase implements Parsable 
{
    /**
     * Instantiates a new MutualTlsOauthConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.mutualTlsOauthConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MutualTlsOauthConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MutualTlsOauthConfiguration {
        return new MutualTlsOauthConfiguration();
    }

    /**
     * Gets the displayName property value. Friendly name. Supports $filter (eq, in).
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'tlsClientAuthParameter' => fn(ParseNode $n) => $o->setTlsClientAuthParameter($n->getEnumValue(TlsClientRegistrationMetadata::class)),
        ]);
    }

    /**
     * Gets the tlsClientAuthParameter property value. The tlsClientAuthParameter property
     * @return TlsClientRegistrationMetadata|null
    */
    public function getTlsClientAuthParameter(): ?TlsClientRegistrationMetadata {
        $val = $this->getBackingStore()->get('tlsClientAuthParameter');
        if (is_null($val) || $val instanceof TlsClientRegistrationMetadata) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tlsClientAuthParameter'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeEnumValue('tlsClientAuthParameter', $this->getTlsClientAuthParameter());
    }

    /**
     * Sets the displayName property value. Friendly name. Supports $filter (eq, in).
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the tlsClientAuthParameter property value. The tlsClientAuthParameter property
     * @param TlsClientRegistrationMetadata|null $value Value to set for the tlsClientAuthParameter property.
    */
    public function setTlsClientAuthParameter(?TlsClientRegistrationMetadata $value): void {
        $this->getBackingStore()->set('tlsClientAuthParameter', $value);
    }

}

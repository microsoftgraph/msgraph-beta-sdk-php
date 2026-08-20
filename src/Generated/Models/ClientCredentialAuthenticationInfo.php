<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ClientCredentialAuthenticationInfo extends AuthenticationInfo implements Parsable 
{
    /**
     * Instantiates a new ClientCredentialAuthenticationInfo and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.clientCredentialAuthenticationInfo');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ClientCredentialAuthenticationInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ClientCredentialAuthenticationInfo {
        return new ClientCredentialAuthenticationInfo();
    }

    /**
     * Gets the accessTokenUrl property value. The URL endpoint used to obtain access tokens for authentication with the external system.
     * @return string|null
    */
    public function getAccessTokenUrl(): ?string {
        $val = $this->getBackingStore()->get('accessTokenUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessTokenUrl'");
    }

    /**
     * Gets the clientId property value. The client identifier used for authentication with the external system.
     * @return string|null
    */
    public function getClientId(): ?string {
        $val = $this->getBackingStore()->get('clientId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'clientId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessTokenUrl' => fn(ParseNode $n) => $o->setAccessTokenUrl($n->getStringValue()),
            'clientId' => fn(ParseNode $n) => $o->setClientId($n->getStringValue()),
            'secretName' => fn(ParseNode $n) => $o->setSecretName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the secretName property value. The name of the secret in Azure Key Vault that contains the client secret.
     * @return string|null
    */
    public function getSecretName(): ?string {
        $val = $this->getBackingStore()->get('secretName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'secretName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('accessTokenUrl', $this->getAccessTokenUrl());
        $writer->writeStringValue('clientId', $this->getClientId());
        $writer->writeStringValue('secretName', $this->getSecretName());
    }

    /**
     * Sets the accessTokenUrl property value. The URL endpoint used to obtain access tokens for authentication with the external system.
     * @param string|null $value Value to set for the accessTokenUrl property.
    */
    public function setAccessTokenUrl(?string $value): void {
        $this->getBackingStore()->set('accessTokenUrl', $value);
    }

    /**
     * Sets the clientId property value. The client identifier used for authentication with the external system.
     * @param string|null $value Value to set for the clientId property.
    */
    public function setClientId(?string $value): void {
        $this->getBackingStore()->set('clientId', $value);
    }

    /**
     * Sets the secretName property value. The name of the secret in Azure Key Vault that contains the client secret.
     * @param string|null $value Value to set for the secretName property.
    */
    public function setSecretName(?string $value): void {
        $this->getBackingStore()->set('secretName', $value);
    }

}

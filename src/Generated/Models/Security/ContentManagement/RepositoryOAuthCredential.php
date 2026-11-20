<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\ContentManagement;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * OAuth authorization-code credential.
*/
class RepositoryOAuthCredential extends RepositoryAccessCredential implements Parsable 
{
    /**
     * Instantiates a new RepositoryOAuthCredential and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.contentManagement.repositoryOAuthCredential');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RepositoryOAuthCredential
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RepositoryOAuthCredential {
        return new RepositoryOAuthCredential();
    }

    /**
     * Gets the clientId property value. OAuth client id.
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
     * Gets the code property value. OAuth authorization code.
     * @return string|null
    */
    public function getCode(): ?string {
        $val = $this->getBackingStore()->get('code');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'code'");
    }

    /**
     * Gets the codeVerifier property value. PKCE code verifier.
     * @return string|null
    */
    public function getCodeVerifier(): ?string {
        $val = $this->getBackingStore()->get('codeVerifier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'codeVerifier'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'clientId' => fn(ParseNode $n) => $o->setClientId($n->getStringValue()),
            'code' => fn(ParseNode $n) => $o->setCode($n->getStringValue()),
            'codeVerifier' => fn(ParseNode $n) => $o->setCodeVerifier($n->getStringValue()),
            'redirectUri' => fn(ParseNode $n) => $o->setRedirectUri($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getStringValue()),
        ]);
    }

    /**
     * Gets the redirectUri property value. OAuth redirect URI.
     * @return string|null
    */
    public function getRedirectUri(): ?string {
        $val = $this->getBackingStore()->get('redirectUri');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'redirectUri'");
    }

    /**
     * Gets the state property value. OAuth state value.
     * @return string|null
    */
    public function getState(): ?string {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'state'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('clientId', $this->getClientId());
        $writer->writeStringValue('code', $this->getCode());
        $writer->writeStringValue('codeVerifier', $this->getCodeVerifier());
        $writer->writeStringValue('redirectUri', $this->getRedirectUri());
        $writer->writeStringValue('state', $this->getState());
    }

    /**
     * Sets the clientId property value. OAuth client id.
     * @param string|null $value Value to set for the clientId property.
    */
    public function setClientId(?string $value): void {
        $this->getBackingStore()->set('clientId', $value);
    }

    /**
     * Sets the code property value. OAuth authorization code.
     * @param string|null $value Value to set for the code property.
    */
    public function setCode(?string $value): void {
        $this->getBackingStore()->set('code', $value);
    }

    /**
     * Sets the codeVerifier property value. PKCE code verifier.
     * @param string|null $value Value to set for the codeVerifier property.
    */
    public function setCodeVerifier(?string $value): void {
        $this->getBackingStore()->set('codeVerifier', $value);
    }

    /**
     * Sets the redirectUri property value. OAuth redirect URI.
     * @param string|null $value Value to set for the redirectUri property.
    */
    public function setRedirectUri(?string $value): void {
        $this->getBackingStore()->set('redirectUri', $value);
    }

    /**
     * Sets the state property value. OAuth state value.
     * @param string|null $value Value to set for the state property.
    */
    public function setState(?string $value): void {
        $this->getBackingStore()->set('state', $value);
    }

}

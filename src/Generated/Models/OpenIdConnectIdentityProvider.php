<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OpenIdConnectIdentityProvider extends IdentityProviderBase implements Parsable 
{
    /**
     * Instantiates a new OpenIdConnectIdentityProvider and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.openIdConnectIdentityProvider');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OpenIdConnectIdentityProvider
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OpenIdConnectIdentityProvider {
        return new OpenIdConnectIdentityProvider();
    }

    /**
     * Gets the claimsMapping property value. After the OIDC provider sends an ID token back to Microsoft Entra ID, Microsoft Entra ID needs to be able to map the claims from the received token to the claims that Microsoft Entra ID recognizes and uses. This complex type captures that mapping. Required.
     * @return ClaimsMapping|null
    */
    public function getClaimsMapping(): ?ClaimsMapping {
        $val = $this->getBackingStore()->get('claimsMapping');
        if (is_null($val) || $val instanceof ClaimsMapping) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'claimsMapping'");
    }

    /**
     * Gets the clientId property value. The client identifier for the application obtained when registering the application with the identity provider. Required.
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
     * Gets the clientSecret property value. The client secret for the application obtained when registering the application with the identity provider. The clientSecret has a dependency on responseType. When responseType is code, a secret is required for the auth code exchange.When responseType is idtoken, the secret isn't required because there's no code exchange. The idtoken is returned directly from the authorization response. This is write-only. A read operation returns .
     * @return string|null
    */
    public function getClientSecret(): ?string {
        $val = $this->getBackingStore()->get('clientSecret');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'clientSecret'");
    }

    /**
     * Gets the domainHint property value. The domain hint can be used to skip directly to the sign-in page of the specified identity provider instead of having the user make a selection among the list of available identity providers.
     * @return string|null
    */
    public function getDomainHint(): ?string {
        $val = $this->getBackingStore()->get('domainHint');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'domainHint'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'claimsMapping' => fn(ParseNode $n) => $o->setClaimsMapping($n->getObjectValue([ClaimsMapping::class, 'createFromDiscriminatorValue'])),
            'clientId' => fn(ParseNode $n) => $o->setClientId($n->getStringValue()),
            'clientSecret' => fn(ParseNode $n) => $o->setClientSecret($n->getStringValue()),
            'domainHint' => fn(ParseNode $n) => $o->setDomainHint($n->getStringValue()),
            'metadataUrl' => fn(ParseNode $n) => $o->setMetadataUrl($n->getStringValue()),
            'responseMode' => fn(ParseNode $n) => $o->setResponseMode($n->getEnumValue(OpenIdConnectResponseMode::class)),
            'responseType' => fn(ParseNode $n) => $o->setResponseType($n->getEnumValue(OpenIdConnectResponseTypes::class)),
            'scope' => fn(ParseNode $n) => $o->setScope($n->getStringValue()),
        ]);
    }

    /**
     * Gets the metadataUrl property value. The URL for the metadata document of the OpenID Connect identity provider. Every OpenID Connect identity provider describes a metadata document that contains most of the information required to perform sign-in. This includes information such as the URLs to use and the location of the service's public signing keys. The OpenID Connect metadata document is always located at an endpoint that ends in .well-known/openid-configuration. Provide the metadata URL for the OpenID Connect identity provider you add. Read-only. Required.
     * @return string|null
    */
    public function getMetadataUrl(): ?string {
        $val = $this->getBackingStore()->get('metadataUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'metadataUrl'");
    }

    /**
     * Gets the responseMode property value. The responseMode property
     * @return OpenIdConnectResponseMode|null
    */
    public function getResponseMode(): ?OpenIdConnectResponseMode {
        $val = $this->getBackingStore()->get('responseMode');
        if (is_null($val) || $val instanceof OpenIdConnectResponseMode) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'responseMode'");
    }

    /**
     * Gets the responseType property value. The responseType property
     * @return OpenIdConnectResponseTypes|null
    */
    public function getResponseType(): ?OpenIdConnectResponseTypes {
        $val = $this->getBackingStore()->get('responseType');
        if (is_null($val) || $val instanceof OpenIdConnectResponseTypes) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'responseType'");
    }

    /**
     * Gets the scope property value. Scope defines the information and permissions you're looking to gather from your custom identity provider. OpenID Connect requests must contain the openid scope value in order to receive the ID token from the identity provider. Without the ID token, users aren't able to sign in to Azure AD B2C using the custom identity provider. Other scopes can be appended, separated by a space. For more information about the scope limitations, see RFC6749 Section 3.3. Required.
     * @return string|null
    */
    public function getScope(): ?string {
        $val = $this->getBackingStore()->get('scope');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scope'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('claimsMapping', $this->getClaimsMapping());
        $writer->writeStringValue('clientId', $this->getClientId());
        $writer->writeStringValue('clientSecret', $this->getClientSecret());
        $writer->writeStringValue('domainHint', $this->getDomainHint());
        $writer->writeStringValue('metadataUrl', $this->getMetadataUrl());
        $writer->writeEnumValue('responseMode', $this->getResponseMode());
        $writer->writeEnumValue('responseType', $this->getResponseType());
        $writer->writeStringValue('scope', $this->getScope());
    }

    /**
     * Sets the claimsMapping property value. After the OIDC provider sends an ID token back to Microsoft Entra ID, Microsoft Entra ID needs to be able to map the claims from the received token to the claims that Microsoft Entra ID recognizes and uses. This complex type captures that mapping. Required.
     * @param ClaimsMapping|null $value Value to set for the claimsMapping property.
    */
    public function setClaimsMapping(?ClaimsMapping $value): void {
        $this->getBackingStore()->set('claimsMapping', $value);
    }

    /**
     * Sets the clientId property value. The client identifier for the application obtained when registering the application with the identity provider. Required.
     * @param string|null $value Value to set for the clientId property.
    */
    public function setClientId(?string $value): void {
        $this->getBackingStore()->set('clientId', $value);
    }

    /**
     * Sets the clientSecret property value. The client secret for the application obtained when registering the application with the identity provider. The clientSecret has a dependency on responseType. When responseType is code, a secret is required for the auth code exchange.When responseType is idtoken, the secret isn't required because there's no code exchange. The idtoken is returned directly from the authorization response. This is write-only. A read operation returns .
     * @param string|null $value Value to set for the clientSecret property.
    */
    public function setClientSecret(?string $value): void {
        $this->getBackingStore()->set('clientSecret', $value);
    }

    /**
     * Sets the domainHint property value. The domain hint can be used to skip directly to the sign-in page of the specified identity provider instead of having the user make a selection among the list of available identity providers.
     * @param string|null $value Value to set for the domainHint property.
    */
    public function setDomainHint(?string $value): void {
        $this->getBackingStore()->set('domainHint', $value);
    }

    /**
     * Sets the metadataUrl property value. The URL for the metadata document of the OpenID Connect identity provider. Every OpenID Connect identity provider describes a metadata document that contains most of the information required to perform sign-in. This includes information such as the URLs to use and the location of the service's public signing keys. The OpenID Connect metadata document is always located at an endpoint that ends in .well-known/openid-configuration. Provide the metadata URL for the OpenID Connect identity provider you add. Read-only. Required.
     * @param string|null $value Value to set for the metadataUrl property.
    */
    public function setMetadataUrl(?string $value): void {
        $this->getBackingStore()->set('metadataUrl', $value);
    }

    /**
     * Sets the responseMode property value. The responseMode property
     * @param OpenIdConnectResponseMode|null $value Value to set for the responseMode property.
    */
    public function setResponseMode(?OpenIdConnectResponseMode $value): void {
        $this->getBackingStore()->set('responseMode', $value);
    }

    /**
     * Sets the responseType property value. The responseType property
     * @param OpenIdConnectResponseTypes|null $value Value to set for the responseType property.
    */
    public function setResponseType(?OpenIdConnectResponseTypes $value): void {
        $this->getBackingStore()->set('responseType', $value);
    }

    /**
     * Sets the scope property value. Scope defines the information and permissions you're looking to gather from your custom identity provider. OpenID Connect requests must contain the openid scope value in order to receive the ID token from the identity provider. Without the ID token, users aren't able to sign in to Azure AD B2C using the custom identity provider. Other scopes can be appended, separated by a space. For more information about the scope limitations, see RFC6749 Section 3.3. Required.
     * @param string|null $value Value to set for the scope property.
    */
    public function setScope(?string $value): void {
        $this->getBackingStore()->set('scope', $value);
    }

}

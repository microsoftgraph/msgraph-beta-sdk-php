<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OidcIdentityProvider extends IdentityProviderBase implements Parsable 
{
    /**
     * Instantiates a new OidcIdentityProvider and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.oidcIdentityProvider');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OidcIdentityProvider
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OidcIdentityProvider {
        return new OidcIdentityProvider();
    }

    /**
     * Gets the clientAuthentication property value. The clientAuthentication property
     * @return OidcClientAuthentication|null
    */
    public function getClientAuthentication(): ?OidcClientAuthentication {
        $val = $this->getBackingStore()->get('clientAuthentication');
        if (is_null($val) || $val instanceof OidcClientAuthentication) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'clientAuthentication'");
    }

    /**
     * Gets the clientId property value. The client ID for the application obtained when registering the application with the identity provider.
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
            'clientAuthentication' => fn(ParseNode $n) => $o->setClientAuthentication($n->getObjectValue([OidcClientAuthentication::class, 'createFromDiscriminatorValue'])),
            'clientId' => fn(ParseNode $n) => $o->setClientId($n->getStringValue()),
            'inboundClaimMapping' => fn(ParseNode $n) => $o->setInboundClaimMapping($n->getObjectValue([OidcInboundClaimMappingOverride::class, 'createFromDiscriminatorValue'])),
            'issuer' => fn(ParseNode $n) => $o->setIssuer($n->getStringValue()),
            'responseType' => fn(ParseNode $n) => $o->setResponseType($n->getEnumValue(OidcResponseType::class)),
            'scope' => fn(ParseNode $n) => $o->setScope($n->getStringValue()),
            'wellKnownEndpoint' => fn(ParseNode $n) => $o->setWellKnownEndpoint($n->getStringValue()),
        ]);
    }

    /**
     * Gets the inboundClaimMapping property value. After the OIDC provider sends an ID token back to Microsoft Entra External ID, Microsoft Entra External ID needs to be able to map the claims from the received token to the claims that Microsoft Entra ID recognizes and uses. This complex type captures that mapping.
     * @return OidcInboundClaimMappingOverride|null
    */
    public function getInboundClaimMapping(): ?OidcInboundClaimMappingOverride {
        $val = $this->getBackingStore()->get('inboundClaimMapping');
        if (is_null($val) || $val instanceof OidcInboundClaimMappingOverride) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inboundClaimMapping'");
    }

    /**
     * Gets the issuer property value. The issuer URI. Issuer URI is a case-sensitive URL using https scheme contains scheme, host, and optionally, port number and path components and no query or fragment components. Note: Configuring other Microsoft Entra tenants as an external identity provider is currently not supported. As a result, the microsoftonline.com domain in the issuer URI is not accepted.
     * @return string|null
    */
    public function getIssuer(): ?string {
        $val = $this->getBackingStore()->get('issuer');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'issuer'");
    }

    /**
     * Gets the responseType property value. The responseType property
     * @return OidcResponseType|null
    */
    public function getResponseType(): ?OidcResponseType {
        $val = $this->getBackingStore()->get('responseType');
        if (is_null($val) || $val instanceof OidcResponseType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'responseType'");
    }

    /**
     * Gets the scope property value. Scope defines the information and permissions you are looking to gather from your custom identity provider.
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
     * Gets the wellKnownEndpoint property value. The URL for the metadata document of the OpenID Connect identity provider. Every OpenID Connect identity provider describes a metadata document that contains most of the information required to perform sign-in. This includes information such as the URLs to use and the location of the service's public signing keys. The OpenID Connect metadata document is always located at an endpoint that ends in .well-known/openid-configuration. Note: The metadata document should, at minimum, contain the following properties: issuer, authorizationendpoint, tokenendpoint, tokenendpointauthmethodssupported, responsetypessupported, subjecttypessupported and jwks_uri. Visit OpenID Connect Discovery specifications for more details.
     * @return string|null
    */
    public function getWellKnownEndpoint(): ?string {
        $val = $this->getBackingStore()->get('wellKnownEndpoint');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'wellKnownEndpoint'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('clientAuthentication', $this->getClientAuthentication());
        $writer->writeStringValue('clientId', $this->getClientId());
        $writer->writeObjectValue('inboundClaimMapping', $this->getInboundClaimMapping());
        $writer->writeStringValue('issuer', $this->getIssuer());
        $writer->writeEnumValue('responseType', $this->getResponseType());
        $writer->writeStringValue('scope', $this->getScope());
        $writer->writeStringValue('wellKnownEndpoint', $this->getWellKnownEndpoint());
    }

    /**
     * Sets the clientAuthentication property value. The clientAuthentication property
     * @param OidcClientAuthentication|null $value Value to set for the clientAuthentication property.
    */
    public function setClientAuthentication(?OidcClientAuthentication $value): void {
        $this->getBackingStore()->set('clientAuthentication', $value);
    }

    /**
     * Sets the clientId property value. The client ID for the application obtained when registering the application with the identity provider.
     * @param string|null $value Value to set for the clientId property.
    */
    public function setClientId(?string $value): void {
        $this->getBackingStore()->set('clientId', $value);
    }

    /**
     * Sets the inboundClaimMapping property value. After the OIDC provider sends an ID token back to Microsoft Entra External ID, Microsoft Entra External ID needs to be able to map the claims from the received token to the claims that Microsoft Entra ID recognizes and uses. This complex type captures that mapping.
     * @param OidcInboundClaimMappingOverride|null $value Value to set for the inboundClaimMapping property.
    */
    public function setInboundClaimMapping(?OidcInboundClaimMappingOverride $value): void {
        $this->getBackingStore()->set('inboundClaimMapping', $value);
    }

    /**
     * Sets the issuer property value. The issuer URI. Issuer URI is a case-sensitive URL using https scheme contains scheme, host, and optionally, port number and path components and no query or fragment components. Note: Configuring other Microsoft Entra tenants as an external identity provider is currently not supported. As a result, the microsoftonline.com domain in the issuer URI is not accepted.
     * @param string|null $value Value to set for the issuer property.
    */
    public function setIssuer(?string $value): void {
        $this->getBackingStore()->set('issuer', $value);
    }

    /**
     * Sets the responseType property value. The responseType property
     * @param OidcResponseType|null $value Value to set for the responseType property.
    */
    public function setResponseType(?OidcResponseType $value): void {
        $this->getBackingStore()->set('responseType', $value);
    }

    /**
     * Sets the scope property value. Scope defines the information and permissions you are looking to gather from your custom identity provider.
     * @param string|null $value Value to set for the scope property.
    */
    public function setScope(?string $value): void {
        $this->getBackingStore()->set('scope', $value);
    }

    /**
     * Sets the wellKnownEndpoint property value. The URL for the metadata document of the OpenID Connect identity provider. Every OpenID Connect identity provider describes a metadata document that contains most of the information required to perform sign-in. This includes information such as the URLs to use and the location of the service's public signing keys. The OpenID Connect metadata document is always located at an endpoint that ends in .well-known/openid-configuration. Note: The metadata document should, at minimum, contain the following properties: issuer, authorizationendpoint, tokenendpoint, tokenendpointauthmethodssupported, responsetypessupported, subjecttypessupported and jwks_uri. Visit OpenID Connect Discovery specifications for more details.
     * @param string|null $value Value to set for the wellKnownEndpoint property.
    */
    public function setWellKnownEndpoint(?string $value): void {
        $this->getBackingStore()->set('wellKnownEndpoint', $value);
    }

}

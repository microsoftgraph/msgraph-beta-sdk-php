<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OpenIdConnectIdentityProvider extends IdentityProviderBase implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var ClaimsMapping|null $claimsMapping After the OIDC provider sends an ID token back to Azure AD, Azure AD needs to be able to map the claims from the received token to the claims that Azure AD recognizes and uses. This complex type captures that mapping. Required.
    */
    private ?ClaimsMapping $claimsMapping = null;
    
    /**
     * @var string|null $clientId The client identifier for the application obtained when registering the application with the identity provider. Required.
    */
    private ?string $clientId = null;
    
    /**
     * @var string|null $clientSecret The client secret for the application obtained when registering the application with the identity provider. The clientSecret has a dependency on responseType. When responseType is code, a secret is required for the auth code exchange.When responseType is id_token the secret is not required because there is no code exchange. The id_token is returned directly from the authorization response. This is write-only. A read operation returns ****.
    */
    private ?string $clientSecret = null;
    
    /**
     * @var string|null $domainHint The domain hint can be used to skip directly to the sign-in page of the specified identity provider, instead of having the user make a selection among the list of available identity providers.
    */
    private ?string $domainHint = null;
    
    /**
     * @var string|null $metadataUrl The URL for the metadata document of the OpenID Connect identity provider. Every OpenID Connect identity provider describes a metadata document that contains most of the information required to perform sign-in. This includes information such as the URLs to use and the location of the service's public signing keys. The OpenID Connect metadata document is always located at an endpoint that ends in .well-known/openid-configuration. Provide the metadata URL for the OpenID Connect identity provider you add. Read-only. Required.
    */
    private ?string $metadataUrl = null;
    
    /**
     * @var OpenIdConnectResponseMode|null $responseMode The response mode defines the method used to send data back from the custom identity provider to Azure AD B2C. Possible values: form_post, query. Required.
    */
    private ?OpenIdConnectResponseMode $responseMode = null;
    
    /**
     * @var OpenIdConnectResponseTypes|null $responseType The response type describes the type of information sent back in the initial call to the authorization_endpoint of the custom identity provider. Possible values: code , id_token , token.  Required.
    */
    private ?OpenIdConnectResponseTypes $responseType = null;
    
    /**
     * @var string|null $scope Scope defines the information and permissions you are looking to gather from your custom identity provider. OpenID Connect requests must contain the openid scope value in order to receive the ID token from the identity provider. Without the ID token, users are not able to sign in to Azure AD B2C using the custom identity provider. Other scopes can be appended, separated by a space. For more details about the scope limitations see RFC6749 Section 3.3. Required.
    */
    private ?string $scope = null;
    
    /**
     * Instantiates a new OpenIdConnectIdentityProvider and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the claimsMapping property value. After the OIDC provider sends an ID token back to Azure AD, Azure AD needs to be able to map the claims from the received token to the claims that Azure AD recognizes and uses. This complex type captures that mapping. Required.
     * @return ClaimsMapping|null
    */
    public function getClaimsMapping(): ?ClaimsMapping {
        return $this->claimsMapping;
    }

    /**
     * Gets the clientId property value. The client identifier for the application obtained when registering the application with the identity provider. Required.
     * @return string|null
    */
    public function getClientId(): ?string {
        return $this->clientId;
    }

    /**
     * Gets the clientSecret property value. The client secret for the application obtained when registering the application with the identity provider. The clientSecret has a dependency on responseType. When responseType is code, a secret is required for the auth code exchange.When responseType is id_token the secret is not required because there is no code exchange. The id_token is returned directly from the authorization response. This is write-only. A read operation returns ****.
     * @return string|null
    */
    public function getClientSecret(): ?string {
        return $this->clientSecret;
    }

    /**
     * Gets the domainHint property value. The domain hint can be used to skip directly to the sign-in page of the specified identity provider, instead of having the user make a selection among the list of available identity providers.
     * @return string|null
    */
    public function getDomainHint(): ?string {
        return $this->domainHint;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'claimsMapping' => function (ParseNode $n) use ($o) { $o->setClaimsMapping($n->getObjectValue(array(ClaimsMapping::class, 'createFromDiscriminatorValue'))); },
            'clientId' => function (ParseNode $n) use ($o) { $o->setClientId($n->getStringValue()); },
            'clientSecret' => function (ParseNode $n) use ($o) { $o->setClientSecret($n->getStringValue()); },
            'domainHint' => function (ParseNode $n) use ($o) { $o->setDomainHint($n->getStringValue()); },
            'metadataUrl' => function (ParseNode $n) use ($o) { $o->setMetadataUrl($n->getStringValue()); },
            'responseMode' => function (ParseNode $n) use ($o) { $o->setResponseMode($n->getEnumValue(OpenIdConnectResponseMode::class)); },
            'responseType' => function (ParseNode $n) use ($o) { $o->setResponseType($n->getEnumValue(OpenIdConnectResponseTypes::class)); },
            'scope' => function (ParseNode $n) use ($o) { $o->setScope($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the metadataUrl property value. The URL for the metadata document of the OpenID Connect identity provider. Every OpenID Connect identity provider describes a metadata document that contains most of the information required to perform sign-in. This includes information such as the URLs to use and the location of the service's public signing keys. The OpenID Connect metadata document is always located at an endpoint that ends in .well-known/openid-configuration. Provide the metadata URL for the OpenID Connect identity provider you add. Read-only. Required.
     * @return string|null
    */
    public function getMetadataUrl(): ?string {
        return $this->metadataUrl;
    }

    /**
     * Gets the responseMode property value. The response mode defines the method used to send data back from the custom identity provider to Azure AD B2C. Possible values: form_post, query. Required.
     * @return OpenIdConnectResponseMode|null
    */
    public function getResponseMode(): ?OpenIdConnectResponseMode {
        return $this->responseMode;
    }

    /**
     * Gets the responseType property value. The response type describes the type of information sent back in the initial call to the authorization_endpoint of the custom identity provider. Possible values: code , id_token , token.  Required.
     * @return OpenIdConnectResponseTypes|null
    */
    public function getResponseType(): ?OpenIdConnectResponseTypes {
        return $this->responseType;
    }

    /**
     * Gets the scope property value. Scope defines the information and permissions you are looking to gather from your custom identity provider. OpenID Connect requests must contain the openid scope value in order to receive the ID token from the identity provider. Without the ID token, users are not able to sign in to Azure AD B2C using the custom identity provider. Other scopes can be appended, separated by a space. For more details about the scope limitations see RFC6749 Section 3.3. Required.
     * @return string|null
    */
    public function getScope(): ?string {
        return $this->scope;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('claimsMapping', $this->claimsMapping);
        $writer->writeStringValue('clientId', $this->clientId);
        $writer->writeStringValue('clientSecret', $this->clientSecret);
        $writer->writeStringValue('domainHint', $this->domainHint);
        $writer->writeStringValue('metadataUrl', $this->metadataUrl);
        $writer->writeEnumValue('responseMode', $this->responseMode);
        $writer->writeEnumValue('responseType', $this->responseType);
        $writer->writeStringValue('scope', $this->scope);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the claimsMapping property value. After the OIDC provider sends an ID token back to Azure AD, Azure AD needs to be able to map the claims from the received token to the claims that Azure AD recognizes and uses. This complex type captures that mapping. Required.
     *  @param ClaimsMapping|null $value Value to set for the claimsMapping property.
    */
    public function setClaimsMapping(?ClaimsMapping $value ): void {
        $this->claimsMapping = $value;
    }

    /**
     * Sets the clientId property value. The client identifier for the application obtained when registering the application with the identity provider. Required.
     *  @param string|null $value Value to set for the clientId property.
    */
    public function setClientId(?string $value ): void {
        $this->clientId = $value;
    }

    /**
     * Sets the clientSecret property value. The client secret for the application obtained when registering the application with the identity provider. The clientSecret has a dependency on responseType. When responseType is code, a secret is required for the auth code exchange.When responseType is id_token the secret is not required because there is no code exchange. The id_token is returned directly from the authorization response. This is write-only. A read operation returns ****.
     *  @param string|null $value Value to set for the clientSecret property.
    */
    public function setClientSecret(?string $value ): void {
        $this->clientSecret = $value;
    }

    /**
     * Sets the domainHint property value. The domain hint can be used to skip directly to the sign-in page of the specified identity provider, instead of having the user make a selection among the list of available identity providers.
     *  @param string|null $value Value to set for the domainHint property.
    */
    public function setDomainHint(?string $value ): void {
        $this->domainHint = $value;
    }

    /**
     * Sets the metadataUrl property value. The URL for the metadata document of the OpenID Connect identity provider. Every OpenID Connect identity provider describes a metadata document that contains most of the information required to perform sign-in. This includes information such as the URLs to use and the location of the service's public signing keys. The OpenID Connect metadata document is always located at an endpoint that ends in .well-known/openid-configuration. Provide the metadata URL for the OpenID Connect identity provider you add. Read-only. Required.
     *  @param string|null $value Value to set for the metadataUrl property.
    */
    public function setMetadataUrl(?string $value ): void {
        $this->metadataUrl = $value;
    }

    /**
     * Sets the responseMode property value. The response mode defines the method used to send data back from the custom identity provider to Azure AD B2C. Possible values: form_post, query. Required.
     *  @param OpenIdConnectResponseMode|null $value Value to set for the responseMode property.
    */
    public function setResponseMode(?OpenIdConnectResponseMode $value ): void {
        $this->responseMode = $value;
    }

    /**
     * Sets the responseType property value. The response type describes the type of information sent back in the initial call to the authorization_endpoint of the custom identity provider. Possible values: code , id_token , token.  Required.
     *  @param OpenIdConnectResponseTypes|null $value Value to set for the responseType property.
    */
    public function setResponseType(?OpenIdConnectResponseTypes $value ): void {
        $this->responseType = $value;
    }

    /**
     * Sets the scope property value. Scope defines the information and permissions you are looking to gather from your custom identity provider. OpenID Connect requests must contain the openid scope value in order to receive the ID token from the identity provider. Without the ID token, users are not able to sign in to Azure AD B2C using the custom identity provider. Other scopes can be appended, separated by a space. For more details about the scope limitations see RFC6749 Section 3.3. Required.
     *  @param string|null $value Value to set for the scope property.
    */
    public function setScope(?string $value ): void {
        $this->scope = $value;
    }

}

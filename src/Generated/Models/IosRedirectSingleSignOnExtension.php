<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IosRedirectSingleSignOnExtension extends IosSingleSignOnExtension implements Parsable 
{
    /**
     * @var array<KeyTypedValuePair>|null $configurations Gets or sets a list of typed key-value pairs used to configure Credential-type profiles. This collection can contain a maximum of 500 elements.
    */
    private ?array $configurations = null;
    
    /**
     * @var string|null $extensionIdentifier Gets or sets the bundle ID of the app extension that performs SSO for the specified URLs.
    */
    private ?string $extensionIdentifier = null;
    
    /**
     * @var string|null $teamIdentifier Gets or sets the team ID of the app extension that performs SSO for the specified URLs.
    */
    private ?string $teamIdentifier = null;
    
    /**
     * @var array<string>|null $urlPrefixes One or more URL prefixes of identity providers on whose behalf the app extension performs single sign-on. URLs must begin with http:// or https://. All URL prefixes must be unique for all profiles.
    */
    private ?array $urlPrefixes = null;
    
    /**
     * Instantiates a new IosRedirectSingleSignOnExtension and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.iosRedirectSingleSignOnExtension');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosRedirectSingleSignOnExtension
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosRedirectSingleSignOnExtension {
        return new IosRedirectSingleSignOnExtension();
    }

    /**
     * Gets the configurations property value. Gets or sets a list of typed key-value pairs used to configure Credential-type profiles. This collection can contain a maximum of 500 elements.
     * @return array<KeyTypedValuePair>|null
    */
    public function getConfigurations(): ?array {
        return $this->configurations;
    }

    /**
     * Gets the extensionIdentifier property value. Gets or sets the bundle ID of the app extension that performs SSO for the specified URLs.
     * @return string|null
    */
    public function getExtensionIdentifier(): ?string {
        return $this->extensionIdentifier;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'configurations' => fn(ParseNode $n) => $o->setConfigurations($n->getCollectionOfObjectValues([KeyTypedValuePair::class, 'createFromDiscriminatorValue'])),
            'extensionIdentifier' => fn(ParseNode $n) => $o->setExtensionIdentifier($n->getStringValue()),
            'teamIdentifier' => fn(ParseNode $n) => $o->setTeamIdentifier($n->getStringValue()),
            'urlPrefixes' => fn(ParseNode $n) => $o->setUrlPrefixes($n->getCollectionOfPrimitiveValues()),
        ]);
    }

    /**
     * Gets the teamIdentifier property value. Gets or sets the team ID of the app extension that performs SSO for the specified URLs.
     * @return string|null
    */
    public function getTeamIdentifier(): ?string {
        return $this->teamIdentifier;
    }

    /**
     * Gets the urlPrefixes property value. One or more URL prefixes of identity providers on whose behalf the app extension performs single sign-on. URLs must begin with http:// or https://. All URL prefixes must be unique for all profiles.
     * @return array<string>|null
    */
    public function getUrlPrefixes(): ?array {
        return $this->urlPrefixes;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('configurations', $this->configurations);
        $writer->writeStringValue('extensionIdentifier', $this->extensionIdentifier);
        $writer->writeStringValue('teamIdentifier', $this->teamIdentifier);
        $writer->writeCollectionOfPrimitiveValues('urlPrefixes', $this->urlPrefixes);
    }

    /**
     * Sets the configurations property value. Gets or sets a list of typed key-value pairs used to configure Credential-type profiles. This collection can contain a maximum of 500 elements.
     *  @param array<KeyTypedValuePair>|null $value Value to set for the configurations property.
    */
    public function setConfigurations(?array $value ): void {
        $this->configurations = $value;
    }

    /**
     * Sets the extensionIdentifier property value. Gets or sets the bundle ID of the app extension that performs SSO for the specified URLs.
     *  @param string|null $value Value to set for the extensionIdentifier property.
    */
    public function setExtensionIdentifier(?string $value ): void {
        $this->extensionIdentifier = $value;
    }

    /**
     * Sets the teamIdentifier property value. Gets or sets the team ID of the app extension that performs SSO for the specified URLs.
     *  @param string|null $value Value to set for the teamIdentifier property.
    */
    public function setTeamIdentifier(?string $value ): void {
        $this->teamIdentifier = $value;
    }

    /**
     * Sets the urlPrefixes property value. One or more URL prefixes of identity providers on whose behalf the app extension performs single sign-on. URLs must begin with http:// or https://. All URL prefixes must be unique for all profiles.
     *  @param array<string>|null $value Value to set for the urlPrefixes property.
    */
    public function setUrlPrefixes(?array $value ): void {
        $this->urlPrefixes = $value;
    }

}

<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MacOSCredentialSingleSignOnExtension extends MacOSSingleSignOnExtension implements Parsable 
{
    /**
     * Instantiates a new MacOSCredentialSingleSignOnExtension and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.macOSCredentialSingleSignOnExtension');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOSCredentialSingleSignOnExtension
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOSCredentialSingleSignOnExtension {
        return new MacOSCredentialSingleSignOnExtension();
    }

    /**
     * Gets the configurations property value. Gets or sets a list of typed key-value pairs used to configure Credential-type profiles. This collection can contain a maximum of 500 elements.
     * @return array<KeyTypedValuePair>|null
    */
    public function getConfigurations(): ?array {
        return $this->getBackingStore()->get('configurations');
    }

    /**
     * Gets the domains property value. Gets or sets a list of hosts or domain names for which the app extension performs SSO.
     * @return array<string>|null
    */
    public function getDomains(): ?array {
        return $this->getBackingStore()->get('domains');
    }

    /**
     * Gets the extensionIdentifier property value. Gets or sets the bundle ID of the app extension that performs SSO for the specified URLs.
     * @return string|null
    */
    public function getExtensionIdentifier(): ?string {
        return $this->getBackingStore()->get('extensionIdentifier');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'configurations' => fn(ParseNode $n) => $o->setConfigurations($n->getCollectionOfObjectValues([KeyTypedValuePair::class, 'createFromDiscriminatorValue'])),
            'domains' => fn(ParseNode $n) => $o->setDomains($n->getCollectionOfPrimitiveValues()),
            'extensionIdentifier' => fn(ParseNode $n) => $o->setExtensionIdentifier($n->getStringValue()),
            'realm' => fn(ParseNode $n) => $o->setRealm($n->getStringValue()),
            'teamIdentifier' => fn(ParseNode $n) => $o->setTeamIdentifier($n->getStringValue()),
        ]);
    }

    /**
     * Gets the realm property value. Gets or sets the case-sensitive realm name for this profile.
     * @return string|null
    */
    public function getRealm(): ?string {
        return $this->getBackingStore()->get('realm');
    }

    /**
     * Gets the teamIdentifier property value. Gets or sets the team ID of the app extension that performs SSO for the specified URLs.
     * @return string|null
    */
    public function getTeamIdentifier(): ?string {
        return $this->getBackingStore()->get('teamIdentifier');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('configurations', $this->getConfigurations());
        $writer->writeCollectionOfPrimitiveValues('domains', $this->getDomains());
        $writer->writeStringValue('extensionIdentifier', $this->getExtensionIdentifier());
        $writer->writeStringValue('realm', $this->getRealm());
        $writer->writeStringValue('teamIdentifier', $this->getTeamIdentifier());
    }

    /**
     * Sets the configurations property value. Gets or sets a list of typed key-value pairs used to configure Credential-type profiles. This collection can contain a maximum of 500 elements.
     * @param array<KeyTypedValuePair>|null $value Value to set for the configurations property.
    */
    public function setConfigurations(?array $value): void {
        $this->getBackingStore()->set('configurations', $value);
    }

    /**
     * Sets the domains property value. Gets or sets a list of hosts or domain names for which the app extension performs SSO.
     * @param array<string>|null $value Value to set for the domains property.
    */
    public function setDomains(?array $value): void {
        $this->getBackingStore()->set('domains', $value);
    }

    /**
     * Sets the extensionIdentifier property value. Gets or sets the bundle ID of the app extension that performs SSO for the specified URLs.
     * @param string|null $value Value to set for the extensionIdentifier property.
    */
    public function setExtensionIdentifier(?string $value): void {
        $this->getBackingStore()->set('extensionIdentifier', $value);
    }

    /**
     * Sets the realm property value. Gets or sets the case-sensitive realm name for this profile.
     * @param string|null $value Value to set for the realm property.
    */
    public function setRealm(?string $value): void {
        $this->getBackingStore()->set('realm', $value);
    }

    /**
     * Sets the teamIdentifier property value. Gets or sets the team ID of the app extension that performs SSO for the specified URLs.
     * @param string|null $value Value to set for the teamIdentifier property.
    */
    public function setTeamIdentifier(?string $value): void {
        $this->getBackingStore()->set('teamIdentifier', $value);
    }

}

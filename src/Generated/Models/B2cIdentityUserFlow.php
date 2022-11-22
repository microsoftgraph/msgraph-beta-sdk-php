<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class B2cIdentityUserFlow extends IdentityUserFlow implements Parsable 
{
    /**
     * Instantiates a new B2cIdentityUserFlow and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return B2cIdentityUserFlow
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): B2cIdentityUserFlow {
        return new B2cIdentityUserFlow();
    }

    /**
     * Gets the apiConnectorConfiguration property value. Configuration for enabling an API connector for use as part of the user flow. You can only obtain the value of this object using Get userFlowApiConnectorConfiguration.
     * @return UserFlowApiConnectorConfiguration|null
    */
    public function getApiConnectorConfiguration(): ?UserFlowApiConnectorConfiguration {
        return $this->getBackingStore()->get('apiConnectorConfiguration');
    }

    /**
     * Gets the defaultLanguageTag property value. Indicates the default language of the b2cIdentityUserFlow that is used when no ui_locale tag is specified in the request. This field is RFC 5646 compliant.
     * @return string|null
    */
    public function getDefaultLanguageTag(): ?string {
        return $this->getBackingStore()->get('defaultLanguageTag');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'apiConnectorConfiguration' => fn(ParseNode $n) => $o->setApiConnectorConfiguration($n->getObjectValue([UserFlowApiConnectorConfiguration::class, 'createFromDiscriminatorValue'])),
            'defaultLanguageTag' => fn(ParseNode $n) => $o->setDefaultLanguageTag($n->getStringValue()),
            'identityProviders' => fn(ParseNode $n) => $o->setIdentityProviders($n->getCollectionOfObjectValues([IdentityProvider::class, 'createFromDiscriminatorValue'])),
            'isLanguageCustomizationEnabled' => fn(ParseNode $n) => $o->setIsLanguageCustomizationEnabled($n->getBooleanValue()),
            'languages' => fn(ParseNode $n) => $o->setLanguages($n->getCollectionOfObjectValues([UserFlowLanguageConfiguration::class, 'createFromDiscriminatorValue'])),
            'userAttributeAssignments' => fn(ParseNode $n) => $o->setUserAttributeAssignments($n->getCollectionOfObjectValues([IdentityUserFlowAttributeAssignment::class, 'createFromDiscriminatorValue'])),
            'userFlowIdentityProviders' => fn(ParseNode $n) => $o->setUserFlowIdentityProviders($n->getCollectionOfObjectValues([IdentityProviderBase::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the identityProviders property value. The identityProviders property
     * @return array<IdentityProvider>|null
    */
    public function getIdentityProviders(): ?array {
        return $this->getBackingStore()->get('identityProviders');
    }

    /**
     * Gets the isLanguageCustomizationEnabled property value. The property that determines whether language customization is enabled within the B2C user flow. Language customization is not enabled by default for B2C user flows.
     * @return bool|null
    */
    public function getIsLanguageCustomizationEnabled(): ?bool {
        return $this->getBackingStore()->get('isLanguageCustomizationEnabled');
    }

    /**
     * Gets the languages property value. The languages supported for customization within the user flow. Language customization is not enabled by default in B2C user flows.
     * @return array<UserFlowLanguageConfiguration>|null
    */
    public function getLanguages(): ?array {
        return $this->getBackingStore()->get('languages');
    }

    /**
     * Gets the userAttributeAssignments property value. The user attribute assignments included in the user flow.
     * @return array<IdentityUserFlowAttributeAssignment>|null
    */
    public function getUserAttributeAssignments(): ?array {
        return $this->getBackingStore()->get('userAttributeAssignments');
    }

    /**
     * Gets the userFlowIdentityProviders property value. The userFlowIdentityProviders property
     * @return array<IdentityProviderBase>|null
    */
    public function getUserFlowIdentityProviders(): ?array {
        return $this->getBackingStore()->get('userFlowIdentityProviders');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('apiConnectorConfiguration', $this->getApiConnectorConfiguration());
        $writer->writeStringValue('defaultLanguageTag', $this->getDefaultLanguageTag());
        $writer->writeCollectionOfObjectValues('identityProviders', $this->getIdentityProviders());
        $writer->writeBooleanValue('isLanguageCustomizationEnabled', $this->getIsLanguageCustomizationEnabled());
        $writer->writeCollectionOfObjectValues('languages', $this->getLanguages());
        $writer->writeCollectionOfObjectValues('userAttributeAssignments', $this->getUserAttributeAssignments());
        $writer->writeCollectionOfObjectValues('userFlowIdentityProviders', $this->getUserFlowIdentityProviders());
    }

    /**
     * Sets the apiConnectorConfiguration property value. Configuration for enabling an API connector for use as part of the user flow. You can only obtain the value of this object using Get userFlowApiConnectorConfiguration.
     *  @param UserFlowApiConnectorConfiguration|null $value Value to set for the apiConnectorConfiguration property.
    */
    public function setApiConnectorConfiguration(?UserFlowApiConnectorConfiguration $value): void {
        $this->getBackingStore()->set('apiConnectorConfiguration', $value);
    }

    /**
     * Sets the defaultLanguageTag property value. Indicates the default language of the b2cIdentityUserFlow that is used when no ui_locale tag is specified in the request. This field is RFC 5646 compliant.
     *  @param string|null $value Value to set for the defaultLanguageTag property.
    */
    public function setDefaultLanguageTag(?string $value): void {
        $this->getBackingStore()->set('defaultLanguageTag', $value);
    }

    /**
     * Sets the identityProviders property value. The identityProviders property
     *  @param array<IdentityProvider>|null $value Value to set for the identityProviders property.
    */
    public function setIdentityProviders(?array $value): void {
        $this->getBackingStore()->set('identityProviders', $value);
    }

    /**
     * Sets the isLanguageCustomizationEnabled property value. The property that determines whether language customization is enabled within the B2C user flow. Language customization is not enabled by default for B2C user flows.
     *  @param bool|null $value Value to set for the isLanguageCustomizationEnabled property.
    */
    public function setIsLanguageCustomizationEnabled(?bool $value): void {
        $this->getBackingStore()->set('isLanguageCustomizationEnabled', $value);
    }

    /**
     * Sets the languages property value. The languages supported for customization within the user flow. Language customization is not enabled by default in B2C user flows.
     *  @param array<UserFlowLanguageConfiguration>|null $value Value to set for the languages property.
    */
    public function setLanguages(?array $value): void {
        $this->getBackingStore()->set('languages', $value);
    }

    /**
     * Sets the userAttributeAssignments property value. The user attribute assignments included in the user flow.
     *  @param array<IdentityUserFlowAttributeAssignment>|null $value Value to set for the userAttributeAssignments property.
    */
    public function setUserAttributeAssignments(?array $value): void {
        $this->getBackingStore()->set('userAttributeAssignments', $value);
    }

    /**
     * Sets the userFlowIdentityProviders property value. The userFlowIdentityProviders property
     *  @param array<IdentityProviderBase>|null $value Value to set for the userFlowIdentityProviders property.
    */
    public function setUserFlowIdentityProviders(?array $value): void {
        $this->getBackingStore()->set('userFlowIdentityProviders', $value);
    }

}

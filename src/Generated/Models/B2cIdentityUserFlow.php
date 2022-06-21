<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class B2cIdentityUserFlow extends IdentityUserFlow implements Parsable 
{
    /**
     * @var UserFlowApiConnectorConfiguration|null $apiConnectorConfiguration Configuration for enabling an API connector for use as part of the user flow. You can only obtain the value of this object using Get userFlowApiConnectorConfiguration.
    */
    private ?UserFlowApiConnectorConfiguration $apiConnectorConfiguration = null;
    
    /**
     * @var string|null $defaultLanguageTag Indicates the default language of the b2cIdentityUserFlow that is used when no ui_locale tag is specified in the request. This field is RFC 5646 compliant.
    */
    private ?string $defaultLanguageTag = null;
    
    /**
     * @var array<IdentityProvider>|null $identityProviders The identityProviders property
    */
    private ?array $identityProviders = null;
    
    /**
     * @var bool|null $isLanguageCustomizationEnabled The property that determines whether language customization is enabled within the B2C user flow. Language customization is not enabled by default for B2C user flows.
    */
    private ?bool $isLanguageCustomizationEnabled = null;
    
    /**
     * @var array<UserFlowLanguageConfiguration>|null $languages The languages supported for customization within the user flow. Language customization is not enabled by default in B2C user flows.
    */
    private ?array $languages = null;
    
    /**
     * @var array<IdentityUserFlowAttributeAssignment>|null $userAttributeAssignments The user attribute assignments included in the user flow.
    */
    private ?array $userAttributeAssignments = null;
    
    /**
     * @var array<IdentityProviderBase>|null $userFlowIdentityProviders The userFlowIdentityProviders property
    */
    private ?array $userFlowIdentityProviders = null;
    
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
        return $this->apiConnectorConfiguration;
    }

    /**
     * Gets the defaultLanguageTag property value. Indicates the default language of the b2cIdentityUserFlow that is used when no ui_locale tag is specified in the request. This field is RFC 5646 compliant.
     * @return string|null
    */
    public function getDefaultLanguageTag(): ?string {
        return $this->defaultLanguageTag;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'apiConnectorConfiguration' => function (ParseNode $n) use ($o) { $o->setApiConnectorConfiguration($n->getObjectValue(array(UserFlowApiConnectorConfiguration::class, 'createFromDiscriminatorValue'))); },
            'defaultLanguageTag' => function (ParseNode $n) use ($o) { $o->setDefaultLanguageTag($n->getStringValue()); },
            'identityProviders' => function (ParseNode $n) use ($o) { $o->setIdentityProviders($n->getCollectionOfObjectValues(array(IdentityProvider::class, 'createFromDiscriminatorValue'))); },
            'isLanguageCustomizationEnabled' => function (ParseNode $n) use ($o) { $o->setIsLanguageCustomizationEnabled($n->getBooleanValue()); },
            'languages' => function (ParseNode $n) use ($o) { $o->setLanguages($n->getCollectionOfObjectValues(array(UserFlowLanguageConfiguration::class, 'createFromDiscriminatorValue'))); },
            'userAttributeAssignments' => function (ParseNode $n) use ($o) { $o->setUserAttributeAssignments($n->getCollectionOfObjectValues(array(IdentityUserFlowAttributeAssignment::class, 'createFromDiscriminatorValue'))); },
            'userFlowIdentityProviders' => function (ParseNode $n) use ($o) { $o->setUserFlowIdentityProviders($n->getCollectionOfObjectValues(array(IdentityProviderBase::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the identityProviders property value. The identityProviders property
     * @return array<IdentityProvider>|null
    */
    public function getIdentityProviders(): ?array {
        return $this->identityProviders;
    }

    /**
     * Gets the isLanguageCustomizationEnabled property value. The property that determines whether language customization is enabled within the B2C user flow. Language customization is not enabled by default for B2C user flows.
     * @return bool|null
    */
    public function getIsLanguageCustomizationEnabled(): ?bool {
        return $this->isLanguageCustomizationEnabled;
    }

    /**
     * Gets the languages property value. The languages supported for customization within the user flow. Language customization is not enabled by default in B2C user flows.
     * @return array<UserFlowLanguageConfiguration>|null
    */
    public function getLanguages(): ?array {
        return $this->languages;
    }

    /**
     * Gets the userAttributeAssignments property value. The user attribute assignments included in the user flow.
     * @return array<IdentityUserFlowAttributeAssignment>|null
    */
    public function getUserAttributeAssignments(): ?array {
        return $this->userAttributeAssignments;
    }

    /**
     * Gets the userFlowIdentityProviders property value. The userFlowIdentityProviders property
     * @return array<IdentityProviderBase>|null
    */
    public function getUserFlowIdentityProviders(): ?array {
        return $this->userFlowIdentityProviders;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('apiConnectorConfiguration', $this->apiConnectorConfiguration);
        $writer->writeStringValue('defaultLanguageTag', $this->defaultLanguageTag);
        $writer->writeCollectionOfObjectValues('identityProviders', $this->identityProviders);
        $writer->writeBooleanValue('isLanguageCustomizationEnabled', $this->isLanguageCustomizationEnabled);
        $writer->writeCollectionOfObjectValues('languages', $this->languages);
        $writer->writeCollectionOfObjectValues('userAttributeAssignments', $this->userAttributeAssignments);
        $writer->writeCollectionOfObjectValues('userFlowIdentityProviders', $this->userFlowIdentityProviders);
    }

    /**
     * Sets the apiConnectorConfiguration property value. Configuration for enabling an API connector for use as part of the user flow. You can only obtain the value of this object using Get userFlowApiConnectorConfiguration.
     *  @param UserFlowApiConnectorConfiguration|null $value Value to set for the apiConnectorConfiguration property.
    */
    public function setApiConnectorConfiguration(?UserFlowApiConnectorConfiguration $value ): void {
        $this->apiConnectorConfiguration = $value;
    }

    /**
     * Sets the defaultLanguageTag property value. Indicates the default language of the b2cIdentityUserFlow that is used when no ui_locale tag is specified in the request. This field is RFC 5646 compliant.
     *  @param string|null $value Value to set for the defaultLanguageTag property.
    */
    public function setDefaultLanguageTag(?string $value ): void {
        $this->defaultLanguageTag = $value;
    }

    /**
     * Sets the identityProviders property value. The identityProviders property
     *  @param array<IdentityProvider>|null $value Value to set for the identityProviders property.
    */
    public function setIdentityProviders(?array $value ): void {
        $this->identityProviders = $value;
    }

    /**
     * Sets the isLanguageCustomizationEnabled property value. The property that determines whether language customization is enabled within the B2C user flow. Language customization is not enabled by default for B2C user flows.
     *  @param bool|null $value Value to set for the isLanguageCustomizationEnabled property.
    */
    public function setIsLanguageCustomizationEnabled(?bool $value ): void {
        $this->isLanguageCustomizationEnabled = $value;
    }

    /**
     * Sets the languages property value. The languages supported for customization within the user flow. Language customization is not enabled by default in B2C user flows.
     *  @param array<UserFlowLanguageConfiguration>|null $value Value to set for the languages property.
    */
    public function setLanguages(?array $value ): void {
        $this->languages = $value;
    }

    /**
     * Sets the userAttributeAssignments property value. The user attribute assignments included in the user flow.
     *  @param array<IdentityUserFlowAttributeAssignment>|null $value Value to set for the userAttributeAssignments property.
    */
    public function setUserAttributeAssignments(?array $value ): void {
        $this->userAttributeAssignments = $value;
    }

    /**
     * Sets the userFlowIdentityProviders property value. The userFlowIdentityProviders property
     *  @param array<IdentityProviderBase>|null $value Value to set for the userFlowIdentityProviders property.
    */
    public function setUserFlowIdentityProviders(?array $value ): void {
        $this->userFlowIdentityProviders = $value;
    }

}

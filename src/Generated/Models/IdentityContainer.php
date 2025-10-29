<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class IdentityContainer implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new IdentityContainer and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IdentityContainer
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IdentityContainer {
        return new IdentityContainer();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the apiConnectors property value. Represents entry point for API connectors.
     * @return array<IdentityApiConnector>|null
    */
    public function getApiConnectors(): ?array {
        $val = $this->getBackingStore()->get('apiConnectors');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, IdentityApiConnector::class);
            /** @var array<IdentityApiConnector>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'apiConnectors'");
    }

    /**
     * Gets the authenticationEventListeners property value. The authenticationEventListeners property
     * @return array<AuthenticationEventListener>|null
    */
    public function getAuthenticationEventListeners(): ?array {
        $val = $this->getBackingStore()->get('authenticationEventListeners');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AuthenticationEventListener::class);
            /** @var array<AuthenticationEventListener>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticationEventListeners'");
    }

    /**
     * Gets the authenticationEventsFlows property value. Represents the entry point for self-service sign-up and sign-in user flows in both Microsoft Entra workforce and external tenants.
     * @return array<AuthenticationEventsFlow>|null
    */
    public function getAuthenticationEventsFlows(): ?array {
        $val = $this->getBackingStore()->get('authenticationEventsFlows');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AuthenticationEventsFlow::class);
            /** @var array<AuthenticationEventsFlow>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticationEventsFlows'");
    }

    /**
     * Gets the b2cUserFlows property value. Represents entry point for B2C identity userflows.
     * @return array<B2cIdentityUserFlow>|null
    */
    public function getB2cUserFlows(): ?array {
        $val = $this->getBackingStore()->get('b2cUserFlows');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, B2cIdentityUserFlow::class);
            /** @var array<B2cIdentityUserFlow>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'b2cUserFlows'");
    }

    /**
     * Gets the b2xUserFlows property value. Represents entry point for B2X and self-service sign-up identity userflows.
     * @return array<B2xIdentityUserFlow>|null
    */
    public function getB2xUserFlows(): ?array {
        $val = $this->getBackingStore()->get('b2xUserFlows');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, B2xIdentityUserFlow::class);
            /** @var array<B2xIdentityUserFlow>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'b2xUserFlows'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the conditionalAccess property value. the entry point for the Conditional Access (CA) object model.
     * @return ConditionalAccessRoot|null
    */
    public function getConditionalAccess(): ?ConditionalAccessRoot {
        $val = $this->getBackingStore()->get('conditionalAccess');
        if (is_null($val) || $val instanceof ConditionalAccessRoot) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'conditionalAccess'");
    }

    /**
     * Gets the continuousAccessEvaluationPolicy property value. Represents entry point for continuous access evaluation policy.
     * @return ContinuousAccessEvaluationPolicy|null
    */
    public function getContinuousAccessEvaluationPolicy(): ?ContinuousAccessEvaluationPolicy {
        $val = $this->getBackingStore()->get('continuousAccessEvaluationPolicy');
        if (is_null($val) || $val instanceof ContinuousAccessEvaluationPolicy) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'continuousAccessEvaluationPolicy'");
    }

    /**
     * Gets the customAuthenticationExtensions property value. The customAuthenticationExtensions property
     * @return array<CustomAuthenticationExtension>|null
    */
    public function getCustomAuthenticationExtensions(): ?array {
        $val = $this->getBackingStore()->get('customAuthenticationExtensions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CustomAuthenticationExtension::class);
            /** @var array<CustomAuthenticationExtension>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customAuthenticationExtensions'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'apiConnectors' => fn(ParseNode $n) => $o->setApiConnectors($n->getCollectionOfObjectValues([IdentityApiConnector::class, 'createFromDiscriminatorValue'])),
            'authenticationEventListeners' => fn(ParseNode $n) => $o->setAuthenticationEventListeners($n->getCollectionOfObjectValues([AuthenticationEventListener::class, 'createFromDiscriminatorValue'])),
            'authenticationEventsFlows' => fn(ParseNode $n) => $o->setAuthenticationEventsFlows($n->getCollectionOfObjectValues([AuthenticationEventsFlow::class, 'createFromDiscriminatorValue'])),
            'b2cUserFlows' => fn(ParseNode $n) => $o->setB2cUserFlows($n->getCollectionOfObjectValues([B2cIdentityUserFlow::class, 'createFromDiscriminatorValue'])),
            'b2xUserFlows' => fn(ParseNode $n) => $o->setB2xUserFlows($n->getCollectionOfObjectValues([B2xIdentityUserFlow::class, 'createFromDiscriminatorValue'])),
            'conditionalAccess' => fn(ParseNode $n) => $o->setConditionalAccess($n->getObjectValue([ConditionalAccessRoot::class, 'createFromDiscriminatorValue'])),
            'continuousAccessEvaluationPolicy' => fn(ParseNode $n) => $o->setContinuousAccessEvaluationPolicy($n->getObjectValue([ContinuousAccessEvaluationPolicy::class, 'createFromDiscriminatorValue'])),
            'customAuthenticationExtensions' => fn(ParseNode $n) => $o->setCustomAuthenticationExtensions($n->getCollectionOfObjectValues([CustomAuthenticationExtension::class, 'createFromDiscriminatorValue'])),
            'identityProviders' => fn(ParseNode $n) => $o->setIdentityProviders($n->getCollectionOfObjectValues([IdentityProviderBase::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'riskPrevention' => fn(ParseNode $n) => $o->setRiskPrevention($n->getObjectValue([RiskPreventionContainer::class, 'createFromDiscriminatorValue'])),
            'userFlowAttributes' => fn(ParseNode $n) => $o->setUserFlowAttributes($n->getCollectionOfObjectValues([IdentityUserFlowAttribute::class, 'createFromDiscriminatorValue'])),
            'userFlows' => fn(ParseNode $n) => $o->setUserFlows($n->getCollectionOfObjectValues([IdentityUserFlow::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the identityProviders property value. Represents entry point for identity provider base.
     * @return array<IdentityProviderBase>|null
    */
    public function getIdentityProviders(): ?array {
        $val = $this->getBackingStore()->get('identityProviders');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, IdentityProviderBase::class);
            /** @var array<IdentityProviderBase>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identityProviders'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the riskPrevention property value. Represents the entry point for fraud and risk prevention configurations in Microsoft Entra External ID, including third-party provider settings.
     * @return RiskPreventionContainer|null
    */
    public function getRiskPrevention(): ?RiskPreventionContainer {
        $val = $this->getBackingStore()->get('riskPrevention');
        if (is_null($val) || $val instanceof RiskPreventionContainer) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'riskPrevention'");
    }

    /**
     * Gets the userFlowAttributes property value. Represents entry point for identity userflow attributes.
     * @return array<IdentityUserFlowAttribute>|null
    */
    public function getUserFlowAttributes(): ?array {
        $val = $this->getBackingStore()->get('userFlowAttributes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, IdentityUserFlowAttribute::class);
            /** @var array<IdentityUserFlowAttribute>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userFlowAttributes'");
    }

    /**
     * Gets the userFlows property value. The userFlows property
     * @return array<IdentityUserFlow>|null
    */
    public function getUserFlows(): ?array {
        $val = $this->getBackingStore()->get('userFlows');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, IdentityUserFlow::class);
            /** @var array<IdentityUserFlow>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userFlows'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('apiConnectors', $this->getApiConnectors());
        $writer->writeCollectionOfObjectValues('authenticationEventListeners', $this->getAuthenticationEventListeners());
        $writer->writeCollectionOfObjectValues('authenticationEventsFlows', $this->getAuthenticationEventsFlows());
        $writer->writeCollectionOfObjectValues('b2cUserFlows', $this->getB2cUserFlows());
        $writer->writeCollectionOfObjectValues('b2xUserFlows', $this->getB2xUserFlows());
        $writer->writeObjectValue('conditionalAccess', $this->getConditionalAccess());
        $writer->writeObjectValue('continuousAccessEvaluationPolicy', $this->getContinuousAccessEvaluationPolicy());
        $writer->writeCollectionOfObjectValues('customAuthenticationExtensions', $this->getCustomAuthenticationExtensions());
        $writer->writeCollectionOfObjectValues('identityProviders', $this->getIdentityProviders());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('riskPrevention', $this->getRiskPrevention());
        $writer->writeCollectionOfObjectValues('userFlowAttributes', $this->getUserFlowAttributes());
        $writer->writeCollectionOfObjectValues('userFlows', $this->getUserFlows());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the apiConnectors property value. Represents entry point for API connectors.
     * @param array<IdentityApiConnector>|null $value Value to set for the apiConnectors property.
    */
    public function setApiConnectors(?array $value): void {
        $this->getBackingStore()->set('apiConnectors', $value);
    }

    /**
     * Sets the authenticationEventListeners property value. The authenticationEventListeners property
     * @param array<AuthenticationEventListener>|null $value Value to set for the authenticationEventListeners property.
    */
    public function setAuthenticationEventListeners(?array $value): void {
        $this->getBackingStore()->set('authenticationEventListeners', $value);
    }

    /**
     * Sets the authenticationEventsFlows property value. Represents the entry point for self-service sign-up and sign-in user flows in both Microsoft Entra workforce and external tenants.
     * @param array<AuthenticationEventsFlow>|null $value Value to set for the authenticationEventsFlows property.
    */
    public function setAuthenticationEventsFlows(?array $value): void {
        $this->getBackingStore()->set('authenticationEventsFlows', $value);
    }

    /**
     * Sets the b2cUserFlows property value. Represents entry point for B2C identity userflows.
     * @param array<B2cIdentityUserFlow>|null $value Value to set for the b2cUserFlows property.
    */
    public function setB2cUserFlows(?array $value): void {
        $this->getBackingStore()->set('b2cUserFlows', $value);
    }

    /**
     * Sets the b2xUserFlows property value. Represents entry point for B2X and self-service sign-up identity userflows.
     * @param array<B2xIdentityUserFlow>|null $value Value to set for the b2xUserFlows property.
    */
    public function setB2xUserFlows(?array $value): void {
        $this->getBackingStore()->set('b2xUserFlows', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the conditionalAccess property value. the entry point for the Conditional Access (CA) object model.
     * @param ConditionalAccessRoot|null $value Value to set for the conditionalAccess property.
    */
    public function setConditionalAccess(?ConditionalAccessRoot $value): void {
        $this->getBackingStore()->set('conditionalAccess', $value);
    }

    /**
     * Sets the continuousAccessEvaluationPolicy property value. Represents entry point for continuous access evaluation policy.
     * @param ContinuousAccessEvaluationPolicy|null $value Value to set for the continuousAccessEvaluationPolicy property.
    */
    public function setContinuousAccessEvaluationPolicy(?ContinuousAccessEvaluationPolicy $value): void {
        $this->getBackingStore()->set('continuousAccessEvaluationPolicy', $value);
    }

    /**
     * Sets the customAuthenticationExtensions property value. The customAuthenticationExtensions property
     * @param array<CustomAuthenticationExtension>|null $value Value to set for the customAuthenticationExtensions property.
    */
    public function setCustomAuthenticationExtensions(?array $value): void {
        $this->getBackingStore()->set('customAuthenticationExtensions', $value);
    }

    /**
     * Sets the identityProviders property value. Represents entry point for identity provider base.
     * @param array<IdentityProviderBase>|null $value Value to set for the identityProviders property.
    */
    public function setIdentityProviders(?array $value): void {
        $this->getBackingStore()->set('identityProviders', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the riskPrevention property value. Represents the entry point for fraud and risk prevention configurations in Microsoft Entra External ID, including third-party provider settings.
     * @param RiskPreventionContainer|null $value Value to set for the riskPrevention property.
    */
    public function setRiskPrevention(?RiskPreventionContainer $value): void {
        $this->getBackingStore()->set('riskPrevention', $value);
    }

    /**
     * Sets the userFlowAttributes property value. Represents entry point for identity userflow attributes.
     * @param array<IdentityUserFlowAttribute>|null $value Value to set for the userFlowAttributes property.
    */
    public function setUserFlowAttributes(?array $value): void {
        $this->getBackingStore()->set('userFlowAttributes', $value);
    }

    /**
     * Sets the userFlows property value. The userFlows property
     * @param array<IdentityUserFlow>|null $value Value to set for the userFlows property.
    */
    public function setUserFlows(?array $value): void {
        $this->getBackingStore()->set('userFlows', $value);
    }

}

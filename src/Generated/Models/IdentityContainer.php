<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IdentityContainer implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<IdentityApiConnector>|null $apiConnectors Represents entry point for API connectors.
    */
    private ?array $apiConnectors = null;
    
    /**
     * @var array<B2cIdentityUserFlow>|null $b2cUserFlows Represents entry point for B2C identity userflows.
    */
    private ?array $b2cUserFlows = null;
    
    /**
     * @var array<B2xIdentityUserFlow>|null $b2xUserFlows Represents entry point for B2X and self-service sign-up identity userflows.
    */
    private ?array $b2xUserFlows = null;
    
    /**
     * @var ConditionalAccessRoot|null $conditionalAccess the entry point for the Conditional Access (CA) object model.
    */
    private ?ConditionalAccessRoot $conditionalAccess = null;
    
    /**
     * @var ContinuousAccessEvaluationPolicy|null $continuousAccessEvaluationPolicy Represents entry point for continuous access evaluation policy.
    */
    private ?ContinuousAccessEvaluationPolicy $continuousAccessEvaluationPolicy = null;
    
    /**
     * @var array<IdentityProviderBase>|null $identityProviders Represents entry point for identity provider base.
    */
    private ?array $identityProviders = null;
    
    /**
     * @var array<IdentityUserFlowAttribute>|null $userFlowAttributes Represents entry point for identity userflow attributes.
    */
    private ?array $userFlowAttributes = null;
    
    /**
     * @var array<IdentityUserFlow>|null $userFlows The userFlows property
    */
    private ?array $userFlows = null;
    
    /**
     * Instantiates a new IdentityContainer and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the apiConnectors property value. Represents entry point for API connectors.
     * @return array<IdentityApiConnector>|null
    */
    public function getApiConnectors(): ?array {
        return $this->apiConnectors;
    }

    /**
     * Gets the b2cUserFlows property value. Represents entry point for B2C identity userflows.
     * @return array<B2cIdentityUserFlow>|null
    */
    public function getB2cUserFlows(): ?array {
        return $this->b2cUserFlows;
    }

    /**
     * Gets the b2xUserFlows property value. Represents entry point for B2X and self-service sign-up identity userflows.
     * @return array<B2xIdentityUserFlow>|null
    */
    public function getB2xUserFlows(): ?array {
        return $this->b2xUserFlows;
    }

    /**
     * Gets the conditionalAccess property value. the entry point for the Conditional Access (CA) object model.
     * @return ConditionalAccessRoot|null
    */
    public function getConditionalAccess(): ?ConditionalAccessRoot {
        return $this->conditionalAccess;
    }

    /**
     * Gets the continuousAccessEvaluationPolicy property value. Represents entry point for continuous access evaluation policy.
     * @return ContinuousAccessEvaluationPolicy|null
    */
    public function getContinuousAccessEvaluationPolicy(): ?ContinuousAccessEvaluationPolicy {
        return $this->continuousAccessEvaluationPolicy;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'apiConnectors' => function (ParseNode $n) use ($o) { $o->setApiConnectors($n->getCollectionOfObjectValues(array(IdentityApiConnector::class, 'createFromDiscriminatorValue'))); },
            'b2cUserFlows' => function (ParseNode $n) use ($o) { $o->setB2cUserFlows($n->getCollectionOfObjectValues(array(B2cIdentityUserFlow::class, 'createFromDiscriminatorValue'))); },
            'b2xUserFlows' => function (ParseNode $n) use ($o) { $o->setB2xUserFlows($n->getCollectionOfObjectValues(array(B2xIdentityUserFlow::class, 'createFromDiscriminatorValue'))); },
            'conditionalAccess' => function (ParseNode $n) use ($o) { $o->setConditionalAccess($n->getObjectValue(array(ConditionalAccessRoot::class, 'createFromDiscriminatorValue'))); },
            'continuousAccessEvaluationPolicy' => function (ParseNode $n) use ($o) { $o->setContinuousAccessEvaluationPolicy($n->getObjectValue(array(ContinuousAccessEvaluationPolicy::class, 'createFromDiscriminatorValue'))); },
            'identityProviders' => function (ParseNode $n) use ($o) { $o->setIdentityProviders($n->getCollectionOfObjectValues(array(IdentityProviderBase::class, 'createFromDiscriminatorValue'))); },
            'userFlowAttributes' => function (ParseNode $n) use ($o) { $o->setUserFlowAttributes($n->getCollectionOfObjectValues(array(IdentityUserFlowAttribute::class, 'createFromDiscriminatorValue'))); },
            'userFlows' => function (ParseNode $n) use ($o) { $o->setUserFlows($n->getCollectionOfObjectValues(array(IdentityUserFlow::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the identityProviders property value. Represents entry point for identity provider base.
     * @return array<IdentityProviderBase>|null
    */
    public function getIdentityProviders(): ?array {
        return $this->identityProviders;
    }

    /**
     * Gets the userFlowAttributes property value. Represents entry point for identity userflow attributes.
     * @return array<IdentityUserFlowAttribute>|null
    */
    public function getUserFlowAttributes(): ?array {
        return $this->userFlowAttributes;
    }

    /**
     * Gets the userFlows property value. The userFlows property
     * @return array<IdentityUserFlow>|null
    */
    public function getUserFlows(): ?array {
        return $this->userFlows;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('apiConnectors', $this->apiConnectors);
        $writer->writeCollectionOfObjectValues('b2cUserFlows', $this->b2cUserFlows);
        $writer->writeCollectionOfObjectValues('b2xUserFlows', $this->b2xUserFlows);
        $writer->writeObjectValue('conditionalAccess', $this->conditionalAccess);
        $writer->writeObjectValue('continuousAccessEvaluationPolicy', $this->continuousAccessEvaluationPolicy);
        $writer->writeCollectionOfObjectValues('identityProviders', $this->identityProviders);
        $writer->writeCollectionOfObjectValues('userFlowAttributes', $this->userFlowAttributes);
        $writer->writeCollectionOfObjectValues('userFlows', $this->userFlows);
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
     * Sets the apiConnectors property value. Represents entry point for API connectors.
     *  @param array<IdentityApiConnector>|null $value Value to set for the apiConnectors property.
    */
    public function setApiConnectors(?array $value ): void {
        $this->apiConnectors = $value;
    }

    /**
     * Sets the b2cUserFlows property value. Represents entry point for B2C identity userflows.
     *  @param array<B2cIdentityUserFlow>|null $value Value to set for the b2cUserFlows property.
    */
    public function setB2cUserFlows(?array $value ): void {
        $this->b2cUserFlows = $value;
    }

    /**
     * Sets the b2xUserFlows property value. Represents entry point for B2X and self-service sign-up identity userflows.
     *  @param array<B2xIdentityUserFlow>|null $value Value to set for the b2xUserFlows property.
    */
    public function setB2xUserFlows(?array $value ): void {
        $this->b2xUserFlows = $value;
    }

    /**
     * Sets the conditionalAccess property value. the entry point for the Conditional Access (CA) object model.
     *  @param ConditionalAccessRoot|null $value Value to set for the conditionalAccess property.
    */
    public function setConditionalAccess(?ConditionalAccessRoot $value ): void {
        $this->conditionalAccess = $value;
    }

    /**
     * Sets the continuousAccessEvaluationPolicy property value. Represents entry point for continuous access evaluation policy.
     *  @param ContinuousAccessEvaluationPolicy|null $value Value to set for the continuousAccessEvaluationPolicy property.
    */
    public function setContinuousAccessEvaluationPolicy(?ContinuousAccessEvaluationPolicy $value ): void {
        $this->continuousAccessEvaluationPolicy = $value;
    }

    /**
     * Sets the identityProviders property value. Represents entry point for identity provider base.
     *  @param array<IdentityProviderBase>|null $value Value to set for the identityProviders property.
    */
    public function setIdentityProviders(?array $value ): void {
        $this->identityProviders = $value;
    }

    /**
     * Sets the userFlowAttributes property value. Represents entry point for identity userflow attributes.
     *  @param array<IdentityUserFlowAttribute>|null $value Value to set for the userFlowAttributes property.
    */
    public function setUserFlowAttributes(?array $value ): void {
        $this->userFlowAttributes = $value;
    }

    /**
     * Sets the userFlows property value. The userFlows property
     *  @param array<IdentityUserFlow>|null $value Value to set for the userFlows property.
    */
    public function setUserFlows(?array $value ): void {
        $this->userFlows = $value;
    }

}

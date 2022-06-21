<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Directory extends Entity implements Parsable 
{
    /**
     * @var array<AdministrativeUnit>|null $administrativeUnits Conceptual container for user and group directory objects.
    */
    private ?array $administrativeUnits = null;
    
    /**
     * @var array<AttributeSet>|null $attributeSets Group of related custom security attribute definitions.
    */
    private ?array $attributeSets = null;
    
    /**
     * @var array<CustomSecurityAttributeDefinition>|null $customSecurityAttributeDefinitions Schema of a custom security attributes (key-value pairs).
    */
    private ?array $customSecurityAttributeDefinitions = null;
    
    /**
     * @var array<DirectoryObject>|null $deletedItems Recently deleted items. Read-only. Nullable.
    */
    private ?array $deletedItems = null;
    
    /**
     * @var array<FeatureRolloutPolicy>|null $featureRolloutPolicies The featureRolloutPolicies property
    */
    private ?array $featureRolloutPolicies = null;
    
    /**
     * @var array<IdentityProviderBase>|null $federationConfigurations Configure domain federation with organizations whose identity provider (IdP) supports either the SAML or WS-Fed protocol.
    */
    private ?array $federationConfigurations = null;
    
    /**
     * @var array<RecommendationResource>|null $impactedResources The impactedResources property
    */
    private ?array $impactedResources = null;
    
    /**
     * @var array<InboundSharedUserProfile>|null $inboundSharedUserProfiles The inboundSharedUserProfiles property
    */
    private ?array $inboundSharedUserProfiles = null;
    
    /**
     * @var array<OutboundSharedUserProfile>|null $outboundSharedUserProfiles The outboundSharedUserProfiles property
    */
    private ?array $outboundSharedUserProfiles = null;
    
    /**
     * @var array<Recommendation>|null $recommendations The recommendations property
    */
    private ?array $recommendations = null;
    
    /**
     * @var array<SharedEmailDomain>|null $sharedEmailDomains The sharedEmailDomains property
    */
    private ?array $sharedEmailDomains = null;
    
    /**
     * Instantiates a new directory and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Directory
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Directory {
        return new Directory();
    }

    /**
     * Gets the administrativeUnits property value. Conceptual container for user and group directory objects.
     * @return array<AdministrativeUnit>|null
    */
    public function getAdministrativeUnits(): ?array {
        return $this->administrativeUnits;
    }

    /**
     * Gets the attributeSets property value. Group of related custom security attribute definitions.
     * @return array<AttributeSet>|null
    */
    public function getAttributeSets(): ?array {
        return $this->attributeSets;
    }

    /**
     * Gets the customSecurityAttributeDefinitions property value. Schema of a custom security attributes (key-value pairs).
     * @return array<CustomSecurityAttributeDefinition>|null
    */
    public function getCustomSecurityAttributeDefinitions(): ?array {
        return $this->customSecurityAttributeDefinitions;
    }

    /**
     * Gets the deletedItems property value. Recently deleted items. Read-only. Nullable.
     * @return array<DirectoryObject>|null
    */
    public function getDeletedItems(): ?array {
        return $this->deletedItems;
    }

    /**
     * Gets the featureRolloutPolicies property value. The featureRolloutPolicies property
     * @return array<FeatureRolloutPolicy>|null
    */
    public function getFeatureRolloutPolicies(): ?array {
        return $this->featureRolloutPolicies;
    }

    /**
     * Gets the federationConfigurations property value. Configure domain federation with organizations whose identity provider (IdP) supports either the SAML or WS-Fed protocol.
     * @return array<IdentityProviderBase>|null
    */
    public function getFederationConfigurations(): ?array {
        return $this->federationConfigurations;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'administrativeUnits' => function (ParseNode $n) use ($o) { $o->setAdministrativeUnits($n->getCollectionOfObjectValues(array(AdministrativeUnit::class, 'createFromDiscriminatorValue'))); },
            'attributeSets' => function (ParseNode $n) use ($o) { $o->setAttributeSets($n->getCollectionOfObjectValues(array(AttributeSet::class, 'createFromDiscriminatorValue'))); },
            'customSecurityAttributeDefinitions' => function (ParseNode $n) use ($o) { $o->setCustomSecurityAttributeDefinitions($n->getCollectionOfObjectValues(array(CustomSecurityAttributeDefinition::class, 'createFromDiscriminatorValue'))); },
            'deletedItems' => function (ParseNode $n) use ($o) { $o->setDeletedItems($n->getCollectionOfObjectValues(array(DirectoryObject::class, 'createFromDiscriminatorValue'))); },
            'featureRolloutPolicies' => function (ParseNode $n) use ($o) { $o->setFeatureRolloutPolicies($n->getCollectionOfObjectValues(array(FeatureRolloutPolicy::class, 'createFromDiscriminatorValue'))); },
            'federationConfigurations' => function (ParseNode $n) use ($o) { $o->setFederationConfigurations($n->getCollectionOfObjectValues(array(IdentityProviderBase::class, 'createFromDiscriminatorValue'))); },
            'impactedResources' => function (ParseNode $n) use ($o) { $o->setImpactedResources($n->getCollectionOfObjectValues(array(RecommendationResource::class, 'createFromDiscriminatorValue'))); },
            'inboundSharedUserProfiles' => function (ParseNode $n) use ($o) { $o->setInboundSharedUserProfiles($n->getCollectionOfObjectValues(array(InboundSharedUserProfile::class, 'createFromDiscriminatorValue'))); },
            'outboundSharedUserProfiles' => function (ParseNode $n) use ($o) { $o->setOutboundSharedUserProfiles($n->getCollectionOfObjectValues(array(OutboundSharedUserProfile::class, 'createFromDiscriminatorValue'))); },
            'recommendations' => function (ParseNode $n) use ($o) { $o->setRecommendations($n->getCollectionOfObjectValues(array(Recommendation::class, 'createFromDiscriminatorValue'))); },
            'sharedEmailDomains' => function (ParseNode $n) use ($o) { $o->setSharedEmailDomains($n->getCollectionOfObjectValues(array(SharedEmailDomain::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the impactedResources property value. The impactedResources property
     * @return array<RecommendationResource>|null
    */
    public function getImpactedResources(): ?array {
        return $this->impactedResources;
    }

    /**
     * Gets the inboundSharedUserProfiles property value. The inboundSharedUserProfiles property
     * @return array<InboundSharedUserProfile>|null
    */
    public function getInboundSharedUserProfiles(): ?array {
        return $this->inboundSharedUserProfiles;
    }

    /**
     * Gets the outboundSharedUserProfiles property value. The outboundSharedUserProfiles property
     * @return array<OutboundSharedUserProfile>|null
    */
    public function getOutboundSharedUserProfiles(): ?array {
        return $this->outboundSharedUserProfiles;
    }

    /**
     * Gets the recommendations property value. The recommendations property
     * @return array<Recommendation>|null
    */
    public function getRecommendations(): ?array {
        return $this->recommendations;
    }

    /**
     * Gets the sharedEmailDomains property value. The sharedEmailDomains property
     * @return array<SharedEmailDomain>|null
    */
    public function getSharedEmailDomains(): ?array {
        return $this->sharedEmailDomains;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('administrativeUnits', $this->administrativeUnits);
        $writer->writeCollectionOfObjectValues('attributeSets', $this->attributeSets);
        $writer->writeCollectionOfObjectValues('customSecurityAttributeDefinitions', $this->customSecurityAttributeDefinitions);
        $writer->writeCollectionOfObjectValues('deletedItems', $this->deletedItems);
        $writer->writeCollectionOfObjectValues('featureRolloutPolicies', $this->featureRolloutPolicies);
        $writer->writeCollectionOfObjectValues('federationConfigurations', $this->federationConfigurations);
        $writer->writeCollectionOfObjectValues('impactedResources', $this->impactedResources);
        $writer->writeCollectionOfObjectValues('inboundSharedUserProfiles', $this->inboundSharedUserProfiles);
        $writer->writeCollectionOfObjectValues('outboundSharedUserProfiles', $this->outboundSharedUserProfiles);
        $writer->writeCollectionOfObjectValues('recommendations', $this->recommendations);
        $writer->writeCollectionOfObjectValues('sharedEmailDomains', $this->sharedEmailDomains);
    }

    /**
     * Sets the administrativeUnits property value. Conceptual container for user and group directory objects.
     *  @param array<AdministrativeUnit>|null $value Value to set for the administrativeUnits property.
    */
    public function setAdministrativeUnits(?array $value ): void {
        $this->administrativeUnits = $value;
    }

    /**
     * Sets the attributeSets property value. Group of related custom security attribute definitions.
     *  @param array<AttributeSet>|null $value Value to set for the attributeSets property.
    */
    public function setAttributeSets(?array $value ): void {
        $this->attributeSets = $value;
    }

    /**
     * Sets the customSecurityAttributeDefinitions property value. Schema of a custom security attributes (key-value pairs).
     *  @param array<CustomSecurityAttributeDefinition>|null $value Value to set for the customSecurityAttributeDefinitions property.
    */
    public function setCustomSecurityAttributeDefinitions(?array $value ): void {
        $this->customSecurityAttributeDefinitions = $value;
    }

    /**
     * Sets the deletedItems property value. Recently deleted items. Read-only. Nullable.
     *  @param array<DirectoryObject>|null $value Value to set for the deletedItems property.
    */
    public function setDeletedItems(?array $value ): void {
        $this->deletedItems = $value;
    }

    /**
     * Sets the featureRolloutPolicies property value. The featureRolloutPolicies property
     *  @param array<FeatureRolloutPolicy>|null $value Value to set for the featureRolloutPolicies property.
    */
    public function setFeatureRolloutPolicies(?array $value ): void {
        $this->featureRolloutPolicies = $value;
    }

    /**
     * Sets the federationConfigurations property value. Configure domain federation with organizations whose identity provider (IdP) supports either the SAML or WS-Fed protocol.
     *  @param array<IdentityProviderBase>|null $value Value to set for the federationConfigurations property.
    */
    public function setFederationConfigurations(?array $value ): void {
        $this->federationConfigurations = $value;
    }

    /**
     * Sets the impactedResources property value. The impactedResources property
     *  @param array<RecommendationResource>|null $value Value to set for the impactedResources property.
    */
    public function setImpactedResources(?array $value ): void {
        $this->impactedResources = $value;
    }

    /**
     * Sets the inboundSharedUserProfiles property value. The inboundSharedUserProfiles property
     *  @param array<InboundSharedUserProfile>|null $value Value to set for the inboundSharedUserProfiles property.
    */
    public function setInboundSharedUserProfiles(?array $value ): void {
        $this->inboundSharedUserProfiles = $value;
    }

    /**
     * Sets the outboundSharedUserProfiles property value. The outboundSharedUserProfiles property
     *  @param array<OutboundSharedUserProfile>|null $value Value to set for the outboundSharedUserProfiles property.
    */
    public function setOutboundSharedUserProfiles(?array $value ): void {
        $this->outboundSharedUserProfiles = $value;
    }

    /**
     * Sets the recommendations property value. The recommendations property
     *  @param array<Recommendation>|null $value Value to set for the recommendations property.
    */
    public function setRecommendations(?array $value ): void {
        $this->recommendations = $value;
    }

    /**
     * Sets the sharedEmailDomains property value. The sharedEmailDomains property
     *  @param array<SharedEmailDomain>|null $value Value to set for the sharedEmailDomains property.
    */
    public function setSharedEmailDomains(?array $value ): void {
        $this->sharedEmailDomains = $value;
    }

}

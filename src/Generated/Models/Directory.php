<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Directory extends Entity implements Parsable 
{
    /**
     * Instantiates a new Directory and sets the default values.
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
        return $this->getBackingStore()->get('administrativeUnits');
    }

    /**
     * Gets the attributeSets property value. Group of related custom security attribute definitions.
     * @return array<AttributeSet>|null
    */
    public function getAttributeSets(): ?array {
        return $this->getBackingStore()->get('attributeSets');
    }

    /**
     * Gets the customSecurityAttributeDefinitions property value. Schema of a custom security attributes (key-value pairs).
     * @return array<CustomSecurityAttributeDefinition>|null
    */
    public function getCustomSecurityAttributeDefinitions(): ?array {
        return $this->getBackingStore()->get('customSecurityAttributeDefinitions');
    }

    /**
     * Gets the deletedItems property value. The deletedItems property
     * @return array<DirectoryObject>|null
    */
    public function getDeletedItems(): ?array {
        return $this->getBackingStore()->get('deletedItems');
    }

    /**
     * Gets the featureRolloutPolicies property value. The featureRolloutPolicies property
     * @return array<FeatureRolloutPolicy>|null
    */
    public function getFeatureRolloutPolicies(): ?array {
        return $this->getBackingStore()->get('featureRolloutPolicies');
    }

    /**
     * Gets the federationConfigurations property value. Configure domain federation with organizations whose identity provider (IdP) supports either the SAML or WS-Fed protocol.
     * @return array<IdentityProviderBase>|null
    */
    public function getFederationConfigurations(): ?array {
        return $this->getBackingStore()->get('federationConfigurations');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'administrativeUnits' => fn(ParseNode $n) => $o->setAdministrativeUnits($n->getCollectionOfObjectValues([AdministrativeUnit::class, 'createFromDiscriminatorValue'])),
            'attributeSets' => fn(ParseNode $n) => $o->setAttributeSets($n->getCollectionOfObjectValues([AttributeSet::class, 'createFromDiscriminatorValue'])),
            'customSecurityAttributeDefinitions' => fn(ParseNode $n) => $o->setCustomSecurityAttributeDefinitions($n->getCollectionOfObjectValues([CustomSecurityAttributeDefinition::class, 'createFromDiscriminatorValue'])),
            'deletedItems' => fn(ParseNode $n) => $o->setDeletedItems($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'featureRolloutPolicies' => fn(ParseNode $n) => $o->setFeatureRolloutPolicies($n->getCollectionOfObjectValues([FeatureRolloutPolicy::class, 'createFromDiscriminatorValue'])),
            'federationConfigurations' => fn(ParseNode $n) => $o->setFederationConfigurations($n->getCollectionOfObjectValues([IdentityProviderBase::class, 'createFromDiscriminatorValue'])),
            'impactedResources' => fn(ParseNode $n) => $o->setImpactedResources($n->getCollectionOfObjectValues([ImpactedResource::class, 'createFromDiscriminatorValue'])),
            'inboundSharedUserProfiles' => fn(ParseNode $n) => $o->setInboundSharedUserProfiles($n->getCollectionOfObjectValues([InboundSharedUserProfile::class, 'createFromDiscriminatorValue'])),
            'onPremisesSynchronization' => fn(ParseNode $n) => $o->setOnPremisesSynchronization($n->getCollectionOfObjectValues([OnPremisesDirectorySynchronization::class, 'createFromDiscriminatorValue'])),
            'outboundSharedUserProfiles' => fn(ParseNode $n) => $o->setOutboundSharedUserProfiles($n->getCollectionOfObjectValues([OutboundSharedUserProfile::class, 'createFromDiscriminatorValue'])),
            'recommendations' => fn(ParseNode $n) => $o->setRecommendations($n->getCollectionOfObjectValues([Recommendation::class, 'createFromDiscriminatorValue'])),
            'sharedEmailDomains' => fn(ParseNode $n) => $o->setSharedEmailDomains($n->getCollectionOfObjectValues([SharedEmailDomain::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the impactedResources property value. The impactedResources property
     * @return array<ImpactedResource>|null
    */
    public function getImpactedResources(): ?array {
        return $this->getBackingStore()->get('impactedResources');
    }

    /**
     * Gets the inboundSharedUserProfiles property value. The inboundSharedUserProfiles property
     * @return array<InboundSharedUserProfile>|null
    */
    public function getInboundSharedUserProfiles(): ?array {
        return $this->getBackingStore()->get('inboundSharedUserProfiles');
    }

    /**
     * Gets the onPremisesSynchronization property value. A container for on-premises directory synchronization functionalities that are available for the organization.
     * @return array<OnPremisesDirectorySynchronization>|null
    */
    public function getOnPremisesSynchronization(): ?array {
        return $this->getBackingStore()->get('onPremisesSynchronization');
    }

    /**
     * Gets the outboundSharedUserProfiles property value. The outboundSharedUserProfiles property
     * @return array<OutboundSharedUserProfile>|null
    */
    public function getOutboundSharedUserProfiles(): ?array {
        return $this->getBackingStore()->get('outboundSharedUserProfiles');
    }

    /**
     * Gets the recommendations property value. List of recommended improvements to improve tenant posture.
     * @return array<Recommendation>|null
    */
    public function getRecommendations(): ?array {
        return $this->getBackingStore()->get('recommendations');
    }

    /**
     * Gets the sharedEmailDomains property value. The sharedEmailDomains property
     * @return array<SharedEmailDomain>|null
    */
    public function getSharedEmailDomains(): ?array {
        return $this->getBackingStore()->get('sharedEmailDomains');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('administrativeUnits', $this->getAdministrativeUnits());
        $writer->writeCollectionOfObjectValues('attributeSets', $this->getAttributeSets());
        $writer->writeCollectionOfObjectValues('customSecurityAttributeDefinitions', $this->getCustomSecurityAttributeDefinitions());
        $writer->writeCollectionOfObjectValues('deletedItems', $this->getDeletedItems());
        $writer->writeCollectionOfObjectValues('featureRolloutPolicies', $this->getFeatureRolloutPolicies());
        $writer->writeCollectionOfObjectValues('federationConfigurations', $this->getFederationConfigurations());
        $writer->writeCollectionOfObjectValues('impactedResources', $this->getImpactedResources());
        $writer->writeCollectionOfObjectValues('inboundSharedUserProfiles', $this->getInboundSharedUserProfiles());
        $writer->writeCollectionOfObjectValues('onPremisesSynchronization', $this->getOnPremisesSynchronization());
        $writer->writeCollectionOfObjectValues('outboundSharedUserProfiles', $this->getOutboundSharedUserProfiles());
        $writer->writeCollectionOfObjectValues('recommendations', $this->getRecommendations());
        $writer->writeCollectionOfObjectValues('sharedEmailDomains', $this->getSharedEmailDomains());
    }

    /**
     * Sets the administrativeUnits property value. Conceptual container for user and group directory objects.
     * @param array<AdministrativeUnit>|null $value Value to set for the administrativeUnits property.
    */
    public function setAdministrativeUnits(?array $value): void {
        $this->getBackingStore()->set('administrativeUnits', $value);
    }

    /**
     * Sets the attributeSets property value. Group of related custom security attribute definitions.
     * @param array<AttributeSet>|null $value Value to set for the attributeSets property.
    */
    public function setAttributeSets(?array $value): void {
        $this->getBackingStore()->set('attributeSets', $value);
    }

    /**
     * Sets the customSecurityAttributeDefinitions property value. Schema of a custom security attributes (key-value pairs).
     * @param array<CustomSecurityAttributeDefinition>|null $value Value to set for the customSecurityAttributeDefinitions property.
    */
    public function setCustomSecurityAttributeDefinitions(?array $value): void {
        $this->getBackingStore()->set('customSecurityAttributeDefinitions', $value);
    }

    /**
     * Sets the deletedItems property value. The deletedItems property
     * @param array<DirectoryObject>|null $value Value to set for the deletedItems property.
    */
    public function setDeletedItems(?array $value): void {
        $this->getBackingStore()->set('deletedItems', $value);
    }

    /**
     * Sets the featureRolloutPolicies property value. The featureRolloutPolicies property
     * @param array<FeatureRolloutPolicy>|null $value Value to set for the featureRolloutPolicies property.
    */
    public function setFeatureRolloutPolicies(?array $value): void {
        $this->getBackingStore()->set('featureRolloutPolicies', $value);
    }

    /**
     * Sets the federationConfigurations property value. Configure domain federation with organizations whose identity provider (IdP) supports either the SAML or WS-Fed protocol.
     * @param array<IdentityProviderBase>|null $value Value to set for the federationConfigurations property.
    */
    public function setFederationConfigurations(?array $value): void {
        $this->getBackingStore()->set('federationConfigurations', $value);
    }

    /**
     * Sets the impactedResources property value. The impactedResources property
     * @param array<ImpactedResource>|null $value Value to set for the impactedResources property.
    */
    public function setImpactedResources(?array $value): void {
        $this->getBackingStore()->set('impactedResources', $value);
    }

    /**
     * Sets the inboundSharedUserProfiles property value. The inboundSharedUserProfiles property
     * @param array<InboundSharedUserProfile>|null $value Value to set for the inboundSharedUserProfiles property.
    */
    public function setInboundSharedUserProfiles(?array $value): void {
        $this->getBackingStore()->set('inboundSharedUserProfiles', $value);
    }

    /**
     * Sets the onPremisesSynchronization property value. A container for on-premises directory synchronization functionalities that are available for the organization.
     * @param array<OnPremisesDirectorySynchronization>|null $value Value to set for the onPremisesSynchronization property.
    */
    public function setOnPremisesSynchronization(?array $value): void {
        $this->getBackingStore()->set('onPremisesSynchronization', $value);
    }

    /**
     * Sets the outboundSharedUserProfiles property value. The outboundSharedUserProfiles property
     * @param array<OutboundSharedUserProfile>|null $value Value to set for the outboundSharedUserProfiles property.
    */
    public function setOutboundSharedUserProfiles(?array $value): void {
        $this->getBackingStore()->set('outboundSharedUserProfiles', $value);
    }

    /**
     * Sets the recommendations property value. List of recommended improvements to improve tenant posture.
     * @param array<Recommendation>|null $value Value to set for the recommendations property.
    */
    public function setRecommendations(?array $value): void {
        $this->getBackingStore()->set('recommendations', $value);
    }

    /**
     * Sets the sharedEmailDomains property value. The sharedEmailDomains property
     * @param array<SharedEmailDomain>|null $value Value to set for the sharedEmailDomains property.
    */
    public function setSharedEmailDomains(?array $value): void {
        $this->getBackingStore()->set('sharedEmailDomains', $value);
    }

}

<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OnPremisesPublishingProfile extends Entity implements Parsable 
{
    /**
     * Instantiates a new onPremisesPublishingProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.onPremisesPublishingProfile');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnPremisesPublishingProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnPremisesPublishingProfile {
        return new OnPremisesPublishingProfile();
    }

    /**
     * Gets the agentGroups property value. List of existing onPremisesAgentGroup objects. Read-only. Nullable.
     * @return array<OnPremisesAgentGroup>|null
    */
    public function getAgentGroups(): ?array {
        return $this->getBackingStore()->get('agentGroups');
    }

    /**
     * Gets the agents property value. List of existing onPremisesAgent objects. Read-only. Nullable.
     * @return array<OnPremisesAgent>|null
    */
    public function getAgents(): ?array {
        return $this->getBackingStore()->get('agents');
    }

    /**
     * Gets the connectorGroups property value. List of existing connectorGroup objects for applications published through Application Proxy. Read-only. Nullable.
     * @return array<ConnectorGroup>|null
    */
    public function getConnectorGroups(): ?array {
        return $this->getBackingStore()->get('connectorGroups');
    }

    /**
     * Gets the connectors property value. List of existing connector objects for applications published through Application Proxy. Read-only. Nullable.
     * @return array<Connector>|null
    */
    public function getConnectors(): ?array {
        return $this->getBackingStore()->get('connectors');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'agentGroups' => fn(ParseNode $n) => $o->setAgentGroups($n->getCollectionOfObjectValues([OnPremisesAgentGroup::class, 'createFromDiscriminatorValue'])),
            'agents' => fn(ParseNode $n) => $o->setAgents($n->getCollectionOfObjectValues([OnPremisesAgent::class, 'createFromDiscriminatorValue'])),
            'connectorGroups' => fn(ParseNode $n) => $o->setConnectorGroups($n->getCollectionOfObjectValues([ConnectorGroup::class, 'createFromDiscriminatorValue'])),
            'connectors' => fn(ParseNode $n) => $o->setConnectors($n->getCollectionOfObjectValues([Connector::class, 'createFromDiscriminatorValue'])),
            'hybridAgentUpdaterConfiguration' => fn(ParseNode $n) => $o->setHybridAgentUpdaterConfiguration($n->getObjectValue([HybridAgentUpdaterConfiguration::class, 'createFromDiscriminatorValue'])),
            'isEnabled' => fn(ParseNode $n) => $o->setIsEnabled($n->getBooleanValue()),
            'publishedResources' => fn(ParseNode $n) => $o->setPublishedResources($n->getCollectionOfObjectValues([PublishedResource::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the hybridAgentUpdaterConfiguration property value. Represents a hybridAgentUpdaterConfiguration object.
     * @return HybridAgentUpdaterConfiguration|null
    */
    public function getHybridAgentUpdaterConfiguration(): ?HybridAgentUpdaterConfiguration {
        return $this->getBackingStore()->get('hybridAgentUpdaterConfiguration');
    }

    /**
     * Gets the isEnabled property value. Represents if Azure AD Application Proxy is enabled for the tenant.
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        return $this->getBackingStore()->get('isEnabled');
    }

    /**
     * Gets the publishedResources property value. List of existing publishedResource objects. Read-only. Nullable.
     * @return array<PublishedResource>|null
    */
    public function getPublishedResources(): ?array {
        return $this->getBackingStore()->get('publishedResources');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('agentGroups', $this->getAgentGroups());
        $writer->writeCollectionOfObjectValues('agents', $this->getAgents());
        $writer->writeCollectionOfObjectValues('connectorGroups', $this->getConnectorGroups());
        $writer->writeCollectionOfObjectValues('connectors', $this->getConnectors());
        $writer->writeObjectValue('hybridAgentUpdaterConfiguration', $this->getHybridAgentUpdaterConfiguration());
        $writer->writeBooleanValue('isEnabled', $this->getIsEnabled());
        $writer->writeCollectionOfObjectValues('publishedResources', $this->getPublishedResources());
    }

    /**
     * Sets the agentGroups property value. List of existing onPremisesAgentGroup objects. Read-only. Nullable.
     *  @param array<OnPremisesAgentGroup>|null $value Value to set for the agentGroups property.
    */
    public function setAgentGroups(?array $value): void {
        $this->getBackingStore()->set('agentGroups', $value);
    }

    /**
     * Sets the agents property value. List of existing onPremisesAgent objects. Read-only. Nullable.
     *  @param array<OnPremisesAgent>|null $value Value to set for the agents property.
    */
    public function setAgents(?array $value): void {
        $this->getBackingStore()->set('agents', $value);
    }

    /**
     * Sets the connectorGroups property value. List of existing connectorGroup objects for applications published through Application Proxy. Read-only. Nullable.
     *  @param array<ConnectorGroup>|null $value Value to set for the connectorGroups property.
    */
    public function setConnectorGroups(?array $value): void {
        $this->getBackingStore()->set('connectorGroups', $value);
    }

    /**
     * Sets the connectors property value. List of existing connector objects for applications published through Application Proxy. Read-only. Nullable.
     *  @param array<Connector>|null $value Value to set for the connectors property.
    */
    public function setConnectors(?array $value): void {
        $this->getBackingStore()->set('connectors', $value);
    }

    /**
     * Sets the hybridAgentUpdaterConfiguration property value. Represents a hybridAgentUpdaterConfiguration object.
     *  @param HybridAgentUpdaterConfiguration|null $value Value to set for the hybridAgentUpdaterConfiguration property.
    */
    public function setHybridAgentUpdaterConfiguration(?HybridAgentUpdaterConfiguration $value): void {
        $this->getBackingStore()->set('hybridAgentUpdaterConfiguration', $value);
    }

    /**
     * Sets the isEnabled property value. Represents if Azure AD Application Proxy is enabled for the tenant.
     *  @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value): void {
        $this->getBackingStore()->set('isEnabled', $value);
    }

    /**
     * Sets the publishedResources property value. List of existing publishedResource objects. Read-only. Nullable.
     *  @param array<PublishedResource>|null $value Value to set for the publishedResources property.
    */
    public function setPublishedResources(?array $value): void {
        $this->getBackingStore()->set('publishedResources', $value);
    }

}

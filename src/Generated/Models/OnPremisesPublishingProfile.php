<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OnPremisesPublishingProfile extends Entity implements Parsable 
{
    /**
     * @var array<OnPremisesAgentGroup>|null $agentGroups List of existing onPremisesAgentGroup objects. Read-only. Nullable.
    */
    private ?array $agentGroups = null;
    
    /**
     * @var array<OnPremisesAgent>|null $agents List of existing onPremisesAgent objects. Read-only. Nullable.
    */
    private ?array $agents = null;
    
    /**
     * @var array<ConnectorGroup>|null $connectorGroups List of existing connectorGroup objects for applications published through Application Proxy. Read-only. Nullable.
    */
    private ?array $connectorGroups = null;
    
    /**
     * @var array<Connector>|null $connectors List of existing connector objects for applications published through Application Proxy. Read-only. Nullable.
    */
    private ?array $connectors = null;
    
    /**
     * @var HybridAgentUpdaterConfiguration|null $hybridAgentUpdaterConfiguration Represents a hybridAgentUpdaterConfiguration object.
    */
    private ?HybridAgentUpdaterConfiguration $hybridAgentUpdaterConfiguration = null;
    
    /**
     * @var bool|null $isEnabled Represents if Azure AD Application Proxy is enabled for the tenant.
    */
    private ?bool $isEnabled = null;
    
    /**
     * @var array<PublishedResource>|null $publishedResources List of existing publishedResource objects. Read-only. Nullable.
    */
    private ?array $publishedResources = null;
    
    /**
     * Instantiates a new OnPremisesPublishingProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->agentGroups;
    }

    /**
     * Gets the agents property value. List of existing onPremisesAgent objects. Read-only. Nullable.
     * @return array<OnPremisesAgent>|null
    */
    public function getAgents(): ?array {
        return $this->agents;
    }

    /**
     * Gets the connectorGroups property value. List of existing connectorGroup objects for applications published through Application Proxy. Read-only. Nullable.
     * @return array<ConnectorGroup>|null
    */
    public function getConnectorGroups(): ?array {
        return $this->connectorGroups;
    }

    /**
     * Gets the connectors property value. List of existing connector objects for applications published through Application Proxy. Read-only. Nullable.
     * @return array<Connector>|null
    */
    public function getConnectors(): ?array {
        return $this->connectors;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'agentGroups' => function (ParseNode $n) use ($o) { $o->setAgentGroups($n->getCollectionOfObjectValues(array(OnPremisesAgentGroup::class, 'createFromDiscriminatorValue'))); },
            'agents' => function (ParseNode $n) use ($o) { $o->setAgents($n->getCollectionOfObjectValues(array(OnPremisesAgent::class, 'createFromDiscriminatorValue'))); },
            'connectorGroups' => function (ParseNode $n) use ($o) { $o->setConnectorGroups($n->getCollectionOfObjectValues(array(ConnectorGroup::class, 'createFromDiscriminatorValue'))); },
            'connectors' => function (ParseNode $n) use ($o) { $o->setConnectors($n->getCollectionOfObjectValues(array(Connector::class, 'createFromDiscriminatorValue'))); },
            'hybridAgentUpdaterConfiguration' => function (ParseNode $n) use ($o) { $o->setHybridAgentUpdaterConfiguration($n->getObjectValue(array(HybridAgentUpdaterConfiguration::class, 'createFromDiscriminatorValue'))); },
            'isEnabled' => function (ParseNode $n) use ($o) { $o->setIsEnabled($n->getBooleanValue()); },
            'publishedResources' => function (ParseNode $n) use ($o) { $o->setPublishedResources($n->getCollectionOfObjectValues(array(PublishedResource::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the hybridAgentUpdaterConfiguration property value. Represents a hybridAgentUpdaterConfiguration object.
     * @return HybridAgentUpdaterConfiguration|null
    */
    public function getHybridAgentUpdaterConfiguration(): ?HybridAgentUpdaterConfiguration {
        return $this->hybridAgentUpdaterConfiguration;
    }

    /**
     * Gets the isEnabled property value. Represents if Azure AD Application Proxy is enabled for the tenant.
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        return $this->isEnabled;
    }

    /**
     * Gets the publishedResources property value. List of existing publishedResource objects. Read-only. Nullable.
     * @return array<PublishedResource>|null
    */
    public function getPublishedResources(): ?array {
        return $this->publishedResources;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('agentGroups', $this->agentGroups);
        $writer->writeCollectionOfObjectValues('agents', $this->agents);
        $writer->writeCollectionOfObjectValues('connectorGroups', $this->connectorGroups);
        $writer->writeCollectionOfObjectValues('connectors', $this->connectors);
        $writer->writeObjectValue('hybridAgentUpdaterConfiguration', $this->hybridAgentUpdaterConfiguration);
        $writer->writeBooleanValue('isEnabled', $this->isEnabled);
        $writer->writeCollectionOfObjectValues('publishedResources', $this->publishedResources);
    }

    /**
     * Sets the agentGroups property value. List of existing onPremisesAgentGroup objects. Read-only. Nullable.
     *  @param array<OnPremisesAgentGroup>|null $value Value to set for the agentGroups property.
    */
    public function setAgentGroups(?array $value ): void {
        $this->agentGroups = $value;
    }

    /**
     * Sets the agents property value. List of existing onPremisesAgent objects. Read-only. Nullable.
     *  @param array<OnPremisesAgent>|null $value Value to set for the agents property.
    */
    public function setAgents(?array $value ): void {
        $this->agents = $value;
    }

    /**
     * Sets the connectorGroups property value. List of existing connectorGroup objects for applications published through Application Proxy. Read-only. Nullable.
     *  @param array<ConnectorGroup>|null $value Value to set for the connectorGroups property.
    */
    public function setConnectorGroups(?array $value ): void {
        $this->connectorGroups = $value;
    }

    /**
     * Sets the connectors property value. List of existing connector objects for applications published through Application Proxy. Read-only. Nullable.
     *  @param array<Connector>|null $value Value to set for the connectors property.
    */
    public function setConnectors(?array $value ): void {
        $this->connectors = $value;
    }

    /**
     * Sets the hybridAgentUpdaterConfiguration property value. Represents a hybridAgentUpdaterConfiguration object.
     *  @param HybridAgentUpdaterConfiguration|null $value Value to set for the hybridAgentUpdaterConfiguration property.
    */
    public function setHybridAgentUpdaterConfiguration(?HybridAgentUpdaterConfiguration $value ): void {
        $this->hybridAgentUpdaterConfiguration = $value;
    }

    /**
     * Sets the isEnabled property value. Represents if Azure AD Application Proxy is enabled for the tenant.
     *  @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value ): void {
        $this->isEnabled = $value;
    }

    /**
     * Sets the publishedResources property value. List of existing publishedResource objects. Read-only. Nullable.
     *  @param array<PublishedResource>|null $value Value to set for the publishedResources property.
    */
    public function setPublishedResources(?array $value ): void {
        $this->publishedResources = $value;
    }

}

<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class OnPremisesPublishingProfile extends Entity implements Parsable 
{
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
        $val = $this->getBackingStore()->get('agentGroups');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, OnPremisesAgentGroup::class);
            /** @var array<OnPremisesAgentGroup>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agentGroups'");
    }

    /**
     * Gets the agents property value. List of existing onPremisesAgent objects. Read-only. Nullable.
     * @return array<OnPremisesAgent>|null
    */
    public function getAgents(): ?array {
        $val = $this->getBackingStore()->get('agents');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, OnPremisesAgent::class);
            /** @var array<OnPremisesAgent>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agents'");
    }

    /**
     * Gets the applicationSegments property value. Represents the segment configurations that are allowed for an on-premises non-web application published through Microsoft Entra application proxy.
     * @return array<IpApplicationSegment>|null
    */
    public function getApplicationSegments(): ?array {
        $val = $this->getBackingStore()->get('applicationSegments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, IpApplicationSegment::class);
            /** @var array<IpApplicationSegment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationSegments'");
    }

    /**
     * Gets the connectorGroups property value. List of existing connectorGroup objects for applications published through Application Proxy. Read-only. Nullable.
     * @return array<ConnectorGroup>|null
    */
    public function getConnectorGroups(): ?array {
        $val = $this->getBackingStore()->get('connectorGroups');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ConnectorGroup::class);
            /** @var array<ConnectorGroup>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'connectorGroups'");
    }

    /**
     * Gets the connectors property value. List of existing connector objects for applications published through Application Proxy. Read-only. Nullable.
     * @return array<Connector>|null
    */
    public function getConnectors(): ?array {
        $val = $this->getBackingStore()->get('connectors');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Connector::class);
            /** @var array<Connector>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'connectors'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'agentGroups' => fn(ParseNode $n) => $o->setAgentGroups($n->getCollectionOfObjectValues([OnPremisesAgentGroup::class, 'createFromDiscriminatorValue'])),
            'agents' => fn(ParseNode $n) => $o->setAgents($n->getCollectionOfObjectValues([OnPremisesAgent::class, 'createFromDiscriminatorValue'])),
            'applicationSegments' => fn(ParseNode $n) => $o->setApplicationSegments($n->getCollectionOfObjectValues([IpApplicationSegment::class, 'createFromDiscriminatorValue'])),
            'connectorGroups' => fn(ParseNode $n) => $o->setConnectorGroups($n->getCollectionOfObjectValues([ConnectorGroup::class, 'createFromDiscriminatorValue'])),
            'connectors' => fn(ParseNode $n) => $o->setConnectors($n->getCollectionOfObjectValues([Connector::class, 'createFromDiscriminatorValue'])),
            'hybridAgentUpdaterConfiguration' => fn(ParseNode $n) => $o->setHybridAgentUpdaterConfiguration($n->getObjectValue([HybridAgentUpdaterConfiguration::class, 'createFromDiscriminatorValue'])),
            'isDefaultAccessEnabled' => fn(ParseNode $n) => $o->setIsDefaultAccessEnabled($n->getBooleanValue()),
            'isEnabled' => fn(ParseNode $n) => $o->setIsEnabled($n->getBooleanValue()),
            'publishedResources' => fn(ParseNode $n) => $o->setPublishedResources($n->getCollectionOfObjectValues([PublishedResource::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the hybridAgentUpdaterConfiguration property value. Represents a hybridAgentUpdaterConfiguration object.
     * @return HybridAgentUpdaterConfiguration|null
    */
    public function getHybridAgentUpdaterConfiguration(): ?HybridAgentUpdaterConfiguration {
        $val = $this->getBackingStore()->get('hybridAgentUpdaterConfiguration');
        if (is_null($val) || $val instanceof HybridAgentUpdaterConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hybridAgentUpdaterConfiguration'");
    }

    /**
     * Gets the isDefaultAccessEnabled property value. Specifies whether default access for app proxy is enabled or disabled.
     * @return bool|null
    */
    public function getIsDefaultAccessEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isDefaultAccessEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isDefaultAccessEnabled'");
    }

    /**
     * Gets the isEnabled property value. Represents if Microsoft Entra application proxy is enabled for the tenant.
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEnabled'");
    }

    /**
     * Gets the publishedResources property value. List of existing publishedResource objects. Read-only. Nullable.
     * @return array<PublishedResource>|null
    */
    public function getPublishedResources(): ?array {
        $val = $this->getBackingStore()->get('publishedResources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PublishedResource::class);
            /** @var array<PublishedResource>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'publishedResources'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('agentGroups', $this->getAgentGroups());
        $writer->writeCollectionOfObjectValues('agents', $this->getAgents());
        $writer->writeCollectionOfObjectValues('applicationSegments', $this->getApplicationSegments());
        $writer->writeCollectionOfObjectValues('connectorGroups', $this->getConnectorGroups());
        $writer->writeCollectionOfObjectValues('connectors', $this->getConnectors());
        $writer->writeObjectValue('hybridAgentUpdaterConfiguration', $this->getHybridAgentUpdaterConfiguration());
        $writer->writeBooleanValue('isDefaultAccessEnabled', $this->getIsDefaultAccessEnabled());
        $writer->writeBooleanValue('isEnabled', $this->getIsEnabled());
        $writer->writeCollectionOfObjectValues('publishedResources', $this->getPublishedResources());
    }

    /**
     * Sets the agentGroups property value. List of existing onPremisesAgentGroup objects. Read-only. Nullable.
     * @param array<OnPremisesAgentGroup>|null $value Value to set for the agentGroups property.
    */
    public function setAgentGroups(?array $value): void {
        $this->getBackingStore()->set('agentGroups', $value);
    }

    /**
     * Sets the agents property value. List of existing onPremisesAgent objects. Read-only. Nullable.
     * @param array<OnPremisesAgent>|null $value Value to set for the agents property.
    */
    public function setAgents(?array $value): void {
        $this->getBackingStore()->set('agents', $value);
    }

    /**
     * Sets the applicationSegments property value. Represents the segment configurations that are allowed for an on-premises non-web application published through Microsoft Entra application proxy.
     * @param array<IpApplicationSegment>|null $value Value to set for the applicationSegments property.
    */
    public function setApplicationSegments(?array $value): void {
        $this->getBackingStore()->set('applicationSegments', $value);
    }

    /**
     * Sets the connectorGroups property value. List of existing connectorGroup objects for applications published through Application Proxy. Read-only. Nullable.
     * @param array<ConnectorGroup>|null $value Value to set for the connectorGroups property.
    */
    public function setConnectorGroups(?array $value): void {
        $this->getBackingStore()->set('connectorGroups', $value);
    }

    /**
     * Sets the connectors property value. List of existing connector objects for applications published through Application Proxy. Read-only. Nullable.
     * @param array<Connector>|null $value Value to set for the connectors property.
    */
    public function setConnectors(?array $value): void {
        $this->getBackingStore()->set('connectors', $value);
    }

    /**
     * Sets the hybridAgentUpdaterConfiguration property value. Represents a hybridAgentUpdaterConfiguration object.
     * @param HybridAgentUpdaterConfiguration|null $value Value to set for the hybridAgentUpdaterConfiguration property.
    */
    public function setHybridAgentUpdaterConfiguration(?HybridAgentUpdaterConfiguration $value): void {
        $this->getBackingStore()->set('hybridAgentUpdaterConfiguration', $value);
    }

    /**
     * Sets the isDefaultAccessEnabled property value. Specifies whether default access for app proxy is enabled or disabled.
     * @param bool|null $value Value to set for the isDefaultAccessEnabled property.
    */
    public function setIsDefaultAccessEnabled(?bool $value): void {
        $this->getBackingStore()->set('isDefaultAccessEnabled', $value);
    }

    /**
     * Sets the isEnabled property value. Represents if Microsoft Entra application proxy is enabled for the tenant.
     * @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value): void {
        $this->getBackingStore()->set('isEnabled', $value);
    }

    /**
     * Sets the publishedResources property value. List of existing publishedResource objects. Read-only. Nullable.
     * @param array<PublishedResource>|null $value Value to set for the publishedResources property.
    */
    public function setPublishedResources(?array $value): void {
        $this->getBackingStore()->set('publishedResources', $value);
    }

}

<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AgentInstance extends Entity implements Parsable 
{
    /**
     * Instantiates a new AgentInstance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AgentInstance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AgentInstance {
        return new AgentInstance();
    }

    /**
     * Gets the additionalInterfaces property value. Additional interfaces/transports supported by the agent.
     * @return array<AgentInterface>|null
    */
    public function getAdditionalInterfaces(): ?array {
        $val = $this->getBackingStore()->get('additionalInterfaces');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AgentInterface::class);
            /** @var array<AgentInterface>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalInterfaces'");
    }

    /**
     * Gets the agentCardManifest property value. The agent card manifest of the agent instance.
     * @return AgentCardManifest|null
    */
    public function getAgentCardManifest(): ?AgentCardManifest {
        $val = $this->getBackingStore()->get('agentCardManifest');
        if (is_null($val) || $val instanceof AgentCardManifest) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agentCardManifest'");
    }

    /**
     * Gets the agentIdentityBlueprintId property value. Object ID of the agentIdentityBlueprint object.
     * @return string|null
    */
    public function getAgentIdentityBlueprintId(): ?string {
        $val = $this->getBackingStore()->get('agentIdentityBlueprintId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agentIdentityBlueprintId'");
    }

    /**
     * Gets the agentIdentityId property value. Object ID of the agentIdentity object.
     * @return string|null
    */
    public function getAgentIdentityId(): ?string {
        $val = $this->getBackingStore()->get('agentIdentityId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agentIdentityId'");
    }

    /**
     * Gets the agentUserId property value. Object ID of the agentUser associated with the agent. Read-only.
     * @return string|null
    */
    public function getAgentUserId(): ?string {
        $val = $this->getBackingStore()->get('agentUserId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agentUserId'");
    }

    /**
     * Gets the collections property value. The agent collections that the agent instance is a member of.
     * @return array<AgentCollection>|null
    */
    public function getCollections(): ?array {
        $val = $this->getBackingStore()->get('collections');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AgentCollection::class);
            /** @var array<AgentCollection>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'collections'");
    }

    /**
     * Gets the createdBy property value. Object ID of the user or application that created the agent instance. Read-only.
     * @return string|null
    */
    public function getCreatedBy(): ?string {
        $val = $this->getBackingStore()->get('createdBy');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdBy'");
    }

    /**
     * Gets the createdDateTime property value. Timestamp when agent instance was created. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the displayName property value. Display name for the agent instance.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'additionalInterfaces' => fn(ParseNode $n) => $o->setAdditionalInterfaces($n->getCollectionOfObjectValues([AgentInterface::class, 'createFromDiscriminatorValue'])),
            'agentCardManifest' => fn(ParseNode $n) => $o->setAgentCardManifest($n->getObjectValue([AgentCardManifest::class, 'createFromDiscriminatorValue'])),
            'agentIdentityBlueprintId' => fn(ParseNode $n) => $o->setAgentIdentityBlueprintId($n->getStringValue()),
            'agentIdentityId' => fn(ParseNode $n) => $o->setAgentIdentityId($n->getStringValue()),
            'agentUserId' => fn(ParseNode $n) => $o->setAgentUserId($n->getStringValue()),
            'collections' => fn(ParseNode $n) => $o->setCollections($n->getCollectionOfObjectValues([AgentCollection::class, 'createFromDiscriminatorValue'])),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'managedBy' => fn(ParseNode $n) => $o->setManagedBy($n->getStringValue()),
            'originatingStore' => fn(ParseNode $n) => $o->setOriginatingStore($n->getStringValue()),
            'ownerIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setOwnerIds($val);
            },
            'preferredTransport' => fn(ParseNode $n) => $o->setPreferredTransport($n->getStringValue()),
            'signatures' => fn(ParseNode $n) => $o->setSignatures($n->getCollectionOfObjectValues([AgentCardSignature::class, 'createFromDiscriminatorValue'])),
            'sourceAgentId' => fn(ParseNode $n) => $o->setSourceAgentId($n->getStringValue()),
            'url' => fn(ParseNode $n) => $o->setUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. Timestamp of last modification.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the managedBy property value. appId (referred to as Application (client) ID on the Microsoft Entra admin center) of the application managing this agent.
     * @return string|null
    */
    public function getManagedBy(): ?string {
        $val = $this->getBackingStore()->get('managedBy');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedBy'");
    }

    /**
     * Gets the originatingStore property value. Name of the store/system where agent originated. For example Copilot Studio.
     * @return string|null
    */
    public function getOriginatingStore(): ?string {
        $val = $this->getBackingStore()->get('originatingStore');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'originatingStore'");
    }

    /**
     * Gets the ownerIds property value. List of object IDs for the owners of the agent instance.
     * @return array<string>|null
    */
    public function getOwnerIds(): ?array {
        $val = $this->getBackingStore()->get('ownerIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ownerIds'");
    }

    /**
     * Gets the preferredTransport property value. Preferred transport protocol. The possible values are JSONRPC, GRPC, and HTTP+JSON.
     * @return string|null
    */
    public function getPreferredTransport(): ?string {
        $val = $this->getBackingStore()->get('preferredTransport');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'preferredTransport'");
    }

    /**
     * Gets the signatures property value. Digital signatures for the agent instance.
     * @return array<AgentCardSignature>|null
    */
    public function getSignatures(): ?array {
        $val = $this->getBackingStore()->get('signatures');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AgentCardSignature::class);
            /** @var array<AgentCardSignature>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'signatures'");
    }

    /**
     * Gets the sourceAgentId property value. Identifier of the agent in the original source system.
     * @return string|null
    */
    public function getSourceAgentId(): ?string {
        $val = $this->getBackingStore()->get('sourceAgentId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourceAgentId'");
    }

    /**
     * Gets the url property value. Endpoint URL for the agent instance.
     * @return string|null
    */
    public function getUrl(): ?string {
        $val = $this->getBackingStore()->get('url');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'url'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('additionalInterfaces', $this->getAdditionalInterfaces());
        $writer->writeObjectValue('agentCardManifest', $this->getAgentCardManifest());
        $writer->writeStringValue('agentIdentityBlueprintId', $this->getAgentIdentityBlueprintId());
        $writer->writeStringValue('agentIdentityId', $this->getAgentIdentityId());
        $writer->writeStringValue('agentUserId', $this->getAgentUserId());
        $writer->writeCollectionOfObjectValues('collections', $this->getCollections());
        $writer->writeStringValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('managedBy', $this->getManagedBy());
        $writer->writeStringValue('originatingStore', $this->getOriginatingStore());
        $writer->writeCollectionOfPrimitiveValues('ownerIds', $this->getOwnerIds());
        $writer->writeStringValue('preferredTransport', $this->getPreferredTransport());
        $writer->writeCollectionOfObjectValues('signatures', $this->getSignatures());
        $writer->writeStringValue('sourceAgentId', $this->getSourceAgentId());
        $writer->writeStringValue('url', $this->getUrl());
    }

    /**
     * Sets the additionalInterfaces property value. Additional interfaces/transports supported by the agent.
     * @param array<AgentInterface>|null $value Value to set for the additionalInterfaces property.
    */
    public function setAdditionalInterfaces(?array $value): void {
        $this->getBackingStore()->set('additionalInterfaces', $value);
    }

    /**
     * Sets the agentCardManifest property value. The agent card manifest of the agent instance.
     * @param AgentCardManifest|null $value Value to set for the agentCardManifest property.
    */
    public function setAgentCardManifest(?AgentCardManifest $value): void {
        $this->getBackingStore()->set('agentCardManifest', $value);
    }

    /**
     * Sets the agentIdentityBlueprintId property value. Object ID of the agentIdentityBlueprint object.
     * @param string|null $value Value to set for the agentIdentityBlueprintId property.
    */
    public function setAgentIdentityBlueprintId(?string $value): void {
        $this->getBackingStore()->set('agentIdentityBlueprintId', $value);
    }

    /**
     * Sets the agentIdentityId property value. Object ID of the agentIdentity object.
     * @param string|null $value Value to set for the agentIdentityId property.
    */
    public function setAgentIdentityId(?string $value): void {
        $this->getBackingStore()->set('agentIdentityId', $value);
    }

    /**
     * Sets the agentUserId property value. Object ID of the agentUser associated with the agent. Read-only.
     * @param string|null $value Value to set for the agentUserId property.
    */
    public function setAgentUserId(?string $value): void {
        $this->getBackingStore()->set('agentUserId', $value);
    }

    /**
     * Sets the collections property value. The agent collections that the agent instance is a member of.
     * @param array<AgentCollection>|null $value Value to set for the collections property.
    */
    public function setCollections(?array $value): void {
        $this->getBackingStore()->set('collections', $value);
    }

    /**
     * Sets the createdBy property value. Object ID of the user or application that created the agent instance. Read-only.
     * @param string|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?string $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. Timestamp when agent instance was created. Read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the displayName property value. Display name for the agent instance.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Timestamp of last modification.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the managedBy property value. appId (referred to as Application (client) ID on the Microsoft Entra admin center) of the application managing this agent.
     * @param string|null $value Value to set for the managedBy property.
    */
    public function setManagedBy(?string $value): void {
        $this->getBackingStore()->set('managedBy', $value);
    }

    /**
     * Sets the originatingStore property value. Name of the store/system where agent originated. For example Copilot Studio.
     * @param string|null $value Value to set for the originatingStore property.
    */
    public function setOriginatingStore(?string $value): void {
        $this->getBackingStore()->set('originatingStore', $value);
    }

    /**
     * Sets the ownerIds property value. List of object IDs for the owners of the agent instance.
     * @param array<string>|null $value Value to set for the ownerIds property.
    */
    public function setOwnerIds(?array $value): void {
        $this->getBackingStore()->set('ownerIds', $value);
    }

    /**
     * Sets the preferredTransport property value. Preferred transport protocol. The possible values are JSONRPC, GRPC, and HTTP+JSON.
     * @param string|null $value Value to set for the preferredTransport property.
    */
    public function setPreferredTransport(?string $value): void {
        $this->getBackingStore()->set('preferredTransport', $value);
    }

    /**
     * Sets the signatures property value. Digital signatures for the agent instance.
     * @param array<AgentCardSignature>|null $value Value to set for the signatures property.
    */
    public function setSignatures(?array $value): void {
        $this->getBackingStore()->set('signatures', $value);
    }

    /**
     * Sets the sourceAgentId property value. Identifier of the agent in the original source system.
     * @param string|null $value Value to set for the sourceAgentId property.
    */
    public function setSourceAgentId(?string $value): void {
        $this->getBackingStore()->set('sourceAgentId', $value);
    }

    /**
     * Sets the url property value. Endpoint URL for the agent instance.
     * @param string|null $value Value to set for the url property.
    */
    public function setUrl(?string $value): void {
        $this->getBackingStore()->set('url', $value);
    }

}

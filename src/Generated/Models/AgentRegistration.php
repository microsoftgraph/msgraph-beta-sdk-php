<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Entity that represents an agent registration containing metadata, endpointconfiguration, tools, and publishing information.This entity provides developers and administrators with all details needed tomanage agent instances including their instructions, owners, publishing status,and associated tools.
*/
class AgentRegistration extends Entity implements Parsable 
{
    /**
     * Instantiates a new AgentRegistration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AgentRegistration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AgentRegistration {
        return new AgentRegistration();
    }

    /**
     * Gets the agentIdentityBlueprintId property value. Agent identity blueprint identifier.
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
     * Gets the agentIdentityId property value. Entra agent identity identifier.
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
     * Gets the createdBy property value. The unique identifier of the user or app who created the agent registration.
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
     * Gets the description property value. The agent description providing an overview of its purpose and capabilities.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
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
            'agentIdentityBlueprintId' => fn(ParseNode $n) => $o->setAgentIdentityBlueprintId($n->getStringValue()),
            'agentIdentityId' => fn(ParseNode $n) => $o->setAgentIdentityId($n->getStringValue()),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastPublishedBy' => fn(ParseNode $n) => $o->setLastPublishedBy($n->getStringValue()),
            'managedByAppId' => fn(ParseNode $n) => $o->setManagedByAppId($n->getStringValue()),
            'originatingStore' => fn(ParseNode $n) => $o->setOriginatingStore($n->getStringValue()),
            'ownerIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setOwnerIds($val);
            },
            'sourceAgentId' => fn(ParseNode $n) => $o->setSourceAgentId($n->getStringValue()),
            'sourceCreatedDateTime' => fn(ParseNode $n) => $o->setSourceCreatedDateTime($n->getDateTimeValue()),
            'sourceLastModifiedDateTime' => fn(ParseNode $n) => $o->setSourceLastModifiedDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the lastPublishedBy property value. The unique identifier of the last person to publish the agent.
     * @return string|null
    */
    public function getLastPublishedBy(): ?string {
        $val = $this->getBackingStore()->get('lastPublishedBy');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastPublishedBy'");
    }

    /**
     * Gets the managedByAppId property value. Application identifier managing this agent.
     * @return string|null
    */
    public function getManagedByAppId(): ?string {
        $val = $this->getBackingStore()->get('managedByAppId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedByAppId'");
    }

    /**
     * Gets the originatingStore property value. Name of the store/system where the agent originated.
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
     * Gets the ownerIds property value. List of owner identifiers  for the agent in case of user registering agent. Either owners or managedby is required
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
     * Gets the sourceAgentId property value. Original agent identifier from source system.
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
     * Gets the sourceCreatedDateTime property value. The date and time when the agent instance was created from source.
     * @return DateTime|null
    */
    public function getSourceCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('sourceCreatedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourceCreatedDateTime'");
    }

    /**
     * Gets the sourceLastModifiedDateTime property value. The date and time when the agent instance was last modified from source.
     * @return DateTime|null
    */
    public function getSourceLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('sourceLastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourceLastModifiedDateTime'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('agentIdentityBlueprintId', $this->getAgentIdentityBlueprintId());
        $writer->writeStringValue('agentIdentityId', $this->getAgentIdentityId());
        $writer->writeStringValue('createdBy', $this->getCreatedBy());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('lastPublishedBy', $this->getLastPublishedBy());
        $writer->writeStringValue('managedByAppId', $this->getManagedByAppId());
        $writer->writeStringValue('originatingStore', $this->getOriginatingStore());
        $writer->writeCollectionOfPrimitiveValues('ownerIds', $this->getOwnerIds());
        $writer->writeStringValue('sourceAgentId', $this->getSourceAgentId());
        $writer->writeDateTimeValue('sourceCreatedDateTime', $this->getSourceCreatedDateTime());
        $writer->writeDateTimeValue('sourceLastModifiedDateTime', $this->getSourceLastModifiedDateTime());
    }

    /**
     * Sets the agentIdentityBlueprintId property value. Agent identity blueprint identifier.
     * @param string|null $value Value to set for the agentIdentityBlueprintId property.
    */
    public function setAgentIdentityBlueprintId(?string $value): void {
        $this->getBackingStore()->set('agentIdentityBlueprintId', $value);
    }

    /**
     * Sets the agentIdentityId property value. Entra agent identity identifier.
     * @param string|null $value Value to set for the agentIdentityId property.
    */
    public function setAgentIdentityId(?string $value): void {
        $this->getBackingStore()->set('agentIdentityId', $value);
    }

    /**
     * Sets the createdBy property value. The unique identifier of the user or app who created the agent registration.
     * @param string|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?string $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the description property value. The agent description providing an overview of its purpose and capabilities.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. Display name for the agent instance.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lastPublishedBy property value. The unique identifier of the last person to publish the agent.
     * @param string|null $value Value to set for the lastPublishedBy property.
    */
    public function setLastPublishedBy(?string $value): void {
        $this->getBackingStore()->set('lastPublishedBy', $value);
    }

    /**
     * Sets the managedByAppId property value. Application identifier managing this agent.
     * @param string|null $value Value to set for the managedByAppId property.
    */
    public function setManagedByAppId(?string $value): void {
        $this->getBackingStore()->set('managedByAppId', $value);
    }

    /**
     * Sets the originatingStore property value. Name of the store/system where the agent originated.
     * @param string|null $value Value to set for the originatingStore property.
    */
    public function setOriginatingStore(?string $value): void {
        $this->getBackingStore()->set('originatingStore', $value);
    }

    /**
     * Sets the ownerIds property value. List of owner identifiers  for the agent in case of user registering agent. Either owners or managedby is required
     * @param array<string>|null $value Value to set for the ownerIds property.
    */
    public function setOwnerIds(?array $value): void {
        $this->getBackingStore()->set('ownerIds', $value);
    }

    /**
     * Sets the sourceAgentId property value. Original agent identifier from source system.
     * @param string|null $value Value to set for the sourceAgentId property.
    */
    public function setSourceAgentId(?string $value): void {
        $this->getBackingStore()->set('sourceAgentId', $value);
    }

    /**
     * Sets the sourceCreatedDateTime property value. The date and time when the agent instance was created from source.
     * @param DateTime|null $value Value to set for the sourceCreatedDateTime property.
    */
    public function setSourceCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('sourceCreatedDateTime', $value);
    }

    /**
     * Sets the sourceLastModifiedDateTime property value. The date and time when the agent instance was last modified from source.
     * @param DateTime|null $value Value to set for the sourceLastModifiedDateTime property.
    */
    public function setSourceLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('sourceLastModifiedDateTime', $value);
    }

}

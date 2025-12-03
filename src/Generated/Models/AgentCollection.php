<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AgentCollection extends Entity implements Parsable 
{
    /**
     * Instantiates a new AgentCollection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AgentCollection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AgentCollection {
        return new AgentCollection();
    }

    /**
     * Gets the createdBy property value. Object ID of the user or app that created the agent instance.
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
     * Gets the createdDateTime property value. Timestamp when agent collection was created.
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
     * Gets the description property value. Description / purpose of the collection.
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
     * Gets the displayName property value. Friendly name of the collection.
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
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'managedBy' => fn(ParseNode $n) => $o->setManagedBy($n->getStringValue()),
            'members' => fn(ParseNode $n) => $o->setMembers($n->getCollectionOfObjectValues([AgentInstance::class, 'createFromDiscriminatorValue'])),
            'originatingStore' => fn(ParseNode $n) => $o->setOriginatingStore($n->getStringValue()),
            'ownerIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setOwnerIds($val);
            },
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. Timestamp of last update.
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
     * Gets the managedBy property value. appId (referred to as Application (client) ID on the Microsoft Entra admin center) of the service principal managing this agent.
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
     * Gets the members property value. List of agent instances that are members of this collection. Supports $expand.
     * @return array<AgentInstance>|null
    */
    public function getMembers(): ?array {
        $val = $this->getBackingStore()->get('members');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AgentInstance::class);
            /** @var array<AgentInstance>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'members'");
    }

    /**
     * Gets the originatingStore property value. Source system/store where the collection originated. For example Copilot Studio.
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('managedBy', $this->getManagedBy());
        $writer->writeCollectionOfObjectValues('members', $this->getMembers());
        $writer->writeStringValue('originatingStore', $this->getOriginatingStore());
        $writer->writeCollectionOfPrimitiveValues('ownerIds', $this->getOwnerIds());
    }

    /**
     * Sets the createdBy property value. Object ID of the user or app that created the agent instance.
     * @param string|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?string $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. Timestamp when agent collection was created.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. Description / purpose of the collection.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. Friendly name of the collection.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Timestamp of last update.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the managedBy property value. appId (referred to as Application (client) ID on the Microsoft Entra admin center) of the service principal managing this agent.
     * @param string|null $value Value to set for the managedBy property.
    */
    public function setManagedBy(?string $value): void {
        $this->getBackingStore()->set('managedBy', $value);
    }

    /**
     * Sets the members property value. List of agent instances that are members of this collection. Supports $expand.
     * @param array<AgentInstance>|null $value Value to set for the members property.
    */
    public function setMembers(?array $value): void {
        $this->getBackingStore()->set('members', $value);
    }

    /**
     * Sets the originatingStore property value. Source system/store where the collection originated. For example Copilot Studio.
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

}

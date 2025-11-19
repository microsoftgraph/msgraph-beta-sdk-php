<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AgentIdentity extends ServicePrincipal implements Parsable 
{
    /**
     * Instantiates a new AgentIdentity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.agentIdentity');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AgentIdentity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AgentIdentity {
        return new AgentIdentity();
    }

    /**
     * Gets the agentAppId property value. The agentAppId property
     * @return string|null
    */
    public function getAgentAppId(): ?string {
        $val = $this->getBackingStore()->get('agentAppId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agentAppId'");
    }

    /**
     * Gets the agentIdentityBlueprintId property value. The appId of the agent identity blueprint that defines the configuration for this agent identity.
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
     * Gets the createdDateTime property value. The date and time the agent identity was created. Read-only. Inherited from servicePrincipal.
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'agentAppId' => fn(ParseNode $n) => $o->setAgentAppId($n->getStringValue()),
            'agentIdentityBlueprintId' => fn(ParseNode $n) => $o->setAgentIdentityBlueprintId($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('agentAppId', $this->getAgentAppId());
        $writer->writeStringValue('agentIdentityBlueprintId', $this->getAgentIdentityBlueprintId());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
    }

    /**
     * Sets the agentAppId property value. The agentAppId property
     * @param string|null $value Value to set for the agentAppId property.
    */
    public function setAgentAppId(?string $value): void {
        $this->getBackingStore()->set('agentAppId', $value);
    }

    /**
     * Sets the agentIdentityBlueprintId property value. The appId of the agent identity blueprint that defines the configuration for this agent identity.
     * @param string|null $value Value to set for the agentIdentityBlueprintId property.
    */
    public function setAgentIdentityBlueprintId(?string $value): void {
        $this->getBackingStore()->set('agentIdentityBlueprintId', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time the agent identity was created. Read-only. Inherited from servicePrincipal.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

}

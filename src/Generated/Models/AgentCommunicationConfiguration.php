<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AgentCommunicationConfiguration extends Entity implements Parsable 
{
    /**
     * Instantiates a new AgentCommunicationConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AgentCommunicationConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AgentCommunicationConfiguration {
        return new AgentCommunicationConfiguration();
    }

    /**
     * Gets the endpointConfiguration property value. The endpoint binding (bot ID or callback URI) that the agent uses to receive messages.
     * @return AgentEndpointConfiguration|null
    */
    public function getEndpointConfiguration(): ?AgentEndpointConfiguration {
        $val = $this->getBackingStore()->get('endpointConfiguration');
        if (is_null($val) || $val instanceof AgentEndpointConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endpointConfiguration'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'endpointConfiguration' => fn(ParseNode $n) => $o->setEndpointConfiguration($n->getObjectValue([AgentEndpointConfiguration::class, 'createFromDiscriminatorValue'])),
            'isOverridableAtAgentIdLevel' => fn(ParseNode $n) => $o->setIsOverridableAtAgentIdLevel($n->getBooleanValue()),
            'teamworkConfiguration' => fn(ParseNode $n) => $o->setTeamworkConfiguration($n->getObjectValue([AgentTeamworkConfiguration::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isOverridableAtAgentIdLevel property value. Indicates whether individual agent instances created from this blueprint can override the endpointConfiguration. When true, each instance can override it; when false, every instance inherits it. Not nullable.
     * @return bool|null
    */
    public function getIsOverridableAtAgentIdLevel(): ?bool {
        $val = $this->getBackingStore()->get('isOverridableAtAgentIdLevel');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isOverridableAtAgentIdLevel'");
    }

    /**
     * Gets the teamworkConfiguration property value. The per-conversation-context message notification settings (group chat, channel, one-on-one chat, and meeting chat) that agents use.
     * @return AgentTeamworkConfiguration|null
    */
    public function getTeamworkConfiguration(): ?AgentTeamworkConfiguration {
        $val = $this->getBackingStore()->get('teamworkConfiguration');
        if (is_null($val) || $val instanceof AgentTeamworkConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'teamworkConfiguration'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('endpointConfiguration', $this->getEndpointConfiguration());
        $writer->writeBooleanValue('isOverridableAtAgentIdLevel', $this->getIsOverridableAtAgentIdLevel());
        $writer->writeObjectValue('teamworkConfiguration', $this->getTeamworkConfiguration());
    }

    /**
     * Sets the endpointConfiguration property value. The endpoint binding (bot ID or callback URI) that the agent uses to receive messages.
     * @param AgentEndpointConfiguration|null $value Value to set for the endpointConfiguration property.
    */
    public function setEndpointConfiguration(?AgentEndpointConfiguration $value): void {
        $this->getBackingStore()->set('endpointConfiguration', $value);
    }

    /**
     * Sets the isOverridableAtAgentIdLevel property value. Indicates whether individual agent instances created from this blueprint can override the endpointConfiguration. When true, each instance can override it; when false, every instance inherits it. Not nullable.
     * @param bool|null $value Value to set for the isOverridableAtAgentIdLevel property.
    */
    public function setIsOverridableAtAgentIdLevel(?bool $value): void {
        $this->getBackingStore()->set('isOverridableAtAgentIdLevel', $value);
    }

    /**
     * Sets the teamworkConfiguration property value. The per-conversation-context message notification settings (group chat, channel, one-on-one chat, and meeting chat) that agents use.
     * @param AgentTeamworkConfiguration|null $value Value to set for the teamworkConfiguration property.
    */
    public function setTeamworkConfiguration(?AgentTeamworkConfiguration $value): void {
        $this->getBackingStore()->set('teamworkConfiguration', $value);
    }

}

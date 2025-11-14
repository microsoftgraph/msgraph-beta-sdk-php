<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RiskyAgentIdentity extends RiskyAgent implements Parsable 
{
    /**
     * Instantiates a new RiskyAgentIdentity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RiskyAgentIdentity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RiskyAgentIdentity {
        return new RiskyAgentIdentity();
    }

    /**
     * Gets the agentIdentity property value. The agentIdentity property
     * @return AgentIdentity|null
    */
    public function getAgentIdentity(): ?AgentIdentity {
        $val = $this->getBackingStore()->get('agentIdentity');
        if (is_null($val) || $val instanceof AgentIdentity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agentIdentity'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'agentIdentity' => fn(ParseNode $n) => $o->setAgentIdentity($n->getObjectValue([AgentIdentity::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('agentIdentity', $this->getAgentIdentity());
    }

    /**
     * Sets the agentIdentity property value. The agentIdentity property
     * @param AgentIdentity|null $value Value to set for the agentIdentity property.
    */
    public function setAgentIdentity(?AgentIdentity $value): void {
        $this->getBackingStore()->set('agentIdentity', $value);
    }

}

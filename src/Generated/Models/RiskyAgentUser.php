<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RiskyAgentUser extends RiskyAgent implements Parsable 
{
    /**
     * Instantiates a new RiskyAgentUser and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RiskyAgentUser
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RiskyAgentUser {
        return new RiskyAgentUser();
    }

    /**
     * Gets the agentUser property value. The agentUser property
     * @return AgentUser|null
    */
    public function getAgentUser(): ?AgentUser {
        $val = $this->getBackingStore()->get('agentUser');
        if (is_null($val) || $val instanceof AgentUser) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agentUser'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'agentUser' => fn(ParseNode $n) => $o->setAgentUser($n->getObjectValue([AgentUser::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('agentUser', $this->getAgentUser());
    }

    /**
     * Sets the agentUser property value. The agentUser property
     * @param AgentUser|null $value Value to set for the agentUser property.
    */
    public function setAgentUser(?AgentUser $value): void {
        $this->getBackingStore()->set('agentUser', $value);
    }

}

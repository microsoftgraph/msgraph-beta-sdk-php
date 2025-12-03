<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RiskyAgentIdentityBlueprintPrincipal extends RiskyAgent implements Parsable 
{
    /**
     * Instantiates a new RiskyAgentIdentityBlueprintPrincipal and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RiskyAgentIdentityBlueprintPrincipal
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RiskyAgentIdentityBlueprintPrincipal {
        return new RiskyAgentIdentityBlueprintPrincipal();
    }

    /**
     * Gets the agentIdentityBlueprintPrincipal property value. The agentIdentityBlueprintPrincipal property
     * @return AgentIdentityBlueprintPrincipal|null
    */
    public function getAgentIdentityBlueprintPrincipal(): ?AgentIdentityBlueprintPrincipal {
        $val = $this->getBackingStore()->get('agentIdentityBlueprintPrincipal');
        if (is_null($val) || $val instanceof AgentIdentityBlueprintPrincipal) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agentIdentityBlueprintPrincipal'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'agentIdentityBlueprintPrincipal' => fn(ParseNode $n) => $o->setAgentIdentityBlueprintPrincipal($n->getObjectValue([AgentIdentityBlueprintPrincipal::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('agentIdentityBlueprintPrincipal', $this->getAgentIdentityBlueprintPrincipal());
    }

    /**
     * Sets the agentIdentityBlueprintPrincipal property value. The agentIdentityBlueprintPrincipal property
     * @param AgentIdentityBlueprintPrincipal|null $value Value to set for the agentIdentityBlueprintPrincipal property.
    */
    public function setAgentIdentityBlueprintPrincipal(?AgentIdentityBlueprintPrincipal $value): void {
        $this->getBackingStore()->set('agentIdentityBlueprintPrincipal', $value);
    }

}

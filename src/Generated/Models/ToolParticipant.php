<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ToolParticipant extends InteractionParticipant implements Parsable 
{
    /**
     * Instantiates a new ToolParticipant and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.toolParticipant');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ToolParticipant
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ToolParticipant {
        return new ToolParticipant();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'mcpServerId' => fn(ParseNode $n) => $o->setMcpServerId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the mcpServerId property value. The mcpServerId property
     * @return string|null
    */
    public function getMcpServerId(): ?string {
        $val = $this->getBackingStore()->get('mcpServerId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mcpServerId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('mcpServerId', $this->getMcpServerId());
    }

    /**
     * Sets the mcpServerId property value. The mcpServerId property
     * @param string|null $value Value to set for the mcpServerId property.
    */
    public function setMcpServerId(?string $value): void {
        $this->getBackingStore()->set('mcpServerId', $value);
    }

}

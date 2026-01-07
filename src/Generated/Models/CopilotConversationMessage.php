<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Abstract entity representing a chat message in a request or response.
*/
class CopilotConversationMessage extends Entity implements Parsable 
{
    /**
     * Instantiates a new CopilotConversationMessage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CopilotConversationMessage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CopilotConversationMessage {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.copilotConversationRequestMessage': return new CopilotConversationRequestMessage();
                case '#microsoft.graph.copilotConversationResponseMessage': return new CopilotConversationResponseMessage();
            }
        }
        return new CopilotConversationMessage();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'text' => fn(ParseNode $n) => $o->setText($n->getStringValue()),
        ]);
    }

    /**
     * Gets the text property value. The text of the message.
     * @return string|null
    */
    public function getText(): ?string {
        $val = $this->getBackingStore()->get('text');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'text'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('text', $this->getText());
    }

    /**
     * Sets the text property value. The text of the message.
     * @param string|null $value Value to set for the text property.
    */
    public function setText(?string $value): void {
        $this->getBackingStore()->set('text', $value);
    }

}

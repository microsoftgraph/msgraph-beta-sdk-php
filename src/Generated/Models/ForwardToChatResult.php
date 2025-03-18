<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ForwardToChatResult extends ActionResultPart implements Parsable 
{
    /**
     * Instantiates a new ForwardToChatResult and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.forwardToChatResult');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ForwardToChatResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ForwardToChatResult {
        return new ForwardToChatResult();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'forwardedMessageId' => fn(ParseNode $n) => $o->setForwardedMessageId($n->getStringValue()),
            'targetChatId' => fn(ParseNode $n) => $o->setTargetChatId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the forwardedMessageId property value. The chatMessage ID generated after a message is successfully forwarded to the target chat ID.
     * @return string|null
    */
    public function getForwardedMessageId(): ?string {
        $val = $this->getBackingStore()->get('forwardedMessageId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'forwardedMessageId'");
    }

    /**
     * Gets the targetChatId property value. The target chat ID where the message was forwarded.
     * @return string|null
    */
    public function getTargetChatId(): ?string {
        $val = $this->getBackingStore()->get('targetChatId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetChatId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('forwardedMessageId', $this->getForwardedMessageId());
        $writer->writeStringValue('targetChatId', $this->getTargetChatId());
    }

    /**
     * Sets the forwardedMessageId property value. The chatMessage ID generated after a message is successfully forwarded to the target chat ID.
     * @param string|null $value Value to set for the forwardedMessageId property.
    */
    public function setForwardedMessageId(?string $value): void {
        $this->getBackingStore()->set('forwardedMessageId', $value);
    }

    /**
     * Sets the targetChatId property value. The target chat ID where the message was forwarded.
     * @param string|null $value Value to set for the targetChatId property.
    */
    public function setTargetChatId(?string $value): void {
        $this->getBackingStore()->set('targetChatId', $value);
    }

}

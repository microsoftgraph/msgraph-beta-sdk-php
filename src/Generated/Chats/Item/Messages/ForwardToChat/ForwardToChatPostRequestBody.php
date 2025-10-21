<?php

namespace Microsoft\\Graph\\Beta\\Generated\Chats\Item\Messages\ForwardToChat;

use Microsoft\\Graph\\Beta\\Generated\Models\ChatMessage;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ForwardToChatPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ForwardToChatPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ForwardToChatPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ForwardToChatPostRequestBody {
        return new ForwardToChatPostRequestBody();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the additionalMessage property value. The additionalMessage property
     * @return ChatMessage|null
    */
    public function getAdditionalMessage(): ?ChatMessage {
        $val = $this->getBackingStore()->get('additionalMessage');
        if (is_null($val) || $val instanceof ChatMessage) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalMessage'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'additionalMessage' => fn(ParseNode $n) => $o->setAdditionalMessage($n->getObjectValue([ChatMessage::class, 'createFromDiscriminatorValue'])),
            'messageIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setMessageIds($val);
            },
            'targetChatIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setTargetChatIds($val);
            },
        ];
    }

    /**
     * Gets the messageIds property value. The messageIds property
     * @return array<string>|null
    */
    public function getMessageIds(): ?array {
        $val = $this->getBackingStore()->get('messageIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'messageIds'");
    }

    /**
     * Gets the targetChatIds property value. The targetChatIds property
     * @return array<string>|null
    */
    public function getTargetChatIds(): ?array {
        $val = $this->getBackingStore()->get('targetChatIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetChatIds'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('additionalMessage', $this->getAdditionalMessage());
        $writer->writeCollectionOfPrimitiveValues('messageIds', $this->getMessageIds());
        $writer->writeCollectionOfPrimitiveValues('targetChatIds', $this->getTargetChatIds());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the additionalMessage property value. The additionalMessage property
     * @param ChatMessage|null $value Value to set for the additionalMessage property.
    */
    public function setAdditionalMessage(?ChatMessage $value): void {
        $this->getBackingStore()->set('additionalMessage', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the messageIds property value. The messageIds property
     * @param array<string>|null $value Value to set for the messageIds property.
    */
    public function setMessageIds(?array $value): void {
        $this->getBackingStore()->set('messageIds', $value);
    }

    /**
     * Sets the targetChatIds property value. The targetChatIds property
     * @param array<string>|null $value Value to set for the targetChatIds property.
    */
    public function setTargetChatIds(?array $value): void {
        $this->getBackingStore()->set('targetChatIds', $value);
    }

}

<?php

namespace Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamDefinition\PrimaryChannel\Messages\ReplyWithQuote;

use Microsoft\Graph\Beta\Generated\Models\ChatMessage;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ReplyWithQuotePostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ReplyWithQuotePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ReplyWithQuotePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ReplyWithQuotePostRequestBody {
        return new ReplyWithQuotePostRequestBody();
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
            'messageIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setMessageIds($val);
            },
            'replyMessage' => fn(ParseNode $n) => $o->setReplyMessage($n->getObjectValue([ChatMessage::class, 'createFromDiscriminatorValue'])),
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
     * Gets the replyMessage property value. The replyMessage property
     * @return ChatMessage|null
    */
    public function getReplyMessage(): ?ChatMessage {
        $val = $this->getBackingStore()->get('replyMessage');
        if (is_null($val) || $val instanceof ChatMessage) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'replyMessage'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('messageIds', $this->getMessageIds());
        $writer->writeObjectValue('replyMessage', $this->getReplyMessage());
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
     * Sets the replyMessage property value. The replyMessage property
     * @param ChatMessage|null $value Value to set for the replyMessage property.
    */
    public function setReplyMessage(?ChatMessage $value): void {
        $this->getBackingStore()->set('replyMessage', $value);
    }

}

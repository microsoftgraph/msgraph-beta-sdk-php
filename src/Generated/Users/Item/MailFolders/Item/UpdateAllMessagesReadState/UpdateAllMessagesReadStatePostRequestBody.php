<?php

namespace Microsoft\\Graph\\Beta\\Generated\Users\Item\MailFolders\Item\UpdateAllMessagesReadState;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class UpdateAllMessagesReadStatePostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new UpdateAllMessagesReadStatePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateAllMessagesReadStatePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateAllMessagesReadStatePostRequestBody {
        return new UpdateAllMessagesReadStatePostRequestBody();
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
            'isRead' => fn(ParseNode $n) => $o->setIsRead($n->getBooleanValue()),
            'suppressReadReceipts' => fn(ParseNode $n) => $o->setSuppressReadReceipts($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the isRead property value. The isRead property
     * @return bool|null
    */
    public function getIsRead(): ?bool {
        $val = $this->getBackingStore()->get('isRead');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isRead'");
    }

    /**
     * Gets the suppressReadReceipts property value. The suppressReadReceipts property
     * @return bool|null
    */
    public function getSuppressReadReceipts(): ?bool {
        $val = $this->getBackingStore()->get('suppressReadReceipts');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'suppressReadReceipts'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('isRead', $this->getIsRead());
        $writer->writeBooleanValue('suppressReadReceipts', $this->getSuppressReadReceipts());
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
     * Sets the isRead property value. The isRead property
     * @param bool|null $value Value to set for the isRead property.
    */
    public function setIsRead(?bool $value): void {
        $this->getBackingStore()->set('isRead', $value);
    }

    /**
     * Sets the suppressReadReceipts property value. The suppressReadReceipts property
     * @param bool|null $value Value to set for the suppressReadReceipts property.
    */
    public function setSuppressReadReceipts(?bool $value): void {
        $this->getBackingStore()->set('suppressReadReceipts', $value);
    }

}

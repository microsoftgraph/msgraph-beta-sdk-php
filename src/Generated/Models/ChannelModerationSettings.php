<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ChannelModerationSettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new channelModerationSettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChannelModerationSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ChannelModerationSettings {
        return new ChannelModerationSettings();
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
     * Gets the allowNewMessageFromBots property value. Indicates whether bots are allowed to post messages.
     * @return bool|null
    */
    public function getAllowNewMessageFromBots(): ?bool {
        $val = $this->getBackingStore()->get('allowNewMessageFromBots');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowNewMessageFromBots'");
    }

    /**
     * Gets the allowNewMessageFromConnectors property value. Indicates whether connectors are allowed to post messages.
     * @return bool|null
    */
    public function getAllowNewMessageFromConnectors(): ?bool {
        $val = $this->getBackingStore()->get('allowNewMessageFromConnectors');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowNewMessageFromConnectors'");
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
            'allowNewMessageFromBots' => fn(ParseNode $n) => $o->setAllowNewMessageFromBots($n->getBooleanValue()),
            'allowNewMessageFromConnectors' => fn(ParseNode $n) => $o->setAllowNewMessageFromConnectors($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'replyRestriction' => fn(ParseNode $n) => $o->setReplyRestriction($n->getEnumValue(ReplyRestriction::class)),
            'userNewMessageRestriction' => fn(ParseNode $n) => $o->setUserNewMessageRestriction($n->getEnumValue(UserNewMessageRestriction::class)),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the replyRestriction property value. Indicates who is allowed to reply to the teams channel. Possible values are: everyone, authorAndModerators, unknownFutureValue.
     * @return ReplyRestriction|null
    */
    public function getReplyRestriction(): ?ReplyRestriction {
        $val = $this->getBackingStore()->get('replyRestriction');
        if (is_null($val) || $val instanceof ReplyRestriction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'replyRestriction'");
    }

    /**
     * Gets the userNewMessageRestriction property value. Indicates who is allowed to post messages to teams channel. Possible values are: everyone, everyoneExceptGuests, moderators, unknownFutureValue.
     * @return UserNewMessageRestriction|null
    */
    public function getUserNewMessageRestriction(): ?UserNewMessageRestriction {
        $val = $this->getBackingStore()->get('userNewMessageRestriction');
        if (is_null($val) || $val instanceof UserNewMessageRestriction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userNewMessageRestriction'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowNewMessageFromBots', $this->getAllowNewMessageFromBots());
        $writer->writeBooleanValue('allowNewMessageFromConnectors', $this->getAllowNewMessageFromConnectors());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('replyRestriction', $this->getReplyRestriction());
        $writer->writeEnumValue('userNewMessageRestriction', $this->getUserNewMessageRestriction());
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
     * Sets the allowNewMessageFromBots property value. Indicates whether bots are allowed to post messages.
     * @param bool|null $value Value to set for the allowNewMessageFromBots property.
    */
    public function setAllowNewMessageFromBots(?bool $value): void {
        $this->getBackingStore()->set('allowNewMessageFromBots', $value);
    }

    /**
     * Sets the allowNewMessageFromConnectors property value. Indicates whether connectors are allowed to post messages.
     * @param bool|null $value Value to set for the allowNewMessageFromConnectors property.
    */
    public function setAllowNewMessageFromConnectors(?bool $value): void {
        $this->getBackingStore()->set('allowNewMessageFromConnectors', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the replyRestriction property value. Indicates who is allowed to reply to the teams channel. Possible values are: everyone, authorAndModerators, unknownFutureValue.
     * @param ReplyRestriction|null $value Value to set for the replyRestriction property.
    */
    public function setReplyRestriction(?ReplyRestriction $value): void {
        $this->getBackingStore()->set('replyRestriction', $value);
    }

    /**
     * Sets the userNewMessageRestriction property value. Indicates who is allowed to post messages to teams channel. Possible values are: everyone, everyoneExceptGuests, moderators, unknownFutureValue.
     * @param UserNewMessageRestriction|null $value Value to set for the userNewMessageRestriction property.
    */
    public function setUserNewMessageRestriction(?UserNewMessageRestriction $value): void {
        $this->getBackingStore()->set('userNewMessageRestriction', $value);
    }

}

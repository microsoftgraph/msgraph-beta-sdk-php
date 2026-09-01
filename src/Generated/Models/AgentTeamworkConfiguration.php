<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AgentTeamworkConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AgentTeamworkConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AgentTeamworkConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AgentTeamworkConfiguration {
        return new AgentTeamworkConfiguration();
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
     * Gets the channelConfiguration property value. The message notification settings that the agent uses in channels.
     * @return AgentConversationConfiguration|null
    */
    public function getChannelConfiguration(): ?AgentConversationConfiguration {
        $val = $this->getBackingStore()->get('channelConfiguration');
        if (is_null($val) || $val instanceof AgentConversationConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'channelConfiguration'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'channelConfiguration' => fn(ParseNode $n) => $o->setChannelConfiguration($n->getObjectValue([AgentConversationConfiguration::class, 'createFromDiscriminatorValue'])),
            'groupChatConfiguration' => fn(ParseNode $n) => $o->setGroupChatConfiguration($n->getObjectValue([AgentConversationConfiguration::class, 'createFromDiscriminatorValue'])),
            'meetingChatConfiguration' => fn(ParseNode $n) => $o->setMeetingChatConfiguration($n->getObjectValue([AgentConversationConfiguration::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'oneOnOneChatConfiguration' => fn(ParseNode $n) => $o->setOneOnOneChatConfiguration($n->getObjectValue([AgentConversationConfiguration::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the groupChatConfiguration property value. The message notification settings that the agent uses in group chats.
     * @return AgentConversationConfiguration|null
    */
    public function getGroupChatConfiguration(): ?AgentConversationConfiguration {
        $val = $this->getBackingStore()->get('groupChatConfiguration');
        if (is_null($val) || $val instanceof AgentConversationConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupChatConfiguration'");
    }

    /**
     * Gets the meetingChatConfiguration property value. The message notification settings that the agent uses in meeting chats.
     * @return AgentConversationConfiguration|null
    */
    public function getMeetingChatConfiguration(): ?AgentConversationConfiguration {
        $val = $this->getBackingStore()->get('meetingChatConfiguration');
        if (is_null($val) || $val instanceof AgentConversationConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'meetingChatConfiguration'");
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
     * Gets the oneOnOneChatConfiguration property value. The message notification settings that the agent uses in one-on-one chats.
     * @return AgentConversationConfiguration|null
    */
    public function getOneOnOneChatConfiguration(): ?AgentConversationConfiguration {
        $val = $this->getBackingStore()->get('oneOnOneChatConfiguration');
        if (is_null($val) || $val instanceof AgentConversationConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'oneOnOneChatConfiguration'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('channelConfiguration', $this->getChannelConfiguration());
        $writer->writeObjectValue('groupChatConfiguration', $this->getGroupChatConfiguration());
        $writer->writeObjectValue('meetingChatConfiguration', $this->getMeetingChatConfiguration());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('oneOnOneChatConfiguration', $this->getOneOnOneChatConfiguration());
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
     * Sets the channelConfiguration property value. The message notification settings that the agent uses in channels.
     * @param AgentConversationConfiguration|null $value Value to set for the channelConfiguration property.
    */
    public function setChannelConfiguration(?AgentConversationConfiguration $value): void {
        $this->getBackingStore()->set('channelConfiguration', $value);
    }

    /**
     * Sets the groupChatConfiguration property value. The message notification settings that the agent uses in group chats.
     * @param AgentConversationConfiguration|null $value Value to set for the groupChatConfiguration property.
    */
    public function setGroupChatConfiguration(?AgentConversationConfiguration $value): void {
        $this->getBackingStore()->set('groupChatConfiguration', $value);
    }

    /**
     * Sets the meetingChatConfiguration property value. The message notification settings that the agent uses in meeting chats.
     * @param AgentConversationConfiguration|null $value Value to set for the meetingChatConfiguration property.
    */
    public function setMeetingChatConfiguration(?AgentConversationConfiguration $value): void {
        $this->getBackingStore()->set('meetingChatConfiguration', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the oneOnOneChatConfiguration property value. The message notification settings that the agent uses in one-on-one chats.
     * @param AgentConversationConfiguration|null $value Value to set for the oneOnOneChatConfiguration property.
    */
    public function setOneOnOneChatConfiguration(?AgentConversationConfiguration $value): void {
        $this->getBackingStore()->set('oneOnOneChatConfiguration', $value);
    }

}

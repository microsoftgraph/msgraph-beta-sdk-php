<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ChannelModerationSettings implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $allowNewMessageFromBots Indicates whether bots are allowed to post messages.
    */
    private ?bool $allowNewMessageFromBots = null;
    
    /**
     * @var bool|null $allowNewMessageFromConnectors Indicates whether connectors are allowed to post messages.
    */
    private ?bool $allowNewMessageFromConnectors = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var ReplyRestriction|null $replyRestriction Indicates who is allowed to reply to the teams channel. Possible values are: everyone, authorAndModerators, unknownFutureValue.
    */
    private ?ReplyRestriction $replyRestriction = null;
    
    /**
     * @var UserNewMessageRestriction|null $userNewMessageRestriction Indicates who is allowed to post messages to teams channel. Possible values are: everyone, everyoneExceptGuests, moderators, unknownFutureValue.
    */
    private ?UserNewMessageRestriction $userNewMessageRestriction = null;
    
    /**
     * Instantiates a new channelModerationSettings and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.channelModerationSettings');
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the allowNewMessageFromBots property value. Indicates whether bots are allowed to post messages.
     * @return bool|null
    */
    public function getAllowNewMessageFromBots(): ?bool {
        return $this->allowNewMessageFromBots;
    }

    /**
     * Gets the allowNewMessageFromConnectors property value. Indicates whether connectors are allowed to post messages.
     * @return bool|null
    */
    public function getAllowNewMessageFromConnectors(): ?bool {
        return $this->allowNewMessageFromConnectors;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowNewMessageFromBots' => function (ParseNode $n) use ($o) { $o->setAllowNewMessageFromBots($n->getBooleanValue()); },
            'allowNewMessageFromConnectors' => function (ParseNode $n) use ($o) { $o->setAllowNewMessageFromConnectors($n->getBooleanValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'replyRestriction' => function (ParseNode $n) use ($o) { $o->setReplyRestriction($n->getEnumValue(ReplyRestriction::class)); },
            'userNewMessageRestriction' => function (ParseNode $n) use ($o) { $o->setUserNewMessageRestriction($n->getEnumValue(UserNewMessageRestriction::class)); },
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the replyRestriction property value. Indicates who is allowed to reply to the teams channel. Possible values are: everyone, authorAndModerators, unknownFutureValue.
     * @return ReplyRestriction|null
    */
    public function getReplyRestriction(): ?ReplyRestriction {
        return $this->replyRestriction;
    }

    /**
     * Gets the userNewMessageRestriction property value. Indicates who is allowed to post messages to teams channel. Possible values are: everyone, everyoneExceptGuests, moderators, unknownFutureValue.
     * @return UserNewMessageRestriction|null
    */
    public function getUserNewMessageRestriction(): ?UserNewMessageRestriction {
        return $this->userNewMessageRestriction;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowNewMessageFromBots', $this->allowNewMessageFromBots);
        $writer->writeBooleanValue('allowNewMessageFromConnectors', $this->allowNewMessageFromConnectors);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeEnumValue('replyRestriction', $this->replyRestriction);
        $writer->writeEnumValue('userNewMessageRestriction', $this->userNewMessageRestriction);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the allowNewMessageFromBots property value. Indicates whether bots are allowed to post messages.
     *  @param bool|null $value Value to set for the allowNewMessageFromBots property.
    */
    public function setAllowNewMessageFromBots(?bool $value ): void {
        $this->allowNewMessageFromBots = $value;
    }

    /**
     * Sets the allowNewMessageFromConnectors property value. Indicates whether connectors are allowed to post messages.
     *  @param bool|null $value Value to set for the allowNewMessageFromConnectors property.
    */
    public function setAllowNewMessageFromConnectors(?bool $value ): void {
        $this->allowNewMessageFromConnectors = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the replyRestriction property value. Indicates who is allowed to reply to the teams channel. Possible values are: everyone, authorAndModerators, unknownFutureValue.
     *  @param ReplyRestriction|null $value Value to set for the replyRestriction property.
    */
    public function setReplyRestriction(?ReplyRestriction $value ): void {
        $this->replyRestriction = $value;
    }

    /**
     * Sets the userNewMessageRestriction property value. Indicates who is allowed to post messages to teams channel. Possible values are: everyone, everyoneExceptGuests, moderators, unknownFutureValue.
     *  @param UserNewMessageRestriction|null $value Value to set for the userNewMessageRestriction property.
    */
    public function setUserNewMessageRestriction(?UserNewMessageRestriction $value ): void {
        $this->userNewMessageRestriction = $value;
    }

}

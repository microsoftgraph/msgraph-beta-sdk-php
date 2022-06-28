<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamworkConversationIdentity extends Identity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var TeamworkConversationIdentityType|null $conversationIdentityType Type of conversation. Possible values are: team, channel, and chat.
    */
    private ?TeamworkConversationIdentityType $conversationIdentityType = null;
    
    /**
     * Instantiates a new TeamworkConversationIdentity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkConversationIdentity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkConversationIdentity {
        return new TeamworkConversationIdentity();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the conversationIdentityType property value. Type of conversation. Possible values are: team, channel, and chat.
     * @return TeamworkConversationIdentityType|null
    */
    public function getConversationIdentityType(): ?TeamworkConversationIdentityType {
        return $this->conversationIdentityType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'conversationIdentityType' => function (ParseNode $n) use ($o) { $o->setConversationIdentityType($n->getEnumValue(TeamworkConversationIdentityType::class)); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('conversationIdentityType', $this->conversationIdentityType);
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
     * Sets the conversationIdentityType property value. Type of conversation. Possible values are: team, channel, and chat.
     *  @param TeamworkConversationIdentityType|null $value Value to set for the conversationIdentityType property.
    */
    public function setConversationIdentityType(?TeamworkConversationIdentityType $value ): void {
        $this->conversationIdentityType = $value;
    }

}

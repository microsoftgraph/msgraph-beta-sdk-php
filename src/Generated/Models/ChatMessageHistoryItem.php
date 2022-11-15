<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ChatMessageHistoryItem implements AdditionalDataHolder, Parsable 
{
    /**
     * @var ChatMessageActions|null $actions The actions property
    */
    private ?ChatMessageActions $actions = null;
    
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DateTime|null $modifiedDateTime The modifiedDateTime property
    */
    private ?DateTime $modifiedDateTime = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var ChatMessageReaction|null $reaction The reaction property
    */
    private ?ChatMessageReaction $reaction = null;
    
    /**
     * Instantiates a new chatMessageHistoryItem and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.chatMessageHistoryItem');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChatMessageHistoryItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ChatMessageHistoryItem {
        return new ChatMessageHistoryItem();
    }

    /**
     * Gets the actions property value. The actions property
     * @return ChatMessageActions|null
    */
    public function getActions(): ?ChatMessageActions {
        return $this->actions;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'actions' => fn(ParseNode $n) => $o->setActions($n->getEnumValue(ChatMessageActions::class)),
            'modifiedDateTime' => fn(ParseNode $n) => $o->setModifiedDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'reaction' => fn(ParseNode $n) => $o->setReaction($n->getObjectValue([ChatMessageReaction::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the modifiedDateTime property value. The modifiedDateTime property
     * @return DateTime|null
    */
    public function getModifiedDateTime(): ?DateTime {
        return $this->modifiedDateTime;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the reaction property value. The reaction property
     * @return ChatMessageReaction|null
    */
    public function getReaction(): ?ChatMessageReaction {
        return $this->reaction;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('actions', $this->actions);
        $writer->writeDateTimeValue('modifiedDateTime', $this->modifiedDateTime);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeObjectValue('reaction', $this->reaction);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the actions property value. The actions property
     *  @param ChatMessageActions|null $value Value to set for the actions property.
    */
    public function setActions(?ChatMessageActions $value ): void {
        $this->actions = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the modifiedDateTime property value. The modifiedDateTime property
     *  @param DateTime|null $value Value to set for the modifiedDateTime property.
    */
    public function setModifiedDateTime(?DateTime $value ): void {
        $this->modifiedDateTime = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the reaction property value. The reaction property
     *  @param ChatMessageReaction|null $value Value to set for the reaction property.
    */
    public function setReaction(?ChatMessageReaction $value ): void {
        $this->reaction = $value;
    }

}

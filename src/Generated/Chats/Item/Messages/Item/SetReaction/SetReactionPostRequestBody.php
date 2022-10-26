<?php

namespace Microsoft\Graph\Beta\Generated\Chats\Item\Messages\Item\SetReaction;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SetReactionPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $reactionType The reactionType property
    */
    private ?string $reactionType = null;
    
    /**
     * Instantiates a new setReactionPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SetReactionPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SetReactionPostRequestBody {
        return new SetReactionPostRequestBody();
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
            'reactionType' => fn(ParseNode $n) => $o->setReactionType($n->getStringValue()),
        ];
    }

    /**
     * Gets the reactionType property value. The reactionType property
     * @return string|null
    */
    public function getReactionType(): ?string {
        return $this->reactionType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('reactionType', $this->reactionType);
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
     * Sets the reactionType property value. The reactionType property
     *  @param string|null $value Value to set for the reactionType property.
    */
    public function setReactionType(?string $value ): void {
        $this->reactionType = $value;
    }

}

<?php

namespace Microsoft\Graph\Beta\Generated\Teams\Item\Schedule\TimeCards\ClockIn;

use Microsoft\Graph\Beta\Generated\Models\ItemBody;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ClockInRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var bool|null $atApprovedLocation The atApprovedLocation property */
    private ?bool $atApprovedLocation = null;
    
    /** @var ItemBody|null $notes The notes property */
    private ?ItemBody $notes = null;
    
    /** @var string|null $onBehalfOfUserId The onBehalfOfUserId property */
    private ?string $onBehalfOfUserId = null;
    
    /**
     * Instantiates a new clockInRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ClockInRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ClockInRequestBody {
        return new ClockInRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the atApprovedLocation property value. The atApprovedLocation property
     * @return bool|null
    */
    public function getAtApprovedLocation(): ?bool {
        return $this->atApprovedLocation;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'atApprovedLocation' => function (self $o, ParseNode $n) { $o->setAtApprovedLocation($n->getBooleanValue()); },
            'notes' => function (self $o, ParseNode $n) { $o->setNotes($n->getObjectValue(ItemBody::class)); },
            'onBehalfOfUserId' => function (self $o, ParseNode $n) { $o->setOnBehalfOfUserId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the notes property value. The notes property
     * @return ItemBody|null
    */
    public function getNotes(): ?ItemBody {
        return $this->notes;
    }

    /**
     * Gets the onBehalfOfUserId property value. The onBehalfOfUserId property
     * @return string|null
    */
    public function getOnBehalfOfUserId(): ?string {
        return $this->onBehalfOfUserId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('atApprovedLocation', $this->atApprovedLocation);
        $writer->writeObjectValue('notes', $this->notes);
        $writer->writeStringValue('onBehalfOfUserId', $this->onBehalfOfUserId);
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
     * Sets the atApprovedLocation property value. The atApprovedLocation property
     *  @param bool|null $value Value to set for the atApprovedLocation property.
    */
    public function setAtApprovedLocation(?bool $value ): void {
        $this->atApprovedLocation = $value;
    }

    /**
     * Sets the notes property value. The notes property
     *  @param ItemBody|null $value Value to set for the notes property.
    */
    public function setNotes(?ItemBody $value ): void {
        $this->notes = $value;
    }

    /**
     * Sets the onBehalfOfUserId property value. The onBehalfOfUserId property
     *  @param string|null $value Value to set for the onBehalfOfUserId property.
    */
    public function setOnBehalfOfUserId(?string $value ): void {
        $this->onBehalfOfUserId = $value;
    }

}

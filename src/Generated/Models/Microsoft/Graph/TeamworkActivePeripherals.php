<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamworkActivePeripherals implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var TeamworkPeripheral|null $communicationSpeaker  */
    private ?TeamworkPeripheral $communicationSpeaker = null;
    
    /** @var TeamworkPeripheral|null $contentCamera  */
    private ?TeamworkPeripheral $contentCamera = null;
    
    /** @var TeamworkPeripheral|null $microphone  */
    private ?TeamworkPeripheral $microphone = null;
    
    /** @var TeamworkPeripheral|null $roomCamera  */
    private ?TeamworkPeripheral $roomCamera = null;
    
    /** @var TeamworkPeripheral|null $speaker  */
    private ?TeamworkPeripheral $speaker = null;
    
    /**
     * Instantiates a new teamworkActivePeripherals and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkActivePeripherals
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkActivePeripherals {
        return new TeamworkActivePeripherals();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the communicationSpeaker property value. 
     * @return TeamworkPeripheral|null
    */
    public function getCommunicationSpeaker(): ?TeamworkPeripheral {
        return $this->communicationSpeaker;
    }

    /**
     * Gets the contentCamera property value. 
     * @return TeamworkPeripheral|null
    */
    public function getContentCamera(): ?TeamworkPeripheral {
        return $this->contentCamera;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'communicationSpeaker' => function (self $o, ParseNode $n) { $o->setCommunicationSpeaker($n->getObjectValue(TeamworkPeripheral::class)); },
            'contentCamera' => function (self $o, ParseNode $n) { $o->setContentCamera($n->getObjectValue(TeamworkPeripheral::class)); },
            'microphone' => function (self $o, ParseNode $n) { $o->setMicrophone($n->getObjectValue(TeamworkPeripheral::class)); },
            'roomCamera' => function (self $o, ParseNode $n) { $o->setRoomCamera($n->getObjectValue(TeamworkPeripheral::class)); },
            'speaker' => function (self $o, ParseNode $n) { $o->setSpeaker($n->getObjectValue(TeamworkPeripheral::class)); },
        ];
    }

    /**
     * Gets the microphone property value. 
     * @return TeamworkPeripheral|null
    */
    public function getMicrophone(): ?TeamworkPeripheral {
        return $this->microphone;
    }

    /**
     * Gets the roomCamera property value. 
     * @return TeamworkPeripheral|null
    */
    public function getRoomCamera(): ?TeamworkPeripheral {
        return $this->roomCamera;
    }

    /**
     * Gets the speaker property value. 
     * @return TeamworkPeripheral|null
    */
    public function getSpeaker(): ?TeamworkPeripheral {
        return $this->speaker;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('communicationSpeaker', $this->communicationSpeaker);
        $writer->writeObjectValue('contentCamera', $this->contentCamera);
        $writer->writeObjectValue('microphone', $this->microphone);
        $writer->writeObjectValue('roomCamera', $this->roomCamera);
        $writer->writeObjectValue('speaker', $this->speaker);
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
     * Sets the communicationSpeaker property value. 
     *  @param TeamworkPeripheral|null $value Value to set for the communicationSpeaker property.
    */
    public function setCommunicationSpeaker(?TeamworkPeripheral $value ): void {
        $this->communicationSpeaker = $value;
    }

    /**
     * Sets the contentCamera property value. 
     *  @param TeamworkPeripheral|null $value Value to set for the contentCamera property.
    */
    public function setContentCamera(?TeamworkPeripheral $value ): void {
        $this->contentCamera = $value;
    }

    /**
     * Sets the microphone property value. 
     *  @param TeamworkPeripheral|null $value Value to set for the microphone property.
    */
    public function setMicrophone(?TeamworkPeripheral $value ): void {
        $this->microphone = $value;
    }

    /**
     * Sets the roomCamera property value. 
     *  @param TeamworkPeripheral|null $value Value to set for the roomCamera property.
    */
    public function setRoomCamera(?TeamworkPeripheral $value ): void {
        $this->roomCamera = $value;
    }

    /**
     * Sets the speaker property value. 
     *  @param TeamworkPeripheral|null $value Value to set for the speaker property.
    */
    public function setSpeaker(?TeamworkPeripheral $value ): void {
        $this->speaker = $value;
    }

}

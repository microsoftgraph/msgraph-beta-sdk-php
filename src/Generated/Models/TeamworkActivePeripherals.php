<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamworkActivePeripherals implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var TeamworkPeripheral|null $communicationSpeaker The communicationSpeaker property
    */
    private ?TeamworkPeripheral $communicationSpeaker = null;
    
    /**
     * @var TeamworkPeripheral|null $contentCamera The contentCamera property
    */
    private ?TeamworkPeripheral $contentCamera = null;
    
    /**
     * @var TeamworkPeripheral|null $microphone The microphone property
    */
    private ?TeamworkPeripheral $microphone = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var TeamworkPeripheral|null $roomCamera The roomCamera property
    */
    private ?TeamworkPeripheral $roomCamera = null;
    
    /**
     * @var TeamworkPeripheral|null $speaker The speaker property
    */
    private ?TeamworkPeripheral $speaker = null;
    
    /**
     * Instantiates a new teamworkActivePeripherals and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.teamworkActivePeripherals');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkActivePeripherals
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkActivePeripherals {
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
     * Gets the communicationSpeaker property value. The communicationSpeaker property
     * @return TeamworkPeripheral|null
    */
    public function getCommunicationSpeaker(): ?TeamworkPeripheral {
        return $this->communicationSpeaker;
    }

    /**
     * Gets the contentCamera property value. The contentCamera property
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
        $o = $this;
        return  [
            'communicationSpeaker' => fn(ParseNode $n) => $o->setCommunicationSpeaker($n->getObjectValue([TeamworkPeripheral::class, 'createFromDiscriminatorValue'])),
            'contentCamera' => fn(ParseNode $n) => $o->setContentCamera($n->getObjectValue([TeamworkPeripheral::class, 'createFromDiscriminatorValue'])),
            'microphone' => fn(ParseNode $n) => $o->setMicrophone($n->getObjectValue([TeamworkPeripheral::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'roomCamera' => fn(ParseNode $n) => $o->setRoomCamera($n->getObjectValue([TeamworkPeripheral::class, 'createFromDiscriminatorValue'])),
            'speaker' => fn(ParseNode $n) => $o->setSpeaker($n->getObjectValue([TeamworkPeripheral::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the microphone property value. The microphone property
     * @return TeamworkPeripheral|null
    */
    public function getMicrophone(): ?TeamworkPeripheral {
        return $this->microphone;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the roomCamera property value. The roomCamera property
     * @return TeamworkPeripheral|null
    */
    public function getRoomCamera(): ?TeamworkPeripheral {
        return $this->roomCamera;
    }

    /**
     * Gets the speaker property value. The speaker property
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
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the communicationSpeaker property value. The communicationSpeaker property
     *  @param TeamworkPeripheral|null $value Value to set for the communicationSpeaker property.
    */
    public function setCommunicationSpeaker(?TeamworkPeripheral $value ): void {
        $this->communicationSpeaker = $value;
    }

    /**
     * Sets the contentCamera property value. The contentCamera property
     *  @param TeamworkPeripheral|null $value Value to set for the contentCamera property.
    */
    public function setContentCamera(?TeamworkPeripheral $value ): void {
        $this->contentCamera = $value;
    }

    /**
     * Sets the microphone property value. The microphone property
     *  @param TeamworkPeripheral|null $value Value to set for the microphone property.
    */
    public function setMicrophone(?TeamworkPeripheral $value ): void {
        $this->microphone = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the roomCamera property value. The roomCamera property
     *  @param TeamworkPeripheral|null $value Value to set for the roomCamera property.
    */
    public function setRoomCamera(?TeamworkPeripheral $value ): void {
        $this->roomCamera = $value;
    }

    /**
     * Sets the speaker property value. The speaker property
     *  @param TeamworkPeripheral|null $value Value to set for the speaker property.
    */
    public function setSpeaker(?TeamworkPeripheral $value ): void {
        $this->speaker = $value;
    }

}

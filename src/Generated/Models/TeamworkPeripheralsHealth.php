<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamworkPeripheralsHealth implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var TeamworkPeripheralHealth|null $communicationSpeakerHealth The health details about the communication speaker.
    */
    private ?TeamworkPeripheralHealth $communicationSpeakerHealth = null;
    
    /**
     * @var TeamworkPeripheralHealth|null $contentCameraHealth The health details about the content camera.
    */
    private ?TeamworkPeripheralHealth $contentCameraHealth = null;
    
    /**
     * @var array<TeamworkPeripheralHealth>|null $displayHealthCollection The health details about displays.
    */
    private ?array $displayHealthCollection = null;
    
    /**
     * @var TeamworkPeripheralHealth|null $microphoneHealth The health details about the microphone.
    */
    private ?TeamworkPeripheralHealth $microphoneHealth = null;
    
    /**
     * @var TeamworkPeripheralHealth|null $roomCameraHealth The health details about the room camera.
    */
    private ?TeamworkPeripheralHealth $roomCameraHealth = null;
    
    /**
     * @var TeamworkPeripheralHealth|null $speakerHealth The health details about the speaker.
    */
    private ?TeamworkPeripheralHealth $speakerHealth = null;
    
    /**
     * Instantiates a new teamworkPeripheralsHealth and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkPeripheralsHealth
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkPeripheralsHealth {
        return new TeamworkPeripheralsHealth();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the communicationSpeakerHealth property value. The health details about the communication speaker.
     * @return TeamworkPeripheralHealth|null
    */
    public function getCommunicationSpeakerHealth(): ?TeamworkPeripheralHealth {
        return $this->communicationSpeakerHealth;
    }

    /**
     * Gets the contentCameraHealth property value. The health details about the content camera.
     * @return TeamworkPeripheralHealth|null
    */
    public function getContentCameraHealth(): ?TeamworkPeripheralHealth {
        return $this->contentCameraHealth;
    }

    /**
     * Gets the displayHealthCollection property value. The health details about displays.
     * @return array<TeamworkPeripheralHealth>|null
    */
    public function getDisplayHealthCollection(): ?array {
        return $this->displayHealthCollection;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'communicationSpeakerHealth' => function (ParseNode $n) use ($o) { $o->setCommunicationSpeakerHealth($n->getObjectValue(array(TeamworkPeripheralHealth::class, 'createFromDiscriminatorValue'))); },
            'contentCameraHealth' => function (ParseNode $n) use ($o) { $o->setContentCameraHealth($n->getObjectValue(array(TeamworkPeripheralHealth::class, 'createFromDiscriminatorValue'))); },
            'displayHealthCollection' => function (ParseNode $n) use ($o) { $o->setDisplayHealthCollection($n->getCollectionOfObjectValues(array(TeamworkPeripheralHealth::class, 'createFromDiscriminatorValue'))); },
            'microphoneHealth' => function (ParseNode $n) use ($o) { $o->setMicrophoneHealth($n->getObjectValue(array(TeamworkPeripheralHealth::class, 'createFromDiscriminatorValue'))); },
            'roomCameraHealth' => function (ParseNode $n) use ($o) { $o->setRoomCameraHealth($n->getObjectValue(array(TeamworkPeripheralHealth::class, 'createFromDiscriminatorValue'))); },
            'speakerHealth' => function (ParseNode $n) use ($o) { $o->setSpeakerHealth($n->getObjectValue(array(TeamworkPeripheralHealth::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the microphoneHealth property value. The health details about the microphone.
     * @return TeamworkPeripheralHealth|null
    */
    public function getMicrophoneHealth(): ?TeamworkPeripheralHealth {
        return $this->microphoneHealth;
    }

    /**
     * Gets the roomCameraHealth property value. The health details about the room camera.
     * @return TeamworkPeripheralHealth|null
    */
    public function getRoomCameraHealth(): ?TeamworkPeripheralHealth {
        return $this->roomCameraHealth;
    }

    /**
     * Gets the speakerHealth property value. The health details about the speaker.
     * @return TeamworkPeripheralHealth|null
    */
    public function getSpeakerHealth(): ?TeamworkPeripheralHealth {
        return $this->speakerHealth;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('communicationSpeakerHealth', $this->communicationSpeakerHealth);
        $writer->writeObjectValue('contentCameraHealth', $this->contentCameraHealth);
        $writer->writeCollectionOfObjectValues('displayHealthCollection', $this->displayHealthCollection);
        $writer->writeObjectValue('microphoneHealth', $this->microphoneHealth);
        $writer->writeObjectValue('roomCameraHealth', $this->roomCameraHealth);
        $writer->writeObjectValue('speakerHealth', $this->speakerHealth);
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
     * Sets the communicationSpeakerHealth property value. The health details about the communication speaker.
     *  @param TeamworkPeripheralHealth|null $value Value to set for the communicationSpeakerHealth property.
    */
    public function setCommunicationSpeakerHealth(?TeamworkPeripheralHealth $value ): void {
        $this->communicationSpeakerHealth = $value;
    }

    /**
     * Sets the contentCameraHealth property value. The health details about the content camera.
     *  @param TeamworkPeripheralHealth|null $value Value to set for the contentCameraHealth property.
    */
    public function setContentCameraHealth(?TeamworkPeripheralHealth $value ): void {
        $this->contentCameraHealth = $value;
    }

    /**
     * Sets the displayHealthCollection property value. The health details about displays.
     *  @param array<TeamworkPeripheralHealth>|null $value Value to set for the displayHealthCollection property.
    */
    public function setDisplayHealthCollection(?array $value ): void {
        $this->displayHealthCollection = $value;
    }

    /**
     * Sets the microphoneHealth property value. The health details about the microphone.
     *  @param TeamworkPeripheralHealth|null $value Value to set for the microphoneHealth property.
    */
    public function setMicrophoneHealth(?TeamworkPeripheralHealth $value ): void {
        $this->microphoneHealth = $value;
    }

    /**
     * Sets the roomCameraHealth property value. The health details about the room camera.
     *  @param TeamworkPeripheralHealth|null $value Value to set for the roomCameraHealth property.
    */
    public function setRoomCameraHealth(?TeamworkPeripheralHealth $value ): void {
        $this->roomCameraHealth = $value;
    }

    /**
     * Sets the speakerHealth property value. The health details about the speaker.
     *  @param TeamworkPeripheralHealth|null $value Value to set for the speakerHealth property.
    */
    public function setSpeakerHealth(?TeamworkPeripheralHealth $value ): void {
        $this->speakerHealth = $value;
    }

}

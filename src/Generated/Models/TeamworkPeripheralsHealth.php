<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class TeamworkPeripheralsHealth implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new TeamworkPeripheralsHealth and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
     * Gets the communicationSpeakerHealth property value. The health details about the communication speaker.
     * @return TeamworkPeripheralHealth|null
    */
    public function getCommunicationSpeakerHealth(): ?TeamworkPeripheralHealth {
        $val = $this->getBackingStore()->get('communicationSpeakerHealth');
        if (is_null($val) || $val instanceof TeamworkPeripheralHealth) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'communicationSpeakerHealth'");
    }

    /**
     * Gets the contentCameraHealth property value. The health details about the content camera.
     * @return TeamworkPeripheralHealth|null
    */
    public function getContentCameraHealth(): ?TeamworkPeripheralHealth {
        $val = $this->getBackingStore()->get('contentCameraHealth');
        if (is_null($val) || $val instanceof TeamworkPeripheralHealth) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentCameraHealth'");
    }

    /**
     * Gets the displayHealthCollection property value. The health details about displays.
     * @return array<TeamworkPeripheralHealth>|null
    */
    public function getDisplayHealthCollection(): ?array {
        $val = $this->getBackingStore()->get('displayHealthCollection');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TeamworkPeripheralHealth::class);
            /** @var array<TeamworkPeripheralHealth>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayHealthCollection'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'communicationSpeakerHealth' => fn(ParseNode $n) => $o->setCommunicationSpeakerHealth($n->getObjectValue([TeamworkPeripheralHealth::class, 'createFromDiscriminatorValue'])),
            'contentCameraHealth' => fn(ParseNode $n) => $o->setContentCameraHealth($n->getObjectValue([TeamworkPeripheralHealth::class, 'createFromDiscriminatorValue'])),
            'displayHealthCollection' => fn(ParseNode $n) => $o->setDisplayHealthCollection($n->getCollectionOfObjectValues([TeamworkPeripheralHealth::class, 'createFromDiscriminatorValue'])),
            'microphoneHealth' => fn(ParseNode $n) => $o->setMicrophoneHealth($n->getObjectValue([TeamworkPeripheralHealth::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'roomCameraHealth' => fn(ParseNode $n) => $o->setRoomCameraHealth($n->getObjectValue([TeamworkPeripheralHealth::class, 'createFromDiscriminatorValue'])),
            'speakerHealth' => fn(ParseNode $n) => $o->setSpeakerHealth($n->getObjectValue([TeamworkPeripheralHealth::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the microphoneHealth property value. The health details about the microphone.
     * @return TeamworkPeripheralHealth|null
    */
    public function getMicrophoneHealth(): ?TeamworkPeripheralHealth {
        $val = $this->getBackingStore()->get('microphoneHealth');
        if (is_null($val) || $val instanceof TeamworkPeripheralHealth) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'microphoneHealth'");
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
     * Gets the roomCameraHealth property value. The health details about the room camera.
     * @return TeamworkPeripheralHealth|null
    */
    public function getRoomCameraHealth(): ?TeamworkPeripheralHealth {
        $val = $this->getBackingStore()->get('roomCameraHealth');
        if (is_null($val) || $val instanceof TeamworkPeripheralHealth) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roomCameraHealth'");
    }

    /**
     * Gets the speakerHealth property value. The health details about the speaker.
     * @return TeamworkPeripheralHealth|null
    */
    public function getSpeakerHealth(): ?TeamworkPeripheralHealth {
        $val = $this->getBackingStore()->get('speakerHealth');
        if (is_null($val) || $val instanceof TeamworkPeripheralHealth) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'speakerHealth'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('communicationSpeakerHealth', $this->getCommunicationSpeakerHealth());
        $writer->writeObjectValue('contentCameraHealth', $this->getContentCameraHealth());
        $writer->writeCollectionOfObjectValues('displayHealthCollection', $this->getDisplayHealthCollection());
        $writer->writeObjectValue('microphoneHealth', $this->getMicrophoneHealth());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('roomCameraHealth', $this->getRoomCameraHealth());
        $writer->writeObjectValue('speakerHealth', $this->getSpeakerHealth());
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
     * Sets the communicationSpeakerHealth property value. The health details about the communication speaker.
     * @param TeamworkPeripheralHealth|null $value Value to set for the communicationSpeakerHealth property.
    */
    public function setCommunicationSpeakerHealth(?TeamworkPeripheralHealth $value): void {
        $this->getBackingStore()->set('communicationSpeakerHealth', $value);
    }

    /**
     * Sets the contentCameraHealth property value. The health details about the content camera.
     * @param TeamworkPeripheralHealth|null $value Value to set for the contentCameraHealth property.
    */
    public function setContentCameraHealth(?TeamworkPeripheralHealth $value): void {
        $this->getBackingStore()->set('contentCameraHealth', $value);
    }

    /**
     * Sets the displayHealthCollection property value. The health details about displays.
     * @param array<TeamworkPeripheralHealth>|null $value Value to set for the displayHealthCollection property.
    */
    public function setDisplayHealthCollection(?array $value): void {
        $this->getBackingStore()->set('displayHealthCollection', $value);
    }

    /**
     * Sets the microphoneHealth property value. The health details about the microphone.
     * @param TeamworkPeripheralHealth|null $value Value to set for the microphoneHealth property.
    */
    public function setMicrophoneHealth(?TeamworkPeripheralHealth $value): void {
        $this->getBackingStore()->set('microphoneHealth', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the roomCameraHealth property value. The health details about the room camera.
     * @param TeamworkPeripheralHealth|null $value Value to set for the roomCameraHealth property.
    */
    public function setRoomCameraHealth(?TeamworkPeripheralHealth $value): void {
        $this->getBackingStore()->set('roomCameraHealth', $value);
    }

    /**
     * Sets the speakerHealth property value. The health details about the speaker.
     * @param TeamworkPeripheralHealth|null $value Value to set for the speakerHealth property.
    */
    public function setSpeakerHealth(?TeamworkPeripheralHealth $value): void {
        $this->getBackingStore()->set('speakerHealth', $value);
    }

}

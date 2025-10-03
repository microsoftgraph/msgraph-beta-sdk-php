<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class TeamworkActivePeripherals implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new TeamworkActivePeripherals and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
     * Gets the communicationSpeaker property value. The communicationSpeaker property
     * @return TeamworkPeripheral|null
    */
    public function getCommunicationSpeaker(): ?TeamworkPeripheral {
        $val = $this->getBackingStore()->get('communicationSpeaker');
        if (is_null($val) || $val instanceof TeamworkPeripheral) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'communicationSpeaker'");
    }

    /**
     * Gets the contentCamera property value. The contentCamera property
     * @return TeamworkPeripheral|null
    */
    public function getContentCamera(): ?TeamworkPeripheral {
        $val = $this->getBackingStore()->get('contentCamera');
        if (is_null($val) || $val instanceof TeamworkPeripheral) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentCamera'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
        $val = $this->getBackingStore()->get('microphone');
        if (is_null($val) || $val instanceof TeamworkPeripheral) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'microphone'");
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
     * Gets the roomCamera property value. The roomCamera property
     * @return TeamworkPeripheral|null
    */
    public function getRoomCamera(): ?TeamworkPeripheral {
        $val = $this->getBackingStore()->get('roomCamera');
        if (is_null($val) || $val instanceof TeamworkPeripheral) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roomCamera'");
    }

    /**
     * Gets the speaker property value. The speaker property
     * @return TeamworkPeripheral|null
    */
    public function getSpeaker(): ?TeamworkPeripheral {
        $val = $this->getBackingStore()->get('speaker');
        if (is_null($val) || $val instanceof TeamworkPeripheral) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'speaker'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('communicationSpeaker', $this->getCommunicationSpeaker());
        $writer->writeObjectValue('contentCamera', $this->getContentCamera());
        $writer->writeObjectValue('microphone', $this->getMicrophone());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('roomCamera', $this->getRoomCamera());
        $writer->writeObjectValue('speaker', $this->getSpeaker());
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
     * Sets the communicationSpeaker property value. The communicationSpeaker property
     * @param TeamworkPeripheral|null $value Value to set for the communicationSpeaker property.
    */
    public function setCommunicationSpeaker(?TeamworkPeripheral $value): void {
        $this->getBackingStore()->set('communicationSpeaker', $value);
    }

    /**
     * Sets the contentCamera property value. The contentCamera property
     * @param TeamworkPeripheral|null $value Value to set for the contentCamera property.
    */
    public function setContentCamera(?TeamworkPeripheral $value): void {
        $this->getBackingStore()->set('contentCamera', $value);
    }

    /**
     * Sets the microphone property value. The microphone property
     * @param TeamworkPeripheral|null $value Value to set for the microphone property.
    */
    public function setMicrophone(?TeamworkPeripheral $value): void {
        $this->getBackingStore()->set('microphone', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the roomCamera property value. The roomCamera property
     * @param TeamworkPeripheral|null $value Value to set for the roomCamera property.
    */
    public function setRoomCamera(?TeamworkPeripheral $value): void {
        $this->getBackingStore()->set('roomCamera', $value);
    }

    /**
     * Sets the speaker property value. The speaker property
     * @param TeamworkPeripheral|null $value Value to set for the speaker property.
    */
    public function setSpeaker(?TeamworkPeripheral $value): void {
        $this->getBackingStore()->set('speaker', $value);
    }

}

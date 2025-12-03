<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Room extends Place implements Parsable 
{
    /**
     * Instantiates a new Room and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.room');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Room
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Room {
        return new Room();
    }

    /**
     * Gets the audioDeviceName property value. The name of the audio device that is available in the room.
     * @return string|null
    */
    public function getAudioDeviceName(): ?string {
        $val = $this->getBackingStore()->get('audioDeviceName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'audioDeviceName'");
    }

    /**
     * Gets the bookingType property value. Specifies how the room can be booked. Possible values are:unknown - Unspecified booking behavior. We don't recommend that you use this value.standard - Available for general booking.reserved - Reserved for specific users or purposes.
     * @return BookingType|null
    */
    public function getBookingType(): ?BookingType {
        $val = $this->getBackingStore()->get('bookingType');
        if (is_null($val) || $val instanceof BookingType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bookingType'");
    }

    /**
     * Gets the building property value. The name or identifier of the building where the room is located.
     * @return string|null
    */
    public function getBuilding(): ?string {
        $val = $this->getBackingStore()->get('building');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'building'");
    }

    /**
     * Gets the capacity property value. The maximum number of people the room can accommodate.
     * @return int|null
    */
    public function getCapacity(): ?int {
        $val = $this->getBackingStore()->get('capacity');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'capacity'");
    }

    /**
     * Gets the displayDeviceName property value. The name of the display device (for example, monitor or projector) that is available in the room.
     * @return string|null
    */
    public function getDisplayDeviceName(): ?string {
        $val = $this->getBackingStore()->get('displayDeviceName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayDeviceName'");
    }

    /**
     * Gets the emailAddress property value. The email address associated with the room. This email address is used for booking.
     * @return string|null
    */
    public function getEmailAddress(): ?string {
        $val = $this->getBackingStore()->get('emailAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'emailAddress'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'audioDeviceName' => fn(ParseNode $n) => $o->setAudioDeviceName($n->getStringValue()),
            'bookingType' => fn(ParseNode $n) => $o->setBookingType($n->getEnumValue(BookingType::class)),
            'building' => fn(ParseNode $n) => $o->setBuilding($n->getStringValue()),
            'capacity' => fn(ParseNode $n) => $o->setCapacity($n->getIntegerValue()),
            'displayDeviceName' => fn(ParseNode $n) => $o->setDisplayDeviceName($n->getStringValue()),
            'emailAddress' => fn(ParseNode $n) => $o->setEmailAddress($n->getStringValue()),
            'floorLabel' => fn(ParseNode $n) => $o->setFloorLabel($n->getStringValue()),
            'floorNumber' => fn(ParseNode $n) => $o->setFloorNumber($n->getIntegerValue()),
            'isTeamsEnabled' => fn(ParseNode $n) => $o->setIsTeamsEnabled($n->getBooleanValue()),
            'nickname' => fn(ParseNode $n) => $o->setNickname($n->getStringValue()),
            'placeId' => fn(ParseNode $n) => $o->setPlaceId($n->getStringValue()),
            'teamsEnabledState' => fn(ParseNode $n) => $o->setTeamsEnabledState($n->getEnumValue(PlaceFeatureEnablement::class)),
            'videoDeviceName' => fn(ParseNode $n) => $o->setVideoDeviceName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the floorLabel property value. A human-readable label for the floor; for example, Ground Floor.
     * @return string|null
    */
    public function getFloorLabel(): ?string {
        $val = $this->getBackingStore()->get('floorLabel');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'floorLabel'");
    }

    /**
     * Gets the floorNumber property value. The numeric floor level within the building. For example, 1 for first floor, 2 for second floor, and so on.
     * @return int|null
    */
    public function getFloorNumber(): ?int {
        $val = $this->getBackingStore()->get('floorNumber');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'floorNumber'");
    }

    /**
     * Gets the isTeamsEnabled property value. Indicates whether the room is configured with the Microsoft Teams Rooms system.
     * @return bool|null
    */
    public function getIsTeamsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isTeamsEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isTeamsEnabled'");
    }

    /**
     * Gets the nickname property value. A short, friendly name for the room, often used for easier identification or display in UI.
     * @return string|null
    */
    public function getNickname(): ?string {
        $val = $this->getBackingStore()->get('nickname');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'nickname'");
    }

    /**
     * Gets the placeId property value. An alternate immutable unique identifier of the room. Read-only.
     * @return string|null
    */
    public function getPlaceId(): ?string {
        $val = $this->getBackingStore()->get('placeId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'placeId'");
    }

    /**
     * Gets the teamsEnabledState property value. The teamsEnabledState property
     * @return PlaceFeatureEnablement|null
    */
    public function getTeamsEnabledState(): ?PlaceFeatureEnablement {
        $val = $this->getBackingStore()->get('teamsEnabledState');
        if (is_null($val) || $val instanceof PlaceFeatureEnablement) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'teamsEnabledState'");
    }

    /**
     * Gets the videoDeviceName property value. The name of the video device that is available in the room.
     * @return string|null
    */
    public function getVideoDeviceName(): ?string {
        $val = $this->getBackingStore()->get('videoDeviceName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'videoDeviceName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('audioDeviceName', $this->getAudioDeviceName());
        $writer->writeEnumValue('bookingType', $this->getBookingType());
        $writer->writeStringValue('building', $this->getBuilding());
        $writer->writeIntegerValue('capacity', $this->getCapacity());
        $writer->writeStringValue('displayDeviceName', $this->getDisplayDeviceName());
        $writer->writeStringValue('emailAddress', $this->getEmailAddress());
        $writer->writeStringValue('floorLabel', $this->getFloorLabel());
        $writer->writeIntegerValue('floorNumber', $this->getFloorNumber());
        $writer->writeBooleanValue('isTeamsEnabled', $this->getIsTeamsEnabled());
        $writer->writeStringValue('nickname', $this->getNickname());
        $writer->writeStringValue('placeId', $this->getPlaceId());
        $writer->writeEnumValue('teamsEnabledState', $this->getTeamsEnabledState());
        $writer->writeStringValue('videoDeviceName', $this->getVideoDeviceName());
    }

    /**
     * Sets the audioDeviceName property value. The name of the audio device that is available in the room.
     * @param string|null $value Value to set for the audioDeviceName property.
    */
    public function setAudioDeviceName(?string $value): void {
        $this->getBackingStore()->set('audioDeviceName', $value);
    }

    /**
     * Sets the bookingType property value. Specifies how the room can be booked. Possible values are:unknown - Unspecified booking behavior. We don't recommend that you use this value.standard - Available for general booking.reserved - Reserved for specific users or purposes.
     * @param BookingType|null $value Value to set for the bookingType property.
    */
    public function setBookingType(?BookingType $value): void {
        $this->getBackingStore()->set('bookingType', $value);
    }

    /**
     * Sets the building property value. The name or identifier of the building where the room is located.
     * @param string|null $value Value to set for the building property.
    */
    public function setBuilding(?string $value): void {
        $this->getBackingStore()->set('building', $value);
    }

    /**
     * Sets the capacity property value. The maximum number of people the room can accommodate.
     * @param int|null $value Value to set for the capacity property.
    */
    public function setCapacity(?int $value): void {
        $this->getBackingStore()->set('capacity', $value);
    }

    /**
     * Sets the displayDeviceName property value. The name of the display device (for example, monitor or projector) that is available in the room.
     * @param string|null $value Value to set for the displayDeviceName property.
    */
    public function setDisplayDeviceName(?string $value): void {
        $this->getBackingStore()->set('displayDeviceName', $value);
    }

    /**
     * Sets the emailAddress property value. The email address associated with the room. This email address is used for booking.
     * @param string|null $value Value to set for the emailAddress property.
    */
    public function setEmailAddress(?string $value): void {
        $this->getBackingStore()->set('emailAddress', $value);
    }

    /**
     * Sets the floorLabel property value. A human-readable label for the floor; for example, Ground Floor.
     * @param string|null $value Value to set for the floorLabel property.
    */
    public function setFloorLabel(?string $value): void {
        $this->getBackingStore()->set('floorLabel', $value);
    }

    /**
     * Sets the floorNumber property value. The numeric floor level within the building. For example, 1 for first floor, 2 for second floor, and so on.
     * @param int|null $value Value to set for the floorNumber property.
    */
    public function setFloorNumber(?int $value): void {
        $this->getBackingStore()->set('floorNumber', $value);
    }

    /**
     * Sets the isTeamsEnabled property value. Indicates whether the room is configured with the Microsoft Teams Rooms system.
     * @param bool|null $value Value to set for the isTeamsEnabled property.
    */
    public function setIsTeamsEnabled(?bool $value): void {
        $this->getBackingStore()->set('isTeamsEnabled', $value);
    }

    /**
     * Sets the nickname property value. A short, friendly name for the room, often used for easier identification or display in UI.
     * @param string|null $value Value to set for the nickname property.
    */
    public function setNickname(?string $value): void {
        $this->getBackingStore()->set('nickname', $value);
    }

    /**
     * Sets the placeId property value. An alternate immutable unique identifier of the room. Read-only.
     * @param string|null $value Value to set for the placeId property.
    */
    public function setPlaceId(?string $value): void {
        $this->getBackingStore()->set('placeId', $value);
    }

    /**
     * Sets the teamsEnabledState property value. The teamsEnabledState property
     * @param PlaceFeatureEnablement|null $value Value to set for the teamsEnabledState property.
    */
    public function setTeamsEnabledState(?PlaceFeatureEnablement $value): void {
        $this->getBackingStore()->set('teamsEnabledState', $value);
    }

    /**
     * Sets the videoDeviceName property value. The name of the video device that is available in the room.
     * @param string|null $value Value to set for the videoDeviceName property.
    */
    public function setVideoDeviceName(?string $value): void {
        $this->getBackingStore()->set('videoDeviceName', $value);
    }

}

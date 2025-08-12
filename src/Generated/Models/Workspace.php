<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Workspace extends Place implements Parsable 
{
    /**
     * Instantiates a new Workspace and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.workspace');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Workspace
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Workspace {
        return new Workspace();
    }

    /**
     * Gets the building property value. The name or identifier of the building where the workspace is located.
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
     * Gets the capacity property value. The maximum number of individual desks within a workspace.
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
     * Gets the displayDeviceName property value. The name of the display device (for example, monitor or projector) that is available in the workspace.
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
     * Gets the emailAddress property value. The email address that is associated with the workspace. This email address is used for booking.
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
            'building' => fn(ParseNode $n) => $o->setBuilding($n->getStringValue()),
            'capacity' => fn(ParseNode $n) => $o->setCapacity($n->getIntegerValue()),
            'displayDeviceName' => fn(ParseNode $n) => $o->setDisplayDeviceName($n->getStringValue()),
            'emailAddress' => fn(ParseNode $n) => $o->setEmailAddress($n->getStringValue()),
            'floorLabel' => fn(ParseNode $n) => $o->setFloorLabel($n->getStringValue()),
            'floorNumber' => fn(ParseNode $n) => $o->setFloorNumber($n->getIntegerValue()),
            'mode' => fn(ParseNode $n) => $o->setMode($n->getObjectValue([PlaceMode::class, 'createFromDiscriminatorValue'])),
            'nickname' => fn(ParseNode $n) => $o->setNickname($n->getStringValue()),
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
     * Gets the mode property value. The mode for a workspace. The supported modes are:reservablePlaceMode - Workspaces that can be booked in advance using desk pool reservation tools.dropInPlaceMode - First come, first served desks. When you plug into a peripheral on one of these desks in the workspace, the desk is booked for you, assuming that the peripheral has been associated with the desk in the Microsoft Teams Rooms Pro management portal.offlinePlaceMode - Workspaces that are taken down for maintenance or marked as not reservable.
     * @return PlaceMode|null
    */
    public function getMode(): ?PlaceMode {
        $val = $this->getBackingStore()->get('mode');
        if (is_null($val) || $val instanceof PlaceMode) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mode'");
    }

    /**
     * Gets the nickname property value. A short, friendly name for the workspace, often used for easier identification or display in the UI.
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('building', $this->getBuilding());
        $writer->writeIntegerValue('capacity', $this->getCapacity());
        $writer->writeStringValue('displayDeviceName', $this->getDisplayDeviceName());
        $writer->writeStringValue('emailAddress', $this->getEmailAddress());
        $writer->writeStringValue('floorLabel', $this->getFloorLabel());
        $writer->writeIntegerValue('floorNumber', $this->getFloorNumber());
        $writer->writeObjectValue('mode', $this->getMode());
        $writer->writeStringValue('nickname', $this->getNickname());
    }

    /**
     * Sets the building property value. The name or identifier of the building where the workspace is located.
     * @param string|null $value Value to set for the building property.
    */
    public function setBuilding(?string $value): void {
        $this->getBackingStore()->set('building', $value);
    }

    /**
     * Sets the capacity property value. The maximum number of individual desks within a workspace.
     * @param int|null $value Value to set for the capacity property.
    */
    public function setCapacity(?int $value): void {
        $this->getBackingStore()->set('capacity', $value);
    }

    /**
     * Sets the displayDeviceName property value. The name of the display device (for example, monitor or projector) that is available in the workspace.
     * @param string|null $value Value to set for the displayDeviceName property.
    */
    public function setDisplayDeviceName(?string $value): void {
        $this->getBackingStore()->set('displayDeviceName', $value);
    }

    /**
     * Sets the emailAddress property value. The email address that is associated with the workspace. This email address is used for booking.
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
     * Sets the mode property value. The mode for a workspace. The supported modes are:reservablePlaceMode - Workspaces that can be booked in advance using desk pool reservation tools.dropInPlaceMode - First come, first served desks. When you plug into a peripheral on one of these desks in the workspace, the desk is booked for you, assuming that the peripheral has been associated with the desk in the Microsoft Teams Rooms Pro management portal.offlinePlaceMode - Workspaces that are taken down for maintenance or marked as not reservable.
     * @param PlaceMode|null $value Value to set for the mode property.
    */
    public function setMode(?PlaceMode $value): void {
        $this->getBackingStore()->set('mode', $value);
    }

    /**
     * Sets the nickname property value. A short, friendly name for the workspace, often used for easier identification or display in the UI.
     * @param string|null $value Value to set for the nickname property.
    */
    public function setNickname(?string $value): void {
        $this->getBackingStore()->set('nickname', $value);
    }

}

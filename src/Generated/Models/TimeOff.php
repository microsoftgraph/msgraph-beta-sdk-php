<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TimeOff extends ChangeTrackedEntity implements Parsable 
{
    /**
     * Instantiates a new TimeOff and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.timeOff');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TimeOff
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TimeOff {
        return new TimeOff();
    }

    /**
     * Gets the draftTimeOff property value. The draft version of this timeOff item that is viewable by managers. It must be shared before it is visible to team members. Required.
     * @return TimeOffItem|null
    */
    public function getDraftTimeOff(): ?TimeOffItem {
        $val = $this->getBackingStore()->get('draftTimeOff');
        if (is_null($val) || $val instanceof TimeOffItem) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'draftTimeOff'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'draftTimeOff' => fn(ParseNode $n) => $o->setDraftTimeOff($n->getObjectValue([TimeOffItem::class, 'createFromDiscriminatorValue'])),
            'isStagedForDeletion' => fn(ParseNode $n) => $o->setIsStagedForDeletion($n->getBooleanValue()),
            'sharedTimeOff' => fn(ParseNode $n) => $o->setSharedTimeOff($n->getObjectValue([TimeOffItem::class, 'createFromDiscriminatorValue'])),
            'teamInfo' => fn(ParseNode $n) => $o->setTeamInfo($n->getObjectValue([ShiftsTeamInfo::class, 'createFromDiscriminatorValue'])),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
            'userInfo' => fn(ParseNode $n) => $o->setUserInfo($n->getObjectValue([ShiftsUserInfo::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isStagedForDeletion property value. The timeOff is marked for deletion, a process that is finalized when the schedule is shared.
     * @return bool|null
    */
    public function getIsStagedForDeletion(): ?bool {
        $val = $this->getBackingStore()->get('isStagedForDeletion');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isStagedForDeletion'");
    }

    /**
     * Gets the sharedTimeOff property value. The shared version of this timeOff that is viewable by both employees and managers. Updates to the sharedTimeOff property send notifications to users in the Teams client. Required.
     * @return TimeOffItem|null
    */
    public function getSharedTimeOff(): ?TimeOffItem {
        $val = $this->getBackingStore()->get('sharedTimeOff');
        if (is_null($val) || $val instanceof TimeOffItem) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sharedTimeOff'");
    }

    /**
     * Gets the teamInfo property value. Information of the team that the timeOff is in.
     * @return ShiftsTeamInfo|null
    */
    public function getTeamInfo(): ?ShiftsTeamInfo {
        $val = $this->getBackingStore()->get('teamInfo');
        if (is_null($val) || $val instanceof ShiftsTeamInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'teamInfo'");
    }

    /**
     * Gets the userId property value. ID of the user assigned to the timeOff. Required.
     * @return string|null
    */
    public function getUserId(): ?string {
        $val = $this->getBackingStore()->get('userId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userId'");
    }

    /**
     * Gets the userInfo property value. Information of the user assigned to the timeOff.
     * @return ShiftsUserInfo|null
    */
    public function getUserInfo(): ?ShiftsUserInfo {
        $val = $this->getBackingStore()->get('userInfo');
        if (is_null($val) || $val instanceof ShiftsUserInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userInfo'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('draftTimeOff', $this->getDraftTimeOff());
        $writer->writeBooleanValue('isStagedForDeletion', $this->getIsStagedForDeletion());
        $writer->writeObjectValue('sharedTimeOff', $this->getSharedTimeOff());
        $writer->writeStringValue('userId', $this->getUserId());
    }

    /**
     * Sets the draftTimeOff property value. The draft version of this timeOff item that is viewable by managers. It must be shared before it is visible to team members. Required.
     * @param TimeOffItem|null $value Value to set for the draftTimeOff property.
    */
    public function setDraftTimeOff(?TimeOffItem $value): void {
        $this->getBackingStore()->set('draftTimeOff', $value);
    }

    /**
     * Sets the isStagedForDeletion property value. The timeOff is marked for deletion, a process that is finalized when the schedule is shared.
     * @param bool|null $value Value to set for the isStagedForDeletion property.
    */
    public function setIsStagedForDeletion(?bool $value): void {
        $this->getBackingStore()->set('isStagedForDeletion', $value);
    }

    /**
     * Sets the sharedTimeOff property value. The shared version of this timeOff that is viewable by both employees and managers. Updates to the sharedTimeOff property send notifications to users in the Teams client. Required.
     * @param TimeOffItem|null $value Value to set for the sharedTimeOff property.
    */
    public function setSharedTimeOff(?TimeOffItem $value): void {
        $this->getBackingStore()->set('sharedTimeOff', $value);
    }

    /**
     * Sets the teamInfo property value. Information of the team that the timeOff is in.
     * @param ShiftsTeamInfo|null $value Value to set for the teamInfo property.
    */
    public function setTeamInfo(?ShiftsTeamInfo $value): void {
        $this->getBackingStore()->set('teamInfo', $value);
    }

    /**
     * Sets the userId property value. ID of the user assigned to the timeOff. Required.
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

    /**
     * Sets the userInfo property value. Information of the user assigned to the timeOff.
     * @param ShiftsUserInfo|null $value Value to set for the userInfo property.
    */
    public function setUserInfo(?ShiftsUserInfo $value): void {
        $this->getBackingStore()->set('userInfo', $value);
    }

}

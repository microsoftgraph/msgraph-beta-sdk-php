<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OpenShift extends ChangeTrackedEntity implements Parsable 
{
    /**
     * Instantiates a new openShift and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.openShift');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OpenShift
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OpenShift {
        return new OpenShift();
    }

    /**
     * Gets the draftOpenShift property value. Draft changes in the openShift are only visible to managers until they are shared.
     * @return OpenShiftItem|null
    */
    public function getDraftOpenShift(): ?OpenShiftItem {
        $val = $this->getBackingStore()->get('draftOpenShift');
        if (is_null($val) || $val instanceof OpenShiftItem) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'draftOpenShift'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'draftOpenShift' => fn(ParseNode $n) => $o->setDraftOpenShift($n->getObjectValue([OpenShiftItem::class, 'createFromDiscriminatorValue'])),
            'isStagedForDeletion' => fn(ParseNode $n) => $o->setIsStagedForDeletion($n->getBooleanValue()),
            'schedulingGroupId' => fn(ParseNode $n) => $o->setSchedulingGroupId($n->getStringValue()),
            'schedulingGroupInfo' => fn(ParseNode $n) => $o->setSchedulingGroupInfo($n->getObjectValue([SchedulingGroupInfo::class, 'createFromDiscriminatorValue'])),
            'sharedOpenShift' => fn(ParseNode $n) => $o->setSharedOpenShift($n->getObjectValue([OpenShiftItem::class, 'createFromDiscriminatorValue'])),
            'teamInfo' => fn(ParseNode $n) => $o->setTeamInfo($n->getObjectValue([ShiftsTeamInfo::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isStagedForDeletion property value. The openShift is marked for deletion, a process that is finalized when the schedule is shared.
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
     * Gets the schedulingGroupId property value. The ID of the schedulingGroup that contains the openShift.
     * @return string|null
    */
    public function getSchedulingGroupId(): ?string {
        $val = $this->getBackingStore()->get('schedulingGroupId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'schedulingGroupId'");
    }

    /**
     * Gets the schedulingGroupInfo property value. The schedulingGroupInfo property
     * @return SchedulingGroupInfo|null
    */
    public function getSchedulingGroupInfo(): ?SchedulingGroupInfo {
        $val = $this->getBackingStore()->get('schedulingGroupInfo');
        if (is_null($val) || $val instanceof SchedulingGroupInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'schedulingGroupInfo'");
    }

    /**
     * Gets the sharedOpenShift property value. The shared version of this openShift that is viewable by both employees and managers.
     * @return OpenShiftItem|null
    */
    public function getSharedOpenShift(): ?OpenShiftItem {
        $val = $this->getBackingStore()->get('sharedOpenShift');
        if (is_null($val) || $val instanceof OpenShiftItem) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sharedOpenShift'");
    }

    /**
     * Gets the teamInfo property value. The teamInfo property
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('draftOpenShift', $this->getDraftOpenShift());
        $writer->writeBooleanValue('isStagedForDeletion', $this->getIsStagedForDeletion());
        $writer->writeStringValue('schedulingGroupId', $this->getSchedulingGroupId());
        $writer->writeObjectValue('sharedOpenShift', $this->getSharedOpenShift());
    }

    /**
     * Sets the draftOpenShift property value. Draft changes in the openShift are only visible to managers until they are shared.
     * @param OpenShiftItem|null $value Value to set for the draftOpenShift property.
    */
    public function setDraftOpenShift(?OpenShiftItem $value): void {
        $this->getBackingStore()->set('draftOpenShift', $value);
    }

    /**
     * Sets the isStagedForDeletion property value. The openShift is marked for deletion, a process that is finalized when the schedule is shared.
     * @param bool|null $value Value to set for the isStagedForDeletion property.
    */
    public function setIsStagedForDeletion(?bool $value): void {
        $this->getBackingStore()->set('isStagedForDeletion', $value);
    }

    /**
     * Sets the schedulingGroupId property value. The ID of the schedulingGroup that contains the openShift.
     * @param string|null $value Value to set for the schedulingGroupId property.
    */
    public function setSchedulingGroupId(?string $value): void {
        $this->getBackingStore()->set('schedulingGroupId', $value);
    }

    /**
     * Sets the schedulingGroupInfo property value. The schedulingGroupInfo property
     * @param SchedulingGroupInfo|null $value Value to set for the schedulingGroupInfo property.
    */
    public function setSchedulingGroupInfo(?SchedulingGroupInfo $value): void {
        $this->getBackingStore()->set('schedulingGroupInfo', $value);
    }

    /**
     * Sets the sharedOpenShift property value. The shared version of this openShift that is viewable by both employees and managers.
     * @param OpenShiftItem|null $value Value to set for the sharedOpenShift property.
    */
    public function setSharedOpenShift(?OpenShiftItem $value): void {
        $this->getBackingStore()->set('sharedOpenShift', $value);
    }

    /**
     * Sets the teamInfo property value. The teamInfo property
     * @param ShiftsTeamInfo|null $value Value to set for the teamInfo property.
    */
    public function setTeamInfo(?ShiftsTeamInfo $value): void {
        $this->getBackingStore()->set('teamInfo', $value);
    }

}

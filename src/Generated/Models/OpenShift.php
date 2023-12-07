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
     * Gets the draftOpenShift property value. An unpublished open shift.
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
            'schedulingGroupName' => fn(ParseNode $n) => $o->setSchedulingGroupName($n->getStringValue()),
            'sharedOpenShift' => fn(ParseNode $n) => $o->setSharedOpenShift($n->getObjectValue([OpenShiftItem::class, 'createFromDiscriminatorValue'])),
            'teamId' => fn(ParseNode $n) => $o->setTeamId($n->getStringValue()),
            'teamName' => fn(ParseNode $n) => $o->setTeamName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isStagedForDeletion property value. The isStagedForDeletion property
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
     * Gets the schedulingGroupId property value. ID for the scheduling group that the open shift belongs to.
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
     * Gets the schedulingGroupName property value. The schedulingGroupName property
     * @return string|null
    */
    public function getSchedulingGroupName(): ?string {
        $val = $this->getBackingStore()->get('schedulingGroupName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'schedulingGroupName'");
    }

    /**
     * Gets the sharedOpenShift property value. A published open shift.
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
     * Gets the teamId property value. The teamId property
     * @return string|null
    */
    public function getTeamId(): ?string {
        $val = $this->getBackingStore()->get('teamId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'teamId'");
    }

    /**
     * Gets the teamName property value. The teamName property
     * @return string|null
    */
    public function getTeamName(): ?string {
        $val = $this->getBackingStore()->get('teamName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'teamName'");
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
     * Sets the draftOpenShift property value. An unpublished open shift.
     * @param OpenShiftItem|null $value Value to set for the draftOpenShift property.
    */
    public function setDraftOpenShift(?OpenShiftItem $value): void {
        $this->getBackingStore()->set('draftOpenShift', $value);
    }

    /**
     * Sets the isStagedForDeletion property value. The isStagedForDeletion property
     * @param bool|null $value Value to set for the isStagedForDeletion property.
    */
    public function setIsStagedForDeletion(?bool $value): void {
        $this->getBackingStore()->set('isStagedForDeletion', $value);
    }

    /**
     * Sets the schedulingGroupId property value. ID for the scheduling group that the open shift belongs to.
     * @param string|null $value Value to set for the schedulingGroupId property.
    */
    public function setSchedulingGroupId(?string $value): void {
        $this->getBackingStore()->set('schedulingGroupId', $value);
    }

    /**
     * Sets the schedulingGroupName property value. The schedulingGroupName property
     * @param string|null $value Value to set for the schedulingGroupName property.
    */
    public function setSchedulingGroupName(?string $value): void {
        $this->getBackingStore()->set('schedulingGroupName', $value);
    }

    /**
     * Sets the sharedOpenShift property value. A published open shift.
     * @param OpenShiftItem|null $value Value to set for the sharedOpenShift property.
    */
    public function setSharedOpenShift(?OpenShiftItem $value): void {
        $this->getBackingStore()->set('sharedOpenShift', $value);
    }

    /**
     * Sets the teamId property value. The teamId property
     * @param string|null $value Value to set for the teamId property.
    */
    public function setTeamId(?string $value): void {
        $this->getBackingStore()->set('teamId', $value);
    }

    /**
     * Sets the teamName property value. The teamName property
     * @param string|null $value Value to set for the teamName property.
    */
    public function setTeamName(?string $value): void {
        $this->getBackingStore()->set('teamName', $value);
    }

}

<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ProgramControl extends Entity implements Parsable 
{
    /**
     * Instantiates a new ProgramControl and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProgramControl
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProgramControl {
        return new ProgramControl();
    }

    /**
     * Gets the controlId property value. The controlId of the control, in particular the identifier of an access review. Required on create.
     * @return string|null
    */
    public function getControlId(): ?string {
        $val = $this->getBackingStore()->get('controlId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'controlId'");
    }

    /**
     * Gets the controlTypeId property value. The programControlType identifies the type of program control - for example, a control linking to guest access reviews. Required on create.
     * @return string|null
    */
    public function getControlTypeId(): ?string {
        $val = $this->getBackingStore()->get('controlTypeId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'controlTypeId'");
    }

    /**
     * Gets the createdDateTime property value. The creation date and time of the program control.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the displayName property value. The name of the control.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'controlId' => fn(ParseNode $n) => $o->setControlId($n->getStringValue()),
            'controlTypeId' => fn(ParseNode $n) => $o->setControlTypeId($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'owner' => fn(ParseNode $n) => $o->setOwner($n->getObjectValue([UserIdentity::class, 'createFromDiscriminatorValue'])),
            'program' => fn(ParseNode $n) => $o->setProgram($n->getObjectValue([Program::class, 'createFromDiscriminatorValue'])),
            'programId' => fn(ParseNode $n) => $o->setProgramId($n->getStringValue()),
            'resource' => fn(ParseNode $n) => $o->setResource($n->getObjectValue([ProgramResource::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
        ]);
    }

    /**
     * Gets the owner property value. The user who created the program control.
     * @return UserIdentity|null
    */
    public function getOwner(): ?UserIdentity {
        $val = $this->getBackingStore()->get('owner');
        if (is_null($val) || $val instanceof UserIdentity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'owner'");
    }

    /**
     * Gets the program property value. The program this control is part of.
     * @return Program|null
    */
    public function getProgram(): ?Program {
        $val = $this->getBackingStore()->get('program');
        if (is_null($val) || $val instanceof Program) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'program'");
    }

    /**
     * Gets the programId property value. The programId of the program this control is a part of. Required on create.
     * @return string|null
    */
    public function getProgramId(): ?string {
        $val = $this->getBackingStore()->get('programId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'programId'");
    }

    /**
     * Gets the resource property value. The resource, a group or an app, targeted by this program control's access review.
     * @return ProgramResource|null
    */
    public function getResource(): ?ProgramResource {
        $val = $this->getBackingStore()->get('resource');
        if (is_null($val) || $val instanceof ProgramResource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resource'");
    }

    /**
     * Gets the status property value. The life cycle status of the control.
     * @return string|null
    */
    public function getStatus(): ?string {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('controlId', $this->getControlId());
        $writer->writeStringValue('controlTypeId', $this->getControlTypeId());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('owner', $this->getOwner());
        $writer->writeObjectValue('program', $this->getProgram());
        $writer->writeStringValue('programId', $this->getProgramId());
        $writer->writeObjectValue('resource', $this->getResource());
        $writer->writeStringValue('status', $this->getStatus());
    }

    /**
     * Sets the controlId property value. The controlId of the control, in particular the identifier of an access review. Required on create.
     * @param string|null $value Value to set for the controlId property.
    */
    public function setControlId(?string $value): void {
        $this->getBackingStore()->set('controlId', $value);
    }

    /**
     * Sets the controlTypeId property value. The programControlType identifies the type of program control - for example, a control linking to guest access reviews. Required on create.
     * @param string|null $value Value to set for the controlTypeId property.
    */
    public function setControlTypeId(?string $value): void {
        $this->getBackingStore()->set('controlTypeId', $value);
    }

    /**
     * Sets the createdDateTime property value. The creation date and time of the program control.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the displayName property value. The name of the control.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the owner property value. The user who created the program control.
     * @param UserIdentity|null $value Value to set for the owner property.
    */
    public function setOwner(?UserIdentity $value): void {
        $this->getBackingStore()->set('owner', $value);
    }

    /**
     * Sets the program property value. The program this control is part of.
     * @param Program|null $value Value to set for the program property.
    */
    public function setProgram(?Program $value): void {
        $this->getBackingStore()->set('program', $value);
    }

    /**
     * Sets the programId property value. The programId of the program this control is a part of. Required on create.
     * @param string|null $value Value to set for the programId property.
    */
    public function setProgramId(?string $value): void {
        $this->getBackingStore()->set('programId', $value);
    }

    /**
     * Sets the resource property value. The resource, a group or an app, targeted by this program control's access review.
     * @param ProgramResource|null $value Value to set for the resource property.
    */
    public function setResource(?ProgramResource $value): void {
        $this->getBackingStore()->set('resource', $value);
    }

    /**
     * Sets the status property value. The life cycle status of the control.
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}

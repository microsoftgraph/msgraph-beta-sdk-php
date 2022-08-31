<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ProgramControl extends Entity implements Parsable 
{
    /**
     * @var string|null $controlId The controlId of the control, in particular the identifier of an access review. Required on create.
    */
    private ?string $controlId = null;
    
    /**
     * @var string|null $controlTypeId The programControlType identifies the type of program control - for example, a control linking to guest access reviews. Required on create.
    */
    private ?string $controlTypeId = null;
    
    /**
     * @var DateTime|null $createdDateTime The creation date and time of the program control.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $displayName The name of the control.
    */
    private ?string $displayName = null;
    
    /**
     * @var UserIdentity|null $owner The user who created the program control.
    */
    private ?UserIdentity $owner = null;
    
    /**
     * @var Program|null $program The program this control is part of.
    */
    private ?Program $program = null;
    
    /**
     * @var string|null $programId The programId of the program this control is a part of. Required on create.
    */
    private ?string $programId = null;
    
    /**
     * @var ProgramResource|null $resource The resource, a group or an app, targeted by this program control's access review.
    */
    private ?ProgramResource $resource = null;
    
    /**
     * @var string|null $status The life cycle status of the control.
    */
    private ?string $status = null;
    
    /**
     * Instantiates a new ProgramControl and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.programControl');
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
        return $this->controlId;
    }

    /**
     * Gets the controlTypeId property value. The programControlType identifies the type of program control - for example, a control linking to guest access reviews. Required on create.
     * @return string|null
    */
    public function getControlTypeId(): ?string {
        return $this->controlTypeId;
    }

    /**
     * Gets the createdDateTime property value. The creation date and time of the program control.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the displayName property value. The name of the control.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'controlId' => function (ParseNode $n) use ($o) { $o->setControlId($n->getStringValue()); },
            'controlTypeId' => function (ParseNode $n) use ($o) { $o->setControlTypeId($n->getStringValue()); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'owner' => function (ParseNode $n) use ($o) { $o->setOwner($n->getObjectValue(array(UserIdentity::class, 'createFromDiscriminatorValue'))); },
            'program' => function (ParseNode $n) use ($o) { $o->setProgram($n->getObjectValue(array(Program::class, 'createFromDiscriminatorValue'))); },
            'programId' => function (ParseNode $n) use ($o) { $o->setProgramId($n->getStringValue()); },
            'resource' => function (ParseNode $n) use ($o) { $o->setResource($n->getObjectValue(array(ProgramResource::class, 'createFromDiscriminatorValue'))); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the owner property value. The user who created the program control.
     * @return UserIdentity|null
    */
    public function getOwner(): ?UserIdentity {
        return $this->owner;
    }

    /**
     * Gets the program property value. The program this control is part of.
     * @return Program|null
    */
    public function getProgram(): ?Program {
        return $this->program;
    }

    /**
     * Gets the programId property value. The programId of the program this control is a part of. Required on create.
     * @return string|null
    */
    public function getProgramId(): ?string {
        return $this->programId;
    }

    /**
     * Gets the resource property value. The resource, a group or an app, targeted by this program control's access review.
     * @return ProgramResource|null
    */
    public function getResource(): ?ProgramResource {
        return $this->resource;
    }

    /**
     * Gets the status property value. The life cycle status of the control.
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('controlId', $this->controlId);
        $writer->writeStringValue('controlTypeId', $this->controlTypeId);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeObjectValue('owner', $this->owner);
        $writer->writeObjectValue('program', $this->program);
        $writer->writeStringValue('programId', $this->programId);
        $writer->writeObjectValue('resource', $this->resource);
        $writer->writeStringValue('status', $this->status);
    }

    /**
     * Sets the controlId property value. The controlId of the control, in particular the identifier of an access review. Required on create.
     *  @param string|null $value Value to set for the controlId property.
    */
    public function setControlId(?string $value ): void {
        $this->controlId = $value;
    }

    /**
     * Sets the controlTypeId property value. The programControlType identifies the type of program control - for example, a control linking to guest access reviews. Required on create.
     *  @param string|null $value Value to set for the controlTypeId property.
    */
    public function setControlTypeId(?string $value ): void {
        $this->controlTypeId = $value;
    }

    /**
     * Sets the createdDateTime property value. The creation date and time of the program control.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the displayName property value. The name of the control.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the owner property value. The user who created the program control.
     *  @param UserIdentity|null $value Value to set for the owner property.
    */
    public function setOwner(?UserIdentity $value ): void {
        $this->owner = $value;
    }

    /**
     * Sets the program property value. The program this control is part of.
     *  @param Program|null $value Value to set for the program property.
    */
    public function setProgram(?Program $value ): void {
        $this->program = $value;
    }

    /**
     * Sets the programId property value. The programId of the program this control is a part of. Required on create.
     *  @param string|null $value Value to set for the programId property.
    */
    public function setProgramId(?string $value ): void {
        $this->programId = $value;
    }

    /**
     * Sets the resource property value. The resource, a group or an app, targeted by this program control's access review.
     *  @param ProgramResource|null $value Value to set for the resource property.
    */
    public function setResource(?ProgramResource $value ): void {
        $this->resource = $value;
    }

    /**
     * Sets the status property value. The life cycle status of the control.
     *  @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value ): void {
        $this->status = $value;
    }

}

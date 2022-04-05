<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceAppManagementTask extends Entity 
{
    /** @var string|null $assignedTo The name or email of the admin this task is assigned to. */
    private ?string $assignedTo = null;
    
    /** @var DeviceAppManagementTaskCategory|null $category The category. Possible values are: unknown, advancedThreatProtection. */
    private ?DeviceAppManagementTaskCategory $category = null;
    
    /** @var DateTime|null $createdDateTime The created date. */
    private ?DateTime $createdDateTime = null;
    
    /** @var string|null $creator The email address of the creator. */
    private ?string $creator = null;
    
    /** @var string|null $creatorNotes Notes from the creator. */
    private ?string $creatorNotes = null;
    
    /** @var string|null $description The description. */
    private ?string $description = null;
    
    /** @var string|null $displayName The name. */
    private ?string $displayName = null;
    
    /** @var DateTime|null $dueDateTime The due date. */
    private ?DateTime $dueDateTime = null;
    
    /** @var DeviceAppManagementTaskPriority|null $priority The priority. Possible values are: none, high, low. */
    private ?DeviceAppManagementTaskPriority $priority = null;
    
    /** @var DeviceAppManagementTaskStatus|null $status The status. Possible values are: unknown, pending, active, completed, rejected. */
    private ?DeviceAppManagementTaskStatus $status = null;
    
    /**
     * Instantiates a new deviceAppManagementTask and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceAppManagementTask
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DeviceAppManagementTask {
        return new DeviceAppManagementTask();
    }

    /**
     * Gets the assignedTo property value. The name or email of the admin this task is assigned to.
     * @return string|null
    */
    public function getAssignedTo(): ?string {
        return $this->assignedTo;
    }

    /**
     * Gets the category property value. The category. Possible values are: unknown, advancedThreatProtection.
     * @return DeviceAppManagementTaskCategory|null
    */
    public function getCategory(): ?DeviceAppManagementTaskCategory {
        return $this->category;
    }

    /**
     * Gets the createdDateTime property value. The created date.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the creator property value. The email address of the creator.
     * @return string|null
    */
    public function getCreator(): ?string {
        return $this->creator;
    }

    /**
     * Gets the creatorNotes property value. Notes from the creator.
     * @return string|null
    */
    public function getCreatorNotes(): ?string {
        return $this->creatorNotes;
    }

    /**
     * Gets the description property value. The description.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The name.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the dueDateTime property value. The due date.
     * @return DateTime|null
    */
    public function getDueDateTime(): ?DateTime {
        return $this->dueDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'assignedTo' => function (self $o, ParseNode $n) { $o->setAssignedTo($n->getStringValue()); },
            'category' => function (self $o, ParseNode $n) { $o->setCategory($n->getEnumValue(DeviceAppManagementTaskCategory::class)); },
            'createdDateTime' => function (self $o, ParseNode $n) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'creator' => function (self $o, ParseNode $n) { $o->setCreator($n->getStringValue()); },
            'creatorNotes' => function (self $o, ParseNode $n) { $o->setCreatorNotes($n->getStringValue()); },
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'dueDateTime' => function (self $o, ParseNode $n) { $o->setDueDateTime($n->getDateTimeValue()); },
            'priority' => function (self $o, ParseNode $n) { $o->setPriority($n->getEnumValue(DeviceAppManagementTaskPriority::class)); },
            'status' => function (self $o, ParseNode $n) { $o->setStatus($n->getEnumValue(DeviceAppManagementTaskStatus::class)); },
        ]);
    }

    /**
     * Gets the priority property value. The priority. Possible values are: none, high, low.
     * @return DeviceAppManagementTaskPriority|null
    */
    public function getPriority(): ?DeviceAppManagementTaskPriority {
        return $this->priority;
    }

    /**
     * Gets the status property value. The status. Possible values are: unknown, pending, active, completed, rejected.
     * @return DeviceAppManagementTaskStatus|null
    */
    public function getStatus(): ?DeviceAppManagementTaskStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('assignedTo', $this->assignedTo);
        $writer->writeEnumValue('category', $this->category);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('creator', $this->creator);
        $writer->writeStringValue('creatorNotes', $this->creatorNotes);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateTimeValue('dueDateTime', $this->dueDateTime);
        $writer->writeEnumValue('priority', $this->priority);
        $writer->writeEnumValue('status', $this->status);
    }

    /**
     * Sets the assignedTo property value. The name or email of the admin this task is assigned to.
     *  @param string|null $value Value to set for the assignedTo property.
    */
    public function setAssignedTo(?string $value ): void {
        $this->assignedTo = $value;
    }

    /**
     * Sets the category property value. The category. Possible values are: unknown, advancedThreatProtection.
     *  @param DeviceAppManagementTaskCategory|null $value Value to set for the category property.
    */
    public function setCategory(?DeviceAppManagementTaskCategory $value ): void {
        $this->category = $value;
    }

    /**
     * Sets the createdDateTime property value. The created date.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the creator property value. The email address of the creator.
     *  @param string|null $value Value to set for the creator property.
    */
    public function setCreator(?string $value ): void {
        $this->creator = $value;
    }

    /**
     * Sets the creatorNotes property value. Notes from the creator.
     *  @param string|null $value Value to set for the creatorNotes property.
    */
    public function setCreatorNotes(?string $value ): void {
        $this->creatorNotes = $value;
    }

    /**
     * Sets the description property value. The description.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The name.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the dueDateTime property value. The due date.
     *  @param DateTime|null $value Value to set for the dueDateTime property.
    */
    public function setDueDateTime(?DateTime $value ): void {
        $this->dueDateTime = $value;
    }

    /**
     * Sets the priority property value. The priority. Possible values are: none, high, low.
     *  @param DeviceAppManagementTaskPriority|null $value Value to set for the priority property.
    */
    public function setPriority(?DeviceAppManagementTaskPriority $value ): void {
        $this->priority = $value;
    }

    /**
     * Sets the status property value. The status. Possible values are: unknown, pending, active, completed, rejected.
     *  @param DeviceAppManagementTaskStatus|null $value Value to set for the status property.
    */
    public function setStatus(?DeviceAppManagementTaskStatus $value ): void {
        $this->status = $value;
    }

}

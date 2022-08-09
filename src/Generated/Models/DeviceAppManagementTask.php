<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceAppManagementTask extends Entity implements Parsable 
{
    /**
     * @var string|null $assignedTo The name or email of the admin this task is assigned to.
    */
    private ?string $assignedTo = null;
    
    /**
     * @var DeviceAppManagementTaskCategory|null $category Device app management task category.
    */
    private ?DeviceAppManagementTaskCategory $category = null;
    
    /**
     * @var DateTime|null $createdDateTime The created date.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $creator The email address of the creator.
    */
    private ?string $creator = null;
    
    /**
     * @var string|null $creatorNotes Notes from the creator.
    */
    private ?string $creatorNotes = null;
    
    /**
     * @var string|null $description The description.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The name.
    */
    private ?string $displayName = null;
    
    /**
     * @var DateTime|null $dueDateTime The due date.
    */
    private ?DateTime $dueDateTime = null;
    
    /**
     * @var DeviceAppManagementTaskPriority|null $priority Device app management task priority.
    */
    private ?DeviceAppManagementTaskPriority $priority = null;
    
    /**
     * @var DeviceAppManagementTaskStatus|null $status Device app management task status.
    */
    private ?DeviceAppManagementTaskStatus $status = null;
    
    /**
     * Instantiates a new deviceAppManagementTask and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceAppManagementTask');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceAppManagementTask
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceAppManagementTask {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.appVulnerabilityTask': return new AppVulnerabilityTask();
                case '#microsoft.graph.securityConfigurationTask': return new SecurityConfigurationTask();
                case '#microsoft.graph.unmanagedDeviceDiscoveryTask': return new UnmanagedDeviceDiscoveryTask();
            }
        }
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
     * Gets the category property value. Device app management task category.
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignedTo' => function (ParseNode $n) use ($o) { $o->setAssignedTo($n->getStringValue()); },
            'category' => function (ParseNode $n) use ($o) { $o->setCategory($n->getEnumValue(DeviceAppManagementTaskCategory::class)); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'creator' => function (ParseNode $n) use ($o) { $o->setCreator($n->getStringValue()); },
            'creatorNotes' => function (ParseNode $n) use ($o) { $o->setCreatorNotes($n->getStringValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'dueDateTime' => function (ParseNode $n) use ($o) { $o->setDueDateTime($n->getDateTimeValue()); },
            'priority' => function (ParseNode $n) use ($o) { $o->setPriority($n->getEnumValue(DeviceAppManagementTaskPriority::class)); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(DeviceAppManagementTaskStatus::class)); },
        ]);
    }

    /**
     * Gets the priority property value. Device app management task priority.
     * @return DeviceAppManagementTaskPriority|null
    */
    public function getPriority(): ?DeviceAppManagementTaskPriority {
        return $this->priority;
    }

    /**
     * Gets the status property value. Device app management task status.
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
     * Sets the category property value. Device app management task category.
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
     * Sets the priority property value. Device app management task priority.
     *  @param DeviceAppManagementTaskPriority|null $value Value to set for the priority property.
    */
    public function setPriority(?DeviceAppManagementTaskPriority $value ): void {
        $this->priority = $value;
    }

    /**
     * Sets the status property value. Device app management task status.
     *  @param DeviceAppManagementTaskStatus|null $value Value to set for the status property.
    */
    public function setStatus(?DeviceAppManagementTaskStatus $value ): void {
        $this->status = $value;
    }

}

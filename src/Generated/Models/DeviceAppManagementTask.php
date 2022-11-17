<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceAppManagementTask extends Entity implements Parsable 
{
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
        return $this->getBackingStore()->get('assignedTo');
    }

    /**
     * Gets the category property value. Device app management task category.
     * @return DeviceAppManagementTaskCategory|null
    */
    public function getCategory(): ?DeviceAppManagementTaskCategory {
        return $this->getBackingStore()->get('category');
    }

    /**
     * Gets the createdDateTime property value. The created date.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the creator property value. The email address of the creator.
     * @return string|null
    */
    public function getCreator(): ?string {
        return $this->getBackingStore()->get('creator');
    }

    /**
     * Gets the creatorNotes property value. Notes from the creator.
     * @return string|null
    */
    public function getCreatorNotes(): ?string {
        return $this->getBackingStore()->get('creatorNotes');
    }

    /**
     * Gets the description property value. The description.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the displayName property value. The name.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the dueDateTime property value. The due date.
     * @return DateTime|null
    */
    public function getDueDateTime(): ?DateTime {
        return $this->getBackingStore()->get('dueDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignedTo' => fn(ParseNode $n) => $o->setAssignedTo($n->getStringValue()),
            'category' => fn(ParseNode $n) => $o->setCategory($n->getEnumValue(DeviceAppManagementTaskCategory::class)),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'creator' => fn(ParseNode $n) => $o->setCreator($n->getStringValue()),
            'creatorNotes' => fn(ParseNode $n) => $o->setCreatorNotes($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'dueDateTime' => fn(ParseNode $n) => $o->setDueDateTime($n->getDateTimeValue()),
            'priority' => fn(ParseNode $n) => $o->setPriority($n->getEnumValue(DeviceAppManagementTaskPriority::class)),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(DeviceAppManagementTaskStatus::class)),
        ]);
    }

    /**
     * Gets the priority property value. Device app management task priority.
     * @return DeviceAppManagementTaskPriority|null
    */
    public function getPriority(): ?DeviceAppManagementTaskPriority {
        return $this->getBackingStore()->get('priority');
    }

    /**
     * Gets the status property value. Device app management task status.
     * @return DeviceAppManagementTaskStatus|null
    */
    public function getStatus(): ?DeviceAppManagementTaskStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('assignedTo', $this->getAssignedTo());
        $writer->writeEnumValue('category', $this->getCategory());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('creator', $this->getCreator());
        $writer->writeStringValue('creatorNotes', $this->getCreatorNotes());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('dueDateTime', $this->getDueDateTime());
        $writer->writeEnumValue('priority', $this->getPriority());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the assignedTo property value. The name or email of the admin this task is assigned to.
     *  @param string|null $value Value to set for the assignedTo property.
    */
    public function setAssignedTo(?string $value): void {
        $this->getBackingStore()->set('assignedTo', $value);
    }

    /**
     * Sets the category property value. Device app management task category.
     *  @param DeviceAppManagementTaskCategory|null $value Value to set for the category property.
    */
    public function setCategory(?DeviceAppManagementTaskCategory $value): void {
        $this->getBackingStore()->set('category', $value);
    }

    /**
     * Sets the createdDateTime property value. The created date.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the creator property value. The email address of the creator.
     *  @param string|null $value Value to set for the creator property.
    */
    public function setCreator(?string $value): void {
        $this->getBackingStore()->set('creator', $value);
    }

    /**
     * Sets the creatorNotes property value. Notes from the creator.
     *  @param string|null $value Value to set for the creatorNotes property.
    */
    public function setCreatorNotes(?string $value): void {
        $this->getBackingStore()->set('creatorNotes', $value);
    }

    /**
     * Sets the description property value. The description.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The name.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the dueDateTime property value. The due date.
     *  @param DateTime|null $value Value to set for the dueDateTime property.
    */
    public function setDueDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('dueDateTime', $value);
    }

    /**
     * Sets the priority property value. Device app management task priority.
     *  @param DeviceAppManagementTaskPriority|null $value Value to set for the priority property.
    */
    public function setPriority(?DeviceAppManagementTaskPriority $value): void {
        $this->getBackingStore()->set('priority', $value);
    }

    /**
     * Sets the status property value. Device app management task status.
     *  @param DeviceAppManagementTaskStatus|null $value Value to set for the status property.
    */
    public function setStatus(?DeviceAppManagementTaskStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}

<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A device app management task.
*/
class DeviceAppManagementTask extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
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
        $val = $this->getBackingStore()->get('assignedTo');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignedTo'");
    }

    /**
     * Gets the category property value. Device app management task category.
     * @return DeviceAppManagementTaskCategory|null
    */
    public function getCategory(): ?DeviceAppManagementTaskCategory {
        $val = $this->getBackingStore()->get('category');
        if (is_null($val) || $val instanceof DeviceAppManagementTaskCategory) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'category'");
    }

    /**
     * Gets the createdDateTime property value. The created date.
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
     * Gets the creator property value. The email address of the creator.
     * @return string|null
    */
    public function getCreator(): ?string {
        $val = $this->getBackingStore()->get('creator');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'creator'");
    }

    /**
     * Gets the creatorNotes property value. Notes from the creator.
     * @return string|null
    */
    public function getCreatorNotes(): ?string {
        $val = $this->getBackingStore()->get('creatorNotes');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'creatorNotes'");
    }

    /**
     * Gets the description property value. The description.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. The name.
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
     * Gets the dueDateTime property value. The due date.
     * @return DateTime|null
    */
    public function getDueDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('dueDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dueDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
        $val = $this->getBackingStore()->get('priority');
        if (is_null($val) || $val instanceof DeviceAppManagementTaskPriority) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'priority'");
    }

    /**
     * Gets the status property value. Device app management task status.
     * @return DeviceAppManagementTaskStatus|null
    */
    public function getStatus(): ?DeviceAppManagementTaskStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof DeviceAppManagementTaskStatus) {
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
        $writer->writeStringValue('assignedTo', $this->getAssignedTo());
        $writer->writeEnumValue('category', $this->getCategory());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('creator', $this->getCreator());
        $writer->writeStringValue('creatorNotes', $this->getCreatorNotes());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('dueDateTime', $this->getDueDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('priority', $this->getPriority());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the assignedTo property value. The name or email of the admin this task is assigned to.
     * @param string|null $value Value to set for the assignedTo property.
    */
    public function setAssignedTo(?string $value): void {
        $this->getBackingStore()->set('assignedTo', $value);
    }

    /**
     * Sets the category property value. Device app management task category.
     * @param DeviceAppManagementTaskCategory|null $value Value to set for the category property.
    */
    public function setCategory(?DeviceAppManagementTaskCategory $value): void {
        $this->getBackingStore()->set('category', $value);
    }

    /**
     * Sets the createdDateTime property value. The created date.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the creator property value. The email address of the creator.
     * @param string|null $value Value to set for the creator property.
    */
    public function setCreator(?string $value): void {
        $this->getBackingStore()->set('creator', $value);
    }

    /**
     * Sets the creatorNotes property value. Notes from the creator.
     * @param string|null $value Value to set for the creatorNotes property.
    */
    public function setCreatorNotes(?string $value): void {
        $this->getBackingStore()->set('creatorNotes', $value);
    }

    /**
     * Sets the description property value. The description.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The name.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the dueDateTime property value. The due date.
     * @param DateTime|null $value Value to set for the dueDateTime property.
    */
    public function setDueDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('dueDateTime', $value);
    }

    /**
     * Sets the priority property value. Device app management task priority.
     * @param DeviceAppManagementTaskPriority|null $value Value to set for the priority property.
    */
    public function setPriority(?DeviceAppManagementTaskPriority $value): void {
        $this->getBackingStore()->set('priority', $value);
    }

    /**
     * Sets the status property value. Device app management task status.
     * @param DeviceAppManagementTaskStatus|null $value Value to set for the status property.
    */
    public function setStatus(?DeviceAppManagementTaskStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}

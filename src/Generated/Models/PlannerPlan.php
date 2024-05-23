<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PlannerPlan extends PlannerDelta implements Parsable 
{
    /**
     * Instantiates a new PlannerPlan and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlannerPlan
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlannerPlan {
        return new PlannerPlan();
    }

    /**
     * Gets the archivalInfo property value. The archivalInfo property
     * @return PlannerArchivalInfo|null
    */
    public function getArchivalInfo(): ?PlannerArchivalInfo {
        $val = $this->getBackingStore()->get('archivalInfo');
        if (is_null($val) || $val instanceof PlannerArchivalInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'archivalInfo'");
    }

    /**
     * Gets the buckets property value. Collection of buckets in the plan. Read-only. Nullable.
     * @return array<PlannerBucket>|null
    */
    public function getBuckets(): ?array {
        $val = $this->getBackingStore()->get('buckets');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PlannerBucket::class);
            /** @var array<PlannerBucket>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'buckets'");
    }

    /**
     * Gets the container property value. Identifies the container of the plan. Either specify all properties, or specify only the url, the containerId, and type. After it's set, this property can’t be updated. It changes when a plan is moved from one container to another, using plan move to container. Required.
     * @return PlannerPlanContainer|null
    */
    public function getContainer(): ?PlannerPlanContainer {
        $val = $this->getBackingStore()->get('container');
        if (is_null($val) || $val instanceof PlannerPlanContainer) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'container'");
    }

    /**
     * Gets the contexts property value. Read-only. Other user experiences in which this plan is used, represented as plannerPlanContext entries.
     * @return PlannerPlanContextCollection|null
    */
    public function getContexts(): ?PlannerPlanContextCollection {
        $val = $this->getBackingStore()->get('contexts');
        if (is_null($val) || $val instanceof PlannerPlanContextCollection) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contexts'");
    }

    /**
     * Gets the createdBy property value. Read-only. The user who created the plan.
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('createdBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdBy'");
    }

    /**
     * Gets the createdDateTime property value. Read-only. Date and time at which the plan is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
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
     * Gets the creationSource property value. Contains information about the origin of the plan.
     * @return PlannerPlanCreation|null
    */
    public function getCreationSource(): ?PlannerPlanCreation {
        $val = $this->getBackingStore()->get('creationSource');
        if (is_null($val) || $val instanceof PlannerPlanCreation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'creationSource'");
    }

    /**
     * Gets the details property value. Extra details about the plan. Read-only. Nullable.
     * @return PlannerPlanDetails|null
    */
    public function getDetails(): ?PlannerPlanDetails {
        $val = $this->getBackingStore()->get('details');
        if (is_null($val) || $val instanceof PlannerPlanDetails) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'details'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'archivalInfo' => fn(ParseNode $n) => $o->setArchivalInfo($n->getObjectValue([PlannerArchivalInfo::class, 'createFromDiscriminatorValue'])),
            'buckets' => fn(ParseNode $n) => $o->setBuckets($n->getCollectionOfObjectValues([PlannerBucket::class, 'createFromDiscriminatorValue'])),
            'container' => fn(ParseNode $n) => $o->setContainer($n->getObjectValue([PlannerPlanContainer::class, 'createFromDiscriminatorValue'])),
            'contexts' => fn(ParseNode $n) => $o->setContexts($n->getObjectValue([PlannerPlanContextCollection::class, 'createFromDiscriminatorValue'])),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'creationSource' => fn(ParseNode $n) => $o->setCreationSource($n->getObjectValue([PlannerPlanCreation::class, 'createFromDiscriminatorValue'])),
            'details' => fn(ParseNode $n) => $o->setDetails($n->getObjectValue([PlannerPlanDetails::class, 'createFromDiscriminatorValue'])),
            'isArchived' => fn(ParseNode $n) => $o->setIsArchived($n->getBooleanValue()),
            'owner' => fn(ParseNode $n) => $o->setOwner($n->getStringValue()),
            'sharedWithContainers' => fn(ParseNode $n) => $o->setSharedWithContainers($n->getCollectionOfObjectValues([PlannerSharedWithContainer::class, 'createFromDiscriminatorValue'])),
            'tasks' => fn(ParseNode $n) => $o->setTasks($n->getCollectionOfObjectValues([PlannerTask::class, 'createFromDiscriminatorValue'])),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isArchived property value. The isArchived property
     * @return bool|null
    */
    public function getIsArchived(): ?bool {
        $val = $this->getBackingStore()->get('isArchived');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isArchived'");
    }

    /**
     * Gets the owner property value. Use the container property instead. ID of the group that owns the plan. After it's set, this property can’t be updated. This property doesn't return a valid group ID if the container of the plan isn't a group.
     * @return string|null
    */
    public function getOwner(): ?string {
        $val = $this->getBackingStore()->get('owner');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'owner'");
    }

    /**
     * Gets the sharedWithContainers property value. List of containers the plan is shared with.
     * @return array<PlannerSharedWithContainer>|null
    */
    public function getSharedWithContainers(): ?array {
        $val = $this->getBackingStore()->get('sharedWithContainers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PlannerSharedWithContainer::class);
            /** @var array<PlannerSharedWithContainer>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sharedWithContainers'");
    }

    /**
     * Gets the tasks property value. Collection of tasks in the plan. Read-only. Nullable.
     * @return array<PlannerTask>|null
    */
    public function getTasks(): ?array {
        $val = $this->getBackingStore()->get('tasks');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PlannerTask::class);
            /** @var array<PlannerTask>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tasks'");
    }

    /**
     * Gets the title property value. Required. Title of the plan.
     * @return string|null
    */
    public function getTitle(): ?string {
        $val = $this->getBackingStore()->get('title');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'title'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('archivalInfo', $this->getArchivalInfo());
        $writer->writeCollectionOfObjectValues('buckets', $this->getBuckets());
        $writer->writeObjectValue('container', $this->getContainer());
        $writer->writeObjectValue('contexts', $this->getContexts());
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeObjectValue('creationSource', $this->getCreationSource());
        $writer->writeObjectValue('details', $this->getDetails());
        $writer->writeBooleanValue('isArchived', $this->getIsArchived());
        $writer->writeStringValue('owner', $this->getOwner());
        $writer->writeCollectionOfObjectValues('sharedWithContainers', $this->getSharedWithContainers());
        $writer->writeCollectionOfObjectValues('tasks', $this->getTasks());
        $writer->writeStringValue('title', $this->getTitle());
    }

    /**
     * Sets the archivalInfo property value. The archivalInfo property
     * @param PlannerArchivalInfo|null $value Value to set for the archivalInfo property.
    */
    public function setArchivalInfo(?PlannerArchivalInfo $value): void {
        $this->getBackingStore()->set('archivalInfo', $value);
    }

    /**
     * Sets the buckets property value. Collection of buckets in the plan. Read-only. Nullable.
     * @param array<PlannerBucket>|null $value Value to set for the buckets property.
    */
    public function setBuckets(?array $value): void {
        $this->getBackingStore()->set('buckets', $value);
    }

    /**
     * Sets the container property value. Identifies the container of the plan. Either specify all properties, or specify only the url, the containerId, and type. After it's set, this property can’t be updated. It changes when a plan is moved from one container to another, using plan move to container. Required.
     * @param PlannerPlanContainer|null $value Value to set for the container property.
    */
    public function setContainer(?PlannerPlanContainer $value): void {
        $this->getBackingStore()->set('container', $value);
    }

    /**
     * Sets the contexts property value. Read-only. Other user experiences in which this plan is used, represented as plannerPlanContext entries.
     * @param PlannerPlanContextCollection|null $value Value to set for the contexts property.
    */
    public function setContexts(?PlannerPlanContextCollection $value): void {
        $this->getBackingStore()->set('contexts', $value);
    }

    /**
     * Sets the createdBy property value. Read-only. The user who created the plan.
     * @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. Read-only. Date and time at which the plan is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the creationSource property value. Contains information about the origin of the plan.
     * @param PlannerPlanCreation|null $value Value to set for the creationSource property.
    */
    public function setCreationSource(?PlannerPlanCreation $value): void {
        $this->getBackingStore()->set('creationSource', $value);
    }

    /**
     * Sets the details property value. Extra details about the plan. Read-only. Nullable.
     * @param PlannerPlanDetails|null $value Value to set for the details property.
    */
    public function setDetails(?PlannerPlanDetails $value): void {
        $this->getBackingStore()->set('details', $value);
    }

    /**
     * Sets the isArchived property value. The isArchived property
     * @param bool|null $value Value to set for the isArchived property.
    */
    public function setIsArchived(?bool $value): void {
        $this->getBackingStore()->set('isArchived', $value);
    }

    /**
     * Sets the owner property value. Use the container property instead. ID of the group that owns the plan. After it's set, this property can’t be updated. This property doesn't return a valid group ID if the container of the plan isn't a group.
     * @param string|null $value Value to set for the owner property.
    */
    public function setOwner(?string $value): void {
        $this->getBackingStore()->set('owner', $value);
    }

    /**
     * Sets the sharedWithContainers property value. List of containers the plan is shared with.
     * @param array<PlannerSharedWithContainer>|null $value Value to set for the sharedWithContainers property.
    */
    public function setSharedWithContainers(?array $value): void {
        $this->getBackingStore()->set('sharedWithContainers', $value);
    }

    /**
     * Sets the tasks property value. Collection of tasks in the plan. Read-only. Nullable.
     * @param array<PlannerTask>|null $value Value to set for the tasks property.
    */
    public function setTasks(?array $value): void {
        $this->getBackingStore()->set('tasks', $value);
    }

    /**
     * Sets the title property value. Required. Title of the plan.
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->getBackingStore()->set('title', $value);
    }

}

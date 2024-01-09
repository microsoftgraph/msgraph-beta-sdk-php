<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PlannerBucket extends PlannerDelta implements Parsable 
{
    /**
     * Instantiates a new plannerBucket and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlannerBucket
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlannerBucket {
        return new PlannerBucket();
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
     * Gets the creationSource property value. Contains information about the origin of the bucket.
     * @return PlannerBucketCreation|null
    */
    public function getCreationSource(): ?PlannerBucketCreation {
        $val = $this->getBackingStore()->get('creationSource');
        if (is_null($val) || $val instanceof PlannerBucketCreation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'creationSource'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'archivalInfo' => fn(ParseNode $n) => $o->setArchivalInfo($n->getObjectValue([PlannerArchivalInfo::class, 'createFromDiscriminatorValue'])),
            'creationSource' => fn(ParseNode $n) => $o->setCreationSource($n->getObjectValue([PlannerBucketCreation::class, 'createFromDiscriminatorValue'])),
            'isArchived' => fn(ParseNode $n) => $o->setIsArchived($n->getBooleanValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'orderHint' => fn(ParseNode $n) => $o->setOrderHint($n->getStringValue()),
            'planId' => fn(ParseNode $n) => $o->setPlanId($n->getStringValue()),
            'tasks' => fn(ParseNode $n) => $o->setTasks($n->getCollectionOfObjectValues([PlannerTask::class, 'createFromDiscriminatorValue'])),
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
     * Gets the name property value. Name of the bucket.
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
    }

    /**
     * Gets the orderHint property value. Hint used to order items of this type in a list view. For details about the supported format, see Using order hints in Planner.
     * @return string|null
    */
    public function getOrderHint(): ?string {
        $val = $this->getBackingStore()->get('orderHint');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'orderHint'");
    }

    /**
     * Gets the planId property value. Plan ID to which the bucket belongs.
     * @return string|null
    */
    public function getPlanId(): ?string {
        $val = $this->getBackingStore()->get('planId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'planId'");
    }

    /**
     * Gets the tasks property value. Read-only. Nullable. The collection of tasks in the bucket.
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('archivalInfo', $this->getArchivalInfo());
        $writer->writeObjectValue('creationSource', $this->getCreationSource());
        $writer->writeBooleanValue('isArchived', $this->getIsArchived());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('orderHint', $this->getOrderHint());
        $writer->writeStringValue('planId', $this->getPlanId());
        $writer->writeCollectionOfObjectValues('tasks', $this->getTasks());
    }

    /**
     * Sets the archivalInfo property value. The archivalInfo property
     * @param PlannerArchivalInfo|null $value Value to set for the archivalInfo property.
    */
    public function setArchivalInfo(?PlannerArchivalInfo $value): void {
        $this->getBackingStore()->set('archivalInfo', $value);
    }

    /**
     * Sets the creationSource property value. Contains information about the origin of the bucket.
     * @param PlannerBucketCreation|null $value Value to set for the creationSource property.
    */
    public function setCreationSource(?PlannerBucketCreation $value): void {
        $this->getBackingStore()->set('creationSource', $value);
    }

    /**
     * Sets the isArchived property value. The isArchived property
     * @param bool|null $value Value to set for the isArchived property.
    */
    public function setIsArchived(?bool $value): void {
        $this->getBackingStore()->set('isArchived', $value);
    }

    /**
     * Sets the name property value. Name of the bucket.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the orderHint property value. Hint used to order items of this type in a list view. For details about the supported format, see Using order hints in Planner.
     * @param string|null $value Value to set for the orderHint property.
    */
    public function setOrderHint(?string $value): void {
        $this->getBackingStore()->set('orderHint', $value);
    }

    /**
     * Sets the planId property value. Plan ID to which the bucket belongs.
     * @param string|null $value Value to set for the planId property.
    */
    public function setPlanId(?string $value): void {
        $this->getBackingStore()->set('planId', $value);
    }

    /**
     * Sets the tasks property value. Read-only. Nullable. The collection of tasks in the bucket.
     * @param array<PlannerTask>|null $value Value to set for the tasks property.
    */
    public function setTasks(?array $value): void {
        $this->getBackingStore()->set('tasks', $value);
    }

}

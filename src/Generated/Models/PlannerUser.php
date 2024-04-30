<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PlannerUser extends PlannerDelta implements Parsable 
{
    /**
     * Instantiates a new PlannerUser and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlannerUser
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlannerUser {
        return new PlannerUser();
    }

    /**
     * Gets the all property value. The all property
     * @return array<PlannerDelta>|null
    */
    public function getAll(): ?array {
        $val = $this->getBackingStore()->get('all');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PlannerDelta::class);
            /** @var array<PlannerDelta>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'all'");
    }

    /**
     * Gets the favoritePlanReferences property value. A collection that contains the references to the plans that the user marked as favorites.
     * @return PlannerFavoritePlanReferenceCollection|null
    */
    public function getFavoritePlanReferences(): ?PlannerFavoritePlanReferenceCollection {
        $val = $this->getBackingStore()->get('favoritePlanReferences');
        if (is_null($val) || $val instanceof PlannerFavoritePlanReferenceCollection) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'favoritePlanReferences'");
    }

    /**
     * Gets the favoritePlans property value. Read-only. Nullable. Returns the plannerPlans that the user marked as favorites.
     * @return array<PlannerPlan>|null
    */
    public function getFavoritePlans(): ?array {
        $val = $this->getBackingStore()->get('favoritePlans');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PlannerPlan::class);
            /** @var array<PlannerPlan>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'favoritePlans'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'all' => fn(ParseNode $n) => $o->setAll($n->getCollectionOfObjectValues([PlannerDelta::class, 'createFromDiscriminatorValue'])),
            'favoritePlanReferences' => fn(ParseNode $n) => $o->setFavoritePlanReferences($n->getObjectValue([PlannerFavoritePlanReferenceCollection::class, 'createFromDiscriminatorValue'])),
            'favoritePlans' => fn(ParseNode $n) => $o->setFavoritePlans($n->getCollectionOfObjectValues([PlannerPlan::class, 'createFromDiscriminatorValue'])),
            'myDayTasks' => fn(ParseNode $n) => $o->setMyDayTasks($n->getCollectionOfObjectValues([PlannerTask::class, 'createFromDiscriminatorValue'])),
            'plans' => fn(ParseNode $n) => $o->setPlans($n->getCollectionOfObjectValues([PlannerPlan::class, 'createFromDiscriminatorValue'])),
            'recentPlanReferences' => fn(ParseNode $n) => $o->setRecentPlanReferences($n->getObjectValue([PlannerRecentPlanReferenceCollection::class, 'createFromDiscriminatorValue'])),
            'recentPlans' => fn(ParseNode $n) => $o->setRecentPlans($n->getCollectionOfObjectValues([PlannerPlan::class, 'createFromDiscriminatorValue'])),
            'rosterPlans' => fn(ParseNode $n) => $o->setRosterPlans($n->getCollectionOfObjectValues([PlannerPlan::class, 'createFromDiscriminatorValue'])),
            'tasks' => fn(ParseNode $n) => $o->setTasks($n->getCollectionOfObjectValues([PlannerTask::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the myDayTasks property value. Read-only. Nullable. Returns the plannerTasks to be shown in the My Day view of the user.
     * @return array<PlannerTask>|null
    */
    public function getMyDayTasks(): ?array {
        $val = $this->getBackingStore()->get('myDayTasks');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PlannerTask::class);
            /** @var array<PlannerTask>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'myDayTasks'");
    }

    /**
     * Gets the plans property value. The plans property
     * @return array<PlannerPlan>|null
    */
    public function getPlans(): ?array {
        $val = $this->getBackingStore()->get('plans');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PlannerPlan::class);
            /** @var array<PlannerPlan>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'plans'");
    }

    /**
     * Gets the recentPlanReferences property value. A collection that contains references to the plans that the user recently viewed in apps that support recent plans.
     * @return PlannerRecentPlanReferenceCollection|null
    */
    public function getRecentPlanReferences(): ?PlannerRecentPlanReferenceCollection {
        $val = $this->getBackingStore()->get('recentPlanReferences');
        if (is_null($val) || $val instanceof PlannerRecentPlanReferenceCollection) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recentPlanReferences'");
    }

    /**
     * Gets the recentPlans property value. Read-only. Nullable. Returns the plannerPlans that the user recently viewed in apps that support recent plans.
     * @return array<PlannerPlan>|null
    */
    public function getRecentPlans(): ?array {
        $val = $this->getBackingStore()->get('recentPlans');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PlannerPlan::class);
            /** @var array<PlannerPlan>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recentPlans'");
    }

    /**
     * Gets the rosterPlans property value. Read-only. Nullable. Returns the plannerPlans contained by the plannerRosters the user is a member.
     * @return array<PlannerPlan>|null
    */
    public function getRosterPlans(): ?array {
        $val = $this->getBackingStore()->get('rosterPlans');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PlannerPlan::class);
            /** @var array<PlannerPlan>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rosterPlans'");
    }

    /**
     * Gets the tasks property value. Read-only. Nullable. Returns the plannerTasks assigned to the user.
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
        $writer->writeCollectionOfObjectValues('all', $this->getAll());
        $writer->writeObjectValue('favoritePlanReferences', $this->getFavoritePlanReferences());
        $writer->writeCollectionOfObjectValues('favoritePlans', $this->getFavoritePlans());
        $writer->writeCollectionOfObjectValues('myDayTasks', $this->getMyDayTasks());
        $writer->writeCollectionOfObjectValues('plans', $this->getPlans());
        $writer->writeObjectValue('recentPlanReferences', $this->getRecentPlanReferences());
        $writer->writeCollectionOfObjectValues('recentPlans', $this->getRecentPlans());
        $writer->writeCollectionOfObjectValues('rosterPlans', $this->getRosterPlans());
        $writer->writeCollectionOfObjectValues('tasks', $this->getTasks());
    }

    /**
     * Sets the all property value. The all property
     * @param array<PlannerDelta>|null $value Value to set for the all property.
    */
    public function setAll(?array $value): void {
        $this->getBackingStore()->set('all', $value);
    }

    /**
     * Sets the favoritePlanReferences property value. A collection that contains the references to the plans that the user marked as favorites.
     * @param PlannerFavoritePlanReferenceCollection|null $value Value to set for the favoritePlanReferences property.
    */
    public function setFavoritePlanReferences(?PlannerFavoritePlanReferenceCollection $value): void {
        $this->getBackingStore()->set('favoritePlanReferences', $value);
    }

    /**
     * Sets the favoritePlans property value. Read-only. Nullable. Returns the plannerPlans that the user marked as favorites.
     * @param array<PlannerPlan>|null $value Value to set for the favoritePlans property.
    */
    public function setFavoritePlans(?array $value): void {
        $this->getBackingStore()->set('favoritePlans', $value);
    }

    /**
     * Sets the myDayTasks property value. Read-only. Nullable. Returns the plannerTasks to be shown in the My Day view of the user.
     * @param array<PlannerTask>|null $value Value to set for the myDayTasks property.
    */
    public function setMyDayTasks(?array $value): void {
        $this->getBackingStore()->set('myDayTasks', $value);
    }

    /**
     * Sets the plans property value. The plans property
     * @param array<PlannerPlan>|null $value Value to set for the plans property.
    */
    public function setPlans(?array $value): void {
        $this->getBackingStore()->set('plans', $value);
    }

    /**
     * Sets the recentPlanReferences property value. A collection that contains references to the plans that the user recently viewed in apps that support recent plans.
     * @param PlannerRecentPlanReferenceCollection|null $value Value to set for the recentPlanReferences property.
    */
    public function setRecentPlanReferences(?PlannerRecentPlanReferenceCollection $value): void {
        $this->getBackingStore()->set('recentPlanReferences', $value);
    }

    /**
     * Sets the recentPlans property value. Read-only. Nullable. Returns the plannerPlans that the user recently viewed in apps that support recent plans.
     * @param array<PlannerPlan>|null $value Value to set for the recentPlans property.
    */
    public function setRecentPlans(?array $value): void {
        $this->getBackingStore()->set('recentPlans', $value);
    }

    /**
     * Sets the rosterPlans property value. Read-only. Nullable. Returns the plannerPlans contained by the plannerRosters the user is a member.
     * @param array<PlannerPlan>|null $value Value to set for the rosterPlans property.
    */
    public function setRosterPlans(?array $value): void {
        $this->getBackingStore()->set('rosterPlans', $value);
    }

    /**
     * Sets the tasks property value. Read-only. Nullable. Returns the plannerTasks assigned to the user.
     * @param array<PlannerTask>|null $value Value to set for the tasks property.
    */
    public function setTasks(?array $value): void {
        $this->getBackingStore()->set('tasks', $value);
    }

}

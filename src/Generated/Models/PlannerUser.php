<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PlannerUser extends PlannerDelta implements Parsable 
{
    /**
     * @var array<PlannerDelta>|null $all The all property
    */
    private ?array $all = null;
    
    /**
     * @var PlannerFavoritePlanReferenceCollection|null $favoritePlanReferences A collection containing the references to the plans that the user has marked as favorites.
    */
    private ?PlannerFavoritePlanReferenceCollection $favoritePlanReferences = null;
    
    /**
     * @var array<PlannerPlan>|null $favoritePlans Read-only. Nullable. Returns the plannerPlans that the user marked as favorites.
    */
    private ?array $favoritePlans = null;
    
    /**
     * @var array<PlannerPlan>|null $plans The plans property
    */
    private ?array $plans = null;
    
    /**
     * @var PlannerRecentPlanReferenceCollection|null $recentPlanReferences A collection containing references to the plans that were viewed recently by the user in apps that support recent plans.
    */
    private ?PlannerRecentPlanReferenceCollection $recentPlanReferences = null;
    
    /**
     * @var array<PlannerPlan>|null $recentPlans Read-only. Nullable. Returns the plannerPlans that have been recently viewed by the user in apps that support recent plans.
    */
    private ?array $recentPlans = null;
    
    /**
     * @var array<PlannerPlan>|null $rosterPlans Read-only. Nullable. Returns the plannerPlans contained by the plannerRosters the user is a member.
    */
    private ?array $rosterPlans = null;
    
    /**
     * @var array<PlannerTask>|null $tasks Read-only. Nullable. Returns the plannerTasks assigned to the user.
    */
    private ?array $tasks = null;
    
    /**
     * Instantiates a new PlannerUser and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.plannerUser');
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
        return $this->all;
    }

    /**
     * Gets the favoritePlanReferences property value. A collection containing the references to the plans that the user has marked as favorites.
     * @return PlannerFavoritePlanReferenceCollection|null
    */
    public function getFavoritePlanReferences(): ?PlannerFavoritePlanReferenceCollection {
        return $this->favoritePlanReferences;
    }

    /**
     * Gets the favoritePlans property value. Read-only. Nullable. Returns the plannerPlans that the user marked as favorites.
     * @return array<PlannerPlan>|null
    */
    public function getFavoritePlans(): ?array {
        return $this->favoritePlans;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'all' => fn(ParseNode $n) => $o->setAll($n->getCollectionOfObjectValues([PlannerDelta::class, 'createFromDiscriminatorValue'])),
            'favoritePlanReferences' => fn(ParseNode $n) => $o->setFavoritePlanReferences($n->getObjectValue([PlannerFavoritePlanReferenceCollection::class, 'createFromDiscriminatorValue'])),
            'favoritePlans' => fn(ParseNode $n) => $o->setFavoritePlans($n->getCollectionOfObjectValues([PlannerPlan::class, 'createFromDiscriminatorValue'])),
            'plans' => fn(ParseNode $n) => $o->setPlans($n->getCollectionOfObjectValues([PlannerPlan::class, 'createFromDiscriminatorValue'])),
            'recentPlanReferences' => fn(ParseNode $n) => $o->setRecentPlanReferences($n->getObjectValue([PlannerRecentPlanReferenceCollection::class, 'createFromDiscriminatorValue'])),
            'recentPlans' => fn(ParseNode $n) => $o->setRecentPlans($n->getCollectionOfObjectValues([PlannerPlan::class, 'createFromDiscriminatorValue'])),
            'rosterPlans' => fn(ParseNode $n) => $o->setRosterPlans($n->getCollectionOfObjectValues([PlannerPlan::class, 'createFromDiscriminatorValue'])),
            'tasks' => fn(ParseNode $n) => $o->setTasks($n->getCollectionOfObjectValues([PlannerTask::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the plans property value. The plans property
     * @return array<PlannerPlan>|null
    */
    public function getPlans(): ?array {
        return $this->plans;
    }

    /**
     * Gets the recentPlanReferences property value. A collection containing references to the plans that were viewed recently by the user in apps that support recent plans.
     * @return PlannerRecentPlanReferenceCollection|null
    */
    public function getRecentPlanReferences(): ?PlannerRecentPlanReferenceCollection {
        return $this->recentPlanReferences;
    }

    /**
     * Gets the recentPlans property value. Read-only. Nullable. Returns the plannerPlans that have been recently viewed by the user in apps that support recent plans.
     * @return array<PlannerPlan>|null
    */
    public function getRecentPlans(): ?array {
        return $this->recentPlans;
    }

    /**
     * Gets the rosterPlans property value. Read-only. Nullable. Returns the plannerPlans contained by the plannerRosters the user is a member.
     * @return array<PlannerPlan>|null
    */
    public function getRosterPlans(): ?array {
        return $this->rosterPlans;
    }

    /**
     * Gets the tasks property value. Read-only. Nullable. Returns the plannerTasks assigned to the user.
     * @return array<PlannerTask>|null
    */
    public function getTasks(): ?array {
        return $this->tasks;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('all', $this->all);
        $writer->writeObjectValue('favoritePlanReferences', $this->favoritePlanReferences);
        $writer->writeCollectionOfObjectValues('favoritePlans', $this->favoritePlans);
        $writer->writeCollectionOfObjectValues('plans', $this->plans);
        $writer->writeObjectValue('recentPlanReferences', $this->recentPlanReferences);
        $writer->writeCollectionOfObjectValues('recentPlans', $this->recentPlans);
        $writer->writeCollectionOfObjectValues('rosterPlans', $this->rosterPlans);
        $writer->writeCollectionOfObjectValues('tasks', $this->tasks);
    }

    /**
     * Sets the all property value. The all property
     *  @param array<PlannerDelta>|null $value Value to set for the all property.
    */
    public function setAll(?array $value ): void {
        $this->all = $value;
    }

    /**
     * Sets the favoritePlanReferences property value. A collection containing the references to the plans that the user has marked as favorites.
     *  @param PlannerFavoritePlanReferenceCollection|null $value Value to set for the favoritePlanReferences property.
    */
    public function setFavoritePlanReferences(?PlannerFavoritePlanReferenceCollection $value ): void {
        $this->favoritePlanReferences = $value;
    }

    /**
     * Sets the favoritePlans property value. Read-only. Nullable. Returns the plannerPlans that the user marked as favorites.
     *  @param array<PlannerPlan>|null $value Value to set for the favoritePlans property.
    */
    public function setFavoritePlans(?array $value ): void {
        $this->favoritePlans = $value;
    }

    /**
     * Sets the plans property value. The plans property
     *  @param array<PlannerPlan>|null $value Value to set for the plans property.
    */
    public function setPlans(?array $value ): void {
        $this->plans = $value;
    }

    /**
     * Sets the recentPlanReferences property value. A collection containing references to the plans that were viewed recently by the user in apps that support recent plans.
     *  @param PlannerRecentPlanReferenceCollection|null $value Value to set for the recentPlanReferences property.
    */
    public function setRecentPlanReferences(?PlannerRecentPlanReferenceCollection $value ): void {
        $this->recentPlanReferences = $value;
    }

    /**
     * Sets the recentPlans property value. Read-only. Nullable. Returns the plannerPlans that have been recently viewed by the user in apps that support recent plans.
     *  @param array<PlannerPlan>|null $value Value to set for the recentPlans property.
    */
    public function setRecentPlans(?array $value ): void {
        $this->recentPlans = $value;
    }

    /**
     * Sets the rosterPlans property value. Read-only. Nullable. Returns the plannerPlans contained by the plannerRosters the user is a member.
     *  @param array<PlannerPlan>|null $value Value to set for the rosterPlans property.
    */
    public function setRosterPlans(?array $value ): void {
        $this->rosterPlans = $value;
    }

    /**
     * Sets the tasks property value. Read-only. Nullable. Returns the plannerTasks assigned to the user.
     *  @param array<PlannerTask>|null $value Value to set for the tasks property.
    */
    public function setTasks(?array $value ): void {
        $this->tasks = $value;
    }

}

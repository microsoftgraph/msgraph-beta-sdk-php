<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class BusinessScenarioPlanner extends Entity implements Parsable 
{
    /**
     * Instantiates a new BusinessScenarioPlanner and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BusinessScenarioPlanner
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BusinessScenarioPlanner {
        return new BusinessScenarioPlanner();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'planConfiguration' => fn(ParseNode $n) => $o->setPlanConfiguration($n->getObjectValue([PlannerPlanConfiguration::class, 'createFromDiscriminatorValue'])),
            'taskConfiguration' => fn(ParseNode $n) => $o->setTaskConfiguration($n->getObjectValue([PlannerTaskConfiguration::class, 'createFromDiscriminatorValue'])),
            'tasks' => fn(ParseNode $n) => $o->setTasks($n->getCollectionOfObjectValues([BusinessScenarioTask::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the planConfiguration property value. The configuration of Planner plans that will be created for the scenario.
     * @return PlannerPlanConfiguration|null
    */
    public function getPlanConfiguration(): ?PlannerPlanConfiguration {
        $val = $this->getBackingStore()->get('planConfiguration');
        if (is_null($val) || $val instanceof PlannerPlanConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'planConfiguration'");
    }

    /**
     * Gets the taskConfiguration property value. The configuration of Planner tasks that will be created for the scenario.
     * @return PlannerTaskConfiguration|null
    */
    public function getTaskConfiguration(): ?PlannerTaskConfiguration {
        $val = $this->getBackingStore()->get('taskConfiguration');
        if (is_null($val) || $val instanceof PlannerTaskConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'taskConfiguration'");
    }

    /**
     * Gets the tasks property value. The Planner tasks for the scenario.
     * @return array<BusinessScenarioTask>|null
    */
    public function getTasks(): ?array {
        $val = $this->getBackingStore()->get('tasks');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, BusinessScenarioTask::class);
            /** @var array<BusinessScenarioTask>|null $val */
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
        $writer->writeObjectValue('planConfiguration', $this->getPlanConfiguration());
        $writer->writeObjectValue('taskConfiguration', $this->getTaskConfiguration());
        $writer->writeCollectionOfObjectValues('tasks', $this->getTasks());
    }

    /**
     * Sets the planConfiguration property value. The configuration of Planner plans that will be created for the scenario.
     * @param PlannerPlanConfiguration|null $value Value to set for the planConfiguration property.
    */
    public function setPlanConfiguration(?PlannerPlanConfiguration $value): void {
        $this->getBackingStore()->set('planConfiguration', $value);
    }

    /**
     * Sets the taskConfiguration property value. The configuration of Planner tasks that will be created for the scenario.
     * @param PlannerTaskConfiguration|null $value Value to set for the taskConfiguration property.
    */
    public function setTaskConfiguration(?PlannerTaskConfiguration $value): void {
        $this->getBackingStore()->set('taskConfiguration', $value);
    }

    /**
     * Sets the tasks property value. The Planner tasks for the scenario.
     * @param array<BusinessScenarioTask>|null $value Value to set for the tasks property.
    */
    public function setTasks(?array $value): void {
        $this->getBackingStore()->set('tasks', $value);
    }

}

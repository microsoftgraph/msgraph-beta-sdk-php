<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class TeamsChannelPlanner extends Entity implements Parsable 
{
    /**
     * Instantiates a new TeamsChannelPlanner and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamsChannelPlanner
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamsChannelPlanner {
        return new TeamsChannelPlanner();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'plans' => fn(ParseNode $n) => $o->setPlans($n->getCollectionOfObjectValues([PlannerPlan::class, 'createFromDiscriminatorValue'])),
            'plans_v2' => fn(ParseNode $n) => $o->setPlansV2($n->getCollectionOfObjectValues([Plan::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the plans property value. A collection of plannerPlan objects owned by the Teams channel. Currently, only shared channels are supported. Read-only. Nullable.
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
     * Gets the plans_v2 property value. Read-only. Nullable. The collection of Planner Graph V4 plans owned by the Teams channel. Currently, only shared channels are supported.
     * @return array<Plan>|null
    */
    public function getPlansV2(): ?array {
        $val = $this->getBackingStore()->get('plans_v2');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Plan::class);
            /** @var array<Plan>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'plans_v2'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('plans', $this->getPlans());
        $writer->writeCollectionOfObjectValues('plans_v2', $this->getPlansV2());
    }

    /**
     * Sets the plans property value. A collection of plannerPlan objects owned by the Teams channel. Currently, only shared channels are supported. Read-only. Nullable.
     * @param array<PlannerPlan>|null $value Value to set for the plans property.
    */
    public function setPlans(?array $value): void {
        $this->getBackingStore()->set('plans', $value);
    }

    /**
     * Sets the plans_v2 property value. Read-only. Nullable. The collection of Planner Graph V4 plans owned by the Teams channel. Currently, only shared channels are supported.
     * @param array<Plan>|null $value Value to set for the plans_v2 property.
    */
    public function setPlansV2(?array $value): void {
        $this->getBackingStore()->set('plans_v2', $value);
    }

}

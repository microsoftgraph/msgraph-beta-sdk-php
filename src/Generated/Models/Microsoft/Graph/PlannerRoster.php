<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PlannerRoster extends Entity 
{
    /** @var array<PlannerRosterMember>|null $members Retrieves the members of the plannerRoster. */
    private ?array $members = null;
    
    /** @var array<PlannerPlan>|null $plans Retrieves the plans contained by the plannerRoster. */
    private ?array $plans = null;
    
    /**
     * Instantiates a new plannerRoster and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlannerRoster
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): PlannerRoster {
        return new PlannerRoster();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'members' => function (self $o, ParseNode $n) { $o->setMembers($n->getCollectionOfObjectValues(PlannerRosterMember::class)); },
            'plans' => function (self $o, ParseNode $n) { $o->setPlans($n->getCollectionOfObjectValues(PlannerPlan::class)); },
        ]);
    }

    /**
     * Gets the members property value. Retrieves the members of the plannerRoster.
     * @return array<PlannerRosterMember>|null
    */
    public function getMembers(): ?array {
        return $this->members;
    }

    /**
     * Gets the plans property value. Retrieves the plans contained by the plannerRoster.
     * @return array<PlannerPlan>|null
    */
    public function getPlans(): ?array {
        return $this->plans;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('members', $this->members);
        $writer->writeCollectionOfObjectValues('plans', $this->plans);
    }

    /**
     * Sets the members property value. Retrieves the members of the plannerRoster.
     *  @param array<PlannerRosterMember>|null $value Value to set for the members property.
    */
    public function setMembers(?array $value ): void {
        $this->members = $value;
    }

    /**
     * Sets the plans property value. Retrieves the plans contained by the plannerRoster.
     *  @param array<PlannerPlan>|null $value Value to set for the plans property.
    */
    public function setPlans(?array $value ): void {
        $this->plans = $value;
    }

}

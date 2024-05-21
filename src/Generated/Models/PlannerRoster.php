<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PlannerRoster extends Entity implements Parsable 
{
    /**
     * Instantiates a new PlannerRoster and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlannerRoster
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlannerRoster {
        return new PlannerRoster();
    }

    /**
     * Gets the assignedSensitivityLabel property value. The assignedSensitivityLabel property
     * @return SensitivityLabelAssignment|null
    */
    public function getAssignedSensitivityLabel(): ?SensitivityLabelAssignment {
        $val = $this->getBackingStore()->get('assignedSensitivityLabel');
        if (is_null($val) || $val instanceof SensitivityLabelAssignment) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignedSensitivityLabel'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignedSensitivityLabel' => fn(ParseNode $n) => $o->setAssignedSensitivityLabel($n->getObjectValue([SensitivityLabelAssignment::class, 'createFromDiscriminatorValue'])),
            'members' => fn(ParseNode $n) => $o->setMembers($n->getCollectionOfObjectValues([PlannerRosterMember::class, 'createFromDiscriminatorValue'])),
            'plans' => fn(ParseNode $n) => $o->setPlans($n->getCollectionOfObjectValues([PlannerPlan::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the members property value. Retrieves the members of the plannerRoster.
     * @return array<PlannerRosterMember>|null
    */
    public function getMembers(): ?array {
        $val = $this->getBackingStore()->get('members');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PlannerRosterMember::class);
            /** @var array<PlannerRosterMember>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'members'");
    }

    /**
     * Gets the plans property value. Retrieves the plans contained by the plannerRoster.
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('assignedSensitivityLabel', $this->getAssignedSensitivityLabel());
        $writer->writeCollectionOfObjectValues('members', $this->getMembers());
        $writer->writeCollectionOfObjectValues('plans', $this->getPlans());
    }

    /**
     * Sets the assignedSensitivityLabel property value. The assignedSensitivityLabel property
     * @param SensitivityLabelAssignment|null $value Value to set for the assignedSensitivityLabel property.
    */
    public function setAssignedSensitivityLabel(?SensitivityLabelAssignment $value): void {
        $this->getBackingStore()->set('assignedSensitivityLabel', $value);
    }

    /**
     * Sets the members property value. Retrieves the members of the plannerRoster.
     * @param array<PlannerRosterMember>|null $value Value to set for the members property.
    */
    public function setMembers(?array $value): void {
        $this->getBackingStore()->set('members', $value);
    }

    /**
     * Sets the plans property value. Retrieves the plans contained by the plannerRoster.
     * @param array<PlannerPlan>|null $value Value to set for the plans property.
    */
    public function setPlans(?array $value): void {
        $this->getBackingStore()->set('plans', $value);
    }

}

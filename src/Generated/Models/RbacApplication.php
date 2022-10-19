<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RbacApplication extends Entity implements Parsable 
{
    /**
     * @var array<UnifiedRbacResourceNamespace>|null $resourceNamespaces The resourceNamespaces property
    */
    private ?array $resourceNamespaces = null;
    
    /**
     * @var array<Approval>|null $roleAssignmentApprovals The roleAssignmentApprovals property
    */
    private ?array $roleAssignmentApprovals = null;
    
    /**
     * @var array<UnifiedRoleAssignment>|null $roleAssignments The roleAssignments property
    */
    private ?array $roleAssignments = null;
    
    /**
     * @var array<UnifiedRoleAssignmentScheduleInstance>|null $roleAssignmentScheduleInstances The roleAssignmentScheduleInstances property
    */
    private ?array $roleAssignmentScheduleInstances = null;
    
    /**
     * @var array<UnifiedRoleAssignmentScheduleRequest>|null $roleAssignmentScheduleRequests The roleAssignmentScheduleRequests property
    */
    private ?array $roleAssignmentScheduleRequests = null;
    
    /**
     * @var array<UnifiedRoleAssignmentSchedule>|null $roleAssignmentSchedules The roleAssignmentSchedules property
    */
    private ?array $roleAssignmentSchedules = null;
    
    /**
     * @var array<UnifiedRoleDefinition>|null $roleDefinitions The roleDefinitions property
    */
    private ?array $roleDefinitions = null;
    
    /**
     * @var array<UnifiedRoleEligibilityScheduleInstance>|null $roleEligibilityScheduleInstances The roleEligibilityScheduleInstances property
    */
    private ?array $roleEligibilityScheduleInstances = null;
    
    /**
     * @var array<UnifiedRoleEligibilityScheduleRequest>|null $roleEligibilityScheduleRequests The roleEligibilityScheduleRequests property
    */
    private ?array $roleEligibilityScheduleRequests = null;
    
    /**
     * @var array<UnifiedRoleEligibilitySchedule>|null $roleEligibilitySchedules The roleEligibilitySchedules property
    */
    private ?array $roleEligibilitySchedules = null;
    
    /**
     * @var array<UnifiedRoleAssignment>|null $transitiveRoleAssignments The transitiveRoleAssignments property
    */
    private ?array $transitiveRoleAssignments = null;
    
    /**
     * Instantiates a new RbacApplication and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.rbacApplication');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RbacApplication
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RbacApplication {
        return new RbacApplication();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'resourceNamespaces' => fn(ParseNode $n) => $o->setResourceNamespaces($n->getCollectionOfObjectValues([UnifiedRbacResourceNamespace::class, 'createFromDiscriminatorValue'])),
            'roleAssignmentApprovals' => fn(ParseNode $n) => $o->setRoleAssignmentApprovals($n->getCollectionOfObjectValues([Approval::class, 'createFromDiscriminatorValue'])),
            'roleAssignments' => fn(ParseNode $n) => $o->setRoleAssignments($n->getCollectionOfObjectValues([UnifiedRoleAssignment::class, 'createFromDiscriminatorValue'])),
            'roleAssignmentScheduleInstances' => fn(ParseNode $n) => $o->setRoleAssignmentScheduleInstances($n->getCollectionOfObjectValues([UnifiedRoleAssignmentScheduleInstance::class, 'createFromDiscriminatorValue'])),
            'roleAssignmentScheduleRequests' => fn(ParseNode $n) => $o->setRoleAssignmentScheduleRequests($n->getCollectionOfObjectValues([UnifiedRoleAssignmentScheduleRequest::class, 'createFromDiscriminatorValue'])),
            'roleAssignmentSchedules' => fn(ParseNode $n) => $o->setRoleAssignmentSchedules($n->getCollectionOfObjectValues([UnifiedRoleAssignmentSchedule::class, 'createFromDiscriminatorValue'])),
            'roleDefinitions' => fn(ParseNode $n) => $o->setRoleDefinitions($n->getCollectionOfObjectValues([UnifiedRoleDefinition::class, 'createFromDiscriminatorValue'])),
            'roleEligibilityScheduleInstances' => fn(ParseNode $n) => $o->setRoleEligibilityScheduleInstances($n->getCollectionOfObjectValues([UnifiedRoleEligibilityScheduleInstance::class, 'createFromDiscriminatorValue'])),
            'roleEligibilityScheduleRequests' => fn(ParseNode $n) => $o->setRoleEligibilityScheduleRequests($n->getCollectionOfObjectValues([UnifiedRoleEligibilityScheduleRequest::class, 'createFromDiscriminatorValue'])),
            'roleEligibilitySchedules' => fn(ParseNode $n) => $o->setRoleEligibilitySchedules($n->getCollectionOfObjectValues([UnifiedRoleEligibilitySchedule::class, 'createFromDiscriminatorValue'])),
            'transitiveRoleAssignments' => fn(ParseNode $n) => $o->setTransitiveRoleAssignments($n->getCollectionOfObjectValues([UnifiedRoleAssignment::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the resourceNamespaces property value. The resourceNamespaces property
     * @return array<UnifiedRbacResourceNamespace>|null
    */
    public function getResourceNamespaces(): ?array {
        return $this->resourceNamespaces;
    }

    /**
     * Gets the roleAssignmentApprovals property value. The roleAssignmentApprovals property
     * @return array<Approval>|null
    */
    public function getRoleAssignmentApprovals(): ?array {
        return $this->roleAssignmentApprovals;
    }

    /**
     * Gets the roleAssignments property value. The roleAssignments property
     * @return array<UnifiedRoleAssignment>|null
    */
    public function getRoleAssignments(): ?array {
        return $this->roleAssignments;
    }

    /**
     * Gets the roleAssignmentScheduleInstances property value. The roleAssignmentScheduleInstances property
     * @return array<UnifiedRoleAssignmentScheduleInstance>|null
    */
    public function getRoleAssignmentScheduleInstances(): ?array {
        return $this->roleAssignmentScheduleInstances;
    }

    /**
     * Gets the roleAssignmentScheduleRequests property value. The roleAssignmentScheduleRequests property
     * @return array<UnifiedRoleAssignmentScheduleRequest>|null
    */
    public function getRoleAssignmentScheduleRequests(): ?array {
        return $this->roleAssignmentScheduleRequests;
    }

    /**
     * Gets the roleAssignmentSchedules property value. The roleAssignmentSchedules property
     * @return array<UnifiedRoleAssignmentSchedule>|null
    */
    public function getRoleAssignmentSchedules(): ?array {
        return $this->roleAssignmentSchedules;
    }

    /**
     * Gets the roleDefinitions property value. The roleDefinitions property
     * @return array<UnifiedRoleDefinition>|null
    */
    public function getRoleDefinitions(): ?array {
        return $this->roleDefinitions;
    }

    /**
     * Gets the roleEligibilityScheduleInstances property value. The roleEligibilityScheduleInstances property
     * @return array<UnifiedRoleEligibilityScheduleInstance>|null
    */
    public function getRoleEligibilityScheduleInstances(): ?array {
        return $this->roleEligibilityScheduleInstances;
    }

    /**
     * Gets the roleEligibilityScheduleRequests property value. The roleEligibilityScheduleRequests property
     * @return array<UnifiedRoleEligibilityScheduleRequest>|null
    */
    public function getRoleEligibilityScheduleRequests(): ?array {
        return $this->roleEligibilityScheduleRequests;
    }

    /**
     * Gets the roleEligibilitySchedules property value. The roleEligibilitySchedules property
     * @return array<UnifiedRoleEligibilitySchedule>|null
    */
    public function getRoleEligibilitySchedules(): ?array {
        return $this->roleEligibilitySchedules;
    }

    /**
     * Gets the transitiveRoleAssignments property value. The transitiveRoleAssignments property
     * @return array<UnifiedRoleAssignment>|null
    */
    public function getTransitiveRoleAssignments(): ?array {
        return $this->transitiveRoleAssignments;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('resourceNamespaces', $this->resourceNamespaces);
        $writer->writeCollectionOfObjectValues('roleAssignmentApprovals', $this->roleAssignmentApprovals);
        $writer->writeCollectionOfObjectValues('roleAssignments', $this->roleAssignments);
        $writer->writeCollectionOfObjectValues('roleAssignmentScheduleInstances', $this->roleAssignmentScheduleInstances);
        $writer->writeCollectionOfObjectValues('roleAssignmentScheduleRequests', $this->roleAssignmentScheduleRequests);
        $writer->writeCollectionOfObjectValues('roleAssignmentSchedules', $this->roleAssignmentSchedules);
        $writer->writeCollectionOfObjectValues('roleDefinitions', $this->roleDefinitions);
        $writer->writeCollectionOfObjectValues('roleEligibilityScheduleInstances', $this->roleEligibilityScheduleInstances);
        $writer->writeCollectionOfObjectValues('roleEligibilityScheduleRequests', $this->roleEligibilityScheduleRequests);
        $writer->writeCollectionOfObjectValues('roleEligibilitySchedules', $this->roleEligibilitySchedules);
        $writer->writeCollectionOfObjectValues('transitiveRoleAssignments', $this->transitiveRoleAssignments);
    }

    /**
     * Sets the resourceNamespaces property value. The resourceNamespaces property
     *  @param array<UnifiedRbacResourceNamespace>|null $value Value to set for the resourceNamespaces property.
    */
    public function setResourceNamespaces(?array $value ): void {
        $this->resourceNamespaces = $value;
    }

    /**
     * Sets the roleAssignmentApprovals property value. The roleAssignmentApprovals property
     *  @param array<Approval>|null $value Value to set for the roleAssignmentApprovals property.
    */
    public function setRoleAssignmentApprovals(?array $value ): void {
        $this->roleAssignmentApprovals = $value;
    }

    /**
     * Sets the roleAssignments property value. The roleAssignments property
     *  @param array<UnifiedRoleAssignment>|null $value Value to set for the roleAssignments property.
    */
    public function setRoleAssignments(?array $value ): void {
        $this->roleAssignments = $value;
    }

    /**
     * Sets the roleAssignmentScheduleInstances property value. The roleAssignmentScheduleInstances property
     *  @param array<UnifiedRoleAssignmentScheduleInstance>|null $value Value to set for the roleAssignmentScheduleInstances property.
    */
    public function setRoleAssignmentScheduleInstances(?array $value ): void {
        $this->roleAssignmentScheduleInstances = $value;
    }

    /**
     * Sets the roleAssignmentScheduleRequests property value. The roleAssignmentScheduleRequests property
     *  @param array<UnifiedRoleAssignmentScheduleRequest>|null $value Value to set for the roleAssignmentScheduleRequests property.
    */
    public function setRoleAssignmentScheduleRequests(?array $value ): void {
        $this->roleAssignmentScheduleRequests = $value;
    }

    /**
     * Sets the roleAssignmentSchedules property value. The roleAssignmentSchedules property
     *  @param array<UnifiedRoleAssignmentSchedule>|null $value Value to set for the roleAssignmentSchedules property.
    */
    public function setRoleAssignmentSchedules(?array $value ): void {
        $this->roleAssignmentSchedules = $value;
    }

    /**
     * Sets the roleDefinitions property value. The roleDefinitions property
     *  @param array<UnifiedRoleDefinition>|null $value Value to set for the roleDefinitions property.
    */
    public function setRoleDefinitions(?array $value ): void {
        $this->roleDefinitions = $value;
    }

    /**
     * Sets the roleEligibilityScheduleInstances property value. The roleEligibilityScheduleInstances property
     *  @param array<UnifiedRoleEligibilityScheduleInstance>|null $value Value to set for the roleEligibilityScheduleInstances property.
    */
    public function setRoleEligibilityScheduleInstances(?array $value ): void {
        $this->roleEligibilityScheduleInstances = $value;
    }

    /**
     * Sets the roleEligibilityScheduleRequests property value. The roleEligibilityScheduleRequests property
     *  @param array<UnifiedRoleEligibilityScheduleRequest>|null $value Value to set for the roleEligibilityScheduleRequests property.
    */
    public function setRoleEligibilityScheduleRequests(?array $value ): void {
        $this->roleEligibilityScheduleRequests = $value;
    }

    /**
     * Sets the roleEligibilitySchedules property value. The roleEligibilitySchedules property
     *  @param array<UnifiedRoleEligibilitySchedule>|null $value Value to set for the roleEligibilitySchedules property.
    */
    public function setRoleEligibilitySchedules(?array $value ): void {
        $this->roleEligibilitySchedules = $value;
    }

    /**
     * Sets the transitiveRoleAssignments property value. The transitiveRoleAssignments property
     *  @param array<UnifiedRoleAssignment>|null $value Value to set for the transitiveRoleAssignments property.
    */
    public function setTransitiveRoleAssignments(?array $value ): void {
        $this->transitiveRoleAssignments = $value;
    }

}

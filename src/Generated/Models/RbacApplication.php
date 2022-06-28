<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RbacApplication extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<UnifiedRbacResourceNamespace>|null $resourceNamespaces The resourceNamespaces property
    */
    private ?array $resourceNamespaces = null;
    
    /**
     * @var array<Approval>|null $roleAssignmentApprovals The roleAssignmentApprovals property
    */
    private ?array $roleAssignmentApprovals = null;
    
    /**
     * @var array<UnifiedRoleAssignment>|null $roleAssignments Resource to grant access to users or groups.
    */
    private ?array $roleAssignments = null;
    
    /**
     * @var array<UnifiedRoleAssignmentScheduleInstance>|null $roleAssignmentScheduleInstances Instances for active role assignments.
    */
    private ?array $roleAssignmentScheduleInstances = null;
    
    /**
     * @var array<UnifiedRoleAssignmentScheduleRequest>|null $roleAssignmentScheduleRequests Requests for active role assignments to principals through PIM.
    */
    private ?array $roleAssignmentScheduleRequests = null;
    
    /**
     * @var array<UnifiedRoleAssignmentSchedule>|null $roleAssignmentSchedules Schedules for active role assignment operations.
    */
    private ?array $roleAssignmentSchedules = null;
    
    /**
     * @var array<UnifiedRoleDefinition>|null $roleDefinitions Resource representing the roles allowed by RBAC providers and the permissions assigned to the roles.
    */
    private ?array $roleDefinitions = null;
    
    /**
     * @var array<UnifiedRoleEligibilityScheduleInstance>|null $roleEligibilityScheduleInstances Instances for role eligibility requests.
    */
    private ?array $roleEligibilityScheduleInstances = null;
    
    /**
     * @var array<UnifiedRoleEligibilityScheduleRequest>|null $roleEligibilityScheduleRequests Requests for role eligibilities for principals through PIM.
    */
    private ?array $roleEligibilityScheduleRequests = null;
    
    /**
     * @var array<UnifiedRoleEligibilitySchedule>|null $roleEligibilitySchedules Schedules for role eligibility operations.
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
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'resourceNamespaces' => function (ParseNode $n) use ($o) { $o->setResourceNamespaces($n->getCollectionOfObjectValues(array(UnifiedRbacResourceNamespace::class, 'createFromDiscriminatorValue'))); },
            'roleAssignmentApprovals' => function (ParseNode $n) use ($o) { $o->setRoleAssignmentApprovals($n->getCollectionOfObjectValues(array(Approval::class, 'createFromDiscriminatorValue'))); },
            'roleAssignments' => function (ParseNode $n) use ($o) { $o->setRoleAssignments($n->getCollectionOfObjectValues(array(UnifiedRoleAssignment::class, 'createFromDiscriminatorValue'))); },
            'roleAssignmentScheduleInstances' => function (ParseNode $n) use ($o) { $o->setRoleAssignmentScheduleInstances($n->getCollectionOfObjectValues(array(UnifiedRoleAssignmentScheduleInstance::class, 'createFromDiscriminatorValue'))); },
            'roleAssignmentScheduleRequests' => function (ParseNode $n) use ($o) { $o->setRoleAssignmentScheduleRequests($n->getCollectionOfObjectValues(array(UnifiedRoleAssignmentScheduleRequest::class, 'createFromDiscriminatorValue'))); },
            'roleAssignmentSchedules' => function (ParseNode $n) use ($o) { $o->setRoleAssignmentSchedules($n->getCollectionOfObjectValues(array(UnifiedRoleAssignmentSchedule::class, 'createFromDiscriminatorValue'))); },
            'roleDefinitions' => function (ParseNode $n) use ($o) { $o->setRoleDefinitions($n->getCollectionOfObjectValues(array(UnifiedRoleDefinition::class, 'createFromDiscriminatorValue'))); },
            'roleEligibilityScheduleInstances' => function (ParseNode $n) use ($o) { $o->setRoleEligibilityScheduleInstances($n->getCollectionOfObjectValues(array(UnifiedRoleEligibilityScheduleInstance::class, 'createFromDiscriminatorValue'))); },
            'roleEligibilityScheduleRequests' => function (ParseNode $n) use ($o) { $o->setRoleEligibilityScheduleRequests($n->getCollectionOfObjectValues(array(UnifiedRoleEligibilityScheduleRequest::class, 'createFromDiscriminatorValue'))); },
            'roleEligibilitySchedules' => function (ParseNode $n) use ($o) { $o->setRoleEligibilitySchedules($n->getCollectionOfObjectValues(array(UnifiedRoleEligibilitySchedule::class, 'createFromDiscriminatorValue'))); },
            'transitiveRoleAssignments' => function (ParseNode $n) use ($o) { $o->setTransitiveRoleAssignments($n->getCollectionOfObjectValues(array(UnifiedRoleAssignment::class, 'createFromDiscriminatorValue'))); },
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
     * Gets the roleAssignments property value. Resource to grant access to users or groups.
     * @return array<UnifiedRoleAssignment>|null
    */
    public function getRoleAssignments(): ?array {
        return $this->roleAssignments;
    }

    /**
     * Gets the roleAssignmentScheduleInstances property value. Instances for active role assignments.
     * @return array<UnifiedRoleAssignmentScheduleInstance>|null
    */
    public function getRoleAssignmentScheduleInstances(): ?array {
        return $this->roleAssignmentScheduleInstances;
    }

    /**
     * Gets the roleAssignmentScheduleRequests property value. Requests for active role assignments to principals through PIM.
     * @return array<UnifiedRoleAssignmentScheduleRequest>|null
    */
    public function getRoleAssignmentScheduleRequests(): ?array {
        return $this->roleAssignmentScheduleRequests;
    }

    /**
     * Gets the roleAssignmentSchedules property value. Schedules for active role assignment operations.
     * @return array<UnifiedRoleAssignmentSchedule>|null
    */
    public function getRoleAssignmentSchedules(): ?array {
        return $this->roleAssignmentSchedules;
    }

    /**
     * Gets the roleDefinitions property value. Resource representing the roles allowed by RBAC providers and the permissions assigned to the roles.
     * @return array<UnifiedRoleDefinition>|null
    */
    public function getRoleDefinitions(): ?array {
        return $this->roleDefinitions;
    }

    /**
     * Gets the roleEligibilityScheduleInstances property value. Instances for role eligibility requests.
     * @return array<UnifiedRoleEligibilityScheduleInstance>|null
    */
    public function getRoleEligibilityScheduleInstances(): ?array {
        return $this->roleEligibilityScheduleInstances;
    }

    /**
     * Gets the roleEligibilityScheduleRequests property value. Requests for role eligibilities for principals through PIM.
     * @return array<UnifiedRoleEligibilityScheduleRequest>|null
    */
    public function getRoleEligibilityScheduleRequests(): ?array {
        return $this->roleEligibilityScheduleRequests;
    }

    /**
     * Gets the roleEligibilitySchedules property value. Schedules for role eligibility operations.
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
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
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
     * Sets the roleAssignments property value. Resource to grant access to users or groups.
     *  @param array<UnifiedRoleAssignment>|null $value Value to set for the roleAssignments property.
    */
    public function setRoleAssignments(?array $value ): void {
        $this->roleAssignments = $value;
    }

    /**
     * Sets the roleAssignmentScheduleInstances property value. Instances for active role assignments.
     *  @param array<UnifiedRoleAssignmentScheduleInstance>|null $value Value to set for the roleAssignmentScheduleInstances property.
    */
    public function setRoleAssignmentScheduleInstances(?array $value ): void {
        $this->roleAssignmentScheduleInstances = $value;
    }

    /**
     * Sets the roleAssignmentScheduleRequests property value. Requests for active role assignments to principals through PIM.
     *  @param array<UnifiedRoleAssignmentScheduleRequest>|null $value Value to set for the roleAssignmentScheduleRequests property.
    */
    public function setRoleAssignmentScheduleRequests(?array $value ): void {
        $this->roleAssignmentScheduleRequests = $value;
    }

    /**
     * Sets the roleAssignmentSchedules property value. Schedules for active role assignment operations.
     *  @param array<UnifiedRoleAssignmentSchedule>|null $value Value to set for the roleAssignmentSchedules property.
    */
    public function setRoleAssignmentSchedules(?array $value ): void {
        $this->roleAssignmentSchedules = $value;
    }

    /**
     * Sets the roleDefinitions property value. Resource representing the roles allowed by RBAC providers and the permissions assigned to the roles.
     *  @param array<UnifiedRoleDefinition>|null $value Value to set for the roleDefinitions property.
    */
    public function setRoleDefinitions(?array $value ): void {
        $this->roleDefinitions = $value;
    }

    /**
     * Sets the roleEligibilityScheduleInstances property value. Instances for role eligibility requests.
     *  @param array<UnifiedRoleEligibilityScheduleInstance>|null $value Value to set for the roleEligibilityScheduleInstances property.
    */
    public function setRoleEligibilityScheduleInstances(?array $value ): void {
        $this->roleEligibilityScheduleInstances = $value;
    }

    /**
     * Sets the roleEligibilityScheduleRequests property value. Requests for role eligibilities for principals through PIM.
     *  @param array<UnifiedRoleEligibilityScheduleRequest>|null $value Value to set for the roleEligibilityScheduleRequests property.
    */
    public function setRoleEligibilityScheduleRequests(?array $value ): void {
        $this->roleEligibilityScheduleRequests = $value;
    }

    /**
     * Sets the roleEligibilitySchedules property value. Schedules for role eligibility operations.
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

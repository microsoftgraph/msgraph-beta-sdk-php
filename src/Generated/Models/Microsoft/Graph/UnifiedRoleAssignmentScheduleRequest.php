<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedRoleAssignmentScheduleRequest extends Request 
{
    /** @var string|null $action Represents the type of the operation on the role assignment. The possible values are: AdminAssign: For administrators to assign roles to users or groups.AdminRemove: For administrators to remove users or groups from roles. AdminUpdate: For administrators to change existing role assignments.AdminExtend: For administrators to extend expiring assignments.AdminRenew: For administrators to renew expired assignments.SelfActivate: For users to activate their assignments.SelfDeactivate: For users to deactivate their active assignments.SelfExtend: For users to request to extend their expiring assignments.SelfRenew: For users to request to renew their expired assignments. */
    private ?string $action = null;
    
    /** @var UnifiedRoleEligibilitySchedule|null $activatedUsing If the request is from an eligible administrator to activate a role, this parameter will show the related eligible assignment for that activation. */
    private ?UnifiedRoleEligibilitySchedule $activatedUsing = null;
    
    /** @var AppScope|null $appScope Read-only property with details of the app specific scope when the assignment scope is app specific. Containment entity. */
    private ?AppScope $appScope = null;
    
    /** @var string|null $appScopeId Identifier of the app-specific scope when the assignment scope is app-specific. The scope of an assignment determines the set of resources for which the principal has been granted access. App scopes are scopes that are defined and understood by this application only. Use / for tenant-wide app scopes. Use directoryScopeId to limit the scope to particular directory objects, for example, administrative units. */
    private ?string $appScopeId = null;
    
    /** @var DirectoryObject|null $directoryScope Property referencing the directory object that is the scope of the assignment. Provided so that callers can get the directory object using $expand at the same time as getting the role assignment. Read-only. */
    private ?DirectoryObject $directoryScope = null;
    
    /** @var string|null $directoryScopeId Identifier of the directory object representing the scope of the assignment. The scope of an assignment determines the set of resources for which the principal has been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. Use / for tenant-wide scope. Use appScopeId to limit the scope to an application only. */
    private ?string $directoryScopeId = null;
    
    /** @var bool|null $isValidationOnly A boolean that determines whether the call is a validation or an actual call. Only set this property if you want to check whether an activation is subject to additional rules like MFA before actually submitting the request. */
    private ?bool $isValidationOnly = null;
    
    /** @var string|null $justification A message provided by users and administrators when create the request about why it is needed. */
    private ?string $justification = null;
    
    /** @var DirectoryObject|null $principal Property referencing the principal that is getting a role assignment through the request. Provided so that callers can get the principal using $expand at the same time as getting the role assignment. Read-only. */
    private ?DirectoryObject $principal = null;
    
    /** @var string|null $principalId Identifier of the principal to which the assignment is being granted to. */
    private ?string $principalId = null;
    
    /** @var UnifiedRoleDefinition|null $roleDefinition Property indicating the roleDefinition the assignment is for. Provided so that callers can get the role definition using $expand at the same time as getting the role assignment. roleDefinition.Id will be auto expanded. */
    private ?UnifiedRoleDefinition $roleDefinition = null;
    
    /** @var string|null $roleDefinitionId Identifier of the unifiedRoleDefinition the assignment is for. Read only. */
    private ?string $roleDefinitionId = null;
    
    /** @var RequestSchedule|null $scheduleInfo The schedule object of the role assignment request. */
    private ?RequestSchedule $scheduleInfo = null;
    
    /** @var UnifiedRoleAssignmentSchedule|null $targetSchedule Property indicating the schedule for an eligible role assignment. */
    private ?UnifiedRoleAssignmentSchedule $targetSchedule = null;
    
    /** @var string|null $targetScheduleId Identifier of the schedule object attached to the assignment. */
    private ?string $targetScheduleId = null;
    
    /** @var TicketInfo|null $ticketInfo The ticketInfo object attached to the role assignment request which includes details of the ticket number and ticket system. */
    private ?TicketInfo $ticketInfo = null;
    
    /**
     * Instantiates a new unifiedRoleAssignmentScheduleRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedRoleAssignmentScheduleRequest
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedRoleAssignmentScheduleRequest {
        return new UnifiedRoleAssignmentScheduleRequest();
    }

    /**
     * Gets the action property value. Represents the type of the operation on the role assignment. The possible values are: AdminAssign: For administrators to assign roles to users or groups.AdminRemove: For administrators to remove users or groups from roles. AdminUpdate: For administrators to change existing role assignments.AdminExtend: For administrators to extend expiring assignments.AdminRenew: For administrators to renew expired assignments.SelfActivate: For users to activate their assignments.SelfDeactivate: For users to deactivate their active assignments.SelfExtend: For users to request to extend their expiring assignments.SelfRenew: For users to request to renew their expired assignments.
     * @return string|null
    */
    public function getAction(): ?string {
        return $this->action;
    }

    /**
     * Gets the activatedUsing property value. If the request is from an eligible administrator to activate a role, this parameter will show the related eligible assignment for that activation.
     * @return UnifiedRoleEligibilitySchedule|null
    */
    public function getActivatedUsing(): ?UnifiedRoleEligibilitySchedule {
        return $this->activatedUsing;
    }

    /**
     * Gets the appScope property value. Read-only property with details of the app specific scope when the assignment scope is app specific. Containment entity.
     * @return AppScope|null
    */
    public function getAppScope(): ?AppScope {
        return $this->appScope;
    }

    /**
     * Gets the appScopeId property value. Identifier of the app-specific scope when the assignment scope is app-specific. The scope of an assignment determines the set of resources for which the principal has been granted access. App scopes are scopes that are defined and understood by this application only. Use / for tenant-wide app scopes. Use directoryScopeId to limit the scope to particular directory objects, for example, administrative units.
     * @return string|null
    */
    public function getAppScopeId(): ?string {
        return $this->appScopeId;
    }

    /**
     * Gets the directoryScope property value. Property referencing the directory object that is the scope of the assignment. Provided so that callers can get the directory object using $expand at the same time as getting the role assignment. Read-only.
     * @return DirectoryObject|null
    */
    public function getDirectoryScope(): ?DirectoryObject {
        return $this->directoryScope;
    }

    /**
     * Gets the directoryScopeId property value. Identifier of the directory object representing the scope of the assignment. The scope of an assignment determines the set of resources for which the principal has been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. Use / for tenant-wide scope. Use appScopeId to limit the scope to an application only.
     * @return string|null
    */
    public function getDirectoryScopeId(): ?string {
        return $this->directoryScopeId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'action' => function (self $o, ParseNode $n) { $o->setAction($n->getStringValue()); },
            'activatedUsing' => function (self $o, ParseNode $n) { $o->setActivatedUsing($n->getObjectValue(UnifiedRoleEligibilitySchedule::class)); },
            'appScope' => function (self $o, ParseNode $n) { $o->setAppScope($n->getObjectValue(AppScope::class)); },
            'appScopeId' => function (self $o, ParseNode $n) { $o->setAppScopeId($n->getStringValue()); },
            'directoryScope' => function (self $o, ParseNode $n) { $o->setDirectoryScope($n->getObjectValue(DirectoryObject::class)); },
            'directoryScopeId' => function (self $o, ParseNode $n) { $o->setDirectoryScopeId($n->getStringValue()); },
            'isValidationOnly' => function (self $o, ParseNode $n) { $o->setIsValidationOnly($n->getBooleanValue()); },
            'justification' => function (self $o, ParseNode $n) { $o->setJustification($n->getStringValue()); },
            'principal' => function (self $o, ParseNode $n) { $o->setPrincipal($n->getObjectValue(DirectoryObject::class)); },
            'principalId' => function (self $o, ParseNode $n) { $o->setPrincipalId($n->getStringValue()); },
            'roleDefinition' => function (self $o, ParseNode $n) { $o->setRoleDefinition($n->getObjectValue(UnifiedRoleDefinition::class)); },
            'roleDefinitionId' => function (self $o, ParseNode $n) { $o->setRoleDefinitionId($n->getStringValue()); },
            'scheduleInfo' => function (self $o, ParseNode $n) { $o->setScheduleInfo($n->getObjectValue(RequestSchedule::class)); },
            'targetSchedule' => function (self $o, ParseNode $n) { $o->setTargetSchedule($n->getObjectValue(UnifiedRoleAssignmentSchedule::class)); },
            'targetScheduleId' => function (self $o, ParseNode $n) { $o->setTargetScheduleId($n->getStringValue()); },
            'ticketInfo' => function (self $o, ParseNode $n) { $o->setTicketInfo($n->getObjectValue(TicketInfo::class)); },
        ]);
    }

    /**
     * Gets the isValidationOnly property value. A boolean that determines whether the call is a validation or an actual call. Only set this property if you want to check whether an activation is subject to additional rules like MFA before actually submitting the request.
     * @return bool|null
    */
    public function getIsValidationOnly(): ?bool {
        return $this->isValidationOnly;
    }

    /**
     * Gets the justification property value. A message provided by users and administrators when create the request about why it is needed.
     * @return string|null
    */
    public function getJustification(): ?string {
        return $this->justification;
    }

    /**
     * Gets the principal property value. Property referencing the principal that is getting a role assignment through the request. Provided so that callers can get the principal using $expand at the same time as getting the role assignment. Read-only.
     * @return DirectoryObject|null
    */
    public function getPrincipal(): ?DirectoryObject {
        return $this->principal;
    }

    /**
     * Gets the principalId property value. Identifier of the principal to which the assignment is being granted to.
     * @return string|null
    */
    public function getPrincipalId(): ?string {
        return $this->principalId;
    }

    /**
     * Gets the roleDefinition property value. Property indicating the roleDefinition the assignment is for. Provided so that callers can get the role definition using $expand at the same time as getting the role assignment. roleDefinition.Id will be auto expanded.
     * @return UnifiedRoleDefinition|null
    */
    public function getRoleDefinition(): ?UnifiedRoleDefinition {
        return $this->roleDefinition;
    }

    /**
     * Gets the roleDefinitionId property value. Identifier of the unifiedRoleDefinition the assignment is for. Read only.
     * @return string|null
    */
    public function getRoleDefinitionId(): ?string {
        return $this->roleDefinitionId;
    }

    /**
     * Gets the scheduleInfo property value. The schedule object of the role assignment request.
     * @return RequestSchedule|null
    */
    public function getScheduleInfo(): ?RequestSchedule {
        return $this->scheduleInfo;
    }

    /**
     * Gets the targetSchedule property value. Property indicating the schedule for an eligible role assignment.
     * @return UnifiedRoleAssignmentSchedule|null
    */
    public function getTargetSchedule(): ?UnifiedRoleAssignmentSchedule {
        return $this->targetSchedule;
    }

    /**
     * Gets the targetScheduleId property value. Identifier of the schedule object attached to the assignment.
     * @return string|null
    */
    public function getTargetScheduleId(): ?string {
        return $this->targetScheduleId;
    }

    /**
     * Gets the ticketInfo property value. The ticketInfo object attached to the role assignment request which includes details of the ticket number and ticket system.
     * @return TicketInfo|null
    */
    public function getTicketInfo(): ?TicketInfo {
        return $this->ticketInfo;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('action', $this->action);
        $writer->writeObjectValue('activatedUsing', $this->activatedUsing);
        $writer->writeObjectValue('appScope', $this->appScope);
        $writer->writeStringValue('appScopeId', $this->appScopeId);
        $writer->writeObjectValue('directoryScope', $this->directoryScope);
        $writer->writeStringValue('directoryScopeId', $this->directoryScopeId);
        $writer->writeBooleanValue('isValidationOnly', $this->isValidationOnly);
        $writer->writeStringValue('justification', $this->justification);
        $writer->writeObjectValue('principal', $this->principal);
        $writer->writeStringValue('principalId', $this->principalId);
        $writer->writeObjectValue('roleDefinition', $this->roleDefinition);
        $writer->writeStringValue('roleDefinitionId', $this->roleDefinitionId);
        $writer->writeObjectValue('scheduleInfo', $this->scheduleInfo);
        $writer->writeObjectValue('targetSchedule', $this->targetSchedule);
        $writer->writeStringValue('targetScheduleId', $this->targetScheduleId);
        $writer->writeObjectValue('ticketInfo', $this->ticketInfo);
    }

    /**
     * Sets the action property value. Represents the type of the operation on the role assignment. The possible values are: AdminAssign: For administrators to assign roles to users or groups.AdminRemove: For administrators to remove users or groups from roles. AdminUpdate: For administrators to change existing role assignments.AdminExtend: For administrators to extend expiring assignments.AdminRenew: For administrators to renew expired assignments.SelfActivate: For users to activate their assignments.SelfDeactivate: For users to deactivate their active assignments.SelfExtend: For users to request to extend their expiring assignments.SelfRenew: For users to request to renew their expired assignments.
     *  @param string|null $value Value to set for the action property.
    */
    public function setAction(?string $value ): void {
        $this->action = $value;
    }

    /**
     * Sets the activatedUsing property value. If the request is from an eligible administrator to activate a role, this parameter will show the related eligible assignment for that activation.
     *  @param UnifiedRoleEligibilitySchedule|null $value Value to set for the activatedUsing property.
    */
    public function setActivatedUsing(?UnifiedRoleEligibilitySchedule $value ): void {
        $this->activatedUsing = $value;
    }

    /**
     * Sets the appScope property value. Read-only property with details of the app specific scope when the assignment scope is app specific. Containment entity.
     *  @param AppScope|null $value Value to set for the appScope property.
    */
    public function setAppScope(?AppScope $value ): void {
        $this->appScope = $value;
    }

    /**
     * Sets the appScopeId property value. Identifier of the app-specific scope when the assignment scope is app-specific. The scope of an assignment determines the set of resources for which the principal has been granted access. App scopes are scopes that are defined and understood by this application only. Use / for tenant-wide app scopes. Use directoryScopeId to limit the scope to particular directory objects, for example, administrative units.
     *  @param string|null $value Value to set for the appScopeId property.
    */
    public function setAppScopeId(?string $value ): void {
        $this->appScopeId = $value;
    }

    /**
     * Sets the directoryScope property value. Property referencing the directory object that is the scope of the assignment. Provided so that callers can get the directory object using $expand at the same time as getting the role assignment. Read-only.
     *  @param DirectoryObject|null $value Value to set for the directoryScope property.
    */
    public function setDirectoryScope(?DirectoryObject $value ): void {
        $this->directoryScope = $value;
    }

    /**
     * Sets the directoryScopeId property value. Identifier of the directory object representing the scope of the assignment. The scope of an assignment determines the set of resources for which the principal has been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. Use / for tenant-wide scope. Use appScopeId to limit the scope to an application only.
     *  @param string|null $value Value to set for the directoryScopeId property.
    */
    public function setDirectoryScopeId(?string $value ): void {
        $this->directoryScopeId = $value;
    }

    /**
     * Sets the isValidationOnly property value. A boolean that determines whether the call is a validation or an actual call. Only set this property if you want to check whether an activation is subject to additional rules like MFA before actually submitting the request.
     *  @param bool|null $value Value to set for the isValidationOnly property.
    */
    public function setIsValidationOnly(?bool $value ): void {
        $this->isValidationOnly = $value;
    }

    /**
     * Sets the justification property value. A message provided by users and administrators when create the request about why it is needed.
     *  @param string|null $value Value to set for the justification property.
    */
    public function setJustification(?string $value ): void {
        $this->justification = $value;
    }

    /**
     * Sets the principal property value. Property referencing the principal that is getting a role assignment through the request. Provided so that callers can get the principal using $expand at the same time as getting the role assignment. Read-only.
     *  @param DirectoryObject|null $value Value to set for the principal property.
    */
    public function setPrincipal(?DirectoryObject $value ): void {
        $this->principal = $value;
    }

    /**
     * Sets the principalId property value. Identifier of the principal to which the assignment is being granted to.
     *  @param string|null $value Value to set for the principalId property.
    */
    public function setPrincipalId(?string $value ): void {
        $this->principalId = $value;
    }

    /**
     * Sets the roleDefinition property value. Property indicating the roleDefinition the assignment is for. Provided so that callers can get the role definition using $expand at the same time as getting the role assignment. roleDefinition.Id will be auto expanded.
     *  @param UnifiedRoleDefinition|null $value Value to set for the roleDefinition property.
    */
    public function setRoleDefinition(?UnifiedRoleDefinition $value ): void {
        $this->roleDefinition = $value;
    }

    /**
     * Sets the roleDefinitionId property value. Identifier of the unifiedRoleDefinition the assignment is for. Read only.
     *  @param string|null $value Value to set for the roleDefinitionId property.
    */
    public function setRoleDefinitionId(?string $value ): void {
        $this->roleDefinitionId = $value;
    }

    /**
     * Sets the scheduleInfo property value. The schedule object of the role assignment request.
     *  @param RequestSchedule|null $value Value to set for the scheduleInfo property.
    */
    public function setScheduleInfo(?RequestSchedule $value ): void {
        $this->scheduleInfo = $value;
    }

    /**
     * Sets the targetSchedule property value. Property indicating the schedule for an eligible role assignment.
     *  @param UnifiedRoleAssignmentSchedule|null $value Value to set for the targetSchedule property.
    */
    public function setTargetSchedule(?UnifiedRoleAssignmentSchedule $value ): void {
        $this->targetSchedule = $value;
    }

    /**
     * Sets the targetScheduleId property value. Identifier of the schedule object attached to the assignment.
     *  @param string|null $value Value to set for the targetScheduleId property.
    */
    public function setTargetScheduleId(?string $value ): void {
        $this->targetScheduleId = $value;
    }

    /**
     * Sets the ticketInfo property value. The ticketInfo object attached to the role assignment request which includes details of the ticket number and ticket system.
     *  @param TicketInfo|null $value Value to set for the ticketInfo property.
    */
    public function setTicketInfo(?TicketInfo $value ): void {
        $this->ticketInfo = $value;
    }

}

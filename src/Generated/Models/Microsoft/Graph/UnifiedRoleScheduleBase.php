<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedRoleScheduleBase extends Entity 
{
    /** @var AppScope|null $appScope Read-only property with details of the app specific scope when the assignment scope is app specific. Containment entity. */
    private ?AppScope $appScope = null;
    
    /** @var string|null $appScopeId Identifier of the app-specific scope when the assignment scope is app-specific. The scope of an assignment determines the set of resources for which the principal has been granted access. App scopes are scopes that are defined and understood by this application only. Use / for tenant-wide app scopes. Use directoryScopeId to limit the scope to particular directory objects, for example, administrative units or all users. */
    private ?string $appScopeId = null;
    
    /** @var DateTime|null $createdDateTime Time that the schedule was created. */
    private ?DateTime $createdDateTime = null;
    
    /** @var string|null $createdUsing Identifier of the roleAssignmentScheduleRequest that created this schedule. */
    private ?string $createdUsing = null;
    
    /** @var DirectoryObject|null $directoryScope Property referencing the directory object that is the scope of the assignment. Provided so that callers can get the directory object using $expand at the same time as getting the role assignment. Read-only. */
    private ?DirectoryObject $directoryScope = null;
    
    /** @var string|null $directoryScopeId Identifier of the directory object representing the scope of the assignment. The scope of an assignment determines the set of resources for which the principal has been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. Use / for tenant-wide scope. Use appScopeId to limit the scope to an application only. */
    private ?string $directoryScopeId = null;
    
    /** @var DateTime|null $modifiedDateTime Last time the schedule was updated. */
    private ?DateTime $modifiedDateTime = null;
    
    /** @var DirectoryObject|null $principal Property referencing the principal that is getting a role assignment through the request. Provided so that callers can get the principal using $expand at the same time as getting the role assignment. Read-only. */
    private ?DirectoryObject $principal = null;
    
    /** @var string|null $principalId Identifier of the principal to which the assignment is being granted to. Supports $filter (eq). */
    private ?string $principalId = null;
    
    /** @var UnifiedRoleDefinition|null $roleDefinition Property indicating the roleDefinition the assignment is for. Provided so that callers can get the role definition using $expand at the same time as getting the role assignment. roleDefinition.Id will be auto expanded. */
    private ?UnifiedRoleDefinition $roleDefinition = null;
    
    /** @var string|null $roleDefinitionId Identifier of the unifiedRoleDefinition the assignment is for. Read only. Supports $filter (eq). */
    private ?string $roleDefinitionId = null;
    
    /** @var string|null $status Status for the roleAssignmentSchedule. It can include state related messages like Provisioned, Revoked, Pending Provisioning, and Pending Approval. Supports $filter (eq). */
    private ?string $status = null;
    
    /**
     * Instantiates a new unifiedRoleScheduleBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedRoleScheduleBase
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedRoleScheduleBase {
        return new UnifiedRoleScheduleBase();
    }

    /**
     * Gets the appScope property value. Read-only property with details of the app specific scope when the assignment scope is app specific. Containment entity.
     * @return AppScope|null
    */
    public function getAppScope(): ?AppScope {
        return $this->appScope;
    }

    /**
     * Gets the appScopeId property value. Identifier of the app-specific scope when the assignment scope is app-specific. The scope of an assignment determines the set of resources for which the principal has been granted access. App scopes are scopes that are defined and understood by this application only. Use / for tenant-wide app scopes. Use directoryScopeId to limit the scope to particular directory objects, for example, administrative units or all users.
     * @return string|null
    */
    public function getAppScopeId(): ?string {
        return $this->appScopeId;
    }

    /**
     * Gets the createdDateTime property value. Time that the schedule was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the createdUsing property value. Identifier of the roleAssignmentScheduleRequest that created this schedule.
     * @return string|null
    */
    public function getCreatedUsing(): ?string {
        return $this->createdUsing;
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
            'appScope' => function (self $o, ParseNode $n) { $o->setAppScope($n->getObjectValue(AppScope::class)); },
            'appScopeId' => function (self $o, ParseNode $n) { $o->setAppScopeId($n->getStringValue()); },
            'createdDateTime' => function (self $o, ParseNode $n) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'createdUsing' => function (self $o, ParseNode $n) { $o->setCreatedUsing($n->getStringValue()); },
            'directoryScope' => function (self $o, ParseNode $n) { $o->setDirectoryScope($n->getObjectValue(DirectoryObject::class)); },
            'directoryScopeId' => function (self $o, ParseNode $n) { $o->setDirectoryScopeId($n->getStringValue()); },
            'modifiedDateTime' => function (self $o, ParseNode $n) { $o->setModifiedDateTime($n->getDateTimeValue()); },
            'principal' => function (self $o, ParseNode $n) { $o->setPrincipal($n->getObjectValue(DirectoryObject::class)); },
            'principalId' => function (self $o, ParseNode $n) { $o->setPrincipalId($n->getStringValue()); },
            'roleDefinition' => function (self $o, ParseNode $n) { $o->setRoleDefinition($n->getObjectValue(UnifiedRoleDefinition::class)); },
            'roleDefinitionId' => function (self $o, ParseNode $n) { $o->setRoleDefinitionId($n->getStringValue()); },
            'status' => function (self $o, ParseNode $n) { $o->setStatus($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the modifiedDateTime property value. Last time the schedule was updated.
     * @return DateTime|null
    */
    public function getModifiedDateTime(): ?DateTime {
        return $this->modifiedDateTime;
    }

    /**
     * Gets the principal property value. Property referencing the principal that is getting a role assignment through the request. Provided so that callers can get the principal using $expand at the same time as getting the role assignment. Read-only.
     * @return DirectoryObject|null
    */
    public function getPrincipal(): ?DirectoryObject {
        return $this->principal;
    }

    /**
     * Gets the principalId property value. Identifier of the principal to which the assignment is being granted to. Supports $filter (eq).
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
     * Gets the roleDefinitionId property value. Identifier of the unifiedRoleDefinition the assignment is for. Read only. Supports $filter (eq).
     * @return string|null
    */
    public function getRoleDefinitionId(): ?string {
        return $this->roleDefinitionId;
    }

    /**
     * Gets the status property value. Status for the roleAssignmentSchedule. It can include state related messages like Provisioned, Revoked, Pending Provisioning, and Pending Approval. Supports $filter (eq).
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('appScope', $this->appScope);
        $writer->writeStringValue('appScopeId', $this->appScopeId);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('createdUsing', $this->createdUsing);
        $writer->writeObjectValue('directoryScope', $this->directoryScope);
        $writer->writeStringValue('directoryScopeId', $this->directoryScopeId);
        $writer->writeDateTimeValue('modifiedDateTime', $this->modifiedDateTime);
        $writer->writeObjectValue('principal', $this->principal);
        $writer->writeStringValue('principalId', $this->principalId);
        $writer->writeObjectValue('roleDefinition', $this->roleDefinition);
        $writer->writeStringValue('roleDefinitionId', $this->roleDefinitionId);
        $writer->writeStringValue('status', $this->status);
    }

    /**
     * Sets the appScope property value. Read-only property with details of the app specific scope when the assignment scope is app specific. Containment entity.
     *  @param AppScope|null $value Value to set for the appScope property.
    */
    public function setAppScope(?AppScope $value ): void {
        $this->appScope = $value;
    }

    /**
     * Sets the appScopeId property value. Identifier of the app-specific scope when the assignment scope is app-specific. The scope of an assignment determines the set of resources for which the principal has been granted access. App scopes are scopes that are defined and understood by this application only. Use / for tenant-wide app scopes. Use directoryScopeId to limit the scope to particular directory objects, for example, administrative units or all users.
     *  @param string|null $value Value to set for the appScopeId property.
    */
    public function setAppScopeId(?string $value ): void {
        $this->appScopeId = $value;
    }

    /**
     * Sets the createdDateTime property value. Time that the schedule was created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the createdUsing property value. Identifier of the roleAssignmentScheduleRequest that created this schedule.
     *  @param string|null $value Value to set for the createdUsing property.
    */
    public function setCreatedUsing(?string $value ): void {
        $this->createdUsing = $value;
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
     * Sets the modifiedDateTime property value. Last time the schedule was updated.
     *  @param DateTime|null $value Value to set for the modifiedDateTime property.
    */
    public function setModifiedDateTime(?DateTime $value ): void {
        $this->modifiedDateTime = $value;
    }

    /**
     * Sets the principal property value. Property referencing the principal that is getting a role assignment through the request. Provided so that callers can get the principal using $expand at the same time as getting the role assignment. Read-only.
     *  @param DirectoryObject|null $value Value to set for the principal property.
    */
    public function setPrincipal(?DirectoryObject $value ): void {
        $this->principal = $value;
    }

    /**
     * Sets the principalId property value. Identifier of the principal to which the assignment is being granted to. Supports $filter (eq).
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
     * Sets the roleDefinitionId property value. Identifier of the unifiedRoleDefinition the assignment is for. Read only. Supports $filter (eq).
     *  @param string|null $value Value to set for the roleDefinitionId property.
    */
    public function setRoleDefinitionId(?string $value ): void {
        $this->roleDefinitionId = $value;
    }

    /**
     * Sets the status property value. Status for the roleAssignmentSchedule. It can include state related messages like Provisioned, Revoked, Pending Provisioning, and Pending Approval. Supports $filter (eq).
     *  @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value ): void {
        $this->status = $value;
    }

}

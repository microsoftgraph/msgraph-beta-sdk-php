<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedRoleScheduleInstanceBase extends Entity 
{
    /** @var AppScope|null $appScope Read-only property with details of the app specific scope when the assignment scope is app specific. Containment entity. */
    private ?AppScope $appScope = null;
    
    /** @var string|null $appScopeId Identifier of the app-specific scope when the assignment scope is app-specific. The scope of an assignment determines the set of resources for which the principal has been granted access. App scopes are scopes that are defined and understood by this application only. Use / for tenant-wide app scopes. Use directoryScopeId to limit the scope to particular directory objects, for example, administrative units. */
    private ?string $appScopeId = null;
    
    /** @var DirectoryObject|null $directoryScope The directory object that is the scope of the assignment. Enables the retrieval of the directory object using $expand at the same time as getting the role assignment. Read-only. */
    private ?DirectoryObject $directoryScope = null;
    
    /** @var string|null $directoryScopeId Identifier of the directory object representing the scope of the assignment. The scope of an assignment determines the set of resources for which the principal has been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. Use / for tenant-wide scope. Use appScopeId to limit the scope to an application only. */
    private ?string $directoryScopeId = null;
    
    /** @var DirectoryObject|null $principal The principal that is getting a role assignment through the request. Enables the retrieval of the principal using $expand at the same time as getting the role assignment. Read-only. */
    private ?DirectoryObject $principal = null;
    
    /** @var string|null $principalId Identifier of the principal to which the assignment is being granted to. Can be a group or a user. */
    private ?string $principalId = null;
    
    /** @var UnifiedRoleDefinition|null $roleDefinition The roleDefinition for the assignment. Enables the retrieval of the role definition using $expand at the same time as getting the role assignment. The roleDefinition.Id is automatically expanded. */
    private ?UnifiedRoleDefinition $roleDefinition = null;
    
    /** @var string|null $roleDefinitionId Identifier of the unifiedRoleDefinition the assignment is for. Read only.  Supports $filter (eq). */
    private ?string $roleDefinitionId = null;
    
    /**
     * Instantiates a new unifiedRoleScheduleInstanceBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedRoleScheduleInstanceBase
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedRoleScheduleInstanceBase {
        return new UnifiedRoleScheduleInstanceBase();
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
     * Gets the directoryScope property value. The directory object that is the scope of the assignment. Enables the retrieval of the directory object using $expand at the same time as getting the role assignment. Read-only.
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
            'directoryScope' => function (self $o, ParseNode $n) { $o->setDirectoryScope($n->getObjectValue(DirectoryObject::class)); },
            'directoryScopeId' => function (self $o, ParseNode $n) { $o->setDirectoryScopeId($n->getStringValue()); },
            'principal' => function (self $o, ParseNode $n) { $o->setPrincipal($n->getObjectValue(DirectoryObject::class)); },
            'principalId' => function (self $o, ParseNode $n) { $o->setPrincipalId($n->getStringValue()); },
            'roleDefinition' => function (self $o, ParseNode $n) { $o->setRoleDefinition($n->getObjectValue(UnifiedRoleDefinition::class)); },
            'roleDefinitionId' => function (self $o, ParseNode $n) { $o->setRoleDefinitionId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the principal property value. The principal that is getting a role assignment through the request. Enables the retrieval of the principal using $expand at the same time as getting the role assignment. Read-only.
     * @return DirectoryObject|null
    */
    public function getPrincipal(): ?DirectoryObject {
        return $this->principal;
    }

    /**
     * Gets the principalId property value. Identifier of the principal to which the assignment is being granted to. Can be a group or a user.
     * @return string|null
    */
    public function getPrincipalId(): ?string {
        return $this->principalId;
    }

    /**
     * Gets the roleDefinition property value. The roleDefinition for the assignment. Enables the retrieval of the role definition using $expand at the same time as getting the role assignment. The roleDefinition.Id is automatically expanded.
     * @return UnifiedRoleDefinition|null
    */
    public function getRoleDefinition(): ?UnifiedRoleDefinition {
        return $this->roleDefinition;
    }

    /**
     * Gets the roleDefinitionId property value. Identifier of the unifiedRoleDefinition the assignment is for. Read only.  Supports $filter (eq).
     * @return string|null
    */
    public function getRoleDefinitionId(): ?string {
        return $this->roleDefinitionId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('appScope', $this->appScope);
        $writer->writeStringValue('appScopeId', $this->appScopeId);
        $writer->writeObjectValue('directoryScope', $this->directoryScope);
        $writer->writeStringValue('directoryScopeId', $this->directoryScopeId);
        $writer->writeObjectValue('principal', $this->principal);
        $writer->writeStringValue('principalId', $this->principalId);
        $writer->writeObjectValue('roleDefinition', $this->roleDefinition);
        $writer->writeStringValue('roleDefinitionId', $this->roleDefinitionId);
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
     * Sets the directoryScope property value. The directory object that is the scope of the assignment. Enables the retrieval of the directory object using $expand at the same time as getting the role assignment. Read-only.
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
     * Sets the principal property value. The principal that is getting a role assignment through the request. Enables the retrieval of the principal using $expand at the same time as getting the role assignment. Read-only.
     *  @param DirectoryObject|null $value Value to set for the principal property.
    */
    public function setPrincipal(?DirectoryObject $value ): void {
        $this->principal = $value;
    }

    /**
     * Sets the principalId property value. Identifier of the principal to which the assignment is being granted to. Can be a group or a user.
     *  @param string|null $value Value to set for the principalId property.
    */
    public function setPrincipalId(?string $value ): void {
        $this->principalId = $value;
    }

    /**
     * Sets the roleDefinition property value. The roleDefinition for the assignment. Enables the retrieval of the role definition using $expand at the same time as getting the role assignment. The roleDefinition.Id is automatically expanded.
     *  @param UnifiedRoleDefinition|null $value Value to set for the roleDefinition property.
    */
    public function setRoleDefinition(?UnifiedRoleDefinition $value ): void {
        $this->roleDefinition = $value;
    }

    /**
     * Sets the roleDefinitionId property value. Identifier of the unifiedRoleDefinition the assignment is for. Read only.  Supports $filter (eq).
     *  @param string|null $value Value to set for the roleDefinitionId property.
    */
    public function setRoleDefinitionId(?string $value ): void {
        $this->roleDefinitionId = $value;
    }

}

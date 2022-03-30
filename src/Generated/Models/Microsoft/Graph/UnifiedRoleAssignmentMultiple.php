<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedRoleAssignmentMultiple extends Entity 
{
    /** @var array<string>|null $appScopeIds Ids of the app specific scopes when the assignment scopes are app specific. The scopes of an assignment determines the set of resources for which the principal has been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. Use / for tenant-wide scope. App scopes are scopes that are defined and understood by this application only. */
    private ?array $appScopeIds = null;
    
    /** @var array<AppScope>|null $appScopes Read-only collection with details of the app specific scopes when the assignment scopes are app specific. Containment entity. Read-only. */
    private ?array $appScopes = null;
    
    /** @var string|null $condition  */
    private ?string $condition = null;
    
    /** @var string|null $description Description of the role assignment. */
    private ?string $description = null;
    
    /** @var array<string>|null $directoryScopeIds Ids of the directory objects representing the scopes of the assignment. The scopes of an assignment determine the set of resources for which the principals have been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. App scopes are scopes that are defined and understood by this application only. */
    private ?array $directoryScopeIds = null;
    
    /** @var array<DirectoryObject>|null $directoryScopes Read-only collection referencing the directory objects that are scope of the assignment. Provided so that callers can get the directory objects using $expand at the same time as getting the role assignment. Read-only.  Supports $expand. */
    private ?array $directoryScopes = null;
    
    /** @var string|null $displayName Name of the role assignment. Required. */
    private ?string $displayName = null;
    
    /** @var array<string>|null $principalIds Identifiers of the principals to which the assignment is granted.  Supports $filter (any operator only). */
    private ?array $principalIds = null;
    
    /** @var array<DirectoryObject>|null $principals Read-only collection referencing the assigned principals. Provided so that callers can get the principals using $expand at the same time as getting the role assignment. Read-only.  Supports $expand. */
    private ?array $principals = null;
    
    /** @var UnifiedRoleDefinition|null $roleDefinition Specifies the roleDefinition that the assignment is for. Provided so that callers can get the role definition using $expand at the same time as getting the role assignment.  Supports $filter (eq operator on id, isBuiltIn, and displayName, and startsWith operator on displayName)  and $expand. */
    private ?UnifiedRoleDefinition $roleDefinition = null;
    
    /** @var string|null $roleDefinitionId Identifier of the unifiedRoleDefinition the assignment is for. */
    private ?string $roleDefinitionId = null;
    
    /**
     * Instantiates a new unifiedRoleAssignmentMultiple and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedRoleAssignmentMultiple
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedRoleAssignmentMultiple {
        return new UnifiedRoleAssignmentMultiple();
    }

    /**
     * Gets the appScopeIds property value. Ids of the app specific scopes when the assignment scopes are app specific. The scopes of an assignment determines the set of resources for which the principal has been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. Use / for tenant-wide scope. App scopes are scopes that are defined and understood by this application only.
     * @return array<string>|null
    */
    public function getAppScopeIds(): ?array {
        return $this->appScopeIds;
    }

    /**
     * Gets the appScopes property value. Read-only collection with details of the app specific scopes when the assignment scopes are app specific. Containment entity. Read-only.
     * @return array<AppScope>|null
    */
    public function getAppScopes(): ?array {
        return $this->appScopes;
    }

    /**
     * Gets the condition property value. 
     * @return string|null
    */
    public function getCondition(): ?string {
        return $this->condition;
    }

    /**
     * Gets the description property value. Description of the role assignment.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the directoryScopeIds property value. Ids of the directory objects representing the scopes of the assignment. The scopes of an assignment determine the set of resources for which the principals have been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. App scopes are scopes that are defined and understood by this application only.
     * @return array<string>|null
    */
    public function getDirectoryScopeIds(): ?array {
        return $this->directoryScopeIds;
    }

    /**
     * Gets the directoryScopes property value. Read-only collection referencing the directory objects that are scope of the assignment. Provided so that callers can get the directory objects using $expand at the same time as getting the role assignment. Read-only.  Supports $expand.
     * @return array<DirectoryObject>|null
    */
    public function getDirectoryScopes(): ?array {
        return $this->directoryScopes;
    }

    /**
     * Gets the displayName property value. Name of the role assignment. Required.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'appScopeIds' => function (self $o, ParseNode $n) { $o->setAppScopeIds($n->getCollectionOfPrimitiveValues()); },
            'appScopes' => function (self $o, ParseNode $n) { $o->setAppScopes($n->getCollectionOfObjectValues(AppScope::class)); },
            'condition' => function (self $o, ParseNode $n) { $o->setCondition($n->getStringValue()); },
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'directoryScopeIds' => function (self $o, ParseNode $n) { $o->setDirectoryScopeIds($n->getCollectionOfPrimitiveValues()); },
            'directoryScopes' => function (self $o, ParseNode $n) { $o->setDirectoryScopes($n->getCollectionOfObjectValues(DirectoryObject::class)); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'principalIds' => function (self $o, ParseNode $n) { $o->setPrincipalIds($n->getCollectionOfPrimitiveValues()); },
            'principals' => function (self $o, ParseNode $n) { $o->setPrincipals($n->getCollectionOfObjectValues(DirectoryObject::class)); },
            'roleDefinition' => function (self $o, ParseNode $n) { $o->setRoleDefinition($n->getObjectValue(UnifiedRoleDefinition::class)); },
            'roleDefinitionId' => function (self $o, ParseNode $n) { $o->setRoleDefinitionId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the principalIds property value. Identifiers of the principals to which the assignment is granted.  Supports $filter (any operator only).
     * @return array<string>|null
    */
    public function getPrincipalIds(): ?array {
        return $this->principalIds;
    }

    /**
     * Gets the principals property value. Read-only collection referencing the assigned principals. Provided so that callers can get the principals using $expand at the same time as getting the role assignment. Read-only.  Supports $expand.
     * @return array<DirectoryObject>|null
    */
    public function getPrincipals(): ?array {
        return $this->principals;
    }

    /**
     * Gets the roleDefinition property value. Specifies the roleDefinition that the assignment is for. Provided so that callers can get the role definition using $expand at the same time as getting the role assignment.  Supports $filter (eq operator on id, isBuiltIn, and displayName, and startsWith operator on displayName)  and $expand.
     * @return UnifiedRoleDefinition|null
    */
    public function getRoleDefinition(): ?UnifiedRoleDefinition {
        return $this->roleDefinition;
    }

    /**
     * Gets the roleDefinitionId property value. Identifier of the unifiedRoleDefinition the assignment is for.
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
        $writer->writeCollectionOfPrimitiveValues('appScopeIds', $this->appScopeIds);
        $writer->writeCollectionOfObjectValues('appScopes', $this->appScopes);
        $writer->writeStringValue('condition', $this->condition);
        $writer->writeStringValue('description', $this->description);
        $writer->writeCollectionOfPrimitiveValues('directoryScopeIds', $this->directoryScopeIds);
        $writer->writeCollectionOfObjectValues('directoryScopes', $this->directoryScopes);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfPrimitiveValues('principalIds', $this->principalIds);
        $writer->writeCollectionOfObjectValues('principals', $this->principals);
        $writer->writeObjectValue('roleDefinition', $this->roleDefinition);
        $writer->writeStringValue('roleDefinitionId', $this->roleDefinitionId);
    }

    /**
     * Sets the appScopeIds property value. Ids of the app specific scopes when the assignment scopes are app specific. The scopes of an assignment determines the set of resources for which the principal has been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. Use / for tenant-wide scope. App scopes are scopes that are defined and understood by this application only.
     *  @param array<string>|null $value Value to set for the appScopeIds property.
    */
    public function setAppScopeIds(?array $value ): void {
        $this->appScopeIds = $value;
    }

    /**
     * Sets the appScopes property value. Read-only collection with details of the app specific scopes when the assignment scopes are app specific. Containment entity. Read-only.
     *  @param array<AppScope>|null $value Value to set for the appScopes property.
    */
    public function setAppScopes(?array $value ): void {
        $this->appScopes = $value;
    }

    /**
     * Sets the condition property value. 
     *  @param string|null $value Value to set for the condition property.
    */
    public function setCondition(?string $value ): void {
        $this->condition = $value;
    }

    /**
     * Sets the description property value. Description of the role assignment.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the directoryScopeIds property value. Ids of the directory objects representing the scopes of the assignment. The scopes of an assignment determine the set of resources for which the principals have been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. App scopes are scopes that are defined and understood by this application only.
     *  @param array<string>|null $value Value to set for the directoryScopeIds property.
    */
    public function setDirectoryScopeIds(?array $value ): void {
        $this->directoryScopeIds = $value;
    }

    /**
     * Sets the directoryScopes property value. Read-only collection referencing the directory objects that are scope of the assignment. Provided so that callers can get the directory objects using $expand at the same time as getting the role assignment. Read-only.  Supports $expand.
     *  @param array<DirectoryObject>|null $value Value to set for the directoryScopes property.
    */
    public function setDirectoryScopes(?array $value ): void {
        $this->directoryScopes = $value;
    }

    /**
     * Sets the displayName property value. Name of the role assignment. Required.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the principalIds property value. Identifiers of the principals to which the assignment is granted.  Supports $filter (any operator only).
     *  @param array<string>|null $value Value to set for the principalIds property.
    */
    public function setPrincipalIds(?array $value ): void {
        $this->principalIds = $value;
    }

    /**
     * Sets the principals property value. Read-only collection referencing the assigned principals. Provided so that callers can get the principals using $expand at the same time as getting the role assignment. Read-only.  Supports $expand.
     *  @param array<DirectoryObject>|null $value Value to set for the principals property.
    */
    public function setPrincipals(?array $value ): void {
        $this->principals = $value;
    }

    /**
     * Sets the roleDefinition property value. Specifies the roleDefinition that the assignment is for. Provided so that callers can get the role definition using $expand at the same time as getting the role assignment.  Supports $filter (eq operator on id, isBuiltIn, and displayName, and startsWith operator on displayName)  and $expand.
     *  @param UnifiedRoleDefinition|null $value Value to set for the roleDefinition property.
    */
    public function setRoleDefinition(?UnifiedRoleDefinition $value ): void {
        $this->roleDefinition = $value;
    }

    /**
     * Sets the roleDefinitionId property value. Identifier of the unifiedRoleDefinition the assignment is for.
     *  @param string|null $value Value to set for the roleDefinitionId property.
    */
    public function setRoleDefinitionId(?string $value ): void {
        $this->roleDefinitionId = $value;
    }

}

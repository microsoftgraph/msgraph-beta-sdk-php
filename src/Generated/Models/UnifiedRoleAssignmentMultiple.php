<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class UnifiedRoleAssignmentMultiple extends Entity implements Parsable 
{
    /**
     * Instantiates a new UnifiedRoleAssignmentMultiple and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedRoleAssignmentMultiple
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedRoleAssignmentMultiple {
        return new UnifiedRoleAssignmentMultiple();
    }

    /**
     * Gets the appScopeIds property value. Ids of the app specific scopes when the assignment scopes are app specific. The scopes of an assignment determine the set of resources for which the principal has access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. Use / for tenant-wide scope. App scopes are scopes that are defined and understood by this application only.
     * @return array<string>|null
    */
    public function getAppScopeIds(): ?array {
        $val = $this->getBackingStore()->get('appScopeIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appScopeIds'");
    }

    /**
     * Gets the appScopes property value. Read-only collection with details of the app specific scopes when the assignment scopes are app specific. Containment entity. Read-only.
     * @return array<AppScope>|null
    */
    public function getAppScopes(): ?array {
        $val = $this->getBackingStore()->get('appScopes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AppScope::class);
            /** @var array<AppScope>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appScopes'");
    }

    /**
     * Gets the condition property value. The condition property
     * @return string|null
    */
    public function getCondition(): ?string {
        $val = $this->getBackingStore()->get('condition');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'condition'");
    }

    /**
     * Gets the description property value. Description of the role assignment.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the directoryScopeIds property value. Ids of the directory objects that represent the scopes of the assignment. The scopes of an assignment determine the set of resources for which the principals have been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. App scopes are scopes that are defined and understood by this application only.
     * @return array<string>|null
    */
    public function getDirectoryScopeIds(): ?array {
        $val = $this->getBackingStore()->get('directoryScopeIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'directoryScopeIds'");
    }

    /**
     * Gets the directoryScopes property value. Read-only collection that references the directory objects that are scope of the assignment. Provided so that callers can get the directory objects using $expand at the same time as getting the role assignment. Read-only. Supports $expand.
     * @return array<DirectoryObject>|null
    */
    public function getDirectoryScopes(): ?array {
        $val = $this->getBackingStore()->get('directoryScopes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DirectoryObject::class);
            /** @var array<DirectoryObject>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'directoryScopes'");
    }

    /**
     * Gets the displayName property value. Name of the role assignment. Required.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appScopeIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAppScopeIds($val);
            },
            'appScopes' => fn(ParseNode $n) => $o->setAppScopes($n->getCollectionOfObjectValues([AppScope::class, 'createFromDiscriminatorValue'])),
            'condition' => fn(ParseNode $n) => $o->setCondition($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'directoryScopeIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDirectoryScopeIds($val);
            },
            'directoryScopes' => fn(ParseNode $n) => $o->setDirectoryScopes($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'principalIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setPrincipalIds($val);
            },
            'principals' => fn(ParseNode $n) => $o->setPrincipals($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'roleDefinition' => fn(ParseNode $n) => $o->setRoleDefinition($n->getObjectValue([UnifiedRoleDefinition::class, 'createFromDiscriminatorValue'])),
            'roleDefinitionId' => fn(ParseNode $n) => $o->setRoleDefinitionId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the principalIds property value. Identifiers of the principals to which the assignment is granted. Supports $filter (any operator only).
     * @return array<string>|null
    */
    public function getPrincipalIds(): ?array {
        $val = $this->getBackingStore()->get('principalIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'principalIds'");
    }

    /**
     * Gets the principals property value. Read-only collection that references the assigned principals. Provided so that callers can get the principals using $expand at the same time as getting the role assignment. Read-only. Supports $expand.
     * @return array<DirectoryObject>|null
    */
    public function getPrincipals(): ?array {
        $val = $this->getBackingStore()->get('principals');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DirectoryObject::class);
            /** @var array<DirectoryObject>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'principals'");
    }

    /**
     * Gets the roleDefinition property value. Specifies the roleDefinition that the assignment is for. Provided so that callers can get the role definition using $expand at the same time as getting the role assignment. Supports $filter (eq operator on id, isBuiltIn, and displayName, and startsWith operator on displayName)  and $expand.
     * @return UnifiedRoleDefinition|null
    */
    public function getRoleDefinition(): ?UnifiedRoleDefinition {
        $val = $this->getBackingStore()->get('roleDefinition');
        if (is_null($val) || $val instanceof UnifiedRoleDefinition) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleDefinition'");
    }

    /**
     * Gets the roleDefinitionId property value. Identifier of the unifiedRoleDefinition the assignment is for.
     * @return string|null
    */
    public function getRoleDefinitionId(): ?string {
        $val = $this->getBackingStore()->get('roleDefinitionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleDefinitionId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('appScopeIds', $this->getAppScopeIds());
        $writer->writeCollectionOfObjectValues('appScopes', $this->getAppScopes());
        $writer->writeStringValue('condition', $this->getCondition());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeCollectionOfPrimitiveValues('directoryScopeIds', $this->getDirectoryScopeIds());
        $writer->writeCollectionOfObjectValues('directoryScopes', $this->getDirectoryScopes());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfPrimitiveValues('principalIds', $this->getPrincipalIds());
        $writer->writeCollectionOfObjectValues('principals', $this->getPrincipals());
        $writer->writeObjectValue('roleDefinition', $this->getRoleDefinition());
        $writer->writeStringValue('roleDefinitionId', $this->getRoleDefinitionId());
    }

    /**
     * Sets the appScopeIds property value. Ids of the app specific scopes when the assignment scopes are app specific. The scopes of an assignment determine the set of resources for which the principal has access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. Use / for tenant-wide scope. App scopes are scopes that are defined and understood by this application only.
     * @param array<string>|null $value Value to set for the appScopeIds property.
    */
    public function setAppScopeIds(?array $value): void {
        $this->getBackingStore()->set('appScopeIds', $value);
    }

    /**
     * Sets the appScopes property value. Read-only collection with details of the app specific scopes when the assignment scopes are app specific. Containment entity. Read-only.
     * @param array<AppScope>|null $value Value to set for the appScopes property.
    */
    public function setAppScopes(?array $value): void {
        $this->getBackingStore()->set('appScopes', $value);
    }

    /**
     * Sets the condition property value. The condition property
     * @param string|null $value Value to set for the condition property.
    */
    public function setCondition(?string $value): void {
        $this->getBackingStore()->set('condition', $value);
    }

    /**
     * Sets the description property value. Description of the role assignment.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the directoryScopeIds property value. Ids of the directory objects that represent the scopes of the assignment. The scopes of an assignment determine the set of resources for which the principals have been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. App scopes are scopes that are defined and understood by this application only.
     * @param array<string>|null $value Value to set for the directoryScopeIds property.
    */
    public function setDirectoryScopeIds(?array $value): void {
        $this->getBackingStore()->set('directoryScopeIds', $value);
    }

    /**
     * Sets the directoryScopes property value. Read-only collection that references the directory objects that are scope of the assignment. Provided so that callers can get the directory objects using $expand at the same time as getting the role assignment. Read-only. Supports $expand.
     * @param array<DirectoryObject>|null $value Value to set for the directoryScopes property.
    */
    public function setDirectoryScopes(?array $value): void {
        $this->getBackingStore()->set('directoryScopes', $value);
    }

    /**
     * Sets the displayName property value. Name of the role assignment. Required.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the principalIds property value. Identifiers of the principals to which the assignment is granted. Supports $filter (any operator only).
     * @param array<string>|null $value Value to set for the principalIds property.
    */
    public function setPrincipalIds(?array $value): void {
        $this->getBackingStore()->set('principalIds', $value);
    }

    /**
     * Sets the principals property value. Read-only collection that references the assigned principals. Provided so that callers can get the principals using $expand at the same time as getting the role assignment. Read-only. Supports $expand.
     * @param array<DirectoryObject>|null $value Value to set for the principals property.
    */
    public function setPrincipals(?array $value): void {
        $this->getBackingStore()->set('principals', $value);
    }

    /**
     * Sets the roleDefinition property value. Specifies the roleDefinition that the assignment is for. Provided so that callers can get the role definition using $expand at the same time as getting the role assignment. Supports $filter (eq operator on id, isBuiltIn, and displayName, and startsWith operator on displayName)  and $expand.
     * @param UnifiedRoleDefinition|null $value Value to set for the roleDefinition property.
    */
    public function setRoleDefinition(?UnifiedRoleDefinition $value): void {
        $this->getBackingStore()->set('roleDefinition', $value);
    }

    /**
     * Sets the roleDefinitionId property value. Identifier of the unifiedRoleDefinition the assignment is for.
     * @param string|null $value Value to set for the roleDefinitionId property.
    */
    public function setRoleDefinitionId(?string $value): void {
        $this->getBackingStore()->set('roleDefinitionId', $value);
    }

}

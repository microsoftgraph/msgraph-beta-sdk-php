<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RoleDefinition extends Entity implements Parsable 
{
    /**
     * Instantiates a new roleDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RoleDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RoleDefinition {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.deviceAndAppManagementRoleDefinition': return new DeviceAndAppManagementRoleDefinition();
            }
        }
        return new RoleDefinition();
    }

    /**
     * Gets the description property value. Description of the Role definition.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the displayName property value. Display Name of the Role definition.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'isBuiltIn' => fn(ParseNode $n) => $o->setIsBuiltIn($n->getBooleanValue()),
            'isBuiltInRoleDefinition' => fn(ParseNode $n) => $o->setIsBuiltInRoleDefinition($n->getBooleanValue()),
            'permissions' => fn(ParseNode $n) => $o->setPermissions($n->getCollectionOfObjectValues([RolePermission::class, 'createFromDiscriminatorValue'])),
            'roleAssignments' => fn(ParseNode $n) => $o->setRoleAssignments($n->getCollectionOfObjectValues([RoleAssignment::class, 'createFromDiscriminatorValue'])),
            'rolePermissions' => fn(ParseNode $n) => $o->setRolePermissions($n->getCollectionOfObjectValues([RolePermission::class, 'createFromDiscriminatorValue'])),
            'roleScopeTagIds' => fn(ParseNode $n) => $o->setRoleScopeTagIds($n->getCollectionOfPrimitiveValues()),
        ]);
    }

    /**
     * Gets the isBuiltIn property value. Type of Role. Set to True if it is built-in, or set to False if it is a custom role definition.
     * @return bool|null
    */
    public function getIsBuiltIn(): ?bool {
        return $this->getBackingStore()->get('isBuiltIn');
    }

    /**
     * Gets the isBuiltInRoleDefinition property value. Type of Role. Set to True if it is built-in, or set to False if it is a custom role definition.
     * @return bool|null
    */
    public function getIsBuiltInRoleDefinition(): ?bool {
        return $this->getBackingStore()->get('isBuiltInRoleDefinition');
    }

    /**
     * Gets the permissions property value. List of Role Permissions this role is allowed to perform. These must match the actionName that is defined as part of the rolePermission.
     * @return array<RolePermission>|null
    */
    public function getPermissions(): ?array {
        return $this->getBackingStore()->get('permissions');
    }

    /**
     * Gets the roleAssignments property value. List of Role assignments for this role definition.
     * @return array<RoleAssignment>|null
    */
    public function getRoleAssignments(): ?array {
        return $this->getBackingStore()->get('roleAssignments');
    }

    /**
     * Gets the rolePermissions property value. List of Role Permissions this role is allowed to perform. These must match the actionName that is defined as part of the rolePermission.
     * @return array<RolePermission>|null
    */
    public function getRolePermissions(): ?array {
        return $this->getBackingStore()->get('rolePermissions');
    }

    /**
     * Gets the roleScopeTagIds property value. List of Scope Tags for this Entity instance.
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        return $this->getBackingStore()->get('roleScopeTagIds');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('isBuiltIn', $this->getIsBuiltIn());
        $writer->writeBooleanValue('isBuiltInRoleDefinition', $this->getIsBuiltInRoleDefinition());
        $writer->writeCollectionOfObjectValues('permissions', $this->getPermissions());
        $writer->writeCollectionOfObjectValues('roleAssignments', $this->getRoleAssignments());
        $writer->writeCollectionOfObjectValues('rolePermissions', $this->getRolePermissions());
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->getRoleScopeTagIds());
    }

    /**
     * Sets the description property value. Description of the Role definition.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. Display Name of the Role definition.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the isBuiltIn property value. Type of Role. Set to True if it is built-in, or set to False if it is a custom role definition.
     * @param bool|null $value Value to set for the isBuiltIn property.
    */
    public function setIsBuiltIn(?bool $value): void {
        $this->getBackingStore()->set('isBuiltIn', $value);
    }

    /**
     * Sets the isBuiltInRoleDefinition property value. Type of Role. Set to True if it is built-in, or set to False if it is a custom role definition.
     * @param bool|null $value Value to set for the isBuiltInRoleDefinition property.
    */
    public function setIsBuiltInRoleDefinition(?bool $value): void {
        $this->getBackingStore()->set('isBuiltInRoleDefinition', $value);
    }

    /**
     * Sets the permissions property value. List of Role Permissions this role is allowed to perform. These must match the actionName that is defined as part of the rolePermission.
     * @param array<RolePermission>|null $value Value to set for the permissions property.
    */
    public function setPermissions(?array $value): void {
        $this->getBackingStore()->set('permissions', $value);
    }

    /**
     * Sets the roleAssignments property value. List of Role assignments for this role definition.
     * @param array<RoleAssignment>|null $value Value to set for the roleAssignments property.
    */
    public function setRoleAssignments(?array $value): void {
        $this->getBackingStore()->set('roleAssignments', $value);
    }

    /**
     * Sets the rolePermissions property value. List of Role Permissions this role is allowed to perform. These must match the actionName that is defined as part of the rolePermission.
     * @param array<RolePermission>|null $value Value to set for the rolePermissions property.
    */
    public function setRolePermissions(?array $value): void {
        $this->getBackingStore()->set('rolePermissions', $value);
    }

    /**
     * Sets the roleScopeTagIds property value. List of Scope Tags for this Entity instance.
     * @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value): void {
        $this->getBackingStore()->set('roleScopeTagIds', $value);
    }

}

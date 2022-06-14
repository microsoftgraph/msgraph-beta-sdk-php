<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RoleAssignment extends Entity implements Parsable 
{
    /**
     * @var string|null $description Description of the Role Assignment.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The display or friendly name of the role Assignment.
    */
    private ?string $displayName = null;
    
    /**
     * @var array<string>|null $resourceScopes List of ids of role scope member security groups.  These are IDs from Azure Active Directory.
    */
    private ?array $resourceScopes = null;
    
    /**
     * @var RoleDefinition|null $roleDefinition Role definition this assignment is part of.
    */
    private ?RoleDefinition $roleDefinition = null;
    
    /**
     * @var array<string>|null $scopeMembers List of ids of role scope member security groups.  These are IDs from Azure Active Directory.
    */
    private ?array $scopeMembers = null;
    
    /**
     * @var RoleAssignmentScopeType|null $scopeType Specifies the type of scope for a Role Assignment. Default type 'ResourceScope' allows assignment of ResourceScopes. For 'AllDevices', 'AllLicensedUsers', and 'AllDevicesAndLicensedUsers', the ResourceScopes property should be left empty. Possible values are: resourceScope, allDevices, allLicensedUsers, allDevicesAndLicensedUsers.
    */
    private ?RoleAssignmentScopeType $scopeType = null;
    
    /**
     * Instantiates a new roleAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RoleAssignment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RoleAssignment {
        $mappingValueNode = ParseNode::getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.deviceAndAppManagementRoleAssignment': return new DeviceAndAppManagementRoleAssignment();
            }
        }
        return new RoleAssignment();
    }

    /**
     * Gets the description property value. Description of the Role Assignment.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The display or friendly name of the role Assignment.
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'resourceScopes' => function (ParseNode $n) use ($o) { $o->setResourceScopes($n->getCollectionOfPrimitiveValues()); },
            'roleDefinition' => function (ParseNode $n) use ($o) { $o->setRoleDefinition($n->getObjectValue(array(RoleDefinition::class, 'createFromDiscriminatorValue'))); },
            'scopeMembers' => function (ParseNode $n) use ($o) { $o->setScopeMembers($n->getCollectionOfPrimitiveValues()); },
            'scopeType' => function (ParseNode $n) use ($o) { $o->setScopeType($n->getEnumValue(RoleAssignmentScopeType::class)); },
        ]);
    }

    /**
     * Gets the resourceScopes property value. List of ids of role scope member security groups.  These are IDs from Azure Active Directory.
     * @return array<string>|null
    */
    public function getResourceScopes(): ?array {
        return $this->resourceScopes;
    }

    /**
     * Gets the roleDefinition property value. Role definition this assignment is part of.
     * @return RoleDefinition|null
    */
    public function getRoleDefinition(): ?RoleDefinition {
        return $this->roleDefinition;
    }

    /**
     * Gets the scopeMembers property value. List of ids of role scope member security groups.  These are IDs from Azure Active Directory.
     * @return array<string>|null
    */
    public function getScopeMembers(): ?array {
        return $this->scopeMembers;
    }

    /**
     * Gets the scopeType property value. Specifies the type of scope for a Role Assignment. Default type 'ResourceScope' allows assignment of ResourceScopes. For 'AllDevices', 'AllLicensedUsers', and 'AllDevicesAndLicensedUsers', the ResourceScopes property should be left empty. Possible values are: resourceScope, allDevices, allLicensedUsers, allDevicesAndLicensedUsers.
     * @return RoleAssignmentScopeType|null
    */
    public function getScopeType(): ?RoleAssignmentScopeType {
        return $this->scopeType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfPrimitiveValues('resourceScopes', $this->resourceScopes);
        $writer->writeObjectValue('roleDefinition', $this->roleDefinition);
        $writer->writeCollectionOfPrimitiveValues('scopeMembers', $this->scopeMembers);
        $writer->writeEnumValue('scopeType', $this->scopeType);
    }

    /**
     * Sets the description property value. Description of the Role Assignment.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The display or friendly name of the role Assignment.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the resourceScopes property value. List of ids of role scope member security groups.  These are IDs from Azure Active Directory.
     *  @param array<string>|null $value Value to set for the resourceScopes property.
    */
    public function setResourceScopes(?array $value ): void {
        $this->resourceScopes = $value;
    }

    /**
     * Sets the roleDefinition property value. Role definition this assignment is part of.
     *  @param RoleDefinition|null $value Value to set for the roleDefinition property.
    */
    public function setRoleDefinition(?RoleDefinition $value ): void {
        $this->roleDefinition = $value;
    }

    /**
     * Sets the scopeMembers property value. List of ids of role scope member security groups.  These are IDs from Azure Active Directory.
     *  @param array<string>|null $value Value to set for the scopeMembers property.
    */
    public function setScopeMembers(?array $value ): void {
        $this->scopeMembers = $value;
    }

    /**
     * Sets the scopeType property value. Specifies the type of scope for a Role Assignment. Default type 'ResourceScope' allows assignment of ResourceScopes. For 'AllDevices', 'AllLicensedUsers', and 'AllDevicesAndLicensedUsers', the ResourceScopes property should be left empty. Possible values are: resourceScope, allDevices, allLicensedUsers, allDevicesAndLicensedUsers.
     *  @param RoleAssignmentScopeType|null $value Value to set for the scopeType property.
    */
    public function setScopeType(?RoleAssignmentScopeType $value ): void {
        $this->scopeType = $value;
    }

}

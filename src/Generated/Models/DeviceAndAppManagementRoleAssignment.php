<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceAndAppManagementRoleAssignment extends RoleAssignment implements Parsable 
{
    /**
     * @var array<string>|null $members The list of ids of role member security groups. These are IDs from Azure Active Directory.
    */
    private ?array $members = null;
    
    /**
     * @var array<RoleScopeTag>|null $roleScopeTags The set of Role Scope Tags defined on the Role Assignment.
    */
    private ?array $roleScopeTags = null;
    
    /**
     * Instantiates a new DeviceAndAppManagementRoleAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceAndAppManagementRoleAssignment');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceAndAppManagementRoleAssignment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceAndAppManagementRoleAssignment {
        return new DeviceAndAppManagementRoleAssignment();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'members' => function (ParseNode $n) use ($o) { $o->setMembers($n->getCollectionOfPrimitiveValues()); },
            'roleScopeTags' => function (ParseNode $n) use ($o) { $o->setRoleScopeTags($n->getCollectionOfObjectValues(array(RoleScopeTag::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the members property value. The list of ids of role member security groups. These are IDs from Azure Active Directory.
     * @return array<string>|null
    */
    public function getMembers(): ?array {
        return $this->members;
    }

    /**
     * Gets the roleScopeTags property value. The set of Role Scope Tags defined on the Role Assignment.
     * @return array<RoleScopeTag>|null
    */
    public function getRoleScopeTags(): ?array {
        return $this->roleScopeTags;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('members', $this->members);
        $writer->writeCollectionOfObjectValues('roleScopeTags', $this->roleScopeTags);
    }

    /**
     * Sets the members property value. The list of ids of role member security groups. These are IDs from Azure Active Directory.
     *  @param array<string>|null $value Value to set for the members property.
    */
    public function setMembers(?array $value ): void {
        $this->members = $value;
    }

    /**
     * Sets the roleScopeTags property value. The set of Role Scope Tags defined on the Role Assignment.
     *  @param array<RoleScopeTag>|null $value Value to set for the roleScopeTags property.
    */
    public function setRoleScopeTags(?array $value ): void {
        $this->roleScopeTags = $value;
    }

}

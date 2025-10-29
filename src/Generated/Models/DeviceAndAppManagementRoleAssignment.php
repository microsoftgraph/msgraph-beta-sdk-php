<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * The Role Assignment resource. Role assignments tie together a role definition with members and scopes. There can be one or more role assignments per role. This applies to custom and built-in roles.
*/
class DeviceAndAppManagementRoleAssignment extends RoleAssignment implements Parsable 
{
    /**
     * Instantiates a new DeviceAndAppManagementRoleAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'members' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setMembers($val);
            },
            'roleScopeTagIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRoleScopeTagIds($val);
            },
            'roleScopeTags' => fn(ParseNode $n) => $o->setRoleScopeTags($n->getCollectionOfObjectValues([RoleScopeTag::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the members property value. Indicates the list of role member security group Entra IDs. For example: {dec942f4-6777-4998-96b4-522e383b08e2}.
     * @return array<string>|null
    */
    public function getMembers(): ?array {
        $val = $this->getBackingStore()->get('members');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'members'");
    }

    /**
     * Gets the roleScopeTagIds property value. Indicates the set of role scope tag IDs for the role assignment. These scope tags will limit the visibility of any Intune resources to those that match any of the scope tags in this collection.
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        $val = $this->getBackingStore()->get('roleScopeTagIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleScopeTagIds'");
    }

    /**
     * Gets the roleScopeTags property value. Indicates the set of scope tags for the role assignment. These scope tags will limit the visibility of any Intune resources to those that match any of the scope tags in this collection.
     * @return array<RoleScopeTag>|null
    */
    public function getRoleScopeTags(): ?array {
        $val = $this->getBackingStore()->get('roleScopeTags');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RoleScopeTag::class);
            /** @var array<RoleScopeTag>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleScopeTags'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('members', $this->getMembers());
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->getRoleScopeTagIds());
        $writer->writeCollectionOfObjectValues('roleScopeTags', $this->getRoleScopeTags());
    }

    /**
     * Sets the members property value. Indicates the list of role member security group Entra IDs. For example: {dec942f4-6777-4998-96b4-522e383b08e2}.
     * @param array<string>|null $value Value to set for the members property.
    */
    public function setMembers(?array $value): void {
        $this->getBackingStore()->set('members', $value);
    }

    /**
     * Sets the roleScopeTagIds property value. Indicates the set of role scope tag IDs for the role assignment. These scope tags will limit the visibility of any Intune resources to those that match any of the scope tags in this collection.
     * @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value): void {
        $this->getBackingStore()->set('roleScopeTagIds', $value);
    }

    /**
     * Sets the roleScopeTags property value. Indicates the set of scope tags for the role assignment. These scope tags will limit the visibility of any Intune resources to those that match any of the scope tags in this collection.
     * @param array<RoleScopeTag>|null $value Value to set for the roleScopeTags property.
    */
    public function setRoleScopeTags(?array $value): void {
        $this->getBackingStore()->set('roleScopeTags', $value);
    }

}

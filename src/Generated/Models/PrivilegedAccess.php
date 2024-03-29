<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PrivilegedAccess extends Entity implements Parsable 
{
    /**
     * Instantiates a new PrivilegedAccess and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrivilegedAccess
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrivilegedAccess {
        return new PrivilegedAccess();
    }

    /**
     * Gets the displayName property value. The display name of the provider managed by PIM.
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
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'resources' => fn(ParseNode $n) => $o->setResources($n->getCollectionOfObjectValues([GovernanceResource::class, 'createFromDiscriminatorValue'])),
            'roleAssignmentRequests' => fn(ParseNode $n) => $o->setRoleAssignmentRequests($n->getCollectionOfObjectValues([GovernanceRoleAssignmentRequest::class, 'createFromDiscriminatorValue'])),
            'roleAssignments' => fn(ParseNode $n) => $o->setRoleAssignments($n->getCollectionOfObjectValues([GovernanceRoleAssignment::class, 'createFromDiscriminatorValue'])),
            'roleDefinitions' => fn(ParseNode $n) => $o->setRoleDefinitions($n->getCollectionOfObjectValues([GovernanceRoleDefinition::class, 'createFromDiscriminatorValue'])),
            'roleSettings' => fn(ParseNode $n) => $o->setRoleSettings($n->getCollectionOfObjectValues([GovernanceRoleSetting::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the resources property value. A collection of resources for the provider.
     * @return array<GovernanceResource>|null
    */
    public function getResources(): ?array {
        $val = $this->getBackingStore()->get('resources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, GovernanceResource::class);
            /** @var array<GovernanceResource>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resources'");
    }

    /**
     * Gets the roleAssignmentRequests property value. A collection of role assignment requests for the provider.
     * @return array<GovernanceRoleAssignmentRequest>|null
    */
    public function getRoleAssignmentRequests(): ?array {
        $val = $this->getBackingStore()->get('roleAssignmentRequests');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, GovernanceRoleAssignmentRequest::class);
            /** @var array<GovernanceRoleAssignmentRequest>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleAssignmentRequests'");
    }

    /**
     * Gets the roleAssignments property value. A collection of role assignments for the provider.
     * @return array<GovernanceRoleAssignment>|null
    */
    public function getRoleAssignments(): ?array {
        $val = $this->getBackingStore()->get('roleAssignments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, GovernanceRoleAssignment::class);
            /** @var array<GovernanceRoleAssignment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleAssignments'");
    }

    /**
     * Gets the roleDefinitions property value. A collection of role definitions for the provider.
     * @return array<GovernanceRoleDefinition>|null
    */
    public function getRoleDefinitions(): ?array {
        $val = $this->getBackingStore()->get('roleDefinitions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, GovernanceRoleDefinition::class);
            /** @var array<GovernanceRoleDefinition>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleDefinitions'");
    }

    /**
     * Gets the roleSettings property value. A collection of role settings for the provider.
     * @return array<GovernanceRoleSetting>|null
    */
    public function getRoleSettings(): ?array {
        $val = $this->getBackingStore()->get('roleSettings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, GovernanceRoleSetting::class);
            /** @var array<GovernanceRoleSetting>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleSettings'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('resources', $this->getResources());
        $writer->writeCollectionOfObjectValues('roleAssignmentRequests', $this->getRoleAssignmentRequests());
        $writer->writeCollectionOfObjectValues('roleAssignments', $this->getRoleAssignments());
        $writer->writeCollectionOfObjectValues('roleDefinitions', $this->getRoleDefinitions());
        $writer->writeCollectionOfObjectValues('roleSettings', $this->getRoleSettings());
    }

    /**
     * Sets the displayName property value. The display name of the provider managed by PIM.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the resources property value. A collection of resources for the provider.
     * @param array<GovernanceResource>|null $value Value to set for the resources property.
    */
    public function setResources(?array $value): void {
        $this->getBackingStore()->set('resources', $value);
    }

    /**
     * Sets the roleAssignmentRequests property value. A collection of role assignment requests for the provider.
     * @param array<GovernanceRoleAssignmentRequest>|null $value Value to set for the roleAssignmentRequests property.
    */
    public function setRoleAssignmentRequests(?array $value): void {
        $this->getBackingStore()->set('roleAssignmentRequests', $value);
    }

    /**
     * Sets the roleAssignments property value. A collection of role assignments for the provider.
     * @param array<GovernanceRoleAssignment>|null $value Value to set for the roleAssignments property.
    */
    public function setRoleAssignments(?array $value): void {
        $this->getBackingStore()->set('roleAssignments', $value);
    }

    /**
     * Sets the roleDefinitions property value. A collection of role definitions for the provider.
     * @param array<GovernanceRoleDefinition>|null $value Value to set for the roleDefinitions property.
    */
    public function setRoleDefinitions(?array $value): void {
        $this->getBackingStore()->set('roleDefinitions', $value);
    }

    /**
     * Sets the roleSettings property value. A collection of role settings for the provider.
     * @param array<GovernanceRoleSetting>|null $value Value to set for the roleSettings property.
    */
    public function setRoleSettings(?array $value): void {
        $this->getBackingStore()->set('roleSettings', $value);
    }

}

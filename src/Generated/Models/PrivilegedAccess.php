<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrivilegedAccess extends Entity implements Parsable 
{
    /**
     * @var string|null $displayName The display name of the provider managed by PIM.
    */
    private ?string $displayName = null;
    
    /**
     * @var array<GovernanceResource>|null $resources A collection of resources for the provider.
    */
    private ?array $resources = null;
    
    /**
     * @var array<GovernanceRoleAssignmentRequest>|null $roleAssignmentRequests A collection of role assignment requests for the provider.
    */
    private ?array $roleAssignmentRequests = null;
    
    /**
     * @var array<GovernanceRoleAssignment>|null $roleAssignments A collection of role assignments for the provider.
    */
    private ?array $roleAssignments = null;
    
    /**
     * @var array<GovernanceRoleDefinition>|null $roleDefinitions A collection of role defintions for the provider.
    */
    private ?array $roleDefinitions = null;
    
    /**
     * @var array<GovernanceRoleSetting>|null $roleSettings A collection of role settings for the provider.
    */
    private ?array $roleSettings = null;
    
    /**
     * Instantiates a new privilegedAccess and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.privilegedAccess');
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
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'resources' => function (ParseNode $n) use ($o) { $o->setResources($n->getCollectionOfObjectValues(array(GovernanceResource::class, 'createFromDiscriminatorValue'))); },
            'roleAssignmentRequests' => function (ParseNode $n) use ($o) { $o->setRoleAssignmentRequests($n->getCollectionOfObjectValues(array(GovernanceRoleAssignmentRequest::class, 'createFromDiscriminatorValue'))); },
            'roleAssignments' => function (ParseNode $n) use ($o) { $o->setRoleAssignments($n->getCollectionOfObjectValues(array(GovernanceRoleAssignment::class, 'createFromDiscriminatorValue'))); },
            'roleDefinitions' => function (ParseNode $n) use ($o) { $o->setRoleDefinitions($n->getCollectionOfObjectValues(array(GovernanceRoleDefinition::class, 'createFromDiscriminatorValue'))); },
            'roleSettings' => function (ParseNode $n) use ($o) { $o->setRoleSettings($n->getCollectionOfObjectValues(array(GovernanceRoleSetting::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the resources property value. A collection of resources for the provider.
     * @return array<GovernanceResource>|null
    */
    public function getResources(): ?array {
        return $this->resources;
    }

    /**
     * Gets the roleAssignmentRequests property value. A collection of role assignment requests for the provider.
     * @return array<GovernanceRoleAssignmentRequest>|null
    */
    public function getRoleAssignmentRequests(): ?array {
        return $this->roleAssignmentRequests;
    }

    /**
     * Gets the roleAssignments property value. A collection of role assignments for the provider.
     * @return array<GovernanceRoleAssignment>|null
    */
    public function getRoleAssignments(): ?array {
        return $this->roleAssignments;
    }

    /**
     * Gets the roleDefinitions property value. A collection of role defintions for the provider.
     * @return array<GovernanceRoleDefinition>|null
    */
    public function getRoleDefinitions(): ?array {
        return $this->roleDefinitions;
    }

    /**
     * Gets the roleSettings property value. A collection of role settings for the provider.
     * @return array<GovernanceRoleSetting>|null
    */
    public function getRoleSettings(): ?array {
        return $this->roleSettings;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfObjectValues('resources', $this->resources);
        $writer->writeCollectionOfObjectValues('roleAssignmentRequests', $this->roleAssignmentRequests);
        $writer->writeCollectionOfObjectValues('roleAssignments', $this->roleAssignments);
        $writer->writeCollectionOfObjectValues('roleDefinitions', $this->roleDefinitions);
        $writer->writeCollectionOfObjectValues('roleSettings', $this->roleSettings);
    }

    /**
     * Sets the displayName property value. The display name of the provider managed by PIM.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the resources property value. A collection of resources for the provider.
     *  @param array<GovernanceResource>|null $value Value to set for the resources property.
    */
    public function setResources(?array $value ): void {
        $this->resources = $value;
    }

    /**
     * Sets the roleAssignmentRequests property value. A collection of role assignment requests for the provider.
     *  @param array<GovernanceRoleAssignmentRequest>|null $value Value to set for the roleAssignmentRequests property.
    */
    public function setRoleAssignmentRequests(?array $value ): void {
        $this->roleAssignmentRequests = $value;
    }

    /**
     * Sets the roleAssignments property value. A collection of role assignments for the provider.
     *  @param array<GovernanceRoleAssignment>|null $value Value to set for the roleAssignments property.
    */
    public function setRoleAssignments(?array $value ): void {
        $this->roleAssignments = $value;
    }

    /**
     * Sets the roleDefinitions property value. A collection of role defintions for the provider.
     *  @param array<GovernanceRoleDefinition>|null $value Value to set for the roleDefinitions property.
    */
    public function setRoleDefinitions(?array $value ): void {
        $this->roleDefinitions = $value;
    }

    /**
     * Sets the roleSettings property value. A collection of role settings for the provider.
     *  @param array<GovernanceRoleSetting>|null $value Value to set for the roleSettings property.
    */
    public function setRoleSettings(?array $value ): void {
        $this->roleSettings = $value;
    }

}

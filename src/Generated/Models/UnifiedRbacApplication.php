<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedRbacApplication extends Entity implements Parsable 
{
    /**
     * Instantiates a new UnifiedRbacApplication and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedRbacApplication
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedRbacApplication {
        return new UnifiedRbacApplication();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'resourceNamespaces' => fn(ParseNode $n) => $o->setResourceNamespaces($n->getCollectionOfObjectValues([UnifiedRbacResourceNamespace::class, 'createFromDiscriminatorValue'])),
            'roleAssignments' => fn(ParseNode $n) => $o->setRoleAssignments($n->getCollectionOfObjectValues([UnifiedRoleAssignment::class, 'createFromDiscriminatorValue'])),
            'roleDefinitions' => fn(ParseNode $n) => $o->setRoleDefinitions($n->getCollectionOfObjectValues([UnifiedRoleDefinition::class, 'createFromDiscriminatorValue'])),
            'transitiveRoleAssignments' => fn(ParseNode $n) => $o->setTransitiveRoleAssignments($n->getCollectionOfObjectValues([UnifiedRoleAssignment::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the resourceNamespaces property value. Resource that represents a collection of related actions.
     * @return array<UnifiedRbacResourceNamespace>|null
    */
    public function getResourceNamespaces(): ?array {
        return $this->getBackingStore()->get('resourceNamespaces');
    }

    /**
     * Gets the roleAssignments property value. Resource to grant access to users or groups.
     * @return array<UnifiedRoleAssignment>|null
    */
    public function getRoleAssignments(): ?array {
        return $this->getBackingStore()->get('roleAssignments');
    }

    /**
     * Gets the roleDefinitions property value. The roles allowed by RBAC providers and the permissions assigned to the roles.
     * @return array<UnifiedRoleDefinition>|null
    */
    public function getRoleDefinitions(): ?array {
        return $this->getBackingStore()->get('roleDefinitions');
    }

    /**
     * Gets the transitiveRoleAssignments property value. Resource to grant access to users or groups that are transitive.
     * @return array<UnifiedRoleAssignment>|null
    */
    public function getTransitiveRoleAssignments(): ?array {
        return $this->getBackingStore()->get('transitiveRoleAssignments');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('resourceNamespaces', $this->getResourceNamespaces());
        $writer->writeCollectionOfObjectValues('roleAssignments', $this->getRoleAssignments());
        $writer->writeCollectionOfObjectValues('roleDefinitions', $this->getRoleDefinitions());
        $writer->writeCollectionOfObjectValues('transitiveRoleAssignments', $this->getTransitiveRoleAssignments());
    }

    /**
     * Sets the resourceNamespaces property value. Resource that represents a collection of related actions.
     * @param array<UnifiedRbacResourceNamespace>|null $value Value to set for the resourceNamespaces property.
    */
    public function setResourceNamespaces(?array $value): void {
        $this->getBackingStore()->set('resourceNamespaces', $value);
    }

    /**
     * Sets the roleAssignments property value. Resource to grant access to users or groups.
     * @param array<UnifiedRoleAssignment>|null $value Value to set for the roleAssignments property.
    */
    public function setRoleAssignments(?array $value): void {
        $this->getBackingStore()->set('roleAssignments', $value);
    }

    /**
     * Sets the roleDefinitions property value. The roles allowed by RBAC providers and the permissions assigned to the roles.
     * @param array<UnifiedRoleDefinition>|null $value Value to set for the roleDefinitions property.
    */
    public function setRoleDefinitions(?array $value): void {
        $this->getBackingStore()->set('roleDefinitions', $value);
    }

    /**
     * Sets the transitiveRoleAssignments property value. Resource to grant access to users or groups that are transitive.
     * @param array<UnifiedRoleAssignment>|null $value Value to set for the transitiveRoleAssignments property.
    */
    public function setTransitiveRoleAssignments(?array $value): void {
        $this->getBackingStore()->set('transitiveRoleAssignments', $value);
    }

}

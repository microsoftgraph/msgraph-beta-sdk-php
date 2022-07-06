<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RbacApplicationMultiple extends Entity implements Parsable 
{
    /**
     * @var array<UnifiedRbacResourceNamespace>|null $resourceNamespaces The resourceNamespaces property
    */
    private ?array $resourceNamespaces = null;
    
    /**
     * @var array<UnifiedRoleAssignmentMultiple>|null $roleAssignments The roleAssignments property
    */
    private ?array $roleAssignments = null;
    
    /**
     * @var array<UnifiedRoleDefinition>|null $roleDefinitions The roleDefinitions property
    */
    private ?array $roleDefinitions = null;
    
    /**
     * Instantiates a new RbacApplicationMultiple and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RbacApplicationMultiple
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RbacApplicationMultiple {
        return new RbacApplicationMultiple();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'resourceNamespaces' => function (ParseNode $n) use ($o) { $o->setResourceNamespaces($n->getCollectionOfObjectValues(array(UnifiedRbacResourceNamespace::class, 'createFromDiscriminatorValue'))); },
            'roleAssignments' => function (ParseNode $n) use ($o) { $o->setRoleAssignments($n->getCollectionOfObjectValues(array(UnifiedRoleAssignmentMultiple::class, 'createFromDiscriminatorValue'))); },
            'roleDefinitions' => function (ParseNode $n) use ($o) { $o->setRoleDefinitions($n->getCollectionOfObjectValues(array(UnifiedRoleDefinition::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the resourceNamespaces property value. The resourceNamespaces property
     * @return array<UnifiedRbacResourceNamespace>|null
    */
    public function getResourceNamespaces(): ?array {
        return $this->resourceNamespaces;
    }

    /**
     * Gets the roleAssignments property value. The roleAssignments property
     * @return array<UnifiedRoleAssignmentMultiple>|null
    */
    public function getRoleAssignments(): ?array {
        return $this->roleAssignments;
    }

    /**
     * Gets the roleDefinitions property value. The roleDefinitions property
     * @return array<UnifiedRoleDefinition>|null
    */
    public function getRoleDefinitions(): ?array {
        return $this->roleDefinitions;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('resourceNamespaces', $this->resourceNamespaces);
        $writer->writeCollectionOfObjectValues('roleAssignments', $this->roleAssignments);
        $writer->writeCollectionOfObjectValues('roleDefinitions', $this->roleDefinitions);
    }

    /**
     * Sets the resourceNamespaces property value. The resourceNamespaces property
     *  @param array<UnifiedRbacResourceNamespace>|null $value Value to set for the resourceNamespaces property.
    */
    public function setResourceNamespaces(?array $value ): void {
        $this->resourceNamespaces = $value;
    }

    /**
     * Sets the roleAssignments property value. The roleAssignments property
     *  @param array<UnifiedRoleAssignmentMultiple>|null $value Value to set for the roleAssignments property.
    */
    public function setRoleAssignments(?array $value ): void {
        $this->roleAssignments = $value;
    }

    /**
     * Sets the roleDefinitions property value. The roleDefinitions property
     *  @param array<UnifiedRoleDefinition>|null $value Value to set for the roleDefinitions property.
    */
    public function setRoleDefinitions(?array $value ): void {
        $this->roleDefinitions = $value;
    }

}

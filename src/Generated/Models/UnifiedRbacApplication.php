<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class UnifiedRbacApplication extends Entity implements Parsable 
{
    /**
     * Instantiates a new unifiedRbacApplication and sets the default values.
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
     * Gets the customAppScopes property value. Workload-specific scope object that represents the resources for which the principal has been granted access.
     * @return array<CustomAppScope>|null
    */
    public function getCustomAppScopes(): ?array {
        $val = $this->getBackingStore()->get('customAppScopes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CustomAppScope::class);
            /** @var array<CustomAppScope>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customAppScopes'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'customAppScopes' => fn(ParseNode $n) => $o->setCustomAppScopes($n->getCollectionOfObjectValues([CustomAppScope::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'resourceNamespaces' => fn(ParseNode $n) => $o->setResourceNamespaces($n->getCollectionOfObjectValues([UnifiedRbacResourceNamespace::class, 'createFromDiscriminatorValue'])),
            'roleAssignments' => fn(ParseNode $n) => $o->setRoleAssignments($n->getCollectionOfObjectValues([UnifiedRoleAssignment::class, 'createFromDiscriminatorValue'])),
            'roleDefinitions' => fn(ParseNode $n) => $o->setRoleDefinitions($n->getCollectionOfObjectValues([UnifiedRoleDefinition::class, 'createFromDiscriminatorValue'])),
            'transitiveRoleAssignments' => fn(ParseNode $n) => $o->setTransitiveRoleAssignments($n->getCollectionOfObjectValues([UnifiedRoleAssignment::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the resourceNamespaces property value. Resource that represents a collection of related actions.
     * @return array<UnifiedRbacResourceNamespace>|null
    */
    public function getResourceNamespaces(): ?array {
        $val = $this->getBackingStore()->get('resourceNamespaces');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UnifiedRbacResourceNamespace::class);
            /** @var array<UnifiedRbacResourceNamespace>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceNamespaces'");
    }

    /**
     * Gets the roleAssignments property value. Resource to grant access to users or groups.
     * @return array<UnifiedRoleAssignment>|null
    */
    public function getRoleAssignments(): ?array {
        $val = $this->getBackingStore()->get('roleAssignments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UnifiedRoleAssignment::class);
            /** @var array<UnifiedRoleAssignment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleAssignments'");
    }

    /**
     * Gets the roleDefinitions property value. The roles allowed by RBAC providers and the permissions assigned to the roles.
     * @return array<UnifiedRoleDefinition>|null
    */
    public function getRoleDefinitions(): ?array {
        $val = $this->getBackingStore()->get('roleDefinitions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UnifiedRoleDefinition::class);
            /** @var array<UnifiedRoleDefinition>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleDefinitions'");
    }

    /**
     * Gets the transitiveRoleAssignments property value. Resource to grant access to users or groups that are transitive.
     * @return array<UnifiedRoleAssignment>|null
    */
    public function getTransitiveRoleAssignments(): ?array {
        $val = $this->getBackingStore()->get('transitiveRoleAssignments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UnifiedRoleAssignment::class);
            /** @var array<UnifiedRoleAssignment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'transitiveRoleAssignments'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('customAppScopes', $this->getCustomAppScopes());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('resourceNamespaces', $this->getResourceNamespaces());
        $writer->writeCollectionOfObjectValues('roleAssignments', $this->getRoleAssignments());
        $writer->writeCollectionOfObjectValues('roleDefinitions', $this->getRoleDefinitions());
        $writer->writeCollectionOfObjectValues('transitiveRoleAssignments', $this->getTransitiveRoleAssignments());
    }

    /**
     * Sets the customAppScopes property value. Workload-specific scope object that represents the resources for which the principal has been granted access.
     * @param array<CustomAppScope>|null $value Value to set for the customAppScopes property.
    */
    public function setCustomAppScopes(?array $value): void {
        $this->getBackingStore()->set('customAppScopes', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
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

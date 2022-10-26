<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DefaultUserRoleOverride extends Entity implements Parsable 
{
    /**
     * @var bool|null $isDefault The isDefault property
    */
    private ?bool $isDefault = null;
    
    /**
     * @var array<UnifiedRolePermission>|null $rolePermissions The rolePermissions property
    */
    private ?array $rolePermissions = null;
    
    /**
     * Instantiates a new defaultUserRoleOverride and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.defaultUserRoleOverride');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DefaultUserRoleOverride
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DefaultUserRoleOverride {
        return new DefaultUserRoleOverride();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isDefault' => fn(ParseNode $n) => $o->setIsDefault($n->getBooleanValue()),
            'rolePermissions' => fn(ParseNode $n) => $o->setRolePermissions($n->getCollectionOfObjectValues([UnifiedRolePermission::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isDefault property value. The isDefault property
     * @return bool|null
    */
    public function getIsDefault(): ?bool {
        return $this->isDefault;
    }

    /**
     * Gets the rolePermissions property value. The rolePermissions property
     * @return array<UnifiedRolePermission>|null
    */
    public function getRolePermissions(): ?array {
        return $this->rolePermissions;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isDefault', $this->isDefault);
        $writer->writeCollectionOfObjectValues('rolePermissions', $this->rolePermissions);
    }

    /**
     * Sets the isDefault property value. The isDefault property
     *  @param bool|null $value Value to set for the isDefault property.
    */
    public function setIsDefault(?bool $value ): void {
        $this->isDefault = $value;
    }

    /**
     * Sets the rolePermissions property value. The rolePermissions property
     *  @param array<UnifiedRolePermission>|null $value Value to set for the rolePermissions property.
    */
    public function setRolePermissions(?array $value ): void {
        $this->rolePermissions = $value;
    }

}

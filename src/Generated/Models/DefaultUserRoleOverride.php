<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class DefaultUserRoleOverride extends Entity implements Parsable 
{
    /**
     * Instantiates a new DefaultUserRoleOverride and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
     * @return array<string, callable(ParseNode): void>
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
        $val = $this->getBackingStore()->get('isDefault');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isDefault'");
    }

    /**
     * Gets the rolePermissions property value. The rolePermissions property
     * @return array<UnifiedRolePermission>|null
    */
    public function getRolePermissions(): ?array {
        $val = $this->getBackingStore()->get('rolePermissions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UnifiedRolePermission::class);
            /** @var array<UnifiedRolePermission>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rolePermissions'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isDefault', $this->getIsDefault());
        $writer->writeCollectionOfObjectValues('rolePermissions', $this->getRolePermissions());
    }

    /**
     * Sets the isDefault property value. The isDefault property
     * @param bool|null $value Value to set for the isDefault property.
    */
    public function setIsDefault(?bool $value): void {
        $this->getBackingStore()->set('isDefault', $value);
    }

    /**
     * Sets the rolePermissions property value. The rolePermissions property
     * @param array<UnifiedRolePermission>|null $value Value to set for the rolePermissions property.
    */
    public function setRolePermissions(?array $value): void {
        $this->getBackingStore()->set('rolePermissions', $value);
    }

}

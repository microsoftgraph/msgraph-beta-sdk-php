<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AwsExternalSystemAccessRoleFinding extends Finding implements Parsable 
{
    /**
     * Instantiates a new AwsExternalSystemAccessRoleFinding and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AwsExternalSystemAccessRoleFinding
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AwsExternalSystemAccessRoleFinding {
        return new AwsExternalSystemAccessRoleFinding();
    }

    /**
     * Gets the accessibleSystemIds property value. The IDs of the accounts that this role is able to access.
     * @return array<string>|null
    */
    public function getAccessibleSystemIds(): ?array {
        $val = $this->getBackingStore()->get('accessibleSystemIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessibleSystemIds'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessibleSystemIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAccessibleSystemIds($val);
            },
            'permissionsCreepIndex' => fn(ParseNode $n) => $o->setPermissionsCreepIndex($n->getObjectValue([PermissionsCreepIndex::class, 'createFromDiscriminatorValue'])),
            'role' => fn(ParseNode $n) => $o->setRole($n->getObjectValue([AwsRole::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the permissionsCreepIndex property value. The permissionsCreepIndex property
     * @return PermissionsCreepIndex|null
    */
    public function getPermissionsCreepIndex(): ?PermissionsCreepIndex {
        $val = $this->getBackingStore()->get('permissionsCreepIndex');
        if (is_null($val) || $val instanceof PermissionsCreepIndex) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'permissionsCreepIndex'");
    }

    /**
     * Gets the role property value. The role property
     * @return AwsRole|null
    */
    public function getRole(): ?AwsRole {
        $val = $this->getBackingStore()->get('role');
        if (is_null($val) || $val instanceof AwsRole) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'role'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('accessibleSystemIds', $this->getAccessibleSystemIds());
        $writer->writeObjectValue('permissionsCreepIndex', $this->getPermissionsCreepIndex());
        $writer->writeObjectValue('role', $this->getRole());
    }

    /**
     * Sets the accessibleSystemIds property value. The IDs of the accounts that this role is able to access.
     * @param array<string>|null $value Value to set for the accessibleSystemIds property.
    */
    public function setAccessibleSystemIds(?array $value): void {
        $this->getBackingStore()->set('accessibleSystemIds', $value);
    }

    /**
     * Sets the permissionsCreepIndex property value. The permissionsCreepIndex property
     * @param PermissionsCreepIndex|null $value Value to set for the permissionsCreepIndex property.
    */
    public function setPermissionsCreepIndex(?PermissionsCreepIndex $value): void {
        $this->getBackingStore()->set('permissionsCreepIndex', $value);
    }

    /**
     * Sets the role property value. The role property
     * @param AwsRole|null $value Value to set for the role property.
    */
    public function setRole(?AwsRole $value): void {
        $this->getBackingStore()->set('role', $value);
    }

}

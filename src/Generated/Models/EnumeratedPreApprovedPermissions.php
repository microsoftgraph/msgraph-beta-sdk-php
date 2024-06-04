<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class EnumeratedPreApprovedPermissions extends PreApprovedPermissions implements Parsable 
{
    /**
     * Instantiates a new EnumeratedPreApprovedPermissions and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.enumeratedPreApprovedPermissions');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EnumeratedPreApprovedPermissions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EnumeratedPreApprovedPermissions {
        return new EnumeratedPreApprovedPermissions();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'permissionIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setPermissionIds($val);
            },
            'resourceApplicationId' => fn(ParseNode $n) => $o->setResourceApplicationId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the permissionIds property value. The list of id values for the specific resource-specific application permissions to match with. See the resourceSpecificApplicationPermissions property of the servicePrincipal object for the list of permissions.
     * @return array<string>|null
    */
    public function getPermissionIds(): ?array {
        $val = $this->getBackingStore()->get('permissionIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'permissionIds'");
    }

    /**
     * Gets the resourceApplicationId property value. The appId of the resource application (the API). Required.
     * @return string|null
    */
    public function getResourceApplicationId(): ?string {
        $val = $this->getBackingStore()->get('resourceApplicationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceApplicationId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('permissionIds', $this->getPermissionIds());
        $writer->writeStringValue('resourceApplicationId', $this->getResourceApplicationId());
    }

    /**
     * Sets the permissionIds property value. The list of id values for the specific resource-specific application permissions to match with. See the resourceSpecificApplicationPermissions property of the servicePrincipal object for the list of permissions.
     * @param array<string>|null $value Value to set for the permissionIds property.
    */
    public function setPermissionIds(?array $value): void {
        $this->getBackingStore()->set('permissionIds', $value);
    }

    /**
     * Sets the resourceApplicationId property value. The appId of the resource application (the API). Required.
     * @param string|null $value Value to set for the resourceApplicationId property.
    */
    public function setResourceApplicationId(?string $value): void {
        $this->getBackingStore()->set('resourceApplicationId', $value);
    }

}

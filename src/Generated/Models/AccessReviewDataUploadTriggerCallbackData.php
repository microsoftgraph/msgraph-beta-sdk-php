<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AccessReviewDataUploadTriggerCallbackData extends CustomExtensionData implements Parsable 
{
    /**
     * Instantiates a new AccessReviewDataUploadTriggerCallbackData and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.accessReviewDataUploadTriggerCallbackData');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessReviewDataUploadTriggerCallbackData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessReviewDataUploadTriggerCallbackData {
        return new AccessReviewDataUploadTriggerCallbackData();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'permissionDescription' => fn(ParseNode $n) => $o->setPermissionDescription($n->getStringValue()),
            'permissionId' => fn(ParseNode $n) => $o->setPermissionId($n->getStringValue()),
            'permissionName' => fn(ParseNode $n) => $o->setPermissionName($n->getStringValue()),
            'permissionType' => fn(ParseNode $n) => $o->setPermissionType($n->getStringValue()),
            'principalAADId' => fn(ParseNode $n) => $o->setPrincipalAADId($n->getStringValue()),
            'resourceDescription' => fn(ParseNode $n) => $o->setResourceDescription($n->getStringValue()),
            'resourceId' => fn(ParseNode $n) => $o->setResourceId($n->getStringValue()),
            'resourceName' => fn(ParseNode $n) => $o->setResourceName($n->getStringValue()),
            'resourceOwners' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setResourceOwners($val);
            },
            'resourceType' => fn(ParseNode $n) => $o->setResourceType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the permissionDescription property value. A description for the permission.
     * @return string|null
    */
    public function getPermissionDescription(): ?string {
        $val = $this->getBackingStore()->get('permissionDescription');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'permissionDescription'");
    }

    /**
     * Gets the permissionId property value. The id of the permission assigned to this principal.
     * @return string|null
    */
    public function getPermissionId(): ?string {
        $val = $this->getBackingStore()->get('permissionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'permissionId'");
    }

    /**
     * Gets the permissionName property value. The name of the permission assigned to this principal.
     * @return string|null
    */
    public function getPermissionName(): ?string {
        $val = $this->getBackingStore()->get('permissionName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'permissionName'");
    }

    /**
     * Gets the permissionType property value. The type of the permission assigned to this principal.
     * @return string|null
    */
    public function getPermissionType(): ?string {
        $val = $this->getBackingStore()->get('permissionType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'permissionType'");
    }

    /**
     * Gets the principalAADId property value. The principalAADId property
     * @return string|null
    */
    public function getPrincipalAADId(): ?string {
        $val = $this->getBackingStore()->get('principalAADId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'principalAADId'");
    }

    /**
     * Gets the resourceDescription property value. The resourceDescription property
     * @return string|null
    */
    public function getResourceDescription(): ?string {
        $val = $this->getBackingStore()->get('resourceDescription');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceDescription'");
    }

    /**
     * Gets the resourceId property value. The resourceId property
     * @return string|null
    */
    public function getResourceId(): ?string {
        $val = $this->getBackingStore()->get('resourceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceId'");
    }

    /**
     * Gets the resourceName property value. The resourceName property
     * @return string|null
    */
    public function getResourceName(): ?string {
        $val = $this->getBackingStore()->get('resourceName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceName'");
    }

    /**
     * Gets the resourceOwners property value. The resourceOwners property
     * @return array<string>|null
    */
    public function getResourceOwners(): ?array {
        $val = $this->getBackingStore()->get('resourceOwners');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceOwners'");
    }

    /**
     * Gets the resourceType property value. The resourceType property
     * @return string|null
    */
    public function getResourceType(): ?string {
        $val = $this->getBackingStore()->get('resourceType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('permissionDescription', $this->getPermissionDescription());
        $writer->writeStringValue('permissionId', $this->getPermissionId());
        $writer->writeStringValue('permissionName', $this->getPermissionName());
        $writer->writeStringValue('permissionType', $this->getPermissionType());
        $writer->writeStringValue('principalAADId', $this->getPrincipalAADId());
        $writer->writeStringValue('resourceDescription', $this->getResourceDescription());
        $writer->writeStringValue('resourceId', $this->getResourceId());
        $writer->writeStringValue('resourceName', $this->getResourceName());
        $writer->writeCollectionOfPrimitiveValues('resourceOwners', $this->getResourceOwners());
        $writer->writeStringValue('resourceType', $this->getResourceType());
    }

    /**
     * Sets the permissionDescription property value. A description for the permission.
     * @param string|null $value Value to set for the permissionDescription property.
    */
    public function setPermissionDescription(?string $value): void {
        $this->getBackingStore()->set('permissionDescription', $value);
    }

    /**
     * Sets the permissionId property value. The id of the permission assigned to this principal.
     * @param string|null $value Value to set for the permissionId property.
    */
    public function setPermissionId(?string $value): void {
        $this->getBackingStore()->set('permissionId', $value);
    }

    /**
     * Sets the permissionName property value. The name of the permission assigned to this principal.
     * @param string|null $value Value to set for the permissionName property.
    */
    public function setPermissionName(?string $value): void {
        $this->getBackingStore()->set('permissionName', $value);
    }

    /**
     * Sets the permissionType property value. The type of the permission assigned to this principal.
     * @param string|null $value Value to set for the permissionType property.
    */
    public function setPermissionType(?string $value): void {
        $this->getBackingStore()->set('permissionType', $value);
    }

    /**
     * Sets the principalAADId property value. The principalAADId property
     * @param string|null $value Value to set for the principalAADId property.
    */
    public function setPrincipalAADId(?string $value): void {
        $this->getBackingStore()->set('principalAADId', $value);
    }

    /**
     * Sets the resourceDescription property value. The resourceDescription property
     * @param string|null $value Value to set for the resourceDescription property.
    */
    public function setResourceDescription(?string $value): void {
        $this->getBackingStore()->set('resourceDescription', $value);
    }

    /**
     * Sets the resourceId property value. The resourceId property
     * @param string|null $value Value to set for the resourceId property.
    */
    public function setResourceId(?string $value): void {
        $this->getBackingStore()->set('resourceId', $value);
    }

    /**
     * Sets the resourceName property value. The resourceName property
     * @param string|null $value Value to set for the resourceName property.
    */
    public function setResourceName(?string $value): void {
        $this->getBackingStore()->set('resourceName', $value);
    }

    /**
     * Sets the resourceOwners property value. The resourceOwners property
     * @param array<string>|null $value Value to set for the resourceOwners property.
    */
    public function setResourceOwners(?array $value): void {
        $this->getBackingStore()->set('resourceOwners', $value);
    }

    /**
     * Sets the resourceType property value. The resourceType property
     * @param string|null $value Value to set for the resourceType property.
    */
    public function setResourceType(?string $value): void {
        $this->getBackingStore()->set('resourceType', $value);
    }

}

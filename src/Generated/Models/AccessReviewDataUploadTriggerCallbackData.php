<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

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
            'principalId' => fn(ParseNode $n) => $o->setPrincipalId($n->getStringValue()),
            'principalType' => fn(ParseNode $n) => $o->setPrincipalType($n->getEnumValue(PrincipalType::class)),
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
     * Gets the principalId property value. The id of the principal who has permissions on the custom data provided resource.
     * @return string|null
    */
    public function getPrincipalId(): ?string {
        $val = $this->getBackingStore()->get('principalId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'principalId'");
    }

    /**
     * Gets the principalType property value. The principalType property
     * @return PrincipalType|null
    */
    public function getPrincipalType(): ?PrincipalType {
        $val = $this->getBackingStore()->get('principalType');
        if (is_null($val) || $val instanceof PrincipalType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'principalType'");
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
        $writer->writeStringValue('principalId', $this->getPrincipalId());
        $writer->writeEnumValue('principalType', $this->getPrincipalType());
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
     * Sets the principalId property value. The id of the principal who has permissions on the custom data provided resource.
     * @param string|null $value Value to set for the principalId property.
    */
    public function setPrincipalId(?string $value): void {
        $this->getBackingStore()->set('principalId', $value);
    }

    /**
     * Sets the principalType property value. The principalType property
     * @param PrincipalType|null $value Value to set for the principalType property.
    */
    public function setPrincipalType(?PrincipalType $value): void {
        $this->getBackingStore()->set('principalType', $value);
    }

}

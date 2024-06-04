<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class PreApprovedPermissions implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new PreApprovedPermissions and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PreApprovedPermissions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PreApprovedPermissions {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.allPreApprovedPermissions': return new AllPreApprovedPermissions();
                case '#microsoft.graph.allPreApprovedPermissionsOnResourceApp': return new AllPreApprovedPermissionsOnResourceApp();
                case '#microsoft.graph.enumeratedPreApprovedPermissions': return new EnumeratedPreApprovedPermissions();
            }
        }
        return new PreApprovedPermissions();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'permissionKind' => fn(ParseNode $n) => $o->setPermissionKind($n->getEnumValue(PermissionKind::class)),
            'permissionType' => fn(ParseNode $n) => $o->setPermissionType($n->getEnumValue(PermissionType::class)),
        ];
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
     * Gets the permissionKind property value. Indicates the scope of permissions that are included in this condition set. Possible values: all for all permissions, enumerated for a given list of permissions, or allPermissionsOnResourceApp for all permissions from a given API. Required.
     * @return PermissionKind|null
    */
    public function getPermissionKind(): ?PermissionKind {
        $val = $this->getBackingStore()->get('permissionKind');
        if (is_null($val) || $val instanceof PermissionKind) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'permissionKind'");
    }

    /**
     * Gets the permissionType property value. The type of permission being granted. Possible values: application for application permissions, or delegated for delegated permissions. Required.
     * @return PermissionType|null
    */
    public function getPermissionType(): ?PermissionType {
        $val = $this->getBackingStore()->get('permissionType');
        if (is_null($val) || $val instanceof PermissionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'permissionType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('permissionKind', $this->getPermissionKind());
        $writer->writeEnumValue('permissionType', $this->getPermissionType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the permissionKind property value. Indicates the scope of permissions that are included in this condition set. Possible values: all for all permissions, enumerated for a given list of permissions, or allPermissionsOnResourceApp for all permissions from a given API. Required.
     * @param PermissionKind|null $value Value to set for the permissionKind property.
    */
    public function setPermissionKind(?PermissionKind $value): void {
        $this->getBackingStore()->set('permissionKind', $value);
    }

    /**
     * Sets the permissionType property value. The type of permission being granted. Possible values: application for application permissions, or delegated for delegated permissions. Required.
     * @param PermissionType|null $value Value to set for the permissionType property.
    */
    public function setPermissionType(?PermissionType $value): void {
        $this->getBackingStore()->set('permissionType', $value);
    }

}

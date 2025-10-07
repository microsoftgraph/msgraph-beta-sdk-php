<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class PreApprovalDetail implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new PreApprovalDetail and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PreApprovalDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PreApprovalDetail {
        return new PreApprovalDetail();
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
            'permissions' => fn(ParseNode $n) => $o->setPermissions($n->getObjectValue([PreApprovedPermissions::class, 'createFromDiscriminatorValue'])),
            'scopeType' => fn(ParseNode $n) => $o->setScopeType($n->getEnumValue(ResourceScopeType::class)),
            'sensitivityLabels' => fn(ParseNode $n) => $o->setSensitivityLabels($n->getObjectValue([ScopeSensitivityLabels::class, 'createFromDiscriminatorValue'])),
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
     * Gets the permissions property value. The permissions property
     * @return PreApprovedPermissions|null
    */
    public function getPermissions(): ?PreApprovedPermissions {
        $val = $this->getBackingStore()->get('permissions');
        if (is_null($val) || $val instanceof PreApprovedPermissions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'permissions'");
    }

    /**
     * Gets the scopeType property value. The scopeType property
     * @return ResourceScopeType|null
    */
    public function getScopeType(): ?ResourceScopeType {
        $val = $this->getBackingStore()->get('scopeType');
        if (is_null($val) || $val instanceof ResourceScopeType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scopeType'");
    }

    /**
     * Gets the sensitivityLabels property value. The sensitivityLabels property
     * @return ScopeSensitivityLabels|null
    */
    public function getSensitivityLabels(): ?ScopeSensitivityLabels {
        $val = $this->getBackingStore()->get('sensitivityLabels');
        if (is_null($val) || $val instanceof ScopeSensitivityLabels) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sensitivityLabels'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('permissions', $this->getPermissions());
        $writer->writeEnumValue('scopeType', $this->getScopeType());
        $writer->writeObjectValue('sensitivityLabels', $this->getSensitivityLabels());
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
     * Sets the permissions property value. The permissions property
     * @param PreApprovedPermissions|null $value Value to set for the permissions property.
    */
    public function setPermissions(?PreApprovedPermissions $value): void {
        $this->getBackingStore()->set('permissions', $value);
    }

    /**
     * Sets the scopeType property value. The scopeType property
     * @param ResourceScopeType|null $value Value to set for the scopeType property.
    */
    public function setScopeType(?ResourceScopeType $value): void {
        $this->getBackingStore()->set('scopeType', $value);
    }

    /**
     * Sets the sensitivityLabels property value. The sensitivityLabels property
     * @param ScopeSensitivityLabels|null $value Value to set for the sensitivityLabels property.
    */
    public function setSensitivityLabels(?ScopeSensitivityLabels $value): void {
        $this->getBackingStore()->set('sensitivityLabels', $value);
    }

}

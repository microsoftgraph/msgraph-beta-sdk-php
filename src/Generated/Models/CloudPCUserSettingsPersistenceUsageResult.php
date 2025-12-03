<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CloudPCUserSettingsPersistenceUsageResult implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CloudPCUserSettingsPersistenceUsageResult and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPCUserSettingsPersistenceUsageResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPCUserSettingsPersistenceUsageResult {
        return new CloudPCUserSettingsPersistenceUsageResult();
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
            'remainingAvailableStorageInGB' => fn(ParseNode $n) => $o->setRemainingAvailableStorageInGB($n->getIntegerValue()),
            'totalAllocatedStorageInGB' => fn(ParseNode $n) => $o->setTotalAllocatedStorageInGB($n->getIntegerValue()),
            'usedStorageInGB' => fn(ParseNode $n) => $o->setUsedStorageInGB($n->getIntegerValue()),
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
     * Gets the remainingAvailableStorageInGB property value. The remaining available preallocated user settings persistence profile storage for a specific Cloud PC policy assignment. This value equals the total preallocated storage size minus the used preallocated storage size. Required. Read-only.
     * @return int|null
    */
    public function getRemainingAvailableStorageInGB(): ?int {
        $val = $this->getBackingStore()->get('remainingAvailableStorageInGB');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'remainingAvailableStorageInGB'");
    }

    /**
     * Gets the totalAllocatedStorageInGB property value. The total preallocated user settings persistence profile storage for a specific Cloud PC policy assignment. The system calculates the total size based on the number of licenses assigned to this policy and the size of each Cloud PC disk. Required. Read-only.
     * @return int|null
    */
    public function getTotalAllocatedStorageInGB(): ?int {
        $val = $this->getBackingStore()->get('totalAllocatedStorageInGB');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalAllocatedStorageInGB'");
    }

    /**
     * Gets the usedStorageInGB property value. The total used preallocated user settings persistence storage for a specific Cloud PC policy assignment. This value represents the total allocated size for users who signed in. Required. Read-only.
     * @return int|null
    */
    public function getUsedStorageInGB(): ?int {
        $val = $this->getBackingStore()->get('usedStorageInGB');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'usedStorageInGB'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('remainingAvailableStorageInGB', $this->getRemainingAvailableStorageInGB());
        $writer->writeIntegerValue('totalAllocatedStorageInGB', $this->getTotalAllocatedStorageInGB());
        $writer->writeIntegerValue('usedStorageInGB', $this->getUsedStorageInGB());
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
     * Sets the remainingAvailableStorageInGB property value. The remaining available preallocated user settings persistence profile storage for a specific Cloud PC policy assignment. This value equals the total preallocated storage size minus the used preallocated storage size. Required. Read-only.
     * @param int|null $value Value to set for the remainingAvailableStorageInGB property.
    */
    public function setRemainingAvailableStorageInGB(?int $value): void {
        $this->getBackingStore()->set('remainingAvailableStorageInGB', $value);
    }

    /**
     * Sets the totalAllocatedStorageInGB property value. The total preallocated user settings persistence profile storage for a specific Cloud PC policy assignment. The system calculates the total size based on the number of licenses assigned to this policy and the size of each Cloud PC disk. Required. Read-only.
     * @param int|null $value Value to set for the totalAllocatedStorageInGB property.
    */
    public function setTotalAllocatedStorageInGB(?int $value): void {
        $this->getBackingStore()->set('totalAllocatedStorageInGB', $value);
    }

    /**
     * Sets the usedStorageInGB property value. The total used preallocated user settings persistence storage for a specific Cloud PC policy assignment. This value represents the total allocated size for users who signed in. Required. Read-only.
     * @param int|null $value Value to set for the usedStorageInGB property.
    */
    public function setUsedStorageInGB(?int $value): void {
        $this->getBackingStore()->set('usedStorageInGB', $value);
    }

}

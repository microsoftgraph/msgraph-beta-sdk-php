<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * One user's reported consumption for one completed UTC day.
*/
class CostManagementUserUsageRecord implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CostManagementUserUsageRecord and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CostManagementUserUsageRecord
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CostManagementUserUsageRecord {
        return new CostManagementUserUsageRecord();
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
     * Gets the consumedQuantity property value. Billable consumption attributed to this user for the requested completed UTC day. Read-only.
     * @return float|null
    */
    public function getConsumedQuantity(): ?float {
        $val = $this->getBackingStore()->get('consumedQuantity');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'consumedQuantity'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'consumedQuantity' => fn(ParseNode $n) => $o->setConsumedQuantity($n->getFloatValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'sessionCount' => fn(ParseNode $n) => $o->setSessionCount($n->getIntegerValue()),
            'unit' => fn(ParseNode $n) => $o->setUnit($n->getEnumValue(CostManagementUnit::class)),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
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
     * Gets the sessionCount property value. Count of distinct non-null session identifiers on billable activity for this user during therequested completed UTC day, subject to the source filters and plan processing watermarks.Excludes non-billable activity. Read-only.
     * @return int|null
    */
    public function getSessionCount(): ?int {
        $val = $this->getBackingStore()->get('sessionCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sessionCount'");
    }

    /**
     * Gets the unit property value. Unit in which consumption quantities are expressed. Values are consumption units, not currency.
     * @return CostManagementUnit|null
    */
    public function getUnit(): ?CostManagementUnit {
        $val = $this->getBackingStore()->get('unit');
        if (is_null($val) || $val instanceof CostManagementUnit) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'unit'");
    }

    /**
     * Gets the userId property value. The identifier of the user this row reports. Read-only.
     * @return string|null
    */
    public function getUserId(): ?string {
        $val = $this->getBackingStore()->get('userId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('unit', $this->getUnit());
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
     * Sets the consumedQuantity property value. Billable consumption attributed to this user for the requested completed UTC day. Read-only.
     * @param float|null $value Value to set for the consumedQuantity property.
    */
    public function setConsumedQuantity(?float $value): void {
        $this->getBackingStore()->set('consumedQuantity', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the sessionCount property value. Count of distinct non-null session identifiers on billable activity for this user during therequested completed UTC day, subject to the source filters and plan processing watermarks.Excludes non-billable activity. Read-only.
     * @param int|null $value Value to set for the sessionCount property.
    */
    public function setSessionCount(?int $value): void {
        $this->getBackingStore()->set('sessionCount', $value);
    }

    /**
     * Sets the unit property value. Unit in which consumption quantities are expressed. Values are consumption units, not currency.
     * @param CostManagementUnit|null $value Value to set for the unit property.
    */
    public function setUnit(?CostManagementUnit $value): void {
        $this->getBackingStore()->set('unit', $value);
    }

    /**
     * Sets the userId property value. The identifier of the user this row reports. Read-only.
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

}

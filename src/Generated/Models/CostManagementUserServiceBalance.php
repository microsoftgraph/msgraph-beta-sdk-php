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
 * Per-service balance and enforcement-selection diagnosis for a user.
*/
class CostManagementUserServiceBalance implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CostManagementUserServiceBalance and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CostManagementUserServiceBalance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CostManagementUserServiceBalance {
        return new CostManagementUserServiceBalance();
    }

    /**
     * Gets the accessDecisionReason property value. The reason for a user's access decision for a service.
     * @return AccessDecisionReason|null
    */
    public function getAccessDecisionReason(): ?AccessDecisionReason {
        $val = $this->getBackingStore()->get('accessDecisionReason');
        if (is_null($val) || $val instanceof AccessDecisionReason) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessDecisionReason'");
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
     * Gets the configuredPeriodLimit property value. A unit-bearing quantity that is either limited to a value or unlimited. Every quantity isone of its derived types, identified by @odata.type on create.
     * @return CostManagementQuantity|null
    */
    public function getConfiguredPeriodLimit(): ?CostManagementQuantity {
        $val = $this->getBackingStore()->get('configuredPeriodLimit');
        if (is_null($val) || $val instanceof CostManagementQuantity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'configuredPeriodLimit'");
    }

    /**
     * Gets the configuredPerUserLimit property value. A unit-bearing quantity that is either limited to a value or unlimited. Every quantity isone of its derived types, identified by @odata.type on create.
     * @return CostManagementQuantity|null
    */
    public function getConfiguredPerUserLimit(): ?CostManagementQuantity {
        $val = $this->getBackingStore()->get('configuredPerUserLimit');
        if (is_null($val) || $val instanceof CostManagementQuantity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'configuredPerUserLimit'");
    }

    /**
     * Gets the consumedQuantity property value. Measured consumption for the selected service context, counted from the start of thecurrent period: month-to-date in UTC.
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
     * Gets the dataStatus property value. Last modification time for the source data represented by a result.
     * @return CostManagementDataStatus|null
    */
    public function getDataStatus(): ?CostManagementDataStatus {
        $val = $this->getBackingStore()->get('dataStatus');
        if (is_null($val) || $val instanceof CostManagementDataStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dataStatus'");
    }

    /**
     * Gets the effectiveCapacityQuantity property value. A unit-bearing quantity that is either limited to a value or unlimited. Every quantity isone of its derived types, identified by @odata.type on create.
     * @return CostManagementQuantity|null
    */
    public function getEffectiveCapacityQuantity(): ?CostManagementQuantity {
        $val = $this->getBackingStore()->get('effectiveCapacityQuantity');
        if (is_null($val) || $val instanceof CostManagementQuantity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'effectiveCapacityQuantity'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accessDecisionReason' => fn(ParseNode $n) => $o->setAccessDecisionReason($n->getEnumValue(AccessDecisionReason::class)),
            'configuredPeriodLimit' => fn(ParseNode $n) => $o->setConfiguredPeriodLimit($n->getObjectValue([CostManagementQuantity::class, 'createFromDiscriminatorValue'])),
            'configuredPerUserLimit' => fn(ParseNode $n) => $o->setConfiguredPerUserLimit($n->getObjectValue([CostManagementQuantity::class, 'createFromDiscriminatorValue'])),
            'consumedQuantity' => fn(ParseNode $n) => $o->setConsumedQuantity($n->getFloatValue()),
            'dataStatus' => fn(ParseNode $n) => $o->setDataStatus($n->getObjectValue([CostManagementDataStatus::class, 'createFromDiscriminatorValue'])),
            'effectiveCapacityQuantity' => fn(ParseNode $n) => $o->setEffectiveCapacityQuantity($n->getObjectValue([CostManagementQuantity::class, 'createFromDiscriminatorValue'])),
            'isConsumptionAllowed' => fn(ParseNode $n) => $o->setIsConsumptionAllowed($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'remainingQuantity' => fn(ParseNode $n) => $o->setRemainingQuantity($n->getObjectValue([CostManagementQuantity::class, 'createFromDiscriminatorValue'])),
            'serviceId' => fn(ParseNode $n) => $o->setServiceId($n->getStringValue()),
            'spendingPolicyId' => fn(ParseNode $n) => $o->setSpendingPolicyId($n->getStringValue()),
            'unit' => fn(ParseNode $n) => $o->setUnit($n->getEnumValue(CostManagementUnit::class)),
        ];
    }

    /**
     * Gets the isConsumptionAllowed property value. Whether the user can currently consume the service. False covers both an entitlement gateand an exhausted limit; accessDecisionReason states which one applies.
     * @return bool|null
    */
    public function getIsConsumptionAllowed(): ?bool {
        $val = $this->getBackingStore()->get('isConsumptionAllowed');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isConsumptionAllowed'");
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
     * Gets the remainingQuantity property value. A unit-bearing quantity that is either limited to a value or unlimited. Every quantity isone of its derived types, identified by @odata.type on create.
     * @return CostManagementQuantity|null
    */
    public function getRemainingQuantity(): ?CostManagementQuantity {
        $val = $this->getBackingStore()->get('remainingQuantity');
        if (is_null($val) || $val instanceof CostManagementQuantity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'remainingQuantity'");
    }

    /**
     * Gets the serviceId property value. The service identifier. A user holds at most one balance per service. Read-only.
     * @return string|null
    */
    public function getServiceId(): ?string {
        $val = $this->getBackingStore()->get('serviceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serviceId'");
    }

    /**
     * Gets the spendingPolicyId property value. The identifier of the spending policy selected for this service. Always present: aservice with no selected policy is reported incostManagementUserBalance.unevaluatedServices instead of as a balance row. Read-only.
     * @return string|null
    */
    public function getSpendingPolicyId(): ?string {
        $val = $this->getBackingStore()->get('spendingPolicyId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'spendingPolicyId'");
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('accessDecisionReason', $this->getAccessDecisionReason());
        $writer->writeObjectValue('configuredPeriodLimit', $this->getConfiguredPeriodLimit());
        $writer->writeObjectValue('configuredPerUserLimit', $this->getConfiguredPerUserLimit());
        $writer->writeFloatValue('consumedQuantity', $this->getConsumedQuantity());
        $writer->writeObjectValue('dataStatus', $this->getDataStatus());
        $writer->writeObjectValue('effectiveCapacityQuantity', $this->getEffectiveCapacityQuantity());
        $writer->writeBooleanValue('isConsumptionAllowed', $this->getIsConsumptionAllowed());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('remainingQuantity', $this->getRemainingQuantity());
        $writer->writeEnumValue('unit', $this->getUnit());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the accessDecisionReason property value. The reason for a user's access decision for a service.
     * @param AccessDecisionReason|null $value Value to set for the accessDecisionReason property.
    */
    public function setAccessDecisionReason(?AccessDecisionReason $value): void {
        $this->getBackingStore()->set('accessDecisionReason', $value);
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
     * Sets the configuredPeriodLimit property value. A unit-bearing quantity that is either limited to a value or unlimited. Every quantity isone of its derived types, identified by @odata.type on create.
     * @param CostManagementQuantity|null $value Value to set for the configuredPeriodLimit property.
    */
    public function setConfiguredPeriodLimit(?CostManagementQuantity $value): void {
        $this->getBackingStore()->set('configuredPeriodLimit', $value);
    }

    /**
     * Sets the configuredPerUserLimit property value. A unit-bearing quantity that is either limited to a value or unlimited. Every quantity isone of its derived types, identified by @odata.type on create.
     * @param CostManagementQuantity|null $value Value to set for the configuredPerUserLimit property.
    */
    public function setConfiguredPerUserLimit(?CostManagementQuantity $value): void {
        $this->getBackingStore()->set('configuredPerUserLimit', $value);
    }

    /**
     * Sets the consumedQuantity property value. Measured consumption for the selected service context, counted from the start of thecurrent period: month-to-date in UTC.
     * @param float|null $value Value to set for the consumedQuantity property.
    */
    public function setConsumedQuantity(?float $value): void {
        $this->getBackingStore()->set('consumedQuantity', $value);
    }

    /**
     * Sets the dataStatus property value. Last modification time for the source data represented by a result.
     * @param CostManagementDataStatus|null $value Value to set for the dataStatus property.
    */
    public function setDataStatus(?CostManagementDataStatus $value): void {
        $this->getBackingStore()->set('dataStatus', $value);
    }

    /**
     * Sets the effectiveCapacityQuantity property value. A unit-bearing quantity that is either limited to a value or unlimited. Every quantity isone of its derived types, identified by @odata.type on create.
     * @param CostManagementQuantity|null $value Value to set for the effectiveCapacityQuantity property.
    */
    public function setEffectiveCapacityQuantity(?CostManagementQuantity $value): void {
        $this->getBackingStore()->set('effectiveCapacityQuantity', $value);
    }

    /**
     * Sets the isConsumptionAllowed property value. Whether the user can currently consume the service. False covers both an entitlement gateand an exhausted limit; accessDecisionReason states which one applies.
     * @param bool|null $value Value to set for the isConsumptionAllowed property.
    */
    public function setIsConsumptionAllowed(?bool $value): void {
        $this->getBackingStore()->set('isConsumptionAllowed', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the remainingQuantity property value. A unit-bearing quantity that is either limited to a value or unlimited. Every quantity isone of its derived types, identified by @odata.type on create.
     * @param CostManagementQuantity|null $value Value to set for the remainingQuantity property.
    */
    public function setRemainingQuantity(?CostManagementQuantity $value): void {
        $this->getBackingStore()->set('remainingQuantity', $value);
    }

    /**
     * Sets the serviceId property value. The service identifier. A user holds at most one balance per service. Read-only.
     * @param string|null $value Value to set for the serviceId property.
    */
    public function setServiceId(?string $value): void {
        $this->getBackingStore()->set('serviceId', $value);
    }

    /**
     * Sets the spendingPolicyId property value. The identifier of the spending policy selected for this service. Always present: aservice with no selected policy is reported incostManagementUserBalance.unevaluatedServices instead of as a balance row. Read-only.
     * @param string|null $value Value to set for the spendingPolicyId property.
    */
    public function setSpendingPolicyId(?string $value): void {
        $this->getBackingStore()->set('spendingPolicyId', $value);
    }

    /**
     * Sets the unit property value. Unit in which consumption quantities are expressed. Values are consumption units, not currency.
     * @param CostManagementUnit|null $value Value to set for the unit property.
    */
    public function setUnit(?CostManagementUnit $value): void {
        $this->getBackingStore()->set('unit', $value);
    }

}

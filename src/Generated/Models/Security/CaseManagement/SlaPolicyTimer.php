<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\CaseManagement;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SlaPolicyTimer implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new SlaPolicyTimer and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SlaPolicyTimer
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SlaPolicyTimer {
        return new SlaPolicyTimer();
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
     * Gets the breachThresholdInMinutes property value. The elapsed time in minutes after which the timer is considered breached. Required when supplying a timer.
     * @return int|null
    */
    public function getBreachThresholdInMinutes(): ?int {
        $val = $this->getBackingStore()->get('breachThresholdInMinutes');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'breachThresholdInMinutes'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'breachThresholdInMinutes' => fn(ParseNode $n) => $o->setBreachThresholdInMinutes($n->getIntegerValue()),
            'filters' => fn(ParseNode $n) => $o->setFilters($n->getObjectValue([SlaPolicyCriteriaBlock::class, 'createFromDiscriminatorValue'])),
            'isDefault' => fn(ParseNode $n) => $o->setIsDefault($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'order' => fn(ParseNode $n) => $o->setOrder($n->getIntegerValue()),
            'policyTimerId' => fn(ParseNode $n) => $o->setPolicyTimerId($n->getStringValue()),
            'warningThresholdInMinutes' => fn(ParseNode $n) => $o->setWarningThresholdInMinutes($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the filters property value. The condition that a case must match for this timer to apply. Required when isDefault is false. Omit this property for the default timer.
     * @return SlaPolicyCriteriaBlock|null
    */
    public function getFilters(): ?SlaPolicyCriteriaBlock {
        $val = $this->getBackingStore()->get('filters');
        if (is_null($val) || $val instanceof SlaPolicyCriteriaBlock) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'filters'");
    }

    /**
     * Gets the isDefault property value. Whether this timer is the fallback when no other timer's filters match. Required when supplying a timer. Exactly one timer per policy must have a value of true.
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
     * Gets the order property value. The evaluation order among the policy's timers, lowest first. Required when supplying a timer.
     * @return int|null
    */
    public function getOrder(): ?int {
        $val = $this->getBackingStore()->get('order');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'order'");
    }

    /**
     * Gets the policyTimerId property value. The server-generated identifier for the timer. Computed on creation and immutable thereafter. Read-only. Omit this property from request bodies.
     * @return string|null
    */
    public function getPolicyTimerId(): ?string {
        $val = $this->getBackingStore()->get('policyTimerId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyTimerId'");
    }

    /**
     * Gets the warningThresholdInMinutes property value. The elapsed time in minutes after which an early warning is raised.
     * @return int|null
    */
    public function getWarningThresholdInMinutes(): ?int {
        $val = $this->getBackingStore()->get('warningThresholdInMinutes');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'warningThresholdInMinutes'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('breachThresholdInMinutes', $this->getBreachThresholdInMinutes());
        $writer->writeObjectValue('filters', $this->getFilters());
        $writer->writeBooleanValue('isDefault', $this->getIsDefault());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('order', $this->getOrder());
        $writer->writeIntegerValue('warningThresholdInMinutes', $this->getWarningThresholdInMinutes());
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
     * Sets the breachThresholdInMinutes property value. The elapsed time in minutes after which the timer is considered breached. Required when supplying a timer.
     * @param int|null $value Value to set for the breachThresholdInMinutes property.
    */
    public function setBreachThresholdInMinutes(?int $value): void {
        $this->getBackingStore()->set('breachThresholdInMinutes', $value);
    }

    /**
     * Sets the filters property value. The condition that a case must match for this timer to apply. Required when isDefault is false. Omit this property for the default timer.
     * @param SlaPolicyCriteriaBlock|null $value Value to set for the filters property.
    */
    public function setFilters(?SlaPolicyCriteriaBlock $value): void {
        $this->getBackingStore()->set('filters', $value);
    }

    /**
     * Sets the isDefault property value. Whether this timer is the fallback when no other timer's filters match. Required when supplying a timer. Exactly one timer per policy must have a value of true.
     * @param bool|null $value Value to set for the isDefault property.
    */
    public function setIsDefault(?bool $value): void {
        $this->getBackingStore()->set('isDefault', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the order property value. The evaluation order among the policy's timers, lowest first. Required when supplying a timer.
     * @param int|null $value Value to set for the order property.
    */
    public function setOrder(?int $value): void {
        $this->getBackingStore()->set('order', $value);
    }

    /**
     * Sets the policyTimerId property value. The server-generated identifier for the timer. Computed on creation and immutable thereafter. Read-only. Omit this property from request bodies.
     * @param string|null $value Value to set for the policyTimerId property.
    */
    public function setPolicyTimerId(?string $value): void {
        $this->getBackingStore()->set('policyTimerId', $value);
    }

    /**
     * Sets the warningThresholdInMinutes property value. The elapsed time in minutes after which an early warning is raised.
     * @param int|null $value Value to set for the warningThresholdInMinutes property.
    */
    public function setWarningThresholdInMinutes(?int $value): void {
        $this->getBackingStore()->set('warningThresholdInMinutes', $value);
    }

}

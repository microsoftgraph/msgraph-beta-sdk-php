<?php

namespace Microsoft\Graph\Beta\Generated\Models\DeviceManagement;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class RuleThreshold implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ruleThreshold and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RuleThreshold
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RuleThreshold {
        return new RuleThreshold();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the aggregation property value. Indicates the built-in aggregation methods. The possible values are: count, percentage, affectedCloudPcCount, affectedCloudPcPercentage, unknownFutureValue.
     * @return AggregationType|null
    */
    public function getAggregation(): ?AggregationType {
        $val = $this->getBackingStore()->get('aggregation');
        if (is_null($val) || $val instanceof AggregationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'aggregation'");
    }

    /**
     * Gets the backingStore property value. Stores model information.
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
            'aggregation' => fn(ParseNode $n) => $o->setAggregation($n->getEnumValue(AggregationType::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'operator' => fn(ParseNode $n) => $o->setOperator($n->getEnumValue(OperatorType::class)),
            'target' => fn(ParseNode $n) => $o->setTarget($n->getIntegerValue()),
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
     * Gets the operator property value. Indicates the built-in operator. The possible values are: greaterOrEqual, equal, greater, less, lessOrEqual, notEqual, unknownFutureValue.
     * @return OperatorType|null
    */
    public function getOperator(): ?OperatorType {
        $val = $this->getBackingStore()->get('operator');
        if (is_null($val) || $val instanceof OperatorType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operator'");
    }

    /**
     * Gets the target property value. The target threshold value.
     * @return int|null
    */
    public function getTarget(): ?int {
        $val = $this->getBackingStore()->get('target');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'target'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('aggregation', $this->getAggregation());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('operator', $this->getOperator());
        $writer->writeIntegerValue('target', $this->getTarget());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the additionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the aggregation property value. Indicates the built-in aggregation methods. The possible values are: count, percentage, affectedCloudPcCount, affectedCloudPcPercentage, unknownFutureValue.
     * @param AggregationType|null $value Value to set for the aggregation property.
    */
    public function setAggregation(?AggregationType $value): void {
        $this->getBackingStore()->set('aggregation', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
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
     * Sets the operator property value. Indicates the built-in operator. The possible values are: greaterOrEqual, equal, greater, less, lessOrEqual, notEqual, unknownFutureValue.
     * @param OperatorType|null $value Value to set for the operator property.
    */
    public function setOperator(?OperatorType $value): void {
        $this->getBackingStore()->set('operator', $value);
    }

    /**
     * Sets the target property value. The target threshold value.
     * @param int|null $value Value to set for the target property.
    */
    public function setTarget(?int $value): void {
        $this->getBackingStore()->set('target', $value);
    }

}

<?php

namespace Microsoft\Graph\Beta\Generated\Models\DeviceManagement;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class RuleCondition implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ruleCondition and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RuleCondition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RuleCondition {
        return new RuleCondition();
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
     * Gets the aggregation property value. The built-in aggregation method for the rule condition. The possible values are: count, percentage, affectedCloudPcCount, affectedCloudPcPercentage, unknownFutureValue.
     * @return RuleCondition_aggregation|null
    */
    public function getAggregation(): ?RuleCondition_aggregation {
        $val = $this->getBackingStore()->get('aggregation');
        if (is_null($val) || $val instanceof RuleCondition_aggregation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'aggregation'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the conditionCategory property value. The property that the rule condition monitors. Possible values are:  provisionFailures, imageUploadFailures, azureNetworkConnectionCheckFailures, cloudPcInGracePeriod, frontlineInsufficientLicenses, cloudPcConnectionErrors, cloudPcHostHealthCheckFailures, cloudPcZoneOutage, unknownFutureValue.
     * @return RuleCondition_conditionCategory|null
    */
    public function getConditionCategory(): ?RuleCondition_conditionCategory {
        $val = $this->getBackingStore()->get('conditionCategory');
        if (is_null($val) || $val instanceof RuleCondition_conditionCategory) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'conditionCategory'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'aggregation' => fn(ParseNode $n) => $o->setAggregation($n->getEnumValue(RuleCondition_aggregation::class)),
            'conditionCategory' => fn(ParseNode $n) => $o->setConditionCategory($n->getEnumValue(RuleCondition_conditionCategory::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'operator' => fn(ParseNode $n) => $o->setOperator($n->getEnumValue(RuleCondition_operator::class)),
            'relationshipType' => fn(ParseNode $n) => $o->setRelationshipType($n->getEnumValue(RuleCondition_relationshipType::class)),
            'thresholdValue' => fn(ParseNode $n) => $o->setThresholdValue($n->getStringValue()),
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
     * Gets the operator property value. The built-in operator for the rule condition. The possible values are: greaterOrEqual, equal, greater, less, lessOrEqual, notEqual, unknownFutureValue.
     * @return RuleCondition_operator|null
    */
    public function getOperator(): ?RuleCondition_operator {
        $val = $this->getBackingStore()->get('operator');
        if (is_null($val) || $val instanceof RuleCondition_operator) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operator'");
    }

    /**
     * Gets the relationshipType property value. The relationship type.  Possible values are: and, or.
     * @return RuleCondition_relationshipType|null
    */
    public function getRelationshipType(): ?RuleCondition_relationshipType {
        $val = $this->getBackingStore()->get('relationshipType');
        if (is_null($val) || $val instanceof RuleCondition_relationshipType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'relationshipType'");
    }

    /**
     * Gets the thresholdValue property value. The threshold value of the alert condition. The threshold value can be a number in string form or string like 'WestUS'.
     * @return string|null
    */
    public function getThresholdValue(): ?string {
        $val = $this->getBackingStore()->get('thresholdValue');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'thresholdValue'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('aggregation', $this->getAggregation());
        $writer->writeEnumValue('conditionCategory', $this->getConditionCategory());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('operator', $this->getOperator());
        $writer->writeEnumValue('relationshipType', $this->getRelationshipType());
        $writer->writeStringValue('thresholdValue', $this->getThresholdValue());
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
     * Sets the aggregation property value. The built-in aggregation method for the rule condition. The possible values are: count, percentage, affectedCloudPcCount, affectedCloudPcPercentage, unknownFutureValue.
     * @param RuleCondition_aggregation|null $value Value to set for the aggregation property.
    */
    public function setAggregation(?RuleCondition_aggregation $value): void {
        $this->getBackingStore()->set('aggregation', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the conditionCategory property value. The property that the rule condition monitors. Possible values are:  provisionFailures, imageUploadFailures, azureNetworkConnectionCheckFailures, cloudPcInGracePeriod, frontlineInsufficientLicenses, cloudPcConnectionErrors, cloudPcHostHealthCheckFailures, cloudPcZoneOutage, unknownFutureValue.
     * @param RuleCondition_conditionCategory|null $value Value to set for the conditionCategory property.
    */
    public function setConditionCategory(?RuleCondition_conditionCategory $value): void {
        $this->getBackingStore()->set('conditionCategory', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the operator property value. The built-in operator for the rule condition. The possible values are: greaterOrEqual, equal, greater, less, lessOrEqual, notEqual, unknownFutureValue.
     * @param RuleCondition_operator|null $value Value to set for the operator property.
    */
    public function setOperator(?RuleCondition_operator $value): void {
        $this->getBackingStore()->set('operator', $value);
    }

    /**
     * Sets the relationshipType property value. The relationship type.  Possible values are: and, or.
     * @param RuleCondition_relationshipType|null $value Value to set for the relationshipType property.
    */
    public function setRelationshipType(?RuleCondition_relationshipType $value): void {
        $this->getBackingStore()->set('relationshipType', $value);
    }

    /**
     * Sets the thresholdValue property value. The threshold value of the alert condition. The threshold value can be a number in string form or string like 'WestUS'.
     * @param string|null $value Value to set for the thresholdValue property.
    */
    public function setThresholdValue(?string $value): void {
        $this->getBackingStore()->set('thresholdValue', $value);
    }

}

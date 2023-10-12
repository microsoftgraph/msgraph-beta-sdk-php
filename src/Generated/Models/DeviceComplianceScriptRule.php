<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class DeviceComplianceScriptRule implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new deviceComplianceScriptRule and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceComplianceScriptRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceComplianceScriptRule {
        return new DeviceComplianceScriptRule();
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
     * Gets the dataType property value. Data types for rules.
     * @return DataType|null
    */
    public function getDataType(): ?DataType {
        $val = $this->getBackingStore()->get('dataType');
        if (is_null($val) || $val instanceof DataType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dataType'");
    }

    /**
     * Gets the deviceComplianceScriptRuleDataType property value. Data types for rules.
     * @return DeviceComplianceScriptRuleDataType|null
    */
    public function getDeviceComplianceScriptRuleDataType(): ?DeviceComplianceScriptRuleDataType {
        $val = $this->getBackingStore()->get('deviceComplianceScriptRuleDataType');
        if (is_null($val) || $val instanceof DeviceComplianceScriptRuleDataType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceComplianceScriptRuleDataType'");
    }

    /**
     * Gets the deviceComplianceScriptRulOperator property value. Operator for rules.
     * @return DeviceComplianceScriptRulOperator|null
    */
    public function getDeviceComplianceScriptRulOperator(): ?DeviceComplianceScriptRulOperator {
        $val = $this->getBackingStore()->get('deviceComplianceScriptRulOperator');
        if (is_null($val) || $val instanceof DeviceComplianceScriptRulOperator) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceComplianceScriptRulOperator'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dataType' => fn(ParseNode $n) => $o->setDataType($n->getEnumValue(DataType::class)),
            'deviceComplianceScriptRuleDataType' => fn(ParseNode $n) => $o->setDeviceComplianceScriptRuleDataType($n->getEnumValue(DeviceComplianceScriptRuleDataType::class)),
            'deviceComplianceScriptRulOperator' => fn(ParseNode $n) => $o->setDeviceComplianceScriptRulOperator($n->getEnumValue(DeviceComplianceScriptRulOperator::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'operand' => fn(ParseNode $n) => $o->setOperand($n->getStringValue()),
            'operator' => fn(ParseNode $n) => $o->setOperator($n->getEnumValue(Operator::class)),
            'settingName' => fn(ParseNode $n) => $o->setSettingName($n->getStringValue()),
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
     * Gets the operand property value. Operand specified in the rule.
     * @return string|null
    */
    public function getOperand(): ?string {
        $val = $this->getBackingStore()->get('operand');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operand'");
    }

    /**
     * Gets the operator property value. Operator for rules.
     * @return Operator|null
    */
    public function getOperator(): ?Operator {
        $val = $this->getBackingStore()->get('operator');
        if (is_null($val) || $val instanceof Operator) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operator'");
    }

    /**
     * Gets the settingName property value. Setting name specified in the rule.
     * @return string|null
    */
    public function getSettingName(): ?string {
        $val = $this->getBackingStore()->get('settingName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('dataType', $this->getDataType());
        $writer->writeEnumValue('deviceComplianceScriptRuleDataType', $this->getDeviceComplianceScriptRuleDataType());
        $writer->writeEnumValue('deviceComplianceScriptRulOperator', $this->getDeviceComplianceScriptRulOperator());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('operand', $this->getOperand());
        $writer->writeEnumValue('operator', $this->getOperator());
        $writer->writeStringValue('settingName', $this->getSettingName());
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
     * Sets the dataType property value. Data types for rules.
     * @param DataType|null $value Value to set for the dataType property.
    */
    public function setDataType(?DataType $value): void {
        $this->getBackingStore()->set('dataType', $value);
    }

    /**
     * Sets the deviceComplianceScriptRuleDataType property value. Data types for rules.
     * @param DeviceComplianceScriptRuleDataType|null $value Value to set for the deviceComplianceScriptRuleDataType property.
    */
    public function setDeviceComplianceScriptRuleDataType(?DeviceComplianceScriptRuleDataType $value): void {
        $this->getBackingStore()->set('deviceComplianceScriptRuleDataType', $value);
    }

    /**
     * Sets the deviceComplianceScriptRulOperator property value. Operator for rules.
     * @param DeviceComplianceScriptRulOperator|null $value Value to set for the deviceComplianceScriptRulOperator property.
    */
    public function setDeviceComplianceScriptRulOperator(?DeviceComplianceScriptRulOperator $value): void {
        $this->getBackingStore()->set('deviceComplianceScriptRulOperator', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the operand property value. Operand specified in the rule.
     * @param string|null $value Value to set for the operand property.
    */
    public function setOperand(?string $value): void {
        $this->getBackingStore()->set('operand', $value);
    }

    /**
     * Sets the operator property value. Operator for rules.
     * @param Operator|null $value Value to set for the operator property.
    */
    public function setOperator(?Operator $value): void {
        $this->getBackingStore()->set('operator', $value);
    }

    /**
     * Sets the settingName property value. Setting name specified in the rule.
     * @param string|null $value Value to set for the settingName property.
    */
    public function setSettingName(?string $value): void {
        $this->getBackingStore()->set('settingName', $value);
    }

}

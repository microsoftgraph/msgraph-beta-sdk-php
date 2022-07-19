<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceComplianceScriptRule implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DataType|null $dataType Data types for rules.
    */
    private ?DataType $dataType = null;
    
    /**
     * @var DeviceComplianceScriptRuleDataType|null $deviceComplianceScriptRuleDataType Data types for rules.
    */
    private ?DeviceComplianceScriptRuleDataType $deviceComplianceScriptRuleDataType = null;
    
    /**
     * @var DeviceComplianceScriptRulOperator|null $deviceComplianceScriptRulOperator Operator for rules.
    */
    private ?DeviceComplianceScriptRulOperator $deviceComplianceScriptRulOperator = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $operand Operand specified in the rule.
    */
    private ?string $operand = null;
    
    /**
     * @var Operator|null $operator Operator for rules.
    */
    private ?Operator $operator = null;
    
    /**
     * @var string|null $settingName Setting name specified in the rule.
    */
    private ?string $settingName = null;
    
    /**
     * Instantiates a new deviceComplianceScriptRule and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.deviceComplianceScriptRule');
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the dataType property value. Data types for rules.
     * @return DataType|null
    */
    public function getDataType(): ?DataType {
        return $this->dataType;
    }

    /**
     * Gets the deviceComplianceScriptRuleDataType property value. Data types for rules.
     * @return DeviceComplianceScriptRuleDataType|null
    */
    public function getDeviceComplianceScriptRuleDataType(): ?DeviceComplianceScriptRuleDataType {
        return $this->deviceComplianceScriptRuleDataType;
    }

    /**
     * Gets the deviceComplianceScriptRulOperator property value. Operator for rules.
     * @return DeviceComplianceScriptRulOperator|null
    */
    public function getDeviceComplianceScriptRulOperator(): ?DeviceComplianceScriptRulOperator {
        return $this->deviceComplianceScriptRulOperator;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dataType' => function (ParseNode $n) use ($o) { $o->setDataType($n->getEnumValue(DataType::class)); },
            'deviceComplianceScriptRuleDataType' => function (ParseNode $n) use ($o) { $o->setDeviceComplianceScriptRuleDataType($n->getEnumValue(DeviceComplianceScriptRuleDataType::class)); },
            'deviceComplianceScriptRulOperator' => function (ParseNode $n) use ($o) { $o->setDeviceComplianceScriptRulOperator($n->getEnumValue(DeviceComplianceScriptRulOperator::class)); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'operand' => function (ParseNode $n) use ($o) { $o->setOperand($n->getStringValue()); },
            'operator' => function (ParseNode $n) use ($o) { $o->setOperator($n->getEnumValue(Operator::class)); },
            'settingName' => function (ParseNode $n) use ($o) { $o->setSettingName($n->getStringValue()); },
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the operand property value. Operand specified in the rule.
     * @return string|null
    */
    public function getOperand(): ?string {
        return $this->operand;
    }

    /**
     * Gets the operator property value. Operator for rules.
     * @return Operator|null
    */
    public function getOperator(): ?Operator {
        return $this->operator;
    }

    /**
     * Gets the settingName property value. Setting name specified in the rule.
     * @return string|null
    */
    public function getSettingName(): ?string {
        return $this->settingName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('dataType', $this->dataType);
        $writer->writeEnumValue('deviceComplianceScriptRuleDataType', $this->deviceComplianceScriptRuleDataType);
        $writer->writeEnumValue('deviceComplianceScriptRulOperator', $this->deviceComplianceScriptRulOperator);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('operand', $this->operand);
        $writer->writeEnumValue('operator', $this->operator);
        $writer->writeStringValue('settingName', $this->settingName);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the dataType property value. Data types for rules.
     *  @param DataType|null $value Value to set for the dataType property.
    */
    public function setDataType(?DataType $value ): void {
        $this->dataType = $value;
    }

    /**
     * Sets the deviceComplianceScriptRuleDataType property value. Data types for rules.
     *  @param DeviceComplianceScriptRuleDataType|null $value Value to set for the deviceComplianceScriptRuleDataType property.
    */
    public function setDeviceComplianceScriptRuleDataType(?DeviceComplianceScriptRuleDataType $value ): void {
        $this->deviceComplianceScriptRuleDataType = $value;
    }

    /**
     * Sets the deviceComplianceScriptRulOperator property value. Operator for rules.
     *  @param DeviceComplianceScriptRulOperator|null $value Value to set for the deviceComplianceScriptRulOperator property.
    */
    public function setDeviceComplianceScriptRulOperator(?DeviceComplianceScriptRulOperator $value ): void {
        $this->deviceComplianceScriptRulOperator = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the operand property value. Operand specified in the rule.
     *  @param string|null $value Value to set for the operand property.
    */
    public function setOperand(?string $value ): void {
        $this->operand = $value;
    }

    /**
     * Sets the operator property value. Operator for rules.
     *  @param Operator|null $value Value to set for the operator property.
    */
    public function setOperator(?Operator $value ): void {
        $this->operator = $value;
    }

    /**
     * Sets the settingName property value. Setting name specified in the rule.
     *  @param string|null $value Value to set for the settingName property.
    */
    public function setSettingName(?string $value ): void {
        $this->settingName = $value;
    }

}

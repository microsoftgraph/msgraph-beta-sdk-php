<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GroupPolicyPresentationLongDecimalTextBox extends GroupPolicyPresentation implements Parsable 
{
    /**
     * @var int|null $defaultValue An unsigned integer that specifies the initial value for the decimal text box. The default value is 1.
    */
    private ?int $defaultValue = null;
    
    /**
     * @var int|null $maxValue An unsigned long that specifies the maximum allowed value. The default value is 9999.
    */
    private ?int $maxValue = null;
    
    /**
     * @var int|null $minValue An unsigned long that specifies the minimum allowed value. The default value is 0.
    */
    private ?int $minValue = null;
    
    /**
     * @var bool|null $required Requirement to enter a value in the parameter box. The default value is false.
    */
    private ?bool $required = null;
    
    /**
     * @var bool|null $spin If true, create a spin control; otherwise, create a text box for numeric entry. The default value is true.
    */
    private ?bool $spin = null;
    
    /**
     * @var int|null $spinStep An unsigned integer that specifies the increment of change for the spin control. The default value is 1.
    */
    private ?int $spinStep = null;
    
    /**
     * Instantiates a new GroupPolicyPresentationLongDecimalTextBox and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.groupPolicyPresentationLongDecimalTextBox');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GroupPolicyPresentationLongDecimalTextBox
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GroupPolicyPresentationLongDecimalTextBox {
        return new GroupPolicyPresentationLongDecimalTextBox();
    }

    /**
     * Gets the defaultValue property value. An unsigned integer that specifies the initial value for the decimal text box. The default value is 1.
     * @return int|null
    */
    public function getDefaultValue(): ?int {
        return $this->defaultValue;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'defaultValue' => function (ParseNode $n) use ($o) { $o->setDefaultValue($n->getIntegerValue()); },
            'maxValue' => function (ParseNode $n) use ($o) { $o->setMaxValue($n->getIntegerValue()); },
            'minValue' => function (ParseNode $n) use ($o) { $o->setMinValue($n->getIntegerValue()); },
            'required' => function (ParseNode $n) use ($o) { $o->setRequired($n->getBooleanValue()); },
            'spin' => function (ParseNode $n) use ($o) { $o->setSpin($n->getBooleanValue()); },
            'spinStep' => function (ParseNode $n) use ($o) { $o->setSpinStep($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the maxValue property value. An unsigned long that specifies the maximum allowed value. The default value is 9999.
     * @return int|null
    */
    public function getMaxValue(): ?int {
        return $this->maxValue;
    }

    /**
     * Gets the minValue property value. An unsigned long that specifies the minimum allowed value. The default value is 0.
     * @return int|null
    */
    public function getMinValue(): ?int {
        return $this->minValue;
    }

    /**
     * Gets the required property value. Requirement to enter a value in the parameter box. The default value is false.
     * @return bool|null
    */
    public function getRequired(): ?bool {
        return $this->required;
    }

    /**
     * Gets the spin property value. If true, create a spin control; otherwise, create a text box for numeric entry. The default value is true.
     * @return bool|null
    */
    public function getSpin(): ?bool {
        return $this->spin;
    }

    /**
     * Gets the spinStep property value. An unsigned integer that specifies the increment of change for the spin control. The default value is 1.
     * @return int|null
    */
    public function getSpinStep(): ?int {
        return $this->spinStep;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('defaultValue', $this->defaultValue);
        $writer->writeIntegerValue('maxValue', $this->maxValue);
        $writer->writeIntegerValue('minValue', $this->minValue);
        $writer->writeBooleanValue('required', $this->required);
        $writer->writeBooleanValue('spin', $this->spin);
        $writer->writeIntegerValue('spinStep', $this->spinStep);
    }

    /**
     * Sets the defaultValue property value. An unsigned integer that specifies the initial value for the decimal text box. The default value is 1.
     *  @param int|null $value Value to set for the defaultValue property.
    */
    public function setDefaultValue(?int $value ): void {
        $this->defaultValue = $value;
    }

    /**
     * Sets the maxValue property value. An unsigned long that specifies the maximum allowed value. The default value is 9999.
     *  @param int|null $value Value to set for the maxValue property.
    */
    public function setMaxValue(?int $value ): void {
        $this->maxValue = $value;
    }

    /**
     * Sets the minValue property value. An unsigned long that specifies the minimum allowed value. The default value is 0.
     *  @param int|null $value Value to set for the minValue property.
    */
    public function setMinValue(?int $value ): void {
        $this->minValue = $value;
    }

    /**
     * Sets the required property value. Requirement to enter a value in the parameter box. The default value is false.
     *  @param bool|null $value Value to set for the required property.
    */
    public function setRequired(?bool $value ): void {
        $this->required = $value;
    }

    /**
     * Sets the spin property value. If true, create a spin control; otherwise, create a text box for numeric entry. The default value is true.
     *  @param bool|null $value Value to set for the spin property.
    */
    public function setSpin(?bool $value ): void {
        $this->spin = $value;
    }

    /**
     * Sets the spinStep property value. An unsigned integer that specifies the increment of change for the spin control. The default value is 1.
     *  @param int|null $value Value to set for the spinStep property.
    */
    public function setSpinStep(?int $value ): void {
        $this->spinStep = $value;
    }

}

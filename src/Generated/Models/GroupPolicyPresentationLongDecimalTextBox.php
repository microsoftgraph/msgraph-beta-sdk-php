<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Represents an ADMX longDecimalTextBox element and an ADMX longDecimal element.
*/
class GroupPolicyPresentationLongDecimalTextBox extends GroupPolicyUploadedPresentation implements Parsable 
{
    /**
     * Instantiates a new groupPolicyPresentationLongDecimalTextBox and sets the default values.
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
        $val = $this->getBackingStore()->get('defaultValue');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defaultValue'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'defaultValue' => fn(ParseNode $n) => $o->setDefaultValue($n->getIntegerValue()),
            'maxValue' => fn(ParseNode $n) => $o->setMaxValue($n->getIntegerValue()),
            'minValue' => fn(ParseNode $n) => $o->setMinValue($n->getIntegerValue()),
            'required' => fn(ParseNode $n) => $o->setRequired($n->getBooleanValue()),
            'spin' => fn(ParseNode $n) => $o->setSpin($n->getBooleanValue()),
            'spinStep' => fn(ParseNode $n) => $o->setSpinStep($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the maxValue property value. An unsigned long that specifies the maximum allowed value. The default value is 9999.
     * @return int|null
    */
    public function getMaxValue(): ?int {
        $val = $this->getBackingStore()->get('maxValue');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maxValue'");
    }

    /**
     * Gets the minValue property value. An unsigned long that specifies the minimum allowed value. The default value is 0.
     * @return int|null
    */
    public function getMinValue(): ?int {
        $val = $this->getBackingStore()->get('minValue');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minValue'");
    }

    /**
     * Gets the required property value. Requirement to enter a value in the parameter box. The default value is false.
     * @return bool|null
    */
    public function getRequired(): ?bool {
        $val = $this->getBackingStore()->get('required');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'required'");
    }

    /**
     * Gets the spin property value. If true, create a spin control; otherwise, create a text box for numeric entry. The default value is true.
     * @return bool|null
    */
    public function getSpin(): ?bool {
        $val = $this->getBackingStore()->get('spin');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'spin'");
    }

    /**
     * Gets the spinStep property value. An unsigned integer that specifies the increment of change for the spin control. The default value is 1.
     * @return int|null
    */
    public function getSpinStep(): ?int {
        $val = $this->getBackingStore()->get('spinStep');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'spinStep'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('defaultValue', $this->getDefaultValue());
        $writer->writeIntegerValue('maxValue', $this->getMaxValue());
        $writer->writeIntegerValue('minValue', $this->getMinValue());
        $writer->writeBooleanValue('required', $this->getRequired());
        $writer->writeBooleanValue('spin', $this->getSpin());
        $writer->writeIntegerValue('spinStep', $this->getSpinStep());
    }

    /**
     * Sets the defaultValue property value. An unsigned integer that specifies the initial value for the decimal text box. The default value is 1.
     * @param int|null $value Value to set for the defaultValue property.
    */
    public function setDefaultValue(?int $value): void {
        $this->getBackingStore()->set('defaultValue', $value);
    }

    /**
     * Sets the maxValue property value. An unsigned long that specifies the maximum allowed value. The default value is 9999.
     * @param int|null $value Value to set for the maxValue property.
    */
    public function setMaxValue(?int $value): void {
        $this->getBackingStore()->set('maxValue', $value);
    }

    /**
     * Sets the minValue property value. An unsigned long that specifies the minimum allowed value. The default value is 0.
     * @param int|null $value Value to set for the minValue property.
    */
    public function setMinValue(?int $value): void {
        $this->getBackingStore()->set('minValue', $value);
    }

    /**
     * Sets the required property value. Requirement to enter a value in the parameter box. The default value is false.
     * @param bool|null $value Value to set for the required property.
    */
    public function setRequired(?bool $value): void {
        $this->getBackingStore()->set('required', $value);
    }

    /**
     * Sets the spin property value. If true, create a spin control; otherwise, create a text box for numeric entry. The default value is true.
     * @param bool|null $value Value to set for the spin property.
    */
    public function setSpin(?bool $value): void {
        $this->getBackingStore()->set('spin', $value);
    }

    /**
     * Sets the spinStep property value. An unsigned integer that specifies the increment of change for the spin control. The default value is 1.
     * @param int|null $value Value to set for the spinStep property.
    */
    public function setSpinStep(?int $value): void {
        $this->getBackingStore()->set('spinStep', $value);
    }

}

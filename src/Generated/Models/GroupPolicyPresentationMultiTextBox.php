<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GroupPolicyPresentationMultiTextBox extends GroupPolicyUploadedPresentation implements Parsable 
{
    /**
     * Instantiates a new GroupPolicyPresentationMultiTextBox and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.groupPolicyPresentationMultiTextBox');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GroupPolicyPresentationMultiTextBox
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GroupPolicyPresentationMultiTextBox {
        return new GroupPolicyPresentationMultiTextBox();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'maxLength' => fn(ParseNode $n) => $o->setMaxLength($n->getIntegerValue()),
            'maxStrings' => fn(ParseNode $n) => $o->setMaxStrings($n->getIntegerValue()),
            'required' => fn(ParseNode $n) => $o->setRequired($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the maxLength property value. An unsigned integer that specifies the maximum number of text characters. Default value is 1023.
     * @return int|null
    */
    public function getMaxLength(): ?int {
        return $this->getBackingStore()->get('maxLength');
    }

    /**
     * Gets the maxStrings property value. An unsigned integer that specifies the maximum number of strings. Default value is 0.
     * @return int|null
    */
    public function getMaxStrings(): ?int {
        return $this->getBackingStore()->get('maxStrings');
    }

    /**
     * Gets the required property value. Requirement to enter a value in the text box. Default value is false.
     * @return bool|null
    */
    public function getRequired(): ?bool {
        return $this->getBackingStore()->get('required');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('maxLength', $this->getMaxLength());
        $writer->writeIntegerValue('maxStrings', $this->getMaxStrings());
        $writer->writeBooleanValue('required', $this->getRequired());
    }

    /**
     * Sets the maxLength property value. An unsigned integer that specifies the maximum number of text characters. Default value is 1023.
     *  @param int|null $value Value to set for the maxLength property.
    */
    public function setMaxLength(?int $value): void {
        $this->getBackingStore()->set('maxLength', $value);
    }

    /**
     * Sets the maxStrings property value. An unsigned integer that specifies the maximum number of strings. Default value is 0.
     *  @param int|null $value Value to set for the maxStrings property.
    */
    public function setMaxStrings(?int $value): void {
        $this->getBackingStore()->set('maxStrings', $value);
    }

    /**
     * Sets the required property value. Requirement to enter a value in the text box. Default value is false.
     *  @param bool|null $value Value to set for the required property.
    */
    public function setRequired(?bool $value): void {
        $this->getBackingStore()->set('required', $value);
    }

}

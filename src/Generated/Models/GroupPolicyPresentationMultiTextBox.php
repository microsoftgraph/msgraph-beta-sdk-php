<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GroupPolicyPresentationMultiTextBox extends GroupPolicyPresentation implements Parsable 
{
    /**
     * @var int|null $maxLength An unsigned integer that specifies the maximum number of text characters. Default value is 1023.
    */
    private ?int $maxLength = null;
    
    /**
     * @var int|null $maxStrings An unsigned integer that specifies the maximum number of strings. Default value is 0.
    */
    private ?int $maxStrings = null;
    
    /**
     * @var bool|null $required Requirement to enter a value in the text box. Default value is false.
    */
    private ?bool $required = null;
    
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
            'maxLength' => function (ParseNode $n) use ($o) { $o->setMaxLength($n->getIntegerValue()); },
            'maxStrings' => function (ParseNode $n) use ($o) { $o->setMaxStrings($n->getIntegerValue()); },
            'required' => function (ParseNode $n) use ($o) { $o->setRequired($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the maxLength property value. An unsigned integer that specifies the maximum number of text characters. Default value is 1023.
     * @return int|null
    */
    public function getMaxLength(): ?int {
        return $this->maxLength;
    }

    /**
     * Gets the maxStrings property value. An unsigned integer that specifies the maximum number of strings. Default value is 0.
     * @return int|null
    */
    public function getMaxStrings(): ?int {
        return $this->maxStrings;
    }

    /**
     * Gets the required property value. Requirement to enter a value in the text box. Default value is false.
     * @return bool|null
    */
    public function getRequired(): ?bool {
        return $this->required;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('maxLength', $this->maxLength);
        $writer->writeIntegerValue('maxStrings', $this->maxStrings);
        $writer->writeBooleanValue('required', $this->required);
    }

    /**
     * Sets the maxLength property value. An unsigned integer that specifies the maximum number of text characters. Default value is 1023.
     *  @param int|null $value Value to set for the maxLength property.
    */
    public function setMaxLength(?int $value ): void {
        $this->maxLength = $value;
    }

    /**
     * Sets the maxStrings property value. An unsigned integer that specifies the maximum number of strings. Default value is 0.
     *  @param int|null $value Value to set for the maxStrings property.
    */
    public function setMaxStrings(?int $value ): void {
        $this->maxStrings = $value;
    }

    /**
     * Sets the required property value. Requirement to enter a value in the text box. Default value is false.
     *  @param bool|null $value Value to set for the required property.
    */
    public function setRequired(?bool $value ): void {
        $this->required = $value;
    }

}

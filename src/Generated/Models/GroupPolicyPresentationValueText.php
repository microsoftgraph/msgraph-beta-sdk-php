<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GroupPolicyPresentationValueText extends GroupPolicyPresentationValue implements Parsable 
{
    /**
     * @var string|null $value A string value for the associated presentation.
    */
    private ?string $value = null;
    
    /**
     * Instantiates a new GroupPolicyPresentationValueText and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.groupPolicyPresentationValueText');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GroupPolicyPresentationValueText
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GroupPolicyPresentationValueText {
        return new GroupPolicyPresentationValueText();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'value' => function (ParseNode $n) use ($o) { $o->setValue($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the value property value. A string value for the associated presentation.
     * @return string|null
    */
    public function getValue(): ?string {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('value', $this->value);
    }

    /**
     * Sets the value property value. A string value for the associated presentation.
     *  @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value ): void {
        $this->value = $value;
    }

}

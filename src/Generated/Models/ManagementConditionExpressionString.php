<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagementConditionExpressionString extends ManagementConditionExpression 
{
    /** @var string|null $value The management condition statement expression string value. */
    private ?string $value = null;
    
    /**
     * Instantiates a new managementConditionExpressionString and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagementConditionExpressionString
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ManagementConditionExpressionString {
        return new ManagementConditionExpressionString();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'value' => function (self $o, ParseNode $n) { $o->setValue($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the value property value. The management condition statement expression string value.
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
     * Sets the value property value. The management condition statement expression string value.
     *  @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value ): void {
        $this->value = $value;
    }

}

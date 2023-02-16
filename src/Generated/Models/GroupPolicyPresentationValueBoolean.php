<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GroupPolicyPresentationValueBoolean extends GroupPolicyPresentationValue implements Parsable 
{
    /**
     * Instantiates a new GroupPolicyPresentationValueBoolean and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GroupPolicyPresentationValueBoolean
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GroupPolicyPresentationValueBoolean {
        return new GroupPolicyPresentationValueBoolean();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'value' => fn(ParseNode $n) => $o->setValue($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the value property value. An boolean value for the associated presentation.
     * @return bool|null
    */
    public function getValue(): ?bool {
        return $this->getBackingStore()->get('value');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('value', $this->getValue());
    }

    /**
     * Sets the value property value. An boolean value for the associated presentation.
     * @param bool|null $value Value to set for the value property.
    */
    public function setValue(?bool $value): void {
        $this->getBackingStore()->set('value', $value);
    }

}

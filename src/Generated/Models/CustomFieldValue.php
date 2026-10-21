<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CustomFieldValue extends PlannerDelta implements Parsable 
{
    /**
     * Instantiates a new CustomFieldValue and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomFieldValue
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomFieldValue {
        return new CustomFieldValue();
    }

    /**
     * Gets the customFieldDefinitionId property value. ID of the customFieldDefinition this value is for. Immutable after creation.
     * @return string|null
    */
    public function getCustomFieldDefinitionId(): ?string {
        $val = $this->getBackingStore()->get('customFieldDefinitionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customFieldDefinitionId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'customFieldDefinitionId' => fn(ParseNode $n) => $o->setCustomFieldDefinitionId($n->getStringValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
        ]);
    }

    /**
     * Gets the value property value. The value of the custom field, formatted according to the field's valueType.
     * @return string|null
    */
    public function getValue(): ?string {
        $val = $this->getBackingStore()->get('value');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'value'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('customFieldDefinitionId', $this->getCustomFieldDefinitionId());
        $writer->writeStringValue('value', $this->getValue());
    }

    /**
     * Sets the customFieldDefinitionId property value. ID of the customFieldDefinition this value is for. Immutable after creation.
     * @param string|null $value Value to set for the customFieldDefinitionId property.
    */
    public function setCustomFieldDefinitionId(?string $value): void {
        $this->getBackingStore()->set('customFieldDefinitionId', $value);
    }

    /**
     * Sets the value property value. The value of the custom field, formatted according to the field's valueType.
     * @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value): void {
        $this->getBackingStore()->set('value', $value);
    }

}

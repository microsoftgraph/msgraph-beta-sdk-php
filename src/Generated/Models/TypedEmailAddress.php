<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TypedEmailAddress extends EmailAddress implements Parsable 
{
    /**
     * Instantiates a new typedEmailAddress and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.typedEmailAddress');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TypedEmailAddress
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TypedEmailAddress {
        return new TypedEmailAddress();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'otherLabel' => fn(ParseNode $n) => $o->setOtherLabel($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(TypedEmailAddress_type::class)),
        ]);
    }

    /**
     * Gets the otherLabel property value. To specify a custom type of email address, set type to other, and assign otherLabel to a custom string. For example, you may use a specific email address for your volunteer activities. Set type to other, and set otherLabel to a custom string such as Volunteer work.
     * @return string|null
    */
    public function getOtherLabel(): ?string {
        $val = $this->getBackingStore()->get('otherLabel');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'otherLabel'");
    }

    /**
     * Gets the type property value. The type of email address. Possible values are: unknown, work, personal, main, other. The default value is unknown, which means address has not been set as a specific type.
     * @return TypedEmailAddress_type|null
    */
    public function getType(): ?TypedEmailAddress_type {
        $val = $this->getBackingStore()->get('type');
        if (is_null($val) || $val instanceof TypedEmailAddress_type) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'type'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('otherLabel', $this->getOtherLabel());
        $writer->writeEnumValue('type', $this->getType());
    }

    /**
     * Sets the otherLabel property value. To specify a custom type of email address, set type to other, and assign otherLabel to a custom string. For example, you may use a specific email address for your volunteer activities. Set type to other, and set otherLabel to a custom string such as Volunteer work.
     * @param string|null $value Value to set for the otherLabel property.
    */
    public function setOtherLabel(?string $value): void {
        $this->getBackingStore()->set('otherLabel', $value);
    }

    /**
     * Sets the type property value. The type of email address. Possible values are: unknown, work, personal, main, other. The default value is unknown, which means address has not been set as a specific type.
     * @param TypedEmailAddress_type|null $value Value to set for the type property.
    */
    public function setType(?TypedEmailAddress_type $value): void {
        $this->getBackingStore()->set('type', $value);
    }

}

<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ProgramControlType extends Entity implements Parsable 
{
    /**
     * Instantiates a new ProgramControlType and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProgramControlType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProgramControlType {
        return new ProgramControlType();
    }

    /**
     * Gets the controlTypeGroupId property value. The controlTypeGroupId property
     * @return string|null
    */
    public function getControlTypeGroupId(): ?string {
        $val = $this->getBackingStore()->get('controlTypeGroupId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'controlTypeGroupId'");
    }

    /**
     * Gets the displayName property value. The name of the program control type
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'controlTypeGroupId' => fn(ParseNode $n) => $o->setControlTypeGroupId($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('controlTypeGroupId', $this->getControlTypeGroupId());
        $writer->writeStringValue('displayName', $this->getDisplayName());
    }

    /**
     * Sets the controlTypeGroupId property value. The controlTypeGroupId property
     * @param string|null $value Value to set for the controlTypeGroupId property.
    */
    public function setControlTypeGroupId(?string $value): void {
        $this->getBackingStore()->set('controlTypeGroupId', $value);
    }

    /**
     * Sets the displayName property value. The name of the program control type
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

}

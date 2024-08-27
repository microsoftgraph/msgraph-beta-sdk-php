<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Entra extends Entity implements Parsable 
{
    /**
     * Instantiates a new Entra and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Entra
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Entra {
        return new Entra();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'uxSetting' => fn(ParseNode $n) => $o->setUxSetting($n->getObjectValue([UxSetting::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the uxSetting property value. The uxSetting property
     * @return UxSetting|null
    */
    public function getUxSetting(): ?UxSetting {
        $val = $this->getBackingStore()->get('uxSetting');
        if (is_null($val) || $val instanceof UxSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'uxSetting'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('uxSetting', $this->getUxSetting());
    }

    /**
     * Sets the uxSetting property value. The uxSetting property
     * @param UxSetting|null $value Value to set for the uxSetting property.
    */
    public function setUxSetting(?UxSetting $value): void {
        $this->getBackingStore()->set('uxSetting', $value);
    }

}

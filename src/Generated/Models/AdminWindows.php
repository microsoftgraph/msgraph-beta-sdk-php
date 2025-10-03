<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AdminWindows extends Entity implements Parsable 
{
    /**
     * Instantiates a new AdminWindows and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AdminWindows
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AdminWindows {
        return new AdminWindows();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'updates' => fn(ParseNode $n) => $o->setUpdates($n->getObjectValue([AdminWindowsUpdates::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the updates property value. Entity that acts as a container for all Windows Update for Business deployment service functionalities. Read-only.
     * @return AdminWindowsUpdates|null
    */
    public function getUpdates(): ?AdminWindowsUpdates {
        $val = $this->getBackingStore()->get('updates');
        if (is_null($val) || $val instanceof AdminWindowsUpdates) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'updates'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('updates', $this->getUpdates());
    }

    /**
     * Sets the updates property value. Entity that acts as a container for all Windows Update for Business deployment service functionalities. Read-only.
     * @param AdminWindowsUpdates|null $value Value to set for the updates property.
    */
    public function setUpdates(?AdminWindowsUpdates $value): void {
        $this->getBackingStore()->set('updates', $value);
    }

}

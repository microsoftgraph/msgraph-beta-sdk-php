<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UxSetting extends Entity implements Parsable 
{
    /**
     * Instantiates a new UxSetting and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UxSetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UxSetting {
        return new UxSetting();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'restrictNonAdminAccess' => fn(ParseNode $n) => $o->setRestrictNonAdminAccess($n->getEnumValue(NonAdminSetting::class)),
        ]);
    }

    /**
     * Gets the restrictNonAdminAccess property value. The restrictNonAdminAccess property
     * @return NonAdminSetting|null
    */
    public function getRestrictNonAdminAccess(): ?NonAdminSetting {
        $val = $this->getBackingStore()->get('restrictNonAdminAccess');
        if (is_null($val) || $val instanceof NonAdminSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restrictNonAdminAccess'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('restrictNonAdminAccess', $this->getRestrictNonAdminAccess());
    }

    /**
     * Sets the restrictNonAdminAccess property value. The restrictNonAdminAccess property
     * @param NonAdminSetting|null $value Value to set for the restrictNonAdminAccess property.
    */
    public function setRestrictNonAdminAccess(?NonAdminSetting $value): void {
        $this->getBackingStore()->set('restrictNonAdminAccess', $value);
    }

}

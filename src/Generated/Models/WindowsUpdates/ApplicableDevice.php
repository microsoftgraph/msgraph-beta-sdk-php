<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ApplicableDevice extends Entity implements Parsable 
{
    /**
     * Instantiates a new ApplicableDevice and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApplicableDevice
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApplicableDevice {
        return new ApplicableDevice();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isRecommended' => fn(ParseNode $n) => $o->setIsRecommended($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the isRecommended property value. Indicates whether the catalog entry is recommended for the device. Read-only.
     * @return bool|null
    */
    public function getIsRecommended(): ?bool {
        $val = $this->getBackingStore()->get('isRecommended');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isRecommended'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
    }

    /**
     * Sets the isRecommended property value. Indicates whether the catalog entry is recommended for the device. Read-only.
     * @param bool|null $value Value to set for the isRecommended property.
    */
    public function setIsRecommended(?bool $value): void {
        $this->getBackingStore()->set('isRecommended', $value);
    }

}

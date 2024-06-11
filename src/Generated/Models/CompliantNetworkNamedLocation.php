<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CompliantNetworkNamedLocation extends NamedLocation implements Parsable 
{
    /**
     * Instantiates a new CompliantNetworkNamedLocation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CompliantNetworkNamedLocation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CompliantNetworkNamedLocation {
        return new CompliantNetworkNamedLocation();
    }

    /**
     * Gets the compliantNetworkType property value. The compliantNetworkType property
     * @return CompliantNetworkType|null
    */
    public function getCompliantNetworkType(): ?CompliantNetworkType {
        $val = $this->getBackingStore()->get('compliantNetworkType');
        if (is_null($val) || $val instanceof CompliantNetworkType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'compliantNetworkType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'compliantNetworkType' => fn(ParseNode $n) => $o->setCompliantNetworkType($n->getEnumValue(CompliantNetworkType::class)),
            'isTrusted' => fn(ParseNode $n) => $o->setIsTrusted($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the isTrusted property value. true if this location is explicitly trusted. Optional. Default value is false.
     * @return bool|null
    */
    public function getIsTrusted(): ?bool {
        $val = $this->getBackingStore()->get('isTrusted');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isTrusted'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('compliantNetworkType', $this->getCompliantNetworkType());
        $writer->writeBooleanValue('isTrusted', $this->getIsTrusted());
    }

    /**
     * Sets the compliantNetworkType property value. The compliantNetworkType property
     * @param CompliantNetworkType|null $value Value to set for the compliantNetworkType property.
    */
    public function setCompliantNetworkType(?CompliantNetworkType $value): void {
        $this->getBackingStore()->set('compliantNetworkType', $value);
    }

    /**
     * Sets the isTrusted property value. true if this location is explicitly trusted. Optional. Default value is false.
     * @param bool|null $value Value to set for the isTrusted property.
    */
    public function setIsTrusted(?bool $value): void {
        $this->getBackingStore()->set('isTrusted', $value);
    }

}

<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class QualityUpdateRing extends Ring implements Parsable 
{
    /**
     * Instantiates a new QualityUpdateRing and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsUpdates.qualityUpdateRing');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return QualityUpdateRing
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): QualityUpdateRing {
        return new QualityUpdateRing();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isHotpatchEnabled' => fn(ParseNode $n) => $o->setIsHotpatchEnabled($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the isHotpatchEnabled property value. Identifies whether a hotpatch update is available.
     * @return bool|null
    */
    public function getIsHotpatchEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isHotpatchEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isHotpatchEnabled'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isHotpatchEnabled', $this->getIsHotpatchEnabled());
    }

    /**
     * Sets the isHotpatchEnabled property value. Identifies whether a hotpatch update is available.
     * @param bool|null $value Value to set for the isHotpatchEnabled property.
    */
    public function setIsHotpatchEnabled(?bool $value): void {
        $this->getBackingStore()->set('isHotpatchEnabled', $value);
    }

}

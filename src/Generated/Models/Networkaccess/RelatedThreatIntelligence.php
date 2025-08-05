<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RelatedThreatIntelligence extends RelatedResource implements Parsable 
{
    /**
     * Instantiates a new RelatedThreatIntelligence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.networkaccess.relatedThreatIntelligence');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RelatedThreatIntelligence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RelatedThreatIntelligence {
        return new RelatedThreatIntelligence();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'threatCount' => fn(ParseNode $n) => $o->setThreatCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the threatCount property value. Number of threats detected by threat intelligence. Required.
     * @return int|null
    */
    public function getThreatCount(): ?int {
        $val = $this->getBackingStore()->get('threatCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'threatCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('threatCount', $this->getThreatCount());
    }

    /**
     * Sets the threatCount property value. Number of threats detected by threat intelligence. Required.
     * @param int|null $value Value to set for the threatCount property.
    */
    public function setThreatCount(?int $value): void {
        $this->getBackingStore()->set('threatCount', $value);
    }

}

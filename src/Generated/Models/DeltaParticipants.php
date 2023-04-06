<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeltaParticipants extends Entity implements Parsable 
{
    /**
     * Instantiates a new DeltaParticipants and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeltaParticipants
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeltaParticipants {
        return new DeltaParticipants();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'participants' => fn(ParseNode $n) => $o->setParticipants($n->getCollectionOfObjectValues([Participant::class, 'createFromDiscriminatorValue'])),
            'sequenceNumber' => fn(ParseNode $n) => $o->setSequenceNumber($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the participants property value. The participants property
     * @return array<Participant>|null
    */
    public function getParticipants(): ?array {
        return $this->getBackingStore()->get('participants');
    }

    /**
     * Gets the sequenceNumber property value. The sequenceNumber property
     * @return int|null
    */
    public function getSequenceNumber(): ?int {
        return $this->getBackingStore()->get('sequenceNumber');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('participants', $this->getParticipants());
        $writer->writeIntegerValue('sequenceNumber', $this->getSequenceNumber());
    }

    /**
     * Sets the participants property value. The participants property
     * @param array<Participant>|null $value Value to set for the participants property.
    */
    public function setParticipants(?array $value): void {
        $this->getBackingStore()->set('participants', $value);
    }

    /**
     * Sets the sequenceNumber property value. The sequenceNumber property
     * @param int|null $value Value to set for the sequenceNumber property.
    */
    public function setSequenceNumber(?int $value): void {
        $this->getBackingStore()->set('sequenceNumber', $value);
    }

}

<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MuteParticipantsOperation extends CommsOperation implements Parsable 
{
    /**
     * @var array<string>|null $participants The participants property
    */
    private ?array $participants = null;
    
    /**
     * Instantiates a new MuteParticipantsOperation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.muteParticipantsOperation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MuteParticipantsOperation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MuteParticipantsOperation {
        return new MuteParticipantsOperation();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'participants' => fn(ParseNode $n) => $o->setParticipants($n->getCollectionOfPrimitiveValues()),
        ]);
    }

    /**
     * Gets the participants property value. The participants property
     * @return array<string>|null
    */
    public function getParticipants(): ?array {
        return $this->participants;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('participants', $this->participants);
    }

    /**
     * Sets the participants property value. The participants property
     *  @param array<string>|null $value Value to set for the participants property.
    */
    public function setParticipants(?array $value ): void {
        $this->participants = $value;
    }

}

<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class RealtimeActivityMeeting extends Entity implements Parsable 
{
    /**
     * Instantiates a new RealtimeActivityMeeting and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RealtimeActivityMeeting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RealtimeActivityMeeting {
        return new RealtimeActivityMeeting();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'transcripts' => fn(ParseNode $n) => $o->setTranscripts($n->getCollectionOfObjectValues([RealTimeTranscript::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the transcripts property value. The transcripts property
     * @return array<RealTimeTranscript>|null
    */
    public function getTranscripts(): ?array {
        $val = $this->getBackingStore()->get('transcripts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RealTimeTranscript::class);
            /** @var array<RealTimeTranscript>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'transcripts'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('transcripts', $this->getTranscripts());
    }

    /**
     * Sets the transcripts property value. The transcripts property
     * @param array<RealTimeTranscript>|null $value Value to set for the transcripts property.
    */
    public function setTranscripts(?array $value): void {
        $this->getBackingStore()->set('transcripts', $value);
    }

}

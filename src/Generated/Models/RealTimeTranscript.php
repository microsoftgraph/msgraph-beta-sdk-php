<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class RealTimeTranscript extends Entity implements Parsable 
{
    /**
     * Instantiates a new RealTimeTranscript and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RealTimeTranscript
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RealTimeTranscript {
        return new RealTimeTranscript();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'payloads' => fn(ParseNode $n) => $o->setPayloads($n->getCollectionOfObjectValues([TranscriptPayload::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the payloads property value. The payloads property
     * @return array<TranscriptPayload>|null
    */
    public function getPayloads(): ?array {
        $val = $this->getBackingStore()->get('payloads');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TranscriptPayload::class);
            /** @var array<TranscriptPayload>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'payloads'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('payloads', $this->getPayloads());
    }

    /**
     * Sets the payloads property value. The payloads property
     * @param array<TranscriptPayload>|null $value Value to set for the payloads property.
    */
    public function setPayloads(?array $value): void {
        $this->getBackingStore()->set('payloads', $value);
    }

}

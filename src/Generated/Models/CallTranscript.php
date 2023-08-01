<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class CallTranscript extends Entity implements Parsable 
{
    /**
     * Instantiates a new callTranscript and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CallTranscript
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CallTranscript {
        return new CallTranscript();
    }

    /**
     * Gets the content property value. The content of the transcript. Read-only.
     * @return StreamInterface|null
    */
    public function getContent(): ?StreamInterface {
        $val = $this->getBackingStore()->get('content');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'content'");
    }

    /**
     * Gets the createdDateTime property value. Date and time at which the transcript was created. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'content' => fn(ParseNode $n) => $o->setContent($n->getBinaryContent()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'metadataContent' => fn(ParseNode $n) => $o->setMetadataContent($n->getBinaryContent()),
        ]);
    }

    /**
     * Gets the metadataContent property value. The time-aligned metadata of the utterances in the transcript. Read-only.
     * @return StreamInterface|null
    */
    public function getMetadataContent(): ?StreamInterface {
        $val = $this->getBackingStore()->get('metadataContent');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'metadataContent'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBinaryContent('content', $this->getContent());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeBinaryContent('metadataContent', $this->getMetadataContent());
    }

    /**
     * Sets the content property value. The content of the transcript. Read-only.
     * @param StreamInterface|null $value Value to set for the content property.
    */
    public function setContent(?StreamInterface $value): void {
        $this->getBackingStore()->set('content', $value);
    }

    /**
     * Sets the createdDateTime property value. Date and time at which the transcript was created. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the metadataContent property value. The time-aligned metadata of the utterances in the transcript. Read-only.
     * @param StreamInterface|null $value Value to set for the metadataContent property.
    */
    public function setMetadataContent(?StreamInterface $value): void {
        $this->getBackingStore()->set('metadataContent', $value);
    }

}

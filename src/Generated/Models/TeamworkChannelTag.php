<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamworkChannelTag extends TeamworkTag implements Parsable 
{
    /**
     * Instantiates a new TeamworkChannelTag and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkChannelTag
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkChannelTag {
        return new TeamworkChannelTag();
    }

    /**
     * Gets the channelId property value. The identifier of the channel that owns the tag. Read-only.
     * @return string|null
    */
    public function getChannelId(): ?string {
        $val = $this->getBackingStore()->get('channelId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'channelId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'channelId' => fn(ParseNode $n) => $o->setChannelId($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('channelId', $this->getChannelId());
    }

    /**
     * Sets the channelId property value. The identifier of the channel that owns the tag. Read-only.
     * @param string|null $value Value to set for the channelId property.
    */
    public function setChannelId(?string $value): void {
        $this->getBackingStore()->set('channelId', $value);
    }

}

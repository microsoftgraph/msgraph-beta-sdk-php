<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CopilotCommunicationsRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new CopilotCommunicationsRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CopilotCommunicationsRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CopilotCommunicationsRoot {
        return new CopilotCommunicationsRoot();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'realtimeActivityFeed' => fn(ParseNode $n) => $o->setRealtimeActivityFeed($n->getObjectValue([RealtimeActivityFeedRoot::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the realtimeActivityFeed property value. The realtimeActivityFeed property
     * @return RealtimeActivityFeedRoot|null
    */
    public function getRealtimeActivityFeed(): ?RealtimeActivityFeedRoot {
        $val = $this->getBackingStore()->get('realtimeActivityFeed');
        if (is_null($val) || $val instanceof RealtimeActivityFeedRoot) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'realtimeActivityFeed'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('realtimeActivityFeed', $this->getRealtimeActivityFeed());
    }

    /**
     * Sets the realtimeActivityFeed property value. The realtimeActivityFeed property
     * @param RealtimeActivityFeedRoot|null $value Value to set for the realtimeActivityFeed property.
    */
    public function setRealtimeActivityFeed(?RealtimeActivityFeedRoot $value): void {
        $this->getBackingStore()->set('realtimeActivityFeed', $value);
    }

}

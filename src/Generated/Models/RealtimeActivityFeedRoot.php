<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class RealtimeActivityFeedRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new RealtimeActivityFeedRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RealtimeActivityFeedRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RealtimeActivityFeedRoot {
        return new RealtimeActivityFeedRoot();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'meetings' => fn(ParseNode $n) => $o->setMeetings($n->getCollectionOfObjectValues([RealtimeActivityMeeting::class, 'createFromDiscriminatorValue'])),
            'multiActivitySubscriptions' => fn(ParseNode $n) => $o->setMultiActivitySubscriptions($n->getCollectionOfObjectValues([MultiActivitySubscription::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the meetings property value. The meetings property
     * @return array<RealtimeActivityMeeting>|null
    */
    public function getMeetings(): ?array {
        $val = $this->getBackingStore()->get('meetings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RealtimeActivityMeeting::class);
            /** @var array<RealtimeActivityMeeting>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'meetings'");
    }

    /**
     * Gets the multiActivitySubscriptions property value. The multiActivitySubscriptions property
     * @return array<MultiActivitySubscription>|null
    */
    public function getMultiActivitySubscriptions(): ?array {
        $val = $this->getBackingStore()->get('multiActivitySubscriptions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MultiActivitySubscription::class);
            /** @var array<MultiActivitySubscription>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'multiActivitySubscriptions'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('meetings', $this->getMeetings());
        $writer->writeCollectionOfObjectValues('multiActivitySubscriptions', $this->getMultiActivitySubscriptions());
    }

    /**
     * Sets the meetings property value. The meetings property
     * @param array<RealtimeActivityMeeting>|null $value Value to set for the meetings property.
    */
    public function setMeetings(?array $value): void {
        $this->getBackingStore()->set('meetings', $value);
    }

    /**
     * Sets the multiActivitySubscriptions property value. The multiActivitySubscriptions property
     * @param array<MultiActivitySubscription>|null $value Value to set for the multiActivitySubscriptions property.
    */
    public function setMultiActivitySubscriptions(?array $value): void {
        $this->getBackingStore()->set('multiActivitySubscriptions', $value);
    }

}

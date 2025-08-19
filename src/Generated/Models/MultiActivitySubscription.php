<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MultiActivitySubscription extends Entity implements Parsable 
{
    /**
     * Instantiates a new MultiActivitySubscription and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MultiActivitySubscription
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MultiActivitySubscription {
        return new MultiActivitySubscription();
    }

    /**
     * Gets the activities property value. The activities property
     * @return SubscriptionActivities|null
    */
    public function getActivities(): ?SubscriptionActivities {
        $val = $this->getBackingStore()->get('activities');
        if (is_null($val) || $val instanceof SubscriptionActivities) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activities'");
    }

    /**
     * Gets the callbackUrl property value. The callbackUrl property
     * @return string|null
    */
    public function getCallbackUrl(): ?string {
        $val = $this->getBackingStore()->get('callbackUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'callbackUrl'");
    }

    /**
     * Gets the chatInfo property value. The chatInfo property
     * @return ChatInfo|null
    */
    public function getChatInfo(): ?ChatInfo {
        $val = $this->getBackingStore()->get('chatInfo');
        if (is_null($val) || $val instanceof ChatInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'chatInfo'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activities' => fn(ParseNode $n) => $o->setActivities($n->getObjectValue([SubscriptionActivities::class, 'createFromDiscriminatorValue'])),
            'callbackUrl' => fn(ParseNode $n) => $o->setCallbackUrl($n->getStringValue()),
            'chatInfo' => fn(ParseNode $n) => $o->setChatInfo($n->getObjectValue([ChatInfo::class, 'createFromDiscriminatorValue'])),
            'meetingInfo' => fn(ParseNode $n) => $o->setMeetingInfo($n->getObjectValue([MeetingInfo::class, 'createFromDiscriminatorValue'])),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the meetingInfo property value. The meetingInfo property
     * @return MeetingInfo|null
    */
    public function getMeetingInfo(): ?MeetingInfo {
        $val = $this->getBackingStore()->get('meetingInfo');
        if (is_null($val) || $val instanceof MeetingInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'meetingInfo'");
    }

    /**
     * Gets the userId property value. The userId property
     * @return string|null
    */
    public function getUserId(): ?string {
        $val = $this->getBackingStore()->get('userId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('activities', $this->getActivities());
        $writer->writeStringValue('callbackUrl', $this->getCallbackUrl());
        $writer->writeObjectValue('chatInfo', $this->getChatInfo());
        $writer->writeObjectValue('meetingInfo', $this->getMeetingInfo());
        $writer->writeStringValue('userId', $this->getUserId());
    }

    /**
     * Sets the activities property value. The activities property
     * @param SubscriptionActivities|null $value Value to set for the activities property.
    */
    public function setActivities(?SubscriptionActivities $value): void {
        $this->getBackingStore()->set('activities', $value);
    }

    /**
     * Sets the callbackUrl property value. The callbackUrl property
     * @param string|null $value Value to set for the callbackUrl property.
    */
    public function setCallbackUrl(?string $value): void {
        $this->getBackingStore()->set('callbackUrl', $value);
    }

    /**
     * Sets the chatInfo property value. The chatInfo property
     * @param ChatInfo|null $value Value to set for the chatInfo property.
    */
    public function setChatInfo(?ChatInfo $value): void {
        $this->getBackingStore()->set('chatInfo', $value);
    }

    /**
     * Sets the meetingInfo property value. The meetingInfo property
     * @param MeetingInfo|null $value Value to set for the meetingInfo property.
    */
    public function setMeetingInfo(?MeetingInfo $value): void {
        $this->getBackingStore()->set('meetingInfo', $value);
    }

    /**
     * Sets the userId property value. The userId property
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

}

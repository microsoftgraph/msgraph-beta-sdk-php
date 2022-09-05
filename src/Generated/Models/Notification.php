<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Notification extends Entity implements Parsable 
{
    /**
     * @var int|null $displayTimeToLive Sets how long (in seconds) this notification content will stay in each platform's notification viewer. For example, when the notification is delivered to a Windows device, the value of this property is passed on to ToastNotification.ExpirationTime, which determines how long the toast notification will stay in the user's Windows Action Center.
    */
    private ?int $displayTimeToLive = null;
    
    /**
     * @var DateTime|null $expirationDateTime Sets a UTC expiration date and time on a user notification using ISO 8601 format (for example, midnight UTC on Jan 1, 2019 would look like this: '2019-01-01T00:00:00Z'). When time is up, the notification is removed from the Microsoft Graph notification feed store completely and is no longer part of notification history. Max value is 30 days.
    */
    private ?DateTime $expirationDateTime = null;
    
    /**
     * @var string|null $groupName The name of the group that this notification belongs to. It is set by the developer for the purpose of grouping notifications together.
    */
    private ?string $groupName = null;
    
    /**
     * @var PayloadTypes|null $payload The payload property
    */
    private ?PayloadTypes $payload = null;
    
    /**
     * @var Priority|null $priority Indicates the priority of a raw user notification. Visual notifications are sent with high priority by default. Valid values are None, High and Low.
    */
    private ?Priority $priority = null;
    
    /**
     * @var string|null $targetHostName Represents the host name of the app to which the calling service wants to post the notification, for the given user. If targeting web endpoints (see targetPolicy.platformTypes), ensure that targetHostName is the same as the name used when creating a subscription on the client side within the application JSON property.
    */
    private ?string $targetHostName = null;
    
    /**
     * @var TargetPolicyEndpoints|null $targetPolicy Target policy object handles notification delivery policy for endpoint types that should be targeted (Windows, iOS, Android and WebPush) for the given user.
    */
    private ?TargetPolicyEndpoints $targetPolicy = null;
    
    /**
     * Instantiates a new notification and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.notification');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Notification
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Notification {
        return new Notification();
    }

    /**
     * Gets the displayTimeToLive property value. Sets how long (in seconds) this notification content will stay in each platform's notification viewer. For example, when the notification is delivered to a Windows device, the value of this property is passed on to ToastNotification.ExpirationTime, which determines how long the toast notification will stay in the user's Windows Action Center.
     * @return int|null
    */
    public function getDisplayTimeToLive(): ?int {
        return $this->displayTimeToLive;
    }

    /**
     * Gets the expirationDateTime property value. Sets a UTC expiration date and time on a user notification using ISO 8601 format (for example, midnight UTC on Jan 1, 2019 would look like this: '2019-01-01T00:00:00Z'). When time is up, the notification is removed from the Microsoft Graph notification feed store completely and is no longer part of notification history. Max value is 30 days.
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        return $this->expirationDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayTimeToLive' => function (ParseNode $n) use ($o) { $o->setDisplayTimeToLive($n->getIntegerValue()); },
            'expirationDateTime' => function (ParseNode $n) use ($o) { $o->setExpirationDateTime($n->getDateTimeValue()); },
            'groupName' => function (ParseNode $n) use ($o) { $o->setGroupName($n->getStringValue()); },
            'payload' => function (ParseNode $n) use ($o) { $o->setPayload($n->getObjectValue(array(PayloadTypes::class, 'createFromDiscriminatorValue'))); },
            'priority' => function (ParseNode $n) use ($o) { $o->setPriority($n->getEnumValue(Priority::class)); },
            'targetHostName' => function (ParseNode $n) use ($o) { $o->setTargetHostName($n->getStringValue()); },
            'targetPolicy' => function (ParseNode $n) use ($o) { $o->setTargetPolicy($n->getObjectValue(array(TargetPolicyEndpoints::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the groupName property value. The name of the group that this notification belongs to. It is set by the developer for the purpose of grouping notifications together.
     * @return string|null
    */
    public function getGroupName(): ?string {
        return $this->groupName;
    }

    /**
     * Gets the payload property value. The payload property
     * @return PayloadTypes|null
    */
    public function getPayload(): ?PayloadTypes {
        return $this->payload;
    }

    /**
     * Gets the priority property value. Indicates the priority of a raw user notification. Visual notifications are sent with high priority by default. Valid values are None, High and Low.
     * @return Priority|null
    */
    public function getPriority(): ?Priority {
        return $this->priority;
    }

    /**
     * Gets the targetHostName property value. Represents the host name of the app to which the calling service wants to post the notification, for the given user. If targeting web endpoints (see targetPolicy.platformTypes), ensure that targetHostName is the same as the name used when creating a subscription on the client side within the application JSON property.
     * @return string|null
    */
    public function getTargetHostName(): ?string {
        return $this->targetHostName;
    }

    /**
     * Gets the targetPolicy property value. Target policy object handles notification delivery policy for endpoint types that should be targeted (Windows, iOS, Android and WebPush) for the given user.
     * @return TargetPolicyEndpoints|null
    */
    public function getTargetPolicy(): ?TargetPolicyEndpoints {
        return $this->targetPolicy;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('displayTimeToLive', $this->displayTimeToLive);
        $writer->writeDateTimeValue('expirationDateTime', $this->expirationDateTime);
        $writer->writeStringValue('groupName', $this->groupName);
        $writer->writeObjectValue('payload', $this->payload);
        $writer->writeEnumValue('priority', $this->priority);
        $writer->writeStringValue('targetHostName', $this->targetHostName);
        $writer->writeObjectValue('targetPolicy', $this->targetPolicy);
    }

    /**
     * Sets the displayTimeToLive property value. Sets how long (in seconds) this notification content will stay in each platform's notification viewer. For example, when the notification is delivered to a Windows device, the value of this property is passed on to ToastNotification.ExpirationTime, which determines how long the toast notification will stay in the user's Windows Action Center.
     *  @param int|null $value Value to set for the displayTimeToLive property.
    */
    public function setDisplayTimeToLive(?int $value ): void {
        $this->displayTimeToLive = $value;
    }

    /**
     * Sets the expirationDateTime property value. Sets a UTC expiration date and time on a user notification using ISO 8601 format (for example, midnight UTC on Jan 1, 2019 would look like this: '2019-01-01T00:00:00Z'). When time is up, the notification is removed from the Microsoft Graph notification feed store completely and is no longer part of notification history. Max value is 30 days.
     *  @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value ): void {
        $this->expirationDateTime = $value;
    }

    /**
     * Sets the groupName property value. The name of the group that this notification belongs to. It is set by the developer for the purpose of grouping notifications together.
     *  @param string|null $value Value to set for the groupName property.
    */
    public function setGroupName(?string $value ): void {
        $this->groupName = $value;
    }

    /**
     * Sets the payload property value. The payload property
     *  @param PayloadTypes|null $value Value to set for the payload property.
    */
    public function setPayload(?PayloadTypes $value ): void {
        $this->payload = $value;
    }

    /**
     * Sets the priority property value. Indicates the priority of a raw user notification. Visual notifications are sent with high priority by default. Valid values are None, High and Low.
     *  @param Priority|null $value Value to set for the priority property.
    */
    public function setPriority(?Priority $value ): void {
        $this->priority = $value;
    }

    /**
     * Sets the targetHostName property value. Represents the host name of the app to which the calling service wants to post the notification, for the given user. If targeting web endpoints (see targetPolicy.platformTypes), ensure that targetHostName is the same as the name used when creating a subscription on the client side within the application JSON property.
     *  @param string|null $value Value to set for the targetHostName property.
    */
    public function setTargetHostName(?string $value ): void {
        $this->targetHostName = $value;
    }

    /**
     * Sets the targetPolicy property value. Target policy object handles notification delivery policy for endpoint types that should be targeted (Windows, iOS, Android and WebPush) for the given user.
     *  @param TargetPolicyEndpoints|null $value Value to set for the targetPolicy property.
    */
    public function setTargetPolicy(?TargetPolicyEndpoints $value ): void {
        $this->targetPolicy = $value;
    }

}

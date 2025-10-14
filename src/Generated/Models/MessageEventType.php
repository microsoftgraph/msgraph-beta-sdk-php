<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class MessageEventType extends Enum {
    public const RECEIVED = "received";
    public const SENT = "sent";
    public const DELIVERED = "delivered";
    public const FAILED = "failed";
    public const PROCESSING_FAILED = "processingFailed";
    public const DISTRIBUTION_GROUP_EXPANDED = "distributionGroupExpanded";
    public const SUBMITTED = "submitted";
    public const DELAYED = "delayed";
    public const REDIRECTED = "redirected";
    public const RESOLVED = "resolved";
    public const DROPPED = "dropped";
    public const RECIPIENTS_ADDED = "recipientsAdded";
    public const MALWARE_DETECTED = "malwareDetected";
    public const MALWARE_DETECTED_IN_MESSAGE = "malwareDetectedInMessage";
    public const MALWARE_DETECTED_IN_ATTACHMENT = "malwareDetectedInAttachment";
    public const TT_ZAPPED = "ttZapped";
    public const TT_DELIVERED = "ttDelivered";
    public const SPAM_DETECTED = "spamDetected";
    public const TRANSPORT_RULE_TRIGGERED = "transportRuleTriggered";
    public const DLP_RULE_TRIGGERED = "dlpRuleTriggered";
    public const JOURNALED = "journaled";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

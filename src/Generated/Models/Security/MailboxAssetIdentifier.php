<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class MailboxAssetIdentifier extends Enum {
    public const ACCOUNT_UPN = "accountUpn";
    public const FILE_OWNER_UPN = "fileOwnerUpn";
    public const INITIATING_PROCESS_ACCOUNT_UPN = "initiatingProcessAccountUpn";
    public const LAST_MODIFYING_ACCOUNT_UPN = "lastModifyingAccountUpn";
    public const TARGET_ACCOUNT_UPN = "targetAccountUpn";
    public const SENDER_FROM_ADDRESS = "senderFromAddress";
    public const SENDER_DISPLAY_NAME = "senderDisplayName";
    public const RECIPIENT_EMAIL_ADDRESS = "recipientEmailAddress";
    public const SENDER_MAIL_FROM_ADDRESS = "senderMailFromAddress";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class UserMailboxSetting extends Enum {
    public const NONE = "none";
    public const JUNK_MAIL_DELETION = "junkMailDeletion";
    public const IS_FROM_ADDRESS_IN_ADDRESS_BOOK = "isFromAddressInAddressBook";
    public const IS_FROM_ADDRESS_IN_ADDRESS_SAFE_LIST = "isFromAddressInAddressSafeList";
    public const IS_FROM_ADDRESS_IN_ADDRESS_BLOCK_LIST = "isFromAddressInAddressBlockList";
    public const IS_FROM_ADDRESS_IN_ADDRESS_IMPLICIT_SAFE_LIST = "isFromAddressInAddressImplicitSafeList";
    public const IS_FROM_ADDRESS_IN_ADDRESS_IMPLICIT_JUNK_LIST = "isFromAddressInAddressImplicitJunkList";
    public const IS_FROM_DOMAIN_IN_DOMAIN_SAFE_LIST = "isFromDomainInDomainSafeList";
    public const IS_FROM_DOMAIN_IN_DOMAIN_BLOCK_LIST = "isFromDomainInDomainBlockList";
    public const IS_RECIPIENT_IN_RECIPIENT_SAFE_LIST = "isRecipientInRecipientSafeList";
    public const CUSTOM_RULE = "customRule";
    public const JUNK_MAIL_RULE = "junkMailRule";
    public const SENDER_PRA_PRESENT = "senderPraPresent";
    public const FROM_FIRST_TIME_SENDER = "fromFirstTimeSender";
    public const EXCLUSIVE = "exclusive";
    public const PRIOR_SEEN_PASS = "priorSeenPass";
    public const SENDER_AUTHENTICATION_SUCCEEDED = "senderAuthenticationSucceeded";
    public const IS_JUNK_MAIL_RULE_ENABLED = "isJunkMailRuleEnabled";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

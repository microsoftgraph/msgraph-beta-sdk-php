<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class UserAssetIdentifier extends Enum {
    public const ACCOUNT_OBJECT_ID = "accountObjectId";
    public const ACCOUNT_SID = "accountSid";
    public const ACCOUNT_UPN = "accountUpn";
    public const ACCOUNT_NAME = "accountName";
    public const ACCOUNT_DOMAIN = "accountDomain";
    public const ACCOUNT_ID = "accountId";
    public const REQUEST_ACCOUNT_SID = "requestAccountSid";
    public const REQUEST_ACCOUNT_NAME = "requestAccountName";
    public const REQUEST_ACCOUNT_DOMAIN = "requestAccountDomain";
    public const RECIPIENT_OBJECT_ID = "recipientObjectId";
    public const PROCESS_ACCOUNT_OBJECT_ID = "processAccountObjectId";
    public const INITIATING_ACCOUNT_SID = "initiatingAccountSid";
    public const INITIATING_PROCESS_ACCOUNT_UPN = "initiatingProcessAccountUpn";
    public const INITIATING_ACCOUNT_NAME = "initiatingAccountName";
    public const INITIATING_ACCOUNT_DOMAIN = "initiatingAccountDomain";
    public const SERVICE_PRINCIPAL_ID = "servicePrincipalId";
    public const SERVICE_PRINCIPAL_NAME = "servicePrincipalName";
    public const TARGET_ACCOUNT_UPN = "targetAccountUpn";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

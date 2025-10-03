<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\Partner\Security;

use Microsoft\Kiota\Abstractions\Enum;

class SecurityRequirementType extends Enum {
    public const MFA_ENFORCED_FOR_ADMINS = "mfaEnforcedForAdmins";
    public const MFA_ENFORCED_FOR_ADMINS_OF_CUSTOMERS = "mfaEnforcedForAdminsOfCustomers";
    public const SECURITY_ALERTS_PROMPTLY_RESOLVED = "securityAlertsPromptlyResolved";
    public const SECURITY_CONTACT_PROVIDED = "securityContactProvided";
    public const SPENDING_BUDGET_SET_FOR_CUSTOMER_AZURE_SUBSCRIPTIONS = "spendingBudgetSetForCustomerAzureSubscriptions";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ExpirationRequirement extends Enum {
    public const REMEMBER_MULTIFACTOR_AUTHENTICATION_ON_TRUSTED_DEVICES = 'rememberMultifactorAuthenticationOnTrustedDevices';
    public const TENANT_TOKEN_LIFETIME_POLICY = 'tenantTokenLifetimePolicy';
    public const AUDIENCE_TOKEN_LIFETIME_POLICY = 'audienceTokenLifetimePolicy';
    public const SIGN_IN_FREQUENCY_PERIODIC_REAUTHENTICATION = 'signInFrequencyPeriodicReauthentication';
    public const NGC_MFA = 'ngcMfa';
    public const SIGN_IN_FREQUENCY_EVERY_TIME = 'signInFrequencyEveryTime';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

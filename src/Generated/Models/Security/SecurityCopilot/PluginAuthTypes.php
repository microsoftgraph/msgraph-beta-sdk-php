<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\Security\SecurityCopilot;

use Microsoft\Kiota\Abstractions\Enum;

class PluginAuthTypes extends Enum {
    public const NONE = "none";
    public const BASIC = "basic";
    public const A_P_I_KEY = "aPIKey";
    public const O_AUTH_AUTHORIZATION_CODE_FLOW = "oAuthAuthorizationCodeFlow";
    public const O_AUTH_CLIENT_CREDENTIALS_FLOW = "oAuthClientCredentialsFlow";
    public const AAD = "aad";
    public const SERVICE_HTTP = "serviceHttp";
    public const AAD_DELEGATED = "aadDelegated";
    public const O_AUTH_PASSWORD_GRANT_FLOW = "oAuthPasswordGrantFlow";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

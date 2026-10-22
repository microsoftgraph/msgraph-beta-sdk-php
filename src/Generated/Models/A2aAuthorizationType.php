<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class A2aAuthorizationType extends Enum {
    public const NONE = "none";
    public const O_AUTH_PLUGIN_VAULT = "oAuthPluginVault";
    public const API_KEY_PLUGIN_VAULT = "apiKeyPluginVault";
    public const DYNAMIC_CLIENT_REGISTRATION = "dynamicClientRegistration";
    public const CONNECTION_VAULT = "connectionVault";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

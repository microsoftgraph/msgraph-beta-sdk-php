<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ConditionalAccessConditions extends Enum {
    public const NONE = "none";
    public const APPLICATION = "application";
    public const USERS = "users";
    public const DEVICE_PLATFORM = "devicePlatform";
    public const LOCATION = "location";
    public const CLIENT_TYPE = "clientType";
    public const SIGN_IN_RISK = "signInRisk";
    public const USER_RISK = "userRisk";
    public const TIME = "time";
    public const DEVICE_STATE = "deviceState";
    public const CLIENT = "client";
    public const IP_ADDRESS_SEEN_BY_AZURE_A_D = "ipAddressSeenByAzureAD";
    public const IP_ADDRESS_SEEN_BY_RESOURCE_PROVIDER = "ipAddressSeenByResourceProvider";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    public const SERVICE_PRINCIPALS = "servicePrincipals";
    public const SERVICE_PRINCIPAL_RISK = "servicePrincipalRisk";
    public const AUTHENTICATION_FLOWS = "authenticationFlows";
    public const INSIDER_RISK = "insiderRisk";
}

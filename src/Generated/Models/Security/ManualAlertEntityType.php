<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class ManualAlertEntityType extends Enum {
    public const USER = "user";
    public const DEVICE = "device";
    public const FILE = "file";
    public const IP = "ip";
    public const URL = "url";
    public const CLOUD_APPLICATION = "cloudApplication";
    public const MAILBOX = "mailbox";
    public const SECURITY_GROUP = "securityGroup";
    public const AZURE_RESOURCE = "azureResource";
    public const AMAZON_RESOURCE = "amazonResource";
    public const GOOGLE_CLOUD_RESOURCE = "googleCloudResource";
    public const O_AUTH_APPLICATION = "oAuthApplication";
    public const EMAIL_MESSAGE = "emailMessage";
    public const EMAIL_CLUSTER = "emailCluster";
    public const PROCESS = "process";
    public const REGISTRY_KEY = "registryKey";
    public const REGISTRY_VALUE = "registryValue";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

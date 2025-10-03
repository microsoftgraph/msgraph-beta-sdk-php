<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DeviceManagementConfigurationAzureAdTrustType extends Enum {
    public const NONE = "none";
    public const AZURE_AD_JOINED = "azureAdJoined";
    public const ADD_WORK_ACCOUNT = "addWorkAccount";
    public const MDM_ONLY = "mdmOnly";
}

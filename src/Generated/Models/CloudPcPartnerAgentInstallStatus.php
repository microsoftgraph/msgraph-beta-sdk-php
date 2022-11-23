<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CloudPcPartnerAgentInstallStatus extends Enum {
    public const INSTALLED = 'installed';
    public const INSTALL_FAILED = 'installFailed';
    public const INSTALLING = 'installing';
    public const UNINSTALLING = 'uninstalling';
    public const UNINSTALL_FAILED = 'uninstallFailed';
    public const LICENSED = 'licensed';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

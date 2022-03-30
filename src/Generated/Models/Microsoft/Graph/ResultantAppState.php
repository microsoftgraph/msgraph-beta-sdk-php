<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Enum;

class ResultantAppState extends Enum {
    public const NOT_APPLICABLE = 'notApplicable';
    public const INSTALLED = 'installed';
    public const FAILED = 'failed';
    public const NOT_INSTALLED = 'notInstalled';
    public const UNINSTALL_FAILED = 'uninstallFailed';
    public const PENDING_INSTALL = 'pendingInstall';
    public const UNKNOWN = 'unknown';
}

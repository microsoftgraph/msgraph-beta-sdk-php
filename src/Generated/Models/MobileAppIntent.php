<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class MobileAppIntent extends Enum {
    public const AVAILABLE = 'available';
    public const NOT_AVAILABLE = 'notAvailable';
    public const REQUIRED_INSTALL = 'requiredInstall';
    public const REQUIRED_UNINSTALL = 'requiredUninstall';
    public const REQUIRED_AND_AVAILABLE_INSTALL = 'requiredAndAvailableInstall';
    public const AVAILABLE_INSTALL_WITHOUT_ENROLLMENT = 'availableInstallWithoutEnrollment';
    public const EXCLUDE = 'exclude';
}

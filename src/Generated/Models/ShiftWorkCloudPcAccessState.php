<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ShiftWorkCloudPcAccessState extends Enum {
    public const UNASSIGNED = 'unassigned';
    public const NO_LICENSES_AVAILABLE = 'noLicensesAvailable';
    public const ACTIVATION_FAILED = 'activationFailed';
    public const ACTIVE = 'active';
    public const ACTIVATING = 'activating';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
    public const STANDBY_MODE = 'standbyMode';
}

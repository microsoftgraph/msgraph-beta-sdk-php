<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Enum;

class ConfigurationManagerActionType extends Enum {
    public const REFRESH_MACHINE_POLICY = 'refreshMachinePolicy';
    public const REFRESH_USER_POLICY = 'refreshUserPolicy';
    public const WAKE_UP_CLIENT = 'wakeUpClient';
    public const APP_EVALUATION = 'appEvaluation';
    public const QUICK_SCAN = 'quickScan';
    public const FULL_SCAN = 'fullScan';
    public const WINDOWS_DEFENDER_UPDATE_SIGNATURES = 'windowsDefenderUpdateSignatures';
}

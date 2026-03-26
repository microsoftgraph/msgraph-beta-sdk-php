<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ActivityLogOperationType extends Enum {
    public const BACKUP_POLICY_CREATED = "backupPolicyCreated";
    public const BACKUP_POLICY_ACTIVATED = "backupPolicyActivated";
    public const BACKUP_POLICY_MODIFIED = "backupPolicyModified";
    public const BACKUP_POLICY_PAUSED = "backupPolicyPaused";
    public const BACKUP_POLICY_RENAMED = "backupPolicyRenamed";
    public const DYNAMIC_RULE_EXECUTION = "dynamicRuleExecution";
    public const DYNAMIC_RULE_DELETION = "dynamicRuleDeletion";
    public const PROTECTION_UNIT_LEVEL_OFFBOARDING = "protectionUnitLevelOffboarding";
    public const POLICY_LEVEL_OFFBOARDING = "policyLevelOffboarding";
    public const RESTORE_TASK_CREATED = "restoreTaskCreated";
    public const RESTORE_TASK_COMPLETED = "restoreTaskCompleted";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

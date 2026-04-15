<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class MigrationState extends Enum {
    public const READY_FOR_MIGRATION = "readyForMigration";
    public const NOT_READY_FOR_MIGRATION = "notReadyForMigration";
    public const UP_TO_DATE = "upToDate";
    public const MIGRATION_FAILED = "migrationFailed";
    public const MIGRATING = "migrating";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

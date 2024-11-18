<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class OfficeUpdateChannel extends Enum {
    public const NONE = "none";
    public const CURRENT = "current";
    public const DEFERRED = "deferred";
    public const FIRST_RELEASE_CURRENT = "firstReleaseCurrent";
    public const FIRST_RELEASE_DEFERRED = "firstReleaseDeferred";
    public const MONTHLY_ENTERPRISE = "monthlyEnterprise";
}

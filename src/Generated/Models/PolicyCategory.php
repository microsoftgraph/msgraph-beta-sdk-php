<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PolicyCategory extends Enum {
    public const NOT_SPECIFIED = "notSpecified";
    public const WORKLOAD_IDENTITY = "workloadIdentity";
    public const IDENTITY_AND_TENANT = "identityAndTenant";
    public const PRIVILEGED_ACCESS = "privilegedAccess";
    public const ZERO_TRUST = "zeroTrust";
    public const AGENTIC_IDENTITY = "agenticIdentity";
    public const NETWORK_ACCESS = "networkAccess";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

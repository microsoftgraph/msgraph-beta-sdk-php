<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use Microsoft\Kiota\Abstractions\Enum;

class LifecyclePolicyImpactActionType extends Enum {
    public const OBJECT_COVERED_BY_POLICY = "objectCoveredByPolicy";
    public const ATTESTATION_NEEDED_WARNING = "attestationNeededWarning";
    public const ATTESTATION_NEEDED_NOTIFICATION_SENT = "attestationNeededNotificationSent";
    public const DISABLED_DUE_TO_ATTESTATION_NON_COMPLIANCE = "disabledDueToAttestationNonCompliance";
    public const DELETED_DUE_TO_ATTESTATION_NON_COMPLIANCE = "deletedDueToAttestationNonCompliance";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

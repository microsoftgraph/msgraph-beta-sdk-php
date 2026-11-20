<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ProvenanceAssertionType extends Enum {
    public const IDENTITY_VERIFICATION = "identityVerification";
    public const DERIVED_FROM_CREDENTIAL = "derivedFromCredential";
    public const MANUAL_ATTESTATION = "manualAttestation";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

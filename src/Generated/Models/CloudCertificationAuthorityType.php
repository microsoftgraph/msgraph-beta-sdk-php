<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CloudCertificationAuthorityType extends Enum {
    public const UNKNOWN = "unknown";
    public const ROOT_CERTIFICATION_AUTHORITY = "rootCertificationAuthority";
    public const ISSUING_CERTIFICATION_AUTHORITY = "issuingCertificationAuthority";
    public const ISSUING_CERTIFICATION_AUTHORITY_WITH_EXTERNAL_ROOT = "issuingCertificationAuthorityWithExternalRoot";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

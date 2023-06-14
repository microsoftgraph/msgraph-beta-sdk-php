<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AppKeyCredentialRestrictionType extends Enum {
    public const ASYMMETRIC_KEY_LIFETIME = 'asymmetricKeyLifetime';
    public const TRUSTED_CERTIFICATE_AUTHORITY = 'trustedCertificateAuthority';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ConnectorHealthCheckMetricName extends Enum {
    public const CA_CONNECTIVITY = "caConnectivity";
    public const CA_ISSUANCE_PERMISSIONS = "caIssuancePermissions";
    public const CA_REVOCATION_PERMISSIONS = "caRevocationPermissions";
    public const CERTIFICATE_TEMPLATE = "certificateTemplate";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

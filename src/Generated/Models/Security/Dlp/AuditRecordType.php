<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\Dlp;

use Microsoft\Kiota\Abstractions\Enum;

class AuditRecordType extends Enum {
    public const UNKNOWN = "unknown";
    public const SHARE_POINT_FILE_OPERATION = "sharePointFileOperation";
    public const COMPLIANCE_DLP_SHARE_POINT = "complianceDlpSharePoint";
    public const COMPLIANCE_DLP_EXCHANGE = "complianceDlpExchange";
    public const DLP_ENDPOINT = "dlpEndpoint";
    public const COMPLIANCE_DLP_ENDPOINT = "complianceDlpEndpoint";
    public const POWER_BI_DLP = "powerBiDlp";
    public const COMPLIANCE_DLP_APPLICATIONS = "complianceDlpApplications";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

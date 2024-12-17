<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use Microsoft\Kiota\Abstractions\Enum;

class AlertType extends Enum {
    public const UNHEALTHY_REMOTE_NETWORKS = "unhealthyRemoteNetworks";
    public const UNHEALTHY_CONNECTORS = "unhealthyConnectors";
    public const DEVICE_TOKEN_INCONSISTENCY = "deviceTokenInconsistency";
    public const CROSS_TENANT_ANOMALY = "crossTenantAnomaly";
    public const SUSPICIOUS_PROCESS = "suspiciousProcess";
    public const THREAT_INTELLIGENCE_TRANSACTIONS = "threatIntelligenceTransactions";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    public const WEB_CONTENT_BLOCKED = "webContentBlocked";
    public const MALWARE = "malware";
    public const PATIENT_ZERO = "patientZero";
    public const DLP = "dlp";
}

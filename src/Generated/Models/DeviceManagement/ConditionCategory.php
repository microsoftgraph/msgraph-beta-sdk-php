<?php

namespace Microsoft\Graph\Beta\Generated\Models\DeviceManagement;

use Microsoft\Kiota\Abstractions\Enum;

class ConditionCategory extends Enum {
    public const PROVISION_FAILURES = "provisionFailures";
    public const IMAGE_UPLOAD_FAILURES = "imageUploadFailures";
    public const AZURE_NETWORK_CONNECTION_CHECK_FAILURES = "azureNetworkConnectionCheckFailures";
    public const CLOUD_PC_IN_GRACE_PERIOD = "cloudPcInGracePeriod";
    public const FRONTLINE_INSUFFICIENT_LICENSES = "frontlineInsufficientLicenses";
    public const CLOUD_PC_CONNECTION_ERRORS = "cloudPcConnectionErrors";
    public const CLOUD_PC_HOST_HEALTH_CHECK_FAILURES = "cloudPcHostHealthCheckFailures";
    public const CLOUD_PC_ZONE_OUTAGE = "cloudPcZoneOutage";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    public const FRONTLINE_BUFFER_USAGE_DURATION = "frontlineBufferUsageDuration";
    public const FRONTLINE_BUFFER_USAGE_THRESHOLD = "frontlineBufferUsageThreshold";
    public const CLOUD_PC_USER_SETTINGS_PERSISTENCE_USAGE_THRESHOLD = "cloudPcUserSettingsPersistenceUsageThreshold";
    public const CLOUD_PC_DEPROVISIONED_THRESHOLD = "cloudPcDeprovisionedThreshold";
    public const CLOUD_PC_RESERVE_DEPROVISION_FAILED_THRESHOLD = "cloudPcReserveDeprovisionFailedThreshold";
}

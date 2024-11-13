<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CloudPCFrontlineReportType extends Enum {
    public const NO_LICENSE_AVAILABLE_CONNECTIVITY_FAILURE_REPORT = 'noLicenseAvailableConnectivityFailureReport';
    public const LICENSE_USAGE_REPORT = 'licenseUsageReport';
    public const LICENSE_USAGE_REAL_TIME_REPORT = 'licenseUsageRealTimeReport';
    public const LICENSE_HOURLY_USAGE_REPORT = 'licenseHourlyUsageReport';
    public const CONNECTED_USER_REALTIME_REPORT = 'connectedUserRealtimeReport';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

<?php

namespace Microsoft\Graph\Beta\Generated\Models\DeviceManagement;

use Microsoft\Kiota\Abstractions\Enum;

class AlertRuleTemplate extends Enum {
    public const CLOUD_PC_PROVISION_SCENARIO = 'cloudPcProvisionScenario';
    public const CLOUD_PC_IMAGE_UPLOAD_SCENARIO = 'cloudPcImageUploadScenario';
    public const CLOUD_PC_ON_PREMISE_NETWORK_CONNECTION_CHECK_SCENARIO = 'cloudPcOnPremiseNetworkConnectionCheckScenario';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
    public const CLOUD_PC_IN_GRACE_PERIOD_SCENARIO = 'cloudPcInGracePeriodScenario';
}

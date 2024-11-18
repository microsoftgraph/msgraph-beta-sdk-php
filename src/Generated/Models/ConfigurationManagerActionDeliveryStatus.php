<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ConfigurationManagerActionDeliveryStatus extends Enum {
    public const UNKNOWN = "unknown";
    public const PENDING_DELIVERY = "pendingDelivery";
    public const DELIVERED_TO_CONNECTOR_SERVICE = "deliveredToConnectorService";
    public const FAILED_TO_DELIVER_TO_CONNECTOR_SERVICE = "failedToDeliverToConnectorService";
    public const DELIVERED_TO_ON_PREMISES_SERVER = "deliveredToOnPremisesServer";
}

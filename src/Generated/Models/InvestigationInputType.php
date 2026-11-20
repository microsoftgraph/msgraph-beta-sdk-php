<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class InvestigationInputType extends Enum {
    public const DEFENDER_INCIDENT_ID = "defenderIncidentId";
    public const DEFENDER_ALERT_ID = "defenderAlertId";
    public const DEFENDER_THREAT_INTELLIGENCE_ID = "defenderThreatIntelligenceId";
    public const AZURE_SUBSCRIPTION_ID = "azureSubscriptionId";
    public const AZURE_IDENTITY_ID = "azureIdentityId";
    public const KEYWORD = "keyword";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

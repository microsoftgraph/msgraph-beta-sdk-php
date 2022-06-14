<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class BitLockerRecoveryPasswordRotationType extends Enum {
    public const NOT_CONFIGURED = 'notConfigured';
    public const DISABLED = 'disabled';
    public const ENABLED_FOR_AZURE_AD = 'enabledForAzureAd';
    public const ENABLED_FOR_AZURE_AD_AND_HYBRID = 'enabledForAzureAdAndHybrid';
}

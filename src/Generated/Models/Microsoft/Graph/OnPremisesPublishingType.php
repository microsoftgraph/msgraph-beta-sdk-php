<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Enum;

class OnPremisesPublishingType extends Enum {
    public const APPLICATION_PROXY = 'applicationProxy';
    public const EXCHANGE_ONLINE = 'exchangeOnline';
    public const AUTHENTICATION = 'authentication';
    public const PROVISIONING = 'provisioning';
    public const INTUNE_PFX = 'intunePfx';
    public const OFLINE_DOMAIN_JOIN = 'oflineDomainJoin';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

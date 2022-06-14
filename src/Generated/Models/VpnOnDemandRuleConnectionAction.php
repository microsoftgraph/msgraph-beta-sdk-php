<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class VpnOnDemandRuleConnectionAction extends Enum {
    public const CONNECT = 'connect';
    public const EVALUATE_CONNECTION = 'evaluateConnection';
    public const IGNORE = 'ignore';
    public const DISCONNECT = 'disconnect';
}

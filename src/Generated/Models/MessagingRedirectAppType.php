<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class MessagingRedirectAppType extends Enum {
    public const ANY_APP = 'anyApp';
    public const ANY_MANAGED_APP = 'anyManagedApp';
    public const SPECIFIC_APPS = 'specificApps';
    public const BLOCKED = 'blocked';
}

<?php

namespace Microsoft\Graph\Beta\Generated\Models\DeviceManagement;

use Microsoft\Kiota\Abstractions\Enum;

class NotificationChannelType extends Enum {
    public const PORTAL = 'portal';
    public const EMAIL = 'email';
    public const PHONE_CALL = 'phoneCall';
    public const SMS = 'sms';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

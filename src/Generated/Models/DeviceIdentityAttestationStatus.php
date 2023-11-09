<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DeviceIdentityAttestationStatus extends Enum {
    public const UNKNOWN = 'unknown';
    public const TRUSTED = 'trusted';
    public const UN_TRUSTED = 'unTrusted';
    public const NOT_SUPPORTED = 'notSupported';
    public const INCOMPLETE_DATA = 'incompleteData';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class SharingScope extends Enum {
    public const ANYONE = 'anyone';
    public const ORGANIZATION = 'organization';
    public const SPECIFIC_PEOPLE = 'specificPeople';
    public const ANONYMOUS = 'anonymous';
    public const USERS = 'users';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ClaimConditionUserType extends Enum {
    public const ANY = 'any';
    public const MEMBERS = 'members';
    public const ALL_GUESTS = 'allGuests';
    public const AAD_GUESTS = 'aadGuests';
    public const EXTERNAL_GUESTS = 'externalGuests';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class EnrollmentTimeDeviceMembershipTargetValidationErrorCode extends Enum {
    public const UNKNOWN = 'unknown';
    public const SECURITY_GROUP_NOT_FOUND = 'securityGroupNotFound';
    public const NOT_SECURITY_GROUP = 'notSecurityGroup';
    public const NOT_STATIC_SECURITY_GROUP = 'notStaticSecurityGroup';
    public const FIRST_PARTY_APP_NOT_AN_OWNER = 'firstPartyAppNotAnOwner';
    public const SECURITY_GROUP_NOT_IN_CALLER_SCOPE = 'securityGroupNotInCallerScope';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

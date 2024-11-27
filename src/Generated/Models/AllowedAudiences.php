<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AllowedAudiences extends Enum {
    public const ME = "me";
    public const FAMILY = "family";
    public const CONTACTS = "contacts";
    public const GROUP_MEMBERS = "groupMembers";
    public const ORGANIZATION = "organization";
    public const FEDERATED_ORGANIZATIONS = "federatedOrganizations";
    public const EVERYONE = "everyone";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

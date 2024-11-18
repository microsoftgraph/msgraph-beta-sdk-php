<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ConditionalAccessAudienceReason extends Enum {
    public const NONE = "none";
    public const RESOURCELESS_REQUEST = "resourcelessRequest";
    public const CONFIDENTIAL_CLIENT_ID_TOKEN = "confidentialClientIdToken";
    public const CONFIDENTIAL_CLIENT_NON_ID_TOKEN = "confidentialClientNonIdToken";
    public const RESOURCE_MAPPING = "resourceMapping";
    public const RESOURCE_MAPPING_DEFAULT = "resourceMappingDefault";
    public const SCOPE_MAPPING = "scopeMapping";
    public const SCOPE_MAPPING_DEFAULT = "scopeMappingDefault";
    public const DELEGATED_SCOPE = "delegatedScope";
    public const FIRST_PARTY_RESOURCE_DEFAULT = "firstPartyResourceDefault";
    public const THIRD_PARTY_RESOURCE_DEFAULT = "thirdPartyResourceDefault";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

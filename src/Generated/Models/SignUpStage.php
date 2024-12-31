<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class SignUpStage extends Enum {
    public const CREDENTIAL_COLLECTION = "credentialCollection";
    public const CREDENTIAL_VALIDATION = "credentialValidation";
    public const CREDENTIAL_FEDERATION = "credentialFederation";
    public const CONSENT = "consent";
    public const ATTRIBUTE_COLLECTION_AND_VALIDATION = "attributeCollectionAndValidation";
    public const USER_CREATION = "userCreation";
    public const TENANT_CONSENT = "tenantConsent";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

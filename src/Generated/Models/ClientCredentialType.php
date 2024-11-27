<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ClientCredentialType extends Enum {
    public const NONE = "none";
    public const CLIENT_SECRET = "clientSecret";
    public const CLIENT_ASSERTION = "clientAssertion";
    public const FEDERATED_IDENTITY_CREDENTIAL = "federatedIdentityCredential";
    public const MANAGED_IDENTITY = "managedIdentity";
    public const CERTIFICATE = "certificate";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

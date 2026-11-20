<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class EvaluationErrorType extends Enum {
    public const UNSUPPORTED_FILE = "unsupportedFile";
    public const PASSWORD_PROTECTED_FILE = "passwordProtectedFile";
    public const MISSING_OR_INVALID_CONFIGURATION = "missingOrInvalidConfiguration";
    public const AGENT_FAILURE = "agentFailure";
    public const ENFORCEMENT_TIMEOUT = "enforcementTimeout";
    public const OS_OVERRIDE = "osOverride";
    public const PROCESS_NON_EXISTENT = "processNonExistent";
    public const OTHER = "other";
    public const SERVICE_TIMEOUT = "serviceTimeout";
    public const SERVICE_ERROR = "serviceError";
    public const SERVICE_UNAVAILABLE = "serviceUnavailable";
    public const CONTENT_TOO_LARGE = "contentTooLarge";
    public const PARTIALLY_SCANNED = "partiallyScanned";
    public const UNSCANNABLE = "unscannable";
    public const BILLING_NOT_SETUP = "billingNotSetup";
    public const AUTHENTICATION_OR_AUTHORIZATION_FAILED = "authenticationOrAuthorizationFailed";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

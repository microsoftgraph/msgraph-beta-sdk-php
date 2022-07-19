<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class SubmissionResultCategory extends Enum {
    public const NOT_JUNK = 'notJunk';
    public const SPAM = 'spam';
    public const PHISHING = 'phishing';
    public const MALWARE = 'malware';
    public const ALLOWED_BY_POLICY = 'allowedByPolicy';
    public const BLOCKED_BY_POLICY = 'blockedByPolicy';
    public const SPOOF = 'spoof';
    public const UNKNOWN = 'unknown';
    public const NO_RESULT_AVAILABLE = 'noResultAvailable';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

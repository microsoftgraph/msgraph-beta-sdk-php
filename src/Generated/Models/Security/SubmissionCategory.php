<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class SubmissionCategory extends Enum {
    public const NOT_JUNK = 'notJunk';
    public const SPAM = 'spam';
    public const PHISHING = 'phishing';
    public const MALWARE = 'malware';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CertificateIssuanceStates extends Enum {
    public const UNKNOWN = 'unknown';
    public const CHALLENGE_ISSUED = 'challengeIssued';
    public const CHALLENGE_ISSUE_FAILED = 'challengeIssueFailed';
    public const REQUEST_CREATION_FAILED = 'requestCreationFailed';
    public const REQUEST_SUBMIT_FAILED = 'requestSubmitFailed';
    public const CHALLENGE_VALIDATION_SUCCEEDED = 'challengeValidationSucceeded';
    public const CHALLENGE_VALIDATION_FAILED = 'challengeValidationFailed';
    public const ISSUE_FAILED = 'issueFailed';
    public const ISSUE_PENDING = 'issuePending';
    public const ISSUED = 'issued';
    public const RESPONSE_PROCESSING_FAILED = 'responseProcessingFailed';
    public const RESPONSE_PENDING = 'responsePending';
    public const ENROLLMENT_SUCCEEDED = 'enrollmentSucceeded';
    public const ENROLLMENT_NOT_NEEDED = 'enrollmentNotNeeded';
    public const REVOKED = 'revoked';
    public const REMOVED_FROM_COLLECTION = 'removedFromCollection';
    public const RENEW_VERIFIED = 'renewVerified';
    public const INSTALL_FAILED = 'installFailed';
    public const INSTALLED = 'installed';
    public const DELETE_FAILED = 'deleteFailed';
    public const DELETED = 'deleted';
    public const RENEWAL_REQUESTED = 'renewalRequested';
    public const REQUESTED = 'requested';
}

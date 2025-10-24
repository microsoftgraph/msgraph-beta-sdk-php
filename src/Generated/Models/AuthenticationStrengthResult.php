<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AuthenticationStrengthResult extends Enum {
    public const NOT_SET = "notSet";
    public const SKIPPED_FOR_PROOF_UP = "skippedForProofUp";
    public const SATISFIED = "satisfied";
    public const SINGLE_CHALLENGE_REQUIRED = "singleChallengeRequired";
    public const MULTIPLE_CHALLENGES_REQUIRED = "multipleChallengesRequired";
    public const SINGLE_REGISTRATION_REQUIRED = "singleRegistrationRequired";
    public const MULTIPLE_REGISTRATIONS_REQUIRED = "multipleRegistrationsRequired";
    public const CANNOT_SATISFY_DUE_TO_COMBINATION_CONFIGURATION = "cannotSatisfyDueToCombinationConfiguration";
    public const CANNOT_SATISFY = "cannotSatisfy";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

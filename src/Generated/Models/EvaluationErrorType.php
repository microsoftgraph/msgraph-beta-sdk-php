<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class EvaluationErrorType extends Enum {
    public const UNSUPPORTED_FILE = "unsupportedFile";
    public const PASSWORD_PROTECTED_FILE = "passwordProtectedFile";
    public const FILE_TOO_LARGE = "fileTooLarge";
    public const ARCHIVE_SIZE_TOO_LARGE = "archiveSizeTooLarge";
    public const TEXT_EXCEEDS_MCE_THRESHOLD = "textExceedsMceThreshold";
    public const PARTIALLY_SCANNED_ARCHIVE = "partiallyScannedArchive";
    public const PARTIAL_IMAGE_EXTRACTION = "partialImageExtraction";
    public const IMAGE_OCR_PARTIAL_RESULT = "imageOcrPartialResult";
    public const OCR_PROCESSING_FAILURE = "ocrProcessingFailure";
    public const OCR_QUOTA_EXHAUSTED = "ocrQuotaExhausted";
    public const CLASSIFICATION_SERVICE_ERROR = "classificationServiceError";
    public const SIT_EXTRACTION_FAILURE = "sitExtractionFailure";
    public const TEXT_EXTRACTION_FAILURE = "textExtractionFailure";
    public const ARCHIVE_TEXT_EXTRACTION_ERROR = "archiveTextExtractionError";
    public const MISSING_OR_INVALID_CONFIGURATION = "missingOrInvalidConfiguration";
    public const AGENT_FAILURE = "agentFailure";
    public const ENFORCEMENT_TIMEOUT = "enforcementTimeout";
    public const OS_OVERRIDE = "osOverride";
    public const PROCESS_NON_EXISTENT = "processNonExistent";
    public const OTHER = "other";
    public const SERVICE_TIMEOUT = "serviceTimeout";
    public const SERVICE_ERROR = "serviceError";
    public const SERVICE_UNAVAILABLE = "serviceUnavailable";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

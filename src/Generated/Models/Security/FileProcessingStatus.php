<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class FileProcessingStatus extends Enum {
    public const SUCCESS = 'success';
    public const INTERNAL_ERROR = 'internalError';
    public const UNKNOWN_ERROR = 'unknownError';
    public const PROCESSING_TIMEOUT = 'processingTimeout';
    public const INVALID_FILE_ID = 'invalidFileId';
    public const FILE_SIZE_IS_ZERO = 'fileSizeIsZero';
    public const FILE_SIZE_IS_TOO_LARGE = 'fileSizeIsTooLarge';
    public const FILE_DEPTH_LIMIT_EXCEEDED = 'fileDepthLimitExceeded';
    public const FILE_BODY_IS_TOO_LONG = 'fileBodyIsTooLong';
    public const FILE_TYPE_IS_UNKNOWN = 'fileTypeIsUnknown';
    public const FILE_TYPE_IS_NOT_SUPPORTED = 'fileTypeIsNotSupported';
    public const MALFORMED_FILE = 'malformedFile';
    public const PROTECTED_FILE = 'protectedFile';
    public const POISON_FILE = 'poisonFile';
    public const NO_REVIEW_SET_SUMMARY_GENERATED = 'noReviewSetSummaryGenerated';
    public const EXTRACTION_EXCEPTION = 'extractionException';
    public const OCR_PROCESSING_TIMEOUT = 'ocrProcessingTimeout';
    public const OCR_FILE_SIZE_EXCEEDS_LIMIT = 'ocrFileSizeExceedsLimit';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}

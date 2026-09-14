<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\CaseManagement;

use Microsoft\Kiota\Abstractions\Enum;

class AuditAction extends Enum {
    public const LINK = "link";
    public const UNLINK = "unlink";
    public const UPDATE = "update";
    public const DELETE = "delete";
    public const CREATE = "create";
    public const UPLOAD = "upload";
    public const DOWNLOAD = "download";
    public const FILE_UPLOAD_MALWARE_DETECTED = "fileUploadMalwareDetected";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

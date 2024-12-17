<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class TrafficType extends Enum {
    public const DOWNLOADED_BYTES = "downloadedBytes";
    public const UPLOADED_BYTES = "uploadedBytes";
    public const UNKNOWN = "unknown";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

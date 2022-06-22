<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class MacOSSoftwareUpdateBehavior extends Enum {
    public const NOT_CONFIGURED = 'notConfigured';
    public const ESCAPED_DEFAULT = 'default';
    public const DOWNLOAD_ONLY = 'downloadOnly';
    public const INSTALL_A_S_A_P = 'installASAP';
    public const NOTIFY_ONLY = 'notifyOnly';
    public const INSTALL_LATER = 'installLater';
}

<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class MacOSSoftwareUpdateState extends Enum {
    public const SUCCESS = 'success';
    public const DOWNLOADING = 'downloading';
    public const DOWNLOADED = 'downloaded';
    public const INSTALLING = 'installing';
    public const IDLE = 'idle';
    public const AVAILABLE = 'available';
    public const SCHEDULED = 'scheduled';
    public const DOWNLOAD_FAILED = 'downloadFailed';
    public const DOWNLOAD_INSUFFICIENT_SPACE = 'downloadInsufficientSpace';
    public const DOWNLOAD_INSUFFICIENT_POWER = 'downloadInsufficientPower';
    public const DOWNLOAD_INSUFFICIENT_NETWORK = 'downloadInsufficientNetwork';
    public const INSTALL_INSUFFICIENT_SPACE = 'installInsufficientSpace';
    public const INSTALL_INSUFFICIENT_POWER = 'installInsufficientPower';
    public const INSTALL_FAILED = 'installFailed';
    public const COMMAND_FAILED = 'commandFailed';
}

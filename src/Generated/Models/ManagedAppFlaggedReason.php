<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ManagedAppFlaggedReason extends Enum {
    public const NONE = 'none';
    public const ROOTED_DEVICE = 'rootedDevice';
    public const ANDROID_BOOTLOADER_UNLOCKED = 'androidBootloaderUnlocked';
    public const ANDROID_FACTORY_ROM_MODIFIED = 'androidFactoryRomModified';
}

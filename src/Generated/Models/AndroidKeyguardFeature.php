<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AndroidKeyguardFeature extends Enum {
    public const NOT_CONFIGURED = 'notConfigured';
    public const CAMERA = 'camera';
    public const NOTIFICATIONS = 'notifications';
    public const UNREDACTED_NOTIFICATIONS = 'unredactedNotifications';
    public const TRUST_AGENTS = 'trustAgents';
    public const FINGERPRINT = 'fingerprint';
    public const REMOTE_INPUT = 'remoteInput';
    public const ALL_FEATURES = 'allFeatures';
    public const FACE = 'face';
    public const IRIS = 'iris';
    public const BIOMETRICS = 'biometrics';
}

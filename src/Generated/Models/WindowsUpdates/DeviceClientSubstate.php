<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Enum;

class DeviceClientSubstate extends Enum {
    public const DEFERRED = "deferred";
    public const OFFER_READY = "offerReady";
    public const PAUSED = "paused";
    public const OFFER_RECEIVED = "offerReceived";
    public const DOWNLOAD_START = "downloadStart";
    public const DOWNLOAD_COMPLETE = "downloadComplete";
    public const INSTALL_START = "installStart";
    public const INSTALL_COMPLETE = "installComplete";
    public const RESTART_REQUIRED = "restartRequired";
    public const RESTART_INITIATED = "restartInitiated";
    public const RESTART_COMPLETE = "restartComplete";
    public const UPDATE_INSTALLED = "updateInstalled";
    public const ROLLBACK_COMPLETE = "rollbackComplete";
    public const USER_CANCELLED = "userCancelled";
    public const DEVICE_CANCELLED = "deviceCancelled";
    public const UNINSTALL = "uninstall";
    public const ROLLBACK = "rollback";
    public const UPDATE_UNINSTALLED = "updateUninstalled";
    public const NOT_SUPPORTED = "notSupported";
    public const PREVIOUS_UPDATE_IN_PROGRESS = "previousUpdateInProgress";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PrinterProcessingStateReason extends Enum {
    public const PAUSED = "paused";
    public const MEDIA_JAM = "mediaJam";
    public const MEDIA_NEEDED = "mediaNeeded";
    public const MEDIA_LOW = "mediaLow";
    public const MEDIA_EMPTY = "mediaEmpty";
    public const COVER_OPEN = "coverOpen";
    public const INTERLOCK_OPEN = "interlockOpen";
    public const OUTPUT_TRAY_MISSING = "outputTrayMissing";
    public const OUTPUT_AREA_FULL = "outputAreaFull";
    public const MARKER_SUPPLY_LOW = "markerSupplyLow";
    public const MARKER_SUPPLY_EMPTY = "markerSupplyEmpty";
    public const INPUT_TRAY_MISSING = "inputTrayMissing";
    public const OUTPUT_AREA_ALMOST_FULL = "outputAreaAlmostFull";
    public const MARKER_WASTE_ALMOST_FULL = "markerWasteAlmostFull";
    public const MARKER_WASTE_FULL = "markerWasteFull";
    public const FUSER_OVER_TEMP = "fuserOverTemp";
    public const FUSER_UNDER_TEMP = "fuserUnderTemp";
    public const OTHER = "other";
    public const NONE = "none";
    public const MOVING_TO_PAUSED = "movingToPaused";
    public const SHUTDOWN = "shutdown";
    public const CONNECTING_TO_DEVICE = "connectingToDevice";
    public const TIMED_OUT = "timedOut";
    public const STOPPING = "stopping";
    public const STOPPED_PARTIALLY = "stoppedPartially";
    public const TONER_LOW = "tonerLow";
    public const TONER_EMPTY = "tonerEmpty";
    public const SPOOL_AREA_FULL = "spoolAreaFull";
    public const DOOR_OPEN = "doorOpen";
    public const OPTICAL_PHOTO_CONDUCTOR_NEAR_END_OF_LIFE = "opticalPhotoConductorNearEndOfLife";
    public const OPTICAL_PHOTO_CONDUCTOR_LIFE_OVER = "opticalPhotoConductorLifeOver";
    public const DEVELOPER_LOW = "developerLow";
    public const DEVELOPER_EMPTY = "developerEmpty";
    public const INTERPRETER_RESOURCE_UNAVAILABLE = "interpreterResourceUnavailable";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

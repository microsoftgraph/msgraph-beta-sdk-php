<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class WindowsAutopilotProfileAssignmentDetailedStatus extends Enum {
    public const NONE = "none";
    public const HARDWARE_REQUIREMENTS_NOT_MET = "hardwareRequirementsNotMet";
    public const SURFACE_HUB_PROFILE_NOT_SUPPORTED = "surfaceHubProfileNotSupported";
    public const HOLO_LENS_PROFILE_NOT_SUPPORTED = "holoLensProfileNotSupported";
    public const WINDOWS_PC_PROFILE_NOT_SUPPORTED = "windowsPcProfileNotSupported";
    public const SURFACE_HUB2_S_PROFILE_NOT_SUPPORTED = "surfaceHub2SProfileNotSupported";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

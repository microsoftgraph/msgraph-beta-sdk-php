<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class MicrosoftTunnelDeploymentMode extends Enum {
    public const STANDALONE_ROOTFUL = "standaloneRootful";
    public const STANDALONE_ROOTLESS = "standaloneRootless";
    public const POD_ROOTFUL = "podRootful";
    public const POD_ROOTLESS = "podRootless";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

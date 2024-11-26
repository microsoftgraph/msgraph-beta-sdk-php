<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use Microsoft\Kiota\Abstractions\Enum;

class RemoteNetworkStatus extends Enum {
    public const TUNNEL_DISCONNECTED = "tunnelDisconnected";
    public const TUNNEL_CONNECTED = "tunnelConnected";
    public const BGP_DISCONNECTED = "bgpDisconnected";
    public const BGP_CONNECTED = "bgpConnected";
    public const REMOTE_NETWORK_ALIVE = "remoteNetworkAlive";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}

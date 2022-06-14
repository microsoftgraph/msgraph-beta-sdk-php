<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class MacOSContentCachingPeerPolicy extends Enum {
    public const NOT_CONFIGURED = 'notConfigured';
    public const PEERS_IN_LOCAL_NETWORK = 'peersInLocalNetwork';
    public const PEERS_WITH_SAME_PUBLIC_IP_ADDRESS = 'peersWithSamePublicIpAddress';
    public const PEERS_IN_CUSTOM_LOCAL_NETWORKS = 'peersInCustomLocalNetworks';
}

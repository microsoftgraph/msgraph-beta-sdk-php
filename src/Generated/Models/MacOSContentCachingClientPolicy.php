<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class MacOSContentCachingClientPolicy extends Enum {
    public const NOT_CONFIGURED = 'notConfigured';
    public const CLIENTS_IN_LOCAL_NETWORK = 'clientsInLocalNetwork';
    public const CLIENTS_WITH_SAME_PUBLIC_IP_ADDRESS = 'clientsWithSamePublicIpAddress';
    public const CLIENTS_IN_CUSTOM_LOCAL_NETWORKS = 'clientsInCustomLocalNetworks';
    public const CLIENTS_IN_CUSTOM_LOCAL_NETWORKS_WITH_FALLBACK = 'clientsInCustomLocalNetworksWithFallback';
}

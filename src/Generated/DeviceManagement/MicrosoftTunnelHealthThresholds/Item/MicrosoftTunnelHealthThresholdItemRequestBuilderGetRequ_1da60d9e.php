<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\MicrosoftTunnelHealthThresholds\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: MicrosoftTunnelHealthThresholdItemRequestBuilderGetRequestConfiguration
*/
class MicrosoftTunnelHealthThresholdItemRequestBuilderGetRequ_1da60d9e extends BaseRequestConfiguration 
{
    /**
     * @var MicrosoftTunnelHealthThresholdItemRequestBuilderGetQuer_6c7fb12b|null $queryParameters Request query parameters
    */
    public ?MicrosoftTunnelHealthThresholdItemRequestBuilderGetQuer_6c7fb12b $queryParameters = null;
    
    /**
     * Instantiates a new MicrosoftTunnelHealthThresholdItemRequestBuilderGetRequ_1da60d9e and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MicrosoftTunnelHealthThresholdItemRequestBuilderGetQuer_6c7fb12b|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MicrosoftTunnelHealthThresholdItemRequestBuilderGetQuer_6c7fb12b $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MicrosoftTunnelHealthThresholdItemRequestBuilderGetQuer_6c7fb12b.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MicrosoftTunnelHealthThresholdItemRequestBuilderGetQuer_6c7fb12b
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MicrosoftTunnelHealthThresholdItemRequestBuilderGetQuer_6c7fb12b {
        return new MicrosoftTunnelHealthThresholdItemRequestBuilderGetQuer_6c7fb12b($expand, $select);
    }

}

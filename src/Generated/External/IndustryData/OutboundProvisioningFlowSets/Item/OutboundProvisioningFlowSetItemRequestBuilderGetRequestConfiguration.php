<?php

namespace Microsoft\\Graph\\Beta\\Generated\External\IndustryData\OutboundProvisioningFlowSets\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OutboundProvisioningFlowSetItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var OutboundProvisioningFlowSetItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?OutboundProvisioningFlowSetItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new OutboundProvisioningFlowSetItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param OutboundProvisioningFlowSetItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OutboundProvisioningFlowSetItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new OutboundProvisioningFlowSetItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return OutboundProvisioningFlowSetItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): OutboundProvisioningFlowSetItemRequestBuilderGetQueryParameters {
        return new OutboundProvisioningFlowSetItemRequestBuilderGetQueryParameters($expand, $select);
    }

}

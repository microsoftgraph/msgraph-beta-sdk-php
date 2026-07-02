<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagedTenantTicketingEndpoints\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: ManagedTenantTicketingEndpointItemRequestBuilderGetRequestConfiguration
*/
class ManagedTenantTicketingEndpointItemRequestBuilderGetRequ_a8f757e9 extends BaseRequestConfiguration 
{
    /**
     * @var ManagedTenantTicketingEndpointItemRequestBuilderGetQuer_a0176f13|null $queryParameters Request query parameters
    */
    public ?ManagedTenantTicketingEndpointItemRequestBuilderGetQuer_a0176f13 $queryParameters = null;
    
    /**
     * Instantiates a new ManagedTenantTicketingEndpointItemRequestBuilderGetRequ_a8f757e9 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ManagedTenantTicketingEndpointItemRequestBuilderGetQuer_a0176f13|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ManagedTenantTicketingEndpointItemRequestBuilderGetQuer_a0176f13 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ManagedTenantTicketingEndpointItemRequestBuilderGetQuer_a0176f13.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ManagedTenantTicketingEndpointItemRequestBuilderGetQuer_a0176f13
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ManagedTenantTicketingEndpointItemRequestBuilderGetQuer_a0176f13 {
        return new ManagedTenantTicketingEndpointItemRequestBuilderGetQuer_a0176f13($expand, $select);
    }

}

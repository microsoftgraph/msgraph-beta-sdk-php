<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\Tenants\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TenantItemRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<string, RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var TenantItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TenantItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}

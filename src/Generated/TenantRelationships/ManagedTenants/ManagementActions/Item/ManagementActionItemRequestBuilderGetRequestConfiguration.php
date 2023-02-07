<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementActions\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ManagementActionItemRequestBuilderGetRequestConfiguration 
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
     * @var ManagementActionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ManagementActionItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}

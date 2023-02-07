<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\TenantTags;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TenantTagsRequestBuilderGetRequestConfiguration 
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
     * @var TenantTagsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TenantTagsRequestBuilderGetQueryParameters $queryParameters = null;
    
}

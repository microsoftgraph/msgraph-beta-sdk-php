<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementIntents;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ManagementIntentsRequestBuilderGetRequestConfiguration 
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
     * @var ManagementIntentsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ManagementIntentsRequestBuilderGetQueryParameters $queryParameters = null;
    
}

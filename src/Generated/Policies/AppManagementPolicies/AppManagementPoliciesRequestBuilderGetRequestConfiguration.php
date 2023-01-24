<?php

namespace Microsoft\Graph\Beta\Generated\Policies\AppManagementPolicies;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AppManagementPoliciesRequestBuilderGetRequestConfiguration 
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
     * @var AppManagementPoliciesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AppManagementPoliciesRequestBuilderGetQueryParameters $queryParameters = null;
    
}

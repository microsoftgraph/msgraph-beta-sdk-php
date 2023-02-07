<?php

namespace Microsoft\Graph\Beta\Generated\Policies\ServicePrincipalCreationPolicies\Item\Includes\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ServicePrincipalCreationConditionSetItemRequestBuilderGetRequestConfiguration 
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
     * @var ServicePrincipalCreationConditionSetItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ServicePrincipalCreationConditionSetItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}

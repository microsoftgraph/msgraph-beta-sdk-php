<?php

namespace Microsoft\Graph\Beta\Generated\Security\AttackSimulation\Operations\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AttackSimulationOperationItemRequestBuilderGetRequestConfiguration 
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
     * @var AttackSimulationOperationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AttackSimulationOperationItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}

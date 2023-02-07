<?php

namespace Microsoft\Graph\Beta\Generated\Security\AttackSimulation\Payloads\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PayloadItemRequestBuilderGetRequestConfiguration 
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
     * @var PayloadItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PayloadItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}

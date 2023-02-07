<?php

namespace Microsoft\Graph\Beta\Generated\Security\AttackSimulation\Simulations\Item\Payload;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PayloadRequestBuilderGetRequestConfiguration 
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
     * @var PayloadRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PayloadRequestBuilderGetQueryParameters $queryParameters = null;
    
}

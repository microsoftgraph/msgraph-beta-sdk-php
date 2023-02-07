<?php

namespace Microsoft\Graph\Beta\Generated\Security\TriggerTypes;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TriggerTypesRequestBuilderGetRequestConfiguration 
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
     * @var TriggerTypesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TriggerTypesRequestBuilderGetQueryParameters $queryParameters = null;
    
}

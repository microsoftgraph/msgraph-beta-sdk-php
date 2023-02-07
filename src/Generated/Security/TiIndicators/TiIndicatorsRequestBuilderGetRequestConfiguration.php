<?php

namespace Microsoft\Graph\Beta\Generated\Security\TiIndicators;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TiIndicatorsRequestBuilderGetRequestConfiguration 
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
     * @var TiIndicatorsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TiIndicatorsRequestBuilderGetQueryParameters $queryParameters = null;
    
}

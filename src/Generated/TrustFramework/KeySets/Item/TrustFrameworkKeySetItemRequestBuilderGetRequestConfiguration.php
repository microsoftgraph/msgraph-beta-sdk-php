<?php

namespace Microsoft\Graph\Beta\Generated\TrustFramework\KeySets\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TrustFrameworkKeySetItemRequestBuilderGetRequestConfiguration 
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
     * @var TrustFrameworkKeySetItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TrustFrameworkKeySetItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}

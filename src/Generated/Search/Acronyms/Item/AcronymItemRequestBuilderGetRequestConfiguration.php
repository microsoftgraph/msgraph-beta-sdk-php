<?php

namespace Microsoft\Graph\Beta\Generated\Search\Acronyms\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AcronymItemRequestBuilderGetRequestConfiguration 
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
     * @var AcronymItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AcronymItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}

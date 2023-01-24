<?php

namespace Microsoft\Graph\Beta\Generated\Sites\Item\Pages\Item\WebParts\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WebPartItemRequestBuilderGetRequestConfiguration 
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
     * @var WebPartItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WebPartItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}

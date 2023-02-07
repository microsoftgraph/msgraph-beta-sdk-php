<?php

namespace Microsoft\Graph\Beta\Generated\FilterOperators\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class FilterOperatorSchemaItemRequestBuilderGetRequestConfiguration 
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
     * @var FilterOperatorSchemaItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?FilterOperatorSchemaItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}

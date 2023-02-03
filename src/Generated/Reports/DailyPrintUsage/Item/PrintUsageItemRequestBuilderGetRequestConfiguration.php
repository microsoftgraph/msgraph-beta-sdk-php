<?php

namespace Microsoft\Graph\Beta\Generated\Reports\DailyPrintUsage\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PrintUsageItemRequestBuilderGetRequestConfiguration 
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
     * @var PrintUsageItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PrintUsageItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}

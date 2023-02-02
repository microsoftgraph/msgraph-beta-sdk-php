<?php

namespace Microsoft\Graph\Beta\Generated\Devices\Item\Commands;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CommandsRequestBuilderGetRequestConfiguration 
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
     * @var CommandsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CommandsRequestBuilderGetQueryParameters $queryParameters = null;
    
}

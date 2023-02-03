<?php

namespace Microsoft\Graph\Beta\Generated\EscapedPrint\PrinterShares;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PrinterSharesRequestBuilderGetRequestConfiguration 
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
     * @var PrinterSharesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PrinterSharesRequestBuilderGetQueryParameters $queryParameters = null;
    
}

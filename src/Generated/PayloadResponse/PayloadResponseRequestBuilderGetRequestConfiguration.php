<?php

namespace Microsoft\Graph\Beta\Generated\PayloadResponse;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PayloadResponseRequestBuilderGetRequestConfiguration 
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
     * @var PayloadResponseRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PayloadResponseRequestBuilderGetQueryParameters $queryParameters = null;
    
}

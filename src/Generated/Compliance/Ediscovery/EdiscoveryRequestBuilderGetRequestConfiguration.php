<?php

namespace Microsoft\Graph\Beta\Generated\Compliance\Ediscovery;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class EdiscoveryRequestBuilderGetRequestConfiguration 
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
     * @var EdiscoveryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?EdiscoveryRequestBuilderGetQueryParameters $queryParameters = null;
    
}

<?php

namespace Microsoft\Graph\Beta\Generated\Identity\AuthenticationEventListeners;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AuthenticationEventListenersRequestBuilderGetRequestConfiguration 
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
     * @var AuthenticationEventListenersRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AuthenticationEventListenersRequestBuilderGetQueryParameters $queryParameters = null;
    
}

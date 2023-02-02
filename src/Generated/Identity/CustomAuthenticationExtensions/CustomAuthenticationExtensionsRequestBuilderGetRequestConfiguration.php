<?php

namespace Microsoft\Graph\Beta\Generated\Identity\CustomAuthenticationExtensions;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CustomAuthenticationExtensionsRequestBuilderGetRequestConfiguration 
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
     * @var CustomAuthenticationExtensionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CustomAuthenticationExtensionsRequestBuilderGetQueryParameters $queryParameters = null;
    
}

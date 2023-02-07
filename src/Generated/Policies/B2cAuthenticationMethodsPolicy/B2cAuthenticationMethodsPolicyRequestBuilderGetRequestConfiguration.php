<?php

namespace Microsoft\Graph\Beta\Generated\Policies\B2cAuthenticationMethodsPolicy;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class B2cAuthenticationMethodsPolicyRequestBuilderGetRequestConfiguration 
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
     * @var B2cAuthenticationMethodsPolicyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?B2cAuthenticationMethodsPolicyRequestBuilderGetQueryParameters $queryParameters = null;
    
}

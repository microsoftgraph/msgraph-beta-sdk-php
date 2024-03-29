<?php

namespace Microsoft\Graph\Beta\Generated\Policies\B2cAuthenticationMethodsPolicy;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class B2cAuthenticationMethodsPolicyRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var B2cAuthenticationMethodsPolicyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?B2cAuthenticationMethodsPolicyRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new B2cAuthenticationMethodsPolicyRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param B2cAuthenticationMethodsPolicyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?B2cAuthenticationMethodsPolicyRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new B2cAuthenticationMethodsPolicyRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return B2cAuthenticationMethodsPolicyRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): B2cAuthenticationMethodsPolicyRequestBuilderGetQueryParameters {
        return new B2cAuthenticationMethodsPolicyRequestBuilderGetQueryParameters($expand, $select);
    }

}

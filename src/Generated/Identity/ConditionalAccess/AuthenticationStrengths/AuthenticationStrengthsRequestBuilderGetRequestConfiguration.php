<?php

namespace Microsoft\Graph\Beta\Generated\Identity\ConditionalAccess\AuthenticationStrengths;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AuthenticationStrengthsRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var AuthenticationStrengthsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AuthenticationStrengthsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new authenticationStrengthsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AuthenticationStrengthsRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): AuthenticationStrengthsRequestBuilderGetQueryParameters {
        return new AuthenticationStrengthsRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new authenticationStrengthsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param AuthenticationStrengthsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AuthenticationStrengthsRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}

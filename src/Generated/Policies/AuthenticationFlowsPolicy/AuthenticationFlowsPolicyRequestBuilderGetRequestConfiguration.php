<?php

namespace Microsoft\Graph\Beta\Generated\Policies\AuthenticationFlowsPolicy;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AuthenticationFlowsPolicyRequestBuilderGetRequestConfiguration 
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
     * @var AuthenticationFlowsPolicyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AuthenticationFlowsPolicyRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new authenticationFlowsPolicyRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AuthenticationFlowsPolicyRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): AuthenticationFlowsPolicyRequestBuilderGetQueryParameters {
        return new AuthenticationFlowsPolicyRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new authenticationFlowsPolicyRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param AuthenticationFlowsPolicyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AuthenticationFlowsPolicyRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}

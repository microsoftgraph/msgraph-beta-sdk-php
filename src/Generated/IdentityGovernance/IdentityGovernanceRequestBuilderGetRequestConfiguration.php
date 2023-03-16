<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class IdentityGovernanceRequestBuilderGetRequestConfiguration 
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
     * @var IdentityGovernanceRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?IdentityGovernanceRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new identityGovernanceRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return IdentityGovernanceRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): IdentityGovernanceRequestBuilderGetQueryParameters {
        return new IdentityGovernanceRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new identityGovernanceRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param IdentityGovernanceRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?IdentityGovernanceRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}

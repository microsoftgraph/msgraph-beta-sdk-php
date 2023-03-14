<?php

namespace Microsoft\Graph\Beta\Generated\Security\Cases\EdiscoveryCases\Item\LegalHolds\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class EdiscoveryHoldPolicyItemRequestBuilderGetRequestConfiguration 
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
     * @var EdiscoveryHoldPolicyItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?EdiscoveryHoldPolicyItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new EdiscoveryHoldPolicyItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return EdiscoveryHoldPolicyItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): EdiscoveryHoldPolicyItemRequestBuilderGetQueryParameters {
        return new EdiscoveryHoldPolicyItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new EdiscoveryHoldPolicyItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param EdiscoveryHoldPolicyItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?EdiscoveryHoldPolicyItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}

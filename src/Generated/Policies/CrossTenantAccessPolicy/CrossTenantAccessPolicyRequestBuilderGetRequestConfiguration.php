<?php

namespace Microsoft\Graph\Beta\Generated\Policies\CrossTenantAccessPolicy;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CrossTenantAccessPolicyRequestBuilderGetRequestConfiguration 
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
     * @var CrossTenantAccessPolicyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CrossTenantAccessPolicyRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new crossTenantAccessPolicyRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CrossTenantAccessPolicyRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): CrossTenantAccessPolicyRequestBuilderGetQueryParameters {
        return new CrossTenantAccessPolicyRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new crossTenantAccessPolicyRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param CrossTenantAccessPolicyRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CrossTenantAccessPolicyRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}

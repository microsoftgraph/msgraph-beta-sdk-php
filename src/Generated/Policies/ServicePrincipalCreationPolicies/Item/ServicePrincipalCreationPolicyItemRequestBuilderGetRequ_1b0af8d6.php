<?php

namespace Microsoft\Graph\Beta\Generated\Policies\ServicePrincipalCreationPolicies\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: ServicePrincipalCreationPolicyItemRequestBuilderGetRequestConfiguration
*/
class ServicePrincipalCreationPolicyItemRequestBuilderGetRequ_1b0af8d6 extends BaseRequestConfiguration 
{
    /**
     * @var ServicePrincipalCreationPolicyItemRequestBuilderGetQuer_b8a89460|null $queryParameters Request query parameters
    */
    public ?ServicePrincipalCreationPolicyItemRequestBuilderGetQuer_b8a89460 $queryParameters = null;
    
    /**
     * Instantiates a new ServicePrincipalCreationPolicyItemRequestBuilderGetRequ_1b0af8d6 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ServicePrincipalCreationPolicyItemRequestBuilderGetQuer_b8a89460|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ServicePrincipalCreationPolicyItemRequestBuilderGetQuer_b8a89460 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ServicePrincipalCreationPolicyItemRequestBuilderGetQuer_b8a89460.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ServicePrincipalCreationPolicyItemRequestBuilderGetQuer_b8a89460
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ServicePrincipalCreationPolicyItemRequestBuilderGetQuer_b8a89460 {
        return new ServicePrincipalCreationPolicyItemRequestBuilderGetQuer_b8a89460($expand, $select);
    }

}

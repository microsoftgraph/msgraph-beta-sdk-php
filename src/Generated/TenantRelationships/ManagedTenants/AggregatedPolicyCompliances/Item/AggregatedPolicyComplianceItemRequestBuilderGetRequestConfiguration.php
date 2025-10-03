<?php

namespace Microsoft\\Graph\\Beta\\Generated\TenantRelationships\ManagedTenants\AggregatedPolicyCompliances\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AggregatedPolicyComplianceItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AggregatedPolicyComplianceItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AggregatedPolicyComplianceItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AggregatedPolicyComplianceItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AggregatedPolicyComplianceItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AggregatedPolicyComplianceItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AggregatedPolicyComplianceItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AggregatedPolicyComplianceItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AggregatedPolicyComplianceItemRequestBuilderGetQueryParameters {
        return new AggregatedPolicyComplianceItemRequestBuilderGetQueryParameters($expand, $select);
    }

}

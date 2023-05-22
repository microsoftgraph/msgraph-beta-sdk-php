<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ConditionalAccessPolicyCoverages\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ConditionalAccessPolicyCoverageItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ConditionalAccessPolicyCoverageItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ConditionalAccessPolicyCoverageItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ConditionalAccessPolicyCoverageItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ConditionalAccessPolicyCoverageItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ConditionalAccessPolicyCoverageItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ConditionalAccessPolicyCoverageItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ConditionalAccessPolicyCoverageItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ConditionalAccessPolicyCoverageItemRequestBuilderGetQueryParameters {
        return new ConditionalAccessPolicyCoverageItemRequestBuilderGetQueryParameters($expand, $select);
    }

}

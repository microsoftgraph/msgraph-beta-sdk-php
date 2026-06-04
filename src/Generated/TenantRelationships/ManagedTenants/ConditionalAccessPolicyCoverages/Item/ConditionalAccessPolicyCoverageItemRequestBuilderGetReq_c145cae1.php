<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ConditionalAccessPolicyCoverages\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: ConditionalAccessPolicyCoverageItemRequestBuilderGetRequestConfiguration
*/
class ConditionalAccessPolicyCoverageItemRequestBuilderGetReq_c145cae1 extends BaseRequestConfiguration 
{
    /**
     * @var ConditionalAccessPolicyCoverageItemRequestBuilderGetQue_c9036980|null $queryParameters Request query parameters
    */
    public ?ConditionalAccessPolicyCoverageItemRequestBuilderGetQue_c9036980 $queryParameters = null;
    
    /**
     * Instantiates a new ConditionalAccessPolicyCoverageItemRequestBuilderGetReq_c145cae1 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ConditionalAccessPolicyCoverageItemRequestBuilderGetQue_c9036980|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ConditionalAccessPolicyCoverageItemRequestBuilderGetQue_c9036980 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ConditionalAccessPolicyCoverageItemRequestBuilderGetQue_c9036980.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ConditionalAccessPolicyCoverageItemRequestBuilderGetQue_c9036980
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ConditionalAccessPolicyCoverageItemRequestBuilderGetQue_c9036980 {
        return new ConditionalAccessPolicyCoverageItemRequestBuilderGetQue_c9036980($expand, $select);
    }

}

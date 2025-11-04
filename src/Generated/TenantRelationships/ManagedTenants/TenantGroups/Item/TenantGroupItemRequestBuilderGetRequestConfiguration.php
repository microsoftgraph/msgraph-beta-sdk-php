<?php

namespace Microsoft\\Graph\\Beta\\Generated\TenantRelationships\ManagedTenants\TenantGroups\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TenantGroupItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var TenantGroupItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TenantGroupItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TenantGroupItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TenantGroupItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TenantGroupItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TenantGroupItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TenantGroupItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): TenantGroupItemRequestBuilderGetQueryParameters {
        return new TenantGroupItemRequestBuilderGetQueryParameters($expand, $select);
    }

}

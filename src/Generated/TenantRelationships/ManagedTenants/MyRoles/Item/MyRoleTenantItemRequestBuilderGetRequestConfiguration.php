<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\MyRoles\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MyRoleTenantItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MyRoleTenantItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MyRoleTenantItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MyRoleTenantItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MyRoleTenantItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MyRoleTenantItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MyRoleTenantItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MyRoleTenantItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MyRoleTenantItemRequestBuilderGetQueryParameters {
        return new MyRoleTenantItemRequestBuilderGetQueryParameters($expand, $select);
    }

}

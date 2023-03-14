<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\TenantsCustomizedInformation\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TenantCustomizedInformationItemRequestBuilderGetRequestConfiguration 
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
     * @var TenantCustomizedInformationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TenantCustomizedInformationItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TenantCustomizedInformationItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TenantCustomizedInformationItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): TenantCustomizedInformationItemRequestBuilderGetQueryParameters {
        return new TenantCustomizedInformationItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new TenantCustomizedInformationItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TenantCustomizedInformationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TenantCustomizedInformationItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}

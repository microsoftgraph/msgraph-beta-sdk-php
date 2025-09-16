<?php

namespace Microsoft\Graph\Beta\Generated\Policies\DeletedItems\CrossTenantSyncPolicyPartners\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CrossTenantIdentitySyncPolicyPartnerTenantItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CrossTenantIdentitySyncPolicyPartnerTenantItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CrossTenantIdentitySyncPolicyPartnerTenantItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CrossTenantIdentitySyncPolicyPartnerTenantItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CrossTenantIdentitySyncPolicyPartnerTenantItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CrossTenantIdentitySyncPolicyPartnerTenantItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CrossTenantIdentitySyncPolicyPartnerTenantItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CrossTenantIdentitySyncPolicyPartnerTenantItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CrossTenantIdentitySyncPolicyPartnerTenantItemRequestBuilderGetQueryParameters {
        return new CrossTenantIdentitySyncPolicyPartnerTenantItemRequestBuilderGetQueryParameters($expand, $select);
    }

}

<?php

namespace Microsoft\Graph\Beta\Generated\Policies\DeletedItems\CrossTenantSyncPolicyPartners\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: CrossTenantIdentitySyncPolicyPartnerTenantItemRequestBuilderGetRequestConfiguration
*/
class CrossTenantIdentitySyncPolicyPartnerTenantItemRequestBu_55e7a7f3 extends BaseRequestConfiguration 
{
    /**
     * @var CrossTenantIdentitySyncPolicyPartnerTenantItemRequestBu_5434a140|null $queryParameters Request query parameters
    */
    public ?CrossTenantIdentitySyncPolicyPartnerTenantItemRequestBu_5434a140 $queryParameters = null;
    
    /**
     * Instantiates a new CrossTenantIdentitySyncPolicyPartnerTenantItemRequestBu_55e7a7f3 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CrossTenantIdentitySyncPolicyPartnerTenantItemRequestBu_5434a140|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CrossTenantIdentitySyncPolicyPartnerTenantItemRequestBu_5434a140 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CrossTenantIdentitySyncPolicyPartnerTenantItemRequestBu_5434a140.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CrossTenantIdentitySyncPolicyPartnerTenantItemRequestBu_5434a140
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CrossTenantIdentitySyncPolicyPartnerTenantItemRequestBu_5434a140 {
        return new CrossTenantIdentitySyncPolicyPartnerTenantItemRequestBu_5434a140($expand, $select);
    }

}

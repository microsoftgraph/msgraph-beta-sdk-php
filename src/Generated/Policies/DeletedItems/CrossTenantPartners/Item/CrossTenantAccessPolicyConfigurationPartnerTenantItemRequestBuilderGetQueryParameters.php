<?php

namespace Microsoft\Graph\Beta\Generated\Policies\DeletedItems\CrossTenantPartners\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Read the properties and relationships of a policyDeletableItem object, which might be one of the following deleted policy types:- crossTenantAccessPolicyConfigurationPartner- crossTenantIdentitySyncPolicyPartner
*/
class CrossTenantAccessPolicyConfigurationPartnerTenantItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new CrossTenantAccessPolicyConfigurationPartnerTenantItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}

<?php

namespace Microsoft\Graph\Beta\Generated\Reports\ServicePrincipalSignInActivities\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get a servicePrincipalSignInActivity object that contains sign-in activity information for a service principal in an Azure Active Directory tenant. You can use a service principal as a client or resource. A service principal supports delegated or app-only authentication context. This API is available in the following national cloud deployments.
*/
class ServicePrincipalSignInActivityItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new ServicePrincipalSignInActivityItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}

<?php

namespace Microsoft\Graph\Beta\Generated\Policies\CrossTenantAccessPolicy\Partners\Item\IdentitySynchronization;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Read the user synchronization policy of a partner-specific configuration.
*/
class IdentitySynchronizationRequestBuilderGetQueryParameters 
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
    
}

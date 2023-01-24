<?php

namespace Microsoft\Graph\Beta\Generated\Security\TriggerTypes;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get triggerTypes from security
*/
class TriggerTypesRequestBuilderGetQueryParameters 
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

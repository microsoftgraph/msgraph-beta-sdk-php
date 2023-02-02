<?php

namespace Microsoft\Graph\Beta\Generated\Reports\Security;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Provides the ability to launch a realistic simulated phishing attack that organizations can learn from.
*/
class SecurityRequestBuilderGetQueryParameters 
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

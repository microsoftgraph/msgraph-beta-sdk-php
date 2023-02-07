<?php

namespace Microsoft\Graph\Beta\Generated\Teamwork\Devices\Item\Activity;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the activity status of a Microsoft Teams-enabled device. 
*/
class ActivityRequestBuilderGetQueryParameters 
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

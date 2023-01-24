<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\IntuneBrandingProfiles\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Intune branding profiles targeted to AAD groups
*/
class IntuneBrandingProfileItemRequestBuilderGetQueryParameters 
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

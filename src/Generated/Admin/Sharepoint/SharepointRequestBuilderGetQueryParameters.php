<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Sharepoint;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * A container for administrative resources to manage tenant-level settings for SharePoint and OneDrive.
*/
class SharepointRequestBuilderGetQueryParameters 
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

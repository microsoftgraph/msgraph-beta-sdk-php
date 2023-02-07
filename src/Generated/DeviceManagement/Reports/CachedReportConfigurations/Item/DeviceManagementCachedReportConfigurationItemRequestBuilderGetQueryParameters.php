<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\CachedReportConfigurations\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Entity representing the configuration of a cached report
*/
class DeviceManagementCachedReportConfigurationItemRequestBuilderGetQueryParameters 
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

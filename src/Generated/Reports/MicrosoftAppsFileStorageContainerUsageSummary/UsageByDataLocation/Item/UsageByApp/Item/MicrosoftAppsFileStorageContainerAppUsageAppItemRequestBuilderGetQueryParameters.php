<?php

namespace Microsoft\Graph\Beta\Generated\Reports\MicrosoftAppsFileStorageContainerUsageSummary\UsageByDataLocation\Item\UsageByApp\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Storage usage data broken down by application within this geographic location. Expandable using $expand=usageByApp.
*/
class MicrosoftAppsFileStorageContainerAppUsageAppItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new MicrosoftAppsFileStorageContainerAppUsageAppItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}

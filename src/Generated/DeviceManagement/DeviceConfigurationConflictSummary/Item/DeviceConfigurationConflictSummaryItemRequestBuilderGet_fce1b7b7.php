<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceConfigurationConflictSummary\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Summary of policies in conflict state for this account. Original name: DeviceConfigurationConflictSummaryItemRequestBuilderGetQueryParameters
*/
class DeviceConfigurationConflictSummaryItemRequestBuilderGet_fce1b7b7 
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
     * Instantiates a new DeviceConfigurationConflictSummaryItemRequestBuilderGet_fce1b7b7 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}

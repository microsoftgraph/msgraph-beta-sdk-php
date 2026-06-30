<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\WindowsInformationProtectionWipeActions\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Windows information protection wipe actions. Original name: WindowsInformationProtectionWipeActionItemRequestBuilderGetQueryParameters
*/
class WindowsInformationProtectionWipeActionItemRequestBuilde_03518337 
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
     * Instantiates a new WindowsInformationProtectionWipeActionItemRequestBuilde_03518337 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}

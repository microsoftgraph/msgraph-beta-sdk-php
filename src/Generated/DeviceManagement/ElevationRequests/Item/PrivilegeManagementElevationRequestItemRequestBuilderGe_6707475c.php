<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ElevationRequests\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * List of elevation requests Original name: PrivilegeManagementElevationRequestItemRequestBuilderGetQueryParameters
*/
class PrivilegeManagementElevationRequestItemRequestBuilderGe_6707475c 
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
     * Instantiates a new PrivilegeManagementElevationRequestItemRequestBuilderGe_6707475c and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}

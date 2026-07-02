<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\AssignmentFilters\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DeviceAndAppManagementAssignmentFilterItemRequestBuilderGetRequestConfiguration
*/
class DeviceAndAppManagementAssignmentFilterItemRequestBuilde_b013d164 extends BaseRequestConfiguration 
{
    /**
     * @var DeviceAndAppManagementAssignmentFilterItemRequestBuilde_82759786|null $queryParameters Request query parameters
    */
    public ?DeviceAndAppManagementAssignmentFilterItemRequestBuilde_82759786 $queryParameters = null;
    
    /**
     * Instantiates a new DeviceAndAppManagementAssignmentFilterItemRequestBuilde_b013d164 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceAndAppManagementAssignmentFilterItemRequestBuilde_82759786|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceAndAppManagementAssignmentFilterItemRequestBuilde_82759786 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceAndAppManagementAssignmentFilterItemRequestBuilde_82759786.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceAndAppManagementAssignmentFilterItemRequestBuilde_82759786
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceAndAppManagementAssignmentFilterItemRequestBuilde_82759786 {
        return new DeviceAndAppManagementAssignmentFilterItemRequestBuilde_82759786($expand, $select);
    }

}

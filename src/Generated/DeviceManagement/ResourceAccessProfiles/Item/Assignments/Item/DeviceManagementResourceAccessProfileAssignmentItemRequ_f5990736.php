<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ResourceAccessProfiles\Item\Assignments\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DeviceManagementResourceAccessProfileAssignmentItemRequestBuilderGetRequestConfiguration
*/
class DeviceManagementResourceAccessProfileAssignmentItemRequ_f5990736 extends BaseRequestConfiguration 
{
    /**
     * @var DeviceManagementResourceAccessProfileAssignmentItemRequ_078250f6|null $queryParameters Request query parameters
    */
    public ?DeviceManagementResourceAccessProfileAssignmentItemRequ_078250f6 $queryParameters = null;
    
    /**
     * Instantiates a new DeviceManagementResourceAccessProfileAssignmentItemRequ_f5990736 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceManagementResourceAccessProfileAssignmentItemRequ_078250f6|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceManagementResourceAccessProfileAssignmentItemRequ_078250f6 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceManagementResourceAccessProfileAssignmentItemRequ_078250f6.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceManagementResourceAccessProfileAssignmentItemRequ_078250f6
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceManagementResourceAccessProfileAssignmentItemRequ_078250f6 {
        return new DeviceManagementResourceAccessProfileAssignmentItemRequ_078250f6($expand, $select);
    }

}

<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\AssignmentFilters\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DeviceAndAppManagementAssignmentFilterItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DeviceAndAppManagementAssignmentFilterItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DeviceAndAppManagementAssignmentFilterItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DeviceAndAppManagementAssignmentFilterItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceAndAppManagementAssignmentFilterItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceAndAppManagementAssignmentFilterItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceAndAppManagementAssignmentFilterItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceAndAppManagementAssignmentFilterItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceAndAppManagementAssignmentFilterItemRequestBuilderGetQueryParameters {
        return new DeviceAndAppManagementAssignmentFilterItemRequestBuilderGetQueryParameters($expand, $select);
    }

}

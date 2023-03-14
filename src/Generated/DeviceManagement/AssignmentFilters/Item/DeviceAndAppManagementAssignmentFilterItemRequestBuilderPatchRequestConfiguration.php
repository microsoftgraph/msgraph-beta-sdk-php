<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\AssignmentFilters\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DeviceAndAppManagementAssignmentFilterItemRequestBuilderPatchRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * Instantiates a new DeviceAndAppManagementAssignmentFilterItemRequestBuilderPatchRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
    */
    public function __construct(?array $headers = null, ?array $options = null) {
        $this->headers = $headers;
        $this->options = $options;
    }

}

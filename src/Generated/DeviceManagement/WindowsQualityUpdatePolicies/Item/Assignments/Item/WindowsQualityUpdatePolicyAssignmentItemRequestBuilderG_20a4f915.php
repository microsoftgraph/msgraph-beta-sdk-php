<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\WindowsQualityUpdatePolicies\Item\Assignments\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: WindowsQualityUpdatePolicyAssignmentItemRequestBuilderGetRequestConfiguration
*/
class WindowsQualityUpdatePolicyAssignmentItemRequestBuilderG_20a4f915 extends BaseRequestConfiguration 
{
    /**
     * @var WindowsQualityUpdatePolicyAssignmentItemRequestBuilderG_c854c1b7|null $queryParameters Request query parameters
    */
    public ?WindowsQualityUpdatePolicyAssignmentItemRequestBuilderG_c854c1b7 $queryParameters = null;
    
    /**
     * Instantiates a new WindowsQualityUpdatePolicyAssignmentItemRequestBuilderG_20a4f915 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WindowsQualityUpdatePolicyAssignmentItemRequestBuilderG_c854c1b7|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WindowsQualityUpdatePolicyAssignmentItemRequestBuilderG_c854c1b7 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WindowsQualityUpdatePolicyAssignmentItemRequestBuilderG_c854c1b7.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return WindowsQualityUpdatePolicyAssignmentItemRequestBuilderG_c854c1b7
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): WindowsQualityUpdatePolicyAssignmentItemRequestBuilderG_c854c1b7 {
        return new WindowsQualityUpdatePolicyAssignmentItemRequestBuilderG_c854c1b7($expand, $select);
    }

}

<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\WindowsAutopilotDeploymentProfiles\Item\Assignments\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: WindowsAutopilotDeploymentProfileAssignmentItemRequestBuilderGetRequestConfiguration
*/
class WindowsAutopilotDeploymentProfileAssignmentItemRequestB_0d80473a extends BaseRequestConfiguration 
{
    /**
     * @var WindowsAutopilotDeploymentProfileAssignmentItemRequestB_57ee25c3|null $queryParameters Request query parameters
    */
    public ?WindowsAutopilotDeploymentProfileAssignmentItemRequestB_57ee25c3 $queryParameters = null;
    
    /**
     * Instantiates a new WindowsAutopilotDeploymentProfileAssignmentItemRequestB_0d80473a and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WindowsAutopilotDeploymentProfileAssignmentItemRequestB_57ee25c3|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WindowsAutopilotDeploymentProfileAssignmentItemRequestB_57ee25c3 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WindowsAutopilotDeploymentProfileAssignmentItemRequestB_57ee25c3.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return WindowsAutopilotDeploymentProfileAssignmentItemRequestB_57ee25c3
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): WindowsAutopilotDeploymentProfileAssignmentItemRequestB_57ee25c3 {
        return new WindowsAutopilotDeploymentProfileAssignmentItemRequestB_57ee25c3($expand, $select);
    }

}

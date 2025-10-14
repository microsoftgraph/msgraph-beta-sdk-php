<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceAppManagement\WdacSupplementalPolicies\Item\Assignments\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WindowsDefenderApplicationControlSupplementalPolicyAssignmentItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WindowsDefenderApplicationControlSupplementalPolicyAssignmentItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WindowsDefenderApplicationControlSupplementalPolicyAssignmentItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WindowsDefenderApplicationControlSupplementalPolicyAssignmentItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WindowsDefenderApplicationControlSupplementalPolicyAssignmentItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WindowsDefenderApplicationControlSupplementalPolicyAssignmentItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WindowsDefenderApplicationControlSupplementalPolicyAssignmentItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return WindowsDefenderApplicationControlSupplementalPolicyAssignmentItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): WindowsDefenderApplicationControlSupplementalPolicyAssignmentItemRequestBuilderGetQueryParameters {
        return new WindowsDefenderApplicationControlSupplementalPolicyAssignmentItemRequestBuilderGetQueryParameters($expand, $select);
    }

}

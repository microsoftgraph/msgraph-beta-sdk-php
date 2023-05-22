<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\WdacSupplementalPolicies\Item\DeviceStatuses\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatusItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatusItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatusItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatusItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatusItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatusItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatusItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatusItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatusItemRequestBuilderGetQueryParameters {
        return new WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatusItemRequestBuilderGetQueryParameters($expand, $select);
    }

}

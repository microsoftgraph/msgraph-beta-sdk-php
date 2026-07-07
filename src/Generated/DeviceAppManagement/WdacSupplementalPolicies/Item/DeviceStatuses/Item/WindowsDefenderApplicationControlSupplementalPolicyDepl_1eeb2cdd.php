<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\WdacSupplementalPolicies\Item\DeviceStatuses\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatusItemRequestBuilderGetRequestConfiguration
*/
class WindowsDefenderApplicationControlSupplementalPolicyDepl_1eeb2cdd extends BaseRequestConfiguration 
{
    /**
     * @var WindowsDefenderApplicationControlSupplementalPolicyDepl_3576f9a9|null $queryParameters Request query parameters
    */
    public ?WindowsDefenderApplicationControlSupplementalPolicyDepl_3576f9a9 $queryParameters = null;
    
    /**
     * Instantiates a new WindowsDefenderApplicationControlSupplementalPolicyDepl_1eeb2cdd and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WindowsDefenderApplicationControlSupplementalPolicyDepl_3576f9a9|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WindowsDefenderApplicationControlSupplementalPolicyDepl_3576f9a9 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WindowsDefenderApplicationControlSupplementalPolicyDepl_3576f9a9.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return WindowsDefenderApplicationControlSupplementalPolicyDepl_3576f9a9
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): WindowsDefenderApplicationControlSupplementalPolicyDepl_3576f9a9 {
        return new WindowsDefenderApplicationControlSupplementalPolicyDepl_3576f9a9($expand, $select);
    }

}

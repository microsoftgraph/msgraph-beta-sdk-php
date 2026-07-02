<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\WdacSupplementalPolicies\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: WindowsDefenderApplicationControlSupplementalPolicyItemRequestBuilderGetRequestConfiguration
*/
class WindowsDefenderApplicationControlSupplementalPolicyItem_8f6e012a extends BaseRequestConfiguration 
{
    /**
     * @var WindowsDefenderApplicationControlSupplementalPolicyItem_eaecc2a7|null $queryParameters Request query parameters
    */
    public ?WindowsDefenderApplicationControlSupplementalPolicyItem_eaecc2a7 $queryParameters = null;
    
    /**
     * Instantiates a new WindowsDefenderApplicationControlSupplementalPolicyItem_8f6e012a and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WindowsDefenderApplicationControlSupplementalPolicyItem_eaecc2a7|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WindowsDefenderApplicationControlSupplementalPolicyItem_eaecc2a7 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WindowsDefenderApplicationControlSupplementalPolicyItem_eaecc2a7.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return WindowsDefenderApplicationControlSupplementalPolicyItem_eaecc2a7
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): WindowsDefenderApplicationControlSupplementalPolicyItem_eaecc2a7 {
        return new WindowsDefenderApplicationControlSupplementalPolicyItem_eaecc2a7($expand, $select);
    }

}

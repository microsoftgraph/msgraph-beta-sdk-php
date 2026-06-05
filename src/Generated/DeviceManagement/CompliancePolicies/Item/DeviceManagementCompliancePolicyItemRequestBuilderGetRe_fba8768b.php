<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\CompliancePolicies\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DeviceManagementCompliancePolicyItemRequestBuilderGetRequestConfiguration
*/
class DeviceManagementCompliancePolicyItemRequestBuilderGetRe_fba8768b extends BaseRequestConfiguration 
{
    /**
     * @var DeviceManagementCompliancePolicyItemRequestBuilderGetQu_3787ada8|null $queryParameters Request query parameters
    */
    public ?DeviceManagementCompliancePolicyItemRequestBuilderGetQu_3787ada8 $queryParameters = null;
    
    /**
     * Instantiates a new DeviceManagementCompliancePolicyItemRequestBuilderGetRe_fba8768b and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceManagementCompliancePolicyItemRequestBuilderGetQu_3787ada8|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceManagementCompliancePolicyItemRequestBuilderGetQu_3787ada8 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceManagementCompliancePolicyItemRequestBuilderGetQu_3787ada8.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceManagementCompliancePolicyItemRequestBuilderGetQu_3787ada8
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceManagementCompliancePolicyItemRequestBuilderGetQu_3787ada8 {
        return new DeviceManagementCompliancePolicyItemRequestBuilderGetQu_3787ada8($expand, $select);
    }

}

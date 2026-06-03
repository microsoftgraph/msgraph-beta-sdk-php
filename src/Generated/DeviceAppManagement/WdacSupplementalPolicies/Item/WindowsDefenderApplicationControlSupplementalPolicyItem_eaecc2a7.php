<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\WdacSupplementalPolicies\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The collection of Windows Defender Application Control Supplemental Policies. Original name: WindowsDefenderApplicationControlSupplementalPolicyItemRequestBuilderGetQueryParameters
*/
class WindowsDefenderApplicationControlSupplementalPolicyItem_eaecc2a7 
{
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new WindowsDefenderApplicationControlSupplementalPolicyItem_eaecc2a7 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}

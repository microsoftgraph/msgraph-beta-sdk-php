<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\WdacSupplementalPolicies\Item\DeviceStatuses\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The list of device deployment states for this WindowsDefenderApplicationControl supplemental policy. Original name: WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatusItemRequestBuilderGetQueryParameters
*/
class WindowsDefenderApplicationControlSupplementalPolicyDepl_3576f9a9 
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
     * Instantiates a new WindowsDefenderApplicationControlSupplementalPolicyDepl_3576f9a9 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}

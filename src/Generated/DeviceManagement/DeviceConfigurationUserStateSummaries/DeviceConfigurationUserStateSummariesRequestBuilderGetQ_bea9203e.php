<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceConfigurationUserStateSummaries;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The device configuration user state summary for this account. Original name: deviceConfigurationUserStateSummariesRequestBuilderGetQueryParameters
*/
class DeviceConfigurationUserStateSummariesRequestBuilderGetQ_bea9203e 
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
     * Instantiates a new DeviceConfigurationUserStateSummariesRequestBuilderGetQ_bea9203e and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}

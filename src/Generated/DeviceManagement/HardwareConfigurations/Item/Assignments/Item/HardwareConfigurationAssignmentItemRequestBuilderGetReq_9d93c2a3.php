<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\HardwareConfigurations\Item\Assignments\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: HardwareConfigurationAssignmentItemRequestBuilderGetRequestConfiguration
*/
class HardwareConfigurationAssignmentItemRequestBuilderGetReq_9d93c2a3 extends BaseRequestConfiguration 
{
    /**
     * @var HardwareConfigurationAssignmentItemRequestBuilderGetQue_54e67699|null $queryParameters Request query parameters
    */
    public ?HardwareConfigurationAssignmentItemRequestBuilderGetQue_54e67699 $queryParameters = null;
    
    /**
     * Instantiates a new HardwareConfigurationAssignmentItemRequestBuilderGetReq_9d93c2a3 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param HardwareConfigurationAssignmentItemRequestBuilderGetQue_54e67699|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?HardwareConfigurationAssignmentItemRequestBuilderGetQue_54e67699 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new HardwareConfigurationAssignmentItemRequestBuilderGetQue_54e67699.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return HardwareConfigurationAssignmentItemRequestBuilderGetQue_54e67699
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): HardwareConfigurationAssignmentItemRequestBuilderGetQue_54e67699 {
        return new HardwareConfigurationAssignmentItemRequestBuilderGetQue_54e67699($expand, $select);
    }

}

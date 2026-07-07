<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\AutopilotEvents\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DeviceManagementAutopilotEventItemRequestBuilderGetRequestConfiguration
*/
class DeviceManagementAutopilotEventItemRequestBuilderGetRequ_5a72e96b extends BaseRequestConfiguration 
{
    /**
     * @var DeviceManagementAutopilotEventItemRequestBuilderGetQuer_5a8bd1f1|null $queryParameters Request query parameters
    */
    public ?DeviceManagementAutopilotEventItemRequestBuilderGetQuer_5a8bd1f1 $queryParameters = null;
    
    /**
     * Instantiates a new DeviceManagementAutopilotEventItemRequestBuilderGetRequ_5a72e96b and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceManagementAutopilotEventItemRequestBuilderGetQuer_5a8bd1f1|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceManagementAutopilotEventItemRequestBuilderGetQuer_5a8bd1f1 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceManagementAutopilotEventItemRequestBuilderGetQuer_5a8bd1f1.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceManagementAutopilotEventItemRequestBuilderGetQuer_5a8bd1f1
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceManagementAutopilotEventItemRequestBuilderGetQuer_5a8bd1f1 {
        return new DeviceManagementAutopilotEventItemRequestBuilderGetQuer_5a8bd1f1($expand, $select);
    }

}

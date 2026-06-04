<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DomainJoinConnectors\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DeviceManagementDomainJoinConnectorItemRequestBuilderGetRequestConfiguration
*/
class DeviceManagementDomainJoinConnectorItemRequestBuilderGe_e2c21963 extends BaseRequestConfiguration 
{
    /**
     * @var DeviceManagementDomainJoinConnectorItemRequestBuilderGe_299fa102|null $queryParameters Request query parameters
    */
    public ?DeviceManagementDomainJoinConnectorItemRequestBuilderGe_299fa102 $queryParameters = null;
    
    /**
     * Instantiates a new DeviceManagementDomainJoinConnectorItemRequestBuilderGe_e2c21963 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceManagementDomainJoinConnectorItemRequestBuilderGe_299fa102|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceManagementDomainJoinConnectorItemRequestBuilderGe_299fa102 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceManagementDomainJoinConnectorItemRequestBuilderGe_299fa102.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceManagementDomainJoinConnectorItemRequestBuilderGe_299fa102
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceManagementDomainJoinConnectorItemRequestBuilderGe_299fa102 {
        return new DeviceManagementDomainJoinConnectorItemRequestBuilderGe_299fa102($expand, $select);
    }

}

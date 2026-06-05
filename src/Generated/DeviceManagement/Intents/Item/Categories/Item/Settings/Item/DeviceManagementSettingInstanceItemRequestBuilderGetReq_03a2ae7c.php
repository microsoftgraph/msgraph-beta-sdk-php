<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\Intents\Item\Categories\Item\Settings\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DeviceManagementSettingInstanceItemRequestBuilderGetRequestConfiguration
*/
class DeviceManagementSettingInstanceItemRequestBuilderGetReq_03a2ae7c extends BaseRequestConfiguration 
{
    /**
     * @var DeviceManagementSettingInstanceItemRequestBuilderGetQue_b67db76c|null $queryParameters Request query parameters
    */
    public ?DeviceManagementSettingInstanceItemRequestBuilderGetQue_b67db76c $queryParameters = null;
    
    /**
     * Instantiates a new DeviceManagementSettingInstanceItemRequestBuilderGetReq_03a2ae7c and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceManagementSettingInstanceItemRequestBuilderGetQue_b67db76c|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceManagementSettingInstanceItemRequestBuilderGetQue_b67db76c $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceManagementSettingInstanceItemRequestBuilderGetQue_b67db76c.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceManagementSettingInstanceItemRequestBuilderGetQue_b67db76c
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceManagementSettingInstanceItemRequestBuilderGetQue_b67db76c {
        return new DeviceManagementSettingInstanceItemRequestBuilderGetQue_b67db76c($expand, $select);
    }

}

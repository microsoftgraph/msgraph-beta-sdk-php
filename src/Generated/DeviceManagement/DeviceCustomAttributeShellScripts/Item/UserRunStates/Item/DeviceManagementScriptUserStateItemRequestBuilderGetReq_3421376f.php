<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceCustomAttributeShellScripts\Item\UserRunStates\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DeviceManagementScriptUserStateItemRequestBuilderGetRequestConfiguration
*/
class DeviceManagementScriptUserStateItemRequestBuilderGetReq_3421376f extends BaseRequestConfiguration 
{
    /**
     * @var DeviceManagementScriptUserStateItemRequestBuilderGetQue_c3cf10a3|null $queryParameters Request query parameters
    */
    public ?DeviceManagementScriptUserStateItemRequestBuilderGetQue_c3cf10a3 $queryParameters = null;
    
    /**
     * Instantiates a new DeviceManagementScriptUserStateItemRequestBuilderGetReq_3421376f and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceManagementScriptUserStateItemRequestBuilderGetQue_c3cf10a3|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceManagementScriptUserStateItemRequestBuilderGetQue_c3cf10a3 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceManagementScriptUserStateItemRequestBuilderGetQue_c3cf10a3.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceManagementScriptUserStateItemRequestBuilderGetQue_c3cf10a3
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceManagementScriptUserStateItemRequestBuilderGetQue_c3cf10a3 {
        return new DeviceManagementScriptUserStateItemRequestBuilderGetQue_c3cf10a3($expand, $select);
    }

}

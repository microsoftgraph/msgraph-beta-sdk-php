<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\Categories\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DeviceManagementSettingCategoryItemRequestBuilderGetRequestConfiguration
*/
class DeviceManagementSettingCategoryItemRequestBuilderGetReq_abd51fe3 extends BaseRequestConfiguration 
{
    /**
     * @var DeviceManagementSettingCategoryItemRequestBuilderGetQue_769f9001|null $queryParameters Request query parameters
    */
    public ?DeviceManagementSettingCategoryItemRequestBuilderGetQue_769f9001 $queryParameters = null;
    
    /**
     * Instantiates a new DeviceManagementSettingCategoryItemRequestBuilderGetReq_abd51fe3 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceManagementSettingCategoryItemRequestBuilderGetQue_769f9001|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceManagementSettingCategoryItemRequestBuilderGetQue_769f9001 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceManagementSettingCategoryItemRequestBuilderGetQue_769f9001.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceManagementSettingCategoryItemRequestBuilderGetQue_769f9001
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceManagementSettingCategoryItemRequestBuilderGetQue_769f9001 {
        return new DeviceManagementSettingCategoryItemRequestBuilderGetQue_769f9001($expand, $select);
    }

}

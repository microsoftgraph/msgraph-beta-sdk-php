<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\Templates\Item\Categories\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DeviceManagementTemplateSettingCategoryItemRequestBuilderGetRequestConfiguration
*/
class DeviceManagementTemplateSettingCategoryItemRequestBuild_392bf76b extends BaseRequestConfiguration 
{
    /**
     * @var DeviceManagementTemplateSettingCategoryItemRequestBuild_7ef9d16e|null $queryParameters Request query parameters
    */
    public ?DeviceManagementTemplateSettingCategoryItemRequestBuild_7ef9d16e $queryParameters = null;
    
    /**
     * Instantiates a new DeviceManagementTemplateSettingCategoryItemRequestBuild_392bf76b and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceManagementTemplateSettingCategoryItemRequestBuild_7ef9d16e|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceManagementTemplateSettingCategoryItemRequestBuild_7ef9d16e $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceManagementTemplateSettingCategoryItemRequestBuild_7ef9d16e.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceManagementTemplateSettingCategoryItemRequestBuild_7ef9d16e
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceManagementTemplateSettingCategoryItemRequestBuild_7ef9d16e {
        return new DeviceManagementTemplateSettingCategoryItemRequestBuild_7ef9d16e($expand, $select);
    }

}

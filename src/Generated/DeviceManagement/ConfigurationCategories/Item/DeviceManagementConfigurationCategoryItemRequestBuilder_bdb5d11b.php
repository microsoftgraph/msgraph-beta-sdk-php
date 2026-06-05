<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ConfigurationCategories\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DeviceManagementConfigurationCategoryItemRequestBuilderGetRequestConfiguration
*/
class DeviceManagementConfigurationCategoryItemRequestBuilder_bdb5d11b extends BaseRequestConfiguration 
{
    /**
     * @var DeviceManagementConfigurationCategoryItemRequestBuilder_42527792|null $queryParameters Request query parameters
    */
    public ?DeviceManagementConfigurationCategoryItemRequestBuilder_42527792 $queryParameters = null;
    
    /**
     * Instantiates a new DeviceManagementConfigurationCategoryItemRequestBuilder_bdb5d11b and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceManagementConfigurationCategoryItemRequestBuilder_42527792|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceManagementConfigurationCategoryItemRequestBuilder_42527792 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceManagementConfigurationCategoryItemRequestBuilder_42527792.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceManagementConfigurationCategoryItemRequestBuilder_42527792
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceManagementConfigurationCategoryItemRequestBuilder_42527792 {
        return new DeviceManagementConfigurationCategoryItemRequestBuilder_42527792($expand, $select);
    }

}

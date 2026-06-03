<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\Intents\Item\Categories\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DeviceManagementIntentSettingCategoryItemRequestBuilderGetRequestConfiguration
*/
class DeviceManagementIntentSettingCategoryItemRequestBuilder_c8d3686e extends BaseRequestConfiguration 
{
    /**
     * @var DeviceManagementIntentSettingCategoryItemRequestBuilder_8e54d2a8|null $queryParameters Request query parameters
    */
    public ?DeviceManagementIntentSettingCategoryItemRequestBuilder_8e54d2a8 $queryParameters = null;
    
    /**
     * Instantiates a new DeviceManagementIntentSettingCategoryItemRequestBuilder_c8d3686e and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceManagementIntentSettingCategoryItemRequestBuilder_8e54d2a8|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceManagementIntentSettingCategoryItemRequestBuilder_8e54d2a8 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceManagementIntentSettingCategoryItemRequestBuilder_8e54d2a8.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceManagementIntentSettingCategoryItemRequestBuilder_8e54d2a8
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceManagementIntentSettingCategoryItemRequestBuilder_8e54d2a8 {
        return new DeviceManagementIntentSettingCategoryItemRequestBuilder_8e54d2a8($expand, $select);
    }

}

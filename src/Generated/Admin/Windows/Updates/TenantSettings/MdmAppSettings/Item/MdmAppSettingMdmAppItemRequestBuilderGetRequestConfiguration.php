<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\TenantSettings\MdmAppSettings\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MdmAppSettingMdmAppItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MdmAppSettingMdmAppItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MdmAppSettingMdmAppItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MdmAppSettingMdmAppItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MdmAppSettingMdmAppItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MdmAppSettingMdmAppItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MdmAppSettingMdmAppItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MdmAppSettingMdmAppItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MdmAppSettingMdmAppItemRequestBuilderGetQueryParameters {
        return new MdmAppSettingMdmAppItemRequestBuilderGetQueryParameters($expand, $select);
    }

}

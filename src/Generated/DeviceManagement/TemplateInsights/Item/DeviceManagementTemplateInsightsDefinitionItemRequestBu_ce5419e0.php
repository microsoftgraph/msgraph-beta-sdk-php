<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\TemplateInsights\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DeviceManagementTemplateInsightsDefinitionItemRequestBuilderGetRequestConfiguration
*/
class DeviceManagementTemplateInsightsDefinitionItemRequestBu_ce5419e0 extends BaseRequestConfiguration 
{
    /**
     * @var DeviceManagementTemplateInsightsDefinitionItemRequestBu_4726d66b|null $queryParameters Request query parameters
    */
    public ?DeviceManagementTemplateInsightsDefinitionItemRequestBu_4726d66b $queryParameters = null;
    
    /**
     * Instantiates a new DeviceManagementTemplateInsightsDefinitionItemRequestBu_ce5419e0 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceManagementTemplateInsightsDefinitionItemRequestBu_4726d66b|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceManagementTemplateInsightsDefinitionItemRequestBu_4726d66b $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceManagementTemplateInsightsDefinitionItemRequestBu_4726d66b.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceManagementTemplateInsightsDefinitionItemRequestBu_4726d66b
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceManagementTemplateInsightsDefinitionItemRequestBu_4726d66b {
        return new DeviceManagementTemplateInsightsDefinitionItemRequestBu_4726d66b($expand, $select);
    }

}

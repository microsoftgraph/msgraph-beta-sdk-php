<?php

namespace Microsoft\Graph\Beta\Generated\AppCatalogs\TeamsApps\Item\AppDefinitions\Item\DashboardCards\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: TeamsAppDashboardCardDefinitionItemRequestBuilderGetRequestConfiguration
*/
class TeamsAppDashboardCardDefinitionItemRequestBuilderGetReq_021dcbf3 extends BaseRequestConfiguration 
{
    /**
     * @var TeamsAppDashboardCardDefinitionItemRequestBuilderGetQue_d8145753|null $queryParameters Request query parameters
    */
    public ?TeamsAppDashboardCardDefinitionItemRequestBuilderGetQue_d8145753 $queryParameters = null;
    
    /**
     * Instantiates a new TeamsAppDashboardCardDefinitionItemRequestBuilderGetReq_021dcbf3 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TeamsAppDashboardCardDefinitionItemRequestBuilderGetQue_d8145753|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TeamsAppDashboardCardDefinitionItemRequestBuilderGetQue_d8145753 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TeamsAppDashboardCardDefinitionItemRequestBuilderGetQue_d8145753.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TeamsAppDashboardCardDefinitionItemRequestBuilderGetQue_d8145753
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): TeamsAppDashboardCardDefinitionItemRequestBuilderGetQue_d8145753 {
        return new TeamsAppDashboardCardDefinitionItemRequestBuilderGetQue_d8145753($expand, $select);
    }

}

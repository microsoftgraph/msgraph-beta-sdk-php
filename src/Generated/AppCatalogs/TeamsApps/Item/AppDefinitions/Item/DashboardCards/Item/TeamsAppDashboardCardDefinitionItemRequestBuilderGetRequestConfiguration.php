<?php

namespace Microsoft\\Graph\\Beta\\Generated\AppCatalogs\TeamsApps\Item\AppDefinitions\Item\DashboardCards\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TeamsAppDashboardCardDefinitionItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var TeamsAppDashboardCardDefinitionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TeamsAppDashboardCardDefinitionItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TeamsAppDashboardCardDefinitionItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TeamsAppDashboardCardDefinitionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TeamsAppDashboardCardDefinitionItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TeamsAppDashboardCardDefinitionItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TeamsAppDashboardCardDefinitionItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): TeamsAppDashboardCardDefinitionItemRequestBuilderGetQueryParameters {
        return new TeamsAppDashboardCardDefinitionItemRequestBuilderGetQueryParameters($expand, $select);
    }

}

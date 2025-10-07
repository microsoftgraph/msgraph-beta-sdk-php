<?php

namespace Microsoft\\Graph\\Beta\\Generated\Teamwork\TeamTemplates\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TeamTemplateItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var TeamTemplateItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TeamTemplateItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TeamTemplateItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TeamTemplateItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TeamTemplateItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TeamTemplateItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TeamTemplateItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): TeamTemplateItemRequestBuilderGetQueryParameters {
        return new TeamTemplateItemRequestBuilderGetQueryParameters($expand, $select);
    }

}

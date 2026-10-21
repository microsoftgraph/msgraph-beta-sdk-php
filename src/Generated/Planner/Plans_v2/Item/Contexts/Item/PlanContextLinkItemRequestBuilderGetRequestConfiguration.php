<?php

namespace Microsoft\Graph\Beta\Generated\Planner\Plans_v2\Item\Contexts\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PlanContextLinkItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PlanContextLinkItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PlanContextLinkItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PlanContextLinkItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PlanContextLinkItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PlanContextLinkItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PlanContextLinkItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PlanContextLinkItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PlanContextLinkItemRequestBuilderGetQueryParameters {
        return new PlanContextLinkItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
